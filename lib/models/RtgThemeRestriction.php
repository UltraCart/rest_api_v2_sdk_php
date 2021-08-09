<?php
/**
 * RtgThemeRestriction
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
 * RtgThemeRestriction Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RtgThemeRestriction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RtgThemeRestriction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'restriction' => 'string',
        'storefront_host_name' => 'string',
        'theme_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'restriction' => null,
        'storefront_host_name' => null,
        'theme_code' => null
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
        'restriction' => 'restriction',
        'storefront_host_name' => 'storefront_host_name',
        'theme_code' => 'theme_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'restriction' => 'setRestriction',
        'storefront_host_name' => 'setStorefrontHostName',
        'theme_code' => 'setThemeCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'restriction' => 'getRestriction',
        'storefront_host_name' => 'getStorefrontHostName',
        'theme_code' => 'getThemeCode'
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

    const RESTRICTION_INVALID = 'invalid';
    const RESTRICTION_VALID = 'valid';
    const RESTRICTION_VALID_ONLY = 'validOnly';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRestrictionAllowableValues()
    {
        return [
            self::RESTRICTION_INVALID,
            self::RESTRICTION_VALID,
            self::RESTRICTION_VALID_ONLY,
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
        $this->container['restriction'] = isset($data['restriction']) ? $data['restriction'] : null;
        $this->container['storefront_host_name'] = isset($data['storefront_host_name']) ? $data['storefront_host_name'] : null;
        $this->container['theme_code'] = isset($data['theme_code']) ? $data['theme_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRestrictionAllowableValues();
        if (!is_null($this->container['restriction']) && !in_array($this->container['restriction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'restriction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets restriction
     *
     * @return string
     */
    public function getRestriction()
    {
        return $this->container['restriction'];
    }

    /**
     * Sets restriction
     *
     * @param string $restriction Any restriction for this theme
     *
     * @return $this
     */
    public function setRestriction($restriction)
    {
        $allowedValues = $this->getRestrictionAllowableValues();
        if (!is_null($restriction) && !in_array($restriction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'restriction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['restriction'] = $restriction;

        return $this;
    }

    /**
     * Gets storefront_host_name
     *
     * @return string
     */
    public function getStorefrontHostName()
    {
        return $this->container['storefront_host_name'];
    }

    /**
     * Sets storefront_host_name
     *
     * @param string $storefront_host_name The server name for this theme.  This will not be populated for legacy (ancient) themes
     *
     * @return $this
     */
    public function setStorefrontHostName($storefront_host_name)
    {
        $this->container['storefront_host_name'] = $storefront_host_name;

        return $this;
    }

    /**
     * Gets theme_code
     *
     * @return string
     */
    public function getThemeCode()
    {
        return $this->container['theme_code'];
    }

    /**
     * Sets theme_code
     *
     * @param string $theme_code Human friendly short code for this theme
     *
     * @return $this
     */
    public function setThemeCode($theme_code)
    {
        $this->container['theme_code'] = $theme_code;

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

