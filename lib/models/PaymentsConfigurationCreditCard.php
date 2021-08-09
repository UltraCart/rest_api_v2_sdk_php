<?php
/**
 * PaymentsConfigurationCreditCard
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
 * PaymentsConfigurationCreditCard Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsConfigurationCreditCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsConfigurationCreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_credit_card' => 'bool',
        'billed_by' => 'string',
        'charge_during_checkout' => 'bool',
        'collect_cvv2' => 'bool',
        'configured_gateway_details' => 'string',
        'failed_attempts' => 'int',
        'hide_connect_single_gateway' => 'bool',
        'restrictions' => '\ultracart\v2\models\PaymentsConfigurationRestrictions[]',
        'send_customer_billing_update_on_decline' => 'bool',
        'supported_cards' => '\ultracart\v2\models\PaymentsConfigurationCreditCardType[]',
        'test_methods' => '\ultracart\v2\models\PaymentsConfigurationTestMethod[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_credit_card' => null,
        'billed_by' => null,
        'charge_during_checkout' => null,
        'collect_cvv2' => null,
        'configured_gateway_details' => null,
        'failed_attempts' => 'int32',
        'hide_connect_single_gateway' => null,
        'restrictions' => null,
        'send_customer_billing_update_on_decline' => null,
        'supported_cards' => null,
        'test_methods' => null
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
        'accept_credit_card' => 'accept_credit_card',
        'billed_by' => 'billed_by',
        'charge_during_checkout' => 'charge_during_checkout',
        'collect_cvv2' => 'collect_cvv2',
        'configured_gateway_details' => 'configured_gateway_details',
        'failed_attempts' => 'failed_attempts',
        'hide_connect_single_gateway' => 'hide_connect_single_gateway',
        'restrictions' => 'restrictions',
        'send_customer_billing_update_on_decline' => 'send_customer_billing_update_on_decline',
        'supported_cards' => 'supported_cards',
        'test_methods' => 'test_methods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_credit_card' => 'setAcceptCreditCard',
        'billed_by' => 'setBilledBy',
        'charge_during_checkout' => 'setChargeDuringCheckout',
        'collect_cvv2' => 'setCollectCvv2',
        'configured_gateway_details' => 'setConfiguredGatewayDetails',
        'failed_attempts' => 'setFailedAttempts',
        'hide_connect_single_gateway' => 'setHideConnectSingleGateway',
        'restrictions' => 'setRestrictions',
        'send_customer_billing_update_on_decline' => 'setSendCustomerBillingUpdateOnDecline',
        'supported_cards' => 'setSupportedCards',
        'test_methods' => 'setTestMethods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_credit_card' => 'getAcceptCreditCard',
        'billed_by' => 'getBilledBy',
        'charge_during_checkout' => 'getChargeDuringCheckout',
        'collect_cvv2' => 'getCollectCvv2',
        'configured_gateway_details' => 'getConfiguredGatewayDetails',
        'failed_attempts' => 'getFailedAttempts',
        'hide_connect_single_gateway' => 'getHideConnectSingleGateway',
        'restrictions' => 'getRestrictions',
        'send_customer_billing_update_on_decline' => 'getSendCustomerBillingUpdateOnDecline',
        'supported_cards' => 'getSupportedCards',
        'test_methods' => 'getTestMethods'
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
        $this->container['accept_credit_card'] = isset($data['accept_credit_card']) ? $data['accept_credit_card'] : null;
        $this->container['billed_by'] = isset($data['billed_by']) ? $data['billed_by'] : null;
        $this->container['charge_during_checkout'] = isset($data['charge_during_checkout']) ? $data['charge_during_checkout'] : null;
        $this->container['collect_cvv2'] = isset($data['collect_cvv2']) ? $data['collect_cvv2'] : null;
        $this->container['configured_gateway_details'] = isset($data['configured_gateway_details']) ? $data['configured_gateway_details'] : null;
        $this->container['failed_attempts'] = isset($data['failed_attempts']) ? $data['failed_attempts'] : null;
        $this->container['hide_connect_single_gateway'] = isset($data['hide_connect_single_gateway']) ? $data['hide_connect_single_gateway'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['send_customer_billing_update_on_decline'] = isset($data['send_customer_billing_update_on_decline']) ? $data['send_customer_billing_update_on_decline'] : null;
        $this->container['supported_cards'] = isset($data['supported_cards']) ? $data['supported_cards'] : null;
        $this->container['test_methods'] = isset($data['test_methods']) ? $data['test_methods'] : null;
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
     * Gets accept_credit_card
     *
     * @return bool
     */
    public function getAcceptCreditCard()
    {
        return $this->container['accept_credit_card'];
    }

    /**
     * Sets accept_credit_card
     *
     * @param bool $accept_credit_card Master flag indicating whether this merchant accepts credit card payments
     *
     * @return $this
     */
    public function setAcceptCreditCard($accept_credit_card)
    {
        $this->container['accept_credit_card'] = $accept_credit_card;

        return $this;
    }

    /**
     * Gets billed_by
     *
     * @return string
     */
    public function getBilledBy()
    {
        return $this->container['billed_by'];
    }

    /**
     * Sets billed_by
     *
     * @param string $billed_by Description that appears on customer statements
     *
     * @return $this
     */
    public function setBilledBy($billed_by)
    {
        $this->container['billed_by'] = $billed_by;

        return $this;
    }

    /**
     * Gets charge_during_checkout
     *
     * @return bool
     */
    public function getChargeDuringCheckout()
    {
        return $this->container['charge_during_checkout'];
    }

    /**
     * Sets charge_during_checkout
     *
     * @param bool $charge_during_checkout If false, order will be accepted and placed into Accounts Receivable without charging card first
     *
     * @return $this
     */
    public function setChargeDuringCheckout($charge_during_checkout)
    {
        $this->container['charge_during_checkout'] = $charge_during_checkout;

        return $this;
    }

    /**
     * Gets collect_cvv2
     *
     * @return bool
     */
    public function getCollectCvv2()
    {
        return $this->container['collect_cvv2'];
    }

    /**
     * Sets collect_cvv2
     *
     * @param bool $collect_cvv2 UltraCart will require customer to enter cvv if this is true
     *
     * @return $this
     */
    public function setCollectCvv2($collect_cvv2)
    {
        $this->container['collect_cvv2'] = $collect_cvv2;

        return $this;
    }

    /**
     * Gets configured_gateway_details
     *
     * @return string
     */
    public function getConfiguredGatewayDetails()
    {
        return $this->container['configured_gateway_details'];
    }

    /**
     * Sets configured_gateway_details
     *
     * @param string $configured_gateway_details Human readable description of the credit card gateway currently configured
     *
     * @return $this
     */
    public function setConfiguredGatewayDetails($configured_gateway_details)
    {
        $this->container['configured_gateway_details'] = $configured_gateway_details;

        return $this;
    }

    /**
     * Gets failed_attempts
     *
     * @return int
     */
    public function getFailedAttempts()
    {
        return $this->container['failed_attempts'];
    }

    /**
     * Sets failed_attempts
     *
     * @param int $failed_attempts The number of failed attempts before the order is placed into Accounts Receivable for manual intervention
     *
     * @return $this
     */
    public function setFailedAttempts($failed_attempts)
    {
        $this->container['failed_attempts'] = $failed_attempts;

        return $this;
    }

    /**
     * Gets hide_connect_single_gateway
     *
     * @return bool
     */
    public function getHideConnectSingleGateway()
    {
        return $this->container['hide_connect_single_gateway'];
    }

    /**
     * Sets hide_connect_single_gateway
     *
     * @param bool $hide_connect_single_gateway This internal flag aids the UI in determining which buttons to show.
     *
     * @return $this
     */
    public function setHideConnectSingleGateway($hide_connect_single_gateway)
    {
        $this->container['hide_connect_single_gateway'] = $hide_connect_single_gateway;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \ultracart\v2\models\PaymentsConfigurationRestrictions[]
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \ultracart\v2\models\PaymentsConfigurationRestrictions[] $restrictions Restrictions for this payment method
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

        return $this;
    }

    /**
     * Gets send_customer_billing_update_on_decline
     *
     * @return bool
     */
    public function getSendCustomerBillingUpdateOnDecline()
    {
        return $this->container['send_customer_billing_update_on_decline'];
    }

    /**
     * Sets send_customer_billing_update_on_decline
     *
     * @param bool $send_customer_billing_update_on_decline UltraCart will send customers emails to update their credit card if the card is declined
     *
     * @return $this
     */
    public function setSendCustomerBillingUpdateOnDecline($send_customer_billing_update_on_decline)
    {
        $this->container['send_customer_billing_update_on_decline'] = $send_customer_billing_update_on_decline;

        return $this;
    }

    /**
     * Gets supported_cards
     *
     * @return \ultracart\v2\models\PaymentsConfigurationCreditCardType[]
     */
    public function getSupportedCards()
    {
        return $this->container['supported_cards'];
    }

    /**
     * Sets supported_cards
     *
     * @param \ultracart\v2\models\PaymentsConfigurationCreditCardType[] $supported_cards A list of credit cards the merchant wishes to accept.
     *
     * @return $this
     */
    public function setSupportedCards($supported_cards)
    {
        $this->container['supported_cards'] = $supported_cards;

        return $this;
    }

    /**
     * Gets test_methods
     *
     * @return \ultracart\v2\models\PaymentsConfigurationTestMethod[]
     */
    public function getTestMethods()
    {
        return $this->container['test_methods'];
    }

    /**
     * Sets test_methods
     *
     * @param \ultracart\v2\models\PaymentsConfigurationTestMethod[] $test_methods An array of test methods for placing test orders.  The cards defined here may be real or fake, but any order placed with them will be marked as Test orders
     *
     * @return $this
     */
    public function setTestMethods($test_methods)
    {
        $this->container['test_methods'] = $test_methods;

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

