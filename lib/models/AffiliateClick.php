<?php
/**
 * AffiliateClick
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
 * AffiliateClick Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AffiliateClick implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AffiliateClick';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affiliate_click_oid' => 'int',
        'affiliate_link_oid' => 'int',
        'affiliate_oid' => 'int',
        'click_dts' => 'string',
        'ip_address' => 'string',
        'landing_page' => 'string',
        'landing_page_query_string' => 'string',
        'link' => '\ultracartv2\models\AffiliateLink',
        'referrer' => 'string',
        'referrer_query_string' => 'string',
        'sub_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affiliate_click_oid' => 'int32',
        'affiliate_link_oid' => 'int32',
        'affiliate_oid' => 'int32',
        'click_dts' => 'dateTime',
        'ip_address' => null,
        'landing_page' => null,
        'landing_page_query_string' => null,
        'link' => null,
        'referrer' => null,
        'referrer_query_string' => null,
        'sub_id' => null
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
        'affiliate_click_oid' => 'affiliate_click_oid',
        'affiliate_link_oid' => 'affiliate_link_oid',
        'affiliate_oid' => 'affiliate_oid',
        'click_dts' => 'click_dts',
        'ip_address' => 'ip_address',
        'landing_page' => 'landing_page',
        'landing_page_query_string' => 'landing_page_query_string',
        'link' => 'link',
        'referrer' => 'referrer',
        'referrer_query_string' => 'referrer_query_string',
        'sub_id' => 'sub_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliate_click_oid' => 'setAffiliateClickOid',
        'affiliate_link_oid' => 'setAffiliateLinkOid',
        'affiliate_oid' => 'setAffiliateOid',
        'click_dts' => 'setClickDts',
        'ip_address' => 'setIpAddress',
        'landing_page' => 'setLandingPage',
        'landing_page_query_string' => 'setLandingPageQueryString',
        'link' => 'setLink',
        'referrer' => 'setReferrer',
        'referrer_query_string' => 'setReferrerQueryString',
        'sub_id' => 'setSubId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliate_click_oid' => 'getAffiliateClickOid',
        'affiliate_link_oid' => 'getAffiliateLinkOid',
        'affiliate_oid' => 'getAffiliateOid',
        'click_dts' => 'getClickDts',
        'ip_address' => 'getIpAddress',
        'landing_page' => 'getLandingPage',
        'landing_page_query_string' => 'getLandingPageQueryString',
        'link' => 'getLink',
        'referrer' => 'getReferrer',
        'referrer_query_string' => 'getReferrerQueryString',
        'sub_id' => 'getSubId'
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
        $this->container['affiliate_click_oid'] = isset($data['affiliate_click_oid']) ? $data['affiliate_click_oid'] : null;
        $this->container['affiliate_link_oid'] = isset($data['affiliate_link_oid']) ? $data['affiliate_link_oid'] : null;
        $this->container['affiliate_oid'] = isset($data['affiliate_oid']) ? $data['affiliate_oid'] : null;
        $this->container['click_dts'] = isset($data['click_dts']) ? $data['click_dts'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['landing_page'] = isset($data['landing_page']) ? $data['landing_page'] : null;
        $this->container['landing_page_query_string'] = isset($data['landing_page_query_string']) ? $data['landing_page_query_string'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['referrer'] = isset($data['referrer']) ? $data['referrer'] : null;
        $this->container['referrer_query_string'] = isset($data['referrer_query_string']) ? $data['referrer_query_string'] : null;
        $this->container['sub_id'] = isset($data['sub_id']) ? $data['sub_id'] : null;
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
     * Gets affiliate_click_oid
     *
     * @return int
     */
    public function getAffiliateClickOid()
    {
        return $this->container['affiliate_click_oid'];
    }

    /**
     * Sets affiliate_click_oid
     *
     * @param int $affiliate_click_oid Unique object identifier for this click
     *
     * @return $this
     */
    public function setAffiliateClickOid($affiliate_click_oid)
    {
        $this->container['affiliate_click_oid'] = $affiliate_click_oid;

        return $this;
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
     * @param int $affiliate_link_oid Unique object identifier for for the link that this click is associated with
     *
     * @return $this
     */
    public function setAffiliateLinkOid($affiliate_link_oid)
    {
        $this->container['affiliate_link_oid'] = $affiliate_link_oid;

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
     * @param int $affiliate_oid Affiliate object ID associated with this click
     *
     * @return $this
     */
    public function setAffiliateOid($affiliate_oid)
    {
        $this->container['affiliate_oid'] = $affiliate_oid;

        return $this;
    }

    /**
     * Gets click_dts
     *
     * @return string
     */
    public function getClickDts()
    {
        return $this->container['click_dts'];
    }

    /**
     * Sets click_dts
     *
     * @param string $click_dts Date/time that the click was made
     *
     * @return $this
     */
    public function setClickDts($click_dts)
    {
        $this->container['click_dts'] = $click_dts;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address IP address that generated the click
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets landing_page
     *
     * @return string
     */
    public function getLandingPage()
    {
        return $this->container['landing_page'];
    }

    /**
     * Sets landing_page
     *
     * @param string $landing_page URL of the landing page the customer was sent to.
     *
     * @return $this
     */
    public function setLandingPage($landing_page)
    {
        $this->container['landing_page'] = $landing_page;

        return $this;
    }

    /**
     * Gets landing_page_query_string
     *
     * @return string
     */
    public function getLandingPageQueryString()
    {
        return $this->container['landing_page_query_string'];
    }

    /**
     * Sets landing_page_query_string
     *
     * @param string $landing_page_query_string Query string on the landing page URL the customer was sent to.
     *
     * @return $this
     */
    public function setLandingPageQueryString($landing_page_query_string)
    {
        $this->container['landing_page_query_string'] = $landing_page_query_string;

        return $this;
    }

    /**
     * Gets link
     *
     * @return \ultracartv2\models\AffiliateLink
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     *
     * @param \ultracartv2\models\AffiliateLink $link link
     *
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string $referrer URL that referred the click (Browser Header Referer)
     *
     * @return $this
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets referrer_query_string
     *
     * @return string
     */
    public function getReferrerQueryString()
    {
        return $this->container['referrer_query_string'];
    }

    /**
     * Sets referrer_query_string
     *
     * @param string $referrer_query_string Query string that was on the referrer URL.
     *
     * @return $this
     */
    public function setReferrerQueryString($referrer_query_string)
    {
        $this->container['referrer_query_string'] = $referrer_query_string;

        return $this;
    }

    /**
     * Gets sub_id
     *
     * @return string
     */
    public function getSubId()
    {
        return $this->container['sub_id'];
    }

    /**
     * Sets sub_id
     *
     * @param string $sub_id Sub ID value passed on the click
     *
     * @return $this
     */
    public function setSubId($sub_id)
    {
        $this->container['sub_id'] = $sub_id;

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


