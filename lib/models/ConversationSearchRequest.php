<?php
/**
 * ConversationSearchRequest
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
 * ConversationSearchRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationSearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_filter' => 'string',
        'language_filter' => 'string',
        'medium_filter' => 'string',
        'order_by_newest' => 'bool',
        'order_by_oldest' => 'bool',
        'range_begin' => 'int',
        'range_end' => 'int',
        'sms_phone_number_filter' => 'string',
        'text_search' => 'string',
        'visible_filter' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email_filter' => null,
        'language_filter' => null,
        'medium_filter' => null,
        'order_by_newest' => null,
        'order_by_oldest' => null,
        'range_begin' => 'int32',
        'range_end' => 'int32',
        'sms_phone_number_filter' => null,
        'text_search' => null,
        'visible_filter' => null
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
        'email_filter' => 'email_filter',
        'language_filter' => 'language_filter',
        'medium_filter' => 'medium_filter',
        'order_by_newest' => 'order_by_newest',
        'order_by_oldest' => 'order_by_oldest',
        'range_begin' => 'range_begin',
        'range_end' => 'range_end',
        'sms_phone_number_filter' => 'sms_phone_number_filter',
        'text_search' => 'text_search',
        'visible_filter' => 'visible_filter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_filter' => 'setEmailFilter',
        'language_filter' => 'setLanguageFilter',
        'medium_filter' => 'setMediumFilter',
        'order_by_newest' => 'setOrderByNewest',
        'order_by_oldest' => 'setOrderByOldest',
        'range_begin' => 'setRangeBegin',
        'range_end' => 'setRangeEnd',
        'sms_phone_number_filter' => 'setSmsPhoneNumberFilter',
        'text_search' => 'setTextSearch',
        'visible_filter' => 'setVisibleFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_filter' => 'getEmailFilter',
        'language_filter' => 'getLanguageFilter',
        'medium_filter' => 'getMediumFilter',
        'order_by_newest' => 'getOrderByNewest',
        'order_by_oldest' => 'getOrderByOldest',
        'range_begin' => 'getRangeBegin',
        'range_end' => 'getRangeEnd',
        'sms_phone_number_filter' => 'getSmsPhoneNumberFilter',
        'text_search' => 'getTextSearch',
        'visible_filter' => 'getVisibleFilter'
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
        $this->container['email_filter'] = isset($data['email_filter']) ? $data['email_filter'] : null;
        $this->container['language_filter'] = isset($data['language_filter']) ? $data['language_filter'] : null;
        $this->container['medium_filter'] = isset($data['medium_filter']) ? $data['medium_filter'] : null;
        $this->container['order_by_newest'] = isset($data['order_by_newest']) ? $data['order_by_newest'] : null;
        $this->container['order_by_oldest'] = isset($data['order_by_oldest']) ? $data['order_by_oldest'] : null;
        $this->container['range_begin'] = isset($data['range_begin']) ? $data['range_begin'] : null;
        $this->container['range_end'] = isset($data['range_end']) ? $data['range_end'] : null;
        $this->container['sms_phone_number_filter'] = isset($data['sms_phone_number_filter']) ? $data['sms_phone_number_filter'] : null;
        $this->container['text_search'] = isset($data['text_search']) ? $data['text_search'] : null;
        $this->container['visible_filter'] = isset($data['visible_filter']) ? $data['visible_filter'] : null;
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
     * Gets email_filter
     *
     * @return string
     */
    public function getEmailFilter()
    {
        return $this->container['email_filter'];
    }

    /**
     * Sets email_filter
     *
     * @param string $email_filter email_filter
     *
     * @return $this
     */
    public function setEmailFilter($email_filter)
    {
        $this->container['email_filter'] = $email_filter;

        return $this;
    }

    /**
     * Gets language_filter
     *
     * @return string
     */
    public function getLanguageFilter()
    {
        return $this->container['language_filter'];
    }

    /**
     * Sets language_filter
     *
     * @param string $language_filter language_filter
     *
     * @return $this
     */
    public function setLanguageFilter($language_filter)
    {
        $this->container['language_filter'] = $language_filter;

        return $this;
    }

    /**
     * Gets medium_filter
     *
     * @return string
     */
    public function getMediumFilter()
    {
        return $this->container['medium_filter'];
    }

    /**
     * Sets medium_filter
     *
     * @param string $medium_filter medium_filter
     *
     * @return $this
     */
    public function setMediumFilter($medium_filter)
    {
        $this->container['medium_filter'] = $medium_filter;

        return $this;
    }

    /**
     * Gets order_by_newest
     *
     * @return bool
     */
    public function getOrderByNewest()
    {
        return $this->container['order_by_newest'];
    }

    /**
     * Sets order_by_newest
     *
     * @param bool $order_by_newest order_by_newest
     *
     * @return $this
     */
    public function setOrderByNewest($order_by_newest)
    {
        $this->container['order_by_newest'] = $order_by_newest;

        return $this;
    }

    /**
     * Gets order_by_oldest
     *
     * @return bool
     */
    public function getOrderByOldest()
    {
        return $this->container['order_by_oldest'];
    }

    /**
     * Sets order_by_oldest
     *
     * @param bool $order_by_oldest order_by_oldest
     *
     * @return $this
     */
    public function setOrderByOldest($order_by_oldest)
    {
        $this->container['order_by_oldest'] = $order_by_oldest;

        return $this;
    }

    /**
     * Gets range_begin
     *
     * @return int
     */
    public function getRangeBegin()
    {
        return $this->container['range_begin'];
    }

    /**
     * Sets range_begin
     *
     * @param int $range_begin range_begin
     *
     * @return $this
     */
    public function setRangeBegin($range_begin)
    {
        $this->container['range_begin'] = $range_begin;

        return $this;
    }

    /**
     * Gets range_end
     *
     * @return int
     */
    public function getRangeEnd()
    {
        return $this->container['range_end'];
    }

    /**
     * Sets range_end
     *
     * @param int $range_end range_end
     *
     * @return $this
     */
    public function setRangeEnd($range_end)
    {
        $this->container['range_end'] = $range_end;

        return $this;
    }

    /**
     * Gets sms_phone_number_filter
     *
     * @return string
     */
    public function getSmsPhoneNumberFilter()
    {
        return $this->container['sms_phone_number_filter'];
    }

    /**
     * Sets sms_phone_number_filter
     *
     * @param string $sms_phone_number_filter sms_phone_number_filter
     *
     * @return $this
     */
    public function setSmsPhoneNumberFilter($sms_phone_number_filter)
    {
        $this->container['sms_phone_number_filter'] = $sms_phone_number_filter;

        return $this;
    }

    /**
     * Gets text_search
     *
     * @return string
     */
    public function getTextSearch()
    {
        return $this->container['text_search'];
    }

    /**
     * Sets text_search
     *
     * @param string $text_search text_search
     *
     * @return $this
     */
    public function setTextSearch($text_search)
    {
        $this->container['text_search'] = $text_search;

        return $this;
    }

    /**
     * Gets visible_filter
     *
     * @return bool
     */
    public function getVisibleFilter()
    {
        return $this->container['visible_filter'];
    }

    /**
     * Sets visible_filter
     *
     * @param bool $visible_filter visible_filter
     *
     * @return $this
     */
    public function setVisibleFilter($visible_filter)
    {
        $this->container['visible_filter'] = $visible_filter;

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


