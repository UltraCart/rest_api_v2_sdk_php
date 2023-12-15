<?php
/**
 * ItemRestriction
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
 * ItemRestriction Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemRestriction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemRestriction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exclude_coupon' => 'bool',
        'exclude_from_free_promotion' => 'bool',
        'items' => '\ultracart\v2\models\ItemRestrictionItem[]',
        'maximum_quantity' => 'int',
        'minimum_quantity' => 'int',
        'multiple_quantity' => 'int',
        'one_per_customer' => 'bool',
        'purchase_separately' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exclude_coupon' => null,
        'exclude_from_free_promotion' => null,
        'items' => null,
        'maximum_quantity' => 'int32',
        'minimum_quantity' => 'int32',
        'multiple_quantity' => 'int32',
        'one_per_customer' => null,
        'purchase_separately' => null
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
        'exclude_coupon' => 'exclude_coupon',
        'exclude_from_free_promotion' => 'exclude_from_free_promotion',
        'items' => 'items',
        'maximum_quantity' => 'maximum_quantity',
        'minimum_quantity' => 'minimum_quantity',
        'multiple_quantity' => 'multiple_quantity',
        'one_per_customer' => 'one_per_customer',
        'purchase_separately' => 'purchase_separately'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exclude_coupon' => 'setExcludeCoupon',
        'exclude_from_free_promotion' => 'setExcludeFromFreePromotion',
        'items' => 'setItems',
        'maximum_quantity' => 'setMaximumQuantity',
        'minimum_quantity' => 'setMinimumQuantity',
        'multiple_quantity' => 'setMultipleQuantity',
        'one_per_customer' => 'setOnePerCustomer',
        'purchase_separately' => 'setPurchaseSeparately'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exclude_coupon' => 'getExcludeCoupon',
        'exclude_from_free_promotion' => 'getExcludeFromFreePromotion',
        'items' => 'getItems',
        'maximum_quantity' => 'getMaximumQuantity',
        'minimum_quantity' => 'getMinimumQuantity',
        'multiple_quantity' => 'getMultipleQuantity',
        'one_per_customer' => 'getOnePerCustomer',
        'purchase_separately' => 'getPurchaseSeparately'
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
        $this->container['exclude_coupon'] = $data['exclude_coupon'] ?? null;
        $this->container['exclude_from_free_promotion'] = $data['exclude_from_free_promotion'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['maximum_quantity'] = $data['maximum_quantity'] ?? null;
        $this->container['minimum_quantity'] = $data['minimum_quantity'] ?? null;
        $this->container['multiple_quantity'] = $data['multiple_quantity'] ?? null;
        $this->container['one_per_customer'] = $data['one_per_customer'] ?? null;
        $this->container['purchase_separately'] = $data['purchase_separately'] ?? null;
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
     * Gets exclude_coupon
     *
     * @return bool|null
     */
    public function getExcludeCoupon()
    {
        return $this->container['exclude_coupon'];
    }

    /**
     * Sets exclude_coupon
     *
     * @param bool|null $exclude_coupon Exclude coupons
     *
     * @return self
     */
    public function setExcludeCoupon($exclude_coupon)
    {
        $this->container['exclude_coupon'] = $exclude_coupon;

        return $this;
    }

    /**
     * Gets exclude_from_free_promotion
     *
     * @return bool|null
     */
    public function getExcludeFromFreePromotion()
    {
        return $this->container['exclude_from_free_promotion'];
    }

    /**
     * Sets exclude_from_free_promotion
     *
     * @param bool|null $exclude_from_free_promotion Exclude from free promotion
     *
     * @return self
     */
    public function setExcludeFromFreePromotion($exclude_from_free_promotion)
    {
        $this->container['exclude_from_free_promotion'] = $exclude_from_free_promotion;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ultracart\v2\models\ItemRestrictionItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ultracart\v2\models\ItemRestrictionItem[]|null $items Items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets maximum_quantity
     *
     * @return int|null
     */
    public function getMaximumQuantity()
    {
        return $this->container['maximum_quantity'];
    }

    /**
     * Sets maximum_quantity
     *
     * @param int|null $maximum_quantity Maximum quantity
     *
     * @return self
     */
    public function setMaximumQuantity($maximum_quantity)
    {
        $this->container['maximum_quantity'] = $maximum_quantity;

        return $this;
    }

    /**
     * Gets minimum_quantity
     *
     * @return int|null
     */
    public function getMinimumQuantity()
    {
        return $this->container['minimum_quantity'];
    }

    /**
     * Sets minimum_quantity
     *
     * @param int|null $minimum_quantity Minimum quantity (defaults to 1)
     *
     * @return self
     */
    public function setMinimumQuantity($minimum_quantity)
    {
        $this->container['minimum_quantity'] = $minimum_quantity;

        return $this;
    }

    /**
     * Gets multiple_quantity
     *
     * @return int|null
     */
    public function getMultipleQuantity()
    {
        return $this->container['multiple_quantity'];
    }

    /**
     * Sets multiple_quantity
     *
     * @param int|null $multiple_quantity Multiple of quantity
     *
     * @return self
     */
    public function setMultipleQuantity($multiple_quantity)
    {
        $this->container['multiple_quantity'] = $multiple_quantity;

        return $this;
    }

    /**
     * Gets one_per_customer
     *
     * @return bool|null
     */
    public function getOnePerCustomer()
    {
        return $this->container['one_per_customer'];
    }

    /**
     * Sets one_per_customer
     *
     * @param bool|null $one_per_customer One per customer
     *
     * @return self
     */
    public function setOnePerCustomer($one_per_customer)
    {
        $this->container['one_per_customer'] = $one_per_customer;

        return $this;
    }

    /**
     * Gets purchase_separately
     *
     * @return bool|null
     */
    public function getPurchaseSeparately()
    {
        return $this->container['purchase_separately'];
    }

    /**
     * Sets purchase_separately
     *
     * @param bool|null $purchase_separately Purchase separately
     *
     * @return self
     */
    public function setPurchaseSeparately($purchase_separately)
    {
        $this->container['purchase_separately'] = $purchase_separately;

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


