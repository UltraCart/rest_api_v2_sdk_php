<?php
/**
 * ConversationEngagement
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
 * ConversationEngagement Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationEngagement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationEngagement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'conversation_engagement_oid' => 'int',
        'customer_greeting' => 'string',
        'customer_initiated' => 'bool',
        'department_oids' => 'int[]',
        'engagement_name' => 'string',
        'equation' => '\ultracart\v2\models\ConversationEngagementEquation',
        'time_on_page' => 'int',
        'visitor_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'conversation_engagement_oid' => 'int32',
        'customer_greeting' => null,
        'customer_initiated' => null,
        'department_oids' => null,
        'engagement_name' => null,
        'equation' => null,
        'time_on_page' => 'int32',
        'visitor_type' => null
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
        'active' => 'active',
        'conversation_engagement_oid' => 'conversation_engagement_oid',
        'customer_greeting' => 'customer_greeting',
        'customer_initiated' => 'customer_initiated',
        'department_oids' => 'department_oids',
        'engagement_name' => 'engagement_name',
        'equation' => 'equation',
        'time_on_page' => 'time_on_page',
        'visitor_type' => 'visitor_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'conversation_engagement_oid' => 'setConversationEngagementOid',
        'customer_greeting' => 'setCustomerGreeting',
        'customer_initiated' => 'setCustomerInitiated',
        'department_oids' => 'setDepartmentOids',
        'engagement_name' => 'setEngagementName',
        'equation' => 'setEquation',
        'time_on_page' => 'setTimeOnPage',
        'visitor_type' => 'setVisitorType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'conversation_engagement_oid' => 'getConversationEngagementOid',
        'customer_greeting' => 'getCustomerGreeting',
        'customer_initiated' => 'getCustomerInitiated',
        'department_oids' => 'getDepartmentOids',
        'engagement_name' => 'getEngagementName',
        'equation' => 'getEquation',
        'time_on_page' => 'getTimeOnPage',
        'visitor_type' => 'getVisitorType'
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

    const VISITOR_TYPE_ALL = 'all';
    const VISITOR_TYPE_FIRST_TIME = 'first time';
    const VISITOR_TYPE_RETURNING = 'returning';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisitorTypeAllowableValues()
    {
        return [
            self::VISITOR_TYPE_ALL,
            self::VISITOR_TYPE_FIRST_TIME,
            self::VISITOR_TYPE_RETURNING,
        ];
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['conversation_engagement_oid'] = isset($data['conversation_engagement_oid']) ? $data['conversation_engagement_oid'] : null;
        $this->container['customer_greeting'] = isset($data['customer_greeting']) ? $data['customer_greeting'] : null;
        $this->container['customer_initiated'] = isset($data['customer_initiated']) ? $data['customer_initiated'] : null;
        $this->container['department_oids'] = isset($data['department_oids']) ? $data['department_oids'] : null;
        $this->container['engagement_name'] = isset($data['engagement_name']) ? $data['engagement_name'] : null;
        $this->container['equation'] = isset($data['equation']) ? $data['equation'] : null;
        $this->container['time_on_page'] = isset($data['time_on_page']) ? $data['time_on_page'] : null;
        $this->container['visitor_type'] = isset($data['visitor_type']) ? $data['visitor_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getVisitorTypeAllowableValues();
        if (!is_null($this->container['visitor_type']) && !in_array($this->container['visitor_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'visitor_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets conversation_engagement_oid
     *
     * @return int
     */
    public function getConversationEngagementOid()
    {
        return $this->container['conversation_engagement_oid'];
    }

    /**
     * Sets conversation_engagement_oid
     *
     * @param int $conversation_engagement_oid conversation_engagement_oid
     *
     * @return $this
     */
    public function setConversationEngagementOid($conversation_engagement_oid)
    {
        $this->container['conversation_engagement_oid'] = $conversation_engagement_oid;

        return $this;
    }

    /**
     * Gets customer_greeting
     *
     * @return string
     */
    public function getCustomerGreeting()
    {
        return $this->container['customer_greeting'];
    }

    /**
     * Sets customer_greeting
     *
     * @param string $customer_greeting customer_greeting
     *
     * @return $this
     */
    public function setCustomerGreeting($customer_greeting)
    {
        $this->container['customer_greeting'] = $customer_greeting;

        return $this;
    }

    /**
     * Gets customer_initiated
     *
     * @return bool
     */
    public function getCustomerInitiated()
    {
        return $this->container['customer_initiated'];
    }

    /**
     * Sets customer_initiated
     *
     * @param bool $customer_initiated customer_initiated
     *
     * @return $this
     */
    public function setCustomerInitiated($customer_initiated)
    {
        $this->container['customer_initiated'] = $customer_initiated;

        return $this;
    }

    /**
     * Gets department_oids
     *
     * @return int[]
     */
    public function getDepartmentOids()
    {
        return $this->container['department_oids'];
    }

    /**
     * Sets department_oids
     *
     * @param int[] $department_oids department_oids
     *
     * @return $this
     */
    public function setDepartmentOids($department_oids)
    {
        $this->container['department_oids'] = $department_oids;

        return $this;
    }

    /**
     * Gets engagement_name
     *
     * @return string
     */
    public function getEngagementName()
    {
        return $this->container['engagement_name'];
    }

    /**
     * Sets engagement_name
     *
     * @param string $engagement_name engagement_name
     *
     * @return $this
     */
    public function setEngagementName($engagement_name)
    {
        $this->container['engagement_name'] = $engagement_name;

        return $this;
    }

    /**
     * Gets equation
     *
     * @return \ultracart\v2\models\ConversationEngagementEquation
     */
    public function getEquation()
    {
        return $this->container['equation'];
    }

    /**
     * Sets equation
     *
     * @param \ultracart\v2\models\ConversationEngagementEquation $equation equation
     *
     * @return $this
     */
    public function setEquation($equation)
    {
        $this->container['equation'] = $equation;

        return $this;
    }

    /**
     * Gets time_on_page
     *
     * @return int
     */
    public function getTimeOnPage()
    {
        return $this->container['time_on_page'];
    }

    /**
     * Sets time_on_page
     *
     * @param int $time_on_page time_on_page
     *
     * @return $this
     */
    public function setTimeOnPage($time_on_page)
    {
        $this->container['time_on_page'] = $time_on_page;

        return $this;
    }

    /**
     * Gets visitor_type
     *
     * @return string
     */
    public function getVisitorType()
    {
        return $this->container['visitor_type'];
    }

    /**
     * Sets visitor_type
     *
     * @param string $visitor_type The type of visitor
     *
     * @return $this
     */
    public function setVisitorType($visitor_type)
    {
        $allowedValues = $this->getVisitorTypeAllowableValues();
        if (!is_null($visitor_type) && !in_array($visitor_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'visitor_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['visitor_type'] = $visitor_type;

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


