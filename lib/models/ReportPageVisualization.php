<?php
/**
 * ReportPageVisualization
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
 * ReportPageVisualization Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportPageVisualization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportPageVisualization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'config' => 'string',
        'data_source_name' => 'string',
        'dimensions' => '\ultracart\v2\models\ReportPageVisualizationDimension[]',
        'metrics' => '\ultracart\v2\models\ReportPageVisualizationMetric[]',
        'name' => 'string',
        'show_comparison' => 'bool',
        'styles' => 'string',
        'type' => 'string',
        'visualization_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'config' => null,
        'data_source_name' => null,
        'dimensions' => null,
        'metrics' => null,
        'name' => null,
        'show_comparison' => null,
        'styles' => null,
        'type' => null,
        'visualization_uuid' => null
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
        'config' => 'config',
        'data_source_name' => 'data_source_name',
        'dimensions' => 'dimensions',
        'metrics' => 'metrics',
        'name' => 'name',
        'show_comparison' => 'show_comparison',
        'styles' => 'styles',
        'type' => 'type',
        'visualization_uuid' => 'visualization_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'config' => 'setConfig',
        'data_source_name' => 'setDataSourceName',
        'dimensions' => 'setDimensions',
        'metrics' => 'setMetrics',
        'name' => 'setName',
        'show_comparison' => 'setShowComparison',
        'styles' => 'setStyles',
        'type' => 'setType',
        'visualization_uuid' => 'setVisualizationUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'config' => 'getConfig',
        'data_source_name' => 'getDataSourceName',
        'dimensions' => 'getDimensions',
        'metrics' => 'getMetrics',
        'name' => 'getName',
        'show_comparison' => 'getShowComparison',
        'styles' => 'getStyles',
        'type' => 'getType',
        'visualization_uuid' => 'getVisualizationUuid'
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

    const TYPE_SCORE_CARD = 'score card';
    const TYPE_LINE_CHART = 'line chart';
    const TYPE_BAR_CHART = 'bar chart';
    const TYPE_TEXT = 'text';
    const TYPE_TABLE = 'table';
    const TYPE_GAUGE = 'gauge';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SCORE_CARD,
            self::TYPE_LINE_CHART,
            self::TYPE_BAR_CHART,
            self::TYPE_TEXT,
            self::TYPE_TABLE,
            self::TYPE_GAUGE,
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
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['data_source_name'] = isset($data['data_source_name']) ? $data['data_source_name'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['metrics'] = isset($data['metrics']) ? $data['metrics'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['show_comparison'] = isset($data['show_comparison']) ? $data['show_comparison'] : null;
        $this->container['styles'] = isset($data['styles']) ? $data['styles'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['visualization_uuid'] = isset($data['visualization_uuid']) ? $data['visualization_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string $config A JSON representation of the configuration for this visualization
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets data_source_name
     *
     * @return string
     */
    public function getDataSourceName()
    {
        return $this->container['data_source_name'];
    }

    /**
     * Sets data_source_name
     *
     * @param string $data_source_name data_source_name
     *
     * @return $this
     */
    public function setDataSourceName($data_source_name)
    {
        $this->container['data_source_name'] = $data_source_name;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \ultracart\v2\models\ReportPageVisualizationDimension[]
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \ultracart\v2\models\ReportPageVisualizationDimension[] $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \ultracart\v2\models\ReportPageVisualizationMetric[]
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \ultracart\v2\models\ReportPageVisualizationMetric[] $metrics metrics
     *
     * @return $this
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets show_comparison
     *
     * @return bool
     */
    public function getShowComparison()
    {
        return $this->container['show_comparison'];
    }

    /**
     * Sets show_comparison
     *
     * @param bool $show_comparison True if the visualization should show a comparison based upon the date range
     *
     * @return $this
     */
    public function setShowComparison($show_comparison)
    {
        $this->container['show_comparison'] = $show_comparison;

        return $this;
    }

    /**
     * Gets styles
     *
     * @return string
     */
    public function getStyles()
    {
        return $this->container['styles'];
    }

    /**
     * Sets styles
     *
     * @param string $styles A JSON representation of the style configuration for this visualization
     *
     * @return $this
     */
    public function setStyles($styles)
    {
        $this->container['styles'] = $styles;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of visualization
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets visualization_uuid
     *
     * @return string
     */
    public function getVisualizationUuid()
    {
        return $this->container['visualization_uuid'];
    }

    /**
     * Sets visualization_uuid
     *
     * @param string $visualization_uuid A UUID for the visualization
     *
     * @return $this
     */
    public function setVisualizationUuid($visualization_uuid)
    {
        $this->container['visualization_uuid'] = $visualization_uuid;

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


