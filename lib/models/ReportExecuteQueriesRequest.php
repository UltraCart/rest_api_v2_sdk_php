<?php
/**
 * ReportExecuteQueriesRequest
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
 * ReportExecuteQueriesRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ReportExecuteQueriesRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReportExecuteQueriesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_uuid' => 'string',
        'connection_id' => 'string',
        'default_dataset_id' => 'string',
        'default_project_id' => 'string',
        'merchant_id' => 'string',
        'queries' => '\ultracart\v2\models\ReportDataSetQuery[]',
        'request_dts' => 'string',
        'security_level' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_uuid' => null,
        'connection_id' => null,
        'default_dataset_id' => null,
        'default_project_id' => null,
        'merchant_id' => null,
        'queries' => null,
        'request_dts' => 'dateTime',
        'security_level' => null
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
        'client_uuid' => 'client_uuid',
        'connection_id' => 'connection_id',
        'default_dataset_id' => 'default_dataset_id',
        'default_project_id' => 'default_project_id',
        'merchant_id' => 'merchant_id',
        'queries' => 'queries',
        'request_dts' => 'request_dts',
        'security_level' => 'security_level'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_uuid' => 'setClientUuid',
        'connection_id' => 'setConnectionId',
        'default_dataset_id' => 'setDefaultDatasetId',
        'default_project_id' => 'setDefaultProjectId',
        'merchant_id' => 'setMerchantId',
        'queries' => 'setQueries',
        'request_dts' => 'setRequestDts',
        'security_level' => 'setSecurityLevel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_uuid' => 'getClientUuid',
        'connection_id' => 'getConnectionId',
        'default_dataset_id' => 'getDefaultDatasetId',
        'default_project_id' => 'getDefaultProjectId',
        'merchant_id' => 'getMerchantId',
        'queries' => 'getQueries',
        'request_dts' => 'getRequestDts',
        'security_level' => 'getSecurityLevel'
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
        $this->container['client_uuid'] = $data['client_uuid'] ?? null;
        $this->container['connection_id'] = $data['connection_id'] ?? null;
        $this->container['default_dataset_id'] = $data['default_dataset_id'] ?? null;
        $this->container['default_project_id'] = $data['default_project_id'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['queries'] = $data['queries'] ?? null;
        $this->container['request_dts'] = $data['request_dts'] ?? null;
        $this->container['security_level'] = $data['security_level'] ?? null;
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
     * Gets client_uuid
     *
     * @return string|null
     */
    public function getClientUuid()
    {
        return $this->container['client_uuid'];
    }

    /**
     * Sets client_uuid
     *
     * @param string|null $client_uuid Unique UUID assigned to this client during the auth.  This will be used to locate the websocket connect id.
     *
     * @return self
     */
    public function setClientUuid($client_uuid)
    {
        $this->container['client_uuid'] = $client_uuid;

        return $this;
    }

    /**
     * Gets connection_id
     *
     * @return string|null
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     * @param string|null $connection_id The websocket connection id that should receive back notices of query completion.
     *
     * @return self
     */
    public function setConnectionId($connection_id)
    {
        $this->container['connection_id'] = $connection_id;

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
     * Gets queries
     *
     * @return \ultracart\v2\models\ReportDataSetQuery[]|null
     */
    public function getQueries()
    {
        return $this->container['queries'];
    }

    /**
     * Sets queries
     *
     * @param \ultracart\v2\models\ReportDataSetQuery[]|null $queries An array of queries that we want the lambda function to execute.
     *
     * @return self
     */
    public function setQueries($queries)
    {
        $this->container['queries'] = $queries;

        return $this;
    }

    /**
     * Gets request_dts
     *
     * @return string|null
     */
    public function getRequestDts()
    {
        return $this->container['request_dts'];
    }

    /**
     * Sets request_dts
     *
     * @param string|null $request_dts Date/Time of the client submitted the request.  Can be used to resolve out of order query completion results
     *
     * @return self
     */
    public function setRequestDts($request_dts)
    {
        $this->container['request_dts'] = $request_dts;

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


