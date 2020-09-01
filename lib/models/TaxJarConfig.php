<?php
/**
 * TaxJarConfig
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * TaxJarConfig Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxJarConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxJarConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => 'bool',
        'api_key' => 'string',
        'estimate_only' => 'bool',
        'send_test_orders' => 'bool',
        'use_distribution_center_from' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'api_key' => null,
        'estimate_only' => null,
        'send_test_orders' => null,
        'use_distribution_center_from' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'active' => 'active',
        'api_key' => 'api_key',
        'estimate_only' => 'estimate_only',
        'send_test_orders' => 'send_test_orders',
        'use_distribution_center_from' => 'use_distribution_center_from'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'api_key' => 'setApiKey',
        'estimate_only' => 'setEstimateOnly',
        'send_test_orders' => 'setSendTestOrders',
        'use_distribution_center_from' => 'setUseDistributionCenterFrom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'api_key' => 'getApiKey',
        'estimate_only' => 'getEstimateOnly',
        'send_test_orders' => 'getSendTestOrders',
        'use_distribution_center_from' => 'getUseDistributionCenterFrom'
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
        return self::$swaggerModelName;
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['estimate_only'] = isset($data['estimate_only']) ? $data['estimate_only'] : null;
        $this->container['send_test_orders'] = isset($data['send_test_orders']) ? $data['send_test_orders'] : null;
        $this->container['use_distribution_center_from'] = isset($data['use_distribution_center_from']) ? $data['use_distribution_center_from'] : null;
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
     * Gets active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool $active True if TaxJar is active for this merchant
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     *
     * @param string $api_key TaxJar API key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets estimate_only
     *
     * @return bool
     */
    public function getEstimateOnly()
    {
        return $this->container['estimate_only'];
    }

    /**
     * Sets estimate_only
     *
     * @param bool $estimate_only True if this TaxJar configuration is to estimate taxes only and not report placed orders to TaxJar
     *
     * @return $this
     */
    public function setEstimateOnly($estimate_only)
    {
        $this->container['estimate_only'] = $estimate_only;

        return $this;
    }

    /**
     * Gets send_test_orders
     *
     * @return bool
     */
    public function getSendTestOrders()
    {
        return $this->container['send_test_orders'];
    }

    /**
     * Sets send_test_orders
     *
     * @param bool $send_test_orders Send test orders through to TaxJar.  The default is to not transmit test orders to TaxJar.
     *
     * @return $this
     */
    public function setSendTestOrders($send_test_orders)
    {
        $this->container['send_test_orders'] = $send_test_orders;

        return $this;
    }

    /**
     * Gets use_distribution_center_from
     *
     * @return bool
     */
    public function getUseDistributionCenterFrom()
    {
        return $this->container['use_distribution_center_from'];
    }

    /**
     * Sets use_distribution_center_from
     *
     * @param bool $use_distribution_center_from Use distribution center from address
     *
     * @return $this
     */
    public function setUseDistributionCenterFrom($use_distribution_center_from)
    {
        $this->container['use_distribution_center_from'] = $use_distribution_center_from;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


