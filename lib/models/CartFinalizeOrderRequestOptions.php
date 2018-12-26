<?php
/**
 * CartFinalizeOrderRequestOptions
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
 * CartFinalizeOrderRequestOptions Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartFinalizeOrderRequestOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartFinalizeOrderRequestOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_approve_purchase_order' => 'bool',
        'channel_partner_code' => 'string',
        'channel_partner_oid' => 'int',
        'channel_partner_order_id' => 'string',
        'consider_recurring' => 'bool',
        'credit_card_authorization_amount' => 'float',
        'credit_card_authorization_date' => 'string',
        'credit_card_authorization_reference_number' => 'string',
        'no_realtime_payment_processing' => 'bool',
        'setup_next_cart' => 'bool',
        'skip_payment_processing' => 'bool',
        'store_completed' => 'bool',
        'store_if_payment_declines' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_approve_purchase_order' => null,
        'channel_partner_code' => null,
        'channel_partner_oid' => 'int32',
        'channel_partner_order_id' => null,
        'consider_recurring' => null,
        'credit_card_authorization_amount' => null,
        'credit_card_authorization_date' => 'dateTime',
        'credit_card_authorization_reference_number' => null,
        'no_realtime_payment_processing' => null,
        'setup_next_cart' => null,
        'skip_payment_processing' => null,
        'store_completed' => null,
        'store_if_payment_declines' => null
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
        'channel_partner_oid' => 'channel_partner_oid',
        'channel_partner_order_id' => 'channel_partner_order_id',
        'consider_recurring' => 'consider_recurring',
        'credit_card_authorization_amount' => 'credit_card_authorization_amount',
        'credit_card_authorization_date' => 'credit_card_authorization_date',
        'credit_card_authorization_reference_number' => 'credit_card_authorization_reference_number',
        'no_realtime_payment_processing' => 'no_realtime_payment_processing',
        'setup_next_cart' => 'setup_next_cart',
        'skip_payment_processing' => 'skip_payment_processing',
        'store_completed' => 'store_completed',
        'store_if_payment_declines' => 'store_if_payment_declines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_approve_purchase_order' => 'setAutoApprovePurchaseOrder',
        'channel_partner_code' => 'setChannelPartnerCode',
        'channel_partner_oid' => 'setChannelPartnerOid',
        'channel_partner_order_id' => 'setChannelPartnerOrderId',
        'consider_recurring' => 'setConsiderRecurring',
        'credit_card_authorization_amount' => 'setCreditCardAuthorizationAmount',
        'credit_card_authorization_date' => 'setCreditCardAuthorizationDate',
        'credit_card_authorization_reference_number' => 'setCreditCardAuthorizationReferenceNumber',
        'no_realtime_payment_processing' => 'setNoRealtimePaymentProcessing',
        'setup_next_cart' => 'setSetupNextCart',
        'skip_payment_processing' => 'setSkipPaymentProcessing',
        'store_completed' => 'setStoreCompleted',
        'store_if_payment_declines' => 'setStoreIfPaymentDeclines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_approve_purchase_order' => 'getAutoApprovePurchaseOrder',
        'channel_partner_code' => 'getChannelPartnerCode',
        'channel_partner_oid' => 'getChannelPartnerOid',
        'channel_partner_order_id' => 'getChannelPartnerOrderId',
        'consider_recurring' => 'getConsiderRecurring',
        'credit_card_authorization_amount' => 'getCreditCardAuthorizationAmount',
        'credit_card_authorization_date' => 'getCreditCardAuthorizationDate',
        'credit_card_authorization_reference_number' => 'getCreditCardAuthorizationReferenceNumber',
        'no_realtime_payment_processing' => 'getNoRealtimePaymentProcessing',
        'setup_next_cart' => 'getSetupNextCart',
        'skip_payment_processing' => 'getSkipPaymentProcessing',
        'store_completed' => 'getStoreCompleted',
        'store_if_payment_declines' => 'getStoreIfPaymentDeclines'
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
        $this->container['channel_partner_oid'] = isset($data['channel_partner_oid']) ? $data['channel_partner_oid'] : null;
        $this->container['channel_partner_order_id'] = isset($data['channel_partner_order_id']) ? $data['channel_partner_order_id'] : null;
        $this->container['consider_recurring'] = isset($data['consider_recurring']) ? $data['consider_recurring'] : null;
        $this->container['credit_card_authorization_amount'] = isset($data['credit_card_authorization_amount']) ? $data['credit_card_authorization_amount'] : null;
        $this->container['credit_card_authorization_date'] = isset($data['credit_card_authorization_date']) ? $data['credit_card_authorization_date'] : null;
        $this->container['credit_card_authorization_reference_number'] = isset($data['credit_card_authorization_reference_number']) ? $data['credit_card_authorization_reference_number'] : null;
        $this->container['no_realtime_payment_processing'] = isset($data['no_realtime_payment_processing']) ? $data['no_realtime_payment_processing'] : null;
        $this->container['setup_next_cart'] = isset($data['setup_next_cart']) ? $data['setup_next_cart'] : null;
        $this->container['skip_payment_processing'] = isset($data['skip_payment_processing']) ? $data['skip_payment_processing'] : null;
        $this->container['store_completed'] = isset($data['store_completed']) ? $data['store_completed'] : null;
        $this->container['store_if_payment_declines'] = isset($data['store_if_payment_declines']) ? $data['store_if_payment_declines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['credit_card_authorization_reference_number']) && (mb_strlen($this->container['credit_card_authorization_reference_number']) > 60)) {
            $invalidProperties[] = "invalid value for 'credit_card_authorization_reference_number', the character length must be smaller than or equal to 60.";
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

        if (mb_strlen($this->container['credit_card_authorization_reference_number']) > 60) {
            return false;
        }
        return true;
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
     * @param bool $auto_approve_purchase_order Automatically approve the purchase order
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
     * @param string $channel_partner_code Channel partner code to associate this order with
     *
     * @return $this
     */
    public function setChannelPartnerCode($channel_partner_code)
    {
        $this->container['channel_partner_code'] = $channel_partner_code;

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
     * @param int $channel_partner_oid Channel partner oid to associate this order with
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
     * @param string $channel_partner_order_id Channel partner order id for reference
     *
     * @return $this
     */
    public function setChannelPartnerOrderId($channel_partner_order_id)
    {
        $this->container['channel_partner_order_id'] = $channel_partner_order_id;

        return $this;
    }

    /**
     * Gets consider_recurring
     *
     * @return bool
     */
    public function getConsiderRecurring()
    {
        return $this->container['consider_recurring'];
    }

    /**
     * Sets consider_recurring
     *
     * @param bool $consider_recurring Consider this order a recurring order for the purposes of payment gateway recurring flag
     *
     * @return $this
     */
    public function setConsiderRecurring($consider_recurring)
    {
        $this->container['consider_recurring'] = $consider_recurring;

        return $this;
    }

    /**
     * Gets credit_card_authorization_amount
     *
     * @return float
     */
    public function getCreditCardAuthorizationAmount()
    {
        return $this->container['credit_card_authorization_amount'];
    }

    /**
     * Sets credit_card_authorization_amount
     *
     * @param float $credit_card_authorization_amount If the order was authorized outside of UltraCart, this is the amount of the authorization
     *
     * @return $this
     */
    public function setCreditCardAuthorizationAmount($credit_card_authorization_amount)
    {
        $this->container['credit_card_authorization_amount'] = $credit_card_authorization_amount;

        return $this;
    }

    /**
     * Gets credit_card_authorization_date
     *
     * @return string
     */
    public function getCreditCardAuthorizationDate()
    {
        return $this->container['credit_card_authorization_date'];
    }

    /**
     * Sets credit_card_authorization_date
     *
     * @param string $credit_card_authorization_date If the order was authorized outside of UltraCart, this is the date/time of the authorization
     *
     * @return $this
     */
    public function setCreditCardAuthorizationDate($credit_card_authorization_date)
    {
        $this->container['credit_card_authorization_date'] = $credit_card_authorization_date;

        return $this;
    }

    /**
     * Gets credit_card_authorization_reference_number
     *
     * @return string
     */
    public function getCreditCardAuthorizationReferenceNumber()
    {
        return $this->container['credit_card_authorization_reference_number'];
    }

    /**
     * Sets credit_card_authorization_reference_number
     *
     * @param string $credit_card_authorization_reference_number If the order was authorized outside of UltraCart, this is the authorization reference number
     *
     * @return $this
     */
    public function setCreditCardAuthorizationReferenceNumber($credit_card_authorization_reference_number)
    {
        if (!is_null($credit_card_authorization_reference_number) && (mb_strlen($credit_card_authorization_reference_number) > 60)) {
            throw new \InvalidArgumentException('invalid length for $credit_card_authorization_reference_number when calling CartFinalizeOrderRequestOptions., must be smaller than or equal to 60.');
        }

        $this->container['credit_card_authorization_reference_number'] = $credit_card_authorization_reference_number;

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
     * @param bool $no_realtime_payment_processing Prevents normal real-time processing of the payment and sends the order to Accounts Receivable
     *
     * @return $this
     */
    public function setNoRealtimePaymentProcessing($no_realtime_payment_processing)
    {
        $this->container['no_realtime_payment_processing'] = $no_realtime_payment_processing;

        return $this;
    }

    /**
     * Gets setup_next_cart
     *
     * @return bool
     */
    public function getSetupNextCart()
    {
        return $this->container['setup_next_cart'];
    }

    /**
     * Sets setup_next_cart
     *
     * @param bool $setup_next_cart True if the system should create another cart automatically if the current cart was logged into a profile
     *
     * @return $this
     */
    public function setSetupNextCart($setup_next_cart)
    {
        $this->container['setup_next_cart'] = $setup_next_cart;

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
     * @param bool $skip_payment_processing Skip payment processing and move the order on to shipping (or completed if no shipping required)
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
     * @param bool $store_completed True the order in the completed stage
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
     * @param bool $store_if_payment_declines Store the order in accounts receivable if the payment declines
     *
     * @return $this
     */
    public function setStoreIfPaymentDeclines($store_if_payment_declines)
    {
        $this->container['store_if_payment_declines'] = $store_if_payment_declines;

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


