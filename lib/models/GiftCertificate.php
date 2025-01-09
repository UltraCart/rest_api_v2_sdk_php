<?php
/**
 * GiftCertificate
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
 * GiftCertificate Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GiftCertificate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GiftCertificate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activated' => 'bool',
        'code' => 'string',
        'customer_profile_oid' => 'int',
        'deleted' => 'bool',
        'email' => 'string',
        'expiration_dts' => 'string',
        'gift_certificate_oid' => 'int',
        'internal' => 'bool',
        'ledger_entries' => '\ultracart\v2\models\GiftCertificateLedgerEntry[]',
        'merchant_id' => 'string',
        'merchant_note' => 'string',
        'original_balance' => 'float',
        'reference_order_id' => 'string',
        'remaining_balance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activated' => null,
        'code' => null,
        'customer_profile_oid' => 'int32',
        'deleted' => null,
        'email' => null,
        'expiration_dts' => 'dateTime',
        'gift_certificate_oid' => 'int32',
        'internal' => null,
        'ledger_entries' => null,
        'merchant_id' => null,
        'merchant_note' => null,
        'original_balance' => null,
        'reference_order_id' => null,
        'remaining_balance' => null
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
        'activated' => 'activated',
        'code' => 'code',
        'customer_profile_oid' => 'customer_profile_oid',
        'deleted' => 'deleted',
        'email' => 'email',
        'expiration_dts' => 'expiration_dts',
        'gift_certificate_oid' => 'gift_certificate_oid',
        'internal' => 'internal',
        'ledger_entries' => 'ledger_entries',
        'merchant_id' => 'merchant_id',
        'merchant_note' => 'merchant_note',
        'original_balance' => 'original_balance',
        'reference_order_id' => 'reference_order_id',
        'remaining_balance' => 'remaining_balance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activated' => 'setActivated',
        'code' => 'setCode',
        'customer_profile_oid' => 'setCustomerProfileOid',
        'deleted' => 'setDeleted',
        'email' => 'setEmail',
        'expiration_dts' => 'setExpirationDts',
        'gift_certificate_oid' => 'setGiftCertificateOid',
        'internal' => 'setInternal',
        'ledger_entries' => 'setLedgerEntries',
        'merchant_id' => 'setMerchantId',
        'merchant_note' => 'setMerchantNote',
        'original_balance' => 'setOriginalBalance',
        'reference_order_id' => 'setReferenceOrderId',
        'remaining_balance' => 'setRemainingBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activated' => 'getActivated',
        'code' => 'getCode',
        'customer_profile_oid' => 'getCustomerProfileOid',
        'deleted' => 'getDeleted',
        'email' => 'getEmail',
        'expiration_dts' => 'getExpirationDts',
        'gift_certificate_oid' => 'getGiftCertificateOid',
        'internal' => 'getInternal',
        'ledger_entries' => 'getLedgerEntries',
        'merchant_id' => 'getMerchantId',
        'merchant_note' => 'getMerchantNote',
        'original_balance' => 'getOriginalBalance',
        'reference_order_id' => 'getReferenceOrderId',
        'remaining_balance' => 'getRemainingBalance'
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
        $this->container['activated'] = $data['activated'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['customer_profile_oid'] = $data['customer_profile_oid'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['expiration_dts'] = $data['expiration_dts'] ?? null;
        $this->container['gift_certificate_oid'] = $data['gift_certificate_oid'] ?? null;
        $this->container['internal'] = $data['internal'] ?? null;
        $this->container['ledger_entries'] = $data['ledger_entries'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['merchant_note'] = $data['merchant_note'] ?? null;
        $this->container['original_balance'] = $data['original_balance'] ?? null;
        $this->container['reference_order_id'] = $data['reference_order_id'] ?? null;
        $this->container['remaining_balance'] = $data['remaining_balance'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
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
     * Gets activated
     *
     * @return bool|null
     */
    public function getActivated()
    {
        return $this->container['activated'];
    }

    /**
     * Sets activated
     *
     * @param bool|null $activated True if this gift certificate is activated and ready to apply to purchases.
     *
     * @return self
     */
    public function setActivated($activated)
    {
        $this->container['activated'] = $activated;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code The code used by the customer to purchase against this gift certificate.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets customer_profile_oid
     *
     * @return int|null
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     *
     * @param int|null $customer_profile_oid This is the customer profile oid associated with this internally managed gift certificate.
     *
     * @return self
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted True if this gift certificate was deleted.
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

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
     * @param string|null $email Email of the customer associated with this gift certificate.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling GiftCertificate., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets expiration_dts
     *
     * @return string|null
     */
    public function getExpirationDts()
    {
        return $this->container['expiration_dts'];
    }

    /**
     * Sets expiration_dts
     *
     * @param string|null $expiration_dts Expiration date time.
     *
     * @return self
     */
    public function setExpirationDts($expiration_dts)
    {
        $this->container['expiration_dts'] = $expiration_dts;

        return $this;
    }

    /**
     * Gets gift_certificate_oid
     *
     * @return int|null
     */
    public function getGiftCertificateOid()
    {
        return $this->container['gift_certificate_oid'];
    }

    /**
     * Sets gift_certificate_oid
     *
     * @param int|null $gift_certificate_oid Gift certificate oid.
     *
     * @return self
     */
    public function setGiftCertificateOid($gift_certificate_oid)
    {
        $this->container['gift_certificate_oid'] = $gift_certificate_oid;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return bool|null
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param bool|null $internal This is an internally managed gift certificate associated with the loyalty cash rewards program.
     *
     * @return self
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets ledger_entries
     *
     * @return \ultracart\v2\models\GiftCertificateLedgerEntry[]|null
     */
    public function getLedgerEntries()
    {
        return $this->container['ledger_entries'];
    }

    /**
     * Sets ledger_entries
     *
     * @param \ultracart\v2\models\GiftCertificateLedgerEntry[]|null $ledger_entries A list of all ledger activity for this gift certificate.
     *
     * @return self
     */
    public function setLedgerEntries($ledger_entries)
    {
        $this->container['ledger_entries'] = $ledger_entries;

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
     * @param string|null $merchant_id Merchant Id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets merchant_note
     *
     * @return string|null
     */
    public function getMerchantNote()
    {
        return $this->container['merchant_note'];
    }

    /**
     * Sets merchant_note
     *
     * @param string|null $merchant_note A list of all ledger activity for this gift certificate.
     *
     * @return self
     */
    public function setMerchantNote($merchant_note)
    {
        $this->container['merchant_note'] = $merchant_note;

        return $this;
    }

    /**
     * Gets original_balance
     *
     * @return float|null
     */
    public function getOriginalBalance()
    {
        return $this->container['original_balance'];
    }

    /**
     * Sets original_balance
     *
     * @param float|null $original_balance Original balance of the gift certificate.
     *
     * @return self
     */
    public function setOriginalBalance($original_balance)
    {
        $this->container['original_balance'] = $original_balance;

        return $this;
    }

    /**
     * Gets reference_order_id
     *
     * @return string|null
     */
    public function getReferenceOrderId()
    {
        return $this->container['reference_order_id'];
    }

    /**
     * Sets reference_order_id
     *
     * @param string|null $reference_order_id The order used to purchase this gift certificate.  This value is ONLY set during checkout when a certificate is purchased, not when it is used.  Any usage is recorded in the ledger
     *
     * @return self
     */
    public function setReferenceOrderId($reference_order_id)
    {
        $this->container['reference_order_id'] = $reference_order_id;

        return $this;
    }

    /**
     * Gets remaining_balance
     *
     * @return float|null
     */
    public function getRemainingBalance()
    {
        return $this->container['remaining_balance'];
    }

    /**
     * Sets remaining_balance
     *
     * @param float|null $remaining_balance The remaining balance on the gift certificate.  This is never set directly, but calculated from the ledger.  To change the remaining balance, add a ledger entry.
     *
     * @return self
     */
    public function setRemainingBalance($remaining_balance)
    {
        $this->container['remaining_balance'] = $remaining_balance;

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


