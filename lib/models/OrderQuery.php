<?php
/**
 * OrderQuery
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
 * This is the next generation UltraCart REST API...
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
 * OrderQuery Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cc_email' => 'string',
        'channel_partner_code' => 'string',
        'channel_partner_order_id' => 'string',
        'city' => 'string',
        'company' => 'string',
        'country_code' => 'string',
        'creation_date_begin' => 'string',
        'creation_date_end' => 'string',
        'current_stage' => 'string',
        'customer_profile_oid' => 'int',
        'email' => 'string',
        'first_name' => 'string',
        'item_id' => 'string',
        'last_name' => 'string',
        'order_id' => 'string',
        'payment_date_begin' => 'string',
        'payment_date_end' => 'string',
        'payment_method' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'purchase_order_number' => 'string',
        'rma' => 'string',
        'screen_branding_theme_code' => 'string',
        'shipment_date_begin' => 'string',
        'shipment_date_end' => 'string',
        'state_region' => 'string',
        'storefront_host_name' => 'string',
        'total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cc_email' => null,
        'channel_partner_code' => null,
        'channel_partner_order_id' => null,
        'city' => null,
        'company' => null,
        'country_code' => null,
        'creation_date_begin' => 'dateTime',
        'creation_date_end' => 'dateTime',
        'current_stage' => null,
        'customer_profile_oid' => 'int32',
        'email' => null,
        'first_name' => null,
        'item_id' => null,
        'last_name' => null,
        'order_id' => null,
        'payment_date_begin' => 'dateTime',
        'payment_date_end' => 'dateTime',
        'payment_method' => null,
        'phone' => null,
        'postal_code' => null,
        'purchase_order_number' => null,
        'rma' => null,
        'screen_branding_theme_code' => null,
        'shipment_date_begin' => 'dateTime',
        'shipment_date_end' => 'dateTime',
        'state_region' => null,
        'storefront_host_name' => null,
        'total' => null
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
        'cc_email' => 'cc_email',
        'channel_partner_code' => 'channel_partner_code',
        'channel_partner_order_id' => 'channel_partner_order_id',
        'city' => 'city',
        'company' => 'company',
        'country_code' => 'country_code',
        'creation_date_begin' => 'creation_date_begin',
        'creation_date_end' => 'creation_date_end',
        'current_stage' => 'current_stage',
        'customer_profile_oid' => 'customer_profile_oid',
        'email' => 'email',
        'first_name' => 'first_name',
        'item_id' => 'item_id',
        'last_name' => 'last_name',
        'order_id' => 'order_id',
        'payment_date_begin' => 'payment_date_begin',
        'payment_date_end' => 'payment_date_end',
        'payment_method' => 'payment_method',
        'phone' => 'phone',
        'postal_code' => 'postal_code',
        'purchase_order_number' => 'purchase_order_number',
        'rma' => 'rma',
        'screen_branding_theme_code' => 'screen_branding_theme_code',
        'shipment_date_begin' => 'shipment_date_begin',
        'shipment_date_end' => 'shipment_date_end',
        'state_region' => 'state_region',
        'storefront_host_name' => 'storefront_host_name',
        'total' => 'total'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cc_email' => 'setCcEmail',
        'channel_partner_code' => 'setChannelPartnerCode',
        'channel_partner_order_id' => 'setChannelPartnerOrderId',
        'city' => 'setCity',
        'company' => 'setCompany',
        'country_code' => 'setCountryCode',
        'creation_date_begin' => 'setCreationDateBegin',
        'creation_date_end' => 'setCreationDateEnd',
        'current_stage' => 'setCurrentStage',
        'customer_profile_oid' => 'setCustomerProfileOid',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'item_id' => 'setItemId',
        'last_name' => 'setLastName',
        'order_id' => 'setOrderId',
        'payment_date_begin' => 'setPaymentDateBegin',
        'payment_date_end' => 'setPaymentDateEnd',
        'payment_method' => 'setPaymentMethod',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'purchase_order_number' => 'setPurchaseOrderNumber',
        'rma' => 'setRma',
        'screen_branding_theme_code' => 'setScreenBrandingThemeCode',
        'shipment_date_begin' => 'setShipmentDateBegin',
        'shipment_date_end' => 'setShipmentDateEnd',
        'state_region' => 'setStateRegion',
        'storefront_host_name' => 'setStorefrontHostName',
        'total' => 'setTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cc_email' => 'getCcEmail',
        'channel_partner_code' => 'getChannelPartnerCode',
        'channel_partner_order_id' => 'getChannelPartnerOrderId',
        'city' => 'getCity',
        'company' => 'getCompany',
        'country_code' => 'getCountryCode',
        'creation_date_begin' => 'getCreationDateBegin',
        'creation_date_end' => 'getCreationDateEnd',
        'current_stage' => 'getCurrentStage',
        'customer_profile_oid' => 'getCustomerProfileOid',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'item_id' => 'getItemId',
        'last_name' => 'getLastName',
        'order_id' => 'getOrderId',
        'payment_date_begin' => 'getPaymentDateBegin',
        'payment_date_end' => 'getPaymentDateEnd',
        'payment_method' => 'getPaymentMethod',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'purchase_order_number' => 'getPurchaseOrderNumber',
        'rma' => 'getRma',
        'screen_branding_theme_code' => 'getScreenBrandingThemeCode',
        'shipment_date_begin' => 'getShipmentDateBegin',
        'shipment_date_end' => 'getShipmentDateEnd',
        'state_region' => 'getStateRegion',
        'storefront_host_name' => 'getStorefrontHostName',
        'total' => 'getTotal'
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

    const CURRENT_STAGE_ACCOUNTS_RECEIVABLE = 'Accounts Receivable';
    const CURRENT_STAGE_PENDING_CLEARANCE = 'Pending Clearance';
    const CURRENT_STAGE_FRAUD_REVIEW = 'Fraud Review';
    const CURRENT_STAGE_REJECTED = 'Rejected';
    const CURRENT_STAGE_SHIPPING_DEPARTMENT = 'Shipping Department';
    const CURRENT_STAGE_COMPLETED_ORDER = 'Completed Order';
    const CURRENT_STAGE_QUOTE_REQUEST = 'Quote Request';
    const CURRENT_STAGE_QUOTE_SENT = 'Quote Sent';
    const CURRENT_STAGE_LEAST_COST_ROUTING = 'Least Cost Routing';
    const CURRENT_STAGE_UNKNOWN = 'Unknown';
    const PAYMENT_METHOD_AFFIRM = 'Affirm';
    const PAYMENT_METHOD_AMAZON = 'Amazon';
    const PAYMENT_METHOD_AMAZON_SC = 'Amazon SC';
    const PAYMENT_METHOD_CASH = 'Cash';
    const PAYMENT_METHOD_CHECK = 'Check';
    const PAYMENT_METHOD_COD = 'COD';
    const PAYMENT_METHOD_COINBASE = 'Coinbase';
    const PAYMENT_METHOD_CREDIT_CARD = 'Credit Card';
    const PAYMENT_METHOD_E_CHECK = 'eCheck';
    const PAYMENT_METHOD_MONEY_ORDER = 'Money Order';
    const PAYMENT_METHOD_PAY_PAL = 'PayPal';
    const PAYMENT_METHOD_PURCHASE_ORDER = 'Purchase Order';
    const PAYMENT_METHOD_QUOTE_REQUEST = 'Quote Request';
    const PAYMENT_METHOD_UNKNOWN = 'Unknown';
    const PAYMENT_METHOD_WIRE_TRANSFER = 'Wire Transfer';
    

    
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
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_AFFIRM,
            self::PAYMENT_METHOD_AMAZON,
            self::PAYMENT_METHOD_AMAZON_SC,
            self::PAYMENT_METHOD_CASH,
            self::PAYMENT_METHOD_CHECK,
            self::PAYMENT_METHOD_COD,
            self::PAYMENT_METHOD_COINBASE,
            self::PAYMENT_METHOD_CREDIT_CARD,
            self::PAYMENT_METHOD_E_CHECK,
            self::PAYMENT_METHOD_MONEY_ORDER,
            self::PAYMENT_METHOD_PAY_PAL,
            self::PAYMENT_METHOD_PURCHASE_ORDER,
            self::PAYMENT_METHOD_QUOTE_REQUEST,
            self::PAYMENT_METHOD_UNKNOWN,
            self::PAYMENT_METHOD_WIRE_TRANSFER,
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
        $this->container['cc_email'] = isset($data['cc_email']) ? $data['cc_email'] : null;
        $this->container['channel_partner_code'] = isset($data['channel_partner_code']) ? $data['channel_partner_code'] : null;
        $this->container['channel_partner_order_id'] = isset($data['channel_partner_order_id']) ? $data['channel_partner_order_id'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['creation_date_begin'] = isset($data['creation_date_begin']) ? $data['creation_date_begin'] : null;
        $this->container['creation_date_end'] = isset($data['creation_date_end']) ? $data['creation_date_end'] : null;
        $this->container['current_stage'] = isset($data['current_stage']) ? $data['current_stage'] : null;
        $this->container['customer_profile_oid'] = isset($data['customer_profile_oid']) ? $data['customer_profile_oid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['payment_date_begin'] = isset($data['payment_date_begin']) ? $data['payment_date_begin'] : null;
        $this->container['payment_date_end'] = isset($data['payment_date_end']) ? $data['payment_date_end'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['purchase_order_number'] = isset($data['purchase_order_number']) ? $data['purchase_order_number'] : null;
        $this->container['rma'] = isset($data['rma']) ? $data['rma'] : null;
        $this->container['screen_branding_theme_code'] = isset($data['screen_branding_theme_code']) ? $data['screen_branding_theme_code'] : null;
        $this->container['shipment_date_begin'] = isset($data['shipment_date_begin']) ? $data['shipment_date_begin'] : null;
        $this->container['shipment_date_end'] = isset($data['shipment_date_end']) ? $data['shipment_date_end'] : null;
        $this->container['state_region'] = isset($data['state_region']) ? $data['state_region'] : null;
        $this->container['storefront_host_name'] = isset($data['storefront_host_name']) ? $data['storefront_host_name'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['cc_email']) && (strlen($this->container['cc_email']) > 100)) {
            $invalidProperties[] = "invalid value for 'cc_email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 32)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['company']) && (strlen($this->container['company']) > 50)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country_code']) && (strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        $allowedValues = $this->getCurrentStageAllowableValues();
        if (!in_array($this->container['current_stage'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'current_stage', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['email']) && (strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['first_name']) && (strlen($this->container['first_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['last_name']) && (strlen($this->container['last_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 30.";
        }

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!in_array($this->container['payment_method'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['phone']) && (strlen($this->container['phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['postal_code']) && (strlen($this->container['postal_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['rma']) && (strlen($this->container['rma']) > 30)) {
            $invalidProperties[] = "invalid value for 'rma', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['screen_branding_theme_code']) && (strlen($this->container['screen_branding_theme_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'screen_branding_theme_code', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['state_region']) && (strlen($this->container['state_region']) > 32)) {
            $invalidProperties[] = "invalid value for 'state_region', the character length must be smaller than or equal to 32.";
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

        if (strlen($this->container['cc_email']) > 100) {
            return false;
        }
        if (strlen($this->container['city']) > 32) {
            return false;
        }
        if (strlen($this->container['company']) > 50) {
            return false;
        }
        if (strlen($this->container['country_code']) > 2) {
            return false;
        }
        $allowedValues = $this->getCurrentStageAllowableValues();
        if (!in_array($this->container['current_stage'], $allowedValues)) {
            return false;
        }
        if (strlen($this->container['email']) > 100) {
            return false;
        }
        if (strlen($this->container['first_name']) > 30) {
            return false;
        }
        if (strlen($this->container['last_name']) > 30) {
            return false;
        }
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!in_array($this->container['payment_method'], $allowedValues)) {
            return false;
        }
        if (strlen($this->container['phone']) > 25) {
            return false;
        }
        if (strlen($this->container['postal_code']) > 20) {
            return false;
        }
        if (strlen($this->container['rma']) > 30) {
            return false;
        }
        if (strlen($this->container['screen_branding_theme_code']) > 10) {
            return false;
        }
        if (strlen($this->container['state_region']) > 32) {
            return false;
        }
        return true;
    }


    /**
     * Gets cc_email
     *
     * @return string
     */
    public function getCcEmail()
    {
        return $this->container['cc_email'];
    }

    /**
     * Sets cc_email
     *
     * @param string $cc_email CC Email
     *
     * @return $this
     */
    public function setCcEmail($cc_email)
    {
        if (!is_null($cc_email) && (strlen($cc_email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $cc_email when calling OrderQuery., must be smaller than or equal to 100.');
        }

        $this->container['cc_email'] = $cc_email;

        return $this;
    }

    /**
     * Gets channel_partner_code
     *
     * @return string
     */
    public function getChannelPartnerCode()
    {
        return $this->container['channel_partner_code'];
    }

    /**
     * Sets channel_partner_code
     *
     * @param string $channel_partner_code The code of the channel partner
     *
     * @return $this
     */
    public function setChannelPartnerCode($channel_partner_code)
    {
        $this->container['channel_partner_code'] = $channel_partner_code;

        return $this;
    }

    /**
     * Gets channel_partner_order_id
     *
     * @return string
     */
    public function getChannelPartnerOrderId()
    {
        return $this->container['channel_partner_order_id'];
    }

    /**
     * Sets channel_partner_order_id
     *
     * @param string $channel_partner_order_id The order ID assigned by the channel partner for this order
     *
     * @return $this
     */
    public function setChannelPartnerOrderId($channel_partner_order_id)
    {
        $this->container['channel_partner_order_id'] = $channel_partner_order_id;

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
        if (!is_null($city) && (strlen($city) > 32)) {
            throw new \InvalidArgumentException('invalid length for $city when calling OrderQuery., must be smaller than or equal to 32.');
        }

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
        if (!is_null($company) && (strlen($company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $company when calling OrderQuery., must be smaller than or equal to 50.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code ISO-3166 two letter country code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling OrderQuery., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets creation_date_begin
     *
     * @return string
     */
    public function getCreationDateBegin()
    {
        return $this->container['creation_date_begin'];
    }

    /**
     * Sets creation_date_begin
     *
     * @param string $creation_date_begin Date/time that the order was created
     *
     * @return $this
     */
    public function setCreationDateBegin($creation_date_begin)
    {
        $this->container['creation_date_begin'] = $creation_date_begin;

        return $this;
    }

    /**
     * Gets creation_date_end
     *
     * @return string
     */
    public function getCreationDateEnd()
    {
        return $this->container['creation_date_end'];
    }

    /**
     * Sets creation_date_end
     *
     * @param string $creation_date_end Date/time that the order was created
     *
     * @return $this
     */
    public function setCreationDateEnd($creation_date_end)
    {
        $this->container['creation_date_end'] = $creation_date_end;

        return $this;
    }

    /**
     * Gets current_stage
     *
     * @return string
     */
    public function getCurrentStage()
    {
        return $this->container['current_stage'];
    }

    /**
     * Sets current_stage
     *
     * @param string $current_stage Current stage that the order is in.
     *
     * @return $this
     */
    public function setCurrentStage($current_stage)
    {
        $allowedValues = $this->getCurrentStageAllowableValues();
        if (!is_null($current_stage) && !in_array($current_stage, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'current_stage', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['current_stage'] = $current_stage;

        return $this;
    }

    /**
     * Gets customer_profile_oid
     *
     * @return int
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     *
     * @param int $customer_profile_oid The customer profile to find associated orders for
     *
     * @return $this
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling OrderQuery., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (strlen($first_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling OrderQuery., must be smaller than or equal to 30.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id Item ID
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (strlen($last_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling OrderQuery., must be smaller than or equal to 30.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Order ID
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets payment_date_begin
     *
     * @return string
     */
    public function getPaymentDateBegin()
    {
        return $this->container['payment_date_begin'];
    }

    /**
     * Sets payment_date_begin
     *
     * @param string $payment_date_begin Date/time that the order was successfully processed
     *
     * @return $this
     */
    public function setPaymentDateBegin($payment_date_begin)
    {
        $this->container['payment_date_begin'] = $payment_date_begin;

        return $this;
    }

    /**
     * Gets payment_date_end
     *
     * @return string
     */
    public function getPaymentDateEnd()
    {
        return $this->container['payment_date_end'];
    }

    /**
     * Sets payment_date_end
     *
     * @param string $payment_date_end Date/time that the order was successfully processed
     *
     * @return $this
     */
    public function setPaymentDateEnd($payment_date_end)
    {
        $this->container['payment_date_end'] = $payment_date_end;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Payment method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (strlen($phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling OrderQuery., must be smaller than or equal to 25.');
        }

        $this->container['phone'] = $phone;

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
        if (!is_null($postal_code) && (strlen($postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling OrderQuery., must be smaller than or equal to 20.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets purchase_order_number
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->container['purchase_order_number'];
    }

    /**
     * Sets purchase_order_number
     *
     * @param string $purchase_order_number Purchase order number
     *
     * @return $this
     */
    public function setPurchaseOrderNumber($purchase_order_number)
    {
        $this->container['purchase_order_number'] = $purchase_order_number;

        return $this;
    }

    /**
     * Gets rma
     *
     * @return string
     */
    public function getRma()
    {
        return $this->container['rma'];
    }

    /**
     * Sets rma
     *
     * @param string $rma RMA number
     *
     * @return $this
     */
    public function setRma($rma)
    {
        if (!is_null($rma) && (strlen($rma) > 30)) {
            throw new \InvalidArgumentException('invalid length for $rma when calling OrderQuery., must be smaller than or equal to 30.');
        }

        $this->container['rma'] = $rma;

        return $this;
    }

    /**
     * Gets screen_branding_theme_code
     *
     * @return string
     */
    public function getScreenBrandingThemeCode()
    {
        return $this->container['screen_branding_theme_code'];
    }

    /**
     * Sets screen_branding_theme_code
     *
     * @param string $screen_branding_theme_code Screen branding theme code associated with the order (legacy checkout)
     *
     * @return $this
     */
    public function setScreenBrandingThemeCode($screen_branding_theme_code)
    {
        if (!is_null($screen_branding_theme_code) && (strlen($screen_branding_theme_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $screen_branding_theme_code when calling OrderQuery., must be smaller than or equal to 10.');
        }

        $this->container['screen_branding_theme_code'] = $screen_branding_theme_code;

        return $this;
    }

    /**
     * Gets shipment_date_begin
     *
     * @return string
     */
    public function getShipmentDateBegin()
    {
        return $this->container['shipment_date_begin'];
    }

    /**
     * Sets shipment_date_begin
     *
     * @param string $shipment_date_begin Date/time that the order was shipping
     *
     * @return $this
     */
    public function setShipmentDateBegin($shipment_date_begin)
    {
        $this->container['shipment_date_begin'] = $shipment_date_begin;

        return $this;
    }

    /**
     * Gets shipment_date_end
     *
     * @return string
     */
    public function getShipmentDateEnd()
    {
        return $this->container['shipment_date_end'];
    }

    /**
     * Sets shipment_date_end
     *
     * @param string $shipment_date_end Date/time that the order was shipped
     *
     * @return $this
     */
    public function setShipmentDateEnd($shipment_date_end)
    {
        $this->container['shipment_date_end'] = $shipment_date_end;

        return $this;
    }

    /**
     * Gets state_region
     *
     * @return string
     */
    public function getStateRegion()
    {
        return $this->container['state_region'];
    }

    /**
     * Sets state_region
     *
     * @param string $state_region State for United States otherwise region or province for other countries
     *
     * @return $this
     */
    public function setStateRegion($state_region)
    {
        if (!is_null($state_region) && (strlen($state_region) > 32)) {
            throw new \InvalidArgumentException('invalid length for $state_region when calling OrderQuery., must be smaller than or equal to 32.');
        }

        $this->container['state_region'] = $state_region;

        return $this;
    }

    /**
     * Gets storefront_host_name
     *
     * @return string
     */
    public function getStorefrontHostName()
    {
        return $this->container['storefront_host_name'];
    }

    /**
     * Sets storefront_host_name
     *
     * @param string $storefront_host_name StoreFront host name associated with the order
     *
     * @return $this
     */
    public function setStorefrontHostName($storefront_host_name)
    {
        $this->container['storefront_host_name'] = $storefront_host_name;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total Total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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


