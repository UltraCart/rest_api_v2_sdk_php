<?php
/**
 * ItemVariationOption
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
 * ItemVariationOption Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemVariationOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemVariationOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_option' => 'bool',
        'merchant_item_multimedia_oid' => 'int',
        'translated_text_instance_oid' => 'int',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_option' => null,
        'merchant_item_multimedia_oid' => 'int32',
        'translated_text_instance_oid' => 'int32',
        'value' => null
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
        'default_option' => 'default_option',
        'merchant_item_multimedia_oid' => 'merchant_item_multimedia_oid',
        'translated_text_instance_oid' => 'translated_text_instance_oid',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_option' => 'setDefaultOption',
        'merchant_item_multimedia_oid' => 'setMerchantItemMultimediaOid',
        'translated_text_instance_oid' => 'setTranslatedTextInstanceOid',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_option' => 'getDefaultOption',
        'merchant_item_multimedia_oid' => 'getMerchantItemMultimediaOid',
        'translated_text_instance_oid' => 'getTranslatedTextInstanceOid',
        'value' => 'getValue'
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
        $this->container['default_option'] = $data['default_option'] ?? null;
        $this->container['merchant_item_multimedia_oid'] = $data['merchant_item_multimedia_oid'] ?? null;
        $this->container['translated_text_instance_oid'] = $data['translated_text_instance_oid'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 50)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 50.";
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
     * Gets default_option
     *
     * @return bool|null
     */
    public function getDefaultOption()
    {
        return $this->container['default_option'];
    }

    /**
     * Sets default_option
     *
     * @param bool|null $default_option True if default option
     *
     * @return self
     */
    public function setDefaultOption($default_option)
    {
        $this->container['default_option'] = $default_option;

        return $this;
    }

    /**
     * Gets merchant_item_multimedia_oid
     *
     * @return int|null
     */
    public function getMerchantItemMultimediaOid()
    {
        return $this->container['merchant_item_multimedia_oid'];
    }

    /**
     * Sets merchant_item_multimedia_oid
     *
     * @param int|null $merchant_item_multimedia_oid Multimedia object identifier
     *
     * @return self
     */
    public function setMerchantItemMultimediaOid($merchant_item_multimedia_oid)
    {
        $this->container['merchant_item_multimedia_oid'] = $merchant_item_multimedia_oid;

        return $this;
    }

    /**
     * Gets translated_text_instance_oid
     *
     * @return int|null
     */
    public function getTranslatedTextInstanceOid()
    {
        return $this->container['translated_text_instance_oid'];
    }

    /**
     * Sets translated_text_instance_oid
     *
     * @param int|null $translated_text_instance_oid Translated text instance id
     *
     * @return self
     */
    public function setTranslatedTextInstanceOid($translated_text_instance_oid)
    {
        $this->container['translated_text_instance_oid'] = $translated_text_instance_oid;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (!is_null($value) && (mb_strlen($value) > 50)) {
            throw new \InvalidArgumentException('invalid length for $value when calling ItemVariationOption., must be smaller than or equal to 50.');
        }

        $this->container['value'] = $value;

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


