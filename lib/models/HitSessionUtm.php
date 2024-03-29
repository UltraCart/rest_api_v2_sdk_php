<?php
/**
 * HitSessionUtm
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
 * HitSessionUtm Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HitSessionUtm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HitSessionUtm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fb_ad_id' => 'string',
        'fbclid' => 'string',
        'gbraid' => 'string',
        'gclid' => 'string',
        'msclkid' => 'string',
        'ttclid' => 'string',
        'uc_message_id' => 'string',
        'utm_campaign' => 'string',
        'utm_content' => 'string',
        'utm_id' => 'string',
        'utm_medium' => 'string',
        'utm_source' => 'string',
        'utm_term' => 'string',
        'vmcid' => 'string',
        'wbraid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fb_ad_id' => null,
        'fbclid' => null,
        'gbraid' => null,
        'gclid' => null,
        'msclkid' => null,
        'ttclid' => null,
        'uc_message_id' => null,
        'utm_campaign' => null,
        'utm_content' => null,
        'utm_id' => null,
        'utm_medium' => null,
        'utm_source' => null,
        'utm_term' => null,
        'vmcid' => null,
        'wbraid' => null
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
        'fb_ad_id' => 'fb_ad_id',
        'fbclid' => 'fbclid',
        'gbraid' => 'gbraid',
        'gclid' => 'gclid',
        'msclkid' => 'msclkid',
        'ttclid' => 'ttclid',
        'uc_message_id' => 'uc_message_id',
        'utm_campaign' => 'utm_campaign',
        'utm_content' => 'utm_content',
        'utm_id' => 'utm_id',
        'utm_medium' => 'utm_medium',
        'utm_source' => 'utm_source',
        'utm_term' => 'utm_term',
        'vmcid' => 'vmcid',
        'wbraid' => 'wbraid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fb_ad_id' => 'setFbAdId',
        'fbclid' => 'setFbclid',
        'gbraid' => 'setGbraid',
        'gclid' => 'setGclid',
        'msclkid' => 'setMsclkid',
        'ttclid' => 'setTtclid',
        'uc_message_id' => 'setUcMessageId',
        'utm_campaign' => 'setUtmCampaign',
        'utm_content' => 'setUtmContent',
        'utm_id' => 'setUtmId',
        'utm_medium' => 'setUtmMedium',
        'utm_source' => 'setUtmSource',
        'utm_term' => 'setUtmTerm',
        'vmcid' => 'setVmcid',
        'wbraid' => 'setWbraid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fb_ad_id' => 'getFbAdId',
        'fbclid' => 'getFbclid',
        'gbraid' => 'getGbraid',
        'gclid' => 'getGclid',
        'msclkid' => 'getMsclkid',
        'ttclid' => 'getTtclid',
        'uc_message_id' => 'getUcMessageId',
        'utm_campaign' => 'getUtmCampaign',
        'utm_content' => 'getUtmContent',
        'utm_id' => 'getUtmId',
        'utm_medium' => 'getUtmMedium',
        'utm_source' => 'getUtmSource',
        'utm_term' => 'getUtmTerm',
        'vmcid' => 'getVmcid',
        'wbraid' => 'getWbraid'
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
        $this->container['fb_ad_id'] = isset($data['fb_ad_id']) ? $data['fb_ad_id'] : null;
        $this->container['fbclid'] = isset($data['fbclid']) ? $data['fbclid'] : null;
        $this->container['gbraid'] = isset($data['gbraid']) ? $data['gbraid'] : null;
        $this->container['gclid'] = isset($data['gclid']) ? $data['gclid'] : null;
        $this->container['msclkid'] = isset($data['msclkid']) ? $data['msclkid'] : null;
        $this->container['ttclid'] = isset($data['ttclid']) ? $data['ttclid'] : null;
        $this->container['uc_message_id'] = isset($data['uc_message_id']) ? $data['uc_message_id'] : null;
        $this->container['utm_campaign'] = isset($data['utm_campaign']) ? $data['utm_campaign'] : null;
        $this->container['utm_content'] = isset($data['utm_content']) ? $data['utm_content'] : null;
        $this->container['utm_id'] = isset($data['utm_id']) ? $data['utm_id'] : null;
        $this->container['utm_medium'] = isset($data['utm_medium']) ? $data['utm_medium'] : null;
        $this->container['utm_source'] = isset($data['utm_source']) ? $data['utm_source'] : null;
        $this->container['utm_term'] = isset($data['utm_term']) ? $data['utm_term'] : null;
        $this->container['vmcid'] = isset($data['vmcid']) ? $data['vmcid'] : null;
        $this->container['wbraid'] = isset($data['wbraid']) ? $data['wbraid'] : null;
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
     * Gets fb_ad_id
     *
     * @return string
     */
    public function getFbAdId()
    {
        return $this->container['fb_ad_id'];
    }

    /**
     * Sets fb_ad_id
     *
     * @param string $fb_ad_id fb_ad_id
     *
     * @return $this
     */
    public function setFbAdId($fb_ad_id)
    {
        $this->container['fb_ad_id'] = $fb_ad_id;

        return $this;
    }

    /**
     * Gets fbclid
     *
     * @return string
     */
    public function getFbclid()
    {
        return $this->container['fbclid'];
    }

    /**
     * Sets fbclid
     *
     * @param string $fbclid fbclid
     *
     * @return $this
     */
    public function setFbclid($fbclid)
    {
        $this->container['fbclid'] = $fbclid;

        return $this;
    }

    /**
     * Gets gbraid
     *
     * @return string
     */
    public function getGbraid()
    {
        return $this->container['gbraid'];
    }

    /**
     * Sets gbraid
     *
     * @param string $gbraid gbraid
     *
     * @return $this
     */
    public function setGbraid($gbraid)
    {
        $this->container['gbraid'] = $gbraid;

        return $this;
    }

    /**
     * Gets gclid
     *
     * @return string
     */
    public function getGclid()
    {
        return $this->container['gclid'];
    }

    /**
     * Sets gclid
     *
     * @param string $gclid gclid
     *
     * @return $this
     */
    public function setGclid($gclid)
    {
        $this->container['gclid'] = $gclid;

        return $this;
    }

    /**
     * Gets msclkid
     *
     * @return string
     */
    public function getMsclkid()
    {
        return $this->container['msclkid'];
    }

    /**
     * Sets msclkid
     *
     * @param string $msclkid msclkid
     *
     * @return $this
     */
    public function setMsclkid($msclkid)
    {
        $this->container['msclkid'] = $msclkid;

        return $this;
    }

    /**
     * Gets ttclid
     *
     * @return string
     */
    public function getTtclid()
    {
        return $this->container['ttclid'];
    }

    /**
     * Sets ttclid
     *
     * @param string $ttclid ttclid
     *
     * @return $this
     */
    public function setTtclid($ttclid)
    {
        $this->container['ttclid'] = $ttclid;

        return $this;
    }

    /**
     * Gets uc_message_id
     *
     * @return string
     */
    public function getUcMessageId()
    {
        return $this->container['uc_message_id'];
    }

    /**
     * Sets uc_message_id
     *
     * @param string $uc_message_id uc_message_id
     *
     * @return $this
     */
    public function setUcMessageId($uc_message_id)
    {
        $this->container['uc_message_id'] = $uc_message_id;

        return $this;
    }

    /**
     * Gets utm_campaign
     *
     * @return string
     */
    public function getUtmCampaign()
    {
        return $this->container['utm_campaign'];
    }

    /**
     * Sets utm_campaign
     *
     * @param string $utm_campaign utm_campaign
     *
     * @return $this
     */
    public function setUtmCampaign($utm_campaign)
    {
        $this->container['utm_campaign'] = $utm_campaign;

        return $this;
    }

    /**
     * Gets utm_content
     *
     * @return string
     */
    public function getUtmContent()
    {
        return $this->container['utm_content'];
    }

    /**
     * Sets utm_content
     *
     * @param string $utm_content utm_content
     *
     * @return $this
     */
    public function setUtmContent($utm_content)
    {
        $this->container['utm_content'] = $utm_content;

        return $this;
    }

    /**
     * Gets utm_id
     *
     * @return string
     */
    public function getUtmId()
    {
        return $this->container['utm_id'];
    }

    /**
     * Sets utm_id
     *
     * @param string $utm_id utm_id
     *
     * @return $this
     */
    public function setUtmId($utm_id)
    {
        $this->container['utm_id'] = $utm_id;

        return $this;
    }

    /**
     * Gets utm_medium
     *
     * @return string
     */
    public function getUtmMedium()
    {
        return $this->container['utm_medium'];
    }

    /**
     * Sets utm_medium
     *
     * @param string $utm_medium utm_medium
     *
     * @return $this
     */
    public function setUtmMedium($utm_medium)
    {
        $this->container['utm_medium'] = $utm_medium;

        return $this;
    }

    /**
     * Gets utm_source
     *
     * @return string
     */
    public function getUtmSource()
    {
        return $this->container['utm_source'];
    }

    /**
     * Sets utm_source
     *
     * @param string $utm_source utm_source
     *
     * @return $this
     */
    public function setUtmSource($utm_source)
    {
        $this->container['utm_source'] = $utm_source;

        return $this;
    }

    /**
     * Gets utm_term
     *
     * @return string
     */
    public function getUtmTerm()
    {
        return $this->container['utm_term'];
    }

    /**
     * Sets utm_term
     *
     * @param string $utm_term utm_term
     *
     * @return $this
     */
    public function setUtmTerm($utm_term)
    {
        $this->container['utm_term'] = $utm_term;

        return $this;
    }

    /**
     * Gets vmcid
     *
     * @return string
     */
    public function getVmcid()
    {
        return $this->container['vmcid'];
    }

    /**
     * Sets vmcid
     *
     * @param string $vmcid vmcid
     *
     * @return $this
     */
    public function setVmcid($vmcid)
    {
        $this->container['vmcid'] = $vmcid;

        return $this;
    }

    /**
     * Gets wbraid
     *
     * @return string
     */
    public function getWbraid()
    {
        return $this->container['wbraid'];
    }

    /**
     * Sets wbraid
     *
     * @param string $wbraid wbraid
     *
     * @return $this
     */
    public function setWbraid($wbraid)
    {
        $this->container['wbraid'] = $wbraid;

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


