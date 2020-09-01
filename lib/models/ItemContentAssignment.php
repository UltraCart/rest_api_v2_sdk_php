<?php
/**
 * ItemContentAssignment
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
 * ItemContentAssignment Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemContentAssignment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemContentAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'group_oid' => 'int',
        'group_path' => 'string',
        'host' => 'string',
        'sort_order' => 'int',
        'url_part' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'group_oid' => 'int32',
        'group_path' => null,
        'host' => null,
        'sort_order' => 'int32',
        'url_part' => null
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
        'group_oid' => 'group_oid',
        'group_path' => 'group_path',
        'host' => 'host',
        'sort_order' => 'sort_order',
        'url_part' => 'url_part'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_oid' => 'setGroupOid',
        'group_path' => 'setGroupPath',
        'host' => 'setHost',
        'sort_order' => 'setSortOrder',
        'url_part' => 'setUrlPart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_oid' => 'getGroupOid',
        'group_path' => 'getGroupPath',
        'host' => 'getHost',
        'sort_order' => 'getSortOrder',
        'url_part' => 'getUrlPart'
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
        $this->container['group_oid'] = isset($data['group_oid']) ? $data['group_oid'] : null;
        $this->container['group_path'] = isset($data['group_path']) ? $data['group_path'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['url_part'] = isset($data['url_part']) ? $data['url_part'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['url_part']) && (mb_strlen($this->container['url_part']) > 150)) {
            $invalidProperties[] = "invalid value for 'url_part', the character length must be smaller than or equal to 150.";
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
     * Gets group_oid
     *
     * @return int
     */
    public function getGroupOid()
    {
        return $this->container['group_oid'];
    }

    /**
     * Sets group_oid
     *
     * @param int $group_oid Page (group) object identifier
     *
     * @return $this
     */
    public function setGroupOid($group_oid)
    {
        $this->container['group_oid'] = $group_oid;

        return $this;
    }

    /**
     * Gets group_path
     *
     * @return string
     */
    public function getGroupPath()
    {
        return $this->container['group_path'];
    }

    /**
     * Sets group_path
     *
     * @param string $group_path Page (group) path
     *
     * @return $this
     */
    public function setGroupPath($group_path)
    {
        $this->container['group_path'] = $group_path;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string $host StoreFront host name
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->container['host'] = $host;

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
     * Gets url_part
     *
     * @return string
     */
    public function getUrlPart()
    {
        return $this->container['url_part'];
    }

    /**
     * Sets url_part
     *
     * @param string $url_part URL part if the item id is not used
     *
     * @return $this
     */
    public function setUrlPart($url_part)
    {
        if (!is_null($url_part) && (mb_strlen($url_part) > 150)) {
            throw new \InvalidArgumentException('invalid length for $url_part when calling ItemContentAssignment., must be smaller than or equal to 150.');
        }

        $this->container['url_part'] = $url_part;

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


