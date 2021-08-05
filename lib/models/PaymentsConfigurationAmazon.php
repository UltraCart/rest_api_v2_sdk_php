<?php
/**
 * PaymentsConfigurationAmazon
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * PaymentsConfigurationAmazon Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsConfigurationAmazon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsConfigurationAmazon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_amazon' => 'bool',
        'access_key_id' => 'string',
        'accounting_code' => 'string',
        'amazon_merchant_id' => 'string',
        'deposit_to_account' => 'string',
        'restrictions' => '\ultracart\v2\models\PaymentsConfigurationRestrictions',
        'sandbox' => 'bool',
        'secret_access_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_amazon' => null,
        'access_key_id' => null,
        'accounting_code' => null,
        'amazon_merchant_id' => null,
        'deposit_to_account' => null,
        'restrictions' => null,
        'sandbox' => null,
        'secret_access_key' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'accept_amazon' => 'accept_amazon',
        'access_key_id' => 'access_key_id',
        'accounting_code' => 'accounting_code',
        'amazon_merchant_id' => 'amazon_merchant_id',
        'deposit_to_account' => 'deposit_to_account',
        'restrictions' => 'restrictions',
        'sandbox' => 'sandbox',
        'secret_access_key' => 'secret_access_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_amazon' => 'setAcceptAmazon',
        'access_key_id' => 'setAccessKeyId',
        'accounting_code' => 'setAccountingCode',
        'amazon_merchant_id' => 'setAmazonMerchantId',
        'deposit_to_account' => 'setDepositToAccount',
        'restrictions' => 'setRestrictions',
        'sandbox' => 'setSandbox',
        'secret_access_key' => 'setSecretAccessKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_amazon' => 'getAcceptAmazon',
        'access_key_id' => 'getAccessKeyId',
        'accounting_code' => 'getAccountingCode',
        'amazon_merchant_id' => 'getAmazonMerchantId',
        'deposit_to_account' => 'getDepositToAccount',
        'restrictions' => 'getRestrictions',
        'sandbox' => 'getSandbox',
        'secret_access_key' => 'getSecretAccessKey'
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
        return self::$swaggerModelName;
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
        $this->container['accept_amazon'] = isset($data['accept_amazon']) ? $data['accept_amazon'] : null;
        $this->container['access_key_id'] = isset($data['access_key_id']) ? $data['access_key_id'] : null;
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['amazon_merchant_id'] = isset($data['amazon_merchant_id']) ? $data['amazon_merchant_id'] : null;
        $this->container['deposit_to_account'] = isset($data['deposit_to_account']) ? $data['deposit_to_account'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['secret_access_key'] = isset($data['secret_access_key']) ? $data['secret_access_key'] : null;
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
     * Gets accept_amazon
     *
     * @return bool
     */
    public function getAcceptAmazon()
    {
        return $this->container['accept_amazon'];
    }

    /**
     * Sets accept_amazon
     *
     * @param bool $accept_amazon Master flag to determine if this merchant accepts Pay by Amazon
     *
     * @return $this
     */
    public function setAcceptAmazon($accept_amazon)
    {
        $this->container['accept_amazon'] = $accept_amazon;

        return $this;
    }

    /**
     * Gets access_key_id
     *
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->container['access_key_id'];
    }

    /**
     * Sets access_key_id
     *
     * @param string $access_key_id Amazon access key ID
     *
     * @return $this
     */
    public function setAccessKeyId($access_key_id)
    {
        $this->container['access_key_id'] = $access_key_id;

        return $this;
    }

    /**
     * Gets accounting_code
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->container['accounting_code'];
    }

    /**
     * Sets accounting_code
     *
     * @param string $accounting_code Optional accounting code for use with Quickbooks integrations
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets amazon_merchant_id
     *
     * @return string
     */
    public function getAmazonMerchantId()
    {
        return $this->container['amazon_merchant_id'];
    }

    /**
     * Sets amazon_merchant_id
     *
     * @param string $amazon_merchant_id Amazon merchant ID
     *
     * @return $this
     */
    public function setAmazonMerchantId($amazon_merchant_id)
    {
        $this->container['amazon_merchant_id'] = $amazon_merchant_id;

        return $this;
    }

    /**
     * Gets deposit_to_account
     *
     * @return string
     */
    public function getDepositToAccount()
    {
        return $this->container['deposit_to_account'];
    }

    /**
     * Sets deposit_to_account
     *
     * @param string $deposit_to_account Optional deposit to account field for use with Quickbooks integrations
     *
     * @return $this
     */
    public function setDepositToAccount($deposit_to_account)
    {
        $this->container['deposit_to_account'] = $deposit_to_account;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \ultracart\v2\models\PaymentsConfigurationRestrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \ultracart\v2\models\PaymentsConfigurationRestrictions $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool $sandbox True if transactions should run against the Amazon sandbox.  Useful for testing not configurations
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets secret_access_key
     *
     * @return string
     */
    public function getSecretAccessKey()
    {
        return $this->container['secret_access_key'];
    }

    /**
     * Sets secret_access_key
     *
     * @param string $secret_access_key Amazon secret access key
     *
     * @return $this
     */
    public function setSecretAccessKey($secret_access_key)
    {
        $this->container['secret_access_key'] = $secret_access_key;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


