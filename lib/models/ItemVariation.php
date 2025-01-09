<?php
/**
 * ItemVariation
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
 * ItemVariation Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemVariation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemVariation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_text' => 'string',
        'default_text_translated_text_instance_oid' => 'int',
        'name' => 'string',
        'name_translated_text_instance_oid' => 'int',
        'options' => '\ultracart\v2\models\ItemVariationOption[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_text' => null,
        'default_text_translated_text_instance_oid' => 'int32',
        'name' => null,
        'name_translated_text_instance_oid' => 'int32',
        'options' => null
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
        'default_text' => 'default_text',
        'default_text_translated_text_instance_oid' => 'default_text_translated_text_instance_oid',
        'name' => 'name',
        'name_translated_text_instance_oid' => 'name_translated_text_instance_oid',
        'options' => 'options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_text' => 'setDefaultText',
        'default_text_translated_text_instance_oid' => 'setDefaultTextTranslatedTextInstanceOid',
        'name' => 'setName',
        'name_translated_text_instance_oid' => 'setNameTranslatedTextInstanceOid',
        'options' => 'setOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_text' => 'getDefaultText',
        'default_text_translated_text_instance_oid' => 'getDefaultTextTranslatedTextInstanceOid',
        'name' => 'getName',
        'name_translated_text_instance_oid' => 'getNameTranslatedTextInstanceOid',
        'options' => 'getOptions'
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
        $this->container['default_text'] = $data['default_text'] ?? null;
        $this->container['default_text_translated_text_instance_oid'] = $data['default_text_translated_text_instance_oid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['name_translated_text_instance_oid'] = $data['name_translated_text_instance_oid'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['default_text']) && (mb_strlen($this->container['default_text']) > 50)) {
            $invalidProperties[] = "invalid value for 'default_text', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
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
     * Gets default_text
     *
     * @return string|null
     */
    public function getDefaultText()
    {
        return $this->container['default_text'];
    }

    /**
     * Sets default_text
     *
     * @param string|null $default_text Default text
     *
     * @return self
     */
    public function setDefaultText($default_text)
    {
        if (!is_null($default_text) && (mb_strlen($default_text) > 50)) {
            throw new \InvalidArgumentException('invalid length for $default_text when calling ItemVariation., must be smaller than or equal to 50.');
        }

        $this->container['default_text'] = $default_text;

        return $this;
    }

    /**
     * Gets default_text_translated_text_instance_oid
     *
     * @return int|null
     */
    public function getDefaultTextTranslatedTextInstanceOid()
    {
        return $this->container['default_text_translated_text_instance_oid'];
    }

    /**
     * Sets default_text_translated_text_instance_oid
     *
     * @param int|null $default_text_translated_text_instance_oid Default text translated text instance id
     *
     * @return self
     */
    public function setDefaultTextTranslatedTextInstanceOid($default_text_translated_text_instance_oid)
    {
        $this->container['default_text_translated_text_instance_oid'] = $default_text_translated_text_instance_oid;

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
     * @param string|null $name Name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ItemVariation., must be smaller than or equal to 50.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translated_text_instance_oid
     *
     * @return int|null
     */
    public function getNameTranslatedTextInstanceOid()
    {
        return $this->container['name_translated_text_instance_oid'];
    }

    /**
     * Sets name_translated_text_instance_oid
     *
     * @param int|null $name_translated_text_instance_oid Name translated text instance id
     *
     * @return self
     */
    public function setNameTranslatedTextInstanceOid($name_translated_text_instance_oid)
    {
        $this->container['name_translated_text_instance_oid'] = $name_translated_text_instance_oid;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \ultracart\v2\models\ItemVariationOption[]|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \ultracart\v2\models\ItemVariationOption[]|null $options Options
     *
     * @return self
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


