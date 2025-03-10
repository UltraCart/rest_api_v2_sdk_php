<?php
/**
 * OrderDigitalItem
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
 * OrderDigitalItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderDigitalItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDigitalItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file_size' => 'int',
        'last_download' => 'string',
        'last_download_ip_address' => 'string',
        'original_filename' => 'string',
        'product_code' => 'string',
        'product_description' => 'string',
        'remaining_downloads' => 'int',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'file_size' => 'int64',
        'last_download' => 'dateTime',
        'last_download_ip_address' => null,
        'original_filename' => null,
        'product_code' => null,
        'product_description' => null,
        'remaining_downloads' => 'int32',
        'url' => null
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
        'file_size' => 'file_size',
        'last_download' => 'last_download',
        'last_download_ip_address' => 'last_download_ip_address',
        'original_filename' => 'original_filename',
        'product_code' => 'product_code',
        'product_description' => 'product_description',
        'remaining_downloads' => 'remaining_downloads',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_size' => 'setFileSize',
        'last_download' => 'setLastDownload',
        'last_download_ip_address' => 'setLastDownloadIpAddress',
        'original_filename' => 'setOriginalFilename',
        'product_code' => 'setProductCode',
        'product_description' => 'setProductDescription',
        'remaining_downloads' => 'setRemainingDownloads',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_size' => 'getFileSize',
        'last_download' => 'getLastDownload',
        'last_download_ip_address' => 'getLastDownloadIpAddress',
        'original_filename' => 'getOriginalFilename',
        'product_code' => 'getProductCode',
        'product_description' => 'getProductDescription',
        'remaining_downloads' => 'getRemainingDownloads',
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
        $this->container['file_size'] = $data['file_size'] ?? null;
        $this->container['last_download'] = $data['last_download'] ?? null;
        $this->container['last_download_ip_address'] = $data['last_download_ip_address'] ?? null;
        $this->container['original_filename'] = $data['original_filename'] ?? null;
        $this->container['product_code'] = $data['product_code'] ?? null;
        $this->container['product_description'] = $data['product_description'] ?? null;
        $this->container['remaining_downloads'] = $data['remaining_downloads'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
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
     * Gets file_size
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int|null $file_size File size
     *
     * @return self
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets last_download
     *
     * @return string|null
     */
    public function getLastDownload()
    {
        return $this->container['last_download'];
    }

    /**
     * Sets last_download
     *
     * @param string|null $last_download Last download
     *
     * @return self
     */
    public function setLastDownload($last_download)
    {
        $this->container['last_download'] = $last_download;

        return $this;
    }

    /**
     * Gets last_download_ip_address
     *
     * @return string|null
     */
    public function getLastDownloadIpAddress()
    {
        return $this->container['last_download_ip_address'];
    }

    /**
     * Sets last_download_ip_address
     *
     * @param string|null $last_download_ip_address IP address that performed the last download
     *
     * @return self
     */
    public function setLastDownloadIpAddress($last_download_ip_address)
    {
        $this->container['last_download_ip_address'] = $last_download_ip_address;

        return $this;
    }

    /**
     * Gets original_filename
     *
     * @return string|null
     */
    public function getOriginalFilename()
    {
        return $this->container['original_filename'];
    }

    /**
     * Sets original_filename
     *
     * @param string|null $original_filename Original file name
     *
     * @return self
     */
    public function setOriginalFilename($original_filename)
    {
        $this->container['original_filename'] = $original_filename;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string|null $product_code Item id associated with this item
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets product_description
     *
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description
     *
     * @param string|null $product_description Item description associated with this item
     *
     * @return self
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
    }

    /**
     * Gets remaining_downloads
     *
     * @return int|null
     */
    public function getRemainingDownloads()
    {
        return $this->container['remaining_downloads'];
    }

    /**
     * Sets remaining_downloads
     *
     * @param int|null $remaining_downloads Remaining number of downloads
     *
     * @return self
     */
    public function setRemainingDownloads($remaining_downloads)
    {
        $this->container['remaining_downloads'] = $remaining_downloads;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL that the customer can click to download the specific digital item
     *
     * @return self
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


