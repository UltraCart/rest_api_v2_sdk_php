<?php
/**
 * ConversationPbxAgent
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
 * ConversationPbxAgent Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationPbxAgent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationPbxAgent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cellphone' => 'string',
        'conversation_pbx_agent_uuid' => 'string',
        'extension' => 'int',
        'forward_calls_to_cellphone' => 'bool',
        'full_name' => 'string',
        'login' => 'string',
        'merchant_id' => 'string',
        'personal_conversation_pbx_voicemail_mailbox_uuid' => 'string',
        'record_outgoing_automatically' => 'bool',
        'shared_conversation_pbx_voicemail_mailbox_uuid' => 'string',
        'twilio_taskrouter_worker_id' => 'string',
        'unavailable_play_audio_uuid' => 'string',
        'unavailable_say' => 'string',
        'unavailable_say_voice' => 'string',
        'user_id' => 'int',
        'voicemail' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cellphone' => null,
        'conversation_pbx_agent_uuid' => null,
        'extension' => 'int32',
        'forward_calls_to_cellphone' => null,
        'full_name' => null,
        'login' => null,
        'merchant_id' => null,
        'personal_conversation_pbx_voicemail_mailbox_uuid' => null,
        'record_outgoing_automatically' => null,
        'shared_conversation_pbx_voicemail_mailbox_uuid' => null,
        'twilio_taskrouter_worker_id' => null,
        'unavailable_play_audio_uuid' => null,
        'unavailable_say' => null,
        'unavailable_say_voice' => null,
        'user_id' => 'int32',
        'voicemail' => null
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
        'cellphone' => 'cellphone',
        'conversation_pbx_agent_uuid' => 'conversation_pbx_agent_uuid',
        'extension' => 'extension',
        'forward_calls_to_cellphone' => 'forward_calls_to_cellphone',
        'full_name' => 'full_name',
        'login' => 'login',
        'merchant_id' => 'merchant_id',
        'personal_conversation_pbx_voicemail_mailbox_uuid' => 'personal_conversation_pbx_voicemail_mailbox_uuid',
        'record_outgoing_automatically' => 'record_outgoing_automatically',
        'shared_conversation_pbx_voicemail_mailbox_uuid' => 'shared_conversation_pbx_voicemail_mailbox_uuid',
        'twilio_taskrouter_worker_id' => 'twilio_taskrouter_worker_id',
        'unavailable_play_audio_uuid' => 'unavailable_play_audio_uuid',
        'unavailable_say' => 'unavailable_say',
        'unavailable_say_voice' => 'unavailable_say_voice',
        'user_id' => 'user_id',
        'voicemail' => 'voicemail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cellphone' => 'setCellphone',
        'conversation_pbx_agent_uuid' => 'setConversationPbxAgentUuid',
        'extension' => 'setExtension',
        'forward_calls_to_cellphone' => 'setForwardCallsToCellphone',
        'full_name' => 'setFullName',
        'login' => 'setLogin',
        'merchant_id' => 'setMerchantId',
        'personal_conversation_pbx_voicemail_mailbox_uuid' => 'setPersonalConversationPbxVoicemailMailboxUuid',
        'record_outgoing_automatically' => 'setRecordOutgoingAutomatically',
        'shared_conversation_pbx_voicemail_mailbox_uuid' => 'setSharedConversationPbxVoicemailMailboxUuid',
        'twilio_taskrouter_worker_id' => 'setTwilioTaskrouterWorkerId',
        'unavailable_play_audio_uuid' => 'setUnavailablePlayAudioUuid',
        'unavailable_say' => 'setUnavailableSay',
        'unavailable_say_voice' => 'setUnavailableSayVoice',
        'user_id' => 'setUserId',
        'voicemail' => 'setVoicemail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cellphone' => 'getCellphone',
        'conversation_pbx_agent_uuid' => 'getConversationPbxAgentUuid',
        'extension' => 'getExtension',
        'forward_calls_to_cellphone' => 'getForwardCallsToCellphone',
        'full_name' => 'getFullName',
        'login' => 'getLogin',
        'merchant_id' => 'getMerchantId',
        'personal_conversation_pbx_voicemail_mailbox_uuid' => 'getPersonalConversationPbxVoicemailMailboxUuid',
        'record_outgoing_automatically' => 'getRecordOutgoingAutomatically',
        'shared_conversation_pbx_voicemail_mailbox_uuid' => 'getSharedConversationPbxVoicemailMailboxUuid',
        'twilio_taskrouter_worker_id' => 'getTwilioTaskrouterWorkerId',
        'unavailable_play_audio_uuid' => 'getUnavailablePlayAudioUuid',
        'unavailable_say' => 'getUnavailableSay',
        'unavailable_say_voice' => 'getUnavailableSayVoice',
        'user_id' => 'getUserId',
        'voicemail' => 'getVoicemail'
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
        $this->container['cellphone'] = $data['cellphone'] ?? null;
        $this->container['conversation_pbx_agent_uuid'] = $data['conversation_pbx_agent_uuid'] ?? null;
        $this->container['extension'] = $data['extension'] ?? null;
        $this->container['forward_calls_to_cellphone'] = $data['forward_calls_to_cellphone'] ?? null;
        $this->container['full_name'] = $data['full_name'] ?? null;
        $this->container['login'] = $data['login'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['personal_conversation_pbx_voicemail_mailbox_uuid'] = $data['personal_conversation_pbx_voicemail_mailbox_uuid'] ?? null;
        $this->container['record_outgoing_automatically'] = $data['record_outgoing_automatically'] ?? null;
        $this->container['shared_conversation_pbx_voicemail_mailbox_uuid'] = $data['shared_conversation_pbx_voicemail_mailbox_uuid'] ?? null;
        $this->container['twilio_taskrouter_worker_id'] = $data['twilio_taskrouter_worker_id'] ?? null;
        $this->container['unavailable_play_audio_uuid'] = $data['unavailable_play_audio_uuid'] ?? null;
        $this->container['unavailable_say'] = $data['unavailable_say'] ?? null;
        $this->container['unavailable_say_voice'] = $data['unavailable_say_voice'] ?? null;
        $this->container['user_id'] = $data['user_id'] ?? null;
        $this->container['voicemail'] = $data['voicemail'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cellphone']) && (mb_strlen($this->container['cellphone']) > 50)) {
            $invalidProperties[] = "invalid value for 'cellphone', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['merchant_id']) && (mb_strlen($this->container['merchant_id']) > 5)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['personal_conversation_pbx_voicemail_mailbox_uuid']) && (mb_strlen($this->container['personal_conversation_pbx_voicemail_mailbox_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'personal_conversation_pbx_voicemail_mailbox_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['shared_conversation_pbx_voicemail_mailbox_uuid']) && (mb_strlen($this->container['shared_conversation_pbx_voicemail_mailbox_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'shared_conversation_pbx_voicemail_mailbox_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['twilio_taskrouter_worker_id']) && (mb_strlen($this->container['twilio_taskrouter_worker_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'twilio_taskrouter_worker_id', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['unavailable_play_audio_uuid']) && (mb_strlen($this->container['unavailable_play_audio_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'unavailable_play_audio_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['unavailable_say_voice']) && (mb_strlen($this->container['unavailable_say_voice']) > 50)) {
            $invalidProperties[] = "invalid value for 'unavailable_say_voice', the character length must be smaller than or equal to 50.";
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
     * Gets cellphone
     *
     * @return string|null
     */
    public function getCellphone()
    {
        return $this->container['cellphone'];
    }

    /**
     * Sets cellphone
     *
     * @param string|null $cellphone Cellphone number of agent in E.164 format
     *
     * @return self
     */
    public function setCellphone($cellphone)
    {
        if (!is_null($cellphone) && (mb_strlen($cellphone) > 50)) {
            throw new \InvalidArgumentException('invalid length for $cellphone when calling ConversationPbxAgent., must be smaller than or equal to 50.');
        }

        $this->container['cellphone'] = $cellphone;

        return $this;
    }

    /**
     * Gets conversation_pbx_agent_uuid
     *
     * @return string|null
     */
    public function getConversationPbxAgentUuid()
    {
        return $this->container['conversation_pbx_agent_uuid'];
    }

    /**
     * Sets conversation_pbx_agent_uuid
     *
     * @param string|null $conversation_pbx_agent_uuid Conversation Pbx Agent unique identifier
     *
     * @return self
     */
    public function setConversationPbxAgentUuid($conversation_pbx_agent_uuid)
    {
        $this->container['conversation_pbx_agent_uuid'] = $conversation_pbx_agent_uuid;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return int|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param int|null $extension Extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets forward_calls_to_cellphone
     *
     * @return bool|null
     */
    public function getForwardCallsToCellphone()
    {
        return $this->container['forward_calls_to_cellphone'];
    }

    /**
     * Sets forward_calls_to_cellphone
     *
     * @param bool|null $forward_calls_to_cellphone True if calls to this agent should be forwarded to their cellphone
     *
     * @return self
     */
    public function setForwardCallsToCellphone($forward_calls_to_cellphone)
    {
        $this->container['forward_calls_to_cellphone'] = $forward_calls_to_cellphone;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name Full name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string|null $login Agent login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

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
     * @param string|null $merchant_id Merchant Id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        if (!is_null($merchant_id) && (mb_strlen($merchant_id) > 5)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling ConversationPbxAgent., must be smaller than or equal to 5.');
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets personal_conversation_pbx_voicemail_mailbox_uuid
     *
     * @return string|null
     */
    public function getPersonalConversationPbxVoicemailMailboxUuid()
    {
        return $this->container['personal_conversation_pbx_voicemail_mailbox_uuid'];
    }

    /**
     * Sets personal_conversation_pbx_voicemail_mailbox_uuid
     *
     * @param string|null $personal_conversation_pbx_voicemail_mailbox_uuid Personal Conversation Pbx Voicemail Mailbox UUID
     *
     * @return self
     */
    public function setPersonalConversationPbxVoicemailMailboxUuid($personal_conversation_pbx_voicemail_mailbox_uuid)
    {
        if (!is_null($personal_conversation_pbx_voicemail_mailbox_uuid) && (mb_strlen($personal_conversation_pbx_voicemail_mailbox_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $personal_conversation_pbx_voicemail_mailbox_uuid when calling ConversationPbxAgent., must be smaller than or equal to 50.');
        }

        $this->container['personal_conversation_pbx_voicemail_mailbox_uuid'] = $personal_conversation_pbx_voicemail_mailbox_uuid;

        return $this;
    }

    /**
     * Gets record_outgoing_automatically
     *
     * @return bool|null
     */
    public function getRecordOutgoingAutomatically()
    {
        return $this->container['record_outgoing_automatically'];
    }

    /**
     * Sets record_outgoing_automatically
     *
     * @param bool|null $record_outgoing_automatically True if outgoing calls should be automatically recorded
     *
     * @return self
     */
    public function setRecordOutgoingAutomatically($record_outgoing_automatically)
    {
        $this->container['record_outgoing_automatically'] = $record_outgoing_automatically;

        return $this;
    }

    /**
     * Gets shared_conversation_pbx_voicemail_mailbox_uuid
     *
     * @return string|null
     */
    public function getSharedConversationPbxVoicemailMailboxUuid()
    {
        return $this->container['shared_conversation_pbx_voicemail_mailbox_uuid'];
    }

    /**
     * Sets shared_conversation_pbx_voicemail_mailbox_uuid
     *
     * @param string|null $shared_conversation_pbx_voicemail_mailbox_uuid Shared Conversation Pbx Voicemail Mailbox UUID
     *
     * @return self
     */
    public function setSharedConversationPbxVoicemailMailboxUuid($shared_conversation_pbx_voicemail_mailbox_uuid)
    {
        if (!is_null($shared_conversation_pbx_voicemail_mailbox_uuid) && (mb_strlen($shared_conversation_pbx_voicemail_mailbox_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $shared_conversation_pbx_voicemail_mailbox_uuid when calling ConversationPbxAgent., must be smaller than or equal to 50.');
        }

        $this->container['shared_conversation_pbx_voicemail_mailbox_uuid'] = $shared_conversation_pbx_voicemail_mailbox_uuid;

        return $this;
    }

    /**
     * Gets twilio_taskrouter_worker_id
     *
     * @return string|null
     */
    public function getTwilioTaskrouterWorkerId()
    {
        return $this->container['twilio_taskrouter_worker_id'];
    }

    /**
     * Sets twilio_taskrouter_worker_id
     *
     * @param string|null $twilio_taskrouter_worker_id Twilio taskrouter worker Id
     *
     * @return self
     */
    public function setTwilioTaskrouterWorkerId($twilio_taskrouter_worker_id)
    {
        if (!is_null($twilio_taskrouter_worker_id) && (mb_strlen($twilio_taskrouter_worker_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $twilio_taskrouter_worker_id when calling ConversationPbxAgent., must be smaller than or equal to 100.');
        }

        $this->container['twilio_taskrouter_worker_id'] = $twilio_taskrouter_worker_id;

        return $this;
    }

    /**
     * Gets unavailable_play_audio_uuid
     *
     * @return string|null
     */
    public function getUnavailablePlayAudioUuid()
    {
        return $this->container['unavailable_play_audio_uuid'];
    }

    /**
     * Sets unavailable_play_audio_uuid
     *
     * @param string|null $unavailable_play_audio_uuid Unavailable play audio UUID
     *
     * @return self
     */
    public function setUnavailablePlayAudioUuid($unavailable_play_audio_uuid)
    {
        if (!is_null($unavailable_play_audio_uuid) && (mb_strlen($unavailable_play_audio_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $unavailable_play_audio_uuid when calling ConversationPbxAgent., must be smaller than or equal to 50.');
        }

        $this->container['unavailable_play_audio_uuid'] = $unavailable_play_audio_uuid;

        return $this;
    }

    /**
     * Gets unavailable_say
     *
     * @return string|null
     */
    public function getUnavailableSay()
    {
        return $this->container['unavailable_say'];
    }

    /**
     * Sets unavailable_say
     *
     * @param string|null $unavailable_say Unavailable say
     *
     * @return self
     */
    public function setUnavailableSay($unavailable_say)
    {
        $this->container['unavailable_say'] = $unavailable_say;

        return $this;
    }

    /**
     * Gets unavailable_say_voice
     *
     * @return string|null
     */
    public function getUnavailableSayVoice()
    {
        return $this->container['unavailable_say_voice'];
    }

    /**
     * Sets unavailable_say_voice
     *
     * @param string|null $unavailable_say_voice Unavailable say voice
     *
     * @return self
     */
    public function setUnavailableSayVoice($unavailable_say_voice)
    {
        if (!is_null($unavailable_say_voice) && (mb_strlen($unavailable_say_voice) > 50)) {
            throw new \InvalidArgumentException('invalid length for $unavailable_say_voice when calling ConversationPbxAgent., must be smaller than or equal to 50.');
        }

        $this->container['unavailable_say_voice'] = $unavailable_say_voice;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id User Id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets voicemail
     *
     * @return bool|null
     */
    public function getVoicemail()
    {
        return $this->container['voicemail'];
    }

    /**
     * Sets voicemail
     *
     * @param bool|null $voicemail True if this agent has voicemail configured
     *
     * @return self
     */
    public function setVoicemail($voicemail)
    {
        $this->container['voicemail'] = $voicemail;

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


