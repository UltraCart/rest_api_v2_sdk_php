<?php
/**
 * ItemShippingMethod
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\admin\v2\swagger
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\admin\v2\models;

use \ArrayAccess;

/**
 * ItemShippingMethod Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2\swagger
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemShippingMethod implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemShippingMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'cost' => 'double',
        'each_additional_item_markup' => 'double',
        'filter_to_if_available' => 'bool',
        'first_item_markup' => 'double',
        'fixed_shipping_cost' => 'double',
        'flat_fee_markup' => 'double',
        'free_shipping' => 'bool',
        'per_item_fee_markup' => 'double',
        'percentage_markup' => 'double',
        'percentage_of_item_markup' => 'double',
        'relax_restrictions_on_upsell' => 'bool',
        'shipping_method' => 'string',
        'shipping_method_oid' => 'int',
        'shipping_method_validity' => 'string',
        'signature_required' => 'bool'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'cost' => 'cost',
        'each_additional_item_markup' => 'each_additional_item_markup',
        'filter_to_if_available' => 'filter_to_if_available',
        'first_item_markup' => 'first_item_markup',
        'fixed_shipping_cost' => 'fixed_shipping_cost',
        'flat_fee_markup' => 'flat_fee_markup',
        'free_shipping' => 'free_shipping',
        'per_item_fee_markup' => 'per_item_fee_markup',
        'percentage_markup' => 'percentage_markup',
        'percentage_of_item_markup' => 'percentage_of_item_markup',
        'relax_restrictions_on_upsell' => 'relax_restrictions_on_upsell',
        'shipping_method' => 'shipping_method',
        'shipping_method_oid' => 'shipping_method_oid',
        'shipping_method_validity' => 'shipping_method_validity',
        'signature_required' => 'signature_required'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'cost' => 'setCost',
        'each_additional_item_markup' => 'setEachAdditionalItemMarkup',
        'filter_to_if_available' => 'setFilterToIfAvailable',
        'first_item_markup' => 'setFirstItemMarkup',
        'fixed_shipping_cost' => 'setFixedShippingCost',
        'flat_fee_markup' => 'setFlatFeeMarkup',
        'free_shipping' => 'setFreeShipping',
        'per_item_fee_markup' => 'setPerItemFeeMarkup',
        'percentage_markup' => 'setPercentageMarkup',
        'percentage_of_item_markup' => 'setPercentageOfItemMarkup',
        'relax_restrictions_on_upsell' => 'setRelaxRestrictionsOnUpsell',
        'shipping_method' => 'setShippingMethod',
        'shipping_method_oid' => 'setShippingMethodOid',
        'shipping_method_validity' => 'setShippingMethodValidity',
        'signature_required' => 'setSignatureRequired'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'cost' => 'getCost',
        'each_additional_item_markup' => 'getEachAdditionalItemMarkup',
        'filter_to_if_available' => 'getFilterToIfAvailable',
        'first_item_markup' => 'getFirstItemMarkup',
        'fixed_shipping_cost' => 'getFixedShippingCost',
        'flat_fee_markup' => 'getFlatFeeMarkup',
        'free_shipping' => 'getFreeShipping',
        'per_item_fee_markup' => 'getPerItemFeeMarkup',
        'percentage_markup' => 'getPercentageMarkup',
        'percentage_of_item_markup' => 'getPercentageOfItemMarkup',
        'relax_restrictions_on_upsell' => 'getRelaxRestrictionsOnUpsell',
        'shipping_method' => 'getShippingMethod',
        'shipping_method_oid' => 'getShippingMethodOid',
        'shipping_method_validity' => 'getShippingMethodValidity',
        'signature_required' => 'getSignatureRequired'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['each_additional_item_markup'] = isset($data['each_additional_item_markup']) ? $data['each_additional_item_markup'] : null;
        $this->container['filter_to_if_available'] = isset($data['filter_to_if_available']) ? $data['filter_to_if_available'] : null;
        $this->container['first_item_markup'] = isset($data['first_item_markup']) ? $data['first_item_markup'] : null;
        $this->container['fixed_shipping_cost'] = isset($data['fixed_shipping_cost']) ? $data['fixed_shipping_cost'] : null;
        $this->container['flat_fee_markup'] = isset($data['flat_fee_markup']) ? $data['flat_fee_markup'] : null;
        $this->container['free_shipping'] = isset($data['free_shipping']) ? $data['free_shipping'] : null;
        $this->container['per_item_fee_markup'] = isset($data['per_item_fee_markup']) ? $data['per_item_fee_markup'] : null;
        $this->container['percentage_markup'] = isset($data['percentage_markup']) ? $data['percentage_markup'] : null;
        $this->container['percentage_of_item_markup'] = isset($data['percentage_of_item_markup']) ? $data['percentage_of_item_markup'] : null;
        $this->container['relax_restrictions_on_upsell'] = isset($data['relax_restrictions_on_upsell']) ? $data['relax_restrictions_on_upsell'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['shipping_method_oid'] = isset($data['shipping_method_oid']) ? $data['shipping_method_oid'] : null;
        $this->container['shipping_method_validity'] = isset($data['shipping_method_validity']) ? $data['shipping_method_validity'] : null;
        $this->container['signature_required'] = isset($data['signature_required']) ? $data['signature_required'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets cost
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param double $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets each_additional_item_markup
     * @return double
     */
    public function getEachAdditionalItemMarkup()
    {
        return $this->container['each_additional_item_markup'];
    }

    /**
     * Sets each_additional_item_markup
     * @param double $each_additional_item_markup
     * @return $this
     */
    public function setEachAdditionalItemMarkup($each_additional_item_markup)
    {
        $this->container['each_additional_item_markup'] = $each_additional_item_markup;

        return $this;
    }

    /**
     * Gets filter_to_if_available
     * @return bool
     */
    public function getFilterToIfAvailable()
    {
        return $this->container['filter_to_if_available'];
    }

    /**
     * Sets filter_to_if_available
     * @param bool $filter_to_if_available
     * @return $this
     */
    public function setFilterToIfAvailable($filter_to_if_available)
    {
        $this->container['filter_to_if_available'] = $filter_to_if_available;

        return $this;
    }

    /**
     * Gets first_item_markup
     * @return double
     */
    public function getFirstItemMarkup()
    {
        return $this->container['first_item_markup'];
    }

    /**
     * Sets first_item_markup
     * @param double $first_item_markup
     * @return $this
     */
    public function setFirstItemMarkup($first_item_markup)
    {
        $this->container['first_item_markup'] = $first_item_markup;

        return $this;
    }

    /**
     * Gets fixed_shipping_cost
     * @return double
     */
    public function getFixedShippingCost()
    {
        return $this->container['fixed_shipping_cost'];
    }

    /**
     * Sets fixed_shipping_cost
     * @param double $fixed_shipping_cost
     * @return $this
     */
    public function setFixedShippingCost($fixed_shipping_cost)
    {
        $this->container['fixed_shipping_cost'] = $fixed_shipping_cost;

        return $this;
    }

    /**
     * Gets flat_fee_markup
     * @return double
     */
    public function getFlatFeeMarkup()
    {
        return $this->container['flat_fee_markup'];
    }

    /**
     * Sets flat_fee_markup
     * @param double $flat_fee_markup
     * @return $this
     */
    public function setFlatFeeMarkup($flat_fee_markup)
    {
        $this->container['flat_fee_markup'] = $flat_fee_markup;

        return $this;
    }

    /**
     * Gets free_shipping
     * @return bool
     */
    public function getFreeShipping()
    {
        return $this->container['free_shipping'];
    }

    /**
     * Sets free_shipping
     * @param bool $free_shipping
     * @return $this
     */
    public function setFreeShipping($free_shipping)
    {
        $this->container['free_shipping'] = $free_shipping;

        return $this;
    }

    /**
     * Gets per_item_fee_markup
     * @return double
     */
    public function getPerItemFeeMarkup()
    {
        return $this->container['per_item_fee_markup'];
    }

    /**
     * Sets per_item_fee_markup
     * @param double $per_item_fee_markup
     * @return $this
     */
    public function setPerItemFeeMarkup($per_item_fee_markup)
    {
        $this->container['per_item_fee_markup'] = $per_item_fee_markup;

        return $this;
    }

    /**
     * Gets percentage_markup
     * @return double
     */
    public function getPercentageMarkup()
    {
        return $this->container['percentage_markup'];
    }

    /**
     * Sets percentage_markup
     * @param double $percentage_markup
     * @return $this
     */
    public function setPercentageMarkup($percentage_markup)
    {
        $this->container['percentage_markup'] = $percentage_markup;

        return $this;
    }

    /**
     * Gets percentage_of_item_markup
     * @return double
     */
    public function getPercentageOfItemMarkup()
    {
        return $this->container['percentage_of_item_markup'];
    }

    /**
     * Sets percentage_of_item_markup
     * @param double $percentage_of_item_markup
     * @return $this
     */
    public function setPercentageOfItemMarkup($percentage_of_item_markup)
    {
        $this->container['percentage_of_item_markup'] = $percentage_of_item_markup;

        return $this;
    }

    /**
     * Gets relax_restrictions_on_upsell
     * @return bool
     */
    public function getRelaxRestrictionsOnUpsell()
    {
        return $this->container['relax_restrictions_on_upsell'];
    }

    /**
     * Sets relax_restrictions_on_upsell
     * @param bool $relax_restrictions_on_upsell
     * @return $this
     */
    public function setRelaxRestrictionsOnUpsell($relax_restrictions_on_upsell)
    {
        $this->container['relax_restrictions_on_upsell'] = $relax_restrictions_on_upsell;

        return $this;
    }

    /**
     * Gets shipping_method
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     * @param string $shipping_method
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_method_oid
     * @return int
     */
    public function getShippingMethodOid()
    {
        return $this->container['shipping_method_oid'];
    }

    /**
     * Sets shipping_method_oid
     * @param int $shipping_method_oid
     * @return $this
     */
    public function setShippingMethodOid($shipping_method_oid)
    {
        $this->container['shipping_method_oid'] = $shipping_method_oid;

        return $this;
    }

    /**
     * Gets shipping_method_validity
     * @return string
     */
    public function getShippingMethodValidity()
    {
        return $this->container['shipping_method_validity'];
    }

    /**
     * Sets shipping_method_validity
     * @param string $shipping_method_validity
     * @return $this
     */
    public function setShippingMethodValidity($shipping_method_validity)
    {
        $this->container['shipping_method_validity'] = $shipping_method_validity;

        return $this;
    }

    /**
     * Gets signature_required
     * @return bool
     */
    public function getSignatureRequired()
    {
        return $this->container['signature_required'];
    }

    /**
     * Sets signature_required
     * @param bool $signature_required
     * @return $this
     */
    public function setSignatureRequired($signature_required)
    {
        $this->container['signature_required'] = $signature_required;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ultracart\admin\v2\swagger\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\admin\v2\swagger\ObjectSerializer::sanitizeForSerialization($this));
    }
}


