<?php
/**
 * PointOfSaleReader
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
 * PointOfSaleReader Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PointOfSaleReader implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PointOfSaleReader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'device_type' => 'string',
        'label' => 'string',
        'merchant_id' => 'string',
        'payment_provider' => 'string',
        'pos_reader_id' => 'int',
        'pos_register_oid' => 'int',
        'serial_number' => 'string',
        'stripe_account_id' => 'string',
        'stripe_reader_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'device_type' => null,
        'label' => null,
        'merchant_id' => null,
        'payment_provider' => null,
        'pos_reader_id' => 'int32',
        'pos_register_oid' => 'int32',
        'serial_number' => null,
        'stripe_account_id' => null,
        'stripe_reader_id' => null
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
        'device_type' => 'device_type',
        'label' => 'label',
        'merchant_id' => 'merchant_id',
        'payment_provider' => 'payment_provider',
        'pos_reader_id' => 'pos_reader_id',
        'pos_register_oid' => 'pos_register_oid',
        'serial_number' => 'serial_number',
        'stripe_account_id' => 'stripe_account_id',
        'stripe_reader_id' => 'stripe_reader_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'device_type' => 'setDeviceType',
        'label' => 'setLabel',
        'merchant_id' => 'setMerchantId',
        'payment_provider' => 'setPaymentProvider',
        'pos_reader_id' => 'setPosReaderId',
        'pos_register_oid' => 'setPosRegisterOid',
        'serial_number' => 'setSerialNumber',
        'stripe_account_id' => 'setStripeAccountId',
        'stripe_reader_id' => 'setStripeReaderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'device_type' => 'getDeviceType',
        'label' => 'getLabel',
        'merchant_id' => 'getMerchantId',
        'payment_provider' => 'getPaymentProvider',
        'pos_reader_id' => 'getPosReaderId',
        'pos_register_oid' => 'getPosRegisterOid',
        'serial_number' => 'getSerialNumber',
        'stripe_account_id' => 'getStripeAccountId',
        'stripe_reader_id' => 'getStripeReaderId'
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

    public const PAYMENT_PROVIDER_STRIPE = 'stripe';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentProviderAllowableValues()
    {
        return [
            self::PAYMENT_PROVIDER_STRIPE,
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
        $this->container['device_type'] = $data['device_type'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['payment_provider'] = $data['payment_provider'] ?? null;
        $this->container['pos_reader_id'] = $data['pos_reader_id'] ?? null;
        $this->container['pos_register_oid'] = $data['pos_register_oid'] ?? null;
        $this->container['serial_number'] = $data['serial_number'] ?? null;
        $this->container['stripe_account_id'] = $data['stripe_account_id'] ?? null;
        $this->container['stripe_reader_id'] = $data['stripe_reader_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentProviderAllowableValues();
        if (!is_null($this->container['payment_provider']) && !in_array($this->container['payment_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_provider', must be one of '%s'",
                $this->container['payment_provider'],
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
     * Gets device_type
     *
     * @return string|null
     */
    public function getDeviceType()
    {
        return $this->container['device_type'];
    }

    /**
     * Sets device_type
     *
     * @param string|null $device_type The device type of the reader.
     *
     * @return self
     */
    public function setDeviceType($device_type)
    {
        $this->container['device_type'] = $device_type;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The label of the reader.
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id The merchant id that owns this point of sale reader.
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets payment_provider
     *
     * @return string|null
     */
    public function getPaymentProvider()
    {
        return $this->container['payment_provider'];
    }

    /**
     * Sets payment_provider
     *
     * @param string|null $payment_provider The payment provider for the card reader.
     *
     * @return self
     */
    public function setPaymentProvider($payment_provider)
    {
        $allowedValues = $this->getPaymentProviderAllowableValues();
        if (!is_null($payment_provider) && !in_array($payment_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_provider', must be one of '%s'",
                    $payment_provider,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_provider'] = $payment_provider;

        return $this;
    }

    /**
     * Gets pos_reader_id
     *
     * @return int|null
     */
    public function getPosReaderId()
    {
        return $this->container['pos_reader_id'];
    }

    /**
     * Sets pos_reader_id
     *
     * @param int|null $pos_reader_id Object identifier of the point of sale reader.
     *
     * @return self
     */
    public function setPosReaderId($pos_reader_id)
    {
        $this->container['pos_reader_id'] = $pos_reader_id;

        return $this;
    }

    /**
     * Gets pos_register_oid
     *
     * @return int|null
     */
    public function getPosRegisterOid()
    {
        return $this->container['pos_register_oid'];
    }

    /**
     * Sets pos_register_oid
     *
     * @param int|null $pos_register_oid Object identifier of the point of sale register this reader is assigned to.
     *
     * @return self
     */
    public function setPosRegisterOid($pos_register_oid)
    {
        $this->container['pos_register_oid'] = $pos_register_oid;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string|null
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string|null $serial_number The serial number of the reader.
     *
     * @return self
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets stripe_account_id
     *
     * @return string|null
     */
    public function getStripeAccountId()
    {
        return $this->container['stripe_account_id'];
    }

    /**
     * Sets stripe_account_id
     *
     * @param string|null $stripe_account_id If the payment provider is Stripe, this is the Stripe account id
     *
     * @return self
     */
    public function setStripeAccountId($stripe_account_id)
    {
        $this->container['stripe_account_id'] = $stripe_account_id;

        return $this;
    }

    /**
     * Gets stripe_reader_id
     *
     * @return string|null
     */
    public function getStripeReaderId()
    {
        return $this->container['stripe_reader_id'];
    }

    /**
     * Sets stripe_reader_id
     *
     * @param string|null $stripe_reader_id If the payment provide is Stripe, this is the Stripe terminal reader id
     *
     * @return self
     */
    public function setStripeReaderId($stripe_reader_id)
    {
        $this->container['stripe_reader_id'] = $stripe_reader_id;

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


