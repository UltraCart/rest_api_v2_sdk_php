<?php
/**
 * CartSettingsShippingCalendar
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
 * CartSettingsShippingCalendar Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartSettingsShippingCalendar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartSettingsShippingCalendar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blackouts' => 'string[]',
        'days_of_week' => 'bool[]',
        'earliest' => 'string',
        'require' => 'bool',
        'show' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blackouts' => null,
        'days_of_week' => null,
        'earliest' => null,
        'require' => null,
        'show' => null
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
        'blackouts' => 'blackouts',
        'days_of_week' => 'days_of_week',
        'earliest' => 'earliest',
        'require' => 'require',
        'show' => 'show'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blackouts' => 'setBlackouts',
        'days_of_week' => 'setDaysOfWeek',
        'earliest' => 'setEarliest',
        'require' => 'setRequire',
        'show' => 'setShow'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blackouts' => 'getBlackouts',
        'days_of_week' => 'getDaysOfWeek',
        'earliest' => 'getEarliest',
        'require' => 'getRequire',
        'show' => 'getShow'
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
        $this->container['blackouts'] = isset($data['blackouts']) ? $data['blackouts'] : null;
        $this->container['days_of_week'] = isset($data['days_of_week']) ? $data['days_of_week'] : null;
        $this->container['earliest'] = isset($data['earliest']) ? $data['earliest'] : null;
        $this->container['require'] = isset($data['require']) ? $data['require'] : null;
        $this->container['show'] = isset($data['show']) ? $data['show'] : null;
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
     * Gets blackouts
     *
     * @return string[]
     */
    public function getBlackouts()
    {
        return $this->container['blackouts'];
    }

    /**
     * Sets blackouts
     *
     * @param string[] $blackouts Specified dates that are blacked out on the calendar in ISO8601 format
     *
     * @return $this
     */
    public function setBlackouts($blackouts)
    {
        $this->container['blackouts'] = $blackouts;

        return $this;
    }

    /**
     * Gets days_of_week
     *
     * @return bool[]
     */
    public function getDaysOfWeek()
    {
        return $this->container['days_of_week'];
    }

    /**
     * Sets days_of_week
     *
     * @param bool[] $days_of_week Days of week that should be enabled on the calendar (0 - Sunday through 6 - Saturday)
     *
     * @return $this
     */
    public function setDaysOfWeek($days_of_week)
    {
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }

    /**
     * Gets earliest
     *
     * @return string
     */
    public function getEarliest()
    {
        return $this->container['earliest'];
    }

    /**
     * Sets earliest
     *
     * @param string $earliest The earliest date that can be selected on the calendar
     *
     * @return $this
     */
    public function setEarliest($earliest)
    {
        $this->container['earliest'] = $earliest;

        return $this;
    }

    /**
     * Gets require
     *
     * @return bool
     */
    public function getRequire()
    {
        return $this->container['require'];
    }

    /**
     * Sets require
     *
     * @param bool $require True if the customer is required to select a date
     *
     * @return $this
     */
    public function setRequire($require)
    {
        $this->container['require'] = $require;

        return $this;
    }

    /**
     * Gets show
     *
     * @return bool
     */
    public function getShow()
    {
        return $this->container['show'];
    }

    /**
     * Sets show
     *
     * @param bool $show True if this calendar should be shown to the customer
     *
     * @return $this
     */
    public function setShow($show)
    {
        $this->container['show'] = $show;

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


