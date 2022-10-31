<?php
/**
 * ConversationParticipant
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * ConversationParticipant Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationParticipant implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationParticipant';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conversation_participant_arn' => 'string',
        'conversation_participant_name' => 'string',
        'conversation_participant_uuid' => 'string',
        'joined_dts' => 'string',
        'last_message_dts' => 'string',
        'left_dts' => 'string',
        'profile_image_url' => 'string',
        'status' => 'string',
        'timezone' => 'string',
        'unread_messages' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'conversation_participant_arn' => null,
        'conversation_participant_name' => null,
        'conversation_participant_uuid' => null,
        'joined_dts' => 'dateTime',
        'last_message_dts' => 'dateTime',
        'left_dts' => 'dateTime',
        'profile_image_url' => null,
        'status' => null,
        'timezone' => null,
        'unread_messages' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'conversation_participant_arn' => 'conversation_participant_arn',
        'conversation_participant_name' => 'conversation_participant_name',
        'conversation_participant_uuid' => 'conversation_participant_uuid',
        'joined_dts' => 'joined_dts',
        'last_message_dts' => 'last_message_dts',
        'left_dts' => 'left_dts',
        'profile_image_url' => 'profile_image_url',
        'status' => 'status',
        'timezone' => 'timezone',
        'unread_messages' => 'unread_messages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversation_participant_arn' => 'setConversationParticipantArn',
        'conversation_participant_name' => 'setConversationParticipantName',
        'conversation_participant_uuid' => 'setConversationParticipantUuid',
        'joined_dts' => 'setJoinedDts',
        'last_message_dts' => 'setLastMessageDts',
        'left_dts' => 'setLeftDts',
        'profile_image_url' => 'setProfileImageUrl',
        'status' => 'setStatus',
        'timezone' => 'setTimezone',
        'unread_messages' => 'setUnreadMessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversation_participant_arn' => 'getConversationParticipantArn',
        'conversation_participant_name' => 'getConversationParticipantName',
        'conversation_participant_uuid' => 'getConversationParticipantUuid',
        'joined_dts' => 'getJoinedDts',
        'last_message_dts' => 'getLastMessageDts',
        'left_dts' => 'getLeftDts',
        'profile_image_url' => 'getProfileImageUrl',
        'status' => 'getStatus',
        'timezone' => 'getTimezone',
        'unread_messages' => 'getUnreadMessages'
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
        return self::$openAPIModelName;
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
        $this->container['conversation_participant_arn'] = $data['conversation_participant_arn'] ?? null;
        $this->container['conversation_participant_name'] = $data['conversation_participant_name'] ?? null;
        $this->container['conversation_participant_uuid'] = $data['conversation_participant_uuid'] ?? null;
        $this->container['joined_dts'] = $data['joined_dts'] ?? null;
        $this->container['last_message_dts'] = $data['last_message_dts'] ?? null;
        $this->container['left_dts'] = $data['left_dts'] ?? null;
        $this->container['profile_image_url'] = $data['profile_image_url'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['timezone'] = $data['timezone'] ?? null;
        $this->container['unread_messages'] = $data['unread_messages'] ?? null;
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
     * Gets conversation_participant_arn
     *
     * @return string|null
     */
    public function getConversationParticipantArn()
    {
        return $this->container['conversation_participant_arn'];
    }

    /**
     * Sets conversation_participant_arn
     *
     * @param string|null $conversation_participant_arn conversation_participant_arn
     *
     * @return self
     */
    public function setConversationParticipantArn($conversation_participant_arn)
    {
        $this->container['conversation_participant_arn'] = $conversation_participant_arn;

        return $this;
    }

    /**
     * Gets conversation_participant_name
     *
     * @return string|null
     */
    public function getConversationParticipantName()
    {
        return $this->container['conversation_participant_name'];
    }

    /**
     * Sets conversation_participant_name
     *
     * @param string|null $conversation_participant_name conversation_participant_name
     *
     * @return self
     */
    public function setConversationParticipantName($conversation_participant_name)
    {
        $this->container['conversation_participant_name'] = $conversation_participant_name;

        return $this;
    }

    /**
     * Gets conversation_participant_uuid
     *
     * @return string|null
     */
    public function getConversationParticipantUuid()
    {
        return $this->container['conversation_participant_uuid'];
    }

    /**
     * Sets conversation_participant_uuid
     *
     * @param string|null $conversation_participant_uuid conversation_participant_uuid
     *
     * @return self
     */
    public function setConversationParticipantUuid($conversation_participant_uuid)
    {
        $this->container['conversation_participant_uuid'] = $conversation_participant_uuid;

        return $this;
    }

    /**
     * Gets joined_dts
     *
     * @return string|null
     */
    public function getJoinedDts()
    {
        return $this->container['joined_dts'];
    }

    /**
     * Sets joined_dts
     *
     * @param string|null $joined_dts Joined conversation date/time
     *
     * @return self
     */
    public function setJoinedDts($joined_dts)
    {
        $this->container['joined_dts'] = $joined_dts;

        return $this;
    }

    /**
     * Gets last_message_dts
     *
     * @return string|null
     */
    public function getLastMessageDts()
    {
        return $this->container['last_message_dts'];
    }

    /**
     * Sets last_message_dts
     *
     * @param string|null $last_message_dts Last message date/time
     *
     * @return self
     */
    public function setLastMessageDts($last_message_dts)
    {
        $this->container['last_message_dts'] = $last_message_dts;

        return $this;
    }

    /**
     * Gets left_dts
     *
     * @return string|null
     */
    public function getLeftDts()
    {
        return $this->container['left_dts'];
    }

    /**
     * Sets left_dts
     *
     * @param string|null $left_dts Left conversation date/time
     *
     * @return self
     */
    public function setLeftDts($left_dts)
    {
        $this->container['left_dts'] = $left_dts;

        return $this;
    }

    /**
     * Gets profile_image_url
     *
     * @return string|null
     */
    public function getProfileImageUrl()
    {
        return $this->container['profile_image_url'];
    }

    /**
     * Sets profile_image_url
     *
     * @param string|null $profile_image_url profile_image_url
     *
     * @return self
     */
    public function setProfileImageUrl($profile_image_url)
    {
        $this->container['profile_image_url'] = $profile_image_url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone timezone
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets unread_messages
     *
     * @return int|null
     */
    public function getUnreadMessages()
    {
        return $this->container['unread_messages'];
    }

    /**
     * Sets unread_messages
     *
     * @param int|null $unread_messages unread_messages
     *
     * @return self
     */
    public function setUnreadMessages($unread_messages)
    {
        $this->container['unread_messages'] = $unread_messages;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


