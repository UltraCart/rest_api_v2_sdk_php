<?php
/**
 * CustomerLoyaltyLedger
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
 * CustomerLoyaltyLedger Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerLoyaltyLedger implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerLoyaltyLedger';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_by' => 'string',
        'created_dts' => 'string',
        'description' => 'string',
        'email' => 'string',
        'item_id' => 'string',
        'item_index' => 'int',
        'ledger_dts' => 'string',
        'loyalty_campaign_oid' => 'int',
        'loyalty_ledger_oid' => 'int',
        'loyalty_points' => 'int',
        'modified_by' => 'string',
        'modified_dts' => 'string',
        'order_id' => 'string',
        'quantity' => 'int',
        'vesting_dts' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_by' => null,
        'created_dts' => 'dateTime',
        'description' => null,
        'email' => null,
        'item_id' => null,
        'item_index' => 'int32',
        'ledger_dts' => 'dateTime',
        'loyalty_campaign_oid' => 'int32',
        'loyalty_ledger_oid' => 'int32',
        'loyalty_points' => 'int32',
        'modified_by' => null,
        'modified_dts' => 'dateTime',
        'order_id' => null,
        'quantity' => 'int32',
        'vesting_dts' => 'dateTime'
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
        'created_by' => 'created_by',
        'created_dts' => 'created_dts',
        'description' => 'description',
        'email' => 'email',
        'item_id' => 'item_id',
        'item_index' => 'item_index',
        'ledger_dts' => 'ledger_dts',
        'loyalty_campaign_oid' => 'loyalty_campaign_oid',
        'loyalty_ledger_oid' => 'loyalty_ledger_oid',
        'loyalty_points' => 'loyalty_points',
        'modified_by' => 'modified_by',
        'modified_dts' => 'modified_dts',
        'order_id' => 'order_id',
        'quantity' => 'quantity',
        'vesting_dts' => 'vesting_dts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_by' => 'setCreatedBy',
        'created_dts' => 'setCreatedDts',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'item_id' => 'setItemId',
        'item_index' => 'setItemIndex',
        'ledger_dts' => 'setLedgerDts',
        'loyalty_campaign_oid' => 'setLoyaltyCampaignOid',
        'loyalty_ledger_oid' => 'setLoyaltyLedgerOid',
        'loyalty_points' => 'setLoyaltyPoints',
        'modified_by' => 'setModifiedBy',
        'modified_dts' => 'setModifiedDts',
        'order_id' => 'setOrderId',
        'quantity' => 'setQuantity',
        'vesting_dts' => 'setVestingDts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_by' => 'getCreatedBy',
        'created_dts' => 'getCreatedDts',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'item_id' => 'getItemId',
        'item_index' => 'getItemIndex',
        'ledger_dts' => 'getLedgerDts',
        'loyalty_campaign_oid' => 'getLoyaltyCampaignOid',
        'loyalty_ledger_oid' => 'getLoyaltyLedgerOid',
        'loyalty_points' => 'getLoyaltyPoints',
        'modified_by' => 'getModifiedBy',
        'modified_dts' => 'getModifiedDts',
        'order_id' => 'getOrderId',
        'quantity' => 'getQuantity',
        'vesting_dts' => 'getVestingDts'
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
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_dts'] = $data['created_dts'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['item_index'] = $data['item_index'] ?? null;
        $this->container['ledger_dts'] = $data['ledger_dts'] ?? null;
        $this->container['loyalty_campaign_oid'] = $data['loyalty_campaign_oid'] ?? null;
        $this->container['loyalty_ledger_oid'] = $data['loyalty_ledger_oid'] ?? null;
        $this->container['loyalty_points'] = $data['loyalty_points'] ?? null;
        $this->container['modified_by'] = $data['modified_by'] ?? null;
        $this->container['modified_dts'] = $data['modified_dts'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['vesting_dts'] = $data['vesting_dts'] ?? null;
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
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by Created By
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_dts
     *
     * @return string|null
     */
    public function getCreatedDts()
    {
        return $this->container['created_dts'];
    }

    /**
     * Sets created_dts
     *
     * @param string|null $created_dts Created date
     *
     * @return self
     */
    public function setCreatedDts($created_dts)
    {
        $this->container['created_dts'] = $created_dts;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

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
     * @param string|null $item_id Item Id
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_index
     *
     * @return int|null
     */
    public function getItemIndex()
    {
        return $this->container['item_index'];
    }

    /**
     * Sets item_index
     *
     * @param int|null $item_index Item Index
     *
     * @return self
     */
    public function setItemIndex($item_index)
    {
        $this->container['item_index'] = $item_index;

        return $this;
    }

    /**
     * Gets ledger_dts
     *
     * @return string|null
     */
    public function getLedgerDts()
    {
        return $this->container['ledger_dts'];
    }

    /**
     * Sets ledger_dts
     *
     * @param string|null $ledger_dts Ledger date
     *
     * @return self
     */
    public function setLedgerDts($ledger_dts)
    {
        $this->container['ledger_dts'] = $ledger_dts;

        return $this;
    }

    /**
     * Gets loyalty_campaign_oid
     *
     * @return int|null
     */
    public function getLoyaltyCampaignOid()
    {
        return $this->container['loyalty_campaign_oid'];
    }

    /**
     * Sets loyalty_campaign_oid
     *
     * @param int|null $loyalty_campaign_oid Loyalty campaign oid
     *
     * @return self
     */
    public function setLoyaltyCampaignOid($loyalty_campaign_oid)
    {
        $this->container['loyalty_campaign_oid'] = $loyalty_campaign_oid;

        return $this;
    }

    /**
     * Gets loyalty_ledger_oid
     *
     * @return int|null
     */
    public function getLoyaltyLedgerOid()
    {
        return $this->container['loyalty_ledger_oid'];
    }

    /**
     * Sets loyalty_ledger_oid
     *
     * @param int|null $loyalty_ledger_oid Loyalty ledger oid
     *
     * @return self
     */
    public function setLoyaltyLedgerOid($loyalty_ledger_oid)
    {
        $this->container['loyalty_ledger_oid'] = $loyalty_ledger_oid;

        return $this;
    }

    /**
     * Gets loyalty_points
     *
     * @return int|null
     */
    public function getLoyaltyPoints()
    {
        return $this->container['loyalty_points'];
    }

    /**
     * Sets loyalty_points
     *
     * @param int|null $loyalty_points Loyalty points
     *
     * @return self
     */
    public function setLoyaltyPoints($loyalty_points)
    {
        $this->container['loyalty_points'] = $loyalty_points;

        return $this;
    }

    /**
     * Gets modified_by
     *
     * @return string|null
     */
    public function getModifiedBy()
    {
        return $this->container['modified_by'];
    }

    /**
     * Sets modified_by
     *
     * @param string|null $modified_by Modified By
     *
     * @return self
     */
    public function setModifiedBy($modified_by)
    {
        $this->container['modified_by'] = $modified_by;

        return $this;
    }

    /**
     * Gets modified_dts
     *
     * @return string|null
     */
    public function getModifiedDts()
    {
        return $this->container['modified_dts'];
    }

    /**
     * Sets modified_dts
     *
     * @param string|null $modified_dts Modified date
     *
     * @return self
     */
    public function setModifiedDts($modified_dts)
    {
        $this->container['modified_dts'] = $modified_dts;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id Order Id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets vesting_dts
     *
     * @return string|null
     */
    public function getVestingDts()
    {
        return $this->container['vesting_dts'];
    }

    /**
     * Sets vesting_dts
     *
     * @param string|null $vesting_dts Vesting date
     *
     * @return self
     */
    public function setVestingDts($vesting_dts)
    {
        $this->container['vesting_dts'] = $vesting_dts;

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


