<?php
/**
 * HitSessionStart
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
 * HitSessionStart Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HitSessionStart implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HitSessionStart';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bot' => 'bool',
        'bounce' => 'bool',
        'channel' => 'string',
        'device_switch_detected' => 'bool',
        'fake_bot' => 'bool',
        'geolocation_country' => 'string',
        'geolocation_latitude' => 'float',
        'geolocation_longitude' => 'float',
        'geolocation_province' => 'string',
        'no_cookie_support' => 'bool',
        'prefetch' => 'bool',
        'referrer' => 'string',
        'screen_height' => 'int',
        'screen_width' => 'int',
        'time_on_site' => 'float',
        'user_agent' => 'string',
        'user_ip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bot' => null,
        'bounce' => null,
        'channel' => null,
        'device_switch_detected' => null,
        'fake_bot' => null,
        'geolocation_country' => null,
        'geolocation_latitude' => null,
        'geolocation_longitude' => null,
        'geolocation_province' => null,
        'no_cookie_support' => null,
        'prefetch' => null,
        'referrer' => null,
        'screen_height' => 'int32',
        'screen_width' => 'int32',
        'time_on_site' => null,
        'user_agent' => null,
        'user_ip' => null
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
        'bot' => 'bot',
        'bounce' => 'bounce',
        'channel' => 'channel',
        'device_switch_detected' => 'device_switch_detected',
        'fake_bot' => 'fake_bot',
        'geolocation_country' => 'geolocation_country',
        'geolocation_latitude' => 'geolocation_latitude',
        'geolocation_longitude' => 'geolocation_longitude',
        'geolocation_province' => 'geolocation_province',
        'no_cookie_support' => 'no_cookie_support',
        'prefetch' => 'prefetch',
        'referrer' => 'referrer',
        'screen_height' => 'screen_height',
        'screen_width' => 'screen_width',
        'time_on_site' => 'time_on_Site',
        'user_agent' => 'user_agent',
        'user_ip' => 'user_ip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bot' => 'setBot',
        'bounce' => 'setBounce',
        'channel' => 'setChannel',
        'device_switch_detected' => 'setDeviceSwitchDetected',
        'fake_bot' => 'setFakeBot',
        'geolocation_country' => 'setGeolocationCountry',
        'geolocation_latitude' => 'setGeolocationLatitude',
        'geolocation_longitude' => 'setGeolocationLongitude',
        'geolocation_province' => 'setGeolocationProvince',
        'no_cookie_support' => 'setNoCookieSupport',
        'prefetch' => 'setPrefetch',
        'referrer' => 'setReferrer',
        'screen_height' => 'setScreenHeight',
        'screen_width' => 'setScreenWidth',
        'time_on_site' => 'setTimeOnSite',
        'user_agent' => 'setUserAgent',
        'user_ip' => 'setUserIp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bot' => 'getBot',
        'bounce' => 'getBounce',
        'channel' => 'getChannel',
        'device_switch_detected' => 'getDeviceSwitchDetected',
        'fake_bot' => 'getFakeBot',
        'geolocation_country' => 'getGeolocationCountry',
        'geolocation_latitude' => 'getGeolocationLatitude',
        'geolocation_longitude' => 'getGeolocationLongitude',
        'geolocation_province' => 'getGeolocationProvince',
        'no_cookie_support' => 'getNoCookieSupport',
        'prefetch' => 'getPrefetch',
        'referrer' => 'getReferrer',
        'screen_height' => 'getScreenHeight',
        'screen_width' => 'getScreenWidth',
        'time_on_site' => 'getTimeOnSite',
        'user_agent' => 'getUserAgent',
        'user_ip' => 'getUserIp'
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
        $this->container['bot'] = $data['bot'] ?? null;
        $this->container['bounce'] = $data['bounce'] ?? null;
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['device_switch_detected'] = $data['device_switch_detected'] ?? null;
        $this->container['fake_bot'] = $data['fake_bot'] ?? null;
        $this->container['geolocation_country'] = $data['geolocation_country'] ?? null;
        $this->container['geolocation_latitude'] = $data['geolocation_latitude'] ?? null;
        $this->container['geolocation_longitude'] = $data['geolocation_longitude'] ?? null;
        $this->container['geolocation_province'] = $data['geolocation_province'] ?? null;
        $this->container['no_cookie_support'] = $data['no_cookie_support'] ?? null;
        $this->container['prefetch'] = $data['prefetch'] ?? null;
        $this->container['referrer'] = $data['referrer'] ?? null;
        $this->container['screen_height'] = $data['screen_height'] ?? null;
        $this->container['screen_width'] = $data['screen_width'] ?? null;
        $this->container['time_on_site'] = $data['time_on_site'] ?? null;
        $this->container['user_agent'] = $data['user_agent'] ?? null;
        $this->container['user_ip'] = $data['user_ip'] ?? null;
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
     * Gets bot
     *
     * @return bool|null
     */
    public function getBot()
    {
        return $this->container['bot'];
    }

    /**
     * Sets bot
     *
     * @param bool|null $bot bot
     *
     * @return self
     */
    public function setBot($bot)
    {
        $this->container['bot'] = $bot;

        return $this;
    }

    /**
     * Gets bounce
     *
     * @return bool|null
     */
    public function getBounce()
    {
        return $this->container['bounce'];
    }

    /**
     * Sets bounce
     *
     * @param bool|null $bounce bounce
     *
     * @return self
     */
    public function setBounce($bounce)
    {
        $this->container['bounce'] = $bounce;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets device_switch_detected
     *
     * @return bool|null
     */
    public function getDeviceSwitchDetected()
    {
        return $this->container['device_switch_detected'];
    }

    /**
     * Sets device_switch_detected
     *
     * @param bool|null $device_switch_detected device_switch_detected
     *
     * @return self
     */
    public function setDeviceSwitchDetected($device_switch_detected)
    {
        $this->container['device_switch_detected'] = $device_switch_detected;

        return $this;
    }

    /**
     * Gets fake_bot
     *
     * @return bool|null
     */
    public function getFakeBot()
    {
        return $this->container['fake_bot'];
    }

    /**
     * Sets fake_bot
     *
     * @param bool|null $fake_bot fake_bot
     *
     * @return self
     */
    public function setFakeBot($fake_bot)
    {
        $this->container['fake_bot'] = $fake_bot;

        return $this;
    }

    /**
     * Gets geolocation_country
     *
     * @return string|null
     */
    public function getGeolocationCountry()
    {
        return $this->container['geolocation_country'];
    }

    /**
     * Sets geolocation_country
     *
     * @param string|null $geolocation_country geolocation_country
     *
     * @return self
     */
    public function setGeolocationCountry($geolocation_country)
    {
        $this->container['geolocation_country'] = $geolocation_country;

        return $this;
    }

    /**
     * Gets geolocation_latitude
     *
     * @return float|null
     */
    public function getGeolocationLatitude()
    {
        return $this->container['geolocation_latitude'];
    }

    /**
     * Sets geolocation_latitude
     *
     * @param float|null $geolocation_latitude geolocation_latitude
     *
     * @return self
     */
    public function setGeolocationLatitude($geolocation_latitude)
    {
        $this->container['geolocation_latitude'] = $geolocation_latitude;

        return $this;
    }

    /**
     * Gets geolocation_longitude
     *
     * @return float|null
     */
    public function getGeolocationLongitude()
    {
        return $this->container['geolocation_longitude'];
    }

    /**
     * Sets geolocation_longitude
     *
     * @param float|null $geolocation_longitude geolocation_longitude
     *
     * @return self
     */
    public function setGeolocationLongitude($geolocation_longitude)
    {
        $this->container['geolocation_longitude'] = $geolocation_longitude;

        return $this;
    }

    /**
     * Gets geolocation_province
     *
     * @return string|null
     */
    public function getGeolocationProvince()
    {
        return $this->container['geolocation_province'];
    }

    /**
     * Sets geolocation_province
     *
     * @param string|null $geolocation_province geolocation_province
     *
     * @return self
     */
    public function setGeolocationProvince($geolocation_province)
    {
        $this->container['geolocation_province'] = $geolocation_province;

        return $this;
    }

    /**
     * Gets no_cookie_support
     *
     * @return bool|null
     */
    public function getNoCookieSupport()
    {
        return $this->container['no_cookie_support'];
    }

    /**
     * Sets no_cookie_support
     *
     * @param bool|null $no_cookie_support no_cookie_support
     *
     * @return self
     */
    public function setNoCookieSupport($no_cookie_support)
    {
        $this->container['no_cookie_support'] = $no_cookie_support;

        return $this;
    }

    /**
     * Gets prefetch
     *
     * @return bool|null
     */
    public function getPrefetch()
    {
        return $this->container['prefetch'];
    }

    /**
     * Sets prefetch
     *
     * @param bool|null $prefetch prefetch
     *
     * @return self
     */
    public function setPrefetch($prefetch)
    {
        $this->container['prefetch'] = $prefetch;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string|null
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string|null $referrer referrer
     *
     * @return self
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets screen_height
     *
     * @return int|null
     */
    public function getScreenHeight()
    {
        return $this->container['screen_height'];
    }

    /**
     * Sets screen_height
     *
     * @param int|null $screen_height screen_height
     *
     * @return self
     */
    public function setScreenHeight($screen_height)
    {
        $this->container['screen_height'] = $screen_height;

        return $this;
    }

    /**
     * Gets screen_width
     *
     * @return int|null
     */
    public function getScreenWidth()
    {
        return $this->container['screen_width'];
    }

    /**
     * Sets screen_width
     *
     * @param int|null $screen_width screen_width
     *
     * @return self
     */
    public function setScreenWidth($screen_width)
    {
        $this->container['screen_width'] = $screen_width;

        return $this;
    }

    /**
     * Gets time_on_site
     *
     * @return float|null
     */
    public function getTimeOnSite()
    {
        return $this->container['time_on_site'];
    }

    /**
     * Sets time_on_site
     *
     * @param float|null $time_on_site time_on_site
     *
     * @return self
     */
    public function setTimeOnSite($time_on_site)
    {
        $this->container['time_on_site'] = $time_on_site;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return string|null
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param string|null $user_agent user_agent
     *
     * @return self
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets user_ip
     *
     * @return string|null
     */
    public function getUserIp()
    {
        return $this->container['user_ip'];
    }

    /**
     * Sets user_ip
     *
     * @param string|null $user_ip user_ip
     *
     * @return self
     */
    public function setUserIp($user_ip)
    {
        $this->container['user_ip'] = $user_ip;

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


