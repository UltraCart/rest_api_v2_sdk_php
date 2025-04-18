<?php
/**
 * OrderInternal
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
 * OrderInternal Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderInternal implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderInternal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exported_to_accounting' => 'bool',
        'merchant_notes' => 'string',
        'placed_by_user' => 'string',
        'refund_by_user' => 'string',
        'sales_rep_code' => 'string',
        'transactional_merchant_notes' => '\ultracart\v2\models\OrderTransactionalMerchantNote[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exported_to_accounting' => null,
        'merchant_notes' => null,
        'placed_by_user' => null,
        'refund_by_user' => null,
        'sales_rep_code' => null,
        'transactional_merchant_notes' => null
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
        'exported_to_accounting' => 'exported_to_accounting',
        'merchant_notes' => 'merchant_notes',
        'placed_by_user' => 'placed_by_user',
        'refund_by_user' => 'refund_by_user',
        'sales_rep_code' => 'sales_rep_code',
        'transactional_merchant_notes' => 'transactional_merchant_notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exported_to_accounting' => 'setExportedToAccounting',
        'merchant_notes' => 'setMerchantNotes',
        'placed_by_user' => 'setPlacedByUser',
        'refund_by_user' => 'setRefundByUser',
        'sales_rep_code' => 'setSalesRepCode',
        'transactional_merchant_notes' => 'setTransactionalMerchantNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exported_to_accounting' => 'getExportedToAccounting',
        'merchant_notes' => 'getMerchantNotes',
        'placed_by_user' => 'getPlacedByUser',
        'refund_by_user' => 'getRefundByUser',
        'sales_rep_code' => 'getSalesRepCode',
        'transactional_merchant_notes' => 'getTransactionalMerchantNotes'
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
        $this->container['exported_to_accounting'] = $data['exported_to_accounting'] ?? null;
        $this->container['merchant_notes'] = $data['merchant_notes'] ?? null;
        $this->container['placed_by_user'] = $data['placed_by_user'] ?? null;
        $this->container['refund_by_user'] = $data['refund_by_user'] ?? null;
        $this->container['sales_rep_code'] = $data['sales_rep_code'] ?? null;
        $this->container['transactional_merchant_notes'] = $data['transactional_merchant_notes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['sales_rep_code']) && (mb_strlen($this->container['sales_rep_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'sales_rep_code', the character length must be smaller than or equal to 10.";
        }

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
     * Gets exported_to_accounting
     *
     * @return bool|null
     */
    public function getExportedToAccounting()
    {
        return $this->container['exported_to_accounting'];
    }

    /**
     * Sets exported_to_accounting
     *
     * @param bool|null $exported_to_accounting True if the order has been exported to QuickBooks. If QuickBooks is not configured, then this will already be true
     *
     * @return self
     */
    public function setExportedToAccounting($exported_to_accounting)
    {
        $this->container['exported_to_accounting'] = $exported_to_accounting;

        return $this;
    }

    /**
     * Gets merchant_notes
     *
     * @return string|null
     */
    public function getMerchantNotes()
    {
        return $this->container['merchant_notes'];
    }

    /**
     * Sets merchant_notes
     *
     * @param string|null $merchant_notes Merchant notes.  Full notes in non-transactional mode.  Just used to write a new merchant note when transaction merchant notes enabled.
     *
     * @return self
     */
    public function setMerchantNotes($merchant_notes)
    {
        $this->container['merchant_notes'] = $merchant_notes;

        return $this;
    }

    /**
     * Gets placed_by_user
     *
     * @return string|null
     */
    public function getPlacedByUser()
    {
        return $this->container['placed_by_user'];
    }

    /**
     * Sets placed_by_user
     *
     * @param string|null $placed_by_user If placed via the BEOE, this is the user that placed the order
     *
     * @return self
     */
    public function setPlacedByUser($placed_by_user)
    {
        $this->container['placed_by_user'] = $placed_by_user;

        return $this;
    }

    /**
     * Gets refund_by_user
     *
     * @return string|null
     */
    public function getRefundByUser()
    {
        return $this->container['refund_by_user'];
    }

    /**
     * Sets refund_by_user
     *
     * @param string|null $refund_by_user User that issued the refund
     *
     * @return self
     */
    public function setRefundByUser($refund_by_user)
    {
        $this->container['refund_by_user'] = $refund_by_user;

        return $this;
    }

    /**
     * Gets sales_rep_code
     *
     * @return string|null
     */
    public function getSalesRepCode()
    {
        return $this->container['sales_rep_code'];
    }

    /**
     * Sets sales_rep_code
     *
     * @param string|null $sales_rep_code Sales rep code associated with the order
     *
     * @return self
     */
    public function setSalesRepCode($sales_rep_code)
    {
        if (!is_null($sales_rep_code) && (mb_strlen($sales_rep_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $sales_rep_code when calling OrderInternal., must be smaller than or equal to 10.');
        }

        $this->container['sales_rep_code'] = $sales_rep_code;

        return $this;
    }

    /**
     * Gets transactional_merchant_notes
     *
     * @return \ultracart\v2\models\OrderTransactionalMerchantNote[]|null
     */
    public function getTransactionalMerchantNotes()
    {
        return $this->container['transactional_merchant_notes'];
    }

    /**
     * Sets transactional_merchant_notes
     *
     * @param \ultracart\v2\models\OrderTransactionalMerchantNote[]|null $transactional_merchant_notes Transactional merchant notes
     *
     * @return self
     */
    public function setTransactionalMerchantNotes($transactional_merchant_notes)
    {
        $this->container['transactional_merchant_notes'] = $transactional_merchant_notes;

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


