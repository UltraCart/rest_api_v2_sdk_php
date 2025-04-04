<?php
/**
 * EmailCommseqSequenceTestRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * EmailCommseqSequenceTestRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailCommseqSequenceTestRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailCommseqSequenceTestRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_1' => 'string',
        'address_2' => 'string',
        'cart_id' => 'string',
        'cart_item_ids' => 'string[]',
        'city' => 'string',
        'esp_commseq_uuid' => 'string',
        'mail_card' => 'bool',
        'name' => 'string',
        'order_id' => 'string',
        'please_review' => 'bool',
        'postal_code' => 'string',
        'send_to_cellphone_e164' => 'string',
        'send_to_email' => 'string',
        'send_to_logged_in_user' => 'bool',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_1' => null,
        'address_2' => null,
        'cart_id' => null,
        'cart_item_ids' => null,
        'city' => null,
        'esp_commseq_uuid' => null,
        'mail_card' => null,
        'name' => null,
        'order_id' => null,
        'please_review' => null,
        'postal_code' => null,
        'send_to_cellphone_e164' => null,
        'send_to_email' => null,
        'send_to_logged_in_user' => null,
        'state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
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
        'esp_commseq_uuid' => 'esp_commseq_uuid',
        'mail_card' => 'mail_card',
        'name' => 'name',
        'order_id' => 'order_id',
        'please_review' => 'please_review',
        'postal_code' => 'postal_code',
        'send_to_cellphone_e164' => 'send_to_cellphone_e164',
        'send_to_email' => 'send_to_email',
        'send_to_logged_in_user' => 'send_to_logged_in_user',
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
        'esp_commseq_uuid' => 'setEspCommseqUuid',
        'mail_card' => 'setMailCard',
        'name' => 'setName',
        'order_id' => 'setOrderId',
        'please_review' => 'setPleaseReview',
        'postal_code' => 'setPostalCode',
        'send_to_cellphone_e164' => 'setSendToCellphoneE164',
        'send_to_email' => 'setSendToEmail',
        'send_to_logged_in_user' => 'setSendToLoggedInUser',
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
        'esp_commseq_uuid' => 'getEspCommseqUuid',
        'mail_card' => 'getMailCard',
        'name' => 'getName',
        'order_id' => 'getOrderId',
        'please_review' => 'getPleaseReview',
        'postal_code' => 'getPostalCode',
        'send_to_cellphone_e164' => 'getSendToCellphoneE164',
        'send_to_email' => 'getSendToEmail',
        'send_to_logged_in_user' => 'getSendToLoggedInUser',
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
        return self::$openAPIModelName;
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
        $this->container['address_1'] = $data['address_1'] ?? null;
        $this->container['address_2'] = $data['address_2'] ?? null;
        $this->container['cart_id'] = $data['cart_id'] ?? null;
        $this->container['cart_item_ids'] = $data['cart_item_ids'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['esp_commseq_uuid'] = $data['esp_commseq_uuid'] ?? null;
        $this->container['mail_card'] = $data['mail_card'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['please_review'] = $data['please_review'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['send_to_cellphone_e164'] = $data['send_to_cellphone_e164'] ?? null;
        $this->container['send_to_email'] = $data['send_to_email'] ?? null;
        $this->container['send_to_logged_in_user'] = $data['send_to_logged_in_user'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
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
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->container['address_1'];
    }

    /**
     * Sets address_1
     *
     * @param string|null $address_1 address_1
     *
     * @return self
     */
    public function setAddress1($address_1)
    {
        $this->container['address_1'] = $address_1;

        return $this;
    }

    /**
     * Gets address_2
     *
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->container['address_2'];
    }

    /**
     * Sets address_2
     *
     * @param string|null $address_2 address_2
     *
     * @return self
     */
    public function setAddress2($address_2)
    {
        $this->container['address_2'] = $address_2;

        return $this;
    }

    /**
     * Gets cart_id
     *
     * @return string|null
     */
    public function getCartId()
    {
        return $this->container['cart_id'];
    }

    /**
     * Sets cart_id
     *
     * @param string|null $cart_id cart_id
     *
     * @return self
     */
    public function setCartId($cart_id)
    {
        $this->container['cart_id'] = $cart_id;

        return $this;
    }

    /**
     * Gets cart_item_ids
     *
     * @return string[]|null
     */
    public function getCartItemIds()
    {
        return $this->container['cart_item_ids'];
    }

    /**
     * Sets cart_item_ids
     *
     * @param string[]|null $cart_item_ids cart_item_ids
     *
     * @return self
     */
    public function setCartItemIds($cart_item_ids)
    {
        $this->container['cart_item_ids'] = $cart_item_ids;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets esp_commseq_uuid
     *
     * @return string|null
     */
    public function getEspCommseqUuid()
    {
        return $this->container['esp_commseq_uuid'];
    }

    /**
     * Sets esp_commseq_uuid
     *
     * @param string|null $esp_commseq_uuid esp_commseq_uuid
     *
     * @return self
     */
    public function setEspCommseqUuid($esp_commseq_uuid)
    {
        $this->container['esp_commseq_uuid'] = $esp_commseq_uuid;

        return $this;
    }

    /**
     * Gets mail_card
     *
     * @return bool|null
     */
    public function getMailCard()
    {
        return $this->container['mail_card'];
    }

    /**
     * Sets mail_card
     *
     * @param bool|null $mail_card mail_card
     *
     * @return self
     */
    public function setMailCard($mail_card)
    {
        $this->container['mail_card'] = $mail_card;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets please_review
     *
     * @return bool|null
     */
    public function getPleaseReview()
    {
        return $this->container['please_review'];
    }

    /**
     * Sets please_review
     *
     * @param bool|null $please_review please_review
     *
     * @return self
     */
    public function setPleaseReview($please_review)
    {
        $this->container['please_review'] = $please_review;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets send_to_cellphone_e164
     *
     * @return string|null
     */
    public function getSendToCellphoneE164()
    {
        return $this->container['send_to_cellphone_e164'];
    }

    /**
     * Sets send_to_cellphone_e164
     *
     * @param string|null $send_to_cellphone_e164 send_to_cellphone_e164
     *
     * @return self
     */
    public function setSendToCellphoneE164($send_to_cellphone_e164)
    {
        $this->container['send_to_cellphone_e164'] = $send_to_cellphone_e164;

        return $this;
    }

    /**
     * Gets send_to_email
     *
     * @return string|null
     */
    public function getSendToEmail()
    {
        return $this->container['send_to_email'];
    }

    /**
     * Sets send_to_email
     *
     * @param string|null $send_to_email send_to_email
     *
     * @return self
     */
    public function setSendToEmail($send_to_email)
    {
        $this->container['send_to_email'] = $send_to_email;

        return $this;
    }

    /**
     * Gets send_to_logged_in_user
     *
     * @return bool|null
     */
    public function getSendToLoggedInUser()
    {
        return $this->container['send_to_logged_in_user'];
    }

    /**
     * Sets send_to_logged_in_user
     *
     * @param bool|null $send_to_logged_in_user send_to_logged_in_user
     *
     * @return self
     */
    public function setSendToLoggedInUser($send_to_logged_in_user)
    {
        $this->container['send_to_logged_in_user'] = $send_to_logged_in_user;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state state
     *
     * @return self
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


