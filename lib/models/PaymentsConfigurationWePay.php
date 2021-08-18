<?php
/**
 * PaymentsConfigurationWePay
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
 * Swagger Codegen version: 2.4.15-SNAPSHOT
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
 * PaymentsConfigurationWePay Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsConfigurationWePay implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsConfigurationWePay';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_wepay' => 'bool',
        'account_update_uri' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'canada_accept_debit_cards' => 'bool',
        'city' => 'string',
        'company' => 'string',
        'company_description' => 'string',
        'console_hostname' => 'string',
        'country' => 'string',
        'credit_card_rate' => 'string',
        'currency' => 'string',
        'expected_revenue' => 'string',
        'hide_credit_card_non_ultracart_payments' => 'bool',
        'hide_surcharge_amount' => 'bool',
        'industry' => 'string',
        'owner_email' => 'string',
        'owner_name' => 'string',
        'owner_phone' => 'string',
        'postal_code' => 'string',
        'remove_pay_pal_pro' => 'bool',
        'restrictions' => '\ultracart\v2\models\PaymentsConfigurationRestrictions',
        'short_paypal_marketing_text' => 'bool',
        'show_ultracart_payments_disabled' => 'bool',
        'show_ultracart_payments_intro' => 'bool',
        'show_ultracart_payments_verification' => 'bool',
        'show_ultracart_payments_verified' => 'bool',
        'state' => 'string',
        'website_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_wepay' => null,
        'account_update_uri' => null,
        'address1' => null,
        'address2' => null,
        'canada_accept_debit_cards' => null,
        'city' => null,
        'company' => null,
        'company_description' => null,
        'console_hostname' => null,
        'country' => null,
        'credit_card_rate' => null,
        'currency' => null,
        'expected_revenue' => null,
        'hide_credit_card_non_ultracart_payments' => null,
        'hide_surcharge_amount' => null,
        'industry' => null,
        'owner_email' => null,
        'owner_name' => null,
        'owner_phone' => null,
        'postal_code' => null,
        'remove_pay_pal_pro' => null,
        'restrictions' => null,
        'short_paypal_marketing_text' => null,
        'show_ultracart_payments_disabled' => null,
        'show_ultracart_payments_intro' => null,
        'show_ultracart_payments_verification' => null,
        'show_ultracart_payments_verified' => null,
        'state' => null,
        'website_url' => null
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
        'accept_wepay' => 'accept_wepay',
        'account_update_uri' => 'account_update_uri',
        'address1' => 'address1',
        'address2' => 'address2',
        'canada_accept_debit_cards' => 'canada_accept_debit_cards',
        'city' => 'city',
        'company' => 'company',
        'company_description' => 'company_description',
        'console_hostname' => 'console_hostname',
        'country' => 'country',
        'credit_card_rate' => 'credit_card_rate',
        'currency' => 'currency',
        'expected_revenue' => 'expected_revenue',
        'hide_credit_card_non_ultracart_payments' => 'hide_credit_card_non_ultracart_payments',
        'hide_surcharge_amount' => 'hide_surcharge_amount',
        'industry' => 'industry',
        'owner_email' => 'owner_email',
        'owner_name' => 'owner_name',
        'owner_phone' => 'owner_phone',
        'postal_code' => 'postal_code',
        'remove_pay_pal_pro' => 'removePayPalPro',
        'restrictions' => 'restrictions',
        'short_paypal_marketing_text' => 'short_paypal_marketing_text',
        'show_ultracart_payments_disabled' => 'show_ultracart_payments_disabled',
        'show_ultracart_payments_intro' => 'show_ultracart_payments_intro',
        'show_ultracart_payments_verification' => 'show_ultracart_payments_verification',
        'show_ultracart_payments_verified' => 'show_ultracart_payments_verified',
        'state' => 'state',
        'website_url' => 'website_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_wepay' => 'setAcceptWepay',
        'account_update_uri' => 'setAccountUpdateUri',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'canada_accept_debit_cards' => 'setCanadaAcceptDebitCards',
        'city' => 'setCity',
        'company' => 'setCompany',
        'company_description' => 'setCompanyDescription',
        'console_hostname' => 'setConsoleHostname',
        'country' => 'setCountry',
        'credit_card_rate' => 'setCreditCardRate',
        'currency' => 'setCurrency',
        'expected_revenue' => 'setExpectedRevenue',
        'hide_credit_card_non_ultracart_payments' => 'setHideCreditCardNonUltracartPayments',
        'hide_surcharge_amount' => 'setHideSurchargeAmount',
        'industry' => 'setIndustry',
        'owner_email' => 'setOwnerEmail',
        'owner_name' => 'setOwnerName',
        'owner_phone' => 'setOwnerPhone',
        'postal_code' => 'setPostalCode',
        'remove_pay_pal_pro' => 'setRemovePayPalPro',
        'restrictions' => 'setRestrictions',
        'short_paypal_marketing_text' => 'setShortPaypalMarketingText',
        'show_ultracart_payments_disabled' => 'setShowUltracartPaymentsDisabled',
        'show_ultracart_payments_intro' => 'setShowUltracartPaymentsIntro',
        'show_ultracart_payments_verification' => 'setShowUltracartPaymentsVerification',
        'show_ultracart_payments_verified' => 'setShowUltracartPaymentsVerified',
        'state' => 'setState',
        'website_url' => 'setWebsiteUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_wepay' => 'getAcceptWepay',
        'account_update_uri' => 'getAccountUpdateUri',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'canada_accept_debit_cards' => 'getCanadaAcceptDebitCards',
        'city' => 'getCity',
        'company' => 'getCompany',
        'company_description' => 'getCompanyDescription',
        'console_hostname' => 'getConsoleHostname',
        'country' => 'getCountry',
        'credit_card_rate' => 'getCreditCardRate',
        'currency' => 'getCurrency',
        'expected_revenue' => 'getExpectedRevenue',
        'hide_credit_card_non_ultracart_payments' => 'getHideCreditCardNonUltracartPayments',
        'hide_surcharge_amount' => 'getHideSurchargeAmount',
        'industry' => 'getIndustry',
        'owner_email' => 'getOwnerEmail',
        'owner_name' => 'getOwnerName',
        'owner_phone' => 'getOwnerPhone',
        'postal_code' => 'getPostalCode',
        'remove_pay_pal_pro' => 'getRemovePayPalPro',
        'restrictions' => 'getRestrictions',
        'short_paypal_marketing_text' => 'getShortPaypalMarketingText',
        'show_ultracart_payments_disabled' => 'getShowUltracartPaymentsDisabled',
        'show_ultracart_payments_intro' => 'getShowUltracartPaymentsIntro',
        'show_ultracart_payments_verification' => 'getShowUltracartPaymentsVerification',
        'show_ultracart_payments_verified' => 'getShowUltracartPaymentsVerified',
        'state' => 'getState',
        'website_url' => 'getWebsiteUrl'
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
        $this->container['accept_wepay'] = isset($data['accept_wepay']) ? $data['accept_wepay'] : null;
        $this->container['account_update_uri'] = isset($data['account_update_uri']) ? $data['account_update_uri'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['canada_accept_debit_cards'] = isset($data['canada_accept_debit_cards']) ? $data['canada_accept_debit_cards'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['company_description'] = isset($data['company_description']) ? $data['company_description'] : null;
        $this->container['console_hostname'] = isset($data['console_hostname']) ? $data['console_hostname'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['credit_card_rate'] = isset($data['credit_card_rate']) ? $data['credit_card_rate'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['expected_revenue'] = isset($data['expected_revenue']) ? $data['expected_revenue'] : null;
        $this->container['hide_credit_card_non_ultracart_payments'] = isset($data['hide_credit_card_non_ultracart_payments']) ? $data['hide_credit_card_non_ultracart_payments'] : null;
        $this->container['hide_surcharge_amount'] = isset($data['hide_surcharge_amount']) ? $data['hide_surcharge_amount'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['owner_email'] = isset($data['owner_email']) ? $data['owner_email'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
        $this->container['owner_phone'] = isset($data['owner_phone']) ? $data['owner_phone'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['remove_pay_pal_pro'] = isset($data['remove_pay_pal_pro']) ? $data['remove_pay_pal_pro'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['short_paypal_marketing_text'] = isset($data['short_paypal_marketing_text']) ? $data['short_paypal_marketing_text'] : null;
        $this->container['show_ultracart_payments_disabled'] = isset($data['show_ultracart_payments_disabled']) ? $data['show_ultracart_payments_disabled'] : null;
        $this->container['show_ultracart_payments_intro'] = isset($data['show_ultracart_payments_intro']) ? $data['show_ultracart_payments_intro'] : null;
        $this->container['show_ultracart_payments_verification'] = isset($data['show_ultracart_payments_verification']) ? $data['show_ultracart_payments_verification'] : null;
        $this->container['show_ultracart_payments_verified'] = isset($data['show_ultracart_payments_verified']) ? $data['show_ultracart_payments_verified'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
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
     * Gets accept_wepay
     *
     * @return bool
     */
    public function getAcceptWepay()
    {
        return $this->container['accept_wepay'];
    }

    /**
     * Sets accept_wepay
     *
     * @param bool $accept_wepay Master flag indicating this merchant accepts UltraCart Payments WePay
     *
     * @return $this
     */
    public function setAcceptWepay($accept_wepay)
    {
        $this->container['accept_wepay'] = $accept_wepay;

        return $this;
    }

    /**
     * Gets account_update_uri
     *
     * @return string
     */
    public function getAccountUpdateUri()
    {
        return $this->container['account_update_uri'];
    }

    /**
     * Sets account_update_uri
     *
     * @param string $account_update_uri URI for updating the WePay account
     *
     * @return $this
     */
    public function setAccountUpdateUri($account_update_uri)
    {
        $this->container['account_update_uri'] = $account_update_uri;

        return $this;
    }

    /**
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 Address line 1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 Address line 2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets canada_accept_debit_cards
     *
     * @return bool
     */
    public function getCanadaAcceptDebitCards()
    {
        return $this->container['canada_accept_debit_cards'];
    }

    /**
     * Sets canada_accept_debit_cards
     *
     * @param bool $canada_accept_debit_cards For Canadian merchants, true if they wish to accept debit cards
     *
     * @return $this
     */
    public function setCanadaAcceptDebitCards($canada_accept_debit_cards)
    {
        $this->container['canada_accept_debit_cards'] = $canada_accept_debit_cards;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company_description
     *
     * @return string
     */
    public function getCompanyDescription()
    {
        return $this->container['company_description'];
    }

    /**
     * Sets company_description
     *
     * @param string $company_description Company description
     *
     * @return $this
     */
    public function setCompanyDescription($company_description)
    {
        $this->container['company_description'] = $company_description;

        return $this;
    }

    /**
     * Gets console_hostname
     *
     * @return string
     */
    public function getConsoleHostname()
    {
        return $this->container['console_hostname'];
    }

    /**
     * Sets console_hostname
     *
     * @param string $console_hostname Console hostname
     *
     * @return $this
     */
    public function setConsoleHostname($console_hostname)
    {
        $this->container['console_hostname'] = $console_hostname;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets credit_card_rate
     *
     * @return string
     */
    public function getCreditCardRate()
    {
        return $this->container['credit_card_rate'];
    }

    /**
     * Sets credit_card_rate
     *
     * @param string $credit_card_rate WePay credit card rate
     *
     * @return $this
     */
    public function setCreditCardRate($credit_card_rate)
    {
        $this->container['credit_card_rate'] = $credit_card_rate;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Base currency for transactions
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets expected_revenue
     *
     * @return string
     */
    public function getExpectedRevenue()
    {
        return $this->container['expected_revenue'];
    }

    /**
     * Sets expected_revenue
     *
     * @param string $expected_revenue Expected Revenue
     *
     * @return $this
     */
    public function setExpectedRevenue($expected_revenue)
    {
        $this->container['expected_revenue'] = $expected_revenue;

        return $this;
    }

    /**
     * Gets hide_credit_card_non_ultracart_payments
     *
     * @return bool
     */
    public function getHideCreditCardNonUltracartPayments()
    {
        return $this->container['hide_credit_card_non_ultracart_payments'];
    }

    /**
     * Sets hide_credit_card_non_ultracart_payments
     *
     * @param bool $hide_credit_card_non_ultracart_payments Internal flag to aid UI
     *
     * @return $this
     */
    public function setHideCreditCardNonUltracartPayments($hide_credit_card_non_ultracart_payments)
    {
        $this->container['hide_credit_card_non_ultracart_payments'] = $hide_credit_card_non_ultracart_payments;

        return $this;
    }

    /**
     * Gets hide_surcharge_amount
     *
     * @return bool
     */
    public function getHideSurchargeAmount()
    {
        return $this->container['hide_surcharge_amount'];
    }

    /**
     * Sets hide_surcharge_amount
     *
     * @param bool $hide_surcharge_amount Internal flag to aid UI
     *
     * @return $this
     */
    public function setHideSurchargeAmount($hide_surcharge_amount)
    {
        $this->container['hide_surcharge_amount'] = $hide_surcharge_amount;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry Industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets owner_email
     *
     * @return string
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param string $owner_email Owner email
     *
     * @return $this
     */
    public function setOwnerEmail($owner_email)
    {
        $this->container['owner_email'] = $owner_email;

        return $this;
    }

    /**
     * Gets owner_name
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param string $owner_name Owner name
     *
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets owner_phone
     *
     * @return string
     */
    public function getOwnerPhone()
    {
        return $this->container['owner_phone'];
    }

    /**
     * Sets owner_phone
     *
     * @param string $owner_phone Owner phone
     *
     * @return $this
     */
    public function setOwnerPhone($owner_phone)
    {
        $this->container['owner_phone'] = $owner_phone;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code Postal code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets remove_pay_pal_pro
     *
     * @return bool
     */
    public function getRemovePayPalPro()
    {
        return $this->container['remove_pay_pal_pro'];
    }

    /**
     * Sets remove_pay_pal_pro
     *
     * @param bool $remove_pay_pal_pro remove_pay_pal_pro
     *
     * @return $this
     */
    public function setRemovePayPalPro($remove_pay_pal_pro)
    {
        $this->container['remove_pay_pal_pro'] = $remove_pay_pal_pro;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \ultracart\v2\models\PaymentsConfigurationRestrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \ultracart\v2\models\PaymentsConfigurationRestrictions $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets short_paypal_marketing_text
     *
     * @return bool
     */
    public function getShortPaypalMarketingText()
    {
        return $this->container['short_paypal_marketing_text'];
    }

    /**
     * Sets short_paypal_marketing_text
     *
     * @param bool $short_paypal_marketing_text Internal UI aid
     *
     * @return $this
     */
    public function setShortPaypalMarketingText($short_paypal_marketing_text)
    {
        $this->container['short_paypal_marketing_text'] = $short_paypal_marketing_text;

        return $this;
    }

    /**
     * Gets show_ultracart_payments_disabled
     *
     * @return bool
     */
    public function getShowUltracartPaymentsDisabled()
    {
        return $this->container['show_ultracart_payments_disabled'];
    }

    /**
     * Sets show_ultracart_payments_disabled
     *
     * @param bool $show_ultracart_payments_disabled Internal flag to aid UI
     *
     * @return $this
     */
    public function setShowUltracartPaymentsDisabled($show_ultracart_payments_disabled)
    {
        $this->container['show_ultracart_payments_disabled'] = $show_ultracart_payments_disabled;

        return $this;
    }

    /**
     * Gets show_ultracart_payments_intro
     *
     * @return bool
     */
    public function getShowUltracartPaymentsIntro()
    {
        return $this->container['show_ultracart_payments_intro'];
    }

    /**
     * Sets show_ultracart_payments_intro
     *
     * @param bool $show_ultracart_payments_intro Internal flag to aid UI
     *
     * @return $this
     */
    public function setShowUltracartPaymentsIntro($show_ultracart_payments_intro)
    {
        $this->container['show_ultracart_payments_intro'] = $show_ultracart_payments_intro;

        return $this;
    }

    /**
     * Gets show_ultracart_payments_verification
     *
     * @return bool
     */
    public function getShowUltracartPaymentsVerification()
    {
        return $this->container['show_ultracart_payments_verification'];
    }

    /**
     * Sets show_ultracart_payments_verification
     *
     * @param bool $show_ultracart_payments_verification Internal flag to aid UI
     *
     * @return $this
     */
    public function setShowUltracartPaymentsVerification($show_ultracart_payments_verification)
    {
        $this->container['show_ultracart_payments_verification'] = $show_ultracart_payments_verification;

        return $this;
    }

    /**
     * Gets show_ultracart_payments_verified
     *
     * @return bool
     */
    public function getShowUltracartPaymentsVerified()
    {
        return $this->container['show_ultracart_payments_verified'];
    }

    /**
     * Sets show_ultracart_payments_verified
     *
     * @param bool $show_ultracart_payments_verified Internal flag to aid UI
     *
     * @return $this
     */
    public function setShowUltracartPaymentsVerified($show_ultracart_payments_verified)
    {
        $this->container['show_ultracart_payments_verified'] = $show_ultracart_payments_verified;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets website_url
     *
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     *
     * @param string $website_url Website URL
     *
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

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


