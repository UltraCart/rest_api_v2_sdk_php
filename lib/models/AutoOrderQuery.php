<?php
/**
 * AutoOrderQuery
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
 * AutoOrderQuery Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoOrderQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoOrderQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_order_code' => 'string',
        'card_type' => 'string',
        'city' => 'string',
        'company' => 'string',
        'country_code' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'item_id' => 'string',
        'last_name' => 'string',
        'next_shipment_date_begin' => 'string',
        'next_shipment_date_end' => 'string',
        'original_order_date_begin' => 'string',
        'original_order_date_end' => 'string',
        'original_order_id' => 'string',
        'phone' => 'string',
        'postal_code' => 'string',
        'state' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_order_code' => null,
        'card_type' => null,
        'city' => null,
        'company' => null,
        'country_code' => null,
        'email' => null,
        'first_name' => null,
        'item_id' => null,
        'last_name' => null,
        'next_shipment_date_begin' => 'dateTime',
        'next_shipment_date_end' => 'dateTime',
        'original_order_date_begin' => 'dateTime',
        'original_order_date_end' => 'dateTime',
        'original_order_id' => null,
        'phone' => null,
        'postal_code' => null,
        'state' => null,
        'status' => null
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
        'auto_order_code' => 'auto_order_code',
        'card_type' => 'card_type',
        'city' => 'city',
        'company' => 'company',
        'country_code' => 'country_code',
        'email' => 'email',
        'first_name' => 'first_name',
        'item_id' => 'item_id',
        'last_name' => 'last_name',
        'next_shipment_date_begin' => 'next_shipment_date_begin',
        'next_shipment_date_end' => 'next_shipment_date_end',
        'original_order_date_begin' => 'original_order_date_begin',
        'original_order_date_end' => 'original_order_date_end',
        'original_order_id' => 'original_order_id',
        'phone' => 'phone',
        'postal_code' => 'postal_code',
        'state' => 'state',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_order_code' => 'setAutoOrderCode',
        'card_type' => 'setCardType',
        'city' => 'setCity',
        'company' => 'setCompany',
        'country_code' => 'setCountryCode',
        'email' => 'setEmail',
        'first_name' => 'setFirstName',
        'item_id' => 'setItemId',
        'last_name' => 'setLastName',
        'next_shipment_date_begin' => 'setNextShipmentDateBegin',
        'next_shipment_date_end' => 'setNextShipmentDateEnd',
        'original_order_date_begin' => 'setOriginalOrderDateBegin',
        'original_order_date_end' => 'setOriginalOrderDateEnd',
        'original_order_id' => 'setOriginalOrderId',
        'phone' => 'setPhone',
        'postal_code' => 'setPostalCode',
        'state' => 'setState',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_order_code' => 'getAutoOrderCode',
        'card_type' => 'getCardType',
        'city' => 'getCity',
        'company' => 'getCompany',
        'country_code' => 'getCountryCode',
        'email' => 'getEmail',
        'first_name' => 'getFirstName',
        'item_id' => 'getItemId',
        'last_name' => 'getLastName',
        'next_shipment_date_begin' => 'getNextShipmentDateBegin',
        'next_shipment_date_end' => 'getNextShipmentDateEnd',
        'original_order_date_begin' => 'getOriginalOrderDateBegin',
        'original_order_date_end' => 'getOriginalOrderDateEnd',
        'original_order_id' => 'getOriginalOrderId',
        'phone' => 'getPhone',
        'postal_code' => 'getPostalCode',
        'state' => 'getState',
        'status' => 'getStatus'
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
        $this->container['auto_order_code'] = isset($data['auto_order_code']) ? $data['auto_order_code'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['next_shipment_date_begin'] = isset($data['next_shipment_date_begin']) ? $data['next_shipment_date_begin'] : null;
        $this->container['next_shipment_date_end'] = isset($data['next_shipment_date_end']) ? $data['next_shipment_date_end'] : null;
        $this->container['original_order_date_begin'] = isset($data['original_order_date_begin']) ? $data['original_order_date_begin'] : null;
        $this->container['original_order_date_end'] = isset($data['original_order_date_end']) ? $data['original_order_date_end'] : null;
        $this->container['original_order_id'] = isset($data['original_order_id']) ? $data['original_order_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['card_type']) && (mb_strlen($this->container['card_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'card_type', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 100)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['phone']) && (mb_strlen($this->container['phone']) > 25)) {
            $invalidProperties[] = "invalid value for 'phone', the character length must be smaller than or equal to 25.";
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

        if (mb_strlen($this->container['card_type']) > 100) {
            return false;
        }
        if (mb_strlen($this->container['country_code']) > 2) {
            return false;
        }
        if (mb_strlen($this->container['email']) > 100) {
            return false;
        }
        if (mb_strlen($this->container['phone']) > 25) {
            return false;
        }
        return true;
    }


    /**
     * Gets auto_order_code
     *
     * @return string
     */
    public function getAutoOrderCode()
    {
        return $this->container['auto_order_code'];
    }

    /**
     * Sets auto_order_code
     *
     * @param string $auto_order_code Auto order code
     *
     * @return $this
     */
    public function setAutoOrderCode($auto_order_code)
    {
        $this->container['auto_order_code'] = $auto_order_code;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type Card type
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        if (!is_null($card_type) && (mb_strlen($card_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $card_type when calling AutoOrderQuery., must be smaller than or equal to 100.');
        }

        $this->container['card_type'] = $card_type;

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
        if (!is_null($country_code) && (mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling AutoOrderQuery., must be smaller than or equal to 2.');
        }

        $this->container['country_code'] = $country_code;

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
        if (!is_null($email) && (mb_strlen($email) > 100)) {
            throw new \InvalidArgumentException('invalid length for $email when calling AutoOrderQuery., must be smaller than or equal to 100.');
        }

        $this->container['email'] = $email;

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
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id Item ID
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

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
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets next_shipment_date_begin
     *
     * @return string
     */
    public function getNextShipmentDateBegin()
    {
        return $this->container['next_shipment_date_begin'];
    }

    /**
     * Sets next_shipment_date_begin
     *
     * @param string $next_shipment_date_begin Next shipment date begin
     *
     * @return $this
     */
    public function setNextShipmentDateBegin($next_shipment_date_begin)
    {
        $this->container['next_shipment_date_begin'] = $next_shipment_date_begin;

        return $this;
    }

    /**
     * Gets next_shipment_date_end
     *
     * @return string
     */
    public function getNextShipmentDateEnd()
    {
        return $this->container['next_shipment_date_end'];
    }

    /**
     * Sets next_shipment_date_end
     *
     * @param string $next_shipment_date_end Next shipment date end
     *
     * @return $this
     */
    public function setNextShipmentDateEnd($next_shipment_date_end)
    {
        $this->container['next_shipment_date_end'] = $next_shipment_date_end;

        return $this;
    }

    /**
     * Gets original_order_date_begin
     *
     * @return string
     */
    public function getOriginalOrderDateBegin()
    {
        return $this->container['original_order_date_begin'];
    }

    /**
     * Sets original_order_date_begin
     *
     * @param string $original_order_date_begin Original order date begin
     *
     * @return $this
     */
    public function setOriginalOrderDateBegin($original_order_date_begin)
    {
        $this->container['original_order_date_begin'] = $original_order_date_begin;

        return $this;
    }

    /**
     * Gets original_order_date_end
     *
     * @return string
     */
    public function getOriginalOrderDateEnd()
    {
        return $this->container['original_order_date_end'];
    }

    /**
     * Sets original_order_date_end
     *
     * @param string $original_order_date_end Original order date end
     *
     * @return $this
     */
    public function setOriginalOrderDateEnd($original_order_date_end)
    {
        $this->container['original_order_date_end'] = $original_order_date_end;

        return $this;
    }

    /**
     * Gets original_order_id
     *
     * @return string
     */
    public function getOriginalOrderId()
    {
        return $this->container['original_order_id'];
    }

    /**
     * Sets original_order_id
     *
     * @param string $original_order_id Original order ID
     *
     * @return $this
     */
    public function setOriginalOrderId($original_order_id)
    {
        $this->container['original_order_id'] = $original_order_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (mb_strlen($phone) > 25)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling AutoOrderQuery., must be smaller than or equal to 25.');
        }

        $this->container['phone'] = $phone;

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
     * @param string $state State
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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
     * @param string $status Status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


