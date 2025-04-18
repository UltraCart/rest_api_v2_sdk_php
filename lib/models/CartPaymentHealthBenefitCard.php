<?php
/**
 * CartPaymentHealthBenefitCard
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
 * CartPaymentHealthBenefitCard Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartPaymentHealthBenefitCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CartPaymentHealthBenefitCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'health_benefit_card_expiration_month' => 'int',
        'health_benefit_card_expiration_year' => 'int',
        'health_benefit_card_number' => 'string',
        'health_benefit_card_number_token' => 'string',
        'health_benefit_card_verification_number' => 'string',
        'health_benefit_card_verification_number_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'health_benefit_card_expiration_month' => 'int32',
        'health_benefit_card_expiration_year' => 'int32',
        'health_benefit_card_number' => null,
        'health_benefit_card_number_token' => null,
        'health_benefit_card_verification_number' => null,
        'health_benefit_card_verification_number_token' => null
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
        'health_benefit_card_expiration_month' => 'health_benefit_card_expiration_month',
        'health_benefit_card_expiration_year' => 'health_benefit_card_expiration_year',
        'health_benefit_card_number' => 'health_benefit_card_number',
        'health_benefit_card_number_token' => 'health_benefit_card_number_token',
        'health_benefit_card_verification_number' => 'health_benefit_card_verification_number',
        'health_benefit_card_verification_number_token' => 'health_benefit_card_verification_number_token'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'health_benefit_card_expiration_month' => 'setHealthBenefitCardExpirationMonth',
        'health_benefit_card_expiration_year' => 'setHealthBenefitCardExpirationYear',
        'health_benefit_card_number' => 'setHealthBenefitCardNumber',
        'health_benefit_card_number_token' => 'setHealthBenefitCardNumberToken',
        'health_benefit_card_verification_number' => 'setHealthBenefitCardVerificationNumber',
        'health_benefit_card_verification_number_token' => 'setHealthBenefitCardVerificationNumberToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'health_benefit_card_expiration_month' => 'getHealthBenefitCardExpirationMonth',
        'health_benefit_card_expiration_year' => 'getHealthBenefitCardExpirationYear',
        'health_benefit_card_number' => 'getHealthBenefitCardNumber',
        'health_benefit_card_number_token' => 'getHealthBenefitCardNumberToken',
        'health_benefit_card_verification_number' => 'getHealthBenefitCardVerificationNumber',
        'health_benefit_card_verification_number_token' => 'getHealthBenefitCardVerificationNumberToken'
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
        $this->container['health_benefit_card_expiration_month'] = $data['health_benefit_card_expiration_month'] ?? null;
        $this->container['health_benefit_card_expiration_year'] = $data['health_benefit_card_expiration_year'] ?? null;
        $this->container['health_benefit_card_number'] = $data['health_benefit_card_number'] ?? null;
        $this->container['health_benefit_card_number_token'] = $data['health_benefit_card_number_token'] ?? null;
        $this->container['health_benefit_card_verification_number'] = $data['health_benefit_card_verification_number'] ?? null;
        $this->container['health_benefit_card_verification_number_token'] = $data['health_benefit_card_verification_number_token'] ?? null;
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
     * Gets health_benefit_card_expiration_month
     *
     * @return int|null
     */
    public function getHealthBenefitCardExpirationMonth()
    {
        return $this->container['health_benefit_card_expiration_month'];
    }

    /**
     * Sets health_benefit_card_expiration_month
     *
     * @param int|null $health_benefit_card_expiration_month Health benefit expiration month (1-12)
     *
     * @return self
     */
    public function setHealthBenefitCardExpirationMonth($health_benefit_card_expiration_month)
    {
        $this->container['health_benefit_card_expiration_month'] = $health_benefit_card_expiration_month;

        return $this;
    }

    /**
     * Gets health_benefit_card_expiration_year
     *
     * @return int|null
     */
    public function getHealthBenefitCardExpirationYear()
    {
        return $this->container['health_benefit_card_expiration_year'];
    }

    /**
     * Sets health_benefit_card_expiration_year
     *
     * @param int|null $health_benefit_card_expiration_year Health benefit card expiration year (four digit year)
     *
     * @return self
     */
    public function setHealthBenefitCardExpirationYear($health_benefit_card_expiration_year)
    {
        $this->container['health_benefit_card_expiration_year'] = $health_benefit_card_expiration_year;

        return $this;
    }

    /**
     * Gets health_benefit_card_number
     *
     * @return string|null
     */
    public function getHealthBenefitCardNumber()
    {
        return $this->container['health_benefit_card_number'];
    }

    /**
     * Sets health_benefit_card_number
     *
     * @param string|null $health_benefit_card_number Health benefit card number (masked to the last 4)
     *
     * @return self
     */
    public function setHealthBenefitCardNumber($health_benefit_card_number)
    {
        $this->container['health_benefit_card_number'] = $health_benefit_card_number;

        return $this;
    }

    /**
     * Gets health_benefit_card_number_token
     *
     * @return string|null
     */
    public function getHealthBenefitCardNumberToken()
    {
        return $this->container['health_benefit_card_number_token'];
    }

    /**
     * Sets health_benefit_card_number_token
     *
     * @param string|null $health_benefit_card_number_token Hosted field token for the card number
     *
     * @return self
     */
    public function setHealthBenefitCardNumberToken($health_benefit_card_number_token)
    {
        $this->container['health_benefit_card_number_token'] = $health_benefit_card_number_token;

        return $this;
    }

    /**
     * Gets health_benefit_card_verification_number
     *
     * @return string|null
     */
    public function getHealthBenefitCardVerificationNumber()
    {
        return $this->container['health_benefit_card_verification_number'];
    }

    /**
     * Sets health_benefit_card_verification_number
     *
     * @param string|null $health_benefit_card_verification_number Health benefit card verification number (masked)
     *
     * @return self
     */
    public function setHealthBenefitCardVerificationNumber($health_benefit_card_verification_number)
    {
        $this->container['health_benefit_card_verification_number'] = $health_benefit_card_verification_number;

        return $this;
    }

    /**
     * Gets health_benefit_card_verification_number_token
     *
     * @return string|null
     */
    public function getHealthBenefitCardVerificationNumberToken()
    {
        return $this->container['health_benefit_card_verification_number_token'];
    }

    /**
     * Sets health_benefit_card_verification_number_token
     *
     * @param string|null $health_benefit_card_verification_number_token Hosted field token for the health benefit card verification number
     *
     * @return self
     */
    public function setHealthBenefitCardVerificationNumberToken($health_benefit_card_verification_number_token)
    {
        $this->container['health_benefit_card_verification_number_token'] = $health_benefit_card_verification_number_token;

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


