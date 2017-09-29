<?php
/**
 * CustomerShipping
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * CustomerShipping Class Doc Comment
 *
 * @category    Class
 * @package     ultracart\v2
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerShipping implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomerShipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'company' => 'string',
        'country_code' => 'string',
        'customer_profile_oid' => 'int',
        'customer_shipping_oid' => 'int',
        'day_phone' => 'string',
        'default_shipping' => 'bool',
        'evening_phone' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'last_used_dts' => 'string',
        'postal_code' => 'string',
        'state_region' => 'string',
        'tax_county' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address1' => null,
        'address2' => null,
        'city' => null,
        'company' => null,
        'country_code' => null,
        'customer_profile_oid' => 'int32',
        'customer_shipping_oid' => 'int32',
        'day_phone' => null,
        'default_shipping' => null,
        'evening_phone' => null,
        'first_name' => null,
        'last_name' => null,
        'last_used_dts' => 'dateTime',
        'postal_code' => null,
        'state_region' => null,
        'tax_county' => null,
        'title' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'company' => 'company',
        'country_code' => 'country_code',
        'customer_profile_oid' => 'customer_profile_oid',
        'customer_shipping_oid' => 'customer_shipping_oid',
        'day_phone' => 'day_phone',
        'default_shipping' => 'default_shipping',
        'evening_phone' => 'evening_phone',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'last_used_dts' => 'last_used_dts',
        'postal_code' => 'postal_code',
        'state_region' => 'state_region',
        'tax_county' => 'tax_county',
        'title' => 'title'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'company' => 'setCompany',
        'country_code' => 'setCountryCode',
        'customer_profile_oid' => 'setCustomerProfileOid',
        'customer_shipping_oid' => 'setCustomerShippingOid',
        'day_phone' => 'setDayPhone',
        'default_shipping' => 'setDefaultShipping',
        'evening_phone' => 'setEveningPhone',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'last_used_dts' => 'setLastUsedDts',
        'postal_code' => 'setPostalCode',
        'state_region' => 'setStateRegion',
        'tax_county' => 'setTaxCounty',
        'title' => 'setTitle'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'company' => 'getCompany',
        'country_code' => 'getCountryCode',
        'customer_profile_oid' => 'getCustomerProfileOid',
        'customer_shipping_oid' => 'getCustomerShippingOid',
        'day_phone' => 'getDayPhone',
        'default_shipping' => 'getDefaultShipping',
        'evening_phone' => 'getEveningPhone',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'last_used_dts' => 'getLastUsedDts',
        'postal_code' => 'getPostalCode',
        'state_region' => 'getStateRegion',
        'tax_county' => 'getTaxCounty',
        'title' => 'getTitle'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['customer_profile_oid'] = isset($data['customer_profile_oid']) ? $data['customer_profile_oid'] : null;
        $this->container['customer_shipping_oid'] = isset($data['customer_shipping_oid']) ? $data['customer_shipping_oid'] : null;
        $this->container['day_phone'] = isset($data['day_phone']) ? $data['day_phone'] : null;
        $this->container['default_shipping'] = isset($data['default_shipping']) ? $data['default_shipping'] : null;
        $this->container['evening_phone'] = isset($data['evening_phone']) ? $data['evening_phone'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['last_used_dts'] = isset($data['last_used_dts']) ? $data['last_used_dts'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state_region'] = isset($data['state_region']) ? $data['state_region'] : null;
        $this->container['tax_county'] = isset($data['tax_county']) ? $data['tax_county'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 50)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address2']) && (strlen($this->container['address2']) > 50)) {
            $invalid_properties[] = "invalid value for 'address2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 32)) {
            $invalid_properties[] = "invalid value for 'city', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['company']) && (strlen($this->container['company']) > 50)) {
            $invalid_properties[] = "invalid value for 'company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country_code']) && (strlen($this->container['country_code']) > 2)) {
            $invalid_properties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['day_phone']) && (strlen($this->container['day_phone']) > 25)) {
            $invalid_properties[] = "invalid value for 'day_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['evening_phone']) && (strlen($this->container['evening_phone']) > 25)) {
            $invalid_properties[] = "invalid value for 'evening_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['first_name']) && (strlen($this->container['first_name']) > 30)) {
            $invalid_properties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['last_name']) && (strlen($this->container['last_name']) > 30)) {
            $invalid_properties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['postal_code']) && (strlen($this->container['postal_code']) > 20)) {
            $invalid_properties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['state_region']) && (strlen($this->container['state_region']) > 32)) {
            $invalid_properties[] = "invalid value for 'state_region', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['tax_county']) && (strlen($this->container['tax_county']) > 32)) {
            $invalid_properties[] = "invalid value for 'tax_county', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['title']) && (strlen($this->container['title']) > 50)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 50.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['address1']) > 50) {
            return false;
        }
        if (strlen($this->container['address2']) > 50) {
            return false;
        }
        if (strlen($this->container['city']) > 32) {
            return false;
        }
        if (strlen($this->container['company']) > 50) {
            return false;
        }
        if (strlen($this->container['country_code']) > 2) {
            return false;
        }
        if (strlen($this->container['day_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['evening_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['first_name']) > 30) {
            return false;
        }
        if (strlen($this->container['last_name']) > 30) {
            return false;
        }
        if (strlen($this->container['postal_code']) > 20) {
            return false;
        }
        if (strlen($this->container['state_region']) > 32) {
            return false;
        }
        if (strlen($this->container['tax_county']) > 32) {
            return false;
        }
        if (strlen($this->container['title']) > 50) {
            return false;
        }
        return true;
    }


    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 Address line 1
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (!is_null($address1) && (strlen($address1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling CustomerShipping., must be smaller than or equal to 50.');
        }

        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Address line 2
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (strlen($address2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling CustomerShipping., must be smaller than or equal to 50.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (strlen($city) > 32)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CustomerShipping., must be smaller than or equal to 32.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Company
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (strlen($company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $company when calling CustomerShipping., must be smaller than or equal to 50.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code ISO-3166 two letter country code
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling CustomerShipping., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets customer_profile_oid
     * @return int
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     * @param int $customer_profile_oid Customer profile object identifier
     * @return $this
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets customer_shipping_oid
     * @return int
     */
    public function getCustomerShippingOid()
    {
        return $this->container['customer_shipping_oid'];
    }

    /**
     * Sets customer_shipping_oid
     * @param int $customer_shipping_oid Customer profile shipping object identifier
     * @return $this
     */
    public function setCustomerShippingOid($customer_shipping_oid)
    {
        $this->container['customer_shipping_oid'] = $customer_shipping_oid;

        return $this;
    }

    /**
     * Gets day_phone
     * @return string
     */
    public function getDayPhone()
    {
        return $this->container['day_phone'];
    }

    /**
     * Sets day_phone
     * @param string $day_phone Day phone
     * @return $this
     */
    public function setDayPhone($day_phone)
    {
        if (!is_null($day_phone) && (strlen($day_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $day_phone when calling CustomerShipping., must be smaller than or equal to 25.');
        }

        $this->container['day_phone'] = $day_phone;

        return $this;
    }

    /**
     * Gets default_shipping
     * @return bool
     */
    public function getDefaultShipping()
    {
        return $this->container['default_shipping'];
    }

    /**
     * Sets default_shipping
     * @param bool $default_shipping Default shipping
     * @return $this
     */
    public function setDefaultShipping($default_shipping)
    {
        $this->container['default_shipping'] = $default_shipping;

        return $this;
    }

    /**
     * Gets evening_phone
     * @return string
     */
    public function getEveningPhone()
    {
        return $this->container['evening_phone'];
    }

    /**
     * Sets evening_phone
     * @param string $evening_phone Evening phone
     * @return $this
     */
    public function setEveningPhone($evening_phone)
    {
        if (!is_null($evening_phone) && (strlen($evening_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $evening_phone when calling CustomerShipping., must be smaller than or equal to 25.');
        }

        $this->container['evening_phone'] = $evening_phone;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name First name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (strlen($first_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling CustomerShipping., must be smaller than or equal to 30.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (strlen($last_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling CustomerShipping., must be smaller than or equal to 30.');
        }

        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets last_used_dts
     * @return string
     */
    public function getLastUsedDts()
    {
        return $this->container['last_used_dts'];
    }

    /**
     * Sets last_used_dts
     * @param string $last_used_dts Last used date
     * @return $this
     */
    public function setLastUsedDts($last_used_dts)
    {
        $this->container['last_used_dts'] = $last_used_dts;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code Postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (!is_null($postal_code) && (strlen($postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling CustomerShipping., must be smaller than or equal to 20.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_region
     * @return string
     */
    public function getStateRegion()
    {
        return $this->container['state_region'];
    }

    /**
     * Sets state_region
     * @param string $state_region State for United States otherwise region or province for other countries
     * @return $this
     */
    public function setStateRegion($state_region)
    {
        if (!is_null($state_region) && (strlen($state_region) > 32)) {
            throw new \InvalidArgumentException('invalid length for $state_region when calling CustomerShipping., must be smaller than or equal to 32.');
        }

        $this->container['state_region'] = $state_region;

        return $this;
    }

    /**
     * Gets tax_county
     * @return string
     */
    public function getTaxCounty()
    {
        return $this->container['tax_county'];
    }

    /**
     * Sets tax_county
     * @param string $tax_county Tax County
     * @return $this
     */
    public function setTaxCounty($tax_county)
    {
        if (!is_null($tax_county) && (strlen($tax_county) > 32)) {
            throw new \InvalidArgumentException('invalid length for $tax_county when calling CustomerShipping., must be smaller than or equal to 32.');
        }

        $this->container['tax_county'] = $tax_county;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Title
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (strlen($title) > 50)) {
            throw new \InvalidArgumentException('invalid length for $title when calling CustomerShipping., must be smaller than or equal to 50.');
        }

        $this->container['title'] = $title;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


