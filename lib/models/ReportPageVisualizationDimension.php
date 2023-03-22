<?php
/**
 * ReportPageVisualizationDimension
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
 * ReportPageVisualizationDimension Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportPageVisualizationDimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportPageVisualizationDimension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'as' => 'string',
        'cast' => 'string',
        'column' => 'string',
        'datetime_timezone' => 'string',
        'datetime_trunc' => 'string',
        'extract' => 'string',
        'function' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'as' => null,
        'cast' => null,
        'column' => null,
        'datetime_timezone' => null,
        'datetime_trunc' => null,
        'extract' => null,
        'function' => null
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
        'as' => 'as',
        'cast' => 'cast',
        'column' => 'column',
        'datetime_timezone' => 'datetime_timezone',
        'datetime_trunc' => 'datetime_trunc',
        'extract' => 'extract',
        'function' => 'function'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'as' => 'setAs',
        'cast' => 'setCast',
        'column' => 'setColumn',
        'datetime_timezone' => 'setDatetimeTimezone',
        'datetime_trunc' => 'setDatetimeTrunc',
        'extract' => 'setExtract',
        'function' => 'setFunction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'as' => 'getAs',
        'cast' => 'getCast',
        'column' => 'getColumn',
        'datetime_timezone' => 'getDatetimeTimezone',
        'datetime_trunc' => 'getDatetimeTrunc',
        'extract' => 'getExtract',
        'function' => 'getFunction'
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
        $this->container['as'] = isset($data['as']) ? $data['as'] : null;
        $this->container['cast'] = isset($data['cast']) ? $data['cast'] : null;
        $this->container['column'] = isset($data['column']) ? $data['column'] : null;
        $this->container['datetime_timezone'] = isset($data['datetime_timezone']) ? $data['datetime_timezone'] : null;
        $this->container['datetime_trunc'] = isset($data['datetime_trunc']) ? $data['datetime_trunc'] : null;
        $this->container['extract'] = isset($data['extract']) ? $data['extract'] : null;
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
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
     * Gets as
     *
     * @return string
     */
    public function getAs()
    {
        return $this->container['as'];
    }

    /**
     * Sets as
     *
     * @param string $as Return the column as a different name
     *
     * @return $this
     */
    public function setAs($as)
    {
        $this->container['as'] = $as;

        return $this;
    }

    /**
     * Gets cast
     *
     * @return string
     */
    public function getCast()
    {
        return $this->container['cast'];
    }

    /**
     * Sets cast
     *
     * @param string $cast Cast the column to a different data type such as DATETIME -> DATE
     *
     * @return $this
     */
    public function setCast($cast)
    {
        $this->container['cast'] = $cast;

        return $this;
    }

    /**
     * Gets column
     *
     * @return string
     */
    public function getColumn()
    {
        return $this->container['column'];
    }

    /**
     * Sets column
     *
     * @param string $column column
     *
     * @return $this
     */
    public function setColumn($column)
    {
        $this->container['column'] = $column;

        return $this;
    }

    /**
     * Gets datetime_timezone
     *
     * @return string
     */
    public function getDatetimeTimezone()
    {
        return $this->container['datetime_timezone'];
    }

    /**
     * Sets datetime_timezone
     *
     * @param string $datetime_timezone The timezone to shift the date to
     *
     * @return $this
     */
    public function setDatetimeTimezone($datetime_timezone)
    {
        $this->container['datetime_timezone'] = $datetime_timezone;

        return $this;
    }

    /**
     * Gets datetime_trunc
     *
     * @return string
     */
    public function getDatetimeTrunc()
    {
        return $this->container['datetime_trunc'];
    }

    /**
     * Sets datetime_trunc
     *
     * @param string $datetime_trunc The type of truncation to perform on the date, DAY, WEEK(MONDAY), etc.
     *
     * @return $this
     */
    public function setDatetimeTrunc($datetime_trunc)
    {
        $this->container['datetime_trunc'] = $datetime_trunc;

        return $this;
    }

    /**
     * Gets extract
     *
     * @return string
     */
    public function getExtract()
    {
        return $this->container['extract'];
    }

    /**
     * Sets extract
     *
     * @param string $extract Part of a datetime to extract
     *
     * @return $this
     */
    public function setExtract($extract)
    {
        $this->container['extract'] = $extract;

        return $this;
    }

    /**
     * Gets function
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
     * Sets function
     *
     * @param string $function The function to perform around the column such as DATE_TRUNC(@column, day)
     *
     * @return $this
     */
    public function setFunction($function)
    {
        $this->container['function'] = $function;

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


