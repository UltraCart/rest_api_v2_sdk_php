<?php
/**
 * ConversationStartRequest
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
 * ConversationStartRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationStartRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationStartRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_conversation_participant_arns' => 'string[]',
        'conversation_arn' => 'string',
        'conversation_webchat_queue_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_conversation_participant_arns' => null,
        'conversation_arn' => null,
        'conversation_webchat_queue_uuid' => null
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
        'add_conversation_participant_arns' => 'add_conversation_participant_arns',
        'conversation_arn' => 'conversation_arn',
        'conversation_webchat_queue_uuid' => 'conversation_webchat_queue_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_conversation_participant_arns' => 'setAddConversationParticipantArns',
        'conversation_arn' => 'setConversationArn',
        'conversation_webchat_queue_uuid' => 'setConversationWebchatQueueUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_conversation_participant_arns' => 'getAddConversationParticipantArns',
        'conversation_arn' => 'getConversationArn',
        'conversation_webchat_queue_uuid' => 'getConversationWebchatQueueUuid'
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
        $this->container['add_conversation_participant_arns'] = isset($data['add_conversation_participant_arns']) ? $data['add_conversation_participant_arns'] : null;
        $this->container['conversation_arn'] = isset($data['conversation_arn']) ? $data['conversation_arn'] : null;
        $this->container['conversation_webchat_queue_uuid'] = isset($data['conversation_webchat_queue_uuid']) ? $data['conversation_webchat_queue_uuid'] : null;
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
     * Gets add_conversation_participant_arns
     *
     * @return string[]
     */
    public function getAddConversationParticipantArns()
    {
        return $this->container['add_conversation_participant_arns'];
    }

    /**
     * Sets add_conversation_participant_arns
     *
     * @param string[] $add_conversation_participant_arns add_conversation_participant_arns
     *
     * @return $this
     */
    public function setAddConversationParticipantArns($add_conversation_participant_arns)
    {
        $this->container['add_conversation_participant_arns'] = $add_conversation_participant_arns;

        return $this;
    }

    /**
     * Gets conversation_arn
     *
     * @return string
     */
    public function getConversationArn()
    {
        return $this->container['conversation_arn'];
    }

    /**
     * Sets conversation_arn
     *
     * @param string $conversation_arn conversation_arn
     *
     * @return $this
     */
    public function setConversationArn($conversation_arn)
    {
        $this->container['conversation_arn'] = $conversation_arn;

        return $this;
    }

    /**
     * Gets conversation_webchat_queue_uuid
     *
     * @return string
     */
    public function getConversationWebchatQueueUuid()
    {
        return $this->container['conversation_webchat_queue_uuid'];
    }

    /**
     * Sets conversation_webchat_queue_uuid
     *
     * @param string $conversation_webchat_queue_uuid conversation_webchat_queue_uuid
     *
     * @return $this
     */
    public function setConversationWebchatQueueUuid($conversation_webchat_queue_uuid)
    {
        $this->container['conversation_webchat_queue_uuid'] = $conversation_webchat_queue_uuid;

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


