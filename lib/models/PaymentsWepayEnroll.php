<?php
/**
 * PaymentsWepayEnroll
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
 * PaymentsWepayEnroll Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsWepayEnroll implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsWepayEnroll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => 'string',
        'address2' => 'string',
        'canada_accept_debit_cards' => 'bool',
        'city' => 'string',
        'company' => 'string',
        'company_description' => 'string',
        'country' => 'string',
        'expected_revenue' => 'string',
        'industry' => 'string',
        'owner_email' => 'string',
        'owner_name' => 'string',
        'owner_phone' => 'string',
        'state' => 'string',
        'webiste_url' => 'string',
        'zip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address1' => null,
        'address2' => null,
        'canada_accept_debit_cards' => null,
        'city' => null,
        'company' => null,
        'company_description' => null,
        'country' => null,
        'expected_revenue' => null,
        'industry' => null,
        'owner_email' => null,
        'owner_name' => null,
        'owner_phone' => null,
        'state' => null,
        'webiste_url' => null,
        'zip' => null
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
        'address1' => 'address1',
        'address2' => 'address2',
        'canada_accept_debit_cards' => 'canada_accept_debit_cards',
        'city' => 'city',
        'company' => 'company',
        'company_description' => 'company_description',
        'country' => 'country',
        'expected_revenue' => 'expected_revenue',
        'industry' => 'industry',
        'owner_email' => 'owner_email',
        'owner_name' => 'owner_name',
        'owner_phone' => 'owner_phone',
        'state' => 'state',
        'webiste_url' => 'webiste_url',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'canada_accept_debit_cards' => 'setCanadaAcceptDebitCards',
        'city' => 'setCity',
        'company' => 'setCompany',
        'company_description' => 'setCompanyDescription',
        'country' => 'setCountry',
        'expected_revenue' => 'setExpectedRevenue',
        'industry' => 'setIndustry',
        'owner_email' => 'setOwnerEmail',
        'owner_name' => 'setOwnerName',
        'owner_phone' => 'setOwnerPhone',
        'state' => 'setState',
        'webiste_url' => 'setWebisteUrl',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'canada_accept_debit_cards' => 'getCanadaAcceptDebitCards',
        'city' => 'getCity',
        'company' => 'getCompany',
        'company_description' => 'getCompanyDescription',
        'country' => 'getCountry',
        'expected_revenue' => 'getExpectedRevenue',
        'industry' => 'getIndustry',
        'owner_email' => 'getOwnerEmail',
        'owner_name' => 'getOwnerName',
        'owner_phone' => 'getOwnerPhone',
        'state' => 'getState',
        'webiste_url' => 'getWebisteUrl',
        'zip' => 'getZip'
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
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['canada_accept_debit_cards'] = isset($data['canada_accept_debit_cards']) ? $data['canada_accept_debit_cards'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['company_description'] = isset($data['company_description']) ? $data['company_description'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['expected_revenue'] = isset($data['expected_revenue']) ? $data['expected_revenue'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['owner_email'] = isset($data['owner_email']) ? $data['owner_email'] : null;
        $this->container['owner_name'] = isset($data['owner_name']) ? $data['owner_name'] : null;
        $this->container['owner_phone'] = isset($data['owner_phone']) ? $data['owner_phone'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['webiste_url'] = isset($data['webiste_url']) ? $data['webiste_url'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
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
     * @param string $address1 address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets canada_accept_debit_cards
     *
     * @return bool
     */
    public function getCanadaAcceptDebitCards()
    {
        return $this->container['canada_accept_debit_cards'];
    }

    /**
     * Sets canada_accept_debit_cards
     *
     * @param bool $canada_accept_debit_cards canada_accept_debit_cards
     *
     * @return $this
     */
    public function setCanadaAcceptDebitCards($canada_accept_debit_cards)
    {
        $this->container['canada_accept_debit_cards'] = $canada_accept_debit_cards;

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
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
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
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company_description
     *
     * @return string
     */
    public function getCompanyDescription()
    {
        return $this->container['company_description'];
    }

    /**
     * Sets company_description
     *
     * @param string $company_description company_description
     *
     * @return $this
     */
    public function setCompanyDescription($company_description)
    {
        $this->container['company_description'] = $company_description;

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
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets expected_revenue
     *
     * @return string
     */
    public function getExpectedRevenue()
    {
        return $this->container['expected_revenue'];
    }

    /**
     * Sets expected_revenue
     *
     * @param string $expected_revenue expected_revenue
     *
     * @return $this
     */
    public function setExpectedRevenue($expected_revenue)
    {
        $this->container['expected_revenue'] = $expected_revenue;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string $industry industry
     *
     * @return $this
     */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets owner_email
     *
     * @return string
     */
    public function getOwnerEmail()
    {
        return $this->container['owner_email'];
    }

    /**
     * Sets owner_email
     *
     * @param string $owner_email owner_email
     *
     * @return $this
     */
    public function setOwnerEmail($owner_email)
    {
        $this->container['owner_email'] = $owner_email;

        return $this;
    }

    /**
     * Gets owner_name
     *
     * @return string
     */
    public function getOwnerName()
    {
        return $this->container['owner_name'];
    }

    /**
     * Sets owner_name
     *
     * @param string $owner_name owner_name
     *
     * @return $this
     */
    public function setOwnerName($owner_name)
    {
        $this->container['owner_name'] = $owner_name;

        return $this;
    }

    /**
     * Gets owner_phone
     *
     * @return string
     */
    public function getOwnerPhone()
    {
        return $this->container['owner_phone'];
    }

    /**
     * Sets owner_phone
     *
     * @param string $owner_phone owner_phone
     *
     * @return $this
     */
    public function setOwnerPhone($owner_phone)
    {
        $this->container['owner_phone'] = $owner_phone;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets webiste_url
     *
     * @return string
     */
    public function getWebisteUrl()
    {
        return $this->container['webiste_url'];
    }

    /**
     * Sets webiste_url
     *
     * @param string $webiste_url webiste_url
     *
     * @return $this
     */
    public function setWebisteUrl($webiste_url)
    {
        $this->container['webiste_url'] = $webiste_url;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

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

