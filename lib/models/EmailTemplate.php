<?php
/**
 * EmailTemplate
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
 * EmailTemplate Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'container_cjson' => 'string',
        'description' => 'string',
        'email_template_oid' => 'int',
        'email_template_vm_path' => 'string',
        'merchant_id' => 'string',
        'name' => 'string',
        'preview_amazon_listing_key' => 'string',
        'sort_order' => 'int',
        'storefront_oid' => 'int',
        'system' => 'bool',
        'trigger_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'container_cjson' => null,
        'description' => null,
        'email_template_oid' => 'int32',
        'email_template_vm_path' => null,
        'merchant_id' => null,
        'name' => null,
        'preview_amazon_listing_key' => null,
        'sort_order' => 'int32',
        'storefront_oid' => 'int32',
        'system' => null,
        'trigger_type' => null
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
        'container_cjson' => 'container_cjson',
        'description' => 'description',
        'email_template_oid' => 'email_template_oid',
        'email_template_vm_path' => 'email_template_vm_path',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'preview_amazon_listing_key' => 'preview_amazon_listing_key',
        'sort_order' => 'sort_order',
        'storefront_oid' => 'storefront_oid',
        'system' => 'system',
        'trigger_type' => 'trigger_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'container_cjson' => 'setContainerCjson',
        'description' => 'setDescription',
        'email_template_oid' => 'setEmailTemplateOid',
        'email_template_vm_path' => 'setEmailTemplateVmPath',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'preview_amazon_listing_key' => 'setPreviewAmazonListingKey',
        'sort_order' => 'setSortOrder',
        'storefront_oid' => 'setStorefrontOid',
        'system' => 'setSystem',
        'trigger_type' => 'setTriggerType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'container_cjson' => 'getContainerCjson',
        'description' => 'getDescription',
        'email_template_oid' => 'getEmailTemplateOid',
        'email_template_vm_path' => 'getEmailTemplateVmPath',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'preview_amazon_listing_key' => 'getPreviewAmazonListingKey',
        'sort_order' => 'getSortOrder',
        'storefront_oid' => 'getStorefrontOid',
        'system' => 'getSystem',
        'trigger_type' => 'getTriggerType'
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
        $this->container['container_cjson'] = isset($data['container_cjson']) ? $data['container_cjson'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email_template_oid'] = isset($data['email_template_oid']) ? $data['email_template_oid'] : null;
        $this->container['email_template_vm_path'] = isset($data['email_template_vm_path']) ? $data['email_template_vm_path'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['preview_amazon_listing_key'] = isset($data['preview_amazon_listing_key']) ? $data['preview_amazon_listing_key'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['trigger_type'] = isset($data['trigger_type']) ? $data['trigger_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 250)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['preview_amazon_listing_key']) && (mb_strlen($this->container['preview_amazon_listing_key']) > 250)) {
            $invalidProperties[] = "invalid value for 'preview_amazon_listing_key', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['trigger_type']) && (mb_strlen($this->container['trigger_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'trigger_type', the character length must be smaller than or equal to 100.";
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
     * Gets container_cjson
     *
     * @return string
     */
    public function getContainerCjson()
    {
        return $this->container['container_cjson'];
    }

    /**
     * Sets container_cjson
     *
     * @param string $container_cjson Container cjson
     *
     * @return $this
     */
    public function setContainerCjson($container_cjson)
    {
        $this->container['container_cjson'] = $container_cjson;

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
     * @param string $description Description of email template
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email_template_oid
     *
     * @return int
     */
    public function getEmailTemplateOid()
    {
        return $this->container['email_template_oid'];
    }

    /**
     * Sets email_template_oid
     *
     * @param int $email_template_oid Email template oid
     *
     * @return $this
     */
    public function setEmailTemplateOid($email_template_oid)
    {
        $this->container['email_template_oid'] = $email_template_oid;

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
     * @param string $email_template_vm_path Email Template VM Path
     *
     * @return $this
     */
    public function setEmailTemplateVmPath($email_template_vm_path)
    {
        $this->container['email_template_vm_path'] = $email_template_vm_path;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id Merchant ID
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of email template
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EmailTemplate., must be smaller than or equal to 250.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets preview_amazon_listing_key
     *
     * @return string
     */
    public function getPreviewAmazonListingKey()
    {
        return $this->container['preview_amazon_listing_key'];
    }

    /**
     * Sets preview_amazon_listing_key
     *
     * @param string $preview_amazon_listing_key Amazon key for preview png image
     *
     * @return $this
     */
    public function setPreviewAmazonListingKey($preview_amazon_listing_key)
    {
        if (!is_null($preview_amazon_listing_key) && (mb_strlen($preview_amazon_listing_key) > 250)) {
            throw new \InvalidArgumentException('invalid length for $preview_amazon_listing_key when calling EmailTemplate., must be smaller than or equal to 250.');
        }

        $this->container['preview_amazon_listing_key'] = $preview_amazon_listing_key;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order Sort order (optional)
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

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
     * @param int $storefront_oid StoreFront oid
     *
     * @return $this
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets system
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     *
     * @param bool $system True if this email template is system-wide,false if merchant specific
     *
     * @return $this
     */
    public function setSystem($system)
    {
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets trigger_type
     *
     * @return string
     */
    public function getTriggerType()
    {
        return $this->container['trigger_type'];
    }

    /**
     * Sets trigger_type
     *
     * @param string $trigger_type Trigger type
     *
     * @return $this
     */
    public function setTriggerType($trigger_type)
    {
        if (!is_null($trigger_type) && (mb_strlen($trigger_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $trigger_type when calling EmailTemplate., must be smaller than or equal to 100.');
        }

        $this->container['trigger_type'] = $trigger_type;

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


