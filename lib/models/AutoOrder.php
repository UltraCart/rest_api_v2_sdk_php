<?php
/**
 * AutoOrder
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
 * AutoOrder Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AutoOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AutoOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_ons' => '\ultracart\v2\models\AutoOrderAddonItem[]',
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
        'logs' => '\ultracart\v2\models\AutoOrderLog[]',
        'management' => '\ultracart\v2\models\AutoOrderManagement',
        'merchant_id' => 'string',
        'merged_dts' => 'string',
        'merged_into_auto_order_oid' => 'int',
        'next_attempt' => 'string',
        'original_order' => '\ultracart\v2\models\Order',
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_ons' => null,
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
        'logs' => null,
        'management' => null,
        'merchant_id' => null,
        'merged_dts' => 'dateTime',
        'merged_into_auto_order_oid' => 'int32',
        'next_attempt' => 'dateTime',
        'original_order' => null,
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
        'add_ons' => 'add_ons',
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
        'logs' => 'logs',
        'management' => 'management',
        'merchant_id' => 'merchant_id',
        'merged_dts' => 'merged_dts',
        'merged_into_auto_order_oid' => 'merged_into_auto_order_oid',
        'next_attempt' => 'next_attempt',
        'original_order' => 'original_order',
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
        'add_ons' => 'setAddOns',
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
        'logs' => 'setLogs',
        'management' => 'setManagement',
        'merchant_id' => 'setMerchantId',
        'merged_dts' => 'setMergedDts',
        'merged_into_auto_order_oid' => 'setMergedIntoAutoOrderOid',
        'next_attempt' => 'setNextAttempt',
        'original_order' => 'setOriginalOrder',
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
        'add_ons' => 'getAddOns',
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
        'logs' => 'getLogs',
        'management' => 'getManagement',
        'merchant_id' => 'getMerchantId',
        'merged_dts' => 'getMergedDts',
        'merged_into_auto_order_oid' => 'getMergedIntoAutoOrderOid',
        'next_attempt' => 'getNextAttempt',
        'original_order' => 'getOriginalOrder',
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
        return self::$openAPIModelName;
    }

    public const STATUS_ACTIVE = 'active';
    public const STATUS_CANCELED = 'canceled';
    public const STATUS_DISABLED = 'disabled';
    public const STATUS_MERGED = 'merged';

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
            self::STATUS_MERGED,
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
        $this->container['add_ons'] = $data['add_ons'] ?? null;
        $this->container['auto_order_code'] = $data['auto_order_code'] ?? null;
        $this->container['auto_order_oid'] = $data['auto_order_oid'] ?? null;
        $this->container['cancel_after_next_x_orders'] = $data['cancel_after_next_x_orders'] ?? null;
        $this->container['cancel_downgrade'] = $data['cancel_downgrade'] ?? null;
        $this->container['cancel_reason'] = $data['cancel_reason'] ?? null;
        $this->container['cancel_upgrade'] = $data['cancel_upgrade'] ?? null;
        $this->container['canceled_by_user'] = $data['canceled_by_user'] ?? null;
        $this->container['canceled_dts'] = $data['canceled_dts'] ?? null;
        $this->container['completed'] = $data['completed'] ?? null;
        $this->container['credit_card_attempt'] = $data['credit_card_attempt'] ?? null;
        $this->container['disabled_dts'] = $data['disabled_dts'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? null;
        $this->container['failure_reason'] = $data['failure_reason'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['logs'] = $data['logs'] ?? null;
        $this->container['management'] = $data['management'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['merged_dts'] = $data['merged_dts'] ?? null;
        $this->container['merged_into_auto_order_oid'] = $data['merged_into_auto_order_oid'] ?? null;
        $this->container['next_attempt'] = $data['next_attempt'] ?? null;
        $this->container['original_order'] = $data['original_order'] ?? null;
        $this->container['original_order_id'] = $data['original_order_id'] ?? null;
        $this->container['override_affiliate_id'] = $data['override_affiliate_id'] ?? null;
        $this->container['rebill_orders'] = $data['rebill_orders'] ?? null;
        $this->container['rotating_transaction_gateway_code'] = $data['rotating_transaction_gateway_code'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets add_ons
     *
     * @return \ultracart\v2\models\AutoOrderAddonItem[]|null
     */
    public function getAddOns()
    {
        return $this->container['add_ons'];
    }

    /**
     * Sets add_ons
     *
     * @param \ultracart\v2\models\AutoOrderAddonItem[]|null $add_ons Array of addon objects instructing which items to add to auto order and how many times they should be added.
     *
     * @return self
     */
    public function setAddOns($add_ons)
    {
        $this->container['add_ons'] = $add_ons;

        return $this;
    }

    /**
     * Gets auto_order_code
     *
     * @return string|null
     */
    public function getAutoOrderCode()
    {
        return $this->container['auto_order_code'];
    }

    /**
     * Sets auto_order_code
     *
     * @param string|null $auto_order_code Unique code assigned to this auto order
     *
     * @return self
     */
    public function setAutoOrderCode($auto_order_code)
    {
        $this->container['auto_order_code'] = $auto_order_code;

        return $this;
    }

    /**
     * Gets auto_order_oid
     *
     * @return int|null
     */
    public function getAutoOrderOid()
    {
        return $this->container['auto_order_oid'];
    }

    /**
     * Sets auto_order_oid
     *
     * @param int|null $auto_order_oid Auto order object identifier
     *
     * @return self
     */
    public function setAutoOrderOid($auto_order_oid)
    {
        $this->container['auto_order_oid'] = $auto_order_oid;

        return $this;
    }

    /**
     * Gets cancel_after_next_x_orders
     *
     * @return int|null
     */
    public function getCancelAfterNextXOrders()
    {
        return $this->container['cancel_after_next_x_orders'];
    }

    /**
     * Sets cancel_after_next_x_orders
     *
     * @param int|null $cancel_after_next_x_orders Cancel this auto order after X additional rebills
     *
     * @return self
     */
    public function setCancelAfterNextXOrders($cancel_after_next_x_orders)
    {
        $this->container['cancel_after_next_x_orders'] = $cancel_after_next_x_orders;

        return $this;
    }

    /**
     * Gets cancel_downgrade
     *
     * @return bool|null
     */
    public function getCancelDowngrade()
    {
        return $this->container['cancel_downgrade'];
    }

    /**
     * Sets cancel_downgrade
     *
     * @param bool|null $cancel_downgrade True if the auto order was canceled because the customer purchased a downgrade item
     *
     * @return self
     */
    public function setCancelDowngrade($cancel_downgrade)
    {
        $this->container['cancel_downgrade'] = $cancel_downgrade;

        return $this;
    }

    /**
     * Gets cancel_reason
     *
     * @return string|null
     */
    public function getCancelReason()
    {
        return $this->container['cancel_reason'];
    }

    /**
     * Sets cancel_reason
     *
     * @param string|null $cancel_reason The reason this auto order was canceled by either merchant or customer
     *
     * @return self
     */
    public function setCancelReason($cancel_reason)
    {
        $this->container['cancel_reason'] = $cancel_reason;

        return $this;
    }

    /**
     * Gets cancel_upgrade
     *
     * @return bool|null
     */
    public function getCancelUpgrade()
    {
        return $this->container['cancel_upgrade'];
    }

    /**
     * Sets cancel_upgrade
     *
     * @param bool|null $cancel_upgrade True if the auto order was canceled because the customer purchased an upgrade item
     *
     * @return self
     */
    public function setCancelUpgrade($cancel_upgrade)
    {
        $this->container['cancel_upgrade'] = $cancel_upgrade;

        return $this;
    }

    /**
     * Gets canceled_by_user
     *
     * @return string|null
     */
    public function getCanceledByUser()
    {
        return $this->container['canceled_by_user'];
    }

    /**
     * Sets canceled_by_user
     *
     * @param string|null $canceled_by_user The user that canceled the auto order
     *
     * @return self
     */
    public function setCanceledByUser($canceled_by_user)
    {
        $this->container['canceled_by_user'] = $canceled_by_user;

        return $this;
    }

    /**
     * Gets canceled_dts
     *
     * @return string|null
     */
    public function getCanceledDts()
    {
        return $this->container['canceled_dts'];
    }

    /**
     * Sets canceled_dts
     *
     * @param string|null $canceled_dts The date/time that the auto order was canceled
     *
     * @return self
     */
    public function setCanceledDts($canceled_dts)
    {
        $this->container['canceled_dts'] = $canceled_dts;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed True if the auto order ran successfully to completion
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets credit_card_attempt
     *
     * @return int|null
     */
    public function getCreditCardAttempt()
    {
        return $this->container['credit_card_attempt'];
    }

    /**
     * Sets credit_card_attempt
     *
     * @param int|null $credit_card_attempt The number of credit card attempts that have taken place
     *
     * @return self
     */
    public function setCreditCardAttempt($credit_card_attempt)
    {
        $this->container['credit_card_attempt'] = $credit_card_attempt;

        return $this;
    }

    /**
     * Gets disabled_dts
     *
     * @return string|null
     */
    public function getDisabledDts()
    {
        return $this->container['disabled_dts'];
    }

    /**
     * Sets disabled_dts
     *
     * @param string|null $disabled_dts The date/time the auto order was disabled due to failed rebills
     *
     * @return self
     */
    public function setDisabledDts($disabled_dts)
    {
        $this->container['disabled_dts'] = $disabled_dts;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled True if this auto order is enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets failure_reason
     *
     * @return string|null
     */
    public function getFailureReason()
    {
        return $this->container['failure_reason'];
    }

    /**
     * Sets failure_reason
     *
     * @param string|null $failure_reason The reason this auto order failed during the last rebill attempt
     *
     * @return self
     */
    public function setFailureReason($failure_reason)
    {
        $this->container['failure_reason'] = $failure_reason;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \ultracart\v2\models\AutoOrderItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \ultracart\v2\models\AutoOrderItem[]|null $items The items that are setup to rebill
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets logs
     *
     * @return \ultracart\v2\models\AutoOrderLog[]|null
     */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
     * Sets logs
     *
     * @param \ultracart\v2\models\AutoOrderLog[]|null $logs Logs associated with this auto order
     *
     * @return self
     */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;

        return $this;
    }

    /**
     * Gets management
     *
     * @return \ultracart\v2\models\AutoOrderManagement|null
     */
    public function getManagement()
    {
        return $this->container['management'];
    }

    /**
     * Sets management
     *
     * @param \ultracart\v2\models\AutoOrderManagement|null $management management
     *
     * @return self
     */
    public function setManagement($management)
    {
        $this->container['management'] = $management;

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
     * @param string|null $merchant_id UltraCart merchant ID owning this order
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets merged_dts
     *
     * @return string|null
     */
    public function getMergedDts()
    {
        return $this->container['merged_dts'];
    }

    /**
     * Sets merged_dts
     *
     * @param string|null $merged_dts The date/time the auto order was merged into another auto order
     *
     * @return self
     */
    public function setMergedDts($merged_dts)
    {
        $this->container['merged_dts'] = $merged_dts;

        return $this;
    }

    /**
     * Gets merged_into_auto_order_oid
     *
     * @return int|null
     */
    public function getMergedIntoAutoOrderOid()
    {
        return $this->container['merged_into_auto_order_oid'];
    }

    /**
     * Sets merged_into_auto_order_oid
     *
     * @param int|null $merged_into_auto_order_oid The auto order that this auto order was merged into
     *
     * @return self
     */
    public function setMergedIntoAutoOrderOid($merged_into_auto_order_oid)
    {
        $this->container['merged_into_auto_order_oid'] = $merged_into_auto_order_oid;

        return $this;
    }

    /**
     * Gets next_attempt
     *
     * @return string|null
     */
    public function getNextAttempt()
    {
        return $this->container['next_attempt'];
    }

    /**
     * Sets next_attempt
     *
     * @param string|null $next_attempt The next time that the auto order will be attempted for processing
     *
     * @return self
     */
    public function setNextAttempt($next_attempt)
    {
        $this->container['next_attempt'] = $next_attempt;

        return $this;
    }

    /**
     * Gets original_order
     *
     * @return \ultracart\v2\models\Order|null
     */
    public function getOriginalOrder()
    {
        return $this->container['original_order'];
    }

    /**
     * Sets original_order
     *
     * @param \ultracart\v2\models\Order|null $original_order original_order
     *
     * @return self
     */
    public function setOriginalOrder($original_order)
    {
        $this->container['original_order'] = $original_order;

        return $this;
    }

    /**
     * Gets original_order_id
     *
     * @return string|null
     */
    public function getOriginalOrderId()
    {
        return $this->container['original_order_id'];
    }

    /**
     * Sets original_order_id
     *
     * @param string|null $original_order_id The original order id that this auto order is associated with.
     *
     * @return self
     */
    public function setOriginalOrderId($original_order_id)
    {
        $this->container['original_order_id'] = $original_order_id;

        return $this;
    }

    /**
     * Gets override_affiliate_id
     *
     * @return int|null
     */
    public function getOverrideAffiliateId()
    {
        return $this->container['override_affiliate_id'];
    }

    /**
     * Sets override_affiliate_id
     *
     * @param int|null $override_affiliate_id Override the affiliate id given credit for rebills of this auto order
     *
     * @return self
     */
    public function setOverrideAffiliateId($override_affiliate_id)
    {
        $this->container['override_affiliate_id'] = $override_affiliate_id;

        return $this;
    }

    /**
     * Gets rebill_orders
     *
     * @return \ultracart\v2\models\Order[]|null
     */
    public function getRebillOrders()
    {
        return $this->container['rebill_orders'];
    }

    /**
     * Sets rebill_orders
     *
     * @param \ultracart\v2\models\Order[]|null $rebill_orders Rebill orders that have taken place on this auto order
     *
     * @return self
     */
    public function setRebillOrders($rebill_orders)
    {
        $this->container['rebill_orders'] = $rebill_orders;

        return $this;
    }

    /**
     * Gets rotating_transaction_gateway_code
     *
     * @return string|null
     */
    public function getRotatingTransactionGatewayCode()
    {
        return $this->container['rotating_transaction_gateway_code'];
    }

    /**
     * Sets rotating_transaction_gateway_code
     *
     * @param string|null $rotating_transaction_gateway_code The RTG code associated with this order for future rebills
     *
     * @return self
     */
    public function setRotatingTransactionGatewayCode($rotating_transaction_gateway_code)
    {
        $this->container['rotating_transaction_gateway_code'] = $rotating_transaction_gateway_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the auto order
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
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


