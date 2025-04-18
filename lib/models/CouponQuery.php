<?php
/**
 * CouponQuery
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CouponQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'affiliate_oid' => 'int',
        'coupon_type' => 'string',
        'description' => 'string',
        'exclude_expired' => 'bool',
        'expiration_dts_begin' => 'string',
        'expiration_dts_end' => 'string',
        'merchant_code' => 'string',
        'merchant_code_or_description' => 'string',
        'start_dts_begin' => 'string',
        'start_dts_end' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'affiliate_oid' => 'int32',
        'coupon_type' => null,
        'description' => null,
        'exclude_expired' => null,
        'expiration_dts_begin' => 'dateTime',
        'expiration_dts_end' => 'dateTime',
        'merchant_code' => null,
        'merchant_code_or_description' => null,
        'start_dts_begin' => 'dateTime',
        'start_dts_end' => 'dateTime'
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
        'affiliate_oid' => 'affiliate_oid',
        'coupon_type' => 'coupon_type',
        'description' => 'description',
        'exclude_expired' => 'exclude_expired',
        'expiration_dts_begin' => 'expiration_dts_begin',
        'expiration_dts_end' => 'expiration_dts_end',
        'merchant_code' => 'merchant_code',
        'merchant_code_or_description' => 'merchant_code_or_description',
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
        'merchant_code_or_description' => 'setMerchantCodeOrDescription',
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
        'merchant_code_or_description' => 'getMerchantCodeOrDescription',
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
        $this->container['affiliate_oid'] = $data['affiliate_oid'] ?? null;
        $this->container['coupon_type'] = $data['coupon_type'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['exclude_expired'] = $data['exclude_expired'] ?? null;
        $this->container['expiration_dts_begin'] = $data['expiration_dts_begin'] ?? null;
        $this->container['expiration_dts_end'] = $data['expiration_dts_end'] ?? null;
        $this->container['merchant_code'] = $data['merchant_code'] ?? null;
        $this->container['merchant_code_or_description'] = $data['merchant_code_or_description'] ?? null;
        $this->container['start_dts_begin'] = $data['start_dts_begin'] ?? null;
        $this->container['start_dts_end'] = $data['start_dts_end'] ?? null;
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
     * @return int|null
     */
    public function getAffiliateOid()
    {
        return $this->container['affiliate_oid'];
    }

    /**
     * Sets affiliate_oid
     *
     * @param int|null $affiliate_oid Affiliate oid
     *
     * @return self
     */
    public function setAffiliateOid($affiliate_oid)
    {
        $this->container['affiliate_oid'] = $affiliate_oid;

        return $this;
    }

    /**
     * Gets coupon_type
     *
     * @return string|null
     */
    public function getCouponType()
    {
        return $this->container['coupon_type'];
    }

    /**
     * Sets coupon_type
     *
     * @param string|null $coupon_type The type of coupon.
     *
     * @return self
     */
    public function setCouponType($coupon_type)
    {
        $this->container['coupon_type'] = $coupon_type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of this coupon
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exclude_expired
     *
     * @return bool|null
     */
    public function getExcludeExpired()
    {
        return $this->container['exclude_expired'];
    }

    /**
     * Sets exclude_expired
     *
     * @param bool|null $exclude_expired Exclude expired coupons if true
     *
     * @return self
     */
    public function setExcludeExpired($exclude_expired)
    {
        $this->container['exclude_expired'] = $exclude_expired;

        return $this;
    }

    /**
     * Gets expiration_dts_begin
     *
     * @return string|null
     */
    public function getExpirationDtsBegin()
    {
        return $this->container['expiration_dts_begin'];
    }

    /**
     * Sets expiration_dts_begin
     *
     * @param string|null $expiration_dts_begin Expiration date begin
     *
     * @return self
     */
    public function setExpirationDtsBegin($expiration_dts_begin)
    {
        $this->container['expiration_dts_begin'] = $expiration_dts_begin;

        return $this;
    }

    /**
     * Gets expiration_dts_end
     *
     * @return string|null
     */
    public function getExpirationDtsEnd()
    {
        return $this->container['expiration_dts_end'];
    }

    /**
     * Sets expiration_dts_end
     *
     * @param string|null $expiration_dts_end Expiration date begin
     *
     * @return self
     */
    public function setExpirationDtsEnd($expiration_dts_end)
    {
        $this->container['expiration_dts_end'] = $expiration_dts_end;

        return $this;
    }

    /**
     * Gets merchant_code
     *
     * @return string|null
     */
    public function getMerchantCode()
    {
        return $this->container['merchant_code'];
    }

    /**
     * Sets merchant_code
     *
     * @param string|null $merchant_code Merchant code is a unique character string for this coupon.
     *
     * @return self
     */
    public function setMerchantCode($merchant_code)
    {
        $this->container['merchant_code'] = $merchant_code;

        return $this;
    }

    /**
     * Gets merchant_code_or_description
     *
     * @return string|null
     */
    public function getMerchantCodeOrDescription()
    {
        return $this->container['merchant_code_or_description'];
    }

    /**
     * Sets merchant_code_or_description
     *
     * @param string|null $merchant_code_or_description Merchant code description used for searching
     *
     * @return self
     */
    public function setMerchantCodeOrDescription($merchant_code_or_description)
    {
        $this->container['merchant_code_or_description'] = $merchant_code_or_description;

        return $this;
    }

    /**
     * Gets start_dts_begin
     *
     * @return string|null
     */
    public function getStartDtsBegin()
    {
        return $this->container['start_dts_begin'];
    }

    /**
     * Sets start_dts_begin
     *
     * @param string|null $start_dts_begin Start date begin
     *
     * @return self
     */
    public function setStartDtsBegin($start_dts_begin)
    {
        $this->container['start_dts_begin'] = $start_dts_begin;

        return $this;
    }

    /**
     * Gets start_dts_end
     *
     * @return string|null
     */
    public function getStartDtsEnd()
    {
        return $this->container['start_dts_end'];
    }

    /**
     * Sets start_dts_end
     *
     * @param string|null $start_dts_end Start date end
     *
     * @return self
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


