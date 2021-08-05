<?php
/**
 * PaymentsConfigurationRestrictions
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
 * PaymentsConfigurationRestrictions Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsConfigurationRestrictions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsConfigurationRestrictions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'descriptions' => 'string[]',
        'maximum_subtotal' => 'string',
        'minimum_subtotal' => 'string',
        'payment_method' => 'string',
        'restriction_alaska_hawaii' => 'string',
        'restriction_apo_fpo' => 'string',
        'restriction_canada' => 'string',
        'restriction_continental_us' => 'string',
        'restriction_domestic_only' => 'string',
        'restriction_international_only' => 'string',
        'restriction_po_box' => 'string',
        'restriction_puerto_rico' => 'string',
        'restriction_us_territories' => 'string',
        'themes' => '\ultracart\v2\models\PaymentsConfigurationRestrictionsTheme[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'descriptions' => null,
        'maximum_subtotal' => null,
        'minimum_subtotal' => null,
        'payment_method' => null,
        'restriction_alaska_hawaii' => null,
        'restriction_apo_fpo' => null,
        'restriction_canada' => null,
        'restriction_continental_us' => null,
        'restriction_domestic_only' => null,
        'restriction_international_only' => null,
        'restriction_po_box' => null,
        'restriction_puerto_rico' => null,
        'restriction_us_territories' => null,
        'themes' => null
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
        'descriptions' => 'descriptions',
        'maximum_subtotal' => 'maximum_subtotal',
        'minimum_subtotal' => 'minimum_subtotal',
        'payment_method' => 'payment_method',
        'restriction_alaska_hawaii' => 'restriction_alaska_hawaii',
        'restriction_apo_fpo' => 'restriction_apo_fpo',
        'restriction_canada' => 'restriction_canada',
        'restriction_continental_us' => 'restriction_continental_us',
        'restriction_domestic_only' => 'restriction_domestic_only',
        'restriction_international_only' => 'restriction_international_only',
        'restriction_po_box' => 'restriction_po_box',
        'restriction_puerto_rico' => 'restriction_puerto_rico',
        'restriction_us_territories' => 'restriction_us_territories',
        'themes' => 'themes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'descriptions' => 'setDescriptions',
        'maximum_subtotal' => 'setMaximumSubtotal',
        'minimum_subtotal' => 'setMinimumSubtotal',
        'payment_method' => 'setPaymentMethod',
        'restriction_alaska_hawaii' => 'setRestrictionAlaskaHawaii',
        'restriction_apo_fpo' => 'setRestrictionApoFpo',
        'restriction_canada' => 'setRestrictionCanada',
        'restriction_continental_us' => 'setRestrictionContinentalUs',
        'restriction_domestic_only' => 'setRestrictionDomesticOnly',
        'restriction_international_only' => 'setRestrictionInternationalOnly',
        'restriction_po_box' => 'setRestrictionPoBox',
        'restriction_puerto_rico' => 'setRestrictionPuertoRico',
        'restriction_us_territories' => 'setRestrictionUsTerritories',
        'themes' => 'setThemes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'descriptions' => 'getDescriptions',
        'maximum_subtotal' => 'getMaximumSubtotal',
        'minimum_subtotal' => 'getMinimumSubtotal',
        'payment_method' => 'getPaymentMethod',
        'restriction_alaska_hawaii' => 'getRestrictionAlaskaHawaii',
        'restriction_apo_fpo' => 'getRestrictionApoFpo',
        'restriction_canada' => 'getRestrictionCanada',
        'restriction_continental_us' => 'getRestrictionContinentalUs',
        'restriction_domestic_only' => 'getRestrictionDomesticOnly',
        'restriction_international_only' => 'getRestrictionInternationalOnly',
        'restriction_po_box' => 'getRestrictionPoBox',
        'restriction_puerto_rico' => 'getRestrictionPuertoRico',
        'restriction_us_territories' => 'getRestrictionUsTerritories',
        'themes' => 'getThemes'
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
        $this->container['descriptions'] = isset($data['descriptions']) ? $data['descriptions'] : null;
        $this->container['maximum_subtotal'] = isset($data['maximum_subtotal']) ? $data['maximum_subtotal'] : null;
        $this->container['minimum_subtotal'] = isset($data['minimum_subtotal']) ? $data['minimum_subtotal'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['restriction_alaska_hawaii'] = isset($data['restriction_alaska_hawaii']) ? $data['restriction_alaska_hawaii'] : null;
        $this->container['restriction_apo_fpo'] = isset($data['restriction_apo_fpo']) ? $data['restriction_apo_fpo'] : null;
        $this->container['restriction_canada'] = isset($data['restriction_canada']) ? $data['restriction_canada'] : null;
        $this->container['restriction_continental_us'] = isset($data['restriction_continental_us']) ? $data['restriction_continental_us'] : null;
        $this->container['restriction_domestic_only'] = isset($data['restriction_domestic_only']) ? $data['restriction_domestic_only'] : null;
        $this->container['restriction_international_only'] = isset($data['restriction_international_only']) ? $data['restriction_international_only'] : null;
        $this->container['restriction_po_box'] = isset($data['restriction_po_box']) ? $data['restriction_po_box'] : null;
        $this->container['restriction_puerto_rico'] = isset($data['restriction_puerto_rico']) ? $data['restriction_puerto_rico'] : null;
        $this->container['restriction_us_territories'] = isset($data['restriction_us_territories']) ? $data['restriction_us_territories'] : null;
        $this->container['themes'] = isset($data['themes']) ? $data['themes'] : null;
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
     * Gets descriptions
     *
     * @return string[]
     */
    public function getDescriptions()
    {
        return $this->container['descriptions'];
    }

    /**
     * Sets descriptions
     *
     * @param string[] $descriptions descriptions
     *
     * @return $this
     */
    public function setDescriptions($descriptions)
    {
        $this->container['descriptions'] = $descriptions;

        return $this;
    }

    /**
     * Gets maximum_subtotal
     *
     * @return string
     */
    public function getMaximumSubtotal()
    {
        return $this->container['maximum_subtotal'];
    }

    /**
     * Sets maximum_subtotal
     *
     * @param string $maximum_subtotal Maximum subtotal
     *
     * @return $this
     */
    public function setMaximumSubtotal($maximum_subtotal)
    {
        $this->container['maximum_subtotal'] = $maximum_subtotal;

        return $this;
    }

    /**
     * Gets minimum_subtotal
     *
     * @return string
     */
    public function getMinimumSubtotal()
    {
        return $this->container['minimum_subtotal'];
    }

    /**
     * Sets minimum_subtotal
     *
     * @param string $minimum_subtotal Minimum subtotal
     *
     * @return $this
     */
    public function setMinimumSubtotal($minimum_subtotal)
    {
        $this->container['minimum_subtotal'] = $minimum_subtotal;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Payment method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets restriction_alaska_hawaii
     *
     * @return string
     */
    public function getRestrictionAlaskaHawaii()
    {
        return $this->container['restriction_alaska_hawaii'];
    }

    /**
     * Sets restriction_alaska_hawaii
     *
     * @param string $restriction_alaska_hawaii Alaska and Hawaii restriction
     *
     * @return $this
     */
    public function setRestrictionAlaskaHawaii($restriction_alaska_hawaii)
    {
        $this->container['restriction_alaska_hawaii'] = $restriction_alaska_hawaii;

        return $this;
    }

    /**
     * Gets restriction_apo_fpo
     *
     * @return string
     */
    public function getRestrictionApoFpo()
    {
        return $this->container['restriction_apo_fpo'];
    }

    /**
     * Sets restriction_apo_fpo
     *
     * @param string $restriction_apo_fpo APO/FPO restriction
     *
     * @return $this
     */
    public function setRestrictionApoFpo($restriction_apo_fpo)
    {
        $this->container['restriction_apo_fpo'] = $restriction_apo_fpo;

        return $this;
    }

    /**
     * Gets restriction_canada
     *
     * @return string
     */
    public function getRestrictionCanada()
    {
        return $this->container['restriction_canada'];
    }

    /**
     * Sets restriction_canada
     *
     * @param string $restriction_canada Canada restriction
     *
     * @return $this
     */
    public function setRestrictionCanada($restriction_canada)
    {
        $this->container['restriction_canada'] = $restriction_canada;

        return $this;
    }

    /**
     * Gets restriction_continental_us
     *
     * @return string
     */
    public function getRestrictionContinentalUs()
    {
        return $this->container['restriction_continental_us'];
    }

    /**
     * Sets restriction_continental_us
     *
     * @param string $restriction_continental_us Continental US restriction
     *
     * @return $this
     */
    public function setRestrictionContinentalUs($restriction_continental_us)
    {
        $this->container['restriction_continental_us'] = $restriction_continental_us;

        return $this;
    }

    /**
     * Gets restriction_domestic_only
     *
     * @return string
     */
    public function getRestrictionDomesticOnly()
    {
        return $this->container['restriction_domestic_only'];
    }

    /**
     * Sets restriction_domestic_only
     *
     * @param string $restriction_domestic_only Domestic only restriction
     *
     * @return $this
     */
    public function setRestrictionDomesticOnly($restriction_domestic_only)
    {
        $this->container['restriction_domestic_only'] = $restriction_domestic_only;

        return $this;
    }

    /**
     * Gets restriction_international_only
     *
     * @return string
     */
    public function getRestrictionInternationalOnly()
    {
        return $this->container['restriction_international_only'];
    }

    /**
     * Sets restriction_international_only
     *
     * @param string $restriction_international_only International only restriction
     *
     * @return $this
     */
    public function setRestrictionInternationalOnly($restriction_international_only)
    {
        $this->container['restriction_international_only'] = $restriction_international_only;

        return $this;
    }

    /**
     * Gets restriction_po_box
     *
     * @return string
     */
    public function getRestrictionPoBox()
    {
        return $this->container['restriction_po_box'];
    }

    /**
     * Sets restriction_po_box
     *
     * @param string $restriction_po_box PO Box restriction
     *
     * @return $this
     */
    public function setRestrictionPoBox($restriction_po_box)
    {
        $this->container['restriction_po_box'] = $restriction_po_box;

        return $this;
    }

    /**
     * Gets restriction_puerto_rico
     *
     * @return string
     */
    public function getRestrictionPuertoRico()
    {
        return $this->container['restriction_puerto_rico'];
    }

    /**
     * Sets restriction_puerto_rico
     *
     * @param string $restriction_puerto_rico Puerto Rico restriction
     *
     * @return $this
     */
    public function setRestrictionPuertoRico($restriction_puerto_rico)
    {
        $this->container['restriction_puerto_rico'] = $restriction_puerto_rico;

        return $this;
    }

    /**
     * Gets restriction_us_territories
     *
     * @return string
     */
    public function getRestrictionUsTerritories()
    {
        return $this->container['restriction_us_territories'];
    }

    /**
     * Sets restriction_us_territories
     *
     * @param string $restriction_us_territories US Territories restriction
     *
     * @return $this
     */
    public function setRestrictionUsTerritories($restriction_us_territories)
    {
        $this->container['restriction_us_territories'] = $restriction_us_territories;

        return $this;
    }

    /**
     * Gets themes
     *
     * @return \ultracart\v2\models\PaymentsConfigurationRestrictionsTheme[]
     */
    public function getThemes()
    {
        return $this->container['themes'];
    }

    /**
     * Sets themes
     *
     * @param \ultracart\v2\models\PaymentsConfigurationRestrictionsTheme[] $themes themes
     *
     * @return $this
     */
    public function setThemes($themes)
    {
        $this->container['themes'] = $themes;

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


