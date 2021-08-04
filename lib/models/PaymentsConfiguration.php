<?php
/**
 * PaymentsConfiguration
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
 * PaymentsConfiguration Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsConfiguration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'affirm' => '\ultracart\v2\models\PaymentsConfigurationAffirm',
        'amazon' => '\ultracart\v2\models\PaymentsConfigurationAmazon',
        'cash' => '\ultracart\v2\models\PaymentsConfigurationCash',
        'check' => '\ultracart\v2\models\PaymentsConfigurationCheck',
        'cod' => '\ultracart\v2\models\PaymentsConfigurationCOD',
        'credit_card' => '\ultracart\v2\models\PaymentsConfigurationCreditCard',
        'e_check' => '\ultracart\v2\models\PaymentsConfigurationEcheck',
        'loan_hero' => '\ultracart\v2\models\PaymentsConfigurationLoanHero',
        'money_order' => '\ultracart\v2\models\PaymentsConfigurationMoneyOrder',
        'pay_pal' => '\ultracart\v2\models\PaymentsConfigurationPayPal',
        'purchase_order' => '\ultracart\v2\models\PaymentsConfigurationPurchaseOrder',
        'quote_request' => '\ultracart\v2\models\PaymentsConfigurationQuoteRequest',
        'sezzle' => '\ultracart\v2\models\PaymentsConfigurationSezzle',
        'show_accounting_code' => 'bool',
        'switch_to_sub_tab' => 'string',
        'switch_to_tab' => 'string',
        'we_pay' => '\ultracart\v2\models\PaymentsConfigurationWePay',
        'wire_transfer' => '\ultracart\v2\models\PaymentsConfigurationWireTransfer'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'affirm' => null,
        'amazon' => null,
        'cash' => null,
        'check' => null,
        'cod' => null,
        'credit_card' => null,
        'e_check' => null,
        'loan_hero' => null,
        'money_order' => null,
        'pay_pal' => null,
        'purchase_order' => null,
        'quote_request' => null,
        'sezzle' => null,
        'show_accounting_code' => null,
        'switch_to_sub_tab' => null,
        'switch_to_tab' => null,
        'we_pay' => null,
        'wire_transfer' => null
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
        'affirm' => 'affirm',
        'amazon' => 'amazon',
        'cash' => 'cash',
        'check' => 'check',
        'cod' => 'cod',
        'credit_card' => 'creditCard',
        'e_check' => 'eCheck',
        'loan_hero' => 'loanHero',
        'money_order' => 'moneyOrder',
        'pay_pal' => 'payPal',
        'purchase_order' => 'purchaseOrder',
        'quote_request' => 'quoteRequest',
        'sezzle' => 'sezzle',
        'show_accounting_code' => 'showAccountingCode',
        'switch_to_sub_tab' => 'switchToSubTab',
        'switch_to_tab' => 'switchToTab',
        'we_pay' => 'wePay',
        'wire_transfer' => 'wireTransfer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affirm' => 'setAffirm',
        'amazon' => 'setAmazon',
        'cash' => 'setCash',
        'check' => 'setCheck',
        'cod' => 'setCod',
        'credit_card' => 'setCreditCard',
        'e_check' => 'setECheck',
        'loan_hero' => 'setLoanHero',
        'money_order' => 'setMoneyOrder',
        'pay_pal' => 'setPayPal',
        'purchase_order' => 'setPurchaseOrder',
        'quote_request' => 'setQuoteRequest',
        'sezzle' => 'setSezzle',
        'show_accounting_code' => 'setShowAccountingCode',
        'switch_to_sub_tab' => 'setSwitchToSubTab',
        'switch_to_tab' => 'setSwitchToTab',
        'we_pay' => 'setWePay',
        'wire_transfer' => 'setWireTransfer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affirm' => 'getAffirm',
        'amazon' => 'getAmazon',
        'cash' => 'getCash',
        'check' => 'getCheck',
        'cod' => 'getCod',
        'credit_card' => 'getCreditCard',
        'e_check' => 'getECheck',
        'loan_hero' => 'getLoanHero',
        'money_order' => 'getMoneyOrder',
        'pay_pal' => 'getPayPal',
        'purchase_order' => 'getPurchaseOrder',
        'quote_request' => 'getQuoteRequest',
        'sezzle' => 'getSezzle',
        'show_accounting_code' => 'getShowAccountingCode',
        'switch_to_sub_tab' => 'getSwitchToSubTab',
        'switch_to_tab' => 'getSwitchToTab',
        'we_pay' => 'getWePay',
        'wire_transfer' => 'getWireTransfer'
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
        $this->container['affirm'] = isset($data['affirm']) ? $data['affirm'] : null;
        $this->container['amazon'] = isset($data['amazon']) ? $data['amazon'] : null;
        $this->container['cash'] = isset($data['cash']) ? $data['cash'] : null;
        $this->container['check'] = isset($data['check']) ? $data['check'] : null;
        $this->container['cod'] = isset($data['cod']) ? $data['cod'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['e_check'] = isset($data['e_check']) ? $data['e_check'] : null;
        $this->container['loan_hero'] = isset($data['loan_hero']) ? $data['loan_hero'] : null;
        $this->container['money_order'] = isset($data['money_order']) ? $data['money_order'] : null;
        $this->container['pay_pal'] = isset($data['pay_pal']) ? $data['pay_pal'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['quote_request'] = isset($data['quote_request']) ? $data['quote_request'] : null;
        $this->container['sezzle'] = isset($data['sezzle']) ? $data['sezzle'] : null;
        $this->container['show_accounting_code'] = isset($data['show_accounting_code']) ? $data['show_accounting_code'] : null;
        $this->container['switch_to_sub_tab'] = isset($data['switch_to_sub_tab']) ? $data['switch_to_sub_tab'] : null;
        $this->container['switch_to_tab'] = isset($data['switch_to_tab']) ? $data['switch_to_tab'] : null;
        $this->container['we_pay'] = isset($data['we_pay']) ? $data['we_pay'] : null;
        $this->container['wire_transfer'] = isset($data['wire_transfer']) ? $data['wire_transfer'] : null;
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
     * Gets affirm
     *
     * @return \ultracart\v2\models\PaymentsConfigurationAffirm
     */
    public function getAffirm()
    {
        return $this->container['affirm'];
    }

    /**
     * Sets affirm
     *
     * @param \ultracart\v2\models\PaymentsConfigurationAffirm $affirm affirm
     *
     * @return $this
     */
    public function setAffirm($affirm)
    {
        $this->container['affirm'] = $affirm;

        return $this;
    }

    /**
     * Gets amazon
     *
     * @return \ultracart\v2\models\PaymentsConfigurationAmazon
     */
    public function getAmazon()
    {
        return $this->container['amazon'];
    }

    /**
     * Sets amazon
     *
     * @param \ultracart\v2\models\PaymentsConfigurationAmazon $amazon amazon
     *
     * @return $this
     */
    public function setAmazon($amazon)
    {
        $this->container['amazon'] = $amazon;

        return $this;
    }

    /**
     * Gets cash
     *
     * @return \ultracart\v2\models\PaymentsConfigurationCash
     */
    public function getCash()
    {
        return $this->container['cash'];
    }

    /**
     * Sets cash
     *
     * @param \ultracart\v2\models\PaymentsConfigurationCash $cash cash
     *
     * @return $this
     */
    public function setCash($cash)
    {
        $this->container['cash'] = $cash;

        return $this;
    }

    /**
     * Gets check
     *
     * @return \ultracart\v2\models\PaymentsConfigurationCheck
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     *
     * @param \ultracart\v2\models\PaymentsConfigurationCheck $check check
     *
     * @return $this
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

        return $this;
    }

    /**
     * Gets cod
     *
     * @return \ultracart\v2\models\PaymentsConfigurationCOD
     */
    public function getCod()
    {
        return $this->container['cod'];
    }

    /**
     * Sets cod
     *
     * @param \ultracart\v2\models\PaymentsConfigurationCOD $cod cod
     *
     * @return $this
     */
    public function setCod($cod)
    {
        $this->container['cod'] = $cod;

        return $this;
    }

    /**
     * Gets credit_card
     *
     * @return \ultracart\v2\models\PaymentsConfigurationCreditCard
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     *
     * @param \ultracart\v2\models\PaymentsConfigurationCreditCard $credit_card credit_card
     *
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets e_check
     *
     * @return \ultracart\v2\models\PaymentsConfigurationEcheck
     */
    public function getECheck()
    {
        return $this->container['e_check'];
    }

    /**
     * Sets e_check
     *
     * @param \ultracart\v2\models\PaymentsConfigurationEcheck $e_check e_check
     *
     * @return $this
     */
    public function setECheck($e_check)
    {
        $this->container['e_check'] = $e_check;

        return $this;
    }

    /**
     * Gets loan_hero
     *
     * @return \ultracart\v2\models\PaymentsConfigurationLoanHero
     */
    public function getLoanHero()
    {
        return $this->container['loan_hero'];
    }

    /**
     * Sets loan_hero
     *
     * @param \ultracart\v2\models\PaymentsConfigurationLoanHero $loan_hero loan_hero
     *
     * @return $this
     */
    public function setLoanHero($loan_hero)
    {
        $this->container['loan_hero'] = $loan_hero;

        return $this;
    }

    /**
     * Gets money_order
     *
     * @return \ultracart\v2\models\PaymentsConfigurationMoneyOrder
     */
    public function getMoneyOrder()
    {
        return $this->container['money_order'];
    }

    /**
     * Sets money_order
     *
     * @param \ultracart\v2\models\PaymentsConfigurationMoneyOrder $money_order money_order
     *
     * @return $this
     */
    public function setMoneyOrder($money_order)
    {
        $this->container['money_order'] = $money_order;

        return $this;
    }

    /**
     * Gets pay_pal
     *
     * @return \ultracart\v2\models\PaymentsConfigurationPayPal
     */
    public function getPayPal()
    {
        return $this->container['pay_pal'];
    }

    /**
     * Sets pay_pal
     *
     * @param \ultracart\v2\models\PaymentsConfigurationPayPal $pay_pal pay_pal
     *
     * @return $this
     */
    public function setPayPal($pay_pal)
    {
        $this->container['pay_pal'] = $pay_pal;

        return $this;
    }

    /**
     * Gets purchase_order
     *
     * @return \ultracart\v2\models\PaymentsConfigurationPurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     *
     * @param \ultracart\v2\models\PaymentsConfigurationPurchaseOrder $purchase_order purchase_order
     *
     * @return $this
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

        return $this;
    }

    /**
     * Gets quote_request
     *
     * @return \ultracart\v2\models\PaymentsConfigurationQuoteRequest
     */
    public function getQuoteRequest()
    {
        return $this->container['quote_request'];
    }

    /**
     * Sets quote_request
     *
     * @param \ultracart\v2\models\PaymentsConfigurationQuoteRequest $quote_request quote_request
     *
     * @return $this
     */
    public function setQuoteRequest($quote_request)
    {
        $this->container['quote_request'] = $quote_request;

        return $this;
    }

    /**
     * Gets sezzle
     *
     * @return \ultracart\v2\models\PaymentsConfigurationSezzle
     */
    public function getSezzle()
    {
        return $this->container['sezzle'];
    }

    /**
     * Sets sezzle
     *
     * @param \ultracart\v2\models\PaymentsConfigurationSezzle $sezzle sezzle
     *
     * @return $this
     */
    public function setSezzle($sezzle)
    {
        $this->container['sezzle'] = $sezzle;

        return $this;
    }

    /**
     * Gets show_accounting_code
     *
     * @return bool
     */
    public function getShowAccountingCode()
    {
        return $this->container['show_accounting_code'];
    }

    /**
     * Sets show_accounting_code
     *
     * @param bool $show_accounting_code show_accounting_code
     *
     * @return $this
     */
    public function setShowAccountingCode($show_accounting_code)
    {
        $this->container['show_accounting_code'] = $show_accounting_code;

        return $this;
    }

    /**
     * Gets switch_to_sub_tab
     *
     * @return string
     */
    public function getSwitchToSubTab()
    {
        return $this->container['switch_to_sub_tab'];
    }

    /**
     * Sets switch_to_sub_tab
     *
     * @param string $switch_to_sub_tab switch_to_sub_tab
     *
     * @return $this
     */
    public function setSwitchToSubTab($switch_to_sub_tab)
    {
        $this->container['switch_to_sub_tab'] = $switch_to_sub_tab;

        return $this;
    }

    /**
     * Gets switch_to_tab
     *
     * @return string
     */
    public function getSwitchToTab()
    {
        return $this->container['switch_to_tab'];
    }

    /**
     * Sets switch_to_tab
     *
     * @param string $switch_to_tab switch_to_tab
     *
     * @return $this
     */
    public function setSwitchToTab($switch_to_tab)
    {
        $this->container['switch_to_tab'] = $switch_to_tab;

        return $this;
    }

    /**
     * Gets we_pay
     *
     * @return \ultracart\v2\models\PaymentsConfigurationWePay
     */
    public function getWePay()
    {
        return $this->container['we_pay'];
    }

    /**
     * Sets we_pay
     *
     * @param \ultracart\v2\models\PaymentsConfigurationWePay $we_pay we_pay
     *
     * @return $this
     */
    public function setWePay($we_pay)
    {
        $this->container['we_pay'] = $we_pay;

        return $this;
    }

    /**
     * Gets wire_transfer
     *
     * @return \ultracart\v2\models\PaymentsConfigurationWireTransfer
     */
    public function getWireTransfer()
    {
        return $this->container['wire_transfer'];
    }

    /**
     * Sets wire_transfer
     *
     * @param \ultracart\v2\models\PaymentsConfigurationWireTransfer $wire_transfer wire_transfer
     *
     * @return $this
     */
    public function setWireTransfer($wire_transfer)
    {
        $this->container['wire_transfer'] = $wire_transfer;

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


