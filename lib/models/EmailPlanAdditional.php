<?php
/**
 * EmailPlanAdditional
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
 * EmailPlanAdditional Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailPlanAdditional implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailPlanAdditional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can_downgrade' => 'bool',
        'can_upgrade' => 'bool',
        'cost' => 'float',
        'cost_change' => 'float',
        'cost_change_formatted' => 'string',
        'cost_formatted' => 'string',
        'customers' => 'int',
        'emails' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can_downgrade' => null,
        'can_upgrade' => null,
        'cost' => null,
        'cost_change' => null,
        'cost_change_formatted' => null,
        'cost_formatted' => null,
        'customers' => 'int32',
        'emails' => 'int32'
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
        'can_downgrade' => 'can_downgrade',
        'can_upgrade' => 'can_upgrade',
        'cost' => 'cost',
        'cost_change' => 'cost_change',
        'cost_change_formatted' => 'cost_change_formatted',
        'cost_formatted' => 'cost_formatted',
        'customers' => 'customers',
        'emails' => 'emails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_downgrade' => 'setCanDowngrade',
        'can_upgrade' => 'setCanUpgrade',
        'cost' => 'setCost',
        'cost_change' => 'setCostChange',
        'cost_change_formatted' => 'setCostChangeFormatted',
        'cost_formatted' => 'setCostFormatted',
        'customers' => 'setCustomers',
        'emails' => 'setEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_downgrade' => 'getCanDowngrade',
        'can_upgrade' => 'getCanUpgrade',
        'cost' => 'getCost',
        'cost_change' => 'getCostChange',
        'cost_change_formatted' => 'getCostChangeFormatted',
        'cost_formatted' => 'getCostFormatted',
        'customers' => 'getCustomers',
        'emails' => 'getEmails'
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
        $this->container['can_downgrade'] = isset($data['can_downgrade']) ? $data['can_downgrade'] : null;
        $this->container['can_upgrade'] = isset($data['can_upgrade']) ? $data['can_upgrade'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['cost_change'] = isset($data['cost_change']) ? $data['cost_change'] : null;
        $this->container['cost_change_formatted'] = isset($data['cost_change_formatted']) ? $data['cost_change_formatted'] : null;
        $this->container['cost_formatted'] = isset($data['cost_formatted']) ? $data['cost_formatted'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
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
     * Gets can_downgrade
     *
     * @return bool
     */
    public function getCanDowngrade()
    {
        return $this->container['can_downgrade'];
    }

    /**
     * Sets can_downgrade
     *
     * @param bool $can_downgrade can_downgrade
     *
     * @return $this
     */
    public function setCanDowngrade($can_downgrade)
    {
        $this->container['can_downgrade'] = $can_downgrade;

        return $this;
    }

    /**
     * Gets can_upgrade
     *
     * @return bool
     */
    public function getCanUpgrade()
    {
        return $this->container['can_upgrade'];
    }

    /**
     * Sets can_upgrade
     *
     * @param bool $can_upgrade can_upgrade
     *
     * @return $this
     */
    public function setCanUpgrade($can_upgrade)
    {
        $this->container['can_upgrade'] = $can_upgrade;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets cost_change
     *
     * @return float
     */
    public function getCostChange()
    {
        return $this->container['cost_change'];
    }

    /**
     * Sets cost_change
     *
     * @param float $cost_change cost_change
     *
     * @return $this
     */
    public function setCostChange($cost_change)
    {
        $this->container['cost_change'] = $cost_change;

        return $this;
    }

    /**
     * Gets cost_change_formatted
     *
     * @return string
     */
    public function getCostChangeFormatted()
    {
        return $this->container['cost_change_formatted'];
    }

    /**
     * Sets cost_change_formatted
     *
     * @param string $cost_change_formatted cost_change_formatted
     *
     * @return $this
     */
    public function setCostChangeFormatted($cost_change_formatted)
    {
        $this->container['cost_change_formatted'] = $cost_change_formatted;

        return $this;
    }

    /**
     * Gets cost_formatted
     *
     * @return string
     */
    public function getCostFormatted()
    {
        return $this->container['cost_formatted'];
    }

    /**
     * Sets cost_formatted
     *
     * @param string $cost_formatted cost_formatted
     *
     * @return $this
     */
    public function setCostFormatted($cost_formatted)
    {
        $this->container['cost_formatted'] = $cost_formatted;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return int
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param int $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return int
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param int $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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


