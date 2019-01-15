<?php
/**
 * AccountsReceivableRetryStatMetrics
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
 * AccountsReceivableRetryStatMetrics Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsReceivableRetryStatMetrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountsReceivableRetryStatMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attempts' => 'int',
        'attempts_formatted' => 'string',
        'conversion_rate' => 'float',
        'conversion_rate_formatted' => 'string',
        'day' => 'int',
        'discounts' => 'float',
        'discounts_formatted' => 'string',
        'revenue' => 'float',
        'revenue_formatted' => 'string',
        'successes' => 'int',
        'successes_formatted' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attempts' => 'int32',
        'attempts_formatted' => null,
        'conversion_rate' => null,
        'conversion_rate_formatted' => null,
        'day' => 'int32',
        'discounts' => null,
        'discounts_formatted' => null,
        'revenue' => null,
        'revenue_formatted' => null,
        'successes' => 'int32',
        'successes_formatted' => null
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
        'attempts' => 'attempts',
        'attempts_formatted' => 'attempts_formatted',
        'conversion_rate' => 'conversion_rate',
        'conversion_rate_formatted' => 'conversion_rate_formatted',
        'day' => 'day',
        'discounts' => 'discounts',
        'discounts_formatted' => 'discounts_formatted',
        'revenue' => 'revenue',
        'revenue_formatted' => 'revenue_formatted',
        'successes' => 'successes',
        'successes_formatted' => 'successes_formatted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attempts' => 'setAttempts',
        'attempts_formatted' => 'setAttemptsFormatted',
        'conversion_rate' => 'setConversionRate',
        'conversion_rate_formatted' => 'setConversionRateFormatted',
        'day' => 'setDay',
        'discounts' => 'setDiscounts',
        'discounts_formatted' => 'setDiscountsFormatted',
        'revenue' => 'setRevenue',
        'revenue_formatted' => 'setRevenueFormatted',
        'successes' => 'setSuccesses',
        'successes_formatted' => 'setSuccessesFormatted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attempts' => 'getAttempts',
        'attempts_formatted' => 'getAttemptsFormatted',
        'conversion_rate' => 'getConversionRate',
        'conversion_rate_formatted' => 'getConversionRateFormatted',
        'day' => 'getDay',
        'discounts' => 'getDiscounts',
        'discounts_formatted' => 'getDiscountsFormatted',
        'revenue' => 'getRevenue',
        'revenue_formatted' => 'getRevenueFormatted',
        'successes' => 'getSuccesses',
        'successes_formatted' => 'getSuccessesFormatted'
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
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['attempts_formatted'] = isset($data['attempts_formatted']) ? $data['attempts_formatted'] : null;
        $this->container['conversion_rate'] = isset($data['conversion_rate']) ? $data['conversion_rate'] : null;
        $this->container['conversion_rate_formatted'] = isset($data['conversion_rate_formatted']) ? $data['conversion_rate_formatted'] : null;
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['discounts_formatted'] = isset($data['discounts_formatted']) ? $data['discounts_formatted'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['revenue_formatted'] = isset($data['revenue_formatted']) ? $data['revenue_formatted'] : null;
        $this->container['successes'] = isset($data['successes']) ? $data['successes'] : null;
        $this->container['successes_formatted'] = isset($data['successes_formatted']) ? $data['successes_formatted'] : null;
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
     * Gets attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param int $attempts attempts
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets attempts_formatted
     *
     * @return string
     */
    public function getAttemptsFormatted()
    {
        return $this->container['attempts_formatted'];
    }

    /**
     * Sets attempts_formatted
     *
     * @param string $attempts_formatted attempts_formatted
     *
     * @return $this
     */
    public function setAttemptsFormatted($attempts_formatted)
    {
        $this->container['attempts_formatted'] = $attempts_formatted;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return float
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float $conversion_rate conversion_rate
     *
     * @return $this
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets conversion_rate_formatted
     *
     * @return string
     */
    public function getConversionRateFormatted()
    {
        return $this->container['conversion_rate_formatted'];
    }

    /**
     * Sets conversion_rate_formatted
     *
     * @param string $conversion_rate_formatted conversion_rate_formatted
     *
     * @return $this
     */
    public function setConversionRateFormatted($conversion_rate_formatted)
    {
        $this->container['conversion_rate_formatted'] = $conversion_rate_formatted;

        return $this;
    }

    /**
     * Gets day
     *
     * @return int
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int $day day
     *
     * @return $this
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return float
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param float $discounts discounts
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets discounts_formatted
     *
     * @return string
     */
    public function getDiscountsFormatted()
    {
        return $this->container['discounts_formatted'];
    }

    /**
     * Sets discounts_formatted
     *
     * @param string $discounts_formatted discounts_formatted
     *
     * @return $this
     */
    public function setDiscountsFormatted($discounts_formatted)
    {
        $this->container['discounts_formatted'] = $discounts_formatted;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param float $revenue revenue
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets revenue_formatted
     *
     * @return string
     */
    public function getRevenueFormatted()
    {
        return $this->container['revenue_formatted'];
    }

    /**
     * Sets revenue_formatted
     *
     * @param string $revenue_formatted revenue_formatted
     *
     * @return $this
     */
    public function setRevenueFormatted($revenue_formatted)
    {
        $this->container['revenue_formatted'] = $revenue_formatted;

        return $this;
    }

    /**
     * Gets successes
     *
     * @return int
     */
    public function getSuccesses()
    {
        return $this->container['successes'];
    }

    /**
     * Sets successes
     *
     * @param int $successes successes
     *
     * @return $this
     */
    public function setSuccesses($successes)
    {
        $this->container['successes'] = $successes;

        return $this;
    }

    /**
     * Gets successes_formatted
     *
     * @return string
     */
    public function getSuccessesFormatted()
    {
        return $this->container['successes_formatted'];
    }

    /**
     * Sets successes_formatted
     *
     * @param string $successes_formatted successes_formatted
     *
     * @return $this
     */
    public function setSuccessesFormatted($successes_formatted)
    {
        $this->container['successes_formatted'] = $successes_formatted;

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


