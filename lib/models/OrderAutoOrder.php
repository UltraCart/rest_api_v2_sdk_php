<?php
/**
 * OrderAutoOrder
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
 * OrderAutoOrder Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderAutoOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderAutoOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_order_code' => 'string',
        'auto_order_oid' => 'int',
        'cancel_after_next_x_orders' => 'int',
        'cancel_downgrade' => 'bool',
        'cancel_reason' => 'string',
        'cancel_upgrade' => 'bool',
        'canceled_by_user' => 'string',
        'canceled_dts' => 'string',
        'completed' => 'bool',
        'credit_card_attempt' => 'int',
        'disabled_dts' => 'string',
        'enabled' => 'bool',
        'failure_reason' => 'string',
        'items' => '\ultracart\v2\models\AutoOrderItem[]',
        'next_attempt' => 'string',
        'original_order_id' => 'string',
        'override_affiliate_id' => 'int',
        'rebill_orders' => '\ultracart\v2\models\Order[]',
        'rotating_transaction_gateway_code' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_order_code' => null,
        'auto_order_oid' => 'int32',
        'cancel_after_next_x_orders' => 'int32',
        'cancel_downgrade' => null,
        'cancel_reason' => null,
        'cancel_upgrade' => null,
        'canceled_by_user' => null,
        'canceled_dts' => 'dateTime',
        'completed' => null,
        'credit_card_attempt' => 'int32',
        'disabled_dts' => 'dateTime',
        'enabled' => null,
        'failure_reason' => null,
        'items' => null,
        'next_attempt' => 'dateTime',
        'original_order_id' => null,
        'override_affiliate_id' => 'int32',
        'rebill_orders' => null,
        'rotating_transaction_gateway_code' => null,
        'status' => null
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
        'auto_order_code' => 'auto_order_code',
        'auto_order_oid' => 'auto_order_oid',
        'cancel_after_next_x_orders' => 'cancel_after_next_x_orders',
        'cancel_downgrade' => 'cancel_downgrade',
        'cancel_reason' => 'cancel_reason',
        'cancel_upgrade' => 'cancel_upgrade',
        'canceled_by_user' => 'canceled_by_user',
        'canceled_dts' => 'canceled_dts',
        'completed' => 'completed',
        'credit_card_attempt' => 'credit_card_attempt',
        'disabled_dts' => 'disabled_dts',
        'enabled' => 'enabled',
        'failure_reason' => 'failure_reason',
        'items' => 'items',
        'next_attempt' => 'next_attempt',
        'original_order_id' => 'original_order_id',
        'override_affiliate_id' => 'override_affiliate_id',
        'rebill_orders' => 'rebill_orders',
        'rotating_transaction_gateway_code' => 'rotating_transaction_gateway_code',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_order_code' => 'setAutoOrderCode',
        'auto_order_oid' => 'setAutoOrderOid',
        'cancel_after_next_x_orders' => 'setCancelAfterNextXOrders',
        'cancel_downgrade' => 'setCancelDowngrade',
        'cancel_reason' => 'setCancelReason',
        'cancel_upgrade' => 'setCancelUpgrade',
        'canceled_by_user' => 'setCanceledByUser',
        'canceled_dts' => 'setCanceledDts',
        'completed' => 'setCompleted',
        'credit_card_attempt' => 'setCreditCardAttempt',
        'disabled_dts' => 'setDisabledDts',
        'enabled' => 'setEnabled',
        'failure_reason' => 'setFailureReason',
        'items' => 'setItems',
        'next_attempt' => 'setNextAttempt',
        'original_order_id' => 'setOriginalOrderId',
        'override_affiliate_id' => 'setOverrideAffiliateId',
        'rebill_orders' => 'setRebillOrders',
        'rotating_transaction_gateway_code' => 'setRotatingTransactionGatewayCode',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_order_code' => 'getAutoOrderCode',
        'auto_order_oid' => 'getAutoOrderOid',
        'cancel_after_next_x_orders' => 'getCancelAfterNextXOrders',
        'cancel_downgrade' => 'getCancelDowngrade',
        'cancel_reason' => 'getCancelReason',
        'cancel_upgrade' => 'getCancelUpgrade',
        'canceled_by_user' => 'getCanceledByUser',
        'canceled_dts' => 'getCanceledDts',
        'completed' => 'getCompleted',
        'credit_card_attempt' => 'getCreditCardAttempt',
        'disabled_dts' => 'getDisabledDts',
        'enabled' => 'getEnabled',
        'failure_reason' => 'getFailureReason',
        'items' => 'getItems',
        'next_attempt' => 'getNextAttempt',
        'original_order_id' => 'getOriginalOrderId',
        'override_affiliate_id' => 'getOverrideAffiliateId',
        'rebill_orders' => 'getRebillOrders',
        'rotating_transaction_gateway_code' => 'getRotatingTransactionGatewayCode',
        'status' => 'getStatus'
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

    const STATUS_ACTIVE = 'active';
    const STATUS_CANCELED = 'canceled';
    const STATUS_DISABLED = 'disabled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_CANCELED,
            self::STATUS_DISABLED,
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
        $this->container['auto_order_code'] = isset($data['auto_order_code']) ? $data['auto_order_code'] : null;
        $this->container['auto_order_oid'] = isset($data['auto_order_oid']) ? $data['auto_order_oid'] : null;
        $this->container['cancel_after_next_x_orders'] = isset($data['cancel_after_next_x_orders']) ? $data['cancel_after_next_x_orders'] : null;
        $this->container['cancel_downgrade'] = isset($data['cancel_downgrade']) ? $data['cancel_downgrade'] : null;
        $this->container['cancel_reason'] = isset($data['cancel_reason']) ? $data['cancel_reason'] : null;
        $this->container['cancel_upgrade'] = isset($data['cancel_upgrade']) ? $data['cancel_upgrade'] : null;
        $this->container['canceled_by_user'] = isset($data['canceled_by_user']) ? $data['canceled_by_user'] : null;
        $this->container['canceled_dts'] = isset($data['canceled_dts']) ? $data['canceled_dts'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['credit_card_attempt'] = isset($data['credit_card_attempt']) ? $data['credit_card_attempt'] : null;
        $this->container['disabled_dts'] = isset($data['disabled_dts']) ? $data['disabled_dts'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['failure_reason'] = isset($data['failure_reason']) ? $data['failure_reason'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['next_attempt'] = isset($data['next_attempt']) ? $data['next_attempt'] : null;
        $this->container['original_order_id'] = isset($data['original_order_id']) ? $data['original_order_id'] : null;
        $this->container['override_affiliate_id'] = isset($data['override_affiliate_id']) ? $data['override_affiliate_id'] : null;
        $this->container['rebill_orders'] = isset($data['rebill_orders']) ? $data['rebill_orders'] : null;
        $this->container['rotating_transaction_gateway_code'] = isset($data['rotating_transaction_gateway_code']) ? $data['rotating_transaction_gateway_code'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets auto_order_code
     *
     * @return string
     */
    public function getAutoOrderCode()
    {
        return $this->container['auto_order_code'];
    }

    /**
     * Sets auto_order_code
     *
     * @param string $auto_order_code Unique code assigned to this auto order
     *
     * @return $this
     */
    public function setAutoOrderCode($auto_order_code)
    {
        $this->container['auto_order_code'] = $auto_order_code;

        return $this;
    }

    /**
     * Gets auto_order_oid
     *
     * @return int
     */
    public function getAutoOrderOid()
    {
        return $this->container['auto_order_oid'];
    }

    /**
     * Sets auto_order_oid
     *
     * @param int $auto_order_oid Auto order object identifier
     *
     * @return $this
     */
    public function setAutoOrderOid($auto_order_oid)
    {
        $this->container['auto_order_oid'] = $auto_order_oid;

        return $this;
    }

    /**
     * Gets cancel_after_next_x_orders
     *
     * @return int
     */
    public function getCancelAfterNextXOrders()
    {
        return $this->container['cancel_after_next_x_orders'];
    }

    /**
     * Sets cancel_after_next_x_orders
     *
     * @param int $cancel_after_next_x_orders Cancel this auto order after X additional rebills
     *
     * @return $this
     */
    public function setCancelAfterNextXOrders($cancel_after_next_x_orders)
    {
        $this->container['cancel_after_next_x_orders'] = $cancel_after_next_x_orders;

        return $this;
    }

    /**
     * Gets cancel_downgrade
     *
     * @return bool
     */
    public function getCancelDowngrade()
    {
        return $this->container['cancel_downgrade'];
    }

    /**
     * Sets cancel_downgrade
     *
     * @param bool $cancel_downgrade True if the auto order was canceled because the customer purchased a downgrade item
     *
     * @return $this
     */
    public function setCancelDowngrade($cancel_downgrade)
    {
        $this->container['cancel_downgrade'] = $cancel_downgrade;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string $cancel_reason The reason this auto order was canceled by either merchant or customer
     *
     * @return $this
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

        return $this;
    }

    /**
     * Gets cancel_upgrade
     *
     * @return bool
     */
    public function getCancelUpgrade()
    {
        return $this->container['cancel_upgrade'];
    }

    /**
     * Sets cancel_upgrade
     *
     * @param bool $cancel_upgrade True if the auto order was canceled because the customer purchased an upgrade item
     *
     * @return $this
     */
    public function setCancelUpgrade($cancel_upgrade)
    {
        $this->container['cancel_upgrade'] = $cancel_upgrade;

        return $this;
    }

    /**
     * Gets canceled_by_user
     *
     * @return string
     */
    public function getCanceledByUser()
    {
        return $this->container['canceled_by_user'];
    }

    /**
     * Sets canceled_by_user
     *
     * @param string $canceled_by_user The user that canceled the auto order
     *
     * @return $this
     */
    public function setCanceledByUser($canceled_by_user)
    {
        $this->container['canceled_by_user'] = $canceled_by_user;

        return $this;
    }

    /**
     * Gets canceled_dts
     *
     * @return string
     */
    public function getCanceledDts()
    {
        return $this->container['canceled_dts'];
    }

    /**
     * Sets canceled_dts
     *
     * @param string $canceled_dts The date/time that the auto order was canceled
     *
     * @return $this
     */
    public function setCanceledDts($canceled_dts)
    {
        $this->container['canceled_dts'] = $canceled_dts;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool $completed True if the auto order ran successfully to completion
     *
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets credit_card_attempt
     *
     * @return int
     */
    public function getCreditCardAttempt()
    {
        return $this->container['credit_card_attempt'];
    }

    /**
     * Sets credit_card_attempt
     *
     * @param int $credit_card_attempt The number of credit card attempts that have taken place
     *
     * @return $this
     */
    public function setCreditCardAttempt($credit_card_attempt)
    {
        $this->container['credit_card_attempt'] = $credit_card_attempt;

        return $this;
    }

    /**
     * Gets disabled_dts
     *
     * @return string
     */
    public function getDisabledDts()
    {
        return $this->container['disabled_dts'];
    }

    /**
     * Sets disabled_dts
     *
     * @param string $disabled_dts The date/time the auto order was disabled due to failed rebills
     *
     * @return $this
     */
    public function setDisabledDts($disabled_dts)
    {
        $this->container['disabled_dts'] = $disabled_dts;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled True if this auto order is enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string $failure_reason The reason this auto order failed during the last rebill attempt
     *
     * @return $this
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ultracart\v2\models\AutoOrderItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ultracart\v2\models\AutoOrderItem[] $items The items that are setup to rebill
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets next_attempt
     *
     * @return string
     */
    public function getNextAttempt()
    {
        return $this->container['next_attempt'];
    }

    /**
     * Sets next_attempt
     *
     * @param string $next_attempt The next time that the auto order will be attempted for processing
     *
     * @return $this
     */
    public function setNextAttempt($next_attempt)
    {
        $this->container['next_attempt'] = $next_attempt;

        return $this;
    }

    /**
     * Gets original_order_id
     *
     * @return string
     */
    public function getOriginalOrderId()
    {
        return $this->container['original_order_id'];
    }

    /**
     * Sets original_order_id
     *
     * @param string $original_order_id The original order id that this auto order is associated with.
     *
     * @return $this
     */
    public function setOriginalOrderId($original_order_id)
    {
        $this->container['original_order_id'] = $original_order_id;

        return $this;
    }

    /**
     * Gets override_affiliate_id
     *
     * @return int
     */
    public function getOverrideAffiliateId()
    {
        return $this->container['override_affiliate_id'];
    }

    /**
     * Sets override_affiliate_id
     *
     * @param int $override_affiliate_id Override the affiliate id given credit for rebills of this auto order
     *
     * @return $this
     */
    public function setOverrideAffiliateId($override_affiliate_id)
    {
        $this->container['override_affiliate_id'] = $override_affiliate_id;

        return $this;
    }

    /**
     * Gets rebill_orders
     *
     * @return \ultracart\v2\models\Order[]
     */
    public function getRebillOrders()
    {
        return $this->container['rebill_orders'];
    }

    /**
     * Sets rebill_orders
     *
     * @param \ultracart\v2\models\Order[] $rebill_orders Rebill orders that have taken place on this auto order
     *
     * @return $this
     */
    public function setRebillOrders($rebill_orders)
    {
        $this->container['rebill_orders'] = $rebill_orders;

        return $this;
    }

    /**
     * Gets rotating_transaction_gateway_code
     *
     * @return string
     */
    public function getRotatingTransactionGatewayCode()
    {
        return $this->container['rotating_transaction_gateway_code'];
    }

    /**
     * Sets rotating_transaction_gateway_code
     *
     * @param string $rotating_transaction_gateway_code The RTG code associated with this order for future rebills
     *
     * @return $this
     */
    public function setRotatingTransactionGatewayCode($rotating_transaction_gateway_code)
    {
        $this->container['rotating_transaction_gateway_code'] = $rotating_transaction_gateway_code;

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
     * @param string $status The status of the auto order
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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


