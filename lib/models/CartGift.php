<?php
/**
 * CartGift
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
 * CartGift Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartGift implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartGift';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'gift' => 'bool',
        'gift_charge' => '\ultracart\admin\v2\models\Currency',
        'gift_email' => 'string',
        'gift_message' => 'string',
        'gift_wrap_cost' => '\ultracart\admin\v2\models\Currency',
        'gift_wrap_title' => 'string'
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
        'gift' => 'gift',
        'gift_charge' => 'gift_charge',
        'gift_email' => 'gift_email',
        'gift_message' => 'gift_message',
        'gift_wrap_cost' => 'gift_wrap_cost',
        'gift_wrap_title' => 'gift_wrap_title'
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
        'gift' => 'setGift',
        'gift_charge' => 'setGiftCharge',
        'gift_email' => 'setGiftEmail',
        'gift_message' => 'setGiftMessage',
        'gift_wrap_cost' => 'setGiftWrapCost',
        'gift_wrap_title' => 'setGiftWrapTitle'
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
        'gift' => 'getGift',
        'gift_charge' => 'getGiftCharge',
        'gift_email' => 'getGiftEmail',
        'gift_message' => 'getGiftMessage',
        'gift_wrap_cost' => 'getGiftWrapCost',
        'gift_wrap_title' => 'getGiftWrapTitle'
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
        $this->container['gift'] = isset($data['gift']) ? $data['gift'] : null;
        $this->container['gift_charge'] = isset($data['gift_charge']) ? $data['gift_charge'] : null;
        $this->container['gift_email'] = isset($data['gift_email']) ? $data['gift_email'] : null;
        $this->container['gift_message'] = isset($data['gift_message']) ? $data['gift_message'] : null;
        $this->container['gift_wrap_cost'] = isset($data['gift_wrap_cost']) ? $data['gift_wrap_cost'] : null;
        $this->container['gift_wrap_title'] = isset($data['gift_wrap_title']) ? $data['gift_wrap_title'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['gift_email']) && (strlen($this->container['gift_email']) > 100)) {
            $invalid_properties[] = "invalid value for 'gift_email', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['gift_message']) && (strlen($this->container['gift_message']) > 10000)) {
            $invalid_properties[] = "invalid value for 'gift_message', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['gift_wrap_title']) && (strlen($this->container['gift_wrap_title']) > 30)) {
            $invalid_properties[] = "invalid value for 'gift_wrap_title', the character length must be smaller than or equal to 30.";
        }

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
        if (strlen($this->container['gift_email']) > 100) {
            return false;
        }
        if (strlen($this->container['gift_message']) > 10000) {
            return false;
        }
        if (strlen($this->container['gift_wrap_title']) > 30) {
            return false;
        }
        return true;
    }


    /**
     * Gets gift
     * @return bool
     */
    public function getGift()
    {
        return $this->container['gift'];
    }

    /**
     * Sets gift
     * @param bool $gift True if this order is a gift
     * @return $this
     */
    public function setGift($gift)
    {
        $this->container['gift'] = $gift;

        return $this;
    }

    /**
     * Gets gift_charge
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getGiftCharge()
    {
        return $this->container['gift_charge'];
    }

    /**
     * Sets gift_charge
     * @param \ultracart\admin\v2\models\Currency $gift_charge
     * @return $this
     */
    public function setGiftCharge($gift_charge)
    {
        $this->container['gift_charge'] = $gift_charge;

        return $this;
    }

    /**
     * Gets gift_email
     * @return string
     */
    public function getGiftEmail()
    {
        return $this->container['gift_email'];
    }

    /**
     * Sets gift_email
     * @param string $gift_email Email address of the gift recipient
     * @return $this
     */
    public function setGiftEmail($gift_email)
    {
        if (strlen($gift_email) > 100) {
            throw new \InvalidArgumentException('invalid length for $gift_email when calling CartGift., must be smaller than or equal to 100.');
        }
        $this->container['gift_email'] = $gift_email;

        return $this;
    }

    /**
     * Gets gift_message
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message
     * @param string $gift_message Message to the gift recipient
     * @return $this
     */
    public function setGiftMessage($gift_message)
    {
        if (strlen($gift_message) > 10000) {
            throw new \InvalidArgumentException('invalid length for $gift_message when calling CartGift., must be smaller than or equal to 10000.');
        }
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets gift_wrap_cost
     * @return \ultracart\admin\v2\models\Currency
     */
    public function getGiftWrapCost()
    {
        return $this->container['gift_wrap_cost'];
    }

    /**
     * Sets gift_wrap_cost
     * @param \ultracart\admin\v2\models\Currency $gift_wrap_cost
     * @return $this
     */
    public function setGiftWrapCost($gift_wrap_cost)
    {
        $this->container['gift_wrap_cost'] = $gift_wrap_cost;

        return $this;
    }

    /**
     * Gets gift_wrap_title
     * @return string
     */
    public function getGiftWrapTitle()
    {
        return $this->container['gift_wrap_title'];
    }

    /**
     * Sets gift_wrap_title
     * @param string $gift_wrap_title Title of the selected gift wrap
     * @return $this
     */
    public function setGiftWrapTitle($gift_wrap_title)
    {
        if (strlen($gift_wrap_title) > 30) {
            throw new \InvalidArgumentException('invalid length for $gift_wrap_title when calling CartGift., must be smaller than or equal to 30.');
        }
        $this->container['gift_wrap_title'] = $gift_wrap_title;

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


