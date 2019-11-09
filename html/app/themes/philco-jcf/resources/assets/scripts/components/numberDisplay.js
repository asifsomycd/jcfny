import PropTypes from 'prop-types';

export default function NumberDisplay(props) {
  const value = props.value;
  const prepend = props.prepend || '';
  let digits = props.digits;

  if (!digits) {
    digits = 0;
  }

  return prepend + value.toLocaleString(navigator.language, { minimumFractionDigits: digits, maximumFractionDigits: digits });
}

NumberDisplay.propTypes = {
  value: PropTypes.number.isRequired,
  prepend: PropTypes.string,
  digits: PropTypes.number,
};
