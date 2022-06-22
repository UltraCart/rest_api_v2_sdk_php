<?php
/**
 * CustomerStoreCredit
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
 * CustomerStoreCredit Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerStoreCredit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerStoreCredit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available' => 'float',
        'expiring' => 'float',
        'future_ledgers' => '\ultracart\v2\models\CustomerStoreCreditLedgerEntry[]',
        'past_ledgers' => '\ultracart\v2\models\CustomerStoreCreditLedgerEntry[]',
        'total' => 'float',
        'vesting' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available' => null,
        'expiring' => null,
        'future_ledgers' => null,
        'past_ledgers' => null,
        'total' => null,
        'vesting' => null
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
        'available' => 'available',
        'expiring' => 'expiring',
        'future_ledgers' => 'future_ledgers',
        'past_ledgers' => 'past_ledgers',
        'total' => 'total',
        'vesting' => 'vesting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable',
        'expiring' => 'setExpiring',
        'future_ledgers' => 'setFutureLedgers',
        'past_ledgers' => 'setPastLedgers',
        'total' => 'setTotal',
        'vesting' => 'setVesting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable',
        'expiring' => 'getExpiring',
        'future_ledgers' => 'getFutureLedgers',
        'past_ledgers' => 'getPastLedgers',
        'total' => 'getTotal',
        'vesting' => 'getVesting'
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
        $this->container['available'] = $data['available'] ?? null;
        $this->container['expiring'] = $data['expiring'] ?? null;
        $this->container['future_ledgers'] = $data['future_ledgers'] ?? null;
        $this->container['past_ledgers'] = $data['past_ledgers'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['vesting'] = $data['vesting'] ?? null;
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
     * Gets available
     *
     * @return float|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param float|null $available Available store credit which is defined as unused and vested
     *
     * @return self
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets expiring
     *
     * @return float|null
     */
    public function getExpiring()
    {
        return $this->container['expiring'];
    }

    /**
     * Sets expiring
     *
     * @param float|null $expiring Amount of store credit expiring within 30 days
     *
     * @return self
     */
    public function setExpiring($expiring)
    {
        $this->container['expiring'] = $expiring;

        return $this;
    }

    /**
     * Gets future_ledgers
     *
     * @return \ultracart\v2\models\CustomerStoreCreditLedgerEntry[]|null
     */
    public function getFutureLedgers()
    {
        return $this->container['future_ledgers'];
    }

    /**
     * Sets future_ledgers
     *
     * @param \ultracart\v2\models\CustomerStoreCreditLedgerEntry[]|null $future_ledgers Array of future ledger entries including expiring entries
     *
     * @return self
     */
    public function setFutureLedgers($future_ledgers)
    {
        $this->container['future_ledgers'] = $future_ledgers;

        return $this;
    }

    /**
     * Gets past_ledgers
     *
     * @return \ultracart\v2\models\CustomerStoreCreditLedgerEntry[]|null
     */
    public function getPastLedgers()
    {
        return $this->container['past_ledgers'];
    }

    /**
     * Sets past_ledgers
     *
     * @param \ultracart\v2\models\CustomerStoreCreditLedgerEntry[]|null $past_ledgers Array of past ledger entries including accrual, usage, and expiring entries
     *
     * @return self
     */
    public function setPastLedgers($past_ledgers)
    {
        $this->container['past_ledgers'] = $past_ledgers;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total Total lifetime store credit for this customer.
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets vesting
     *
     * @return float|null
     */
    public function getVesting()
    {
        return $this->container['vesting'];
    }

    /**
     * Sets vesting
     *
     * @param float|null $vesting Amount of store credit vesting
     *
     * @return self
     */
    public function setVesting($vesting)
    {
        $this->container['vesting'] = $vesting;

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


