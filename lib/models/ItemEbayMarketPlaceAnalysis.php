<?php
/**
 * ItemEbayMarketPlaceAnalysis
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * ItemEbayMarketPlaceAnalysis Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemEbayMarketPlaceAnalysis implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemEbayMarketPlaceAnalysis';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adjusted_price' => 'float',
        'adjusted_shipping' => 'float',
        'adjusted_total' => 'float',
        'cogs' => 'float',
        'final_value_fee' => 'float',
        'minimum_advertised_price' => 'float',
        'other_listings' => '\ultracart\v2\models\ItemEbayMarketListing[]',
        'our_listing' => '\ultracart\v2\models\ItemEbayMarketListing',
        'overhead' => 'float',
        'profit_potential' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adjusted_price' => null,
        'adjusted_shipping' => null,
        'adjusted_total' => null,
        'cogs' => null,
        'final_value_fee' => null,
        'minimum_advertised_price' => null,
        'other_listings' => null,
        'our_listing' => null,
        'overhead' => null,
        'profit_potential' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'adjusted_price' => 'adjusted_price',
        'adjusted_shipping' => 'adjusted_shipping',
        'adjusted_total' => 'adjusted_total',
        'cogs' => 'cogs',
        'final_value_fee' => 'final_value_fee',
        'minimum_advertised_price' => 'minimum_advertised_price',
        'other_listings' => 'other_listings',
        'our_listing' => 'our_listing',
        'overhead' => 'overhead',
        'profit_potential' => 'profit_potential'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adjusted_price' => 'setAdjustedPrice',
        'adjusted_shipping' => 'setAdjustedShipping',
        'adjusted_total' => 'setAdjustedTotal',
        'cogs' => 'setCogs',
        'final_value_fee' => 'setFinalValueFee',
        'minimum_advertised_price' => 'setMinimumAdvertisedPrice',
        'other_listings' => 'setOtherListings',
        'our_listing' => 'setOurListing',
        'overhead' => 'setOverhead',
        'profit_potential' => 'setProfitPotential'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adjusted_price' => 'getAdjustedPrice',
        'adjusted_shipping' => 'getAdjustedShipping',
        'adjusted_total' => 'getAdjustedTotal',
        'cogs' => 'getCogs',
        'final_value_fee' => 'getFinalValueFee',
        'minimum_advertised_price' => 'getMinimumAdvertisedPrice',
        'other_listings' => 'getOtherListings',
        'our_listing' => 'getOurListing',
        'overhead' => 'getOverhead',
        'profit_potential' => 'getProfitPotential'
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
        return self::$openAPIModelName;
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
        $this->container['adjusted_price'] = $data['adjusted_price'] ?? null;
        $this->container['adjusted_shipping'] = $data['adjusted_shipping'] ?? null;
        $this->container['adjusted_total'] = $data['adjusted_total'] ?? null;
        $this->container['cogs'] = $data['cogs'] ?? null;
        $this->container['final_value_fee'] = $data['final_value_fee'] ?? null;
        $this->container['minimum_advertised_price'] = $data['minimum_advertised_price'] ?? null;
        $this->container['other_listings'] = $data['other_listings'] ?? null;
        $this->container['our_listing'] = $data['our_listing'] ?? null;
        $this->container['overhead'] = $data['overhead'] ?? null;
        $this->container['profit_potential'] = $data['profit_potential'] ?? null;
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
     * Gets adjusted_price
     *
     * @return float|null
     */
    public function getAdjustedPrice()
    {
        return $this->container['adjusted_price'];
    }

    /**
     * Sets adjusted_price
     *
     * @param float|null $adjusted_price Adjusted price
     *
     * @return self
     */
    public function setAdjustedPrice($adjusted_price)
    {
        $this->container['adjusted_price'] = $adjusted_price;

        return $this;
    }

    /**
     * Gets adjusted_shipping
     *
     * @return float|null
     */
    public function getAdjustedShipping()
    {
        return $this->container['adjusted_shipping'];
    }

    /**
     * Sets adjusted_shipping
     *
     * @param float|null $adjusted_shipping Adjusted shipping
     *
     * @return self
     */
    public function setAdjustedShipping($adjusted_shipping)
    {
        $this->container['adjusted_shipping'] = $adjusted_shipping;

        return $this;
    }

    /**
     * Gets adjusted_total
     *
     * @return float|null
     */
    public function getAdjustedTotal()
    {
        return $this->container['adjusted_total'];
    }

    /**
     * Sets adjusted_total
     *
     * @param float|null $adjusted_total Adjusted total
     *
     * @return self
     */
    public function setAdjustedTotal($adjusted_total)
    {
        $this->container['adjusted_total'] = $adjusted_total;

        return $this;
    }

    /**
     * Gets cogs
     *
     * @return float|null
     */
    public function getCogs()
    {
        return $this->container['cogs'];
    }

    /**
     * Sets cogs
     *
     * @param float|null $cogs Cost of goods sold
     *
     * @return self
     */
    public function setCogs($cogs)
    {
        $this->container['cogs'] = $cogs;

        return $this;
    }

    /**
     * Gets final_value_fee
     *
     * @return float|null
     */
    public function getFinalValueFee()
    {
        return $this->container['final_value_fee'];
    }

    /**
     * Sets final_value_fee
     *
     * @param float|null $final_value_fee Final value fee
     *
     * @return self
     */
    public function setFinalValueFee($final_value_fee)
    {
        $this->container['final_value_fee'] = $final_value_fee;

        return $this;
    }

    /**
     * Gets minimum_advertised_price
     *
     * @return float|null
     */
    public function getMinimumAdvertisedPrice()
    {
        return $this->container['minimum_advertised_price'];
    }

    /**
     * Sets minimum_advertised_price
     *
     * @param float|null $minimum_advertised_price Minimum advertised price
     *
     * @return self
     */
    public function setMinimumAdvertisedPrice($minimum_advertised_price)
    {
        $this->container['minimum_advertised_price'] = $minimum_advertised_price;

        return $this;
    }

    /**
     * Gets other_listings
     *
     * @return \ultracart\v2\models\ItemEbayMarketListing[]|null
     */
    public function getOtherListings()
    {
        return $this->container['other_listings'];
    }

    /**
     * Sets other_listings
     *
     * @param \ultracart\v2\models\ItemEbayMarketListing[]|null $other_listings Other listings
     *
     * @return self
     */
    public function setOtherListings($other_listings)
    {
        $this->container['other_listings'] = $other_listings;

        return $this;
    }

    /**
     * Gets our_listing
     *
     * @return \ultracart\v2\models\ItemEbayMarketListing|null
     */
    public function getOurListing()
    {
        return $this->container['our_listing'];
    }

    /**
     * Sets our_listing
     *
     * @param \ultracart\v2\models\ItemEbayMarketListing|null $our_listing our_listing
     *
     * @return self
     */
    public function setOurListing($our_listing)
    {
        $this->container['our_listing'] = $our_listing;

        return $this;
    }

    /**
     * Gets overhead
     *
     * @return float|null
     */
    public function getOverhead()
    {
        return $this->container['overhead'];
    }

    /**
     * Sets overhead
     *
     * @param float|null $overhead Overhead
     *
     * @return self
     */
    public function setOverhead($overhead)
    {
        $this->container['overhead'] = $overhead;

        return $this;
    }

    /**
     * Gets profit_potential
     *
     * @return float|null
     */
    public function getProfitPotential()
    {
        return $this->container['profit_potential'];
    }

    /**
     * Sets profit_potential
     *
     * @param float|null $profit_potential Profit potential
     *
     * @return self
     */
    public function setProfitPotential($profit_potential)
    {
        $this->container['profit_potential'] = $profit_potential;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


