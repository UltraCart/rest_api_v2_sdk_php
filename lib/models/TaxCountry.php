<?php
/**
 * TaxCountry
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
 * TaxCountry Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxCountry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxCountry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_code' => 'string',
        'country_code' => 'string',
        'country_oid' => 'int',
        'states' => '\ultracartv2\models\TaxState[]',
        'tax_gift_charge' => 'bool',
        'tax_gift_wrap' => 'bool',
        'tax_rate' => 'float',
        'tax_rate_formatted' => 'string',
        'tax_shipping' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounting_code' => null,
        'country_code' => null,
        'country_oid' => 'int32',
        'states' => null,
        'tax_gift_charge' => null,
        'tax_gift_wrap' => null,
        'tax_rate' => null,
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
        'accounting_code' => 'accounting_code',
        'country_code' => 'country_code',
        'country_oid' => 'country_oid',
        'states' => 'states',
        'tax_gift_charge' => 'tax_gift_charge',
        'tax_gift_wrap' => 'tax_gift_wrap',
        'tax_rate' => 'tax_rate',
        'tax_rate_formatted' => 'tax_rate_formatted',
        'tax_shipping' => 'tax_shipping'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_code' => 'setAccountingCode',
        'country_code' => 'setCountryCode',
        'country_oid' => 'setCountryOid',
        'states' => 'setStates',
        'tax_gift_charge' => 'setTaxGiftCharge',
        'tax_gift_wrap' => 'setTaxGiftWrap',
        'tax_rate' => 'setTaxRate',
        'tax_rate_formatted' => 'setTaxRateFormatted',
        'tax_shipping' => 'setTaxShipping'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_code' => 'getAccountingCode',
        'country_code' => 'getCountryCode',
        'country_oid' => 'getCountryOid',
        'states' => 'getStates',
        'tax_gift_charge' => 'getTaxGiftCharge',
        'tax_gift_wrap' => 'getTaxGiftWrap',
        'tax_rate' => 'getTaxRate',
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
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['country_oid'] = isset($data['country_oid']) ? $data['country_oid'] : null;
        $this->container['states'] = isset($data['states']) ? $data['states'] : null;
        $this->container['tax_gift_charge'] = isset($data['tax_gift_charge']) ? $data['tax_gift_charge'] : null;
        $this->container['tax_gift_wrap'] = isset($data['tax_gift_wrap']) ? $data['tax_gift_wrap'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
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
     * @param string $accounting_code Accounting code for programs such as QuickBooks
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code Country code (2 characters
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets country_oid
     *
     * @return int
     */
    public function getCountryOid()
    {
        return $this->container['country_oid'];
    }

    /**
     * Sets country_oid
     *
     * @param int $country_oid Tax record object identifier used internally by database
     *
     * @return $this
     */
    public function setCountryOid($country_oid)
    {
        $this->container['country_oid'] = $country_oid;

        return $this;
    }

    /**
     * Gets states
     *
     * @return \ultracartv2\models\TaxState[]
     */
    public function getStates()
    {
        return $this->container['states'];
    }

    /**
     * Sets states
     *
     * @param \ultracartv2\models\TaxState[] $states States (or regions or territories) within this country
     *
     * @return $this
     */
    public function setStates($states)
    {
        $this->container['states'] = $states;

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
     * @param bool $tax_gift_charge True if taxation within this jurisdiction should charge tax on gift charge
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
     * @param bool $tax_gift_wrap True if taxation within this jurisdiction should charge tax on gift wrap
     *
     * @return $this
     */
    public function setTaxGiftWrap($tax_gift_wrap)
    {
        $this->container['tax_gift_wrap'] = $tax_gift_wrap;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate Tax Rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

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
     * @param string $tax_rate_formatted Tax rate formatted
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
     * @param bool $tax_shipping True if taxation within this jurisdiction should charge tax on shipping
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


