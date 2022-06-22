<?php
/**
 * CustomerEditorValues
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
 * CustomerEditorValues Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerEditorValues implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerEditorValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'affiliates' => '\ultracart\v2\models\CustomerAffiliate[]',
        'card_exp_months' => 'string[]',
        'card_exp_years' => 'string[]',
        'card_types' => 'string[]',
        'countries' => '\ultracart\v2\models\Country[]',
        'loyalty_program_type' => 'string',
        'qb_classes' => 'string[]',
        'sales_rep_codes' => 'string[]',
        'state_optional_countries' => '\ultracart\v2\models\Country[]',
        'terms' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'affiliates' => null,
        'card_exp_months' => null,
        'card_exp_years' => null,
        'card_types' => null,
        'countries' => null,
        'loyalty_program_type' => null,
        'qb_classes' => null,
        'sales_rep_codes' => null,
        'state_optional_countries' => null,
        'terms' => null
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
        'affiliates' => 'affiliates',
        'card_exp_months' => 'card_exp_months',
        'card_exp_years' => 'card_exp_years',
        'card_types' => 'card_types',
        'countries' => 'countries',
        'loyalty_program_type' => 'loyalty_program_type',
        'qb_classes' => 'qb_classes',
        'sales_rep_codes' => 'sales_rep_codes',
        'state_optional_countries' => 'state_optional_countries',
        'terms' => 'terms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'affiliates' => 'setAffiliates',
        'card_exp_months' => 'setCardExpMonths',
        'card_exp_years' => 'setCardExpYears',
        'card_types' => 'setCardTypes',
        'countries' => 'setCountries',
        'loyalty_program_type' => 'setLoyaltyProgramType',
        'qb_classes' => 'setQbClasses',
        'sales_rep_codes' => 'setSalesRepCodes',
        'state_optional_countries' => 'setStateOptionalCountries',
        'terms' => 'setTerms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'affiliates' => 'getAffiliates',
        'card_exp_months' => 'getCardExpMonths',
        'card_exp_years' => 'getCardExpYears',
        'card_types' => 'getCardTypes',
        'countries' => 'getCountries',
        'loyalty_program_type' => 'getLoyaltyProgramType',
        'qb_classes' => 'getQbClasses',
        'sales_rep_codes' => 'getSalesRepCodes',
        'state_optional_countries' => 'getStateOptionalCountries',
        'terms' => 'getTerms'
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
        $this->container['affiliates'] = $data['affiliates'] ?? null;
        $this->container['card_exp_months'] = $data['card_exp_months'] ?? null;
        $this->container['card_exp_years'] = $data['card_exp_years'] ?? null;
        $this->container['card_types'] = $data['card_types'] ?? null;
        $this->container['countries'] = $data['countries'] ?? null;
        $this->container['loyalty_program_type'] = $data['loyalty_program_type'] ?? null;
        $this->container['qb_classes'] = $data['qb_classes'] ?? null;
        $this->container['sales_rep_codes'] = $data['sales_rep_codes'] ?? null;
        $this->container['state_optional_countries'] = $data['state_optional_countries'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
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
     * Gets affiliates
     *
     * @return \ultracart\v2\models\CustomerAffiliate[]|null
     */
    public function getAffiliates()
    {
        return $this->container['affiliates'];
    }

    /**
     * Sets affiliates
     *
     * @param \ultracart\v2\models\CustomerAffiliate[]|null $affiliates affiliates
     *
     * @return self
     */
    public function setAffiliates($affiliates)
    {
        $this->container['affiliates'] = $affiliates;

        return $this;
    }

    /**
     * Gets card_exp_months
     *
     * @return string[]|null
     */
    public function getCardExpMonths()
    {
        return $this->container['card_exp_months'];
    }

    /**
     * Sets card_exp_months
     *
     * @param string[]|null $card_exp_months card_exp_months
     *
     * @return self
     */
    public function setCardExpMonths($card_exp_months)
    {
        $this->container['card_exp_months'] = $card_exp_months;

        return $this;
    }

    /**
     * Gets card_exp_years
     *
     * @return string[]|null
     */
    public function getCardExpYears()
    {
        return $this->container['card_exp_years'];
    }

    /**
     * Sets card_exp_years
     *
     * @param string[]|null $card_exp_years card_exp_years
     *
     * @return self
     */
    public function setCardExpYears($card_exp_years)
    {
        $this->container['card_exp_years'] = $card_exp_years;

        return $this;
    }

    /**
     * Gets card_types
     *
     * @return string[]|null
     */
    public function getCardTypes()
    {
        return $this->container['card_types'];
    }

    /**
     * Sets card_types
     *
     * @param string[]|null $card_types card_types
     *
     * @return self
     */
    public function setCardTypes($card_types)
    {
        $this->container['card_types'] = $card_types;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \ultracart\v2\models\Country[]|null
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \ultracart\v2\models\Country[]|null $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets loyalty_program_type
     *
     * @return string|null
     */
    public function getLoyaltyProgramType()
    {
        return $this->container['loyalty_program_type'];
    }

    /**
     * Sets loyalty_program_type
     *
     * @param string|null $loyalty_program_type loyalty_program_type
     *
     * @return self
     */
    public function setLoyaltyProgramType($loyalty_program_type)
    {
        $this->container['loyalty_program_type'] = $loyalty_program_type;

        return $this;
    }

    /**
     * Gets qb_classes
     *
     * @return string[]|null
     */
    public function getQbClasses()
    {
        return $this->container['qb_classes'];
    }

    /**
     * Sets qb_classes
     *
     * @param string[]|null $qb_classes qb_classes
     *
     * @return self
     */
    public function setQbClasses($qb_classes)
    {
        $this->container['qb_classes'] = $qb_classes;

        return $this;
    }

    /**
     * Gets sales_rep_codes
     *
     * @return string[]|null
     */
    public function getSalesRepCodes()
    {
        return $this->container['sales_rep_codes'];
    }

    /**
     * Sets sales_rep_codes
     *
     * @param string[]|null $sales_rep_codes sales_rep_codes
     *
     * @return self
     */
    public function setSalesRepCodes($sales_rep_codes)
    {
        $this->container['sales_rep_codes'] = $sales_rep_codes;

        return $this;
    }

    /**
     * Gets state_optional_countries
     *
     * @return \ultracart\v2\models\Country[]|null
     */
    public function getStateOptionalCountries()
    {
        return $this->container['state_optional_countries'];
    }

    /**
     * Sets state_optional_countries
     *
     * @param \ultracart\v2\models\Country[]|null $state_optional_countries state_optional_countries
     *
     * @return self
     */
    public function setStateOptionalCountries($state_optional_countries)
    {
        $this->container['state_optional_countries'] = $state_optional_countries;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string[]|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string[]|null $terms terms
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

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


