<?php
/**
 * ConversationSummary
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
 * ConversationSummary Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'closed' => 'bool',
        'conversation_arn' => 'string',
        'conversation_uuid' => 'string',
        'customer_first_message_unresponded_to_dts' => 'string',
        'last_conversation_message_body' => 'string',
        'last_conversation_participant_arn' => 'string',
        'last_conversation_participant_name' => 'string',
        'last_interactive_message_dts' => 'string',
        'last_message_dts' => 'string',
        'medium' => 'string',
        'merchant_id' => 'string',
        'message_count' => 'int',
        'participants' => '\ultracart\v2\models\ConversationParticipant[]',
        'start_dts' => 'string',
        'unread_messages' => 'bool',
        'visible' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'closed' => null,
        'conversation_arn' => null,
        'conversation_uuid' => null,
        'customer_first_message_unresponded_to_dts' => 'dateTime',
        'last_conversation_message_body' => null,
        'last_conversation_participant_arn' => null,
        'last_conversation_participant_name' => null,
        'last_interactive_message_dts' => 'dateTime',
        'last_message_dts' => 'dateTime',
        'medium' => null,
        'merchant_id' => null,
        'message_count' => 'int32',
        'participants' => null,
        'start_dts' => 'dateTime',
        'unread_messages' => null,
        'visible' => null
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
        'closed' => 'closed',
        'conversation_arn' => 'conversation_arn',
        'conversation_uuid' => 'conversation_uuid',
        'customer_first_message_unresponded_to_dts' => 'customer_first_message_unresponded_to_dts',
        'last_conversation_message_body' => 'last_conversation_message_body',
        'last_conversation_participant_arn' => 'last_conversation_participant_arn',
        'last_conversation_participant_name' => 'last_conversation_participant_name',
        'last_interactive_message_dts' => 'last_interactive_message_dts',
        'last_message_dts' => 'last_message_dts',
        'medium' => 'medium',
        'merchant_id' => 'merchant_id',
        'message_count' => 'message_count',
        'participants' => 'participants',
        'start_dts' => 'start_dts',
        'unread_messages' => 'unread_messages',
        'visible' => 'visible'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'closed' => 'setClosed',
        'conversation_arn' => 'setConversationArn',
        'conversation_uuid' => 'setConversationUuid',
        'customer_first_message_unresponded_to_dts' => 'setCustomerFirstMessageUnrespondedToDts',
        'last_conversation_message_body' => 'setLastConversationMessageBody',
        'last_conversation_participant_arn' => 'setLastConversationParticipantArn',
        'last_conversation_participant_name' => 'setLastConversationParticipantName',
        'last_interactive_message_dts' => 'setLastInteractiveMessageDts',
        'last_message_dts' => 'setLastMessageDts',
        'medium' => 'setMedium',
        'merchant_id' => 'setMerchantId',
        'message_count' => 'setMessageCount',
        'participants' => 'setParticipants',
        'start_dts' => 'setStartDts',
        'unread_messages' => 'setUnreadMessages',
        'visible' => 'setVisible'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'closed' => 'getClosed',
        'conversation_arn' => 'getConversationArn',
        'conversation_uuid' => 'getConversationUuid',
        'customer_first_message_unresponded_to_dts' => 'getCustomerFirstMessageUnrespondedToDts',
        'last_conversation_message_body' => 'getLastConversationMessageBody',
        'last_conversation_participant_arn' => 'getLastConversationParticipantArn',
        'last_conversation_participant_name' => 'getLastConversationParticipantName',
        'last_interactive_message_dts' => 'getLastInteractiveMessageDts',
        'last_message_dts' => 'getLastMessageDts',
        'medium' => 'getMedium',
        'merchant_id' => 'getMerchantId',
        'message_count' => 'getMessageCount',
        'participants' => 'getParticipants',
        'start_dts' => 'getStartDts',
        'unread_messages' => 'getUnreadMessages',
        'visible' => 'getVisible'
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

    public const MEDIUM_SMS = 'sms';
    public const MEDIUM_WEBSOCKET = 'websocket';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediumAllowableValues()
    {
        return [
            self::MEDIUM_SMS,
            self::MEDIUM_WEBSOCKET,
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
        $this->container['closed'] = $data['closed'] ?? null;
        $this->container['conversation_arn'] = $data['conversation_arn'] ?? null;
        $this->container['conversation_uuid'] = $data['conversation_uuid'] ?? null;
        $this->container['customer_first_message_unresponded_to_dts'] = $data['customer_first_message_unresponded_to_dts'] ?? null;
        $this->container['last_conversation_message_body'] = $data['last_conversation_message_body'] ?? null;
        $this->container['last_conversation_participant_arn'] = $data['last_conversation_participant_arn'] ?? null;
        $this->container['last_conversation_participant_name'] = $data['last_conversation_participant_name'] ?? null;
        $this->container['last_interactive_message_dts'] = $data['last_interactive_message_dts'] ?? null;
        $this->container['last_message_dts'] = $data['last_message_dts'] ?? null;
        $this->container['medium'] = $data['medium'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['message_count'] = $data['message_count'] ?? null;
        $this->container['participants'] = $data['participants'] ?? null;
        $this->container['start_dts'] = $data['start_dts'] ?? null;
        $this->container['unread_messages'] = $data['unread_messages'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMediumAllowableValues();
        if (!is_null($this->container['medium']) && !in_array($this->container['medium'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'medium', must be one of '%s'",
                $this->container['medium'],
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
     * Gets closed
     *
     * @return bool|null
     */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
     * Sets closed
     *
     * @param bool|null $closed closed
     *
     * @return self
     */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;

        return $this;
    }

    /**
     * Gets conversation_arn
     *
     * @return string|null
     */
    public function getConversationArn()
    {
        return $this->container['conversation_arn'];
    }

    /**
     * Sets conversation_arn
     *
     * @param string|null $conversation_arn conversation_arn
     *
     * @return self
     */
    public function setConversationArn($conversation_arn)
    {
        $this->container['conversation_arn'] = $conversation_arn;

        return $this;
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
     * @param string|null $conversation_uuid conversation_uuid
     *
     * @return self
     */
    public function setConversationUuid($conversation_uuid)
    {
        $this->container['conversation_uuid'] = $conversation_uuid;

        return $this;
    }

    /**
     * Gets customer_first_message_unresponded_to_dts
     *
     * @return string|null
     */
    public function getCustomerFirstMessageUnrespondedToDts()
    {
        return $this->container['customer_first_message_unresponded_to_dts'];
    }

    /**
     * Sets customer_first_message_unresponded_to_dts
     *
     * @param string|null $customer_first_message_unresponded_to_dts Date/time of the first customer message that is unresponded to.
     *
     * @return self
     */
    public function setCustomerFirstMessageUnrespondedToDts($customer_first_message_unresponded_to_dts)
    {
        $this->container['customer_first_message_unresponded_to_dts'] = $customer_first_message_unresponded_to_dts;

        return $this;
    }

    /**
     * Gets last_conversation_message_body
     *
     * @return string|null
     */
    public function getLastConversationMessageBody()
    {
        return $this->container['last_conversation_message_body'];
    }

    /**
     * Sets last_conversation_message_body
     *
     * @param string|null $last_conversation_message_body last_conversation_message_body
     *
     * @return self
     */
    public function setLastConversationMessageBody($last_conversation_message_body)
    {
        $this->container['last_conversation_message_body'] = $last_conversation_message_body;

        return $this;
    }

    /**
     * Gets last_conversation_participant_arn
     *
     * @return string|null
     */
    public function getLastConversationParticipantArn()
    {
        return $this->container['last_conversation_participant_arn'];
    }

    /**
     * Sets last_conversation_participant_arn
     *
     * @param string|null $last_conversation_participant_arn last_conversation_participant_arn
     *
     * @return self
     */
    public function setLastConversationParticipantArn($last_conversation_participant_arn)
    {
        $this->container['last_conversation_participant_arn'] = $last_conversation_participant_arn;

        return $this;
    }

    /**
     * Gets last_conversation_participant_name
     *
     * @return string|null
     */
    public function getLastConversationParticipantName()
    {
        return $this->container['last_conversation_participant_name'];
    }

    /**
     * Sets last_conversation_participant_name
     *
     * @param string|null $last_conversation_participant_name last_conversation_participant_name
     *
     * @return self
     */
    public function setLastConversationParticipantName($last_conversation_participant_name)
    {
        $this->container['last_conversation_participant_name'] = $last_conversation_participant_name;

        return $this;
    }

    /**
     * Gets last_interactive_message_dts
     *
     * @return string|null
     */
    public function getLastInteractiveMessageDts()
    {
        return $this->container['last_interactive_message_dts'];
    }

    /**
     * Sets last_interactive_message_dts
     *
     * @param string|null $last_interactive_message_dts Last interactive message date/time
     *
     * @return self
     */
    public function setLastInteractiveMessageDts($last_interactive_message_dts)
    {
        $this->container['last_interactive_message_dts'] = $last_interactive_message_dts;

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
     * Gets medium
     *
     * @return string|null
     */
    public function getMedium()
    {
        return $this->container['medium'];
    }

    /**
     * Sets medium
     *
     * @param string|null $medium The communication medium of the customer.
     *
     * @return self
     */
    public function setMedium($medium)
    {
        $allowedValues = $this->getMediumAllowableValues();
        if (!is_null($medium) && !in_array($medium, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'medium', must be one of '%s'",
                    $medium,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['medium'] = $medium;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets message_count
     *
     * @return int|null
     */
    public function getMessageCount()
    {
        return $this->container['message_count'];
    }

    /**
     * Sets message_count
     *
     * @param int|null $message_count message_count
     *
     * @return self
     */
    public function setMessageCount($message_count)
    {
        $this->container['message_count'] = $message_count;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \ultracart\v2\models\ConversationParticipant[]|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \ultracart\v2\models\ConversationParticipant[]|null $participants participants
     *
     * @return self
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets start_dts
     *
     * @return string|null
     */
    public function getStartDts()
    {
        return $this->container['start_dts'];
    }

    /**
     * Sets start_dts
     *
     * @param string|null $start_dts Start of the conversation date/time
     *
     * @return self
     */
    public function setStartDts($start_dts)
    {
        $this->container['start_dts'] = $start_dts;

        return $this;
    }

    /**
     * Gets unread_messages
     *
     * @return bool|null
     */
    public function getUnreadMessages()
    {
        return $this->container['unread_messages'];
    }

    /**
     * Sets unread_messages
     *
     * @param bool|null $unread_messages unread_messages
     *
     * @return self
     */
    public function setUnreadMessages($unread_messages)
    {
        $this->container['unread_messages'] = $unread_messages;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

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


