<?php
/**
 * CouponQuery
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
 * CouponQuery Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CouponQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CouponQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate_oid' => 'int',
        'coupon_type' => 'string',
        'description' => 'string',
        'exclude_expired' => 'bool',
        'expiration_dts_begin' => 'string',
        'expiration_dts_end' => 'string',
        'merchant_code' => 'string',
        'start_dts_begin' => 'string',
        'start_dts_end' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate_oid' => 'int32',
        'coupon_type' => null,
        'description' => null,
        'exclude_expired' => null,
        'expiration_dts_begin' => 'dateTime',
        'expiration_dts_end' => 'dateTime',
        'merchant_code' => null,
        'start_dts_begin' => 'dateTime',
        'start_dts_end' => 'dateTime'
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
        'affiliate_oid' => 'affiliate_oid',
        'coupon_type' => 'coupon_type',
        'description' => 'description',
        'exclude_expired' => 'exclude_expired',
        'expiration_dts_begin' => 'expiration_dts_begin',
        'expiration_dts_end' => 'expiration_dts_end',
        'merchant_code' => 'merchant_code',
        'start_dts_begin' => 'start_dts_begin',
        'start_dts_end' => 'start_dts_end'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliate_oid' => 'setAffiliateOid',
        'coupon_type' => 'setCouponType',
        'description' => 'setDescription',
        'exclude_expired' => 'setExcludeExpired',
        'expiration_dts_begin' => 'setExpirationDtsBegin',
        'expiration_dts_end' => 'setExpirationDtsEnd',
        'merchant_code' => 'setMerchantCode',
        'start_dts_begin' => 'setStartDtsBegin',
        'start_dts_end' => 'setStartDtsEnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliate_oid' => 'getAffiliateOid',
        'coupon_type' => 'getCouponType',
        'description' => 'getDescription',
        'exclude_expired' => 'getExcludeExpired',
        'expiration_dts_begin' => 'getExpirationDtsBegin',
        'expiration_dts_end' => 'getExpirationDtsEnd',
        'merchant_code' => 'getMerchantCode',
        'start_dts_begin' => 'getStartDtsBegin',
        'start_dts_end' => 'getStartDtsEnd'
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
        $this->container['affiliate_oid'] = isset($data['affiliate_oid']) ? $data['affiliate_oid'] : null;
        $this->container['coupon_type'] = isset($data['coupon_type']) ? $data['coupon_type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exclude_expired'] = isset($data['exclude_expired']) ? $data['exclude_expired'] : null;
        $this->container['expiration_dts_begin'] = isset($data['expiration_dts_begin']) ? $data['expiration_dts_begin'] : null;
        $this->container['expiration_dts_end'] = isset($data['expiration_dts_end']) ? $data['expiration_dts_end'] : null;
        $this->container['merchant_code'] = isset($data['merchant_code']) ? $data['merchant_code'] : null;
        $this->container['start_dts_begin'] = isset($data['start_dts_begin']) ? $data['start_dts_begin'] : null;
        $this->container['start_dts_end'] = isset($data['start_dts_end']) ? $data['start_dts_end'] : null;
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
     * Gets affiliate_oid
     *
     * @return int
     */
    public function getAffiliateOid()
    {
        return $this->container['affiliate_oid'];
    }

    /**
     * Sets affiliate_oid
     *
     * @param int $affiliate_oid Affiliate oid
     *
     * @return $this
     */
    public function setAffiliateOid($affiliate_oid)
    {
        $this->container['affiliate_oid'] = $affiliate_oid;

        return $this;
    }

    /**
     * Gets coupon_type
     *
     * @return string
     */
    public function getCouponType()
    {
        return $this->container['coupon_type'];
    }

    /**
     * Sets coupon_type
     *
     * @param string $coupon_type The type of coupon.
     *
     * @return $this
     */
    public function setCouponType($coupon_type)
    {
        $this->container['coupon_type'] = $coupon_type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of this coupon
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exclude_expired
     *
     * @return bool
     */
    public function getExcludeExpired()
    {
        return $this->container['exclude_expired'];
    }

    /**
     * Sets exclude_expired
     *
     * @param bool $exclude_expired Exclude expired coupons if true
     *
     * @return $this
     */
    public function setExcludeExpired($exclude_expired)
    {
        $this->container['exclude_expired'] = $exclude_expired;

        return $this;
    }

    /**
     * Gets expiration_dts_begin
     *
     * @return string
     */
    public function getExpirationDtsBegin()
    {
        return $this->container['expiration_dts_begin'];
    }

    /**
     * Sets expiration_dts_begin
     *
     * @param string $expiration_dts_begin Expiration date begin
     *
     * @return $this
     */
    public function setExpirationDtsBegin($expiration_dts_begin)
    {
        $this->container['expiration_dts_begin'] = $expiration_dts_begin;

        return $this;
    }

    /**
     * Gets expiration_dts_end
     *
     * @return string
     */
    public function getExpirationDtsEnd()
    {
        return $this->container['expiration_dts_end'];
    }

    /**
     * Sets expiration_dts_end
     *
     * @param string $expiration_dts_end Expiration date begin
     *
     * @return $this
     */
    public function setExpirationDtsEnd($expiration_dts_end)
    {
        $this->container['expiration_dts_end'] = $expiration_dts_end;

        return $this;
    }

    /**
     * Gets merchant_code
     *
     * @return string
     */
    public function getMerchantCode()
    {
        return $this->container['merchant_code'];
    }

    /**
     * Sets merchant_code
     *
     * @param string $merchant_code Merchant code is a unique character string for this coupon.
     *
     * @return $this
     */
    public function setMerchantCode($merchant_code)
    {
        $this->container['merchant_code'] = $merchant_code;

        return $this;
    }

    /**
     * Gets start_dts_begin
     *
     * @return string
     */
    public function getStartDtsBegin()
    {
        return $this->container['start_dts_begin'];
    }

    /**
     * Sets start_dts_begin
     *
     * @param string $start_dts_begin Start date begin
     *
     * @return $this
     */
    public function setStartDtsBegin($start_dts_begin)
    {
        $this->container['start_dts_begin'] = $start_dts_begin;

        return $this;
    }

    /**
     * Gets start_dts_end
     *
     * @return string
     */
    public function getStartDtsEnd()
    {
        return $this->container['start_dts_end'];
    }

    /**
     * Sets start_dts_end
     *
     * @param string $start_dts_end Start date end
     *
     * @return $this
     */
    public function setStartDtsEnd($start_dts_end)
    {
        $this->container['start_dts_end'] = $start_dts_end;

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


