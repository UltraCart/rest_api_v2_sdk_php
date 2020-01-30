<?php
/**
 * EmailFlow
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
 * EmailFlow Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailFlow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailFlow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_multiple_concurrent_enrollments' => 'bool',
        'click_rate_formatted' => 'string',
        'created_dts' => 'string',
        'deleted' => 'bool',
        'email_communication_sequence_uuid' => 'string',
        'email_flow_uuid' => 'string',
        'esp_domain_user' => 'string',
        'esp_domain_uuid' => 'string',
        'filter_profile_equation_json' => 'string',
        'merchant_id' => 'string',
        'name' => 'string',
        'open_rate_formatted' => 'string',
        'revenue_formatted' => 'string',
        'status' => 'string',
        'status_dts' => 'string',
        'storefront_oid' => 'int',
        'trigger_parameter' => 'string',
        'trigger_parameter_name' => 'string',
        'trigger_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_multiple_concurrent_enrollments' => null,
        'click_rate_formatted' => null,
        'created_dts' => 'dateTime',
        'deleted' => null,
        'email_communication_sequence_uuid' => null,
        'email_flow_uuid' => null,
        'esp_domain_user' => null,
        'esp_domain_uuid' => null,
        'filter_profile_equation_json' => null,
        'merchant_id' => null,
        'name' => null,
        'open_rate_formatted' => null,
        'revenue_formatted' => null,
        'status' => null,
        'status_dts' => 'dateTime',
        'storefront_oid' => 'int32',
        'trigger_parameter' => null,
        'trigger_parameter_name' => null,
        'trigger_type' => null
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
        'allow_multiple_concurrent_enrollments' => 'allow_multiple_concurrent_enrollments',
        'click_rate_formatted' => 'click_rate_formatted',
        'created_dts' => 'created_dts',
        'deleted' => 'deleted',
        'email_communication_sequence_uuid' => 'email_communication_sequence_uuid',
        'email_flow_uuid' => 'email_flow_uuid',
        'esp_domain_user' => 'esp_domain_user',
        'esp_domain_uuid' => 'esp_domain_uuid',
        'filter_profile_equation_json' => 'filter_profile_equation_json',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'open_rate_formatted' => 'open_rate_formatted',
        'revenue_formatted' => 'revenue_formatted',
        'status' => 'status',
        'status_dts' => 'status_dts',
        'storefront_oid' => 'storefront_oid',
        'trigger_parameter' => 'trigger_parameter',
        'trigger_parameter_name' => 'trigger_parameter_name',
        'trigger_type' => 'trigger_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_multiple_concurrent_enrollments' => 'setAllowMultipleConcurrentEnrollments',
        'click_rate_formatted' => 'setClickRateFormatted',
        'created_dts' => 'setCreatedDts',
        'deleted' => 'setDeleted',
        'email_communication_sequence_uuid' => 'setEmailCommunicationSequenceUuid',
        'email_flow_uuid' => 'setEmailFlowUuid',
        'esp_domain_user' => 'setEspDomainUser',
        'esp_domain_uuid' => 'setEspDomainUuid',
        'filter_profile_equation_json' => 'setFilterProfileEquationJson',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'open_rate_formatted' => 'setOpenRateFormatted',
        'revenue_formatted' => 'setRevenueFormatted',
        'status' => 'setStatus',
        'status_dts' => 'setStatusDts',
        'storefront_oid' => 'setStorefrontOid',
        'trigger_parameter' => 'setTriggerParameter',
        'trigger_parameter_name' => 'setTriggerParameterName',
        'trigger_type' => 'setTriggerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_multiple_concurrent_enrollments' => 'getAllowMultipleConcurrentEnrollments',
        'click_rate_formatted' => 'getClickRateFormatted',
        'created_dts' => 'getCreatedDts',
        'deleted' => 'getDeleted',
        'email_communication_sequence_uuid' => 'getEmailCommunicationSequenceUuid',
        'email_flow_uuid' => 'getEmailFlowUuid',
        'esp_domain_user' => 'getEspDomainUser',
        'esp_domain_uuid' => 'getEspDomainUuid',
        'filter_profile_equation_json' => 'getFilterProfileEquationJson',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'open_rate_formatted' => 'getOpenRateFormatted',
        'revenue_formatted' => 'getRevenueFormatted',
        'status' => 'getStatus',
        'status_dts' => 'getStatusDts',
        'storefront_oid' => 'getStorefrontOid',
        'trigger_parameter' => 'getTriggerParameter',
        'trigger_parameter_name' => 'getTriggerParameterName',
        'trigger_type' => 'getTriggerType'
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
        $this->container['allow_multiple_concurrent_enrollments'] = isset($data['allow_multiple_concurrent_enrollments']) ? $data['allow_multiple_concurrent_enrollments'] : null;
        $this->container['click_rate_formatted'] = isset($data['click_rate_formatted']) ? $data['click_rate_formatted'] : null;
        $this->container['created_dts'] = isset($data['created_dts']) ? $data['created_dts'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['email_communication_sequence_uuid'] = isset($data['email_communication_sequence_uuid']) ? $data['email_communication_sequence_uuid'] : null;
        $this->container['email_flow_uuid'] = isset($data['email_flow_uuid']) ? $data['email_flow_uuid'] : null;
        $this->container['esp_domain_user'] = isset($data['esp_domain_user']) ? $data['esp_domain_user'] : null;
        $this->container['esp_domain_uuid'] = isset($data['esp_domain_uuid']) ? $data['esp_domain_uuid'] : null;
        $this->container['filter_profile_equation_json'] = isset($data['filter_profile_equation_json']) ? $data['filter_profile_equation_json'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['open_rate_formatted'] = isset($data['open_rate_formatted']) ? $data['open_rate_formatted'] : null;
        $this->container['revenue_formatted'] = isset($data['revenue_formatted']) ? $data['revenue_formatted'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_dts'] = isset($data['status_dts']) ? $data['status_dts'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['trigger_parameter'] = isset($data['trigger_parameter']) ? $data['trigger_parameter'] : null;
        $this->container['trigger_parameter_name'] = isset($data['trigger_parameter_name']) ? $data['trigger_parameter_name'] : null;
        $this->container['trigger_type'] = isset($data['trigger_type']) ? $data['trigger_type'] : null;
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
     * Gets allow_multiple_concurrent_enrollments
     *
     * @return bool
     */
    public function getAllowMultipleConcurrentEnrollments()
    {
        return $this->container['allow_multiple_concurrent_enrollments'];
    }

    /**
     * Sets allow_multiple_concurrent_enrollments
     *
     * @param bool $allow_multiple_concurrent_enrollments True if a customer may be enrolled in this flow multiple times
     *
     * @return $this
     */
    public function setAllowMultipleConcurrentEnrollments($allow_multiple_concurrent_enrollments)
    {
        $this->container['allow_multiple_concurrent_enrollments'] = $allow_multiple_concurrent_enrollments;

        return $this;
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
     * @param string $click_rate_formatted Click rate of emails, formatted
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
     * Gets email_flow_uuid
     *
     * @return string
     */
    public function getEmailFlowUuid()
    {
        return $this->container['email_flow_uuid'];
    }

    /**
     * Sets email_flow_uuid
     *
     * @param string $email_flow_uuid Email flow UUID
     *
     * @return $this
     */
    public function setEmailFlowUuid($email_flow_uuid)
    {
        $this->container['email_flow_uuid'] = $email_flow_uuid;

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
     * @param string $esp_domain_user Username of sending email
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
     * @param string $esp_domain_uuid UUID of sending domain
     *
     * @return $this
     */
    public function setEspDomainUuid($esp_domain_uuid)
    {
        $this->container['esp_domain_uuid'] = $esp_domain_uuid;

        return $this;
    }

    /**
     * Gets filter_profile_equation_json
     *
     * @return string
     */
    public function getFilterProfileEquationJson()
    {
        return $this->container['filter_profile_equation_json'];
    }

    /**
     * Sets filter_profile_equation_json
     *
     * @param string $filter_profile_equation_json File profile equation json
     *
     * @return $this
     */
    public function setFilterProfileEquationJson($filter_profile_equation_json)
    {
        $this->container['filter_profile_equation_json'] = $filter_profile_equation_json;

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
     * @param string $name Name of email flow
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EmailFlow., must be smaller than or equal to 250.');
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
     * @param string $open_rate_formatted Open rate of emails, formatted
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
     * @param string $revenue_formatted Revenue, formatted
     *
     * @return $this
     */
    public function setRevenueFormatted($revenue_formatted)
    {
        $this->container['revenue_formatted'] = $revenue_formatted;

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
     * @param string $status Status of the campaign of draft, archived, active, and inactive
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
     * Gets trigger_parameter
     *
     * @return string
     */
    public function getTriggerParameter()
    {
        return $this->container['trigger_parameter'];
    }

    /**
     * Sets trigger_parameter
     *
     * @param string $trigger_parameter Trigger parameter
     *
     * @return $this
     */
    public function setTriggerParameter($trigger_parameter)
    {
        $this->container['trigger_parameter'] = $trigger_parameter;

        return $this;
    }

    /**
     * Gets trigger_parameter_name
     *
     * @return string
     */
    public function getTriggerParameterName()
    {
        return $this->container['trigger_parameter_name'];
    }

    /**
     * Sets trigger_parameter_name
     *
     * @param string $trigger_parameter_name Trigger parameter name
     *
     * @return $this
     */
    public function setTriggerParameterName($trigger_parameter_name)
    {
        $this->container['trigger_parameter_name'] = $trigger_parameter_name;

        return $this;
    }

    /**
     * Gets trigger_type
     *
     * @return string
     */
    public function getTriggerType()
    {
        return $this->container['trigger_type'];
    }

    /**
     * Sets trigger_type
     *
     * @param string $trigger_type Trigger type
     *
     * @return $this
     */
    public function setTriggerType($trigger_type)
    {
        $this->container['trigger_type'] = $trigger_type;

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


