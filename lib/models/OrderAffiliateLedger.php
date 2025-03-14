<?php
/**
 * OrderAffiliateLedger
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
 * OrderAffiliateLedger Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderAffiliateLedger implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderAffiliateLedger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assigned_by_user' => 'string',
        'item_id' => 'string',
        'tier_number' => 'int',
        'transaction_amount' => 'float',
        'transaction_amount_paid' => 'float',
        'transaction_dts' => 'string',
        'transaction_memo' => 'string',
        'transaction_percentage' => 'float',
        'transaction_state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assigned_by_user' => null,
        'item_id' => null,
        'tier_number' => 'int32',
        'transaction_amount' => null,
        'transaction_amount_paid' => null,
        'transaction_dts' => 'dateTime',
        'transaction_memo' => null,
        'transaction_percentage' => null,
        'transaction_state' => null
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
        'assigned_by_user' => 'assigned_by_user',
        'item_id' => 'item_id',
        'tier_number' => 'tier_number',
        'transaction_amount' => 'transaction_amount',
        'transaction_amount_paid' => 'transaction_amount_paid',
        'transaction_dts' => 'transaction_dts',
        'transaction_memo' => 'transaction_memo',
        'transaction_percentage' => 'transaction_percentage',
        'transaction_state' => 'transaction_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assigned_by_user' => 'setAssignedByUser',
        'item_id' => 'setItemId',
        'tier_number' => 'setTierNumber',
        'transaction_amount' => 'setTransactionAmount',
        'transaction_amount_paid' => 'setTransactionAmountPaid',
        'transaction_dts' => 'setTransactionDts',
        'transaction_memo' => 'setTransactionMemo',
        'transaction_percentage' => 'setTransactionPercentage',
        'transaction_state' => 'setTransactionState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assigned_by_user' => 'getAssignedByUser',
        'item_id' => 'getItemId',
        'tier_number' => 'getTierNumber',
        'transaction_amount' => 'getTransactionAmount',
        'transaction_amount_paid' => 'getTransactionAmountPaid',
        'transaction_dts' => 'getTransactionDts',
        'transaction_memo' => 'getTransactionMemo',
        'transaction_percentage' => 'getTransactionPercentage',
        'transaction_state' => 'getTransactionState'
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

    public const TRANSACTION_STATE_PENDING = 'Pending';
    public const TRANSACTION_STATE_POSTED = 'Posted';
    public const TRANSACTION_STATE_APPROVED = 'Approved';
    public const TRANSACTION_STATE_PAID = 'Paid';
    public const TRANSACTION_STATE_REJECTED = 'Rejected';
    public const TRANSACTION_STATE_PARTIALLY_PAID = 'Partially Paid';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTransactionStateAllowableValues()
    {
        return [
            self::TRANSACTION_STATE_PENDING,
            self::TRANSACTION_STATE_POSTED,
            self::TRANSACTION_STATE_APPROVED,
            self::TRANSACTION_STATE_PAID,
            self::TRANSACTION_STATE_REJECTED,
            self::TRANSACTION_STATE_PARTIALLY_PAID,
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
        $this->container['assigned_by_user'] = $data['assigned_by_user'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['tier_number'] = $data['tier_number'] ?? null;
        $this->container['transaction_amount'] = $data['transaction_amount'] ?? null;
        $this->container['transaction_amount_paid'] = $data['transaction_amount_paid'] ?? null;
        $this->container['transaction_dts'] = $data['transaction_dts'] ?? null;
        $this->container['transaction_memo'] = $data['transaction_memo'] ?? null;
        $this->container['transaction_percentage'] = $data['transaction_percentage'] ?? null;
        $this->container['transaction_state'] = $data['transaction_state'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($this->container['transaction_state']) && !in_array($this->container['transaction_state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'transaction_state', must be one of '%s'",
                $this->container['transaction_state'],
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
     * Gets assigned_by_user
     *
     * @return string|null
     */
    public function getAssignedByUser()
    {
        return $this->container['assigned_by_user'];
    }

    /**
     * Sets assigned_by_user
     *
     * @param string|null $assigned_by_user UltraCart user name that assigned this commission if manually assigned
     *
     * @return self
     */
    public function setAssignedByUser($assigned_by_user)
    {
        $this->container['assigned_by_user'] = $assigned_by_user;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id Item ID that this ledger record is associated with
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets tier_number
     *
     * @return int|null
     */
    public function getTierNumber()
    {
        return $this->container['tier_number'];
    }

    /**
     * Sets tier_number
     *
     * @param int|null $tier_number Tier number of this affiliate in the commission calculation
     *
     * @return self
     */
    public function setTierNumber($tier_number)
    {
        $this->container['tier_number'] = $tier_number;

        return $this;
    }

    /**
     * Gets transaction_amount
     *
     * @return float|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param float|null $transaction_amount Amount of the transaction
     *
     * @return self
     */
    public function setTransactionAmount($transaction_amount)
    {
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets transaction_amount_paid
     *
     * @return float|null
     */
    public function getTransactionAmountPaid()
    {
        return $this->container['transaction_amount_paid'];
    }

    /**
     * Sets transaction_amount_paid
     *
     * @param float|null $transaction_amount_paid The amount that has been paid so far on the transaction
     *
     * @return self
     */
    public function setTransactionAmountPaid($transaction_amount_paid)
    {
        $this->container['transaction_amount_paid'] = $transaction_amount_paid;

        return $this;
    }

    /**
     * Gets transaction_dts
     *
     * @return string|null
     */
    public function getTransactionDts()
    {
        return $this->container['transaction_dts'];
    }

    /**
     * Sets transaction_dts
     *
     * @param string|null $transaction_dts The date/time that the affiliate ledger was generated for the transaction
     *
     * @return self
     */
    public function setTransactionDts($transaction_dts)
    {
        $this->container['transaction_dts'] = $transaction_dts;

        return $this;
    }

    /**
     * Gets transaction_memo
     *
     * @return string|null
     */
    public function getTransactionMemo()
    {
        return $this->container['transaction_memo'];
    }

    /**
     * Sets transaction_memo
     *
     * @param string|null $transaction_memo Details of the transaction suitable for display to the affiliate
     *
     * @return self
     */
    public function setTransactionMemo($transaction_memo)
    {
        $this->container['transaction_memo'] = $transaction_memo;

        return $this;
    }

    /**
     * Gets transaction_percentage
     *
     * @return float|null
     */
    public function getTransactionPercentage()
    {
        return $this->container['transaction_percentage'];
    }

    /**
     * Sets transaction_percentage
     *
     * @param float|null $transaction_percentage The percentage earned on the transaction
     *
     * @return self
     */
    public function setTransactionPercentage($transaction_percentage)
    {
        $this->container['transaction_percentage'] = $transaction_percentage;

        return $this;
    }

    /**
     * Gets transaction_state
     *
     * @return string|null
     */
    public function getTransactionState()
    {
        return $this->container['transaction_state'];
    }

    /**
     * Sets transaction_state
     *
     * @param string|null $transaction_state The state of the transaction
     *
     * @return self
     */
    public function setTransactionState($transaction_state)
    {
        $allowedValues = $this->getTransactionStateAllowableValues();
        if (!is_null($transaction_state) && !in_array($transaction_state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'transaction_state', must be one of '%s'",
                    $transaction_state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['transaction_state'] = $transaction_state;

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


