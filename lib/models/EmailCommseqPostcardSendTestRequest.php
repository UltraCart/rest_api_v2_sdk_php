<?php
/**
 * EmailCommseqPostcardSendTestRequest
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
 * EmailCommseqPostcardSendTestRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailCommseqPostcardSendTestRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailCommseqPostcardSendTestRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_1' => 'string',
        'address_2' => 'string',
        'cart_id' => 'string',
        'cart_item_ids' => 'string[]',
        'city' => 'string',
        'esp_commseq_postcard_uuid' => 'string',
        'esp_commseq_step_uuid' => 'string',
        'esp_commseq_uuid' => 'string',
        'name' => 'string',
        'order_id' => 'string',
        'postal_code' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_1' => null,
        'address_2' => null,
        'cart_id' => null,
        'cart_item_ids' => null,
        'city' => null,
        'esp_commseq_postcard_uuid' => null,
        'esp_commseq_step_uuid' => null,
        'esp_commseq_uuid' => null,
        'name' => null,
        'order_id' => null,
        'postal_code' => null,
        'state' => null
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
        'address_1' => 'address_1',
        'address_2' => 'address_2',
        'cart_id' => 'cart_id',
        'cart_item_ids' => 'cart_item_ids',
        'city' => 'city',
        'esp_commseq_postcard_uuid' => 'esp_commseq_postcard_uuid',
        'esp_commseq_step_uuid' => 'esp_commseq_step_uuid',
        'esp_commseq_uuid' => 'esp_commseq_uuid',
        'name' => 'name',
        'order_id' => 'order_id',
        'postal_code' => 'postal_code',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_1' => 'setAddress1',
        'address_2' => 'setAddress2',
        'cart_id' => 'setCartId',
        'cart_item_ids' => 'setCartItemIds',
        'city' => 'setCity',
        'esp_commseq_postcard_uuid' => 'setEspCommseqPostcardUuid',
        'esp_commseq_step_uuid' => 'setEspCommseqStepUuid',
        'esp_commseq_uuid' => 'setEspCommseqUuid',
        'name' => 'setName',
        'order_id' => 'setOrderId',
        'postal_code' => 'setPostalCode',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_1' => 'getAddress1',
        'address_2' => 'getAddress2',
        'cart_id' => 'getCartId',
        'cart_item_ids' => 'getCartItemIds',
        'city' => 'getCity',
        'esp_commseq_postcard_uuid' => 'getEspCommseqPostcardUuid',
        'esp_commseq_step_uuid' => 'getEspCommseqStepUuid',
        'esp_commseq_uuid' => 'getEspCommseqUuid',
        'name' => 'getName',
        'order_id' => 'getOrderId',
        'postal_code' => 'getPostalCode',
        'state' => 'getState'
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
        $this->container['address_1'] = isset($data['address_1']) ? $data['address_1'] : null;
        $this->container['address_2'] = isset($data['address_2']) ? $data['address_2'] : null;
        $this->container['cart_id'] = isset($data['cart_id']) ? $data['cart_id'] : null;
        $this->container['cart_item_ids'] = isset($data['cart_item_ids']) ? $data['cart_item_ids'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['esp_commseq_postcard_uuid'] = isset($data['esp_commseq_postcard_uuid']) ? $data['esp_commseq_postcard_uuid'] : null;
        $this->container['esp_commseq_step_uuid'] = isset($data['esp_commseq_step_uuid']) ? $data['esp_commseq_step_uuid'] : null;
        $this->container['esp_commseq_uuid'] = isset($data['esp_commseq_uuid']) ? $data['esp_commseq_uuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
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
     * Gets address_1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address_1'];
    }

    /**
     * Sets address_1
     *
     * @param string $address_1 address_1
     *
     * @return $this
     */
    public function setAddress1($address_1)
    {
        $this->container['address_1'] = $address_1;

        return $this;
    }

    /**
     * Gets address_2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address_2'];
    }

    /**
     * Sets address_2
     *
     * @param string $address_2 address_2
     *
     * @return $this
     */
    public function setAddress2($address_2)
    {
        $this->container['address_2'] = $address_2;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string $cart_id cart_id
     *
     * @return $this
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets cart_item_ids
     *
     * @return string[]
     */
    public function getCartItemIds()
    {
        return $this->container['cart_item_ids'];
    }

    /**
     * Sets cart_item_ids
     *
     * @param string[] $cart_item_ids cart_item_ids
     *
     * @return $this
     */
    public function setCartItemIds($cart_item_ids)
    {
        $this->container['cart_item_ids'] = $cart_item_ids;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets esp_commseq_postcard_uuid
     *
     * @return string
     */
    public function getEspCommseqPostcardUuid()
    {
        return $this->container['esp_commseq_postcard_uuid'];
    }

    /**
     * Sets esp_commseq_postcard_uuid
     *
     * @param string $esp_commseq_postcard_uuid esp_commseq_postcard_uuid
     *
     * @return $this
     */
    public function setEspCommseqPostcardUuid($esp_commseq_postcard_uuid)
    {
        $this->container['esp_commseq_postcard_uuid'] = $esp_commseq_postcard_uuid;

        return $this;
    }

    /**
     * Gets esp_commseq_step_uuid
     *
     * @return string
     */
    public function getEspCommseqStepUuid()
    {
        return $this->container['esp_commseq_step_uuid'];
    }

    /**
     * Sets esp_commseq_step_uuid
     *
     * @param string $esp_commseq_step_uuid esp_commseq_step_uuid
     *
     * @return $this
     */
    public function setEspCommseqStepUuid($esp_commseq_step_uuid)
    {
        $this->container['esp_commseq_step_uuid'] = $esp_commseq_step_uuid;

        return $this;
    }

    /**
     * Gets esp_commseq_uuid
     *
     * @return string
     */
    public function getEspCommseqUuid()
    {
        return $this->container['esp_commseq_uuid'];
    }

    /**
     * Sets esp_commseq_uuid
     *
     * @param string $esp_commseq_uuid esp_commseq_uuid
     *
     * @return $this
     */
    public function setEspCommseqUuid($esp_commseq_uuid)
    {
        $this->container['esp_commseq_uuid'] = $esp_commseq_uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id order_id
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


