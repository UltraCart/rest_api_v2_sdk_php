<?php
/**
 * ItemCheckout
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
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

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * ItemCheckout Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemCheckout implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemCheckout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'suppress_buysafe' => 'bool',
        'terms' => 'string',
        'terms_translated_text_instance_oid' => 'int'
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
        'suppress_buysafe' => 'suppress_buysafe',
        'terms' => 'terms',
        'terms_translated_text_instance_oid' => 'terms_translated_text_instance_oid'
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
        'suppress_buysafe' => 'setSuppressBuysafe',
        'terms' => 'setTerms',
        'terms_translated_text_instance_oid' => 'setTermsTranslatedTextInstanceOid'
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
        'suppress_buysafe' => 'getSuppressBuysafe',
        'terms' => 'getTerms',
        'terms_translated_text_instance_oid' => 'getTermsTranslatedTextInstanceOid'
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
        $this->container['suppress_buysafe'] = isset($data['suppress_buysafe']) ? $data['suppress_buysafe'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['terms_translated_text_instance_oid'] = isset($data['terms_translated_text_instance_oid']) ? $data['terms_translated_text_instance_oid'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['terms']) && (strlen($this->container['terms']) > 10000)) {
            $invalid_properties[] = "invalid value for 'terms', the character length must be smaller than or equal to 10000.";
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
        if (strlen($this->container['terms']) > 10000) {
            return false;
        }
        return true;
    }


    /**
     * Gets suppress_buysafe
     * @return bool
     */
    public function getSuppressBuysafe()
    {
        return $this->container['suppress_buysafe'];
    }

    /**
     * Sets suppress_buysafe
     * @param bool $suppress_buysafe True to suppress buySAFE
     * @return $this
     */
    public function setSuppressBuysafe($suppress_buysafe)
    {
        $this->container['suppress_buysafe'] = $suppress_buysafe;

        return $this;
    }

    /**
     * Gets terms
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     * @param string $terms Terms for purchasing this item
     * @return $this
     */
    public function setTerms($terms)
    {
        if (strlen($terms) > 10000) {
            throw new \InvalidArgumentException('invalid length for $terms when calling ItemCheckout., must be smaller than or equal to 10000.');
        }
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets terms_translated_text_instance_oid
     * @return int
     */
    public function getTermsTranslatedTextInstanceOid()
    {
        return $this->container['terms_translated_text_instance_oid'];
    }

    /**
     * Sets terms_translated_text_instance_oid
     * @param int $terms_translated_text_instance_oid Terms translated text instance identifier
     * @return $this
     */
    public function setTermsTranslatedTextInstanceOid($terms_translated_text_instance_oid)
    {
        $this->container['terms_translated_text_instance_oid'] = $terms_translated_text_instance_oid;

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
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


