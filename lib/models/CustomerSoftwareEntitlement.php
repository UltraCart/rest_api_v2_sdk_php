<?php
/**
 * CustomerSoftwareEntitlement
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
 * CustomerSoftwareEntitlement Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerSoftwareEntitlement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerSoftwareEntitlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activation_code' => 'string',
        'activation_dts' => 'string',
        'customer_software_entitlement_oid' => 'int',
        'expiration_dts' => 'string',
        'purchased_via_item_description' => 'string',
        'purchased_via_item_id' => 'string',
        'purchased_via_order_id' => 'string',
        'software_sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activation_code' => null,
        'activation_dts' => 'dateTime',
        'customer_software_entitlement_oid' => 'int32',
        'expiration_dts' => 'dateTime',
        'purchased_via_item_description' => null,
        'purchased_via_item_id' => null,
        'purchased_via_order_id' => null,
        'software_sku' => null
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
        'activation_code' => 'activation_code',
        'activation_dts' => 'activation_dts',
        'customer_software_entitlement_oid' => 'customer_software_entitlement_oid',
        'expiration_dts' => 'expiration_dts',
        'purchased_via_item_description' => 'purchased_via_item_description',
        'purchased_via_item_id' => 'purchased_via_item_id',
        'purchased_via_order_id' => 'purchased_via_order_id',
        'software_sku' => 'software_sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activation_code' => 'setActivationCode',
        'activation_dts' => 'setActivationDts',
        'customer_software_entitlement_oid' => 'setCustomerSoftwareEntitlementOid',
        'expiration_dts' => 'setExpirationDts',
        'purchased_via_item_description' => 'setPurchasedViaItemDescription',
        'purchased_via_item_id' => 'setPurchasedViaItemId',
        'purchased_via_order_id' => 'setPurchasedViaOrderId',
        'software_sku' => 'setSoftwareSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activation_code' => 'getActivationCode',
        'activation_dts' => 'getActivationDts',
        'customer_software_entitlement_oid' => 'getCustomerSoftwareEntitlementOid',
        'expiration_dts' => 'getExpirationDts',
        'purchased_via_item_description' => 'getPurchasedViaItemDescription',
        'purchased_via_item_id' => 'getPurchasedViaItemId',
        'purchased_via_order_id' => 'getPurchasedViaOrderId',
        'software_sku' => 'getSoftwareSku'
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
        $this->container['activation_code'] = isset($data['activation_code']) ? $data['activation_code'] : null;
        $this->container['activation_dts'] = isset($data['activation_dts']) ? $data['activation_dts'] : null;
        $this->container['customer_software_entitlement_oid'] = isset($data['customer_software_entitlement_oid']) ? $data['customer_software_entitlement_oid'] : null;
        $this->container['expiration_dts'] = isset($data['expiration_dts']) ? $data['expiration_dts'] : null;
        $this->container['purchased_via_item_description'] = isset($data['purchased_via_item_description']) ? $data['purchased_via_item_description'] : null;
        $this->container['purchased_via_item_id'] = isset($data['purchased_via_item_id']) ? $data['purchased_via_item_id'] : null;
        $this->container['purchased_via_order_id'] = isset($data['purchased_via_order_id']) ? $data['purchased_via_order_id'] : null;
        $this->container['software_sku'] = isset($data['software_sku']) ? $data['software_sku'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['activation_code']) && (mb_strlen($this->container['activation_code']) > 50)) {
            $invalidProperties[] = "invalid value for 'activation_code', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['purchased_via_item_description']) && (mb_strlen($this->container['purchased_via_item_description']) > 512)) {
            $invalidProperties[] = "invalid value for 'purchased_via_item_description', the character length must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['purchased_via_item_id']) && (mb_strlen($this->container['purchased_via_item_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'purchased_via_item_id', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['purchased_via_order_id']) && (mb_strlen($this->container['purchased_via_order_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'purchased_via_order_id', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['software_sku']) && (mb_strlen($this->container['software_sku']) > 30)) {
            $invalidProperties[] = "invalid value for 'software_sku', the character length must be smaller than or equal to 30.";
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

        if (mb_strlen($this->container['activation_code']) > 50) {
            return false;
        }
        if (mb_strlen($this->container['purchased_via_item_description']) > 512) {
            return false;
        }
        if (mb_strlen($this->container['purchased_via_item_id']) > 20) {
            return false;
        }
        if (mb_strlen($this->container['purchased_via_order_id']) > 30) {
            return false;
        }
        if (mb_strlen($this->container['software_sku']) > 30) {
            return false;
        }
        return true;
    }


    /**
     * Gets activation_code
     *
     * @return string
     */
    public function getActivationCode()
    {
        return $this->container['activation_code'];
    }

    /**
     * Sets activation_code
     *
     * @param string $activation_code Activation Code Associated with the software
     *
     * @return $this
     */
    public function setActivationCode($activation_code)
    {
        if (!is_null($activation_code) && (mb_strlen($activation_code) > 50)) {
            throw new \InvalidArgumentException('invalid length for $activation_code when calling CustomerSoftwareEntitlement., must be smaller than or equal to 50.');
        }

        $this->container['activation_code'] = $activation_code;

        return $this;
    }

    /**
     * Gets activation_dts
     *
     * @return string
     */
    public function getActivationDts()
    {
        return $this->container['activation_dts'];
    }

    /**
     * Sets activation_dts
     *
     * @param string $activation_dts Date/time when the activation code was created
     *
     * @return $this
     */
    public function setActivationDts($activation_dts)
    {
        $this->container['activation_dts'] = $activation_dts;

        return $this;
    }

    /**
     * Gets customer_software_entitlement_oid
     *
     * @return int
     */
    public function getCustomerSoftwareEntitlementOid()
    {
        return $this->container['customer_software_entitlement_oid'];
    }

    /**
     * Sets customer_software_entitlement_oid
     *
     * @param int $customer_software_entitlement_oid Customer profile software entitlement object identifier
     *
     * @return $this
     */
    public function setCustomerSoftwareEntitlementOid($customer_software_entitlement_oid)
    {
        $this->container['customer_software_entitlement_oid'] = $customer_software_entitlement_oid;

        return $this;
    }

    /**
     * Gets expiration_dts
     *
     * @return string
     */
    public function getExpirationDts()
    {
        return $this->container['expiration_dts'];
    }

    /**
     * Sets expiration_dts
     *
     * @param string $expiration_dts Date/time when the activation code will expire
     *
     * @return $this
     */
    public function setExpirationDts($expiration_dts)
    {
        $this->container['expiration_dts'] = $expiration_dts;

        return $this;
    }

    /**
     * Gets purchased_via_item_description
     *
     * @return string
     */
    public function getPurchasedViaItemDescription()
    {
        return $this->container['purchased_via_item_description'];
    }

    /**
     * Sets purchased_via_item_description
     *
     * @param string $purchased_via_item_description Item description used to purchase this software.
     *
     * @return $this
     */
    public function setPurchasedViaItemDescription($purchased_via_item_description)
    {
        if (!is_null($purchased_via_item_description) && (mb_strlen($purchased_via_item_description) > 512)) {
            throw new \InvalidArgumentException('invalid length for $purchased_via_item_description when calling CustomerSoftwareEntitlement., must be smaller than or equal to 512.');
        }

        $this->container['purchased_via_item_description'] = $purchased_via_item_description;

        return $this;
    }

    /**
     * Gets purchased_via_item_id
     *
     * @return string
     */
    public function getPurchasedViaItemId()
    {
        return $this->container['purchased_via_item_id'];
    }

    /**
     * Sets purchased_via_item_id
     *
     * @param string $purchased_via_item_id Item ID used to purchase this software.
     *
     * @return $this
     */
    public function setPurchasedViaItemId($purchased_via_item_id)
    {
        if (!is_null($purchased_via_item_id) && (mb_strlen($purchased_via_item_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $purchased_via_item_id when calling CustomerSoftwareEntitlement., must be smaller than or equal to 20.');
        }

        $this->container['purchased_via_item_id'] = $purchased_via_item_id;

        return $this;
    }

    /**
     * Gets purchased_via_order_id
     *
     * @return string
     */
    public function getPurchasedViaOrderId()
    {
        return $this->container['purchased_via_order_id'];
    }

    /**
     * Sets purchased_via_order_id
     *
     * @param string $purchased_via_order_id Order ID used to purchase this software.
     *
     * @return $this
     */
    public function setPurchasedViaOrderId($purchased_via_order_id)
    {
        if (!is_null($purchased_via_order_id) && (mb_strlen($purchased_via_order_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $purchased_via_order_id when calling CustomerSoftwareEntitlement., must be smaller than or equal to 30.');
        }

        $this->container['purchased_via_order_id'] = $purchased_via_order_id;

        return $this;
    }

    /**
     * Gets software_sku
     *
     * @return string
     */
    public function getSoftwareSku()
    {
        return $this->container['software_sku'];
    }

    /**
     * Sets software_sku
     *
     * @param string $software_sku SKU of the software
     *
     * @return $this
     */
    public function setSoftwareSku($software_sku)
    {
        if (!is_null($software_sku) && (mb_strlen($software_sku) > 30)) {
            throw new \InvalidArgumentException('invalid length for $software_sku when calling CustomerSoftwareEntitlement., must be smaller than or equal to 30.');
        }

        $this->container['software_sku'] = $software_sku;

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

