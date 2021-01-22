<?php
/**
 * EmailFlowFolder
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
 * EmailFlowFolder Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailFlowFolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailFlowFolder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'esp_flow_folder_uuid' => 'string',
        'merchant_id' => 'string',
        'name' => 'string',
        'storefront_oid' => 'int',
        'system_generated' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'esp_flow_folder_uuid' => null,
        'merchant_id' => null,
        'name' => null,
        'storefront_oid' => 'int32',
        'system_generated' => null
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
        'esp_flow_folder_uuid' => 'esp_flow_folder_uuid',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'storefront_oid' => 'storefront_oid',
        'system_generated' => 'system_generated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'esp_flow_folder_uuid' => 'setEspFlowFolderUuid',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'storefront_oid' => 'setStorefrontOid',
        'system_generated' => 'setSystemGenerated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'esp_flow_folder_uuid' => 'getEspFlowFolderUuid',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'storefront_oid' => 'getStorefrontOid',
        'system_generated' => 'getSystemGenerated'
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
        $this->container['esp_flow_folder_uuid'] = isset($data['esp_flow_folder_uuid']) ? $data['esp_flow_folder_uuid'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['system_generated'] = isset($data['system_generated']) ? $data['system_generated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 250)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 250.";
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
     * Gets esp_flow_folder_uuid
     *
     * @return string
     */
    public function getEspFlowFolderUuid()
    {
        return $this->container['esp_flow_folder_uuid'];
    }

    /**
     * Sets esp_flow_folder_uuid
     *
     * @param string $esp_flow_folder_uuid Email flow folder UUID
     *
     * @return $this
     */
    public function setEspFlowFolderUuid($esp_flow_folder_uuid)
    {
        $this->container['esp_flow_folder_uuid'] = $esp_flow_folder_uuid;

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of email flow folder
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EmailFlowFolder., must be smaller than or equal to 250.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int $storefront_oid Storefront oid
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets system_generated
     *
     * @return bool
     */
    public function getSystemGenerated()
    {
        return $this->container['system_generated'];
    }

    /**
     * Sets system_generated
     *
     * @param bool $system_generated System generated folder
     *
     * @return $this
     */
    public function setSystemGenerated($system_generated)
    {
        $this->container['system_generated'] = $system_generated;

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


