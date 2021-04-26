<?php
/**
 * ScreenRecordingFilterValuesPageView
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
 * ScreenRecordingFilterValuesPageView Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreenRecordingFilterValuesPageView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreenRecordingFilterValuesPageView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'events' => '\ultracart\v2\models\ScreenRecordingFilterValuesEvent[]',
        'page_params' => '\ultracart\v2\models\ScreenRecordingFilterValuesPageParam[]',
        'time_on_page_max' => 'int',
        'time_on_page_min' => 'int',
        'urls' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'events' => null,
        'page_params' => null,
        'time_on_page_max' => 'int32',
        'time_on_page_min' => 'int32',
        'urls' => null
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
        'events' => 'events',
        'page_params' => 'page_params',
        'time_on_page_max' => 'time_on_page_max',
        'time_on_page_min' => 'time_on_page_min',
        'urls' => 'urls'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'events' => 'setEvents',
        'page_params' => 'setPageParams',
        'time_on_page_max' => 'setTimeOnPageMax',
        'time_on_page_min' => 'setTimeOnPageMin',
        'urls' => 'setUrls'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'events' => 'getEvents',
        'page_params' => 'getPageParams',
        'time_on_page_max' => 'getTimeOnPageMax',
        'time_on_page_min' => 'getTimeOnPageMin',
        'urls' => 'getUrls'
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
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['page_params'] = isset($data['page_params']) ? $data['page_params'] : null;
        $this->container['time_on_page_max'] = isset($data['time_on_page_max']) ? $data['time_on_page_max'] : null;
        $this->container['time_on_page_min'] = isset($data['time_on_page_min']) ? $data['time_on_page_min'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
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
     * Gets events
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterValuesEvent[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterValuesEvent[] $events events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets page_params
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterValuesPageParam[]
     */
    public function getPageParams()
    {
        return $this->container['page_params'];
    }

    /**
     * Sets page_params
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterValuesPageParam[] $page_params page_params
     *
     * @return $this
     */
    public function setPageParams($page_params)
    {
        $this->container['page_params'] = $page_params;

        return $this;
    }

    /**
     * Gets time_on_page_max
     *
     * @return int
     */
    public function getTimeOnPageMax()
    {
        return $this->container['time_on_page_max'];
    }

    /**
     * Sets time_on_page_max
     *
     * @param int $time_on_page_max time_on_page_max
     *
     * @return $this
     */
    public function setTimeOnPageMax($time_on_page_max)
    {
        $this->container['time_on_page_max'] = $time_on_page_max;

        return $this;
    }

    /**
     * Gets time_on_page_min
     *
     * @return int
     */
    public function getTimeOnPageMin()
    {
        return $this->container['time_on_page_min'];
    }

    /**
     * Sets time_on_page_min
     *
     * @param int $time_on_page_min time_on_page_min
     *
     * @return $this
     */
    public function setTimeOnPageMin($time_on_page_min)
    {
        $this->container['time_on_page_min'] = $time_on_page_min;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return string[]
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[] $urls urls
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;

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

