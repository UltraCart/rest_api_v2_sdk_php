<?php
/**
 * ItemContentMultimedia
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
 * ItemContentMultimedia Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemContentMultimedia implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemContentMultimedia';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cloud_url' => 'string',
        'cloud_url_expiration' => 'string',
        'code' => 'string',
        'description' => 'string',
        'exclude_from_gallery' => 'bool',
        'file_name' => 'string',
        'height' => 'int',
        'merchant_item_multimedia_oid' => 'int',
        'orphan' => 'bool',
        'placeholder' => 'bool',
        'temp_multimedia_oid' => 'int',
        'thumbnails' => '\ultracart\v2\models\ItemContentMultimediaThumbnail[]',
        'type' => 'string',
        'url' => 'string',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cloud_url' => null,
        'cloud_url_expiration' => 'dateTime',
        'code' => null,
        'description' => null,
        'exclude_from_gallery' => null,
        'file_name' => null,
        'height' => 'int32',
        'merchant_item_multimedia_oid' => 'int32',
        'orphan' => null,
        'placeholder' => null,
        'temp_multimedia_oid' => 'int32',
        'thumbnails' => null,
        'type' => null,
        'url' => null,
        'width' => 'int32'
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
        'cloud_url' => 'cloud_url',
        'cloud_url_expiration' => 'cloud_url_expiration',
        'code' => 'code',
        'description' => 'description',
        'exclude_from_gallery' => 'exclude_from_gallery',
        'file_name' => 'file_name',
        'height' => 'height',
        'merchant_item_multimedia_oid' => 'merchant_item_multimedia_oid',
        'orphan' => 'orphan',
        'placeholder' => 'placeholder',
        'temp_multimedia_oid' => 'temp_multimedia_oid',
        'thumbnails' => 'thumbnails',
        'type' => 'type',
        'url' => 'url',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cloud_url' => 'setCloudUrl',
        'cloud_url_expiration' => 'setCloudUrlExpiration',
        'code' => 'setCode',
        'description' => 'setDescription',
        'exclude_from_gallery' => 'setExcludeFromGallery',
        'file_name' => 'setFileName',
        'height' => 'setHeight',
        'merchant_item_multimedia_oid' => 'setMerchantItemMultimediaOid',
        'orphan' => 'setOrphan',
        'placeholder' => 'setPlaceholder',
        'temp_multimedia_oid' => 'setTempMultimediaOid',
        'thumbnails' => 'setThumbnails',
        'type' => 'setType',
        'url' => 'setUrl',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cloud_url' => 'getCloudUrl',
        'cloud_url_expiration' => 'getCloudUrlExpiration',
        'code' => 'getCode',
        'description' => 'getDescription',
        'exclude_from_gallery' => 'getExcludeFromGallery',
        'file_name' => 'getFileName',
        'height' => 'getHeight',
        'merchant_item_multimedia_oid' => 'getMerchantItemMultimediaOid',
        'orphan' => 'getOrphan',
        'placeholder' => 'getPlaceholder',
        'temp_multimedia_oid' => 'getTempMultimediaOid',
        'thumbnails' => 'getThumbnails',
        'type' => 'getType',
        'url' => 'getUrl',
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
        $this->container['cloud_url'] = isset($data['cloud_url']) ? $data['cloud_url'] : null;
        $this->container['cloud_url_expiration'] = isset($data['cloud_url_expiration']) ? $data['cloud_url_expiration'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['exclude_from_gallery'] = isset($data['exclude_from_gallery']) ? $data['exclude_from_gallery'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['merchant_item_multimedia_oid'] = isset($data['merchant_item_multimedia_oid']) ? $data['merchant_item_multimedia_oid'] : null;
        $this->container['orphan'] = isset($data['orphan']) ? $data['orphan'] : null;
        $this->container['placeholder'] = isset($data['placeholder']) ? $data['placeholder'] : null;
        $this->container['temp_multimedia_oid'] = isset($data['temp_multimedia_oid']) ? $data['temp_multimedia_oid'] : null;
        $this->container['thumbnails'] = isset($data['thumbnails']) ? $data['thumbnails'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 20)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 50000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 50000.";
        }

        if (!is_null($this->container['file_name']) && (mb_strlen($this->container['file_name']) > 75)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be smaller than or equal to 75.";
        }

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
     * Gets cloud_url
     *
     * @return string
     */
    public function getCloudUrl()
    {
        return $this->container['cloud_url'];
    }

    /**
     * Sets cloud_url
     *
     * @param string $cloud_url URL where the image can be downloaded from the cloud
     *
     * @return $this
     */
    public function setCloudUrl($cloud_url)
    {
        $this->container['cloud_url'] = $cloud_url;

        return $this;
    }

    /**
     * Gets cloud_url_expiration
     *
     * @return string
     */
    public function getCloudUrlExpiration()
    {
        return $this->container['cloud_url_expiration'];
    }

    /**
     * Sets cloud_url_expiration
     *
     * @param string $cloud_url_expiration Expiration date of the cloud URL
     *
     * @return $this
     */
    public function setCloudUrlExpiration($cloud_url_expiration)
    {
        $this->container['cloud_url_expiration'] = $cloud_url_expiration;

        return $this;
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
     * @param string $code Code assigned to the file
     *
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 20)) {
            throw new \InvalidArgumentException('invalid length for $code when calling ItemContentMultimedia., must be smaller than or equal to 20.');
        }

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
        if (!is_null($description) && (mb_strlen($description) > 50000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ItemContentMultimedia., must be smaller than or equal to 50000.');
        }

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
     * @param bool $exclude_from_gallery True to exclude from multimedia gallery
     *
     * @return $this
     */
    public function setExcludeFromGallery($exclude_from_gallery)
    {
        $this->container['exclude_from_gallery'] = $exclude_from_gallery;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name File name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        if (!is_null($file_name) && (mb_strlen($file_name) > 75)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling ItemContentMultimedia., must be smaller than or equal to 75.');
        }

        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Height of the image
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets merchant_item_multimedia_oid
     *
     * @return int
     */
    public function getMerchantItemMultimediaOid()
    {
        return $this->container['merchant_item_multimedia_oid'];
    }

    /**
     * Sets merchant_item_multimedia_oid
     *
     * @param int $merchant_item_multimedia_oid Item multimedia object identifier
     *
     * @return $this
     */
    public function setMerchantItemMultimediaOid($merchant_item_multimedia_oid)
    {
        $this->container['merchant_item_multimedia_oid'] = $merchant_item_multimedia_oid;

        return $this;
    }

    /**
     * Gets orphan
     *
     * @return bool
     */
    public function getOrphan()
    {
        return $this->container['orphan'];
    }

    /**
     * Sets orphan
     *
     * @param bool $orphan True if the multimedia is an orphan of the active StoreFront themes
     *
     * @return $this
     */
    public function setOrphan($orphan)
    {
        $this->container['orphan'] = $orphan;

        return $this;
    }

    /**
     * Gets placeholder
     *
     * @return bool
     */
    public function getPlaceholder()
    {
        return $this->container['placeholder'];
    }

    /**
     * Sets placeholder
     *
     * @param bool $placeholder True if the object is a place holder that can be populated
     *
     * @return $this
     */
    public function setPlaceholder($placeholder)
    {
        $this->container['placeholder'] = $placeholder;

        return $this;
    }

    /**
     * Gets temp_multimedia_oid
     *
     * @return int
     */
    public function getTempMultimediaOid()
    {
        return $this->container['temp_multimedia_oid'];
    }

    /**
     * Sets temp_multimedia_oid
     *
     * @param int $temp_multimedia_oid Temporary multimedia object identifier assigned if uploading new multimedia
     *
     * @return $this
     */
    public function setTempMultimediaOid($temp_multimedia_oid)
    {
        $this->container['temp_multimedia_oid'] = $temp_multimedia_oid;

        return $this;
    }

    /**
     * Gets thumbnails
     *
     * @return \ultracart\v2\models\ItemContentMultimediaThumbnail[]
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     *
     * @param \ultracart\v2\models\ItemContentMultimediaThumbnail[] $thumbnails Thumbnails of this image
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
     * @param string $type Type of file
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
     * @param string $url URL to download file (on new multimedia record this can be a URL for UltraCart to fetch)
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Width of the image
     *
     * @return $this
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


