<?php
/**
 * ItemDigitalItemPdfMeta
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
 * ItemDigitalItemPdfMeta Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemDigitalItemPdfMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemDigitalItemPdfMeta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assembly_allowed' => 'bool',
        'copy_allowed' => 'bool',
        'custom_footer' => 'string',
        'custom_header' => 'string',
        'degraded_printing_allowed' => 'bool',
        'fillin_allowed' => 'bool',
        'modify_annotations_allowed' => 'bool',
        'modify_contents_allowed' => 'bool',
        'printing_allowed' => 'bool',
        'screen_readers_allowed' => 'bool',
        'tagged' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assembly_allowed' => null,
        'copy_allowed' => null,
        'custom_footer' => null,
        'custom_header' => null,
        'degraded_printing_allowed' => null,
        'fillin_allowed' => null,
        'modify_annotations_allowed' => null,
        'modify_contents_allowed' => null,
        'printing_allowed' => null,
        'screen_readers_allowed' => null,
        'tagged' => null
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
        'assembly_allowed' => 'assembly_allowed',
        'copy_allowed' => 'copy_allowed',
        'custom_footer' => 'custom_footer',
        'custom_header' => 'custom_header',
        'degraded_printing_allowed' => 'degraded_printing_allowed',
        'fillin_allowed' => 'fillin_allowed',
        'modify_annotations_allowed' => 'modify_annotations_allowed',
        'modify_contents_allowed' => 'modify_contents_allowed',
        'printing_allowed' => 'printing_allowed',
        'screen_readers_allowed' => 'screen_readers_allowed',
        'tagged' => 'tagged'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assembly_allowed' => 'setAssemblyAllowed',
        'copy_allowed' => 'setCopyAllowed',
        'custom_footer' => 'setCustomFooter',
        'custom_header' => 'setCustomHeader',
        'degraded_printing_allowed' => 'setDegradedPrintingAllowed',
        'fillin_allowed' => 'setFillinAllowed',
        'modify_annotations_allowed' => 'setModifyAnnotationsAllowed',
        'modify_contents_allowed' => 'setModifyContentsAllowed',
        'printing_allowed' => 'setPrintingAllowed',
        'screen_readers_allowed' => 'setScreenReadersAllowed',
        'tagged' => 'setTagged'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assembly_allowed' => 'getAssemblyAllowed',
        'copy_allowed' => 'getCopyAllowed',
        'custom_footer' => 'getCustomFooter',
        'custom_header' => 'getCustomHeader',
        'degraded_printing_allowed' => 'getDegradedPrintingAllowed',
        'fillin_allowed' => 'getFillinAllowed',
        'modify_annotations_allowed' => 'getModifyAnnotationsAllowed',
        'modify_contents_allowed' => 'getModifyContentsAllowed',
        'printing_allowed' => 'getPrintingAllowed',
        'screen_readers_allowed' => 'getScreenReadersAllowed',
        'tagged' => 'getTagged'
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
        $this->container['assembly_allowed'] = isset($data['assembly_allowed']) ? $data['assembly_allowed'] : null;
        $this->container['copy_allowed'] = isset($data['copy_allowed']) ? $data['copy_allowed'] : null;
        $this->container['custom_footer'] = isset($data['custom_footer']) ? $data['custom_footer'] : null;
        $this->container['custom_header'] = isset($data['custom_header']) ? $data['custom_header'] : null;
        $this->container['degraded_printing_allowed'] = isset($data['degraded_printing_allowed']) ? $data['degraded_printing_allowed'] : null;
        $this->container['fillin_allowed'] = isset($data['fillin_allowed']) ? $data['fillin_allowed'] : null;
        $this->container['modify_annotations_allowed'] = isset($data['modify_annotations_allowed']) ? $data['modify_annotations_allowed'] : null;
        $this->container['modify_contents_allowed'] = isset($data['modify_contents_allowed']) ? $data['modify_contents_allowed'] : null;
        $this->container['printing_allowed'] = isset($data['printing_allowed']) ? $data['printing_allowed'] : null;
        $this->container['screen_readers_allowed'] = isset($data['screen_readers_allowed']) ? $data['screen_readers_allowed'] : null;
        $this->container['tagged'] = isset($data['tagged']) ? $data['tagged'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['custom_footer']) && (mb_strlen($this->container['custom_footer']) > 8000)) {
            $invalidProperties[] = "invalid value for 'custom_footer', the character length must be smaller than or equal to 8000.";
        }

        if (!is_null($this->container['custom_header']) && (mb_strlen($this->container['custom_header']) > 8000)) {
            $invalidProperties[] = "invalid value for 'custom_header', the character length must be smaller than or equal to 8000.";
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
     * Gets assembly_allowed
     *
     * @return bool
     */
    public function getAssemblyAllowed()
    {
        return $this->container['assembly_allowed'];
    }

    /**
     * Sets assembly_allowed
     *
     * @param bool $assembly_allowed Assembly allowed
     *
     * @return $this
     */
    public function setAssemblyAllowed($assembly_allowed)
    {
        $this->container['assembly_allowed'] = $assembly_allowed;

        return $this;
    }

    /**
     * Gets copy_allowed
     *
     * @return bool
     */
    public function getCopyAllowed()
    {
        return $this->container['copy_allowed'];
    }

    /**
     * Sets copy_allowed
     *
     * @param bool $copy_allowed Copy/Paste is allowed
     *
     * @return $this
     */
    public function setCopyAllowed($copy_allowed)
    {
        $this->container['copy_allowed'] = $copy_allowed;

        return $this;
    }

    /**
     * Gets custom_footer
     *
     * @return string
     */
    public function getCustomFooter()
    {
        return $this->container['custom_footer'];
    }

    /**
     * Sets custom_footer
     *
     * @param string $custom_footer A custom footer for each pdf page
     *
     * @return $this
     */
    public function setCustomFooter($custom_footer)
    {
        if (!is_null($custom_footer) && (mb_strlen($custom_footer) > 8000)) {
            throw new \InvalidArgumentException('invalid length for $custom_footer when calling ItemDigitalItemPdfMeta., must be smaller than or equal to 8000.');
        }

        $this->container['custom_footer'] = $custom_footer;

        return $this;
    }

    /**
     * Gets custom_header
     *
     * @return string
     */
    public function getCustomHeader()
    {
        return $this->container['custom_header'];
    }

    /**
     * Sets custom_header
     *
     * @param string $custom_header A custom header for each pdf page
     *
     * @return $this
     */
    public function setCustomHeader($custom_header)
    {
        if (!is_null($custom_header) && (mb_strlen($custom_header) > 8000)) {
            throw new \InvalidArgumentException('invalid length for $custom_header when calling ItemDigitalItemPdfMeta., must be smaller than or equal to 8000.');
        }

        $this->container['custom_header'] = $custom_header;

        return $this;
    }

    /**
     * Gets degraded_printing_allowed
     *
     * @return bool
     */
    public function getDegradedPrintingAllowed()
    {
        return $this->container['degraded_printing_allowed'];
    }

    /**
     * Sets degraded_printing_allowed
     *
     * @param bool $degraded_printing_allowed Degraded printing allowed
     *
     * @return $this
     */
    public function setDegradedPrintingAllowed($degraded_printing_allowed)
    {
        $this->container['degraded_printing_allowed'] = $degraded_printing_allowed;

        return $this;
    }

    /**
     * Gets fillin_allowed
     *
     * @return bool
     */
    public function getFillinAllowed()
    {
        return $this->container['fillin_allowed'];
    }

    /**
     * Sets fillin_allowed
     *
     * @param bool $fillin_allowed Fillin is allowed
     *
     * @return $this
     */
    public function setFillinAllowed($fillin_allowed)
    {
        $this->container['fillin_allowed'] = $fillin_allowed;

        return $this;
    }

    /**
     * Gets modify_annotations_allowed
     *
     * @return bool
     */
    public function getModifyAnnotationsAllowed()
    {
        return $this->container['modify_annotations_allowed'];
    }

    /**
     * Sets modify_annotations_allowed
     *
     * @param bool $modify_annotations_allowed Modifying annotations is allowed
     *
     * @return $this
     */
    public function setModifyAnnotationsAllowed($modify_annotations_allowed)
    {
        $this->container['modify_annotations_allowed'] = $modify_annotations_allowed;

        return $this;
    }

    /**
     * Gets modify_contents_allowed
     *
     * @return bool
     */
    public function getModifyContentsAllowed()
    {
        return $this->container['modify_contents_allowed'];
    }

    /**
     * Sets modify_contents_allowed
     *
     * @param bool $modify_contents_allowed Modifying contents is allowed
     *
     * @return $this
     */
    public function setModifyContentsAllowed($modify_contents_allowed)
    {
        $this->container['modify_contents_allowed'] = $modify_contents_allowed;

        return $this;
    }

    /**
     * Gets printing_allowed
     *
     * @return bool
     */
    public function getPrintingAllowed()
    {
        return $this->container['printing_allowed'];
    }

    /**
     * Sets printing_allowed
     *
     * @param bool $printing_allowed Printing is allowed
     *
     * @return $this
     */
    public function setPrintingAllowed($printing_allowed)
    {
        $this->container['printing_allowed'] = $printing_allowed;

        return $this;
    }

    /**
     * Gets screen_readers_allowed
     *
     * @return bool
     */
    public function getScreenReadersAllowed()
    {
        return $this->container['screen_readers_allowed'];
    }

    /**
     * Sets screen_readers_allowed
     *
     * @param bool $screen_readers_allowed Screen readers are allowed
     *
     * @return $this
     */
    public function setScreenReadersAllowed($screen_readers_allowed)
    {
        $this->container['screen_readers_allowed'] = $screen_readers_allowed;

        return $this;
    }

    /**
     * Gets tagged
     *
     * @return bool
     */
    public function getTagged()
    {
        return $this->container['tagged'];
    }

    /**
     * Sets tagged
     *
     * @param bool $tagged PDF is tagged
     *
     * @return $this
     */
    public function setTagged($tagged)
    {
        $this->container['tagged'] = $tagged;

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


