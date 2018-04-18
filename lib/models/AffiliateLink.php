<?php
/**
 * AffiliateLink
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
 * AffiliateLink Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AffiliateLink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AffiliateLink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate_link_oid' => 'int',
        'affiliate_managed_link_oid' => 'int',
        'affiliate_oid' => 'int',
        'affiliate_program_item_oid' => 'int',
        'code' => 'string',
        'creative_oid' => 'int',
        'custom_html' => 'string',
        'custom_html_approval_status' => 'string',
        'custom_landing_url' => 'string',
        'deleted' => 'bool',
        'invisible_link_approval_status' => 'string',
        'invisible_link_url_prefix' => 'string',
        'name' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate_link_oid' => 'int32',
        'affiliate_managed_link_oid' => 'int32',
        'affiliate_oid' => 'int32',
        'affiliate_program_item_oid' => 'int32',
        'code' => null,
        'creative_oid' => 'int32',
        'custom_html' => null,
        'custom_html_approval_status' => null,
        'custom_landing_url' => null,
        'deleted' => null,
        'invisible_link_approval_status' => null,
        'invisible_link_url_prefix' => null,
        'name' => null,
        'type' => null
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
        'affiliate_link_oid' => 'affiliate_link_oid',
        'affiliate_managed_link_oid' => 'affiliate_managed_link_oid',
        'affiliate_oid' => 'affiliate_oid',
        'affiliate_program_item_oid' => 'affiliate_program_item_oid',
        'code' => 'code',
        'creative_oid' => 'creative_oid',
        'custom_html' => 'custom_html',
        'custom_html_approval_status' => 'custom_html_approval_status',
        'custom_landing_url' => 'custom_landing_url',
        'deleted' => 'deleted',
        'invisible_link_approval_status' => 'invisible_link_approval_status',
        'invisible_link_url_prefix' => 'invisible_link_url_prefix',
        'name' => 'name',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliate_link_oid' => 'setAffiliateLinkOid',
        'affiliate_managed_link_oid' => 'setAffiliateManagedLinkOid',
        'affiliate_oid' => 'setAffiliateOid',
        'affiliate_program_item_oid' => 'setAffiliateProgramItemOid',
        'code' => 'setCode',
        'creative_oid' => 'setCreativeOid',
        'custom_html' => 'setCustomHtml',
        'custom_html_approval_status' => 'setCustomHtmlApprovalStatus',
        'custom_landing_url' => 'setCustomLandingUrl',
        'deleted' => 'setDeleted',
        'invisible_link_approval_status' => 'setInvisibleLinkApprovalStatus',
        'invisible_link_url_prefix' => 'setInvisibleLinkUrlPrefix',
        'name' => 'setName',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliate_link_oid' => 'getAffiliateLinkOid',
        'affiliate_managed_link_oid' => 'getAffiliateManagedLinkOid',
        'affiliate_oid' => 'getAffiliateOid',
        'affiliate_program_item_oid' => 'getAffiliateProgramItemOid',
        'code' => 'getCode',
        'creative_oid' => 'getCreativeOid',
        'custom_html' => 'getCustomHtml',
        'custom_html_approval_status' => 'getCustomHtmlApprovalStatus',
        'custom_landing_url' => 'getCustomLandingUrl',
        'deleted' => 'getDeleted',
        'invisible_link_approval_status' => 'getInvisibleLinkApprovalStatus',
        'invisible_link_url_prefix' => 'getInvisibleLinkUrlPrefix',
        'name' => 'getName',
        'type' => 'getType'
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

    const CUSTOM_HTML_APPROVAL_STATUS_PENDING = 'Pending';
    const CUSTOM_HTML_APPROVAL_STATUS_APPROVED = 'Approved';
    const CUSTOM_HTML_APPROVAL_STATUS_REJECTED = 'Rejected';
    const INVISIBLE_LINK_APPROVAL_STATUS_PENDING = 'Pending';
    const INVISIBLE_LINK_APPROVAL_STATUS_APPROVED = 'Approved';
    const INVISIBLE_LINK_APPROVAL_STATUS_REJECTED = 'Rejected';
    const TYPE_IMAGE = 'image';
    const TYPE_TEXT = 'text';
    const TYPE_INVISIBLE = 'invisible';
    const TYPE_DIRECT = 'direct';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomHtmlApprovalStatusAllowableValues()
    {
        return [
            self::CUSTOM_HTML_APPROVAL_STATUS_PENDING,
            self::CUSTOM_HTML_APPROVAL_STATUS_APPROVED,
            self::CUSTOM_HTML_APPROVAL_STATUS_REJECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvisibleLinkApprovalStatusAllowableValues()
    {
        return [
            self::INVISIBLE_LINK_APPROVAL_STATUS_PENDING,
            self::INVISIBLE_LINK_APPROVAL_STATUS_APPROVED,
            self::INVISIBLE_LINK_APPROVAL_STATUS_REJECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IMAGE,
            self::TYPE_TEXT,
            self::TYPE_INVISIBLE,
            self::TYPE_DIRECT,
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
        $this->container['affiliate_link_oid'] = isset($data['affiliate_link_oid']) ? $data['affiliate_link_oid'] : null;
        $this->container['affiliate_managed_link_oid'] = isset($data['affiliate_managed_link_oid']) ? $data['affiliate_managed_link_oid'] : null;
        $this->container['affiliate_oid'] = isset($data['affiliate_oid']) ? $data['affiliate_oid'] : null;
        $this->container['affiliate_program_item_oid'] = isset($data['affiliate_program_item_oid']) ? $data['affiliate_program_item_oid'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['creative_oid'] = isset($data['creative_oid']) ? $data['creative_oid'] : null;
        $this->container['custom_html'] = isset($data['custom_html']) ? $data['custom_html'] : null;
        $this->container['custom_html_approval_status'] = isset($data['custom_html_approval_status']) ? $data['custom_html_approval_status'] : null;
        $this->container['custom_landing_url'] = isset($data['custom_landing_url']) ? $data['custom_landing_url'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['invisible_link_approval_status'] = isset($data['invisible_link_approval_status']) ? $data['invisible_link_approval_status'] : null;
        $this->container['invisible_link_url_prefix'] = isset($data['invisible_link_url_prefix']) ? $data['invisible_link_url_prefix'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCustomHtmlApprovalStatusAllowableValues();
        if (!in_array($this->container['custom_html_approval_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'custom_html_approval_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInvisibleLinkApprovalStatusAllowableValues();
        if (!in_array($this->container['invisible_link_approval_status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invisible_link_approval_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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

        $allowedValues = $this->getCustomHtmlApprovalStatusAllowableValues();
        if (!in_array($this->container['custom_html_approval_status'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getInvisibleLinkApprovalStatusAllowableValues();
        if (!in_array($this->container['invisible_link_approval_status'], $allowedValues)) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets affiliate_link_oid
     *
     * @return int
     */
    public function getAffiliateLinkOid()
    {
        return $this->container['affiliate_link_oid'];
    }

    /**
     * Sets affiliate_link_oid
     *
     * @param int $affiliate_link_oid Unique object identifier associated with this link
     *
     * @return $this
     */
    public function setAffiliateLinkOid($affiliate_link_oid)
    {
        $this->container['affiliate_link_oid'] = $affiliate_link_oid;

        return $this;
    }

    /**
     * Gets affiliate_managed_link_oid
     *
     * @return int
     */
    public function getAffiliateManagedLinkOid()
    {
        return $this->container['affiliate_managed_link_oid'];
    }

    /**
     * Sets affiliate_managed_link_oid
     *
     * @param int $affiliate_managed_link_oid Managed link OID that this link object was generated from
     *
     * @return $this
     */
    public function setAffiliateManagedLinkOid($affiliate_managed_link_oid)
    {
        $this->container['affiliate_managed_link_oid'] = $affiliate_managed_link_oid;

        return $this;
    }

    /**
     * Gets affiliate_oid
     *
     * @return int
     */
    public function getAffiliateOid()
    {
        return $this->container['affiliate_oid'];
    }

    /**
     * Sets affiliate_oid
     *
     * @param int $affiliate_oid Affiliate object ID associated with this link
     *
     * @return $this
     */
    public function setAffiliateOid($affiliate_oid)
    {
        $this->container['affiliate_oid'] = $affiliate_oid;

        return $this;
    }

    /**
     * Gets affiliate_program_item_oid
     *
     * @return int
     */
    public function getAffiliateProgramItemOid()
    {
        return $this->container['affiliate_program_item_oid'];
    }

    /**
     * Sets affiliate_program_item_oid
     *
     * @param int $affiliate_program_item_oid The affiliate program item this managed link is associated with
     *
     * @return $this
     */
    public function setAffiliateProgramItemOid($affiliate_program_item_oid)
    {
        $this->container['affiliate_program_item_oid'] = $affiliate_program_item_oid;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code associated with the link
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets creative_oid
     *
     * @return int
     */
    public function getCreativeOid()
    {
        return $this->container['creative_oid'];
    }

    /**
     * Sets creative_oid
     *
     * @param int $creative_oid Creative (image or text) associated with this link
     *
     * @return $this
     */
    public function setCreativeOid($creative_oid)
    {
        $this->container['creative_oid'] = $creative_oid;

        return $this;
    }

    /**
     * Gets custom_html
     *
     * @return string
     */
    public function getCustomHtml()
    {
        return $this->container['custom_html'];
    }

    /**
     * Sets custom_html
     *
     * @param string $custom_html Custom HTML associated with this link
     *
     * @return $this
     */
    public function setCustomHtml($custom_html)
    {
        $this->container['custom_html'] = $custom_html;

        return $this;
    }

    /**
     * Gets custom_html_approval_status
     *
     * @return string
     */
    public function getCustomHtmlApprovalStatus()
    {
        return $this->container['custom_html_approval_status'];
    }

    /**
     * Sets custom_html_approval_status
     *
     * @param string $custom_html_approval_status Approved status of the custom html
     *
     * @return $this
     */
    public function setCustomHtmlApprovalStatus($custom_html_approval_status)
    {
        $allowedValues = $this->getCustomHtmlApprovalStatusAllowableValues();
        if (!is_null($custom_html_approval_status) && !in_array($custom_html_approval_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'custom_html_approval_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['custom_html_approval_status'] = $custom_html_approval_status;

        return $this;
    }

    /**
     * Gets custom_landing_url
     *
     * @return string
     */
    public function getCustomLandingUrl()
    {
        return $this->container['custom_landing_url'];
    }

    /**
     * Sets custom_landing_url
     *
     * @param string $custom_landing_url Custom landing page URL if configured
     *
     * @return $this
     */
    public function setCustomLandingUrl($custom_landing_url)
    {
        $this->container['custom_landing_url'] = $custom_landing_url;

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
     * @param bool $deleted True if the link has been deleted
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets invisible_link_approval_status
     *
     * @return string
     */
    public function getInvisibleLinkApprovalStatus()
    {
        return $this->container['invisible_link_approval_status'];
    }

    /**
     * Sets invisible_link_approval_status
     *
     * @param string $invisible_link_approval_status Invisible link approval status
     *
     * @return $this
     */
    public function setInvisibleLinkApprovalStatus($invisible_link_approval_status)
    {
        $allowedValues = $this->getInvisibleLinkApprovalStatusAllowableValues();
        if (!is_null($invisible_link_approval_status) && !in_array($invisible_link_approval_status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invisible_link_approval_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invisible_link_approval_status'] = $invisible_link_approval_status;

        return $this;
    }

    /**
     * Gets invisible_link_url_prefix
     *
     * @return string
     */
    public function getInvisibleLinkUrlPrefix()
    {
        return $this->container['invisible_link_url_prefix'];
    }

    /**
     * Sets invisible_link_url_prefix
     *
     * @param string $invisible_link_url_prefix Invisible link URL prefix
     *
     * @return $this
     */
    public function setInvisibleLinkUrlPrefix($invisible_link_url_prefix)
    {
        $this->container['invisible_link_url_prefix'] = $invisible_link_url_prefix;

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
     * @param string $name Name of the link
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of link
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


