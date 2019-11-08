/**
 * Fee Calculator
 */
/* global calculatorParams */
import { IMaskInput } from 'react-imask';
import { SlideDown } from 'react-slidedown';
import NumberDisplay from './numberDisplay';

function Calculator() {
  const [formValues, setFormValues] = wp.element.useState({
    balance: 0,
    childrensFund: false,
  });

  const [formResults, setFormResults] = wp.element.useState({
    feeMonth: 0,
    feeAnnual: 0,
    returnMonth: 0,
    returnAnnual: 0,
    growth: 0,
    display: false,
    disclaimer: false,
  });

  const results = wp.element.createRef();
  const calculatorForm = wp.element.createRef();
  const calculatorFormBackfill = wp.element.createRef();

  /**
   * Calculate form on state change
   */
  wp.element.useEffect(() => {
    let newFormResults = {
      feeMonth: 0,
      feeAnnual: 0,
      returnMonth: 0,
      returnAnnual: 0,
      growth: 0,
      display: false,
      disclaimer: false,
    };

    if (formValues.balance < 1) {
      // Don't do anything
    } else if (formValues.balance < 5000) {
      if (formValues.childrensFund) {
        newFormResults.feeAnnual = 36;
      } else {
        newFormResults.disclaimer = (
          <span>
            JCF requires an initial contribution
            <br />
            of at least $5,000 to open a new fund.
          </span>
        );
      }
    } else if (formValues.balance < 20000) {
      newFormResults.feeAnnual = 150;
    } else if (formValues.balance < 5000000) {
      newFormResults.feeAnnual = formValues.balance * 0.0075;
    } else if (formValues.balance < 20000000) {
      let feesAnnual = (formValues.balance - 5000000) * 0.005;
      newFormResults.feeAnnual = 37500 + feesAnnual;
    } else if (formValues.balance < 40000000) {
      let feesAnnual = (formValues.balance - 20000000) * 0.001;
      newFormResults.feeAnnual = 112500 + feesAnnual;
    } else {
      let feesAnnual = (formValues.balance - 40000000) * 0.0005;
      newFormResults.feeAnnual = 132500 + feesAnnual;
    }

    if (!newFormResults.disclaimer && formValues.balance) {
      newFormResults.feeMonth = newFormResults.feeAnnual / 12;
      newFormResults.returnAnnual = formValues.balance * calculatorParams.multiplier;
      newFormResults.returnMonth = newFormResults.returnAnnual / 12;
      newFormResults.growth = newFormResults.returnAnnual - newFormResults.feeAnnual;
      newFormResults.display = true;
    }

    setFormResults(newFormResults);
  }, [formValues]);

  /**
   * Adjust height of blueberry background behind the form
   */
  wp.element.useEffect(() => {
    const handleResize = () => {
      const newHeight = calculatorForm.current.clientHeight;
      calculatorFormBackfill.current.setAttribute('style', `height: ${newHeight}px;`);
    };

    window.addEventListener('resize', handleResize);
    handleResize(); // Run it on first load too.

    return () => window.removeEventListener('resize', handleResize);
  });

  /**
   * Balance is updated
   * Trigger state change
   */
  const handleBalanceChange = unmaskedValue => {
    setFormValues({
      ...formValues,
      ['balance']: unmaskedValue,
    });
  };

  /**
   * Form values are updated
   * Trigger state change
   */
  const handleChildrensChange = event => {
    const name = event.target.name;
    let value = event.target.value;

    setFormValues({
      ...formValues,
      [name]: value === 'y' ? true : false,
    });
  };

  /**
   * Scroll to results
   */
  const handleCalculateClick = event => {
    event.preventDefault();
    results.current.scrollIntoView({
      behavior: 'smooth',
      block: 'start',
    });
  };

  return (
    <div className='calculator'>
      <div className='calculator__row-1'>
        <div ref={calculatorFormBackfill} className='calculator__backfill calculator__backfill--left' />
        <div className='calculator__backfill d-none d-md-block'>
          {calculatorParams && (
            <div className='row h-100'>
              <div className='calculator__image d-none d-lg-block col-5 ml-auto' style={{ backgroundImage: `url(${calculatorParams.image})` }} />
            </div>
          )}
        </div>
        <div className='container'>
          <div className='row'>
            <div ref={calculatorForm} className='calculator__form col-12 col-md-6 px-0 pr-md-5 pl-md-3 wrapper--blueberry'>
              <div className='wrapper--blueberry px-3 px-md-0 py-0'>
                <h2>{calculatorParams.title ? calculatorParams.title : 'Fee Calculator'}</h2>
                <div className='form-group'>
                  <label htmlFor='balance'>
                    <strong>Anticipated Fund Balance:</strong>
                  </label>
                  <div className='input-group money'>
                    <div className='input-group-prepend'>
                      <div className='input-group-text'>$</div>
                    </div>
                    <IMaskInput
                      id='balance'
                      name='balance'
                      className='form-control'
                      mask={Number}
                      radix='.'
                      unmask={true}
                      max={1000000000}
                      thousandsSeparator=','
                      onAccept={handleBalanceChange}
                    />
                  </div>
                  {formResults.disclaimer && <small className='form-text text-white'>{formResults.disclaimer}</small>}
                </div>
                {calculatorParams.showChildrensFund && (
                  <div>
                    <div className='form-group'>
                      <strong>Is it a Children&apos;s Giving Fund or a Bar/Bat Mitzvah Fund?</strong>
                    </div>
                    <div className='form-check'>
                      <input
                        id='childrensFundY'
                        type='radio'
                        name='childrensFund'
                        value='y'
                        className='form-check-input'
                        onChange={handleChildrensChange}
                      />
                      <label htmlFor='childrensFundY' className='form-check-label'>
                        Yes
                      </label>
                    </div>
                    <div className='form-check mb-3'>
                      <input id='childrensFundN' type='radio' name='childrensFund' value='n' className='form-check-input' defaultChecked onChange={handleChildrensChange} />
                      <label htmlFor='childrensFundN' className='form-check-label'>
                        No
                      </label>
                    </div>
                  </div>
                )}
                <button type='submit' className='btn btn-outline-light' onClick={handleCalculateClick} disabled={!formResults.display}>
                  Calculate Fee
                </button>
              </div>
            </div>
            <div ref={results} className='calculator__results col-12 col-md-6'>
              <div className='row'>
                <div className='wrapper--white col-9 px-3 pl-md-5 pr-md-3'>
                  {formResults.display && (
                    <div>
                      <h3>Estimated Fees</h3>
                      <div className='text-blueberry lead'>
                        <span className='h1'>
                          <NumberDisplay value={formResults.feeMonth} digits={2} prepend='$' />
                        </span>
                        <strong className='ml-2 text-nowrap'>per month</strong>
                      </div>
                      <div className='text-blueberry lead'>
                        <strong>or</strong>
                        <span className='h2 ml-1'>
                          <NumberDisplay value={formResults.feeAnnual} prepend='$' />
                        </span>
                        <strong className='ml-1 text-nowrap'>per year</strong>
                      </div>
                    </div>
                  )}
                  {!formResults.display && <div className='calculator__placeholder h2'>{calculatorParams.text}</div>}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className='calculator__row-2'>
        <SlideDown className={'my-dropdown-slidedown'}>
          {formResults.display && formResults.growth > 0 ? (
            <div className='wrapper--pale-gray'>
              <div className='container'>
                <div className='row'>
                  <div className='col-12 col-md-10'>
                    <h2 className='mb-2'>{calculatorParams.results.title}</h2>
                    <h4 className='mb-4'>{calculatorParams.results.subtitle}</h4>
                    <div className='columns--2 mb-5' dangerouslySetInnerHTML={{ __html: calculatorParams.results.text }} />
                  </div>
                </div>

                <div className='row'>
                  <div className='col-12 col-md-5 pr-md-5'>
                    <h3 className='h2'>Estimated Investment Returns:</h3>
                    <p className='text-blueberry h4'>
                      <span className='text-tealish'>+</span>
                      <span className='text-tealish h2 mr-1'>
                        <NumberDisplay value={formResults.returnMonth} digits={2} prepend='$' />
                      </span>
                      per month
                      <br />
                      or <span className='text-tealish'>+</span>
                      <span className='text-tealish h2 mr-1'>
                        <NumberDisplay value={formResults.returnAnnual} prepend='$' />
                      </span>
                      per year
                    </p>
                    <div className='text-sm' dangerouslySetInnerHTML={{ __html: calculatorParams.results.returnsDisclaimer }} />
                  </div>
                  <div className='calculator__chevron col-12 col-md-1 pt-2 text-blueberry text-center mb-3'>
                    <i className='far fa-chevron-right fa-2x'></i>
                  </div>
                  <div className='col-12 col-md-5 pl-md-5'>
                    <h3 className='h2'>Net Growth of Your JCF Donor Advised Fund:</h3>
                    <p className='text-blueberry h4'>
                      <span className='text-tealish'>+</span>
                      <span className='text-tealish h1 mr-1'>
                        <NumberDisplay value={formResults.growth} prepend='$' />
                      </span>
                      <span className='text-tealish'>per year</span>
                      <br />
                      in net funds for giving
                    </p>
                    <div className='text-sm' dangerouslySetInnerHTML={{ __html: calculatorParams.results.growthDisclaimer }} />
                  </div>
                </div>
              </div>
            </div>
          ) : null}
        </SlideDown>
      </div>
    </div>
  );
}

/**
 * Only if the calculator variable is set (json object from template)
 */
if (typeof calculatorParams !== 'undefined') {
  wp.element.render(<Calculator />, document.querySelector('#react-calculator'));
}
