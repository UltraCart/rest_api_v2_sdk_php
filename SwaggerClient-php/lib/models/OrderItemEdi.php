<?php
/**
 * OrderItemEdi
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
 * OrderItemEdi Class Doc Comment
 *
 * @category    Class
 * @package     ultracart\v2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderItemEdi implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderItemEdi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'identifications' => '\ultracart\v2\models\OrderItemEdiIdentification[]',
        'lots' => '\ultracart\v2\models\OrderItemEdiLot[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'identifications' => null,
        'lots' => null
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
        'identifications' => 'identifications',
        'lots' => 'lots'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'identifications' => 'setIdentifications',
        'lots' => 'setLots'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'identifications' => 'getIdentifications',
        'lots' => 'getLots'
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
        $this->container['identifications'] = isset($data['identifications']) ? $data['identifications'] : null;
        $this->container['lots'] = isset($data['lots']) ? $data['lots'] : null;
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
     * Gets identifications
     * @return \ultracart\v2\models\OrderItemEdiIdentification[]
     */
    public function getIdentifications()
    {
        return $this->container['identifications'];
    }

    /**
     * Sets identifications
     * @param \ultracart\v2\models\OrderItemEdiIdentification[] $identifications Identification information receives on the EDI purchase order
     * @return $this
     */
    public function setIdentifications($identifications)
    {
        $this->container['identifications'] = $identifications;

        return $this;
    }

    /**
     * Gets lots
     * @return \ultracart\v2\models\OrderItemEdiLot[]
     */
    public function getLots()
    {
        return $this->container['lots'];
    }

    /**
     * Sets lots
     * @param \ultracart\v2\models\OrderItemEdiLot[] $lots Lot information
     * @return $this
     */
    public function setLots($lots)
    {
        $this->container['lots'] = $lots;

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


