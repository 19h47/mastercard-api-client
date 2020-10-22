<?php
/**
 * EnhancedSettlementRateIssued
 *
 * PHP version 5
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Enhanced Currency Conversion Calculator
 *
 * The Enhanced Currency Conversion Calculator is a subscription-based service that provides access to Mastercard's current dates currency conversion rates as well as historical currency conversion rates. Additionally, the API provides access to European Central Bank (ECB) reference rates that European Economic Area (EEA) issuing customer may require for the purposes of compliance with EU Regulation 2019/518
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apisupport@mastercard.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalEnablementClient\Model;

use \ArrayAccess;
use \DigitalEnablementClient\ObjectSerializer;

/**
 * EnhancedSettlementRateIssued Class Doc Comment
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EnhancedSettlementRateIssued implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnhancedSettlementRateIssued';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ecb_rate_issued' => '\DigitalEnablementClient\Model\EcbMcRateIssued',
        'mastercard_rate_issued' => '\DigitalEnablementClient\Model\EcbMcRateIssued',
        'rate_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ecb_rate_issued' => null,
        'mastercard_rate_issued' => null,
        'rate_date' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ecb_rate_issued' => 'ecbRateIssued',
        'mastercard_rate_issued' => 'mastercardRateIssued',
        'rate_date' => 'rateDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ecb_rate_issued' => 'setEcbRateIssued',
        'mastercard_rate_issued' => 'setMastercardRateIssued',
        'rate_date' => 'setRateDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ecb_rate_issued' => 'getEcbRateIssued',
        'mastercard_rate_issued' => 'getMastercardRateIssued',
        'rate_date' => 'getRateDate'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ecb_rate_issued'] = isset($data['ecb_rate_issued']) ? $data['ecb_rate_issued'] : null;
        $this->container['mastercard_rate_issued'] = isset($data['mastercard_rate_issued']) ? $data['mastercard_rate_issued'] : null;
        $this->container['rate_date'] = isset($data['rate_date']) ? $data['rate_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ecb_rate_issued
     *
     * @return \DigitalEnablementClient\Model\EcbMcRateIssued|null
     */
    public function getEcbRateIssued()
    {
        return $this->container['ecb_rate_issued'];
    }

    /**
     * Sets ecb_rate_issued
     *
     * @param \DigitalEnablementClient\Model\EcbMcRateIssued|null $ecb_rate_issued ecb_rate_issued
     *
     * @return $this
     */
    public function setEcbRateIssued($ecb_rate_issued)
    {
        $this->container['ecb_rate_issued'] = $ecb_rate_issued;

        return $this;
    }

    /**
     * Gets mastercard_rate_issued
     *
     * @return \DigitalEnablementClient\Model\EcbMcRateIssued|null
     */
    public function getMastercardRateIssued()
    {
        return $this->container['mastercard_rate_issued'];
    }

    /**
     * Sets mastercard_rate_issued
     *
     * @param \DigitalEnablementClient\Model\EcbMcRateIssued|null $mastercard_rate_issued mastercard_rate_issued
     *
     * @return $this
     */
    public function setMastercardRateIssued($mastercard_rate_issued)
    {
        $this->container['mastercard_rate_issued'] = $mastercard_rate_issued;

        return $this;
    }

    /**
     * Gets rate_date
     *
     * @return string|null
     */
    public function getRateDate()
    {
        return $this->container['rate_date'];
    }

    /**
     * Sets rate_date
     *
     * @param string|null $rate_date The date of the requested rates
     *
     * @return $this
     */
    public function setRateDate($rate_date)
    {
        $this->container['rate_date'] = $rate_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

