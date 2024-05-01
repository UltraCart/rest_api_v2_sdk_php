<?php
/**
 * ConversationPbxVoicemailMessage
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
 * ConversationPbxVoicemailMessage Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationPbxVoicemailMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationPbxVoicemailMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'call_sid' => 'string',
        'duration' => 'int',
        'from' => 'string',
        'from_caller_id' => 'string',
        'listened' => 'bool',
        'merchant_id' => 'string',
        'recording_sid' => 'string',
        'recording_size_bytes' => 'int',
        'recording_status' => 'string',
        'recording_url' => 'string',
        'transcript_json' => 'string',
        'transcript_text' => 'string',
        'voicemail_dts' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'call_sid' => null,
        'duration' => 'int32',
        'from' => null,
        'from_caller_id' => null,
        'listened' => null,
        'merchant_id' => null,
        'recording_sid' => null,
        'recording_size_bytes' => 'int32',
        'recording_status' => null,
        'recording_url' => null,
        'transcript_json' => 'dateTime',
        'transcript_text' => null,
        'voicemail_dts' => 'dateTime'
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
        'call_sid' => 'call_sid',
        'duration' => 'duration',
        'from' => 'from',
        'from_caller_id' => 'from_caller_id',
        'listened' => 'listened',
        'merchant_id' => 'merchant_id',
        'recording_sid' => 'recording_sid',
        'recording_size_bytes' => 'recording_size_bytes',
        'recording_status' => 'recording_status',
        'recording_url' => 'recording_url',
        'transcript_json' => 'transcript_json',
        'transcript_text' => 'transcript_text',
        'voicemail_dts' => 'voicemail_dts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_sid' => 'setCallSid',
        'duration' => 'setDuration',
        'from' => 'setFrom',
        'from_caller_id' => 'setFromCallerId',
        'listened' => 'setListened',
        'merchant_id' => 'setMerchantId',
        'recording_sid' => 'setRecordingSid',
        'recording_size_bytes' => 'setRecordingSizeBytes',
        'recording_status' => 'setRecordingStatus',
        'recording_url' => 'setRecordingUrl',
        'transcript_json' => 'setTranscriptJson',
        'transcript_text' => 'setTranscriptText',
        'voicemail_dts' => 'setVoicemailDts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_sid' => 'getCallSid',
        'duration' => 'getDuration',
        'from' => 'getFrom',
        'from_caller_id' => 'getFromCallerId',
        'listened' => 'getListened',
        'merchant_id' => 'getMerchantId',
        'recording_sid' => 'getRecordingSid',
        'recording_size_bytes' => 'getRecordingSizeBytes',
        'recording_status' => 'getRecordingStatus',
        'recording_url' => 'getRecordingUrl',
        'transcript_json' => 'getTranscriptJson',
        'transcript_text' => 'getTranscriptText',
        'voicemail_dts' => 'getVoicemailDts'
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

    const RECORDING_STATUS_COMPLETED = 'completed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecordingStatusAllowableValues()
    {
        return [
            self::RECORDING_STATUS_COMPLETED,
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
        $this->container['call_sid'] = isset($data['call_sid']) ? $data['call_sid'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['from_caller_id'] = isset($data['from_caller_id']) ? $data['from_caller_id'] : null;
        $this->container['listened'] = isset($data['listened']) ? $data['listened'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['recording_sid'] = isset($data['recording_sid']) ? $data['recording_sid'] : null;
        $this->container['recording_size_bytes'] = isset($data['recording_size_bytes']) ? $data['recording_size_bytes'] : null;
        $this->container['recording_status'] = isset($data['recording_status']) ? $data['recording_status'] : null;
        $this->container['recording_url'] = isset($data['recording_url']) ? $data['recording_url'] : null;
        $this->container['transcript_json'] = isset($data['transcript_json']) ? $data['transcript_json'] : null;
        $this->container['transcript_text'] = isset($data['transcript_text']) ? $data['transcript_text'] : null;
        $this->container['voicemail_dts'] = isset($data['voicemail_dts']) ? $data['voicemail_dts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRecordingStatusAllowableValues();
        if (!is_null($this->container['recording_status']) && !in_array($this->container['recording_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'recording_status', must be one of '%s'",
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
     * Gets call_sid
     *
     * @return string
     */
    public function getCallSid()
    {
        return $this->container['call_sid'];
    }

    /**
     * Sets call_sid
     *
     * @param string $call_sid Call SID
     *
     * @return $this
     */
    public function setCallSid($call_sid)
    {
        $this->container['call_sid'] = $call_sid;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Duration in seconds
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from From phone number in E.164
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets from_caller_id
     *
     * @return string
     */
    public function getFromCallerId()
    {
        return $this->container['from_caller_id'];
    }

    /**
     * Sets from_caller_id
     *
     * @param string $from_caller_id From caller id (if available)
     *
     * @return $this
     */
    public function setFromCallerId($from_caller_id)
    {
        $this->container['from_caller_id'] = $from_caller_id;

        return $this;
    }

    /**
     * Gets listened
     *
     * @return bool
     */
    public function getListened()
    {
        return $this->container['listened'];
    }

    /**
     * Sets listened
     *
     * @param bool $listened True if the voicemail has been listened to in the user interface
     *
     * @return $this
     */
    public function setListened($listened)
    {
        $this->container['listened'] = $listened;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Merchant ID
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets recording_sid
     *
     * @return string
     */
    public function getRecordingSid()
    {
        return $this->container['recording_sid'];
    }

    /**
     * Sets recording_sid
     *
     * @param string $recording_sid Recording SID
     *
     * @return $this
     */
    public function setRecordingSid($recording_sid)
    {
        $this->container['recording_sid'] = $recording_sid;

        return $this;
    }

    /**
     * Gets recording_size_bytes
     *
     * @return int
     */
    public function getRecordingSizeBytes()
    {
        return $this->container['recording_size_bytes'];
    }

    /**
     * Sets recording_size_bytes
     *
     * @param int $recording_size_bytes Recording size in bytes
     *
     * @return $this
     */
    public function setRecordingSizeBytes($recording_size_bytes)
    {
        $this->container['recording_size_bytes'] = $recording_size_bytes;

        return $this;
    }

    /**
     * Gets recording_status
     *
     * @return string
     */
    public function getRecordingStatus()
    {
        return $this->container['recording_status'];
    }

    /**
     * Sets recording_status
     *
     * @param string $recording_status Recording Status
     *
     * @return $this
     */
    public function setRecordingStatus($recording_status)
    {
        $allowedValues = $this->getRecordingStatusAllowableValues();
        if (!is_null($recording_status) && !in_array($recording_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recording_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recording_status'] = $recording_status;

        return $this;
    }

    /**
     * Gets recording_url
     *
     * @return string
     */
    public function getRecordingUrl()
    {
        return $this->container['recording_url'];
    }

    /**
     * Sets recording_url
     *
     * @param string $recording_url Recording URL (expires in 4 hours)
     *
     * @return $this
     */
    public function setRecordingUrl($recording_url)
    {
        $this->container['recording_url'] = $recording_url;

        return $this;
    }

    /**
     * Gets transcript_json
     *
     * @return string
     */
    public function getTranscriptJson()
    {
        return $this->container['transcript_json'];
    }

    /**
     * Sets transcript_json
     *
     * @param string $transcript_json JSON version of the transcript
     *
     * @return $this
     */
    public function setTranscriptJson($transcript_json)
    {
        $this->container['transcript_json'] = $transcript_json;

        return $this;
    }

    /**
     * Gets transcript_text
     *
     * @return string
     */
    public function getTranscriptText()
    {
        return $this->container['transcript_text'];
    }

    /**
     * Sets transcript_text
     *
     * @param string $transcript_text Formatted text of the transcript
     *
     * @return $this
     */
    public function setTranscriptText($transcript_text)
    {
        $this->container['transcript_text'] = $transcript_text;

        return $this;
    }

    /**
     * Gets voicemail_dts
     *
     * @return string
     */
    public function getVoicemailDts()
    {
        return $this->container['voicemail_dts'];
    }

    /**
     * Sets voicemail_dts
     *
     * @param string $voicemail_dts Voicemail date/time
     *
     * @return $this
     */
    public function setVoicemailDts($voicemail_dts)
    {
        $this->container['voicemail_dts'] = $voicemail_dts;

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

