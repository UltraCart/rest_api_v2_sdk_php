<?php
/**
 * ConversationAgentProfile
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
 * ConversationAgentProfile Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationAgentProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationAgentProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'chat_limit' => 'int',
        'default_language_iso_code' => 'string',
        'default_status' => 'string',
        'display_name' => 'string',
        'name' => 'string',
        'profile_image_upload_key' => 'string',
        'profile_image_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'chat_limit' => 'int32',
        'default_language_iso_code' => null,
        'default_status' => null,
        'display_name' => null,
        'name' => null,
        'profile_image_upload_key' => null,
        'profile_image_url' => null
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
        'chat_limit' => 'chat_limit',
        'default_language_iso_code' => 'default_language_iso_code',
        'default_status' => 'default_status',
        'display_name' => 'display_name',
        'name' => 'name',
        'profile_image_upload_key' => 'profile_image_upload_key',
        'profile_image_url' => 'profile_image_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chat_limit' => 'setChatLimit',
        'default_language_iso_code' => 'setDefaultLanguageIsoCode',
        'default_status' => 'setDefaultStatus',
        'display_name' => 'setDisplayName',
        'name' => 'setName',
        'profile_image_upload_key' => 'setProfileImageUploadKey',
        'profile_image_url' => 'setProfileImageUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chat_limit' => 'getChatLimit',
        'default_language_iso_code' => 'getDefaultLanguageIsoCode',
        'default_status' => 'getDefaultStatus',
        'display_name' => 'getDisplayName',
        'name' => 'getName',
        'profile_image_upload_key' => 'getProfileImageUploadKey',
        'profile_image_url' => 'getProfileImageUrl'
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

    const DEFAULT_STATUS_AVAILABLE = 'available';
    const DEFAULT_STATUS_BUSY = 'busy';
    const DEFAULT_STATUS_UNAVAILABLE = 'unavailable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultStatusAllowableValues()
    {
        return [
            self::DEFAULT_STATUS_AVAILABLE,
            self::DEFAULT_STATUS_BUSY,
            self::DEFAULT_STATUS_UNAVAILABLE,
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
        $this->container['chat_limit'] = isset($data['chat_limit']) ? $data['chat_limit'] : null;
        $this->container['default_language_iso_code'] = isset($data['default_language_iso_code']) ? $data['default_language_iso_code'] : null;
        $this->container['default_status'] = isset($data['default_status']) ? $data['default_status'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['profile_image_upload_key'] = isset($data['profile_image_upload_key']) ? $data['profile_image_upload_key'] : null;
        $this->container['profile_image_url'] = isset($data['profile_image_url']) ? $data['profile_image_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDefaultStatusAllowableValues();
        if (!is_null($this->container['default_status']) && !in_array($this->container['default_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'default_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets chat_limit
     *
     * @return int
     */
    public function getChatLimit()
    {
        return $this->container['chat_limit'];
    }

    /**
     * Sets chat_limit
     *
     * @param int $chat_limit The number of engagement chats that can be pushed on them at any given time.
     *
     * @return $this
     */
    public function setChatLimit($chat_limit)
    {
        $this->container['chat_limit'] = $chat_limit;

        return $this;
    }

    /**
     * Gets default_language_iso_code
     *
     * @return string
     */
    public function getDefaultLanguageIsoCode()
    {
        return $this->container['default_language_iso_code'];
    }

    /**
     * Sets default_language_iso_code
     *
     * @param string $default_language_iso_code The default language the agent is chatting in
     *
     * @return $this
     */
    public function setDefaultLanguageIsoCode($default_language_iso_code)
    {
        $this->container['default_language_iso_code'] = $default_language_iso_code;

        return $this;
    }

    /**
     * Gets default_status
     *
     * @return string
     */
    public function getDefaultStatus()
    {
        return $this->container['default_status'];
    }

    /**
     * Sets default_status
     *
     * @param string $default_status Default status when the agent loads conversations app.
     *
     * @return $this
     */
    public function setDefaultStatus($default_status)
    {
        $allowedValues = $this->getDefaultStatusAllowableValues();
        if (!is_null($default_status) && !in_array($default_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'default_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['default_status'] = $default_status;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name An alternate name that the agent wants to use in chat.
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
     * @param string $name Their actual user name for profile settings display as placeholder test
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets profile_image_upload_key
     *
     * @return string
     */
    public function getProfileImageUploadKey()
    {
        return $this->container['profile_image_upload_key'];
    }

    /**
     * Sets profile_image_upload_key
     *
     * @param string $profile_image_upload_key An upload key used to update the profile image.
     *
     * @return $this
     */
    public function setProfileImageUploadKey($profile_image_upload_key)
    {
        $this->container['profile_image_upload_key'] = $profile_image_upload_key;

        return $this;
    }

    /**
     * Gets profile_image_url
     *
     * @return string
     */
    public function getProfileImageUrl()
    {
        return $this->container['profile_image_url'];
    }

    /**
     * Sets profile_image_url
     *
     * @param string $profile_image_url Their current profile image URL
     *
     * @return $this
     */
    public function setProfileImageUrl($profile_image_url)
    {
        $this->container['profile_image_url'] = $profile_image_url;

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


