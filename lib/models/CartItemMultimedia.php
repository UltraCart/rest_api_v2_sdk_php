<?php
/**
 * CartItemMultimedia
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
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

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * CartItemMultimedia Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartItemMultimedia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartItemMultimedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'description' => 'string',
        'exclude_from_gallery' => 'bool',
        'image_height' => 'int',
        'image_width' => 'int',
        'is_default' => 'bool',
        'thumbnails' => '\ultracartv2\models\CartItemMultimediaThumbnail[]',
        'type' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'description' => null,
        'exclude_from_gallery' => null,
        'image_height' => 'int32',
        'image_width' => 'int32',
        'is_default' => null,
        'thumbnails' => null,
        'type' => null,
        'url' => null
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
        'code' => 'code',
        'description' => 'description',
        'exclude_from_gallery' => 'exclude_from_gallery',
        'image_height' => 'image_height',
        'image_width' => 'image_width',
        'is_default' => 'is_default',
        'thumbnails' => 'thumbnails',
        'type' => 'type',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'description' => 'setDescription',
        'exclude_from_gallery' => 'setExcludeFromGallery',
        'image_height' => 'setImageHeight',
        'image_width' => 'setImageWidth',
        'is_default' => 'setIsDefault',
        'thumbnails' => 'setThumbnails',
        'type' => 'setType',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'description' => 'getDescription',
        'exclude_from_gallery' => 'getExcludeFromGallery',
        'image_height' => 'getImageHeight',
        'image_width' => 'getImageWidth',
        'is_default' => 'getIsDefault',
        'thumbnails' => 'getThumbnails',
        'type' => 'getType',
        'url' => 'getUrl'
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

    const TYPE_IMAGE = 'Image';
    const TYPE_PDF = 'PDF';
    const TYPE_TEXT = 'Text';
    const TYPE_UNKNOWN = 'Unknown';
    const TYPE_VIDEO = 'Video';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IMAGE,
            self::TYPE_PDF,
            self::TYPE_TEXT,
            self::TYPE_UNKNOWN,
            self::TYPE_VIDEO,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exclude_from_gallery'] = isset($data['exclude_from_gallery']) ? $data['exclude_from_gallery'] : null;
        $this->container['image_height'] = isset($data['image_height']) ? $data['image_height'] : null;
        $this->container['image_width'] = isset($data['image_width']) ? $data['image_width'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['thumbnails'] = isset($data['thumbnails']) ? $data['thumbnails'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Code assigned to the multimedia
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets exclude_from_gallery
     *
     * @return bool
     */
    public function getExcludeFromGallery()
    {
        return $this->container['exclude_from_gallery'];
    }

    /**
     * Sets exclude_from_gallery
     *
     * @param bool $exclude_from_gallery True if the image should be excluded from galleries
     *
     * @return $this
     */
    public function setExcludeFromGallery($exclude_from_gallery)
    {
        $this->container['exclude_from_gallery'] = $exclude_from_gallery;

        return $this;
    }

    /**
     * Gets image_height
     *
     * @return int
     */
    public function getImageHeight()
    {
        return $this->container['image_height'];
    }

    /**
     * Sets image_height
     *
     * @param int $image_height Image height
     *
     * @return $this
     */
    public function setImageHeight($image_height)
    {
        $this->container['image_height'] = $image_height;

        return $this;
    }

    /**
     * Gets image_width
     *
     * @return int
     */
    public function getImageWidth()
    {
        return $this->container['image_width'];
    }

    /**
     * Sets image_width
     *
     * @param int $image_width Image width
     *
     * @return $this
     */
    public function setImageWidth($image_width)
    {
        $this->container['image_width'] = $image_width;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool $is_default True if the multimedia is the default for this type
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets thumbnails
     *
     * @return \ultracartv2\models\CartItemMultimediaThumbnail[]
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     *
     * @param \ultracartv2\models\CartItemMultimediaThumbnail[] $thumbnails Thumbnails of the images
     *
     * @return $this
     */
    public function setThumbnails($thumbnails)
    {
        $this->container['thumbnails'] = $thumbnails;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of multimedia
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL to view multimedia at
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


