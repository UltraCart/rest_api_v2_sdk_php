<?php
/**
 * ItemEmailNotifications
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * ItemEmailNotifications Class Doc Comment
 *
 * @category    Class
 * @package     ultracart\v2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemEmailNotifications implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemEmailNotifications';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'skip_receipt' => 'bool',
        'skip_shipment_notification' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'skip_receipt' => null,
        'skip_shipment_notification' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'skip_receipt' => 'skip_receipt',
        'skip_shipment_notification' => 'skip_shipment_notification'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'skip_receipt' => 'setSkipReceipt',
        'skip_shipment_notification' => 'setSkipShipmentNotification'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'skip_receipt' => 'getSkipReceipt',
        'skip_shipment_notification' => 'getSkipShipmentNotification'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['skip_receipt'] = isset($data['skip_receipt']) ? $data['skip_receipt'] : null;
        $this->container['skip_shipment_notification'] = isset($data['skip_shipment_notification']) ? $data['skip_shipment_notification'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets skip_receipt
     * @return bool
     */
    public function getSkipReceipt()
    {
        return $this->container['skip_receipt'];
    }

    /**
     * Sets skip_receipt
     * @param bool $skip_receipt Skip receipt email to customer
     * @return $this
     */
    public function setSkipReceipt($skip_receipt)
    {
        $this->container['skip_receipt'] = $skip_receipt;

        return $this;
    }

    /**
     * Gets skip_shipment_notification
     * @return bool
     */
    public function getSkipShipmentNotification()
    {
        return $this->container['skip_shipment_notification'];
    }

    /**
     * Sets skip_shipment_notification
     * @param bool $skip_shipment_notification Skip shipment notification to customer
     * @return $this
     */
    public function setSkipShipmentNotification($skip_shipment_notification)
    {
        $this->container['skip_shipment_notification'] = $skip_shipment_notification;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


