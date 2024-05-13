<?php
/**
 * ConversationPbxTimeBased
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
 * ConversationPbxTimeBased Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationPbxTimeBased implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationPbxTimeBased';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'conversation_pbx_time_based_uuid' => 'string',
        'mapping_config' => '\ultracart\v2\models\ConversationPbxTimeBasedMappingConfig',
        'merchant_id' => 'string',
        'time_based_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'conversation_pbx_time_based_uuid' => null,
        'mapping_config' => null,
        'merchant_id' => null,
        'time_based_name' => null
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
        'conversation_pbx_time_based_uuid' => 'conversation_pbx_time_based_uuid',
        'mapping_config' => 'mapping_config',
        'merchant_id' => 'merchant_id',
        'time_based_name' => 'time_based_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversation_pbx_time_based_uuid' => 'setConversationPbxTimeBasedUuid',
        'mapping_config' => 'setMappingConfig',
        'merchant_id' => 'setMerchantId',
        'time_based_name' => 'setTimeBasedName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversation_pbx_time_based_uuid' => 'getConversationPbxTimeBasedUuid',
        'mapping_config' => 'getMappingConfig',
        'merchant_id' => 'getMerchantId',
        'time_based_name' => 'getTimeBasedName'
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
        $this->container['conversation_pbx_time_based_uuid'] = isset($data['conversation_pbx_time_based_uuid']) ? $data['conversation_pbx_time_based_uuid'] : null;
        $this->container['mapping_config'] = isset($data['mapping_config']) ? $data['mapping_config'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['time_based_name'] = isset($data['time_based_name']) ? $data['time_based_name'] : null;
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
     * Gets conversation_pbx_time_based_uuid
     *
     * @return string
     */
    public function getConversationPbxTimeBasedUuid()
    {
        return $this->container['conversation_pbx_time_based_uuid'];
    }

    /**
     * Sets conversation_pbx_time_based_uuid
     *
     * @param string $conversation_pbx_time_based_uuid conversation_pbx_time_based_uuid
     *
     * @return $this
     */
    public function setConversationPbxTimeBasedUuid($conversation_pbx_time_based_uuid)
    {
        $this->container['conversation_pbx_time_based_uuid'] = $conversation_pbx_time_based_uuid;

        return $this;
    }

    /**
     * Gets mapping_config
     *
     * @return \ultracart\v2\models\ConversationPbxTimeBasedMappingConfig
     */
    public function getMappingConfig()
    {
        return $this->container['mapping_config'];
    }

    /**
     * Sets mapping_config
     *
     * @param \ultracart\v2\models\ConversationPbxTimeBasedMappingConfig $mapping_config mapping_config
     *
     * @return $this
     */
    public function setMappingConfig($mapping_config)
    {
        $this->container['mapping_config'] = $mapping_config;

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
     * @param string $merchant_id merchant_id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets time_based_name
     *
     * @return string
     */
    public function getTimeBasedName()
    {
        return $this->container['time_based_name'];
    }

    /**
     * Sets time_based_name
     *
     * @param string $time_based_name time_based_name
     *
     * @return $this
     */
    public function setTimeBasedName($time_based_name)
    {
        $this->container['time_based_name'] = $time_based_name;

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


