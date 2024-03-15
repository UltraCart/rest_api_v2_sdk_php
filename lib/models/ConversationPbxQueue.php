<?php
/**
 * ConversationPbxQueue
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
 * ConversationPbxQueue Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationPbxQueue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationPbxQueue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'announce_queue_position' => 'bool',
        'conversation_pbx_queue_uuid' => 'string',
        'conversation_voicemail_mailbox_uuid' => 'string',
        'hold_conversation_pbx_audio_uuid' => 'string',
        'max_hold_seconds' => 'int',
        'members' => '\ultracart\v2\models\ConversationPbxQueueMembers',
        'merchant_id' => 'string',
        'name' => 'string',
        'no_agent_available_play_audio_uuid' => 'string',
        'no_agent_available_say' => 'string',
        'no_agent_available_say_voice' => 'string',
        'play_audio_uuid' => 'string',
        'record_call' => 'bool',
        'say' => 'string',
        'say_voice' => 'string',
        'twilio_taskrouter_workflow_sid' => 'string',
        'twilio_workspace_queue_sid' => 'string',
        'voicemail' => 'bool',
        'wait_critical_seconds' => 'int',
        'wait_warning_seconds' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'announce_queue_position' => null,
        'conversation_pbx_queue_uuid' => null,
        'conversation_voicemail_mailbox_uuid' => null,
        'hold_conversation_pbx_audio_uuid' => null,
        'max_hold_seconds' => 'int32',
        'members' => null,
        'merchant_id' => null,
        'name' => null,
        'no_agent_available_play_audio_uuid' => null,
        'no_agent_available_say' => null,
        'no_agent_available_say_voice' => null,
        'play_audio_uuid' => null,
        'record_call' => null,
        'say' => null,
        'say_voice' => null,
        'twilio_taskrouter_workflow_sid' => null,
        'twilio_workspace_queue_sid' => null,
        'voicemail' => null,
        'wait_critical_seconds' => 'int32',
        'wait_warning_seconds' => 'int32'
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
        'announce_queue_position' => 'announce_queue_position',
        'conversation_pbx_queue_uuid' => 'conversation_pbx_queue_uuid',
        'conversation_voicemail_mailbox_uuid' => 'conversation_voicemail_mailbox_uuid',
        'hold_conversation_pbx_audio_uuid' => 'hold_conversation_pbx_audio_uuid',
        'max_hold_seconds' => 'max_hold_seconds',
        'members' => 'members',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'no_agent_available_play_audio_uuid' => 'no_agent_available_play_audio_uuid',
        'no_agent_available_say' => 'no_agent_available_say',
        'no_agent_available_say_voice' => 'no_agent_available_say_voice',
        'play_audio_uuid' => 'play_audio_uuid',
        'record_call' => 'record_call',
        'say' => 'say',
        'say_voice' => 'say_voice',
        'twilio_taskrouter_workflow_sid' => 'twilio_taskrouter_workflow_sid',
        'twilio_workspace_queue_sid' => 'twilio_workspace_queue_sid',
        'voicemail' => 'voicemail',
        'wait_critical_seconds' => 'wait_critical_seconds',
        'wait_warning_seconds' => 'wait_warning_seconds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'announce_queue_position' => 'setAnnounceQueuePosition',
        'conversation_pbx_queue_uuid' => 'setConversationPbxQueueUuid',
        'conversation_voicemail_mailbox_uuid' => 'setConversationVoicemailMailboxUuid',
        'hold_conversation_pbx_audio_uuid' => 'setHoldConversationPbxAudioUuid',
        'max_hold_seconds' => 'setMaxHoldSeconds',
        'members' => 'setMembers',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'no_agent_available_play_audio_uuid' => 'setNoAgentAvailablePlayAudioUuid',
        'no_agent_available_say' => 'setNoAgentAvailableSay',
        'no_agent_available_say_voice' => 'setNoAgentAvailableSayVoice',
        'play_audio_uuid' => 'setPlayAudioUuid',
        'record_call' => 'setRecordCall',
        'say' => 'setSay',
        'say_voice' => 'setSayVoice',
        'twilio_taskrouter_workflow_sid' => 'setTwilioTaskrouterWorkflowSid',
        'twilio_workspace_queue_sid' => 'setTwilioWorkspaceQueueSid',
        'voicemail' => 'setVoicemail',
        'wait_critical_seconds' => 'setWaitCriticalSeconds',
        'wait_warning_seconds' => 'setWaitWarningSeconds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'announce_queue_position' => 'getAnnounceQueuePosition',
        'conversation_pbx_queue_uuid' => 'getConversationPbxQueueUuid',
        'conversation_voicemail_mailbox_uuid' => 'getConversationVoicemailMailboxUuid',
        'hold_conversation_pbx_audio_uuid' => 'getHoldConversationPbxAudioUuid',
        'max_hold_seconds' => 'getMaxHoldSeconds',
        'members' => 'getMembers',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'no_agent_available_play_audio_uuid' => 'getNoAgentAvailablePlayAudioUuid',
        'no_agent_available_say' => 'getNoAgentAvailableSay',
        'no_agent_available_say_voice' => 'getNoAgentAvailableSayVoice',
        'play_audio_uuid' => 'getPlayAudioUuid',
        'record_call' => 'getRecordCall',
        'say' => 'getSay',
        'say_voice' => 'getSayVoice',
        'twilio_taskrouter_workflow_sid' => 'getTwilioTaskrouterWorkflowSid',
        'twilio_workspace_queue_sid' => 'getTwilioWorkspaceQueueSid',
        'voicemail' => 'getVoicemail',
        'wait_critical_seconds' => 'getWaitCriticalSeconds',
        'wait_warning_seconds' => 'getWaitWarningSeconds'
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
        $this->container['announce_queue_position'] = $data['announce_queue_position'] ?? null;
        $this->container['conversation_pbx_queue_uuid'] = $data['conversation_pbx_queue_uuid'] ?? null;
        $this->container['conversation_voicemail_mailbox_uuid'] = $data['conversation_voicemail_mailbox_uuid'] ?? null;
        $this->container['hold_conversation_pbx_audio_uuid'] = $data['hold_conversation_pbx_audio_uuid'] ?? null;
        $this->container['max_hold_seconds'] = $data['max_hold_seconds'] ?? null;
        $this->container['members'] = $data['members'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['no_agent_available_play_audio_uuid'] = $data['no_agent_available_play_audio_uuid'] ?? null;
        $this->container['no_agent_available_say'] = $data['no_agent_available_say'] ?? null;
        $this->container['no_agent_available_say_voice'] = $data['no_agent_available_say_voice'] ?? null;
        $this->container['play_audio_uuid'] = $data['play_audio_uuid'] ?? null;
        $this->container['record_call'] = $data['record_call'] ?? null;
        $this->container['say'] = $data['say'] ?? null;
        $this->container['say_voice'] = $data['say_voice'] ?? null;
        $this->container['twilio_taskrouter_workflow_sid'] = $data['twilio_taskrouter_workflow_sid'] ?? null;
        $this->container['twilio_workspace_queue_sid'] = $data['twilio_workspace_queue_sid'] ?? null;
        $this->container['voicemail'] = $data['voicemail'] ?? null;
        $this->container['wait_critical_seconds'] = $data['wait_critical_seconds'] ?? null;
        $this->container['wait_warning_seconds'] = $data['wait_warning_seconds'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['conversation_voicemail_mailbox_uuid']) && (mb_strlen($this->container['conversation_voicemail_mailbox_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'conversation_voicemail_mailbox_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['hold_conversation_pbx_audio_uuid']) && (mb_strlen($this->container['hold_conversation_pbx_audio_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'hold_conversation_pbx_audio_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['merchant_id']) && (mb_strlen($this->container['merchant_id']) > 5)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['no_agent_available_play_audio_uuid']) && (mb_strlen($this->container['no_agent_available_play_audio_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'no_agent_available_play_audio_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['no_agent_available_say_voice']) && (mb_strlen($this->container['no_agent_available_say_voice']) > 50)) {
            $invalidProperties[] = "invalid value for 'no_agent_available_say_voice', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['play_audio_uuid']) && (mb_strlen($this->container['play_audio_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'play_audio_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['say_voice']) && (mb_strlen($this->container['say_voice']) > 50)) {
            $invalidProperties[] = "invalid value for 'say_voice', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['twilio_taskrouter_workflow_sid']) && (mb_strlen($this->container['twilio_taskrouter_workflow_sid']) > 100)) {
            $invalidProperties[] = "invalid value for 'twilio_taskrouter_workflow_sid', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['twilio_workspace_queue_sid']) && (mb_strlen($this->container['twilio_workspace_queue_sid']) > 50)) {
            $invalidProperties[] = "invalid value for 'twilio_workspace_queue_sid', the character length must be smaller than or equal to 50.";
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
     * Gets announce_queue_position
     *
     * @return bool|null
     */
    public function getAnnounceQueuePosition()
    {
        return $this->container['announce_queue_position'];
    }

    /**
     * Sets announce_queue_position
     *
     * @param bool|null $announce_queue_position If true, the customer is told their queue position upon entering the queue
     *
     * @return self
     */
    public function setAnnounceQueuePosition($announce_queue_position)
    {
        $this->container['announce_queue_position'] = $announce_queue_position;

        return $this;
    }

    /**
     * Gets conversation_pbx_queue_uuid
     *
     * @return string|null
     */
    public function getConversationPbxQueueUuid()
    {
        return $this->container['conversation_pbx_queue_uuid'];
    }

    /**
     * Sets conversation_pbx_queue_uuid
     *
     * @param string|null $conversation_pbx_queue_uuid Conversation Pbx Queue unique identifier
     *
     * @return self
     */
    public function setConversationPbxQueueUuid($conversation_pbx_queue_uuid)
    {
        $this->container['conversation_pbx_queue_uuid'] = $conversation_pbx_queue_uuid;

        return $this;
    }

    /**
     * Gets conversation_voicemail_mailbox_uuid
     *
     * @return string|null
     */
    public function getConversationVoicemailMailboxUuid()
    {
        return $this->container['conversation_voicemail_mailbox_uuid'];
    }

    /**
     * Sets conversation_voicemail_mailbox_uuid
     *
     * @param string|null $conversation_voicemail_mailbox_uuid The voicemail mailbox associated with this queue
     *
     * @return self
     */
    public function setConversationVoicemailMailboxUuid($conversation_voicemail_mailbox_uuid)
    {
        if (!is_null($conversation_voicemail_mailbox_uuid) && (mb_strlen($conversation_voicemail_mailbox_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $conversation_voicemail_mailbox_uuid when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['conversation_voicemail_mailbox_uuid'] = $conversation_voicemail_mailbox_uuid;

        return $this;
    }

    /**
     * Gets hold_conversation_pbx_audio_uuid
     *
     * @return string|null
     */
    public function getHoldConversationPbxAudioUuid()
    {
        return $this->container['hold_conversation_pbx_audio_uuid'];
    }

    /**
     * Sets hold_conversation_pbx_audio_uuid
     *
     * @param string|null $hold_conversation_pbx_audio_uuid The audio to play while holding in a queue
     *
     * @return self
     */
    public function setHoldConversationPbxAudioUuid($hold_conversation_pbx_audio_uuid)
    {
        if (!is_null($hold_conversation_pbx_audio_uuid) && (mb_strlen($hold_conversation_pbx_audio_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $hold_conversation_pbx_audio_uuid when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['hold_conversation_pbx_audio_uuid'] = $hold_conversation_pbx_audio_uuid;

        return $this;
    }

    /**
     * Gets max_hold_seconds
     *
     * @return int|null
     */
    public function getMaxHoldSeconds()
    {
        return $this->container['max_hold_seconds'];
    }

    /**
     * Sets max_hold_seconds
     *
     * @param int|null $max_hold_seconds The maximum number of seconds for a customer to hold in a queue
     *
     * @return self
     */
    public function setMaxHoldSeconds($max_hold_seconds)
    {
        $this->container['max_hold_seconds'] = $max_hold_seconds;

        return $this;
    }

    /**
     * Gets members
     *
     * @return \ultracart\v2\models\ConversationPbxQueueMembers|null
     */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
     * Sets members
     *
     * @param \ultracart\v2\models\ConversationPbxQueueMembers|null $members members
     *
     * @return self
     */
    public function setMembers($members)
    {
        $this->container['members'] = $members;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling ConversationPbxQueue., must be smaller than or equal to 5.');
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of queue
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets no_agent_available_play_audio_uuid
     *
     * @return string|null
     */
    public function getNoAgentAvailablePlayAudioUuid()
    {
        return $this->container['no_agent_available_play_audio_uuid'];
    }

    /**
     * Sets no_agent_available_play_audio_uuid
     *
     * @param string|null $no_agent_available_play_audio_uuid When no agent is available after the max_hold_seconds, say this
     *
     * @return self
     */
    public function setNoAgentAvailablePlayAudioUuid($no_agent_available_play_audio_uuid)
    {
        if (!is_null($no_agent_available_play_audio_uuid) && (mb_strlen($no_agent_available_play_audio_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $no_agent_available_play_audio_uuid when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['no_agent_available_play_audio_uuid'] = $no_agent_available_play_audio_uuid;

        return $this;
    }

    /**
     * Gets no_agent_available_say
     *
     * @return string|null
     */
    public function getNoAgentAvailableSay()
    {
        return $this->container['no_agent_available_say'];
    }

    /**
     * Sets no_agent_available_say
     *
     * @param string|null $no_agent_available_say When no agent is available after the max_hold_seconds, say this
     *
     * @return self
     */
    public function setNoAgentAvailableSay($no_agent_available_say)
    {
        $this->container['no_agent_available_say'] = $no_agent_available_say;

        return $this;
    }

    /**
     * Gets no_agent_available_say_voice
     *
     * @return string|null
     */
    public function getNoAgentAvailableSayVoice()
    {
        return $this->container['no_agent_available_say_voice'];
    }

    /**
     * Sets no_agent_available_say_voice
     *
     * @param string|null $no_agent_available_say_voice The type of voice used to say text when no agent is available
     *
     * @return self
     */
    public function setNoAgentAvailableSayVoice($no_agent_available_say_voice)
    {
        if (!is_null($no_agent_available_say_voice) && (mb_strlen($no_agent_available_say_voice) > 50)) {
            throw new \InvalidArgumentException('invalid length for $no_agent_available_say_voice when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['no_agent_available_say_voice'] = $no_agent_available_say_voice;

        return $this;
    }

    /**
     * Gets play_audio_uuid
     *
     * @return string|null
     */
    public function getPlayAudioUuid()
    {
        return $this->container['play_audio_uuid'];
    }

    /**
     * Sets play_audio_uuid
     *
     * @param string|null $play_audio_uuid Audio played when customer enters a queue
     *
     * @return self
     */
    public function setPlayAudioUuid($play_audio_uuid)
    {
        if (!is_null($play_audio_uuid) && (mb_strlen($play_audio_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $play_audio_uuid when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['play_audio_uuid'] = $play_audio_uuid;

        return $this;
    }

    /**
     * Gets record_call
     *
     * @return bool|null
     */
    public function getRecordCall()
    {
        return $this->container['record_call'];
    }

    /**
     * Sets record_call
     *
     * @param bool|null $record_call If true, any calls in this queue are recorded
     *
     * @return self
     */
    public function setRecordCall($record_call)
    {
        $this->container['record_call'] = $record_call;

        return $this;
    }

    /**
     * Gets say
     *
     * @return string|null
     */
    public function getSay()
    {
        return $this->container['say'];
    }

    /**
     * Sets say
     *
     * @param string|null $say Say text when a customer enters queue
     *
     * @return self
     */
    public function setSay($say)
    {
        $this->container['say'] = $say;

        return $this;
    }

    /**
     * Gets say_voice
     *
     * @return string|null
     */
    public function getSayVoice()
    {
        return $this->container['say_voice'];
    }

    /**
     * Sets say_voice
     *
     * @param string|null $say_voice The type of voice to use when say text is spoken
     *
     * @return self
     */
    public function setSayVoice($say_voice)
    {
        if (!is_null($say_voice) && (mb_strlen($say_voice) > 50)) {
            throw new \InvalidArgumentException('invalid length for $say_voice when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['say_voice'] = $say_voice;

        return $this;
    }

    /**
     * Gets twilio_taskrouter_workflow_sid
     *
     * @return string|null
     */
    public function getTwilioTaskrouterWorkflowSid()
    {
        return $this->container['twilio_taskrouter_workflow_sid'];
    }

    /**
     * Sets twilio_taskrouter_workflow_sid
     *
     * @param string|null $twilio_taskrouter_workflow_sid Twilio taskrouter workflow sid
     *
     * @return self
     */
    public function setTwilioTaskrouterWorkflowSid($twilio_taskrouter_workflow_sid)
    {
        if (!is_null($twilio_taskrouter_workflow_sid) && (mb_strlen($twilio_taskrouter_workflow_sid) > 100)) {
            throw new \InvalidArgumentException('invalid length for $twilio_taskrouter_workflow_sid when calling ConversationPbxQueue., must be smaller than or equal to 100.');
        }

        $this->container['twilio_taskrouter_workflow_sid'] = $twilio_taskrouter_workflow_sid;

        return $this;
    }

    /**
     * Gets twilio_workspace_queue_sid
     *
     * @return string|null
     */
    public function getTwilioWorkspaceQueueSid()
    {
        return $this->container['twilio_workspace_queue_sid'];
    }

    /**
     * Sets twilio_workspace_queue_sid
     *
     * @param string|null $twilio_workspace_queue_sid Twilio workspace queue sid
     *
     * @return self
     */
    public function setTwilioWorkspaceQueueSid($twilio_workspace_queue_sid)
    {
        if (!is_null($twilio_workspace_queue_sid) && (mb_strlen($twilio_workspace_queue_sid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $twilio_workspace_queue_sid when calling ConversationPbxQueue., must be smaller than or equal to 50.');
        }

        $this->container['twilio_workspace_queue_sid'] = $twilio_workspace_queue_sid;

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
     * @param bool|null $voicemail If true, this queue has a voicemail associated with it
     *
     * @return self
     */
    public function setVoicemail($voicemail)
    {
        $this->container['voicemail'] = $voicemail;

        return $this;
    }

    /**
     * Gets wait_critical_seconds
     *
     * @return int|null
     */
    public function getWaitCriticalSeconds()
    {
        return $this->container['wait_critical_seconds'];
    }

    /**
     * Sets wait_critical_seconds
     *
     * @param int|null $wait_critical_seconds Wait time in seconds before critical
     *
     * @return self
     */
    public function setWaitCriticalSeconds($wait_critical_seconds)
    {
        $this->container['wait_critical_seconds'] = $wait_critical_seconds;

        return $this;
    }

    /**
     * Gets wait_warning_seconds
     *
     * @return int|null
     */
    public function getWaitWarningSeconds()
    {
        return $this->container['wait_warning_seconds'];
    }

    /**
     * Sets wait_warning_seconds
     *
     * @param int|null $wait_warning_seconds Wait time in seconds before warning
     *
     * @return self
     */
    public function setWaitWarningSeconds($wait_warning_seconds)
    {
        $this->container['wait_warning_seconds'] = $wait_warning_seconds;

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


