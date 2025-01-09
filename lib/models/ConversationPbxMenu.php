<?php
/**
 * ConversationPbxMenu
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
 * ConversationPbxMenu Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationPbxMenu implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationPbxMenu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_direct_extensions' => 'bool',
        'conversation_pbx_menu_uuid' => 'string',
        'default_action' => 'string',
        'default_action_target' => 'string',
        'mappings' => '\ultracart\v2\models\ConversationPbxMenuMapping[]',
        'merchant_id' => 'string',
        'name' => 'string',
        'play_audio_uuid' => 'string',
        'say' => 'string',
        'say_voice' => 'string',
        'timeout' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_direct_extensions' => null,
        'conversation_pbx_menu_uuid' => null,
        'default_action' => null,
        'default_action_target' => null,
        'mappings' => null,
        'merchant_id' => null,
        'name' => null,
        'play_audio_uuid' => null,
        'say' => null,
        'say_voice' => null,
        'timeout' => 'int32'
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
        'allow_direct_extensions' => 'allow_direct_extensions',
        'conversation_pbx_menu_uuid' => 'conversation_pbx_menu_uuid',
        'default_action' => 'default_action',
        'default_action_target' => 'default_action_target',
        'mappings' => 'mappings',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'play_audio_uuid' => 'play_audio_uuid',
        'say' => 'say',
        'say_voice' => 'say_voice',
        'timeout' => 'timeout'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_direct_extensions' => 'setAllowDirectExtensions',
        'conversation_pbx_menu_uuid' => 'setConversationPbxMenuUuid',
        'default_action' => 'setDefaultAction',
        'default_action_target' => 'setDefaultActionTarget',
        'mappings' => 'setMappings',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'play_audio_uuid' => 'setPlayAudioUuid',
        'say' => 'setSay',
        'say_voice' => 'setSayVoice',
        'timeout' => 'setTimeout'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_direct_extensions' => 'getAllowDirectExtensions',
        'conversation_pbx_menu_uuid' => 'getConversationPbxMenuUuid',
        'default_action' => 'getDefaultAction',
        'default_action_target' => 'getDefaultActionTarget',
        'mappings' => 'getMappings',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'play_audio_uuid' => 'getPlayAudioUuid',
        'say' => 'getSay',
        'say_voice' => 'getSayVoice',
        'timeout' => 'getTimeout'
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

    public const SAY_VOICE_MAN = 'man';
    public const SAY_VOICE_WOMAN = 'woman';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSayVoiceAllowableValues()
    {
        return [
            self::SAY_VOICE_MAN,
            self::SAY_VOICE_WOMAN,
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
        $this->container['allow_direct_extensions'] = $data['allow_direct_extensions'] ?? null;
        $this->container['conversation_pbx_menu_uuid'] = $data['conversation_pbx_menu_uuid'] ?? null;
        $this->container['default_action'] = $data['default_action'] ?? null;
        $this->container['default_action_target'] = $data['default_action_target'] ?? null;
        $this->container['mappings'] = $data['mappings'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['play_audio_uuid'] = $data['play_audio_uuid'] ?? null;
        $this->container['say'] = $data['say'] ?? null;
        $this->container['say_voice'] = $data['say_voice'] ?? null;
        $this->container['timeout'] = $data['timeout'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['conversation_pbx_menu_uuid']) && (mb_strlen($this->container['conversation_pbx_menu_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'conversation_pbx_menu_uuid', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['default_action']) && (mb_strlen($this->container['default_action']) > 30)) {
            $invalidProperties[] = "invalid value for 'default_action', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['default_action_target']) && (mb_strlen($this->container['default_action_target']) > 50)) {
            $invalidProperties[] = "invalid value for 'default_action_target', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['merchant_id']) && (mb_strlen($this->container['merchant_id']) > 5)) {
            $invalidProperties[] = "invalid value for 'merchant_id', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['play_audio_uuid']) && (mb_strlen($this->container['play_audio_uuid']) > 50)) {
            $invalidProperties[] = "invalid value for 'play_audio_uuid', the character length must be smaller than or equal to 50.";
        }

        $allowedValues = $this->getSayVoiceAllowableValues();
        if (!is_null($this->container['say_voice']) && !in_array($this->container['say_voice'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'say_voice', must be one of '%s'",
                $this->container['say_voice'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['say_voice']) && (mb_strlen($this->container['say_voice']) > 50)) {
            $invalidProperties[] = "invalid value for 'say_voice', the character length must be smaller than or equal to 50.";
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
     * Gets allow_direct_extensions
     *
     * @return bool|null
     */
    public function getAllowDirectExtensions()
    {
        return $this->container['allow_direct_extensions'];
    }

    /**
     * Sets allow_direct_extensions
     *
     * @param bool|null $allow_direct_extensions If true, the customer is allowed to input direct extensions within this menu
     *
     * @return self
     */
    public function setAllowDirectExtensions($allow_direct_extensions)
    {
        $this->container['allow_direct_extensions'] = $allow_direct_extensions;

        return $this;
    }

    /**
     * Gets conversation_pbx_menu_uuid
     *
     * @return string|null
     */
    public function getConversationPbxMenuUuid()
    {
        return $this->container['conversation_pbx_menu_uuid'];
    }

    /**
     * Sets conversation_pbx_menu_uuid
     *
     * @param string|null $conversation_pbx_menu_uuid Conversation Pbx Menu UUID
     *
     * @return self
     */
    public function setConversationPbxMenuUuid($conversation_pbx_menu_uuid)
    {
        if (!is_null($conversation_pbx_menu_uuid) && (mb_strlen($conversation_pbx_menu_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $conversation_pbx_menu_uuid when calling ConversationPbxMenu., must be smaller than or equal to 50.');
        }

        $this->container['conversation_pbx_menu_uuid'] = $conversation_pbx_menu_uuid;

        return $this;
    }

    /**
     * Gets default_action
     *
     * @return string|null
     */
    public function getDefaultAction()
    {
        return $this->container['default_action'];
    }

    /**
     * Sets default_action
     *
     * @param string|null $default_action The default action for this menu
     *
     * @return self
     */
    public function setDefaultAction($default_action)
    {
        if (!is_null($default_action) && (mb_strlen($default_action) > 30)) {
            throw new \InvalidArgumentException('invalid length for $default_action when calling ConversationPbxMenu., must be smaller than or equal to 30.');
        }

        $this->container['default_action'] = $default_action;

        return $this;
    }

    /**
     * Gets default_action_target
     *
     * @return string|null
     */
    public function getDefaultActionTarget()
    {
        return $this->container['default_action_target'];
    }

    /**
     * Sets default_action_target
     *
     * @param string|null $default_action_target The default action target for this menu
     *
     * @return self
     */
    public function setDefaultActionTarget($default_action_target)
    {
        if (!is_null($default_action_target) && (mb_strlen($default_action_target) > 50)) {
            throw new \InvalidArgumentException('invalid length for $default_action_target when calling ConversationPbxMenu., must be smaller than or equal to 50.');
        }

        $this->container['default_action_target'] = $default_action_target;

        return $this;
    }

    /**
     * Gets mappings
     *
     * @return \ultracart\v2\models\ConversationPbxMenuMapping[]|null
     */
    public function getMappings()
    {
        return $this->container['mappings'];
    }

    /**
     * Sets mappings
     *
     * @param \ultracart\v2\models\ConversationPbxMenuMapping[]|null $mappings Action mappings for this menu
     *
     * @return self
     */
    public function setMappings($mappings)
    {
        $this->container['mappings'] = $mappings;

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
            throw new \InvalidArgumentException('invalid length for $merchant_id when calling ConversationPbxMenu., must be smaller than or equal to 5.');
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
     * @param string|null $name Menu name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ConversationPbxMenu., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $play_audio_uuid An optional audio clip that plays when a customer enters this menu
     *
     * @return self
     */
    public function setPlayAudioUuid($play_audio_uuid)
    {
        if (!is_null($play_audio_uuid) && (mb_strlen($play_audio_uuid) > 50)) {
            throw new \InvalidArgumentException('invalid length for $play_audio_uuid when calling ConversationPbxMenu., must be smaller than or equal to 50.');
        }

        $this->container['play_audio_uuid'] = $play_audio_uuid;

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
     * @param string|null $say An optional saying that plays when a customer enters this menu
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
     * @param string|null $say_voice say voice
     *
     * @return self
     */
    public function setSayVoice($say_voice)
    {
        $allowedValues = $this->getSayVoiceAllowableValues();
        if (!is_null($say_voice) && !in_array($say_voice, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'say_voice', must be one of '%s'",
                    $say_voice,
                    implode("', '", $allowedValues)
                )
            );
        }
        if (!is_null($say_voice) && (mb_strlen($say_voice) > 50)) {
            throw new \InvalidArgumentException('invalid length for $say_voice when calling ConversationPbxMenu., must be smaller than or equal to 50.');
        }

        $this->container['say_voice'] = $say_voice;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int|null
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int|null $timeout The idle seconds before this menu times out
     *
     * @return self
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

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


