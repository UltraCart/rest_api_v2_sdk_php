<?php
/**
 * OrderPaymentCreditCard
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
 * OrderPaymentCreditCard Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderPaymentCreditCard implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderPaymentCreditCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'card_auth_ticket' => 'string',
        'card_authorization_amount' => 'float',
        'card_authorization_dts' => 'string',
        'card_authorization_reference_number' => 'string',
        'card_expiration_month' => 'int',
        'card_expiration_year' => 'int',
        'card_number' => 'string',
        'card_number_token' => 'string',
        'card_number_truncated' => 'bool',
        'card_type' => 'string',
        'card_verification_number_token' => 'string',
        'dual_vaulted' => '\ultracart\v2\models\OrderPaymentCreditCardDualVaulted'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'card_auth_ticket' => null,
        'card_authorization_amount' => null,
        'card_authorization_dts' => 'dateTime',
        'card_authorization_reference_number' => null,
        'card_expiration_month' => 'int32',
        'card_expiration_year' => 'int32',
        'card_number' => null,
        'card_number_token' => null,
        'card_number_truncated' => null,
        'card_type' => null,
        'card_verification_number_token' => null,
        'dual_vaulted' => null
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
        'card_auth_ticket' => 'card_auth_ticket',
        'card_authorization_amount' => 'card_authorization_amount',
        'card_authorization_dts' => 'card_authorization_dts',
        'card_authorization_reference_number' => 'card_authorization_reference_number',
        'card_expiration_month' => 'card_expiration_month',
        'card_expiration_year' => 'card_expiration_year',
        'card_number' => 'card_number',
        'card_number_token' => 'card_number_token',
        'card_number_truncated' => 'card_number_truncated',
        'card_type' => 'card_type',
        'card_verification_number_token' => 'card_verification_number_token',
        'dual_vaulted' => 'dual_vaulted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_auth_ticket' => 'setCardAuthTicket',
        'card_authorization_amount' => 'setCardAuthorizationAmount',
        'card_authorization_dts' => 'setCardAuthorizationDts',
        'card_authorization_reference_number' => 'setCardAuthorizationReferenceNumber',
        'card_expiration_month' => 'setCardExpirationMonth',
        'card_expiration_year' => 'setCardExpirationYear',
        'card_number' => 'setCardNumber',
        'card_number_token' => 'setCardNumberToken',
        'card_number_truncated' => 'setCardNumberTruncated',
        'card_type' => 'setCardType',
        'card_verification_number_token' => 'setCardVerificationNumberToken',
        'dual_vaulted' => 'setDualVaulted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_auth_ticket' => 'getCardAuthTicket',
        'card_authorization_amount' => 'getCardAuthorizationAmount',
        'card_authorization_dts' => 'getCardAuthorizationDts',
        'card_authorization_reference_number' => 'getCardAuthorizationReferenceNumber',
        'card_expiration_month' => 'getCardExpirationMonth',
        'card_expiration_year' => 'getCardExpirationYear',
        'card_number' => 'getCardNumber',
        'card_number_token' => 'getCardNumberToken',
        'card_number_truncated' => 'getCardNumberTruncated',
        'card_type' => 'getCardType',
        'card_verification_number_token' => 'getCardVerificationNumberToken',
        'dual_vaulted' => 'getDualVaulted'
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

    public const CARD_TYPE_AMEX = 'AMEX';
    public const CARD_TYPE_DINERS_CLUB = 'Diners Club';
    public const CARD_TYPE_DISCOVER = 'Discover';
    public const CARD_TYPE_JCB = 'JCB';
    public const CARD_TYPE_MASTER_CARD = 'MasterCard';
    public const CARD_TYPE_VISA = 'VISA';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_AMEX,
            self::CARD_TYPE_DINERS_CLUB,
            self::CARD_TYPE_DISCOVER,
            self::CARD_TYPE_JCB,
            self::CARD_TYPE_MASTER_CARD,
            self::CARD_TYPE_VISA,
        ];
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
        $this->container['card_auth_ticket'] = $data['card_auth_ticket'] ?? null;
        $this->container['card_authorization_amount'] = $data['card_authorization_amount'] ?? null;
        $this->container['card_authorization_dts'] = $data['card_authorization_dts'] ?? null;
        $this->container['card_authorization_reference_number'] = $data['card_authorization_reference_number'] ?? null;
        $this->container['card_expiration_month'] = $data['card_expiration_month'] ?? null;
        $this->container['card_expiration_year'] = $data['card_expiration_year'] ?? null;
        $this->container['card_number'] = $data['card_number'] ?? null;
        $this->container['card_number_token'] = $data['card_number_token'] ?? null;
        $this->container['card_number_truncated'] = $data['card_number_truncated'] ?? null;
        $this->container['card_type'] = $data['card_type'] ?? null;
        $this->container['card_verification_number_token'] = $data['card_verification_number_token'] ?? null;
        $this->container['dual_vaulted'] = $data['dual_vaulted'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['card_type']) && !in_array($this->container['card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'card_type', must be one of '%s'",
                $this->container['card_type'],
                implode("', '", $allowedValues)
            );
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
     * Gets card_auth_ticket
     *
     * @return string|null
     */
    public function getCardAuthTicket()
    {
        return $this->container['card_auth_ticket'];
    }

    /**
     * Sets card_auth_ticket
     *
     * @param string|null $card_auth_ticket Card authorization ticket
     *
     * @return self
     */
    public function setCardAuthTicket($card_auth_ticket)
    {
        $this->container['card_auth_ticket'] = $card_auth_ticket;

        return $this;
    }

    /**
     * Gets card_authorization_amount
     *
     * @return float|null
     */
    public function getCardAuthorizationAmount()
    {
        return $this->container['card_authorization_amount'];
    }

    /**
     * Sets card_authorization_amount
     *
     * @param float|null $card_authorization_amount Card authorization amount
     *
     * @return self
     */
    public function setCardAuthorizationAmount($card_authorization_amount)
    {
        $this->container['card_authorization_amount'] = $card_authorization_amount;

        return $this;
    }

    /**
     * Gets card_authorization_dts
     *
     * @return string|null
     */
    public function getCardAuthorizationDts()
    {
        return $this->container['card_authorization_dts'];
    }

    /**
     * Sets card_authorization_dts
     *
     * @param string|null $card_authorization_dts Card authorization date/time
     *
     * @return self
     */
    public function setCardAuthorizationDts($card_authorization_dts)
    {
        $this->container['card_authorization_dts'] = $card_authorization_dts;

        return $this;
    }

    /**
     * Gets card_authorization_reference_number
     *
     * @return string|null
     */
    public function getCardAuthorizationReferenceNumber()
    {
        return $this->container['card_authorization_reference_number'];
    }

    /**
     * Sets card_authorization_reference_number
     *
     * @param string|null $card_authorization_reference_number Card authorization reference number
     *
     * @return self
     */
    public function setCardAuthorizationReferenceNumber($card_authorization_reference_number)
    {
        $this->container['card_authorization_reference_number'] = $card_authorization_reference_number;

        return $this;
    }

    /**
     * Gets card_expiration_month
     *
     * @return int|null
     */
    public function getCardExpirationMonth()
    {
        return $this->container['card_expiration_month'];
    }

    /**
     * Sets card_expiration_month
     *
     * @param int|null $card_expiration_month Card expiration month (1-12)
     *
     * @return self
     */
    public function setCardExpirationMonth($card_expiration_month)
    {
        $this->container['card_expiration_month'] = $card_expiration_month;

        return $this;
    }

    /**
     * Gets card_expiration_year
     *
     * @return int|null
     */
    public function getCardExpirationYear()
    {
        return $this->container['card_expiration_year'];
    }

    /**
     * Sets card_expiration_year
     *
     * @param int|null $card_expiration_year Card expiration year (Four digit year)
     *
     * @return self
     */
    public function setCardExpirationYear($card_expiration_year)
    {
        $this->container['card_expiration_year'] = $card_expiration_year;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string|null
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string|null $card_number Card number (masked to last 4)
     *
     * @return self
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets card_number_token
     *
     * @return string|null
     */
    public function getCardNumberToken()
    {
        return $this->container['card_number_token'];
    }

    /**
     * Sets card_number_token
     *
     * @param string|null $card_number_token Card number token from hosted fields used to update the card number
     *
     * @return self
     */
    public function setCardNumberToken($card_number_token)
    {
        $this->container['card_number_token'] = $card_number_token;

        return $this;
    }

    /**
     * Gets card_number_truncated
     *
     * @return bool|null
     */
    public function getCardNumberTruncated()
    {
        return $this->container['card_number_truncated'];
    }

    /**
     * Sets card_number_truncated
     *
     * @param bool|null $card_number_truncated True if the card has been truncated
     *
     * @return self
     */
    public function setCardNumberTruncated($card_number_truncated)
    {
        $this->container['card_number_truncated'] = $card_number_truncated;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string|null $card_type Card type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'card_type', must be one of '%s'",
                    $card_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets card_verification_number_token
     *
     * @return string|null
     */
    public function getCardVerificationNumberToken()
    {
        return $this->container['card_verification_number_token'];
    }

    /**
     * Sets card_verification_number_token
     *
     * @param string|null $card_verification_number_token Card verification number token from hosted fields, only for import/insert of new orders, completely ignored for updates, and always null/empty for queries
     *
     * @return self
     */
    public function setCardVerificationNumberToken($card_verification_number_token)
    {
        $this->container['card_verification_number_token'] = $card_verification_number_token;

        return $this;
    }

    /**
     * Gets dual_vaulted
     *
     * @return \ultracart\v2\models\OrderPaymentCreditCardDualVaulted|null
     */
    public function getDualVaulted()
    {
        return $this->container['dual_vaulted'];
    }

    /**
     * Sets dual_vaulted
     *
     * @param \ultracart\v2\models\OrderPaymentCreditCardDualVaulted|null $dual_vaulted dual_vaulted
     *
     * @return self
     */
    public function setDualVaulted($dual_vaulted)
    {
        $this->container['dual_vaulted'] = $dual_vaulted;

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


