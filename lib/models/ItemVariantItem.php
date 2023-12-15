<?php
/**
 * ItemVariantItem
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
 * ItemVariantItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemVariantItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemVariantItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'merchant_item_multimedia_oid' => 'int',
        'variant_merchant_item_id' => 'string',
        'variant_merchant_item_oid' => 'int',
        'variation_options' => 'string[]',
        'variations' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'merchant_item_multimedia_oid' => 'int32',
        'variant_merchant_item_id' => null,
        'variant_merchant_item_oid' => 'int32',
        'variation_options' => null,
        'variations' => null
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
        'description' => 'description',
        'merchant_item_multimedia_oid' => 'merchant_item_multimedia_oid',
        'variant_merchant_item_id' => 'variant_merchant_item_id',
        'variant_merchant_item_oid' => 'variant_merchant_item_oid',
        'variation_options' => 'variation_options',
        'variations' => 'variations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'merchant_item_multimedia_oid' => 'setMerchantItemMultimediaOid',
        'variant_merchant_item_id' => 'setVariantMerchantItemId',
        'variant_merchant_item_oid' => 'setVariantMerchantItemOid',
        'variation_options' => 'setVariationOptions',
        'variations' => 'setVariations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'merchant_item_multimedia_oid' => 'getMerchantItemMultimediaOid',
        'variant_merchant_item_id' => 'getVariantMerchantItemId',
        'variant_merchant_item_oid' => 'getVariantMerchantItemOid',
        'variation_options' => 'getVariationOptions',
        'variations' => 'getVariations'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['merchant_item_multimedia_oid'] = isset($data['merchant_item_multimedia_oid']) ? $data['merchant_item_multimedia_oid'] : null;
        $this->container['variant_merchant_item_id'] = isset($data['variant_merchant_item_id']) ? $data['variant_merchant_item_id'] : null;
        $this->container['variant_merchant_item_oid'] = isset($data['variant_merchant_item_oid']) ? $data['variant_merchant_item_oid'] : null;
        $this->container['variation_options'] = isset($data['variation_options']) ? $data['variation_options'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
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
        if (!is_null($description) && (mb_strlen($description) > 512)) {
            throw new \InvalidArgumentException('invalid length for $description when calling ItemVariantItem., must be smaller than or equal to 512.');
        }

        $this->container['description'] = $description;

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
     * @param int $merchant_item_multimedia_oid Multimedia object identifier
     *
     * @return $this
     */
    public function setMerchantItemMultimediaOid($merchant_item_multimedia_oid)
    {
        $this->container['merchant_item_multimedia_oid'] = $merchant_item_multimedia_oid;

        return $this;
    }

    /**
     * Gets variant_merchant_item_id
     *
     * @return string
     */
    public function getVariantMerchantItemId()
    {
        return $this->container['variant_merchant_item_id'];
    }

    /**
     * Sets variant_merchant_item_id
     *
     * @param string $variant_merchant_item_id Variant item id
     *
     * @return $this
     */
    public function setVariantMerchantItemId($variant_merchant_item_id)
    {
        $this->container['variant_merchant_item_id'] = $variant_merchant_item_id;

        return $this;
    }

    /**
     * Gets variant_merchant_item_oid
     *
     * @return int
     */
    public function getVariantMerchantItemOid()
    {
        return $this->container['variant_merchant_item_oid'];
    }

    /**
     * Sets variant_merchant_item_oid
     *
     * @param int $variant_merchant_item_oid Variant item object identifier
     *
     * @return $this
     */
    public function setVariantMerchantItemOid($variant_merchant_item_oid)
    {
        $this->container['variant_merchant_item_oid'] = $variant_merchant_item_oid;

        return $this;
    }

    /**
     * Gets variation_options
     *
     * @return string[]
     */
    public function getVariationOptions()
    {
        return $this->container['variation_options'];
    }

    /**
     * Sets variation_options
     *
     * @param string[] $variation_options Variation options
     *
     * @return $this
     */
    public function setVariationOptions($variation_options)
    {
        $this->container['variation_options'] = $variation_options;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return string[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param string[] $variations Variations
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

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


