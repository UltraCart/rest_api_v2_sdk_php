<?php
/**
 * IntegrationLogQueryRequest
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
 * IntegrationLogQueryRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IntegrationLogQueryRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IntegrationLogQueryRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action' => 'string',
        'direction' => 'string',
        'email' => 'string',
        'file_names' => 'string[]',
        'item_id' => 'string',
        'item_ipn_oid' => 'int',
        'log_dts_begin' => 'string',
        'log_dts_end' => 'string',
        'log_type' => 'string',
        'logger_id' => 'string',
        'logger_name' => 'string',
        'order_ids' => 'string[]',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action' => null,
        'direction' => null,
        'email' => null,
        'file_names' => null,
        'item_id' => null,
        'item_ipn_oid' => 'int32',
        'log_dts_begin' => 'dateTime',
        'log_dts_end' => 'dateTime',
        'log_type' => null,
        'logger_id' => null,
        'logger_name' => null,
        'order_ids' => null,
        'status' => null
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
        'action' => 'action',
        'direction' => 'direction',
        'email' => 'email',
        'file_names' => 'file_names',
        'item_id' => 'item_id',
        'item_ipn_oid' => 'item_ipn_oid',
        'log_dts_begin' => 'log_dts_begin',
        'log_dts_end' => 'log_dts_end',
        'log_type' => 'log_type',
        'logger_id' => 'logger_id',
        'logger_name' => 'logger_name',
        'order_ids' => 'order_ids',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'direction' => 'setDirection',
        'email' => 'setEmail',
        'file_names' => 'setFileNames',
        'item_id' => 'setItemId',
        'item_ipn_oid' => 'setItemIpnOid',
        'log_dts_begin' => 'setLogDtsBegin',
        'log_dts_end' => 'setLogDtsEnd',
        'log_type' => 'setLogType',
        'logger_id' => 'setLoggerId',
        'logger_name' => 'setLoggerName',
        'order_ids' => 'setOrderIds',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'direction' => 'getDirection',
        'email' => 'getEmail',
        'file_names' => 'getFileNames',
        'item_id' => 'getItemId',
        'item_ipn_oid' => 'getItemIpnOid',
        'log_dts_begin' => 'getLogDtsBegin',
        'log_dts_end' => 'getLogDtsEnd',
        'log_type' => 'getLogType',
        'logger_id' => 'getLoggerId',
        'logger_name' => 'getLoggerName',
        'order_ids' => 'getOrderIds',
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['direction'] = $data['direction'] ?? null;
        $this->container['email'] = $data['email'] ?? null;
        $this->container['file_names'] = $data['file_names'] ?? null;
        $this->container['item_id'] = $data['item_id'] ?? null;
        $this->container['item_ipn_oid'] = $data['item_ipn_oid'] ?? null;
        $this->container['log_dts_begin'] = $data['log_dts_begin'] ?? null;
        $this->container['log_dts_end'] = $data['log_dts_end'] ?? null;
        $this->container['log_type'] = $data['log_type'] ?? null;
        $this->container['logger_id'] = $data['logger_id'] ?? null;
        $this->container['logger_name'] = $data['logger_name'] ?? null;
        $this->container['order_ids'] = $data['order_ids'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string|null
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string|null $direction direction
     *
     * @return self
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

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
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets file_names
     *
     * @return string[]|null
     */
    public function getFileNames()
    {
        return $this->container['file_names'];
    }

    /**
     * Sets file_names
     *
     * @param string[]|null $file_names file_names
     *
     * @return self
     */
    public function setFileNames($file_names)
    {
        $this->container['file_names'] = $file_names;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id item_id
     *
     * @return self
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_ipn_oid
     *
     * @return int|null
     */
    public function getItemIpnOid()
    {
        return $this->container['item_ipn_oid'];
    }

    /**
     * Sets item_ipn_oid
     *
     * @param int|null $item_ipn_oid item_ipn_oid
     *
     * @return self
     */
    public function setItemIpnOid($item_ipn_oid)
    {
        $this->container['item_ipn_oid'] = $item_ipn_oid;

        return $this;
    }

    /**
     * Gets log_dts_begin
     *
     * @return string|null
     */
    public function getLogDtsBegin()
    {
        return $this->container['log_dts_begin'];
    }

    /**
     * Sets log_dts_begin
     *
     * @param string|null $log_dts_begin Log date/time begin
     *
     * @return self
     */
    public function setLogDtsBegin($log_dts_begin)
    {
        $this->container['log_dts_begin'] = $log_dts_begin;

        return $this;
    }

    /**
     * Gets log_dts_end
     *
     * @return string|null
     */
    public function getLogDtsEnd()
    {
        return $this->container['log_dts_end'];
    }

    /**
     * Sets log_dts_end
     *
     * @param string|null $log_dts_end Log date/time end
     *
     * @return self
     */
    public function setLogDtsEnd($log_dts_end)
    {
        $this->container['log_dts_end'] = $log_dts_end;

        return $this;
    }

    /**
     * Gets log_type
     *
     * @return string|null
     */
    public function getLogType()
    {
        return $this->container['log_type'];
    }

    /**
     * Sets log_type
     *
     * @param string|null $log_type log_type
     *
     * @return self
     */
    public function setLogType($log_type)
    {
        $this->container['log_type'] = $log_type;

        return $this;
    }

    /**
     * Gets logger_id
     *
     * @return string|null
     */
    public function getLoggerId()
    {
        return $this->container['logger_id'];
    }

    /**
     * Sets logger_id
     *
     * @param string|null $logger_id logger_id
     *
     * @return self
     */
    public function setLoggerId($logger_id)
    {
        $this->container['logger_id'] = $logger_id;

        return $this;
    }

    /**
     * Gets logger_name
     *
     * @return string|null
     */
    public function getLoggerName()
    {
        return $this->container['logger_name'];
    }

    /**
     * Sets logger_name
     *
     * @param string|null $logger_name logger_name
     *
     * @return self
     */
    public function setLoggerName($logger_name)
    {
        $this->container['logger_name'] = $logger_name;

        return $this;
    }

    /**
     * Gets order_ids
     *
     * @return string[]|null
     */
    public function getOrderIds()
    {
        return $this->container['order_ids'];
    }

    /**
     * Sets order_ids
     *
     * @param string[]|null $order_ids order_ids
     *
     * @return self
     */
    public function setOrderIds($order_ids)
    {
        $this->container['order_ids'] = $order_ids;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
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


