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
		define(["ApiClient"], factory);
	} else if (typeof module === "object" && module.exports) {
		// CommonJS-like environments that support module.exports, like Node.
		module.exports = factory(require("../ApiClient"));
	} else {
		// Browser globals (root is window)
		if (!root.EnhancedCurrencyConversionCalculator) {
			root.EnhancedCurrencyConversionCalculator = {};
		}
		root.EnhancedCurrencyConversionCalculator.ECBConversionObject = factory(
			root.EnhancedCurrencyConversionCalculator.ApiClient
		);
	}
})(this, function (ApiClient) {
	"use strict";

	/**
	 * The ECBConversionObject model module.
	 * @module model/ECBConversionObject
	 * @version 1.0.0
	 */

	/**
	 * Constructs a new <code>ECBConversionObject</code>.
	 * @alias module:model/ECBConversionObject
	 * @class
	 */
	var exports = function () {
		var _this = this;
	};

	/**
	 * Constructs a <code>ECBConversionObject</code> from a plain JavaScript object, optionally creating a new instance.
	 * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
	 * @param {Object} data The plain JavaScript object bearing properties of interest.
	 * @param {module:model/ECBConversionObject} obj Optional instance to populate.
	 * @return {module:model/ECBConversionObject} The populated <code>ECBConversionObject</code> instance.
	 */
	exports.constructFromObject = function (data, obj) {
		if (data) {
			obj = obj || new exports();
			if (data.hasOwnProperty("ecbReferenceRate")) {
				obj["ecbReferenceRate"] = ApiClient.convertToType(
					data["ecbReferenceRate"],
					"Number"
				);
			}
			if (data.hasOwnProperty("ecbReferenceRateDate")) {
				obj["ecbReferenceRateDate"] = ApiClient.convertToType(
					data["ecbReferenceRateDate"],
					"String"
				);
			}
			if (data.hasOwnProperty("message")) {
				obj["message"] = ApiClient.convertToType(
					data["message"],
					"String"
				);
			}
			if (data.hasOwnProperty("reasonCode")) {
				obj["reasonCode"] = ApiClient.convertToType(
					data["reasonCode"],
					"String"
				);
			}
		}
		return obj;
	};

	/**
	 * Euro foreign exchange reference rates issued by the European Central Bank (ECB). When neither the transaction currency nor the cardholder billing currency is equal to Euro, a calculated reference rate is derived from the two ECB rates
	 * @member {Number} ecbReferenceRate
	 */
	exports.prototype["ecbReferenceRate"] = undefined;
	/**
	 * Date of reference rates issued by the European Central Bank (ECB).
	 * @member {String} ecbReferenceRateDate
	 */
	exports.prototype["ecbReferenceRateDate"] = undefined;
	/**
	 * User friendly message (if applicable)
	 * @member {String} message
	 */
	exports.prototype["message"] = undefined;
	/**
	 * User friendly reason code (if applicable)
	 * @member {String} reasonCode
	 */
	exports.prototype["reasonCode"] = undefined;

	return exports;
});
