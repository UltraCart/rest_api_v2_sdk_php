<?php
/**
 * EmailCommseqSmsSendTestRequest
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
 * EmailCommseqSmsSendTestRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailCommseqSmsSendTestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailCommseqSmsSendTestRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'esp_commseq_step_uuid' => 'string',
        'esp_commseq_uuid' => 'string',
        'send_to_cellphone_e164' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'esp_commseq_step_uuid' => null,
        'esp_commseq_uuid' => null,
        'send_to_cellphone_e164' => null
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
        'esp_commseq_step_uuid' => 'esp_commseq_step_uuid',
        'esp_commseq_uuid' => 'esp_commseq_uuid',
        'send_to_cellphone_e164' => 'send_to_cellphone_e164'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'esp_commseq_step_uuid' => 'setEspCommseqStepUuid',
        'esp_commseq_uuid' => 'setEspCommseqUuid',
        'send_to_cellphone_e164' => 'setSendToCellphoneE164'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'esp_commseq_step_uuid' => 'getEspCommseqStepUuid',
        'esp_commseq_uuid' => 'getEspCommseqUuid',
        'send_to_cellphone_e164' => 'getSendToCellphoneE164'
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
        $this->container['esp_commseq_step_uuid'] = isset($data['esp_commseq_step_uuid']) ? $data['esp_commseq_step_uuid'] : null;
        $this->container['esp_commseq_uuid'] = isset($data['esp_commseq_uuid']) ? $data['esp_commseq_uuid'] : null;
        $this->container['send_to_cellphone_e164'] = isset($data['send_to_cellphone_e164']) ? $data['send_to_cellphone_e164'] : null;
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
     * Gets esp_commseq_step_uuid
     *
     * @return string
     */
    public function getEspCommseqStepUuid()
    {
        return $this->container['esp_commseq_step_uuid'];
    }

    /**
     * Sets esp_commseq_step_uuid
     *
     * @param string $esp_commseq_step_uuid esp_commseq_step_uuid
     *
     * @return $this
     */
    public function setEspCommseqStepUuid($esp_commseq_step_uuid)
    {
        $this->container['esp_commseq_step_uuid'] = $esp_commseq_step_uuid;

        return $this;
    }

    /**
     * Gets esp_commseq_uuid
     *
     * @return string
     */
    public function getEspCommseqUuid()
    {
        return $this->container['esp_commseq_uuid'];
    }

    /**
     * Sets esp_commseq_uuid
     *
     * @param string $esp_commseq_uuid esp_commseq_uuid
     *
     * @return $this
     */
    public function setEspCommseqUuid($esp_commseq_uuid)
    {
        $this->container['esp_commseq_uuid'] = $esp_commseq_uuid;

        return $this;
    }

    /**
     * Gets send_to_cellphone_e164
     *
     * @return string
     */
    public function getSendToCellphoneE164()
    {
        return $this->container['send_to_cellphone_e164'];
    }

    /**
     * Sets send_to_cellphone_e164
     *
     * @param string $send_to_cellphone_e164 send_to_cellphone_e164
     *
     * @return $this
     */
    public function setSendToCellphoneE164($send_to_cellphone_e164)
    {
        $this->container['send_to_cellphone_e164'] = $send_to_cellphone_e164;

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

