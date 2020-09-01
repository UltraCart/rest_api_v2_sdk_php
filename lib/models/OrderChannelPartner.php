<?php
/**
 * OrderChannelPartner
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
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

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * OrderChannelPartner Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderChannelPartner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderChannelPartner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_approve_purchase_order' => 'bool',
        'channel_partner_code' => 'string',
        'channel_partner_data' => 'string',
        'channel_partner_oid' => 'int',
        'channel_partner_order_id' => 'string',
        'no_realtime_payment_processing' => 'bool',
        'skip_payment_processing' => 'bool',
        'store_completed' => 'bool',
        'store_if_payment_declines' => 'bool',
        'treat_warnings_as_errors' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_approve_purchase_order' => null,
        'channel_partner_code' => null,
        'channel_partner_data' => null,
        'channel_partner_oid' => 'int32',
        'channel_partner_order_id' => null,
        'no_realtime_payment_processing' => null,
        'skip_payment_processing' => null,
        'store_completed' => null,
        'store_if_payment_declines' => null,
        'treat_warnings_as_errors' => null
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
        'auto_approve_purchase_order' => 'auto_approve_purchase_order',
        'channel_partner_code' => 'channel_partner_code',
        'channel_partner_data' => 'channel_partner_data',
        'channel_partner_oid' => 'channel_partner_oid',
        'channel_partner_order_id' => 'channel_partner_order_id',
        'no_realtime_payment_processing' => 'no_realtime_payment_processing',
        'skip_payment_processing' => 'skip_payment_processing',
        'store_completed' => 'store_completed',
        'store_if_payment_declines' => 'store_if_payment_declines',
        'treat_warnings_as_errors' => 'treat_warnings_as_errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_approve_purchase_order' => 'setAutoApprovePurchaseOrder',
        'channel_partner_code' => 'setChannelPartnerCode',
        'channel_partner_data' => 'setChannelPartnerData',
        'channel_partner_oid' => 'setChannelPartnerOid',
        'channel_partner_order_id' => 'setChannelPartnerOrderId',
        'no_realtime_payment_processing' => 'setNoRealtimePaymentProcessing',
        'skip_payment_processing' => 'setSkipPaymentProcessing',
        'store_completed' => 'setStoreCompleted',
        'store_if_payment_declines' => 'setStoreIfPaymentDeclines',
        'treat_warnings_as_errors' => 'setTreatWarningsAsErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_approve_purchase_order' => 'getAutoApprovePurchaseOrder',
        'channel_partner_code' => 'getChannelPartnerCode',
        'channel_partner_data' => 'getChannelPartnerData',
        'channel_partner_oid' => 'getChannelPartnerOid',
        'channel_partner_order_id' => 'getChannelPartnerOrderId',
        'no_realtime_payment_processing' => 'getNoRealtimePaymentProcessing',
        'skip_payment_processing' => 'getSkipPaymentProcessing',
        'store_completed' => 'getStoreCompleted',
        'store_if_payment_declines' => 'getStoreIfPaymentDeclines',
        'treat_warnings_as_errors' => 'getTreatWarningsAsErrors'
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
        $this->container['auto_approve_purchase_order'] = isset($data['auto_approve_purchase_order']) ? $data['auto_approve_purchase_order'] : null;
        $this->container['channel_partner_code'] = isset($data['channel_partner_code']) ? $data['channel_partner_code'] : null;
        $this->container['channel_partner_data'] = isset($data['channel_partner_data']) ? $data['channel_partner_data'] : null;
        $this->container['channel_partner_oid'] = isset($data['channel_partner_oid']) ? $data['channel_partner_oid'] : null;
        $this->container['channel_partner_order_id'] = isset($data['channel_partner_order_id']) ? $data['channel_partner_order_id'] : null;
        $this->container['no_realtime_payment_processing'] = isset($data['no_realtime_payment_processing']) ? $data['no_realtime_payment_processing'] : null;
        $this->container['skip_payment_processing'] = isset($data['skip_payment_processing']) ? $data['skip_payment_processing'] : null;
        $this->container['store_completed'] = isset($data['store_completed']) ? $data['store_completed'] : null;
        $this->container['store_if_payment_declines'] = isset($data['store_if_payment_declines']) ? $data['store_if_payment_declines'] : null;
        $this->container['treat_warnings_as_errors'] = isset($data['treat_warnings_as_errors']) ? $data['treat_warnings_as_errors'] : null;
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
     * Gets auto_approve_purchase_order
     *
     * @return bool
     */
    public function getAutoApprovePurchaseOrder()
    {
        return $this->container['auto_approve_purchase_order'];
    }

    /**
     * Sets auto_approve_purchase_order
     *
     * @param bool $auto_approve_purchase_order If true, any purchase order submitted is automatically approved
     *
     * @return $this
     */
    public function setAutoApprovePurchaseOrder($auto_approve_purchase_order)
    {
        $this->container['auto_approve_purchase_order'] = $auto_approve_purchase_order;

        return $this;
    }

    /**
     * Gets channel_partner_code
     *
     * @return string
     */
    public function getChannelPartnerCode()
    {
        return $this->container['channel_partner_code'];
    }

    /**
     * Sets channel_partner_code
     *
     * @param string $channel_partner_code The code of the channel partner
     *
     * @return $this
     */
    public function setChannelPartnerCode($channel_partner_code)
    {
        $this->container['channel_partner_code'] = $channel_partner_code;

        return $this;
    }

    /**
     * Gets channel_partner_data
     *
     * @return string
     */
    public function getChannelPartnerData()
    {
        return $this->container['channel_partner_data'];
    }

    /**
     * Sets channel_partner_data
     *
     * @param string $channel_partner_data Additional data provided by the channel partner, read-only
     *
     * @return $this
     */
    public function setChannelPartnerData($channel_partner_data)
    {
        $this->container['channel_partner_data'] = $channel_partner_data;

        return $this;
    }

    /**
     * Gets channel_partner_oid
     *
     * @return int
     */
    public function getChannelPartnerOid()
    {
        return $this->container['channel_partner_oid'];
    }

    /**
     * Sets channel_partner_oid
     *
     * @param int $channel_partner_oid Channel partner object identifier, read-only and available on existing channel orders only.
     *
     * @return $this
     */
    public function setChannelPartnerOid($channel_partner_oid)
    {
        $this->container['channel_partner_oid'] = $channel_partner_oid;

        return $this;
    }

    /**
     * Gets channel_partner_order_id
     *
     * @return string
     */
    public function getChannelPartnerOrderId()
    {
        return $this->container['channel_partner_order_id'];
    }

    /**
     * Sets channel_partner_order_id
     *
     * @param string $channel_partner_order_id The order ID assigned by the channel partner for this order
     *
     * @return $this
     */
    public function setChannelPartnerOrderId($channel_partner_order_id)
    {
        $this->container['channel_partner_order_id'] = $channel_partner_order_id;

        return $this;
    }

    /**
     * Gets no_realtime_payment_processing
     *
     * @return bool
     */
    public function getNoRealtimePaymentProcessing()
    {
        return $this->container['no_realtime_payment_processing'];
    }

    /**
     * Sets no_realtime_payment_processing
     *
     * @param bool $no_realtime_payment_processing Indicates this order should be placed in Account Receivable for later payment processing
     *
     * @return $this
     */
    public function setNoRealtimePaymentProcessing($no_realtime_payment_processing)
    {
        $this->container['no_realtime_payment_processing'] = $no_realtime_payment_processing;

        return $this;
    }

    /**
     * Gets skip_payment_processing
     *
     * @return bool
     */
    public function getSkipPaymentProcessing()
    {
        return $this->container['skip_payment_processing'];
    }

    /**
     * Sets skip_payment_processing
     *
     * @param bool $skip_payment_processing Indicates this order was already paid for via a channel purchase and no payment collection should be attempted
     *
     * @return $this
     */
    public function setSkipPaymentProcessing($skip_payment_processing)
    {
        $this->container['skip_payment_processing'] = $skip_payment_processing;

        return $this;
    }

    /**
     * Gets store_completed
     *
     * @return bool
     */
    public function getStoreCompleted()
    {
        return $this->container['store_completed'];
    }

    /**
     * Sets store_completed
     *
     * @param bool $store_completed Instructs UltraCart to skip shipping department and mark this order as fully complete.  Set this flag if you have already shipped product for this order.
     *
     * @return $this
     */
    public function setStoreCompleted($store_completed)
    {
        $this->container['store_completed'] = $store_completed;

        return $this;
    }

    /**
     * Gets store_if_payment_declines
     *
     * @return bool
     */
    public function getStoreIfPaymentDeclines()
    {
        return $this->container['store_if_payment_declines'];
    }

    /**
     * Sets store_if_payment_declines
     *
     * @param bool $store_if_payment_declines If true, any failed payment will place the order in Accounts Receivable rather than rejecting it.
     *
     * @return $this
     */
    public function setStoreIfPaymentDeclines($store_if_payment_declines)
    {
        $this->container['store_if_payment_declines'] = $store_if_payment_declines;

        return $this;
    }

    /**
     * Gets treat_warnings_as_errors
     *
     * @return bool
     */
    public function getTreatWarningsAsErrors()
    {
        return $this->container['treat_warnings_as_errors'];
    }

    /**
     * Sets treat_warnings_as_errors
     *
     * @param bool $treat_warnings_as_errors Any warnings are raised as errors and halt the import of the order
     *
     * @return $this
     */
    public function setTreatWarningsAsErrors($treat_warnings_as_errors)
    {
        $this->container['treat_warnings_as_errors'] = $treat_warnings_as_errors;

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


