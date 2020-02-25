<?php
/**
 * EmailStat
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
 * EmailStat Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailStat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailStat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'click_count' => 'int',
        'click_count_formatted' => 'string',
        'conversion_count' => 'int',
        'conversion_count_formatted' => 'string',
        'delivered_count' => 'int',
        'delivered_count_formatted' => 'string',
        'kickbox_count' => 'int',
        'kickbox_count_formatted' => 'string',
        'merchant_id' => 'string',
        'name' => 'string',
        'open_count' => 'int',
        'open_count_formatted' => 'string',
        'order_count' => 'int',
        'order_count_formatted' => 'string',
        'permanent_bounce_count' => 'int',
        'permanent_bounce_count_formatted' => 'string',
        'profit' => 'float',
        'profit_formatted' => 'string',
        'revenue' => 'float',
        'revenue_formatted' => 'string',
        'send_count' => 'int',
        'send_count_formatted' => 'string',
        'skipped_count' => 'int',
        'skipped_count_formatted' => 'string',
        'spam_count' => 'int',
        'spam_count_formatted' => 'string',
        'stat_type' => 'string',
        'status' => 'string',
        'status_dts' => 'string',
        'storefront_oid' => 'int',
        'unsubscribe_count' => 'int',
        'unsubscribe_count_formatted' => 'string',
        'uuid' => 'string',
        'view_count' => 'int',
        'view_count_formatted' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'click_count' => 'int32',
        'click_count_formatted' => null,
        'conversion_count' => 'int32',
        'conversion_count_formatted' => null,
        'delivered_count' => 'int32',
        'delivered_count_formatted' => null,
        'kickbox_count' => 'int32',
        'kickbox_count_formatted' => null,
        'merchant_id' => null,
        'name' => null,
        'open_count' => 'int32',
        'open_count_formatted' => null,
        'order_count' => 'int32',
        'order_count_formatted' => null,
        'permanent_bounce_count' => 'int32',
        'permanent_bounce_count_formatted' => null,
        'profit' => null,
        'profit_formatted' => null,
        'revenue' => null,
        'revenue_formatted' => null,
        'send_count' => 'int32',
        'send_count_formatted' => null,
        'skipped_count' => 'int32',
        'skipped_count_formatted' => null,
        'spam_count' => 'int32',
        'spam_count_formatted' => null,
        'stat_type' => null,
        'status' => null,
        'status_dts' => null,
        'storefront_oid' => 'int32',
        'unsubscribe_count' => 'int32',
        'unsubscribe_count_formatted' => null,
        'uuid' => null,
        'view_count' => 'int32',
        'view_count_formatted' => null
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
        'click_count' => 'click_count',
        'click_count_formatted' => 'click_count_formatted',
        'conversion_count' => 'conversion_count',
        'conversion_count_formatted' => 'conversion_count_formatted',
        'delivered_count' => 'delivered_count',
        'delivered_count_formatted' => 'delivered_count_formatted',
        'kickbox_count' => 'kickbox_count',
        'kickbox_count_formatted' => 'kickbox_count_formatted',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'open_count' => 'open_count',
        'open_count_formatted' => 'open_count_formatted',
        'order_count' => 'order_count',
        'order_count_formatted' => 'order_count_formatted',
        'permanent_bounce_count' => 'permanent_bounce_count',
        'permanent_bounce_count_formatted' => 'permanent_bounce_count_formatted',
        'profit' => 'profit',
        'profit_formatted' => 'profit_formatted',
        'revenue' => 'revenue',
        'revenue_formatted' => 'revenue_formatted',
        'send_count' => 'send_count',
        'send_count_formatted' => 'send_count_formatted',
        'skipped_count' => 'skipped_count',
        'skipped_count_formatted' => 'skipped_count_formatted',
        'spam_count' => 'spam_count',
        'spam_count_formatted' => 'spam_count_formatted',
        'stat_type' => 'stat_type',
        'status' => 'status',
        'status_dts' => 'status_dts',
        'storefront_oid' => 'storefront_oid',
        'unsubscribe_count' => 'unsubscribe_count',
        'unsubscribe_count_formatted' => 'unsubscribe_count_formatted',
        'uuid' => 'uuid',
        'view_count' => 'view_count',
        'view_count_formatted' => 'view_count_formatted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'click_count' => 'setClickCount',
        'click_count_formatted' => 'setClickCountFormatted',
        'conversion_count' => 'setConversionCount',
        'conversion_count_formatted' => 'setConversionCountFormatted',
        'delivered_count' => 'setDeliveredCount',
        'delivered_count_formatted' => 'setDeliveredCountFormatted',
        'kickbox_count' => 'setKickboxCount',
        'kickbox_count_formatted' => 'setKickboxCountFormatted',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'open_count' => 'setOpenCount',
        'open_count_formatted' => 'setOpenCountFormatted',
        'order_count' => 'setOrderCount',
        'order_count_formatted' => 'setOrderCountFormatted',
        'permanent_bounce_count' => 'setPermanentBounceCount',
        'permanent_bounce_count_formatted' => 'setPermanentBounceCountFormatted',
        'profit' => 'setProfit',
        'profit_formatted' => 'setProfitFormatted',
        'revenue' => 'setRevenue',
        'revenue_formatted' => 'setRevenueFormatted',
        'send_count' => 'setSendCount',
        'send_count_formatted' => 'setSendCountFormatted',
        'skipped_count' => 'setSkippedCount',
        'skipped_count_formatted' => 'setSkippedCountFormatted',
        'spam_count' => 'setSpamCount',
        'spam_count_formatted' => 'setSpamCountFormatted',
        'stat_type' => 'setStatType',
        'status' => 'setStatus',
        'status_dts' => 'setStatusDts',
        'storefront_oid' => 'setStorefrontOid',
        'unsubscribe_count' => 'setUnsubscribeCount',
        'unsubscribe_count_formatted' => 'setUnsubscribeCountFormatted',
        'uuid' => 'setUuid',
        'view_count' => 'setViewCount',
        'view_count_formatted' => 'setViewCountFormatted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'click_count' => 'getClickCount',
        'click_count_formatted' => 'getClickCountFormatted',
        'conversion_count' => 'getConversionCount',
        'conversion_count_formatted' => 'getConversionCountFormatted',
        'delivered_count' => 'getDeliveredCount',
        'delivered_count_formatted' => 'getDeliveredCountFormatted',
        'kickbox_count' => 'getKickboxCount',
        'kickbox_count_formatted' => 'getKickboxCountFormatted',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'open_count' => 'getOpenCount',
        'open_count_formatted' => 'getOpenCountFormatted',
        'order_count' => 'getOrderCount',
        'order_count_formatted' => 'getOrderCountFormatted',
        'permanent_bounce_count' => 'getPermanentBounceCount',
        'permanent_bounce_count_formatted' => 'getPermanentBounceCountFormatted',
        'profit' => 'getProfit',
        'profit_formatted' => 'getProfitFormatted',
        'revenue' => 'getRevenue',
        'revenue_formatted' => 'getRevenueFormatted',
        'send_count' => 'getSendCount',
        'send_count_formatted' => 'getSendCountFormatted',
        'skipped_count' => 'getSkippedCount',
        'skipped_count_formatted' => 'getSkippedCountFormatted',
        'spam_count' => 'getSpamCount',
        'spam_count_formatted' => 'getSpamCountFormatted',
        'stat_type' => 'getStatType',
        'status' => 'getStatus',
        'status_dts' => 'getStatusDts',
        'storefront_oid' => 'getStorefrontOid',
        'unsubscribe_count' => 'getUnsubscribeCount',
        'unsubscribe_count_formatted' => 'getUnsubscribeCountFormatted',
        'uuid' => 'getUuid',
        'view_count' => 'getViewCount',
        'view_count_formatted' => 'getViewCountFormatted'
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
        $this->container['click_count'] = isset($data['click_count']) ? $data['click_count'] : null;
        $this->container['click_count_formatted'] = isset($data['click_count_formatted']) ? $data['click_count_formatted'] : null;
        $this->container['conversion_count'] = isset($data['conversion_count']) ? $data['conversion_count'] : null;
        $this->container['conversion_count_formatted'] = isset($data['conversion_count_formatted']) ? $data['conversion_count_formatted'] : null;
        $this->container['delivered_count'] = isset($data['delivered_count']) ? $data['delivered_count'] : null;
        $this->container['delivered_count_formatted'] = isset($data['delivered_count_formatted']) ? $data['delivered_count_formatted'] : null;
        $this->container['kickbox_count'] = isset($data['kickbox_count']) ? $data['kickbox_count'] : null;
        $this->container['kickbox_count_formatted'] = isset($data['kickbox_count_formatted']) ? $data['kickbox_count_formatted'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['open_count'] = isset($data['open_count']) ? $data['open_count'] : null;
        $this->container['open_count_formatted'] = isset($data['open_count_formatted']) ? $data['open_count_formatted'] : null;
        $this->container['order_count'] = isset($data['order_count']) ? $data['order_count'] : null;
        $this->container['order_count_formatted'] = isset($data['order_count_formatted']) ? $data['order_count_formatted'] : null;
        $this->container['permanent_bounce_count'] = isset($data['permanent_bounce_count']) ? $data['permanent_bounce_count'] : null;
        $this->container['permanent_bounce_count_formatted'] = isset($data['permanent_bounce_count_formatted']) ? $data['permanent_bounce_count_formatted'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['profit_formatted'] = isset($data['profit_formatted']) ? $data['profit_formatted'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['revenue_formatted'] = isset($data['revenue_formatted']) ? $data['revenue_formatted'] : null;
        $this->container['send_count'] = isset($data['send_count']) ? $data['send_count'] : null;
        $this->container['send_count_formatted'] = isset($data['send_count_formatted']) ? $data['send_count_formatted'] : null;
        $this->container['skipped_count'] = isset($data['skipped_count']) ? $data['skipped_count'] : null;
        $this->container['skipped_count_formatted'] = isset($data['skipped_count_formatted']) ? $data['skipped_count_formatted'] : null;
        $this->container['spam_count'] = isset($data['spam_count']) ? $data['spam_count'] : null;
        $this->container['spam_count_formatted'] = isset($data['spam_count_formatted']) ? $data['spam_count_formatted'] : null;
        $this->container['stat_type'] = isset($data['stat_type']) ? $data['stat_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_dts'] = isset($data['status_dts']) ? $data['status_dts'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['unsubscribe_count'] = isset($data['unsubscribe_count']) ? $data['unsubscribe_count'] : null;
        $this->container['unsubscribe_count_formatted'] = isset($data['unsubscribe_count_formatted']) ? $data['unsubscribe_count_formatted'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['view_count_formatted'] = isset($data['view_count_formatted']) ? $data['view_count_formatted'] : null;
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

        return true;
    }


    /**
     * Gets click_count
     *
     * @return int
     */
    public function getClickCount()
    {
        return $this->container['click_count'];
    }

    /**
     * Sets click_count
     *
     * @param int $click_count Count of clicked emails
     *
     * @return $this
     */
    public function setClickCount($click_count)
    {
        $this->container['click_count'] = $click_count;

        return $this;
    }

    /**
     * Gets click_count_formatted
     *
     * @return string
     */
    public function getClickCountFormatted()
    {
        return $this->container['click_count_formatted'];
    }

    /**
     * Sets click_count_formatted
     *
     * @param string $click_count_formatted Count of clicked emails, formatted
     *
     * @return $this
     */
    public function setClickCountFormatted($click_count_formatted)
    {
        $this->container['click_count_formatted'] = $click_count_formatted;

        return $this;
    }

    /**
     * Gets conversion_count
     *
     * @return int
     */
    public function getConversionCount()
    {
        return $this->container['conversion_count'];
    }

    /**
     * Sets conversion_count
     *
     * @param int $conversion_count Count of conversions
     *
     * @return $this
     */
    public function setConversionCount($conversion_count)
    {
        $this->container['conversion_count'] = $conversion_count;

        return $this;
    }

    /**
     * Gets conversion_count_formatted
     *
     * @return string
     */
    public function getConversionCountFormatted()
    {
        return $this->container['conversion_count_formatted'];
    }

    /**
     * Sets conversion_count_formatted
     *
     * @param string $conversion_count_formatted Count of conversions, formatted
     *
     * @return $this
     */
    public function setConversionCountFormatted($conversion_count_formatted)
    {
        $this->container['conversion_count_formatted'] = $conversion_count_formatted;

        return $this;
    }

    /**
     * Gets delivered_count
     *
     * @return int
     */
    public function getDeliveredCount()
    {
        return $this->container['delivered_count'];
    }

    /**
     * Sets delivered_count
     *
     * @param int $delivered_count Count of delivered emails
     *
     * @return $this
     */
    public function setDeliveredCount($delivered_count)
    {
        $this->container['delivered_count'] = $delivered_count;

        return $this;
    }

    /**
     * Gets delivered_count_formatted
     *
     * @return string
     */
    public function getDeliveredCountFormatted()
    {
        return $this->container['delivered_count_formatted'];
    }

    /**
     * Sets delivered_count_formatted
     *
     * @param string $delivered_count_formatted Count of delivered emails, formatted
     *
     * @return $this
     */
    public function setDeliveredCountFormatted($delivered_count_formatted)
    {
        $this->container['delivered_count_formatted'] = $delivered_count_formatted;

        return $this;
    }

    /**
     * Gets kickbox_count
     *
     * @return int
     */
    public function getKickboxCount()
    {
        return $this->container['kickbox_count'];
    }

    /**
     * Sets kickbox_count
     *
     * @param int $kickbox_count Count of emails kicked
     *
     * @return $this
     */
    public function setKickboxCount($kickbox_count)
    {
        $this->container['kickbox_count'] = $kickbox_count;

        return $this;
    }

    /**
     * Gets kickbox_count_formatted
     *
     * @return string
     */
    public function getKickboxCountFormatted()
    {
        return $this->container['kickbox_count_formatted'];
    }

    /**
     * Sets kickbox_count_formatted
     *
     * @param string $kickbox_count_formatted Count of emails kicked, formatted
     *
     * @return $this
     */
    public function setKickboxCountFormatted($kickbox_count_formatted)
    {
        $this->container['kickbox_count_formatted'] = $kickbox_count_formatted;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Merchant ID
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name List or segment name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets open_count
     *
     * @return int
     */
    public function getOpenCount()
    {
        return $this->container['open_count'];
    }

    /**
     * Sets open_count
     *
     * @param int $open_count Count of opened emails
     *
     * @return $this
     */
    public function setOpenCount($open_count)
    {
        $this->container['open_count'] = $open_count;

        return $this;
    }

    /**
     * Gets open_count_formatted
     *
     * @return string
     */
    public function getOpenCountFormatted()
    {
        return $this->container['open_count_formatted'];
    }

    /**
     * Sets open_count_formatted
     *
     * @param string $open_count_formatted Count of opened emails, formatted
     *
     * @return $this
     */
    public function setOpenCountFormatted($open_count_formatted)
    {
        $this->container['open_count_formatted'] = $open_count_formatted;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int $order_count Count of orders
     *
     * @return $this
     */
    public function setOrderCount($order_count)
    {
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets order_count_formatted
     *
     * @return string
     */
    public function getOrderCountFormatted()
    {
        return $this->container['order_count_formatted'];
    }

    /**
     * Sets order_count_formatted
     *
     * @param string $order_count_formatted Count of orders, formatted
     *
     * @return $this
     */
    public function setOrderCountFormatted($order_count_formatted)
    {
        $this->container['order_count_formatted'] = $order_count_formatted;

        return $this;
    }

    /**
     * Gets permanent_bounce_count
     *
     * @return int
     */
    public function getPermanentBounceCount()
    {
        return $this->container['permanent_bounce_count'];
    }

    /**
     * Sets permanent_bounce_count
     *
     * @param int $permanent_bounce_count Count of emails permanently bounced
     *
     * @return $this
     */
    public function setPermanentBounceCount($permanent_bounce_count)
    {
        $this->container['permanent_bounce_count'] = $permanent_bounce_count;

        return $this;
    }

    /**
     * Gets permanent_bounce_count_formatted
     *
     * @return string
     */
    public function getPermanentBounceCountFormatted()
    {
        return $this->container['permanent_bounce_count_formatted'];
    }

    /**
     * Sets permanent_bounce_count_formatted
     *
     * @param string $permanent_bounce_count_formatted Count of emails permanently bounced, formatted
     *
     * @return $this
     */
    public function setPermanentBounceCountFormatted($permanent_bounce_count_formatted)
    {
        $this->container['permanent_bounce_count_formatted'] = $permanent_bounce_count_formatted;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return float
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param float $profit Profit
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

        return $this;
    }

    /**
     * Gets profit_formatted
     *
     * @return string
     */
    public function getProfitFormatted()
    {
        return $this->container['profit_formatted'];
    }

    /**
     * Sets profit_formatted
     *
     * @param string $profit_formatted Profit, formatted
     *
     * @return $this
     */
    public function setProfitFormatted($profit_formatted)
    {
        $this->container['profit_formatted'] = $profit_formatted;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param float $revenue Revenue
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets revenue_formatted
     *
     * @return string
     */
    public function getRevenueFormatted()
    {
        return $this->container['revenue_formatted'];
    }

    /**
     * Sets revenue_formatted
     *
     * @param string $revenue_formatted Revenue, formatted
     *
     * @return $this
     */
    public function setRevenueFormatted($revenue_formatted)
    {
        $this->container['revenue_formatted'] = $revenue_formatted;

        return $this;
    }

    /**
     * Gets send_count
     *
     * @return int
     */
    public function getSendCount()
    {
        return $this->container['send_count'];
    }

    /**
     * Sets send_count
     *
     * @param int $send_count Count of emails sent
     *
     * @return $this
     */
    public function setSendCount($send_count)
    {
        $this->container['send_count'] = $send_count;

        return $this;
    }

    /**
     * Gets send_count_formatted
     *
     * @return string
     */
    public function getSendCountFormatted()
    {
        return $this->container['send_count_formatted'];
    }

    /**
     * Sets send_count_formatted
     *
     * @param string $send_count_formatted Count of emails sent, formatted
     *
     * @return $this
     */
    public function setSendCountFormatted($send_count_formatted)
    {
        $this->container['send_count_formatted'] = $send_count_formatted;

        return $this;
    }

    /**
     * Gets skipped_count
     *
     * @return int
     */
    public function getSkippedCount()
    {
        return $this->container['skipped_count'];
    }

    /**
     * Sets skipped_count
     *
     * @param int $skipped_count Count of skipped emails
     *
     * @return $this
     */
    public function setSkippedCount($skipped_count)
    {
        $this->container['skipped_count'] = $skipped_count;

        return $this;
    }

    /**
     * Gets skipped_count_formatted
     *
     * @return string
     */
    public function getSkippedCountFormatted()
    {
        return $this->container['skipped_count_formatted'];
    }

    /**
     * Sets skipped_count_formatted
     *
     * @param string $skipped_count_formatted Count of skipped emails, formatted
     *
     * @return $this
     */
    public function setSkippedCountFormatted($skipped_count_formatted)
    {
        $this->container['skipped_count_formatted'] = $skipped_count_formatted;

        return $this;
    }

    /**
     * Gets spam_count
     *
     * @return int
     */
    public function getSpamCount()
    {
        return $this->container['spam_count'];
    }

    /**
     * Sets spam_count
     *
     * @param int $spam_count Count of emails classified as spam
     *
     * @return $this
     */
    public function setSpamCount($spam_count)
    {
        $this->container['spam_count'] = $spam_count;

        return $this;
    }

    /**
     * Gets spam_count_formatted
     *
     * @return string
     */
    public function getSpamCountFormatted()
    {
        return $this->container['spam_count_formatted'];
    }

    /**
     * Sets spam_count_formatted
     *
     * @param string $spam_count_formatted Count of emails classified as spam, formatted
     *
     * @return $this
     */
    public function setSpamCountFormatted($spam_count_formatted)
    {
        $this->container['spam_count_formatted'] = $spam_count_formatted;

        return $this;
    }

    /**
     * Gets stat_type
     *
     * @return string
     */
    public function getStatType()
    {
        return $this->container['stat_type'];
    }

    /**
     * Sets stat_type
     *
     * @param string $stat_type Campaign, Flow or None (for anything else)
     *
     * @return $this
     */
    public function setStatType($stat_type)
    {
        $this->container['stat_type'] = $stat_type;

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
     * @param string $status Status of campaign or flow
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_dts
     *
     * @return string
     */
    public function getStatusDts()
    {
        return $this->container['status_dts'];
    }

    /**
     * Sets status_dts
     *
     * @param string $status_dts Status dts of campaign or flow
     *
     * @return $this
     */
    public function setStatusDts($status_dts)
    {
        $this->container['status_dts'] = $status_dts;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int $storefront_oid Storefront oid
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets unsubscribe_count
     *
     * @return int
     */
    public function getUnsubscribeCount()
    {
        return $this->container['unsubscribe_count'];
    }

    /**
     * Sets unsubscribe_count
     *
     * @param int $unsubscribe_count Count of emails classified as unsubscribe
     *
     * @return $this
     */
    public function setUnsubscribeCount($unsubscribe_count)
    {
        $this->container['unsubscribe_count'] = $unsubscribe_count;

        return $this;
    }

    /**
     * Gets unsubscribe_count_formatted
     *
     * @return string
     */
    public function getUnsubscribeCountFormatted()
    {
        return $this->container['unsubscribe_count_formatted'];
    }

    /**
     * Sets unsubscribe_count_formatted
     *
     * @param string $unsubscribe_count_formatted Count of emails classified as unsubscribe, formatted
     *
     * @return $this
     */
    public function setUnsubscribeCountFormatted($unsubscribe_count_formatted)
    {
        $this->container['unsubscribe_count_formatted'] = $unsubscribe_count_formatted;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid List/Segment uuid, or Flow/Campaign uuid depending on level of stat aggregation.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets view_count
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     *
     * @param int $view_count Count of views
     *
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets view_count_formatted
     *
     * @return string
     */
    public function getViewCountFormatted()
    {
        return $this->container['view_count_formatted'];
    }

    /**
     * Sets view_count_formatted
     *
     * @param string $view_count_formatted Count of views, formatted
     *
     * @return $this
     */
    public function setViewCountFormatted($view_count_formatted)
    {
        $this->container['view_count_formatted'] = $view_count_formatted;

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


