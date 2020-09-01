<?php
/**
 * PricingTier
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * PricingTier Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PricingTier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PricingTier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_3rd_party_billing' => 'bool',
        'allow_cod' => 'bool',
        'allow_purchase_order' => 'bool',
        'allow_quote_request' => 'bool',
        'approval_notification' => '\ultracartv2\models\PricingTierNotification',
        'auto_approve_cod' => 'bool',
        'auto_approve_purchase_order' => 'bool',
        'default_on_wholesale_signup' => 'bool',
        'default_percentage_discount' => 'float',
        'default_shipping_method_oid' => 'int',
        'default_tier' => 'bool',
        'display_on_wholesale_signup' => 'bool',
        'exclude_from_free_promotion' => 'bool',
        'exempt_shipping_handling_charge' => 'bool',
        'free_shipping' => 'bool',
        'free_shipping_minimum' => 'float',
        'maximum_item_count' => 'int',
        'minimum_item_count' => 'int',
        'minimum_subtotal' => 'float',
        'name' => 'string',
        'no_coupons' => 'bool',
        'no_free_shipping' => 'bool',
        'no_realtime_charge' => 'bool',
        'not_valid_when_coupon_present' => 'bool',
        'pricing_tier_oid' => 'int',
        'realtime_percentage_discount' => 'float',
        'signup_notification' => '\ultracartv2\models\PricingTierNotification',
        'suppress_buysafe' => 'bool',
        'suppress_mailing_list' => 'bool',
        'tax_exempt' => 'bool',
        'track_separately' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_3rd_party_billing' => null,
        'allow_cod' => null,
        'allow_purchase_order' => null,
        'allow_quote_request' => null,
        'approval_notification' => null,
        'auto_approve_cod' => null,
        'auto_approve_purchase_order' => null,
        'default_on_wholesale_signup' => null,
        'default_percentage_discount' => null,
        'default_shipping_method_oid' => 'int32',
        'default_tier' => null,
        'display_on_wholesale_signup' => null,
        'exclude_from_free_promotion' => null,
        'exempt_shipping_handling_charge' => null,
        'free_shipping' => null,
        'free_shipping_minimum' => null,
        'maximum_item_count' => 'int32',
        'minimum_item_count' => 'int32',
        'minimum_subtotal' => null,
        'name' => null,
        'no_coupons' => null,
        'no_free_shipping' => null,
        'no_realtime_charge' => null,
        'not_valid_when_coupon_present' => null,
        'pricing_tier_oid' => 'int32',
        'realtime_percentage_discount' => null,
        'signup_notification' => null,
        'suppress_buysafe' => null,
        'suppress_mailing_list' => null,
        'tax_exempt' => null,
        'track_separately' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        'allow_quote_request' => 'allow_quote_request',
        'approval_notification' => 'approval_notification',
        'auto_approve_cod' => 'auto_approve_cod',
        'auto_approve_purchase_order' => 'auto_approve_purchase_order',
        'default_on_wholesale_signup' => 'default_on_wholesale_signup',
        'default_percentage_discount' => 'default_percentage_discount',
        'default_shipping_method_oid' => 'default_shipping_method_oid',
        'default_tier' => 'default_tier',
        'display_on_wholesale_signup' => 'display_on_wholesale_signup',
        'exclude_from_free_promotion' => 'exclude_from_free_promotion',
        'exempt_shipping_handling_charge' => 'exempt_shipping_handling_charge',
        'free_shipping' => 'free_shipping',
        'free_shipping_minimum' => 'free_shipping_minimum',
        'maximum_item_count' => 'maximum_item_count',
        'minimum_item_count' => 'minimum_item_count',
        'minimum_subtotal' => 'minimum_subtotal',
        'name' => 'name',
        'no_coupons' => 'no_coupons',
        'no_free_shipping' => 'no_free_shipping',
        'no_realtime_charge' => 'no_realtime_charge',
        'not_valid_when_coupon_present' => 'not_valid_when_coupon_present',
        'pricing_tier_oid' => 'pricing_tier_oid',
        'realtime_percentage_discount' => 'realtime_percentage_discount',
        'signup_notification' => 'signup_notification',
        'suppress_buysafe' => 'suppress_buysafe',
        'suppress_mailing_list' => 'suppress_mailing_list',
        'tax_exempt' => 'tax_exempt',
        'track_separately' => 'track_separately'
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
        'allow_quote_request' => 'setAllowQuoteRequest',
        'approval_notification' => 'setApprovalNotification',
        'auto_approve_cod' => 'setAutoApproveCod',
        'auto_approve_purchase_order' => 'setAutoApprovePurchaseOrder',
        'default_on_wholesale_signup' => 'setDefaultOnWholesaleSignup',
        'default_percentage_discount' => 'setDefaultPercentageDiscount',
        'default_shipping_method_oid' => 'setDefaultShippingMethodOid',
        'default_tier' => 'setDefaultTier',
        'display_on_wholesale_signup' => 'setDisplayOnWholesaleSignup',
        'exclude_from_free_promotion' => 'setExcludeFromFreePromotion',
        'exempt_shipping_handling_charge' => 'setExemptShippingHandlingCharge',
        'free_shipping' => 'setFreeShipping',
        'free_shipping_minimum' => 'setFreeShippingMinimum',
        'maximum_item_count' => 'setMaximumItemCount',
        'minimum_item_count' => 'setMinimumItemCount',
        'minimum_subtotal' => 'setMinimumSubtotal',
        'name' => 'setName',
        'no_coupons' => 'setNoCoupons',
        'no_free_shipping' => 'setNoFreeShipping',
        'no_realtime_charge' => 'setNoRealtimeCharge',
        'not_valid_when_coupon_present' => 'setNotValidWhenCouponPresent',
        'pricing_tier_oid' => 'setPricingTierOid',
        'realtime_percentage_discount' => 'setRealtimePercentageDiscount',
        'signup_notification' => 'setSignupNotification',
        'suppress_buysafe' => 'setSuppressBuysafe',
        'suppress_mailing_list' => 'setSuppressMailingList',
        'tax_exempt' => 'setTaxExempt',
        'track_separately' => 'setTrackSeparately'
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
        'allow_quote_request' => 'getAllowQuoteRequest',
        'approval_notification' => 'getApprovalNotification',
        'auto_approve_cod' => 'getAutoApproveCod',
        'auto_approve_purchase_order' => 'getAutoApprovePurchaseOrder',
        'default_on_wholesale_signup' => 'getDefaultOnWholesaleSignup',
        'default_percentage_discount' => 'getDefaultPercentageDiscount',
        'default_shipping_method_oid' => 'getDefaultShippingMethodOid',
        'default_tier' => 'getDefaultTier',
        'display_on_wholesale_signup' => 'getDisplayOnWholesaleSignup',
        'exclude_from_free_promotion' => 'getExcludeFromFreePromotion',
        'exempt_shipping_handling_charge' => 'getExemptShippingHandlingCharge',
        'free_shipping' => 'getFreeShipping',
        'free_shipping_minimum' => 'getFreeShippingMinimum',
        'maximum_item_count' => 'getMaximumItemCount',
        'minimum_item_count' => 'getMinimumItemCount',
        'minimum_subtotal' => 'getMinimumSubtotal',
        'name' => 'getName',
        'no_coupons' => 'getNoCoupons',
        'no_free_shipping' => 'getNoFreeShipping',
        'no_realtime_charge' => 'getNoRealtimeCharge',
        'not_valid_when_coupon_present' => 'getNotValidWhenCouponPresent',
        'pricing_tier_oid' => 'getPricingTierOid',
        'realtime_percentage_discount' => 'getRealtimePercentageDiscount',
        'signup_notification' => 'getSignupNotification',
        'suppress_buysafe' => 'getSuppressBuysafe',
        'suppress_mailing_list' => 'getSuppressMailingList',
        'tax_exempt' => 'getTaxExempt',
        'track_separately' => 'getTrackSeparately'
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
        return self::$swaggerModelName;
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
        $this->container['allow_3rd_party_billing'] = isset($data['allow_3rd_party_billing']) ? $data['allow_3rd_party_billing'] : null;
        $this->container['allow_cod'] = isset($data['allow_cod']) ? $data['allow_cod'] : null;
        $this->container['allow_purchase_order'] = isset($data['allow_purchase_order']) ? $data['allow_purchase_order'] : null;
        $this->container['allow_quote_request'] = isset($data['allow_quote_request']) ? $data['allow_quote_request'] : null;
        $this->container['approval_notification'] = isset($data['approval_notification']) ? $data['approval_notification'] : null;
        $this->container['auto_approve_cod'] = isset($data['auto_approve_cod']) ? $data['auto_approve_cod'] : null;
        $this->container['auto_approve_purchase_order'] = isset($data['auto_approve_purchase_order']) ? $data['auto_approve_purchase_order'] : null;
        $this->container['default_on_wholesale_signup'] = isset($data['default_on_wholesale_signup']) ? $data['default_on_wholesale_signup'] : null;
        $this->container['default_percentage_discount'] = isset($data['default_percentage_discount']) ? $data['default_percentage_discount'] : null;
        $this->container['default_shipping_method_oid'] = isset($data['default_shipping_method_oid']) ? $data['default_shipping_method_oid'] : null;
        $this->container['default_tier'] = isset($data['default_tier']) ? $data['default_tier'] : null;
        $this->container['display_on_wholesale_signup'] = isset($data['display_on_wholesale_signup']) ? $data['display_on_wholesale_signup'] : null;
        $this->container['exclude_from_free_promotion'] = isset($data['exclude_from_free_promotion']) ? $data['exclude_from_free_promotion'] : null;
        $this->container['exempt_shipping_handling_charge'] = isset($data['exempt_shipping_handling_charge']) ? $data['exempt_shipping_handling_charge'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['free_shipping_minimum'] = isset($data['free_shipping_minimum']) ? $data['free_shipping_minimum'] : null;
        $this->container['maximum_item_count'] = isset($data['maximum_item_count']) ? $data['maximum_item_count'] : null;
        $this->container['minimum_item_count'] = isset($data['minimum_item_count']) ? $data['minimum_item_count'] : null;
        $this->container['minimum_subtotal'] = isset($data['minimum_subtotal']) ? $data['minimum_subtotal'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['no_coupons'] = isset($data['no_coupons']) ? $data['no_coupons'] : null;
        $this->container['no_free_shipping'] = isset($data['no_free_shipping']) ? $data['no_free_shipping'] : null;
        $this->container['no_realtime_charge'] = isset($data['no_realtime_charge']) ? $data['no_realtime_charge'] : null;
        $this->container['not_valid_when_coupon_present'] = isset($data['not_valid_when_coupon_present']) ? $data['not_valid_when_coupon_present'] : null;
        $this->container['pricing_tier_oid'] = isset($data['pricing_tier_oid']) ? $data['pricing_tier_oid'] : null;
        $this->container['realtime_percentage_discount'] = isset($data['realtime_percentage_discount']) ? $data['realtime_percentage_discount'] : null;
        $this->container['signup_notification'] = isset($data['signup_notification']) ? $data['signup_notification'] : null;
        $this->container['suppress_buysafe'] = isset($data['suppress_buysafe']) ? $data['suppress_buysafe'] : null;
        $this->container['suppress_mailing_list'] = isset($data['suppress_mailing_list']) ? $data['suppress_mailing_list'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['track_separately'] = isset($data['track_separately']) ? $data['track_separately'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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
     * Gets allow_3rd_party_billing
     *
     * @return bool
     */
    public function getAllow3rdPartyBilling()
    {
        return $this->container['allow_3rd_party_billing'];
    }

    /**
     * Sets allow_3rd_party_billing
     *
     * @param bool $allow_3rd_party_billing Allow 3rd party billing
     *
     * @return $this
     */
    public function setAllow3rdPartyBilling($allow_3rd_party_billing)
    {
        $this->container['allow_3rd_party_billing'] = $allow_3rd_party_billing;

        return $this;
    }

    /**
     * Gets allow_cod
     *
     * @return bool
     */
    public function getAllowCod()
    {
        return $this->container['allow_cod'];
    }

    /**
     * Sets allow_cod
     *
     * @param bool $allow_cod Allow COD
     *
     * @return $this
     */
    public function setAllowCod($allow_cod)
    {
        $this->container['allow_cod'] = $allow_cod;

        return $this;
    }

    /**
     * Gets allow_purchase_order
     *
     * @return bool
     */
    public function getAllowPurchaseOrder()
    {
        return $this->container['allow_purchase_order'];
    }

    /**
     * Sets allow_purchase_order
     *
     * @param bool $allow_purchase_order Allow purchase order
     *
     * @return $this
     */
    public function setAllowPurchaseOrder($allow_purchase_order)
    {
        $this->container['allow_purchase_order'] = $allow_purchase_order;

        return $this;
    }

    /**
     * Gets allow_quote_request
     *
     * @return bool
     */
    public function getAllowQuoteRequest()
    {
        return $this->container['allow_quote_request'];
    }

    /**
     * Sets allow_quote_request
     *
     * @param bool $allow_quote_request Allow quote request
     *
     * @return $this
     */
    public function setAllowQuoteRequest($allow_quote_request)
    {
        $this->container['allow_quote_request'] = $allow_quote_request;

        return $this;
    }

    /**
     * Gets approval_notification
     *
     * @return \ultracartv2\models\PricingTierNotification
     */
    public function getApprovalNotification()
    {
        return $this->container['approval_notification'];
    }

    /**
     * Sets approval_notification
     *
     * @param \ultracartv2\models\PricingTierNotification $approval_notification approval_notification
     *
     * @return $this
     */
    public function setApprovalNotification($approval_notification)
    {
        $this->container['approval_notification'] = $approval_notification;

        return $this;
    }

    /**
     * Gets auto_approve_cod
     *
     * @return bool
     */
    public function getAutoApproveCod()
    {
        return $this->container['auto_approve_cod'];
    }

    /**
     * Sets auto_approve_cod
     *
     * @param bool $auto_approve_cod Auto approve COD
     *
     * @return $this
     */
    public function setAutoApproveCod($auto_approve_cod)
    {
        $this->container['auto_approve_cod'] = $auto_approve_cod;

        return $this;
    }

    /**
     * Gets auto_approve_purchase_order
     *
     * @return bool
     */
    public function getAutoApprovePurchaseOrder()
    {
        return $this->container['auto_approve_purchase_order'];
    }

    /**
     * Sets auto_approve_purchase_order
     *
     * @param bool $auto_approve_purchase_order Auto approve purchase order
     *
     * @return $this
     */
    public function setAutoApprovePurchaseOrder($auto_approve_purchase_order)
    {
        $this->container['auto_approve_purchase_order'] = $auto_approve_purchase_order;

        return $this;
    }

    /**
     * Gets default_on_wholesale_signup
     *
     * @return bool
     */
    public function getDefaultOnWholesaleSignup()
    {
        return $this->container['default_on_wholesale_signup'];
    }

    /**
     * Sets default_on_wholesale_signup
     *
     * @param bool $default_on_wholesale_signup Default on wholesale signup
     *
     * @return $this
     */
    public function setDefaultOnWholesaleSignup($default_on_wholesale_signup)
    {
        $this->container['default_on_wholesale_signup'] = $default_on_wholesale_signup;

        return $this;
    }

    /**
     * Gets default_percentage_discount
     *
     * @return float
     */
    public function getDefaultPercentageDiscount()
    {
        return $this->container['default_percentage_discount'];
    }

    /**
     * Sets default_percentage_discount
     *
     * @param float $default_percentage_discount Default percentage discount
     *
     * @return $this
     */
    public function setDefaultPercentageDiscount($default_percentage_discount)
    {
        $this->container['default_percentage_discount'] = $default_percentage_discount;

        return $this;
    }

    /**
     * Gets default_shipping_method_oid
     *
     * @return int
     */
    public function getDefaultShippingMethodOid()
    {
        return $this->container['default_shipping_method_oid'];
    }

    /**
     * Sets default_shipping_method_oid
     *
     * @param int $default_shipping_method_oid Default shipping method oid
     *
     * @return $this
     */
    public function setDefaultShippingMethodOid($default_shipping_method_oid)
    {
        $this->container['default_shipping_method_oid'] = $default_shipping_method_oid;

        return $this;
    }

    /**
     * Gets default_tier
     *
     * @return bool
     */
    public function getDefaultTier()
    {
        return $this->container['default_tier'];
    }

    /**
     * Sets default_tier
     *
     * @param bool $default_tier Default tier
     *
     * @return $this
     */
    public function setDefaultTier($default_tier)
    {
        $this->container['default_tier'] = $default_tier;

        return $this;
    }

    /**
     * Gets display_on_wholesale_signup
     *
     * @return bool
     */
    public function getDisplayOnWholesaleSignup()
    {
        return $this->container['display_on_wholesale_signup'];
    }

    /**
     * Sets display_on_wholesale_signup
     *
     * @param bool $display_on_wholesale_signup Display on wholesale signup
     *
     * @return $this
     */
    public function setDisplayOnWholesaleSignup($display_on_wholesale_signup)
    {
        $this->container['display_on_wholesale_signup'] = $display_on_wholesale_signup;

        return $this;
    }

    /**
     * Gets exclude_from_free_promotion
     *
     * @return bool
     */
    public function getExcludeFromFreePromotion()
    {
        return $this->container['exclude_from_free_promotion'];
    }

    /**
     * Sets exclude_from_free_promotion
     *
     * @param bool $exclude_from_free_promotion Exclude from free promotion
     *
     * @return $this
     */
    public function setExcludeFromFreePromotion($exclude_from_free_promotion)
    {
        $this->container['exclude_from_free_promotion'] = $exclude_from_free_promotion;

        return $this;
    }

    /**
     * Gets exempt_shipping_handling_charge
     *
     * @return bool
     */
    public function getExemptShippingHandlingCharge()
    {
        return $this->container['exempt_shipping_handling_charge'];
    }

    /**
     * Sets exempt_shipping_handling_charge
     *
     * @param bool $exempt_shipping_handling_charge Exempt shipping handling charge
     *
     * @return $this
     */
    public function setExemptShippingHandlingCharge($exempt_shipping_handling_charge)
    {
        $this->container['exempt_shipping_handling_charge'] = $exempt_shipping_handling_charge;

        return $this;
    }

    /**
     * Gets free_shipping
     *
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     *
     * @param bool $free_shipping Free shipping
     *
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets free_shipping_minimum
     *
     * @return float
     */
    public function getFreeShippingMinimum()
    {
        return $this->container['free_shipping_minimum'];
    }

    /**
     * Sets free_shipping_minimum
     *
     * @param float $free_shipping_minimum Free shipping minimum
     *
     * @return $this
     */
    public function setFreeShippingMinimum($free_shipping_minimum)
    {
        $this->container['free_shipping_minimum'] = $free_shipping_minimum;

        return $this;
    }

    /**
     * Gets maximum_item_count
     *
     * @return int
     */
    public function getMaximumItemCount()
    {
        return $this->container['maximum_item_count'];
    }

    /**
     * Sets maximum_item_count
     *
     * @param int $maximum_item_count Maximum item count
     *
     * @return $this
     */
    public function setMaximumItemCount($maximum_item_count)
    {
        $this->container['maximum_item_count'] = $maximum_item_count;

        return $this;
    }

    /**
     * Gets minimum_item_count
     *
     * @return int
     */
    public function getMinimumItemCount()
    {
        return $this->container['minimum_item_count'];
    }

    /**
     * Sets minimum_item_count
     *
     * @param int $minimum_item_count Minimum item count
     *
     * @return $this
     */
    public function setMinimumItemCount($minimum_item_count)
    {
        $this->container['minimum_item_count'] = $minimum_item_count;

        return $this;
    }

    /**
     * Gets minimum_subtotal
     *
     * @return float
     */
    public function getMinimumSubtotal()
    {
        return $this->container['minimum_subtotal'];
    }

    /**
     * Sets minimum_subtotal
     *
     * @param float $minimum_subtotal Minimum subtotal
     *
     * @return $this
     */
    public function setMinimumSubtotal($minimum_subtotal)
    {
        $this->container['minimum_subtotal'] = $minimum_subtotal;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PricingTier., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets no_coupons
     *
     * @return bool
     */
    public function getNoCoupons()
    {
        return $this->container['no_coupons'];
    }

    /**
     * Sets no_coupons
     *
     * @param bool $no_coupons No coupons
     *
     * @return $this
     */
    public function setNoCoupons($no_coupons)
    {
        $this->container['no_coupons'] = $no_coupons;

        return $this;
    }

    /**
     * Gets no_free_shipping
     *
     * @return bool
     */
    public function getNoFreeShipping()
    {
        return $this->container['no_free_shipping'];
    }

    /**
     * Sets no_free_shipping
     *
     * @param bool $no_free_shipping No free shipping
     *
     * @return $this
     */
    public function setNoFreeShipping($no_free_shipping)
    {
        $this->container['no_free_shipping'] = $no_free_shipping;

        return $this;
    }

    /**
     * Gets no_realtime_charge
     *
     * @return bool
     */
    public function getNoRealtimeCharge()
    {
        return $this->container['no_realtime_charge'];
    }

    /**
     * Sets no_realtime_charge
     *
     * @param bool $no_realtime_charge No realtime charge
     *
     * @return $this
     */
    public function setNoRealtimeCharge($no_realtime_charge)
    {
        $this->container['no_realtime_charge'] = $no_realtime_charge;

        return $this;
    }

    /**
     * Gets not_valid_when_coupon_present
     *
     * @return bool
     */
    public function getNotValidWhenCouponPresent()
    {
        return $this->container['not_valid_when_coupon_present'];
    }

    /**
     * Sets not_valid_when_coupon_present
     *
     * @param bool $not_valid_when_coupon_present Not valid when coupon present
     *
     * @return $this
     */
    public function setNotValidWhenCouponPresent($not_valid_when_coupon_present)
    {
        $this->container['not_valid_when_coupon_present'] = $not_valid_when_coupon_present;

        return $this;
    }

    /**
     * Gets pricing_tier_oid
     *
     * @return int
     */
    public function getPricingTierOid()
    {
        return $this->container['pricing_tier_oid'];
    }

    /**
     * Sets pricing_tier_oid
     *
     * @param int $pricing_tier_oid Pricing Tier Oid
     *
     * @return $this
     */
    public function setPricingTierOid($pricing_tier_oid)
    {
        $this->container['pricing_tier_oid'] = $pricing_tier_oid;

        return $this;
    }

    /**
     * Gets realtime_percentage_discount
     *
     * @return float
     */
    public function getRealtimePercentageDiscount()
    {
        return $this->container['realtime_percentage_discount'];
    }

    /**
     * Sets realtime_percentage_discount
     *
     * @param float $realtime_percentage_discount Realtime percentage discount
     *
     * @return $this
     */
    public function setRealtimePercentageDiscount($realtime_percentage_discount)
    {
        $this->container['realtime_percentage_discount'] = $realtime_percentage_discount;

        return $this;
    }

    /**
     * Gets signup_notification
     *
     * @return \ultracartv2\models\PricingTierNotification
     */
    public function getSignupNotification()
    {
        return $this->container['signup_notification'];
    }

    /**
     * Sets signup_notification
     *
     * @param \ultracartv2\models\PricingTierNotification $signup_notification signup_notification
     *
     * @return $this
     */
    public function setSignupNotification($signup_notification)
    {
        $this->container['signup_notification'] = $signup_notification;

        return $this;
    }

    /**
     * Gets suppress_buysafe
     *
     * @return bool
     */
    public function getSuppressBuysafe()
    {
        return $this->container['suppress_buysafe'];
    }

    /**
     * Sets suppress_buysafe
     *
     * @param bool $suppress_buysafe Suppress buySAFE
     *
     * @return $this
     */
    public function setSuppressBuysafe($suppress_buysafe)
    {
        $this->container['suppress_buysafe'] = $suppress_buysafe;

        return $this;
    }

    /**
     * Gets suppress_mailing_list
     *
     * @return bool
     */
    public function getSuppressMailingList()
    {
        return $this->container['suppress_mailing_list'];
    }

    /**
     * Sets suppress_mailing_list
     *
     * @param bool $suppress_mailing_list Suppress mailing list
     *
     * @return $this
     */
    public function setSuppressMailingList($suppress_mailing_list)
    {
        $this->container['suppress_mailing_list'] = $suppress_mailing_list;

        return $this;
    }

    /**
     * Gets tax_exempt
     *
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     *
     * @param bool $tax_exempt Tax Exempt
     *
     * @return $this
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

        return $this;
    }

    /**
     * Gets track_separately
     *
     * @return bool
     */
    public function getTrackSeparately()
    {
        return $this->container['track_separately'];
    }

    /**
     * Sets track_separately
     *
     * @param bool $track_separately Track separately
     *
     * @return $this
     */
    public function setTrackSeparately($track_separately)
    {
        $this->container['track_separately'] = $track_separately;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


