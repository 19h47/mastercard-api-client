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

(function (factory) {
	if (typeof define === "function" && define.amd) {
		// AMD. Register as an anonymous module.
		define([
			"ApiClient",
			"model/ECBConversionObject",
			"model/EcbError",
			"model/EcbMcRateIssued",
			"model/EnhancedCurrency",
			"model/EnhancedCurrencyConversionData",
			"model/EnhancedCurrencyConversionResponse",
			"model/EnhancedEcbCurrencies",
			"model/EnhancedEcbCurrencyResponse",
			"model/EnhancedMastercardCurrencies",
			"model/EnhancedMastercardCurrencyResponse",
			"model/EnhancedSettlementRateIssued",
			"model/EnhancedSettlementRateIssuedResponse",
			"model/ErrorResponse",
			"model/Errors",
			"model/MastercardConversionObject",
			"api/ConversionRateIssuedApi",
			"api/ConversionRateSummaryApi",
			"api/EcbCurrenciesApi",
			"api/MastercardCurrenciesApi",
		], factory);
	} else if (typeof module === "object" && module.exports) {
		// CommonJS-like environments that support module.exports, like Node.
		module.exports = factory(
			require("./ApiClient"),
			require("./model/ECBConversionObject"),
			require("./model/EcbError"),
			require("./model/EcbMcRateIssued"),
			require("./model/EnhancedCurrency"),
			require("./model/EnhancedCurrencyConversionData"),
			require("./model/EnhancedCurrencyConversionResponse"),
			require("./model/EnhancedEcbCurrencies"),
			require("./model/EnhancedEcbCurrencyResponse"),
			require("./model/EnhancedMastercardCurrencies"),
			require("./model/EnhancedMastercardCurrencyResponse"),
			require("./model/EnhancedSettlementRateIssued"),
			require("./model/EnhancedSettlementRateIssuedResponse"),
			require("./model/ErrorResponse"),
			require("./model/Errors"),
			require("./model/MastercardConversionObject"),
			require("./api/ConversionRateIssuedApi"),
			require("./api/ConversionRateSummaryApi"),
			require("./api/EcbCurrenciesApi"),
			require("./api/MastercardCurrenciesApi")
		);
	}
})(function (
	ApiClient,
	ECBConversionObject,
	EcbError,
	EcbMcRateIssued,
	EnhancedCurrency,
	EnhancedCurrencyConversionData,
	EnhancedCurrencyConversionResponse,
	EnhancedEcbCurrencies,
	EnhancedEcbCurrencyResponse,
	EnhancedMastercardCurrencies,
	EnhancedMastercardCurrencyResponse,
	EnhancedSettlementRateIssued,
	EnhancedSettlementRateIssuedResponse,
	ErrorResponse,
	Errors,
	MastercardConversionObject,
	ConversionRateIssuedApi,
	ConversionRateSummaryApi,
	EcbCurrenciesApi,
	MastercardCurrenciesApi
) {
	"use strict";

	/**
	 * The_Enhanced_Currency_Conversion_Calculator_is_a_subscription_based_service_that_provides_access_to_Mastercards_current_dates_currency_conversion_rates_as_well_as_historical_currency_conversion_rates__Additionally_the_API_provides_access_to_European_Central_Bank__ECB_reference_rates_that_European_Economic_Area__EEA_issuing_customer_may_require_for_the_purposes_of_compliance_with_EU_Regulation_2019_518.<br>
	 * The <code>index</code> module provides access to constructors for all the classes which comprise the public API.
	 * <p>
	 * An AMD (recommended!) or CommonJS application will generally do something equivalent to the following:
	 * <pre>
	 * var EnhancedCurrencyConversionCalculator = require('index'); // See note below*.
	 * var xxxSvc = new EnhancedCurrencyConversionCalculator.XxxApi(); // Allocate the API class we're going to use.
	 * var yyyModel = new EnhancedCurrencyConversionCalculator.Yyy(); // Construct a model instance.
	 * yyyModel.someProperty = 'someValue';
	 * ...
	 * var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
	 * ...
	 * </pre>
	 * <em>*NOTE: For a top-level AMD script, use require(['index'], function(){...})
	 * and put the application logic within the callback function.</em>
	 * </p>
	 * <p>
	 * A non-AMD browser application (discouraged) might do something like this:
	 * <pre>
	 * var xxxSvc = new EnhancedCurrencyConversionCalculator.XxxApi(); // Allocate the API class we're going to use.
	 * var yyy = new EnhancedCurrencyConversionCalculator.Yyy(); // Construct a model instance.
	 * yyyModel.someProperty = 'someValue';
	 * ...
	 * var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
	 * ...
	 * </pre>
	 * </p>
	 * @module index
	 * @version 1.0.0
	 */
	var exports = {
		/**
		 * The ApiClient constructor.
		 * @property {module:ApiClient}
		 */
		ApiClient: ApiClient,
		/**
		 * The ECBConversionObject model constructor.
		 * @property {module:model/ECBConversionObject}
		 */
		ECBConversionObject: ECBConversionObject,
		/**
		 * The EcbError model constructor.
		 * @property {module:model/EcbError}
		 */
		EcbError: EcbError,
		/**
		 * The EcbMcRateIssued model constructor.
		 * @property {module:model/EcbMcRateIssued}
		 */
		EcbMcRateIssued: EcbMcRateIssued,
		/**
		 * The EnhancedCurrency model constructor.
		 * @property {module:model/EnhancedCurrency}
		 */
		EnhancedCurrency: EnhancedCurrency,
		/**
		 * The EnhancedCurrencyConversionData model constructor.
		 * @property {module:model/EnhancedCurrencyConversionData}
		 */
		EnhancedCurrencyConversionData: EnhancedCurrencyConversionData,
		/**
		 * The EnhancedCurrencyConversionResponse model constructor.
		 * @property {module:model/EnhancedCurrencyConversionResponse}
		 */
		EnhancedCurrencyConversionResponse: EnhancedCurrencyConversionResponse,
		/**
		 * The EnhancedEcbCurrencies model constructor.
		 * @property {module:model/EnhancedEcbCurrencies}
		 */
		EnhancedEcbCurrencies: EnhancedEcbCurrencies,
		/**
		 * The EnhancedEcbCurrencyResponse model constructor.
		 * @property {module:model/EnhancedEcbCurrencyResponse}
		 */
		EnhancedEcbCurrencyResponse: EnhancedEcbCurrencyResponse,
		/**
		 * The EnhancedMastercardCurrencies model constructor.
		 * @property {module:model/EnhancedMastercardCurrencies}
		 */
		EnhancedMastercardCurrencies: EnhancedMastercardCurrencies,
		/**
		 * The EnhancedMastercardCurrencyResponse model constructor.
		 * @property {module:model/EnhancedMastercardCurrencyResponse}
		 */
		EnhancedMastercardCurrencyResponse: EnhancedMastercardCurrencyResponse,
		/**
		 * The EnhancedSettlementRateIssued model constructor.
		 * @property {module:model/EnhancedSettlementRateIssued}
		 */
		EnhancedSettlementRateIssued: EnhancedSettlementRateIssued,
		/**
		 * The EnhancedSettlementRateIssuedResponse model constructor.
		 * @property {module:model/EnhancedSettlementRateIssuedResponse}
		 */
		EnhancedSettlementRateIssuedResponse: EnhancedSettlementRateIssuedResponse,
		/**
		 * The ErrorResponse model constructor.
		 * @property {module:model/ErrorResponse}
		 */
		ErrorResponse: ErrorResponse,
		/**
		 * The Errors model constructor.
		 * @property {module:model/Errors}
		 */
		Errors: Errors,
		/**
		 * The MastercardConversionObject model constructor.
		 * @property {module:model/MastercardConversionObject}
		 */
		MastercardConversionObject: MastercardConversionObject,
		/**
		 * The ConversionRateIssuedApi service constructor.
		 * @property {module:api/ConversionRateIssuedApi}
		 */
		ConversionRateIssuedApi: ConversionRateIssuedApi,
		/**
		 * The ConversionRateSummaryApi service constructor.
		 * @property {module:api/ConversionRateSummaryApi}
		 */
		ConversionRateSummaryApi: ConversionRateSummaryApi,
		/**
		 * The EcbCurrenciesApi service constructor.
		 * @property {module:api/EcbCurrenciesApi}
		 */
		EcbCurrenciesApi: EcbCurrenciesApi,
		/**
		 * The MastercardCurrenciesApi service constructor.
		 * @property {module:api/MastercardCurrenciesApi}
		 */
		MastercardCurrenciesApi: MastercardCurrenciesApi,
	};

	return exports;
});