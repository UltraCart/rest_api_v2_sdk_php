<?php
/**
 * AddLibraryItemRequest
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
 * AddLibraryItemRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddLibraryItemRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddLibraryItemRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attributes' => '\ultracart\v2\models\LibraryItemAttribute[]',
        'cjson' => 'string',
        'content_type' => 'string',
        'description' => 'string',
        'email_name' => 'string',
        'email_path' => 'string',
        'screenshots' => '\ultracart\v2\models\LibraryItemScreenshot[]',
        'storefront_oid' => 'int',
        'title' => 'string',
        'upsell_offer_oid' => 'int',
        'uuid' => 'string'
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
        'description' => null,
        'email_name' => null,
        'email_path' => null,
        'screenshots' => null,
        'storefront_oid' => 'int32',
        'title' => null,
        'upsell_offer_oid' => 'int32',
        'uuid' => null
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
        'description' => 'description',
        'email_name' => 'email_name',
        'email_path' => 'email_path',
        'screenshots' => 'screenshots',
        'storefront_oid' => 'storefront_oid',
        'title' => 'title',
        'upsell_offer_oid' => 'upsell_offer_oid',
        'uuid' => 'uuid'
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
        'description' => 'setDescription',
        'email_name' => 'setEmailName',
        'email_path' => 'setEmailPath',
        'screenshots' => 'setScreenshots',
        'storefront_oid' => 'setStorefrontOid',
        'title' => 'setTitle',
        'upsell_offer_oid' => 'setUpsellOfferOid',
        'uuid' => 'setUuid'
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
        'description' => 'getDescription',
        'email_name' => 'getEmailName',
        'email_path' => 'getEmailPath',
        'screenshots' => 'getScreenshots',
        'storefront_oid' => 'getStorefrontOid',
        'title' => 'getTitle',
        'upsell_offer_oid' => 'getUpsellOfferOid',
        'uuid' => 'getUuid'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email_name'] = isset($data['email_name']) ? $data['email_name'] : null;
        $this->container['email_path'] = isset($data['email_path']) ? $data['email_path'] : null;
        $this->container['screenshots'] = isset($data['screenshots']) ? $data['screenshots'] : null;
        $this->container['storefront_oid'] = isset($data['storefront_oid']) ? $data['storefront_oid'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['upsell_offer_oid'] = isset($data['upsell_offer_oid']) ? $data['upsell_offer_oid'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
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
     * @param \ultracart\v2\models\LibraryItemAttribute[] $attributes Attributes associated with the library item to contain additional configuration.
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
     * @param string $cjson Cjson to be added to library
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
     * @param string $content_type flow, campaign, cjson, email, transactional_email, postcard or upsell
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $this->container['content_type'] = $content_type;

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
     * @param string $description description of library item
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email_name
     *
     * @return string
     */
    public function getEmailName()
    {
        return $this->container['email_name'];
    }

    /**
     * Sets email_name
     *
     * @param string $email_name Required if content_type is transactional_email. This is the name of the email template (html, not text).  This name should have a .vm file extension.  An example is auto_order_cancel_html.vm
     *
     * @return $this
     */
    public function setEmailName($email_name)
    {
        $this->container['email_name'] = $email_name;

        return $this;
    }

    /**
     * Gets email_path
     *
     * @return string
     */
    public function getEmailPath()
    {
        return $this->container['email_path'];
    }

    /**
     * Sets email_path
     *
     * @param string $email_path Required if content_type is transactional_email. This is the full path to the email template stored in the file system.  This defines which StoreFront contains the desired email template.  An example is /themes/Elements/core/emails/auto_order_cancel_html.vm
     *
     * @return $this
     */
    public function setEmailPath($email_path)
    {
        $this->container['email_path'] = $email_path;

        return $this;
    }

    /**
     * Gets screenshots
     *
     * @return \ultracart\v2\models\LibraryItemScreenshot[]
     */
    public function getScreenshots()
    {
        return $this->container['screenshots'];
    }

    /**
     * Sets screenshots
     *
     * @param \ultracart\v2\models\LibraryItemScreenshot[] $screenshots Screenshot urls for display
     *
     * @return $this
     */
    public function setScreenshots($screenshots)
    {
        $this->container['screenshots'] = $screenshots;

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
     * Gets upsell_offer_oid
     *
     * @return int
     */
    public function getUpsellOfferOid()
    {
        return $this->container['upsell_offer_oid'];
    }

    /**
     * Sets upsell_offer_oid
     *
     * @param int $upsell_offer_oid Required if content_type is upsell. This is object identifier of a StoreFront Upsell Offer.
     *
     * @return $this
     */
    public function setUpsellOfferOid($upsell_offer_oid)
    {
        $this->container['upsell_offer_oid'] = $upsell_offer_oid;

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
     * @param string $uuid UUID of communication flow, campaign, email, postcard, or null if this item is something else. transactional_email do not have a uuid because they are singleton objects within a storefront and easily identifiable by name
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

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


