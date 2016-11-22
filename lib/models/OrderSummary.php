<?php
/**
 * OrderSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\admin\v2
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
 * OrderSummary Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderSummary implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'other_refunded' => '\ultracart\admin\v2\models\Currency',
        'shipping_handling_refunded' => '\ultracart\admin\v2\models\Currency',
        'shipping_handling_total' => '\ultracart\admin\v2\models\Currency',
        'shipping_handling_total_discount' => '\ultracart\admin\v2\models\Currency',
        'subtotal' => '\ultracart\admin\v2\models\Currency',
        'subtotal_discount' => '\ultracart\admin\v2\models\Currency',
        'subtotal_discount_refunded' => '\ultracart\admin\v2\models\Currency',
        'subtotal_refunded' => '\ultracart\admin\v2\models\Currency',
        'tax' => '\ultracart\admin\v2\models\Currency',
        'tax_refunded' => '\ultracart\admin\v2\models\Currency',
        'taxable_subtotal' => '\ultracart\admin\v2\models\Currency',
        'taxable_subtotal_discount' => '\ultracart\admin\v2\models\Currency',
        'total' => '\ultracart\admin\v2\models\Currency',
        'total_refunded' => '\ultracart\admin\v2\models\Currency'
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
        'other_refunded' => 'other_refunded',
        'shipping_handling_refunded' => 'shipping_handling_refunded',
        'shipping_handling_total' => 'shipping_handling_total',
        'shipping_handling_total_discount' => 'shipping_handling_total_discount',
        'subtotal' => 'subtotal',
        'subtotal_discount' => 'subtotal_discount',
        'subtotal_discount_refunded' => 'subtotal_discount_refunded',
        'subtotal_refunded' => 'subtotal_refunded',
        'tax' => 'tax',
        'tax_refunded' => 'tax_refunded',
        'taxable_subtotal' => 'taxable_subtotal',
        'taxable_subtotal_discount' => 'taxable_subtotal_discount',
        'total' => 'total',
        'total_refunded' => 'total_refunded'
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
        'other_refunded' => 'setOtherRefunded',
        'shipping_handling_refunded' => 'setShippingHandlingRefunded',
        'shipping_handling_total' => 'setShippingHandlingTotal',
        'shipping_handling_total_discount' => 'setShippingHandlingTotalDiscount',
        'subtotal' => 'setSubtotal',
        'subtotal_discount' => 'setSubtotalDiscount',
        'subtotal_discount_refunded' => 'setSubtotalDiscountRefunded',
        'subtotal_refunded' => 'setSubtotalRefunded',
        'tax' => 'setTax',
        'tax_refunded' => 'setTaxRefunded',
        'taxable_subtotal' => 'setTaxableSubtotal',
        'taxable_subtotal_discount' => 'setTaxableSubtotalDiscount',
        'total' => 'setTotal',
        'total_refunded' => 'setTotalRefunded'
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
        'other_refunded' => 'getOtherRefunded',
        'shipping_handling_refunded' => 'getShippingHandlingRefunded',
        'shipping_handling_total' => 'getShippingHandlingTotal',
        'shipping_handling_total_discount' => 'getShippingHandlingTotalDiscount',
        'subtotal' => 'getSubtotal',
        'subtotal_discount' => 'getSubtotalDiscount',
        'subtotal_discount_refunded' => 'getSubtotalDiscountRefunded',
        'subtotal_refunded' => 'getSubtotalRefunded',
        'tax' => 'getTax',
        'tax_refunded' => 'getTaxRefunded',
        'taxable_subtotal' => 'getTaxableSubtotal',
        'taxable_subtotal_discount' => 'getTaxableSubtotalDiscount',
        'total' => 'getTotal',
        'total_refunded' => 'getTotalRefunded'
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
        $this->container['other_refunded'] = isset($data['other_refunded']) ? $data['other_refunded'] : null;
        $this->container['shipping_handling_refunded'] = isset($data['shipping_handling_refunded']) ? $data['shipping_handling_refunded'] : null;
        $this->container['shipping_handling_total'] = isset($data['shipping_handling_total']) ? $data['shipping_handling_total'] : null;
        $this->container['shipping_handling_total_discount'] = isset($data['shipping_handling_total_discount']) ? $data['shipping_handling_total_discount'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['subtotal_discount'] = isset($data['subtotal_discount']) ? $data['subtotal_discount'] : null;
        $this->container['subtotal_discount_refunded'] = isset($data['subtotal_discount_refunded']) ? $data['subtotal_discount_refunded'] : null;
        $this->container['subtotal_refunded'] = isset($data['subtotal_refunded']) ? $data['subtotal_refunded'] : null;
        $this->container['tax'] = isset($data['tax']) ? $data['tax'] : null;
        $this->container['tax_refunded'] = isset($data['tax_refunded']) ? $data['tax_refunded'] : null;
        $this->container['taxable_subtotal'] = isset($data['taxable_subtotal']) ? $data['taxable_subtotal'] : null;
        $this->container['taxable_subtotal_discount'] = isset($data['taxable_subtotal_discount']) ? $data['taxable_subtotal_discount'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_refunded'] = isset($data['total_refunded']) ? $data['total_refunded'] : null;
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
     * Gets other_refunded
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getOtherRefunded()
    {
        return $this->container['other_refunded'];
    }

    /**
     * Sets other_refunded
     * @param \ultracart\admin\v2\models\Currency $other_refunded
     * @return $this
     */
    public function setOtherRefunded($other_refunded)
    {
        $this->container['other_refunded'] = $other_refunded;

        return $this;
    }

    /**
     * Gets shipping_handling_refunded
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getShippingHandlingRefunded()
    {
        return $this->container['shipping_handling_refunded'];
    }

    /**
     * Sets shipping_handling_refunded
     * @param \ultracart\admin\v2\models\Currency $shipping_handling_refunded
     * @return $this
     */
    public function setShippingHandlingRefunded($shipping_handling_refunded)
    {
        $this->container['shipping_handling_refunded'] = $shipping_handling_refunded;

        return $this;
    }

    /**
     * Gets shipping_handling_total
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getShippingHandlingTotal()
    {
        return $this->container['shipping_handling_total'];
    }

    /**
     * Sets shipping_handling_total
     * @param \ultracart\admin\v2\models\Currency $shipping_handling_total
     * @return $this
     */
    public function setShippingHandlingTotal($shipping_handling_total)
    {
        $this->container['shipping_handling_total'] = $shipping_handling_total;

        return $this;
    }

    /**
     * Gets shipping_handling_total_discount
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getShippingHandlingTotalDiscount()
    {
        return $this->container['shipping_handling_total_discount'];
    }

    /**
     * Sets shipping_handling_total_discount
     * @param \ultracart\admin\v2\models\Currency $shipping_handling_total_discount
     * @return $this
     */
    public function setShippingHandlingTotalDiscount($shipping_handling_total_discount)
    {
        $this->container['shipping_handling_total_discount'] = $shipping_handling_total_discount;

        return $this;
    }

    /**
     * Gets subtotal
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     * @param \ultracart\admin\v2\models\Currency $subtotal
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets subtotal_discount
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getSubtotalDiscount()
    {
        return $this->container['subtotal_discount'];
    }

    /**
     * Sets subtotal_discount
     * @param \ultracart\admin\v2\models\Currency $subtotal_discount
     * @return $this
     */
    public function setSubtotalDiscount($subtotal_discount)
    {
        $this->container['subtotal_discount'] = $subtotal_discount;

        return $this;
    }

    /**
     * Gets subtotal_discount_refunded
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getSubtotalDiscountRefunded()
    {
        return $this->container['subtotal_discount_refunded'];
    }

    /**
     * Sets subtotal_discount_refunded
     * @param \ultracart\admin\v2\models\Currency $subtotal_discount_refunded
     * @return $this
     */
    public function setSubtotalDiscountRefunded($subtotal_discount_refunded)
    {
        $this->container['subtotal_discount_refunded'] = $subtotal_discount_refunded;

        return $this;
    }

    /**
     * Gets subtotal_refunded
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getSubtotalRefunded()
    {
        return $this->container['subtotal_refunded'];
    }

    /**
     * Sets subtotal_refunded
     * @param \ultracart\admin\v2\models\Currency $subtotal_refunded
     * @return $this
     */
    public function setSubtotalRefunded($subtotal_refunded)
    {
        $this->container['subtotal_refunded'] = $subtotal_refunded;

        return $this;
    }

    /**
     * Gets tax
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     * @param \ultracart\admin\v2\models\Currency $tax
     * @return $this
     */
    public function setTax($tax)
    {
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets tax_refunded
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getTaxRefunded()
    {
        return $this->container['tax_refunded'];
    }

    /**
     * Sets tax_refunded
     * @param \ultracart\admin\v2\models\Currency $tax_refunded
     * @return $this
     */
    public function setTaxRefunded($tax_refunded)
    {
        $this->container['tax_refunded'] = $tax_refunded;

        return $this;
    }

    /**
     * Gets taxable_subtotal
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getTaxableSubtotal()
    {
        return $this->container['taxable_subtotal'];
    }

    /**
     * Sets taxable_subtotal
     * @param \ultracart\admin\v2\models\Currency $taxable_subtotal
     * @return $this
     */
    public function setTaxableSubtotal($taxable_subtotal)
    {
        $this->container['taxable_subtotal'] = $taxable_subtotal;

        return $this;
    }

    /**
     * Gets taxable_subtotal_discount
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getTaxableSubtotalDiscount()
    {
        return $this->container['taxable_subtotal_discount'];
    }

    /**
     * Sets taxable_subtotal_discount
     * @param \ultracart\admin\v2\models\Currency $taxable_subtotal_discount
     * @return $this
     */
    public function setTaxableSubtotalDiscount($taxable_subtotal_discount)
    {
        $this->container['taxable_subtotal_discount'] = $taxable_subtotal_discount;

        return $this;
    }

    /**
     * Gets total
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param \ultracart\admin\v2\models\Currency $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets total_refunded
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getTotalRefunded()
    {
        return $this->container['total_refunded'];
    }

    /**
     * Sets total_refunded
     * @param \ultracart\admin\v2\models\Currency $total_refunded
     * @return $this
     */
    public function setTotalRefunded($total_refunded)
    {
        $this->container['total_refunded'] = $total_refunded;

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
            return json_encode(\ultracart\admin\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\admin\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


