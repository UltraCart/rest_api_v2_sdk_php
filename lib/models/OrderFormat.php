<?php
/**
 * OrderFormat
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
 * OrderFormat Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderFormat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderFormat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'context' => 'string',
        'dont_link_email_to_search' => 'bool',
        'email_as_link' => 'bool',
        'filter_distribution_center_oid' => 'int',
        'filter_to_items_in_container_oid' => 'int',
        'format' => 'string',
        'hide_bill_to_address' => 'bool',
        'hide_price_information' => 'bool',
        'link_file_attachments' => 'bool',
        'show_contact_info' => 'bool',
        'show_in_merchant_currency' => 'bool',
        'show_internal_information' => 'bool',
        'show_merchant_notes' => 'bool',
        'show_non_sensitive_payment_info' => 'bool',
        'show_payment_info' => 'bool',
        'translate' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'context' => null,
        'dont_link_email_to_search' => null,
        'email_as_link' => null,
        'filter_distribution_center_oid' => 'int32',
        'filter_to_items_in_container_oid' => 'int32',
        'format' => null,
        'hide_bill_to_address' => null,
        'hide_price_information' => null,
        'link_file_attachments' => null,
        'show_contact_info' => null,
        'show_in_merchant_currency' => null,
        'show_internal_information' => null,
        'show_merchant_notes' => null,
        'show_non_sensitive_payment_info' => null,
        'show_payment_info' => null,
        'translate' => null
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
        'context' => 'context',
        'dont_link_email_to_search' => 'dont_link_email_to_search',
        'email_as_link' => 'email_as_link',
        'filter_distribution_center_oid' => 'filter_distribution_center_oid',
        'filter_to_items_in_container_oid' => 'filter_to_items_in_container_oid',
        'format' => 'format',
        'hide_bill_to_address' => 'hide_bill_to_address',
        'hide_price_information' => 'hide_price_information',
        'link_file_attachments' => 'link_file_attachments',
        'show_contact_info' => 'show_contact_info',
        'show_in_merchant_currency' => 'show_in_merchant_currency',
        'show_internal_information' => 'show_internal_information',
        'show_merchant_notes' => 'show_merchant_notes',
        'show_non_sensitive_payment_info' => 'show_non_sensitive_payment_info',
        'show_payment_info' => 'show_payment_info',
        'translate' => 'translate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'context' => 'setContext',
        'dont_link_email_to_search' => 'setDontLinkEmailToSearch',
        'email_as_link' => 'setEmailAsLink',
        'filter_distribution_center_oid' => 'setFilterDistributionCenterOid',
        'filter_to_items_in_container_oid' => 'setFilterToItemsInContainerOid',
        'format' => 'setFormat',
        'hide_bill_to_address' => 'setHideBillToAddress',
        'hide_price_information' => 'setHidePriceInformation',
        'link_file_attachments' => 'setLinkFileAttachments',
        'show_contact_info' => 'setShowContactInfo',
        'show_in_merchant_currency' => 'setShowInMerchantCurrency',
        'show_internal_information' => 'setShowInternalInformation',
        'show_merchant_notes' => 'setShowMerchantNotes',
        'show_non_sensitive_payment_info' => 'setShowNonSensitivePaymentInfo',
        'show_payment_info' => 'setShowPaymentInfo',
        'translate' => 'setTranslate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'context' => 'getContext',
        'dont_link_email_to_search' => 'getDontLinkEmailToSearch',
        'email_as_link' => 'getEmailAsLink',
        'filter_distribution_center_oid' => 'getFilterDistributionCenterOid',
        'filter_to_items_in_container_oid' => 'getFilterToItemsInContainerOid',
        'format' => 'getFormat',
        'hide_bill_to_address' => 'getHideBillToAddress',
        'hide_price_information' => 'getHidePriceInformation',
        'link_file_attachments' => 'getLinkFileAttachments',
        'show_contact_info' => 'getShowContactInfo',
        'show_in_merchant_currency' => 'getShowInMerchantCurrency',
        'show_internal_information' => 'getShowInternalInformation',
        'show_merchant_notes' => 'getShowMerchantNotes',
        'show_non_sensitive_payment_info' => 'getShowNonSensitivePaymentInfo',
        'show_payment_info' => 'getShowPaymentInfo',
        'translate' => 'getTranslate'
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

    const FORMAT_TEXT = 'text';
    const FORMAT_DIV = 'div';
    const FORMAT_TABLE = 'table';
    const FORMAT_EMAIL = 'email';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_TEXT,
            self::FORMAT_DIV,
            self::FORMAT_TABLE,
            self::FORMAT_EMAIL,
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
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
        $this->container['dont_link_email_to_search'] = isset($data['dont_link_email_to_search']) ? $data['dont_link_email_to_search'] : null;
        $this->container['email_as_link'] = isset($data['email_as_link']) ? $data['email_as_link'] : null;
        $this->container['filter_distribution_center_oid'] = isset($data['filter_distribution_center_oid']) ? $data['filter_distribution_center_oid'] : null;
        $this->container['filter_to_items_in_container_oid'] = isset($data['filter_to_items_in_container_oid']) ? $data['filter_to_items_in_container_oid'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['hide_bill_to_address'] = isset($data['hide_bill_to_address']) ? $data['hide_bill_to_address'] : null;
        $this->container['hide_price_information'] = isset($data['hide_price_information']) ? $data['hide_price_information'] : null;
        $this->container['link_file_attachments'] = isset($data['link_file_attachments']) ? $data['link_file_attachments'] : null;
        $this->container['show_contact_info'] = isset($data['show_contact_info']) ? $data['show_contact_info'] : null;
        $this->container['show_in_merchant_currency'] = isset($data['show_in_merchant_currency']) ? $data['show_in_merchant_currency'] : null;
        $this->container['show_internal_information'] = isset($data['show_internal_information']) ? $data['show_internal_information'] : null;
        $this->container['show_merchant_notes'] = isset($data['show_merchant_notes']) ? $data['show_merchant_notes'] : null;
        $this->container['show_non_sensitive_payment_info'] = isset($data['show_non_sensitive_payment_info']) ? $data['show_non_sensitive_payment_info'] : null;
        $this->container['show_payment_info'] = isset($data['show_payment_info']) ? $data['show_payment_info'] : null;
        $this->container['translate'] = isset($data['translate']) ? $data['translate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($this->container['format']) && !in_array($this->container['format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'format', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param string $context The context to generate the order view for.
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

        return $this;
    }

    /**
     * Gets dont_link_email_to_search
     *
     * @return bool
     */
    public function getDontLinkEmailToSearch()
    {
        return $this->container['dont_link_email_to_search'];
    }

    /**
     * Sets dont_link_email_to_search
     *
     * @param bool $dont_link_email_to_search True to not link the email address to the order search
     *
     * @return $this
     */
    public function setDontLinkEmailToSearch($dont_link_email_to_search)
    {
        $this->container['dont_link_email_to_search'] = $dont_link_email_to_search;

        return $this;
    }

    /**
     * Gets email_as_link
     *
     * @return bool
     */
    public function getEmailAsLink()
    {
        return $this->container['email_as_link'];
    }

    /**
     * Sets email_as_link
     *
     * @param bool $email_as_link True to make the email address a clickable mailto link
     *
     * @return $this
     */
    public function setEmailAsLink($email_as_link)
    {
        $this->container['email_as_link'] = $email_as_link;

        return $this;
    }

    /**
     * Gets filter_distribution_center_oid
     *
     * @return int
     */
    public function getFilterDistributionCenterOid()
    {
        return $this->container['filter_distribution_center_oid'];
    }

    /**
     * Sets filter_distribution_center_oid
     *
     * @param int $filter_distribution_center_oid Specify a distribution center oid to filter the items displayed to that particular distribution center.
     *
     * @return $this
     */
    public function setFilterDistributionCenterOid($filter_distribution_center_oid)
    {
        $this->container['filter_distribution_center_oid'] = $filter_distribution_center_oid;

        return $this;
    }

    /**
     * Gets filter_to_items_in_container_oid
     *
     * @return int
     */
    public function getFilterToItemsInContainerOid()
    {
        return $this->container['filter_to_items_in_container_oid'];
    }

    /**
     * Sets filter_to_items_in_container_oid
     *
     * @param int $filter_to_items_in_container_oid The container oid to filter items to.
     *
     * @return $this
     */
    public function setFilterToItemsInContainerOid($filter_to_items_in_container_oid)
    {
        $this->container['filter_to_items_in_container_oid'] = $filter_to_items_in_container_oid;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format The desired format.
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $allowedValues = $this->getFormatAllowableValues();
        if (!is_null($format) && !in_array($format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'format', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets hide_bill_to_address
     *
     * @return bool
     */
    public function getHideBillToAddress()
    {
        return $this->container['hide_bill_to_address'];
    }

    /**
     * Sets hide_bill_to_address
     *
     * @param bool $hide_bill_to_address True to ide the bill to address
     *
     * @return $this
     */
    public function setHideBillToAddress($hide_bill_to_address)
    {
        $this->container['hide_bill_to_address'] = $hide_bill_to_address;

        return $this;
    }

    /**
     * Gets hide_price_information
     *
     * @return bool
     */
    public function getHidePriceInformation()
    {
        return $this->container['hide_price_information'];
    }

    /**
     * Sets hide_price_information
     *
     * @param bool $hide_price_information True to hide price information
     *
     * @return $this
     */
    public function setHidePriceInformation($hide_price_information)
    {
        $this->container['hide_price_information'] = $hide_price_information;

        return $this;
    }

    /**
     * Gets link_file_attachments
     *
     * @return bool
     */
    public function getLinkFileAttachments()
    {
        return $this->container['link_file_attachments'];
    }

    /**
     * Sets link_file_attachments
     *
     * @param bool $link_file_attachments True to link file attachments for download
     *
     * @return $this
     */
    public function setLinkFileAttachments($link_file_attachments)
    {
        $this->container['link_file_attachments'] = $link_file_attachments;

        return $this;
    }

    /**
     * Gets show_contact_info
     *
     * @return bool
     */
    public function getShowContactInfo()
    {
        return $this->container['show_contact_info'];
    }

    /**
     * Sets show_contact_info
     *
     * @param bool $show_contact_info True to show contact information
     *
     * @return $this
     */
    public function setShowContactInfo($show_contact_info)
    {
        $this->container['show_contact_info'] = $show_contact_info;

        return $this;
    }

    /**
     * Gets show_in_merchant_currency
     *
     * @return bool
     */
    public function getShowInMerchantCurrency()
    {
        return $this->container['show_in_merchant_currency'];
    }

    /**
     * Sets show_in_merchant_currency
     *
     * @param bool $show_in_merchant_currency True to show the order in the merchant currency
     *
     * @return $this
     */
    public function setShowInMerchantCurrency($show_in_merchant_currency)
    {
        $this->container['show_in_merchant_currency'] = $show_in_merchant_currency;

        return $this;
    }

    /**
     * Gets show_internal_information
     *
     * @return bool
     */
    public function getShowInternalInformation()
    {
        return $this->container['show_internal_information'];
    }

    /**
     * Sets show_internal_information
     *
     * @param bool $show_internal_information True to show internal information about the order
     *
     * @return $this
     */
    public function setShowInternalInformation($show_internal_information)
    {
        $this->container['show_internal_information'] = $show_internal_information;

        return $this;
    }

    /**
     * Gets show_merchant_notes
     *
     * @return bool
     */
    public function getShowMerchantNotes()
    {
        return $this->container['show_merchant_notes'];
    }

    /**
     * Sets show_merchant_notes
     *
     * @param bool $show_merchant_notes True to show merchant notes
     *
     * @return $this
     */
    public function setShowMerchantNotes($show_merchant_notes)
    {
        $this->container['show_merchant_notes'] = $show_merchant_notes;

        return $this;
    }

    /**
     * Gets show_non_sensitive_payment_info
     *
     * @return bool
     */
    public function getShowNonSensitivePaymentInfo()
    {
        return $this->container['show_non_sensitive_payment_info'];
    }

    /**
     * Sets show_non_sensitive_payment_info
     *
     * @param bool $show_non_sensitive_payment_info True to show non-sensitive payment information
     *
     * @return $this
     */
    public function setShowNonSensitivePaymentInfo($show_non_sensitive_payment_info)
    {
        $this->container['show_non_sensitive_payment_info'] = $show_non_sensitive_payment_info;

        return $this;
    }

    /**
     * Gets show_payment_info
     *
     * @return bool
     */
    public function getShowPaymentInfo()
    {
        return $this->container['show_payment_info'];
    }

    /**
     * Sets show_payment_info
     *
     * @param bool $show_payment_info True to show payment information
     *
     * @return $this
     */
    public function setShowPaymentInfo($show_payment_info)
    {
        $this->container['show_payment_info'] = $show_payment_info;

        return $this;
    }

    /**
     * Gets translate
     *
     * @return bool
     */
    public function getTranslate()
    {
        return $this->container['translate'];
    }

    /**
     * Sets translate
     *
     * @param bool $translate True to translate the order into the native language of the customer
     *
     * @return $this
     */
    public function setTranslate($translate)
    {
        $this->container['translate'] = $translate;

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


