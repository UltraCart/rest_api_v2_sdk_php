<?php
/**
 * TransactionEmailOption
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
 * TransactionEmailOption Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionEmailOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionEmailOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'merchant_email_delivery_option_oid' => 'int',
        'merchant_id' => 'string',
        'name' => 'string',
        'selected' => 'bool',
        'store_front_oid' => 'int',
        'template_display' => 'string',
        'template_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'merchant_email_delivery_option_oid' => 'int32',
        'merchant_id' => null,
        'name' => null,
        'selected' => null,
        'store_front_oid' => 'int32',
        'template_display' => null,
        'template_type' => null
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
        'description' => 'description',
        'merchant_email_delivery_option_oid' => 'merchantEmailDeliveryOptionOid',
        'merchant_id' => 'merchantId',
        'name' => 'name',
        'selected' => 'selected',
        'store_front_oid' => 'storeFrontOid',
        'template_display' => 'templateDisplay',
        'template_type' => 'templateType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'merchant_email_delivery_option_oid' => 'setMerchantEmailDeliveryOptionOid',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'selected' => 'setSelected',
        'store_front_oid' => 'setStoreFrontOid',
        'template_display' => 'setTemplateDisplay',
        'template_type' => 'setTemplateType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'merchant_email_delivery_option_oid' => 'getMerchantEmailDeliveryOptionOid',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'selected' => 'getSelected',
        'store_front_oid' => 'getStoreFrontOid',
        'template_display' => 'getTemplateDisplay',
        'template_type' => 'getTemplateType'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['merchant_email_delivery_option_oid'] = $data['merchant_email_delivery_option_oid'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['selected'] = $data['selected'] ?? null;
        $this->container['store_front_oid'] = $data['store_front_oid'] ?? null;
        $this->container['template_display'] = $data['template_display'] ?? null;
        $this->container['template_type'] = $data['template_type'] ?? null;
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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets merchant_email_delivery_option_oid
     *
     * @return int|null
     */
    public function getMerchantEmailDeliveryOptionOid()
    {
        return $this->container['merchant_email_delivery_option_oid'];
    }

    /**
     * Sets merchant_email_delivery_option_oid
     *
     * @param int|null $merchant_email_delivery_option_oid merchant_email_delivery_option_oid
     *
     * @return self
     */
    public function setMerchantEmailDeliveryOptionOid($merchant_email_delivery_option_oid)
    {
        $this->container['merchant_email_delivery_option_oid'] = $merchant_email_delivery_option_oid;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id merchant_id
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets selected
     *
     * @return bool|null
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     *
     * @param bool|null $selected selected
     *
     * @return self
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * Gets store_front_oid
     *
     * @return int|null
     */
    public function getStoreFrontOid()
    {
        return $this->container['store_front_oid'];
    }

    /**
     * Sets store_front_oid
     *
     * @param int|null $store_front_oid store_front_oid
     *
     * @return self
     */
    public function setStoreFrontOid($store_front_oid)
    {
        $this->container['store_front_oid'] = $store_front_oid;

        return $this;
    }

    /**
     * Gets template_display
     *
     * @return string|null
     */
    public function getTemplateDisplay()
    {
        return $this->container['template_display'];
    }

    /**
     * Sets template_display
     *
     * @param string|null $template_display template_display
     *
     * @return self
     */
    public function setTemplateDisplay($template_display)
    {
        $this->container['template_display'] = $template_display;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return string|null
     */
    public function getTemplateType()
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param string|null $template_type template_type
     *
     * @return self
     */
    public function setTemplateType($template_type)
    {
        $this->container['template_type'] = $template_type;

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


