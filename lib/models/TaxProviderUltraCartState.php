<?php
/**
 * TaxProviderUltraCartState
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
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

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * TaxProviderUltraCartState Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxProviderUltraCartState implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxProviderUltraCartState';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'enabled' => 'bool',
        'state_code' => 'string',
        'state_name' => 'string',
        'tax_gift_charge' => 'bool',
        'tax_gift_wrap' => 'bool',
        'tax_rate_formatted' => 'string',
        'tax_shipping' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'enabled' => null,
        'state_code' => null,
        'state_name' => null,
        'tax_gift_charge' => null,
        'tax_gift_wrap' => null,
        'tax_rate_formatted' => null,
        'tax_shipping' => null
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
        'enabled' => 'enabled',
        'state_code' => 'state_code',
        'state_name' => 'state_name',
        'tax_gift_charge' => 'tax_gift_charge',
        'tax_gift_wrap' => 'tax_gift_wrap',
        'tax_rate_formatted' => 'tax_rate_formatted',
        'tax_shipping' => 'tax_shipping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'state_code' => 'setStateCode',
        'state_name' => 'setStateName',
        'tax_gift_charge' => 'setTaxGiftCharge',
        'tax_gift_wrap' => 'setTaxGiftWrap',
        'tax_rate_formatted' => 'setTaxRateFormatted',
        'tax_shipping' => 'setTaxShipping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'state_code' => 'getStateCode',
        'state_name' => 'getStateName',
        'tax_gift_charge' => 'getTaxGiftCharge',
        'tax_gift_wrap' => 'getTaxGiftWrap',
        'tax_rate_formatted' => 'getTaxRateFormatted',
        'tax_shipping' => 'getTaxShipping'
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
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['state_code'] = isset($data['state_code']) ? $data['state_code'] : null;
        $this->container['state_name'] = isset($data['state_name']) ? $data['state_name'] : null;
        $this->container['tax_gift_charge'] = isset($data['tax_gift_charge']) ? $data['tax_gift_charge'] : null;
        $this->container['tax_gift_wrap'] = isset($data['tax_gift_wrap']) ? $data['tax_gift_wrap'] : null;
        $this->container['tax_rate_formatted'] = isset($data['tax_rate_formatted']) ? $data['tax_rate_formatted'] : null;
        $this->container['tax_shipping'] = isset($data['tax_shipping']) ? $data['tax_shipping'] : null;
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
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled True if this state taxes are managed by UltraCart
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string $state_code State Code (2 digits)
     *
     * @return $this
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets state_name
     *
     * @return string
     */
    public function getStateName()
    {
        return $this->container['state_name'];
    }

    /**
     * Sets state_name
     *
     * @param string $state_name Fully spelled out state name
     *
     * @return $this
     */
    public function setStateName($state_name)
    {
        $this->container['state_name'] = $state_name;

        return $this;
    }

    /**
     * Gets tax_gift_charge
     *
     * @return bool
     */
    public function getTaxGiftCharge()
    {
        return $this->container['tax_gift_charge'];
    }

    /**
     * Sets tax_gift_charge
     *
     * @param bool $tax_gift_charge True if gift charges should be taxed in this state.
     *
     * @return $this
     */
    public function setTaxGiftCharge($tax_gift_charge)
    {
        $this->container['tax_gift_charge'] = $tax_gift_charge;

        return $this;
    }

    /**
     * Gets tax_gift_wrap
     *
     * @return bool
     */
    public function getTaxGiftWrap()
    {
        return $this->container['tax_gift_wrap'];
    }

    /**
     * Sets tax_gift_wrap
     *
     * @param bool $tax_gift_wrap True if gift wrap should be taxed in this state.
     *
     * @return $this
     */
    public function setTaxGiftWrap($tax_gift_wrap)
    {
        $this->container['tax_gift_wrap'] = $tax_gift_wrap;

        return $this;
    }

    /**
     * Gets tax_rate_formatted
     *
     * @return string
     */
    public function getTaxRateFormatted()
    {
        return $this->container['tax_rate_formatted'];
    }

    /**
     * Sets tax_rate_formatted
     *
     * @param string $tax_rate_formatted State tax rate formatted for display
     *
     * @return $this
     */
    public function setTaxRateFormatted($tax_rate_formatted)
    {
        $this->container['tax_rate_formatted'] = $tax_rate_formatted;

        return $this;
    }

    /**
     * Gets tax_shipping
     *
     * @return bool
     */
    public function getTaxShipping()
    {
        return $this->container['tax_shipping'];
    }

    /**
     * Sets tax_shipping
     *
     * @param bool $tax_shipping True if shipping should be taxed in this state.
     *
     * @return $this
     */
    public function setTaxShipping($tax_shipping)
    {
        $this->container['tax_shipping'] = $tax_shipping;

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


