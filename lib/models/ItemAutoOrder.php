<?php
/**
 * ItemAutoOrder
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
 * ItemAutoOrder Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemAutoOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemAutoOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auth_future_amount' => 'float',
        'auth_test_amount' => 'float',
        'auto_order_cancel_charge_minimum_balance' => 'bool',
        'auto_order_cancel_item_id' => 'string',
        'auto_order_cancel_item_oid' => 'int',
        'auto_order_cancel_minimum_life_time_value' => 'float',
        'auto_order_cancel_minimum_rebill_value' => 'float',
        'auto_order_downgrade_items' => 'string[]',
        'auto_order_paused' => 'bool',
        'auto_order_prohibit_expiring_cards' => 'int',
        'auto_order_schedules' => 'string[]',
        'auto_order_upgrade_items' => 'string[]',
        'auto_order_upsell' => 'bool',
        'auto_order_upsell_no_easy_cancel' => 'bool',
        'auto_order_upsell_one_per_customer' => 'bool',
        'auto_orderable' => 'bool',
        'cancel_other_auto_orders' => 'bool',
        'free_shipping_auto_order' => 'bool',
        'refund_other_auto_orders' => 'bool',
        'steps' => '\ultracart\v2\models\ItemAutoOrderStep[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auth_future_amount' => null,
        'auth_test_amount' => null,
        'auto_order_cancel_charge_minimum_balance' => null,
        'auto_order_cancel_item_id' => null,
        'auto_order_cancel_item_oid' => 'int32',
        'auto_order_cancel_minimum_life_time_value' => null,
        'auto_order_cancel_minimum_rebill_value' => null,
        'auto_order_downgrade_items' => null,
        'auto_order_paused' => null,
        'auto_order_prohibit_expiring_cards' => 'int32',
        'auto_order_schedules' => null,
        'auto_order_upgrade_items' => null,
        'auto_order_upsell' => null,
        'auto_order_upsell_no_easy_cancel' => null,
        'auto_order_upsell_one_per_customer' => null,
        'auto_orderable' => null,
        'cancel_other_auto_orders' => null,
        'free_shipping_auto_order' => null,
        'refund_other_auto_orders' => null,
        'steps' => null
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
        'auth_future_amount' => 'auth_future_amount',
        'auth_test_amount' => 'auth_test_amount',
        'auto_order_cancel_charge_minimum_balance' => 'auto_order_cancel_charge_minimum_balance',
        'auto_order_cancel_item_id' => 'auto_order_cancel_item_id',
        'auto_order_cancel_item_oid' => 'auto_order_cancel_item_oid',
        'auto_order_cancel_minimum_life_time_value' => 'auto_order_cancel_minimum_life_time_value',
        'auto_order_cancel_minimum_rebill_value' => 'auto_order_cancel_minimum_rebill_value',
        'auto_order_downgrade_items' => 'auto_order_downgrade_items',
        'auto_order_paused' => 'auto_order_paused',
        'auto_order_prohibit_expiring_cards' => 'auto_order_prohibit_expiring_cards',
        'auto_order_schedules' => 'auto_order_schedules',
        'auto_order_upgrade_items' => 'auto_order_upgrade_items',
        'auto_order_upsell' => 'auto_order_upsell',
        'auto_order_upsell_no_easy_cancel' => 'auto_order_upsell_no_easy_cancel',
        'auto_order_upsell_one_per_customer' => 'auto_order_upsell_one_per_customer',
        'auto_orderable' => 'auto_orderable',
        'cancel_other_auto_orders' => 'cancel_other_auto_orders',
        'free_shipping_auto_order' => 'free_shipping_auto_order',
        'refund_other_auto_orders' => 'refund_other_auto_orders',
        'steps' => 'steps'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_future_amount' => 'setAuthFutureAmount',
        'auth_test_amount' => 'setAuthTestAmount',
        'auto_order_cancel_charge_minimum_balance' => 'setAutoOrderCancelChargeMinimumBalance',
        'auto_order_cancel_item_id' => 'setAutoOrderCancelItemId',
        'auto_order_cancel_item_oid' => 'setAutoOrderCancelItemOid',
        'auto_order_cancel_minimum_life_time_value' => 'setAutoOrderCancelMinimumLifeTimeValue',
        'auto_order_cancel_minimum_rebill_value' => 'setAutoOrderCancelMinimumRebillValue',
        'auto_order_downgrade_items' => 'setAutoOrderDowngradeItems',
        'auto_order_paused' => 'setAutoOrderPaused',
        'auto_order_prohibit_expiring_cards' => 'setAutoOrderProhibitExpiringCards',
        'auto_order_schedules' => 'setAutoOrderSchedules',
        'auto_order_upgrade_items' => 'setAutoOrderUpgradeItems',
        'auto_order_upsell' => 'setAutoOrderUpsell',
        'auto_order_upsell_no_easy_cancel' => 'setAutoOrderUpsellNoEasyCancel',
        'auto_order_upsell_one_per_customer' => 'setAutoOrderUpsellOnePerCustomer',
        'auto_orderable' => 'setAutoOrderable',
        'cancel_other_auto_orders' => 'setCancelOtherAutoOrders',
        'free_shipping_auto_order' => 'setFreeShippingAutoOrder',
        'refund_other_auto_orders' => 'setRefundOtherAutoOrders',
        'steps' => 'setSteps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_future_amount' => 'getAuthFutureAmount',
        'auth_test_amount' => 'getAuthTestAmount',
        'auto_order_cancel_charge_minimum_balance' => 'getAutoOrderCancelChargeMinimumBalance',
        'auto_order_cancel_item_id' => 'getAutoOrderCancelItemId',
        'auto_order_cancel_item_oid' => 'getAutoOrderCancelItemOid',
        'auto_order_cancel_minimum_life_time_value' => 'getAutoOrderCancelMinimumLifeTimeValue',
        'auto_order_cancel_minimum_rebill_value' => 'getAutoOrderCancelMinimumRebillValue',
        'auto_order_downgrade_items' => 'getAutoOrderDowngradeItems',
        'auto_order_paused' => 'getAutoOrderPaused',
        'auto_order_prohibit_expiring_cards' => 'getAutoOrderProhibitExpiringCards',
        'auto_order_schedules' => 'getAutoOrderSchedules',
        'auto_order_upgrade_items' => 'getAutoOrderUpgradeItems',
        'auto_order_upsell' => 'getAutoOrderUpsell',
        'auto_order_upsell_no_easy_cancel' => 'getAutoOrderUpsellNoEasyCancel',
        'auto_order_upsell_one_per_customer' => 'getAutoOrderUpsellOnePerCustomer',
        'auto_orderable' => 'getAutoOrderable',
        'cancel_other_auto_orders' => 'getCancelOtherAutoOrders',
        'free_shipping_auto_order' => 'getFreeShippingAutoOrder',
        'refund_other_auto_orders' => 'getRefundOtherAutoOrders',
        'steps' => 'getSteps'
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
        $this->container['auth_future_amount'] = $data['auth_future_amount'] ?? null;
        $this->container['auth_test_amount'] = $data['auth_test_amount'] ?? null;
        $this->container['auto_order_cancel_charge_minimum_balance'] = $data['auto_order_cancel_charge_minimum_balance'] ?? null;
        $this->container['auto_order_cancel_item_id'] = $data['auto_order_cancel_item_id'] ?? null;
        $this->container['auto_order_cancel_item_oid'] = $data['auto_order_cancel_item_oid'] ?? null;
        $this->container['auto_order_cancel_minimum_life_time_value'] = $data['auto_order_cancel_minimum_life_time_value'] ?? null;
        $this->container['auto_order_cancel_minimum_rebill_value'] = $data['auto_order_cancel_minimum_rebill_value'] ?? null;
        $this->container['auto_order_downgrade_items'] = $data['auto_order_downgrade_items'] ?? null;
        $this->container['auto_order_paused'] = $data['auto_order_paused'] ?? null;
        $this->container['auto_order_prohibit_expiring_cards'] = $data['auto_order_prohibit_expiring_cards'] ?? null;
        $this->container['auto_order_schedules'] = $data['auto_order_schedules'] ?? null;
        $this->container['auto_order_upgrade_items'] = $data['auto_order_upgrade_items'] ?? null;
        $this->container['auto_order_upsell'] = $data['auto_order_upsell'] ?? null;
        $this->container['auto_order_upsell_no_easy_cancel'] = $data['auto_order_upsell_no_easy_cancel'] ?? null;
        $this->container['auto_order_upsell_one_per_customer'] = $data['auto_order_upsell_one_per_customer'] ?? null;
        $this->container['auto_orderable'] = $data['auto_orderable'] ?? null;
        $this->container['cancel_other_auto_orders'] = $data['cancel_other_auto_orders'] ?? null;
        $this->container['free_shipping_auto_order'] = $data['free_shipping_auto_order'] ?? null;
        $this->container['refund_other_auto_orders'] = $data['refund_other_auto_orders'] ?? null;
        $this->container['steps'] = $data['steps'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['auto_order_cancel_item_id']) && (mb_strlen($this->container['auto_order_cancel_item_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'auto_order_cancel_item_id', the character length must be smaller than or equal to 20.";
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
     * Gets auth_future_amount
     *
     * @return float|null
     */
    public function getAuthFutureAmount()
    {
        return $this->container['auth_future_amount'];
    }

    /**
     * Sets auth_future_amount
     *
     * @param float|null $auth_future_amount Amount to try and authorize for the future rebill
     *
     * @return self
     */
    public function setAuthFutureAmount($auth_future_amount)
    {
        $this->container['auth_future_amount'] = $auth_future_amount;

        return $this;
    }

    /**
     * Gets auth_test_amount
     *
     * @return float|null
     */
    public function getAuthTestAmount()
    {
        return $this->container['auth_test_amount'];
    }

    /**
     * Sets auth_test_amount
     *
     * @param float|null $auth_test_amount Amount to try and test authorize
     *
     * @return self
     */
    public function setAuthTestAmount($auth_test_amount)
    {
        $this->container['auth_test_amount'] = $auth_test_amount;

        return $this;
    }

    /**
     * Gets auto_order_cancel_charge_minimum_balance
     *
     * @return bool|null
     */
    public function getAutoOrderCancelChargeMinimumBalance()
    {
        return $this->container['auto_order_cancel_charge_minimum_balance'];
    }

    /**
     * Sets auto_order_cancel_charge_minimum_balance
     *
     * @param bool|null $auto_order_cancel_charge_minimum_balance If true, the cost of the cancel item will be the remaining balance of the minimum rebill or lifetime value
     *
     * @return self
     */
    public function setAutoOrderCancelChargeMinimumBalance($auto_order_cancel_charge_minimum_balance)
    {
        $this->container['auto_order_cancel_charge_minimum_balance'] = $auto_order_cancel_charge_minimum_balance;

        return $this;
    }

    /**
     * Gets auto_order_cancel_item_id
     *
     * @return string|null
     */
    public function getAutoOrderCancelItemId()
    {
        return $this->container['auto_order_cancel_item_id'];
    }

    /**
     * Sets auto_order_cancel_item_id
     *
     * @param string|null $auto_order_cancel_item_id Item id to attempt charging the customer for if they cancel
     *
     * @return self
     */
    public function setAutoOrderCancelItemId($auto_order_cancel_item_id)
    {
        if (!is_null($auto_order_cancel_item_id) && (mb_strlen($auto_order_cancel_item_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $auto_order_cancel_item_id when calling ItemAutoOrder., must be smaller than or equal to 20.');
        }

        $this->container['auto_order_cancel_item_id'] = $auto_order_cancel_item_id;

        return $this;
    }

    /**
     * Gets auto_order_cancel_item_oid
     *
     * @return int|null
     */
    public function getAutoOrderCancelItemOid()
    {
        return $this->container['auto_order_cancel_item_oid'];
    }

    /**
     * Sets auto_order_cancel_item_oid
     *
     * @param int|null $auto_order_cancel_item_oid Item object identifier to attempt charging the customer for if they cancel
     *
     * @return self
     */
    public function setAutoOrderCancelItemOid($auto_order_cancel_item_oid)
    {
        $this->container['auto_order_cancel_item_oid'] = $auto_order_cancel_item_oid;

        return $this;
    }

    /**
     * Gets auto_order_cancel_minimum_life_time_value
     *
     * @return float|null
     */
    public function getAutoOrderCancelMinimumLifeTimeValue()
    {
        return $this->container['auto_order_cancel_minimum_life_time_value'];
    }

    /**
     * Sets auto_order_cancel_minimum_life_time_value
     *
     * @param float|null $auto_order_cancel_minimum_life_time_value The minimum life time value that must be paid in order to not be charged the cancellation item.
     *
     * @return self
     */
    public function setAutoOrderCancelMinimumLifeTimeValue($auto_order_cancel_minimum_life_time_value)
    {
        $this->container['auto_order_cancel_minimum_life_time_value'] = $auto_order_cancel_minimum_life_time_value;

        return $this;
    }

    /**
     * Gets auto_order_cancel_minimum_rebill_value
     *
     * @return float|null
     */
    public function getAutoOrderCancelMinimumRebillValue()
    {
        return $this->container['auto_order_cancel_minimum_rebill_value'];
    }

    /**
     * Sets auto_order_cancel_minimum_rebill_value
     *
     * @param float|null $auto_order_cancel_minimum_rebill_value The minimum rebill value that must be paid in order to not be charged the cancellation item.
     *
     * @return self
     */
    public function setAutoOrderCancelMinimumRebillValue($auto_order_cancel_minimum_rebill_value)
    {
        $this->container['auto_order_cancel_minimum_rebill_value'] = $auto_order_cancel_minimum_rebill_value;

        return $this;
    }

    /**
     * Gets auto_order_downgrade_items
     *
     * @return string[]|null
     */
    public function getAutoOrderDowngradeItems()
    {
        return $this->container['auto_order_downgrade_items'];
    }

    /**
     * Sets auto_order_downgrade_items
     *
     * @param string[]|null $auto_order_downgrade_items List of downgrade items presented to customer service representatives
     *
     * @return self
     */
    public function setAutoOrderDowngradeItems($auto_order_downgrade_items)
    {
        $this->container['auto_order_downgrade_items'] = $auto_order_downgrade_items;

        return $this;
    }

    /**
     * Gets auto_order_paused
     *
     * @return bool|null
     */
    public function getAutoOrderPaused()
    {
        return $this->container['auto_order_paused'];
    }

    /**
     * Sets auto_order_paused
     *
     * @param bool|null $auto_order_paused True if the rebill processing of this item is paused
     *
     * @return self
     */
    public function setAutoOrderPaused($auto_order_paused)
    {
        $this->container['auto_order_paused'] = $auto_order_paused;

        return $this;
    }

    /**
     * Gets auto_order_prohibit_expiring_cards
     *
     * @return int|null
     */
    public function getAutoOrderProhibitExpiringCards()
    {
        return $this->container['auto_order_prohibit_expiring_cards'];
    }

    /**
     * Sets auto_order_prohibit_expiring_cards
     *
     * @param int|null $auto_order_prohibit_expiring_cards Minimum number of months before expiration for the card.  Overrides the account level setting if higher.  Set to zero to disable.
     *
     * @return self
     */
    public function setAutoOrderProhibitExpiringCards($auto_order_prohibit_expiring_cards)
    {
        $this->container['auto_order_prohibit_expiring_cards'] = $auto_order_prohibit_expiring_cards;

        return $this;
    }

    /**
     * Gets auto_order_schedules
     *
     * @return string[]|null
     */
    public function getAutoOrderSchedules()
    {
        return $this->container['auto_order_schedules'];
    }

    /**
     * Sets auto_order_schedules
     *
     * @param string[]|null $auto_order_schedules The user selectable schedules that are available
     *
     * @return self
     */
    public function setAutoOrderSchedules($auto_order_schedules)
    {
        $this->container['auto_order_schedules'] = $auto_order_schedules;

        return $this;
    }

    /**
     * Gets auto_order_upgrade_items
     *
     * @return string[]|null
     */
    public function getAutoOrderUpgradeItems()
    {
        return $this->container['auto_order_upgrade_items'];
    }

    /**
     * Sets auto_order_upgrade_items
     *
     * @param string[]|null $auto_order_upgrade_items List of upgrade items presented to customer service representatives
     *
     * @return self
     */
    public function setAutoOrderUpgradeItems($auto_order_upgrade_items)
    {
        $this->container['auto_order_upgrade_items'] = $auto_order_upgrade_items;

        return $this;
    }

    /**
     * Gets auto_order_upsell
     *
     * @return bool|null
     */
    public function getAutoOrderUpsell()
    {
        return $this->container['auto_order_upsell'];
    }

    /**
     * Sets auto_order_upsell
     *
     * @param bool|null $auto_order_upsell True if this item uses a fixed upsell step schedule
     *
     * @return self
     */
    public function setAutoOrderUpsell($auto_order_upsell)
    {
        $this->container['auto_order_upsell'] = $auto_order_upsell;

        return $this;
    }

    /**
     * Gets auto_order_upsell_no_easy_cancel
     *
     * @return bool|null
     */
    public function getAutoOrderUpsellNoEasyCancel()
    {
        return $this->container['auto_order_upsell_no_easy_cancel'];
    }

    /**
     * Sets auto_order_upsell_no_easy_cancel
     *
     * @param bool|null $auto_order_upsell_no_easy_cancel Do not send the easy cancel email to the customer
     *
     * @return self
     */
    public function setAutoOrderUpsellNoEasyCancel($auto_order_upsell_no_easy_cancel)
    {
        $this->container['auto_order_upsell_no_easy_cancel'] = $auto_order_upsell_no_easy_cancel;

        return $this;
    }

    /**
     * Gets auto_order_upsell_one_per_customer
     *
     * @return bool|null
     */
    public function getAutoOrderUpsellOnePerCustomer()
    {
        return $this->container['auto_order_upsell_one_per_customer'];
    }

    /**
     * Sets auto_order_upsell_one_per_customer
     *
     * @param bool|null $auto_order_upsell_one_per_customer Limit the purchase of this item to one per customer
     *
     * @return self
     */
    public function setAutoOrderUpsellOnePerCustomer($auto_order_upsell_one_per_customer)
    {
        $this->container['auto_order_upsell_one_per_customer'] = $auto_order_upsell_one_per_customer;

        return $this;
    }

    /**
     * Gets auto_orderable
     *
     * @return bool|null
     */
    public function getAutoOrderable()
    {
        return $this->container['auto_orderable'];
    }

    /**
     * Sets auto_orderable
     *
     * @param bool|null $auto_orderable True if this item can be automatically ordered by the customer
     *
     * @return self
     */
    public function setAutoOrderable($auto_orderable)
    {
        $this->container['auto_orderable'] = $auto_orderable;

        return $this;
    }

    /**
     * Gets cancel_other_auto_orders
     *
     * @return bool|null
     */
    public function getCancelOtherAutoOrders()
    {
        return $this->container['cancel_other_auto_orders'];
    }

    /**
     * Sets cancel_other_auto_orders
     *
     * @param bool|null $cancel_other_auto_orders True if other auto orders for this customer should be canceled when this item is ordered
     *
     * @return self
     */
    public function setCancelOtherAutoOrders($cancel_other_auto_orders)
    {
        $this->container['cancel_other_auto_orders'] = $cancel_other_auto_orders;

        return $this;
    }

    /**
     * Gets free_shipping_auto_order
     *
     * @return bool|null
     */
    public function getFreeShippingAutoOrder()
    {
        return $this->container['free_shipping_auto_order'];
    }

    /**
     * Sets free_shipping_auto_order
     *
     * @param bool|null $free_shipping_auto_order True if the customer should be given free shipping
     *
     * @return self
     */
    public function setFreeShippingAutoOrder($free_shipping_auto_order)
    {
        $this->container['free_shipping_auto_order'] = $free_shipping_auto_order;

        return $this;
    }

    /**
     * Gets refund_other_auto_orders
     *
     * @return bool|null
     */
    public function getRefundOtherAutoOrders()
    {
        return $this->container['refund_other_auto_orders'];
    }

    /**
     * Sets refund_other_auto_orders
     *
     * @param bool|null $refund_other_auto_orders True if other auto orders for this customer should refunded if this item is refunded.
     *
     * @return self
     */
    public function setRefundOtherAutoOrders($refund_other_auto_orders)
    {
        $this->container['refund_other_auto_orders'] = $refund_other_auto_orders;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \ultracart\v2\models\ItemAutoOrderStep[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \ultracart\v2\models\ItemAutoOrderStep[]|null $steps The rebill steps if this auto order is an upsell
     *
     * @return self
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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


