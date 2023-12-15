<?php
/**
 * CartCustomerProfile
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
 * CartCustomerProfile Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartCustomerProfile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CartCustomerProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_3rd_party_billing' => 'bool',
        'allow_cod' => 'bool',
        'allow_purchase_order' => 'bool',
        'billing_addresses' => '\ultracart\v2\models\CartCustomerProfileAddress[]',
        'credit_cards' => '\ultracart\v2\models\CartCustomerProfileCreditCard[]',
        'customer_profile_oid' => 'int',
        'dhl_account_number' => 'string',
        'dhl_duty_account_number' => 'string',
        'email' => 'string',
        'fedex_account_number' => 'string',
        'free_shipping' => 'bool',
        'free_shipping_minimum' => 'float',
        'maximum_item_count' => 'int',
        'minimum_item_count' => 'int',
        'minimum_subtotal' => 'float',
        'no_coupons' => 'bool',
        'no_free_shipping' => 'bool',
        'no_realtime_charge' => 'bool',
        'pricing_tiers' => 'string[]',
        'shipping_addresses' => '\ultracart\v2\models\CartCustomerProfileAddress[]',
        'signup_dts' => 'string',
        'tax_exempt' => 'bool',
        'ups_account_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_3rd_party_billing' => null,
        'allow_cod' => null,
        'allow_purchase_order' => null,
        'billing_addresses' => null,
        'credit_cards' => null,
        'customer_profile_oid' => 'int32',
        'dhl_account_number' => null,
        'dhl_duty_account_number' => null,
        'email' => null,
        'fedex_account_number' => null,
        'free_shipping' => null,
        'free_shipping_minimum' => null,
        'maximum_item_count' => 'int32',
        'minimum_item_count' => 'int32',
        'minimum_subtotal' => null,
        'no_coupons' => null,
        'no_free_shipping' => null,
        'no_realtime_charge' => null,
        'pricing_tiers' => null,
        'shipping_addresses' => null,
        'signup_dts' => null,
        'tax_exempt' => null,
        'ups_account_number' => null
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
        'allow_3rd_party_billing' => 'allow_3rd_party_billing',
        'allow_cod' => 'allow_cod',
        'allow_purchase_order' => 'allow_purchase_order',
        'billing_addresses' => 'billing_addresses',
        'credit_cards' => 'credit_cards',
        'customer_profile_oid' => 'customer_profile_oid',
        'dhl_account_number' => 'dhl_account_number',
        'dhl_duty_account_number' => 'dhl_duty_account_number',
        'email' => 'email',
        'fedex_account_number' => 'fedex_account_number',
        'free_shipping' => 'free_shipping',
        'free_shipping_minimum' => 'free_shipping_minimum',
        'maximum_item_count' => 'maximum_item_count',
        'minimum_item_count' => 'minimum_item_count',
        'minimum_subtotal' => 'minimum_subtotal',
        'no_coupons' => 'no_coupons',
        'no_free_shipping' => 'no_free_shipping',
        'no_realtime_charge' => 'no_realtime_charge',
        'pricing_tiers' => 'pricing_tiers',
        'shipping_addresses' => 'shipping_addresses',
        'signup_dts' => 'signup_dts',
        'tax_exempt' => 'tax_exempt',
        'ups_account_number' => 'ups_account_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_3rd_party_billing' => 'setAllow3rdPartyBilling',
        'allow_cod' => 'setAllowCod',
        'allow_purchase_order' => 'setAllowPurchaseOrder',
        'billing_addresses' => 'setBillingAddresses',
        'credit_cards' => 'setCreditCards',
        'customer_profile_oid' => 'setCustomerProfileOid',
        'dhl_account_number' => 'setDhlAccountNumber',
        'dhl_duty_account_number' => 'setDhlDutyAccountNumber',
        'email' => 'setEmail',
        'fedex_account_number' => 'setFedexAccountNumber',
        'free_shipping' => 'setFreeShipping',
        'free_shipping_minimum' => 'setFreeShippingMinimum',
        'maximum_item_count' => 'setMaximumItemCount',
        'minimum_item_count' => 'setMinimumItemCount',
        'minimum_subtotal' => 'setMinimumSubtotal',
        'no_coupons' => 'setNoCoupons',
        'no_free_shipping' => 'setNoFreeShipping',
        'no_realtime_charge' => 'setNoRealtimeCharge',
        'pricing_tiers' => 'setPricingTiers',
        'shipping_addresses' => 'setShippingAddresses',
        'signup_dts' => 'setSignupDts',
        'tax_exempt' => 'setTaxExempt',
        'ups_account_number' => 'setUpsAccountNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_3rd_party_billing' => 'getAllow3rdPartyBilling',
        'allow_cod' => 'getAllowCod',
        'allow_purchase_order' => 'getAllowPurchaseOrder',
        'billing_addresses' => 'getBillingAddresses',
        'credit_cards' => 'getCreditCards',
        'customer_profile_oid' => 'getCustomerProfileOid',
        'dhl_account_number' => 'getDhlAccountNumber',
        'dhl_duty_account_number' => 'getDhlDutyAccountNumber',
        'email' => 'getEmail',
        'fedex_account_number' => 'getFedexAccountNumber',
        'free_shipping' => 'getFreeShipping',
        'free_shipping_minimum' => 'getFreeShippingMinimum',
        'maximum_item_count' => 'getMaximumItemCount',
        'minimum_item_count' => 'getMinimumItemCount',
        'minimum_subtotal' => 'getMinimumSubtotal',
        'no_coupons' => 'getNoCoupons',
        'no_free_shipping' => 'getNoFreeShipping',
        'no_realtime_charge' => 'getNoRealtimeCharge',
        'pricing_tiers' => 'getPricingTiers',
        'shipping_addresses' => 'getShippingAddresses',
        'signup_dts' => 'getSignupDts',
        'tax_exempt' => 'getTaxExempt',
        'ups_account_number' => 'getUpsAccountNumber'
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
        $this->container['allow_3rd_party_billing'] = $data['allow_3rd_party_billing'] ?? null;
        $this->container['allow_cod'] = $data['allow_cod'] ?? null;
        $this->container['allow_purchase_order'] = $data['allow_purchase_order'] ?? null;
        $this->container['billing_addresses'] = $data['billing_addresses'] ?? null;
        $this->container['credit_cards'] = $data['credit_cards'] ?? null;
        $this->container['customer_profile_oid'] = $data['customer_profile_oid'] ?? null;
        $this->container['dhl_account_number'] = $data['dhl_account_number'] ?? null;
        $this->container['dhl_duty_account_number'] = $data['dhl_duty_account_number'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['fedex_account_number'] = $data['fedex_account_number'] ?? null;
        $this->container['free_shipping'] = $data['free_shipping'] ?? null;
        $this->container['free_shipping_minimum'] = $data['free_shipping_minimum'] ?? null;
        $this->container['maximum_item_count'] = $data['maximum_item_count'] ?? null;
        $this->container['minimum_item_count'] = $data['minimum_item_count'] ?? null;
        $this->container['minimum_subtotal'] = $data['minimum_subtotal'] ?? null;
        $this->container['no_coupons'] = $data['no_coupons'] ?? null;
        $this->container['no_free_shipping'] = $data['no_free_shipping'] ?? null;
        $this->container['no_realtime_charge'] = $data['no_realtime_charge'] ?? null;
        $this->container['pricing_tiers'] = $data['pricing_tiers'] ?? null;
        $this->container['shipping_addresses'] = $data['shipping_addresses'] ?? null;
        $this->container['signup_dts'] = $data['signup_dts'] ?? null;
        $this->container['tax_exempt'] = $data['tax_exempt'] ?? null;
        $this->container['ups_account_number'] = $data['ups_account_number'] ?? null;
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
     * Gets allow_3rd_party_billing
     *
     * @return bool|null
     */
    public function getAllow3rdPartyBilling()
    {
        return $this->container['allow_3rd_party_billing'];
    }

    /**
     * Sets allow_3rd_party_billing
     *
     * @param bool|null $allow_3rd_party_billing True if profile is allowed to bill to their 3rd party shipping account
     *
     * @return self
     */
    public function setAllow3rdPartyBilling($allow_3rd_party_billing)
    {
        $this->container['allow_3rd_party_billing'] = $allow_3rd_party_billing;

        return $this;
    }

    /**
     * Gets allow_cod
     *
     * @return bool|null
     */
    public function getAllowCod()
    {
        return $this->container['allow_cod'];
    }

    /**
     * Sets allow_cod
     *
     * @param bool|null $allow_cod True if this profile is allowed to use a COD
     *
     * @return self
     */
    public function setAllowCod($allow_cod)
    {
        $this->container['allow_cod'] = $allow_cod;

        return $this;
    }

    /**
     * Gets allow_purchase_order
     *
     * @return bool|null
     */
    public function getAllowPurchaseOrder()
    {
        return $this->container['allow_purchase_order'];
    }

    /**
     * Sets allow_purchase_order
     *
     * @param bool|null $allow_purchase_order True if this profile is allowed to use a purchase order
     *
     * @return self
     */
    public function setAllowPurchaseOrder($allow_purchase_order)
    {
        $this->container['allow_purchase_order'] = $allow_purchase_order;

        return $this;
    }

    /**
     * Gets billing_addresses
     *
     * @return \ultracart\v2\models\CartCustomerProfileAddress[]|null
     */
    public function getBillingAddresses()
    {
        return $this->container['billing_addresses'];
    }

    /**
     * Sets billing_addresses
     *
     * @param \ultracart\v2\models\CartCustomerProfileAddress[]|null $billing_addresses Billing addresses on file for this profile
     *
     * @return self
     */
    public function setBillingAddresses($billing_addresses)
    {
        $this->container['billing_addresses'] = $billing_addresses;

        return $this;
    }

    /**
     * Gets credit_cards
     *
     * @return \ultracart\v2\models\CartCustomerProfileCreditCard[]|null
     */
    public function getCreditCards()
    {
        return $this->container['credit_cards'];
    }

    /**
     * Sets credit_cards
     *
     * @param \ultracart\v2\models\CartCustomerProfileCreditCard[]|null $credit_cards Credit cards on file for this profile (masked)
     *
     * @return self
     */
    public function setCreditCards($credit_cards)
    {
        $this->container['credit_cards'] = $credit_cards;

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
     * @param int|null $customer_profile_oid Unique identifier
     *
     * @return self
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets dhl_account_number
     *
     * @return string|null
     */
    public function getDhlAccountNumber()
    {
        return $this->container['dhl_account_number'];
    }

    /**
     * Sets dhl_account_number
     *
     * @param string|null $dhl_account_number DHL account number on file
     *
     * @return self
     */
    public function setDhlAccountNumber($dhl_account_number)
    {
        $this->container['dhl_account_number'] = $dhl_account_number;

        return $this;
    }

    /**
     * Gets dhl_duty_account_number
     *
     * @return string|null
     */
    public function getDhlDutyAccountNumber()
    {
        return $this->container['dhl_duty_account_number'];
    }

    /**
     * Sets dhl_duty_account_number
     *
     * @param string|null $dhl_duty_account_number DHL duty account number on file
     *
     * @return self
     */
    public function setDhlDutyAccountNumber($dhl_duty_account_number)
    {
        $this->container['dhl_duty_account_number'] = $dhl_duty_account_number;

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
     * Gets fedex_account_number
     *
     * @return string|null
     */
    public function getFedexAccountNumber()
    {
        return $this->container['fedex_account_number'];
    }

    /**
     * Sets fedex_account_number
     *
     * @param string|null $fedex_account_number FedEx account number on file
     *
     * @return self
     */
    public function setFedexAccountNumber($fedex_account_number)
    {
        $this->container['fedex_account_number'] = $fedex_account_number;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool|null
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool|null $free_shipping True if this profile always qualifies for free shipping
     *
     * @return self
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets free_shipping_minimum
     *
     * @return float|null
     */
    public function getFreeShippingMinimum()
    {
        return $this->container['free_shipping_minimum'];
    }

    /**
     * Sets free_shipping_minimum
     *
     * @param float|null $free_shipping_minimum The minimum amount that this profile has to purchase to qualify for free shipping
     *
     * @return self
     */
    public function setFreeShippingMinimum($free_shipping_minimum)
    {
        $this->container['free_shipping_minimum'] = $free_shipping_minimum;

        return $this;
    }

    /**
     * Gets maximum_item_count
     *
     * @return int|null
     */
    public function getMaximumItemCount()
    {
        return $this->container['maximum_item_count'];
    }

    /**
     * Sets maximum_item_count
     *
     * @param int|null $maximum_item_count Maximum item count this profile can purchase
     *
     * @return self
     */
    public function setMaximumItemCount($maximum_item_count)
    {
        $this->container['maximum_item_count'] = $maximum_item_count;

        return $this;
    }

    /**
     * Gets minimum_item_count
     *
     * @return int|null
     */
    public function getMinimumItemCount()
    {
        return $this->container['minimum_item_count'];
    }

    /**
     * Sets minimum_item_count
     *
     * @param int|null $minimum_item_count Minimum item count this profile must purchase
     *
     * @return self
     */
    public function setMinimumItemCount($minimum_item_count)
    {
        $this->container['minimum_item_count'] = $minimum_item_count;

        return $this;
    }

    /**
     * Gets minimum_subtotal
     *
     * @return float|null
     */
    public function getMinimumSubtotal()
    {
        return $this->container['minimum_subtotal'];
    }

    /**
     * Sets minimum_subtotal
     *
     * @param float|null $minimum_subtotal Minimum subtotal this profile must purchase
     *
     * @return self
     */
    public function setMinimumSubtotal($minimum_subtotal)
    {
        $this->container['minimum_subtotal'] = $minimum_subtotal;

        return $this;
    }

    /**
     * Gets no_coupons
     *
     * @return bool|null
     */
    public function getNoCoupons()
    {
        return $this->container['no_coupons'];
    }

    /**
     * Sets no_coupons
     *
     * @param bool|null $no_coupons True if this profile is prevented from using coupons
     *
     * @return self
     */
    public function setNoCoupons($no_coupons)
    {
        $this->container['no_coupons'] = $no_coupons;

        return $this;
    }

    /**
     * Gets no_free_shipping
     *
     * @return bool|null
     */
    public function getNoFreeShipping()
    {
        return $this->container['no_free_shipping'];
    }

    /**
     * Sets no_free_shipping
     *
     * @param bool|null $no_free_shipping True if this profile is never given free shipping
     *
     * @return self
     */
    public function setNoFreeShipping($no_free_shipping)
    {
        $this->container['no_free_shipping'] = $no_free_shipping;

        return $this;
    }

    /**
     * Gets no_realtime_charge
     *
     * @return bool|null
     */
    public function getNoRealtimeCharge()
    {
        return $this->container['no_realtime_charge'];
    }

    /**
     * Sets no_realtime_charge
     *
     * @param bool|null $no_realtime_charge True if this customers orders are not charged in real-time
     *
     * @return self
     */
    public function setNoRealtimeCharge($no_realtime_charge)
    {
        $this->container['no_realtime_charge'] = $no_realtime_charge;

        return $this;
    }

    /**
     * Gets pricing_tiers
     *
     * @return string[]|null
     */
    public function getPricingTiers()
    {
        return $this->container['pricing_tiers'];
    }

    /**
     * Sets pricing_tiers
     *
     * @param string[]|null $pricing_tiers Pricing tier names this profile qualifies for
     *
     * @return self
     */
    public function setPricingTiers($pricing_tiers)
    {
        $this->container['pricing_tiers'] = $pricing_tiers;

        return $this;
    }

    /**
     * Gets shipping_addresses
     *
     * @return \ultracart\v2\models\CartCustomerProfileAddress[]|null
     */
    public function getShippingAddresses()
    {
        return $this->container['shipping_addresses'];
    }

    /**
     * Sets shipping_addresses
     *
     * @param \ultracart\v2\models\CartCustomerProfileAddress[]|null $shipping_addresses Shipping addresses on file for this profile
     *
     * @return self
     */
    public function setShippingAddresses($shipping_addresses)
    {
        $this->container['shipping_addresses'] = $shipping_addresses;

        return $this;
    }

    /**
     * Gets signup_dts
     *
     * @return string|null
     */
    public function getSignupDts()
    {
        return $this->container['signup_dts'];
    }

    /**
     * Sets signup_dts
     *
     * @param string|null $signup_dts Signup date
     *
     * @return self
     */
    public function setSignupDts($signup_dts)
    {
        $this->container['signup_dts'] = $signup_dts;

        return $this;
    }

    /**
     * Gets tax_exempt
     *
     * @return bool|null
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     *
     * @param bool|null $tax_exempt True if this profile is exempt from sales tax
     *
     * @return self
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

        return $this;
    }

    /**
     * Gets ups_account_number
     *
     * @return string|null
     */
    public function getUpsAccountNumber()
    {
        return $this->container['ups_account_number'];
    }

    /**
     * Sets ups_account_number
     *
     * @param string|null $ups_account_number UPS account number on file
     *
     * @return self
     */
    public function setUpsAccountNumber($ups_account_number)
    {
        $this->container['ups_account_number'] = $ups_account_number;

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


