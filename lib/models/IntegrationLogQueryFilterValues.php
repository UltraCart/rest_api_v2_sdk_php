<?php
/**
 * IntegrationLogQueryFilterValues
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
 * IntegrationLogQueryFilterValues Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IntegrationLogQueryFilterValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IntegrationLogQueryFilterValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'actions' => 'string[]',
        'directions' => 'string[]',
        'emails' => 'string[]',
        'file_names' => 'string[]',
        'item_ids' => 'string[]',
        'item_ipn_oids' => 'int[]',
        'log_dts_max' => 'string',
        'log_dts_min' => 'string',
        'log_types' => 'string[]',
        'logger_names' => 'string[]',
        'order_ids' => 'string[]',
        'statuses' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'actions' => null,
        'directions' => null,
        'emails' => null,
        'file_names' => null,
        'item_ids' => null,
        'item_ipn_oids' => null,
        'log_dts_max' => 'dateTime',
        'log_dts_min' => 'dateTime',
        'log_types' => null,
        'logger_names' => null,
        'order_ids' => null,
        'statuses' => null
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
        'actions' => 'actions',
        'directions' => 'directions',
        'emails' => 'emails',
        'file_names' => 'file_names',
        'item_ids' => 'item_ids',
        'item_ipn_oids' => 'item_ipn_oids',
        'log_dts_max' => 'log_dts_max',
        'log_dts_min' => 'log_dts_min',
        'log_types' => 'log_types',
        'logger_names' => 'logger_names',
        'order_ids' => 'order_ids',
        'statuses' => 'statuses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actions' => 'setActions',
        'directions' => 'setDirections',
        'emails' => 'setEmails',
        'file_names' => 'setFileNames',
        'item_ids' => 'setItemIds',
        'item_ipn_oids' => 'setItemIpnOids',
        'log_dts_max' => 'setLogDtsMax',
        'log_dts_min' => 'setLogDtsMin',
        'log_types' => 'setLogTypes',
        'logger_names' => 'setLoggerNames',
        'order_ids' => 'setOrderIds',
        'statuses' => 'setStatuses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actions' => 'getActions',
        'directions' => 'getDirections',
        'emails' => 'getEmails',
        'file_names' => 'getFileNames',
        'item_ids' => 'getItemIds',
        'item_ipn_oids' => 'getItemIpnOids',
        'log_dts_max' => 'getLogDtsMax',
        'log_dts_min' => 'getLogDtsMin',
        'log_types' => 'getLogTypes',
        'logger_names' => 'getLoggerNames',
        'order_ids' => 'getOrderIds',
        'statuses' => 'getStatuses'
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
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['directions'] = isset($data['directions']) ? $data['directions'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['file_names'] = isset($data['file_names']) ? $data['file_names'] : null;
        $this->container['item_ids'] = isset($data['item_ids']) ? $data['item_ids'] : null;
        $this->container['item_ipn_oids'] = isset($data['item_ipn_oids']) ? $data['item_ipn_oids'] : null;
        $this->container['log_dts_max'] = isset($data['log_dts_max']) ? $data['log_dts_max'] : null;
        $this->container['log_dts_min'] = isset($data['log_dts_min']) ? $data['log_dts_min'] : null;
        $this->container['log_types'] = isset($data['log_types']) ? $data['log_types'] : null;
        $this->container['logger_names'] = isset($data['logger_names']) ? $data['logger_names'] : null;
        $this->container['order_ids'] = isset($data['order_ids']) ? $data['order_ids'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
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
     * Gets actions
     *
     * @return string[]
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param string[] $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets directions
     *
     * @return string[]
     */
    public function getDirections()
    {
        return $this->container['directions'];
    }

    /**
     * Sets directions
     *
     * @param string[] $directions directions
     *
     * @return $this
     */
    public function setDirections($directions)
    {
        $this->container['directions'] = $directions;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return string[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param string[] $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets file_names
     *
     * @return string[]
     */
    public function getFileNames()
    {
        return $this->container['file_names'];
    }

    /**
     * Sets file_names
     *
     * @param string[] $file_names file_names
     *
     * @return $this
     */
    public function setFileNames($file_names)
    {
        $this->container['file_names'] = $file_names;

        return $this;
    }

    /**
     * Gets item_ids
     *
     * @return string[]
     */
    public function getItemIds()
    {
        return $this->container['item_ids'];
    }

    /**
     * Sets item_ids
     *
     * @param string[] $item_ids item_ids
     *
     * @return $this
     */
    public function setItemIds($item_ids)
    {
        $this->container['item_ids'] = $item_ids;

        return $this;
    }

    /**
     * Gets item_ipn_oids
     *
     * @return int[]
     */
    public function getItemIpnOids()
    {
        return $this->container['item_ipn_oids'];
    }

    /**
     * Sets item_ipn_oids
     *
     * @param int[] $item_ipn_oids item_ipn_oids
     *
     * @return $this
     */
    public function setItemIpnOids($item_ipn_oids)
    {
        $this->container['item_ipn_oids'] = $item_ipn_oids;

        return $this;
    }

    /**
     * Gets log_dts_max
     *
     * @return string
     */
    public function getLogDtsMax()
    {
        return $this->container['log_dts_max'];
    }

    /**
     * Sets log_dts_max
     *
     * @param string $log_dts_max Maximum date/time log date/time
     *
     * @return $this
     */
    public function setLogDtsMax($log_dts_max)
    {
        $this->container['log_dts_max'] = $log_dts_max;

        return $this;
    }

    /**
     * Gets log_dts_min
     *
     * @return string
     */
    public function getLogDtsMin()
    {
        return $this->container['log_dts_min'];
    }

    /**
     * Sets log_dts_min
     *
     * @param string $log_dts_min Minimum date/time log date/time
     *
     * @return $this
     */
    public function setLogDtsMin($log_dts_min)
    {
        $this->container['log_dts_min'] = $log_dts_min;

        return $this;
    }

    /**
     * Gets log_types
     *
     * @return string[]
     */
    public function getLogTypes()
    {
        return $this->container['log_types'];
    }

    /**
     * Sets log_types
     *
     * @param string[] $log_types log_types
     *
     * @return $this
     */
    public function setLogTypes($log_types)
    {
        $this->container['log_types'] = $log_types;

        return $this;
    }

    /**
     * Gets logger_names
     *
     * @return string[]
     */
    public function getLoggerNames()
    {
        return $this->container['logger_names'];
    }

    /**
     * Sets logger_names
     *
     * @param string[] $logger_names logger_names
     *
     * @return $this
     */
    public function setLoggerNames($logger_names)
    {
        $this->container['logger_names'] = $logger_names;

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
     * Gets statuses
     *
     * @return string[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param string[] $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

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


