<?php
/**
 * ScreenRecordingPageView
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
 * ScreenRecordingPageView Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreenRecordingPageView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreenRecordingPageView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'events' => '\ultracart\v2\models\ScreenRecordingPageViewEvent[]',
        'first_event_timestamp' => 'string',
        'http_post' => 'bool',
        'last_event_timestamp' => 'string',
        'params' => '\ultracart\v2\models\ScreenRecordingPageViewParameter[]',
        'range_end' => 'int',
        'range_start' => 'int',
        'referrer' => 'string',
        'referrer_params' => '\ultracart\v2\models\ScreenRecordingPageViewParameter[]',
        'referrer_raw' => 'string',
        'screen_recording_page_view_uuid' => 'string',
        'time_on_page' => 'int',
        'truncated_events' => 'bool',
        'ucapv' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'events' => null,
        'first_event_timestamp' => 'dateTime',
        'http_post' => null,
        'last_event_timestamp' => 'dateTime',
        'params' => null,
        'range_end' => 'int32',
        'range_start' => 'int32',
        'referrer' => null,
        'referrer_params' => null,
        'referrer_raw' => null,
        'screen_recording_page_view_uuid' => null,
        'time_on_page' => 'int32',
        'truncated_events' => null,
        'ucapv' => null,
        'url' => null
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
        'events' => 'events',
        'first_event_timestamp' => 'first_event_timestamp',
        'http_post' => 'http_post',
        'last_event_timestamp' => 'last_event_timestamp',
        'params' => 'params',
        'range_end' => 'range_end',
        'range_start' => 'range_start',
        'referrer' => 'referrer',
        'referrer_params' => 'referrer_params',
        'referrer_raw' => 'referrer_raw',
        'screen_recording_page_view_uuid' => 'screen_recording_page_view_uuid',
        'time_on_page' => 'time_on_page',
        'truncated_events' => 'truncated_events',
        'ucapv' => 'ucapv',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'events' => 'setEvents',
        'first_event_timestamp' => 'setFirstEventTimestamp',
        'http_post' => 'setHttpPost',
        'last_event_timestamp' => 'setLastEventTimestamp',
        'params' => 'setParams',
        'range_end' => 'setRangeEnd',
        'range_start' => 'setRangeStart',
        'referrer' => 'setReferrer',
        'referrer_params' => 'setReferrerParams',
        'referrer_raw' => 'setReferrerRaw',
        'screen_recording_page_view_uuid' => 'setScreenRecordingPageViewUuid',
        'time_on_page' => 'setTimeOnPage',
        'truncated_events' => 'setTruncatedEvents',
        'ucapv' => 'setUcapv',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'events' => 'getEvents',
        'first_event_timestamp' => 'getFirstEventTimestamp',
        'http_post' => 'getHttpPost',
        'last_event_timestamp' => 'getLastEventTimestamp',
        'params' => 'getParams',
        'range_end' => 'getRangeEnd',
        'range_start' => 'getRangeStart',
        'referrer' => 'getReferrer',
        'referrer_params' => 'getReferrerParams',
        'referrer_raw' => 'getReferrerRaw',
        'screen_recording_page_view_uuid' => 'getScreenRecordingPageViewUuid',
        'time_on_page' => 'getTimeOnPage',
        'truncated_events' => 'getTruncatedEvents',
        'ucapv' => 'getUcapv',
        'url' => 'getUrl'
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
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['first_event_timestamp'] = isset($data['first_event_timestamp']) ? $data['first_event_timestamp'] : null;
        $this->container['http_post'] = isset($data['http_post']) ? $data['http_post'] : null;
        $this->container['last_event_timestamp'] = isset($data['last_event_timestamp']) ? $data['last_event_timestamp'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['range_end'] = isset($data['range_end']) ? $data['range_end'] : null;
        $this->container['range_start'] = isset($data['range_start']) ? $data['range_start'] : null;
        $this->container['referrer'] = isset($data['referrer']) ? $data['referrer'] : null;
        $this->container['referrer_params'] = isset($data['referrer_params']) ? $data['referrer_params'] : null;
        $this->container['referrer_raw'] = isset($data['referrer_raw']) ? $data['referrer_raw'] : null;
        $this->container['screen_recording_page_view_uuid'] = isset($data['screen_recording_page_view_uuid']) ? $data['screen_recording_page_view_uuid'] : null;
        $this->container['time_on_page'] = isset($data['time_on_page']) ? $data['time_on_page'] : null;
        $this->container['truncated_events'] = isset($data['truncated_events']) ? $data['truncated_events'] : null;
        $this->container['ucapv'] = isset($data['ucapv']) ? $data['ucapv'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
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
     * Gets events
     *
     * @return \ultracart\v2\models\ScreenRecordingPageViewEvent[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param \ultracart\v2\models\ScreenRecordingPageViewEvent[] $events events
     *
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets first_event_timestamp
     *
     * @return string
     */
    public function getFirstEventTimestamp()
    {
        return $this->container['first_event_timestamp'];
    }

    /**
     * Sets first_event_timestamp
     *
     * @param string $first_event_timestamp First event timestamp
     *
     * @return $this
     */
    public function setFirstEventTimestamp($first_event_timestamp)
    {
        $this->container['first_event_timestamp'] = $first_event_timestamp;

        return $this;
    }

    /**
     * Gets http_post
     *
     * @return bool
     */
    public function getHttpPost()
    {
        return $this->container['http_post'];
    }

    /**
     * Sets http_post
     *
     * @param bool $http_post http_post
     *
     * @return $this
     */
    public function setHttpPost($http_post)
    {
        $this->container['http_post'] = $http_post;

        return $this;
    }

    /**
     * Gets last_event_timestamp
     *
     * @return string
     */
    public function getLastEventTimestamp()
    {
        return $this->container['last_event_timestamp'];
    }

    /**
     * Sets last_event_timestamp
     *
     * @param string $last_event_timestamp Last event timestamp
     *
     * @return $this
     */
    public function setLastEventTimestamp($last_event_timestamp)
    {
        $this->container['last_event_timestamp'] = $last_event_timestamp;

        return $this;
    }

    /**
     * Gets params
     *
     * @return \ultracart\v2\models\ScreenRecordingPageViewParameter[]
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param \ultracart\v2\models\ScreenRecordingPageViewParameter[] $params params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets range_end
     *
     * @return int
     */
    public function getRangeEnd()
    {
        return $this->container['range_end'];
    }

    /**
     * Sets range_end
     *
     * @param int $range_end range_end
     *
     * @return $this
     */
    public function setRangeEnd($range_end)
    {
        $this->container['range_end'] = $range_end;

        return $this;
    }

    /**
     * Gets range_start
     *
     * @return int
     */
    public function getRangeStart()
    {
        return $this->container['range_start'];
    }

    /**
     * Sets range_start
     *
     * @param int $range_start range_start
     *
     * @return $this
     */
    public function setRangeStart($range_start)
    {
        $this->container['range_start'] = $range_start;

        return $this;
    }

    /**
     * Gets referrer
     *
     * @return string
     */
    public function getReferrer()
    {
        return $this->container['referrer'];
    }

    /**
     * Sets referrer
     *
     * @param string $referrer referrer
     *
     * @return $this
     */
    public function setReferrer($referrer)
    {
        $this->container['referrer'] = $referrer;

        return $this;
    }

    /**
     * Gets referrer_params
     *
     * @return \ultracart\v2\models\ScreenRecordingPageViewParameter[]
     */
    public function getReferrerParams()
    {
        return $this->container['referrer_params'];
    }

    /**
     * Sets referrer_params
     *
     * @param \ultracart\v2\models\ScreenRecordingPageViewParameter[] $referrer_params referrer_params
     *
     * @return $this
     */
    public function setReferrerParams($referrer_params)
    {
        $this->container['referrer_params'] = $referrer_params;

        return $this;
    }

    /**
     * Gets referrer_raw
     *
     * @return string
     */
    public function getReferrerRaw()
    {
        return $this->container['referrer_raw'];
    }

    /**
     * Sets referrer_raw
     *
     * @param string $referrer_raw referrer_raw
     *
     * @return $this
     */
    public function setReferrerRaw($referrer_raw)
    {
        $this->container['referrer_raw'] = $referrer_raw;

        return $this;
    }

    /**
     * Gets screen_recording_page_view_uuid
     *
     * @return string
     */
    public function getScreenRecordingPageViewUuid()
    {
        return $this->container['screen_recording_page_view_uuid'];
    }

    /**
     * Sets screen_recording_page_view_uuid
     *
     * @param string $screen_recording_page_view_uuid screen_recording_page_view_uuid
     *
     * @return $this
     */
    public function setScreenRecordingPageViewUuid($screen_recording_page_view_uuid)
    {
        $this->container['screen_recording_page_view_uuid'] = $screen_recording_page_view_uuid;

        return $this;
    }

    /**
     * Gets time_on_page
     *
     * @return int
     */
    public function getTimeOnPage()
    {
        return $this->container['time_on_page'];
    }

    /**
     * Sets time_on_page
     *
     * @param int $time_on_page time_on_page
     *
     * @return $this
     */
    public function setTimeOnPage($time_on_page)
    {
        $this->container['time_on_page'] = $time_on_page;

        return $this;
    }

    /**
     * Gets truncated_events
     *
     * @return bool
     */
    public function getTruncatedEvents()
    {
        return $this->container['truncated_events'];
    }

    /**
     * Sets truncated_events
     *
     * @param bool $truncated_events truncated_events
     *
     * @return $this
     */
    public function setTruncatedEvents($truncated_events)
    {
        $this->container['truncated_events'] = $truncated_events;

        return $this;
    }

    /**
     * Gets ucapv
     *
     * @return string
     */
    public function getUcapv()
    {
        return $this->container['ucapv'];
    }

    /**
     * Sets ucapv
     *
     * @param string $ucapv ucapv
     *
     * @return $this
     */
    public function setUcapv($ucapv)
    {
        $this->container['ucapv'] = $ucapv;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


