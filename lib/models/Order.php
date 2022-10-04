<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Order implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'affiliates' => '\ultracart\v2\models\OrderAffiliate[]',
        'auto_order' => '\ultracart\v2\models\OrderAutoOrder',
        'billing' => '\ultracart\v2\models\OrderBilling',
        'buysafe' => '\ultracart\v2\models\OrderBuysafe',
        'channel_partner' => '\ultracart\v2\models\OrderChannelPartner',
        'checkout' => '\ultracart\v2\models\OrderCheckout',
        'coupons' => '\ultracart\v2\models\OrderCoupon[]',
        'creation_dts' => 'string',
        'currency_code' => 'string',
        'current_stage' => 'string',
        'customer_profile' => '\ultracart\v2\models\Customer',
        'digital_order' => '\ultracart\v2\models\OrderDigitalOrder',
        'edi' => '\ultracart\v2\models\OrderEdi',
        'exchange_rate' => 'float',
        'fraud_score' => '\ultracart\v2\models\OrderFraudScore',
        'gift' => '\ultracart\v2\models\OrderGift',
        'gift_certificate' => '\ultracart\v2\models\OrderGiftCertificate',
        'internal' => '\ultracart\v2\models\OrderInternal',
        'items' => '\ultracart\v2\models\OrderItem[]',
        'language_iso_code' => 'string',
        'linked_shipment' => '\ultracart\v2\models\OrderLinkedShipment',
        'marketing' => '\ultracart\v2\models\OrderMarketing',
        'merchant_id' => 'string',
        'order_id' => 'string',
        'payment' => '\ultracart\v2\models\OrderPayment',
        'properties' => '\ultracart\v2\models\OrderProperty[]',
        'quote' => '\ultracart\v2\models\OrderQuote',
        'refund_dts' => 'string',
        'reject_dts' => 'string',
        'salesforce' => '\ultracart\v2\models\OrderSalesforce',
        'shipping' => '\ultracart\v2\models\OrderShipping',
        'summary' => '\ultracart\v2\models\OrderSummary',
        'tags' => '\ultracart\v2\models\OrderTag[]',
        'taxes' => '\ultracart\v2\models\OrderTaxes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'affiliates' => null,
        'auto_order' => null,
        'billing' => null,
        'buysafe' => null,
        'channel_partner' => null,
        'checkout' => null,
        'coupons' => null,
        'creation_dts' => 'dateTime',
        'currency_code' => null,
        'current_stage' => null,
        'customer_profile' => null,
        'digital_order' => null,
        'edi' => null,
        'exchange_rate' => null,
        'fraud_score' => null,
        'gift' => null,
        'gift_certificate' => null,
        'internal' => null,
        'items' => null,
        'language_iso_code' => null,
        'linked_shipment' => null,
        'marketing' => null,
        'merchant_id' => null,
        'order_id' => null,
        'payment' => null,
        'properties' => null,
        'quote' => null,
        'refund_dts' => 'dateTime',
        'reject_dts' => 'dateTime',
        'salesforce' => null,
        'shipping' => null,
        'summary' => null,
        'tags' => null,
        'taxes' => null
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
        'affiliates' => 'affiliates',
        'auto_order' => 'auto_order',
        'billing' => 'billing',
        'buysafe' => 'buysafe',
        'channel_partner' => 'channel_partner',
        'checkout' => 'checkout',
        'coupons' => 'coupons',
        'creation_dts' => 'creation_dts',
        'currency_code' => 'currency_code',
        'current_stage' => 'current_stage',
        'customer_profile' => 'customer_profile',
        'digital_order' => 'digital_order',
        'edi' => 'edi',
        'exchange_rate' => 'exchange_rate',
        'fraud_score' => 'fraud_score',
        'gift' => 'gift',
        'gift_certificate' => 'gift_certificate',
        'internal' => 'internal',
        'items' => 'items',
        'language_iso_code' => 'language_iso_code',
        'linked_shipment' => 'linked_shipment',
        'marketing' => 'marketing',
        'merchant_id' => 'merchant_id',
        'order_id' => 'order_id',
        'payment' => 'payment',
        'properties' => 'properties',
        'quote' => 'quote',
        'refund_dts' => 'refund_dts',
        'reject_dts' => 'reject_dts',
        'salesforce' => 'salesforce',
        'shipping' => 'shipping',
        'summary' => 'summary',
        'tags' => 'Tags',
        'taxes' => 'taxes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliates' => 'setAffiliates',
        'auto_order' => 'setAutoOrder',
        'billing' => 'setBilling',
        'buysafe' => 'setBuysafe',
        'channel_partner' => 'setChannelPartner',
        'checkout' => 'setCheckout',
        'coupons' => 'setCoupons',
        'creation_dts' => 'setCreationDts',
        'currency_code' => 'setCurrencyCode',
        'current_stage' => 'setCurrentStage',
        'customer_profile' => 'setCustomerProfile',
        'digital_order' => 'setDigitalOrder',
        'edi' => 'setEdi',
        'exchange_rate' => 'setExchangeRate',
        'fraud_score' => 'setFraudScore',
        'gift' => 'setGift',
        'gift_certificate' => 'setGiftCertificate',
        'internal' => 'setInternal',
        'items' => 'setItems',
        'language_iso_code' => 'setLanguageIsoCode',
        'linked_shipment' => 'setLinkedShipment',
        'marketing' => 'setMarketing',
        'merchant_id' => 'setMerchantId',
        'order_id' => 'setOrderId',
        'payment' => 'setPayment',
        'properties' => 'setProperties',
        'quote' => 'setQuote',
        'refund_dts' => 'setRefundDts',
        'reject_dts' => 'setRejectDts',
        'salesforce' => 'setSalesforce',
        'shipping' => 'setShipping',
        'summary' => 'setSummary',
        'tags' => 'setTags',
        'taxes' => 'setTaxes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliates' => 'getAffiliates',
        'auto_order' => 'getAutoOrder',
        'billing' => 'getBilling',
        'buysafe' => 'getBuysafe',
        'channel_partner' => 'getChannelPartner',
        'checkout' => 'getCheckout',
        'coupons' => 'getCoupons',
        'creation_dts' => 'getCreationDts',
        'currency_code' => 'getCurrencyCode',
        'current_stage' => 'getCurrentStage',
        'customer_profile' => 'getCustomerProfile',
        'digital_order' => 'getDigitalOrder',
        'edi' => 'getEdi',
        'exchange_rate' => 'getExchangeRate',
        'fraud_score' => 'getFraudScore',
        'gift' => 'getGift',
        'gift_certificate' => 'getGiftCertificate',
        'internal' => 'getInternal',
        'items' => 'getItems',
        'language_iso_code' => 'getLanguageIsoCode',
        'linked_shipment' => 'getLinkedShipment',
        'marketing' => 'getMarketing',
        'merchant_id' => 'getMerchantId',
        'order_id' => 'getOrderId',
        'payment' => 'getPayment',
        'properties' => 'getProperties',
        'quote' => 'getQuote',
        'refund_dts' => 'getRefundDts',
        'reject_dts' => 'getRejectDts',
        'salesforce' => 'getSalesforce',
        'shipping' => 'getShipping',
        'summary' => 'getSummary',
        'tags' => 'getTags',
        'taxes' => 'getTaxes'
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

    public const CURRENT_STAGE_ACCOUNTS_RECEIVABLE = 'Accounts Receivable';
    public const CURRENT_STAGE_PENDING_CLEARANCE = 'Pending Clearance';
    public const CURRENT_STAGE_FRAUD_REVIEW = 'Fraud Review';
    public const CURRENT_STAGE_REJECTED = 'Rejected';
    public const CURRENT_STAGE_SHIPPING_DEPARTMENT = 'Shipping Department';
    public const CURRENT_STAGE_COMPLETED_ORDER = 'Completed Order';
    public const CURRENT_STAGE_QUOTE_REQUEST = 'Quote Request';
    public const CURRENT_STAGE_QUOTE_SENT = 'Quote Sent';
    public const CURRENT_STAGE_LEAST_COST_ROUTING = 'Least Cost Routing';
    public const CURRENT_STAGE_UNKNOWN = 'Unknown';
    public const CURRENT_STAGE_PRE_ORDERED = 'Pre-ordered';
    public const CURRENT_STAGE_ADVANCED_ORDER_ROUTING = 'Advanced Order Routing';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentStageAllowableValues()
    {
        return [
            self::CURRENT_STAGE_ACCOUNTS_RECEIVABLE,
            self::CURRENT_STAGE_PENDING_CLEARANCE,
            self::CURRENT_STAGE_FRAUD_REVIEW,
            self::CURRENT_STAGE_REJECTED,
            self::CURRENT_STAGE_SHIPPING_DEPARTMENT,
            self::CURRENT_STAGE_COMPLETED_ORDER,
            self::CURRENT_STAGE_QUOTE_REQUEST,
            self::CURRENT_STAGE_QUOTE_SENT,
            self::CURRENT_STAGE_LEAST_COST_ROUTING,
            self::CURRENT_STAGE_UNKNOWN,
            self::CURRENT_STAGE_PRE_ORDERED,
            self::CURRENT_STAGE_ADVANCED_ORDER_ROUTING,
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
        $this->container['affiliates'] = $data['affiliates'] ?? null;
        $this->container['auto_order'] = $data['auto_order'] ?? null;
        $this->container['billing'] = $data['billing'] ?? null;
        $this->container['buysafe'] = $data['buysafe'] ?? null;
        $this->container['channel_partner'] = $data['channel_partner'] ?? null;
        $this->container['checkout'] = $data['checkout'] ?? null;
        $this->container['coupons'] = $data['coupons'] ?? null;
        $this->container['creation_dts'] = $data['creation_dts'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['current_stage'] = $data['current_stage'] ?? null;
        $this->container['customer_profile'] = $data['customer_profile'] ?? null;
        $this->container['digital_order'] = $data['digital_order'] ?? null;
        $this->container['edi'] = $data['edi'] ?? null;
        $this->container['exchange_rate'] = $data['exchange_rate'] ?? null;
        $this->container['fraud_score'] = $data['fraud_score'] ?? null;
        $this->container['gift'] = $data['gift'] ?? null;
        $this->container['gift_certificate'] = $data['gift_certificate'] ?? null;
        $this->container['internal'] = $data['internal'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['language_iso_code'] = $data['language_iso_code'] ?? null;
        $this->container['linked_shipment'] = $data['linked_shipment'] ?? null;
        $this->container['marketing'] = $data['marketing'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['payment'] = $data['payment'] ?? null;
        $this->container['properties'] = $data['properties'] ?? null;
        $this->container['quote'] = $data['quote'] ?? null;
        $this->container['refund_dts'] = $data['refund_dts'] ?? null;
        $this->container['reject_dts'] = $data['reject_dts'] ?? null;
        $this->container['salesforce'] = $data['salesforce'] ?? null;
        $this->container['shipping'] = $data['shipping'] ?? null;
        $this->container['summary'] = $data['summary'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['currency_code']) && (mb_strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        $allowedValues = $this->getCurrentStageAllowableValues();
        if (!is_null($this->container['current_stage']) && !in_array($this->container['current_stage'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'current_stage', must be one of '%s'",
                $this->container['current_stage'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['language_iso_code']) && (mb_strlen($this->container['language_iso_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'language_iso_code', the character length must be smaller than or equal to 3.";
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
     * Gets affiliates
     *
     * @return \ultracart\v2\models\OrderAffiliate[]|null
     */
    public function getAffiliates()
    {
        return $this->container['affiliates'];
    }

    /**
     * Sets affiliates
     *
     * @param \ultracart\v2\models\OrderAffiliate[]|null $affiliates Affiliates if any were associated with the order.  The first one in the array sent the order and each subsequent affiliate is the recruiter that earns a downline commission.
     *
     * @return self
     */
    public function setAffiliates($affiliates)
    {
        $this->container['affiliates'] = $affiliates;

        return $this;
    }

    /**
     * Gets auto_order
     *
     * @return \ultracart\v2\models\OrderAutoOrder|null
     */
    public function getAutoOrder()
    {
        return $this->container['auto_order'];
    }

    /**
     * Sets auto_order
     *
     * @param \ultracart\v2\models\OrderAutoOrder|null $auto_order auto_order
     *
     * @return self
     */
    public function setAutoOrder($auto_order)
    {
        $this->container['auto_order'] = $auto_order;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \ultracart\v2\models\OrderBilling|null
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \ultracart\v2\models\OrderBilling|null $billing billing
     *
     * @return self
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets buysafe
     *
     * @return \ultracart\v2\models\OrderBuysafe|null
     */
    public function getBuysafe()
    {
        return $this->container['buysafe'];
    }

    /**
     * Sets buysafe
     *
     * @param \ultracart\v2\models\OrderBuysafe|null $buysafe buysafe
     *
     * @return self
     */
    public function setBuysafe($buysafe)
    {
        $this->container['buysafe'] = $buysafe;

        return $this;
    }

    /**
     * Gets channel_partner
     *
     * @return \ultracart\v2\models\OrderChannelPartner|null
     */
    public function getChannelPartner()
    {
        return $this->container['channel_partner'];
    }

    /**
     * Sets channel_partner
     *
     * @param \ultracart\v2\models\OrderChannelPartner|null $channel_partner channel_partner
     *
     * @return self
     */
    public function setChannelPartner($channel_partner)
    {
        $this->container['channel_partner'] = $channel_partner;

        return $this;
    }

    /**
     * Gets checkout
     *
     * @return \ultracart\v2\models\OrderCheckout|null
     */
    public function getCheckout()
    {
        return $this->container['checkout'];
    }

    /**
     * Sets checkout
     *
     * @param \ultracart\v2\models\OrderCheckout|null $checkout checkout
     *
     * @return self
     */
    public function setCheckout($checkout)
    {
        $this->container['checkout'] = $checkout;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return \ultracart\v2\models\OrderCoupon[]|null
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param \ultracart\v2\models\OrderCoupon[]|null $coupons Coupons
     *
     * @return self
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets creation_dts
     *
     * @return string|null
     */
    public function getCreationDts()
    {
        return $this->container['creation_dts'];
    }

    /**
     * Sets creation_dts
     *
     * @param string|null $creation_dts Date/time that the order was created
     *
     * @return self
     */
    public function setCreationDts($creation_dts)
    {
        $this->container['creation_dts'] = $creation_dts;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code Currency code that the customer used if different than the merchant's base currency code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        if (!is_null($currency_code) && (mb_strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling Order., must be smaller than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets current_stage
     *
     * @return string|null
     */
    public function getCurrentStage()
    {
        return $this->container['current_stage'];
    }

    /**
     * Sets current_stage
     *
     * @param string|null $current_stage Current stage that the order is in.
     *
     * @return self
     */
    public function setCurrentStage($current_stage)
    {
        $allowedValues = $this->getCurrentStageAllowableValues();
        if (!is_null($current_stage) && !in_array($current_stage, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'current_stage', must be one of '%s'",
                    $current_stage,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['current_stage'] = $current_stage;

        return $this;
    }

    /**
     * Gets customer_profile
     *
     * @return \ultracart\v2\models\Customer|null
     */
    public function getCustomerProfile()
    {
        return $this->container['customer_profile'];
    }

    /**
     * Sets customer_profile
     *
     * @param \ultracart\v2\models\Customer|null $customer_profile customer_profile
     *
     * @return self
     */
    public function setCustomerProfile($customer_profile)
    {
        $this->container['customer_profile'] = $customer_profile;

        return $this;
    }

    /**
     * Gets digital_order
     *
     * @return \ultracart\v2\models\OrderDigitalOrder|null
     */
    public function getDigitalOrder()
    {
        return $this->container['digital_order'];
    }

    /**
     * Sets digital_order
     *
     * @param \ultracart\v2\models\OrderDigitalOrder|null $digital_order digital_order
     *
     * @return self
     */
    public function setDigitalOrder($digital_order)
    {
        $this->container['digital_order'] = $digital_order;

        return $this;
    }

    /**
     * Gets edi
     *
     * @return \ultracart\v2\models\OrderEdi|null
     */
    public function getEdi()
    {
        return $this->container['edi'];
    }

    /**
     * Sets edi
     *
     * @param \ultracart\v2\models\OrderEdi|null $edi edi
     *
     * @return self
     */
    public function setEdi($edi)
    {
        $this->container['edi'] = $edi;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float|null $exchange_rate Exchange rate at the time the order was placed if currency code is different than the base currency
     *
     * @return self
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets fraud_score
     *
     * @return \ultracart\v2\models\OrderFraudScore|null
     */
    public function getFraudScore()
    {
        return $this->container['fraud_score'];
    }

    /**
     * Sets fraud_score
     *
     * @param \ultracart\v2\models\OrderFraudScore|null $fraud_score fraud_score
     *
     * @return self
     */
    public function setFraudScore($fraud_score)
    {
        $this->container['fraud_score'] = $fraud_score;

        return $this;
    }

    /**
     * Gets gift
     *
     * @return \ultracart\v2\models\OrderGift|null
     */
    public function getGift()
    {
        return $this->container['gift'];
    }

    /**
     * Sets gift
     *
     * @param \ultracart\v2\models\OrderGift|null $gift gift
     *
     * @return self
     */
    public function setGift($gift)
    {
        $this->container['gift'] = $gift;

        return $this;
    }

    /**
     * Gets gift_certificate
     *
     * @return \ultracart\v2\models\OrderGiftCertificate|null
     */
    public function getGiftCertificate()
    {
        return $this->container['gift_certificate'];
    }

    /**
     * Sets gift_certificate
     *
     * @param \ultracart\v2\models\OrderGiftCertificate|null $gift_certificate gift_certificate
     *
     * @return self
     */
    public function setGiftCertificate($gift_certificate)
    {
        $this->container['gift_certificate'] = $gift_certificate;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return \ultracart\v2\models\OrderInternal|null
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param \ultracart\v2\models\OrderInternal|null $internal internal
     *
     * @return self
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ultracart\v2\models\OrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ultracart\v2\models\OrderItem[]|null $items Items
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets language_iso_code
     *
     * @return string|null
     */
    public function getLanguageIsoCode()
    {
        return $this->container['language_iso_code'];
    }

    /**
     * Sets language_iso_code
     *
     * @param string|null $language_iso_code Three letter ISO-639 language code used by the customer during the checkout if different than the default language
     *
     * @return self
     */
    public function setLanguageIsoCode($language_iso_code)
    {
        if (!is_null($language_iso_code) && (mb_strlen($language_iso_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $language_iso_code when calling Order., must be smaller than or equal to 3.');
        }

        $this->container['language_iso_code'] = $language_iso_code;

        return $this;
    }

    /**
     * Gets linked_shipment
     *
     * @return \ultracart\v2\models\OrderLinkedShipment|null
     */
    public function getLinkedShipment()
    {
        return $this->container['linked_shipment'];
    }

    /**
     * Sets linked_shipment
     *
     * @param \ultracart\v2\models\OrderLinkedShipment|null $linked_shipment linked_shipment
     *
     * @return self
     */
    public function setLinkedShipment($linked_shipment)
    {
        $this->container['linked_shipment'] = $linked_shipment;

        return $this;
    }

    /**
     * Gets marketing
     *
     * @return \ultracart\v2\models\OrderMarketing|null
     */
    public function getMarketing()
    {
        return $this->container['marketing'];
    }

    /**
     * Sets marketing
     *
     * @param \ultracart\v2\models\OrderMarketing|null $marketing marketing
     *
     * @return self
     */
    public function setMarketing($marketing)
    {
        $this->container['marketing'] = $marketing;

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
     * @param string|null $merchant_id UltraCart merchant ID owning this order
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
     * @param string|null $order_id Order ID
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \ultracart\v2\models\OrderPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \ultracart\v2\models\OrderPayment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \ultracart\v2\models\OrderProperty[]|null
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \ultracart\v2\models\OrderProperty[]|null $properties Properties, available only through update, not through insert due to the nature of how properties are handled internally
     *
     * @return self
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \ultracart\v2\models\OrderQuote|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \ultracart\v2\models\OrderQuote|null $quote quote
     *
     * @return self
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets refund_dts
     *
     * @return string|null
     */
    public function getRefundDts()
    {
        return $this->container['refund_dts'];
    }

    /**
     * Sets refund_dts
     *
     * @param string|null $refund_dts If the order was refunded, the date/time that the last refund occurred
     *
     * @return self
     */
    public function setRefundDts($refund_dts)
    {
        $this->container['refund_dts'] = $refund_dts;

        return $this;
    }

    /**
     * Gets reject_dts
     *
     * @return string|null
     */
    public function getRejectDts()
    {
        return $this->container['reject_dts'];
    }

    /**
     * Sets reject_dts
     *
     * @param string|null $reject_dts If the order was rejected, the date/time that the rejection occurred
     *
     * @return self
     */
    public function setRejectDts($reject_dts)
    {
        $this->container['reject_dts'] = $reject_dts;

        return $this;
    }

    /**
     * Gets salesforce
     *
     * @return \ultracart\v2\models\OrderSalesforce|null
     */
    public function getSalesforce()
    {
        return $this->container['salesforce'];
    }

    /**
     * Sets salesforce
     *
     * @param \ultracart\v2\models\OrderSalesforce|null $salesforce salesforce
     *
     * @return self
     */
    public function setSalesforce($salesforce)
    {
        $this->container['salesforce'] = $salesforce;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \ultracart\v2\models\OrderShipping|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \ultracart\v2\models\OrderShipping|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \ultracart\v2\models\OrderSummary|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \ultracart\v2\models\OrderSummary|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \ultracart\v2\models\OrderTag[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \ultracart\v2\models\OrderTag[]|null $tags tags, available only through update, not through insert due to the nature of how tags are handled internally
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \ultracart\v2\models\OrderTaxes|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \ultracart\v2\models\OrderTaxes|null $taxes taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

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


