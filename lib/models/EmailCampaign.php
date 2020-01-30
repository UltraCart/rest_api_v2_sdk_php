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
        'esp_domain_user' => 'string',
        'esp_domain_uuid' => 'string',
        'memberships' => '\ultracart\v2\models\EmailListSegmentMembership[]',
        'merchant_id' => 'string',
        'name' => 'string',
        'open_rate_formatted' => 'string',
        'revenue_formatted' => 'string',
        'scheduled_dts' => 'string',
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
        'esp_domain_user' => null,
        'esp_domain_uuid' => null,
        'memberships' => null,
        'merchant_id' => null,
        'name' => null,
        'open_rate_formatted' => null,
        'revenue_formatted' => null,
        'scheduled_dts' => 'dateTime',
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
        'esp_domain_user' => 'esp_domain_user',
        'esp_domain_uuid' => 'esp_domain_uuid',
        'memberships' => 'memberships',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'open_rate_formatted' => 'open_rate_formatted',
        'revenue_formatted' => 'revenue_formatted',
        'scheduled_dts' => 'scheduled_dts',
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
        'esp_domain_user' => 'setEspDomainUser',
        'esp_domain_uuid' => 'setEspDomainUuid',
        'memberships' => 'setMemberships',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'open_rate_formatted' => 'setOpenRateFormatted',
        'revenue_formatted' => 'setRevenueFormatted',
        'scheduled_dts' => 'setScheduledDts',
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
        'esp_domain_user' => 'getEspDomainUser',
        'esp_domain_uuid' => 'getEspDomainUuid',
        'memberships' => 'getMemberships',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'open_rate_formatted' => 'getOpenRateFormatted',
        'revenue_formatted' => 'getRevenueFormatted',
        'scheduled_dts' => 'getScheduledDts',
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
        $this->container['esp_domain_user'] = isset($data['esp_domain_user']) ? $data['esp_domain_user'] : null;
        $this->container['esp_domain_uuid'] = isset($data['esp_domain_uuid']) ? $data['esp_domain_uuid'] : null;
        $this->container['memberships'] = isset($data['memberships']) ? $data['memberships'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['open_rate_formatted'] = isset($data['open_rate_formatted']) ? $data['open_rate_formatted'] : null;
        $this->container['revenue_formatted'] = isset($data['revenue_formatted']) ? $data['revenue_formatted'] : null;
        $this->container['scheduled_dts'] = isset($data['scheduled_dts']) ? $data['scheduled_dts'] : null;
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

        if (mb_strlen($this->container['name']) > 250) {
            return false;
        }
        return true;
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


