<?php
/**
 * ConversationMultimediaUploadUrlResponse
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
 * ConversationMultimediaUploadUrlResponse Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationMultimediaUploadUrlResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationMultimediaUploadUrlResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversation_multimedia_upload_url' => '\ultracart\v2\models\ConversationMultimediaUploadUrl',
        'error' => '\ultracart\v2\models\Error',
        'metadata' => '\ultracart\v2\models\ResponseMetadata',
        'success' => 'bool',
        'warning' => '\ultracart\v2\models\Warning'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversation_multimedia_upload_url' => null,
        'error' => null,
        'metadata' => null,
        'success' => null,
        'warning' => null
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
        'conversation_multimedia_upload_url' => 'conversation_multimedia_upload_url',
        'error' => 'error',
        'metadata' => 'metadata',
        'success' => 'success',
        'warning' => 'warning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversation_multimedia_upload_url' => 'setConversationMultimediaUploadUrl',
        'error' => 'setError',
        'metadata' => 'setMetadata',
        'success' => 'setSuccess',
        'warning' => 'setWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversation_multimedia_upload_url' => 'getConversationMultimediaUploadUrl',
        'error' => 'getError',
        'metadata' => 'getMetadata',
        'success' => 'getSuccess',
        'warning' => 'getWarning'
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
        $this->container['conversation_multimedia_upload_url'] = isset($data['conversation_multimedia_upload_url']) ? $data['conversation_multimedia_upload_url'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
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
     * Gets conversation_multimedia_upload_url
     *
     * @return \ultracart\v2\models\ConversationMultimediaUploadUrl
     */
    public function getConversationMultimediaUploadUrl()
    {
        return $this->container['conversation_multimedia_upload_url'];
    }

    /**
     * Sets conversation_multimedia_upload_url
     *
     * @param \ultracart\v2\models\ConversationMultimediaUploadUrl $conversation_multimedia_upload_url conversation_multimedia_upload_url
     *
     * @return $this
     */
    public function setConversationMultimediaUploadUrl($conversation_multimedia_upload_url)
    {
        $this->container['conversation_multimedia_upload_url'] = $conversation_multimedia_upload_url;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \ultracart\v2\models\Error
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \ultracart\v2\models\Error $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \ultracart\v2\models\ResponseMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \ultracart\v2\models\ResponseMetadata $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Indicates if API call was successful
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return \ultracart\v2\models\Warning
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param \ultracart\v2\models\Warning $warning warning
     *
     * @return $this
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

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


