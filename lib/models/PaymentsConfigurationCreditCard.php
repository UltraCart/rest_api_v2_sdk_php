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
        'accept_credit_cards' => 'bool',
        'billed_by' => 'string',
        'charge_during_checkout' => 'bool',
        'collect_cvv2' => 'bool',
        'configured_gateways_details' => 'string',
        'failed_attempts' => 'string',
        'hide_connect_single_gateway' => 'bool',
        'send_customer_billing_update_on_decline' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_credit_cards' => null,
        'billed_by' => null,
        'charge_during_checkout' => null,
        'collect_cvv2' => null,
        'configured_gateways_details' => null,
        'failed_attempts' => null,
        'hide_connect_single_gateway' => null,
        'send_customer_billing_update_on_decline' => null
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
        'accept_credit_cards' => 'acceptCreditCards',
        'billed_by' => 'billedBy',
        'charge_during_checkout' => 'chargeDuringCheckout',
        'collect_cvv2' => 'collectCvv2',
        'configured_gateways_details' => 'configuredGatewaysDetails',
        'failed_attempts' => 'failedAttempts',
        'hide_connect_single_gateway' => 'hideConnectSingleGateway',
        'send_customer_billing_update_on_decline' => 'sendCustomerBillingUpdateOnDecline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_credit_cards' => 'setAcceptCreditCards',
        'billed_by' => 'setBilledBy',
        'charge_during_checkout' => 'setChargeDuringCheckout',
        'collect_cvv2' => 'setCollectCvv2',
        'configured_gateways_details' => 'setConfiguredGatewaysDetails',
        'failed_attempts' => 'setFailedAttempts',
        'hide_connect_single_gateway' => 'setHideConnectSingleGateway',
        'send_customer_billing_update_on_decline' => 'setSendCustomerBillingUpdateOnDecline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_credit_cards' => 'getAcceptCreditCards',
        'billed_by' => 'getBilledBy',
        'charge_during_checkout' => 'getChargeDuringCheckout',
        'collect_cvv2' => 'getCollectCvv2',
        'configured_gateways_details' => 'getConfiguredGatewaysDetails',
        'failed_attempts' => 'getFailedAttempts',
        'hide_connect_single_gateway' => 'getHideConnectSingleGateway',
        'send_customer_billing_update_on_decline' => 'getSendCustomerBillingUpdateOnDecline'
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
        $this->container['accept_credit_cards'] = isset($data['accept_credit_cards']) ? $data['accept_credit_cards'] : null;
        $this->container['billed_by'] = isset($data['billed_by']) ? $data['billed_by'] : null;
        $this->container['charge_during_checkout'] = isset($data['charge_during_checkout']) ? $data['charge_during_checkout'] : null;
        $this->container['collect_cvv2'] = isset($data['collect_cvv2']) ? $data['collect_cvv2'] : null;
        $this->container['configured_gateways_details'] = isset($data['configured_gateways_details']) ? $data['configured_gateways_details'] : null;
        $this->container['failed_attempts'] = isset($data['failed_attempts']) ? $data['failed_attempts'] : null;
        $this->container['hide_connect_single_gateway'] = isset($data['hide_connect_single_gateway']) ? $data['hide_connect_single_gateway'] : null;
        $this->container['send_customer_billing_update_on_decline'] = isset($data['send_customer_billing_update_on_decline']) ? $data['send_customer_billing_update_on_decline'] : null;
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
     * Gets accept_credit_cards
     *
     * @return bool
     */
    public function getAcceptCreditCards()
    {
        return $this->container['accept_credit_cards'];
    }

    /**
     * Sets accept_credit_cards
     *
     * @param bool $accept_credit_cards accept_credit_cards
     *
     * @return $this
     */
    public function setAcceptCreditCards($accept_credit_cards)
    {
        $this->container['accept_credit_cards'] = $accept_credit_cards;

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
     * @param string $billed_by billed_by
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
     * @param bool $charge_during_checkout charge_during_checkout
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
     * @param bool $collect_cvv2 collect_cvv2
     *
     * @return $this
     */
    public function setCollectCvv2($collect_cvv2)
    {
        $this->container['collect_cvv2'] = $collect_cvv2;

        return $this;
    }

    /**
     * Gets configured_gateways_details
     *
     * @return string
     */
    public function getConfiguredGatewaysDetails()
    {
        return $this->container['configured_gateways_details'];
    }

    /**
     * Sets configured_gateways_details
     *
     * @param string $configured_gateways_details configured_gateways_details
     *
     * @return $this
     */
    public function setConfiguredGatewaysDetails($configured_gateways_details)
    {
        $this->container['configured_gateways_details'] = $configured_gateways_details;

        return $this;
    }

    /**
     * Gets failed_attempts
     *
     * @return string
     */
    public function getFailedAttempts()
    {
        return $this->container['failed_attempts'];
    }

    /**
     * Sets failed_attempts
     *
     * @param string $failed_attempts failed_attempts
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
     * @param bool $hide_connect_single_gateway hide_connect_single_gateway
     *
     * @return $this
     */
    public function setHideConnectSingleGateway($hide_connect_single_gateway)
    {
        $this->container['hide_connect_single_gateway'] = $hide_connect_single_gateway;

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
     * @param bool $send_customer_billing_update_on_decline send_customer_billing_update_on_decline
     *
     * @return $this
     */
    public function setSendCustomerBillingUpdateOnDecline($send_customer_billing_update_on_decline)
    {
        $this->container['send_customer_billing_update_on_decline'] = $send_customer_billing_update_on_decline;

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


