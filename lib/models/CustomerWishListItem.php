<?php
/**
 * CustomerWishListItem
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
 * CustomerWishListItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerWishListItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerWishListItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_dts' => 'string',
        'comments' => 'string',
        'customer_profile_oid' => 'int',
        'customer_wishlist_item_oid' => 'int',
        'merchant_item_oid' => 'int',
        'position' => 'int',
        'priority' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_dts' => 'dateTime',
        'comments' => null,
        'customer_profile_oid' => 'int32',
        'customer_wishlist_item_oid' => 'int32',
        'merchant_item_oid' => 'int32',
        'position' => 'int32',
        'priority' => 'int32'
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
        'add_dts' => 'add_dts',
        'comments' => 'comments',
        'customer_profile_oid' => 'customer_profile_oid',
        'customer_wishlist_item_oid' => 'customer_wishlist_item_oid',
        'merchant_item_oid' => 'merchant_item_oid',
        'position' => 'position',
        'priority' => 'priority'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_dts' => 'setAddDts',
        'comments' => 'setComments',
        'customer_profile_oid' => 'setCustomerProfileOid',
        'customer_wishlist_item_oid' => 'setCustomerWishlistItemOid',
        'merchant_item_oid' => 'setMerchantItemOid',
        'position' => 'setPosition',
        'priority' => 'setPriority'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_dts' => 'getAddDts',
        'comments' => 'getComments',
        'customer_profile_oid' => 'getCustomerProfileOid',
        'customer_wishlist_item_oid' => 'getCustomerWishlistItemOid',
        'merchant_item_oid' => 'getMerchantItemOid',
        'position' => 'getPosition',
        'priority' => 'getPriority'
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
        $this->container['add_dts'] = $data['add_dts'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['customer_profile_oid'] = $data['customer_profile_oid'] ?? null;
        $this->container['customer_wishlist_item_oid'] = $data['customer_wishlist_item_oid'] ?? null;
        $this->container['merchant_item_oid'] = $data['merchant_item_oid'] ?? null;
        $this->container['position'] = $data['position'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['comments']) && (mb_strlen($this->container['comments']) > 1024)) {
            $invalidProperties[] = "invalid value for 'comments', the character length must be smaller than or equal to 1024.";
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
     * Gets add_dts
     *
     * @return string|null
     */
    public function getAddDts()
    {
        return $this->container['add_dts'];
    }

    /**
     * Sets add_dts
     *
     * @param string|null $add_dts Add date
     *
     * @return self
     */
    public function setAddDts($add_dts)
    {
        $this->container['add_dts'] = $add_dts;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comments
     *
     * @return self
     */
    public function setComments($comments)
    {
        if (!is_null($comments) && (mb_strlen($comments) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $comments when calling CustomerWishListItem., must be smaller than or equal to 1024.');
        }

        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets customer_profile_oid
     *
     * @return int|null
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     *
     * @param int|null $customer_profile_oid Customer profile object identifier
     *
     * @return self
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets customer_wishlist_item_oid
     *
     * @return int|null
     */
    public function getCustomerWishlistItemOid()
    {
        return $this->container['customer_wishlist_item_oid'];
    }

    /**
     * Sets customer_wishlist_item_oid
     *
     * @param int|null $customer_wishlist_item_oid Customer wishlist item object identifier
     *
     * @return self
     */
    public function setCustomerWishlistItemOid($customer_wishlist_item_oid)
    {
        $this->container['customer_wishlist_item_oid'] = $customer_wishlist_item_oid;

        return $this;
    }

    /**
     * Gets merchant_item_oid
     *
     * @return int|null
     */
    public function getMerchantItemOid()
    {
        return $this->container['merchant_item_oid'];
    }

    /**
     * Sets merchant_item_oid
     *
     * @param int|null $merchant_item_oid Merchant item object identifier
     *
     * @return self
     */
    public function setMerchantItemOid($merchant_item_oid)
    {
        $this->container['merchant_item_oid'] = $merchant_item_oid;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int|null $position Position in wishlist
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority Priority of wishlist item, 3 being low priority and 5 is high priority.
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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


