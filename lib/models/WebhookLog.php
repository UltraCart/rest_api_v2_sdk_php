<?php
/**
 * WebhookLog
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
 * WebhookLog Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookLog implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'delivery_dts' => 'string',
        'duration' => 'int',
        'queue_delay' => 'int',
        'request' => 'string',
        'request_headers' => '\ultracart\v2\models\HTTPHeader[]',
        'request_id' => 'string',
        'response' => 'string',
        'response_headers' => '\ultracart\v2\models\HTTPHeader[]',
        'status_code' => 'int',
        'success' => 'bool',
        'uri' => 'string',
        'webhook_oid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'delivery_dts' => 'dateTime',
        'duration' => 'int32',
        'queue_delay' => 'int64',
        'request' => null,
        'request_headers' => null,
        'request_id' => null,
        'response' => null,
        'response_headers' => null,
        'status_code' => 'int32',
        'success' => null,
        'uri' => null,
        'webhook_oid' => 'int32'
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
        'delivery_dts' => 'delivery_dts',
        'duration' => 'duration',
        'queue_delay' => 'queue_delay',
        'request' => 'request',
        'request_headers' => 'request_headers',
        'request_id' => 'request_id',
        'response' => 'response',
        'response_headers' => 'response_headers',
        'status_code' => 'status_code',
        'success' => 'success',
        'uri' => 'uri',
        'webhook_oid' => 'webhook_oid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_dts' => 'setDeliveryDts',
        'duration' => 'setDuration',
        'queue_delay' => 'setQueueDelay',
        'request' => 'setRequest',
        'request_headers' => 'setRequestHeaders',
        'request_id' => 'setRequestId',
        'response' => 'setResponse',
        'response_headers' => 'setResponseHeaders',
        'status_code' => 'setStatusCode',
        'success' => 'setSuccess',
        'uri' => 'setUri',
        'webhook_oid' => 'setWebhookOid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_dts' => 'getDeliveryDts',
        'duration' => 'getDuration',
        'queue_delay' => 'getQueueDelay',
        'request' => 'getRequest',
        'request_headers' => 'getRequestHeaders',
        'request_id' => 'getRequestId',
        'response' => 'getResponse',
        'response_headers' => 'getResponseHeaders',
        'status_code' => 'getStatusCode',
        'success' => 'getSuccess',
        'uri' => 'getUri',
        'webhook_oid' => 'getWebhookOid'
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
        $this->container['delivery_dts'] = $data['delivery_dts'] ?? null;
        $this->container['duration'] = $data['duration'] ?? null;
        $this->container['queue_delay'] = $data['queue_delay'] ?? null;
        $this->container['request'] = $data['request'] ?? null;
        $this->container['request_headers'] = $data['request_headers'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['response'] = $data['response'] ?? null;
        $this->container['response_headers'] = $data['response_headers'] ?? null;
        $this->container['status_code'] = $data['status_code'] ?? null;
        $this->container['success'] = $data['success'] ?? null;
        $this->container['uri'] = $data['uri'] ?? null;
        $this->container['webhook_oid'] = $data['webhook_oid'] ?? null;
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
     * Gets delivery_dts
     *
     * @return string|null
     */
    public function getDeliveryDts()
    {
        return $this->container['delivery_dts'];
    }

    /**
     * Sets delivery_dts
     *
     * @param string|null $delivery_dts Date/time of delivery
     *
     * @return self
     */
    public function setDeliveryDts($delivery_dts)
    {
        $this->container['delivery_dts'] = $delivery_dts;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int|null
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int|null $duration Number of milliseconds to process the notification
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets queue_delay
     *
     * @return int|null
     */
    public function getQueueDelay()
    {
        return $this->container['queue_delay'];
    }

    /**
     * Sets queue_delay
     *
     * @param int|null $queue_delay Number of milliseconds of delay caused by queuing
     *
     * @return self
     */
    public function setQueueDelay($queue_delay)
    {
        $this->container['queue_delay'] = $queue_delay;

        return $this;
    }

    /**
     * Gets request
     *
     * @return string|null
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param string|null $request Request payload (first 100,000 characters)
     *
     * @return self
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets request_headers
     *
     * @return \ultracart\v2\models\HTTPHeader[]|null
     */
    public function getRequestHeaders()
    {
        return $this->container['request_headers'];
    }

    /**
     * Sets request_headers
     *
     * @param \ultracart\v2\models\HTTPHeader[]|null $request_headers Request headers sent to the server
     *
     * @return self
     */
    public function setRequestHeaders($request_headers)
    {
        $this->container['request_headers'] = $request_headers;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string|null $request_id Request id is a unique string that you can look up in the logs
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string|null
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string|null $response Response payload (first 100,000 characters)
     *
     * @return self
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets response_headers
     *
     * @return \ultracart\v2\models\HTTPHeader[]|null
     */
    public function getResponseHeaders()
    {
        return $this->container['response_headers'];
    }

    /**
     * Sets response_headers
     *
     * @param \ultracart\v2\models\HTTPHeader[]|null $response_headers Response headers received from the server
     *
     * @return self
     */
    public function setResponseHeaders($response_headers)
    {
        $this->container['response_headers'] = $response_headers;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int|null
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int|null $status_code HTTP status code received from the server
     *
     * @return self
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

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
     * @param bool|null $success True if the delivery was successful
     *
     * @return self
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets uri
     *
     * @return string|null
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     *
     * @param string|null $uri URI of the webhook delivered to
     *
     * @return self
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets webhook_oid
     *
     * @return int|null
     */
    public function getWebhookOid()
    {
        return $this->container['webhook_oid'];
    }

    /**
     * Sets webhook_oid
     *
     * @param int|null $webhook_oid webhook oid
     *
     * @return self
     */
    public function setWebhookOid($webhook_oid)
    {
        $this->container['webhook_oid'] = $webhook_oid;

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


