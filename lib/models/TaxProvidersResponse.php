<?php
/**
 * TaxProvidersResponse
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
 * TaxProvidersResponse Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxProvidersResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxProvidersResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avalara' => '\ultracart\v2\models\TaxProviderAvalara',
        'error' => '\ultracart\v2\models\Error',
        'metadata' => '\ultracart\v2\models\ResponseMetadata',
        'self' => '\ultracart\v2\models\TaxProviderSelf',
        'sovos' => '\ultracart\v2\models\TaxProviderSovos',
        'success' => 'bool',
        'taxjar' => '\ultracart\v2\models\TaxProviderTaxJar',
        'ultracart' => '\ultracart\v2\models\TaxProviderUltraCart'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'avalara' => null,
        'error' => null,
        'metadata' => null,
        'self' => null,
        'sovos' => null,
        'success' => null,
        'taxjar' => null,
        'ultracart' => null
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
        'avalara' => 'avalara',
        'error' => 'error',
        'metadata' => 'metadata',
        'self' => 'self',
        'sovos' => 'sovos',
        'success' => 'success',
        'taxjar' => 'taxjar',
        'ultracart' => 'ultracart'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'avalara' => 'setAvalara',
        'error' => 'setError',
        'metadata' => 'setMetadata',
        'self' => 'setSelf',
        'sovos' => 'setSovos',
        'success' => 'setSuccess',
        'taxjar' => 'setTaxjar',
        'ultracart' => 'setUltracart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'avalara' => 'getAvalara',
        'error' => 'getError',
        'metadata' => 'getMetadata',
        'self' => 'getSelf',
        'sovos' => 'getSovos',
        'success' => 'getSuccess',
        'taxjar' => 'getTaxjar',
        'ultracart' => 'getUltracart'
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
        $this->container['avalara'] = isset($data['avalara']) ? $data['avalara'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['sovos'] = isset($data['sovos']) ? $data['sovos'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['taxjar'] = isset($data['taxjar']) ? $data['taxjar'] : null;
        $this->container['ultracart'] = isset($data['ultracart']) ? $data['ultracart'] : null;
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
     * Gets avalara
     *
     * @return \ultracart\v2\models\TaxProviderAvalara
     */
    public function getAvalara()
    {
        return $this->container['avalara'];
    }

    /**
     * Sets avalara
     *
     * @param \ultracart\v2\models\TaxProviderAvalara $avalara avalara
     *
     * @return $this
     */
    public function setAvalara($avalara)
    {
        $this->container['avalara'] = $avalara;

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
     * Gets self
     *
     * @return \ultracart\v2\models\TaxProviderSelf
     */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
     * Sets self
     *
     * @param \ultracart\v2\models\TaxProviderSelf $self self
     *
     * @return $this
     */
    public function setSelf($self)
    {
        $this->container['self'] = $self;

        return $this;
    }

    /**
     * Gets sovos
     *
     * @return \ultracart\v2\models\TaxProviderSovos
     */
    public function getSovos()
    {
        return $this->container['sovos'];
    }

    /**
     * Sets sovos
     *
     * @param \ultracart\v2\models\TaxProviderSovos $sovos sovos
     *
     * @return $this
     */
    public function setSovos($sovos)
    {
        $this->container['sovos'] = $sovos;

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
     * Gets taxjar
     *
     * @return \ultracart\v2\models\TaxProviderTaxJar
     */
    public function getTaxjar()
    {
        return $this->container['taxjar'];
    }

    /**
     * Sets taxjar
     *
     * @param \ultracart\v2\models\TaxProviderTaxJar $taxjar taxjar
     *
     * @return $this
     */
    public function setTaxjar($taxjar)
    {
        $this->container['taxjar'] = $taxjar;

        return $this;
    }

    /**
     * Gets ultracart
     *
     * @return \ultracart\v2\models\TaxProviderUltraCart
     */
    public function getUltracart()
    {
        return $this->container['ultracart'];
    }

    /**
     * Sets ultracart
     *
     * @param \ultracart\v2\models\TaxProviderUltraCart $ultracart ultracart
     *
     * @return $this
     */
    public function setUltracart($ultracart)
    {
        $this->container['ultracart'] = $ultracart;

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


