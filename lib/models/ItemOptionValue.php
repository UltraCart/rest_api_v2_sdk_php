<?php
/**
 * ItemOptionValue
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
 * ItemOptionValue Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemOptionValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemOptionValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_dimension_application' => 'string',
        'additional_items' => '\ultracart\v2\models\ItemOptionValueAdditionalItem[]',
        'cost_change' => 'float',
        'default_value' => 'bool',
        'digital_items' => '\ultracart\v2\models\ItemOptionValueDigitalItem[]',
        'height' => '\ultracart\v2\models\Distance',
        'length' => '\ultracart\v2\models\Distance',
        'merchant_item_multimedia_oid' => 'int',
        'option_value_oid' => 'int',
        'percent_cost_change' => 'float',
        'translated_text_instance_oid' => 'int',
        'value' => 'string',
        'weight_change' => '\ultracart\v2\models\Weight',
        'weight_change_percent' => 'float',
        'width' => '\ultracart\v2\models\Distance'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'additional_dimension_application' => null,
        'additional_items' => null,
        'cost_change' => null,
        'default_value' => null,
        'digital_items' => null,
        'height' => null,
        'length' => null,
        'merchant_item_multimedia_oid' => 'int32',
        'option_value_oid' => 'int32',
        'percent_cost_change' => null,
        'translated_text_instance_oid' => 'int32',
        'value' => null,
        'weight_change' => null,
        'weight_change_percent' => null,
        'width' => null
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
        'additional_dimension_application' => 'additional_dimension_application',
        'additional_items' => 'additional_items',
        'cost_change' => 'cost_change',
        'default_value' => 'default_value',
        'digital_items' => 'digital_items',
        'height' => 'height',
        'length' => 'length',
        'merchant_item_multimedia_oid' => 'merchant_item_multimedia_oid',
        'option_value_oid' => 'option_value_oid',
        'percent_cost_change' => 'percent_cost_change',
        'translated_text_instance_oid' => 'translated_text_instance_oid',
        'value' => 'value',
        'weight_change' => 'weight_change',
        'weight_change_percent' => 'weight_change_percent',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_dimension_application' => 'setAdditionalDimensionApplication',
        'additional_items' => 'setAdditionalItems',
        'cost_change' => 'setCostChange',
        'default_value' => 'setDefaultValue',
        'digital_items' => 'setDigitalItems',
        'height' => 'setHeight',
        'length' => 'setLength',
        'merchant_item_multimedia_oid' => 'setMerchantItemMultimediaOid',
        'option_value_oid' => 'setOptionValueOid',
        'percent_cost_change' => 'setPercentCostChange',
        'translated_text_instance_oid' => 'setTranslatedTextInstanceOid',
        'value' => 'setValue',
        'weight_change' => 'setWeightChange',
        'weight_change_percent' => 'setWeightChangePercent',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_dimension_application' => 'getAdditionalDimensionApplication',
        'additional_items' => 'getAdditionalItems',
        'cost_change' => 'getCostChange',
        'default_value' => 'getDefaultValue',
        'digital_items' => 'getDigitalItems',
        'height' => 'getHeight',
        'length' => 'getLength',
        'merchant_item_multimedia_oid' => 'getMerchantItemMultimediaOid',
        'option_value_oid' => 'getOptionValueOid',
        'percent_cost_change' => 'getPercentCostChange',
        'translated_text_instance_oid' => 'getTranslatedTextInstanceOid',
        'value' => 'getValue',
        'weight_change' => 'getWeightChange',
        'weight_change_percent' => 'getWeightChangePercent',
        'width' => 'getWidth'
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

    public const ADDITIONAL_DIMENSION_APPLICATION_NONE = 'none';
    public const ADDITIONAL_DIMENSION_APPLICATION_SET_ITEM_TO = 'set item to';
    public const ADDITIONAL_DIMENSION_APPLICATION_ADD_ITEM = 'add item';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdditionalDimensionApplicationAllowableValues()
    {
        return [
            self::ADDITIONAL_DIMENSION_APPLICATION_NONE,
            self::ADDITIONAL_DIMENSION_APPLICATION_SET_ITEM_TO,
            self::ADDITIONAL_DIMENSION_APPLICATION_ADD_ITEM,
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
        $this->container['additional_dimension_application'] = $data['additional_dimension_application'] ?? null;
        $this->container['additional_items'] = $data['additional_items'] ?? null;
        $this->container['cost_change'] = $data['cost_change'] ?? null;
        $this->container['default_value'] = $data['default_value'] ?? null;
        $this->container['digital_items'] = $data['digital_items'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['merchant_item_multimedia_oid'] = $data['merchant_item_multimedia_oid'] ?? null;
        $this->container['option_value_oid'] = $data['option_value_oid'] ?? null;
        $this->container['percent_cost_change'] = $data['percent_cost_change'] ?? null;
        $this->container['translated_text_instance_oid'] = $data['translated_text_instance_oid'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['weight_change'] = $data['weight_change'] ?? null;
        $this->container['weight_change_percent'] = $data['weight_change_percent'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAdditionalDimensionApplicationAllowableValues();
        if (!is_null($this->container['additional_dimension_application']) && !in_array($this->container['additional_dimension_application'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'additional_dimension_application', must be one of '%s'",
                $this->container['additional_dimension_application'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 1024)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 1024.";
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
     * Gets additional_dimension_application
     *
     * @return string|null
     */
    public function getAdditionalDimensionApplication()
    {
        return $this->container['additional_dimension_application'];
    }

    /**
     * Sets additional_dimension_application
     *
     * @param string|null $additional_dimension_application Additional dimensions application
     *
     * @return self
     */
    public function setAdditionalDimensionApplication($additional_dimension_application)
    {
        $allowedValues = $this->getAdditionalDimensionApplicationAllowableValues();
        if (!is_null($additional_dimension_application) && !in_array($additional_dimension_application, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'additional_dimension_application', must be one of '%s'",
                    $additional_dimension_application,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['additional_dimension_application'] = $additional_dimension_application;

        return $this;
    }

    /**
     * Gets additional_items
     *
     * @return \ultracart\v2\models\ItemOptionValueAdditionalItem[]|null
     */
    public function getAdditionalItems()
    {
        return $this->container['additional_items'];
    }

    /**
     * Sets additional_items
     *
     * @param \ultracart\v2\models\ItemOptionValueAdditionalItem[]|null $additional_items Additional items to add to the order if this value is selected
     *
     * @return self
     */
    public function setAdditionalItems($additional_items)
    {
        $this->container['additional_items'] = $additional_items;

        return $this;
    }

    /**
     * Gets cost_change
     *
     * @return float|null
     */
    public function getCostChange()
    {
        return $this->container['cost_change'];
    }

    /**
     * Sets cost_change
     *
     * @param float|null $cost_change Cost change
     *
     * @return self
     */
    public function setCostChange($cost_change)
    {
        $this->container['cost_change'] = $cost_change;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return bool|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param bool|null $default_value True if default value
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets digital_items
     *
     * @return \ultracart\v2\models\ItemOptionValueDigitalItem[]|null
     */
    public function getDigitalItems()
    {
        return $this->container['digital_items'];
    }

    /**
     * Sets digital_items
     *
     * @param \ultracart\v2\models\ItemOptionValueDigitalItem[]|null $digital_items Digital items to allow the customer to download if this option value is selected
     *
     * @return self
     */
    public function setDigitalItems($digital_items)
    {
        $this->container['digital_items'] = $digital_items;

        return $this;
    }

    /**
     * Gets height
     *
     * @return \ultracart\v2\models\Distance|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param \ultracart\v2\models\Distance|null $height height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets length
     *
     * @return \ultracart\v2\models\Distance|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param \ultracart\v2\models\Distance|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

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
     * @param int|null $merchant_item_multimedia_oid Multimedia object identifier associated with this option value
     *
     * @return self
     */
    public function setMerchantItemMultimediaOid($merchant_item_multimedia_oid)
    {
        $this->container['merchant_item_multimedia_oid'] = $merchant_item_multimedia_oid;

        return $this;
    }

    /**
     * Gets option_value_oid
     *
     * @return int|null
     */
    public function getOptionValueOid()
    {
        return $this->container['option_value_oid'];
    }

    /**
     * Sets option_value_oid
     *
     * @param int|null $option_value_oid Option value object identifier
     *
     * @return self
     */
    public function setOptionValueOid($option_value_oid)
    {
        $this->container['option_value_oid'] = $option_value_oid;

        return $this;
    }

    /**
     * Gets percent_cost_change
     *
     * @return float|null
     */
    public function getPercentCostChange()
    {
        return $this->container['percent_cost_change'];
    }

    /**
     * Sets percent_cost_change
     *
     * @param float|null $percent_cost_change Percentage cost change
     *
     * @return self
     */
    public function setPercentCostChange($percent_cost_change)
    {
        $this->container['percent_cost_change'] = $percent_cost_change;

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
        if (!is_null($value) && (mb_strlen($value) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $value when calling ItemOptionValue., must be smaller than or equal to 1024.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets weight_change
     *
     * @return \ultracart\v2\models\Weight|null
     */
    public function getWeightChange()
    {
        return $this->container['weight_change'];
    }

    /**
     * Sets weight_change
     *
     * @param \ultracart\v2\models\Weight|null $weight_change weight_change
     *
     * @return self
     */
    public function setWeightChange($weight_change)
    {
        $this->container['weight_change'] = $weight_change;

        return $this;
    }

    /**
     * Gets weight_change_percent
     *
     * @return float|null
     */
    public function getWeightChangePercent()
    {
        return $this->container['weight_change_percent'];
    }

    /**
     * Sets weight_change_percent
     *
     * @param float|null $weight_change_percent Percentage weight change
     *
     * @return self
     */
    public function setWeightChangePercent($weight_change_percent)
    {
        $this->container['weight_change_percent'] = $weight_change_percent;

        return $this;
    }

    /**
     * Gets width
     *
     * @return \ultracart\v2\models\Distance|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param \ultracart\v2\models\Distance|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


