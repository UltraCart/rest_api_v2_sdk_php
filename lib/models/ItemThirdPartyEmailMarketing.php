<?php
/**
 * ItemThirdPartyEmailMarketing
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
 * ItemThirdPartyEmailMarketing Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemThirdPartyEmailMarketing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemThirdPartyEmailMarketing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'add_tags' => 'string[]',
        'provider_name' => 'string',
        'remove_tags' => 'string[]',
        'subscribe_lists' => 'string[]',
        'unsubscribe_lists' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'add_tags' => null,
        'provider_name' => null,
        'remove_tags' => null,
        'subscribe_lists' => null,
        'unsubscribe_lists' => null
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
        'add_tags' => 'add_tags',
        'provider_name' => 'provider_name',
        'remove_tags' => 'remove_tags',
        'subscribe_lists' => 'subscribe_lists',
        'unsubscribe_lists' => 'unsubscribe_lists'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'add_tags' => 'setAddTags',
        'provider_name' => 'setProviderName',
        'remove_tags' => 'setRemoveTags',
        'subscribe_lists' => 'setSubscribeLists',
        'unsubscribe_lists' => 'setUnsubscribeLists'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'add_tags' => 'getAddTags',
        'provider_name' => 'getProviderName',
        'remove_tags' => 'getRemoveTags',
        'subscribe_lists' => 'getSubscribeLists',
        'unsubscribe_lists' => 'getUnsubscribeLists'
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

    public const PROVIDER_NAME_ACTIVE_CAMPAIGN = 'ActiveCampaign';
    public const PROVIDER_NAME_A_WEBER = 'AWeber';
    public const PROVIDER_NAME_CAMPAIGN_MONITOR = 'Campaign Monitor';
    public const PROVIDER_NAME_CONSTANT_CONTACT = 'ConstantContact';
    public const PROVIDER_NAME_EMMA = 'Emma';
    public const PROVIDER_NAME_GET_RESPONSE = 'GetResponse';
    public const PROVIDER_NAME_I_CONTACT = 'iContact';
    public const PROVIDER_NAME_KLAVIYO = 'Klaviyo';
    public const PROVIDER_NAME_LYRIS = 'Lyris';
    public const PROVIDER_NAME_LYRIS_HQ = 'LyrisHQ';
    public const PROVIDER_NAME_MAIL_CHIMP = 'MailChimp';
    public const PROVIDER_NAME_SILVER_POP = 'SilverPop';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProviderNameAllowableValues()
    {
        return [
            self::PROVIDER_NAME_ACTIVE_CAMPAIGN,
            self::PROVIDER_NAME_A_WEBER,
            self::PROVIDER_NAME_CAMPAIGN_MONITOR,
            self::PROVIDER_NAME_CONSTANT_CONTACT,
            self::PROVIDER_NAME_EMMA,
            self::PROVIDER_NAME_GET_RESPONSE,
            self::PROVIDER_NAME_I_CONTACT,
            self::PROVIDER_NAME_KLAVIYO,
            self::PROVIDER_NAME_LYRIS,
            self::PROVIDER_NAME_LYRIS_HQ,
            self::PROVIDER_NAME_MAIL_CHIMP,
            self::PROVIDER_NAME_SILVER_POP,
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
        $this->container['add_tags'] = $data['add_tags'] ?? null;
        $this->container['provider_name'] = $data['provider_name'] ?? null;
        $this->container['remove_tags'] = $data['remove_tags'] ?? null;
        $this->container['subscribe_lists'] = $data['subscribe_lists'] ?? null;
        $this->container['unsubscribe_lists'] = $data['unsubscribe_lists'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getProviderNameAllowableValues();
        if (!is_null($this->container['provider_name']) && !in_array($this->container['provider_name'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'provider_name', must be one of '%s'",
                $this->container['provider_name'],
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
     * Gets add_tags
     *
     * @return string[]|null
     */
    public function getAddTags()
    {
        return $this->container['add_tags'];
    }

    /**
     * Sets add_tags
     *
     * @param string[]|null $add_tags Add tags
     *
     * @return self
     */
    public function setAddTags($add_tags)
    {
        $this->container['add_tags'] = $add_tags;

        return $this;
    }

    /**
     * Gets provider_name
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->container['provider_name'];
    }

    /**
     * Sets provider_name
     *
     * @param string|null $provider_name Provider name
     *
     * @return self
     */
    public function setProviderName($provider_name)
    {
        $allowedValues = $this->getProviderNameAllowableValues();
        if (!is_null($provider_name) && !in_array($provider_name, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'provider_name', must be one of '%s'",
                    $provider_name,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['provider_name'] = $provider_name;

        return $this;
    }

    /**
     * Gets remove_tags
     *
     * @return string[]|null
     */
    public function getRemoveTags()
    {
        return $this->container['remove_tags'];
    }

    /**
     * Sets remove_tags
     *
     * @param string[]|null $remove_tags Remove tags
     *
     * @return self
     */
    public function setRemoveTags($remove_tags)
    {
        $this->container['remove_tags'] = $remove_tags;

        return $this;
    }

    /**
     * Gets subscribe_lists
     *
     * @return string[]|null
     */
    public function getSubscribeLists()
    {
        return $this->container['subscribe_lists'];
    }

    /**
     * Sets subscribe_lists
     *
     * @param string[]|null $subscribe_lists Subscribe to lists
     *
     * @return self
     */
    public function setSubscribeLists($subscribe_lists)
    {
        $this->container['subscribe_lists'] = $subscribe_lists;

        return $this;
    }

    /**
     * Gets unsubscribe_lists
     *
     * @return string[]|null
     */
    public function getUnsubscribeLists()
    {
        return $this->container['unsubscribe_lists'];
    }

    /**
     * Sets unsubscribe_lists
     *
     * @param string[]|null $unsubscribe_lists Unsubscribe from lists
     *
     * @return self
     */
    public function setUnsubscribeLists($unsubscribe_lists)
    {
        $this->container['unsubscribe_lists'] = $unsubscribe_lists;

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


