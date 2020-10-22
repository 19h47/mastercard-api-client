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
		define(["ApiClient", "model/EnhancedCurrencyConversionData"], factory);
	} else if (typeof module === "object" && module.exports) {
		// CommonJS-like environments that support module.exports, like Node.
		module.exports = factory(
			require("../ApiClient"),
			require("./EnhancedCurrencyConversionData")
		);
	} else {
		// Browser globals (root is window)
		if (!root.EnhancedCurrencyConversionCalculator) {
			root.EnhancedCurrencyConversionCalculator = {};
		}
		root.EnhancedCurrencyConversionCalculator.EnhancedCurrencyConversionResponse = factory(
			root.EnhancedCurrencyConversionCalculator.ApiClient,
			root.EnhancedCurrencyConversionCalculator
				.EnhancedCurrencyConversionData
		);
	}
})(this, function (ApiClient, EnhancedCurrencyConversionData) {
	"use strict";

	/**
	 * The EnhancedCurrencyConversionResponse model module.
	 * @module model/EnhancedCurrencyConversionResponse
	 * @version 1.0.0
	 */

	/**
	 * Constructs a new <code>EnhancedCurrencyConversionResponse</code>.
	 * @alias module:model/EnhancedCurrencyConversionResponse
	 * @class
	 */
	var exports = function () {
		var _this = this;
	};

	/**
	 * Constructs a <code>EnhancedCurrencyConversionResponse</code> from a plain JavaScript object, optionally creating a new instance.
	 * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
	 * @param {Object} data The plain JavaScript object bearing properties of interest.
	 * @param {module:model/EnhancedCurrencyConversionResponse} obj Optional instance to populate.
	 * @return {module:model/EnhancedCurrencyConversionResponse} The populated <code>EnhancedCurrencyConversionResponse</code> instance.
	 */
	exports.constructFromObject = function (data, obj) {
		if (data) {
			obj = obj || new exports();
			if (data.hasOwnProperty("data")) {
				obj[
					"data"
				] = EnhancedCurrencyConversionData.constructFromObject(
					data["data"]
				);
			}
			if (data.hasOwnProperty("description")) {
				obj["description"] = ApiClient.convertToType(
					data["description"],
					"String"
				);
			}
			if (data.hasOwnProperty("name")) {
				obj["name"] = ApiClient.convertToType(data["name"], "String");
			}
			if (data.hasOwnProperty("requestDate")) {
				obj["requestDate"] = ApiClient.convertToType(
					data["requestDate"],
					"String"
				);
			}
		}
		return obj;
	};

	/**
	 * @member {module:model/EnhancedCurrencyConversionData} data
	 */
	exports.prototype["data"] = undefined;
	/**
	 * The description of the API being called
	 * @member {String} description
	 */
	exports.prototype["description"] = undefined;
	/**
	 * The name of the service being requested
	 * @member {String} name
	 */
	exports.prototype["name"] = undefined;
	/**
	 * The date and time the API is being called in GMT
	 * @member {String} requestDate
	 */
	exports.prototype["requestDate"] = undefined;

	return exports;
});
