<?php
/**
 * OrderQuote
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
 * OrderQuote Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderQuote implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderQuote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quote_expiration_dts' => 'string',
        'quoted_by' => 'string',
        'quoted_dts' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quote_expiration_dts' => 'dateTime',
        'quoted_by' => null,
        'quoted_dts' => 'dateTime'
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
        'quote_expiration_dts' => 'quote_expiration_dts',
        'quoted_by' => 'quoted_by',
        'quoted_dts' => 'quoted_dts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_expiration_dts' => 'setQuoteExpirationDts',
        'quoted_by' => 'setQuotedBy',
        'quoted_dts' => 'setQuotedDts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_expiration_dts' => 'getQuoteExpirationDts',
        'quoted_by' => 'getQuotedBy',
        'quoted_dts' => 'getQuotedDts'
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
        $this->container['quote_expiration_dts'] = isset($data['quote_expiration_dts']) ? $data['quote_expiration_dts'] : null;
        $this->container['quoted_by'] = isset($data['quoted_by']) ? $data['quoted_by'] : null;
        $this->container['quoted_dts'] = isset($data['quoted_dts']) ? $data['quoted_dts'] : null;
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
     * Gets quote_expiration_dts
     *
     * @return string
     */
    public function getQuoteExpirationDts()
    {
        return $this->container['quote_expiration_dts'];
    }

    /**
     * Sets quote_expiration_dts
     *
     * @param string $quote_expiration_dts Expiration of quote at date/time
     *
     * @return $this
     */
    public function setQuoteExpirationDts($quote_expiration_dts)
    {
        $this->container['quote_expiration_dts'] = $quote_expiration_dts;

        return $this;
    }

    /**
     * Gets quoted_by
     *
     * @return string
     */
    public function getQuotedBy()
    {
        return $this->container['quoted_by'];
    }

    /**
     * Sets quoted_by
     *
     * @param string $quoted_by Quoted by user
     *
     * @return $this
     */
    public function setQuotedBy($quoted_by)
    {
        $this->container['quoted_by'] = $quoted_by;

        return $this;
    }

    /**
     * Gets quoted_dts
     *
     * @return string
     */
    public function getQuotedDts()
    {
        return $this->container['quoted_dts'];
    }

    /**
     * Sets quoted_dts
     *
     * @param string $quoted_dts Quoted on date/time
     *
     * @return $this
     */
    public function setQuotedDts($quoted_dts)
    {
        $this->container['quoted_dts'] = $quoted_dts;

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


