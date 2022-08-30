<?php
/**
 * EmailCampaign
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
 * EmailCampaign Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'click_rate_formatted' => 'string',
        'created_dts' => 'string',
        'deleted' => 'bool',
        'email_campaign_uuid' => 'string',
        'email_communication_sequence_uuid' => 'string',
        'end_once_customer_purchases' => 'bool',
        'end_once_customer_purchases_anywhere' => 'bool',
        'esp_campaign_folder_uuid' => 'string',
        'esp_domain_user' => 'string',
        'esp_domain_uuid' => 'string',
        'esp_friendly_name' => 'string',
        'library_item_oid' => 'int',
        'memberships' => '\ultracart\v2\models\EmailListSegmentMembership[]',
        'merchant_id' => 'string',
        'name' => 'string',
        'open_rate_formatted' => 'string',
        'prevent_sending_due_to_spam' => 'bool',
        'revenue_formatted' => 'string',
        'revenue_per_customer_formatted' => 'string',
        'scheduled_dts' => 'string',
        'screenshot_large_full_url' => 'string',
        'sms_esp_twilio_uuid' => 'string',
        'sms_phone_number' => 'string',
        'status' => 'string',
        'status_dts' => 'string',
        'storefront_oid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'click_rate_formatted' => null,
        'created_dts' => 'dateTime',
        'deleted' => null,
        'email_campaign_uuid' => null,
        'email_communication_sequence_uuid' => null,
        'end_once_customer_purchases' => null,
        'end_once_customer_purchases_anywhere' => null,
        'esp_campaign_folder_uuid' => null,
        'esp_domain_user' => null,
        'esp_domain_uuid' => null,
        'esp_friendly_name' => null,
        'library_item_oid' => 'int32',
        'memberships' => null,
        'merchant_id' => null,
        'name' => null,
        'open_rate_formatted' => null,
        'prevent_sending_due_to_spam' => null,
        'revenue_formatted' => null,
        'revenue_per_customer_formatted' => null,
        'scheduled_dts' => 'dateTime',
        'screenshot_large_full_url' => null,
        'sms_esp_twilio_uuid' => null,
        'sms_phone_number' => null,
        'status' => null,
        'status_dts' => 'dateTime',
        'storefront_oid' => 'int32'
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
        'click_rate_formatted' => 'click_rate_formatted',
        'created_dts' => 'created_dts',
        'deleted' => 'deleted',
        'email_campaign_uuid' => 'email_campaign_uuid',
        'email_communication_sequence_uuid' => 'email_communication_sequence_uuid',
        'end_once_customer_purchases' => 'end_once_customer_purchases',
        'end_once_customer_purchases_anywhere' => 'end_once_customer_purchases_anywhere',
        'esp_campaign_folder_uuid' => 'esp_campaign_folder_uuid',
        'esp_domain_user' => 'esp_domain_user',
        'esp_domain_uuid' => 'esp_domain_uuid',
        'esp_friendly_name' => 'esp_friendly_name',
        'library_item_oid' => 'library_item_oid',
        'memberships' => 'memberships',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'open_rate_formatted' => 'open_rate_formatted',
        'prevent_sending_due_to_spam' => 'prevent_sending_due_to_spam',
        'revenue_formatted' => 'revenue_formatted',
        'revenue_per_customer_formatted' => 'revenue_per_customer_formatted',
        'scheduled_dts' => 'scheduled_dts',
        'screenshot_large_full_url' => 'screenshot_large_full_url',
        'sms_esp_twilio_uuid' => 'sms_esp_twilio_uuid',
        'sms_phone_number' => 'sms_phone_number',
        'status' => 'status',
        'status_dts' => 'status_dts',
        'storefront_oid' => 'storefront_oid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'click_rate_formatted' => 'setClickRateFormatted',
        'created_dts' => 'setCreatedDts',
        'deleted' => 'setDeleted',
        'email_campaign_uuid' => 'setEmailCampaignUuid',
        'email_communication_sequence_uuid' => 'setEmailCommunicationSequenceUuid',
        'end_once_customer_purchases' => 'setEndOnceCustomerPurchases',
        'end_once_customer_purchases_anywhere' => 'setEndOnceCustomerPurchasesAnywhere',
        'esp_campaign_folder_uuid' => 'setEspCampaignFolderUuid',
        'esp_domain_user' => 'setEspDomainUser',
        'esp_domain_uuid' => 'setEspDomainUuid',
        'esp_friendly_name' => 'setEspFriendlyName',
        'library_item_oid' => 'setLibraryItemOid',
        'memberships' => 'setMemberships',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'open_rate_formatted' => 'setOpenRateFormatted',
        'prevent_sending_due_to_spam' => 'setPreventSendingDueToSpam',
        'revenue_formatted' => 'setRevenueFormatted',
        'revenue_per_customer_formatted' => 'setRevenuePerCustomerFormatted',
        'scheduled_dts' => 'setScheduledDts',
        'screenshot_large_full_url' => 'setScreenshotLargeFullUrl',
        'sms_esp_twilio_uuid' => 'setSmsEspTwilioUuid',
        'sms_phone_number' => 'setSmsPhoneNumber',
        'status' => 'setStatus',
        'status_dts' => 'setStatusDts',
        'storefront_oid' => 'setStorefrontOid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'click_rate_formatted' => 'getClickRateFormatted',
        'created_dts' => 'getCreatedDts',
        'deleted' => 'getDeleted',
        'email_campaign_uuid' => 'getEmailCampaignUuid',
        'email_communication_sequence_uuid' => 'getEmailCommunicationSequenceUuid',
        'end_once_customer_purchases' => 'getEndOnceCustomerPurchases',
        'end_once_customer_purchases_anywhere' => 'getEndOnceCustomerPurchasesAnywhere',
        'esp_campaign_folder_uuid' => 'getEspCampaignFolderUuid',
        'esp_domain_user' => 'getEspDomainUser',
        'esp_domain_uuid' => 'getEspDomainUuid',
        'esp_friendly_name' => 'getEspFriendlyName',
        'library_item_oid' => 'getLibraryItemOid',
        'memberships' => 'getMemberships',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'open_rate_formatted' => 'getOpenRateFormatted',
        'prevent_sending_due_to_spam' => 'getPreventSendingDueToSpam',
        'revenue_formatted' => 'getRevenueFormatted',
        'revenue_per_customer_formatted' => 'getRevenuePerCustomerFormatted',
        'scheduled_dts' => 'getScheduledDts',
        'screenshot_large_full_url' => 'getScreenshotLargeFullUrl',
        'sms_esp_twilio_uuid' => 'getSmsEspTwilioUuid',
        'sms_phone_number' => 'getSmsPhoneNumber',
        'status' => 'getStatus',
        'status_dts' => 'getStatusDts',
        'storefront_oid' => 'getStorefrontOid'
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
        $this->container['click_rate_formatted'] = isset($data['click_rate_formatted']) ? $data['click_rate_formatted'] : null;
        $this->container['created_dts'] = isset($data['created_dts']) ? $data['created_dts'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['email_campaign_uuid'] = isset($data['email_campaign_uuid']) ? $data['email_campaign_uuid'] : null;
        $this->container['email_communication_sequence_uuid'] = isset($data['email_communication_sequence_uuid']) ? $data['email_communication_sequence_uuid'] : null;
        $this->container['end_once_customer_purchases'] = isset($data['end_once_customer_purchases']) ? $data['end_once_customer_purchases'] : null;
        $this->container['end_once_customer_purchases_anywhere'] = isset($data['end_once_customer_purchases_anywhere']) ? $data['end_once_customer_purchases_anywhere'] : null;
        $this->container['esp_campaign_folder_uuid'] = isset($data['esp_campaign_folder_uuid']) ? $data['esp_campaign_folder_uuid'] : null;
        $this->container['esp_domain_user'] = isset($data['esp_domain_user']) ? $data['esp_domain_user'] : null;
        $this->container['esp_domain_uuid'] = isset($data['esp_domain_uuid']) ? $data['esp_domain_uuid'] : null;
        $this->container['esp_friendly_name'] = isset($data['esp_friendly_name']) ? $data['esp_friendly_name'] : null;
        $this->container['library_item_oid'] = isset($data['library_item_oid']) ? $data['library_item_oid'] : null;
        $this->container['memberships'] = isset($data['memberships']) ? $data['memberships'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['open_rate_formatted'] = isset($data['open_rate_formatted']) ? $data['open_rate_formatted'] : null;
        $this->container['prevent_sending_due_to_spam'] = isset($data['prevent_sending_due_to_spam']) ? $data['prevent_sending_due_to_spam'] : null;
        $this->container['revenue_formatted'] = isset($data['revenue_formatted']) ? $data['revenue_formatted'] : null;
        $this->container['revenue_per_customer_formatted'] = isset($data['revenue_per_customer_formatted']) ? $data['revenue_per_customer_formatted'] : null;
        $this->container['scheduled_dts'] = isset($data['scheduled_dts']) ? $data['scheduled_dts'] : null;
        $this->container['screenshot_large_full_url'] = isset($data['screenshot_large_full_url']) ? $data['screenshot_large_full_url'] : null;
        $this->container['sms_esp_twilio_uuid'] = isset($data['sms_esp_twilio_uuid']) ? $data['sms_esp_twilio_uuid'] : null;
        $this->container['sms_phone_number'] = isset($data['sms_phone_number']) ? $data['sms_phone_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_dts'] = isset($data['status_dts']) ? $data['status_dts'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 250)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 250.";
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
     * Gets click_rate_formatted
     *
     * @return string
     */
    public function getClickRateFormatted()
    {
        return $this->container['click_rate_formatted'];
    }

    /**
     * Sets click_rate_formatted
     *
     * @param string $click_rate_formatted Click rate of emails
     *
     * @return $this
     */
    public function setClickRateFormatted($click_rate_formatted)
    {
        $this->container['click_rate_formatted'] = $click_rate_formatted;

        return $this;
    }

    /**
     * Gets created_dts
     *
     * @return string
     */
    public function getCreatedDts()
    {
        return $this->container['created_dts'];
    }

    /**
     * Sets created_dts
     *
     * @param string $created_dts Created date
     *
     * @return $this
     */
    public function setCreatedDts($created_dts)
    {
        $this->container['created_dts'] = $created_dts;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted True if this campaign was deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets email_campaign_uuid
     *
     * @return string
     */
    public function getEmailCampaignUuid()
    {
        return $this->container['email_campaign_uuid'];
    }

    /**
     * Sets email_campaign_uuid
     *
     * @param string $email_campaign_uuid Email campaign UUID
     *
     * @return $this
     */
    public function setEmailCampaignUuid($email_campaign_uuid)
    {
        $this->container['email_campaign_uuid'] = $email_campaign_uuid;

        return $this;
    }

    /**
     * Gets email_communication_sequence_uuid
     *
     * @return string
     */
    public function getEmailCommunicationSequenceUuid()
    {
        return $this->container['email_communication_sequence_uuid'];
    }

    /**
     * Sets email_communication_sequence_uuid
     *
     * @param string $email_communication_sequence_uuid Email communication sequence UUID
     *
     * @return $this
     */
    public function setEmailCommunicationSequenceUuid($email_communication_sequence_uuid)
    {
        $this->container['email_communication_sequence_uuid'] = $email_communication_sequence_uuid;

        return $this;
    }

    /**
     * Gets end_once_customer_purchases
     *
     * @return bool
     */
    public function getEndOnceCustomerPurchases()
    {
        return $this->container['end_once_customer_purchases'];
    }

    /**
     * Sets end_once_customer_purchases
     *
     * @param bool $end_once_customer_purchases True if the customer should end the flow once they purchase from this campaign
     *
     * @return $this
     */
    public function setEndOnceCustomerPurchases($end_once_customer_purchases)
    {
        $this->container['end_once_customer_purchases'] = $end_once_customer_purchases;

        return $this;
    }

    /**
     * Gets end_once_customer_purchases_anywhere
     *
     * @return bool
     */
    public function getEndOnceCustomerPurchasesAnywhere()
    {
        return $this->container['end_once_customer_purchases_anywhere'];
    }

    /**
     * Sets end_once_customer_purchases_anywhere
     *
     * @param bool $end_once_customer_purchases_anywhere True if the customer should end the flow once they purchase from anywhere
     *
     * @return $this
     */
    public function setEndOnceCustomerPurchasesAnywhere($end_once_customer_purchases_anywhere)
    {
        $this->container['end_once_customer_purchases_anywhere'] = $end_once_customer_purchases_anywhere;

        return $this;
    }

    /**
     * Gets esp_campaign_folder_uuid
     *
     * @return string
     */
    public function getEspCampaignFolderUuid()
    {
        return $this->container['esp_campaign_folder_uuid'];
    }

    /**
     * Sets esp_campaign_folder_uuid
     *
     * @param string $esp_campaign_folder_uuid Campaign folder UUID.  Null for uncategorized
     *
     * @return $this
     */
    public function setEspCampaignFolderUuid($esp_campaign_folder_uuid)
    {
        $this->container['esp_campaign_folder_uuid'] = $esp_campaign_folder_uuid;

        return $this;
    }

    /**
     * Gets esp_domain_user
     *
     * @return string
     */
    public function getEspDomainUser()
    {
        return $this->container['esp_domain_user'];
    }

    /**
     * Sets esp_domain_user
     *
     * @param string $esp_domain_user User of the sending address
     *
     * @return $this
     */
    public function setEspDomainUser($esp_domain_user)
    {
        $this->container['esp_domain_user'] = $esp_domain_user;

        return $this;
    }

    /**
     * Gets esp_domain_uuid
     *
     * @return string
     */
    public function getEspDomainUuid()
    {
        return $this->container['esp_domain_uuid'];
    }

    /**
     * Sets esp_domain_uuid
     *
     * @param string $esp_domain_uuid UUID of the sending domain
     *
     * @return $this
     */
    public function setEspDomainUuid($esp_domain_uuid)
    {
        $this->container['esp_domain_uuid'] = $esp_domain_uuid;

        return $this;
    }

    /**
     * Gets esp_friendly_name
     *
     * @return string
     */
    public function getEspFriendlyName()
    {
        return $this->container['esp_friendly_name'];
    }

    /**
     * Sets esp_friendly_name
     *
     * @param string $esp_friendly_name Friendly name of the sending email
     *
     * @return $this
     */
    public function setEspFriendlyName($esp_friendly_name)
    {
        $this->container['esp_friendly_name'] = $esp_friendly_name;

        return $this;
    }

    /**
     * Gets library_item_oid
     *
     * @return int
     */
    public function getLibraryItemOid()
    {
        return $this->container['library_item_oid'];
    }

    /**
     * Sets library_item_oid
     *
     * @param int $library_item_oid If this item was ever added to the Code Library, this is the oid for that library item, or 0 if never added before.  This value is used to determine if a library item should be inserted or updated.
     *
     * @return $this
     */
    public function setLibraryItemOid($library_item_oid)
    {
        $this->container['library_item_oid'] = $library_item_oid;

        return $this;
    }

    /**
     * Gets memberships
     *
     * @return \ultracart\v2\models\EmailListSegmentMembership[]
     */
    public function getMemberships()
    {
        return $this->container['memberships'];
    }

    /**
     * Sets memberships
     *
     * @param \ultracart\v2\models\EmailListSegmentMembership[] $memberships List and segment memberships
     *
     * @return $this
     */
    public function setMemberships($memberships)
    {
        $this->container['memberships'] = $memberships;

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
     * @param string $merchant_id Merchant ID
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
     * @param string $name Name of email campaign
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EmailCampaign., must be smaller than or equal to 250.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets open_rate_formatted
     *
     * @return string
     */
    public function getOpenRateFormatted()
    {
        return $this->container['open_rate_formatted'];
    }

    /**
     * Sets open_rate_formatted
     *
     * @param string $open_rate_formatted Open rate of emails
     *
     * @return $this
     */
    public function setOpenRateFormatted($open_rate_formatted)
    {
        $this->container['open_rate_formatted'] = $open_rate_formatted;

        return $this;
    }

    /**
     * Gets prevent_sending_due_to_spam
     *
     * @return bool
     */
    public function getPreventSendingDueToSpam()
    {
        return $this->container['prevent_sending_due_to_spam'];
    }

    /**
     * Sets prevent_sending_due_to_spam
     *
     * @param bool $prevent_sending_due_to_spam True if this campaign is prevented from sending at this time due to spam complaints.
     *
     * @return $this
     */
    public function setPreventSendingDueToSpam($prevent_sending_due_to_spam)
    {
        $this->container['prevent_sending_due_to_spam'] = $prevent_sending_due_to_spam;

        return $this;
    }

    /**
     * Gets revenue_formatted
     *
     * @return string
     */
    public function getRevenueFormatted()
    {
        return $this->container['revenue_formatted'];
    }

    /**
     * Sets revenue_formatted
     *
     * @param string $revenue_formatted Revenue associated with campaign
     *
     * @return $this
     */
    public function setRevenueFormatted($revenue_formatted)
    {
        $this->container['revenue_formatted'] = $revenue_formatted;

        return $this;
    }

    /**
     * Gets revenue_per_customer_formatted
     *
     * @return string
     */
    public function getRevenuePerCustomerFormatted()
    {
        return $this->container['revenue_per_customer_formatted'];
    }

    /**
     * Sets revenue_per_customer_formatted
     *
     * @param string $revenue_per_customer_formatted Revenue per customer associated with campaign
     *
     * @return $this
     */
    public function setRevenuePerCustomerFormatted($revenue_per_customer_formatted)
    {
        $this->container['revenue_per_customer_formatted'] = $revenue_per_customer_formatted;

        return $this;
    }

    /**
     * Gets scheduled_dts
     *
     * @return string
     */
    public function getScheduledDts()
    {
        return $this->container['scheduled_dts'];
    }

    /**
     * Sets scheduled_dts
     *
     * @param string $scheduled_dts Scheduled date
     *
     * @return $this
     */
    public function setScheduledDts($scheduled_dts)
    {
        $this->container['scheduled_dts'] = $scheduled_dts;

        return $this;
    }

    /**
     * Gets screenshot_large_full_url
     *
     * @return string
     */
    public function getScreenshotLargeFullUrl()
    {
        return $this->container['screenshot_large_full_url'];
    }

    /**
     * Sets screenshot_large_full_url
     *
     * @param string $screenshot_large_full_url URL to a large full length screenshot
     *
     * @return $this
     */
    public function setScreenshotLargeFullUrl($screenshot_large_full_url)
    {
        $this->container['screenshot_large_full_url'] = $screenshot_large_full_url;

        return $this;
    }

    /**
     * Gets sms_esp_twilio_uuid
     *
     * @return string
     */
    public function getSmsEspTwilioUuid()
    {
        return $this->container['sms_esp_twilio_uuid'];
    }

    /**
     * Sets sms_esp_twilio_uuid
     *
     * @param string $sms_esp_twilio_uuid Twilio Account UUID.  Null for none
     *
     * @return $this
     */
    public function setSmsEspTwilioUuid($sms_esp_twilio_uuid)
    {
        $this->container['sms_esp_twilio_uuid'] = $sms_esp_twilio_uuid;

        return $this;
    }

    /**
     * Gets sms_phone_number
     *
     * @return string
     */
    public function getSmsPhoneNumber()
    {
        return $this->container['sms_phone_number'];
    }

    /**
     * Sets sms_phone_number
     *
     * @param string $sms_phone_number Twilio SMS Phone Number.  Null for none
     *
     * @return $this
     */
    public function setSmsPhoneNumber($sms_phone_number)
    {
        $this->container['sms_phone_number'] = $sms_phone_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the campaign of draft, archived, and sent
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_dts
     *
     * @return string
     */
    public function getStatusDts()
    {
        return $this->container['status_dts'];
    }

    /**
     * Sets status_dts
     *
     * @param string $status_dts Timestamp when the last status change happened
     *
     * @return $this
     */
    public function setStatusDts($status_dts)
    {
        $this->container['status_dts'] = $status_dts;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int $storefront_oid Storefront oid
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

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


