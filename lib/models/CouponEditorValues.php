<?php
/**
 * CouponEditorValues
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
 * CouponEditorValues Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CouponEditorValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CouponEditorValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliates' => '\ultracart\v2\models\SimpleValue[]',
        'coupon_types' => 'string[]',
        'coupon_types_for_display' => '\ultracart\v2\models\CouponType[]',
        'currency_codes' => 'string[]',
        'deprecated_themes' => '\ultracart\v2\models\SimpleValue[]',
        'mix_and_match_names' => 'string[]',
        'shipping_methods' => 'string[]',
        'storefronts' => '\ultracart\v2\models\SimpleValue[]',
        'usable_by' => '\ultracart\v2\models\SimpleValue[]',
        'valid_with_other_coupons' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliates' => null,
        'coupon_types' => null,
        'coupon_types_for_display' => null,
        'currency_codes' => null,
        'deprecated_themes' => null,
        'mix_and_match_names' => null,
        'shipping_methods' => null,
        'storefronts' => null,
        'usable_by' => null,
        'valid_with_other_coupons' => null
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
        'affiliates' => 'affiliates',
        'coupon_types' => 'coupon_types',
        'coupon_types_for_display' => 'coupon_types_for_display',
        'currency_codes' => 'currency_codes',
        'deprecated_themes' => 'deprecated_themes',
        'mix_and_match_names' => 'mix_and_match_names',
        'shipping_methods' => 'shipping_methods',
        'storefronts' => 'storefronts',
        'usable_by' => 'usable_by',
        'valid_with_other_coupons' => 'valid_with_other_coupons'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliates' => 'setAffiliates',
        'coupon_types' => 'setCouponTypes',
        'coupon_types_for_display' => 'setCouponTypesForDisplay',
        'currency_codes' => 'setCurrencyCodes',
        'deprecated_themes' => 'setDeprecatedThemes',
        'mix_and_match_names' => 'setMixAndMatchNames',
        'shipping_methods' => 'setShippingMethods',
        'storefronts' => 'setStorefronts',
        'usable_by' => 'setUsableBy',
        'valid_with_other_coupons' => 'setValidWithOtherCoupons'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliates' => 'getAffiliates',
        'coupon_types' => 'getCouponTypes',
        'coupon_types_for_display' => 'getCouponTypesForDisplay',
        'currency_codes' => 'getCurrencyCodes',
        'deprecated_themes' => 'getDeprecatedThemes',
        'mix_and_match_names' => 'getMixAndMatchNames',
        'shipping_methods' => 'getShippingMethods',
        'storefronts' => 'getStorefronts',
        'usable_by' => 'getUsableBy',
        'valid_with_other_coupons' => 'getValidWithOtherCoupons'
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
        $this->container['affiliates'] = isset($data['affiliates']) ? $data['affiliates'] : null;
        $this->container['coupon_types'] = isset($data['coupon_types']) ? $data['coupon_types'] : null;
        $this->container['coupon_types_for_display'] = isset($data['coupon_types_for_display']) ? $data['coupon_types_for_display'] : null;
        $this->container['currency_codes'] = isset($data['currency_codes']) ? $data['currency_codes'] : null;
        $this->container['deprecated_themes'] = isset($data['deprecated_themes']) ? $data['deprecated_themes'] : null;
        $this->container['mix_and_match_names'] = isset($data['mix_and_match_names']) ? $data['mix_and_match_names'] : null;
        $this->container['shipping_methods'] = isset($data['shipping_methods']) ? $data['shipping_methods'] : null;
        $this->container['storefronts'] = isset($data['storefronts']) ? $data['storefronts'] : null;
        $this->container['usable_by'] = isset($data['usable_by']) ? $data['usable_by'] : null;
        $this->container['valid_with_other_coupons'] = isset($data['valid_with_other_coupons']) ? $data['valid_with_other_coupons'] : null;
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
     * Gets affiliates
     *
     * @return \ultracart\v2\models\SimpleValue[]
     */
    public function getAffiliates()
    {
        return $this->container['affiliates'];
    }

    /**
     * Sets affiliates
     *
     * @param \ultracart\v2\models\SimpleValue[] $affiliates affiliates
     *
     * @return $this
     */
    public function setAffiliates($affiliates)
    {
        $this->container['affiliates'] = $affiliates;

        return $this;
    }

    /**
     * Gets coupon_types
     *
     * @return string[]
     */
    public function getCouponTypes()
    {
        return $this->container['coupon_types'];
    }

    /**
     * Sets coupon_types
     *
     * @param string[] $coupon_types coupon_types
     *
     * @return $this
     */
    public function setCouponTypes($coupon_types)
    {
        $this->container['coupon_types'] = $coupon_types;

        return $this;
    }

    /**
     * Gets coupon_types_for_display
     *
     * @return \ultracart\v2\models\CouponType[]
     */
    public function getCouponTypesForDisplay()
    {
        return $this->container['coupon_types_for_display'];
    }

    /**
     * Sets coupon_types_for_display
     *
     * @param \ultracart\v2\models\CouponType[] $coupon_types_for_display coupon_types_for_display
     *
     * @return $this
     */
    public function setCouponTypesForDisplay($coupon_types_for_display)
    {
        $this->container['coupon_types_for_display'] = $coupon_types_for_display;

        return $this;
    }

    /**
     * Gets currency_codes
     *
     * @return string[]
     */
    public function getCurrencyCodes()
    {
        return $this->container['currency_codes'];
    }

    /**
     * Sets currency_codes
     *
     * @param string[] $currency_codes currency_codes
     *
     * @return $this
     */
    public function setCurrencyCodes($currency_codes)
    {
        $this->container['currency_codes'] = $currency_codes;

        return $this;
    }

    /**
     * Gets deprecated_themes
     *
     * @return \ultracart\v2\models\SimpleValue[]
     */
    public function getDeprecatedThemes()
    {
        return $this->container['deprecated_themes'];
    }

    /**
     * Sets deprecated_themes
     *
     * @param \ultracart\v2\models\SimpleValue[] $deprecated_themes deprecated_themes
     *
     * @return $this
     */
    public function setDeprecatedThemes($deprecated_themes)
    {
        $this->container['deprecated_themes'] = $deprecated_themes;

        return $this;
    }

    /**
     * Gets mix_and_match_names
     *
     * @return string[]
     */
    public function getMixAndMatchNames()
    {
        return $this->container['mix_and_match_names'];
    }

    /**
     * Sets mix_and_match_names
     *
     * @param string[] $mix_and_match_names mix_and_match_names
     *
     * @return $this
     */
    public function setMixAndMatchNames($mix_and_match_names)
    {
        $this->container['mix_and_match_names'] = $mix_and_match_names;

        return $this;
    }

    /**
     * Gets shipping_methods
     *
     * @return string[]
     */
    public function getShippingMethods()
    {
        return $this->container['shipping_methods'];
    }

    /**
     * Sets shipping_methods
     *
     * @param string[] $shipping_methods shipping_methods
     *
     * @return $this
     */
    public function setShippingMethods($shipping_methods)
    {
        $this->container['shipping_methods'] = $shipping_methods;

        return $this;
    }

    /**
     * Gets storefronts
     *
     * @return \ultracart\v2\models\SimpleValue[]
     */
    public function getStorefronts()
    {
        return $this->container['storefronts'];
    }

    /**
     * Sets storefronts
     *
     * @param \ultracart\v2\models\SimpleValue[] $storefronts storefronts
     *
     * @return $this
     */
    public function setStorefronts($storefronts)
    {
        $this->container['storefronts'] = $storefronts;

        return $this;
    }

    /**
     * Gets usable_by
     *
     * @return \ultracart\v2\models\SimpleValue[]
     */
    public function getUsableBy()
    {
        return $this->container['usable_by'];
    }

    /**
     * Sets usable_by
     *
     * @param \ultracart\v2\models\SimpleValue[] $usable_by usable_by
     *
     * @return $this
     */
    public function setUsableBy($usable_by)
    {
        $this->container['usable_by'] = $usable_by;

        return $this;
    }

    /**
     * Gets valid_with_other_coupons
     *
     * @return string[]
     */
    public function getValidWithOtherCoupons()
    {
        return $this->container['valid_with_other_coupons'];
    }

    /**
     * Sets valid_with_other_coupons
     *
     * @param string[] $valid_with_other_coupons valid_with_other_coupons
     *
     * @return $this
     */
    public function setValidWithOtherCoupons($valid_with_other_coupons)
    {
        $this->container['valid_with_other_coupons'] = $valid_with_other_coupons;

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


