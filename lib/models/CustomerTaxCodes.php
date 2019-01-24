<?php
/**
 * CustomerTaxCodes
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
 * CustomerTaxCodes Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerTaxCodes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerTaxCodes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avalara_customer_code' => 'string',
        'avalara_entity_use_code' => 'string',
        'taxjar_customer_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avalara_customer_code' => null,
        'avalara_entity_use_code' => null,
        'taxjar_customer_id' => null
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
        'avalara_customer_code' => 'avalara_customer_code',
        'avalara_entity_use_code' => 'avalara_entity_use_code',
        'taxjar_customer_id' => 'taxjar_customer_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avalara_customer_code' => 'setAvalaraCustomerCode',
        'avalara_entity_use_code' => 'setAvalaraEntityUseCode',
        'taxjar_customer_id' => 'setTaxjarCustomerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avalara_customer_code' => 'getAvalaraCustomerCode',
        'avalara_entity_use_code' => 'getAvalaraEntityUseCode',
        'taxjar_customer_id' => 'getTaxjarCustomerId'
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
        $this->container['avalara_customer_code'] = isset($data['avalara_customer_code']) ? $data['avalara_customer_code'] : null;
        $this->container['avalara_entity_use_code'] = isset($data['avalara_entity_use_code']) ? $data['avalara_entity_use_code'] : null;
        $this->container['taxjar_customer_id'] = isset($data['taxjar_customer_id']) ? $data['taxjar_customer_id'] : null;
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

        return true;
    }


    /**
     * Gets avalara_customer_code
     *
     * @return string
     */
    public function getAvalaraCustomerCode()
    {
        return $this->container['avalara_customer_code'];
    }

    /**
     * Sets avalara_customer_code
     *
     * @param string $avalara_customer_code Avalara customer code
     *
     * @return $this
     */
    public function setAvalaraCustomerCode($avalara_customer_code)
    {
        $this->container['avalara_customer_code'] = $avalara_customer_code;

        return $this;
    }

    /**
     * Gets avalara_entity_use_code
     *
     * @return string
     */
    public function getAvalaraEntityUseCode()
    {
        return $this->container['avalara_entity_use_code'];
    }

    /**
     * Sets avalara_entity_use_code
     *
     * @param string $avalara_entity_use_code Avalara entity use code
     *
     * @return $this
     */
    public function setAvalaraEntityUseCode($avalara_entity_use_code)
    {
        $this->container['avalara_entity_use_code'] = $avalara_entity_use_code;

        return $this;
    }

    /**
     * Gets taxjar_customer_id
     *
     * @return string
     */
    public function getTaxjarCustomerId()
    {
        return $this->container['taxjar_customer_id'];
    }

    /**
     * Sets taxjar_customer_id
     *
     * @param string $taxjar_customer_id TaxJar customer id
     *
     * @return $this
     */
    public function setTaxjarCustomerId($taxjar_customer_id)
    {
        $this->container['taxjar_customer_id'] = $taxjar_customer_id;

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

