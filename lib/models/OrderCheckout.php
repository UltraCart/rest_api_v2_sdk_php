<?php
/**
 * OrderCheckout
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
 * OrderCheckout Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderCheckout implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderCheckout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'browser' => '\ultracart\v2\models\Browser',
        'comments' => 'string',
        'custom_field1' => 'string',
        'custom_field2' => 'string',
        'custom_field3' => 'string',
        'custom_field4' => 'string',
        'custom_field5' => 'string',
        'custom_field6' => 'string',
        'custom_field7' => 'string',
        'customer_ip_address' => 'string',
        'screen_branding_theme_code' => 'string',
        'screen_size' => 'string',
        'storefront_host_name' => 'string',
        'upsell_path_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'browser' => null,
        'comments' => null,
        'custom_field1' => null,
        'custom_field2' => null,
        'custom_field3' => null,
        'custom_field4' => null,
        'custom_field5' => null,
        'custom_field6' => null,
        'custom_field7' => null,
        'customer_ip_address' => null,
        'screen_branding_theme_code' => null,
        'screen_size' => null,
        'storefront_host_name' => null,
        'upsell_path_code' => null
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
        'browser' => 'browser',
        'comments' => 'comments',
        'custom_field1' => 'custom_field1',
        'custom_field2' => 'custom_field2',
        'custom_field3' => 'custom_field3',
        'custom_field4' => 'custom_field4',
        'custom_field5' => 'custom_field5',
        'custom_field6' => 'custom_field6',
        'custom_field7' => 'custom_field7',
        'customer_ip_address' => 'customer_ip_address',
        'screen_branding_theme_code' => 'screen_branding_theme_code',
        'screen_size' => 'screen_size',
        'storefront_host_name' => 'storefront_host_name',
        'upsell_path_code' => 'upsell_path_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'browser' => 'setBrowser',
        'comments' => 'setComments',
        'custom_field1' => 'setCustomField1',
        'custom_field2' => 'setCustomField2',
        'custom_field3' => 'setCustomField3',
        'custom_field4' => 'setCustomField4',
        'custom_field5' => 'setCustomField5',
        'custom_field6' => 'setCustomField6',
        'custom_field7' => 'setCustomField7',
        'customer_ip_address' => 'setCustomerIpAddress',
        'screen_branding_theme_code' => 'setScreenBrandingThemeCode',
        'screen_size' => 'setScreenSize',
        'storefront_host_name' => 'setStorefrontHostName',
        'upsell_path_code' => 'setUpsellPathCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'browser' => 'getBrowser',
        'comments' => 'getComments',
        'custom_field1' => 'getCustomField1',
        'custom_field2' => 'getCustomField2',
        'custom_field3' => 'getCustomField3',
        'custom_field4' => 'getCustomField4',
        'custom_field5' => 'getCustomField5',
        'custom_field6' => 'getCustomField6',
        'custom_field7' => 'getCustomField7',
        'customer_ip_address' => 'getCustomerIpAddress',
        'screen_branding_theme_code' => 'getScreenBrandingThemeCode',
        'screen_size' => 'getScreenSize',
        'storefront_host_name' => 'getStorefrontHostName',
        'upsell_path_code' => 'getUpsellPathCode'
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
        $this->container['browser'] = $data['browser'] ?? null;
        $this->container['comments'] = $data['comments'] ?? null;
        $this->container['custom_field1'] = $data['custom_field1'] ?? null;
        $this->container['custom_field2'] = $data['custom_field2'] ?? null;
        $this->container['custom_field3'] = $data['custom_field3'] ?? null;
        $this->container['custom_field4'] = $data['custom_field4'] ?? null;
        $this->container['custom_field5'] = $data['custom_field5'] ?? null;
        $this->container['custom_field6'] = $data['custom_field6'] ?? null;
        $this->container['custom_field7'] = $data['custom_field7'] ?? null;
        $this->container['customer_ip_address'] = $data['customer_ip_address'] ?? null;
        $this->container['screen_branding_theme_code'] = $data['screen_branding_theme_code'] ?? null;
        $this->container['screen_size'] = $data['screen_size'] ?? null;
        $this->container['storefront_host_name'] = $data['storefront_host_name'] ?? null;
        $this->container['upsell_path_code'] = $data['upsell_path_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['custom_field1']) && (mb_strlen($this->container['custom_field1']) > 50)) {
            $invalidProperties[] = "invalid value for 'custom_field1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field2']) && (mb_strlen($this->container['custom_field2']) > 50)) {
            $invalidProperties[] = "invalid value for 'custom_field2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field3']) && (mb_strlen($this->container['custom_field3']) > 50)) {
            $invalidProperties[] = "invalid value for 'custom_field3', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field4']) && (mb_strlen($this->container['custom_field4']) > 50)) {
            $invalidProperties[] = "invalid value for 'custom_field4', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field5']) && (mb_strlen($this->container['custom_field5']) > 75)) {
            $invalidProperties[] = "invalid value for 'custom_field5', the character length must be smaller than or equal to 75.";
        }

        if (!is_null($this->container['custom_field6']) && (mb_strlen($this->container['custom_field6']) > 50)) {
            $invalidProperties[] = "invalid value for 'custom_field6', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['custom_field7']) && (mb_strlen($this->container['custom_field7']) > 50)) {
            $invalidProperties[] = "invalid value for 'custom_field7', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['screen_branding_theme_code']) && (mb_strlen($this->container['screen_branding_theme_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'screen_branding_theme_code', the character length must be smaller than or equal to 10.";
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
     * Gets browser
     *
     * @return \ultracart\v2\models\Browser|null
     */
    public function getBrowser()
    {
        return $this->container['browser'];
    }

    /**
     * Sets browser
     *
     * @param \ultracart\v2\models\Browser|null $browser browser
     *
     * @return self
     */
    public function setBrowser($browser)
    {
        $this->container['browser'] = $browser;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string|null $comments Comments from the customer.  Rarely used on the single page checkout.
     *
     * @return self
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets custom_field1
     *
     * @return string|null
     */
    public function getCustomField1()
    {
        return $this->container['custom_field1'];
    }

    /**
     * Sets custom_field1
     *
     * @param string|null $custom_field1 Custom field 1
     *
     * @return self
     */
    public function setCustomField1($custom_field1)
    {
        if (!is_null($custom_field1) && (mb_strlen($custom_field1) > 50)) {
            throw new \InvalidArgumentException('invalid length for $custom_field1 when calling OrderCheckout., must be smaller than or equal to 50.');
        }

        $this->container['custom_field1'] = $custom_field1;

        return $this;
    }

    /**
     * Gets custom_field2
     *
     * @return string|null
     */
    public function getCustomField2()
    {
        return $this->container['custom_field2'];
    }

    /**
     * Sets custom_field2
     *
     * @param string|null $custom_field2 Custom field 2
     *
     * @return self
     */
    public function setCustomField2($custom_field2)
    {
        if (!is_null($custom_field2) && (mb_strlen($custom_field2) > 50)) {
            throw new \InvalidArgumentException('invalid length for $custom_field2 when calling OrderCheckout., must be smaller than or equal to 50.');
        }

        $this->container['custom_field2'] = $custom_field2;

        return $this;
    }

    /**
     * Gets custom_field3
     *
     * @return string|null
     */
    public function getCustomField3()
    {
        return $this->container['custom_field3'];
    }

    /**
     * Sets custom_field3
     *
     * @param string|null $custom_field3 Custom field 3
     *
     * @return self
     */
    public function setCustomField3($custom_field3)
    {
        if (!is_null($custom_field3) && (mb_strlen($custom_field3) > 50)) {
            throw new \InvalidArgumentException('invalid length for $custom_field3 when calling OrderCheckout., must be smaller than or equal to 50.');
        }

        $this->container['custom_field3'] = $custom_field3;

        return $this;
    }

    /**
     * Gets custom_field4
     *
     * @return string|null
     */
    public function getCustomField4()
    {
        return $this->container['custom_field4'];
    }

    /**
     * Sets custom_field4
     *
     * @param string|null $custom_field4 Custom field 4
     *
     * @return self
     */
    public function setCustomField4($custom_field4)
    {
        if (!is_null($custom_field4) && (mb_strlen($custom_field4) > 50)) {
            throw new \InvalidArgumentException('invalid length for $custom_field4 when calling OrderCheckout., must be smaller than or equal to 50.');
        }

        $this->container['custom_field4'] = $custom_field4;

        return $this;
    }

    /**
     * Gets custom_field5
     *
     * @return string|null
     */
    public function getCustomField5()
    {
        return $this->container['custom_field5'];
    }

    /**
     * Sets custom_field5
     *
     * @param string|null $custom_field5 Custom field 5
     *
     * @return self
     */
    public function setCustomField5($custom_field5)
    {
        if (!is_null($custom_field5) && (mb_strlen($custom_field5) > 75)) {
            throw new \InvalidArgumentException('invalid length for $custom_field5 when calling OrderCheckout., must be smaller than or equal to 75.');
        }

        $this->container['custom_field5'] = $custom_field5;

        return $this;
    }

    /**
     * Gets custom_field6
     *
     * @return string|null
     */
    public function getCustomField6()
    {
        return $this->container['custom_field6'];
    }

    /**
     * Sets custom_field6
     *
     * @param string|null $custom_field6 Custom field 6
     *
     * @return self
     */
    public function setCustomField6($custom_field6)
    {
        if (!is_null($custom_field6) && (mb_strlen($custom_field6) > 50)) {
            throw new \InvalidArgumentException('invalid length for $custom_field6 when calling OrderCheckout., must be smaller than or equal to 50.');
        }

        $this->container['custom_field6'] = $custom_field6;

        return $this;
    }

    /**
     * Gets custom_field7
     *
     * @return string|null
     */
    public function getCustomField7()
    {
        return $this->container['custom_field7'];
    }

    /**
     * Sets custom_field7
     *
     * @param string|null $custom_field7 Custom field 7
     *
     * @return self
     */
    public function setCustomField7($custom_field7)
    {
        if (!is_null($custom_field7) && (mb_strlen($custom_field7) > 50)) {
            throw new \InvalidArgumentException('invalid length for $custom_field7 when calling OrderCheckout., must be smaller than or equal to 50.');
        }

        $this->container['custom_field7'] = $custom_field7;

        return $this;
    }

    /**
     * Gets customer_ip_address
     *
     * @return string|null
     */
    public function getCustomerIpAddress()
    {
        return $this->container['customer_ip_address'];
    }

    /**
     * Sets customer_ip_address
     *
     * @param string|null $customer_ip_address IP address of the customer when placing the order
     *
     * @return self
     */
    public function setCustomerIpAddress($customer_ip_address)
    {
        $this->container['customer_ip_address'] = $customer_ip_address;

        return $this;
    }

    /**
     * Gets screen_branding_theme_code
     *
     * @return string|null
     */
    public function getScreenBrandingThemeCode()
    {
        return $this->container['screen_branding_theme_code'];
    }

    /**
     * Sets screen_branding_theme_code
     *
     * @param string|null $screen_branding_theme_code Screen branding theme code associated with the order (legacy checkout)
     *
     * @return self
     */
    public function setScreenBrandingThemeCode($screen_branding_theme_code)
    {
        if (!is_null($screen_branding_theme_code) && (mb_strlen($screen_branding_theme_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $screen_branding_theme_code when calling OrderCheckout., must be smaller than or equal to 10.');
        }

        $this->container['screen_branding_theme_code'] = $screen_branding_theme_code;

        return $this;
    }

    /**
     * Gets screen_size
     *
     * @return string|null
     */
    public function getScreenSize()
    {
        return $this->container['screen_size'];
    }

    /**
     * Sets screen_size
     *
     * @param string|null $screen_size Screen size small, medium or large
     *
     * @return self
     */
    public function setScreenSize($screen_size)
    {
        $this->container['screen_size'] = $screen_size;

        return $this;
    }

    /**
     * Gets storefront_host_name
     *
     * @return string|null
     */
    public function getStorefrontHostName()
    {
        return $this->container['storefront_host_name'];
    }

    /**
     * Sets storefront_host_name
     *
     * @param string|null $storefront_host_name StoreFront host name associated with the order
     *
     * @return self
     */
    public function setStorefrontHostName($storefront_host_name)
    {
        $this->container['storefront_host_name'] = $storefront_host_name;

        return $this;
    }

    /**
     * Gets upsell_path_code
     *
     * @return string|null
     */
    public function getUpsellPathCode()
    {
        return $this->container['upsell_path_code'];
    }

    /**
     * Sets upsell_path_code
     *
     * @param string|null $upsell_path_code Upsell path code assigned during the checkout that the customer went through
     *
     * @return self
     */
    public function setUpsellPathCode($upsell_path_code)
    {
        $this->container['upsell_path_code'] = $upsell_path_code;

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


