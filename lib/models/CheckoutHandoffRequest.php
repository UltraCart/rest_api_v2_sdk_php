<?php
/**
 * CheckoutHandoffRequest
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
 * CheckoutHandoffRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutHandoffRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutHandoffRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cart' => '\ultracart\v2\models\Cart',
        'error_parameter_name' => 'string',
        'error_return_url' => 'string',
        'operation' => 'string',
        'paypal_maximum_upsell_revenue' => 'float',
        'paypal_return_url' => 'string',
        'secure_host_name' => 'string',
        'ucacid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cart' => null,
        'error_parameter_name' => null,
        'error_return_url' => null,
        'operation' => null,
        'paypal_maximum_upsell_revenue' => null,
        'paypal_return_url' => null,
        'secure_host_name' => null,
        'ucacid' => null
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
        'cart' => 'cart',
        'error_parameter_name' => 'error_parameter_name',
        'error_return_url' => 'error_return_url',
        'operation' => 'operation',
        'paypal_maximum_upsell_revenue' => 'paypal_maximum_upsell_revenue',
        'paypal_return_url' => 'paypal_return_url',
        'secure_host_name' => 'secure_host_name',
        'ucacid' => 'ucacid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cart' => 'setCart',
        'error_parameter_name' => 'setErrorParameterName',
        'error_return_url' => 'setErrorReturnUrl',
        'operation' => 'setOperation',
        'paypal_maximum_upsell_revenue' => 'setPaypalMaximumUpsellRevenue',
        'paypal_return_url' => 'setPaypalReturnUrl',
        'secure_host_name' => 'setSecureHostName',
        'ucacid' => 'setUcacid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cart' => 'getCart',
        'error_parameter_name' => 'getErrorParameterName',
        'error_return_url' => 'getErrorReturnUrl',
        'operation' => 'getOperation',
        'paypal_maximum_upsell_revenue' => 'getPaypalMaximumUpsellRevenue',
        'paypal_return_url' => 'getPaypalReturnUrl',
        'secure_host_name' => 'getSecureHostName',
        'ucacid' => 'getUcacid'
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

    const OPERATION_CHECKOUT = 'checkout';
    const OPERATION_PAY_PAL = 'payPal';
    const OPERATION_PAY_PAL_CREDIT = 'payPalCredit';
    const OPERATION_VIEW = 'view';
    const OPERATION_AFFIRM = 'affirm';
    const OPERATION_SEZZLE = 'sezzle';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationAllowableValues()
    {
        return [
            self::OPERATION_CHECKOUT,
            self::OPERATION_PAY_PAL,
            self::OPERATION_PAY_PAL_CREDIT,
            self::OPERATION_VIEW,
            self::OPERATION_AFFIRM,
            self::OPERATION_SEZZLE,
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
        $this->container['cart'] = isset($data['cart']) ? $data['cart'] : null;
        $this->container['error_parameter_name'] = isset($data['error_parameter_name']) ? $data['error_parameter_name'] : null;
        $this->container['error_return_url'] = isset($data['error_return_url']) ? $data['error_return_url'] : null;
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['paypal_maximum_upsell_revenue'] = isset($data['paypal_maximum_upsell_revenue']) ? $data['paypal_maximum_upsell_revenue'] : null;
        $this->container['paypal_return_url'] = isset($data['paypal_return_url']) ? $data['paypal_return_url'] : null;
        $this->container['secure_host_name'] = isset($data['secure_host_name']) ? $data['secure_host_name'] : null;
        $this->container['ucacid'] = isset($data['ucacid']) ? $data['ucacid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($this->container['operation']) && !in_array($this->container['operation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation', must be one of '%s'",
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
     * Gets cart
     *
     * @return \ultracart\v2\models\Cart
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \ultracart\v2\models\Cart $cart cart
     *
     * @return $this
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets error_parameter_name
     *
     * @return string
     */
    public function getErrorParameterName()
    {
        return $this->container['error_parameter_name'];
    }

    /**
     * Sets error_parameter_name
     *
     * @param string $error_parameter_name If any error happen during the processing on the UltraCart side, the browser will be redirected to your error_return_url with the error passed in this parameter name.
     *
     * @return $this
     */
    public function setErrorParameterName($error_parameter_name)
    {
        $this->container['error_parameter_name'] = $error_parameter_name;

        return $this;
    }

    /**
     * Gets error_return_url
     *
     * @return string
     */
    public function getErrorReturnUrl()
    {
        return $this->container['error_return_url'];
    }

    /**
     * Sets error_return_url
     *
     * @param string $error_return_url The URL to return the browser to if there are processing errors on the UltraCart side.
     *
     * @return $this
     */
    public function setErrorReturnUrl($error_return_url)
    {
        $this->container['error_return_url'] = $error_return_url;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation The type of handoff operation to perform
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation'] = $operation;

        return $this;
    }

    /**
     * Gets paypal_maximum_upsell_revenue
     *
     * @return float
     */
    public function getPaypalMaximumUpsellRevenue()
    {
        return $this->container['paypal_maximum_upsell_revenue'];
    }

    /**
     * Sets paypal_maximum_upsell_revenue
     *
     * @param float $paypal_maximum_upsell_revenue The maximum amount of revenue that you think the customer could add during a custom upsell after sequence on your checkout.
     *
     * @return $this
     */
    public function setPaypalMaximumUpsellRevenue($paypal_maximum_upsell_revenue)
    {
        $this->container['paypal_maximum_upsell_revenue'] = $paypal_maximum_upsell_revenue;

        return $this;
    }

    /**
     * Gets paypal_return_url
     *
     * @return string
     */
    public function getPaypalReturnUrl()
    {
        return $this->container['paypal_return_url'];
    }

    /**
     * Sets paypal_return_url
     *
     * @param string $paypal_return_url The URl to return the customers browser to after they have completed the PayPal process.
     *
     * @return $this
     */
    public function setPaypalReturnUrl($paypal_return_url)
    {
        $this->container['paypal_return_url'] = $paypal_return_url;

        return $this;
    }

    /**
     * Gets secure_host_name
     *
     * @return string
     */
    public function getSecureHostName()
    {
        return $this->container['secure_host_name'];
    }

    /**
     * Sets secure_host_name
     *
     * @param string $secure_host_name The desired secure host name to perform the handoff on.  This should match the desired StoreFront.
     *
     * @return $this
     */
    public function setSecureHostName($secure_host_name)
    {
        $this->container['secure_host_name'] = $secure_host_name;

        return $this;
    }

    /**
     * Gets ucacid
     *
     * @return string
     */
    public function getUcacid()
    {
        return $this->container['ucacid'];
    }

    /**
     * Sets ucacid
     *
     * @param string $ucacid The UltraCart Analytics cookie value.  Populate this if you're handing off from a different domain than the checkout.
     *
     * @return $this
     */
    public function setUcacid($ucacid)
    {
        $this->container['ucacid'] = $ucacid;

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


