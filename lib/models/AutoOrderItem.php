<?php
/**
 * AutoOrderItem
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
 * AutoOrderItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoOrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AutoOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arbitrary_item_id' => 'string',
        'arbitrary_percentage_discount' => 'float',
        'arbitrary_quantity' => 'float',
        'arbitrary_schedule_days' => 'int',
        'arbitrary_unit_cost' => 'float',
        'arbitrary_unit_cost_remaining_orders' => 'int',
        'auto_order_item_oid' => 'int',
        'calculated_next_shipment_dts' => 'string',
        'first_order_dts' => 'string',
        'frequency' => 'string',
        'future_schedules' => '\ultracart\v2\models\AutoOrderItemFutureSchedule[]',
        'last_order_dts' => 'string',
        'life_time_value' => 'float',
        'next_item_id' => 'string',
        'next_preshipment_notice_dts' => 'string',
        'next_shipment_dts' => 'string',
        'no_order_after_dts' => 'string',
        'number_of_rebills' => 'int',
        'options' => '\ultracart\v2\models\AutoOrderItemOption[]',
        'original_item_id' => 'string',
        'original_quantity' => 'float',
        'paused' => 'bool',
        'paypal_payer_id' => 'string',
        'paypal_recurring_payment_profile_id' => 'string',
        'preshipment_notice_sent' => 'bool',
        'rebill_value' => 'float',
        'remaining_repeat_count' => 'int',
        'simple_schedule' => '\ultracart\v2\models\AutoOrderItemSimpleSchedule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arbitrary_item_id' => null,
        'arbitrary_percentage_discount' => null,
        'arbitrary_quantity' => null,
        'arbitrary_schedule_days' => 'int32',
        'arbitrary_unit_cost' => null,
        'arbitrary_unit_cost_remaining_orders' => 'int32',
        'auto_order_item_oid' => 'int32',
        'calculated_next_shipment_dts' => 'dateTime',
        'first_order_dts' => 'dateTime',
        'frequency' => null,
        'future_schedules' => null,
        'last_order_dts' => 'dateTime',
        'life_time_value' => null,
        'next_item_id' => null,
        'next_preshipment_notice_dts' => 'dateTime',
        'next_shipment_dts' => 'dateTime',
        'no_order_after_dts' => 'dateTime',
        'number_of_rebills' => 'int32',
        'options' => null,
        'original_item_id' => null,
        'original_quantity' => null,
        'paused' => null,
        'paypal_payer_id' => null,
        'paypal_recurring_payment_profile_id' => null,
        'preshipment_notice_sent' => null,
        'rebill_value' => null,
        'remaining_repeat_count' => 'int32',
        'simple_schedule' => null
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
        'arbitrary_item_id' => 'arbitrary_item_id',
        'arbitrary_percentage_discount' => 'arbitrary_percentage_discount',
        'arbitrary_quantity' => 'arbitrary_quantity',
        'arbitrary_schedule_days' => 'arbitrary_schedule_days',
        'arbitrary_unit_cost' => 'arbitrary_unit_cost',
        'arbitrary_unit_cost_remaining_orders' => 'arbitrary_unit_cost_remaining_orders',
        'auto_order_item_oid' => 'auto_order_item_oid',
        'calculated_next_shipment_dts' => 'calculated_next_shipment_dts',
        'first_order_dts' => 'first_order_dts',
        'frequency' => 'frequency',
        'future_schedules' => 'future_schedules',
        'last_order_dts' => 'last_order_dts',
        'life_time_value' => 'life_time_value',
        'next_item_id' => 'next_item_id',
        'next_preshipment_notice_dts' => 'next_preshipment_notice_dts',
        'next_shipment_dts' => 'next_shipment_dts',
        'no_order_after_dts' => 'no_order_after_dts',
        'number_of_rebills' => 'number_of_rebills',
        'options' => 'options',
        'original_item_id' => 'original_item_id',
        'original_quantity' => 'original_quantity',
        'paused' => 'paused',
        'paypal_payer_id' => 'paypal_payer_id',
        'paypal_recurring_payment_profile_id' => 'paypal_recurring_payment_profile_id',
        'preshipment_notice_sent' => 'preshipment_notice_sent',
        'rebill_value' => 'rebill_value',
        'remaining_repeat_count' => 'remaining_repeat_count',
        'simple_schedule' => 'simple_schedule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arbitrary_item_id' => 'setArbitraryItemId',
        'arbitrary_percentage_discount' => 'setArbitraryPercentageDiscount',
        'arbitrary_quantity' => 'setArbitraryQuantity',
        'arbitrary_schedule_days' => 'setArbitraryScheduleDays',
        'arbitrary_unit_cost' => 'setArbitraryUnitCost',
        'arbitrary_unit_cost_remaining_orders' => 'setArbitraryUnitCostRemainingOrders',
        'auto_order_item_oid' => 'setAutoOrderItemOid',
        'calculated_next_shipment_dts' => 'setCalculatedNextShipmentDts',
        'first_order_dts' => 'setFirstOrderDts',
        'frequency' => 'setFrequency',
        'future_schedules' => 'setFutureSchedules',
        'last_order_dts' => 'setLastOrderDts',
        'life_time_value' => 'setLifeTimeValue',
        'next_item_id' => 'setNextItemId',
        'next_preshipment_notice_dts' => 'setNextPreshipmentNoticeDts',
        'next_shipment_dts' => 'setNextShipmentDts',
        'no_order_after_dts' => 'setNoOrderAfterDts',
        'number_of_rebills' => 'setNumberOfRebills',
        'options' => 'setOptions',
        'original_item_id' => 'setOriginalItemId',
        'original_quantity' => 'setOriginalQuantity',
        'paused' => 'setPaused',
        'paypal_payer_id' => 'setPaypalPayerId',
        'paypal_recurring_payment_profile_id' => 'setPaypalRecurringPaymentProfileId',
        'preshipment_notice_sent' => 'setPreshipmentNoticeSent',
        'rebill_value' => 'setRebillValue',
        'remaining_repeat_count' => 'setRemainingRepeatCount',
        'simple_schedule' => 'setSimpleSchedule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arbitrary_item_id' => 'getArbitraryItemId',
        'arbitrary_percentage_discount' => 'getArbitraryPercentageDiscount',
        'arbitrary_quantity' => 'getArbitraryQuantity',
        'arbitrary_schedule_days' => 'getArbitraryScheduleDays',
        'arbitrary_unit_cost' => 'getArbitraryUnitCost',
        'arbitrary_unit_cost_remaining_orders' => 'getArbitraryUnitCostRemainingOrders',
        'auto_order_item_oid' => 'getAutoOrderItemOid',
        'calculated_next_shipment_dts' => 'getCalculatedNextShipmentDts',
        'first_order_dts' => 'getFirstOrderDts',
        'frequency' => 'getFrequency',
        'future_schedules' => 'getFutureSchedules',
        'last_order_dts' => 'getLastOrderDts',
        'life_time_value' => 'getLifeTimeValue',
        'next_item_id' => 'getNextItemId',
        'next_preshipment_notice_dts' => 'getNextPreshipmentNoticeDts',
        'next_shipment_dts' => 'getNextShipmentDts',
        'no_order_after_dts' => 'getNoOrderAfterDts',
        'number_of_rebills' => 'getNumberOfRebills',
        'options' => 'getOptions',
        'original_item_id' => 'getOriginalItemId',
        'original_quantity' => 'getOriginalQuantity',
        'paused' => 'getPaused',
        'paypal_payer_id' => 'getPaypalPayerId',
        'paypal_recurring_payment_profile_id' => 'getPaypalRecurringPaymentProfileId',
        'preshipment_notice_sent' => 'getPreshipmentNoticeSent',
        'rebill_value' => 'getRebillValue',
        'remaining_repeat_count' => 'getRemainingRepeatCount',
        'simple_schedule' => 'getSimpleSchedule'
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

    const FREQUENCY_WEEKLY = 'Weekly';
    const FREQUENCY_BIWEEKLY = 'Biweekly';
    const FREQUENCY_EVERY = 'Every...';
    const FREQUENCY_EVERY_10_DAYS = 'Every 10 Days';
    const FREQUENCY_EVERY_24_DAYS = 'Every 24 Days';
    const FREQUENCY_EVERY_28_DAYS = 'Every 28 Days';
    const FREQUENCY_MONTHLY = 'Monthly';
    const FREQUENCY_EVERY_45_DAYS = 'Every 45 Days';
    const FREQUENCY_EVERY_2_MONTHS = 'Every 2 Months';
    const FREQUENCY_EVERY_3_MONTHS = 'Every 3 Months';
    const FREQUENCY_EVERY_4_MONTHS = 'Every 4 Months';
    const FREQUENCY_EVERY_5_MONTHS = 'Every 5 Months';
    const FREQUENCY_EVERY_6_MONTHS = 'Every 6 Months';
    const FREQUENCY_YEARLY = 'Yearly';
    const FREQUENCY_EVERY_4_WEEKS = 'Every 4 Weeks';
    const FREQUENCY_EVERY_6_WEEKS = 'Every 6 Weeks';
    const FREQUENCY_EVERY_8_WEEKS = 'Every 8 Weeks';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_BIWEEKLY,
            self::FREQUENCY_EVERY,
            self::FREQUENCY_EVERY_10_DAYS,
            self::FREQUENCY_EVERY_24_DAYS,
            self::FREQUENCY_EVERY_28_DAYS,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_EVERY_45_DAYS,
            self::FREQUENCY_EVERY_2_MONTHS,
            self::FREQUENCY_EVERY_3_MONTHS,
            self::FREQUENCY_EVERY_4_MONTHS,
            self::FREQUENCY_EVERY_5_MONTHS,
            self::FREQUENCY_EVERY_6_MONTHS,
            self::FREQUENCY_YEARLY,
            self::FREQUENCY_EVERY_4_WEEKS,
            self::FREQUENCY_EVERY_6_WEEKS,
            self::FREQUENCY_EVERY_8_WEEKS,
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
        $this->container['arbitrary_item_id'] = isset($data['arbitrary_item_id']) ? $data['arbitrary_item_id'] : null;
        $this->container['arbitrary_percentage_discount'] = isset($data['arbitrary_percentage_discount']) ? $data['arbitrary_percentage_discount'] : null;
        $this->container['arbitrary_quantity'] = isset($data['arbitrary_quantity']) ? $data['arbitrary_quantity'] : null;
        $this->container['arbitrary_schedule_days'] = isset($data['arbitrary_schedule_days']) ? $data['arbitrary_schedule_days'] : null;
        $this->container['arbitrary_unit_cost'] = isset($data['arbitrary_unit_cost']) ? $data['arbitrary_unit_cost'] : null;
        $this->container['arbitrary_unit_cost_remaining_orders'] = isset($data['arbitrary_unit_cost_remaining_orders']) ? $data['arbitrary_unit_cost_remaining_orders'] : null;
        $this->container['auto_order_item_oid'] = isset($data['auto_order_item_oid']) ? $data['auto_order_item_oid'] : null;
        $this->container['calculated_next_shipment_dts'] = isset($data['calculated_next_shipment_dts']) ? $data['calculated_next_shipment_dts'] : null;
        $this->container['first_order_dts'] = isset($data['first_order_dts']) ? $data['first_order_dts'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['future_schedules'] = isset($data['future_schedules']) ? $data['future_schedules'] : null;
        $this->container['last_order_dts'] = isset($data['last_order_dts']) ? $data['last_order_dts'] : null;
        $this->container['life_time_value'] = isset($data['life_time_value']) ? $data['life_time_value'] : null;
        $this->container['next_item_id'] = isset($data['next_item_id']) ? $data['next_item_id'] : null;
        $this->container['next_preshipment_notice_dts'] = isset($data['next_preshipment_notice_dts']) ? $data['next_preshipment_notice_dts'] : null;
        $this->container['next_shipment_dts'] = isset($data['next_shipment_dts']) ? $data['next_shipment_dts'] : null;
        $this->container['no_order_after_dts'] = isset($data['no_order_after_dts']) ? $data['no_order_after_dts'] : null;
        $this->container['number_of_rebills'] = isset($data['number_of_rebills']) ? $data['number_of_rebills'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['original_item_id'] = isset($data['original_item_id']) ? $data['original_item_id'] : null;
        $this->container['original_quantity'] = isset($data['original_quantity']) ? $data['original_quantity'] : null;
        $this->container['paused'] = isset($data['paused']) ? $data['paused'] : null;
        $this->container['paypal_payer_id'] = isset($data['paypal_payer_id']) ? $data['paypal_payer_id'] : null;
        $this->container['paypal_recurring_payment_profile_id'] = isset($data['paypal_recurring_payment_profile_id']) ? $data['paypal_recurring_payment_profile_id'] : null;
        $this->container['preshipment_notice_sent'] = isset($data['preshipment_notice_sent']) ? $data['preshipment_notice_sent'] : null;
        $this->container['rebill_value'] = isset($data['rebill_value']) ? $data['rebill_value'] : null;
        $this->container['remaining_repeat_count'] = isset($data['remaining_repeat_count']) ? $data['remaining_repeat_count'] : null;
        $this->container['simple_schedule'] = isset($data['simple_schedule']) ? $data['simple_schedule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
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
     * Gets arbitrary_item_id
     *
     * @return string
     */
    public function getArbitraryItemId()
    {
        return $this->container['arbitrary_item_id'];
    }

    /**
     * Sets arbitrary_item_id
     *
     * @param string $arbitrary_item_id Arbitrary item id that should be rebilled instead of the normal schedule
     *
     * @return $this
     */
    public function setArbitraryItemId($arbitrary_item_id)
    {
        $this->container['arbitrary_item_id'] = $arbitrary_item_id;

        return $this;
    }

    /**
     * Gets arbitrary_percentage_discount
     *
     * @return float
     */
    public function getArbitraryPercentageDiscount()
    {
        return $this->container['arbitrary_percentage_discount'];
    }

    /**
     * Sets arbitrary_percentage_discount
     *
     * @param float $arbitrary_percentage_discount An arbitrary percentage discount to provide on future rebills
     *
     * @return $this
     */
    public function setArbitraryPercentageDiscount($arbitrary_percentage_discount)
    {
        $this->container['arbitrary_percentage_discount'] = $arbitrary_percentage_discount;

        return $this;
    }

    /**
     * Gets arbitrary_quantity
     *
     * @return float
     */
    public function getArbitraryQuantity()
    {
        return $this->container['arbitrary_quantity'];
    }

    /**
     * Sets arbitrary_quantity
     *
     * @param float $arbitrary_quantity Arbitrary quantity to rebill
     *
     * @return $this
     */
    public function setArbitraryQuantity($arbitrary_quantity)
    {
        $this->container['arbitrary_quantity'] = $arbitrary_quantity;

        return $this;
    }

    /**
     * Gets arbitrary_schedule_days
     *
     * @return int
     */
    public function getArbitraryScheduleDays()
    {
        return $this->container['arbitrary_schedule_days'];
    }

    /**
     * Sets arbitrary_schedule_days
     *
     * @param int $arbitrary_schedule_days The number of days to rebill if the frequency is set to an arbitrary number of days
     *
     * @return $this
     */
    public function setArbitraryScheduleDays($arbitrary_schedule_days)
    {
        $this->container['arbitrary_schedule_days'] = $arbitrary_schedule_days;

        return $this;
    }

    /**
     * Gets arbitrary_unit_cost
     *
     * @return float
     */
    public function getArbitraryUnitCost()
    {
        return $this->container['arbitrary_unit_cost'];
    }

    /**
     * Sets arbitrary_unit_cost
     *
     * @param float $arbitrary_unit_cost Arbitrary unit cost that rebills of this item should occur at
     *
     * @return $this
     */
    public function setArbitraryUnitCost($arbitrary_unit_cost)
    {
        $this->container['arbitrary_unit_cost'] = $arbitrary_unit_cost;

        return $this;
    }

    /**
     * Gets arbitrary_unit_cost_remaining_orders
     *
     * @return int
     */
    public function getArbitraryUnitCostRemainingOrders()
    {
        return $this->container['arbitrary_unit_cost_remaining_orders'];
    }

    /**
     * Sets arbitrary_unit_cost_remaining_orders
     *
     * @param int $arbitrary_unit_cost_remaining_orders The number of rebills to give the arbitrary unit cost on before reverting to normal pricing.
     *
     * @return $this
     */
    public function setArbitraryUnitCostRemainingOrders($arbitrary_unit_cost_remaining_orders)
    {
        $this->container['arbitrary_unit_cost_remaining_orders'] = $arbitrary_unit_cost_remaining_orders;

        return $this;
    }

    /**
     * Gets auto_order_item_oid
     *
     * @return int
     */
    public function getAutoOrderItemOid()
    {
        return $this->container['auto_order_item_oid'];
    }

    /**
     * Sets auto_order_item_oid
     *
     * @param int $auto_order_item_oid Primary key of AutoOrderItem
     *
     * @return $this
     */
    public function setAutoOrderItemOid($auto_order_item_oid)
    {
        $this->container['auto_order_item_oid'] = $auto_order_item_oid;

        return $this;
    }

    /**
     * Gets calculated_next_shipment_dts
     *
     * @return string
     */
    public function getCalculatedNextShipmentDts()
    {
        return $this->container['calculated_next_shipment_dts'];
    }

    /**
     * Sets calculated_next_shipment_dts
     *
     * @param string $calculated_next_shipment_dts Calculated Date/time that this item is scheduled to rebill.  Will be null if no more shipments are going to occur on this item
     *
     * @return $this
     */
    public function setCalculatedNextShipmentDts($calculated_next_shipment_dts)
    {
        $this->container['calculated_next_shipment_dts'] = $calculated_next_shipment_dts;

        return $this;
    }

    /**
     * Gets first_order_dts
     *
     * @return string
     */
    public function getFirstOrderDts()
    {
        return $this->container['first_order_dts'];
    }

    /**
     * Sets first_order_dts
     *
     * @param string $first_order_dts Date/time of the first order of this item.  Null if item added to auto order and has not been rebilled yet.
     *
     * @return $this
     */
    public function setFirstOrderDts($first_order_dts)
    {
        $this->container['first_order_dts'] = $first_order_dts;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency Frequency of the rebill if not a fixed schedule
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($frequency) && !in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets future_schedules
     *
     * @return \ultracart\v2\models\AutoOrderItemFutureSchedule[]
     */
    public function getFutureSchedules()
    {
        return $this->container['future_schedules'];
    }

    /**
     * Sets future_schedules
     *
     * @param \ultracart\v2\models\AutoOrderItemFutureSchedule[] $future_schedules The future rebill schedule for this item up to the next ten rebills
     *
     * @return $this
     */
    public function setFutureSchedules($future_schedules)
    {
        $this->container['future_schedules'] = $future_schedules;

        return $this;
    }

    /**
     * Gets last_order_dts
     *
     * @return string
     */
    public function getLastOrderDts()
    {
        return $this->container['last_order_dts'];
    }

    /**
     * Sets last_order_dts
     *
     * @param string $last_order_dts Date/time of the last order of this item
     *
     * @return $this
     */
    public function setLastOrderDts($last_order_dts)
    {
        $this->container['last_order_dts'] = $last_order_dts;

        return $this;
    }

    /**
     * Gets life_time_value
     *
     * @return float
     */
    public function getLifeTimeValue()
    {
        return $this->container['life_time_value'];
    }

    /**
     * Sets life_time_value
     *
     * @param float $life_time_value The life time value of this item including the original purchase
     *
     * @return $this
     */
    public function setLifeTimeValue($life_time_value)
    {
        $this->container['life_time_value'] = $life_time_value;

        return $this;
    }

    /**
     * Gets next_item_id
     *
     * @return string
     */
    public function getNextItemId()
    {
        return $this->container['next_item_id'];
    }

    /**
     * Sets next_item_id
     *
     * @param string $next_item_id Calculated next item id
     *
     * @return $this
     */
    public function setNextItemId($next_item_id)
    {
        $this->container['next_item_id'] = $next_item_id;

        return $this;
    }

    /**
     * Gets next_preshipment_notice_dts
     *
     * @return string
     */
    public function getNextPreshipmentNoticeDts()
    {
        return $this->container['next_preshipment_notice_dts'];
    }

    /**
     * Sets next_preshipment_notice_dts
     *
     * @param string $next_preshipment_notice_dts The date/time of when the next pre-shipment notice should be sent
     *
     * @return $this
     */
    public function setNextPreshipmentNoticeDts($next_preshipment_notice_dts)
    {
        $this->container['next_preshipment_notice_dts'] = $next_preshipment_notice_dts;

        return $this;
    }

    /**
     * Gets next_shipment_dts
     *
     * @return string
     */
    public function getNextShipmentDts()
    {
        return $this->container['next_shipment_dts'];
    }

    /**
     * Sets next_shipment_dts
     *
     * @param string $next_shipment_dts Date/time that this item is scheduled to rebill
     *
     * @return $this
     */
    public function setNextShipmentDts($next_shipment_dts)
    {
        $this->container['next_shipment_dts'] = $next_shipment_dts;

        return $this;
    }

    /**
     * Gets no_order_after_dts
     *
     * @return string
     */
    public function getNoOrderAfterDts()
    {
        return $this->container['no_order_after_dts'];
    }

    /**
     * Sets no_order_after_dts
     *
     * @param string $no_order_after_dts Date/time after which no additional rebills of this item should occur
     *
     * @return $this
     */
    public function setNoOrderAfterDts($no_order_after_dts)
    {
        $this->container['no_order_after_dts'] = $no_order_after_dts;

        return $this;
    }

    /**
     * Gets number_of_rebills
     *
     * @return int
     */
    public function getNumberOfRebills()
    {
        return $this->container['number_of_rebills'];
    }

    /**
     * Sets number_of_rebills
     *
     * @param int $number_of_rebills The number of times this item has rebilled
     *
     * @return $this
     */
    public function setNumberOfRebills($number_of_rebills)
    {
        $this->container['number_of_rebills'] = $number_of_rebills;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \ultracart\v2\models\AutoOrderItemOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \ultracart\v2\models\AutoOrderItemOption[] $options Options associated with this item
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets original_item_id
     *
     * @return string
     */
    public function getOriginalItemId()
    {
        return $this->container['original_item_id'];
    }

    /**
     * Sets original_item_id
     *
     * @param string $original_item_id The original item id purchased.  This item controls scheduling.  If you wish to modify a schedule, for example, from monthly to yearly, change this item from your monthly item to your yearly item, and then change the next_shipment_dts to your desired date.
     *
     * @return $this
     */
    public function setOriginalItemId($original_item_id)
    {
        $this->container['original_item_id'] = $original_item_id;

        return $this;
    }

    /**
     * Gets original_quantity
     *
     * @return float
     */
    public function getOriginalQuantity()
    {
        return $this->container['original_quantity'];
    }

    /**
     * Sets original_quantity
     *
     * @param float $original_quantity The original quantity purchased
     *
     * @return $this
     */
    public function setOriginalQuantity($original_quantity)
    {
        $this->container['original_quantity'] = $original_quantity;

        return $this;
    }

    /**
     * Gets paused
     *
     * @return bool
     */
    public function getPaused()
    {
        return $this->container['paused'];
    }

    /**
     * Sets paused
     *
     * @param bool $paused True if paused.  This field is an object instead of a primitive for backwards compatibility.
     *
     * @return $this
     */
    public function setPaused($paused)
    {
        $this->container['paused'] = $paused;

        return $this;
    }

    /**
     * Gets paypal_payer_id
     *
     * @return string
     */
    public function getPaypalPayerId()
    {
        return $this->container['paypal_payer_id'];
    }

    /**
     * Sets paypal_payer_id
     *
     * @param string $paypal_payer_id The PayPal Payer ID tied to this item
     *
     * @return $this
     */
    public function setPaypalPayerId($paypal_payer_id)
    {
        $this->container['paypal_payer_id'] = $paypal_payer_id;

        return $this;
    }

    /**
     * Gets paypal_recurring_payment_profile_id
     *
     * @return string
     */
    public function getPaypalRecurringPaymentProfileId()
    {
        return $this->container['paypal_recurring_payment_profile_id'];
    }

    /**
     * Sets paypal_recurring_payment_profile_id
     *
     * @param string $paypal_recurring_payment_profile_id The PayPal Profile ID tied to this item
     *
     * @return $this
     */
    public function setPaypalRecurringPaymentProfileId($paypal_recurring_payment_profile_id)
    {
        $this->container['paypal_recurring_payment_profile_id'] = $paypal_recurring_payment_profile_id;

        return $this;
    }

    /**
     * Gets preshipment_notice_sent
     *
     * @return bool
     */
    public function getPreshipmentNoticeSent()
    {
        return $this->container['preshipment_notice_sent'];
    }

    /**
     * Sets preshipment_notice_sent
     *
     * @param bool $preshipment_notice_sent True if the preshipment notice associated with the next rebill has been sent
     *
     * @return $this
     */
    public function setPreshipmentNoticeSent($preshipment_notice_sent)
    {
        $this->container['preshipment_notice_sent'] = $preshipment_notice_sent;

        return $this;
    }

    /**
     * Gets rebill_value
     *
     * @return float
     */
    public function getRebillValue()
    {
        return $this->container['rebill_value'];
    }

    /**
     * Sets rebill_value
     *
     * @param float $rebill_value The value of the rebills of this item
     *
     * @return $this
     */
    public function setRebillValue($rebill_value)
    {
        $this->container['rebill_value'] = $rebill_value;

        return $this;
    }

    /**
     * Gets remaining_repeat_count
     *
     * @return int
     */
    public function getRemainingRepeatCount()
    {
        return $this->container['remaining_repeat_count'];
    }

    /**
     * Sets remaining_repeat_count
     *
     * @param int $remaining_repeat_count The number of rebills remaining before this item is complete
     *
     * @return $this
     */
    public function setRemainingRepeatCount($remaining_repeat_count)
    {
        $this->container['remaining_repeat_count'] = $remaining_repeat_count;

        return $this;
    }

    /**
     * Gets simple_schedule
     *
     * @return \ultracart\v2\models\AutoOrderItemSimpleSchedule
     */
    public function getSimpleSchedule()
    {
        return $this->container['simple_schedule'];
    }

    /**
     * Sets simple_schedule
     *
     * @param \ultracart\v2\models\AutoOrderItemSimpleSchedule $simple_schedule simple_schedule
     *
     * @return $this
     */
    public function setSimpleSchedule($simple_schedule)
    {
        $this->container['simple_schedule'] = $simple_schedule;

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


