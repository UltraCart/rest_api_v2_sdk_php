<?php
/**
 * CouponFreeItemsWithItemPurchase
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
 * CouponFreeItemsWithItemPurchase Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CouponFreeItemsWithItemPurchase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponFreeItemsWithItemPurchase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'free_item' => 'string',
        'free_quantity' => 'int',
        'limit' => 'int',
        'required_purchase_item' => 'string',
        'required_purchase_quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'free_item' => null,
        'free_quantity' => 'int32',
        'limit' => 'int32',
        'required_purchase_item' => null,
        'required_purchase_quantity' => 'int32'
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
        'free_item' => 'free_item',
        'free_quantity' => 'free_quantity',
        'limit' => 'limit',
        'required_purchase_item' => 'required_purchase_item',
        'required_purchase_quantity' => 'required_purchase_quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'free_item' => 'setFreeItem',
        'free_quantity' => 'setFreeQuantity',
        'limit' => 'setLimit',
        'required_purchase_item' => 'setRequiredPurchaseItem',
        'required_purchase_quantity' => 'setRequiredPurchaseQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'free_item' => 'getFreeItem',
        'free_quantity' => 'getFreeQuantity',
        'limit' => 'getLimit',
        'required_purchase_item' => 'getRequiredPurchaseItem',
        'required_purchase_quantity' => 'getRequiredPurchaseQuantity'
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
        $this->container['free_item'] = $data['free_item'] ?? null;
        $this->container['free_quantity'] = $data['free_quantity'] ?? null;
        $this->container['limit'] = $data['limit'] ?? null;
        $this->container['required_purchase_item'] = $data['required_purchase_item'] ?? null;
        $this->container['required_purchase_quantity'] = $data['required_purchase_quantity'] ?? null;
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
     * Gets free_item
     *
     * @return string|null
     */
    public function getFreeItem()
    {
        return $this->container['free_item'];
    }

    /**
     * Sets free_item
     *
     * @param string|null $free_item The item id of the free item that will be received when the required mix and match group quantity is purchased.
     *
     * @return self
     */
    public function setFreeItem($free_item)
    {
        $this->container['free_item'] = $free_item;

        return $this;
    }

    /**
     * Gets free_quantity
     *
     * @return int|null
     */
    public function getFreeQuantity()
    {
        return $this->container['free_quantity'];
    }

    /**
     * Sets free_quantity
     *
     * @param int|null $free_quantity The quantity of free item that will be received.
     *
     * @return self
     */
    public function setFreeQuantity($free_quantity)
    {
        $this->container['free_quantity'] = $free_quantity;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit The limit of free items that may be received when purchasing multiple items
     *
     * @return self
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets required_purchase_item
     *
     * @return string|null
     */
    public function getRequiredPurchaseItem()
    {
        return $this->container['required_purchase_item'];
    }

    /**
     * Sets required_purchase_item
     *
     * @param string|null $required_purchase_item Required item that must be purchased for coupon to be valid
     *
     * @return self
     */
    public function setRequiredPurchaseItem($required_purchase_item)
    {
        $this->container['required_purchase_item'] = $required_purchase_item;

        return $this;
    }

    /**
     * Gets required_purchase_quantity
     *
     * @return int|null
     */
    public function getRequiredPurchaseQuantity()
    {
        return $this->container['required_purchase_quantity'];
    }

    /**
     * Sets required_purchase_quantity
     *
     * @param int|null $required_purchase_quantity Required quantity of mix and match group items that must be purchased for coupon to be valid
     *
     * @return self
     */
    public function setRequiredPurchaseQuantity($required_purchase_quantity)
    {
        $this->container['required_purchase_quantity'] = $required_purchase_quantity;

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


