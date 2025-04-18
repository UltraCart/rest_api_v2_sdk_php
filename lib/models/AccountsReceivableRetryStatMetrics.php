<?php
/**
 * AccountsReceivableRetryStatMetrics
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccountsReceivableRetryStatMetrics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountsReceivableRetryStatMetrics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
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
        return self::$openAPIModelName;
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
        $this->container['attempts'] = $data['attempts'] ?? null;
        $this->container['attempts_formatted'] = $data['attempts_formatted'] ?? null;
        $this->container['conversion_rate'] = $data['conversion_rate'] ?? null;
        $this->container['conversion_rate_formatted'] = $data['conversion_rate_formatted'] ?? null;
        $this->container['day'] = $data['day'] ?? null;
        $this->container['discounts'] = $data['discounts'] ?? null;
        $this->container['discounts_formatted'] = $data['discounts_formatted'] ?? null;
        $this->container['revenue'] = $data['revenue'] ?? null;
        $this->container['revenue_formatted'] = $data['revenue_formatted'] ?? null;
        $this->container['successes'] = $data['successes'] ?? null;
        $this->container['successes_formatted'] = $data['successes_formatted'] ?? null;
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
     * Gets attempts
     *
     * @return int|null
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param int|null $attempts attempts
     *
     * @return self
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets attempts_formatted
     *
     * @return string|null
     */
    public function getAttemptsFormatted()
    {
        return $this->container['attempts_formatted'];
    }

    /**
     * Sets attempts_formatted
     *
     * @param string|null $attempts_formatted attempts_formatted
     *
     * @return self
     */
    public function setAttemptsFormatted($attempts_formatted)
    {
        $this->container['attempts_formatted'] = $attempts_formatted;

        return $this;
    }

    /**
     * Gets conversion_rate
     *
     * @return float|null
     */
    public function getConversionRate()
    {
        return $this->container['conversion_rate'];
    }

    /**
     * Sets conversion_rate
     *
     * @param float|null $conversion_rate conversion_rate
     *
     * @return self
     */
    public function setConversionRate($conversion_rate)
    {
        $this->container['conversion_rate'] = $conversion_rate;

        return $this;
    }

    /**
     * Gets conversion_rate_formatted
     *
     * @return string|null
     */
    public function getConversionRateFormatted()
    {
        return $this->container['conversion_rate_formatted'];
    }

    /**
     * Sets conversion_rate_formatted
     *
     * @param string|null $conversion_rate_formatted conversion_rate_formatted
     *
     * @return self
     */
    public function setConversionRateFormatted($conversion_rate_formatted)
    {
        $this->container['conversion_rate_formatted'] = $conversion_rate_formatted;

        return $this;
    }

    /**
     * Gets day
     *
     * @return int|null
     */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int|null $day day
     *
     * @return self
     */
    public function setDay($day)
    {
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return float|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param float|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets discounts_formatted
     *
     * @return string|null
     */
    public function getDiscountsFormatted()
    {
        return $this->container['discounts_formatted'];
    }

    /**
     * Sets discounts_formatted
     *
     * @param string|null $discounts_formatted discounts_formatted
     *
     * @return self
     */
    public function setDiscountsFormatted($discounts_formatted)
    {
        $this->container['discounts_formatted'] = $discounts_formatted;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return float|null
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param float|null $revenue revenue
     *
     * @return self
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets revenue_formatted
     *
     * @return string|null
     */
    public function getRevenueFormatted()
    {
        return $this->container['revenue_formatted'];
    }

    /**
     * Sets revenue_formatted
     *
     * @param string|null $revenue_formatted revenue_formatted
     *
     * @return self
     */
    public function setRevenueFormatted($revenue_formatted)
    {
        $this->container['revenue_formatted'] = $revenue_formatted;

        return $this;
    }

    /**
     * Gets successes
     *
     * @return int|null
     */
    public function getSuccesses()
    {
        return $this->container['successes'];
    }

    /**
     * Sets successes
     *
     * @param int|null $successes successes
     *
     * @return self
     */
    public function setSuccesses($successes)
    {
        $this->container['successes'] = $successes;

        return $this;
    }

    /**
     * Gets successes_formatted
     *
     * @return string|null
     */
    public function getSuccessesFormatted()
    {
        return $this->container['successes_formatted'];
    }

    /**
     * Sets successes_formatted
     *
     * @param string|null $successes_formatted successes_formatted
     *
     * @return self
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


