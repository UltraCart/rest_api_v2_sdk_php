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
        'event_add_coupon' => '\ultracart\v2\models\ConversationEventAddCoupon',
        'event_add_item' => '\ultracart\v2\models\ConversationEventAddItem',
        'event_conversation_closed' => '\ultracart\v2\models\ConversationSummary',
        'event_new_conversation' => '\ultracart\v2\models\ConversationSummary',
        'event_new_message' => '\ultracart\v2\models\ConversationSummary',
        'event_participant_join' => '\ultracart\v2\models\ConversationSummary',
        'event_participant_join_participant' => '\ultracart\v2\models\ConversationParticipant',
        'event_participant_left' => '\ultracart\v2\models\ConversationSummary',
        'event_participant_left_participant' => '\ultracart\v2\models\ConversationParticipant',
        'event_participant_update' => '\ultracart\v2\models\ConversationSummary',
        'event_queue_position' => '\ultracart\v2\models\ConversationEventQueuePosition',
        'event_queue_status_update' => '\ultracart\v2\models\ConversationWebchatQueueStatus',
        'event_read_message' => '\ultracart\v2\models\ConversationEventReadMessage',
        'event_rrweb' => '\ultracart\v2\models\ConversationEventRRWeb',
        'event_type' => 'string',
        'event_typing' => '\ultracart\v2\models\ConversationEventTyping',
        'event_updated_message' => '\ultracart\v2\models\ConversationMessage',
        'event_webchat_context' => '\ultracart\v2\models\ConversationEventWebchatContext',
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
        'event_add_coupon' => null,
        'event_add_item' => null,
        'event_conversation_closed' => null,
        'event_new_conversation' => null,
        'event_new_message' => null,
        'event_participant_join' => null,
        'event_participant_join_participant' => null,
        'event_participant_left' => null,
        'event_participant_left_participant' => null,
        'event_participant_update' => null,
        'event_queue_position' => null,
        'event_queue_status_update' => null,
        'event_read_message' => null,
        'event_rrweb' => null,
        'event_type' => null,
        'event_typing' => null,
        'event_updated_message' => null,
        'event_webchat_context' => null,
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
        'event_add_coupon' => 'event_add_coupon',
        'event_add_item' => 'event_add_item',
        'event_conversation_closed' => 'event_conversation_closed',
        'event_new_conversation' => 'event_new_conversation',
        'event_new_message' => 'event_new_message',
        'event_participant_join' => 'event_participant_join',
        'event_participant_join_participant' => 'event_participant_join_participant',
        'event_participant_left' => 'event_participant_left',
        'event_participant_left_participant' => 'event_participant_left_participant',
        'event_participant_update' => 'event_participant_update',
        'event_queue_position' => 'event_queue_position',
        'event_queue_status_update' => 'event_queue_status_update',
        'event_read_message' => 'event_read_message',
        'event_rrweb' => 'event_rrweb',
        'event_type' => 'event_type',
        'event_typing' => 'event_typing',
        'event_updated_message' => 'event_updated_message',
        'event_webchat_context' => 'event_webchat_context',
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
        'event_add_coupon' => 'setEventAddCoupon',
        'event_add_item' => 'setEventAddItem',
        'event_conversation_closed' => 'setEventConversationClosed',
        'event_new_conversation' => 'setEventNewConversation',
        'event_new_message' => 'setEventNewMessage',
        'event_participant_join' => 'setEventParticipantJoin',
        'event_participant_join_participant' => 'setEventParticipantJoinParticipant',
        'event_participant_left' => 'setEventParticipantLeft',
        'event_participant_left_participant' => 'setEventParticipantLeftParticipant',
        'event_participant_update' => 'setEventParticipantUpdate',
        'event_queue_position' => 'setEventQueuePosition',
        'event_queue_status_update' => 'setEventQueueStatusUpdate',
        'event_read_message' => 'setEventReadMessage',
        'event_rrweb' => 'setEventRrweb',
        'event_type' => 'setEventType',
        'event_typing' => 'setEventTyping',
        'event_updated_message' => 'setEventUpdatedMessage',
        'event_webchat_context' => 'setEventWebchatContext',
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
        'event_add_coupon' => 'getEventAddCoupon',
        'event_add_item' => 'getEventAddItem',
        'event_conversation_closed' => 'getEventConversationClosed',
        'event_new_conversation' => 'getEventNewConversation',
        'event_new_message' => 'getEventNewMessage',
        'event_participant_join' => 'getEventParticipantJoin',
        'event_participant_join_participant' => 'getEventParticipantJoinParticipant',
        'event_participant_left' => 'getEventParticipantLeft',
        'event_participant_left_participant' => 'getEventParticipantLeftParticipant',
        'event_participant_update' => 'getEventParticipantUpdate',
        'event_queue_position' => 'getEventQueuePosition',
        'event_queue_status_update' => 'getEventQueueStatusUpdate',
        'event_read_message' => 'getEventReadMessage',
        'event_rrweb' => 'getEventRrweb',
        'event_type' => 'getEventType',
        'event_typing' => 'getEventTyping',
        'event_updated_message' => 'getEventUpdatedMessage',
        'event_webchat_context' => 'getEventWebchatContext',
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
    public const EVENT_TYPE_RRWEB = 'rrweb';
    public const EVENT_TYPE_PARTICIPANT_UPDATE = 'participant update';
    public const EVENT_TYPE_PARTICIPANT_JOIN = 'participant join';
    public const EVENT_TYPE_PARTICIPANT_LEFT = 'participant left';
    public const EVENT_TYPE_READ_MESSAGE = 'read message';
    public const EVENT_TYPE_TYPING = 'typing';
    public const EVENT_TYPE_ADD_COUPON = 'add coupon';
    public const EVENT_TYPE_ADD_ITEM = 'add item';
    public const EVENT_TYPE_WEBCHAT_CONTEXT = 'webchat context';
    public const EVENT_TYPE_ENGAGE_CUSTOMER = 'engage customer';
    public const TYPE_MESSAGE = 'message';
    public const TYPE_EVENT = 'event';
    public const TYPE_PING = 'ping';
    public const TYPE_CHECK_QUEUE_POSITION = 'check queue position';

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
            self::EVENT_TYPE_RRWEB,
            self::EVENT_TYPE_PARTICIPANT_UPDATE,
            self::EVENT_TYPE_PARTICIPANT_JOIN,
            self::EVENT_TYPE_PARTICIPANT_LEFT,
            self::EVENT_TYPE_READ_MESSAGE,
            self::EVENT_TYPE_TYPING,
            self::EVENT_TYPE_ADD_COUPON,
            self::EVENT_TYPE_ADD_ITEM,
            self::EVENT_TYPE_WEBCHAT_CONTEXT,
            self::EVENT_TYPE_ENGAGE_CUSTOMER,
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
            self::TYPE_CHECK_QUEUE_POSITION,
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
        $this->container['event_add_coupon'] = $data['event_add_coupon'] ?? null;
        $this->container['event_add_item'] = $data['event_add_item'] ?? null;
        $this->container['event_conversation_closed'] = $data['event_conversation_closed'] ?? null;
        $this->container['event_new_conversation'] = $data['event_new_conversation'] ?? null;
        $this->container['event_new_message'] = $data['event_new_message'] ?? null;
        $this->container['event_participant_join'] = $data['event_participant_join'] ?? null;
        $this->container['event_participant_join_participant'] = $data['event_participant_join_participant'] ?? null;
        $this->container['event_participant_left'] = $data['event_participant_left'] ?? null;
        $this->container['event_participant_left_participant'] = $data['event_participant_left_participant'] ?? null;
        $this->container['event_participant_update'] = $data['event_participant_update'] ?? null;
        $this->container['event_queue_position'] = $data['event_queue_position'] ?? null;
        $this->container['event_queue_status_update'] = $data['event_queue_status_update'] ?? null;
        $this->container['event_read_message'] = $data['event_read_message'] ?? null;
        $this->container['event_rrweb'] = $data['event_rrweb'] ?? null;
        $this->container['event_type'] = $data['event_type'] ?? null;
        $this->container['event_typing'] = $data['event_typing'] ?? null;
        $this->container['event_updated_message'] = $data['event_updated_message'] ?? null;
        $this->container['event_webchat_context'] = $data['event_webchat_context'] ?? null;
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
     * Gets event_add_coupon
     *
     * @return \ultracart\v2\models\ConversationEventAddCoupon|null
     */
    public function getEventAddCoupon()
    {
        return $this->container['event_add_coupon'];
    }

    /**
     * Sets event_add_coupon
     *
     * @param \ultracart\v2\models\ConversationEventAddCoupon|null $event_add_coupon event_add_coupon
     *
     * @return self
     */
    public function setEventAddCoupon($event_add_coupon)
    {
        $this->container['event_add_coupon'] = $event_add_coupon;

        return $this;
    }

    /**
     * Gets event_add_item
     *
     * @return \ultracart\v2\models\ConversationEventAddItem|null
     */
    public function getEventAddItem()
    {
        return $this->container['event_add_item'];
    }

    /**
     * Sets event_add_item
     *
     * @param \ultracart\v2\models\ConversationEventAddItem|null $event_add_item event_add_item
     *
     * @return self
     */
    public function setEventAddItem($event_add_item)
    {
        $this->container['event_add_item'] = $event_add_item;

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
     * Gets event_participant_join
     *
     * @return \ultracart\v2\models\ConversationSummary|null
     */
    public function getEventParticipantJoin()
    {
        return $this->container['event_participant_join'];
    }

    /**
     * Sets event_participant_join
     *
     * @param \ultracart\v2\models\ConversationSummary|null $event_participant_join event_participant_join
     *
     * @return self
     */
    public function setEventParticipantJoin($event_participant_join)
    {
        $this->container['event_participant_join'] = $event_participant_join;

        return $this;
    }

    /**
     * Gets event_participant_join_participant
     *
     * @return \ultracart\v2\models\ConversationParticipant|null
     */
    public function getEventParticipantJoinParticipant()
    {
        return $this->container['event_participant_join_participant'];
    }

    /**
     * Sets event_participant_join_participant
     *
     * @param \ultracart\v2\models\ConversationParticipant|null $event_participant_join_participant event_participant_join_participant
     *
     * @return self
     */
    public function setEventParticipantJoinParticipant($event_participant_join_participant)
    {
        $this->container['event_participant_join_participant'] = $event_participant_join_participant;

        return $this;
    }

    /**
     * Gets event_participant_left
     *
     * @return \ultracart\v2\models\ConversationSummary|null
     */
    public function getEventParticipantLeft()
    {
        return $this->container['event_participant_left'];
    }

    /**
     * Sets event_participant_left
     *
     * @param \ultracart\v2\models\ConversationSummary|null $event_participant_left event_participant_left
     *
     * @return self
     */
    public function setEventParticipantLeft($event_participant_left)
    {
        $this->container['event_participant_left'] = $event_participant_left;

        return $this;
    }

    /**
     * Gets event_participant_left_participant
     *
     * @return \ultracart\v2\models\ConversationParticipant|null
     */
    public function getEventParticipantLeftParticipant()
    {
        return $this->container['event_participant_left_participant'];
    }

    /**
     * Sets event_participant_left_participant
     *
     * @param \ultracart\v2\models\ConversationParticipant|null $event_participant_left_participant event_participant_left_participant
     *
     * @return self
     */
    public function setEventParticipantLeftParticipant($event_participant_left_participant)
    {
        $this->container['event_participant_left_participant'] = $event_participant_left_participant;

        return $this;
    }

    /**
     * Gets event_participant_update
     *
     * @return \ultracart\v2\models\ConversationSummary|null
     */
    public function getEventParticipantUpdate()
    {
        return $this->container['event_participant_update'];
    }

    /**
     * Sets event_participant_update
     *
     * @param \ultracart\v2\models\ConversationSummary|null $event_participant_update event_participant_update
     *
     * @return self
     */
    public function setEventParticipantUpdate($event_participant_update)
    {
        $this->container['event_participant_update'] = $event_participant_update;

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
     * Gets event_read_message
     *
     * @return \ultracart\v2\models\ConversationEventReadMessage|null
     */
    public function getEventReadMessage()
    {
        return $this->container['event_read_message'];
    }

    /**
     * Sets event_read_message
     *
     * @param \ultracart\v2\models\ConversationEventReadMessage|null $event_read_message event_read_message
     *
     * @return self
     */
    public function setEventReadMessage($event_read_message)
    {
        $this->container['event_read_message'] = $event_read_message;

        return $this;
    }

    /**
     * Gets event_rrweb
     *
     * @return \ultracart\v2\models\ConversationEventRRWeb|null
     */
    public function getEventRrweb()
    {
        return $this->container['event_rrweb'];
    }

    /**
     * Sets event_rrweb
     *
     * @param \ultracart\v2\models\ConversationEventRRWeb|null $event_rrweb event_rrweb
     *
     * @return self
     */
    public function setEventRrweb($event_rrweb)
    {
        $this->container['event_rrweb'] = $event_rrweb;

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
     * Gets event_typing
     *
     * @return \ultracart\v2\models\ConversationEventTyping|null
     */
    public function getEventTyping()
    {
        return $this->container['event_typing'];
    }

    /**
     * Sets event_typing
     *
     * @param \ultracart\v2\models\ConversationEventTyping|null $event_typing event_typing
     *
     * @return self
     */
    public function setEventTyping($event_typing)
    {
        $this->container['event_typing'] = $event_typing;

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
     * Gets event_webchat_context
     *
     * @return \ultracart\v2\models\ConversationEventWebchatContext|null
     */
    public function getEventWebchatContext()
    {
        return $this->container['event_webchat_context'];
    }

    /**
     * Sets event_webchat_context
     *
     * @param \ultracart\v2\models\ConversationEventWebchatContext|null $event_webchat_context event_webchat_context
     *
     * @return self
     */
    public function setEventWebchatContext($event_webchat_context)
    {
        $this->container['event_webchat_context'] = $event_webchat_context;

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


