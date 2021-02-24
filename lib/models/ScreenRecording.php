<?php
/**
 * ScreenRecording
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
 * ScreenRecording Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreenRecording implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreenRecording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'analytics_client_oid' => 'int',
        'analytics_session_dts' => 'int',
        'analytics_session_oid' => 'int',
        'email' => 'string',
        'end_timestamp' => 'string',
        'esp_customer_uuid' => 'string',
        'events_gz_size' => 'int',
        'events_json_key' => 'string',
        'favorite' => 'bool',
        'favorites' => 'int[]',
        'geolocation' => '\ultracart\v2\models\GeoPoint',
        'geolocation_country' => 'string',
        'geolocation_state' => 'string',
        'merchant_id' => 'string',
        'order_id' => 'string',
        'page_view_count' => 'int',
        'page_views' => '\ultracart\v2\models\ScreenRecordingPageView[]',
        'rrweb_version' => 'string',
        'screen_recording_uuid' => 'string',
        'signed_download_url' => 'string',
        'start_timestamp' => 'string',
        'storefront_oids' => 'int[]',
        'storefronts' => '\ultracart\v2\models\ScreenRecordingStoreFront[]',
        'tags' => 'string[]',
        'time_on_site' => 'int',
        'ucacid' => 'string',
        'user_agent' => '\ultracart\v2\models\ScreenRecordingUserAgent',
        'user_agent_raw' => 'string',
        'user_ip' => 'string',
        'user_properties' => '\ultracart\v2\models\ScreenRecordingUserProperty[]',
        'watched' => 'bool',
        'window_height' => 'int',
        'window_width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'analytics_client_oid' => 'int64',
        'analytics_session_dts' => 'int64',
        'analytics_session_oid' => 'int64',
        'email' => null,
        'end_timestamp' => 'dateTime',
        'esp_customer_uuid' => null,
        'events_gz_size' => 'int32',
        'events_json_key' => null,
        'favorite' => null,
        'favorites' => null,
        'geolocation' => null,
        'geolocation_country' => null,
        'geolocation_state' => null,
        'merchant_id' => null,
        'order_id' => null,
        'page_view_count' => 'int32',
        'page_views' => null,
        'rrweb_version' => null,
        'screen_recording_uuid' => null,
        'signed_download_url' => null,
        'start_timestamp' => 'dateTime',
        'storefront_oids' => null,
        'storefronts' => null,
        'tags' => null,
        'time_on_site' => 'int32',
        'ucacid' => null,
        'user_agent' => null,
        'user_agent_raw' => null,
        'user_ip' => null,
        'user_properties' => null,
        'watched' => null,
        'window_height' => 'int32',
        'window_width' => 'int32'
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
        'analytics_client_oid' => 'analytics_client_oid',
        'analytics_session_dts' => 'analytics_session_dts',
        'analytics_session_oid' => 'analytics_session_oid',
        'email' => 'email',
        'end_timestamp' => 'end_timestamp',
        'esp_customer_uuid' => 'esp_customer_uuid',
        'events_gz_size' => 'events_gz_size',
        'events_json_key' => 'events_json_key',
        'favorite' => 'favorite',
        'favorites' => 'favorites',
        'geolocation' => 'geolocation',
        'geolocation_country' => 'geolocation_country',
        'geolocation_state' => 'geolocation_state',
        'merchant_id' => 'merchant_id',
        'order_id' => 'order_id',
        'page_view_count' => 'page_view_count',
        'page_views' => 'page_views',
        'rrweb_version' => 'rrweb_version',
        'screen_recording_uuid' => 'screen_recording_uuid',
        'signed_download_url' => 'signed_download_url',
        'start_timestamp' => 'start_timestamp',
        'storefront_oids' => 'storefront_oids',
        'storefronts' => 'storefronts',
        'tags' => 'tags',
        'time_on_site' => 'time_on_site',
        'ucacid' => 'ucacid',
        'user_agent' => 'user_agent',
        'user_agent_raw' => 'user_agent_raw',
        'user_ip' => 'user_ip',
        'user_properties' => 'user_properties',
        'watched' => 'watched',
        'window_height' => 'window_height',
        'window_width' => 'window_width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'analytics_client_oid' => 'setAnalyticsClientOid',
        'analytics_session_dts' => 'setAnalyticsSessionDts',
        'analytics_session_oid' => 'setAnalyticsSessionOid',
        'email' => 'setEmail',
        'end_timestamp' => 'setEndTimestamp',
        'esp_customer_uuid' => 'setEspCustomerUuid',
        'events_gz_size' => 'setEventsGzSize',
        'events_json_key' => 'setEventsJsonKey',
        'favorite' => 'setFavorite',
        'favorites' => 'setFavorites',
        'geolocation' => 'setGeolocation',
        'geolocation_country' => 'setGeolocationCountry',
        'geolocation_state' => 'setGeolocationState',
        'merchant_id' => 'setMerchantId',
        'order_id' => 'setOrderId',
        'page_view_count' => 'setPageViewCount',
        'page_views' => 'setPageViews',
        'rrweb_version' => 'setRrwebVersion',
        'screen_recording_uuid' => 'setScreenRecordingUuid',
        'signed_download_url' => 'setSignedDownloadUrl',
        'start_timestamp' => 'setStartTimestamp',
        'storefront_oids' => 'setStorefrontOids',
        'storefronts' => 'setStorefronts',
        'tags' => 'setTags',
        'time_on_site' => 'setTimeOnSite',
        'ucacid' => 'setUcacid',
        'user_agent' => 'setUserAgent',
        'user_agent_raw' => 'setUserAgentRaw',
        'user_ip' => 'setUserIp',
        'user_properties' => 'setUserProperties',
        'watched' => 'setWatched',
        'window_height' => 'setWindowHeight',
        'window_width' => 'setWindowWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'analytics_client_oid' => 'getAnalyticsClientOid',
        'analytics_session_dts' => 'getAnalyticsSessionDts',
        'analytics_session_oid' => 'getAnalyticsSessionOid',
        'email' => 'getEmail',
        'end_timestamp' => 'getEndTimestamp',
        'esp_customer_uuid' => 'getEspCustomerUuid',
        'events_gz_size' => 'getEventsGzSize',
        'events_json_key' => 'getEventsJsonKey',
        'favorite' => 'getFavorite',
        'favorites' => 'getFavorites',
        'geolocation' => 'getGeolocation',
        'geolocation_country' => 'getGeolocationCountry',
        'geolocation_state' => 'getGeolocationState',
        'merchant_id' => 'getMerchantId',
        'order_id' => 'getOrderId',
        'page_view_count' => 'getPageViewCount',
        'page_views' => 'getPageViews',
        'rrweb_version' => 'getRrwebVersion',
        'screen_recording_uuid' => 'getScreenRecordingUuid',
        'signed_download_url' => 'getSignedDownloadUrl',
        'start_timestamp' => 'getStartTimestamp',
        'storefront_oids' => 'getStorefrontOids',
        'storefronts' => 'getStorefronts',
        'tags' => 'getTags',
        'time_on_site' => 'getTimeOnSite',
        'ucacid' => 'getUcacid',
        'user_agent' => 'getUserAgent',
        'user_agent_raw' => 'getUserAgentRaw',
        'user_ip' => 'getUserIp',
        'user_properties' => 'getUserProperties',
        'watched' => 'getWatched',
        'window_height' => 'getWindowHeight',
        'window_width' => 'getWindowWidth'
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
        $this->container['analytics_client_oid'] = isset($data['analytics_client_oid']) ? $data['analytics_client_oid'] : null;
        $this->container['analytics_session_dts'] = isset($data['analytics_session_dts']) ? $data['analytics_session_dts'] : null;
        $this->container['analytics_session_oid'] = isset($data['analytics_session_oid']) ? $data['analytics_session_oid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['end_timestamp'] = isset($data['end_timestamp']) ? $data['end_timestamp'] : null;
        $this->container['esp_customer_uuid'] = isset($data['esp_customer_uuid']) ? $data['esp_customer_uuid'] : null;
        $this->container['events_gz_size'] = isset($data['events_gz_size']) ? $data['events_gz_size'] : null;
        $this->container['events_json_key'] = isset($data['events_json_key']) ? $data['events_json_key'] : null;
        $this->container['favorite'] = isset($data['favorite']) ? $data['favorite'] : null;
        $this->container['favorites'] = isset($data['favorites']) ? $data['favorites'] : null;
        $this->container['geolocation'] = isset($data['geolocation']) ? $data['geolocation'] : null;
        $this->container['geolocation_country'] = isset($data['geolocation_country']) ? $data['geolocation_country'] : null;
        $this->container['geolocation_state'] = isset($data['geolocation_state']) ? $data['geolocation_state'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['page_view_count'] = isset($data['page_view_count']) ? $data['page_view_count'] : null;
        $this->container['page_views'] = isset($data['page_views']) ? $data['page_views'] : null;
        $this->container['rrweb_version'] = isset($data['rrweb_version']) ? $data['rrweb_version'] : null;
        $this->container['screen_recording_uuid'] = isset($data['screen_recording_uuid']) ? $data['screen_recording_uuid'] : null;
        $this->container['signed_download_url'] = isset($data['signed_download_url']) ? $data['signed_download_url'] : null;
        $this->container['start_timestamp'] = isset($data['start_timestamp']) ? $data['start_timestamp'] : null;
        $this->container['storefront_oids'] = isset($data['storefront_oids']) ? $data['storefront_oids'] : null;
        $this->container['storefronts'] = isset($data['storefronts']) ? $data['storefronts'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['time_on_site'] = isset($data['time_on_site']) ? $data['time_on_site'] : null;
        $this->container['ucacid'] = isset($data['ucacid']) ? $data['ucacid'] : null;
        $this->container['user_agent'] = isset($data['user_agent']) ? $data['user_agent'] : null;
        $this->container['user_agent_raw'] = isset($data['user_agent_raw']) ? $data['user_agent_raw'] : null;
        $this->container['user_ip'] = isset($data['user_ip']) ? $data['user_ip'] : null;
        $this->container['user_properties'] = isset($data['user_properties']) ? $data['user_properties'] : null;
        $this->container['watched'] = isset($data['watched']) ? $data['watched'] : null;
        $this->container['window_height'] = isset($data['window_height']) ? $data['window_height'] : null;
        $this->container['window_width'] = isset($data['window_width']) ? $data['window_width'] : null;
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
     * Gets analytics_client_oid
     *
     * @return int
     */
    public function getAnalyticsClientOid()
    {
        return $this->container['analytics_client_oid'];
    }

    /**
     * Sets analytics_client_oid
     *
     * @param int $analytics_client_oid analytics_client_oid
     *
     * @return $this
     */
    public function setAnalyticsClientOid($analytics_client_oid)
    {
        $this->container['analytics_client_oid'] = $analytics_client_oid;

        return $this;
    }

    /**
     * Gets analytics_session_dts
     *
     * @return int
     */
    public function getAnalyticsSessionDts()
    {
        return $this->container['analytics_session_dts'];
    }

    /**
     * Sets analytics_session_dts
     *
     * @param int $analytics_session_dts analytics_session_dts
     *
     * @return $this
     */
    public function setAnalyticsSessionDts($analytics_session_dts)
    {
        $this->container['analytics_session_dts'] = $analytics_session_dts;

        return $this;
    }

    /**
     * Gets analytics_session_oid
     *
     * @return int
     */
    public function getAnalyticsSessionOid()
    {
        return $this->container['analytics_session_oid'];
    }

    /**
     * Sets analytics_session_oid
     *
     * @param int $analytics_session_oid analytics_session_oid
     *
     * @return $this
     */
    public function setAnalyticsSessionOid($analytics_session_oid)
    {
        $this->container['analytics_session_oid'] = $analytics_session_oid;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets end_timestamp
     *
     * @return string
     */
    public function getEndTimestamp()
    {
        return $this->container['end_timestamp'];
    }

    /**
     * Sets end_timestamp
     *
     * @param string $end_timestamp Ending timestamp
     *
     * @return $this
     */
    public function setEndTimestamp($end_timestamp)
    {
        $this->container['end_timestamp'] = $end_timestamp;

        return $this;
    }

    /**
     * Gets esp_customer_uuid
     *
     * @return string
     */
    public function getEspCustomerUuid()
    {
        return $this->container['esp_customer_uuid'];
    }

    /**
     * Sets esp_customer_uuid
     *
     * @param string $esp_customer_uuid esp_customer_uuid
     *
     * @return $this
     */
    public function setEspCustomerUuid($esp_customer_uuid)
    {
        $this->container['esp_customer_uuid'] = $esp_customer_uuid;

        return $this;
    }

    /**
     * Gets events_gz_size
     *
     * @return int
     */
    public function getEventsGzSize()
    {
        return $this->container['events_gz_size'];
    }

    /**
     * Sets events_gz_size
     *
     * @param int $events_gz_size events_gz_size
     *
     * @return $this
     */
    public function setEventsGzSize($events_gz_size)
    {
        $this->container['events_gz_size'] = $events_gz_size;

        return $this;
    }

    /**
     * Gets events_json_key
     *
     * @return string
     */
    public function getEventsJsonKey()
    {
        return $this->container['events_json_key'];
    }

    /**
     * Sets events_json_key
     *
     * @param string $events_json_key events_json_key
     *
     * @return $this
     */
    public function setEventsJsonKey($events_json_key)
    {
        $this->container['events_json_key'] = $events_json_key;

        return $this;
    }

    /**
     * Gets favorite
     *
     * @return bool
     */
    public function getFavorite()
    {
        return $this->container['favorite'];
    }

    /**
     * Sets favorite
     *
     * @param bool $favorite True if the user calling the API has favorited this particular screen recording.
     *
     * @return $this
     */
    public function setFavorite($favorite)
    {
        $this->container['favorite'] = $favorite;

        return $this;
    }

    /**
     * Gets favorites
     *
     * @return int[]
     */
    public function getFavorites()
    {
        return $this->container['favorites'];
    }

    /**
     * Sets favorites
     *
     * @param int[] $favorites Array of user ids that favorited this particular screen recording.
     *
     * @return $this
     */
    public function setFavorites($favorites)
    {
        $this->container['favorites'] = $favorites;

        return $this;
    }

    /**
     * Gets geolocation
     *
     * @return \ultracart\v2\models\GeoPoint
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation
     *
     * @param \ultracart\v2\models\GeoPoint $geolocation geolocation
     *
     * @return $this
     */
    public function setGeolocation($geolocation)
    {
        $this->container['geolocation'] = $geolocation;

        return $this;
    }

    /**
     * Gets geolocation_country
     *
     * @return string
     */
    public function getGeolocationCountry()
    {
        return $this->container['geolocation_country'];
    }

    /**
     * Sets geolocation_country
     *
     * @param string $geolocation_country geolocation_country
     *
     * @return $this
     */
    public function setGeolocationCountry($geolocation_country)
    {
        $this->container['geolocation_country'] = $geolocation_country;

        return $this;
    }

    /**
     * Gets geolocation_state
     *
     * @return string
     */
    public function getGeolocationState()
    {
        return $this->container['geolocation_state'];
    }

    /**
     * Sets geolocation_state
     *
     * @param string $geolocation_state geolocation_state
     *
     * @return $this
     */
    public function setGeolocationState($geolocation_state)
    {
        $this->container['geolocation_state'] = $geolocation_state;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string $merchant_id merchant_id
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

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
     * Gets page_view_count
     *
     * @return int
     */
    public function getPageViewCount()
    {
        return $this->container['page_view_count'];
    }

    /**
     * Sets page_view_count
     *
     * @param int $page_view_count page_view_count
     *
     * @return $this
     */
    public function setPageViewCount($page_view_count)
    {
        $this->container['page_view_count'] = $page_view_count;

        return $this;
    }

    /**
     * Gets page_views
     *
     * @return \ultracart\v2\models\ScreenRecordingPageView[]
     */
    public function getPageViews()
    {
        return $this->container['page_views'];
    }

    /**
     * Sets page_views
     *
     * @param \ultracart\v2\models\ScreenRecordingPageView[] $page_views page_views
     *
     * @return $this
     */
    public function setPageViews($page_views)
    {
        $this->container['page_views'] = $page_views;

        return $this;
    }

    /**
     * Gets rrweb_version
     *
     * @return string
     */
    public function getRrwebVersion()
    {
        return $this->container['rrweb_version'];
    }

    /**
     * Sets rrweb_version
     *
     * @param string $rrweb_version rrweb_version
     *
     * @return $this
     */
    public function setRrwebVersion($rrweb_version)
    {
        $this->container['rrweb_version'] = $rrweb_version;

        return $this;
    }

    /**
     * Gets screen_recording_uuid
     *
     * @return string
     */
    public function getScreenRecordingUuid()
    {
        return $this->container['screen_recording_uuid'];
    }

    /**
     * Sets screen_recording_uuid
     *
     * @param string $screen_recording_uuid screen_recording_uuid
     *
     * @return $this
     */
    public function setScreenRecordingUuid($screen_recording_uuid)
    {
        $this->container['screen_recording_uuid'] = $screen_recording_uuid;

        return $this;
    }

    /**
     * Gets signed_download_url
     *
     * @return string
     */
    public function getSignedDownloadUrl()
    {
        return $this->container['signed_download_url'];
    }

    /**
     * Sets signed_download_url
     *
     * @param string $signed_download_url signed_download_url
     *
     * @return $this
     */
    public function setSignedDownloadUrl($signed_download_url)
    {
        $this->container['signed_download_url'] = $signed_download_url;

        return $this;
    }

    /**
     * Gets start_timestamp
     *
     * @return string
     */
    public function getStartTimestamp()
    {
        return $this->container['start_timestamp'];
    }

    /**
     * Sets start_timestamp
     *
     * @param string $start_timestamp Starting timestamp
     *
     * @return $this
     */
    public function setStartTimestamp($start_timestamp)
    {
        $this->container['start_timestamp'] = $start_timestamp;

        return $this;
    }

    /**
     * Gets storefront_oids
     *
     * @return int[]
     */
    public function getStorefrontOids()
    {
        return $this->container['storefront_oids'];
    }

    /**
     * Sets storefront_oids
     *
     * @param int[] $storefront_oids storefront_oids
     *
     * @return $this
     */
    public function setStorefrontOids($storefront_oids)
    {
        $this->container['storefront_oids'] = $storefront_oids;

        return $this;
    }

    /**
     * Gets storefronts
     *
     * @return \ultracart\v2\models\ScreenRecordingStoreFront[]
     */
    public function getStorefronts()
    {
        return $this->container['storefronts'];
    }

    /**
     * Sets storefronts
     *
     * @param \ultracart\v2\models\ScreenRecordingStoreFront[] $storefronts storefronts
     *
     * @return $this
     */
    public function setStorefronts($storefronts)
    {
        $this->container['storefronts'] = $storefronts;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets time_on_site
     *
     * @return int
     */
    public function getTimeOnSite()
    {
        return $this->container['time_on_site'];
    }

    /**
     * Sets time_on_site
     *
     * @param int $time_on_site time_on_site
     *
     * @return $this
     */
    public function setTimeOnSite($time_on_site)
    {
        $this->container['time_on_site'] = $time_on_site;

        return $this;
    }

    /**
     * Gets ucacid
     *
     * @return string
     */
    public function getUcacid()
    {
        return $this->container['ucacid'];
    }

    /**
     * Sets ucacid
     *
     * @param string $ucacid ucacid
     *
     * @return $this
     */
    public function setUcacid($ucacid)
    {
        $this->container['ucacid'] = $ucacid;

        return $this;
    }

    /**
     * Gets user_agent
     *
     * @return \ultracart\v2\models\ScreenRecordingUserAgent
     */
    public function getUserAgent()
    {
        return $this->container['user_agent'];
    }

    /**
     * Sets user_agent
     *
     * @param \ultracart\v2\models\ScreenRecordingUserAgent $user_agent user_agent
     *
     * @return $this
     */
    public function setUserAgent($user_agent)
    {
        $this->container['user_agent'] = $user_agent;

        return $this;
    }

    /**
     * Gets user_agent_raw
     *
     * @return string
     */
    public function getUserAgentRaw()
    {
        return $this->container['user_agent_raw'];
    }

    /**
     * Sets user_agent_raw
     *
     * @param string $user_agent_raw user_agent_raw
     *
     * @return $this
     */
    public function setUserAgentRaw($user_agent_raw)
    {
        $this->container['user_agent_raw'] = $user_agent_raw;

        return $this;
    }

    /**
     * Gets user_ip
     *
     * @return string
     */
    public function getUserIp()
    {
        return $this->container['user_ip'];
    }

    /**
     * Sets user_ip
     *
     * @param string $user_ip user_ip
     *
     * @return $this
     */
    public function setUserIp($user_ip)
    {
        $this->container['user_ip'] = $user_ip;

        return $this;
    }

    /**
     * Gets user_properties
     *
     * @return \ultracart\v2\models\ScreenRecordingUserProperty[]
     */
    public function getUserProperties()
    {
        return $this->container['user_properties'];
    }

    /**
     * Sets user_properties
     *
     * @param \ultracart\v2\models\ScreenRecordingUserProperty[] $user_properties user_properties
     *
     * @return $this
     */
    public function setUserProperties($user_properties)
    {
        $this->container['user_properties'] = $user_properties;

        return $this;
    }

    /**
     * Gets watched
     *
     * @return bool
     */
    public function getWatched()
    {
        return $this->container['watched'];
    }

    /**
     * Sets watched
     *
     * @param bool $watched watched
     *
     * @return $this
     */
    public function setWatched($watched)
    {
        $this->container['watched'] = $watched;

        return $this;
    }

    /**
     * Gets window_height
     *
     * @return int
     */
    public function getWindowHeight()
    {
        return $this->container['window_height'];
    }

    /**
     * Sets window_height
     *
     * @param int $window_height window_height
     *
     * @return $this
     */
    public function setWindowHeight($window_height)
    {
        $this->container['window_height'] = $window_height;

        return $this;
    }

    /**
     * Gets window_width
     *
     * @return int
     */
    public function getWindowWidth()
    {
        return $this->container['window_width'];
    }

    /**
     * Sets window_width
     *
     * @param int $window_width window_width
     *
     * @return $this
     */
    public function setWindowWidth($window_width)
    {
        $this->container['window_width'] = $window_width;

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

