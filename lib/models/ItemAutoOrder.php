<?php
/**
 * ItemAutoOrder
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
 * ItemAutoOrder Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemAutoOrder implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemAutoOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'auth_future_amount' => 'double',
        'auth_test_amount' => 'double',
        'auto_order_cancel_item_id' => 'string',
        'auto_order_cancel_item_oid' => 'int',
        'auto_order_downgrade_items' => 'string[]',
        'auto_order_paused' => 'bool',
        'auto_order_schedules' => 'int',
        'auto_order_upgrade_items' => 'string[]',
        'auto_order_upsell' => 'bool',
        'auto_order_upsell_no_easy_cancel' => 'bool',
        'auto_order_upsell_one_per_customer' => 'bool',
        'auto_orderable' => 'bool',
        'cancel_other_auto_orders' => 'bool',
        'free_shipping_auto_order' => 'bool',
        'steps' => '\ultracart\admin\v2\models\ItemAutoOrderStep[]'
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
        'auth_future_amount' => 'auth_future_amount',
        'auth_test_amount' => 'auth_test_amount',
        'auto_order_cancel_item_id' => 'auto_order_cancel_item_id',
        'auto_order_cancel_item_oid' => 'auto_order_cancel_item_oid',
        'auto_order_downgrade_items' => 'auto_order_downgrade_items',
        'auto_order_paused' => 'auto_order_paused',
        'auto_order_schedules' => 'auto_order_schedules',
        'auto_order_upgrade_items' => 'auto_order_upgrade_items',
        'auto_order_upsell' => 'auto_order_upsell',
        'auto_order_upsell_no_easy_cancel' => 'auto_order_upsell_no_easy_cancel',
        'auto_order_upsell_one_per_customer' => 'auto_order_upsell_one_per_customer',
        'auto_orderable' => 'auto_orderable',
        'cancel_other_auto_orders' => 'cancel_other_auto_orders',
        'free_shipping_auto_order' => 'free_shipping_auto_order',
        'steps' => 'steps'
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
        'auth_future_amount' => 'setAuthFutureAmount',
        'auth_test_amount' => 'setAuthTestAmount',
        'auto_order_cancel_item_id' => 'setAutoOrderCancelItemId',
        'auto_order_cancel_item_oid' => 'setAutoOrderCancelItemOid',
        'auto_order_downgrade_items' => 'setAutoOrderDowngradeItems',
        'auto_order_paused' => 'setAutoOrderPaused',
        'auto_order_schedules' => 'setAutoOrderSchedules',
        'auto_order_upgrade_items' => 'setAutoOrderUpgradeItems',
        'auto_order_upsell' => 'setAutoOrderUpsell',
        'auto_order_upsell_no_easy_cancel' => 'setAutoOrderUpsellNoEasyCancel',
        'auto_order_upsell_one_per_customer' => 'setAutoOrderUpsellOnePerCustomer',
        'auto_orderable' => 'setAutoOrderable',
        'cancel_other_auto_orders' => 'setCancelOtherAutoOrders',
        'free_shipping_auto_order' => 'setFreeShippingAutoOrder',
        'steps' => 'setSteps'
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
        'auth_future_amount' => 'getAuthFutureAmount',
        'auth_test_amount' => 'getAuthTestAmount',
        'auto_order_cancel_item_id' => 'getAutoOrderCancelItemId',
        'auto_order_cancel_item_oid' => 'getAutoOrderCancelItemOid',
        'auto_order_downgrade_items' => 'getAutoOrderDowngradeItems',
        'auto_order_paused' => 'getAutoOrderPaused',
        'auto_order_schedules' => 'getAutoOrderSchedules',
        'auto_order_upgrade_items' => 'getAutoOrderUpgradeItems',
        'auto_order_upsell' => 'getAutoOrderUpsell',
        'auto_order_upsell_no_easy_cancel' => 'getAutoOrderUpsellNoEasyCancel',
        'auto_order_upsell_one_per_customer' => 'getAutoOrderUpsellOnePerCustomer',
        'auto_orderable' => 'getAutoOrderable',
        'cancel_other_auto_orders' => 'getCancelOtherAutoOrders',
        'free_shipping_auto_order' => 'getFreeShippingAutoOrder',
        'steps' => 'getSteps'
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
        $this->container['auth_future_amount'] = isset($data['auth_future_amount']) ? $data['auth_future_amount'] : null;
        $this->container['auth_test_amount'] = isset($data['auth_test_amount']) ? $data['auth_test_amount'] : null;
        $this->container['auto_order_cancel_item_id'] = isset($data['auto_order_cancel_item_id']) ? $data['auto_order_cancel_item_id'] : null;
        $this->container['auto_order_cancel_item_oid'] = isset($data['auto_order_cancel_item_oid']) ? $data['auto_order_cancel_item_oid'] : null;
        $this->container['auto_order_downgrade_items'] = isset($data['auto_order_downgrade_items']) ? $data['auto_order_downgrade_items'] : null;
        $this->container['auto_order_paused'] = isset($data['auto_order_paused']) ? $data['auto_order_paused'] : null;
        $this->container['auto_order_schedules'] = isset($data['auto_order_schedules']) ? $data['auto_order_schedules'] : null;
        $this->container['auto_order_upgrade_items'] = isset($data['auto_order_upgrade_items']) ? $data['auto_order_upgrade_items'] : null;
        $this->container['auto_order_upsell'] = isset($data['auto_order_upsell']) ? $data['auto_order_upsell'] : null;
        $this->container['auto_order_upsell_no_easy_cancel'] = isset($data['auto_order_upsell_no_easy_cancel']) ? $data['auto_order_upsell_no_easy_cancel'] : null;
        $this->container['auto_order_upsell_one_per_customer'] = isset($data['auto_order_upsell_one_per_customer']) ? $data['auto_order_upsell_one_per_customer'] : null;
        $this->container['auto_orderable'] = isset($data['auto_orderable']) ? $data['auto_orderable'] : null;
        $this->container['cancel_other_auto_orders'] = isset($data['cancel_other_auto_orders']) ? $data['cancel_other_auto_orders'] : null;
        $this->container['free_shipping_auto_order'] = isset($data['free_shipping_auto_order']) ? $data['free_shipping_auto_order'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
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
     * Gets auth_future_amount
     * @return double
     */
    public function getAuthFutureAmount()
    {
        return $this->container['auth_future_amount'];
    }

    /**
     * Sets auth_future_amount
     * @param double $auth_future_amount
     * @return $this
     */
    public function setAuthFutureAmount($auth_future_amount)
    {
        $this->container['auth_future_amount'] = $auth_future_amount;

        return $this;
    }

    /**
     * Gets auth_test_amount
     * @return double
     */
    public function getAuthTestAmount()
    {
        return $this->container['auth_test_amount'];
    }

    /**
     * Sets auth_test_amount
     * @param double $auth_test_amount
     * @return $this
     */
    public function setAuthTestAmount($auth_test_amount)
    {
        $this->container['auth_test_amount'] = $auth_test_amount;

        return $this;
    }

    /**
     * Gets auto_order_cancel_item_id
     * @return string
     */
    public function getAutoOrderCancelItemId()
    {
        return $this->container['auto_order_cancel_item_id'];
    }

    /**
     * Sets auto_order_cancel_item_id
     * @param string $auto_order_cancel_item_id
     * @return $this
     */
    public function setAutoOrderCancelItemId($auto_order_cancel_item_id)
    {
        $this->container['auto_order_cancel_item_id'] = $auto_order_cancel_item_id;

        return $this;
    }

    /**
     * Gets auto_order_cancel_item_oid
     * @return int
     */
    public function getAutoOrderCancelItemOid()
    {
        return $this->container['auto_order_cancel_item_oid'];
    }

    /**
     * Sets auto_order_cancel_item_oid
     * @param int $auto_order_cancel_item_oid
     * @return $this
     */
    public function setAutoOrderCancelItemOid($auto_order_cancel_item_oid)
    {
        $this->container['auto_order_cancel_item_oid'] = $auto_order_cancel_item_oid;

        return $this;
    }

    /**
     * Gets auto_order_downgrade_items
     * @return string[]
     */
    public function getAutoOrderDowngradeItems()
    {
        return $this->container['auto_order_downgrade_items'];
    }

    /**
     * Sets auto_order_downgrade_items
     * @param string[] $auto_order_downgrade_items
     * @return $this
     */
    public function setAutoOrderDowngradeItems($auto_order_downgrade_items)
    {
        $this->container['auto_order_downgrade_items'] = $auto_order_downgrade_items;

        return $this;
    }

    /**
     * Gets auto_order_paused
     * @return bool
     */
    public function getAutoOrderPaused()
    {
        return $this->container['auto_order_paused'];
    }

    /**
     * Sets auto_order_paused
     * @param bool $auto_order_paused
     * @return $this
     */
    public function setAutoOrderPaused($auto_order_paused)
    {
        $this->container['auto_order_paused'] = $auto_order_paused;

        return $this;
    }

    /**
     * Gets auto_order_schedules
     * @return int
     */
    public function getAutoOrderSchedules()
    {
        return $this->container['auto_order_schedules'];
    }

    /**
     * Sets auto_order_schedules
     * @param int $auto_order_schedules
     * @return $this
     */
    public function setAutoOrderSchedules($auto_order_schedules)
    {
        $this->container['auto_order_schedules'] = $auto_order_schedules;

        return $this;
    }

    /**
     * Gets auto_order_upgrade_items
     * @return string[]
     */
    public function getAutoOrderUpgradeItems()
    {
        return $this->container['auto_order_upgrade_items'];
    }

    /**
     * Sets auto_order_upgrade_items
     * @param string[] $auto_order_upgrade_items
     * @return $this
     */
    public function setAutoOrderUpgradeItems($auto_order_upgrade_items)
    {
        $this->container['auto_order_upgrade_items'] = $auto_order_upgrade_items;

        return $this;
    }

    /**
     * Gets auto_order_upsell
     * @return bool
     */
    public function getAutoOrderUpsell()
    {
        return $this->container['auto_order_upsell'];
    }

    /**
     * Sets auto_order_upsell
     * @param bool $auto_order_upsell
     * @return $this
     */
    public function setAutoOrderUpsell($auto_order_upsell)
    {
        $this->container['auto_order_upsell'] = $auto_order_upsell;

        return $this;
    }

    /**
     * Gets auto_order_upsell_no_easy_cancel
     * @return bool
     */
    public function getAutoOrderUpsellNoEasyCancel()
    {
        return $this->container['auto_order_upsell_no_easy_cancel'];
    }

    /**
     * Sets auto_order_upsell_no_easy_cancel
     * @param bool $auto_order_upsell_no_easy_cancel
     * @return $this
     */
    public function setAutoOrderUpsellNoEasyCancel($auto_order_upsell_no_easy_cancel)
    {
        $this->container['auto_order_upsell_no_easy_cancel'] = $auto_order_upsell_no_easy_cancel;

        return $this;
    }

    /**
     * Gets auto_order_upsell_one_per_customer
     * @return bool
     */
    public function getAutoOrderUpsellOnePerCustomer()
    {
        return $this->container['auto_order_upsell_one_per_customer'];
    }

    /**
     * Sets auto_order_upsell_one_per_customer
     * @param bool $auto_order_upsell_one_per_customer
     * @return $this
     */
    public function setAutoOrderUpsellOnePerCustomer($auto_order_upsell_one_per_customer)
    {
        $this->container['auto_order_upsell_one_per_customer'] = $auto_order_upsell_one_per_customer;

        return $this;
    }

    /**
     * Gets auto_orderable
     * @return bool
     */
    public function getAutoOrderable()
    {
        return $this->container['auto_orderable'];
    }

    /**
     * Sets auto_orderable
     * @param bool $auto_orderable
     * @return $this
     */
    public function setAutoOrderable($auto_orderable)
    {
        $this->container['auto_orderable'] = $auto_orderable;

        return $this;
    }

    /**
     * Gets cancel_other_auto_orders
     * @return bool
     */
    public function getCancelOtherAutoOrders()
    {
        return $this->container['cancel_other_auto_orders'];
    }

    /**
     * Sets cancel_other_auto_orders
     * @param bool $cancel_other_auto_orders
     * @return $this
     */
    public function setCancelOtherAutoOrders($cancel_other_auto_orders)
    {
        $this->container['cancel_other_auto_orders'] = $cancel_other_auto_orders;

        return $this;
    }

    /**
     * Gets free_shipping_auto_order
     * @return bool
     */
    public function getFreeShippingAutoOrder()
    {
        return $this->container['free_shipping_auto_order'];
    }

    /**
     * Sets free_shipping_auto_order
     * @param bool $free_shipping_auto_order
     * @return $this
     */
    public function setFreeShippingAutoOrder($free_shipping_auto_order)
    {
        $this->container['free_shipping_auto_order'] = $free_shipping_auto_order;

        return $this;
    }

    /**
     * Gets steps
     * @return \ultracart\admin\v2\models\ItemAutoOrderStep[]
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     * @param \ultracart\admin\v2\models\ItemAutoOrderStep[] $steps
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

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


