<?php
/**
 * EmailListCustomer
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
 * EmailListCustomer Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailListCustomer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailListCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'add_dts' => 'string',
        'email' => 'string',
        'email_customer_uuid' => 'string',
        'email_list_member_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'add_dts' => 'dateTime',
        'email' => null,
        'email_customer_uuid' => null,
        'email_list_member_uuid' => null
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
        'add_dts' => 'add_dts',
        'email' => 'email',
        'email_customer_uuid' => 'email_customer_uuid',
        'email_list_member_uuid' => 'email_list_member_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_dts' => 'setAddDts',
        'email' => 'setEmail',
        'email_customer_uuid' => 'setEmailCustomerUuid',
        'email_list_member_uuid' => 'setEmailListMemberUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_dts' => 'getAddDts',
        'email' => 'getEmail',
        'email_customer_uuid' => 'getEmailCustomerUuid',
        'email_list_member_uuid' => 'getEmailListMemberUuid'
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
        $this->container['add_dts'] = isset($data['add_dts']) ? $data['add_dts'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_customer_uuid'] = isset($data['email_customer_uuid']) ? $data['email_customer_uuid'] : null;
        $this->container['email_list_member_uuid'] = isset($data['email_list_member_uuid']) ? $data['email_list_member_uuid'] : null;
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
     * Gets add_dts
     *
     * @return string
     */
    public function getAddDts()
    {
        return $this->container['add_dts'];
    }

    /**
     * Sets add_dts
     *
     * @param string $add_dts Added timestamp
     *
     * @return $this
     */
    public function setAddDts($add_dts)
    {
        $this->container['add_dts'] = $add_dts;

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
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_customer_uuid
     *
     * @return string
     */
    public function getEmailCustomerUuid()
    {
        return $this->container['email_customer_uuid'];
    }

    /**
     * Sets email_customer_uuid
     *
     * @param string $email_customer_uuid Email customer UUID
     *
     * @return $this
     */
    public function setEmailCustomerUuid($email_customer_uuid)
    {
        $this->container['email_customer_uuid'] = $email_customer_uuid;

        return $this;
    }

    /**
     * Gets email_list_member_uuid
     *
     * @return string
     */
    public function getEmailListMemberUuid()
    {
        return $this->container['email_list_member_uuid'];
    }

    /**
     * Sets email_list_member_uuid
     *
     * @param string $email_list_member_uuid Email list member UUID
     *
     * @return $this
     */
    public function setEmailListMemberUuid($email_list_member_uuid)
    {
        $this->container['email_list_member_uuid'] = $email_list_member_uuid;

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


