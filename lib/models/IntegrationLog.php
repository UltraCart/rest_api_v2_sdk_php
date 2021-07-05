<?php
/**
 * IntegrationLog
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
 * IntegrationLog Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'direction' => 'string',
        'email' => 'string',
        'files' => '\ultracart\v2\models\IntegrationLogFile[]',
        'integration_log_oid' => 'int',
        'item_id' => 'string',
        'item_ipn_oid' => 'int',
        'log_dts' => 'string',
        'log_type' => 'string',
        'logger_id' => 'string',
        'logger_name' => 'string',
        'logs' => '\ultracart\v2\models\IntegrationLogLog[]',
        'omit_log_map' => 'bool',
        'order_ids' => 'string[]',
        'pk' => 'string',
        'sk' => 'string',
        'status' => 'string',
        'status_code' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'action' => null,
        'direction' => null,
        'email' => null,
        'files' => null,
        'integration_log_oid' => 'int32',
        'item_id' => null,
        'item_ipn_oid' => 'int32',
        'log_dts' => null,
        'log_type' => null,
        'logger_id' => null,
        'logger_name' => null,
        'logs' => null,
        'omit_log_map' => null,
        'order_ids' => null,
        'pk' => null,
        'sk' => null,
        'status' => null,
        'status_code' => 'int32'
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
        'action' => 'action',
        'direction' => 'direction',
        'email' => 'email',
        'files' => 'files',
        'integration_log_oid' => 'integration_log_oid',
        'item_id' => 'item_id',
        'item_ipn_oid' => 'item_ipn_oid',
        'log_dts' => 'log_dts',
        'log_type' => 'log_type',
        'logger_id' => 'logger_id',
        'logger_name' => 'logger_name',
        'logs' => 'logs',
        'omit_log_map' => 'omit_log_map',
        'order_ids' => 'order_ids',
        'pk' => 'pk',
        'sk' => 'sk',
        'status' => 'status',
        'status_code' => 'status_code'
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
        'files' => 'setFiles',
        'integration_log_oid' => 'setIntegrationLogOid',
        'item_id' => 'setItemId',
        'item_ipn_oid' => 'setItemIpnOid',
        'log_dts' => 'setLogDts',
        'log_type' => 'setLogType',
        'logger_id' => 'setLoggerId',
        'logger_name' => 'setLoggerName',
        'logs' => 'setLogs',
        'omit_log_map' => 'setOmitLogMap',
        'order_ids' => 'setOrderIds',
        'pk' => 'setPk',
        'sk' => 'setSk',
        'status' => 'setStatus',
        'status_code' => 'setStatusCode'
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
        'files' => 'getFiles',
        'integration_log_oid' => 'getIntegrationLogOid',
        'item_id' => 'getItemId',
        'item_ipn_oid' => 'getItemIpnOid',
        'log_dts' => 'getLogDts',
        'log_type' => 'getLogType',
        'logger_id' => 'getLoggerId',
        'logger_name' => 'getLoggerName',
        'logs' => 'getLogs',
        'omit_log_map' => 'getOmitLogMap',
        'order_ids' => 'getOrderIds',
        'pk' => 'getPk',
        'sk' => 'getSk',
        'status' => 'getStatus',
        'status_code' => 'getStatusCode'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['integration_log_oid'] = isset($data['integration_log_oid']) ? $data['integration_log_oid'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_ipn_oid'] = isset($data['item_ipn_oid']) ? $data['item_ipn_oid'] : null;
        $this->container['log_dts'] = isset($data['log_dts']) ? $data['log_dts'] : null;
        $this->container['log_type'] = isset($data['log_type']) ? $data['log_type'] : null;
        $this->container['logger_id'] = isset($data['logger_id']) ? $data['logger_id'] : null;
        $this->container['logger_name'] = isset($data['logger_name']) ? $data['logger_name'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['omit_log_map'] = isset($data['omit_log_map']) ? $data['omit_log_map'] : null;
        $this->container['order_ids'] = isset($data['order_ids']) ? $data['order_ids'] : null;
        $this->container['pk'] = isset($data['pk']) ? $data['pk'] : null;
        $this->container['sk'] = isset($data['sk']) ? $data['sk'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
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
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

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
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \ultracart\v2\models\IntegrationLogFile[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \ultracart\v2\models\IntegrationLogFile[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets integration_log_oid
     *
     * @return int
     */
    public function getIntegrationLogOid()
    {
        return $this->container['integration_log_oid'];
    }

    /**
     * Sets integration_log_oid
     *
     * @param int $integration_log_oid integration_log_oid
     *
     * @return $this
     */
    public function setIntegrationLogOid($integration_log_oid)
    {
        $this->container['integration_log_oid'] = $integration_log_oid;

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
     * @param string $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_ipn_oid
     *
     * @return int
     */
    public function getItemIpnOid()
    {
        return $this->container['item_ipn_oid'];
    }

    /**
     * Sets item_ipn_oid
     *
     * @param int $item_ipn_oid item_ipn_oid
     *
     * @return $this
     */
    public function setItemIpnOid($item_ipn_oid)
    {
        $this->container['item_ipn_oid'] = $item_ipn_oid;

        return $this;
    }

    /**
     * Gets log_dts
     *
     * @return string
     */
    public function getLogDts()
    {
        return $this->container['log_dts'];
    }

    /**
     * Sets log_dts
     *
     * @param string $log_dts log_dts
     *
     * @return $this
     */
    public function setLogDts($log_dts)
    {
        $this->container['log_dts'] = $log_dts;

        return $this;
    }

    /**
     * Gets log_type
     *
     * @return string
     */
    public function getLogType()
    {
        return $this->container['log_type'];
    }

    /**
     * Sets log_type
     *
     * @param string $log_type log_type
     *
     * @return $this
     */
    public function setLogType($log_type)
    {
        $this->container['log_type'] = $log_type;

        return $this;
    }

    /**
     * Gets logger_id
     *
     * @return string
     */
    public function getLoggerId()
    {
        return $this->container['logger_id'];
    }

    /**
     * Sets logger_id
     *
     * @param string $logger_id logger_id
     *
     * @return $this
     */
    public function setLoggerId($logger_id)
    {
        $this->container['logger_id'] = $logger_id;

        return $this;
    }

    /**
     * Gets logger_name
     *
     * @return string
     */
    public function getLoggerName()
    {
        return $this->container['logger_name'];
    }

    /**
     * Sets logger_name
     *
     * @param string $logger_name logger_name
     *
     * @return $this
     */
    public function setLoggerName($logger_name)
    {
        $this->container['logger_name'] = $logger_name;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \ultracart\v2\models\IntegrationLogLog[]
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \ultracart\v2\models\IntegrationLogLog[] $logs logs
     *
     * @return $this
     */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;

        return $this;
    }

    /**
     * Gets omit_log_map
     *
     * @return bool
     */
    public function getOmitLogMap()
    {
        return $this->container['omit_log_map'];
    }

    /**
     * Sets omit_log_map
     *
     * @param bool $omit_log_map omit_log_map
     *
     * @return $this
     */
    public function setOmitLogMap($omit_log_map)
    {
        $this->container['omit_log_map'] = $omit_log_map;

        return $this;
    }

    /**
     * Gets order_ids
     *
     * @return string[]
     */
    public function getOrderIds()
    {
        return $this->container['order_ids'];
    }

    /**
     * Sets order_ids
     *
     * @param string[] $order_ids order_ids
     *
     * @return $this
     */
    public function setOrderIds($order_ids)
    {
        $this->container['order_ids'] = $order_ids;

        return $this;
    }

    /**
     * Gets pk
     *
     * @return string
     */
    public function getPk()
    {
        return $this->container['pk'];
    }

    /**
     * Sets pk
     *
     * @param string $pk pk
     *
     * @return $this
     */
    public function setPk($pk)
    {
        $this->container['pk'] = $pk;

        return $this;
    }

    /**
     * Gets sk
     *
     * @return string
     */
    public function getSk()
    {
        return $this->container['sk'];
    }

    /**
     * Sets sk
     *
     * @param string $sk sk
     *
     * @return $this
     */
    public function setSk($sk)
    {
        $this->container['sk'] = $sk;

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
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code status_code
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

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


