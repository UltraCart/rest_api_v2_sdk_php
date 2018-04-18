<?php
/**
 * Cart
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * Cart Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Cart implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate' => '\ultracart\v2\models\CartAffiliate',
        'base_currency_code' => 'string',
        'billing' => '\ultracart\v2\models\CartBilling',
        'buysafe' => '\ultracart\v2\models\CartBuysafe',
        'cart_id' => 'string',
        'checkout' => '\ultracart\v2\models\CartCheckout',
        'coupons' => '\ultracart\v2\models\CartCoupon[]',
        'currency_code' => 'string',
        'customer_profile' => '\ultracart\v2\models\CartCustomerProfile',
        'exchange_rate' => 'float',
        'gift' => '\ultracart\v2\models\CartGift',
        'gift_certificate' => '\ultracart\v2\models\CartGiftCertificate',
        'items' => '\ultracart\v2\models\CartItem[]',
        'language_iso_code' => 'string',
        'logged_in' => 'bool',
        'marketing' => '\ultracart\v2\models\CartMarketing',
        'merchant_id' => 'string',
        'payment' => '\ultracart\v2\models\CartPayment',
        'settings' => '\ultracart\v2\models\CartSettings',
        'shipping' => '\ultracart\v2\models\CartShipping',
        'summary' => '\ultracart\v2\models\CartSummary',
        'taxes' => '\ultracart\v2\models\CartTaxes',
        'upsell_after' => '\ultracart\v2\models\CartUpsellAfter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate' => null,
        'base_currency_code' => null,
        'billing' => null,
        'buysafe' => null,
        'cart_id' => null,
        'checkout' => null,
        'coupons' => null,
        'currency_code' => null,
        'customer_profile' => null,
        'exchange_rate' => null,
        'gift' => null,
        'gift_certificate' => null,
        'items' => null,
        'language_iso_code' => null,
        'logged_in' => null,
        'marketing' => null,
        'merchant_id' => null,
        'payment' => null,
        'settings' => null,
        'shipping' => null,
        'summary' => null,
        'taxes' => null,
        'upsell_after' => null
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
        'affiliate' => 'affiliate',
        'base_currency_code' => 'base_currency_code',
        'billing' => 'billing',
        'buysafe' => 'buysafe',
        'cart_id' => 'cart_id',
        'checkout' => 'checkout',
        'coupons' => 'coupons',
        'currency_code' => 'currency_code',
        'customer_profile' => 'customer_profile',
        'exchange_rate' => 'exchange_rate',
        'gift' => 'gift',
        'gift_certificate' => 'gift_certificate',
        'items' => 'items',
        'language_iso_code' => 'language_iso_code',
        'logged_in' => 'logged_in',
        'marketing' => 'marketing',
        'merchant_id' => 'merchant_id',
        'payment' => 'payment',
        'settings' => 'settings',
        'shipping' => 'shipping',
        'summary' => 'summary',
        'taxes' => 'taxes',
        'upsell_after' => 'upsell_after'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliate' => 'setAffiliate',
        'base_currency_code' => 'setBaseCurrencyCode',
        'billing' => 'setBilling',
        'buysafe' => 'setBuysafe',
        'cart_id' => 'setCartId',
        'checkout' => 'setCheckout',
        'coupons' => 'setCoupons',
        'currency_code' => 'setCurrencyCode',
        'customer_profile' => 'setCustomerProfile',
        'exchange_rate' => 'setExchangeRate',
        'gift' => 'setGift',
        'gift_certificate' => 'setGiftCertificate',
        'items' => 'setItems',
        'language_iso_code' => 'setLanguageIsoCode',
        'logged_in' => 'setLoggedIn',
        'marketing' => 'setMarketing',
        'merchant_id' => 'setMerchantId',
        'payment' => 'setPayment',
        'settings' => 'setSettings',
        'shipping' => 'setShipping',
        'summary' => 'setSummary',
        'taxes' => 'setTaxes',
        'upsell_after' => 'setUpsellAfter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliate' => 'getAffiliate',
        'base_currency_code' => 'getBaseCurrencyCode',
        'billing' => 'getBilling',
        'buysafe' => 'getBuysafe',
        'cart_id' => 'getCartId',
        'checkout' => 'getCheckout',
        'coupons' => 'getCoupons',
        'currency_code' => 'getCurrencyCode',
        'customer_profile' => 'getCustomerProfile',
        'exchange_rate' => 'getExchangeRate',
        'gift' => 'getGift',
        'gift_certificate' => 'getGiftCertificate',
        'items' => 'getItems',
        'language_iso_code' => 'getLanguageIsoCode',
        'logged_in' => 'getLoggedIn',
        'marketing' => 'getMarketing',
        'merchant_id' => 'getMerchantId',
        'payment' => 'getPayment',
        'settings' => 'getSettings',
        'shipping' => 'getShipping',
        'summary' => 'getSummary',
        'taxes' => 'getTaxes',
        'upsell_after' => 'getUpsellAfter'
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
        $this->container['affiliate'] = isset($data['affiliate']) ? $data['affiliate'] : null;
        $this->container['base_currency_code'] = isset($data['base_currency_code']) ? $data['base_currency_code'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['buysafe'] = isset($data['buysafe']) ? $data['buysafe'] : null;
        $this->container['cart_id'] = isset($data['cart_id']) ? $data['cart_id'] : null;
        $this->container['checkout'] = isset($data['checkout']) ? $data['checkout'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['customer_profile'] = isset($data['customer_profile']) ? $data['customer_profile'] : null;
        $this->container['exchange_rate'] = isset($data['exchange_rate']) ? $data['exchange_rate'] : null;
        $this->container['gift'] = isset($data['gift']) ? $data['gift'] : null;
        $this->container['gift_certificate'] = isset($data['gift_certificate']) ? $data['gift_certificate'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['language_iso_code'] = isset($data['language_iso_code']) ? $data['language_iso_code'] : null;
        $this->container['logged_in'] = isset($data['logged_in']) ? $data['logged_in'] : null;
        $this->container['marketing'] = isset($data['marketing']) ? $data['marketing'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['settings'] = isset($data['settings']) ? $data['settings'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['upsell_after'] = isset($data['upsell_after']) ? $data['upsell_after'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['base_currency_code']) && (strlen($this->container['base_currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'base_currency_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency_code']) && (strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['language_iso_code']) && (strlen($this->container['language_iso_code']) > 3)) {
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

        if (strlen($this->container['base_currency_code']) > 3) {
            return false;
        }
        if (strlen($this->container['currency_code']) > 3) {
            return false;
        }
        if (strlen($this->container['language_iso_code']) > 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets affiliate
     *
     * @return \ultracart\v2\models\CartAffiliate
     */
    public function getAffiliate()
    {
        return $this->container['affiliate'];
    }

    /**
     * Sets affiliate
     *
     * @param \ultracart\v2\models\CartAffiliate $affiliate affiliate
     *
     * @return $this
     */
    public function setAffiliate($affiliate)
    {
        $this->container['affiliate'] = $affiliate;

        return $this;
    }

    /**
     * Gets base_currency_code
     *
     * @return string
     */
    public function getBaseCurrencyCode()
    {
        return $this->container['base_currency_code'];
    }

    /**
     * Sets base_currency_code
     *
     * @param string $base_currency_code The ISO-4217 three letter base currency code of the account
     *
     * @return $this
     */
    public function setBaseCurrencyCode($base_currency_code)
    {
        if (!is_null($base_currency_code) && (strlen($base_currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $base_currency_code when calling Cart., must be smaller than or equal to 3.');
        }

        $this->container['base_currency_code'] = $base_currency_code;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \ultracart\v2\models\CartBilling
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \ultracart\v2\models\CartBilling $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets buysafe
     *
     * @return \ultracart\v2\models\CartBuysafe
     */
    public function getBuysafe()
    {
        return $this->container['buysafe'];
    }

    /**
     * Sets buysafe
     *
     * @param \ultracart\v2\models\CartBuysafe $buysafe buysafe
     *
     * @return $this
     */
    public function setBuysafe($buysafe)
    {
        $this->container['buysafe'] = $buysafe;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string $cart_id Unique identifier for this cart
     *
     * @return $this
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets checkout
     *
     * @return \ultracart\v2\models\CartCheckout
     */
    public function getCheckout()
    {
        return $this->container['checkout'];
    }

    /**
     * Sets checkout
     *
     * @param \ultracart\v2\models\CartCheckout $checkout checkout
     *
     * @return $this
     */
    public function setCheckout($checkout)
    {
        $this->container['checkout'] = $checkout;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return \ultracart\v2\models\CartCoupon[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param \ultracart\v2\models\CartCoupon[] $coupons Coupons
     *
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code The ISO-4217 three letter currency code the customer is viewing prices in
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        if (!is_null($currency_code) && (strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling Cart., must be smaller than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets customer_profile
     *
     * @return \ultracart\v2\models\CartCustomerProfile
     */
    public function getCustomerProfile()
    {
        return $this->container['customer_profile'];
    }

    /**
     * Sets customer_profile
     *
     * @param \ultracart\v2\models\CartCustomerProfile $customer_profile customer_profile
     *
     * @return $this
     */
    public function setCustomerProfile($customer_profile)
    {
        $this->container['customer_profile'] = $customer_profile;

        return $this;
    }

    /**
     * Gets exchange_rate
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->container['exchange_rate'];
    }

    /**
     * Sets exchange_rate
     *
     * @param float $exchange_rate The exchange rate if the customer is viewing a different currency than the base
     *
     * @return $this
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->container['exchange_rate'] = $exchange_rate;

        return $this;
    }

    /**
     * Gets gift
     *
     * @return \ultracart\v2\models\CartGift
     */
    public function getGift()
    {
        return $this->container['gift'];
    }

    /**
     * Sets gift
     *
     * @param \ultracart\v2\models\CartGift $gift gift
     *
     * @return $this
     */
    public function setGift($gift)
    {
        $this->container['gift'] = $gift;

        return $this;
    }

    /**
     * Gets gift_certificate
     *
     * @return \ultracart\v2\models\CartGiftCertificate
     */
    public function getGiftCertificate()
    {
        return $this->container['gift_certificate'];
    }

    /**
     * Sets gift_certificate
     *
     * @param \ultracart\v2\models\CartGiftCertificate $gift_certificate gift_certificate
     *
     * @return $this
     */
    public function setGiftCertificate($gift_certificate)
    {
        $this->container['gift_certificate'] = $gift_certificate;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ultracart\v2\models\CartItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ultracart\v2\models\CartItem[] $items Items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets language_iso_code
     *
     * @return string
     */
    public function getLanguageIsoCode()
    {
        return $this->container['language_iso_code'];
    }

    /**
     * Sets language_iso_code
     *
     * @param string $language_iso_code The ISO-631 three letter code the customer would like to checkout with
     *
     * @return $this
     */
    public function setLanguageIsoCode($language_iso_code)
    {
        if (!is_null($language_iso_code) && (strlen($language_iso_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $language_iso_code when calling Cart., must be smaller than or equal to 3.');
        }

        $this->container['language_iso_code'] = $language_iso_code;

        return $this;
    }

    /**
     * Gets logged_in
     *
     * @return bool
     */
    public function getLoggedIn()
    {
        return $this->container['logged_in'];
    }

    /**
     * Sets logged_in
     *
     * @param bool $logged_in True if the customer is logged into their profile
     *
     * @return $this
     */
    public function setLoggedIn($logged_in)
    {
        $this->container['logged_in'] = $logged_in;

        return $this;
    }

    /**
     * Gets marketing
     *
     * @return \ultracart\v2\models\CartMarketing
     */
    public function getMarketing()
    {
        return $this->container['marketing'];
    }

    /**
     * Sets marketing
     *
     * @param \ultracart\v2\models\CartMarketing $marketing marketing
     *
     * @return $this
     */
    public function setMarketing($marketing)
    {
        $this->container['marketing'] = $marketing;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Merchant ID this cart is associated with
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \ultracart\v2\models\CartPayment
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \ultracart\v2\models\CartPayment $payment payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return \ultracart\v2\models\CartSettings
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param \ultracart\v2\models\CartSettings $settings settings
     *
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \ultracart\v2\models\CartShipping
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \ultracart\v2\models\CartShipping $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets summary
     *
     * @return \ultracart\v2\models\CartSummary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \ultracart\v2\models\CartSummary $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \ultracart\v2\models\CartTaxes
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \ultracart\v2\models\CartTaxes $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets upsell_after
     *
     * @return \ultracart\v2\models\CartUpsellAfter
     */
    public function getUpsellAfter()
    {
        return $this->container['upsell_after'];
    }

    /**
     * Sets upsell_after
     *
     * @param \ultracart\v2\models\CartUpsellAfter $upsell_after upsell_after
     *
     * @return $this
     */
    public function setUpsellAfter($upsell_after)
    {
        $this->container['upsell_after'] = $upsell_after;

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


