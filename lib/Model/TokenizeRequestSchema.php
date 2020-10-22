<?php
/**
 * TokenizeRequestSchema
 *
 * PHP version 5
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MDES for Merchants
 *
 * The MDES APIs are designed as RPC style stateless web services where each API endpoint represents an operation to be performed.  All request and response payloads are sent in the JSON (JavaScript Object Notation) data-interchange format. Each endpoint in the API specifies the HTTP Method used to access it. All strings in request and response objects are to be UTF-8 encoded.  Each API URI includes the major and minor version of API that it conforms to.  This will allow multiple concurrent versions of the API to be deployed simultaneously. <br> __Authentication__ Mastercard uses OAuth 1.0a with body hash extension for authenticating the API clients. This requires every request that you send to  Mastercard to be signed with an RSA private key. A private-public RSA key pair must be generated consisting of: <br> 1 . A private key for the OAuth signature for API requests. It is recommended to keep the private key in a password-protected or hardware keystore. <br> 2. A public key is shared with Mastercard during the project setup process through either a certificate signing request (CSR) or the API Key Generator. Mastercard will use the public key to verify the OAuth signature that is provided on every API call.<br>  An OAUTH1.0a signer library is available on [GitHub](https://github.com/Mastercard/oauth1-signer-java) <br>  __Encryption__<br>  All communications between Issuer web service and the Mastercard gateway is encrypted using TLS. <br> __Additional Encryption of Sensitive Data__ In addition to the OAuth authentication, when using MDES Digital Enablement Service, any PCI sensitive and all account holder Personally Identifiable Information (PII) data must be encrypted. This requirement applies to the API fields containing encryptedData. Sensitive data is encrypted using a symmetric session (one-time-use) key. The symmetric session key is then wrapped with an RSA Public Key supplied by Mastercard during API setup phase (the Customer Encryption Key). <br>  Java Client Encryption Library available on [GitHub](https://github.com/Mastercard/client-encryption-java)
 *
 * The version of the OpenAPI document: 1.2.10
 * 
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
 * TokenizeRequestSchema Class Doc Comment
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokenizeRequestSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TokenizeRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'response_host' => 'string',
        'request_id' => 'string',
        'token_type' => 'string',
        'token_requestor_id' => 'string',
        'task_id' => 'string',
        'funding_account_info' => '\DigitalEnablementClient\Model\FundingAccountInfo',
        'consumer_language' => 'string',
        'tokenization_authentication_value' => 'string',
        'decisioning_data' => '\DigitalEnablementClient\Model\DecisioningData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'response_host' => null,
        'request_id' => null,
        'token_type' => null,
        'token_requestor_id' => null,
        'task_id' => null,
        'funding_account_info' => null,
        'consumer_language' => null,
        'tokenization_authentication_value' => null,
        'decisioning_data' => null
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
        'response_host' => 'responseHost',
        'request_id' => 'requestId',
        'token_type' => 'tokenType',
        'token_requestor_id' => 'tokenRequestorId',
        'task_id' => 'taskId',
        'funding_account_info' => 'fundingAccountInfo',
        'consumer_language' => 'consumerLanguage',
        'tokenization_authentication_value' => 'tokenizationAuthenticationValue',
        'decisioning_data' => 'decisioningData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'response_host' => 'setResponseHost',
        'request_id' => 'setRequestId',
        'token_type' => 'setTokenType',
        'token_requestor_id' => 'setTokenRequestorId',
        'task_id' => 'setTaskId',
        'funding_account_info' => 'setFundingAccountInfo',
        'consumer_language' => 'setConsumerLanguage',
        'tokenization_authentication_value' => 'setTokenizationAuthenticationValue',
        'decisioning_data' => 'setDecisioningData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'response_host' => 'getResponseHost',
        'request_id' => 'getRequestId',
        'token_type' => 'getTokenType',
        'token_requestor_id' => 'getTokenRequestorId',
        'task_id' => 'getTaskId',
        'funding_account_info' => 'getFundingAccountInfo',
        'consumer_language' => 'getConsumerLanguage',
        'tokenization_authentication_value' => 'getTokenizationAuthenticationValue',
        'decisioning_data' => 'getDecisioningData'
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
        $this->container['response_host'] = isset($data['response_host']) ? $data['response_host'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['token_type'] = isset($data['token_type']) ? $data['token_type'] : null;
        $this->container['token_requestor_id'] = isset($data['token_requestor_id']) ? $data['token_requestor_id'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
        $this->container['funding_account_info'] = isset($data['funding_account_info']) ? $data['funding_account_info'] : null;
        $this->container['consumer_language'] = isset($data['consumer_language']) ? $data['consumer_language'] : null;
        $this->container['tokenization_authentication_value'] = isset($data['tokenization_authentication_value']) ? $data['tokenization_authentication_value'] : null;
        $this->container['decisioning_data'] = isset($data['decisioning_data']) ? $data['decisioning_data'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['token_type'] === null) {
            $invalidProperties[] = "'token_type' can't be null";
        }
        if ($this->container['token_requestor_id'] === null) {
            $invalidProperties[] = "'token_requestor_id' can't be null";
        }
        if ($this->container['task_id'] === null) {
            $invalidProperties[] = "'task_id' can't be null";
        }
        if ($this->container['funding_account_info'] === null) {
            $invalidProperties[] = "'funding_account_info' can't be null";
        }
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
     * Gets response_host
     *
     * @return string|null
     */
    public function getResponseHost()
    {
        return $this->container['response_host'];
    }

    /**
     * Sets response_host
     *
     * @param string|null $response_host \"The host that originated the request. Future calls in the same conversation may be routed to this host. Must be provided as: host[:port][/contextRoot] Where port and contextRoot are optional. If contextRoot is not provided, the default (per the URL Scheme) is assumed and must be used.\"
     *
     * @return $this
     */
    public function setResponseHost($response_host)
    {
        $this->container['response_host'] = $response_host;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id Unique identifier for the request.
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type The type of Token requested. Must be CLOUD       __Max Length:32__
     *
     * @return $this
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets token_requestor_id
     *
     * @return string
     */
    public function getTokenRequestorId()
    {
        return $this->container['token_requestor_id'];
    }

    /**
     * Sets token_requestor_id
     *
     * @param string $token_requestor_id 11-digit numeric ID provided by Mastercard that identifies the Token Requestor.
     *
     * @return $this
     */
    public function setTokenRequestorId($token_requestor_id)
    {
        $this->container['token_requestor_id'] = $token_requestor_id;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string $task_id Identifier for this task as assigned by the Token Requestor, unique across a given Token Requestor Identifier. May be used in the Get Task Status API to query the status of this task.      __Max Length:64__
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets funding_account_info
     *
     * @return \DigitalEnablementClient\Model\FundingAccountInfo
     */
    public function getFundingAccountInfo()
    {
        return $this->container['funding_account_info'];
    }

    /**
     * Sets funding_account_info
     *
     * @param \DigitalEnablementClient\Model\FundingAccountInfo $funding_account_info funding_account_info
     *
     * @return $this
     */
    public function setFundingAccountInfo($funding_account_info)
    {
        $this->container['funding_account_info'] = $funding_account_info;

        return $this;
    }

    /**
     * Gets consumer_language
     *
     * @return string|null
     */
    public function getConsumerLanguage()
    {
        return $this->container['consumer_language'];
    }

    /**
     * Sets consumer_language
     *
     * @param string|null $consumer_language Language preference selected by the consumer. Formatted as an ISO- 639-1 two-letter language code.    __Max Length:2__
     *
     * @return $this
     */
    public function setConsumerLanguage($consumer_language)
    {
        $this->container['consumer_language'] = $consumer_language;

        return $this;
    }

    /**
     * Gets tokenization_authentication_value
     *
     * @return string|null
     */
    public function getTokenizationAuthenticationValue()
    {
        return $this->container['tokenization_authentication_value'];
    }

    /**
     * Sets tokenization_authentication_value
     *
     * @param string|null $tokenization_authentication_value The Tokenization Authentication Value (TAV) as cryptographically signed by the Issuer to authorize this digitization request.      __Max Length:2048__
     *
     * @return $this
     */
    public function setTokenizationAuthenticationValue($tokenization_authentication_value)
    {
        $this->container['tokenization_authentication_value'] = $tokenization_authentication_value;

        return $this;
    }

    /**
     * Gets decisioning_data
     *
     * @return \DigitalEnablementClient\Model\DecisioningData|null
     */
    public function getDecisioningData()
    {
        return $this->container['decisioning_data'];
    }

    /**
     * Sets decisioning_data
     *
     * @param \DigitalEnablementClient\Model\DecisioningData|null $decisioning_data decisioning_data
     *
     * @return $this
     */
    public function setDecisioningData($decisioning_data)
    {
        $this->container['decisioning_data'] = $decisioning_data;

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


