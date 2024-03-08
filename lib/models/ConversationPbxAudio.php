<?php
/**
 * ConversationPbxAudio
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
 * ConversationPbxAudio Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationPbxAudio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationPbxAudio';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'audio_s3_listing_key' => 'string',
        'conversation_pbx_audio_uuid' => 'string',
        'default_hold_music' => 'bool',
        'description' => 'string',
        'filename' => 'string',
        'merchant_id' => 'string',
        'mime_type' => 'string',
        'user_id' => 'int',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'audio_s3_listing_key' => null,
        'conversation_pbx_audio_uuid' => null,
        'default_hold_music' => null,
        'description' => null,
        'filename' => null,
        'merchant_id' => null,
        'mime_type' => null,
        'user_id' => 'int32',
        'version' => 'int32'
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
        'audio_s3_listing_key' => 'audio_s3_listing_key',
        'conversation_pbx_audio_uuid' => 'conversation_pbx_audio_uuid',
        'default_hold_music' => 'default_hold_music',
        'description' => 'description',
        'filename' => 'filename',
        'merchant_id' => 'merchant_id',
        'mime_type' => 'mime_type',
        'user_id' => 'user_id',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_s3_listing_key' => 'setAudioS3ListingKey',
        'conversation_pbx_audio_uuid' => 'setConversationPbxAudioUuid',
        'default_hold_music' => 'setDefaultHoldMusic',
        'description' => 'setDescription',
        'filename' => 'setFilename',
        'merchant_id' => 'setMerchantId',
        'mime_type' => 'setMimeType',
        'user_id' => 'setUserId',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_s3_listing_key' => 'getAudioS3ListingKey',
        'conversation_pbx_audio_uuid' => 'getConversationPbxAudioUuid',
        'default_hold_music' => 'getDefaultHoldMusic',
        'description' => 'getDescription',
        'filename' => 'getFilename',
        'merchant_id' => 'getMerchantId',
        'mime_type' => 'getMimeType',
        'user_id' => 'getUserId',
        'version' => 'getVersion'
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
        $this->container['audio_s3_listing_key'] = isset($data['audio_s3_listing_key']) ? $data['audio_s3_listing_key'] : null;
        $this->container['conversation_pbx_audio_uuid'] = isset($data['conversation_pbx_audio_uuid']) ? $data['conversation_pbx_audio_uuid'] : null;
        $this->container['default_hold_music'] = isset($data['default_hold_music']) ? $data['default_hold_music'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['audio_s3_listing_key']) && (mb_strlen($this->container['audio_s3_listing_key']) > 250)) {
            $invalidProperties[] = "invalid value for 'audio_s3_listing_key', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['conversation_pbx_audio_uuid']) && (mb_strlen($this->container['conversation_pbx_audio_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'conversation_pbx_audio_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['filename']) && (mb_strlen($this->container['filename']) > 100)) {
            $invalidProperties[] = "invalid value for 'filename', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['merchant_id']) && (mb_strlen($this->container['merchant_id']) > 5)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['mime_type']) && (mb_strlen($this->container['mime_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'mime_type', the character length must be smaller than or equal to 100.";
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
     * Gets audio_s3_listing_key
     *
     * @return string
     */
    public function getAudioS3ListingKey()
    {
        return $this->container['audio_s3_listing_key'];
    }

    /**
     * Sets audio_s3_listing_key
     *
     * @param string $audio_s3_listing_key Audio S3 Listing Key
     *
     * @return $this
     */
    public function setAudioS3ListingKey($audio_s3_listing_key)
    {
        if (!is_null($audio_s3_listing_key) && (mb_strlen($audio_s3_listing_key) > 250)) {
            throw new \InvalidArgumentException('invalid length for $audio_s3_listing_key when calling ConversationPbxAudio., must be smaller than or equal to 250.');
        }

        $this->container['audio_s3_listing_key'] = $audio_s3_listing_key;

        return $this;
    }

    /**
     * Gets conversation_pbx_audio_uuid
     *
     * @return string
     */
    public function getConversationPbxAudioUuid()
    {
        return $this->container['conversation_pbx_audio_uuid'];
    }

    /**
     * Sets conversation_pbx_audio_uuid
     *
     * @param string $conversation_pbx_audio_uuid Conversation Pbx Audio UUID
     *
     * @return $this
     */
    public function setConversationPbxAudioUuid($conversation_pbx_audio_uuid)
    {
        if (!is_null($conversation_pbx_audio_uuid) && (mb_strlen($conversation_pbx_audio_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $conversation_pbx_audio_uuid when calling ConversationPbxAudio., must be smaller than or equal to 50.');
        }

        $this->container['conversation_pbx_audio_uuid'] = $conversation_pbx_audio_uuid;

        return $this;
    }

    /**
     * Gets default_hold_music
     *
     * @return bool
     */
    public function getDefaultHoldMusic()
    {
        return $this->container['default_hold_music'];
    }

    /**
     * Sets default_hold_music
     *
     * @param bool $default_hold_music If true, this will be the default hold music
     *
     * @return $this
     */
    public function setDefaultHoldMusic($default_hold_music)
    {
        $this->container['default_hold_music'] = $default_hold_music;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of this audio
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ConversationPbxAudio., must be smaller than or equal to 100.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename Filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        if (!is_null($filename) && (mb_strlen($filename) > 100)) {
            throw new \InvalidArgumentException('invalid length for $filename when calling ConversationPbxAudio., must be smaller than or equal to 100.');
        }

        $this->container['filename'] = $filename;

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
     * @param string $merchant_id Merchant Id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        if (!is_null($merchant_id) && (mb_strlen($merchant_id) > 5)) {
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling ConversationPbxAudio., must be smaller than or equal to 5.');
        }

        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type Mime Type
     *
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        if (!is_null($mime_type) && (mb_strlen($mime_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $mime_type when calling ConversationPbxAudio., must be smaller than or equal to 100.');
        }

        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User Id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version Version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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

