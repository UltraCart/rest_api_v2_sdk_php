<?php
/**
 * ChannelPartnerOrderItem
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
 * ChannelPartnerOrderItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelPartnerOrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChannelPartnerOrderItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arbitrary_unit_cost' => 'float',
        'auto_order_last_rebill_dts' => 'string',
        'auto_order_schedule' => 'string',
        'merchant_item_id' => 'string',
        'options' => '\ultracart\v2\models\ChannelPartnerOrderItemOption[]',
        'quantity' => 'float',
        'upsell' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arbitrary_unit_cost' => null,
        'auto_order_last_rebill_dts' => 'dateTime',
        'auto_order_schedule' => null,
        'merchant_item_id' => null,
        'options' => null,
        'quantity' => null,
        'upsell' => null
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
        'arbitrary_unit_cost' => 'arbitrary_unit_cost',
        'auto_order_last_rebill_dts' => 'auto_order_last_rebill_dts',
        'auto_order_schedule' => 'auto_order_schedule',
        'merchant_item_id' => 'merchant_item_id',
        'options' => 'options',
        'quantity' => 'quantity',
        'upsell' => 'upsell'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arbitrary_unit_cost' => 'setArbitraryUnitCost',
        'auto_order_last_rebill_dts' => 'setAutoOrderLastRebillDts',
        'auto_order_schedule' => 'setAutoOrderSchedule',
        'merchant_item_id' => 'setMerchantItemId',
        'options' => 'setOptions',
        'quantity' => 'setQuantity',
        'upsell' => 'setUpsell'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arbitrary_unit_cost' => 'getArbitraryUnitCost',
        'auto_order_last_rebill_dts' => 'getAutoOrderLastRebillDts',
        'auto_order_schedule' => 'getAutoOrderSchedule',
        'merchant_item_id' => 'getMerchantItemId',
        'options' => 'getOptions',
        'quantity' => 'getQuantity',
        'upsell' => 'getUpsell'
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

    const AUTO_ORDER_SCHEDULE_WEEKLY = 'Weekly';
    const AUTO_ORDER_SCHEDULE_EVERY_10_DAYS = 'Every 10 Days';
    const AUTO_ORDER_SCHEDULE_BIWEEKLY = 'Biweekly';
    const AUTO_ORDER_SCHEDULE_EVERY_24_DAYS = 'Every 24 Days';
    const AUTO_ORDER_SCHEDULE_EVERY_28_DAYS = 'Every 28 Days';
    const AUTO_ORDER_SCHEDULE_MONTHLY = 'Monthly';
    const AUTO_ORDER_SCHEDULE_EVERY_45_DAYS = 'Every 45 Days';
    const AUTO_ORDER_SCHEDULE_EVERY_2_MONTHS = 'Every 2 Months';
    const AUTO_ORDER_SCHEDULE_EVERY_3_MONTHS = 'Every 3 Months';
    const AUTO_ORDER_SCHEDULE_EVERY_4_MONTHS = 'Every 4 Months';
    const AUTO_ORDER_SCHEDULE_EVERY_5_MONTHS = 'Every 5 Months';
    const AUTO_ORDER_SCHEDULE_EVERY_6_MONTHS = 'Every 6 Months';
    const AUTO_ORDER_SCHEDULE_YEARLY = 'Yearly';
    const AUTO_ORDER_SCHEDULE_EVERY_4_WEEKS = 'Every 4 Weeks';
    const AUTO_ORDER_SCHEDULE_EVERY_6_WEEKS = 'Every 6 Weeks';
    const AUTO_ORDER_SCHEDULE_EVERY_8_WEEKS = 'Every 8 Weeks';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutoOrderScheduleAllowableValues()
    {
        return [
            self::AUTO_ORDER_SCHEDULE_WEEKLY,
            self::AUTO_ORDER_SCHEDULE_EVERY_10_DAYS,
            self::AUTO_ORDER_SCHEDULE_BIWEEKLY,
            self::AUTO_ORDER_SCHEDULE_EVERY_24_DAYS,
            self::AUTO_ORDER_SCHEDULE_EVERY_28_DAYS,
            self::AUTO_ORDER_SCHEDULE_MONTHLY,
            self::AUTO_ORDER_SCHEDULE_EVERY_45_DAYS,
            self::AUTO_ORDER_SCHEDULE_EVERY_2_MONTHS,
            self::AUTO_ORDER_SCHEDULE_EVERY_3_MONTHS,
            self::AUTO_ORDER_SCHEDULE_EVERY_4_MONTHS,
            self::AUTO_ORDER_SCHEDULE_EVERY_5_MONTHS,
            self::AUTO_ORDER_SCHEDULE_EVERY_6_MONTHS,
            self::AUTO_ORDER_SCHEDULE_YEARLY,
            self::AUTO_ORDER_SCHEDULE_EVERY_4_WEEKS,
            self::AUTO_ORDER_SCHEDULE_EVERY_6_WEEKS,
            self::AUTO_ORDER_SCHEDULE_EVERY_8_WEEKS,
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
        $this->container['arbitrary_unit_cost'] = isset($data['arbitrary_unit_cost']) ? $data['arbitrary_unit_cost'] : null;
        $this->container['auto_order_last_rebill_dts'] = isset($data['auto_order_last_rebill_dts']) ? $data['auto_order_last_rebill_dts'] : null;
        $this->container['auto_order_schedule'] = isset($data['auto_order_schedule']) ? $data['auto_order_schedule'] : null;
        $this->container['merchant_item_id'] = isset($data['merchant_item_id']) ? $data['merchant_item_id'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['upsell'] = isset($data['upsell']) ? $data['upsell'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAutoOrderScheduleAllowableValues();
        if (!is_null($this->container['auto_order_schedule']) && !in_array($this->container['auto_order_schedule'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auto_order_schedule', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['merchant_item_id']) && (mb_strlen($this->container['merchant_item_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'merchant_item_id', the character length must be smaller than or equal to 20.";
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
     * @param float $arbitrary_unit_cost Arbitrary unit cost for this item that differs from the listed price
     *
     * @return $this
     */
    public function setArbitraryUnitCost($arbitrary_unit_cost)
    {
        $this->container['arbitrary_unit_cost'] = $arbitrary_unit_cost;

        return $this;
    }

    /**
     * Gets auto_order_last_rebill_dts
     *
     * @return string
     */
    public function getAutoOrderLastRebillDts()
    {
        return $this->container['auto_order_last_rebill_dts'];
    }

    /**
     * Sets auto_order_last_rebill_dts
     *
     * @param string $auto_order_last_rebill_dts Optional date/time of the last rebill if this item is part of an auto (recurring) order
     *
     * @return $this
     */
    public function setAutoOrderLastRebillDts($auto_order_last_rebill_dts)
    {
        $this->container['auto_order_last_rebill_dts'] = $auto_order_last_rebill_dts;

        return $this;
    }

    /**
     * Gets auto_order_schedule
     *
     * @return string
     */
    public function getAutoOrderSchedule()
    {
        return $this->container['auto_order_schedule'];
    }

    /**
     * Sets auto_order_schedule
     *
     * @param string $auto_order_schedule The frequency schedule for this item if this item is part of an auto (recurring) order
     *
     * @return $this
     */
    public function setAutoOrderSchedule($auto_order_schedule)
    {
        $allowedValues = $this->getAutoOrderScheduleAllowableValues();
        if (!is_null($auto_order_schedule) && !in_array($auto_order_schedule, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auto_order_schedule', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auto_order_schedule'] = $auto_order_schedule;

        return $this;
    }

    /**
     * Gets merchant_item_id
     *
     * @return string
     */
    public function getMerchantItemId()
    {
        return $this->container['merchant_item_id'];
    }

    /**
     * Sets merchant_item_id
     *
     * @param string $merchant_item_id Item ID
     *
     * @return $this
     */
    public function setMerchantItemId($merchant_item_id)
    {
        if (!is_null($merchant_item_id) && (mb_strlen($merchant_item_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $merchant_item_id when calling ChannelPartnerOrderItem., must be smaller than or equal to 20.');
        }

        $this->container['merchant_item_id'] = $merchant_item_id;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \ultracart\v2\models\ChannelPartnerOrderItemOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \ultracart\v2\models\ChannelPartnerOrderItemOption[] $options Item options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity Quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets upsell
     *
     * @return bool
     */
    public function getUpsell()
    {
        return $this->container['upsell'];
    }

    /**
     * Sets upsell
     *
     * @param bool $upsell True if this item was an upsell item.
     *
     * @return $this
     */
    public function setUpsell($upsell)
    {
        $this->container['upsell'] = $upsell;

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


