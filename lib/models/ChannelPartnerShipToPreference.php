<?php
/**
 * ChannelPartnerShipToPreference
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
 * ChannelPartnerShipToPreference Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelPartnerShipToPreference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelPartnerShipToPreference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'additional_kit_component_item_ids' => 'string[]',
        'channel_partner_oid' => 'int',
        'channel_partner_ship_to_preference_oid' => 'int',
        'merchant_id' => 'string',
        'return_policy' => 'string',
        'ship_to_edi_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'additional_kit_component_item_ids' => null,
        'channel_partner_oid' => 'int32',
        'channel_partner_ship_to_preference_oid' => 'int32',
        'merchant_id' => null,
        'return_policy' => null,
        'ship_to_edi_code' => null
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
        'additional_kit_component_item_ids' => 'additional_kit_component_item_ids',
        'channel_partner_oid' => 'channel_partner_oid',
        'channel_partner_ship_to_preference_oid' => 'channel_partner_ship_to_preference_oid',
        'merchant_id' => 'merchant_id',
        'return_policy' => 'return_policy',
        'ship_to_edi_code' => 'ship_to_edi_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_kit_component_item_ids' => 'setAdditionalKitComponentItemIds',
        'channel_partner_oid' => 'setChannelPartnerOid',
        'channel_partner_ship_to_preference_oid' => 'setChannelPartnerShipToPreferenceOid',
        'merchant_id' => 'setMerchantId',
        'return_policy' => 'setReturnPolicy',
        'ship_to_edi_code' => 'setShipToEdiCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_kit_component_item_ids' => 'getAdditionalKitComponentItemIds',
        'channel_partner_oid' => 'getChannelPartnerOid',
        'channel_partner_ship_to_preference_oid' => 'getChannelPartnerShipToPreferenceOid',
        'merchant_id' => 'getMerchantId',
        'return_policy' => 'getReturnPolicy',
        'ship_to_edi_code' => 'getShipToEdiCode'
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
        $this->container['additional_kit_component_item_ids'] = isset($data['additional_kit_component_item_ids']) ? $data['additional_kit_component_item_ids'] : null;
        $this->container['channel_partner_oid'] = isset($data['channel_partner_oid']) ? $data['channel_partner_oid'] : null;
        $this->container['channel_partner_ship_to_preference_oid'] = isset($data['channel_partner_ship_to_preference_oid']) ? $data['channel_partner_ship_to_preference_oid'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['return_policy'] = isset($data['return_policy']) ? $data['return_policy'] : null;
        $this->container['ship_to_edi_code'] = isset($data['ship_to_edi_code']) ? $data['ship_to_edi_code'] : null;
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
     * Gets additional_kit_component_item_ids
     *
     * @return string[]
     */
    public function getAdditionalKitComponentItemIds()
    {
        return $this->container['additional_kit_component_item_ids'];
    }

    /**
     * Sets additional_kit_component_item_ids
     *
     * @param string[] $additional_kit_component_item_ids Additional item ids to add as kit components to the order with a zero price.
     *
     * @return $this
     */
    public function setAdditionalKitComponentItemIds($additional_kit_component_item_ids)
    {
        $this->container['additional_kit_component_item_ids'] = $additional_kit_component_item_ids;

        return $this;
    }

    /**
     * Gets channel_partner_oid
     *
     * @return int
     */
    public function getChannelPartnerOid()
    {
        return $this->container['channel_partner_oid'];
    }

    /**
     * Sets channel_partner_oid
     *
     * @param int $channel_partner_oid The channel partner object identifier this preference is associated with
     *
     * @return $this
     */
    public function setChannelPartnerOid($channel_partner_oid)
    {
        $this->container['channel_partner_oid'] = $channel_partner_oid;

        return $this;
    }

    /**
     * Gets channel_partner_ship_to_preference_oid
     *
     * @return int
     */
    public function getChannelPartnerShipToPreferenceOid()
    {
        return $this->container['channel_partner_ship_to_preference_oid'];
    }

    /**
     * Sets channel_partner_ship_to_preference_oid
     *
     * @param int $channel_partner_ship_to_preference_oid Object identifier for the ship to preference
     *
     * @return $this
     */
    public function setChannelPartnerShipToPreferenceOid($channel_partner_ship_to_preference_oid)
    {
        $this->container['channel_partner_ship_to_preference_oid'] = $channel_partner_ship_to_preference_oid;

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
     * @param string $merchant_id The merchant id that owns the channel partner
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets return_policy
     *
     * @return string
     */
    public function getReturnPolicy()
    {
        return $this->container['return_policy'];
    }

    /**
     * Sets return_policy
     *
     * @param string $return_policy Alternate return policy to print on the packing slip.
     *
     * @return $this
     */
    public function setReturnPolicy($return_policy)
    {
        $this->container['return_policy'] = $return_policy;

        return $this;
    }

    /**
     * Gets ship_to_edi_code
     *
     * @return string
     */
    public function getShipToEdiCode()
    {
        return $this->container['ship_to_edi_code'];
    }

    /**
     * Sets ship_to_edi_code
     *
     * @param string $ship_to_edi_code The ship to EDI code that the preferences are for
     *
     * @return $this
     */
    public function setShipToEdiCode($ship_to_edi_code)
    {
        $this->container['ship_to_edi_code'] = $ship_to_edi_code;

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


