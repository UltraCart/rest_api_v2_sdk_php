<?php
/**
 * ItemShippingDestinationMarkup
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
 * ItemShippingDestinationMarkup Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemShippingDestinationMarkup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemShippingDestinationMarkup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adult_signature_required' => 'bool',
        'country_code' => 'string',
        'flat_fee' => 'float',
        'per_item' => 'float',
        'postal_code' => 'string',
        'shipping_method' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adult_signature_required' => null,
        'country_code' => null,
        'flat_fee' => null,
        'per_item' => null,
        'postal_code' => null,
        'shipping_method' => null,
        'state' => null
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
        'adult_signature_required' => 'adult_signature_required',
        'country_code' => 'country_code',
        'flat_fee' => 'flat_fee',
        'per_item' => 'per_item',
        'postal_code' => 'postal_code',
        'shipping_method' => 'shipping_method',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adult_signature_required' => 'setAdultSignatureRequired',
        'country_code' => 'setCountryCode',
        'flat_fee' => 'setFlatFee',
        'per_item' => 'setPerItem',
        'postal_code' => 'setPostalCode',
        'shipping_method' => 'setShippingMethod',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adult_signature_required' => 'getAdultSignatureRequired',
        'country_code' => 'getCountryCode',
        'flat_fee' => 'getFlatFee',
        'per_item' => 'getPerItem',
        'postal_code' => 'getPostalCode',
        'shipping_method' => 'getShippingMethod',
        'state' => 'getState'
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
        $this->container['adult_signature_required'] = $data['adult_signature_required'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['flat_fee'] = $data['flat_fee'] ?? null;
        $this->container['per_item'] = $data['per_item'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['shipping_method'] = $data['shipping_method'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 32)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 32.";
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
     * Gets adult_signature_required
     *
     * @return bool|null
     */
    public function getAdultSignatureRequired()
    {
        return $this->container['adult_signature_required'];
    }

    /**
     * Sets adult_signature_required
     *
     * @param bool|null $adult_signature_required Adult Signature Required (only updated if not-null value provided)
     *
     * @return self
     */
    public function setAdultSignatureRequired($adult_signature_required)
    {
        $this->container['adult_signature_required'] = $adult_signature_required;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Country code (ISO-3166 two letter)
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling ItemShippingDestinationMarkup., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets flat_fee
     *
     * @return float|null
     */
    public function getFlatFee()
    {
        return $this->container['flat_fee'];
    }

    /**
     * Sets flat_fee
     *
     * @param float|null $flat_fee Flat fee
     *
     * @return self
     */
    public function setFlatFee($flat_fee)
    {
        $this->container['flat_fee'] = $flat_fee;

        return $this;
    }

    /**
     * Gets per_item
     *
     * @return float|null
     */
    public function getPerItem()
    {
        return $this->container['per_item'];
    }

    /**
     * Sets per_item
     *
     * @param float|null $per_item Per item
     *
     * @return self
     */
    public function setPerItem($per_item)
    {
        $this->container['per_item'] = $per_item;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code Postal code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (mb_strlen($postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling ItemShippingDestinationMarkup., must be smaller than or equal to 20.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string|null $shipping_method Shipping method
     *
     * @return self
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State
     *
     * @return self
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 32)) {
            throw new \InvalidArgumentException('invalid length for $state when calling ItemShippingDestinationMarkup., must be smaller than or equal to 32.');
        }

        $this->container['state'] = $state;

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


