<?php
/**
 * CartSettingsShippingEstimate
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
 * CartSettingsShippingEstimate Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CartSettingsShippingEstimate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CartSettingsShippingEstimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_3rd_party_billing' => 'bool',
        'comment' => 'string',
        'cost' => '\ultracart\v2\models\Currency',
        'cost_before_discount' => '\ultracart\v2\models\Currency',
        'default_method' => 'bool',
        'discount' => '\ultracart\v2\models\Currency',
        'discounted' => 'bool',
        'display_name' => 'string',
        'estimated_delivery' => 'string',
        'lift_gate_option' => 'bool',
        'name' => 'string',
        'pickup' => 'bool',
        'tax' => '\ultracart\v2\models\Currency',
        'total_tax' => '\ultracart\v2\models\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_3rd_party_billing' => null,
        'comment' => null,
        'cost' => null,
        'cost_before_discount' => null,
        'default_method' => null,
        'discount' => null,
        'discounted' => null,
        'display_name' => null,
        'estimated_delivery' => null,
        'lift_gate_option' => null,
        'name' => null,
        'pickup' => null,
        'tax' => null,
        'total_tax' => null
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
        'allow_3rd_party_billing' => 'allow_3rd_party_billing',
        'comment' => 'comment',
        'cost' => 'cost',
        'cost_before_discount' => 'cost_before_discount',
        'default_method' => 'default_method',
        'discount' => 'discount',
        'discounted' => 'discounted',
        'display_name' => 'display_name',
        'estimated_delivery' => 'estimated_delivery',
        'lift_gate_option' => 'lift_gate_option',
        'name' => 'name',
        'pickup' => 'pickup',
        'tax' => 'tax',
        'total_tax' => 'total_tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_3rd_party_billing' => 'setAllow3rdPartyBilling',
        'comment' => 'setComment',
        'cost' => 'setCost',
        'cost_before_discount' => 'setCostBeforeDiscount',
        'default_method' => 'setDefaultMethod',
        'discount' => 'setDiscount',
        'discounted' => 'setDiscounted',
        'display_name' => 'setDisplayName',
        'estimated_delivery' => 'setEstimatedDelivery',
        'lift_gate_option' => 'setLiftGateOption',
        'name' => 'setName',
        'pickup' => 'setPickup',
        'tax' => 'setTax',
        'total_tax' => 'setTotalTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_3rd_party_billing' => 'getAllow3rdPartyBilling',
        'comment' => 'getComment',
        'cost' => 'getCost',
        'cost_before_discount' => 'getCostBeforeDiscount',
        'default_method' => 'getDefaultMethod',
        'discount' => 'getDiscount',
        'discounted' => 'getDiscounted',
        'display_name' => 'getDisplayName',
        'estimated_delivery' => 'getEstimatedDelivery',
        'lift_gate_option' => 'getLiftGateOption',
        'name' => 'getName',
        'pickup' => 'getPickup',
        'tax' => 'getTax',
        'total_tax' => 'getTotalTax'
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
        $this->container['allow_3rd_party_billing'] = $data['allow_3rd_party_billing'] ?? null;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['cost_before_discount'] = $data['cost_before_discount'] ?? null;
        $this->container['default_method'] = $data['default_method'] ?? null;
        $this->container['discount'] = $data['discount'] ?? null;
        $this->container['discounted'] = $data['discounted'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['estimated_delivery'] = $data['estimated_delivery'] ?? null;
        $this->container['lift_gate_option'] = $data['lift_gate_option'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['pickup'] = $data['pickup'] ?? null;
        $this->container['tax'] = $data['tax'] ?? null;
        $this->container['total_tax'] = $data['total_tax'] ?? null;
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
     * Gets allow_3rd_party_billing
     *
     * @return bool|null
     */
    public function getAllow3rdPartyBilling()
    {
        return $this->container['allow_3rd_party_billing'];
    }

    /**
     * Sets allow_3rd_party_billing
     *
     * @param bool|null $allow_3rd_party_billing True if this method allows the customer to use their own shipper account number
     *
     * @return self
     */
    public function setAllow3rdPartyBilling($allow_3rd_party_billing)
    {
        $this->container['allow_3rd_party_billing'] = $allow_3rd_party_billing;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment Comment to display to the customer about this method
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \ultracart\v2\models\Currency|null $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets cost_before_discount
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getCostBeforeDiscount()
    {
        return $this->container['cost_before_discount'];
    }

    /**
     * Sets cost_before_discount
     *
     * @param \ultracart\v2\models\Currency|null $cost_before_discount cost_before_discount
     *
     * @return self
     */
    public function setCostBeforeDiscount($cost_before_discount)
    {
        $this->container['cost_before_discount'] = $cost_before_discount;

        return $this;
    }

    /**
     * Gets default_method
     *
     * @return bool|null
     */
    public function getDefaultMethod()
    {
        return $this->container['default_method'];
    }

    /**
     * Sets default_method
     *
     * @param bool|null $default_method True if this is the default method
     *
     * @return self
     */
    public function setDefaultMethod($default_method)
    {
        $this->container['default_method'] = $default_method;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \ultracart\v2\models\Currency|null $discount discount
     *
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discounted
     *
     * @return bool|null
     */
    public function getDiscounted()
    {
        return $this->container['discounted'];
    }

    /**
     * Sets discounted
     *
     * @param bool|null $discounted True if this method is discounted because of a coupon
     *
     * @return self
     */
    public function setDiscounted($discounted)
    {
        $this->container['discounted'] = $discounted;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name The name to display to the customer
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets estimated_delivery
     *
     * @return string|null
     */
    public function getEstimatedDelivery()
    {
        return $this->container['estimated_delivery'];
    }

    /**
     * Sets estimated_delivery
     *
     * @param string|null $estimated_delivery Date of the estimated delivery (or range)
     *
     * @return self
     */
    public function setEstimatedDelivery($estimated_delivery)
    {
        $this->container['estimated_delivery'] = $estimated_delivery;

        return $this;
    }

    /**
     * Gets lift_gate_option
     *
     * @return bool|null
     */
    public function getLiftGateOption()
    {
        return $this->container['lift_gate_option'];
    }

    /**
     * Sets lift_gate_option
     *
     * @param bool|null $lift_gate_option True if a lift gate option for this method should be offered to the customer
     *
     * @return self
     */
    public function setLiftGateOption($lift_gate_option)
    {
        $this->container['lift_gate_option'] = $lift_gate_option;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Shipping method name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pickup
     *
     * @return bool|null
     */
    public function getPickup()
    {
        return $this->container['pickup'];
    }

    /**
     * Sets pickup
     *
     * @param bool|null $pickup True if this shipping method requires customers to physically pickup product themselves
     *
     * @return self
     */
    public function setPickup($pickup)
    {
        $this->container['pickup'] = $pickup;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \ultracart\v2\models\Currency|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets total_tax
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param \ultracart\v2\models\Currency|null $total_tax total_tax
     *
     * @return self
     */
    public function setTotalTax($total_tax)
    {
        $this->container['total_tax'] = $total_tax;

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


