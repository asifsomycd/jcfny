(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/main"],{

/***/ "./resources/assets/scripts/autoload/_bootstrap.js":
/*!*********************************************************!*\
  !*** ./resources/assets/scripts/autoload/_bootstrap.js ***!
  \*********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(bootstrap__WEBPACK_IMPORTED_MODULE_0__);
// `sage preset` installed this file automatically.
// Running `sage preset` again could result in automatic deletion of this file.
// Because of this, we do not recommend editing this file.


/***/ }),

/***/ "./resources/assets/scripts/autoload/_font-awesome.js":
/*!************************************************************!*\
  !*** ./resources/assets/scripts/autoload/_font-awesome.js ***!
  \************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _fortawesome_fontawesome_svg_core__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @fortawesome/fontawesome-svg-core */ "./node_modules/@fortawesome/fontawesome-svg-core/index.es.js");
/* harmony import */ var _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @fortawesome/free-brands-svg-icons */ "./node_modules/@fortawesome/free-brands-svg-icons/index.es.js");
/* harmony import */ var _fortawesome_pro_solid_svg_icons__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @fortawesome/pro-solid-svg-icons */ "./node_modules/@fortawesome/pro-solid-svg-icons/index.es.js");
/* harmony import */ var _fortawesome_pro_regular_svg_icons__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @fortawesome/pro-regular-svg-icons */ "./node_modules/@fortawesome/pro-regular-svg-icons/index.es.js");
/* harmony import */ var _fortawesome_pro_light_svg_icons__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @fortawesome/pro-light-svg-icons */ "./node_modules/@fortawesome/pro-light-svg-icons/index.es.js");
// Font Awesome
 // Import the icons




 // Add the imported icons to the library

_fortawesome_fontawesome_svg_core__WEBPACK_IMPORTED_MODULE_0__["library"].add(_fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_1__["faFacebook"], _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_1__["faInstagram"], _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_1__["faTwitter"], _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_1__["faLinkedin"], _fortawesome_free_brands_svg_icons__WEBPACK_IMPORTED_MODULE_1__["faYoutube"], _fortawesome_pro_solid_svg_icons__WEBPACK_IMPORTED_MODULE_2__["faPlus"], _fortawesome_pro_solid_svg_icons__WEBPACK_IMPORTED_MODULE_2__["faMinus"], _fortawesome_pro_solid_svg_icons__WEBPACK_IMPORTED_MODULE_2__["faCircle"], _fortawesome_pro_solid_svg_icons__WEBPACK_IMPORTED_MODULE_2__["faSearch"], _fortawesome_pro_regular_svg_icons__WEBPACK_IMPORTED_MODULE_3__["faBars"], _fortawesome_pro_regular_svg_icons__WEBPACK_IMPORTED_MODULE_3__["faSpinnerThird"], _fortawesome_pro_regular_svg_icons__WEBPACK_IMPORTED_MODULE_3__["faArrowRight"], _fortawesome_pro_regular_svg_icons__WEBPACK_IMPORTED_MODULE_3__["faChevronRight"], _fortawesome_pro_light_svg_icons__WEBPACK_IMPORTED_MODULE_4__["faTimes"], _fortawesome_pro_light_svg_icons__WEBPACK_IMPORTED_MODULE_4__["faChevronDown"]); // tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup

_fortawesome_fontawesome_svg_core__WEBPACK_IMPORTED_MODULE_0__["dom"].watch();

/***/ }),

/***/ "./resources/assets/scripts/components/calculator.js":
/*!***********************************************************!*\
  !*** ./resources/assets/scripts/components/calculator.js ***!
  \***********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react_imask__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react-imask */ "./node_modules/react-imask/dist/react-imask.js");
/* harmony import */ var react_imask__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react_imask__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_slidedown__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-slidedown */ "./node_modules/react-slidedown/lib/slidedown.js");
/* harmony import */ var react_slidedown__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_slidedown__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _numberDisplay__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./numberDisplay */ "./resources/assets/scripts/components/numberDisplay.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _slicedToArray(arr, i) { return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _unsupportedIterableToArray(arr, i) || _nonIterableRest(); }

function _nonIterableRest() { throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _iterableToArrayLimit(arr, i) { if (typeof Symbol === "undefined" || !(Symbol.iterator in Object(arr))) return; var _arr = []; var _n = true; var _d = false; var _e = undefined; try { for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) { _arr.push(_s.value); if (i && _arr.length === i) break; } } catch (err) { _d = true; _e = err; } finally { try { if (!_n && _i["return"] != null) _i["return"](); } finally { if (_d) throw _e; } } return _arr; }

function _arrayWithHoles(arr) { if (Array.isArray(arr)) return arr; }

/**
 * Fee Calculator
 */

/* global calculatorParams */




function Calculator() {
  var _wp$element$useState = wp.element.useState({
    balance: 0,
    childrensFund: false
  }),
      _wp$element$useState2 = _slicedToArray(_wp$element$useState, 2),
      formValues = _wp$element$useState2[0],
      setFormValues = _wp$element$useState2[1];

  var _wp$element$useState3 = wp.element.useState({
    feeMonth: 0,
    feeAnnual: 0,
    returnMonth: 0,
    returnAnnual: 0,
    growth: 0,
    display: false,
    disclaimer: false
  }),
      _wp$element$useState4 = _slicedToArray(_wp$element$useState3, 2),
      formResults = _wp$element$useState4[0],
      setFormResults = _wp$element$useState4[1];

  var results = wp.element.createRef();
  var calculatorForm = wp.element.createRef();
  var calculatorFormBackfill = wp.element.createRef();
  /**
   * Calculate form on state change
   */

  wp.element.useEffect(function () {
    var newFormResults = {
      feeMonth: 0,
      feeAnnual: 0,
      returnMonth: 0,
      returnAnnual: 0,
      growth: 0,
      display: false,
      disclaimer: false
    };

    if (formValues.balance < 1) {// Don't do anything
    } else if (formValues.balance < 5000) {
      if (formValues.childrensFund) {
        newFormResults.feeAnnual = 36;
      } else {
        newFormResults.disclaimer = /*#__PURE__*/React.createElement("span", null, "JCF requires an initial contribution", /*#__PURE__*/React.createElement("br", null), "of at least $5,000 to open a new fund.");
      }
    } else if (formValues.balance < 20000) {
      newFormResults.feeAnnual = 150;
    } else if (formValues.balance < 5000000) {
      newFormResults.feeAnnual = formValues.balance * 0.0075;
    } else if (formValues.balance < 20000000) {
      var feesAnnual = (formValues.balance - 5000000) * 0.005;
      newFormResults.feeAnnual = 37500 + feesAnnual;
    } else if (formValues.balance < 40000000) {
      var _feesAnnual = (formValues.balance - 20000000) * 0.001;

      newFormResults.feeAnnual = 112500 + _feesAnnual;
    } else {
      var _feesAnnual2 = (formValues.balance - 40000000) * 0.0005;

      newFormResults.feeAnnual = 132500 + _feesAnnual2;
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

  wp.element.useEffect(function () {
    var handleResize = function handleResize() {
      var newHeight = calculatorForm.current.clientHeight;
      calculatorFormBackfill.current.setAttribute('style', "height: ".concat(newHeight, "px;"));
    };

    window.addEventListener('resize', handleResize);
    handleResize(); // Run it on first load too.

    return function () {
      return window.removeEventListener('resize', handleResize);
    };
  });
  /**
   * Balance is updated
   * Trigger state change
   */

  var handleBalanceChange = function handleBalanceChange(unmaskedValue) {
    setFormValues(_objectSpread(_objectSpread({}, formValues), {}, _defineProperty({}, 'balance', unmaskedValue)));
  };
  /**
   * Form values are updated
   * Trigger state change
   */


  var handleChildrensChange = function handleChildrensChange(event) {
    var name = event.target.name;
    var value = event.target.value;
    setFormValues(_objectSpread(_objectSpread({}, formValues), {}, _defineProperty({}, name, value === 'y' ? true : false)));
  };
  /**
   * Scroll to results
   */


  var handleCalculateClick = function handleCalculateClick(event) {
    event.preventDefault();
    results.current.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  };

  return /*#__PURE__*/React.createElement("div", {
    className: "calculator"
  }, /*#__PURE__*/React.createElement("div", {
    className: "calculator__row-1"
  }, /*#__PURE__*/React.createElement("div", {
    ref: calculatorFormBackfill,
    className: "calculator__backfill calculator__backfill--left"
  }), /*#__PURE__*/React.createElement("div", {
    className: "calculator__backfill d-none d-md-block"
  }, calculatorParams && /*#__PURE__*/React.createElement("div", {
    className: "row h-100"
  }, /*#__PURE__*/React.createElement("div", {
    className: "calculator__image d-none d-lg-block col-5 ml-auto",
    style: {
      backgroundImage: "url(".concat(calculatorParams.image, ")")
    }
  }))), /*#__PURE__*/React.createElement("div", {
    className: "container"
  }, /*#__PURE__*/React.createElement("div", {
    className: "row"
  }, /*#__PURE__*/React.createElement("div", {
    ref: calculatorForm,
    className: "calculator__form col-12 col-md-6 px-0 pr-md-5 pl-md-3 wrapper--blueberry"
  }, /*#__PURE__*/React.createElement("div", {
    className: "wrapper--blueberry px-3 px-md-0 py-0"
  }, /*#__PURE__*/React.createElement("h2", null, calculatorParams.title ? calculatorParams.title : 'Fee Calculator'), /*#__PURE__*/React.createElement("div", {
    className: "form-group"
  }, /*#__PURE__*/React.createElement("label", {
    htmlFor: "balance"
  }, /*#__PURE__*/React.createElement("strong", null, "Anticipated Fund Balance:")), /*#__PURE__*/React.createElement("div", {
    className: "input-group money"
  }, /*#__PURE__*/React.createElement("div", {
    className: "input-group-prepend"
  }, /*#__PURE__*/React.createElement("div", {
    className: "input-group-text"
  }, "$")), /*#__PURE__*/React.createElement(react_imask__WEBPACK_IMPORTED_MODULE_0__["IMaskInput"], {
    id: "balance",
    name: "balance",
    className: "form-control",
    mask: Number,
    radix: ".",
    unmask: true,
    max: 1000000000,
    thousandsSeparator: ",",
    onAccept: handleBalanceChange
  })), formResults.disclaimer && /*#__PURE__*/React.createElement("small", {
    className: "form-text text-white"
  }, formResults.disclaimer)), calculatorParams.showChildrensFund && /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("div", {
    className: "form-group"
  }, /*#__PURE__*/React.createElement("strong", null, "Is it a Children's Giving Fund or a Bar/Bat Mitzvah Fund?")), /*#__PURE__*/React.createElement("div", {
    className: "form-check"
  }, /*#__PURE__*/React.createElement("input", {
    id: "childrensFundY",
    type: "radio",
    name: "childrensFund",
    value: "y",
    className: "form-check-input",
    onChange: handleChildrensChange
  }), /*#__PURE__*/React.createElement("label", {
    htmlFor: "childrensFundY",
    className: "form-check-label"
  }, "Yes")), /*#__PURE__*/React.createElement("div", {
    className: "form-check mb-3"
  }, /*#__PURE__*/React.createElement("input", {
    id: "childrensFundN",
    type: "radio",
    name: "childrensFund",
    value: "n",
    className: "form-check-input",
    defaultChecked: true,
    onChange: handleChildrensChange
  }), /*#__PURE__*/React.createElement("label", {
    htmlFor: "childrensFundN",
    className: "form-check-label"
  }, "No"))), /*#__PURE__*/React.createElement("button", {
    type: "submit",
    className: "btn btn-outline-light",
    onClick: handleCalculateClick,
    disabled: !formResults.display
  }, "Calculate Fee"))), /*#__PURE__*/React.createElement("div", {
    ref: results,
    className: "calculator__results col-12 col-md-6"
  }, /*#__PURE__*/React.createElement("div", {
    className: "row"
  }, /*#__PURE__*/React.createElement("div", {
    className: "wrapper--white col-9 px-3 pl-md-5 pr-md-3"
  }, formResults.display && /*#__PURE__*/React.createElement("div", null, /*#__PURE__*/React.createElement("h3", null, "Estimated Fees"), /*#__PURE__*/React.createElement("div", {
    className: "text-blueberry lead"
  }, /*#__PURE__*/React.createElement("span", {
    className: "h1"
  }, /*#__PURE__*/React.createElement(_numberDisplay__WEBPACK_IMPORTED_MODULE_2__["default"], {
    value: formResults.feeMonth,
    digits: 2,
    prepend: "$"
  })), /*#__PURE__*/React.createElement("strong", {
    className: "ml-2 text-nowrap"
  }, "per month")), /*#__PURE__*/React.createElement("div", {
    className: "text-blueberry lead"
  }, /*#__PURE__*/React.createElement("strong", null, "or"), /*#__PURE__*/React.createElement("span", {
    className: "h2 ml-1"
  }, /*#__PURE__*/React.createElement(_numberDisplay__WEBPACK_IMPORTED_MODULE_2__["default"], {
    value: formResults.feeAnnual,
    prepend: "$"
  })), /*#__PURE__*/React.createElement("strong", {
    className: "ml-1 text-nowrap"
  }, "per year"))), !formResults.display && /*#__PURE__*/React.createElement("div", {
    className: "calculator__placeholder h2"
  }, calculatorParams.text))))))), /*#__PURE__*/React.createElement("div", {
    className: "calculator__row-2"
  }, /*#__PURE__*/React.createElement(react_slidedown__WEBPACK_IMPORTED_MODULE_1__["SlideDown"], {
    className: 'my-dropdown-slidedown'
  }, formResults.display && formResults.growth >= 1 ? /*#__PURE__*/React.createElement("div", {
    className: "wrapper--pale-gray"
  }, /*#__PURE__*/React.createElement("div", {
    className: "container"
  }, /*#__PURE__*/React.createElement("div", {
    className: "row"
  }, /*#__PURE__*/React.createElement("div", {
    className: "col-12 col-md-10"
  }, /*#__PURE__*/React.createElement("h2", {
    className: "mb-2"
  }, calculatorParams.results.title), /*#__PURE__*/React.createElement("h4", {
    className: "mb-4"
  }, calculatorParams.results.subtitle), /*#__PURE__*/React.createElement("div", {
    className: "columns--2 mb-5",
    dangerouslySetInnerHTML: {
      __html: calculatorParams.results.text
    }
  }))), /*#__PURE__*/React.createElement("div", {
    className: "row"
  }, /*#__PURE__*/React.createElement("div", {
    className: "col-12 col-md-5 pr-md-5"
  }, /*#__PURE__*/React.createElement("h3", {
    className: "h2"
  }, "Estimated Investment Returns:"), /*#__PURE__*/React.createElement("p", {
    className: "text-blueberry h4"
  }, /*#__PURE__*/React.createElement("span", {
    className: "text-tealish"
  }, "+"), /*#__PURE__*/React.createElement("span", {
    className: "text-tealish h2 mr-1"
  }, /*#__PURE__*/React.createElement(_numberDisplay__WEBPACK_IMPORTED_MODULE_2__["default"], {
    value: formResults.returnMonth,
    digits: 2,
    prepend: "$"
  })), "per month", /*#__PURE__*/React.createElement("br", null), "or ", /*#__PURE__*/React.createElement("span", {
    className: "text-tealish"
  }, "+"), /*#__PURE__*/React.createElement("span", {
    className: "text-tealish h2 mr-1"
  }, /*#__PURE__*/React.createElement(_numberDisplay__WEBPACK_IMPORTED_MODULE_2__["default"], {
    value: formResults.returnAnnual,
    prepend: "$"
  })), "per year"), /*#__PURE__*/React.createElement("div", {
    className: "text-sm",
    dangerouslySetInnerHTML: {
      __html: calculatorParams.results.returnsDisclaimer
    }
  })), /*#__PURE__*/React.createElement("div", {
    className: "calculator__chevron col-12 col-md-1 pt-2 text-blueberry text-center mb-3"
  }, /*#__PURE__*/React.createElement("i", {
    className: "far fa-chevron-right fa-2x"
  })), /*#__PURE__*/React.createElement("div", {
    className: "col-12 col-md-5 pl-md-5"
  }, /*#__PURE__*/React.createElement("h3", {
    className: "h2"
  }, "Net Growth of Your JCF Donor Advised Fund:"), /*#__PURE__*/React.createElement("p", {
    className: "text-blueberry h4"
  }, /*#__PURE__*/React.createElement("span", {
    className: "text-tealish"
  }, "+"), /*#__PURE__*/React.createElement("span", {
    className: "text-tealish h1 mr-1"
  }, /*#__PURE__*/React.createElement(_numberDisplay__WEBPACK_IMPORTED_MODULE_2__["default"], {
    value: formResults.growth,
    prepend: "$"
  })), /*#__PURE__*/React.createElement("span", {
    className: "text-tealish"
  }, "per year"), /*#__PURE__*/React.createElement("br", null), "in net funds for giving"), /*#__PURE__*/React.createElement("div", {
    className: "text-sm",
    dangerouslySetInnerHTML: {
      __html: calculatorParams.results.growthDisclaimer
    }
  }))))) : null)));
}
/**
 * Only if the calculator variable is set (json object from template)
 */


if (typeof calculatorParams !== 'undefined') {
  wp.element.render( /*#__PURE__*/React.createElement(Calculator, null), document.querySelector('#react-calculator'));
}

/***/ }),

/***/ "./resources/assets/scripts/components/numberDisplay.js":
/*!**************************************************************!*\
  !*** ./resources/assets/scripts/components/numberDisplay.js ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return NumberDisplay; });
/* harmony import */ var prop_types__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! prop-types */ "./node_modules/prop-types/index.js");
/* harmony import */ var prop_types__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(prop_types__WEBPACK_IMPORTED_MODULE_0__);

function NumberDisplay(props) {
  var value = props.value;
  var prepend = props.prepend || '';
  var digits = props.digits;

  if (!digits) {
    digits = 0;
  }

  return prepend + value.toLocaleString(navigator.language, {
    minimumFractionDigits: digits,
    maximumFractionDigits: digits
  });
}
NumberDisplay.propTypes = {
  value: prop_types__WEBPACK_IMPORTED_MODULE_0___default.a.number.isRequired,
  prepend: prop_types__WEBPACK_IMPORTED_MODULE_0___default.a.string,
  digits: prop_types__WEBPACK_IMPORTED_MODULE_0___default.a.number
};

/***/ }),

/***/ "./resources/assets/scripts/main.js":
/*!******************************************!*\
  !*** ./resources/assets/scripts/main.js ***!
  \******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _autoload_bootstrap__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./autoload/_bootstrap */ "./resources/assets/scripts/autoload/_bootstrap.js");
/* harmony import */ var _autoload_font_awesome__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./autoload/_font-awesome */ "./resources/assets/scripts/autoload/_font-awesome.js");
/* harmony import */ var _util_Router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./util/Router */ "./resources/assets/scripts/util/Router.js");
/* harmony import */ var _routes_common__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./routes/common */ "./resources/assets/scripts/routes/common.js");
/* harmony import */ var _routes_home__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./routes/home */ "./resources/assets/scripts/routes/home.js");
/* harmony import */ var _routes_singlePost__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./routes/singlePost */ "./resources/assets/scripts/routes/singlePost.js");
/* harmony import */ var _routes_templateApplicationForm__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./routes/templateApplicationForm */ "./resources/assets/scripts/routes/templateApplicationForm.js");
/* harmony import */ var _routes_templateCalculator__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./routes/templateCalculator */ "./resources/assets/scripts/routes/templateCalculator.js");
/* harmony import */ var _routes_templateContact__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./routes/templateContact */ "./resources/assets/scripts/routes/templateContact.js");
// import external dependencies
// import 'jquery'
// Import everything from autoload

 // import local dependencies








/** Populate Router instance with DOM routes */

var routes = new _util_Router__WEBPACK_IMPORTED_MODULE_2__["default"]({
  common: _routes_common__WEBPACK_IMPORTED_MODULE_3__["default"],
  home: _routes_home__WEBPACK_IMPORTED_MODULE_4__["default"],
  singlePost: _routes_singlePost__WEBPACK_IMPORTED_MODULE_5__["default"],
  templateApplicationForm: _routes_templateApplicationForm__WEBPACK_IMPORTED_MODULE_6__["default"],
  templateCalculator: _routes_templateCalculator__WEBPACK_IMPORTED_MODULE_7__["default"],
  templateContact: _routes_templateContact__WEBPACK_IMPORTED_MODULE_8__["default"]
}); // Load Events

jQuery(document).ready(function () {
  return routes.loadEvents();
});

/***/ }),

/***/ "./resources/assets/scripts/routes/common.js":
/*!***************************************************!*\
  !*** ./resources/assets/scripts/routes/common.js ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var _util_jquery_enllax__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../util/jquery.enllax */ "./resources/assets/scripts/util/jquery.enllax.js");
/* harmony import */ var _util_jquery_enllax__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_util_jquery_enllax__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! imagesloaded */ "./node_modules/imagesloaded/imagesloaded.js");
/* harmony import */ var imagesloaded__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(imagesloaded__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var scroll_out__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! scroll-out */ "./node_modules/scroll-out/lib/index.js");
/* harmony import */ var scroll_out__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(scroll_out__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var js_cookie__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! js-cookie */ "./node_modules/js-cookie/dist/js.cookie.js");
/* harmony import */ var js_cookie__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(js_cookie__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var countup_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! countup.js */ "./node_modules/countup.js/dist/countUp.min.js");
/* harmony import */ var _util_ios__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../util/ios */ "./resources/assets/scripts/util/ios.js");
/* harmony import */ var _util_ios__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_util_ios__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _util_pushHistory__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../util/pushHistory */ "./resources/assets/scripts/util/pushHistory.js");
function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }








imagesloaded__WEBPACK_IMPORTED_MODULE_1___default.a.makeJQueryPlugin($);
/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {
    // JavaScript to be fired on all pages

    /**
     * Attempt to automatically remove text widows from headings
     * Replaces the last space in a heading with non-breaking space
     * Add 'data-widow-skip' to any heading to skip processing
     */
    $('h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6').not('.fix-widow-skip').each(function (i, el) {
      return $(el).html(function () {
        return $(this).html().replace(/\s([^\s<]+)\s*$/, "\xA0$1");
      });
    });
    /**
     * Enllax (parallax)
     */

    $('.wrap').imagesLoaded({
      background: true
    }, function () {
      $(window).enllax();
    });
    var wrapContentEl = document.querySelector('.wrap .content');
    $(window).on('window:resize', function () {
      if ($('.background-arrows').length) {
        $('.background-arrows').css({
          /* stylelint-disable-next-line */
          right: (window.innerWidth - wrapContentEl.clientWidth) / 2,
          opacity: 1
        });
      }
    });
    /**
     * Nav
     */
    // Turn last nav item into a tag

    $('.nav-top .menu-item:not(.search-link)').last().addClass('tagged').find('a').on('click', function () {
      $(this).width($(this).width()).html('<i class="far fa-fw fa-spinner-third fa-spin"></i> Loading');
    });
  },
  finalize: function finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /**
     * Animation; elements with data-scroll
     * Count up numbers if needed
     */
    scroll_out__WEBPACK_IMPORTED_MODULE_2___default()({
      onShown: function onShown(el) {
        $(el).addClass('fadeInUp animated');

        if ($(el).hasClass('count-up')) {
          var countTargetEl = el.querySelector('.count-up-target');
          var countEnd = countTargetEl.dataset.end;
          var countDecimals = 0;

          if (countEnd < 20) {
            countDecimals = 1;
            countEnd = countEnd - 0.1;
          }

          var countThis = new countup_js__WEBPACK_IMPORTED_MODULE_4__["CountUp"](countTargetEl, countEnd, {
            startVal: 0,
            decimalPlaces: countDecimals,
            duration: 3
          });
          setTimeout(function () {
            return countThis.start(function () {
              if (countDecimals > 0) {
                countTargetEl.innerText = countEnd + 0.1;
              }

              $(el).removeClass('count-up');
            });
          }, 750);
        }
      },
      once: true,
      threshold: 0.2
    });
    /**
     * Move search link into place
     */

    $('.site-header .search-link').appendTo('#menu-top-navigation').show();
    /**
     * Sticky header and footer
     */
    // Clone header

    $('.site-header .nav-top').clone().appendTo('.sticky-header__nav-top');
    $('.site-header .nav-primary').clone().appendTo('.sticky-header__nav-primary'); // Hide just off screen

    $('.sticky-header').css({
      /* stylelint-disable-next-line */
      top: -$('.sticky-header').outerHeight()
    });
    $('.sticky-footer').css({
      /* stylelint-disable-next-line */
      bottom: -$('.sticky-footer').outerHeight()
    }); // Hide sticky-footer when footer comes into view

    scroll_out__WEBPACK_IMPORTED_MODULE_2___default()({
      onHidden: function onHidden() {
        $('.sticky-footer').addClass('in');
      },
      onShown: function onShown() {
        $('.sticky-footer').removeClass('in');
      },
      targets: '.site-footer'
    }); // Show/hide sticky-header/footer when header leaves view

    scroll_out__WEBPACK_IMPORTED_MODULE_2___default()({
      onHidden: function onHidden() {
        $('.sticky-header').addClass('in');

        if ($('.site-footer').attr('data-scroll') === 'out') {
          $('.sticky-footer').addClass('in');
        } // $( '.sticky-footer__wrap' ).height( $( '.sticky-footer' ).outerHeight() );

      },
      onShown: function onShown() {
        $('.sticky-header').removeClass('in');
        $('.sticky-footer').removeClass('in');
      },
      targets: '.site-header',
      threshold: 0.1
    }); // Mobile header (fixed)

    $(window).on('window:resize', function () {
      $('.share .position-sticky').css({
        /* stylelint-disable-next-line */
        top: $('.sticky-header').outerHeight() + 16
      });

      if (window.innerWidth <= window.jcf.breakpointXl) {
        $('body').css({
          marginTop: $('.sticky-header').height()
        });
      } else {
        $('body').css({
          marginTop: 0
        });
      }
    });
    /**
     * Mobile nav
     */
    // Find last menu item (contact us), make it a button and move to top

    $('.nav-mobile__top .menu-item').not('.search-link').last().find('a').addClass('btn btn-outline-light').insertBefore('.nav-modal .nav-mobile__top');
    $('.nav-mobile__top .menu-item:empty').remove(); // Add arrows to items with dropdowns

    $('.nav-mobile__primary .menu-item-has-children > a').append($('<div class="nav-arrow"><i class="fal fa-chevron-down"></i></div>')); // Show/hide submenus

    $('.nav-mobile__primary .menu-item-has-children > a').on('click', function (e) {
      e.preventDefault();

      if ($(this).parent().hasClass('active')) {
        $(this).next('.sub-menu').stop().slideUp();
        $(this).parent().removeClass('active');
      } else {
        $('.nav-mobile__primary .menu-item-has-children.active').removeClass('active').find('.sub-menu').stop().slideUp();
        $(this).parent().addClass('active');
        $(this).next('.sub-menu').stop().slideDown();
      }
    });
    /**
     * Modal -- Video
     */
    // set the video to src

    $('.modal--iframe-video').on('show.bs.modal', function () {
      return $('.modal--iframe-video iframe').attr('src', $('.modal--iframe-video iframe').data('src'));
    }); // on closing the modal
    // stop the video

    $('.modal--iframe-video').on('hidden.bs.modal', function () {
      return $('.modal--iframe-video iframe').attr('src', null);
    });
    /**
     * Modal -- Search
     */

    $('.modal--search').on('show.bs.modal', function () {
      // Close all other modals
      $('.modal').not($(this)).each(function () {
        $(this).modal('hide');
      });
    }); // focus input

    $('.modal--search').on('shown.bs.modal', function () {
      return $('.modal--search .search-field').trigger('focuse');
    });
    /**
     * Modal -- Popups
     */

    var howManyModals = 1;
    $('.modal--popup').each(function () {
      var popup = $(this);
      var options = popup.data('options');
      var cookieKey = "popup-".concat(options.modal_key);
      var popupCookie = js_cookie__WEBPACK_IMPORTED_MODULE_3___default.a.get(cookieKey);
      var popupData = {
        pagesViewed: 0,
        totalCount: 0,
        dismissed: false,
        actioned: false
      };
      var expiration = parseInt(options.modal_timeframe);

      if (popupCookie) {
        popupData = JSON.parse(popupCookie);
      } // Exit this whole thing if they've reached the total count


      if (popupData.totalCount >= options.modal_total_count) {
        return;
      } // Set new count


      ++popupData.pagesViewed; // Reset page views and "dismissed" if at the interval

      if (popupData.pagesViewed > options.modal_interval) {
        popupData.pagesViewed = 1;
        popupData.dismissed = false;
      } // Set new cookie data, which bumps out the expiration


      js_cookie__WEBPACK_IMPORTED_MODULE_3___default.a.set(cookieKey, JSON.stringify(_objectSpread({}, popupData)), {
        expires: expiration
      }); // Has this modal been dismissed or actioned?

      if (popupData.dismissed || popupData.actioned) {
        return;
      } // Set "show" options


      popup.on('show.bs.modal', function () {
        $('body').addClass('modal--backdrop-shaded'); // Close all other modals

        $('.modal').not(popup).each(function () {
          $(this).modal('hide');
        }); // Add "actioned" listener

        popup.find('a').on('click', function () {
          popupData.actioned = true; // Hide modal

          popup.modal('hide');
        });
      }); // Set "hidden" options

      popup.on('hidden.bs.modal', function () {
        $('body').removeClass('modal--backdrop-shaded'); // Add to the totalCount

        ++popupData.totalCount; // Set new cookie data

        js_cookie__WEBPACK_IMPORTED_MODULE_3___default.a.set(cookieKey, JSON.stringify(_objectSpread(_objectSpread({}, popupData), {}, {
          dismissed: true
        })), {
          expires: expiration
        });
      }); // Show modal if total pageviews greater than interval option, but only ONE

      if (popupData.pagesViewed == options.modal_interval && howManyModals === 1 && !popupData.dismissed) {
        // Open after the delay
        setTimeout(function () {
          popup.modal('show');
        }, options.modal_delay * 1000);
        ++howManyModals;
      }
    });
    /**
     * .collapsible pushState
     */

    $('.collapsible__trigger').on('click', function () {
      var targetHash = $(this).find('.btn').data('target'),
          $trigger = $(this).find('.btn'),
          locationHref = window.location.href;

      if (window.location.hash) {
        locationHref = locationHref.replace(window.location.hash, '');
      }

      if (typeof targetHash === 'undefined') {
        targetHash = '';
      }

      Object(_util_pushHistory__WEBPACK_IMPORTED_MODULE_6__["default"])(locationHref + targetHash, $trigger.text().trim() + ' | ' + window.jcf.siteTitle, $trigger.attr('href'));
    }); // Expand .collapsible on page load

    var $collapsibleTrigger = $('.collapsible__trigger a[href="' + window.location.hash + '"]');

    if (window.location.hash && $collapsibleTrigger.length) {
      $collapsibleTrigger.trigger('click');
    }
    /**
     * Smooth scroll to anchors
     * Fade out, scroll, fade in
     */


    $('main a[href^="#"]').not('[data-toggle="collapse"]').on('click', function (e) {
      e.preventDefault();

      if ($(this).attr('href') === '#' || $(this).attr('href') === '#1') {
        return true;
      }

      var $target = $('main').find($(this).attr('href'));

      if ($target.length > 0) {
        var targetScrollTo = $target.offset().top - 100;
        $('main').fadeTo(400, 0.001, function () {
          $('html, body').animate({
            scrollTop: targetScrollTo
          }, 1);
          $('main').fadeTo(400, 1);
        });
      } else {
        return true;
      }
    });
    /**
     * Trigger scroll and resize events
     */

    setTimeout(function () {
      return $(window).trigger('scroll').trigger('window:resize');
    }, 250);
    $(window).on('resize', function () {
      return $(window).trigger('window:resize');
    });
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/routes/home.js":
/*!*************************************************!*\
  !*** ./resources/assets/scripts/routes/home.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {// Normalize quote carousel height
function quoteCarouselNormalization() {
  var items = $('#quote-carousel .carousel-item'),
      //grab all slides
  heights = [],
      //create empty array to store height values
  tallest; //create variable to make note of the tallest slide

  if (items.length) {
    items.each(function () {
      //add heights to array
      $(this).css('min-height', '0'); //reset min-height

      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value

    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  }
}

/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {// JavaScript to be fired on the home page
  },
  finalize: function finalize() {
    // JavaScript to be fired on the home page, after the init JS
    // Normalize quote carousel height
    $(window).on('window:resize', quoteCarouselNormalization());
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/routes/singlePost.js":
/*!*******************************************************!*\
  !*** ./resources/assets/scripts/routes/singlePost.js ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {// JavaScript to be fired on the single post page
  },
  finalize: function finalize() {
    // Share links
    $('.share__handlers a').on('click', function (e) {
      e.preventDefault();
      var popupWidth = 600;
      var popupHeight = 400;
      var leftPosition = screen.width ? (screen.width - popupWidth) / 2 : 0;
      var topPosition = screen.height ? (screen.height - popupHeight) / 2 : 0;
      window.open($(this).attr('href'), 'share', 'height=' + popupHeight + ',width=' + popupWidth + ',left=' + leftPosition + ',top=' + topPosition + ',resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no');
    });
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/routes/templateApplicationForm.js":
/*!********************************************************************!*\
  !*** ./resources/assets/scripts/routes/templateApplicationForm.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var _util_urlParameters__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../util/urlParameters */ "./resources/assets/scripts/util/urlParameters.js");

var appStep = 0;
var $appForm = $('.application-form > .gform_wrapper'); // Change the form step via body class

function changeFormStep(step) {
  $('body').removeClass(function (index, className) {
    return (className.match(/(^|\s)app--step-\S+/g) || []).join(' ');
  }).addClass('app--step-' + step);
  appStep = step;

  if (appStep === 0) {
    // Move into postion
    $appForm.appendTo($('.form__step-0')); // Change next button text

    $('.form__step-0 .gform_next_button').val('Start Application'); // Hide the app

    $('.form__app').slideUp();
  } else {
    // Move into position
    $appForm.appendTo($('.form__entree')); // Change the step

    $('.progress__step--' + appStep).addClass('is-active');
    $('[class^="sidebar__step--"]').slideUp();
    $('.sidebar__step--' + appStep).slideDown(); // Mobile scroll to progress indicator

    if (window.innerWidth <= window.jcf.breakpointMd) {
      setTimeout(function () {
        var scrollOffset = $('.progress__step--' + appStep).offset();
        $('.form__progress-bar').animate({
          scrollLeft: scrollOffset.left
        }, 250);
      }, 1000);
    } // Stylize add-another fields


    $('.add-another').each(function (i, el) {
      if (!$(el).hasClass('initiated')) {
        $(el).prepend("<span class=\"add-another__button fa-stack\">\n                          <i class=\"fas fa-circle fa-stack-2x\"></i>\n                          <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>\n                          <i class=\"fas fa-minus fa-stack-1x fa-inverse d-none\"></i>\n                      </span>");
        $(el).addClass('initiated').data('toggled', false);
      }
    }); // Show the app

    $('.form__app').slideDown();
  }

  $('html, body').animate({
    scrollTop: 0
  });
}

/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {},
  finalize: function finalize() {
    // JavaScript to be fired after the init JS
    // Move form to correct initial position on page load
    // If ?dev_form_page is set, go to that step (page - 1)
    changeFormStep(typeof _util_urlParameters__WEBPACK_IMPORTED_MODULE_0__["default"].dev_form_page !== 'undefined' ? _util_urlParameters__WEBPACK_IMPORTED_MODULE_0__["default"].dev_form_page - 1 : 0); // Bind step 0 inputs; save field data for use in step 1

    $('.remember-name .name_first input').on('change', function () {
      $('.remembered-name .name_first input').val($(this).val());
    });
    $('.remember-name .name_last input').on('change', function () {
      $('.remembered-name .name_last input').val($(this).val());
    });
    $('.remember-email input').on('change', function () {
      $('.remembered-email input').val($(this).val());
    }); // Bind to when next page is loaded

    $(document).on('gform_page_loaded', function (event, form_id, current_page) {
      changeFormStep(current_page - 1); // Step 0 == page 1
    }); // Bind to when add-another is click

    $('.form__app').on('click', '.add-another__button, .add-another label', function () {
      var $parent = $(this).parent();

      if (!$parent.data('toggled')) {
        // Let's show it and set toggled to true
        $parent.find('input:first').prop('checked', true).trigger('change');
        $parent.find('label:first').text(function () {
          return $(this).text().replace('Add another', 'Remove');
        });
        $parent.find('.fa-plus').addClass('d-none');
        $parent.find('.fa-minus').removeClass('d-none');
        $parent.data('toggled', true);
      } else {
        // Let's hide it and set toggled to false
        $parent.find('input:last').prop('checked', true).trigger('change');
        $parent.find('label:first').text(function () {
          return $(this).text().replace('Remove', 'Add another');
        });
        $parent.find('.fa-plus').removeClass('d-none');
        $parent.find('.fa-minus').addClass('d-none');
        $parent.data('toggled', false);
      }
    });
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/routes/templateCalculator.js":
/*!***************************************************************!*\
  !*** ./resources/assets/scripts/routes/templateCalculator.js ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_calculator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/calculator */ "./resources/assets/scripts/components/calculator.js");

/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {},
  finalize: function finalize() {}
});

/***/ }),

/***/ "./resources/assets/scripts/routes/templateContact.js":
/*!************************************************************!*\
  !*** ./resources/assets/scripts/routes/templateContact.js ***!
  \************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {function showHideForm($form, slug) {
  if (window.innerWidth <= window.jcf.breakpointMd) {
    $form.appendTo('#mobile-form__' + slug).show();
    $('#desktop-form__' + slug + ' .gform_wrapper').detach();
  } else {
    $form.appendTo('#desktop-form__' + slug).show();
    $('#mobile-form__' + slug + ' .gform_wrapper').detach();
  }
}

/* harmony default export */ __webpack_exports__["default"] = ({
  init: function init() {// JavaScript to be fired
  },
  finalize: function finalize() {
    // JavaScript to be fired, after the init JS
    // Move forms around based on window width
    $('.main .gform_wrapper').first().wrap('<div id="desktop-form__schedule"></div>'); // const $scheduleForm = $( '#desktop-form__schedule .gform_wrapper' );

    var $emailForm = $('#desktop-form__email .gform_wrapper');
    var $infoForm = $('#desktop-form__info .gform_wrapper');
    $(window).on('window:resize', function () {
      // showHideForm( $scheduleForm, 'schedule' );
      showHideForm($emailForm, 'email');
      showHideForm($infoForm, 'info');
    });
  }
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/util/Router.js":
/*!*************************************************!*\
  !*** ./resources/assets/scripts/util/Router.js ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _camelCase__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./camelCase */ "./resources/assets/scripts/util/camelCase.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }


/**
 * DOM-based Routing
 *
 * Based on {@link http://goo.gl/EUTi53|Markup-based Unobtrusive Comprehensive DOM-ready Execution} by Paul Irish
 *
 * The routing fires all common scripts, followed by the page specific scripts.
 * Add additional events for more control over timing e.g. a finalize event
 */

var Router = /*#__PURE__*/function () {
  /**
   * Create a new Router
   * @param {Object} routes
   */
  function Router(routes) {
    _classCallCheck(this, Router);

    this.routes = routes;
  }
  /**
   * Fire Router events
   * @param {string} route DOM-based route derived from body classes (`<body class="...">`)
   * @param {string} [event] Events on the route. By default, `init` and `finalize` events are called.
   * @param {string} [arg] Any custom argument to be passed to the event.
   */


  _createClass(Router, [{
    key: "fire",
    value: function fire(route) {
      var event = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'init';
      var arg = arguments.length > 2 ? arguments[2] : undefined;
      var fire = route !== '' && this.routes[route] && typeof this.routes[route][event] === 'function';

      if (fire) {
        this.routes[route][event](arg);
      }
    }
    /**
     * Automatically load and fire Router events
     *
     * Events are fired in the following order:
     *  * common init
     *  * page-specific init
     *  * page-specific finalize
     *  * common finalize
     */

  }, {
    key: "loadEvents",
    value: function loadEvents() {
      var _this = this;

      // Fire common init JS
      this.fire('common'); // Fire page-specific init JS, and then finalize JS

      document.body.className.toLowerCase().replace(/-/g, '_').split(/\s+/).map(_camelCase__WEBPACK_IMPORTED_MODULE_0__["default"]).forEach(function (className) {
        _this.fire(className);

        _this.fire(className, 'finalize');
      }); // Fire common finalize JS

      this.fire('common', 'finalize');
    }
  }]);

  return Router;
}();

/* harmony default export */ __webpack_exports__["default"] = (Router);

/***/ }),

/***/ "./resources/assets/scripts/util/camelCase.js":
/*!****************************************************!*\
  !*** ./resources/assets/scripts/util/camelCase.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/**
 * the most terrible camelizer on the internet, guaranteed!
 * @param {string} str String that isn't camel-case, e.g., CAMeL_CaSEiS-harD
 * @return {string} String converted to camel-case, e.g., camelCaseIsHard
 */
/* harmony default export */ __webpack_exports__["default"] = (function (str) {
  return "".concat(str.charAt(0).toLowerCase()).concat(str.replace(/[\W_]/g, '|').split('|').map(function (part) {
    return "".concat(part.charAt(0).toUpperCase()).concat(part.slice(1));
  }).join('').slice(1));
});

/***/ }),

/***/ "./resources/assets/scripts/util/ios.js":
/*!**********************************************!*\
  !*** ./resources/assets/scripts/util/ios.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/**
 * iOS hack: Add an optgroup to every select in order to avoid truncating the content
 */
if (navigator.userAgent.match(/(iPad|iPhone|iPod touch);/i)) {
  var selects = document.querySelectorAll('select');

  for (var i = 0; i < selects.length; i++) {
    selects[i].appendChild(document.createElement('optgroup'));
  }
}

/***/ }),

/***/ "./resources/assets/scripts/util/jquery.enllax.js":
/*!********************************************************!*\
  !*** ./resources/assets/scripts/util/jquery.enllax.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(__webpack_provided_window_dot_jQuery, $) {/* eslint-disable */

/**
 * MODIFIED FROM SOURCE
 * Added jQuery local variable for use in webpack
 * Added some background positioning options
 *
 * jQuery.enllax.js v1.1.0
 * https://github.com/mmkjony/enllax.js
 * demo: http://mmkjony.github.io/enllax.js/
 *
 * Copyright 2015, MMK Jony
 * This content is released under the MIT license
 **/
;

(function (jQuery) {
  'use strict';
  /**
   * Added jQuery detection and setting of local variable
   */

  jQuery = jQuery || __webpack_provided_window_dot_jQuery;

  if (!jQuery) {
    return;
  } // set local variable


  $ = jQuery;

  $.fn.enllax = function (opt) {
    var elem = $('[data-enllax-ratio]');
    elem.each(function () {
      var $this = $(this);
      $this.css({// 'position': 'absolute',
        // 'left': '0',
        // 'right': '0'
      });
    });
    var winHeight = $(window).height();
    var options = $.extend({
      ratio: 0,
      type: 'background',
      //foreground
      direction: 'vertical',
      //horizontal
      offset: 0,
      align: 'center'
    }, opt);
    elem.each(function () {
      var ratio;
      var type;
      var dir;
      var offset;
      var align;
      var $this = $(this);
      var docHeight = $(document).height();
      var offsettop = $this.offset().top;
      var height = $this.outerHeight();
      var dataRat = $this.data('enllax-ratio');
      var dataType = $this.data('enllax-type');
      var dataDir = $this.data('enllax-direction');
      var dataOffset = $this.data('enllax-offset');
      var dataBkgdAlign = $this.data('enllax-background-align');

      if (dataBkgdAlign) {
        align = dataBkgdAlign;
      } else {
        align = options.align;
      }

      if (dataRat) {
        ratio = dataRat;
      } else {
        ratio = options.ratio;
      }

      if (dataType) {
        type = dataType;
      } else {
        type = options.type;
      }

      if (dataDir) {
        dir = dataDir;
      } else {
        dir = options.direction;
      }

      if (dataOffset) {
        offset = dataOffset;
      } else {
        offset = options.offset;
      }

      var bgY = Math.round(offsettop * ratio);
      var transform = Math.round((offsettop - winHeight / 2) * ratio - offset);

      if (type == 'background') {
        if (dir == 'vertical') {
          $this.css({
            'background-position': "".concat(align, " ").concat(-bgY, "px")
          });
        } else if (dir == 'horizontal') {
          $this.css({
            'background-position': "".concat(-bgY, "px ").concat(align)
          });
        }
      } else if (type == 'foreground') {
        if (dir == 'vertical') {
          $this.css({
            '-webkit-transform': 'translateY(' + transform + 'px)',
            '-moz-transform': 'translateY(' + transform + 'px)',
            transform: 'translateY(' + transform + 'px)',
            position: 'absolute',
            left: '0',
            right: '0'
          });
        } else if (dir == 'horizontal') {
          $this.css({
            '-webkit-transform': 'translateX(' + transform + 'px)',
            '-moz-transform': 'translateX(' + transform + 'px)',
            transform: 'translateX(' + transform + 'px)'
          });
        }
      }

      $(window).on('scroll', function () {
        var docHeight = $(document).height();
        var offsettop = $this.offset().top;
        var height = $this.outerHeight();
        var scrolling = $(this).scrollTop();
        bgY = Math.round((offsettop - scrolling) * ratio);
        transform = Math.round((offsettop - winHeight / 2 - scrolling) * ratio - offset);

        if (type == 'background') {
          if (dir == 'vertical') {
            $this.css({
              'background-position': "".concat(align, " ").concat(-bgY, "px")
            });
          } else if (dir == 'horizontal') {
            $this.css({
              'background-position': "".concat(-bgY, "px ").concat(align)
            });
          }
        } else if (type == 'foreground' && scrolling < docHeight) {
          if (dir == 'vertical') {
            $this.css({
              '-webkit-transform': 'translateY(' + transform + 'px)',
              '-moz-transform': 'translateY(' + transform + 'px)',
              transform: 'translateY(' + transform + 'px)',
              position: 'absolute',
              left: '0',
              right: '0'
            });
          } else if (dir == 'horizontal') {
            $this.css({
              '-webkit-transform': 'translateX(' + transform + 'px)',
              '-moz-transform': 'translateX(' + transform + 'px)',
              transform: 'translateX(' + transform + 'px)'
            });
          }
        }
      });
    });
  };
})();
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery"), __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/util/pushHistory.js":
/*!******************************************************!*\
  !*** ./resources/assets/scripts/util/pushHistory.js ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {var doPopState = true;
window.addEventListener('popstate', function (event) {
  if (event.state) {
    if (event.state.trigger) {
      doPopState = false;
      $('.collapsible__trigger a[href="' + event.state.trigger + '"]').trigger('click');
      doPopState = true;
      return false;
    }
  }
});

function pushHistory(target, title, trigger) {
  target = target || false;
  title = title || false;
  trigger = trigger || false;

  if (!target || !title || !doPopState) {
    return;
  }

  history.pushState({
    targetHref: target,
    trigger: trigger
  }, title, target); // Google Tag Manager

  if (typeof dataLayer !== 'undefined') {
    window.dataLayer.push({
      event: 'PushPageview',
      pushPageURL: window.location.href.replace(window.location.origin, ''),
      pushPageTitle: title
    });
  }

  document.title = title;
}

/* harmony default export */ __webpack_exports__["default"] = (pushHistory);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "jquery")))

/***/ }),

/***/ "./resources/assets/scripts/util/urlParameters.js":
/*!********************************************************!*\
  !*** ./resources/assets/scripts/util/urlParameters.js ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
var urlParameters;
(window.onpopstate = function () {
  var match,
      pl = /\+/g,
      // Regex for replacing addition symbol with a space
  search = /([^&=]+)=?([^&]*)/g,
      decode = function decode(s) {
    return decodeURIComponent(s.replace(pl, ' '));
  },
      query = window.location.search.substring(1);

  urlParameters = {};

  while (false == !(match = search.exec(query))) {
    urlParameters[decode(match[1])] = decode(match[2]);
  }
})();
/* harmony default export */ __webpack_exports__["default"] = (urlParameters);

/***/ }),

/***/ "./resources/assets/styles/block-editor.scss":
/*!***************************************************!*\
  !*** ./resources/assets/styles/block-editor.scss ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/styles/login.scss":
/*!********************************************!*\
  !*** ./resources/assets/styles/login.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/styles/main.scss":
/*!*******************************************!*\
  !*** ./resources/assets/styles/main.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*********************************************************************************************************************************************************************!*\
  !*** multi ./resources/assets/scripts/main.js ./resources/assets/styles/main.scss ./resources/assets/styles/login.scss ./resources/assets/styles/block-editor.scss ***!
  \*********************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/joshf/sites/jcfny/html/app/themes/philco-jcf/resources/assets/scripts/main.js */"./resources/assets/scripts/main.js");
__webpack_require__(/*! /Users/joshf/sites/jcfny/html/app/themes/philco-jcf/resources/assets/styles/main.scss */"./resources/assets/styles/main.scss");
__webpack_require__(/*! /Users/joshf/sites/jcfny/html/app/themes/philco-jcf/resources/assets/styles/login.scss */"./resources/assets/styles/login.scss");
module.exports = __webpack_require__(/*! /Users/joshf/sites/jcfny/html/app/themes/philco-jcf/resources/assets/styles/block-editor.scss */"./resources/assets/styles/block-editor.scss");


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = React;

/***/ })

},[[0,"/scripts/manifest","/scripts/vendor"]]]);