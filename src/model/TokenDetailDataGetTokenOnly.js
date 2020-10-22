/**
 * MDES for Merchants
 * The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)
 *
 * The version of the OpenAPI document: 1.2.10
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
		if (!root.MdesForMerchants) {
			root.MdesForMerchants = {};
		}
		root.MdesForMerchants.TokenDetailDataGetTokenOnly = factory(
			root.MdesForMerchants.ApiClient
		);
	}
})(this, function (ApiClient) {
	"use strict";

	/**
	 * The TokenDetailDataGetTokenOnly model module.
	 * @module model/TokenDetailDataGetTokenOnly
	 * @version 1.2.10
	 */

	/**
	 * Constructs a new <code>TokenDetailDataGetTokenOnly</code>.
	 * @alias module:model/TokenDetailDataGetTokenOnly
	 * @class
	 */
	var exports = function () {
		var _this = this;
	};

	/**
	 * Constructs a <code>TokenDetailDataGetTokenOnly</code> from a plain JavaScript object, optionally creating a new instance.
	 * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
	 * @param {Object} data The plain JavaScript object bearing properties of interest.
	 * @param {module:model/TokenDetailDataGetTokenOnly} obj Optional instance to populate.
	 * @return {module:model/TokenDetailDataGetTokenOnly} The populated <code>TokenDetailDataGetTokenOnly</code> instance.
	 */
	exports.constructFromObject = function (data, obj) {
		if (data) {
			obj = obj || new exports();
			if (data.hasOwnProperty("tokenNumber")) {
				obj["tokenNumber"] = ApiClient.convertToType(
					data["tokenNumber"],
					"String"
				);
			}
			if (data.hasOwnProperty("expiryMonth")) {
				obj["expiryMonth"] = ApiClient.convertToType(
					data["expiryMonth"],
					"String"
				);
			}
			if (data.hasOwnProperty("expiryYear")) {
				obj["expiryYear"] = ApiClient.convertToType(
					data["expiryYear"],
					"String"
				);
			}
			if (data.hasOwnProperty("paymentAccountReference")) {
				obj["paymentAccountReference"] = ApiClient.convertToType(
					data["paymentAccountReference"],
					"String"
				);
			}
		}
		return obj;
	};

	/**
	 * The Token Primary Account Number of the Card.  <br>__Max Length: 19__ <br>__Min Length: 9__
	 * @member {String} tokenNumber
	 */
	exports.prototype["tokenNumber"] = undefined;
	/**
	 * The month of the token expiration date. <br> __Max Length: 2__
	 * @member {String} expiryMonth
	 */
	exports.prototype["expiryMonth"] = undefined;
	/**
	 * The year of the token expiration date. <br> __Max Length: 2__
	 * @member {String} expiryYear
	 */
	exports.prototype["expiryYear"] = undefined;
	/**
	 * The unique account reference assigned to the PAN. Conditionally returned if the Token Requestor has opted to receive PAR and providing PAR is assigned by Mastercard or the Issuer provides PAR in the authorization message response. <br>    __Max Length: 29__
	 * @member {String} paymentAccountReference
	 */
	exports.prototype["paymentAccountReference"] = undefined;

	return exports;
});
