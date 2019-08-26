<?php
/**
 * Experiment
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
 * Experiment Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Experiment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Experiment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'container_id' => 'string',
        'duration_days' => 'int',
        'end_dts' => 'string',
        'equal_weighting' => 'bool',
        'id' => 'string',
        'name' => 'string',
        'notes' => 'string',
        'objective' => 'string',
        'optimization_type' => 'string',
        'session_count' => 'int',
        'start_dts' => 'string',
        'status' => 'string',
        'storefront_experiment_oid' => 'int',
        'storefront_oid' => 'int',
        'uri' => 'string',
        'variations' => '\ultracart\v2\models\ExperimentVariation[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'container_id' => null,
        'duration_days' => 'int32',
        'end_dts' => 'dateTime',
        'equal_weighting' => null,
        'id' => null,
        'name' => null,
        'notes' => null,
        'objective' => null,
        'optimization_type' => null,
        'session_count' => 'int32',
        'start_dts' => 'dateTime',
        'status' => null,
        'storefront_experiment_oid' => 'int32',
        'storefront_oid' => 'int32',
        'uri' => null,
        'variations' => null
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
        'container_id' => 'container_id',
        'duration_days' => 'duration_days',
        'end_dts' => 'end_dts',
        'equal_weighting' => 'equal_weighting',
        'id' => 'id',
        'name' => 'name',
        'notes' => 'notes',
        'objective' => 'objective',
        'optimization_type' => 'optimization_type',
        'session_count' => 'session_count',
        'start_dts' => 'start_dts',
        'status' => 'status',
        'storefront_experiment_oid' => 'storefront_experiment_oid',
        'storefront_oid' => 'storefront_oid',
        'uri' => 'uri',
        'variations' => 'variations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'container_id' => 'setContainerId',
        'duration_days' => 'setDurationDays',
        'end_dts' => 'setEndDts',
        'equal_weighting' => 'setEqualWeighting',
        'id' => 'setId',
        'name' => 'setName',
        'notes' => 'setNotes',
        'objective' => 'setObjective',
        'optimization_type' => 'setOptimizationType',
        'session_count' => 'setSessionCount',
        'start_dts' => 'setStartDts',
        'status' => 'setStatus',
        'storefront_experiment_oid' => 'setStorefrontExperimentOid',
        'storefront_oid' => 'setStorefrontOid',
        'uri' => 'setUri',
        'variations' => 'setVariations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_id' => 'getContainerId',
        'duration_days' => 'getDurationDays',
        'end_dts' => 'getEndDts',
        'equal_weighting' => 'getEqualWeighting',
        'id' => 'getId',
        'name' => 'getName',
        'notes' => 'getNotes',
        'objective' => 'getObjective',
        'optimization_type' => 'getOptimizationType',
        'session_count' => 'getSessionCount',
        'start_dts' => 'getStartDts',
        'status' => 'getStatus',
        'storefront_experiment_oid' => 'getStorefrontExperimentOid',
        'storefront_oid' => 'getStorefrontOid',
        'uri' => 'getUri',
        'variations' => 'getVariations'
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

    const STATUS_RUNNING = 'Running';
    const STATUS_ENDED = 'Ended';
    const STATUS_DELETED = 'Deleted';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_ENDED,
            self::STATUS_DELETED,
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
        $this->container['container_id'] = isset($data['container_id']) ? $data['container_id'] : null;
        $this->container['duration_days'] = isset($data['duration_days']) ? $data['duration_days'] : null;
        $this->container['end_dts'] = isset($data['end_dts']) ? $data['end_dts'] : null;
        $this->container['equal_weighting'] = isset($data['equal_weighting']) ? $data['equal_weighting'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['objective'] = isset($data['objective']) ? $data['objective'] : null;
        $this->container['optimization_type'] = isset($data['optimization_type']) ? $data['optimization_type'] : null;
        $this->container['session_count'] = isset($data['session_count']) ? $data['session_count'] : null;
        $this->container['start_dts'] = isset($data['start_dts']) ? $data['start_dts'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['storefront_experiment_oid'] = isset($data['storefront_experiment_oid']) ? $data['storefront_experiment_oid'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets container_id
     *
     * @return string
     */
    public function getContainerId()
    {
        return $this->container['container_id'];
    }

    /**
     * Sets container_id
     *
     * @param string $container_id Contained ID where the experiment element was located
     *
     * @return $this
     */
    public function setContainerId($container_id)
    {
        $this->container['container_id'] = $container_id;

        return $this;
    }

    /**
     * Gets duration_days
     *
     * @return int
     */
    public function getDurationDays()
    {
        return $this->container['duration_days'];
    }

    /**
     * Sets duration_days
     *
     * @param int $duration_days Duration in days
     *
     * @return $this
     */
    public function setDurationDays($duration_days)
    {
        $this->container['duration_days'] = $duration_days;

        return $this;
    }

    /**
     * Gets end_dts
     *
     * @return string
     */
    public function getEndDts()
    {
        return $this->container['end_dts'];
    }

    /**
     * Sets end_dts
     *
     * @param string $end_dts End date/time
     *
     * @return $this
     */
    public function setEndDts($end_dts)
    {
        $this->container['end_dts'] = $end_dts;

        return $this;
    }

    /**
     * Gets equal_weighting
     *
     * @return bool
     */
    public function getEqualWeighting()
    {
        return $this->container['equal_weighting'];
    }

    /**
     * Sets equal_weighting
     *
     * @param bool $equal_weighting Whether or not traffic is equally weighted or shifts over time during the experiment
     *
     * @return $this
     */
    public function setEqualWeighting($equal_weighting)
    {
        $this->container['equal_weighting'] = $equal_weighting;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Experiment id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Experiment name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Notes about the experiment
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets objective
     *
     * @return string
     */
    public function getObjective()
    {
        return $this->container['objective'];
    }

    /**
     * Sets objective
     *
     * @param string $objective Objective that is being optimized
     *
     * @return $this
     */
    public function setObjective($objective)
    {
        $this->container['objective'] = $objective;

        return $this;
    }

    /**
     * Gets optimization_type
     *
     * @return string
     */
    public function getOptimizationType()
    {
        return $this->container['optimization_type'];
    }

    /**
     * Sets optimization_type
     *
     * @param string $optimization_type Type of optimization
     *
     * @return $this
     */
    public function setOptimizationType($optimization_type)
    {
        $this->container['optimization_type'] = $optimization_type;

        return $this;
    }

    /**
     * Gets session_count
     *
     * @return int
     */
    public function getSessionCount()
    {
        return $this->container['session_count'];
    }

    /**
     * Sets session_count
     *
     * @param int $session_count Total number of sessions in the experiment
     *
     * @return $this
     */
    public function setSessionCount($session_count)
    {
        $this->container['session_count'] = $session_count;

        return $this;
    }

    /**
     * Gets start_dts
     *
     * @return string
     */
    public function getStartDts()
    {
        return $this->container['start_dts'];
    }

    /**
     * Sets start_dts
     *
     * @param string $start_dts Start date/time
     *
     * @return $this
     */
    public function setStartDts($start_dts)
    {
        $this->container['start_dts'] = $start_dts;

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
     * @param string $status Status of the experiment
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets storefront_experiment_oid
     *
     * @return int
     */
    public function getStorefrontExperimentOid()
    {
        return $this->container['storefront_experiment_oid'];
    }

    /**
     * Sets storefront_experiment_oid
     *
     * @param int $storefront_experiment_oid Storefront Experiment Oid
     *
     * @return $this
     */
    public function setStorefrontExperimentOid($storefront_experiment_oid)
    {
        $this->container['storefront_experiment_oid'] = $storefront_experiment_oid;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int $storefront_oid Storefront oid
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string $uri URI the experiment was started on
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return \ultracart\v2\models\ExperimentVariation[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \ultracart\v2\models\ExperimentVariation[] $variations Variations being tested in the experiment
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

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


