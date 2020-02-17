<?php
/**
 * TransactionEmail
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
 * TransactionEmail Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionEmail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'content' => 'string',
        'file_exists' => 'bool',
        'file_name' => 'string',
        'group' => 'string',
        'invalid' => 'bool',
        'last_modified' => 'string',
        'options' => '\ultracart\v2\models\TransactionEmailOption[]',
        'path' => 'string',
        'size' => 'string',
        'store_front_fs_directory_oid' => 'int',
        'store_front_fs_file_oid' => 'int',
        'syntax_errors' => 'string',
        'template_path_relative_path' => 'string',
        'theme_relative_path' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'content' => null,
        'file_exists' => null,
        'file_name' => null,
        'group' => null,
        'invalid' => null,
        'last_modified' => 'dateTime',
        'options' => null,
        'path' => null,
        'size' => null,
        'store_front_fs_directory_oid' => 'int32',
        'store_front_fs_file_oid' => 'int32',
        'syntax_errors' => null,
        'template_path_relative_path' => null,
        'theme_relative_path' => null
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
        'content' => 'content',
        'file_exists' => 'file_exists',
        'file_name' => 'file_name',
        'group' => 'group',
        'invalid' => 'invalid',
        'last_modified' => 'last_modified',
        'options' => 'options',
        'path' => 'path',
        'size' => 'size',
        'store_front_fs_directory_oid' => 'store_front_fs_directory_oid',
        'store_front_fs_file_oid' => 'store_front_fs_file_oid',
        'syntax_errors' => 'syntax_errors',
        'template_path_relative_path' => 'template_path_relative_path',
        'theme_relative_path' => 'theme_relative_path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'file_exists' => 'setFileExists',
        'file_name' => 'setFileName',
        'group' => 'setGroup',
        'invalid' => 'setInvalid',
        'last_modified' => 'setLastModified',
        'options' => 'setOptions',
        'path' => 'setPath',
        'size' => 'setSize',
        'store_front_fs_directory_oid' => 'setStoreFrontFsDirectoryOid',
        'store_front_fs_file_oid' => 'setStoreFrontFsFileOid',
        'syntax_errors' => 'setSyntaxErrors',
        'template_path_relative_path' => 'setTemplatePathRelativePath',
        'theme_relative_path' => 'setThemeRelativePath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'file_exists' => 'getFileExists',
        'file_name' => 'getFileName',
        'group' => 'getGroup',
        'invalid' => 'getInvalid',
        'last_modified' => 'getLastModified',
        'options' => 'getOptions',
        'path' => 'getPath',
        'size' => 'getSize',
        'store_front_fs_directory_oid' => 'getStoreFrontFsDirectoryOid',
        'store_front_fs_file_oid' => 'getStoreFrontFsFileOid',
        'syntax_errors' => 'getSyntaxErrors',
        'template_path_relative_path' => 'getTemplatePathRelativePath',
        'theme_relative_path' => 'getThemeRelativePath'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['file_exists'] = isset($data['file_exists']) ? $data['file_exists'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['invalid'] = isset($data['invalid']) ? $data['invalid'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['store_front_fs_directory_oid'] = isset($data['store_front_fs_directory_oid']) ? $data['store_front_fs_directory_oid'] : null;
        $this->container['store_front_fs_file_oid'] = isset($data['store_front_fs_file_oid']) ? $data['store_front_fs_file_oid'] : null;
        $this->container['syntax_errors'] = isset($data['syntax_errors']) ? $data['syntax_errors'] : null;
        $this->container['template_path_relative_path'] = isset($data['template_path_relative_path']) ? $data['template_path_relative_path'] : null;
        $this->container['theme_relative_path'] = isset($data['theme_relative_path']) ? $data['theme_relative_path'] : null;
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

        return true;
    }


    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content Actual template contents
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets file_exists
     *
     * @return bool
     */
    public function getFileExists()
    {
        return $this->container['file_exists'];
    }

    /**
     * Sets file_exists
     *
     * @param bool $file_exists An internal identifier used to aid in retrieving templates from the filesystem.
     *
     * @return $this
     */
    public function setFileExists($file_exists)
    {
        $this->container['file_exists'] = $file_exists;

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
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string $group Group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets invalid
     *
     * @return bool
     */
    public function getInvalid()
    {
        return $this->container['invalid'];
    }

    /**
     * Sets invalid
     *
     * @param bool $invalid Invalid will be true if the template cannot compile
     *
     * @return $this
     */
    public function setInvalid($invalid)
    {
        $this->container['invalid'] = $invalid;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return string
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param string $last_modified Last modified timestamp
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \ultracart\v2\models\TransactionEmailOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \ultracart\v2\models\TransactionEmailOption[] $options Options that help govern how and when this template is used
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path directory path where template is stored in file system
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param string $size Size of file in friendly description
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets store_front_fs_directory_oid
     *
     * @return int
     */
    public function getStoreFrontFsDirectoryOid()
    {
        return $this->container['store_front_fs_directory_oid'];
    }

    /**
     * Sets store_front_fs_directory_oid
     *
     * @param int $store_front_fs_directory_oid Internal identifier used to store and retrieve template from filesystem
     *
     * @return $this
     */
    public function setStoreFrontFsDirectoryOid($store_front_fs_directory_oid)
    {
        $this->container['store_front_fs_directory_oid'] = $store_front_fs_directory_oid;

        return $this;
    }

    /**
     * Gets store_front_fs_file_oid
     *
     * @return int
     */
    public function getStoreFrontFsFileOid()
    {
        return $this->container['store_front_fs_file_oid'];
    }

    /**
     * Sets store_front_fs_file_oid
     *
     * @param int $store_front_fs_file_oid Internal identifier used to store and retrieve template from filesystem
     *
     * @return $this
     */
    public function setStoreFrontFsFileOid($store_front_fs_file_oid)
    {
        $this->container['store_front_fs_file_oid'] = $store_front_fs_file_oid;

        return $this;
    }

    /**
     * Gets syntax_errors
     *
     * @return string
     */
    public function getSyntaxErrors()
    {
        return $this->container['syntax_errors'];
    }

    /**
     * Sets syntax_errors
     *
     * @param string $syntax_errors Any syntax errors contained within the tempalate
     *
     * @return $this
     */
    public function setSyntaxErrors($syntax_errors)
    {
        $this->container['syntax_errors'] = $syntax_errors;

        return $this;
    }

    /**
     * Gets template_path_relative_path
     *
     * @return string
     */
    public function getTemplatePathRelativePath()
    {
        return $this->container['template_path_relative_path'];
    }

    /**
     * Sets template_path_relative_path
     *
     * @param string $template_path_relative_path Internal value used to locate the template in the filesystem
     *
     * @return $this
     */
    public function setTemplatePathRelativePath($template_path_relative_path)
    {
        $this->container['template_path_relative_path'] = $template_path_relative_path;

        return $this;
    }

    /**
     * Gets theme_relative_path
     *
     * @return string
     */
    public function getThemeRelativePath()
    {
        return $this->container['theme_relative_path'];
    }

    /**
     * Sets theme_relative_path
     *
     * @param string $theme_relative_path Theme relative path in the filesystem.
     *
     * @return $this
     */
    public function setThemeRelativePath($theme_relative_path)
    {
        $this->container['theme_relative_path'] = $theme_relative_path;

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


