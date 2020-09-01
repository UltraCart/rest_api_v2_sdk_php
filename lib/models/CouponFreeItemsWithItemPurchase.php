<?php
/**
 * CouponFreeItemsWithItemPurchase
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
 * CouponFreeItemsWithItemPurchase Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CouponFreeItemsWithItemPurchase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CouponFreeItemsWithItemPurchase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['free_item'] = isset($data['free_item']) ? $data['free_item'] : null;
        $this->container['free_quantity'] = isset($data['free_quantity']) ? $data['free_quantity'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['required_purchase_item'] = isset($data['required_purchase_item']) ? $data['required_purchase_item'] : null;
        $this->container['required_purchase_quantity'] = isset($data['required_purchase_quantity']) ? $data['required_purchase_quantity'] : null;
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
     * @return string
     */
    public function getFreeItem()
    {
        return $this->container['free_item'];
    }

    /**
     * Sets free_item
     *
     * @param string $free_item The item id of the free item that will be received when the required mix and match group quantity is purchased.
     *
     * @return $this
     */
    public function setFreeItem($free_item)
    {
        $this->container['free_item'] = $free_item;

        return $this;
    }

    /**
     * Gets free_quantity
     *
     * @return int
     */
    public function getFreeQuantity()
    {
        return $this->container['free_quantity'];
    }

    /**
     * Sets free_quantity
     *
     * @param int $free_quantity The quantity of free item that will be received.
     *
     * @return $this
     */
    public function setFreeQuantity($free_quantity)
    {
        $this->container['free_quantity'] = $free_quantity;

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
     * @param int $limit The limit of free items that may be received when purchasing multiple items
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets required_purchase_item
     *
     * @return string
     */
    public function getRequiredPurchaseItem()
    {
        return $this->container['required_purchase_item'];
    }

    /**
     * Sets required_purchase_item
     *
     * @param string $required_purchase_item Required item that must be purchased for coupon to be valid
     *
     * @return $this
     */
    public function setRequiredPurchaseItem($required_purchase_item)
    {
        $this->container['required_purchase_item'] = $required_purchase_item;

        return $this;
    }

    /**
     * Gets required_purchase_quantity
     *
     * @return int
     */
    public function getRequiredPurchaseQuantity()
    {
        return $this->container['required_purchase_quantity'];
    }

    /**
     * Sets required_purchase_quantity
     *
     * @param int $required_purchase_quantity Required quantity of mix and match group items that must be purchased for coupon to be valid
     *
     * @return $this
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


