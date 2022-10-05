<?php
/**
 * FileManagerFile
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
 * FileManagerFile Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FileManagerFile implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FileManagerFile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'favorite' => 'bool',
        'hostname' => 'string',
        'i18n_violation' => 'bool',
        'icon' => 'string',
        'internal_version' => 'int',
        'last_modified' => 'string',
        'merge_conflict' => 'bool',
        'name' => 'string',
        'parent_storefront_fs_directory_oid' => 'int',
        'part_of_active_theme' => 'bool',
        'path' => 'string',
        'raw_size' => 'int',
        'selected' => 'bool',
        'size' => 'string',
        'storefront_fs_directory_oid' => 'int',
        'storefront_fs_file_oid' => 'int',
        'storefront_oid' => 'int',
        'thumbnail_16_url' => 'string',
        'thumbnail_32_url' => 'string',
        'thumbnail_64_url' => 'string',
        'type' => 'string',
        'valid_velocity' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'favorite' => null,
        'hostname' => null,
        'i18n_violation' => null,
        'icon' => null,
        'internal_version' => 'int32',
        'last_modified' => null,
        'merge_conflict' => null,
        'name' => null,
        'parent_storefront_fs_directory_oid' => 'int32',
        'part_of_active_theme' => null,
        'path' => null,
        'raw_size' => 'int32',
        'selected' => null,
        'size' => null,
        'storefront_fs_directory_oid' => 'int32',
        'storefront_fs_file_oid' => 'int32',
        'storefront_oid' => 'int32',
        'thumbnail_16_url' => null,
        'thumbnail_32_url' => null,
        'thumbnail_64_url' => null,
        'type' => null,
        'valid_velocity' => null
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
        'favorite' => 'favorite',
        'hostname' => 'hostname',
        'i18n_violation' => 'i18n_violation',
        'icon' => 'icon',
        'internal_version' => 'internal_version',
        'last_modified' => 'last_modified',
        'merge_conflict' => 'merge_conflict',
        'name' => 'name',
        'parent_storefront_fs_directory_oid' => 'parent_storefront_fs_directory_oid',
        'part_of_active_theme' => 'part_of_active_theme',
        'path' => 'path',
        'raw_size' => 'raw_size',
        'selected' => 'selected',
        'size' => 'size',
        'storefront_fs_directory_oid' => 'storefront_fs_directory_oid',
        'storefront_fs_file_oid' => 'storefront_fs_file_oid',
        'storefront_oid' => 'storefront_oid',
        'thumbnail_16_url' => 'thumbnail_16_url',
        'thumbnail_32_url' => 'thumbnail_32_url',
        'thumbnail_64_url' => 'thumbnail_64_url',
        'type' => 'type',
        'valid_velocity' => 'valid_velocity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'favorite' => 'setFavorite',
        'hostname' => 'setHostname',
        'i18n_violation' => 'setI18nViolation',
        'icon' => 'setIcon',
        'internal_version' => 'setInternalVersion',
        'last_modified' => 'setLastModified',
        'merge_conflict' => 'setMergeConflict',
        'name' => 'setName',
        'parent_storefront_fs_directory_oid' => 'setParentStorefrontFsDirectoryOid',
        'part_of_active_theme' => 'setPartOfActiveTheme',
        'path' => 'setPath',
        'raw_size' => 'setRawSize',
        'selected' => 'setSelected',
        'size' => 'setSize',
        'storefront_fs_directory_oid' => 'setStorefrontFsDirectoryOid',
        'storefront_fs_file_oid' => 'setStorefrontFsFileOid',
        'storefront_oid' => 'setStorefrontOid',
        'thumbnail_16_url' => 'setThumbnail16Url',
        'thumbnail_32_url' => 'setThumbnail32Url',
        'thumbnail_64_url' => 'setThumbnail64Url',
        'type' => 'setType',
        'valid_velocity' => 'setValidVelocity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'favorite' => 'getFavorite',
        'hostname' => 'getHostname',
        'i18n_violation' => 'getI18nViolation',
        'icon' => 'getIcon',
        'internal_version' => 'getInternalVersion',
        'last_modified' => 'getLastModified',
        'merge_conflict' => 'getMergeConflict',
        'name' => 'getName',
        'parent_storefront_fs_directory_oid' => 'getParentStorefrontFsDirectoryOid',
        'part_of_active_theme' => 'getPartOfActiveTheme',
        'path' => 'getPath',
        'raw_size' => 'getRawSize',
        'selected' => 'getSelected',
        'size' => 'getSize',
        'storefront_fs_directory_oid' => 'getStorefrontFsDirectoryOid',
        'storefront_fs_file_oid' => 'getStorefrontFsFileOid',
        'storefront_oid' => 'getStorefrontOid',
        'thumbnail_16_url' => 'getThumbnail16Url',
        'thumbnail_32_url' => 'getThumbnail32Url',
        'thumbnail_64_url' => 'getThumbnail64Url',
        'type' => 'getType',
        'valid_velocity' => 'getValidVelocity'
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
        $this->container['favorite'] = $data['favorite'] ?? null;
        $this->container['hostname'] = $data['hostname'] ?? null;
        $this->container['i18n_violation'] = $data['i18n_violation'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['internal_version'] = $data['internal_version'] ?? null;
        $this->container['last_modified'] = $data['last_modified'] ?? null;
        $this->container['merge_conflict'] = $data['merge_conflict'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parent_storefront_fs_directory_oid'] = $data['parent_storefront_fs_directory_oid'] ?? null;
        $this->container['part_of_active_theme'] = $data['part_of_active_theme'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['raw_size'] = $data['raw_size'] ?? null;
        $this->container['selected'] = $data['selected'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['storefront_fs_directory_oid'] = $data['storefront_fs_directory_oid'] ?? null;
        $this->container['storefront_fs_file_oid'] = $data['storefront_fs_file_oid'] ?? null;
        $this->container['storefront_oid'] = $data['storefront_oid'] ?? null;
        $this->container['thumbnail_16_url'] = $data['thumbnail_16_url'] ?? null;
        $this->container['thumbnail_32_url'] = $data['thumbnail_32_url'] ?? null;
        $this->container['thumbnail_64_url'] = $data['thumbnail_64_url'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['valid_velocity'] = $data['valid_velocity'] ?? null;
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
     * Gets favorite
     *
     * @return bool|null
     */
    public function getFavorite()
    {
        return $this->container['favorite'];
    }

    /**
     * Sets favorite
     *
     * @param bool|null $favorite favorite
     *
     * @return self
     */
    public function setFavorite($favorite)
    {
        $this->container['favorite'] = $favorite;

        return $this;
    }

    /**
     * Gets hostname
     *
     * @return string|null
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string|null $hostname hostname
     *
     * @return self
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets i18n_violation
     *
     * @return bool|null
     */
    public function getI18nViolation()
    {
        return $this->container['i18n_violation'];
    }

    /**
     * Sets i18n_violation
     *
     * @param bool|null $i18n_violation i18n_violation
     *
     * @return self
     */
    public function setI18nViolation($i18n_violation)
    {
        $this->container['i18n_violation'] = $i18n_violation;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets internal_version
     *
     * @return int|null
     */
    public function getInternalVersion()
    {
        return $this->container['internal_version'];
    }

    /**
     * Sets internal_version
     *
     * @param int|null $internal_version internal_version
     *
     * @return self
     */
    public function setInternalVersion($internal_version)
    {
        $this->container['internal_version'] = $internal_version;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string|null
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string|null $last_modified last_modified
     *
     * @return self
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets merge_conflict
     *
     * @return bool|null
     */
    public function getMergeConflict()
    {
        return $this->container['merge_conflict'];
    }

    /**
     * Sets merge_conflict
     *
     * @param bool|null $merge_conflict merge_conflict
     *
     * @return self
     */
    public function setMergeConflict($merge_conflict)
    {
        $this->container['merge_conflict'] = $merge_conflict;

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
     * Gets parent_storefront_fs_directory_oid
     *
     * @return int|null
     */
    public function getParentStorefrontFsDirectoryOid()
    {
        return $this->container['parent_storefront_fs_directory_oid'];
    }

    /**
     * Sets parent_storefront_fs_directory_oid
     *
     * @param int|null $parent_storefront_fs_directory_oid parent_storefront_fs_directory_oid
     *
     * @return self
     */
    public function setParentStorefrontFsDirectoryOid($parent_storefront_fs_directory_oid)
    {
        $this->container['parent_storefront_fs_directory_oid'] = $parent_storefront_fs_directory_oid;

        return $this;
    }

    /**
     * Gets part_of_active_theme
     *
     * @return bool|null
     */
    public function getPartOfActiveTheme()
    {
        return $this->container['part_of_active_theme'];
    }

    /**
     * Sets part_of_active_theme
     *
     * @param bool|null $part_of_active_theme part_of_active_theme
     *
     * @return self
     */
    public function setPartOfActiveTheme($part_of_active_theme)
    {
        $this->container['part_of_active_theme'] = $part_of_active_theme;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string|null
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string|null $path path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets raw_size
     *
     * @return int|null
     */
    public function getRawSize()
    {
        return $this->container['raw_size'];
    }

    /**
     * Sets raw_size
     *
     * @param int|null $raw_size raw_size
     *
     * @return self
     */
    public function setRawSize($raw_size)
    {
        $this->container['raw_size'] = $raw_size;

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
     * Gets size
     *
     * @return string|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets storefront_fs_directory_oid
     *
     * @return int|null
     */
    public function getStorefrontFsDirectoryOid()
    {
        return $this->container['storefront_fs_directory_oid'];
    }

    /**
     * Sets storefront_fs_directory_oid
     *
     * @param int|null $storefront_fs_directory_oid storefront_fs_directory_oid
     *
     * @return self
     */
    public function setStorefrontFsDirectoryOid($storefront_fs_directory_oid)
    {
        $this->container['storefront_fs_directory_oid'] = $storefront_fs_directory_oid;

        return $this;
    }

    /**
     * Gets storefront_fs_file_oid
     *
     * @return int|null
     */
    public function getStorefrontFsFileOid()
    {
        return $this->container['storefront_fs_file_oid'];
    }

    /**
     * Sets storefront_fs_file_oid
     *
     * @param int|null $storefront_fs_file_oid storefront_fs_file_oid
     *
     * @return self
     */
    public function setStorefrontFsFileOid($storefront_fs_file_oid)
    {
        $this->container['storefront_fs_file_oid'] = $storefront_fs_file_oid;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int|null
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int|null $storefront_oid storefront_oid
     *
     * @return self
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets thumbnail_16_url
     *
     * @return string|null
     */
    public function getThumbnail16Url()
    {
        return $this->container['thumbnail_16_url'];
    }

    /**
     * Sets thumbnail_16_url
     *
     * @param string|null $thumbnail_16_url CDN thumbnail 16x16 size
     *
     * @return self
     */
    public function setThumbnail16Url($thumbnail_16_url)
    {
        $this->container['thumbnail_16_url'] = $thumbnail_16_url;

        return $this;
    }

    /**
     * Gets thumbnail_32_url
     *
     * @return string|null
     */
    public function getThumbnail32Url()
    {
        return $this->container['thumbnail_32_url'];
    }

    /**
     * Sets thumbnail_32_url
     *
     * @param string|null $thumbnail_32_url CDN thumbnail 32x32 size
     *
     * @return self
     */
    public function setThumbnail32Url($thumbnail_32_url)
    {
        $this->container['thumbnail_32_url'] = $thumbnail_32_url;

        return $this;
    }

    /**
     * Gets thumbnail_64_url
     *
     * @return string|null
     */
    public function getThumbnail64Url()
    {
        return $this->container['thumbnail_64_url'];
    }

    /**
     * Sets thumbnail_64_url
     *
     * @param string|null $thumbnail_64_url CDN thumbnail 64x64 size
     *
     * @return self
     */
    public function setThumbnail64Url($thumbnail_64_url)
    {
        $this->container['thumbnail_64_url'] = $thumbnail_64_url;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets valid_velocity
     *
     * @return string|null
     */
    public function getValidVelocity()
    {
        return $this->container['valid_velocity'];
    }

    /**
     * Sets valid_velocity
     *
     * @param string|null $valid_velocity valid_velocity
     *
     * @return self
     */
    public function setValidVelocity($valid_velocity)
    {
        $this->container['valid_velocity'] = $valid_velocity;

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


