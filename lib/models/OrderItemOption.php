<?php
/**
 * OrderItemOption
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
 * OrderItemOption Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderItemOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderItemOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_dimension_application' => 'string',
        'cost_change' => '\ultracart\v2\models\Currency',
        'file_attachment' => '\ultracart\v2\models\OrderItemOptionFileAttachment',
        'height' => '\ultracart\v2\models\Distance',
        'hidden' => 'bool',
        'label' => 'string',
        'length' => '\ultracart\v2\models\Distance',
        'one_time_fee' => 'bool',
        'value' => 'string',
        'weight_change' => '\ultracart\v2\models\Weight',
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
        'cost_change' => null,
        'file_attachment' => null,
        'height' => null,
        'hidden' => null,
        'label' => null,
        'length' => null,
        'one_time_fee' => null,
        'value' => null,
        'weight_change' => null,
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
        'cost_change' => 'cost_change',
        'file_attachment' => 'file_attachment',
        'height' => 'height',
        'hidden' => 'hidden',
        'label' => 'label',
        'length' => 'length',
        'one_time_fee' => 'one_time_fee',
        'value' => 'value',
        'weight_change' => 'weight_change',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_dimension_application' => 'setAdditionalDimensionApplication',
        'cost_change' => 'setCostChange',
        'file_attachment' => 'setFileAttachment',
        'height' => 'setHeight',
        'hidden' => 'setHidden',
        'label' => 'setLabel',
        'length' => 'setLength',
        'one_time_fee' => 'setOneTimeFee',
        'value' => 'setValue',
        'weight_change' => 'setWeightChange',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_dimension_application' => 'getAdditionalDimensionApplication',
        'cost_change' => 'getCostChange',
        'file_attachment' => 'getFileAttachment',
        'height' => 'getHeight',
        'hidden' => 'getHidden',
        'label' => 'getLabel',
        'length' => 'getLength',
        'one_time_fee' => 'getOneTimeFee',
        'value' => 'getValue',
        'weight_change' => 'getWeightChange',
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
        $this->container['cost_change'] = $data['cost_change'] ?? null;
        $this->container['file_attachment'] = $data['file_attachment'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['hidden'] = $data['hidden'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['one_time_fee'] = $data['one_time_fee'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['weight_change'] = $data['weight_change'] ?? null;
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

        if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 50)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 50.";
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
     * @param string|null $additional_dimension_application How the additional dimensions are applied to the item.
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
     * Gets cost_change
     *
     * @return \ultracart\v2\models\Currency|null
     */
    public function getCostChange()
    {
        return $this->container['cost_change'];
    }

    /**
     * Sets cost_change
     *
     * @param \ultracart\v2\models\Currency|null $cost_change cost_change
     *
     * @return self
     */
    public function setCostChange($cost_change)
    {
        $this->container['cost_change'] = $cost_change;

        return $this;
    }

    /**
     * Gets file_attachment
     *
     * @return \ultracart\v2\models\OrderItemOptionFileAttachment|null
     */
    public function getFileAttachment()
    {
        return $this->container['file_attachment'];
    }

    /**
     * Sets file_attachment
     *
     * @param \ultracart\v2\models\OrderItemOptionFileAttachment|null $file_attachment file_attachment
     *
     * @return self
     */
    public function setFileAttachment($file_attachment)
    {
        $this->container['file_attachment'] = $file_attachment;

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
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden True if this option is hidden from display on the order
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (!is_null($label) && (mb_strlen($label) > 50)) {
            throw new \InvalidArgumentException('invalid length for $label when calling OrderItemOption., must be smaller than or equal to 50.');
        }

        $this->container['label'] = $label;

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
     * Gets one_time_fee
     *
     * @return bool|null
     */
    public function getOneTimeFee()
    {
        return $this->container['one_time_fee'];
    }

    /**
     * Sets one_time_fee
     *
     * @param bool|null $one_time_fee True if the cost associated with this option is a one time fee or multiplied by the quantity of the item
     *
     * @return self
     */
    public function setOneTimeFee($one_time_fee)
    {
        $this->container['one_time_fee'] = $one_time_fee;

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
            throw new \InvalidArgumentException('invalid length for $value when calling OrderItemOption., must be smaller than or equal to 1024.');
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


