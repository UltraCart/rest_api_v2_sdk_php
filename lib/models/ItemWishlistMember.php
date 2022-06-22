<?php
/**
 * ItemWishlistMember
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
 * ItemWishlistMember Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemWishlistMember implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemWishlistMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'wishlist_member_instance_description' => 'string',
        'wishlist_member_instance_oid' => 'int',
        'wishlist_member_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'wishlist_member_instance_description' => null,
        'wishlist_member_instance_oid' => 'int32',
        'wishlist_member_sku' => null
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
        'wishlist_member_instance_description' => 'wishlist_member_instance_description',
        'wishlist_member_instance_oid' => 'wishlist_member_instance_oid',
        'wishlist_member_sku' => 'wishlist_member_sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'wishlist_member_instance_description' => 'setWishlistMemberInstanceDescription',
        'wishlist_member_instance_oid' => 'setWishlistMemberInstanceOid',
        'wishlist_member_sku' => 'setWishlistMemberSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'wishlist_member_instance_description' => 'getWishlistMemberInstanceDescription',
        'wishlist_member_instance_oid' => 'getWishlistMemberInstanceOid',
        'wishlist_member_sku' => 'getWishlistMemberSku'
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
        $this->container['wishlist_member_instance_description'] = $data['wishlist_member_instance_description'] ?? null;
        $this->container['wishlist_member_instance_oid'] = $data['wishlist_member_instance_oid'] ?? null;
        $this->container['wishlist_member_sku'] = $data['wishlist_member_sku'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['wishlist_member_sku']) && (mb_strlen($this->container['wishlist_member_sku']) > 25)) {
            $invalidProperties[] = "invalid value for 'wishlist_member_sku', the character length must be smaller than or equal to 25.";
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
     * Gets wishlist_member_instance_description
     *
     * @return string|null
     */
    public function getWishlistMemberInstanceDescription()
    {
        return $this->container['wishlist_member_instance_description'];
    }

    /**
     * Sets wishlist_member_instance_description
     *
     * @param string|null $wishlist_member_instance_description WishList Member instance description
     *
     * @return self
     */
    public function setWishlistMemberInstanceDescription($wishlist_member_instance_description)
    {
        $this->container['wishlist_member_instance_description'] = $wishlist_member_instance_description;

        return $this;
    }

    /**
     * Gets wishlist_member_instance_oid
     *
     * @return int|null
     */
    public function getWishlistMemberInstanceOid()
    {
        return $this->container['wishlist_member_instance_oid'];
    }

    /**
     * Sets wishlist_member_instance_oid
     *
     * @param int|null $wishlist_member_instance_oid WishList Member instance object identifier
     *
     * @return self
     */
    public function setWishlistMemberInstanceOid($wishlist_member_instance_oid)
    {
        $this->container['wishlist_member_instance_oid'] = $wishlist_member_instance_oid;

        return $this;
    }

    /**
     * Gets wishlist_member_sku
     *
     * @return string|null
     */
    public function getWishlistMemberSku()
    {
        return $this->container['wishlist_member_sku'];
    }

    /**
     * Sets wishlist_member_sku
     *
     * @param string|null $wishlist_member_sku WishList Member SKU
     *
     * @return self
     */
    public function setWishlistMemberSku($wishlist_member_sku)
    {
        if (!is_null($wishlist_member_sku) && (mb_strlen($wishlist_member_sku) > 25)) {
            throw new \InvalidArgumentException('invalid length for $wishlist_member_sku when calling ItemWishlistMember., must be smaller than or equal to 25.');
        }

        $this->container['wishlist_member_sku'] = $wishlist_member_sku;

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


