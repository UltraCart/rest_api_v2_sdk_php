<?php
/**
 * ChannelPartner
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
 * ChannelPartner Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChannelPartner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelPartner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channel_partner_oid' => 'int',
        'code' => 'string',
        'communication_method' => 'string',
        'dont_hold_shipment' => 'bool',
        'inactive' => 'bool',
        'merchant_id' => 'string',
        'name' => 'string',
        'skip_customer_emails' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channel_partner_oid' => 'int32',
        'code' => null,
        'communication_method' => null,
        'dont_hold_shipment' => null,
        'inactive' => null,
        'merchant_id' => null,
        'name' => null,
        'skip_customer_emails' => null
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
        'channel_partner_oid' => 'channel_partner_oid',
        'code' => 'code',
        'communication_method' => 'communication_method',
        'dont_hold_shipment' => 'dont_hold_shipment',
        'inactive' => 'inactive',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'skip_customer_emails' => 'skip_customer_emails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel_partner_oid' => 'setChannelPartnerOid',
        'code' => 'setCode',
        'communication_method' => 'setCommunicationMethod',
        'dont_hold_shipment' => 'setDontHoldShipment',
        'inactive' => 'setInactive',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'skip_customer_emails' => 'setSkipCustomerEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel_partner_oid' => 'getChannelPartnerOid',
        'code' => 'getCode',
        'communication_method' => 'getCommunicationMethod',
        'dont_hold_shipment' => 'getDontHoldShipment',
        'inactive' => 'getInactive',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'skip_customer_emails' => 'getSkipCustomerEmails'
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
        $this->container['channel_partner_oid'] = $data['channel_partner_oid'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['communication_method'] = $data['communication_method'] ?? null;
        $this->container['dont_hold_shipment'] = $data['dont_hold_shipment'] ?? null;
        $this->container['inactive'] = $data['inactive'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['skip_customer_emails'] = $data['skip_customer_emails'] ?? null;
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
     * Gets channel_partner_oid
     *
     * @return int|null
     */
    public function getChannelPartnerOid()
    {
        return $this->container['channel_partner_oid'];
    }

    /**
     * Sets channel_partner_oid
     *
     * @param int|null $channel_partner_oid Channel partner object id
     *
     * @return self
     */
    public function setChannelPartnerOid($channel_partner_oid)
    {
        $this->container['channel_partner_oid'] = $channel_partner_oid;

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
     * @param string|null $code Code associated with the channel partner
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets communication_method
     *
     * @return string|null
     */
    public function getCommunicationMethod()
    {
        return $this->container['communication_method'];
    }

    /**
     * Sets communication_method
     *
     * @param string|null $communication_method Communication method of the channel partner
     *
     * @return self
     */
    public function setCommunicationMethod($communication_method)
    {
        $this->container['communication_method'] = $communication_method;

        return $this;
    }

    /**
     * Gets dont_hold_shipment
     *
     * @return bool|null
     */
    public function getDontHoldShipment()
    {
        return $this->container['dont_hold_shipment'];
    }

    /**
     * Sets dont_hold_shipment
     *
     * @param bool|null $dont_hold_shipment True if shipments should immediately process for this channel partner.
     *
     * @return self
     */
    public function setDontHoldShipment($dont_hold_shipment)
    {
        $this->container['dont_hold_shipment'] = $dont_hold_shipment;

        return $this;
    }

    /**
     * Gets inactive
     *
     * @return bool|null
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     *
     * @param bool|null $inactive True if the channel partner is inactive
     *
     * @return self
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

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
     * @param string|null $merchant_id Merchant ID of the channel partner
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the channel partner
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets skip_customer_emails
     *
     * @return bool|null
     */
    public function getSkipCustomerEmails()
    {
        return $this->container['skip_customer_emails'];
    }

    /**
     * Sets skip_customer_emails
     *
     * @param bool|null $skip_customer_emails True if emails to the customer are skipped for this channel partner.
     *
     * @return self
     */
    public function setSkipCustomerEmails($skip_customer_emails)
    {
        $this->container['skip_customer_emails'] = $skip_customer_emails;

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


