<?php
/**
 * ItemPaymentProcessing
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
 * ItemPaymentProcessing Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemPaymentProcessing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemPaymentProcessing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'block_prepaid' => 'bool',
        'credit_card_transaction_type' => 'string',
        'no_realtime_charge' => 'bool',
        'payment_method_validity' => 'string[]',
        'rotating_transaction_gateway_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'block_prepaid' => null,
        'credit_card_transaction_type' => null,
        'no_realtime_charge' => null,
        'payment_method_validity' => null,
        'rotating_transaction_gateway_codes' => null
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
        'block_prepaid' => 'block_prepaid',
        'credit_card_transaction_type' => 'credit_card_transaction_type',
        'no_realtime_charge' => 'no_realtime_charge',
        'payment_method_validity' => 'payment_method_validity',
        'rotating_transaction_gateway_codes' => 'rotating_transaction_gateway_codes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'block_prepaid' => 'setBlockPrepaid',
        'credit_card_transaction_type' => 'setCreditCardTransactionType',
        'no_realtime_charge' => 'setNoRealtimeCharge',
        'payment_method_validity' => 'setPaymentMethodValidity',
        'rotating_transaction_gateway_codes' => 'setRotatingTransactionGatewayCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'block_prepaid' => 'getBlockPrepaid',
        'credit_card_transaction_type' => 'getCreditCardTransactionType',
        'no_realtime_charge' => 'getNoRealtimeCharge',
        'payment_method_validity' => 'getPaymentMethodValidity',
        'rotating_transaction_gateway_codes' => 'getRotatingTransactionGatewayCodes'
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
        $this->container['block_prepaid'] = isset($data['block_prepaid']) ? $data['block_prepaid'] : null;
        $this->container['credit_card_transaction_type'] = isset($data['credit_card_transaction_type']) ? $data['credit_card_transaction_type'] : null;
        $this->container['no_realtime_charge'] = isset($data['no_realtime_charge']) ? $data['no_realtime_charge'] : null;
        $this->container['payment_method_validity'] = isset($data['payment_method_validity']) ? $data['payment_method_validity'] : null;
        $this->container['rotating_transaction_gateway_codes'] = isset($data['rotating_transaction_gateway_codes']) ? $data['rotating_transaction_gateway_codes'] : null;
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
     * Gets block_prepaid
     *
     * @return bool
     */
    public function getBlockPrepaid()
    {
        return $this->container['block_prepaid'];
    }

    /**
     * Sets block_prepaid
     *
     * @param bool $block_prepaid True if prepaid cards should be blocked from buying this item
     *
     * @return $this
     */
    public function setBlockPrepaid($block_prepaid)
    {
        $this->container['block_prepaid'] = $block_prepaid;

        return $this;
    }

    /**
     * Gets credit_card_transaction_type
     *
     * @return string
     */
    public function getCreditCardTransactionType()
    {
        return $this->container['credit_card_transaction_type'];
    }

    /**
     * Sets credit_card_transaction_type
     *
     * @param string $credit_card_transaction_type Credit card transaction type
     *
     * @return $this
     */
    public function setCreditCardTransactionType($credit_card_transaction_type)
    {
        $this->container['credit_card_transaction_type'] = $credit_card_transaction_type;

        return $this;
    }

    /**
     * Gets no_realtime_charge
     *
     * @return bool
     */
    public function getNoRealtimeCharge()
    {
        return $this->container['no_realtime_charge'];
    }

    /**
     * Sets no_realtime_charge
     *
     * @param bool $no_realtime_charge True if no real-time charge should be performed on this item.
     *
     * @return $this
     */
    public function setNoRealtimeCharge($no_realtime_charge)
    {
        $this->container['no_realtime_charge'] = $no_realtime_charge;

        return $this;
    }

    /**
     * Gets payment_method_validity
     *
     * @return string[]
     */
    public function getPaymentMethodValidity()
    {
        return $this->container['payment_method_validity'];
    }

    /**
     * Sets payment_method_validity
     *
     * @param string[] $payment_method_validity Payment method validity
     *
     * @return $this
     */
    public function setPaymentMethodValidity($payment_method_validity)
    {
        $this->container['payment_method_validity'] = $payment_method_validity;

        return $this;
    }

    /**
     * Gets rotating_transaction_gateway_codes
     *
     * @return string[]
     */
    public function getRotatingTransactionGatewayCodes()
    {
        return $this->container['rotating_transaction_gateway_codes'];
    }

    /**
     * Sets rotating_transaction_gateway_codes
     *
     * @param string[] $rotating_transaction_gateway_codes Rotating transaction gateway codes
     *
     * @return $this
     */
    public function setRotatingTransactionGatewayCodes($rotating_transaction_gateway_codes)
    {
        $this->container['rotating_transaction_gateway_codes'] = $rotating_transaction_gateway_codes;

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


