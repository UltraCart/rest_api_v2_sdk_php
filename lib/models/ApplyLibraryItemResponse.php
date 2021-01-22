<?php
/**
 * ApplyLibraryItemResponse
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
 * ApplyLibraryItemResponse Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApplyLibraryItemResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ApplyLibraryItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attributes' => '\ultracart\v2\models\LibraryItemAttribute[]',
        'cjson' => 'string',
        'content_type' => 'string',
        'email_template_vm_path' => 'string',
        'error' => '\ultracart\v2\models\Error',
        'metadata' => '\ultracart\v2\models\ResponseMetadata',
        'storefront_oid' => 'int',
        'success' => 'bool',
        'title' => 'string',
        'uuid' => 'string',
        'warning' => '\ultracart\v2\models\Warning'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attributes' => null,
        'cjson' => null,
        'content_type' => null,
        'email_template_vm_path' => null,
        'error' => null,
        'metadata' => null,
        'storefront_oid' => 'int32',
        'success' => null,
        'title' => null,
        'uuid' => null,
        'warning' => null
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
        'attributes' => 'attributes',
        'cjson' => 'cjson',
        'content_type' => 'content_type',
        'email_template_vm_path' => 'email_template_vm_path',
        'error' => 'error',
        'metadata' => 'metadata',
        'storefront_oid' => 'storefront_oid',
        'success' => 'success',
        'title' => 'title',
        'uuid' => 'uuid',
        'warning' => 'warning'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attributes' => 'setAttributes',
        'cjson' => 'setCjson',
        'content_type' => 'setContentType',
        'email_template_vm_path' => 'setEmailTemplateVmPath',
        'error' => 'setError',
        'metadata' => 'setMetadata',
        'storefront_oid' => 'setStorefrontOid',
        'success' => 'setSuccess',
        'title' => 'setTitle',
        'uuid' => 'setUuid',
        'warning' => 'setWarning'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attributes' => 'getAttributes',
        'cjson' => 'getCjson',
        'content_type' => 'getContentType',
        'email_template_vm_path' => 'getEmailTemplateVmPath',
        'error' => 'getError',
        'metadata' => 'getMetadata',
        'storefront_oid' => 'getStorefrontOid',
        'success' => 'getSuccess',
        'title' => 'getTitle',
        'uuid' => 'getUuid',
        'warning' => 'getWarning'
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['cjson'] = isset($data['cjson']) ? $data['cjson'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['email_template_vm_path'] = isset($data['email_template_vm_path']) ? $data['email_template_vm_path'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['warning'] = isset($data['warning']) ? $data['warning'] : null;
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
     * Gets attributes
     *
     * @return \ultracart\v2\models\LibraryItemAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \ultracart\v2\models\LibraryItemAttribute[] $attributes Attributes from the library item
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets cjson
     *
     * @return string
     */
    public function getCjson()
    {
        return $this->container['cjson'];
    }

    /**
     * Sets cjson
     *
     * @param string $cjson Cjson from library item, only populated if this library item was a cjson snippet or marketing email (not transactional)
     *
     * @return $this
     */
    public function setCjson($cjson)
    {
        $this->container['cjson'] = $cjson;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type flow, campaign, cjson, upsell, transactional_email or email
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets email_template_vm_path
     *
     * @return string
     */
    public function getEmailTemplateVmPath()
    {
        return $this->container['email_template_vm_path'];
    }

    /**
     * Sets email_template_vm_path
     *
     * @param string $email_template_vm_path If a marketing email was applied, this is the path to the template encapsulating the cjson.  This is needed for the UltraCart UI.
     *
     * @return $this
     */
    public function setEmailTemplateVmPath($email_template_vm_path)
    {
        $this->container['email_template_vm_path'] = $email_template_vm_path;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \ultracart\v2\models\Error
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \ultracart\v2\models\Error $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \ultracart\v2\models\ResponseMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \ultracart\v2\models\ResponseMetadata $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int $storefront_oid StoreFront oid where content originates necessary for tracking down relative assets
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Indicates if API call was successful
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title of library item, usually the name of the flow or campaign, or description of cjson
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid UUID of marketing email or communication flow/campaign if this library item was an email, campaign or flow
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets warning
     *
     * @return \ultracart\v2\models\Warning
     */
    public function getWarning()
    {
        return $this->container['warning'];
    }

    /**
     * Sets warning
     *
     * @param \ultracart\v2\models\Warning $warning warning
     *
     * @return $this
     */
    public function setWarning($warning)
    {
        $this->container['warning'] = $warning;

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


