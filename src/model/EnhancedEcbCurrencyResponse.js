/**
 * Enhanced Currency Conversion Calculator
 * The Enhanced Currency Conversion Calculator is a subscription-based service that provides access to Mastercard's current dates currency conversion rates as well as historical currency conversion rates. Additionally, the API provides access to European Central Bank (ECB) reference rates that European Economic Area (EEA) issuing customer may require for the purposes of compliance with EU Regulation 2019/518
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apisupport@mastercard.com
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 */

import ApiClient from '../ApiClient';
import EnhancedEcbCurrencies from './EnhancedEcbCurrencies';

/**
 * The EnhancedEcbCurrencyResponse model module.
 * @module model/EnhancedEcbCurrencyResponse
 * @version 1.0.0
 */
class EnhancedEcbCurrencyResponse {
    /**
     * Constructs a new <code>EnhancedEcbCurrencyResponse</code>.
     * @alias module:model/EnhancedEcbCurrencyResponse
     */
    constructor() { 
        
        EnhancedEcbCurrencyResponse.initialize(this);
    }

    /**
     * Initializes the fields of this object.
     * This method is used by the constructors of any subclasses, in order to implement multiple inheritance (mix-ins).
     * Only for internal use.
     */
    static initialize(obj) { 
    }

    /**
     * Constructs a <code>EnhancedEcbCurrencyResponse</code> from a plain JavaScript object, optionally creating a new instance.
     * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
     * @param {Object} data The plain JavaScript object bearing properties of interest.
     * @param {module:model/EnhancedEcbCurrencyResponse} obj Optional instance to populate.
     * @return {module:model/EnhancedEcbCurrencyResponse} The populated <code>EnhancedEcbCurrencyResponse</code> instance.
     */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new EnhancedEcbCurrencyResponse();

            if (data.hasOwnProperty('data')) {
                obj['data'] = EnhancedEcbCurrencies.constructFromObject(data['data']);
            }
            if (data.hasOwnProperty('description')) {
                obj['description'] = ApiClient.convertToType(data['description'], 'String');
            }
            if (data.hasOwnProperty('name')) {
                obj['name'] = ApiClient.convertToType(data['name'], 'String');
            }
            if (data.hasOwnProperty('requestDate')) {
                obj['requestDate'] = ApiClient.convertToType(data['requestDate'], 'String');
            }
        }
        return obj;
    }


}

/**
 * @member {module:model/EnhancedEcbCurrencies} data
 */
EnhancedEcbCurrencyResponse.prototype['data'] = undefined;

/**
 * The description of the API being called
 * @member {String} description
 */
EnhancedEcbCurrencyResponse.prototype['description'] = undefined;

/**
 * The name of the service being requested
 * @member {String} name
 */
EnhancedEcbCurrencyResponse.prototype['name'] = undefined;

/**
 * The date and time the API is being called in GMT
 * @member {String} requestDate
 */
EnhancedEcbCurrencyResponse.prototype['requestDate'] = undefined;






export default EnhancedEcbCurrencyResponse;

