<?php
/**
 * CouponPercentOffItemsAndFreeShipping
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
 * CouponPercentOffItemsAndFreeShipping Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CouponPercentOffItemsAndFreeShipping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CouponPercentOffItemsAndFreeShipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'discount_percent' => 'float',
        'excluded_item_tags' => 'string[]',
        'excluded_items' => 'string[]',
        'item_tags' => 'string[]',
        'items' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'discount_percent' => null,
        'excluded_item_tags' => null,
        'excluded_items' => null,
        'item_tags' => null,
        'items' => null
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
        'discount_percent' => 'discount_percent',
        'excluded_item_tags' => 'excluded_item_tags',
        'excluded_items' => 'excluded_items',
        'item_tags' => 'item_tags',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_percent' => 'setDiscountPercent',
        'excluded_item_tags' => 'setExcludedItemTags',
        'excluded_items' => 'setExcludedItems',
        'item_tags' => 'setItemTags',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_percent' => 'getDiscountPercent',
        'excluded_item_tags' => 'getExcludedItemTags',
        'excluded_items' => 'getExcludedItems',
        'item_tags' => 'getItemTags',
        'items' => 'getItems'
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
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['excluded_item_tags'] = isset($data['excluded_item_tags']) ? $data['excluded_item_tags'] : null;
        $this->container['excluded_items'] = isset($data['excluded_items']) ? $data['excluded_items'] : null;
        $this->container['item_tags'] = isset($data['item_tags']) ? $data['item_tags'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets discount_percent
     *
     * @return float
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param float $discount_percent The percentage of subtotal discount
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets excluded_item_tags
     *
     * @return string[]
     */
    public function getExcludedItemTags()
    {
        return $this->container['excluded_item_tags'];
    }

    /**
     * Sets excluded_item_tags
     *
     * @param string[] $excluded_item_tags A list of item tags which cannot be discounted.
     *
     * @return $this
     */
    public function setExcludedItemTags($excluded_item_tags)
    {
        $this->container['excluded_item_tags'] = $excluded_item_tags;

        return $this;
    }

    /**
     * Gets excluded_items
     *
     * @return string[]
     */
    public function getExcludedItems()
    {
        return $this->container['excluded_items'];
    }

    /**
     * Sets excluded_items
     *
     * @param string[] $excluded_items A list of items which cannot be discounted.
     *
     * @return $this
     */
    public function setExcludedItems($excluded_items)
    {
        $this->container['excluded_items'] = $excluded_items;

        return $this;
    }

    /**
     * Gets item_tags
     *
     * @return string[]
     */
    public function getItemTags()
    {
        return $this->container['item_tags'];
    }

    /**
     * Sets item_tags
     *
     * @param string[] $item_tags An optional list of item tags which will receive a discount.  If blank, discount applies to all items except excluded items.
     *
     * @return $this
     */
    public function setItemTags($item_tags)
    {
        $this->container['item_tags'] = $item_tags;

        return $this;
    }

    /**
     * Gets items
     *
     * @return string[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param string[] $items An optional list of items which will receive a discount.  If blank, discount applies to all items except excluded items.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


