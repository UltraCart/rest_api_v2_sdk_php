<?php
/**
 * CartBilling
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
 * CartBilling Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartBilling implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartBilling';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address1' => 'string',
        'address2' => 'string',
        'cc_emails' => 'string[]',
        'city' => 'string',
        'company' => 'string',
        'country_code' => 'string',
        'day_phone' => 'string',
        'email' => 'string',
        'email_confirm' => 'string',
        'evening_phone' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'postal_code' => 'string',
        'state_region' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address1' => null,
        'address2' => null,
        'cc_emails' => null,
        'city' => null,
        'company' => null,
        'country_code' => null,
        'day_phone' => null,
        'email' => null,
        'email_confirm' => null,
        'evening_phone' => null,
        'first_name' => null,
        'last_name' => null,
        'postal_code' => null,
        'state_region' => null,
        'title' => null
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
        'cc_emails' => 'cc_emails',
        'city' => 'city',
        'company' => 'company',
        'country_code' => 'country_code',
        'day_phone' => 'day_phone',
        'email' => 'email',
        'email_confirm' => 'email_confirm',
        'evening_phone' => 'evening_phone',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'postal_code' => 'postal_code',
        'state_region' => 'state_region',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'cc_emails' => 'setCcEmails',
        'city' => 'setCity',
        'company' => 'setCompany',
        'country_code' => 'setCountryCode',
        'day_phone' => 'setDayPhone',
        'email' => 'setEmail',
        'email_confirm' => 'setEmailConfirm',
        'evening_phone' => 'setEveningPhone',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'postal_code' => 'setPostalCode',
        'state_region' => 'setStateRegion',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'cc_emails' => 'getCcEmails',
        'city' => 'getCity',
        'company' => 'getCompany',
        'country_code' => 'getCountryCode',
        'day_phone' => 'getDayPhone',
        'email' => 'getEmail',
        'email_confirm' => 'getEmailConfirm',
        'evening_phone' => 'getEveningPhone',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'postal_code' => 'getPostalCode',
        'state_region' => 'getStateRegion',
        'title' => 'getTitle'
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
        $this->container['cc_emails'] = isset($data['cc_emails']) ? $data['cc_emails'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['day_phone'] = isset($data['day_phone']) ? $data['day_phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_confirm'] = isset($data['email_confirm']) ? $data['email_confirm'] : null;
        $this->container['evening_phone'] = isset($data['evening_phone']) ? $data['evening_phone'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state_region'] = isset($data['state_region']) ? $data['state_region'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 50)) {
            $invalidProperties[] = "invalid value for 'address1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address2']) && (strlen($this->container['address2']) > 50)) {
            $invalidProperties[] = "invalid value for 'address2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 32)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['company']) && (strlen($this->container['company']) > 50)) {
            $invalidProperties[] = "invalid value for 'company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country_code']) && (strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['day_phone']) && (strlen($this->container['day_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'day_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['email']) && (strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['email_confirm']) && (strlen($this->container['email_confirm']) > 100)) {
            $invalidProperties[] = "invalid value for 'email_confirm', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['evening_phone']) && (strlen($this->container['evening_phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'evening_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['first_name']) && (strlen($this->container['first_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['last_name']) && (strlen($this->container['last_name']) > 30)) {
            $invalidProperties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['postal_code']) && (strlen($this->container['postal_code']) > 20)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['state_region']) && (strlen($this->container['state_region']) > 32)) {
            $invalidProperties[] = "invalid value for 'state_region', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['title']) && (strlen($this->container['title']) > 50)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 50.";
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
        if (strlen($this->container['email']) > 100) {
            return false;
        }
        if (strlen($this->container['email_confirm']) > 100) {
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
        if (strlen($this->container['title']) > 50) {
            return false;
        }
        return true;
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
        if (!is_null($address1) && (strlen($address1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling CartBilling., must be smaller than or equal to 50.');
        }

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
     * @param string $address2 Address line 2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (!is_null($address2) && (strlen($address2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling CartBilling., must be smaller than or equal to 50.');
        }

        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets cc_emails
     *
     * @return string[]
     */
    public function getCcEmails()
    {
        return $this->container['cc_emails'];
    }

    /**
     * Sets cc_emails
     *
     * @param string[] $cc_emails CC emails.  Multiple allowed, but total length of all emails can not exceed 100 characters.
     *
     * @return $this
     */
    public function setCcEmails($cc_emails)
    {
        $this->container['cc_emails'] = $cc_emails;

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
        if (!is_null($city) && (strlen($city) > 32)) {
            throw new \InvalidArgumentException('invalid length for $city when calling CartBilling., must be smaller than or equal to 32.');
        }

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
     * @param string $company Company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        if (!is_null($company) && (strlen($company) > 50)) {
            throw new \InvalidArgumentException('invalid length for $company when calling CartBilling., must be smaller than or equal to 50.');
        }

        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code ISO-3166 two letter country code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (!is_null($country_code) && (strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling CartBilling., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets day_phone
     *
     * @return string
     */
    public function getDayPhone()
    {
        return $this->container['day_phone'];
    }

    /**
     * Sets day_phone
     *
     * @param string $day_phone Day phone
     *
     * @return $this
     */
    public function setDayPhone($day_phone)
    {
        if (!is_null($day_phone) && (strlen($day_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $day_phone when calling CartBilling., must be smaller than or equal to 25.');
        }

        $this->container['day_phone'] = $day_phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling CartBilling., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_confirm
     *
     * @return string
     */
    public function getEmailConfirm()
    {
        return $this->container['email_confirm'];
    }

    /**
     * Sets email_confirm
     *
     * @param string $email_confirm Email entered for confirmation
     *
     * @return $this
     */
    public function setEmailConfirm($email_confirm)
    {
        if (!is_null($email_confirm) && (strlen($email_confirm) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email_confirm when calling CartBilling., must be smaller than or equal to 100.');
        }

        $this->container['email_confirm'] = $email_confirm;

        return $this;
    }

    /**
     * Gets evening_phone
     *
     * @return string
     */
    public function getEveningPhone()
    {
        return $this->container['evening_phone'];
    }

    /**
     * Sets evening_phone
     *
     * @param string $evening_phone Evening phone
     *
     * @return $this
     */
    public function setEveningPhone($evening_phone)
    {
        if (!is_null($evening_phone) && (strlen($evening_phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $evening_phone when calling CartBilling., must be smaller than or equal to 25.');
        }

        $this->container['evening_phone'] = $evening_phone;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (!is_null($first_name) && (strlen($first_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling CartBilling., must be smaller than or equal to 30.');
        }

        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (!is_null($last_name) && (strlen($last_name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling CartBilling., must be smaller than or equal to 30.');
        }

        $this->container['last_name'] = $last_name;

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
        if (!is_null($postal_code) && (strlen($postal_code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling CartBilling., must be smaller than or equal to 20.');
        }

        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_region
     *
     * @return string
     */
    public function getStateRegion()
    {
        return $this->container['state_region'];
    }

    /**
     * Sets state_region
     *
     * @param string $state_region State for United States otherwise region or province for other countries
     *
     * @return $this
     */
    public function setStateRegion($state_region)
    {
        if (!is_null($state_region) && (strlen($state_region) > 32)) {
            throw new \InvalidArgumentException('invalid length for $state_region when calling CartBilling., must be smaller than or equal to 32.');
        }

        $this->container['state_region'] = $state_region;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (strlen($title) > 50)) {
            throw new \InvalidArgumentException('invalid length for $title when calling CartBilling., must be smaller than or equal to 50.');
        }

        $this->container['title'] = $title;

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


