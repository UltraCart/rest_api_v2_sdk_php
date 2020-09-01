<?php
/**
 * ItemKitComponent
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
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

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * ItemKitComponent Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemKitComponent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemKitComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'component_cost' => 'float',
        'component_description' => 'string',
        'component_merchant_item_id' => 'string',
        'component_merchant_item_oid' => 'int',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'component_cost' => null,
        'component_description' => null,
        'component_merchant_item_id' => null,
        'component_merchant_item_oid' => 'int32',
        'quantity' => 'int32'
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
        'component_cost' => 'component_cost',
        'component_description' => 'component_description',
        'component_merchant_item_id' => 'component_merchant_item_id',
        'component_merchant_item_oid' => 'component_merchant_item_oid',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'component_cost' => 'setComponentCost',
        'component_description' => 'setComponentDescription',
        'component_merchant_item_id' => 'setComponentMerchantItemId',
        'component_merchant_item_oid' => 'setComponentMerchantItemOid',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'component_cost' => 'getComponentCost',
        'component_description' => 'getComponentDescription',
        'component_merchant_item_id' => 'getComponentMerchantItemId',
        'component_merchant_item_oid' => 'getComponentMerchantItemOid',
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
        $this->container['component_cost'] = isset($data['component_cost']) ? $data['component_cost'] : null;
        $this->container['component_description'] = isset($data['component_description']) ? $data['component_description'] : null;
        $this->container['component_merchant_item_id'] = isset($data['component_merchant_item_id']) ? $data['component_merchant_item_id'] : null;
        $this->container['component_merchant_item_oid'] = isset($data['component_merchant_item_oid']) ? $data['component_merchant_item_oid'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
     * Gets component_cost
     *
     * @return float
     */
    public function getComponentCost()
    {
        return $this->container['component_cost'];
    }

    /**
     * Sets component_cost
     *
     * @param float $component_cost Component item cost
     *
     * @return $this
     */
    public function setComponentCost($component_cost)
    {
        $this->container['component_cost'] = $component_cost;

        return $this;
    }

    /**
     * Gets component_description
     *
     * @return string
     */
    public function getComponentDescription()
    {
        return $this->container['component_description'];
    }

    /**
     * Sets component_description
     *
     * @param string $component_description Component item description
     *
     * @return $this
     */
    public function setComponentDescription($component_description)
    {
        $this->container['component_description'] = $component_description;

        return $this;
    }

    /**
     * Gets component_merchant_item_id
     *
     * @return string
     */
    public function getComponentMerchantItemId()
    {
        return $this->container['component_merchant_item_id'];
    }

    /**
     * Sets component_merchant_item_id
     *
     * @param string $component_merchant_item_id Component item ID
     *
     * @return $this
     */
    public function setComponentMerchantItemId($component_merchant_item_id)
    {
        $this->container['component_merchant_item_id'] = $component_merchant_item_id;

        return $this;
    }

    /**
     * Gets component_merchant_item_oid
     *
     * @return int
     */
    public function getComponentMerchantItemOid()
    {
        return $this->container['component_merchant_item_oid'];
    }

    /**
     * Sets component_merchant_item_oid
     *
     * @param int $component_merchant_item_oid Component item object identifier
     *
     * @return $this
     */
    public function setComponentMerchantItemOid($component_merchant_item_oid)
    {
        $this->container['component_merchant_item_oid'] = $component_merchant_item_oid;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Quantity
     *
     * @return $this
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


