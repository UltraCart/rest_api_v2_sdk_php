<?php
/**
 * ScreenRecordingQueryResponse
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
 * ScreenRecordingQueryResponse Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScreenRecordingQueryResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScreenRecordingQueryResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'checkout_only' => 'bool',
        'error' => '\ultracart\v2\models\Error',
        'filter' => '\ultracart\v2\models\ScreenRecordingFilter',
        'filter_values' => '\ultracart\v2\models\ScreenRecordingFilterValues',
        'histogram_data' => 'int[]',
        'histogram_interval' => 'string',
        'histogram_start_dts' => 'string',
        'metadata' => '\ultracart\v2\models\ResponseMetadata',
        'screen_recordings' => '\ultracart\v2\models\ScreenRecording[]',
        'success' => 'bool',
        'warning' => '\ultracart\v2\models\Warning'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'checkout_only' => null,
        'error' => null,
        'filter' => null,
        'filter_values' => null,
        'histogram_data' => null,
        'histogram_interval' => null,
        'histogram_start_dts' => null,
        'metadata' => null,
        'screen_recordings' => null,
        'success' => null,
        'warning' => null
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
        'checkout_only' => 'checkout_only',
        'error' => 'error',
        'filter' => 'filter',
        'filter_values' => 'filter_values',
        'histogram_data' => 'histogram_data',
        'histogram_interval' => 'histogram_interval',
        'histogram_start_dts' => 'histogram_start_dts',
        'metadata' => 'metadata',
        'screen_recordings' => 'screen_recordings',
        'success' => 'success',
        'warning' => 'warning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'checkout_only' => 'setCheckoutOnly',
        'error' => 'setError',
        'filter' => 'setFilter',
        'filter_values' => 'setFilterValues',
        'histogram_data' => 'setHistogramData',
        'histogram_interval' => 'setHistogramInterval',
        'histogram_start_dts' => 'setHistogramStartDts',
        'metadata' => 'setMetadata',
        'screen_recordings' => 'setScreenRecordings',
        'success' => 'setSuccess',
        'warning' => 'setWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'checkout_only' => 'getCheckoutOnly',
        'error' => 'getError',
        'filter' => 'getFilter',
        'filter_values' => 'getFilterValues',
        'histogram_data' => 'getHistogramData',
        'histogram_interval' => 'getHistogramInterval',
        'histogram_start_dts' => 'getHistogramStartDts',
        'metadata' => 'getMetadata',
        'screen_recordings' => 'getScreenRecordings',
        'success' => 'getSuccess',
        'warning' => 'getWarning'
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
        $this->container['checkout_only'] = $data['checkout_only'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['filter_values'] = $data['filter_values'] ?? null;
        $this->container['histogram_data'] = $data['histogram_data'] ?? null;
        $this->container['histogram_interval'] = $data['histogram_interval'] ?? null;
        $this->container['histogram_start_dts'] = $data['histogram_start_dts'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['screen_recordings'] = $data['screen_recordings'] ?? null;
        $this->container['success'] = $data['success'] ?? null;
        $this->container['warning'] = $data['warning'] ?? null;
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
     * Gets checkout_only
     *
     * @return bool|null
     */
    public function getCheckoutOnly()
    {
        return $this->container['checkout_only'];
    }

    /**
     * Sets checkout_only
     *
     * @param bool|null $checkout_only checkout_only
     *
     * @return self
     */
    public function setCheckoutOnly($checkout_only)
    {
        $this->container['checkout_only'] = $checkout_only;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \ultracart\v2\models\Error|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \ultracart\v2\models\Error|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \ultracart\v2\models\ScreenRecordingFilter|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \ultracart\v2\models\ScreenRecordingFilter|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets filter_values
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterValues|null
     */
    public function getFilterValues()
    {
        return $this->container['filter_values'];
    }

    /**
     * Sets filter_values
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterValues|null $filter_values filter_values
     *
     * @return self
     */
    public function setFilterValues($filter_values)
    {
        $this->container['filter_values'] = $filter_values;

        return $this;
    }

    /**
     * Gets histogram_data
     *
     * @return int[]|null
     */
    public function getHistogramData()
    {
        return $this->container['histogram_data'];
    }

    /**
     * Sets histogram_data
     *
     * @param int[]|null $histogram_data histogram_data
     *
     * @return self
     */
    public function setHistogramData($histogram_data)
    {
        $this->container['histogram_data'] = $histogram_data;

        return $this;
    }

    /**
     * Gets histogram_interval
     *
     * @return string|null
     */
    public function getHistogramInterval()
    {
        return $this->container['histogram_interval'];
    }

    /**
     * Sets histogram_interval
     *
     * @param string|null $histogram_interval histogram_interval
     *
     * @return self
     */
    public function setHistogramInterval($histogram_interval)
    {
        $this->container['histogram_interval'] = $histogram_interval;

        return $this;
    }

    /**
     * Gets histogram_start_dts
     *
     * @return string|null
     */
    public function getHistogramStartDts()
    {
        return $this->container['histogram_start_dts'];
    }

    /**
     * Sets histogram_start_dts
     *
     * @param string|null $histogram_start_dts histogram_start_dts
     *
     * @return self
     */
    public function setHistogramStartDts($histogram_start_dts)
    {
        $this->container['histogram_start_dts'] = $histogram_start_dts;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \ultracart\v2\models\ResponseMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \ultracart\v2\models\ResponseMetadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets screen_recordings
     *
     * @return \ultracart\v2\models\ScreenRecording[]|null
     */
    public function getScreenRecordings()
    {
        return $this->container['screen_recordings'];
    }

    /**
     * Sets screen_recordings
     *
     * @param \ultracart\v2\models\ScreenRecording[]|null $screen_recordings screen_recordings
     *
     * @return self
     */
    public function setScreenRecordings($screen_recordings)
    {
        $this->container['screen_recordings'] = $screen_recordings;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success Indicates if API call was successful
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return \ultracart\v2\models\Warning|null
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param \ultracart\v2\models\Warning|null $warning warning
     *
     * @return self
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

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


