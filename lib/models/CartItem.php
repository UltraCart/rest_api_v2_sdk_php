<?php
/**
 * CartItem
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
 * CartItem Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arbitrary_unit_cost' => '\ultracart\v2\models\Currency',
        'attributes' => '\ultracart\v2\models\CartItemAttribute[]',
        'auto_order_schedule' => 'string',
        'default_image_url' => 'string',
        'default_thumbnail_url' => 'string',
        'description' => 'string',
        'discount' => '\ultracart\v2\models\Currency',
        'extended_description' => 'string',
        'item_id' => 'string',
        'item_oid' => 'int',
        'kit' => 'bool',
        'kit_component_options' => '\ultracart\v2\models\CartKitComponentOption[]',
        'manufacturer_suggested_retail_price' => '\ultracart\v2\models\Currency',
        'maximum_quantity' => 'float',
        'minimum_quantity' => 'float',
        'multimedia' => '\ultracart\v2\models\CartItemMultimedia[]',
        'options' => '\ultracart\v2\models\CartItemOption[]',
        'phsyical' => '\ultracart\v2\models\CartItemPhysical',
        'position' => 'int',
        'preorder' => 'bool',
        'quantity' => 'float',
        'schedules' => 'string[]',
        'total_cost' => '\ultracart\v2\models\Currency',
        'total_cost_with_discount' => '\ultracart\v2\models\Currency',
        'unit_cost' => '\ultracart\v2\models\Currency',
        'unit_cost_with_discount' => '\ultracart\v2\models\Currency',
        'upsell' => 'bool',
        'variations' => '\ultracart\v2\models\CartItemVariationSelection[]',
        'view_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arbitrary_unit_cost' => null,
        'attributes' => null,
        'auto_order_schedule' => null,
        'default_image_url' => null,
        'default_thumbnail_url' => null,
        'description' => null,
        'discount' => null,
        'extended_description' => null,
        'item_id' => null,
        'item_oid' => 'int32',
        'kit' => null,
        'kit_component_options' => null,
        'manufacturer_suggested_retail_price' => null,
        'maximum_quantity' => null,
        'minimum_quantity' => null,
        'multimedia' => null,
        'options' => null,
        'phsyical' => null,
        'position' => 'int32',
        'preorder' => null,
        'quantity' => null,
        'schedules' => null,
        'total_cost' => null,
        'total_cost_with_discount' => null,
        'unit_cost' => null,
        'unit_cost_with_discount' => null,
        'upsell' => null,
        'variations' => null,
        'view_url' => null
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
        'arbitrary_unit_cost' => 'arbitrary_unit_cost',
        'attributes' => 'attributes',
        'auto_order_schedule' => 'auto_order_schedule',
        'default_image_url' => 'default_image_url',
        'default_thumbnail_url' => 'default_thumbnail_url',
        'description' => 'description',
        'discount' => 'discount',
        'extended_description' => 'extended_description',
        'item_id' => 'item_id',
        'item_oid' => 'item_oid',
        'kit' => 'kit',
        'kit_component_options' => 'kit_component_options',
        'manufacturer_suggested_retail_price' => 'manufacturer_suggested_retail_price',
        'maximum_quantity' => 'maximum_quantity',
        'minimum_quantity' => 'minimum_quantity',
        'multimedia' => 'multimedia',
        'options' => 'options',
        'phsyical' => 'phsyical',
        'position' => 'position',
        'preorder' => 'preorder',
        'quantity' => 'quantity',
        'schedules' => 'schedules',
        'total_cost' => 'total_cost',
        'total_cost_with_discount' => 'total_cost_with_discount',
        'unit_cost' => 'unit_cost',
        'unit_cost_with_discount' => 'unit_cost_with_discount',
        'upsell' => 'upsell',
        'variations' => 'variations',
        'view_url' => 'view_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arbitrary_unit_cost' => 'setArbitraryUnitCost',
        'attributes' => 'setAttributes',
        'auto_order_schedule' => 'setAutoOrderSchedule',
        'default_image_url' => 'setDefaultImageUrl',
        'default_thumbnail_url' => 'setDefaultThumbnailUrl',
        'description' => 'setDescription',
        'discount' => 'setDiscount',
        'extended_description' => 'setExtendedDescription',
        'item_id' => 'setItemId',
        'item_oid' => 'setItemOid',
        'kit' => 'setKit',
        'kit_component_options' => 'setKitComponentOptions',
        'manufacturer_suggested_retail_price' => 'setManufacturerSuggestedRetailPrice',
        'maximum_quantity' => 'setMaximumQuantity',
        'minimum_quantity' => 'setMinimumQuantity',
        'multimedia' => 'setMultimedia',
        'options' => 'setOptions',
        'phsyical' => 'setPhsyical',
        'position' => 'setPosition',
        'preorder' => 'setPreorder',
        'quantity' => 'setQuantity',
        'schedules' => 'setSchedules',
        'total_cost' => 'setTotalCost',
        'total_cost_with_discount' => 'setTotalCostWithDiscount',
        'unit_cost' => 'setUnitCost',
        'unit_cost_with_discount' => 'setUnitCostWithDiscount',
        'upsell' => 'setUpsell',
        'variations' => 'setVariations',
        'view_url' => 'setViewUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arbitrary_unit_cost' => 'getArbitraryUnitCost',
        'attributes' => 'getAttributes',
        'auto_order_schedule' => 'getAutoOrderSchedule',
        'default_image_url' => 'getDefaultImageUrl',
        'default_thumbnail_url' => 'getDefaultThumbnailUrl',
        'description' => 'getDescription',
        'discount' => 'getDiscount',
        'extended_description' => 'getExtendedDescription',
        'item_id' => 'getItemId',
        'item_oid' => 'getItemOid',
        'kit' => 'getKit',
        'kit_component_options' => 'getKitComponentOptions',
        'manufacturer_suggested_retail_price' => 'getManufacturerSuggestedRetailPrice',
        'maximum_quantity' => 'getMaximumQuantity',
        'minimum_quantity' => 'getMinimumQuantity',
        'multimedia' => 'getMultimedia',
        'options' => 'getOptions',
        'phsyical' => 'getPhsyical',
        'position' => 'getPosition',
        'preorder' => 'getPreorder',
        'quantity' => 'getQuantity',
        'schedules' => 'getSchedules',
        'total_cost' => 'getTotalCost',
        'total_cost_with_discount' => 'getTotalCostWithDiscount',
        'unit_cost' => 'getUnitCost',
        'unit_cost_with_discount' => 'getUnitCostWithDiscount',
        'upsell' => 'getUpsell',
        'variations' => 'getVariations',
        'view_url' => 'getViewUrl'
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
        $this->container['arbitrary_unit_cost'] = isset($data['arbitrary_unit_cost']) ? $data['arbitrary_unit_cost'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['auto_order_schedule'] = isset($data['auto_order_schedule']) ? $data['auto_order_schedule'] : null;
        $this->container['default_image_url'] = isset($data['default_image_url']) ? $data['default_image_url'] : null;
        $this->container['default_thumbnail_url'] = isset($data['default_thumbnail_url']) ? $data['default_thumbnail_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['extended_description'] = isset($data['extended_description']) ? $data['extended_description'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['item_oid'] = isset($data['item_oid']) ? $data['item_oid'] : null;
        $this->container['kit'] = isset($data['kit']) ? $data['kit'] : null;
        $this->container['kit_component_options'] = isset($data['kit_component_options']) ? $data['kit_component_options'] : null;
        $this->container['manufacturer_suggested_retail_price'] = isset($data['manufacturer_suggested_retail_price']) ? $data['manufacturer_suggested_retail_price'] : null;
        $this->container['maximum_quantity'] = isset($data['maximum_quantity']) ? $data['maximum_quantity'] : null;
        $this->container['minimum_quantity'] = isset($data['minimum_quantity']) ? $data['minimum_quantity'] : null;
        $this->container['multimedia'] = isset($data['multimedia']) ? $data['multimedia'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['phsyical'] = isset($data['phsyical']) ? $data['phsyical'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['preorder'] = isset($data['preorder']) ? $data['preorder'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['schedules'] = isset($data['schedules']) ? $data['schedules'] : null;
        $this->container['total_cost'] = isset($data['total_cost']) ? $data['total_cost'] : null;
        $this->container['total_cost_with_discount'] = isset($data['total_cost_with_discount']) ? $data['total_cost_with_discount'] : null;
        $this->container['unit_cost'] = isset($data['unit_cost']) ? $data['unit_cost'] : null;
        $this->container['unit_cost_with_discount'] = isset($data['unit_cost_with_discount']) ? $data['unit_cost_with_discount'] : null;
        $this->container['upsell'] = isset($data['upsell']) ? $data['upsell'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['view_url'] = isset($data['view_url']) ? $data['view_url'] : null;
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
     * Gets arbitrary_unit_cost
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getArbitraryUnitCost()
    {
        return $this->container['arbitrary_unit_cost'];
    }

    /**
     * Sets arbitrary_unit_cost
     *
     * @param \ultracart\v2\models\Currency $arbitrary_unit_cost arbitrary_unit_cost
     *
     * @return $this
     */
    public function setArbitraryUnitCost($arbitrary_unit_cost)
    {
        $this->container['arbitrary_unit_cost'] = $arbitrary_unit_cost;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \ultracart\v2\models\CartItemAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \ultracart\v2\models\CartItemAttribute[] $attributes Attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets auto_order_schedule
     *
     * @return string
     */
    public function getAutoOrderSchedule()
    {
        return $this->container['auto_order_schedule'];
    }

    /**
     * Sets auto_order_schedule
     *
     * @param string $auto_order_schedule Auto order schedule the customer selected
     *
     * @return $this
     */
    public function setAutoOrderSchedule($auto_order_schedule)
    {
        $this->container['auto_order_schedule'] = $auto_order_schedule;

        return $this;
    }

    /**
     * Gets default_image_url
     *
     * @return string
     */
    public function getDefaultImageUrl()
    {
        return $this->container['default_image_url'];
    }

    /**
     * Sets default_image_url
     *
     * @param string $default_image_url URL to the default multimedia image
     *
     * @return $this
     */
    public function setDefaultImageUrl($default_image_url)
    {
        $this->container['default_image_url'] = $default_image_url;

        return $this;
    }

    /**
     * Gets default_thumbnail_url
     *
     * @return string
     */
    public function getDefaultThumbnailUrl()
    {
        return $this->container['default_thumbnail_url'];
    }

    /**
     * Sets default_thumbnail_url
     *
     * @param string $default_thumbnail_url URL to the default multimedia thumbnail
     *
     * @return $this
     */
    public function setDefaultThumbnailUrl($default_thumbnail_url)
    {
        $this->container['default_thumbnail_url'] = $default_thumbnail_url;

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
     * @param string $description Description of the item
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \ultracart\v2\models\Currency $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets extended_description
     *
     * @return string
     */
    public function getExtendedDescription()
    {
        return $this->container['extended_description'];
    }

    /**
     * Sets extended_description
     *
     * @param string $extended_description Extended description of the item
     *
     * @return $this
     */
    public function setExtendedDescription($extended_description)
    {
        $this->container['extended_description'] = $extended_description;

        return $this;
    }

    /**
     * Gets item_id
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string $item_id Item ID
     *
     * @return $this
     */
    public function setItemId($item_id)
    {
        $this->container['item_id'] = $item_id;

        return $this;
    }

    /**
     * Gets item_oid
     *
     * @return int
     */
    public function getItemOid()
    {
        return $this->container['item_oid'];
    }

    /**
     * Sets item_oid
     *
     * @param int $item_oid Item object identifier
     *
     * @return $this
     */
    public function setItemOid($item_oid)
    {
        $this->container['item_oid'] = $item_oid;

        return $this;
    }

    /**
     * Gets kit
     *
     * @return bool
     */
    public function getKit()
    {
        return $this->container['kit'];
    }

    /**
     * Sets kit
     *
     * @param bool $kit True if this item is a kit
     *
     * @return $this
     */
    public function setKit($kit)
    {
        $this->container['kit'] = $kit;

        return $this;
    }

    /**
     * Gets kit_component_options
     *
     * @return \ultracart\v2\models\CartKitComponentOption[]
     */
    public function getKitComponentOptions()
    {
        return $this->container['kit_component_options'];
    }

    /**
     * Sets kit_component_options
     *
     * @param \ultracart\v2\models\CartKitComponentOption[] $kit_component_options Options associated with the kit components
     *
     * @return $this
     */
    public function setKitComponentOptions($kit_component_options)
    {
        $this->container['kit_component_options'] = $kit_component_options;

        return $this;
    }

    /**
     * Gets manufacturer_suggested_retail_price
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getManufacturerSuggestedRetailPrice()
    {
        return $this->container['manufacturer_suggested_retail_price'];
    }

    /**
     * Sets manufacturer_suggested_retail_price
     *
     * @param \ultracart\v2\models\Currency $manufacturer_suggested_retail_price manufacturer_suggested_retail_price
     *
     * @return $this
     */
    public function setManufacturerSuggestedRetailPrice($manufacturer_suggested_retail_price)
    {
        $this->container['manufacturer_suggested_retail_price'] = $manufacturer_suggested_retail_price;

        return $this;
    }

    /**
     * Gets maximum_quantity
     *
     * @return float
     */
    public function getMaximumQuantity()
    {
        return $this->container['maximum_quantity'];
    }

    /**
     * Sets maximum_quantity
     *
     * @param float $maximum_quantity Maximum quantity the customer can purchase
     *
     * @return $this
     */
    public function setMaximumQuantity($maximum_quantity)
    {
        $this->container['maximum_quantity'] = $maximum_quantity;

        return $this;
    }

    /**
     * Gets minimum_quantity
     *
     * @return float
     */
    public function getMinimumQuantity()
    {
        return $this->container['minimum_quantity'];
    }

    /**
     * Sets minimum_quantity
     *
     * @param float $minimum_quantity Minimum quantity the customer can purchase
     *
     * @return $this
     */
    public function setMinimumQuantity($minimum_quantity)
    {
        $this->container['minimum_quantity'] = $minimum_quantity;

        return $this;
    }

    /**
     * Gets multimedia
     *
     * @return \ultracart\v2\models\CartItemMultimedia[]
     */
    public function getMultimedia()
    {
        return $this->container['multimedia'];
    }

    /**
     * Sets multimedia
     *
     * @param \ultracart\v2\models\CartItemMultimedia[] $multimedia Multimedia
     *
     * @return $this
     */
    public function setMultimedia($multimedia)
    {
        $this->container['multimedia'] = $multimedia;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \ultracart\v2\models\CartItemOption[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \ultracart\v2\models\CartItemOption[] $options Options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets phsyical
     *
     * @return \ultracart\v2\models\CartItemPhysical
     */
    public function getPhsyical()
    {
        return $this->container['phsyical'];
    }

    /**
     * Sets phsyical
     *
     * @param \ultracart\v2\models\CartItemPhysical $phsyical phsyical
     *
     * @return $this
     */
    public function setPhsyical($phsyical)
    {
        $this->container['phsyical'] = $phsyical;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position of the item in the cart
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets preorder
     *
     * @return bool
     */
    public function getPreorder()
    {
        return $this->container['preorder'];
    }

    /**
     * Sets preorder
     *
     * @param bool $preorder True if this item is on pre-order
     *
     * @return $this
     */
    public function setPreorder($preorder)
    {
        $this->container['preorder'] = $preorder;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets schedules
     *
     * @return string[]
     */
    public function getSchedules()
    {
        return $this->container['schedules'];
    }

    /**
     * Sets schedules
     *
     * @param string[] $schedules Customer selectable auto order schedules
     *
     * @return $this
     */
    public function setSchedules($schedules)
    {
        $this->container['schedules'] = $schedules;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param \ultracart\v2\models\Currency $total_cost total_cost
     *
     * @return $this
     */
    public function setTotalCost($total_cost)
    {
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets total_cost_with_discount
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getTotalCostWithDiscount()
    {
        return $this->container['total_cost_with_discount'];
    }

    /**
     * Sets total_cost_with_discount
     *
     * @param \ultracart\v2\models\Currency $total_cost_with_discount total_cost_with_discount
     *
     * @return $this
     */
    public function setTotalCostWithDiscount($total_cost_with_discount)
    {
        $this->container['total_cost_with_discount'] = $total_cost_with_discount;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param \ultracart\v2\models\Currency $unit_cost unit_cost
     *
     * @return $this
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

        return $this;
    }

    /**
     * Gets unit_cost_with_discount
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getUnitCostWithDiscount()
    {
        return $this->container['unit_cost_with_discount'];
    }

    /**
     * Sets unit_cost_with_discount
     *
     * @param \ultracart\v2\models\Currency $unit_cost_with_discount unit_cost_with_discount
     *
     * @return $this
     */
    public function setUnitCostWithDiscount($unit_cost_with_discount)
    {
        $this->container['unit_cost_with_discount'] = $unit_cost_with_discount;

        return $this;
    }

    /**
     * Gets upsell
     *
     * @return bool
     */
    public function getUpsell()
    {
        return $this->container['upsell'];
    }

    /**
     * Sets upsell
     *
     * @param bool $upsell True if this item was added to the cart as part of an upsell
     *
     * @return $this
     */
    public function setUpsell($upsell)
    {
        $this->container['upsell'] = $upsell;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return \ultracart\v2\models\CartItemVariationSelection[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \ultracart\v2\models\CartItemVariationSelection[] $variations Variations
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets view_url
     *
     * @return string
     */
    public function getViewUrl()
    {
        return $this->container['view_url'];
    }

    /**
     * Sets view_url
     *
     * @param string $view_url URL to view the product on the site
     *
     * @return $this
     */
    public function setViewUrl($view_url)
    {
        $this->container['view_url'] = $view_url;

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


