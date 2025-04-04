<?php
/**
 * ReportDataSetQuery
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
 * ReportDataSetQuery Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportDataSetQuery implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportDataSetQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'comparison_results' => 'bool',
        'data_set_query_uuid' => 'string',
        'data_source' => '\ultracart\v2\models\ReportDataSource',
        'dimensions' => '\ultracart\v2\models\ReportPageVisualizationDimension[]',
        'filter' => '\ultracart\v2\models\ReportFilter',
        'for_object_id' => 'string',
        'for_object_type' => 'string',
        'metrics' => '\ultracart\v2\models\ReportPageVisualizationMetric[]',
        'order_by_columns' => '\ultracart\v2\models\ReportDataSetQueryOrderByColumn[]',
        'page_size' => 'int',
        'selected_filters' => '\ultracart\v2\models\ReportFilter[]',
        'skip_cache' => 'bool',
        'user_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'comparison_results' => null,
        'data_set_query_uuid' => null,
        'data_source' => null,
        'dimensions' => null,
        'filter' => null,
        'for_object_id' => null,
        'for_object_type' => null,
        'metrics' => null,
        'order_by_columns' => null,
        'page_size' => 'int32',
        'selected_filters' => null,
        'skip_cache' => null,
        'user_data' => null
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
        'comparison_results' => 'comparison_results',
        'data_set_query_uuid' => 'data_set_query_uuid',
        'data_source' => 'data_source',
        'dimensions' => 'dimensions',
        'filter' => 'filter',
        'for_object_id' => 'for_object_id',
        'for_object_type' => 'for_object_type',
        'metrics' => 'metrics',
        'order_by_columns' => 'order_by_columns',
        'page_size' => 'page_size',
        'selected_filters' => 'selected_filters',
        'skip_cache' => 'skip_cache',
        'user_data' => 'user_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comparison_results' => 'setComparisonResults',
        'data_set_query_uuid' => 'setDataSetQueryUuid',
        'data_source' => 'setDataSource',
        'dimensions' => 'setDimensions',
        'filter' => 'setFilter',
        'for_object_id' => 'setForObjectId',
        'for_object_type' => 'setForObjectType',
        'metrics' => 'setMetrics',
        'order_by_columns' => 'setOrderByColumns',
        'page_size' => 'setPageSize',
        'selected_filters' => 'setSelectedFilters',
        'skip_cache' => 'setSkipCache',
        'user_data' => 'setUserData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comparison_results' => 'getComparisonResults',
        'data_set_query_uuid' => 'getDataSetQueryUuid',
        'data_source' => 'getDataSource',
        'dimensions' => 'getDimensions',
        'filter' => 'getFilter',
        'for_object_id' => 'getForObjectId',
        'for_object_type' => 'getForObjectType',
        'metrics' => 'getMetrics',
        'order_by_columns' => 'getOrderByColumns',
        'page_size' => 'getPageSize',
        'selected_filters' => 'getSelectedFilters',
        'skip_cache' => 'getSkipCache',
        'user_data' => 'getUserData'
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

    public const FOR_OBJECT_TYPE_SCHEMA = 'schema';
    public const FOR_OBJECT_TYPE_FILTER = 'filter';
    public const FOR_OBJECT_TYPE_VISUALIZATION = 'visualization';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getForObjectTypeAllowableValues()
    {
        return [
            self::FOR_OBJECT_TYPE_SCHEMA,
            self::FOR_OBJECT_TYPE_FILTER,
            self::FOR_OBJECT_TYPE_VISUALIZATION,
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
        $this->container['comparison_results'] = $data['comparison_results'] ?? null;
        $this->container['data_set_query_uuid'] = $data['data_set_query_uuid'] ?? null;
        $this->container['data_source'] = $data['data_source'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['for_object_id'] = $data['for_object_id'] ?? null;
        $this->container['for_object_type'] = $data['for_object_type'] ?? null;
        $this->container['metrics'] = $data['metrics'] ?? null;
        $this->container['order_by_columns'] = $data['order_by_columns'] ?? null;
        $this->container['page_size'] = $data['page_size'] ?? null;
        $this->container['selected_filters'] = $data['selected_filters'] ?? null;
        $this->container['skip_cache'] = $data['skip_cache'] ?? null;
        $this->container['user_data'] = $data['user_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getForObjectTypeAllowableValues();
        if (!is_null($this->container['for_object_type']) && !in_array($this->container['for_object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'for_object_type', must be one of '%s'",
                $this->container['for_object_type'],
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
     * Gets comparison_results
     *
     * @return bool|null
     */
    public function getComparisonResults()
    {
        return $this->container['comparison_results'];
    }

    /**
     * Sets comparison_results
     *
     * @param bool|null $comparison_results True if a date range filter is provided with comparison date ranges and two results should be returned for the query.
     *
     * @return self
     */
    public function setComparisonResults($comparison_results)
    {
        $this->container['comparison_results'] = $comparison_results;

        return $this;
    }

    /**
     * Gets data_set_query_uuid
     *
     * @return string|null
     */
    public function getDataSetQueryUuid()
    {
        return $this->container['data_set_query_uuid'];
    }

    /**
     * Sets data_set_query_uuid
     *
     * @param string|null $data_set_query_uuid A unique identifier assigned to the data set query that is returned.
     *
     * @return self
     */
    public function setDataSetQueryUuid($data_set_query_uuid)
    {
        $this->container['data_set_query_uuid'] = $data_set_query_uuid;

        return $this;
    }

    /**
     * Gets data_source
     *
     * @return \ultracart\v2\models\ReportDataSource|null
     */
    public function getDataSource()
    {
        return $this->container['data_source'];
    }

    /**
     * Sets data_source
     *
     * @param \ultracart\v2\models\ReportDataSource|null $data_source data_source
     *
     * @return self
     */
    public function setDataSource($data_source)
    {
        $this->container['data_source'] = $data_source;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \ultracart\v2\models\ReportPageVisualizationDimension[]|null
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \ultracart\v2\models\ReportPageVisualizationDimension[]|null $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \ultracart\v2\models\ReportFilter|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \ultracart\v2\models\ReportFilter|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets for_object_id
     *
     * @return string|null
     */
    public function getForObjectId()
    {
        return $this->container['for_object_id'];
    }

    /**
     * Sets for_object_id
     *
     * @param string|null $for_object_id An identifier that can be used to help match up the returned data set
     *
     * @return self
     */
    public function setForObjectId($for_object_id)
    {
        $this->container['for_object_id'] = $for_object_id;

        return $this;
    }

    /**
     * Gets for_object_type
     *
     * @return string|null
     */
    public function getForObjectType()
    {
        return $this->container['for_object_type'];
    }

    /**
     * Sets for_object_type
     *
     * @param string|null $for_object_type The type of object this data set is for
     *
     * @return self
     */
    public function setForObjectType($for_object_type)
    {
        $allowedValues = $this->getForObjectTypeAllowableValues();
        if (!is_null($for_object_type) && !in_array($for_object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'for_object_type', must be one of '%s'",
                    $for_object_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['for_object_type'] = $for_object_type;

        return $this;
    }

    /**
     * Gets metrics
     *
     * @return \ultracart\v2\models\ReportPageVisualizationMetric[]|null
     */
    public function getMetrics()
    {
        return $this->container['metrics'];
    }

    /**
     * Sets metrics
     *
     * @param \ultracart\v2\models\ReportPageVisualizationMetric[]|null $metrics metrics
     *
     * @return self
     */
    public function setMetrics($metrics)
    {
        $this->container['metrics'] = $metrics;

        return $this;
    }

    /**
     * Gets order_by_columns
     *
     * @return \ultracart\v2\models\ReportDataSetQueryOrderByColumn[]|null
     */
    public function getOrderByColumns()
    {
        return $this->container['order_by_columns'];
    }

    /**
     * Sets order_by_columns
     *
     * @param \ultracart\v2\models\ReportDataSetQueryOrderByColumn[]|null $order_by_columns The columns to order by in the final result.  If not specified the dimensions will be used
     *
     * @return self
     */
    public function setOrderByColumns($order_by_columns)
    {
        $this->container['order_by_columns'] = $order_by_columns;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size Result set page size.  The default value is 200 records.  Max is 10000.
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets selected_filters
     *
     * @return \ultracart\v2\models\ReportFilter[]|null
     */
    public function getSelectedFilters()
    {
        return $this->container['selected_filters'];
    }

    /**
     * Sets selected_filters
     *
     * @param \ultracart\v2\models\ReportFilter[]|null $selected_filters selected_filters
     *
     * @return self
     */
    public function setSelectedFilters($selected_filters)
    {
        $this->container['selected_filters'] = $selected_filters;

        return $this;
    }

    /**
     * Gets skip_cache
     *
     * @return bool|null
     */
    public function getSkipCache()
    {
        return $this->container['skip_cache'];
    }

    /**
     * Sets skip_cache
     *
     * @param bool|null $skip_cache True if the 15 minute cache should be skipped.
     *
     * @return self
     */
    public function setSkipCache($skip_cache)
    {
        $this->container['skip_cache'] = $skip_cache;

        return $this;
    }

    /**
     * Gets user_data
     *
     * @return string|null
     */
    public function getUserData()
    {
        return $this->container['user_data'];
    }

    /**
     * Sets user_data
     *
     * @param string|null $user_data Any other data that needs to be returned with the response to help the UI
     *
     * @return self
     */
    public function setUserData($user_data)
    {
        $this->container['user_data'] = $user_data;

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


