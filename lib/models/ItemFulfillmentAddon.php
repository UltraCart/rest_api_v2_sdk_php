<?php
/**
 * ItemFulfillmentAddon
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
 * ItemFulfillmentAddon Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemFulfillmentAddon implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemFulfillmentAddon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_item_id' => 'string',
        'add_item_oid' => 'int',
        'initial_order_only' => 'bool',
        'once_per_order' => 'bool',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_item_id' => null,
        'add_item_oid' => 'int32',
        'initial_order_only' => null,
        'once_per_order' => null,
        'quantity' => 'int32'
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
        'add_item_id' => 'add_item_id',
        'add_item_oid' => 'add_item_oid',
        'initial_order_only' => 'initial_order_only',
        'once_per_order' => 'once_per_order',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_item_id' => 'setAddItemId',
        'add_item_oid' => 'setAddItemOid',
        'initial_order_only' => 'setInitialOrderOnly',
        'once_per_order' => 'setOncePerOrder',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_item_id' => 'getAddItemId',
        'add_item_oid' => 'getAddItemOid',
        'initial_order_only' => 'getInitialOrderOnly',
        'once_per_order' => 'getOncePerOrder',
        'quantity' => 'getQuantity'
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
        $this->container['add_item_id'] = $data['add_item_id'] ?? null;
        $this->container['add_item_oid'] = $data['add_item_oid'] ?? null;
        $this->container['initial_order_only'] = $data['initial_order_only'] ?? null;
        $this->container['once_per_order'] = $data['once_per_order'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
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
     * Gets add_item_id
     *
     * @return string|null
     */
    public function getAddItemId()
    {
        return $this->container['add_item_id'];
    }

    /**
     * Sets add_item_id
     *
     * @param string|null $add_item_id Add Item Id
     *
     * @return self
     */
    public function setAddItemId($add_item_id)
    {
        $this->container['add_item_id'] = $add_item_id;

        return $this;
    }

    /**
     * Gets add_item_oid
     *
     * @return int|null
     */
    public function getAddItemOid()
    {
        return $this->container['add_item_oid'];
    }

    /**
     * Sets add_item_oid
     *
     * @param int|null $add_item_oid Add Item object identifier
     *
     * @return self
     */
    public function setAddItemOid($add_item_oid)
    {
        $this->container['add_item_oid'] = $add_item_oid;

        return $this;
    }

    /**
     * Gets initial_order_only
     *
     * @return bool|null
     */
    public function getInitialOrderOnly()
    {
        return $this->container['initial_order_only'];
    }

    /**
     * Sets initial_order_only
     *
     * @param bool|null $initial_order_only Initial Order Only
     *
     * @return self
     */
    public function setInitialOrderOnly($initial_order_only)
    {
        $this->container['initial_order_only'] = $initial_order_only;

        return $this;
    }

    /**
     * Gets once_per_order
     *
     * @return bool|null
     */
    public function getOncePerOrder()
    {
        return $this->container['once_per_order'];
    }

    /**
     * Sets once_per_order
     *
     * @param bool|null $once_per_order Once Per Order
     *
     * @return self
     */
    public function setOncePerOrder($once_per_order)
    {
        $this->container['once_per_order'] = $once_per_order;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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


