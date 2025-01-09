<?php
/**
 * Report
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
 * Report Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Report implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Report';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'data_sources' => '\ultracart\v2\models\ReportDataSource[]',
        'default_dataset_id' => 'string',
        'default_project_id' => 'string',
        'filters' => '\ultracart\v2\models\ReportFilter[]',
        'merchant_id' => 'string',
        'name' => 'string',
        'pages' => '\ultracart\v2\models\ReportPage[]',
        'report_oid' => 'int',
        'security_level' => 'string',
        'settings' => 'string'
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
        'data_sources' => null,
        'default_dataset_id' => null,
        'default_project_id' => null,
        'filters' => null,
        'merchant_id' => null,
        'name' => null,
        'pages' => null,
        'report_oid' => 'int32',
        'security_level' => null,
        'settings' => null
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
        'data_sources' => 'data_sources',
        'default_dataset_id' => 'default_dataset_id',
        'default_project_id' => 'default_project_id',
        'filters' => 'filters',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'pages' => 'pages',
        'report_oid' => 'report_oid',
        'security_level' => 'security_level',
        'settings' => 'settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'data_sources' => 'setDataSources',
        'default_dataset_id' => 'setDefaultDatasetId',
        'default_project_id' => 'setDefaultProjectId',
        'filters' => 'setFilters',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'pages' => 'setPages',
        'report_oid' => 'setReportOid',
        'security_level' => 'setSecurityLevel',
        'settings' => 'setSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'data_sources' => 'getDataSources',
        'default_dataset_id' => 'getDefaultDatasetId',
        'default_project_id' => 'getDefaultProjectId',
        'filters' => 'getFilters',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'pages' => 'getPages',
        'report_oid' => 'getReportOid',
        'security_level' => 'getSecurityLevel',
        'settings' => 'getSettings'
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

    public const SECURITY_LEVEL_STANDARD = 'standard';
    public const SECURITY_LEVEL_LOW = 'low';
    public const SECURITY_LEVEL_MEDIUM = 'medium';
    public const SECURITY_LEVEL_HIGH = 'high';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSecurityLevelAllowableValues()
    {
        return [
            self::SECURITY_LEVEL_STANDARD,
            self::SECURITY_LEVEL_LOW,
            self::SECURITY_LEVEL_MEDIUM,
            self::SECURITY_LEVEL_HIGH,
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['data_sources'] = $data['data_sources'] ?? null;
        $this->container['default_dataset_id'] = $data['default_dataset_id'] ?? null;
        $this->container['default_project_id'] = $data['default_project_id'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['pages'] = $data['pages'] ?? null;
        $this->container['report_oid'] = $data['report_oid'] ?? null;
        $this->container['security_level'] = $data['security_level'] ?? null;
        $this->container['settings'] = $data['settings'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSecurityLevelAllowableValues();
        if (!is_null($this->container['security_level']) && !in_array($this->container['security_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'security_level', must be one of '%s'",
                $this->container['security_level'],
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
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets data_sources
     *
     * @return \ultracart\v2\models\ReportDataSource[]|null
     */
    public function getDataSources()
    {
        return $this->container['data_sources'];
    }

    /**
     * Sets data_sources
     *
     * @param \ultracart\v2\models\ReportDataSource[]|null $data_sources data_sources
     *
     * @return self
     */
    public function setDataSources($data_sources)
    {
        $this->container['data_sources'] = $data_sources;

        return $this;
    }

    /**
     * Gets default_dataset_id
     *
     * @return string|null
     */
    public function getDefaultDatasetId()
    {
        return $this->container['default_dataset_id'];
    }

    /**
     * Sets default_dataset_id
     *
     * @param string|null $default_dataset_id default_dataset_id
     *
     * @return self
     */
    public function setDefaultDatasetId($default_dataset_id)
    {
        $this->container['default_dataset_id'] = $default_dataset_id;

        return $this;
    }

    /**
     * Gets default_project_id
     *
     * @return string|null
     */
    public function getDefaultProjectId()
    {
        return $this->container['default_project_id'];
    }

    /**
     * Sets default_project_id
     *
     * @param string|null $default_project_id default_project_id
     *
     * @return self
     */
    public function setDefaultProjectId($default_project_id)
    {
        $this->container['default_project_id'] = $default_project_id;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \ultracart\v2\models\ReportFilter[]|null
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \ultracart\v2\models\ReportFilter[]|null $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pages
     *
     * @return \ultracart\v2\models\ReportPage[]|null
     */
    public function getPages()
    {
        return $this->container['pages'];
    }

    /**
     * Sets pages
     *
     * @param \ultracart\v2\models\ReportPage[]|null $pages pages
     *
     * @return self
     */
    public function setPages($pages)
    {
        $this->container['pages'] = $pages;

        return $this;
    }

    /**
     * Gets report_oid
     *
     * @return int|null
     */
    public function getReportOid()
    {
        return $this->container['report_oid'];
    }

    /**
     * Sets report_oid
     *
     * @param int|null $report_oid Object identifier for this report.
     *
     * @return self
     */
    public function setReportOid($report_oid)
    {
        $this->container['report_oid'] = $report_oid;

        return $this;
    }

    /**
     * Gets security_level
     *
     * @return string|null
     */
    public function getSecurityLevel()
    {
        return $this->container['security_level'];
    }

    /**
     * Sets security_level
     *
     * @param string|null $security_level Security level to execute report under
     *
     * @return self
     */
    public function setSecurityLevel($security_level)
    {
        $allowedValues = $this->getSecurityLevelAllowableValues();
        if (!is_null($security_level) && !in_array($security_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'security_level', must be one of '%s'",
                    $security_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['security_level'] = $security_level;

        return $this;
    }

    /**
     * Gets settings
     *
     * @return string|null
     */
    public function getSettings()
    {
        return $this->container['settings'];
    }

    /**
     * Sets settings
     *
     * @param string|null $settings A JSON representation of the settings for this report
     *
     * @return self
     */
    public function setSettings($settings)
    {
        $this->container['settings'] = $settings;

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


