<?php
/**
 * ConversationWebchatContext
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
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

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * ConversationWebchatContext Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConversationWebchatContext implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ConversationWebchatContext';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auto_orders' => '\ultracart\v2\models\AutoOrder[]',
        'cart' => '\ultracart\v2\models\Cart',
        'current_url' => 'string',
        'orders' => '\ultracart\v2\models\Order[]',
        'page_view' => '\ultracart\v2\models\HitPageView[]',
        'session_start' => '\ultracart\v2\models\HitSessionStart',
        'session_start_dts' => 'string',
        'session_utm' => '\ultracart\v2\models\HitSessionUtm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'auto_orders' => null,
        'cart' => null,
        'current_url' => null,
        'orders' => null,
        'page_view' => null,
        'session_start' => null,
        'session_start_dts' => 'dateTime',
        'session_utm' => null
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
        'auto_orders' => 'auto_orders',
        'cart' => 'cart',
        'current_url' => 'current_url',
        'orders' => 'orders',
        'page_view' => 'page_view',
        'session_start' => 'session_start',
        'session_start_dts' => 'session_start_dts',
        'session_utm' => 'session_utm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_orders' => 'setAutoOrders',
        'cart' => 'setCart',
        'current_url' => 'setCurrentUrl',
        'orders' => 'setOrders',
        'page_view' => 'setPageView',
        'session_start' => 'setSessionStart',
        'session_start_dts' => 'setSessionStartDts',
        'session_utm' => 'setSessionUtm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_orders' => 'getAutoOrders',
        'cart' => 'getCart',
        'current_url' => 'getCurrentUrl',
        'orders' => 'getOrders',
        'page_view' => 'getPageView',
        'session_start' => 'getSessionStart',
        'session_start_dts' => 'getSessionStartDts',
        'session_utm' => 'getSessionUtm'
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
        $this->container['auto_orders'] = isset($data['auto_orders']) ? $data['auto_orders'] : null;
        $this->container['cart'] = isset($data['cart']) ? $data['cart'] : null;
        $this->container['current_url'] = isset($data['current_url']) ? $data['current_url'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['page_view'] = isset($data['page_view']) ? $data['page_view'] : null;
        $this->container['session_start'] = isset($data['session_start']) ? $data['session_start'] : null;
        $this->container['session_start_dts'] = isset($data['session_start_dts']) ? $data['session_start_dts'] : null;
        $this->container['session_utm'] = isset($data['session_utm']) ? $data['session_utm'] : null;
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
     * Gets auto_orders
     *
     * @return \ultracart\v2\models\AutoOrder[]
     */
    public function getAutoOrders()
    {
        return $this->container['auto_orders'];
    }

    /**
     * Sets auto_orders
     *
     * @param \ultracart\v2\models\AutoOrder[] $auto_orders auto_orders
     *
     * @return $this
     */
    public function setAutoOrders($auto_orders)
    {
        $this->container['auto_orders'] = $auto_orders;

        return $this;
    }

    /**
     * Gets cart
     *
     * @return \ultracart\v2\models\Cart
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     *
     * @param \ultracart\v2\models\Cart $cart cart
     *
     * @return $this
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets current_url
     *
     * @return string
     */
    public function getCurrentUrl()
    {
        return $this->container['current_url'];
    }

    /**
     * Sets current_url
     *
     * @param string $current_url current_url
     *
     * @return $this
     */
    public function setCurrentUrl($current_url)
    {
        $this->container['current_url'] = $current_url;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \ultracart\v2\models\Order[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \ultracart\v2\models\Order[] $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets page_view
     *
     * @return \ultracart\v2\models\HitPageView[]
     */
    public function getPageView()
    {
        return $this->container['page_view'];
    }

    /**
     * Sets page_view
     *
     * @param \ultracart\v2\models\HitPageView[] $page_view page_view
     *
     * @return $this
     */
    public function setPageView($page_view)
    {
        $this->container['page_view'] = $page_view;

        return $this;
    }

    /**
     * Gets session_start
     *
     * @return \ultracart\v2\models\HitSessionStart
     */
    public function getSessionStart()
    {
        return $this->container['session_start'];
    }

    /**
     * Sets session_start
     *
     * @param \ultracart\v2\models\HitSessionStart $session_start session_start
     *
     * @return $this
     */
    public function setSessionStart($session_start)
    {
        $this->container['session_start'] = $session_start;

        return $this;
    }

    /**
     * Gets session_start_dts
     *
     * @return string
     */
    public function getSessionStartDts()
    {
        return $this->container['session_start_dts'];
    }

    /**
     * Sets session_start_dts
     *
     * @param string $session_start_dts Date/time that the session was started (if known)
     *
     * @return $this
     */
    public function setSessionStartDts($session_start_dts)
    {
        $this->container['session_start_dts'] = $session_start_dts;

        return $this;
    }

    /**
     * Gets session_utm
     *
     * @return \ultracart\v2\models\HitSessionUtm
     */
    public function getSessionUtm()
    {
        return $this->container['session_utm'];
    }

    /**
     * Sets session_utm
     *
     * @param \ultracart\v2\models\HitSessionUtm $session_utm session_utm
     *
     * @return $this
     */
    public function setSessionUtm($session_utm)
    {
        $this->container['session_utm'] = $session_utm;

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


