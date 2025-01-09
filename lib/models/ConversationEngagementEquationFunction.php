<?php
/**
 * ConversationEngagementEquationFunction
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
 * ConversationEngagementEquationFunction Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConversationEngagementEquationFunction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversationEngagementEquationFunction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'any_page_url_logic' => 'string',
        'any_page_url_value' => 'string',
        'current_page_url_logic' => 'string',
        'current_page_url_value' => 'string',
        'customers_browsing_time_logic' => 'string',
        'customers_browsing_time_seconds' => 'int',
        'customers_location_country' => 'string',
        'customers_location_logic' => 'string',
        'customers_location_state' => 'string',
        'number_of_viewed_pages_logic' => 'string',
        'number_of_viewed_pages_value' => 'int',
        'referring_website_logic' => 'string',
        'referring_website_value' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'any_page_url_logic' => null,
        'any_page_url_value' => null,
        'current_page_url_logic' => null,
        'current_page_url_value' => null,
        'customers_browsing_time_logic' => null,
        'customers_browsing_time_seconds' => 'int32',
        'customers_location_country' => null,
        'customers_location_logic' => null,
        'customers_location_state' => null,
        'number_of_viewed_pages_logic' => null,
        'number_of_viewed_pages_value' => 'int32',
        'referring_website_logic' => null,
        'referring_website_value' => null,
        'type' => null
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
        'any_page_url_logic' => 'any_page_url_logic',
        'any_page_url_value' => 'any_page_url_value',
        'current_page_url_logic' => 'current_page_url_logic',
        'current_page_url_value' => 'current_page_url_value',
        'customers_browsing_time_logic' => 'customers_browsing_time_logic',
        'customers_browsing_time_seconds' => 'customers_browsing_time_seconds',
        'customers_location_country' => 'customers_location_country',
        'customers_location_logic' => 'customers_location_logic',
        'customers_location_state' => 'customers_location_state',
        'number_of_viewed_pages_logic' => 'number_of_viewed_pages_logic',
        'number_of_viewed_pages_value' => 'number_of_viewed_pages_value',
        'referring_website_logic' => 'referring_website_logic',
        'referring_website_value' => 'referring_website_value',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'any_page_url_logic' => 'setAnyPageUrlLogic',
        'any_page_url_value' => 'setAnyPageUrlValue',
        'current_page_url_logic' => 'setCurrentPageUrlLogic',
        'current_page_url_value' => 'setCurrentPageUrlValue',
        'customers_browsing_time_logic' => 'setCustomersBrowsingTimeLogic',
        'customers_browsing_time_seconds' => 'setCustomersBrowsingTimeSeconds',
        'customers_location_country' => 'setCustomersLocationCountry',
        'customers_location_logic' => 'setCustomersLocationLogic',
        'customers_location_state' => 'setCustomersLocationState',
        'number_of_viewed_pages_logic' => 'setNumberOfViewedPagesLogic',
        'number_of_viewed_pages_value' => 'setNumberOfViewedPagesValue',
        'referring_website_logic' => 'setReferringWebsiteLogic',
        'referring_website_value' => 'setReferringWebsiteValue',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'any_page_url_logic' => 'getAnyPageUrlLogic',
        'any_page_url_value' => 'getAnyPageUrlValue',
        'current_page_url_logic' => 'getCurrentPageUrlLogic',
        'current_page_url_value' => 'getCurrentPageUrlValue',
        'customers_browsing_time_logic' => 'getCustomersBrowsingTimeLogic',
        'customers_browsing_time_seconds' => 'getCustomersBrowsingTimeSeconds',
        'customers_location_country' => 'getCustomersLocationCountry',
        'customers_location_logic' => 'getCustomersLocationLogic',
        'customers_location_state' => 'getCustomersLocationState',
        'number_of_viewed_pages_logic' => 'getNumberOfViewedPagesLogic',
        'number_of_viewed_pages_value' => 'getNumberOfViewedPagesValue',
        'referring_website_logic' => 'getReferringWebsiteLogic',
        'referring_website_value' => 'getReferringWebsiteValue',
        'type' => 'getType'
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

    public const ANY_PAGE_URL_LOGIC_CONTAINS = 'contains';
    public const ANY_PAGE_URL_LOGIC_DOES_NOT_CONTAIN = 'does not contain';
    public const ANY_PAGE_URL_LOGIC_IS_EXACTLY = 'is exactly';
    public const ANY_PAGE_URL_LOGIC_IS_NOT = 'is not';
    public const CURRENT_PAGE_URL_LOGIC_CONTAINS = 'contains';
    public const CURRENT_PAGE_URL_LOGIC_DOES_NOT_CONTAIN = 'does not contain';
    public const CURRENT_PAGE_URL_LOGIC_IS_EXACTLY = 'is exactly';
    public const CURRENT_PAGE_URL_LOGIC_IS_NOT = 'is not';
    public const CUSTOMERS_BROWSING_TIME_LOGIC_AT_LEAST = 'is at least';
    public const CUSTOMERS_BROWSING_TIME_LOGIC_MORE_THAN = 'is more than';
    public const CUSTOMERS_BROWSING_TIME_LOGIC_LESS_THAN = 'is less than';
    public const CUSTOMERS_BROWSING_TIME_LOGIC_AT_MOST = 'is at most';
    public const CUSTOMERS_LOCATION_LOGIC_IS = 'is';
    public const CUSTOMERS_LOCATION_LOGIC_IS_NOT = 'is not';
    public const NUMBER_OF_VIEWED_PAGES_LOGIC_AT_LEAST = 'is at least';
    public const NUMBER_OF_VIEWED_PAGES_LOGIC_MORE_THAN = 'is more than';
    public const NUMBER_OF_VIEWED_PAGES_LOGIC_LESS_THAN = 'is less than';
    public const NUMBER_OF_VIEWED_PAGES_LOGIC_AT_MOST = 'is at most';
    public const REFERRING_WEBSITE_LOGIC_CONTAINS = 'contains';
    public const REFERRING_WEBSITE_LOGIC_DOES_NOT_CONTAIN = 'does not contain';
    public const REFERRING_WEBSITE_LOGIC_IS_EXACTLY = 'is exactly';
    public const REFERRING_WEBSITE_LOGIC_IS_NOT = 'is not';
    public const TYPE_CURRENT_PAGE_URL = 'current page url';
    public const TYPE_CUSTOMERS_LOCATION = 'customers location';
    public const TYPE_CUSTOMERS_BROWSING_TIME = 'customers browsing time';
    public const TYPE_NUMBER_OF_VIEWED_PAGES = 'number of viewed pages';
    public const TYPE_REFERRING_WEBSITE_ADDRESS = 'referring website address';
    public const TYPE_ANY_PAGE_FROM_SESSION = 'any page from session';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAnyPageUrlLogicAllowableValues()
    {
        return [
            self::ANY_PAGE_URL_LOGIC_CONTAINS,
            self::ANY_PAGE_URL_LOGIC_DOES_NOT_CONTAIN,
            self::ANY_PAGE_URL_LOGIC_IS_EXACTLY,
            self::ANY_PAGE_URL_LOGIC_IS_NOT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrentPageUrlLogicAllowableValues()
    {
        return [
            self::CURRENT_PAGE_URL_LOGIC_CONTAINS,
            self::CURRENT_PAGE_URL_LOGIC_DOES_NOT_CONTAIN,
            self::CURRENT_PAGE_URL_LOGIC_IS_EXACTLY,
            self::CURRENT_PAGE_URL_LOGIC_IS_NOT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomersBrowsingTimeLogicAllowableValues()
    {
        return [
            self::CUSTOMERS_BROWSING_TIME_LOGIC_AT_LEAST,
            self::CUSTOMERS_BROWSING_TIME_LOGIC_MORE_THAN,
            self::CUSTOMERS_BROWSING_TIME_LOGIC_LESS_THAN,
            self::CUSTOMERS_BROWSING_TIME_LOGIC_AT_MOST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomersLocationLogicAllowableValues()
    {
        return [
            self::CUSTOMERS_LOCATION_LOGIC_IS,
            self::CUSTOMERS_LOCATION_LOGIC_IS_NOT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNumberOfViewedPagesLogicAllowableValues()
    {
        return [
            self::NUMBER_OF_VIEWED_PAGES_LOGIC_AT_LEAST,
            self::NUMBER_OF_VIEWED_PAGES_LOGIC_MORE_THAN,
            self::NUMBER_OF_VIEWED_PAGES_LOGIC_LESS_THAN,
            self::NUMBER_OF_VIEWED_PAGES_LOGIC_AT_MOST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReferringWebsiteLogicAllowableValues()
    {
        return [
            self::REFERRING_WEBSITE_LOGIC_CONTAINS,
            self::REFERRING_WEBSITE_LOGIC_DOES_NOT_CONTAIN,
            self::REFERRING_WEBSITE_LOGIC_IS_EXACTLY,
            self::REFERRING_WEBSITE_LOGIC_IS_NOT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CURRENT_PAGE_URL,
            self::TYPE_CUSTOMERS_LOCATION,
            self::TYPE_CUSTOMERS_BROWSING_TIME,
            self::TYPE_NUMBER_OF_VIEWED_PAGES,
            self::TYPE_REFERRING_WEBSITE_ADDRESS,
            self::TYPE_ANY_PAGE_FROM_SESSION,
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
        $this->container['any_page_url_logic'] = $data['any_page_url_logic'] ?? null;
        $this->container['any_page_url_value'] = $data['any_page_url_value'] ?? null;
        $this->container['current_page_url_logic'] = $data['current_page_url_logic'] ?? null;
        $this->container['current_page_url_value'] = $data['current_page_url_value'] ?? null;
        $this->container['customers_browsing_time_logic'] = $data['customers_browsing_time_logic'] ?? null;
        $this->container['customers_browsing_time_seconds'] = $data['customers_browsing_time_seconds'] ?? null;
        $this->container['customers_location_country'] = $data['customers_location_country'] ?? null;
        $this->container['customers_location_logic'] = $data['customers_location_logic'] ?? null;
        $this->container['customers_location_state'] = $data['customers_location_state'] ?? null;
        $this->container['number_of_viewed_pages_logic'] = $data['number_of_viewed_pages_logic'] ?? null;
        $this->container['number_of_viewed_pages_value'] = $data['number_of_viewed_pages_value'] ?? null;
        $this->container['referring_website_logic'] = $data['referring_website_logic'] ?? null;
        $this->container['referring_website_value'] = $data['referring_website_value'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAnyPageUrlLogicAllowableValues();
        if (!is_null($this->container['any_page_url_logic']) && !in_array($this->container['any_page_url_logic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'any_page_url_logic', must be one of '%s'",
                $this->container['any_page_url_logic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCurrentPageUrlLogicAllowableValues();
        if (!is_null($this->container['current_page_url_logic']) && !in_array($this->container['current_page_url_logic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'current_page_url_logic', must be one of '%s'",
                $this->container['current_page_url_logic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCustomersBrowsingTimeLogicAllowableValues();
        if (!is_null($this->container['customers_browsing_time_logic']) && !in_array($this->container['customers_browsing_time_logic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'customers_browsing_time_logic', must be one of '%s'",
                $this->container['customers_browsing_time_logic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCustomersLocationLogicAllowableValues();
        if (!is_null($this->container['customers_location_logic']) && !in_array($this->container['customers_location_logic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'customers_location_logic', must be one of '%s'",
                $this->container['customers_location_logic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getNumberOfViewedPagesLogicAllowableValues();
        if (!is_null($this->container['number_of_viewed_pages_logic']) && !in_array($this->container['number_of_viewed_pages_logic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'number_of_viewed_pages_logic', must be one of '%s'",
                $this->container['number_of_viewed_pages_logic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReferringWebsiteLogicAllowableValues();
        if (!is_null($this->container['referring_website_logic']) && !in_array($this->container['referring_website_logic'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'referring_website_logic', must be one of '%s'",
                $this->container['referring_website_logic'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
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
     * Gets any_page_url_logic
     *
     * @return string|null
     */
    public function getAnyPageUrlLogic()
    {
        return $this->container['any_page_url_logic'];
    }

    /**
     * Sets any_page_url_logic
     *
     * @param string|null $any_page_url_logic Logic operation to perform on an any page url function type
     *
     * @return self
     */
    public function setAnyPageUrlLogic($any_page_url_logic)
    {
        $allowedValues = $this->getAnyPageUrlLogicAllowableValues();
        if (!is_null($any_page_url_logic) && !in_array($any_page_url_logic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'any_page_url_logic', must be one of '%s'",
                    $any_page_url_logic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['any_page_url_logic'] = $any_page_url_logic;

        return $this;
    }

    /**
     * Gets any_page_url_value
     *
     * @return string|null
     */
    public function getAnyPageUrlValue()
    {
        return $this->container['any_page_url_value'];
    }

    /**
     * Sets any_page_url_value
     *
     * @param string|null $any_page_url_value any_page_url_value
     *
     * @return self
     */
    public function setAnyPageUrlValue($any_page_url_value)
    {
        $this->container['any_page_url_value'] = $any_page_url_value;

        return $this;
    }

    /**
     * Gets current_page_url_logic
     *
     * @return string|null
     */
    public function getCurrentPageUrlLogic()
    {
        return $this->container['current_page_url_logic'];
    }

    /**
     * Sets current_page_url_logic
     *
     * @param string|null $current_page_url_logic Logic operation to perform on a current page url function type
     *
     * @return self
     */
    public function setCurrentPageUrlLogic($current_page_url_logic)
    {
        $allowedValues = $this->getCurrentPageUrlLogicAllowableValues();
        if (!is_null($current_page_url_logic) && !in_array($current_page_url_logic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'current_page_url_logic', must be one of '%s'",
                    $current_page_url_logic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['current_page_url_logic'] = $current_page_url_logic;

        return $this;
    }

    /**
     * Gets current_page_url_value
     *
     * @return string|null
     */
    public function getCurrentPageUrlValue()
    {
        return $this->container['current_page_url_value'];
    }

    /**
     * Sets current_page_url_value
     *
     * @param string|null $current_page_url_value current_page_url_value
     *
     * @return self
     */
    public function setCurrentPageUrlValue($current_page_url_value)
    {
        $this->container['current_page_url_value'] = $current_page_url_value;

        return $this;
    }

    /**
     * Gets customers_browsing_time_logic
     *
     * @return string|null
     */
    public function getCustomersBrowsingTimeLogic()
    {
        return $this->container['customers_browsing_time_logic'];
    }

    /**
     * Sets customers_browsing_time_logic
     *
     * @param string|null $customers_browsing_time_logic Logic operation to perform on a customer's browsing time function type
     *
     * @return self
     */
    public function setCustomersBrowsingTimeLogic($customers_browsing_time_logic)
    {
        $allowedValues = $this->getCustomersBrowsingTimeLogicAllowableValues();
        if (!is_null($customers_browsing_time_logic) && !in_array($customers_browsing_time_logic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'customers_browsing_time_logic', must be one of '%s'",
                    $customers_browsing_time_logic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customers_browsing_time_logic'] = $customers_browsing_time_logic;

        return $this;
    }

    /**
     * Gets customers_browsing_time_seconds
     *
     * @return int|null
     */
    public function getCustomersBrowsingTimeSeconds()
    {
        return $this->container['customers_browsing_time_seconds'];
    }

    /**
     * Sets customers_browsing_time_seconds
     *
     * @param int|null $customers_browsing_time_seconds customers_browsing_time_seconds
     *
     * @return self
     */
    public function setCustomersBrowsingTimeSeconds($customers_browsing_time_seconds)
    {
        $this->container['customers_browsing_time_seconds'] = $customers_browsing_time_seconds;

        return $this;
    }

    /**
     * Gets customers_location_country
     *
     * @return string|null
     */
    public function getCustomersLocationCountry()
    {
        return $this->container['customers_location_country'];
    }

    /**
     * Sets customers_location_country
     *
     * @param string|null $customers_location_country customers_location_country
     *
     * @return self
     */
    public function setCustomersLocationCountry($customers_location_country)
    {
        $this->container['customers_location_country'] = $customers_location_country;

        return $this;
    }

    /**
     * Gets customers_location_logic
     *
     * @return string|null
     */
    public function getCustomersLocationLogic()
    {
        return $this->container['customers_location_logic'];
    }

    /**
     * Sets customers_location_logic
     *
     * @param string|null $customers_location_logic Logic operation to perform on a customer's location function type
     *
     * @return self
     */
    public function setCustomersLocationLogic($customers_location_logic)
    {
        $allowedValues = $this->getCustomersLocationLogicAllowableValues();
        if (!is_null($customers_location_logic) && !in_array($customers_location_logic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'customers_location_logic', must be one of '%s'",
                    $customers_location_logic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['customers_location_logic'] = $customers_location_logic;

        return $this;
    }

    /**
     * Gets customers_location_state
     *
     * @return string|null
     */
    public function getCustomersLocationState()
    {
        return $this->container['customers_location_state'];
    }

    /**
     * Sets customers_location_state
     *
     * @param string|null $customers_location_state customers_location_state
     *
     * @return self
     */
    public function setCustomersLocationState($customers_location_state)
    {
        $this->container['customers_location_state'] = $customers_location_state;

        return $this;
    }

    /**
     * Gets number_of_viewed_pages_logic
     *
     * @return string|null
     */
    public function getNumberOfViewedPagesLogic()
    {
        return $this->container['number_of_viewed_pages_logic'];
    }

    /**
     * Sets number_of_viewed_pages_logic
     *
     * @param string|null $number_of_viewed_pages_logic Logic operation to perform on a customer's browsing time function type
     *
     * @return self
     */
    public function setNumberOfViewedPagesLogic($number_of_viewed_pages_logic)
    {
        $allowedValues = $this->getNumberOfViewedPagesLogicAllowableValues();
        if (!is_null($number_of_viewed_pages_logic) && !in_array($number_of_viewed_pages_logic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'number_of_viewed_pages_logic', must be one of '%s'",
                    $number_of_viewed_pages_logic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['number_of_viewed_pages_logic'] = $number_of_viewed_pages_logic;

        return $this;
    }

    /**
     * Gets number_of_viewed_pages_value
     *
     * @return int|null
     */
    public function getNumberOfViewedPagesValue()
    {
        return $this->container['number_of_viewed_pages_value'];
    }

    /**
     * Sets number_of_viewed_pages_value
     *
     * @param int|null $number_of_viewed_pages_value number_of_viewed_pages_value
     *
     * @return self
     */
    public function setNumberOfViewedPagesValue($number_of_viewed_pages_value)
    {
        $this->container['number_of_viewed_pages_value'] = $number_of_viewed_pages_value;

        return $this;
    }

    /**
     * Gets referring_website_logic
     *
     * @return string|null
     */
    public function getReferringWebsiteLogic()
    {
        return $this->container['referring_website_logic'];
    }

    /**
     * Sets referring_website_logic
     *
     * @param string|null $referring_website_logic Logic operation to perform on a referring website function type
     *
     * @return self
     */
    public function setReferringWebsiteLogic($referring_website_logic)
    {
        $allowedValues = $this->getReferringWebsiteLogicAllowableValues();
        if (!is_null($referring_website_logic) && !in_array($referring_website_logic, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'referring_website_logic', must be one of '%s'",
                    $referring_website_logic,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['referring_website_logic'] = $referring_website_logic;

        return $this;
    }

    /**
     * Gets referring_website_value
     *
     * @return string|null
     */
    public function getReferringWebsiteValue()
    {
        return $this->container['referring_website_value'];
    }

    /**
     * Sets referring_website_value
     *
     * @param string|null $referring_website_value referring_website_value
     *
     * @return self
     */
    public function setReferringWebsiteValue($referring_website_value)
    {
        $this->container['referring_website_value'] = $referring_website_value;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of function
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


