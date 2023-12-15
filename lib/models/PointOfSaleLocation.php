<?php
/**
 * PointOfSaleLocation
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
 * PointOfSaleLocation Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PointOfSaleLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PointOfSaleLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'adddress2' => 'string',
        'address1' => 'string',
        'city' => 'string',
        'country' => 'string',
        'distribution_center_code' => 'string',
        'external_id' => 'string',
        'merchant_id' => 'string',
        'pos_location_oid' => 'int',
        'postal_code' => 'string',
        'state_province' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'adddress2' => null,
        'address1' => null,
        'city' => null,
        'country' => null,
        'distribution_center_code' => null,
        'external_id' => null,
        'merchant_id' => null,
        'pos_location_oid' => 'int32',
        'postal_code' => null,
        'state_province' => null
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
        'adddress2' => 'adddress2',
        'address1' => 'address1',
        'city' => 'city',
        'country' => 'country',
        'distribution_center_code' => 'distribution_center_code',
        'external_id' => 'external_id',
        'merchant_id' => 'merchant_id',
        'pos_location_oid' => 'pos_location_oid',
        'postal_code' => 'postal_code',
        'state_province' => 'state_province'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adddress2' => 'setAdddress2',
        'address1' => 'setAddress1',
        'city' => 'setCity',
        'country' => 'setCountry',
        'distribution_center_code' => 'setDistributionCenterCode',
        'external_id' => 'setExternalId',
        'merchant_id' => 'setMerchantId',
        'pos_location_oid' => 'setPosLocationOid',
        'postal_code' => 'setPostalCode',
        'state_province' => 'setStateProvince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adddress2' => 'getAdddress2',
        'address1' => 'getAddress1',
        'city' => 'getCity',
        'country' => 'getCountry',
        'distribution_center_code' => 'getDistributionCenterCode',
        'external_id' => 'getExternalId',
        'merchant_id' => 'getMerchantId',
        'pos_location_oid' => 'getPosLocationOid',
        'postal_code' => 'getPostalCode',
        'state_province' => 'getStateProvince'
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
        $this->container['adddress2'] = isset($data['adddress2']) ? $data['adddress2'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['distribution_center_code'] = isset($data['distribution_center_code']) ? $data['distribution_center_code'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['pos_location_oid'] = isset($data['pos_location_oid']) ? $data['pos_location_oid'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state_province'] = isset($data['state_province']) ? $data['state_province'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 100)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 100.";
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
     * Gets adddress2
     *
     * @return string
     */
    public function getAdddress2()
    {
        return $this->container['adddress2'];
    }

    /**
     * Sets adddress2
     *
     * @param string $adddress2 Address line 2
     *
     * @return $this
     */
    public function setAdddress2($adddress2)
    {
        $this->container['adddress2'] = $adddress2;

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
     * Gets distribution_center_code
     *
     * @return string
     */
    public function getDistributionCenterCode()
    {
        return $this->container['distribution_center_code'];
    }

    /**
     * Sets distribution_center_code
     *
     * @param string $distribution_center_code The distribution center code where inventory is reduced from for this sale.
     *
     * @return $this
     */
    public function setDistributionCenterCode($distribution_center_code)
    {
        $this->container['distribution_center_code'] = $distribution_center_code;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id External Id useful for syncing with a remote filesystem, this may be an MD5 hash or whatever suits your needs.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        if (!is_null($external_id) && (mb_strlen($external_id) > 100)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling PointOfSaleLocation., must be smaller than or equal to 100.');
        }

        $this->container['external_id'] = $external_id;

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
     * @param string $merchant_id Merchant ID that owns this location
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets pos_location_oid
     *
     * @return int
     */
    public function getPosLocationOid()
    {
        return $this->container['pos_location_oid'];
    }

    /**
     * Sets pos_location_oid
     *
     * @param int $pos_location_oid Object identifier of the point of sale location.
     *
     * @return $this
     */
    public function setPosLocationOid($pos_location_oid)
    {
        $this->container['pos_location_oid'] = $pos_location_oid;

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
     * Gets state_province
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->container['state_province'];
    }

    /**
     * Sets state_province
     *
     * @param string $state_province State/province
     *
     * @return $this
     */
    public function setStateProvince($state_province)
    {
        $this->container['state_province'] = $state_province;

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


