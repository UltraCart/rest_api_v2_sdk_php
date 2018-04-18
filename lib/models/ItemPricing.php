<?php
/**
 * ItemPricing
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
 * ItemPricing Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemPricing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemPricing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_arbitrary_cost' => 'bool',
        'arbitrary_cost_velocity_code' => 'string',
        'automatic_pricing_tier_name' => 'string',
        'automatic_pricing_tier_oid' => 'int',
        'cogs' => 'float',
        'cost' => 'float',
        'currency_code' => 'string',
        'manufacturer_suggested_retail_price' => 'float',
        'maximum_arbitrary_cost' => 'float',
        'minimum_advertised_price' => 'float',
        'minimum_arbitrary_cost' => 'float',
        'mix_and_match_group' => 'string',
        'mix_and_match_group_oid' => 'int',
        'sale_cost' => 'float',
        'sale_end' => 'string',
        'sale_start' => 'string',
        'tiers' => '\ultracart\v2\models\ItemPricingTier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_arbitrary_cost' => null,
        'arbitrary_cost_velocity_code' => null,
        'automatic_pricing_tier_name' => null,
        'automatic_pricing_tier_oid' => 'int32',
        'cogs' => null,
        'cost' => null,
        'currency_code' => null,
        'manufacturer_suggested_retail_price' => null,
        'maximum_arbitrary_cost' => null,
        'minimum_advertised_price' => null,
        'minimum_arbitrary_cost' => null,
        'mix_and_match_group' => null,
        'mix_and_match_group_oid' => 'int32',
        'sale_cost' => null,
        'sale_end' => 'dateTime',
        'sale_start' => 'dateTime',
        'tiers' => null
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
        'allow_arbitrary_cost' => 'allow_arbitrary_cost',
        'arbitrary_cost_velocity_code' => 'arbitrary_cost_velocity_code',
        'automatic_pricing_tier_name' => 'automatic_pricing_tier_name',
        'automatic_pricing_tier_oid' => 'automatic_pricing_tier_oid',
        'cogs' => 'cogs',
        'cost' => 'cost',
        'currency_code' => 'currency_code',
        'manufacturer_suggested_retail_price' => 'manufacturer_suggested_retail_price',
        'maximum_arbitrary_cost' => 'maximum_arbitrary_cost',
        'minimum_advertised_price' => 'minimum_advertised_price',
        'minimum_arbitrary_cost' => 'minimum_arbitrary_cost',
        'mix_and_match_group' => 'mix_and_match_group',
        'mix_and_match_group_oid' => 'mix_and_match_group_oid',
        'sale_cost' => 'sale_cost',
        'sale_end' => 'sale_end',
        'sale_start' => 'sale_start',
        'tiers' => 'tiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_arbitrary_cost' => 'setAllowArbitraryCost',
        'arbitrary_cost_velocity_code' => 'setArbitraryCostVelocityCode',
        'automatic_pricing_tier_name' => 'setAutomaticPricingTierName',
        'automatic_pricing_tier_oid' => 'setAutomaticPricingTierOid',
        'cogs' => 'setCogs',
        'cost' => 'setCost',
        'currency_code' => 'setCurrencyCode',
        'manufacturer_suggested_retail_price' => 'setManufacturerSuggestedRetailPrice',
        'maximum_arbitrary_cost' => 'setMaximumArbitraryCost',
        'minimum_advertised_price' => 'setMinimumAdvertisedPrice',
        'minimum_arbitrary_cost' => 'setMinimumArbitraryCost',
        'mix_and_match_group' => 'setMixAndMatchGroup',
        'mix_and_match_group_oid' => 'setMixAndMatchGroupOid',
        'sale_cost' => 'setSaleCost',
        'sale_end' => 'setSaleEnd',
        'sale_start' => 'setSaleStart',
        'tiers' => 'setTiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_arbitrary_cost' => 'getAllowArbitraryCost',
        'arbitrary_cost_velocity_code' => 'getArbitraryCostVelocityCode',
        'automatic_pricing_tier_name' => 'getAutomaticPricingTierName',
        'automatic_pricing_tier_oid' => 'getAutomaticPricingTierOid',
        'cogs' => 'getCogs',
        'cost' => 'getCost',
        'currency_code' => 'getCurrencyCode',
        'manufacturer_suggested_retail_price' => 'getManufacturerSuggestedRetailPrice',
        'maximum_arbitrary_cost' => 'getMaximumArbitraryCost',
        'minimum_advertised_price' => 'getMinimumAdvertisedPrice',
        'minimum_arbitrary_cost' => 'getMinimumArbitraryCost',
        'mix_and_match_group' => 'getMixAndMatchGroup',
        'mix_and_match_group_oid' => 'getMixAndMatchGroupOid',
        'sale_cost' => 'getSaleCost',
        'sale_end' => 'getSaleEnd',
        'sale_start' => 'getSaleStart',
        'tiers' => 'getTiers'
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
        $this->container['allow_arbitrary_cost'] = isset($data['allow_arbitrary_cost']) ? $data['allow_arbitrary_cost'] : null;
        $this->container['arbitrary_cost_velocity_code'] = isset($data['arbitrary_cost_velocity_code']) ? $data['arbitrary_cost_velocity_code'] : null;
        $this->container['automatic_pricing_tier_name'] = isset($data['automatic_pricing_tier_name']) ? $data['automatic_pricing_tier_name'] : null;
        $this->container['automatic_pricing_tier_oid'] = isset($data['automatic_pricing_tier_oid']) ? $data['automatic_pricing_tier_oid'] : null;
        $this->container['cogs'] = isset($data['cogs']) ? $data['cogs'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['manufacturer_suggested_retail_price'] = isset($data['manufacturer_suggested_retail_price']) ? $data['manufacturer_suggested_retail_price'] : null;
        $this->container['maximum_arbitrary_cost'] = isset($data['maximum_arbitrary_cost']) ? $data['maximum_arbitrary_cost'] : null;
        $this->container['minimum_advertised_price'] = isset($data['minimum_advertised_price']) ? $data['minimum_advertised_price'] : null;
        $this->container['minimum_arbitrary_cost'] = isset($data['minimum_arbitrary_cost']) ? $data['minimum_arbitrary_cost'] : null;
        $this->container['mix_and_match_group'] = isset($data['mix_and_match_group']) ? $data['mix_and_match_group'] : null;
        $this->container['mix_and_match_group_oid'] = isset($data['mix_and_match_group_oid']) ? $data['mix_and_match_group_oid'] : null;
        $this->container['sale_cost'] = isset($data['sale_cost']) ? $data['sale_cost'] : null;
        $this->container['sale_end'] = isset($data['sale_end']) ? $data['sale_end'] : null;
        $this->container['sale_start'] = isset($data['sale_start']) ? $data['sale_start'] : null;
        $this->container['tiers'] = isset($data['tiers']) ? $data['tiers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['arbitrary_cost_velocity_code']) && (strlen($this->container['arbitrary_cost_velocity_code']) > 10000)) {
            $invalidProperties[] = "invalid value for 'arbitrary_cost_velocity_code', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['currency_code']) && (strlen($this->container['currency_code']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency_code', the character length must be smaller than or equal to 3.";
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

        if (strlen($this->container['arbitrary_cost_velocity_code']) > 10000) {
            return false;
        }
        if (strlen($this->container['currency_code']) > 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets allow_arbitrary_cost
     *
     * @return bool
     */
    public function getAllowArbitraryCost()
    {
        return $this->container['allow_arbitrary_cost'];
    }

    /**
     * Sets allow_arbitrary_cost
     *
     * @param bool $allow_arbitrary_cost Allow arbitrary cost
     *
     * @return $this
     */
    public function setAllowArbitraryCost($allow_arbitrary_cost)
    {
        $this->container['allow_arbitrary_cost'] = $allow_arbitrary_cost;

        return $this;
    }

    /**
     * Gets arbitrary_cost_velocity_code
     *
     * @return string
     */
    public function getArbitraryCostVelocityCode()
    {
        return $this->container['arbitrary_cost_velocity_code'];
    }

    /**
     * Sets arbitrary_cost_velocity_code
     *
     * @param string $arbitrary_cost_velocity_code Arbitrary cost velocity code
     *
     * @return $this
     */
    public function setArbitraryCostVelocityCode($arbitrary_cost_velocity_code)
    {
        if (!is_null($arbitrary_cost_velocity_code) && (strlen($arbitrary_cost_velocity_code) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $arbitrary_cost_velocity_code when calling ItemPricing., must be smaller than or equal to 10000.');
        }

        $this->container['arbitrary_cost_velocity_code'] = $arbitrary_cost_velocity_code;

        return $this;
    }

    /**
     * Gets automatic_pricing_tier_name
     *
     * @return string
     */
    public function getAutomaticPricingTierName()
    {
        return $this->container['automatic_pricing_tier_name'];
    }

    /**
     * Sets automatic_pricing_tier_name
     *
     * @param string $automatic_pricing_tier_name Automatic pricing tier name
     *
     * @return $this
     */
    public function setAutomaticPricingTierName($automatic_pricing_tier_name)
    {
        $this->container['automatic_pricing_tier_name'] = $automatic_pricing_tier_name;

        return $this;
    }

    /**
     * Gets automatic_pricing_tier_oid
     *
     * @return int
     */
    public function getAutomaticPricingTierOid()
    {
        return $this->container['automatic_pricing_tier_oid'];
    }

    /**
     * Sets automatic_pricing_tier_oid
     *
     * @param int $automatic_pricing_tier_oid Automatic pricing tier object identifier
     *
     * @return $this
     */
    public function setAutomaticPricingTierOid($automatic_pricing_tier_oid)
    {
        $this->container['automatic_pricing_tier_oid'] = $automatic_pricing_tier_oid;

        return $this;
    }

    /**
     * Gets cogs
     *
     * @return float
     */
    public function getCogs()
    {
        return $this->container['cogs'];
    }

    /**
     * Sets cogs
     *
     * @param float $cogs Cost of goods sold
     *
     * @return $this
     */
    public function setCogs($cogs)
    {
        $this->container['cogs'] = $cogs;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float $cost Cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Currency code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        if (!is_null($currency_code) && (strlen($currency_code) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency_code when calling ItemPricing., must be smaller than or equal to 3.');
        }

        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets manufacturer_suggested_retail_price
     *
     * @return float
     */
    public function getManufacturerSuggestedRetailPrice()
    {
        return $this->container['manufacturer_suggested_retail_price'];
    }

    /**
     * Sets manufacturer_suggested_retail_price
     *
     * @param float $manufacturer_suggested_retail_price Manufacturer suggested retail price
     *
     * @return $this
     */
    public function setManufacturerSuggestedRetailPrice($manufacturer_suggested_retail_price)
    {
        $this->container['manufacturer_suggested_retail_price'] = $manufacturer_suggested_retail_price;

        return $this;
    }

    /**
     * Gets maximum_arbitrary_cost
     *
     * @return float
     */
    public function getMaximumArbitraryCost()
    {
        return $this->container['maximum_arbitrary_cost'];
    }

    /**
     * Sets maximum_arbitrary_cost
     *
     * @param float $maximum_arbitrary_cost Maximum arbitrary cost
     *
     * @return $this
     */
    public function setMaximumArbitraryCost($maximum_arbitrary_cost)
    {
        $this->container['maximum_arbitrary_cost'] = $maximum_arbitrary_cost;

        return $this;
    }

    /**
     * Gets minimum_advertised_price
     *
     * @return float
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->container['minimum_advertised_price'];
    }

    /**
     * Sets minimum_advertised_price
     *
     * @param float $minimum_advertised_price Minimum advertised price
     *
     * @return $this
     */
    public function setMinimumAdvertisedPrice($minimum_advertised_price)
    {
        $this->container['minimum_advertised_price'] = $minimum_advertised_price;

        return $this;
    }

    /**
     * Gets minimum_arbitrary_cost
     *
     * @return float
     */
    public function getMinimumArbitraryCost()
    {
        return $this->container['minimum_arbitrary_cost'];
    }

    /**
     * Sets minimum_arbitrary_cost
     *
     * @param float $minimum_arbitrary_cost Minimum arbitrary cost
     *
     * @return $this
     */
    public function setMinimumArbitraryCost($minimum_arbitrary_cost)
    {
        $this->container['minimum_arbitrary_cost'] = $minimum_arbitrary_cost;

        return $this;
    }

    /**
     * Gets mix_and_match_group
     *
     * @return string
     */
    public function getMixAndMatchGroup()
    {
        return $this->container['mix_and_match_group'];
    }

    /**
     * Sets mix_and_match_group
     *
     * @param string $mix_and_match_group Mix and match group
     *
     * @return $this
     */
    public function setMixAndMatchGroup($mix_and_match_group)
    {
        $this->container['mix_and_match_group'] = $mix_and_match_group;

        return $this;
    }

    /**
     * Gets mix_and_match_group_oid
     *
     * @return int
     */
    public function getMixAndMatchGroupOid()
    {
        return $this->container['mix_and_match_group_oid'];
    }

    /**
     * Sets mix_and_match_group_oid
     *
     * @param int $mix_and_match_group_oid Mix and match group object identifier
     *
     * @return $this
     */
    public function setMixAndMatchGroupOid($mix_and_match_group_oid)
    {
        $this->container['mix_and_match_group_oid'] = $mix_and_match_group_oid;

        return $this;
    }

    /**
     * Gets sale_cost
     *
     * @return float
     */
    public function getSaleCost()
    {
        return $this->container['sale_cost'];
    }

    /**
     * Sets sale_cost
     *
     * @param float $sale_cost Sale cost
     *
     * @return $this
     */
    public function setSaleCost($sale_cost)
    {
        $this->container['sale_cost'] = $sale_cost;

        return $this;
    }

    /**
     * Gets sale_end
     *
     * @return string
     */
    public function getSaleEnd()
    {
        return $this->container['sale_end'];
    }

    /**
     * Sets sale_end
     *
     * @param string $sale_end Sale end
     *
     * @return $this
     */
    public function setSaleEnd($sale_end)
    {
        $this->container['sale_end'] = $sale_end;

        return $this;
    }

    /**
     * Gets sale_start
     *
     * @return string
     */
    public function getSaleStart()
    {
        return $this->container['sale_start'];
    }

    /**
     * Sets sale_start
     *
     * @param string $sale_start Sale start
     *
     * @return $this
     */
    public function setSaleStart($sale_start)
    {
        $this->container['sale_start'] = $sale_start;

        return $this;
    }

    /**
     * Gets tiers
     *
     * @return \ultracart\v2\models\ItemPricingTier[]
     */
    public function getTiers()
    {
        return $this->container['tiers'];
    }

    /**
     * Sets tiers
     *
     * @param \ultracart\v2\models\ItemPricingTier[] $tiers Tiers
     *
     * @return $this
     */
    public function setTiers($tiers)
    {
        $this->container['tiers'] = $tiers;

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


