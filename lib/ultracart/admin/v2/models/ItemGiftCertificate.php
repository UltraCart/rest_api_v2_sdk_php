<?php
/**
 * ItemGiftCertificate
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
 * ItemGiftCertificate Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2\swagger
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemGiftCertificate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemGiftCertificate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'gift_certificate' => 'bool',
        'gift_certificate_expiration_days' => 'int'
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
        'gift_certificate' => 'gift_certificate',
        'gift_certificate_expiration_days' => 'gift_certificate_expiration_days'
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
        'gift_certificate' => 'setGiftCertificate',
        'gift_certificate_expiration_days' => 'setGiftCertificateExpirationDays'
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
        'gift_certificate' => 'getGiftCertificate',
        'gift_certificate_expiration_days' => 'getGiftCertificateExpirationDays'
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
        $this->container['gift_certificate'] = isset($data['gift_certificate']) ? $data['gift_certificate'] : null;
        $this->container['gift_certificate_expiration_days'] = isset($data['gift_certificate_expiration_days']) ? $data['gift_certificate_expiration_days'] : null;
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
     * Gets gift_certificate
     * @return bool
     */
    public function getGiftCertificate()
    {
        return $this->container['gift_certificate'];
    }

    /**
     * Sets gift_certificate
     * @param bool $gift_certificate
     * @return $this
     */
    public function setGiftCertificate($gift_certificate)
    {
        $this->container['gift_certificate'] = $gift_certificate;

        return $this;
    }

    /**
     * Gets gift_certificate_expiration_days
     * @return int
     */
    public function getGiftCertificateExpirationDays()
    {
        return $this->container['gift_certificate_expiration_days'];
    }

    /**
     * Sets gift_certificate_expiration_days
     * @param int $gift_certificate_expiration_days
     * @return $this
     */
    public function setGiftCertificateExpirationDays($gift_certificate_expiration_days)
    {
        $this->container['gift_certificate_expiration_days'] = $gift_certificate_expiration_days;

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


