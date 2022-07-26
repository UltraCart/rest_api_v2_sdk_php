<?php
/**
 * ConversationWebsocketMessage
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
 * ConversationWebsocketMessage Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationWebsocketMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationWebsocketMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conversation_uuid' => 'string',
        'event_conversation_closed' => '\ultracart\v2\models\ConversationSummary',
        'event_new_conversation' => '\ultracart\v2\models\ConversationSummary',
        'event_new_message' => '\ultracart\v2\models\ConversationSummary',
        'event_queue_position' => '\ultracart\v2\models\ConversationEventQueuePosition',
        'event_queue_status_update' => '\ultracart\v2\models\ConversationWebchatQueueStatus',
        'event_type' => 'string',
        'event_updated_message' => '\ultracart\v2\models\ConversationMessage',
        'message' => '\ultracart\v2\models\ConversationMessage',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'conversation_uuid' => null,
        'event_conversation_closed' => null,
        'event_new_conversation' => null,
        'event_new_message' => null,
        'event_queue_position' => null,
        'event_queue_status_update' => null,
        'event_type' => null,
        'event_updated_message' => null,
        'message' => null,
        'type' => null
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
        'conversation_uuid' => 'conversation_uuid',
        'event_conversation_closed' => 'event_conversation_closed',
        'event_new_conversation' => 'event_new_conversation',
        'event_new_message' => 'event_new_message',
        'event_queue_position' => 'event_queue_position',
        'event_queue_status_update' => 'event_queue_status_update',
        'event_type' => 'event_type',
        'event_updated_message' => 'event_updated_message',
        'message' => 'message',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversation_uuid' => 'setConversationUuid',
        'event_conversation_closed' => 'setEventConversationClosed',
        'event_new_conversation' => 'setEventNewConversation',
        'event_new_message' => 'setEventNewMessage',
        'event_queue_position' => 'setEventQueuePosition',
        'event_queue_status_update' => 'setEventQueueStatusUpdate',
        'event_type' => 'setEventType',
        'event_updated_message' => 'setEventUpdatedMessage',
        'message' => 'setMessage',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversation_uuid' => 'getConversationUuid',
        'event_conversation_closed' => 'getEventConversationClosed',
        'event_new_conversation' => 'getEventNewConversation',
        'event_new_message' => 'getEventNewMessage',
        'event_queue_position' => 'getEventQueuePosition',
        'event_queue_status_update' => 'getEventQueueStatusUpdate',
        'event_type' => 'getEventType',
        'event_updated_message' => 'getEventUpdatedMessage',
        'message' => 'getMessage',
        'type' => 'getType'
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

    public const EVENT_TYPE_QUEUE_POSITION = 'queue position';
    public const EVENT_TYPE_WEBCHAT_START_CONVERSATION = 'webchat start conversation';
    public const EVENT_TYPE_CONVERSATION_CLOSED = 'conversation closed';
    public const EVENT_TYPE_NEW_CONVERSATION = 'new conversation';
    public const EVENT_TYPE_NEW_MESSAGE = 'new message';
    public const EVENT_TYPE_UPDATED_MESSAGE = 'updated message';
    public const EVENT_TYPE_QUEUE_STATUS_UPDATE = 'queue status update';
    public const TYPE_MESSAGE = 'message';
    public const TYPE_EVENT = 'event';
    public const TYPE_PING = 'ping';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_QUEUE_POSITION,
            self::EVENT_TYPE_WEBCHAT_START_CONVERSATION,
            self::EVENT_TYPE_CONVERSATION_CLOSED,
            self::EVENT_TYPE_NEW_CONVERSATION,
            self::EVENT_TYPE_NEW_MESSAGE,
            self::EVENT_TYPE_UPDATED_MESSAGE,
            self::EVENT_TYPE_QUEUE_STATUS_UPDATE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MESSAGE,
            self::TYPE_EVENT,
            self::TYPE_PING,
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
        $this->container['conversation_uuid'] = $data['conversation_uuid'] ?? null;
        $this->container['event_conversation_closed'] = $data['event_conversation_closed'] ?? null;
        $this->container['event_new_conversation'] = $data['event_new_conversation'] ?? null;
        $this->container['event_new_message'] = $data['event_new_message'] ?? null;
        $this->container['event_queue_position'] = $data['event_queue_position'] ?? null;
        $this->container['event_queue_status_update'] = $data['event_queue_status_update'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['event_updated_message'] = $data['event_updated_message'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_type', must be one of '%s'",
                $this->container['event_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets conversation_uuid
     *
     * @return string|null
     */
    public function getConversationUuid()
    {
        return $this->container['conversation_uuid'];
    }

    /**
     * Sets conversation_uuid
     *
     * @param string|null $conversation_uuid Conversation UUID if the websocket message is tied to a specific conversation
     *
     * @return self
     */
    public function setConversationUuid($conversation_uuid)
    {
        $this->container['conversation_uuid'] = $conversation_uuid;

        return $this;
    }

    /**
     * Gets event_conversation_closed
     *
     * @return \ultracart\v2\models\ConversationSummary|null
     */
    public function getEventConversationClosed()
    {
        return $this->container['event_conversation_closed'];
    }

    /**
     * Sets event_conversation_closed
     *
     * @param \ultracart\v2\models\ConversationSummary|null $event_conversation_closed event_conversation_closed
     *
     * @return self
     */
    public function setEventConversationClosed($event_conversation_closed)
    {
        $this->container['event_conversation_closed'] = $event_conversation_closed;

        return $this;
    }

    /**
     * Gets event_new_conversation
     *
     * @return \ultracart\v2\models\ConversationSummary|null
     */
    public function getEventNewConversation()
    {
        return $this->container['event_new_conversation'];
    }

    /**
     * Sets event_new_conversation
     *
     * @param \ultracart\v2\models\ConversationSummary|null $event_new_conversation event_new_conversation
     *
     * @return self
     */
    public function setEventNewConversation($event_new_conversation)
    {
        $this->container['event_new_conversation'] = $event_new_conversation;

        return $this;
    }

    /**
     * Gets event_new_message
     *
     * @return \ultracart\v2\models\ConversationSummary|null
     */
    public function getEventNewMessage()
    {
        return $this->container['event_new_message'];
    }

    /**
     * Sets event_new_message
     *
     * @param \ultracart\v2\models\ConversationSummary|null $event_new_message event_new_message
     *
     * @return self
     */
    public function setEventNewMessage($event_new_message)
    {
        $this->container['event_new_message'] = $event_new_message;

        return $this;
    }

    /**
     * Gets event_queue_position
     *
     * @return \ultracart\v2\models\ConversationEventQueuePosition|null
     */
    public function getEventQueuePosition()
    {
        return $this->container['event_queue_position'];
    }

    /**
     * Sets event_queue_position
     *
     * @param \ultracart\v2\models\ConversationEventQueuePosition|null $event_queue_position event_queue_position
     *
     * @return self
     */
    public function setEventQueuePosition($event_queue_position)
    {
        $this->container['event_queue_position'] = $event_queue_position;

        return $this;
    }

    /**
     * Gets event_queue_status_update
     *
     * @return \ultracart\v2\models\ConversationWebchatQueueStatus|null
     */
    public function getEventQueueStatusUpdate()
    {
        return $this->container['event_queue_status_update'];
    }

    /**
     * Sets event_queue_status_update
     *
     * @param \ultracart\v2\models\ConversationWebchatQueueStatus|null $event_queue_status_update event_queue_status_update
     *
     * @return self
     */
    public function setEventQueueStatusUpdate($event_queue_status_update)
    {
        $this->container['event_queue_status_update'] = $event_queue_status_update;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string|null $event_type Type of event
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_type', must be one of '%s'",
                    $event_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets event_updated_message
     *
     * @return \ultracart\v2\models\ConversationMessage|null
     */
    public function getEventUpdatedMessage()
    {
        return $this->container['event_updated_message'];
    }

    /**
     * Sets event_updated_message
     *
     * @param \ultracart\v2\models\ConversationMessage|null $event_updated_message event_updated_message
     *
     * @return self
     */
    public function setEventUpdatedMessage($event_updated_message)
    {
        $this->container['event_updated_message'] = $event_updated_message;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \ultracart\v2\models\ConversationMessage|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \ultracart\v2\models\ConversationMessage|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of message
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


