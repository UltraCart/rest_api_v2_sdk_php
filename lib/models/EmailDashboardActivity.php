<?php
/**
 * EmailDashboardActivity
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
 * EmailDashboardActivity Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailDashboardActivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailDashboardActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'activity_dts' => 'string',
        'activity_dts_formatted' => 'string',
        'destination_name' => 'string',
        'destination_uuid' => 'string',
        'email' => 'string',
        'is_list' => 'bool',
        'is_segment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'activity_dts' => 'dateTime',
        'activity_dts_formatted' => null,
        'destination_name' => null,
        'destination_uuid' => null,
        'email' => null,
        'is_list' => null,
        'is_segment' => null
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
        'action' => 'action',
        'activity_dts' => 'activity_dts',
        'activity_dts_formatted' => 'activity_dts_formatted',
        'destination_name' => 'destination_name',
        'destination_uuid' => 'destination_uuid',
        'email' => 'email',
        'is_list' => 'is_list',
        'is_segment' => 'is_segment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'activity_dts' => 'setActivityDts',
        'activity_dts_formatted' => 'setActivityDtsFormatted',
        'destination_name' => 'setDestinationName',
        'destination_uuid' => 'setDestinationUuid',
        'email' => 'setEmail',
        'is_list' => 'setIsList',
        'is_segment' => 'setIsSegment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'activity_dts' => 'getActivityDts',
        'activity_dts_formatted' => 'getActivityDtsFormatted',
        'destination_name' => 'getDestinationName',
        'destination_uuid' => 'getDestinationUuid',
        'email' => 'getEmail',
        'is_list' => 'getIsList',
        'is_segment' => 'getIsSegment'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['activity_dts'] = isset($data['activity_dts']) ? $data['activity_dts'] : null;
        $this->container['activity_dts_formatted'] = isset($data['activity_dts_formatted']) ? $data['activity_dts_formatted'] : null;
        $this->container['destination_name'] = isset($data['destination_name']) ? $data['destination_name'] : null;
        $this->container['destination_uuid'] = isset($data['destination_uuid']) ? $data['destination_uuid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['is_list'] = isset($data['is_list']) ? $data['is_list'] : null;
        $this->container['is_segment'] = isset($data['is_segment']) ? $data['is_segment'] : null;
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

        return true;
    }


    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Type of action such as add, remove, subscribe, unsubscribe
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets activity_dts
     *
     * @return string
     */
    public function getActivityDts()
    {
        return $this->container['activity_dts'];
    }

    /**
     * Sets activity_dts
     *
     * @param string $activity_dts Date/time of the activity
     *
     * @return $this
     */
    public function setActivityDts($activity_dts)
    {
        $this->container['activity_dts'] = $activity_dts;

        return $this;
    }

    /**
     * Gets activity_dts_formatted
     *
     * @return string
     */
    public function getActivityDtsFormatted()
    {
        return $this->container['activity_dts_formatted'];
    }

    /**
     * Sets activity_dts_formatted
     *
     * @param string $activity_dts_formatted Date/time of the activity formatted in XXX ago
     *
     * @return $this
     */
    public function setActivityDtsFormatted($activity_dts_formatted)
    {
        $this->container['activity_dts_formatted'] = $activity_dts_formatted;

        return $this;
    }

    /**
     * Gets destination_name
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->container['destination_name'];
    }

    /**
     * Sets destination_name
     *
     * @param string $destination_name List or segment name
     *
     * @return $this
     */
    public function setDestinationName($destination_name)
    {
        $this->container['destination_name'] = $destination_name;

        return $this;
    }

    /**
     * Gets destination_uuid
     *
     * @return string
     */
    public function getDestinationUuid()
    {
        return $this->container['destination_uuid'];
    }

    /**
     * Sets destination_uuid
     *
     * @param string $destination_uuid List or segment uuid
     *
     * @return $this
     */
    public function setDestinationUuid($destination_uuid)
    {
        $this->container['destination_uuid'] = $destination_uuid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets is_list
     *
     * @return bool
     */
    public function getIsList()
    {
        return $this->container['is_list'];
    }

    /**
     * Sets is_list
     *
     * @param bool $is_list true if activity is related to list
     *
     * @return $this
     */
    public function setIsList($is_list)
    {
        $this->container['is_list'] = $is_list;

        return $this;
    }

    /**
     * Gets is_segment
     *
     * @return bool
     */
    public function getIsSegment()
    {
        return $this->container['is_segment'];
    }

    /**
     * Sets is_segment
     *
     * @param bool $is_segment true if activity is related to segment
     *
     * @return $this
     */
    public function setIsSegment($is_segment)
    {
        $this->container['is_segment'] = $is_segment;

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


