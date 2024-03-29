<?php
/**
 * CouponFreeItemWithItemPurchase
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
 * CouponFreeItemWithItemPurchase Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CouponFreeItemWithItemPurchase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CouponFreeItemWithItemPurchase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item_tags' => 'string[]',
        'items' => 'string[]',
        'limit' => 'int',
        'match_required_purchase_item_to_free_item' => 'bool',
        'required_purchase_items' => 'string[]',
        'required_purchase_items_tags' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'item_tags' => null,
        'items' => null,
        'limit' => 'int32',
        'match_required_purchase_item_to_free_item' => null,
        'required_purchase_items' => null,
        'required_purchase_items_tags' => null
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
        'item_tags' => 'item_tags',
        'items' => 'items',
        'limit' => 'limit',
        'match_required_purchase_item_to_free_item' => 'match_required_purchase_item_to_free_item',
        'required_purchase_items' => 'required_purchase_items',
        'required_purchase_items_tags' => 'required_purchase_items_tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'item_tags' => 'setItemTags',
        'items' => 'setItems',
        'limit' => 'setLimit',
        'match_required_purchase_item_to_free_item' => 'setMatchRequiredPurchaseItemToFreeItem',
        'required_purchase_items' => 'setRequiredPurchaseItems',
        'required_purchase_items_tags' => 'setRequiredPurchaseItemsTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'item_tags' => 'getItemTags',
        'items' => 'getItems',
        'limit' => 'getLimit',
        'match_required_purchase_item_to_free_item' => 'getMatchRequiredPurchaseItemToFreeItem',
        'required_purchase_items' => 'getRequiredPurchaseItems',
        'required_purchase_items_tags' => 'getRequiredPurchaseItemsTags'
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
        $this->container['item_tags'] = isset($data['item_tags']) ? $data['item_tags'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['match_required_purchase_item_to_free_item'] = isset($data['match_required_purchase_item_to_free_item']) ? $data['match_required_purchase_item_to_free_item'] : null;
        $this->container['required_purchase_items'] = isset($data['required_purchase_items']) ? $data['required_purchase_items'] : null;
        $this->container['required_purchase_items_tags'] = isset($data['required_purchase_items_tags']) ? $data['required_purchase_items_tags'] : null;
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
     * @param string[] $item_tags An optional list of item tags which will receive a discount of one of the required purchased items is purchased.
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
     * @param string[] $items A list of free items which will receive a discount if one of the required purchase items is purchased.
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit The (optional) maximum quantity of discounted items.
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets match_required_purchase_item_to_free_item
     *
     * @return bool
     */
    public function getMatchRequiredPurchaseItemToFreeItem()
    {
        return $this->container['match_required_purchase_item_to_free_item'];
    }

    /**
     * Sets match_required_purchase_item_to_free_item
     *
     * @param bool $match_required_purchase_item_to_free_item If true then the free item is matched 1:1 with the free item in the list.
     *
     * @return $this
     */
    public function setMatchRequiredPurchaseItemToFreeItem($match_required_purchase_item_to_free_item)
    {
        $this->container['match_required_purchase_item_to_free_item'] = $match_required_purchase_item_to_free_item;

        return $this;
    }

    /**
     * Gets required_purchase_items
     *
     * @return string[]
     */
    public function getRequiredPurchaseItems()
    {
        return $this->container['required_purchase_items'];
    }

    /**
     * Sets required_purchase_items
     *
     * @param string[] $required_purchase_items Required items (at least one from the list) that must be purchased for coupon to be valid
     *
     * @return $this
     */
    public function setRequiredPurchaseItems($required_purchase_items)
    {
        $this->container['required_purchase_items'] = $required_purchase_items;

        return $this;
    }

    /**
     * Gets required_purchase_items_tags
     *
     * @return string[]
     */
    public function getRequiredPurchaseItemsTags()
    {
        return $this->container['required_purchase_items_tags'];
    }

    /**
     * Sets required_purchase_items_tags
     *
     * @param string[] $required_purchase_items_tags An optional list of item tags which are required to be purchased.
     *
     * @return $this
     */
    public function setRequiredPurchaseItemsTags($required_purchase_items_tags)
    {
        $this->container['required_purchase_items_tags'] = $required_purchase_items_tags;

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


