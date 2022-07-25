<?php
/**
 * ConversationWebsocketMessage
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
 * ConversationWebsocketMessage Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationWebsocketMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationWebsocketMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversation_uuid' => 'string',
        'event_conversation_closed' => '\ultracart\v2\models\Conversation',
        'event_new_conversation' => '\ultracart\v2\models\Conversation',
        'event_new_message' => '\ultracart\v2\models\Conversation',
        'event_queue_position' => '\ultracart\v2\models\ConversationEventQueuePosition',
        'event_type' => 'string',
        'event_updated_message' => '\ultracart\v2\models\ConversationMessage',
        'message' => '\ultracart\v2\models\ConversationMessage',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversation_uuid' => null,
        'event_conversation_closed' => null,
        'event_new_conversation' => null,
        'event_new_message' => null,
        'event_queue_position' => null,
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
        'conversation_uuid' => 'conversation_uuid',
        'event_conversation_closed' => 'event_conversation_closed',
        'event_new_conversation' => 'event_new_conversation',
        'event_new_message' => 'event_new_message',
        'event_queue_position' => 'event_queue_position',
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
        return self::$swaggerModelName;
    }

    const EVENT_TYPE_QUEUE_POSITION = 'queue position';
    const EVENT_TYPE_WEBCHAT_START_CONVERSATION = 'webchat start conversation';
    const EVENT_TYPE_CONVERSATION_CLOSED = 'conversation closed';
    const EVENT_TYPE_NEW_CONVERSATION = 'new conversation';
    const EVENT_TYPE_NEW_MESSAGE = 'new message';
    const EVENT_TYPE_UPDATED_MESSAGE = 'updated message';
    const TYPE_MESSAGE = 'message';
    const TYPE_EVENT = 'event';
    const TYPE_PING = 'ping';
    

    
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
        $this->container['conversation_uuid'] = isset($data['conversation_uuid']) ? $data['conversation_uuid'] : null;
        $this->container['event_conversation_closed'] = isset($data['event_conversation_closed']) ? $data['event_conversation_closed'] : null;
        $this->container['event_new_conversation'] = isset($data['event_new_conversation']) ? $data['event_new_conversation'] : null;
        $this->container['event_new_message'] = isset($data['event_new_message']) ? $data['event_new_message'] : null;
        $this->container['event_queue_position'] = isset($data['event_queue_position']) ? $data['event_queue_position'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['event_updated_message'] = isset($data['event_updated_message']) ? $data['event_updated_message'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
                "invalid value for 'event_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @return string
     */
    public function getConversationUuid()
    {
        return $this->container['conversation_uuid'];
    }

    /**
     * Sets conversation_uuid
     *
     * @param string $conversation_uuid Conversation UUID if the websocket message is tied to a specific conversation
     *
     * @return $this
     */
    public function setConversationUuid($conversation_uuid)
    {
        $this->container['conversation_uuid'] = $conversation_uuid;

        return $this;
    }

    /**
     * Gets event_conversation_closed
     *
     * @return \ultracart\v2\models\Conversation
     */
    public function getEventConversationClosed()
    {
        return $this->container['event_conversation_closed'];
    }

    /**
     * Sets event_conversation_closed
     *
     * @param \ultracart\v2\models\Conversation $event_conversation_closed event_conversation_closed
     *
     * @return $this
     */
    public function setEventConversationClosed($event_conversation_closed)
    {
        $this->container['event_conversation_closed'] = $event_conversation_closed;

        return $this;
    }

    /**
     * Gets event_new_conversation
     *
     * @return \ultracart\v2\models\Conversation
     */
    public function getEventNewConversation()
    {
        return $this->container['event_new_conversation'];
    }

    /**
     * Sets event_new_conversation
     *
     * @param \ultracart\v2\models\Conversation $event_new_conversation event_new_conversation
     *
     * @return $this
     */
    public function setEventNewConversation($event_new_conversation)
    {
        $this->container['event_new_conversation'] = $event_new_conversation;

        return $this;
    }

    /**
     * Gets event_new_message
     *
     * @return \ultracart\v2\models\Conversation
     */
    public function getEventNewMessage()
    {
        return $this->container['event_new_message'];
    }

    /**
     * Sets event_new_message
     *
     * @param \ultracart\v2\models\Conversation $event_new_message event_new_message
     *
     * @return $this
     */
    public function setEventNewMessage($event_new_message)
    {
        $this->container['event_new_message'] = $event_new_message;

        return $this;
    }

    /**
     * Gets event_queue_position
     *
     * @return \ultracart\v2\models\ConversationEventQueuePosition
     */
    public function getEventQueuePosition()
    {
        return $this->container['event_queue_position'];
    }

    /**
     * Sets event_queue_position
     *
     * @param \ultracart\v2\models\ConversationEventQueuePosition $event_queue_position event_queue_position
     *
     * @return $this
     */
    public function setEventQueuePosition($event_queue_position)
    {
        $this->container['event_queue_position'] = $event_queue_position;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type Type of event
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($event_type) && !in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'event_type', must be one of '%s'",
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
     * @return \ultracart\v2\models\ConversationMessage
     */
    public function getEventUpdatedMessage()
    {
        return $this->container['event_updated_message'];
    }

    /**
     * Sets event_updated_message
     *
     * @param \ultracart\v2\models\ConversationMessage $event_updated_message event_updated_message
     *
     * @return $this
     */
    public function setEventUpdatedMessage($event_updated_message)
    {
        $this->container['event_updated_message'] = $event_updated_message;

        return $this;
    }

    /**
     * Gets message
     *
     * @return \ultracart\v2\models\ConversationMessage
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param \ultracart\v2\models\ConversationMessage $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of message
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
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


