<?php
/**
 * ItemRelated
 *
 * PHP version 5
 *
 * @category Class
 * @package  \ultracart\admin\v2\swagger
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

namespace \ultracart\admin\v2\models;

use \ArrayAccess;

/**
 * ItemRelated Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     \ultracart\admin\v2\swagger
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemRelated implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemRelated';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'no_system_calculated_related_items' => 'bool',
        'not_relatable' => 'bool',
        'related_items' => '\\ultracart\admin\v2\models\ItemRelatedItem[]'
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
        'no_system_calculated_related_items' => 'no_system_calculated_related_items',
        'not_relatable' => 'not_relatable',
        'related_items' => 'related_items'
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
        'no_system_calculated_related_items' => 'setNoSystemCalculatedRelatedItems',
        'not_relatable' => 'setNotRelatable',
        'related_items' => 'setRelatedItems'
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
        'no_system_calculated_related_items' => 'getNoSystemCalculatedRelatedItems',
        'not_relatable' => 'getNotRelatable',
        'related_items' => 'getRelatedItems'
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
        $this->container['no_system_calculated_related_items'] = isset($data['no_system_calculated_related_items']) ? $data['no_system_calculated_related_items'] : null;
        $this->container['not_relatable'] = isset($data['not_relatable']) ? $data['not_relatable'] : null;
        $this->container['related_items'] = isset($data['related_items']) ? $data['related_items'] : null;
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
     * Gets no_system_calculated_related_items
     * @return bool
     */
    public function getNoSystemCalculatedRelatedItems()
    {
        return $this->container['no_system_calculated_related_items'];
    }

    /**
     * Sets no_system_calculated_related_items
     * @param bool $no_system_calculated_related_items
     * @return $this
     */
    public function setNoSystemCalculatedRelatedItems($no_system_calculated_related_items)
    {
        $this->container['no_system_calculated_related_items'] = $no_system_calculated_related_items;

        return $this;
    }

    /**
     * Gets not_relatable
     * @return bool
     */
    public function getNotRelatable()
    {
        return $this->container['not_relatable'];
    }

    /**
     * Sets not_relatable
     * @param bool $not_relatable
     * @return $this
     */
    public function setNotRelatable($not_relatable)
    {
        $this->container['not_relatable'] = $not_relatable;

        return $this;
    }

    /**
     * Gets related_items
     * @return \\ultracart\admin\v2\models\ItemRelatedItem[]
     */
    public function getRelatedItems()
    {
        return $this->container['related_items'];
    }

    /**
     * Sets related_items
     * @param \\ultracart\admin\v2\models\ItemRelatedItem[] $related_items
     * @return $this
     */
    public function setRelatedItems($related_items)
    {
        $this->container['related_items'] = $related_items;

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
            return json_encode(\\ultracart\admin\v2\swagger\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\\ultracart\admin\v2\swagger\ObjectSerializer::sanitizeForSerialization($this));
    }
}


