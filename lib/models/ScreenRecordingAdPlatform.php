<?php
/**
 * ScreenRecordingAdPlatform
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
 * ScreenRecordingAdPlatform Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScreenRecordingAdPlatform implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScreenRecordingAdPlatform';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fbc' => 'string',
        'fbclid' => 'string',
        'fbp' => 'string',
        'gacid' => 'string',
        'glcid' => 'string',
        'msclkid' => 'string',
        'ttclid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fbc' => null,
        'fbclid' => null,
        'fbp' => null,
        'gacid' => null,
        'glcid' => null,
        'msclkid' => null,
        'ttclid' => null
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
        'fbc' => 'fbc',
        'fbclid' => 'fbclid',
        'fbp' => 'fbp',
        'gacid' => 'gacid',
        'glcid' => 'glcid',
        'msclkid' => 'msclkid',
        'ttclid' => 'ttclid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fbc' => 'setFbc',
        'fbclid' => 'setFbclid',
        'fbp' => 'setFbp',
        'gacid' => 'setGacid',
        'glcid' => 'setGlcid',
        'msclkid' => 'setMsclkid',
        'ttclid' => 'setTtclid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fbc' => 'getFbc',
        'fbclid' => 'getFbclid',
        'fbp' => 'getFbp',
        'gacid' => 'getGacid',
        'glcid' => 'getGlcid',
        'msclkid' => 'getMsclkid',
        'ttclid' => 'getTtclid'
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
        $this->container['fbc'] = $data['fbc'] ?? null;
        $this->container['fbclid'] = $data['fbclid'] ?? null;
        $this->container['fbp'] = $data['fbp'] ?? null;
        $this->container['gacid'] = $data['gacid'] ?? null;
        $this->container['glcid'] = $data['glcid'] ?? null;
        $this->container['msclkid'] = $data['msclkid'] ?? null;
        $this->container['ttclid'] = $data['ttclid'] ?? null;
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
     * Gets fbc
     *
     * @return string|null
     */
    public function getFbc()
    {
        return $this->container['fbc'];
    }

    /**
     * Sets fbc
     *
     * @param string|null $fbc Facebook Click Id (Cookie)
     *
     * @return self
     */
    public function setFbc($fbc)
    {
        $this->container['fbc'] = $fbc;

        return $this;
    }

    /**
     * Gets fbclid
     *
     * @return string|null
     */
    public function getFbclid()
    {
        return $this->container['fbclid'];
    }

    /**
     * Sets fbclid
     *
     * @param string|null $fbclid Facebook Click Id Parameter (Parameter)
     *
     * @return self
     */
    public function setFbclid($fbclid)
    {
        $this->container['fbclid'] = $fbclid;

        return $this;
    }

    /**
     * Gets fbp
     *
     * @return string|null
     */
    public function getFbp()
    {
        return $this->container['fbp'];
    }

    /**
     * Sets fbp
     *
     * @param string|null $fbp Facebook Browser Id (Cookie)
     *
     * @return self
     */
    public function setFbp($fbp)
    {
        $this->container['fbp'] = $fbp;

        return $this;
    }

    /**
     * Gets gacid
     *
     * @return string|null
     */
    public function getGacid()
    {
        return $this->container['gacid'];
    }

    /**
     * Sets gacid
     *
     * @param string|null $gacid Google Analytics CID (Cookie)
     *
     * @return self
     */
    public function setGacid($gacid)
    {
        $this->container['gacid'] = $gacid;

        return $this;
    }

    /**
     * Gets glcid
     *
     * @return string|null
     */
    public function getGlcid()
    {
        return $this->container['glcid'];
    }

    /**
     * Sets glcid
     *
     * @param string|null $glcid Google Adwords Click Id (Parameter)
     *
     * @return self
     */
    public function setGlcid($glcid)
    {
        $this->container['glcid'] = $glcid;

        return $this;
    }

    /**
     * Gets msclkid
     *
     * @return string|null
     */
    public function getMsclkid()
    {
        return $this->container['msclkid'];
    }

    /**
     * Sets msclkid
     *
     * @param string|null $msclkid Bing Click Id (Parameter
     *
     * @return self
     */
    public function setMsclkid($msclkid)
    {
        $this->container['msclkid'] = $msclkid;

        return $this;
    }

    /**
     * Gets ttclid
     *
     * @return string|null
     */
    public function getTtclid()
    {
        return $this->container['ttclid'];
    }

    /**
     * Sets ttclid
     *
     * @param string|null $ttclid TikTok Click Id (Parameter
     *
     * @return self
     */
    public function setTtclid($ttclid)
    {
        $this->container['ttclid'] = $ttclid;

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


