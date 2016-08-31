<?php
/**
 * ItemRevguard
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
 * ItemRevguard Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     \ultracart\admin\v2\swagger
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemRevguard implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemRevguard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'revguard_canceled_csr_prompt_group' => 'int',
        'revguard_canceled_ivr_prompt_group' => 'int',
        'revguard_canceled_web_prompt_group' => 'int',
        'revguard_client_brand' => 'int',
        'revguard_csr_prompt_group' => 'int',
        'revguard_ivr_prompt_group' => 'int',
        'revguard_web_prompt_group' => 'int'
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
        'revguard_canceled_csr_prompt_group' => 'revguard_canceled_csr_prompt_group',
        'revguard_canceled_ivr_prompt_group' => 'revguard_canceled_ivr_prompt_group',
        'revguard_canceled_web_prompt_group' => 'revguard_canceled_web_prompt_group',
        'revguard_client_brand' => 'revguard_client_brand',
        'revguard_csr_prompt_group' => 'revguard_csr_prompt_group',
        'revguard_ivr_prompt_group' => 'revguard_ivr_prompt_group',
        'revguard_web_prompt_group' => 'revguard_web_prompt_group'
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
        'revguard_canceled_csr_prompt_group' => 'setRevguardCanceledCsrPromptGroup',
        'revguard_canceled_ivr_prompt_group' => 'setRevguardCanceledIvrPromptGroup',
        'revguard_canceled_web_prompt_group' => 'setRevguardCanceledWebPromptGroup',
        'revguard_client_brand' => 'setRevguardClientBrand',
        'revguard_csr_prompt_group' => 'setRevguardCsrPromptGroup',
        'revguard_ivr_prompt_group' => 'setRevguardIvrPromptGroup',
        'revguard_web_prompt_group' => 'setRevguardWebPromptGroup'
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
        'revguard_canceled_csr_prompt_group' => 'getRevguardCanceledCsrPromptGroup',
        'revguard_canceled_ivr_prompt_group' => 'getRevguardCanceledIvrPromptGroup',
        'revguard_canceled_web_prompt_group' => 'getRevguardCanceledWebPromptGroup',
        'revguard_client_brand' => 'getRevguardClientBrand',
        'revguard_csr_prompt_group' => 'getRevguardCsrPromptGroup',
        'revguard_ivr_prompt_group' => 'getRevguardIvrPromptGroup',
        'revguard_web_prompt_group' => 'getRevguardWebPromptGroup'
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
        $this->container['revguard_canceled_csr_prompt_group'] = isset($data['revguard_canceled_csr_prompt_group']) ? $data['revguard_canceled_csr_prompt_group'] : null;
        $this->container['revguard_canceled_ivr_prompt_group'] = isset($data['revguard_canceled_ivr_prompt_group']) ? $data['revguard_canceled_ivr_prompt_group'] : null;
        $this->container['revguard_canceled_web_prompt_group'] = isset($data['revguard_canceled_web_prompt_group']) ? $data['revguard_canceled_web_prompt_group'] : null;
        $this->container['revguard_client_brand'] = isset($data['revguard_client_brand']) ? $data['revguard_client_brand'] : null;
        $this->container['revguard_csr_prompt_group'] = isset($data['revguard_csr_prompt_group']) ? $data['revguard_csr_prompt_group'] : null;
        $this->container['revguard_ivr_prompt_group'] = isset($data['revguard_ivr_prompt_group']) ? $data['revguard_ivr_prompt_group'] : null;
        $this->container['revguard_web_prompt_group'] = isset($data['revguard_web_prompt_group']) ? $data['revguard_web_prompt_group'] : null;
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
     * Gets revguard_canceled_csr_prompt_group
     * @return int
     */
    public function getRevguardCanceledCsrPromptGroup()
    {
        return $this->container['revguard_canceled_csr_prompt_group'];
    }

    /**
     * Sets revguard_canceled_csr_prompt_group
     * @param int $revguard_canceled_csr_prompt_group
     * @return $this
     */
    public function setRevguardCanceledCsrPromptGroup($revguard_canceled_csr_prompt_group)
    {
        $this->container['revguard_canceled_csr_prompt_group'] = $revguard_canceled_csr_prompt_group;

        return $this;
    }

    /**
     * Gets revguard_canceled_ivr_prompt_group
     * @return int
     */
    public function getRevguardCanceledIvrPromptGroup()
    {
        return $this->container['revguard_canceled_ivr_prompt_group'];
    }

    /**
     * Sets revguard_canceled_ivr_prompt_group
     * @param int $revguard_canceled_ivr_prompt_group
     * @return $this
     */
    public function setRevguardCanceledIvrPromptGroup($revguard_canceled_ivr_prompt_group)
    {
        $this->container['revguard_canceled_ivr_prompt_group'] = $revguard_canceled_ivr_prompt_group;

        return $this;
    }

    /**
     * Gets revguard_canceled_web_prompt_group
     * @return int
     */
    public function getRevguardCanceledWebPromptGroup()
    {
        return $this->container['revguard_canceled_web_prompt_group'];
    }

    /**
     * Sets revguard_canceled_web_prompt_group
     * @param int $revguard_canceled_web_prompt_group
     * @return $this
     */
    public function setRevguardCanceledWebPromptGroup($revguard_canceled_web_prompt_group)
    {
        $this->container['revguard_canceled_web_prompt_group'] = $revguard_canceled_web_prompt_group;

        return $this;
    }

    /**
     * Gets revguard_client_brand
     * @return int
     */
    public function getRevguardClientBrand()
    {
        return $this->container['revguard_client_brand'];
    }

    /**
     * Sets revguard_client_brand
     * @param int $revguard_client_brand
     * @return $this
     */
    public function setRevguardClientBrand($revguard_client_brand)
    {
        $this->container['revguard_client_brand'] = $revguard_client_brand;

        return $this;
    }

    /**
     * Gets revguard_csr_prompt_group
     * @return int
     */
    public function getRevguardCsrPromptGroup()
    {
        return $this->container['revguard_csr_prompt_group'];
    }

    /**
     * Sets revguard_csr_prompt_group
     * @param int $revguard_csr_prompt_group
     * @return $this
     */
    public function setRevguardCsrPromptGroup($revguard_csr_prompt_group)
    {
        $this->container['revguard_csr_prompt_group'] = $revguard_csr_prompt_group;

        return $this;
    }

    /**
     * Gets revguard_ivr_prompt_group
     * @return int
     */
    public function getRevguardIvrPromptGroup()
    {
        return $this->container['revguard_ivr_prompt_group'];
    }

    /**
     * Sets revguard_ivr_prompt_group
     * @param int $revguard_ivr_prompt_group
     * @return $this
     */
    public function setRevguardIvrPromptGroup($revguard_ivr_prompt_group)
    {
        $this->container['revguard_ivr_prompt_group'] = $revguard_ivr_prompt_group;

        return $this;
    }

    /**
     * Gets revguard_web_prompt_group
     * @return int
     */
    public function getRevguardWebPromptGroup()
    {
        return $this->container['revguard_web_prompt_group'];
    }

    /**
     * Sets revguard_web_prompt_group
     * @param int $revguard_web_prompt_group
     * @return $this
     */
    public function setRevguardWebPromptGroup($revguard_web_prompt_group)
    {
        $this->container['revguard_web_prompt_group'] = $revguard_web_prompt_group;

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


