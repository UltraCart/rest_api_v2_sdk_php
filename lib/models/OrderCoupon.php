<?php
/**
 * OrderCoupon
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
 * OrderCoupon Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderCoupon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderCoupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_code' => 'string',
        'automatically_applied' => 'bool',
        'base_coupon_code' => 'string',
        'coupon_code' => 'string',
        'hdie_from_customer' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounting_code' => null,
        'automatically_applied' => null,
        'base_coupon_code' => null,
        'coupon_code' => null,
        'hdie_from_customer' => null
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
        'automatically_applied' => 'automatically_applied',
        'base_coupon_code' => 'base_coupon_code',
        'coupon_code' => 'coupon_code',
        'hdie_from_customer' => 'hdie_from_customer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_code' => 'setAccountingCode',
        'automatically_applied' => 'setAutomaticallyApplied',
        'base_coupon_code' => 'setBaseCouponCode',
        'coupon_code' => 'setCouponCode',
        'hdie_from_customer' => 'setHdieFromCustomer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_code' => 'getAccountingCode',
        'automatically_applied' => 'getAutomaticallyApplied',
        'base_coupon_code' => 'getBaseCouponCode',
        'coupon_code' => 'getCouponCode',
        'hdie_from_customer' => 'getHdieFromCustomer'
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
        $this->container['automatically_applied'] = isset($data['automatically_applied']) ? $data['automatically_applied'] : null;
        $this->container['base_coupon_code'] = isset($data['base_coupon_code']) ? $data['base_coupon_code'] : null;
        $this->container['coupon_code'] = isset($data['coupon_code']) ? $data['coupon_code'] : null;
        $this->container['hdie_from_customer'] = isset($data['hdie_from_customer']) ? $data['hdie_from_customer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['base_coupon_code']) && (mb_strlen($this->container['base_coupon_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'base_coupon_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['coupon_code']) && (mb_strlen($this->container['coupon_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'coupon_code', the character length must be smaller than or equal to 20.";
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
     * @param string $accounting_code QuickBooks accounting code for this coupon
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets automatically_applied
     *
     * @return bool
     */
    public function getAutomaticallyApplied()
    {
        return $this->container['automatically_applied'];
    }

    /**
     * Sets automatically_applied
     *
     * @param bool $automatically_applied Whether or not the coupon was automatically applied to the order
     *
     * @return $this
     */
    public function setAutomaticallyApplied($automatically_applied)
    {
        $this->container['automatically_applied'] = $automatically_applied;

        return $this;
    }

    /**
     * Gets base_coupon_code
     *
     * @return string
     */
    public function getBaseCouponCode()
    {
        return $this->container['base_coupon_code'];
    }

    /**
     * Sets base_coupon_code
     *
     * @param string $base_coupon_code Coupon code configured by the merchant.  Will differ if the customer used a one time coupon code generated off this base coupon
     *
     * @return $this
     */
    public function setBaseCouponCode($base_coupon_code)
    {
        if (!is_null($base_coupon_code) && (mb_strlen($base_coupon_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $base_coupon_code when calling OrderCoupon., must be smaller than or equal to 20.');
        }

        $this->container['base_coupon_code'] = $base_coupon_code;

        return $this;
    }

    /**
     * Gets coupon_code
     *
     * @return string
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string $coupon_code Coupon code entered by the customer
     *
     * @return $this
     */
    public function setCouponCode($coupon_code)
    {
        if (!is_null($coupon_code) && (mb_strlen($coupon_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $coupon_code when calling OrderCoupon., must be smaller than or equal to 20.');
        }

        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets hdie_from_customer
     *
     * @return bool
     */
    public function getHdieFromCustomer()
    {
        return $this->container['hdie_from_customer'];
    }

    /**
     * Sets hdie_from_customer
     *
     * @param bool $hdie_from_customer True if this coupon is hide from the customer
     *
     * @return $this
     */
    public function setHdieFromCustomer($hdie_from_customer)
    {
        $this->container['hdie_from_customer'] = $hdie_from_customer;

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


