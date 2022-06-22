<?php
/**
 * CheckoutHandoffRequest
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
 * CheckoutHandoffRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CheckoutHandoffRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckoutHandoffRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
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
        return self::$openAPIModelName;
    }

    public const OPERATION_CHECKOUT = 'checkout';
    public const OPERATION_PAY_PAL = 'payPal';
    public const OPERATION_PAY_PAL_CREDIT = 'payPalCredit';
    public const OPERATION_VIEW = 'view';
    public const OPERATION_AFFIRM = 'affirm';
    public const OPERATION_SEZZLE = 'sezzle';

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
        $this->container['cart'] = $data['cart'] ?? null;
        $this->container['error_parameter_name'] = $data['error_parameter_name'] ?? null;
        $this->container['error_return_url'] = $data['error_return_url'] ?? null;
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['paypal_maximum_upsell_revenue'] = $data['paypal_maximum_upsell_revenue'] ?? null;
        $this->container['paypal_return_url'] = $data['paypal_return_url'] ?? null;
        $this->container['secure_host_name'] = $data['secure_host_name'] ?? null;
        $this->container['ucacid'] = $data['ucacid'] ?? null;
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
                "invalid value '%s' for 'operation', must be one of '%s'",
                $this->container['operation'],
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
     * @return \ultracart\v2\models\Cart|null
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \ultracart\v2\models\Cart|null $cart cart
     *
     * @return self
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets error_parameter_name
     *
     * @return string|null
     */
    public function getErrorParameterName()
    {
        return $this->container['error_parameter_name'];
    }

    /**
     * Sets error_parameter_name
     *
     * @param string|null $error_parameter_name If any error happen during the processing on the UltraCart side, the browser will be redirected to your error_return_url with the error passed in this parameter name.
     *
     * @return self
     */
    public function setErrorParameterName($error_parameter_name)
    {
        $this->container['error_parameter_name'] = $error_parameter_name;

        return $this;
    }

    /**
     * Gets error_return_url
     *
     * @return string|null
     */
    public function getErrorReturnUrl()
    {
        return $this->container['error_return_url'];
    }

    /**
     * Sets error_return_url
     *
     * @param string|null $error_return_url The URL to return the browser to if there are processing errors on the UltraCart side.
     *
     * @return self
     */
    public function setErrorReturnUrl($error_return_url)
    {
        $this->container['error_return_url'] = $error_return_url;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string|null
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string|null $operation The type of handoff operation to perform
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $allowedValues = $this->getOperationAllowableValues();
        if (!is_null($operation) && !in_array($operation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'operation', must be one of '%s'",
                    $operation,
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
     * @return float|null
     */
    public function getPaypalMaximumUpsellRevenue()
    {
        return $this->container['paypal_maximum_upsell_revenue'];
    }

    /**
     * Sets paypal_maximum_upsell_revenue
     *
     * @param float|null $paypal_maximum_upsell_revenue The maximum amount of revenue that you think the customer could add during a custom upsell after sequence on your checkout.
     *
     * @return self
     */
    public function setPaypalMaximumUpsellRevenue($paypal_maximum_upsell_revenue)
    {
        $this->container['paypal_maximum_upsell_revenue'] = $paypal_maximum_upsell_revenue;

        return $this;
    }

    /**
     * Gets paypal_return_url
     *
     * @return string|null
     */
    public function getPaypalReturnUrl()
    {
        return $this->container['paypal_return_url'];
    }

    /**
     * Sets paypal_return_url
     *
     * @param string|null $paypal_return_url The URl to return the customers browser to after they have completed the PayPal process.
     *
     * @return self
     */
    public function setPaypalReturnUrl($paypal_return_url)
    {
        $this->container['paypal_return_url'] = $paypal_return_url;

        return $this;
    }

    /**
     * Gets secure_host_name
     *
     * @return string|null
     */
    public function getSecureHostName()
    {
        return $this->container['secure_host_name'];
    }

    /**
     * Sets secure_host_name
     *
     * @param string|null $secure_host_name The desired secure host name to perform the handoff on.  This should match the desired StoreFront.
     *
     * @return self
     */
    public function setSecureHostName($secure_host_name)
    {
        $this->container['secure_host_name'] = $secure_host_name;

        return $this;
    }

    /**
     * Gets ucacid
     *
     * @return string|null
     */
    public function getUcacid()
    {
        return $this->container['ucacid'];
    }

    /**
     * Sets ucacid
     *
     * @param string|null $ucacid The UltraCart Analytics cookie value.  Populate this if you're handing off from a different domain than the checkout.
     *
     * @return self
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


