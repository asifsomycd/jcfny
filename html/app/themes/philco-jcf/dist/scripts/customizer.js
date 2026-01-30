(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/scripts/customizer"],{

/***/ "./resources/assets/scripts/customizer.js":
/*!************************************************!*\
  !*** ./resources/assets/scripts/customizer.js ***!
  \************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ "jquery");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);

wp.customize('blogname', function (value) {
  value.bind(function (to) {
    return jquery__WEBPACK_IMPORTED_MODULE_0___default()('.brand').text(to);
  });
});

/***/ }),

/***/ 2:
/*!******************************************************!*\
  !*** multi ./resources/assets/scripts/customizer.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/joshf/sites/jcfny/html/app/themes/philco-jcf/resources/assets/scripts/customizer.js */"./resources/assets/scripts/customizer.js");


/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = jQuery;

/***/ })

},[[2,"/scripts/manifest"]]]);