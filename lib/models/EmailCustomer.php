<?php
/**
 * EmailCustomer
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * EmailCustomer Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailCustomer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailCustomer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'email' => 'string',
        'email_customer_uuid' => 'string',
        'first_name' => 'string',
        'global_unsubscribe' => 'bool',
        'last_interaction_dts' => 'string',
        'last_name' => 'string',
        'list_uuids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'email' => null,
        'email_customer_uuid' => null,
        'first_name' => null,
        'global_unsubscribe' => null,
        'last_interaction_dts' => 'dateTime',
        'last_name' => null,
        'list_uuids' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active' => 'active',
        'email' => 'email',
        'email_customer_uuid' => 'email_customer_uuid',
        'first_name' => 'first_name',
        'global_unsubscribe' => 'global_unsubscribe',
        'last_interaction_dts' => 'last_interaction_dts',
        'last_name' => 'last_name',
        'list_uuids' => 'list_uuids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'email' => 'setEmail',
        'email_customer_uuid' => 'setEmailCustomerUuid',
        'first_name' => 'setFirstName',
        'global_unsubscribe' => 'setGlobalUnsubscribe',
        'last_interaction_dts' => 'setLastInteractionDts',
        'last_name' => 'setLastName',
        'list_uuids' => 'setListUuids'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'email' => 'getEmail',
        'email_customer_uuid' => 'getEmailCustomerUuid',
        'first_name' => 'getFirstName',
        'global_unsubscribe' => 'getGlobalUnsubscribe',
        'last_interaction_dts' => 'getLastInteractionDts',
        'last_name' => 'getLastName',
        'list_uuids' => 'getListUuids'
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
        return self::$openAPIModelName;
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['email_customer_uuid'] = $data['email_customer_uuid'] ?? null;
        $this->container['first_name'] = $data['first_name'] ?? null;
        $this->container['global_unsubscribe'] = $data['global_unsubscribe'] ?? null;
        $this->container['last_interaction_dts'] = $data['last_interaction_dts'] ?? null;
        $this->container['last_name'] = $data['last_name'] ?? null;
        $this->container['list_uuids'] = $data['list_uuids'] ?? null;
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active True if the customer is flagged as active within StoreFront Communications
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_customer_uuid
     *
     * @return string|null
     */
    public function getEmailCustomerUuid()
    {
        return $this->container['email_customer_uuid'];
    }

    /**
     * Sets email_customer_uuid
     *
     * @param string|null $email_customer_uuid Email customer UUID
     *
     * @return self
     */
    public function setEmailCustomerUuid($email_customer_uuid)
    {
        $this->container['email_customer_uuid'] = $email_customer_uuid;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name First name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets global_unsubscribe
     *
     * @return bool|null
     */
    public function getGlobalUnsubscribe()
    {
        return $this->container['global_unsubscribe'];
    }

    /**
     * Sets global_unsubscribe
     *
     * @param bool|null $global_unsubscribe True if the customer has globally unsubscribed from all communication.
     *
     * @return self
     */
    public function setGlobalUnsubscribe($global_unsubscribe)
    {
        $this->container['global_unsubscribe'] = $global_unsubscribe;

        return $this;
    }

    /**
     * Gets last_interaction_dts
     *
     * @return string|null
     */
    public function getLastInteractionDts()
    {
        return $this->container['last_interaction_dts'];
    }

    /**
     * Sets last_interaction_dts
     *
     * @param string|null $last_interaction_dts Last interaction
     *
     * @return self
     */
    public function setLastInteractionDts($last_interaction_dts)
    {
        $this->container['last_interaction_dts'] = $last_interaction_dts;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Last name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets list_uuids
     *
     * @return string[]|null
     */
    public function getListUuids()
    {
        return $this->container['list_uuids'];
    }

    /**
     * Sets list_uuids
     *
     * @param string[]|null $list_uuids UUIDs of the lists they are subscribed to
     *
     * @return self
     */
    public function setListUuids($list_uuids)
    {
        $this->container['list_uuids'] = $list_uuids;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


