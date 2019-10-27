import PropTypes from 'prop-types';

export default function NumberDisplay(props) {
  const value = props.value;
  let digits = props.digits;

  if (!digits) {
    digits = 0;
  }

  return value.toLocaleString(navigator.language, { minimumFractionDigits: digits, maximumFractionDigits: digits });
}

NumberDisplay.propTypes = {
  value: PropTypes.number.isRequired,
  digits: PropTypes.number,
};
