<?php
/**
 * ConversationMessage
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
 * ConversationMessage Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'author_conversation_participant_arn' => 'string',
        'author_conversation_participant_name' => 'string',
        'body' => 'string',
        'media_urls' => 'string[]',
        'message_dts' => 'string',
        'transport_statuses' => '\ultracart\v2\models\ConversationMessageTransportStatus[]',
        'upload_keys' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'author_conversation_participant_arn' => null,
        'author_conversation_participant_name' => null,
        'body' => null,
        'media_urls' => null,
        'message_dts' => 'dateTime',
        'transport_statuses' => null,
        'upload_keys' => null
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
        'author_conversation_participant_arn' => 'author_conversation_participant_arn',
        'author_conversation_participant_name' => 'author_conversation_participant_name',
        'body' => 'body',
        'media_urls' => 'media_urls',
        'message_dts' => 'message_dts',
        'transport_statuses' => 'transport_statuses',
        'upload_keys' => 'upload_keys'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'author_conversation_participant_arn' => 'setAuthorConversationParticipantArn',
        'author_conversation_participant_name' => 'setAuthorConversationParticipantName',
        'body' => 'setBody',
        'media_urls' => 'setMediaUrls',
        'message_dts' => 'setMessageDts',
        'transport_statuses' => 'setTransportStatuses',
        'upload_keys' => 'setUploadKeys'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'author_conversation_participant_arn' => 'getAuthorConversationParticipantArn',
        'author_conversation_participant_name' => 'getAuthorConversationParticipantName',
        'body' => 'getBody',
        'media_urls' => 'getMediaUrls',
        'message_dts' => 'getMessageDts',
        'transport_statuses' => 'getTransportStatuses',
        'upload_keys' => 'getUploadKeys'
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
        $this->container['author_conversation_participant_arn'] = $data['author_conversation_participant_arn'] ?? null;
        $this->container['author_conversation_participant_name'] = $data['author_conversation_participant_name'] ?? null;
        $this->container['body'] = $data['body'] ?? null;
        $this->container['media_urls'] = $data['media_urls'] ?? null;
        $this->container['message_dts'] = $data['message_dts'] ?? null;
        $this->container['transport_statuses'] = $data['transport_statuses'] ?? null;
        $this->container['upload_keys'] = $data['upload_keys'] ?? null;
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
     * Gets author_conversation_participant_arn
     *
     * @return string|null
     */
    public function getAuthorConversationParticipantArn()
    {
        return $this->container['author_conversation_participant_arn'];
    }

    /**
     * Sets author_conversation_participant_arn
     *
     * @param string|null $author_conversation_participant_arn author_conversation_participant_arn
     *
     * @return self
     */
    public function setAuthorConversationParticipantArn($author_conversation_participant_arn)
    {
        $this->container['author_conversation_participant_arn'] = $author_conversation_participant_arn;

        return $this;
    }

    /**
     * Gets author_conversation_participant_name
     *
     * @return string|null
     */
    public function getAuthorConversationParticipantName()
    {
        return $this->container['author_conversation_participant_name'];
    }

    /**
     * Sets author_conversation_participant_name
     *
     * @param string|null $author_conversation_participant_name author_conversation_participant_name
     *
     * @return self
     */
    public function setAuthorConversationParticipantName($author_conversation_participant_name)
    {
        $this->container['author_conversation_participant_name'] = $author_conversation_participant_name;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string|null
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string|null $body body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets media_urls
     *
     * @return string[]|null
     */
    public function getMediaUrls()
    {
        return $this->container['media_urls'];
    }

    /**
     * Sets media_urls
     *
     * @param string[]|null $media_urls media_urls
     *
     * @return self
     */
    public function setMediaUrls($media_urls)
    {
        $this->container['media_urls'] = $media_urls;

        return $this;
    }

    /**
     * Gets message_dts
     *
     * @return string|null
     */
    public function getMessageDts()
    {
        return $this->container['message_dts'];
    }

    /**
     * Sets message_dts
     *
     * @param string|null $message_dts Message date/time
     *
     * @return self
     */
    public function setMessageDts($message_dts)
    {
        $this->container['message_dts'] = $message_dts;

        return $this;
    }

    /**
     * Gets transport_statuses
     *
     * @return \ultracart\v2\models\ConversationMessageTransportStatus[]|null
     */
    public function getTransportStatuses()
    {
        return $this->container['transport_statuses'];
    }

    /**
     * Sets transport_statuses
     *
     * @param \ultracart\v2\models\ConversationMessageTransportStatus[]|null $transport_statuses transport_statuses
     *
     * @return self
     */
    public function setTransportStatuses($transport_statuses)
    {
        $this->container['transport_statuses'] = $transport_statuses;

        return $this;
    }

    /**
     * Gets upload_keys
     *
     * @return string[]|null
     */
    public function getUploadKeys()
    {
        return $this->container['upload_keys'];
    }

    /**
     * Sets upload_keys
     *
     * @param string[]|null $upload_keys upload_keys
     *
     * @return self
     */
    public function setUploadKeys($upload_keys)
    {
        $this->container['upload_keys'] = $upload_keys;

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


