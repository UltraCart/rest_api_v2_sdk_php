<?php
/**
 * CartUpsellAfter
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
 * CartUpsellAfter Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartUpsellAfter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CartUpsellAfter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'finalize_after_dts' => 'string',
        'finalize_after_minutes' => 'int',
        'upsell_path_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'finalize_after_dts' => 'dateTime',
        'finalize_after_minutes' => 'int32',
        'upsell_path_code' => null
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
        'finalize_after_dts' => 'finalize_after_dts',
        'finalize_after_minutes' => 'finalize_after_minutes',
        'upsell_path_code' => 'upsell_path_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'finalize_after_dts' => 'setFinalizeAfterDts',
        'finalize_after_minutes' => 'setFinalizeAfterMinutes',
        'upsell_path_code' => 'setUpsellPathCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'finalize_after_dts' => 'getFinalizeAfterDts',
        'finalize_after_minutes' => 'getFinalizeAfterMinutes',
        'upsell_path_code' => 'getUpsellPathCode'
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
        $this->container['finalize_after_dts'] = $data['finalize_after_dts'] ?? null;
        $this->container['finalize_after_minutes'] = $data['finalize_after_minutes'] ?? null;
        $this->container['upsell_path_code'] = $data['upsell_path_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['upsell_path_code']) && (mb_strlen($this->container['upsell_path_code']) > 5)) {
            $invalidProperties[] = "invalid value for 'upsell_path_code', the character length must be smaller than or equal to 5.";
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
     * Gets finalize_after_dts
     *
     * @return string|null
     */
    public function getFinalizeAfterDts()
    {
        return $this->container['finalize_after_dts'];
    }

    /**
     * Sets finalize_after_dts
     *
     * @param string|null $finalize_after_dts The date/time after which the cart will finalize into an order.
     *
     * @return self
     */
    public function setFinalizeAfterDts($finalize_after_dts)
    {
        $this->container['finalize_after_dts'] = $finalize_after_dts;

        return $this;
    }

    /**
     * Gets finalize_after_minutes
     *
     * @return int|null
     */
    public function getFinalizeAfterMinutes()
    {
        return $this->container['finalize_after_minutes'];
    }

    /**
     * Sets finalize_after_minutes
     *
     * @param int|null $finalize_after_minutes The amount of inactivity in minutes after which the cart should be finalized into an order.  This will calculate the finalize_after_dts field.
     *
     * @return self
     */
    public function setFinalizeAfterMinutes($finalize_after_minutes)
    {
        $this->container['finalize_after_minutes'] = $finalize_after_minutes;

        return $this;
    }

    /**
     * Gets upsell_path_code
     *
     * @return string|null
     */
    public function getUpsellPathCode()
    {
        return $this->container['upsell_path_code'];
    }

    /**
     * Sets upsell_path_code
     *
     * @param string|null $upsell_path_code Upsell path code
     *
     * @return self
     */
    public function setUpsellPathCode($upsell_path_code)
    {
        if (!is_null($upsell_path_code) && (mb_strlen($upsell_path_code) > 5)) {
            throw new \InvalidArgumentException('invalid length for $upsell_path_code when calling CartUpsellAfter., must be smaller than or equal to 5.');
        }

        $this->container['upsell_path_code'] = $upsell_path_code;

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


