<?php
/**
 * OrderRefundableResponse
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
 * OrderRefundableResponse Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderRefundableResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderRefundableResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error' => '\ultracart\v2\models\Error',
        'item_level_refund_reason_required' => 'bool',
        'item_level_refund_reasons' => '\ultracart\v2\models\OrderReason[]',
        'item_level_return_reasons' => '\ultracart\v2\models\OrderReason[]',
        'manual_because_multiple_charges' => 'bool',
        'metadata' => '\ultracart\v2\models\ResponseMetadata',
        'order_level_refund_reason_required' => 'bool',
        'order_level_refund_reasons' => '\ultracart\v2\models\OrderReason[]',
        'order_level_reject_reasons' => '\ultracart\v2\models\OrderReason[]',
        'refundable' => 'bool',
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
        'error' => null,
        'item_level_refund_reason_required' => null,
        'item_level_refund_reasons' => null,
        'item_level_return_reasons' => null,
        'manual_because_multiple_charges' => null,
        'metadata' => null,
        'order_level_refund_reason_required' => null,
        'order_level_refund_reasons' => null,
        'order_level_reject_reasons' => null,
        'refundable' => null,
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
        'error' => 'error',
        'item_level_refund_reason_required' => 'item_level_refund_reason_required',
        'item_level_refund_reasons' => 'item_level_refund_reasons',
        'item_level_return_reasons' => 'item_level_return_reasons',
        'manual_because_multiple_charges' => 'manual_because_multiple_charges',
        'metadata' => 'metadata',
        'order_level_refund_reason_required' => 'order_level_refund_reason_required',
        'order_level_refund_reasons' => 'order_level_refund_reasons',
        'order_level_reject_reasons' => 'order_level_reject_reasons',
        'refundable' => 'refundable',
        'success' => 'success',
        'warning' => 'warning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error' => 'setError',
        'item_level_refund_reason_required' => 'setItemLevelRefundReasonRequired',
        'item_level_refund_reasons' => 'setItemLevelRefundReasons',
        'item_level_return_reasons' => 'setItemLevelReturnReasons',
        'manual_because_multiple_charges' => 'setManualBecauseMultipleCharges',
        'metadata' => 'setMetadata',
        'order_level_refund_reason_required' => 'setOrderLevelRefundReasonRequired',
        'order_level_refund_reasons' => 'setOrderLevelRefundReasons',
        'order_level_reject_reasons' => 'setOrderLevelRejectReasons',
        'refundable' => 'setRefundable',
        'success' => 'setSuccess',
        'warning' => 'setWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error' => 'getError',
        'item_level_refund_reason_required' => 'getItemLevelRefundReasonRequired',
        'item_level_refund_reasons' => 'getItemLevelRefundReasons',
        'item_level_return_reasons' => 'getItemLevelReturnReasons',
        'manual_because_multiple_charges' => 'getManualBecauseMultipleCharges',
        'metadata' => 'getMetadata',
        'order_level_refund_reason_required' => 'getOrderLevelRefundReasonRequired',
        'order_level_refund_reasons' => 'getOrderLevelRefundReasons',
        'order_level_reject_reasons' => 'getOrderLevelRejectReasons',
        'refundable' => 'getRefundable',
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
        $this->container['error'] = $data['error'] ?? null;
        $this->container['item_level_refund_reason_required'] = $data['item_level_refund_reason_required'] ?? null;
        $this->container['item_level_refund_reasons'] = $data['item_level_refund_reasons'] ?? null;
        $this->container['item_level_return_reasons'] = $data['item_level_return_reasons'] ?? null;
        $this->container['manual_because_multiple_charges'] = $data['manual_because_multiple_charges'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['order_level_refund_reason_required'] = $data['order_level_refund_reason_required'] ?? null;
        $this->container['order_level_refund_reasons'] = $data['order_level_refund_reasons'] ?? null;
        $this->container['order_level_reject_reasons'] = $data['order_level_reject_reasons'] ?? null;
        $this->container['refundable'] = $data['refundable'] ?? null;
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
     * Gets item_level_refund_reason_required
     *
     * @return bool|null
     */
    public function getItemLevelRefundReasonRequired()
    {
        return $this->container['item_level_refund_reason_required'];
    }

    /**
     * Sets item_level_refund_reason_required
     *
     * @param bool|null $item_level_refund_reason_required True if the item level refund reason is required
     *
     * @return self
     */
    public function setItemLevelRefundReasonRequired($item_level_refund_reason_required)
    {
        $this->container['item_level_refund_reason_required'] = $item_level_refund_reason_required;

        return $this;
    }

    /**
     * Gets item_level_refund_reasons
     *
     * @return \ultracart\v2\models\OrderReason[]|null
     */
    public function getItemLevelRefundReasons()
    {
        return $this->container['item_level_refund_reasons'];
    }

    /**
     * Sets item_level_refund_reasons
     *
     * @param \ultracart\v2\models\OrderReason[]|null $item_level_refund_reasons Reason codes available at the item level.
     *
     * @return self
     */
    public function setItemLevelRefundReasons($item_level_refund_reasons)
    {
        $this->container['item_level_refund_reasons'] = $item_level_refund_reasons;

        return $this;
    }

    /**
     * Gets item_level_return_reasons
     *
     * @return \ultracart\v2\models\OrderReason[]|null
     */
    public function getItemLevelReturnReasons()
    {
        return $this->container['item_level_return_reasons'];
    }

    /**
     * Sets item_level_return_reasons
     *
     * @param \ultracart\v2\models\OrderReason[]|null $item_level_return_reasons Return codes available at the item level.
     *
     * @return self
     */
    public function setItemLevelReturnReasons($item_level_return_reasons)
    {
        $this->container['item_level_return_reasons'] = $item_level_return_reasons;

        return $this;
    }

    /**
     * Gets manual_because_multiple_charges
     *
     * @return bool|null
     */
    public function getManualBecauseMultipleCharges()
    {
        return $this->container['manual_because_multiple_charges'];
    }

    /**
     * Sets manual_because_multiple_charges
     *
     * @param bool|null $manual_because_multiple_charges If true, this refund will have to be manually done because of additional charges with the virtual terminal were made
     *
     * @return self
     */
    public function setManualBecauseMultipleCharges($manual_because_multiple_charges)
    {
        $this->container['manual_because_multiple_charges'] = $manual_because_multiple_charges;

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
     * Gets order_level_refund_reason_required
     *
     * @return bool|null
     */
    public function getOrderLevelRefundReasonRequired()
    {
        return $this->container['order_level_refund_reason_required'];
    }

    /**
     * Sets order_level_refund_reason_required
     *
     * @param bool|null $order_level_refund_reason_required True if the order level refund reason is required
     *
     * @return self
     */
    public function setOrderLevelRefundReasonRequired($order_level_refund_reason_required)
    {
        $this->container['order_level_refund_reason_required'] = $order_level_refund_reason_required;

        return $this;
    }

    /**
     * Gets order_level_refund_reasons
     *
     * @return \ultracart\v2\models\OrderReason[]|null
     */
    public function getOrderLevelRefundReasons()
    {
        return $this->container['order_level_refund_reasons'];
    }

    /**
     * Sets order_level_refund_reasons
     *
     * @param \ultracart\v2\models\OrderReason[]|null $order_level_refund_reasons Reason codes available at the order level.
     *
     * @return self
     */
    public function setOrderLevelRefundReasons($order_level_refund_reasons)
    {
        $this->container['order_level_refund_reasons'] = $order_level_refund_reasons;

        return $this;
    }

    /**
     * Gets order_level_reject_reasons
     *
     * @return \ultracart\v2\models\OrderReason[]|null
     */
    public function getOrderLevelRejectReasons()
    {
        return $this->container['order_level_reject_reasons'];
    }

    /**
     * Sets order_level_reject_reasons
     *
     * @param \ultracart\v2\models\OrderReason[]|null $order_level_reject_reasons Reject codes available at the order level.
     *
     * @return self
     */
    public function setOrderLevelRejectReasons($order_level_reject_reasons)
    {
        $this->container['order_level_reject_reasons'] = $order_level_reject_reasons;

        return $this;
    }

    /**
     * Gets refundable
     *
     * @return bool|null
     */
    public function getRefundable()
    {
        return $this->container['refundable'];
    }

    /**
     * Sets refundable
     *
     * @param bool|null $refundable Whether the order is refundable or not.  Null should be interpreted as false.
     *
     * @return self
     */
    public function setRefundable($refundable)
    {
        $this->container['refundable'] = $refundable;

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


