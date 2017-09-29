<?php
/**
 * CartSettingsPaymentAmazon
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * CartSettingsPaymentAmazon Class Doc Comment
 *
 * @category    Class
 * @package     ultracart\v2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartSettingsPaymentAmazon implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartSettingsPaymentAmazon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amazon_button_url' => 'string',
        'amazon_merchant_id' => 'string',
        'amazon_widget_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amazon_button_url' => null,
        'amazon_merchant_id' => null,
        'amazon_widget_url' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_button_url' => 'amazon_button_url',
        'amazon_merchant_id' => 'amazon_merchant_id',
        'amazon_widget_url' => 'amazon_widget_url'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amazon_button_url' => 'setAmazonButtonUrl',
        'amazon_merchant_id' => 'setAmazonMerchantId',
        'amazon_widget_url' => 'setAmazonWidgetUrl'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amazon_button_url' => 'getAmazonButtonUrl',
        'amazon_merchant_id' => 'getAmazonMerchantId',
        'amazon_widget_url' => 'getAmazonWidgetUrl'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amazon_button_url'] = isset($data['amazon_button_url']) ? $data['amazon_button_url'] : null;
        $this->container['amazon_merchant_id'] = isset($data['amazon_merchant_id']) ? $data['amazon_merchant_id'] : null;
        $this->container['amazon_widget_url'] = isset($data['amazon_widget_url']) ? $data['amazon_widget_url'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets amazon_button_url
     * @return string
     */
    public function getAmazonButtonUrl()
    {
        return $this->container['amazon_button_url'];
    }

    /**
     * Sets amazon_button_url
     * @param string $amazon_button_url Amazon button URL
     * @return $this
     */
    public function setAmazonButtonUrl($amazon_button_url)
    {
        $this->container['amazon_button_url'] = $amazon_button_url;

        return $this;
    }

    /**
     * Gets amazon_merchant_id
     * @return string
     */
    public function getAmazonMerchantId()
    {
        return $this->container['amazon_merchant_id'];
    }

    /**
     * Sets amazon_merchant_id
     * @param string $amazon_merchant_id Amazon merchant ID
     * @return $this
     */
    public function setAmazonMerchantId($amazon_merchant_id)
    {
        $this->container['amazon_merchant_id'] = $amazon_merchant_id;

        return $this;
    }

    /**
     * Gets amazon_widget_url
     * @return string
     */
    public function getAmazonWidgetUrl()
    {
        return $this->container['amazon_widget_url'];
    }

    /**
     * Sets amazon_widget_url
     * @param string $amazon_widget_url Amazon widget URL
     * @return $this
     */
    public function setAmazonWidgetUrl($amazon_widget_url)
    {
        $this->container['amazon_widget_url'] = $amazon_widget_url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


