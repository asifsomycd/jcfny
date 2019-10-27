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
    childrensFund: true,
  });

  const [formResults, setFormResults] = wp.element.useState({
    feeMonth: 0,
    feeAnnual: 0,
    returnMonth: 0,
    returnAnnual: 0,
    growth: 0,
    display: false,
  });

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
    };

    if (formValues.balance < 5000 && formValues.childrensFund) {
      newFormResults.feeAnnual = 36;
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

    newFormResults.feeMonth = newFormResults.feeAnnual / 12;
    newFormResults.returnAnnual = formValues.balance * calculatorParams.multiplier;
    newFormResults.returnMonth = newFormResults.returnAnnual / 12;
    newFormResults.growth = newFormResults.returnAnnual - newFormResults.feeAnnual;
    newFormResults.display = newFormResults.growth > 0;

    setFormResults(newFormResults);
  }, [formValues]);

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

  return (
    <div className='calculator'>
      <div className='calculator__row-1'>
        <div className='calculator__backfill calculator__backfill--left' />
        <div className='calculator__backfill' />
        <div className='container'>
          <div className='row'>
            <div className='col-12 col-md-6 pr-md-5'>
              <div className='wrapper--blueberry'>
                <h2>{calculatorParams.title ? calculatorParams.title : 'Fee Calculator'}</h2>
                <div className='form-group'>
                  <label htmlFor='balance'>
                    <strong>Anticipated total balance for your fund:</strong>
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
                </div>
                <div className='form-group'>
                  <strong>Is it a Children&apos;s Giving Fund or a Bar/Bat Mitzvah Fund?</strong>
                </div>
                <div className='form-check'>
                  <input
                    id='childrensFundY'
                    type='radio'
                    name='childrensFund'
                    value='y'
                    defaultChecked
                    className='form-check-input'
                    onChange={handleChildrensChange}
                  />
                  <label htmlFor='childrensFundY' className='form-check-label'>
                    Yes
                  </label>
                </div>
                <div className='form-check'>
                  <input id='childrensFundN' type='radio' name='childrensFund' value='n' className='form-check-input' onChange={handleChildrensChange} />
                  <label htmlFor='childrensFundN' className='form-check-label'>
                    No
                  </label>
                </div>
                {/* <button type='submit' className='btn btn-outline-light'>
              Calculate Fee
            </button> */}
              </div>
            </div>
            <div className='col-12 col-md-6'>
              <div className='row'>
                <div className='wrapper--white col-7 pl-md-5'>
                  {formResults.display && (
                    <div>
                      <h3>Estimated Fees</h3>
                      <div className='text-blueberry lead'>
                        <span className='h1'>
                          $<NumberDisplay value={formResults.feeMonth} digits={2} />
                        </span>
                        <strong className='ml-2'>per month</strong>
                      </div>
                      <div className='text-blueberry lead'>
                        <strong>or</strong>
                        <span className='h2 ml-1'>
                          $<NumberDisplay value={formResults.feeAnnual} />
                        </span>
                        <strong className='ml-1'>per year</strong>
                      </div>
                    </div>
                  )}
                  {!formResults.display && <div className='calculator__placeholder h2'>{calculatorParams.text}</div>}
                </div>
                {calculatorParams.image && <div className='calculator__image col-5' style={{ backgroundImage: '`url(${calculatorParams.image})`' }}></div>}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div className='calculator__row-2'>
        <SlideDown className={'my-dropdown-slidedown'}>
          {formResults.display ? (
            <div>
              <h2>{calculatorParams.results.title}</h2>
              <h3>{calculatorParams.subtitle}</h3>
              <div dangerouslySetInnerHTML={{ __html: calculatorParams.results.text }} />

              <div className='row'>
                <div className='col-12 col-md-12 pr-md-5'>
                  <p>
                    Returns $<NumberDisplay value={formResults.returnMonth} digits={2} /> per month / $<NumberDisplay value={formResults.returnAnnual} /> per
                    year
                  </p>
                  <div dangerouslySetInnerHTML={{ __html: calculatorParams.results.returnsDisclaimer }} />
                </div>
                <div className='col-12 col-md-12 pl-md-5'>
                  <p>
                    Growth $<NumberDisplay value={formResults.growth} /> per year
                  </p>
                  <div dangerouslySetInnerHTML={{ __html: calculatorParams.results.growthDisclaimer }} />
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
