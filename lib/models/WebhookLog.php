<?php
/**
 * WebhookLog
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
 * WebhookLog Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
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
      */
    protected static $swaggerFormats = [
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
        $this->container['delivery_dts'] = isset($data['delivery_dts']) ? $data['delivery_dts'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['queue_delay'] = isset($data['queue_delay']) ? $data['queue_delay'] : null;
        $this->container['request'] = isset($data['request']) ? $data['request'] : null;
        $this->container['request_headers'] = isset($data['request_headers']) ? $data['request_headers'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
        $this->container['response_headers'] = isset($data['response_headers']) ? $data['response_headers'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['webhook_oid'] = isset($data['webhook_oid']) ? $data['webhook_oid'] : null;
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
     * @return string
     */
    public function getDeliveryDts()
    {
        return $this->container['delivery_dts'];
    }

    /**
     * Sets delivery_dts
     *
     * @param string $delivery_dts Date/time of delivery
     *
     * @return $this
     */
    public function setDeliveryDts($delivery_dts)
    {
        $this->container['delivery_dts'] = $delivery_dts;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration Number of milliseconds to process the notification
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets queue_delay
     *
     * @return int
     */
    public function getQueueDelay()
    {
        return $this->container['queue_delay'];
    }

    /**
     * Sets queue_delay
     *
     * @param int $queue_delay Number of milliseconds of delay caused by queuing
     *
     * @return $this
     */
    public function setQueueDelay($queue_delay)
    {
        $this->container['queue_delay'] = $queue_delay;

        return $this;
    }

    /**
     * Gets request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param string $request Request payload (first 100,000 characters)
     *
     * @return $this
     */
    public function setRequest($request)
    {
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets request_headers
     *
     * @return \ultracart\v2\models\HTTPHeader[]
     */
    public function getRequestHeaders()
    {
        return $this->container['request_headers'];
    }

    /**
     * Sets request_headers
     *
     * @param \ultracart\v2\models\HTTPHeader[] $request_headers Request headers sent to the server
     *
     * @return $this
     */
    public function setRequestHeaders($request_headers)
    {
        $this->container['request_headers'] = $request_headers;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Request id is a unique string that you can look up in the logs
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
     * Sets response
     *
     * @param string $response Response payload (first 100,000 characters)
     *
     * @return $this
     */
    public function setResponse($response)
    {
        $this->container['response'] = $response;

        return $this;
    }

    /**
     * Gets response_headers
     *
     * @return \ultracart\v2\models\HTTPHeader[]
     */
    public function getResponseHeaders()
    {
        return $this->container['response_headers'];
    }

    /**
     * Sets response_headers
     *
     * @param \ultracart\v2\models\HTTPHeader[] $response_headers Response headers received from the server
     *
     * @return $this
     */
    public function setResponseHeaders($response_headers)
    {
        $this->container['response_headers'] = $response_headers;

        return $this;
    }

    /**
     * Gets status_code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     *
     * @param int $status_code HTTP status code received from the server
     *
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success True if the delivery was successful
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

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
     * @param string $uri URI of the webhook delivered to
     *
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets webhook_oid
     *
     * @return int
     */
    public function getWebhookOid()
    {
        return $this->container['webhook_oid'];
    }

    /**
     * Sets webhook_oid
     *
     * @param int $webhook_oid webhook oid
     *
     * @return $this
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


