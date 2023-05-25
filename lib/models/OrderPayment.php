<?php
/**
 * OrderPayment
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
 * OrderPayment Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderPayment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'check' => '\ultracart\v2\models\OrderPaymentCheck',
        'credit_card' => '\ultracart\v2\models\OrderPaymentCreditCard',
        'echeck' => '\ultracart\v2\models\OrderPaymentECheck',
        'hold_for_fraud_review' => 'bool',
        'insurance' => '\ultracart\v2\models\OrderPaymentInsurance',
        'payment_dts' => 'string',
        'payment_method' => 'string',
        'payment_method_accounting_code' => 'string',
        'payment_method_deposit_to_account' => 'string',
        'payment_status' => 'string',
        'purchase_order' => '\ultracart\v2\models\OrderPaymentPurchaseOrder',
        'rotating_transaction_gateway_code' => 'string',
        'surcharge' => '\ultracart\v2\models\Currency',
        'surcharge_accounting_code' => 'string',
        'surcharge_transaction_fee' => 'float',
        'surcharge_transaction_percentage' => 'float',
        'test_order' => 'bool',
        'transactions' => '\ultracart\v2\models\OrderPaymentTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'check' => null,
        'credit_card' => null,
        'echeck' => null,
        'hold_for_fraud_review' => null,
        'insurance' => null,
        'payment_dts' => 'dateTime',
        'payment_method' => null,
        'payment_method_accounting_code' => null,
        'payment_method_deposit_to_account' => null,
        'payment_status' => null,
        'purchase_order' => null,
        'rotating_transaction_gateway_code' => null,
        'surcharge' => null,
        'surcharge_accounting_code' => null,
        'surcharge_transaction_fee' => null,
        'surcharge_transaction_percentage' => null,
        'test_order' => null,
        'transactions' => null
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
        'check' => 'check',
        'credit_card' => 'credit_card',
        'echeck' => 'echeck',
        'hold_for_fraud_review' => 'hold_for_fraud_review',
        'insurance' => 'insurance',
        'payment_dts' => 'payment_dts',
        'payment_method' => 'payment_method',
        'payment_method_accounting_code' => 'payment_method_accounting_code',
        'payment_method_deposit_to_account' => 'payment_method_deposit_to_account',
        'payment_status' => 'payment_status',
        'purchase_order' => 'purchase_order',
        'rotating_transaction_gateway_code' => 'rotating_transaction_gateway_code',
        'surcharge' => 'surcharge',
        'surcharge_accounting_code' => 'surcharge_accounting_code',
        'surcharge_transaction_fee' => 'surcharge_transaction_fee',
        'surcharge_transaction_percentage' => 'surcharge_transaction_percentage',
        'test_order' => 'test_order',
        'transactions' => 'transactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check' => 'setCheck',
        'credit_card' => 'setCreditCard',
        'echeck' => 'setEcheck',
        'hold_for_fraud_review' => 'setHoldForFraudReview',
        'insurance' => 'setInsurance',
        'payment_dts' => 'setPaymentDts',
        'payment_method' => 'setPaymentMethod',
        'payment_method_accounting_code' => 'setPaymentMethodAccountingCode',
        'payment_method_deposit_to_account' => 'setPaymentMethodDepositToAccount',
        'payment_status' => 'setPaymentStatus',
        'purchase_order' => 'setPurchaseOrder',
        'rotating_transaction_gateway_code' => 'setRotatingTransactionGatewayCode',
        'surcharge' => 'setSurcharge',
        'surcharge_accounting_code' => 'setSurchargeAccountingCode',
        'surcharge_transaction_fee' => 'setSurchargeTransactionFee',
        'surcharge_transaction_percentage' => 'setSurchargeTransactionPercentage',
        'test_order' => 'setTestOrder',
        'transactions' => 'setTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check' => 'getCheck',
        'credit_card' => 'getCreditCard',
        'echeck' => 'getEcheck',
        'hold_for_fraud_review' => 'getHoldForFraudReview',
        'insurance' => 'getInsurance',
        'payment_dts' => 'getPaymentDts',
        'payment_method' => 'getPaymentMethod',
        'payment_method_accounting_code' => 'getPaymentMethodAccountingCode',
        'payment_method_deposit_to_account' => 'getPaymentMethodDepositToAccount',
        'payment_status' => 'getPaymentStatus',
        'purchase_order' => 'getPurchaseOrder',
        'rotating_transaction_gateway_code' => 'getRotatingTransactionGatewayCode',
        'surcharge' => 'getSurcharge',
        'surcharge_accounting_code' => 'getSurchargeAccountingCode',
        'surcharge_transaction_fee' => 'getSurchargeTransactionFee',
        'surcharge_transaction_percentage' => 'getSurchargeTransactionPercentage',
        'test_order' => 'getTestOrder',
        'transactions' => 'getTransactions'
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

    public const PAYMENT_METHOD_AFFIRM = 'Affirm';
    public const PAYMENT_METHOD_AMAZON = 'Amazon';
    public const PAYMENT_METHOD_AMAZON_SC = 'Amazon SC';
    public const PAYMENT_METHOD_CASH = 'Cash';
    public const PAYMENT_METHOD_CHECK = 'Check';
    public const PAYMENT_METHOD_COD = 'COD';
    public const PAYMENT_METHOD_CREDIT_CARD = 'Credit Card';
    public const PAYMENT_METHOD_E_BAY = 'eBay';
    public const PAYMENT_METHOD_E_CHECK = 'eCheck';
    public const PAYMENT_METHOD_GOOGLE_SHOPPING = 'Google Shopping';
    public const PAYMENT_METHOD_INSURANCE = 'Insurance';
    public const PAYMENT_METHOD_LOAN_HERO = 'LoanHero';
    public const PAYMENT_METHOD_MONEY_ORDER = 'Money Order';
    public const PAYMENT_METHOD_PAY_PAL = 'PayPal';
    public const PAYMENT_METHOD_PURCHASE_ORDER = 'Purchase Order';
    public const PAYMENT_METHOD_QUOTE_REQUEST = 'Quote Request';
    public const PAYMENT_METHOD_UNKNOWN = 'Unknown';
    public const PAYMENT_METHOD_WIRE_TRANSFER = 'Wire Transfer';
    public const PAYMENT_METHOD_WALMART = 'Walmart';
    public const PAYMENT_METHOD_SHOP_COM = 'Shop.com';
    public const PAYMENT_METHOD_SEZZLE = 'Sezzle';
    public const PAYMENT_METHOD_VENMO = 'Venmo';
    public const PAYMENT_STATUS_UNPROCESSED = 'Unprocessed';
    public const PAYMENT_STATUS_AUTHORIZED = 'Authorized';
    public const PAYMENT_STATUS_CAPTURE_FAILED = 'Capture Failed';
    public const PAYMENT_STATUS_PROCESSED = 'Processed';
    public const PAYMENT_STATUS_DECLINED = 'Declined';
    public const PAYMENT_STATUS_VOIDED = 'Voided';
    public const PAYMENT_STATUS_REFUNDED = 'Refunded';
    public const PAYMENT_STATUS_SKIPPED = 'Skipped';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_AFFIRM,
            self::PAYMENT_METHOD_AMAZON,
            self::PAYMENT_METHOD_AMAZON_SC,
            self::PAYMENT_METHOD_CASH,
            self::PAYMENT_METHOD_CHECK,
            self::PAYMENT_METHOD_COD,
            self::PAYMENT_METHOD_CREDIT_CARD,
            self::PAYMENT_METHOD_E_BAY,
            self::PAYMENT_METHOD_E_CHECK,
            self::PAYMENT_METHOD_GOOGLE_SHOPPING,
            self::PAYMENT_METHOD_INSURANCE,
            self::PAYMENT_METHOD_LOAN_HERO,
            self::PAYMENT_METHOD_MONEY_ORDER,
            self::PAYMENT_METHOD_PAY_PAL,
            self::PAYMENT_METHOD_PURCHASE_ORDER,
            self::PAYMENT_METHOD_QUOTE_REQUEST,
            self::PAYMENT_METHOD_UNKNOWN,
            self::PAYMENT_METHOD_WIRE_TRANSFER,
            self::PAYMENT_METHOD_WALMART,
            self::PAYMENT_METHOD_SHOP_COM,
            self::PAYMENT_METHOD_SEZZLE,
            self::PAYMENT_METHOD_VENMO,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_UNPROCESSED,
            self::PAYMENT_STATUS_AUTHORIZED,
            self::PAYMENT_STATUS_CAPTURE_FAILED,
            self::PAYMENT_STATUS_PROCESSED,
            self::PAYMENT_STATUS_DECLINED,
            self::PAYMENT_STATUS_VOIDED,
            self::PAYMENT_STATUS_REFUNDED,
            self::PAYMENT_STATUS_SKIPPED,
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
        $this->container['check'] = $data['check'] ?? null;
        $this->container['credit_card'] = $data['credit_card'] ?? null;
        $this->container['echeck'] = $data['echeck'] ?? null;
        $this->container['hold_for_fraud_review'] = $data['hold_for_fraud_review'] ?? null;
        $this->container['insurance'] = $data['insurance'] ?? null;
        $this->container['payment_dts'] = $data['payment_dts'] ?? null;
        $this->container['payment_method'] = $data['payment_method'] ?? null;
        $this->container['payment_method_accounting_code'] = $data['payment_method_accounting_code'] ?? null;
        $this->container['payment_method_deposit_to_account'] = $data['payment_method_deposit_to_account'] ?? null;
        $this->container['payment_status'] = $data['payment_status'] ?? null;
        $this->container['purchase_order'] = $data['purchase_order'] ?? null;
        $this->container['rotating_transaction_gateway_code'] = $data['rotating_transaction_gateway_code'] ?? null;
        $this->container['surcharge'] = $data['surcharge'] ?? null;
        $this->container['surcharge_accounting_code'] = $data['surcharge_accounting_code'] ?? null;
        $this->container['surcharge_transaction_fee'] = $data['surcharge_transaction_fee'] ?? null;
        $this->container['surcharge_transaction_percentage'] = $data['surcharge_transaction_percentage'] ?? null;
        $this->container['test_order'] = $data['test_order'] ?? null;
        $this->container['transactions'] = $data['transactions'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_method', must be one of '%s'",
                $this->container['payment_method'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_status', must be one of '%s'",
                $this->container['payment_status'],
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
     * Gets check
     *
     * @return \ultracart\v2\models\OrderPaymentCheck|null
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     *
     * @param \ultracart\v2\models\OrderPaymentCheck|null $check check
     *
     * @return self
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \ultracart\v2\models\OrderPaymentCreditCard|null
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \ultracart\v2\models\OrderPaymentCreditCard|null $credit_card credit_card
     *
     * @return self
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets echeck
     *
     * @return \ultracart\v2\models\OrderPaymentECheck|null
     */
    public function getEcheck()
    {
        return $this->container['echeck'];
    }

    /**
     * Sets echeck
     *
     * @param \ultracart\v2\models\OrderPaymentECheck|null $echeck echeck
     *
     * @return self
     */
    public function setEcheck($echeck)
    {
        $this->container['echeck'] = $echeck;

        return $this;
    }

    /**
     * Gets hold_for_fraud_review
     *
     * @return bool|null
     */
    public function getHoldForFraudReview()
    {
        return $this->container['hold_for_fraud_review'];
    }

    /**
     * Sets hold_for_fraud_review
     *
     * @param bool|null $hold_for_fraud_review True if order has been held for fraud review
     *
     * @return self
     */
    public function setHoldForFraudReview($hold_for_fraud_review)
    {
        $this->container['hold_for_fraud_review'] = $hold_for_fraud_review;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \ultracart\v2\models\OrderPaymentInsurance|null
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \ultracart\v2\models\OrderPaymentInsurance|null $insurance insurance
     *
     * @return self
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets payment_dts
     *
     * @return string|null
     */
    public function getPaymentDts()
    {
        return $this->container['payment_dts'];
    }

    /**
     * Sets payment_dts
     *
     * @param string|null $payment_dts Date/time that the payment was successfully processed, for new orders, this field is only considered if channel_partner.skip_payment_processing is true
     *
     * @return self
     */
    public function setPaymentDts($payment_dts)
    {
        $this->container['payment_dts'] = $payment_dts;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string|null $payment_method Payment method
     *
     * @return self
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_method', must be one of '%s'",
                    $payment_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_accounting_code
     *
     * @return string|null
     */
    public function getPaymentMethodAccountingCode()
    {
        return $this->container['payment_method_accounting_code'];
    }

    /**
     * Sets payment_method_accounting_code
     *
     * @param string|null $payment_method_accounting_code Payment method QuickBooks code
     *
     * @return self
     */
    public function setPaymentMethodAccountingCode($payment_method_accounting_code)
    {
        $this->container['payment_method_accounting_code'] = $payment_method_accounting_code;

        return $this;
    }

    /**
     * Gets payment_method_deposit_to_account
     *
     * @return string|null
     */
    public function getPaymentMethodDepositToAccount()
    {
        return $this->container['payment_method_deposit_to_account'];
    }

    /**
     * Sets payment_method_deposit_to_account
     *
     * @param string|null $payment_method_deposit_to_account Payment method QuickBooks deposit account
     *
     * @return self
     */
    public function setPaymentMethodDepositToAccount($payment_method_deposit_to_account)
    {
        $this->container['payment_method_deposit_to_account'] = $payment_method_deposit_to_account;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status Payment status
     *
     * @return self
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_status', must be one of '%s'",
                    $payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets purchase_order
     *
     * @return \ultracart\v2\models\OrderPaymentPurchaseOrder|null
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     *
     * @param \ultracart\v2\models\OrderPaymentPurchaseOrder|null $purchase_order purchase_order
     *
     * @return self
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

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
     * @param string|null $rotating_transaction_gateway_code Rotating transaction gateway code used to process this order
     *
     * @return self
     */
    public function setRotatingTransactionGatewayCode($rotating_transaction_gateway_code)
    {
        $this->container['rotating_transaction_gateway_code'] = $rotating_transaction_gateway_code;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param \ultracart\v2\models\Currency|null $surcharge surcharge
     *
     * @return self
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets surcharge_accounting_code
     *
     * @return string|null
     */
    public function getSurchargeAccountingCode()
    {
        return $this->container['surcharge_accounting_code'];
    }

    /**
     * Sets surcharge_accounting_code
     *
     * @param string|null $surcharge_accounting_code Surcharge accounting code
     *
     * @return self
     */
    public function setSurchargeAccountingCode($surcharge_accounting_code)
    {
        $this->container['surcharge_accounting_code'] = $surcharge_accounting_code;

        return $this;
    }

    /**
     * Gets surcharge_transaction_fee
     *
     * @return float|null
     */
    public function getSurchargeTransactionFee()
    {
        return $this->container['surcharge_transaction_fee'];
    }

    /**
     * Sets surcharge_transaction_fee
     *
     * @param float|null $surcharge_transaction_fee Surcharge transaction fee
     *
     * @return self
     */
    public function setSurchargeTransactionFee($surcharge_transaction_fee)
    {
        $this->container['surcharge_transaction_fee'] = $surcharge_transaction_fee;

        return $this;
    }

    /**
     * Gets surcharge_transaction_percentage
     *
     * @return float|null
     */
    public function getSurchargeTransactionPercentage()
    {
        return $this->container['surcharge_transaction_percentage'];
    }

    /**
     * Sets surcharge_transaction_percentage
     *
     * @param float|null $surcharge_transaction_percentage Surcharge transaction percentage
     *
     * @return self
     */
    public function setSurchargeTransactionPercentage($surcharge_transaction_percentage)
    {
        $this->container['surcharge_transaction_percentage'] = $surcharge_transaction_percentage;

        return $this;
    }

    /**
     * Gets test_order
     *
     * @return bool|null
     */
    public function getTestOrder()
    {
        return $this->container['test_order'];
    }

    /**
     * Sets test_order
     *
     * @param bool|null $test_order True if this is a test order
     *
     * @return self
     */
    public function setTestOrder($test_order)
    {
        $this->container['test_order'] = $test_order;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \ultracart\v2\models\OrderPaymentTransaction[]|null
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \ultracart\v2\models\OrderPaymentTransaction[]|null $transactions Transactions associated with processing this payment
     *
     * @return self
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

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


