<?php
/**
 * ConversationPbxMenuMapping
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
 * ConversationPbxMenuMapping Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationPbxMenuMapping implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationPbxMenuMapping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'action_target' => 'string',
        'digits' => 'int',
        'speech' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'action_target' => null,
        'digits' => 'int32',
        'speech' => null
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
        'action_target' => 'action_target',
        'digits' => 'digits',
        'speech' => 'speech'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'action_target' => 'setActionTarget',
        'digits' => 'setDigits',
        'speech' => 'setSpeech'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'action_target' => 'getActionTarget',
        'digits' => 'getDigits',
        'speech' => 'getSpeech'
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

    const ACTION_TIME_BASED = 'time based';
    const ACTION_MENU = 'menu';
    const ACTION_QUEUE = 'queue';
    const ACTION_VOICEMAIL = 'voicemail';
    const ACTION_AGENT = 'agent';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_TIME_BASED,
            self::ACTION_MENU,
            self::ACTION_QUEUE,
            self::ACTION_VOICEMAIL,
            self::ACTION_AGENT,
        ];
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
        $this->container['action_target'] = isset($data['action_target']) ? $data['action_target'] : null;
        $this->container['digits'] = isset($data['digits']) ? $data['digits'] : null;
        $this->container['speech'] = isset($data['speech']) ? $data['speech'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 30)) {
            $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['action_target']) && (mb_strlen($this->container['action_target']) > 50)) {
            $invalidProperties[] = "invalid value for 'action_target', the character length must be smaller than or equal to 50.";
        }

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
     * @param string $action Action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($action) && (mb_strlen($action) > 30)) {
            throw new \InvalidArgumentException('invalid length for $action when calling ConversationPbxMenuMapping., must be smaller than or equal to 30.');
        }

        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets action_target
     *
     * @return string
     */
    public function getActionTarget()
    {
        return $this->container['action_target'];
    }

    /**
     * Sets action_target
     *
     * @param string $action_target Action target.  This is the UUID associated with the configuration object of that particular type.
     *
     * @return $this
     */
    public function setActionTarget($action_target)
    {
        if (!is_null($action_target) && (mb_strlen($action_target) > 50)) {
            throw new \InvalidArgumentException('invalid length for $action_target when calling ConversationPbxMenuMapping., must be smaller than or equal to 50.');
        }

        $this->container['action_target'] = $action_target;

        return $this;
    }

    /**
     * Gets digits
     *
     * @return int
     */
    public function getDigits()
    {
        return $this->container['digits'];
    }

    /**
     * Sets digits
     *
     * @param int $digits Digits
     *
     * @return $this
     */
    public function setDigits($digits)
    {
        $this->container['digits'] = $digits;

        return $this;
    }

    /**
     * Gets speech
     *
     * @return string
     */
    public function getSpeech()
    {
        return $this->container['speech'];
    }

    /**
     * Sets speech
     *
     * @param string $speech Speech
     *
     * @return $this
     */
    public function setSpeech($speech)
    {
        $this->container['speech'] = $speech;

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


