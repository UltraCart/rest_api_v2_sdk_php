<?php
/**
 * ScreenRecordingSegment
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
 * ScreenRecordingSegment Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreenRecordingSegment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreenRecordingSegment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_dts' => 'string',
        'description' => 'string',
        'filter' => '\ultracart\v2\models\ScreenRecordingFilter',
        'name' => 'string',
        'screen_recording_segment_oid' => 'int',
        'session_count' => 'int',
        'session_count_last_update_dts' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_dts' => null,
        'description' => null,
        'filter' => null,
        'name' => null,
        'screen_recording_segment_oid' => 'int32',
        'session_count' => 'int32',
        'session_count_last_update_dts' => null
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
        'create_dts' => 'create_dts',
        'description' => 'description',
        'filter' => 'filter',
        'name' => 'name',
        'screen_recording_segment_oid' => 'screen_recording_segment_oid',
        'session_count' => 'session_count',
        'session_count_last_update_dts' => 'session_count_last_update_dts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_dts' => 'setCreateDts',
        'description' => 'setDescription',
        'filter' => 'setFilter',
        'name' => 'setName',
        'screen_recording_segment_oid' => 'setScreenRecordingSegmentOid',
        'session_count' => 'setSessionCount',
        'session_count_last_update_dts' => 'setSessionCountLastUpdateDts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_dts' => 'getCreateDts',
        'description' => 'getDescription',
        'filter' => 'getFilter',
        'name' => 'getName',
        'screen_recording_segment_oid' => 'getScreenRecordingSegmentOid',
        'session_count' => 'getSessionCount',
        'session_count_last_update_dts' => 'getSessionCountLastUpdateDts'
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
        $this->container['create_dts'] = isset($data['create_dts']) ? $data['create_dts'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['screen_recording_segment_oid'] = isset($data['screen_recording_segment_oid']) ? $data['screen_recording_segment_oid'] : null;
        $this->container['session_count'] = isset($data['session_count']) ? $data['session_count'] : null;
        $this->container['session_count_last_update_dts'] = isset($data['session_count_last_update_dts']) ? $data['session_count_last_update_dts'] : null;
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
     * Gets create_dts
     *
     * @return string
     */
    public function getCreateDts()
    {
        return $this->container['create_dts'];
    }

    /**
     * Sets create_dts
     *
     * @param string $create_dts create_dts
     *
     * @return $this
     */
    public function setCreateDts($create_dts)
    {
        $this->container['create_dts'] = $create_dts;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \ultracart\v2\models\ScreenRecordingFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \ultracart\v2\models\ScreenRecordingFilter $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets screen_recording_segment_oid
     *
     * @return int
     */
    public function getScreenRecordingSegmentOid()
    {
        return $this->container['screen_recording_segment_oid'];
    }

    /**
     * Sets screen_recording_segment_oid
     *
     * @param int $screen_recording_segment_oid screen_recording_segment_oid
     *
     * @return $this
     */
    public function setScreenRecordingSegmentOid($screen_recording_segment_oid)
    {
        $this->container['screen_recording_segment_oid'] = $screen_recording_segment_oid;

        return $this;
    }

    /**
     * Gets session_count
     *
     * @return int
     */
    public function getSessionCount()
    {
        return $this->container['session_count'];
    }

    /**
     * Sets session_count
     *
     * @param int $session_count session_count
     *
     * @return $this
     */
    public function setSessionCount($session_count)
    {
        $this->container['session_count'] = $session_count;

        return $this;
    }

    /**
     * Gets session_count_last_update_dts
     *
     * @return string
     */
    public function getSessionCountLastUpdateDts()
    {
        return $this->container['session_count_last_update_dts'];
    }

    /**
     * Sets session_count_last_update_dts
     *
     * @param string $session_count_last_update_dts session_count_last_update_dts
     *
     * @return $this
     */
    public function setSessionCountLastUpdateDts($session_count_last_update_dts)
    {
        $this->container['session_count_last_update_dts'] = $session_count_last_update_dts;

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

