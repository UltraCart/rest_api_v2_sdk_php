<?php
/**
 * EmailCommseqEmailSendTestRequest
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
 * EmailCommseqEmailSendTestRequest Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailCommseqEmailSendTestRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailCommseqEmailSendTestRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cart_id' => 'string',
        'cart_item_ids' => 'string[]',
        'esp_commseq_email_uuid' => 'string',
        'esp_commseq_step_uuid' => 'string',
        'esp_commseq_uuid' => 'string',
        'name' => 'string',
        'order_id' => 'string',
        'please_review' => 'bool',
        'send_to_additional_emails' => 'string[]',
        'send_to_logged_in_user' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cart_id' => null,
        'cart_item_ids' => null,
        'esp_commseq_email_uuid' => null,
        'esp_commseq_step_uuid' => null,
        'esp_commseq_uuid' => null,
        'name' => null,
        'order_id' => null,
        'please_review' => null,
        'send_to_additional_emails' => null,
        'send_to_logged_in_user' => null
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
        'cart_id' => 'cart_id',
        'cart_item_ids' => 'cart_item_ids',
        'esp_commseq_email_uuid' => 'esp_commseq_email_uuid',
        'esp_commseq_step_uuid' => 'esp_commseq_step_uuid',
        'esp_commseq_uuid' => 'esp_commseq_uuid',
        'name' => 'name',
        'order_id' => 'order_id',
        'please_review' => 'please_review',
        'send_to_additional_emails' => 'send_to_additional_emails',
        'send_to_logged_in_user' => 'send_to_logged_in_user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cart_id' => 'setCartId',
        'cart_item_ids' => 'setCartItemIds',
        'esp_commseq_email_uuid' => 'setEspCommseqEmailUuid',
        'esp_commseq_step_uuid' => 'setEspCommseqStepUuid',
        'esp_commseq_uuid' => 'setEspCommseqUuid',
        'name' => 'setName',
        'order_id' => 'setOrderId',
        'please_review' => 'setPleaseReview',
        'send_to_additional_emails' => 'setSendToAdditionalEmails',
        'send_to_logged_in_user' => 'setSendToLoggedInUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cart_id' => 'getCartId',
        'cart_item_ids' => 'getCartItemIds',
        'esp_commseq_email_uuid' => 'getEspCommseqEmailUuid',
        'esp_commseq_step_uuid' => 'getEspCommseqStepUuid',
        'esp_commseq_uuid' => 'getEspCommseqUuid',
        'name' => 'getName',
        'order_id' => 'getOrderId',
        'please_review' => 'getPleaseReview',
        'send_to_additional_emails' => 'getSendToAdditionalEmails',
        'send_to_logged_in_user' => 'getSendToLoggedInUser'
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
        $this->container['cart_id'] = $data['cart_id'] ?? null;
        $this->container['cart_item_ids'] = $data['cart_item_ids'] ?? null;
        $this->container['esp_commseq_email_uuid'] = $data['esp_commseq_email_uuid'] ?? null;
        $this->container['esp_commseq_step_uuid'] = $data['esp_commseq_step_uuid'] ?? null;
        $this->container['esp_commseq_uuid'] = $data['esp_commseq_uuid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['please_review'] = $data['please_review'] ?? null;
        $this->container['send_to_additional_emails'] = $data['send_to_additional_emails'] ?? null;
        $this->container['send_to_logged_in_user'] = $data['send_to_logged_in_user'] ?? null;
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
     * Gets esp_commseq_email_uuid
     *
     * @return string|null
     */
    public function getEspCommseqEmailUuid()
    {
        return $this->container['esp_commseq_email_uuid'];
    }

    /**
     * Sets esp_commseq_email_uuid
     *
     * @param string|null $esp_commseq_email_uuid esp_commseq_email_uuid
     *
     * @return self
     */
    public function setEspCommseqEmailUuid($esp_commseq_email_uuid)
    {
        $this->container['esp_commseq_email_uuid'] = $esp_commseq_email_uuid;

        return $this;
    }

    /**
     * Gets esp_commseq_step_uuid
     *
     * @return string|null
     */
    public function getEspCommseqStepUuid()
    {
        return $this->container['esp_commseq_step_uuid'];
    }

    /**
     * Sets esp_commseq_step_uuid
     *
     * @param string|null $esp_commseq_step_uuid esp_commseq_step_uuid
     *
     * @return self
     */
    public function setEspCommseqStepUuid($esp_commseq_step_uuid)
    {
        $this->container['esp_commseq_step_uuid'] = $esp_commseq_step_uuid;

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
     * Gets send_to_additional_emails
     *
     * @return string[]|null
     */
    public function getSendToAdditionalEmails()
    {
        return $this->container['send_to_additional_emails'];
    }

    /**
     * Sets send_to_additional_emails
     *
     * @param string[]|null $send_to_additional_emails send_to_additional_emails
     *
     * @return self
     */
    public function setSendToAdditionalEmails($send_to_additional_emails)
    {
        $this->container['send_to_additional_emails'] = $send_to_additional_emails;

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


