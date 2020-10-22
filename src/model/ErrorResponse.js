/**
 * Enhanced Currency Conversion Calculator
 * The Enhanced Currency Conversion Calculator is a subscription-based service that provides access to Mastercard's current dates currency conversion rates as well as historical currency conversion rates. Additionally, the API provides access to European Central Bank (ECB) reference rates that European Economic Area (EEA) issuing customer may require for the purposes of compliance with EU Regulation 2019/518
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apisupport@mastercard.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 *
 * OpenAPI Generator version: 4.3.1
 *
 * Do not edit the class manually.
 *
 */

(function (root, factory) {
	if (typeof define === "function" && define.amd) {
		// AMD. Register as an anonymous module.
		define(["ApiClient", "model/Errors"], factory);
	} else if (typeof module === "object" && module.exports) {
		// CommonJS-like environments that support module.exports, like Node.
		module.exports = factory(require("../ApiClient"), require("./Errors"));
	} else {
		// Browser globals (root is window)
		if (!root.EnhancedCurrencyConversionCalculator) {
			root.EnhancedCurrencyConversionCalculator = {};
		}
		root.EnhancedCurrencyConversionCalculator.ErrorResponse = factory(
			root.EnhancedCurrencyConversionCalculator.ApiClient,
			root.EnhancedCurrencyConversionCalculator.Errors
		);
	}
})(this, function (ApiClient, Errors) {
	"use strict";

	/**
	 * The ErrorResponse model module.
	 * @module model/ErrorResponse
	 * @version 1.0.0
	 */

	/**
	 * Constructs a new <code>ErrorResponse</code>.
	 * @alias module:model/ErrorResponse
	 * @class
	 * @param errors {module:model/Errors}
	 */
	var exports = function (errors) {
		var _this = this;

		_this["Errors"] = errors;
	};

	/**
	 * Constructs a <code>ErrorResponse</code> from a plain JavaScript object, optionally creating a new instance.
	 * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
	 * @param {Object} data The plain JavaScript object bearing properties of interest.
	 * @param {module:model/ErrorResponse} obj Optional instance to populate.
	 * @return {module:model/ErrorResponse} The populated <code>ErrorResponse</code> instance.
	 */
	exports.constructFromObject = function (data, obj) {
		if (data) {
			obj = obj || new exports();
			if (data.hasOwnProperty("Errors")) {
				obj["Errors"] = Errors.constructFromObject(data["Errors"]);
			}
		}
		return obj;
	};

	/**
	 * @member {module:model/Errors} Errors
	 */
	exports.prototype["Errors"] = undefined;

	return exports;
});