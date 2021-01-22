<?php
/**
 * ScreenRecordingFilter
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
 * ScreenRecordingFilter Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreenRecordingFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreenRecordingFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => '\ultracart\v2\models\ScreenRecordingFilterStringSearch',
        'email_identified' => 'bool',
        'end_timestamp' => '\ultracart\v2\models\ScreenRecordingFilterRangeDate',
        'esp_customer_uuid' => 'string',
        'favorite' => 'bool',
        'geolocation' => '\ultracart\v2\models\ScreenRecordingFilterGeoDistance',
        'geolocation_country' => '\ultracart\v2\models\ScreenRecordingFilterStringSearch',
        'geolocation_state' => '\ultracart\v2\models\ScreenRecordingFilterStringSearch',
        'max_filter_values' => 'int',
        'order_id' => '\ultracart\v2\models\ScreenRecordingFilterStringSearch',
        'page_view_count' => '\ultracart\v2\models\ScreenRecordingFilterRangeInteger',
        'page_views' => '\ultracart\v2\models\ScreenRecordingFilterPageView[]',
        'placed_order' => 'bool',
        'screen_recording_uuids' => 'string[]',
        'screen_sizes' => 'string[]',
        'skip_filter_values' => 'bool',
        'skip_hits' => 'bool',
        'start_timestamp' => '\ultracart\v2\models\ScreenRecordingFilterRangeDate',
        'tags' => 'string[]',
        'time_on_site' => '\ultracart\v2\models\ScreenRecordingFilterRangeInteger',
        'user_agent_device_name' => 'string',
        'user_agent_name' => 'string',
        'user_agent_original' => '\ultracart\v2\models\ScreenRecordingFilterStringSearch',
        'user_agent_os_name' => 'string',
        'user_agent_os_version' => 'string',
        'user_ip' => '\ultracart\v2\models\ScreenRecordingFilterIpSearch',
        'watched' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'email_identified' => null,
        'end_timestamp' => null,
        'esp_customer_uuid' => null,
        'favorite' => null,
        'geolocation' => null,
        'geolocation_country' => null,
        'geolocation_state' => null,
        'max_filter_values' => 'int32',
        'order_id' => null,
        'page_view_count' => null,
        'page_views' => null,
        'placed_order' => null,
        'screen_recording_uuids' => null,
        'screen_sizes' => null,
        'skip_filter_values' => null,
        'skip_hits' => null,
        'start_timestamp' => null,
        'tags' => null,
        'time_on_site' => null,
        'user_agent_device_name' => null,
        'user_agent_name' => null,
        'user_agent_original' => null,
        'user_agent_os_name' => null,
        'user_agent_os_version' => null,
        'user_ip' => null,
        'watched' => null
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
        'email' => 'email',
        'email_identified' => 'email_identified',
        'end_timestamp' => 'end_timestamp',
        'esp_customer_uuid' => 'esp_customer_uuid',
        'favorite' => 'favorite',
        'geolocation' => 'geolocation',
        'geolocation_country' => 'geolocation_country',
        'geolocation_state' => 'geolocation_state',
        'max_filter_values' => 'max_filter_values',
        'order_id' => 'order_id',
        'page_view_count' => 'page_view_count',
        'page_views' => 'page_views',
        'placed_order' => 'placed_order',
        'screen_recording_uuids' => 'screen_recording_uuids',
        'screen_sizes' => 'screen_sizes',
        'skip_filter_values' => 'skip_filter_values',
        'skip_hits' => 'skip_hits',
        'start_timestamp' => 'start_timestamp',
        'tags' => 'tags',
        'time_on_site' => 'time_on_site',
        'user_agent_device_name' => 'user_agent_device_name',
        'user_agent_name' => 'user_agent_name',
        'user_agent_original' => 'user_agent_original',
        'user_agent_os_name' => 'user_agent_os_name',
        'user_agent_os_version' => 'user_agent_os_version',
        'user_ip' => 'user_ip',
        'watched' => 'watched'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'email_identified' => 'setEmailIdentified',
        'end_timestamp' => 'setEndTimestamp',
        'esp_customer_uuid' => 'setEspCustomerUuid',
        'favorite' => 'setFavorite',
        'geolocation' => 'setGeolocation',
        'geolocation_country' => 'setGeolocationCountry',
        'geolocation_state' => 'setGeolocationState',
        'max_filter_values' => 'setMaxFilterValues',
        'order_id' => 'setOrderId',
        'page_view_count' => 'setPageViewCount',
        'page_views' => 'setPageViews',
        'placed_order' => 'setPlacedOrder',
        'screen_recording_uuids' => 'setScreenRecordingUuids',
        'screen_sizes' => 'setScreenSizes',
        'skip_filter_values' => 'setSkipFilterValues',
        'skip_hits' => 'setSkipHits',
        'start_timestamp' => 'setStartTimestamp',
        'tags' => 'setTags',
        'time_on_site' => 'setTimeOnSite',
        'user_agent_device_name' => 'setUserAgentDeviceName',
        'user_agent_name' => 'setUserAgentName',
        'user_agent_original' => 'setUserAgentOriginal',
        'user_agent_os_name' => 'setUserAgentOsName',
        'user_agent_os_version' => 'setUserAgentOsVersion',
        'user_ip' => 'setUserIp',
        'watched' => 'setWatched'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'email_identified' => 'getEmailIdentified',
        'end_timestamp' => 'getEndTimestamp',
        'esp_customer_uuid' => 'getEspCustomerUuid',
        'favorite' => 'getFavorite',
        'geolocation' => 'getGeolocation',
        'geolocation_country' => 'getGeolocationCountry',
        'geolocation_state' => 'getGeolocationState',
        'max_filter_values' => 'getMaxFilterValues',
        'order_id' => 'getOrderId',
        'page_view_count' => 'getPageViewCount',
        'page_views' => 'getPageViews',
        'placed_order' => 'getPlacedOrder',
        'screen_recording_uuids' => 'getScreenRecordingUuids',
        'screen_sizes' => 'getScreenSizes',
        'skip_filter_values' => 'getSkipFilterValues',
        'skip_hits' => 'getSkipHits',
        'start_timestamp' => 'getStartTimestamp',
        'tags' => 'getTags',
        'time_on_site' => 'getTimeOnSite',
        'user_agent_device_name' => 'getUserAgentDeviceName',
        'user_agent_name' => 'getUserAgentName',
        'user_agent_original' => 'getUserAgentOriginal',
        'user_agent_os_name' => 'getUserAgentOsName',
        'user_agent_os_version' => 'getUserAgentOsVersion',
        'user_ip' => 'getUserIp',
        'watched' => 'getWatched'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['email_identified'] = isset($data['email_identified']) ? $data['email_identified'] : null;
        $this->container['end_timestamp'] = isset($data['end_timestamp']) ? $data['end_timestamp'] : null;
        $this->container['esp_customer_uuid'] = isset($data['esp_customer_uuid']) ? $data['esp_customer_uuid'] : null;
        $this->container['favorite'] = isset($data['favorite']) ? $data['favorite'] : null;
        $this->container['geolocation'] = isset($data['geolocation']) ? $data['geolocation'] : null;
        $this->container['geolocation_country'] = isset($data['geolocation_country']) ? $data['geolocation_country'] : null;
        $this->container['geolocation_state'] = isset($data['geolocation_state']) ? $data['geolocation_state'] : null;
        $this->container['max_filter_values'] = isset($data['max_filter_values']) ? $data['max_filter_values'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['page_view_count'] = isset($data['page_view_count']) ? $data['page_view_count'] : null;
        $this->container['page_views'] = isset($data['page_views']) ? $data['page_views'] : null;
        $this->container['placed_order'] = isset($data['placed_order']) ? $data['placed_order'] : null;
        $this->container['screen_recording_uuids'] = isset($data['screen_recording_uuids']) ? $data['screen_recording_uuids'] : null;
        $this->container['screen_sizes'] = isset($data['screen_sizes']) ? $data['screen_sizes'] : null;
        $this->container['skip_filter_values'] = isset($data['skip_filter_values']) ? $data['skip_filter_values'] : null;
        $this->container['skip_hits'] = isset($data['skip_hits']) ? $data['skip_hits'] : null;
        $this->container['start_timestamp'] = isset($data['start_timestamp']) ? $data['start_timestamp'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['time_on_site'] = isset($data['time_on_site']) ? $data['time_on_site'] : null;
        $this->container['user_agent_device_name'] = isset($data['user_agent_device_name']) ? $data['user_agent_device_name'] : null;
        $this->container['user_agent_name'] = isset($data['user_agent_name']) ? $data['user_agent_name'] : null;
        $this->container['user_agent_original'] = isset($data['user_agent_original']) ? $data['user_agent_original'] : null;
        $this->container['user_agent_os_name'] = isset($data['user_agent_os_name']) ? $data['user_agent_os_name'] : null;
        $this->container['user_agent_os_version'] = isset($data['user_agent_os_version']) ? $data['user_agent_os_version'] : null;
        $this->container['user_ip'] = isset($data['user_ip']) ? $data['user_ip'] : null;
        $this->container['watched'] = isset($data['watched']) ? $data['watched'] : null;
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
     * Gets email
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterStringSearch
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterStringSearch $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets email_identified
     *
     * @return bool
     */
    public function getEmailIdentified()
    {
        return $this->container['email_identified'];
    }

    /**
     * Sets email_identified
     *
     * @param bool $email_identified email_identified
     *
     * @return $this
     */
    public function setEmailIdentified($email_identified)
    {
        $this->container['email_identified'] = $email_identified;

        return $this;
    }

    /**
     * Gets end_timestamp
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterRangeDate
     */
    public function getEndTimestamp()
    {
        return $this->container['end_timestamp'];
    }

    /**
     * Sets end_timestamp
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterRangeDate $end_timestamp end_timestamp
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
     * @param bool $favorite favorite
     *
     * @return $this
     */
    public function setFavorite($favorite)
    {
        $this->container['favorite'] = $favorite;

        return $this;
    }

    /**
     * Gets geolocation
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterGeoDistance
     */
    public function getGeolocation()
    {
        return $this->container['geolocation'];
    }

    /**
     * Sets geolocation
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterGeoDistance $geolocation geolocation
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
     * @return \ultracart\v2\models\ScreenRecordingFilterStringSearch
     */
    public function getGeolocationCountry()
    {
        return $this->container['geolocation_country'];
    }

    /**
     * Sets geolocation_country
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterStringSearch $geolocation_country geolocation_country
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
     * @return \ultracart\v2\models\ScreenRecordingFilterStringSearch
     */
    public function getGeolocationState()
    {
        return $this->container['geolocation_state'];
    }

    /**
     * Sets geolocation_state
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterStringSearch $geolocation_state geolocation_state
     *
     * @return $this
     */
    public function setGeolocationState($geolocation_state)
    {
        $this->container['geolocation_state'] = $geolocation_state;

        return $this;
    }

    /**
     * Gets max_filter_values
     *
     * @return int
     */
    public function getMaxFilterValues()
    {
        return $this->container['max_filter_values'];
    }

    /**
     * Sets max_filter_values
     *
     * @param int $max_filter_values max_filter_values
     *
     * @return $this
     */
    public function setMaxFilterValues($max_filter_values)
    {
        $this->container['max_filter_values'] = $max_filter_values;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterStringSearch
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterStringSearch $order_id order_id
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
     * @return \ultracart\v2\models\ScreenRecordingFilterRangeInteger
     */
    public function getPageViewCount()
    {
        return $this->container['page_view_count'];
    }

    /**
     * Sets page_view_count
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterRangeInteger $page_view_count page_view_count
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
     * @return \ultracart\v2\models\ScreenRecordingFilterPageView[]
     */
    public function getPageViews()
    {
        return $this->container['page_views'];
    }

    /**
     * Sets page_views
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterPageView[] $page_views page_views
     *
     * @return $this
     */
    public function setPageViews($page_views)
    {
        $this->container['page_views'] = $page_views;

        return $this;
    }

    /**
     * Gets placed_order
     *
     * @return bool
     */
    public function getPlacedOrder()
    {
        return $this->container['placed_order'];
    }

    /**
     * Sets placed_order
     *
     * @param bool $placed_order placed_order
     *
     * @return $this
     */
    public function setPlacedOrder($placed_order)
    {
        $this->container['placed_order'] = $placed_order;

        return $this;
    }

    /**
     * Gets screen_recording_uuids
     *
     * @return string[]
     */
    public function getScreenRecordingUuids()
    {
        return $this->container['screen_recording_uuids'];
    }

    /**
     * Sets screen_recording_uuids
     *
     * @param string[] $screen_recording_uuids screen_recording_uuids
     *
     * @return $this
     */
    public function setScreenRecordingUuids($screen_recording_uuids)
    {
        $this->container['screen_recording_uuids'] = $screen_recording_uuids;

        return $this;
    }

    /**
     * Gets screen_sizes
     *
     * @return string[]
     */
    public function getScreenSizes()
    {
        return $this->container['screen_sizes'];
    }

    /**
     * Sets screen_sizes
     *
     * @param string[] $screen_sizes screen_sizes
     *
     * @return $this
     */
    public function setScreenSizes($screen_sizes)
    {
        $this->container['screen_sizes'] = $screen_sizes;

        return $this;
    }

    /**
     * Gets skip_filter_values
     *
     * @return bool
     */
    public function getSkipFilterValues()
    {
        return $this->container['skip_filter_values'];
    }

    /**
     * Sets skip_filter_values
     *
     * @param bool $skip_filter_values skip_filter_values
     *
     * @return $this
     */
    public function setSkipFilterValues($skip_filter_values)
    {
        $this->container['skip_filter_values'] = $skip_filter_values;

        return $this;
    }

    /**
     * Gets skip_hits
     *
     * @return bool
     */
    public function getSkipHits()
    {
        return $this->container['skip_hits'];
    }

    /**
     * Sets skip_hits
     *
     * @param bool $skip_hits skip_hits
     *
     * @return $this
     */
    public function setSkipHits($skip_hits)
    {
        $this->container['skip_hits'] = $skip_hits;

        return $this;
    }

    /**
     * Gets start_timestamp
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterRangeDate
     */
    public function getStartTimestamp()
    {
        return $this->container['start_timestamp'];
    }

    /**
     * Sets start_timestamp
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterRangeDate $start_timestamp start_timestamp
     *
     * @return $this
     */
    public function setStartTimestamp($start_timestamp)
    {
        $this->container['start_timestamp'] = $start_timestamp;

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
     * @return \ultracart\v2\models\ScreenRecordingFilterRangeInteger
     */
    public function getTimeOnSite()
    {
        return $this->container['time_on_site'];
    }

    /**
     * Sets time_on_site
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterRangeInteger $time_on_site time_on_site
     *
     * @return $this
     */
    public function setTimeOnSite($time_on_site)
    {
        $this->container['time_on_site'] = $time_on_site;

        return $this;
    }

    /**
     * Gets user_agent_device_name
     *
     * @return string
     */
    public function getUserAgentDeviceName()
    {
        return $this->container['user_agent_device_name'];
    }

    /**
     * Sets user_agent_device_name
     *
     * @param string $user_agent_device_name user_agent_device_name
     *
     * @return $this
     */
    public function setUserAgentDeviceName($user_agent_device_name)
    {
        $this->container['user_agent_device_name'] = $user_agent_device_name;

        return $this;
    }

    /**
     * Gets user_agent_name
     *
     * @return string
     */
    public function getUserAgentName()
    {
        return $this->container['user_agent_name'];
    }

    /**
     * Sets user_agent_name
     *
     * @param string $user_agent_name user_agent_name
     *
     * @return $this
     */
    public function setUserAgentName($user_agent_name)
    {
        $this->container['user_agent_name'] = $user_agent_name;

        return $this;
    }

    /**
     * Gets user_agent_original
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterStringSearch
     */
    public function getUserAgentOriginal()
    {
        return $this->container['user_agent_original'];
    }

    /**
     * Sets user_agent_original
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterStringSearch $user_agent_original user_agent_original
     *
     * @return $this
     */
    public function setUserAgentOriginal($user_agent_original)
    {
        $this->container['user_agent_original'] = $user_agent_original;

        return $this;
    }

    /**
     * Gets user_agent_os_name
     *
     * @return string
     */
    public function getUserAgentOsName()
    {
        return $this->container['user_agent_os_name'];
    }

    /**
     * Sets user_agent_os_name
     *
     * @param string $user_agent_os_name user_agent_os_name
     *
     * @return $this
     */
    public function setUserAgentOsName($user_agent_os_name)
    {
        $this->container['user_agent_os_name'] = $user_agent_os_name;

        return $this;
    }

    /**
     * Gets user_agent_os_version
     *
     * @return string
     */
    public function getUserAgentOsVersion()
    {
        return $this->container['user_agent_os_version'];
    }

    /**
     * Sets user_agent_os_version
     *
     * @param string $user_agent_os_version user_agent_os_version
     *
     * @return $this
     */
    public function setUserAgentOsVersion($user_agent_os_version)
    {
        $this->container['user_agent_os_version'] = $user_agent_os_version;

        return $this;
    }

    /**
     * Gets user_ip
     *
     * @return \ultracart\v2\models\ScreenRecordingFilterIpSearch
     */
    public function getUserIp()
    {
        return $this->container['user_ip'];
    }

    /**
     * Sets user_ip
     *
     * @param \ultracart\v2\models\ScreenRecordingFilterIpSearch $user_ip user_ip
     *
     * @return $this
     */
    public function setUserIp($user_ip)
    {
        $this->container['user_ip'] = $user_ip;

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


