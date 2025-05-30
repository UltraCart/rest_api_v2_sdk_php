<?php
/**
 * ScreenRecordingHeatmap
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
 * ScreenRecordingHeatmap Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScreenRecordingHeatmap implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScreenRecordingHeatmap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'large_click_thumbnail_url' => 'string',
        'large_click_url' => 'string',
        'large_movement_thumbnail_url' => 'string',
        'large_movement_url' => 'string',
        'large_regular_thumbnail_url' => 'string',
        'large_regular_url' => 'string',
        'large_scroll_thumbnail_url' => 'string',
        'large_scroll_url' => 'string',
        'medium_click_thumbnail_url' => 'string',
        'medium_click_url' => 'string',
        'medium_movement_thumbnail_url' => 'string',
        'medium_movement_url' => 'string',
        'medium_regular_thumbnail_url' => 'string',
        'medium_regular_url' => 'string',
        'medium_scroll_thumbnail_url' => 'string',
        'medium_scroll_url' => 'string',
        'small_click_thumbnail_url' => 'string',
        'small_click_url' => 'string',
        'small_movement_thumbnail_url' => 'string',
        'small_movement_url' => 'string',
        'small_regular_thumbnail_url' => 'string',
        'small_regular_url' => 'string',
        'small_scroll_thumbnail_url' => 'string',
        'small_scroll_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'large_click_thumbnail_url' => null,
        'large_click_url' => null,
        'large_movement_thumbnail_url' => null,
        'large_movement_url' => null,
        'large_regular_thumbnail_url' => null,
        'large_regular_url' => null,
        'large_scroll_thumbnail_url' => null,
        'large_scroll_url' => null,
        'medium_click_thumbnail_url' => null,
        'medium_click_url' => null,
        'medium_movement_thumbnail_url' => null,
        'medium_movement_url' => null,
        'medium_regular_thumbnail_url' => null,
        'medium_regular_url' => null,
        'medium_scroll_thumbnail_url' => null,
        'medium_scroll_url' => null,
        'small_click_thumbnail_url' => null,
        'small_click_url' => null,
        'small_movement_thumbnail_url' => null,
        'small_movement_url' => null,
        'small_regular_thumbnail_url' => null,
        'small_regular_url' => null,
        'small_scroll_thumbnail_url' => null,
        'small_scroll_url' => null
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
        'large_click_thumbnail_url' => 'large_click_thumbnail_url',
        'large_click_url' => 'large_click_url',
        'large_movement_thumbnail_url' => 'large_movement_thumbnail_url',
        'large_movement_url' => 'large_movement_url',
        'large_regular_thumbnail_url' => 'large_regular_thumbnail_url',
        'large_regular_url' => 'large_regular_url',
        'large_scroll_thumbnail_url' => 'large_scroll_thumbnail_url',
        'large_scroll_url' => 'large_scroll_url',
        'medium_click_thumbnail_url' => 'medium_click_thumbnail_url',
        'medium_click_url' => 'medium_click_url',
        'medium_movement_thumbnail_url' => 'medium_movement_thumbnail_url',
        'medium_movement_url' => 'medium_movement_url',
        'medium_regular_thumbnail_url' => 'medium_regular_thumbnail_url',
        'medium_regular_url' => 'medium_regular_url',
        'medium_scroll_thumbnail_url' => 'medium_scroll_thumbnail_url',
        'medium_scroll_url' => 'medium_scroll_url',
        'small_click_thumbnail_url' => 'small_click_thumbnail_url',
        'small_click_url' => 'small_click_url',
        'small_movement_thumbnail_url' => 'small_movement_thumbnail_url',
        'small_movement_url' => 'small_movement_url',
        'small_regular_thumbnail_url' => 'small_regular_thumbnail_url',
        'small_regular_url' => 'small_regular_url',
        'small_scroll_thumbnail_url' => 'small_scroll_thumbnail_url',
        'small_scroll_url' => 'small_scroll_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'large_click_thumbnail_url' => 'setLargeClickThumbnailUrl',
        'large_click_url' => 'setLargeClickUrl',
        'large_movement_thumbnail_url' => 'setLargeMovementThumbnailUrl',
        'large_movement_url' => 'setLargeMovementUrl',
        'large_regular_thumbnail_url' => 'setLargeRegularThumbnailUrl',
        'large_regular_url' => 'setLargeRegularUrl',
        'large_scroll_thumbnail_url' => 'setLargeScrollThumbnailUrl',
        'large_scroll_url' => 'setLargeScrollUrl',
        'medium_click_thumbnail_url' => 'setMediumClickThumbnailUrl',
        'medium_click_url' => 'setMediumClickUrl',
        'medium_movement_thumbnail_url' => 'setMediumMovementThumbnailUrl',
        'medium_movement_url' => 'setMediumMovementUrl',
        'medium_regular_thumbnail_url' => 'setMediumRegularThumbnailUrl',
        'medium_regular_url' => 'setMediumRegularUrl',
        'medium_scroll_thumbnail_url' => 'setMediumScrollThumbnailUrl',
        'medium_scroll_url' => 'setMediumScrollUrl',
        'small_click_thumbnail_url' => 'setSmallClickThumbnailUrl',
        'small_click_url' => 'setSmallClickUrl',
        'small_movement_thumbnail_url' => 'setSmallMovementThumbnailUrl',
        'small_movement_url' => 'setSmallMovementUrl',
        'small_regular_thumbnail_url' => 'setSmallRegularThumbnailUrl',
        'small_regular_url' => 'setSmallRegularUrl',
        'small_scroll_thumbnail_url' => 'setSmallScrollThumbnailUrl',
        'small_scroll_url' => 'setSmallScrollUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'large_click_thumbnail_url' => 'getLargeClickThumbnailUrl',
        'large_click_url' => 'getLargeClickUrl',
        'large_movement_thumbnail_url' => 'getLargeMovementThumbnailUrl',
        'large_movement_url' => 'getLargeMovementUrl',
        'large_regular_thumbnail_url' => 'getLargeRegularThumbnailUrl',
        'large_regular_url' => 'getLargeRegularUrl',
        'large_scroll_thumbnail_url' => 'getLargeScrollThumbnailUrl',
        'large_scroll_url' => 'getLargeScrollUrl',
        'medium_click_thumbnail_url' => 'getMediumClickThumbnailUrl',
        'medium_click_url' => 'getMediumClickUrl',
        'medium_movement_thumbnail_url' => 'getMediumMovementThumbnailUrl',
        'medium_movement_url' => 'getMediumMovementUrl',
        'medium_regular_thumbnail_url' => 'getMediumRegularThumbnailUrl',
        'medium_regular_url' => 'getMediumRegularUrl',
        'medium_scroll_thumbnail_url' => 'getMediumScrollThumbnailUrl',
        'medium_scroll_url' => 'getMediumScrollUrl',
        'small_click_thumbnail_url' => 'getSmallClickThumbnailUrl',
        'small_click_url' => 'getSmallClickUrl',
        'small_movement_thumbnail_url' => 'getSmallMovementThumbnailUrl',
        'small_movement_url' => 'getSmallMovementUrl',
        'small_regular_thumbnail_url' => 'getSmallRegularThumbnailUrl',
        'small_regular_url' => 'getSmallRegularUrl',
        'small_scroll_thumbnail_url' => 'getSmallScrollThumbnailUrl',
        'small_scroll_url' => 'getSmallScrollUrl'
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
        $this->container['large_click_thumbnail_url'] = $data['large_click_thumbnail_url'] ?? null;
        $this->container['large_click_url'] = $data['large_click_url'] ?? null;
        $this->container['large_movement_thumbnail_url'] = $data['large_movement_thumbnail_url'] ?? null;
        $this->container['large_movement_url'] = $data['large_movement_url'] ?? null;
        $this->container['large_regular_thumbnail_url'] = $data['large_regular_thumbnail_url'] ?? null;
        $this->container['large_regular_url'] = $data['large_regular_url'] ?? null;
        $this->container['large_scroll_thumbnail_url'] = $data['large_scroll_thumbnail_url'] ?? null;
        $this->container['large_scroll_url'] = $data['large_scroll_url'] ?? null;
        $this->container['medium_click_thumbnail_url'] = $data['medium_click_thumbnail_url'] ?? null;
        $this->container['medium_click_url'] = $data['medium_click_url'] ?? null;
        $this->container['medium_movement_thumbnail_url'] = $data['medium_movement_thumbnail_url'] ?? null;
        $this->container['medium_movement_url'] = $data['medium_movement_url'] ?? null;
        $this->container['medium_regular_thumbnail_url'] = $data['medium_regular_thumbnail_url'] ?? null;
        $this->container['medium_regular_url'] = $data['medium_regular_url'] ?? null;
        $this->container['medium_scroll_thumbnail_url'] = $data['medium_scroll_thumbnail_url'] ?? null;
        $this->container['medium_scroll_url'] = $data['medium_scroll_url'] ?? null;
        $this->container['small_click_thumbnail_url'] = $data['small_click_thumbnail_url'] ?? null;
        $this->container['small_click_url'] = $data['small_click_url'] ?? null;
        $this->container['small_movement_thumbnail_url'] = $data['small_movement_thumbnail_url'] ?? null;
        $this->container['small_movement_url'] = $data['small_movement_url'] ?? null;
        $this->container['small_regular_thumbnail_url'] = $data['small_regular_thumbnail_url'] ?? null;
        $this->container['small_regular_url'] = $data['small_regular_url'] ?? null;
        $this->container['small_scroll_thumbnail_url'] = $data['small_scroll_thumbnail_url'] ?? null;
        $this->container['small_scroll_url'] = $data['small_scroll_url'] ?? null;
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
     * Gets large_click_thumbnail_url
     *
     * @return string|null
     */
    public function getLargeClickThumbnailUrl()
    {
        return $this->container['large_click_thumbnail_url'];
    }

    /**
     * Sets large_click_thumbnail_url
     *
     * @param string|null $large_click_thumbnail_url large_click_thumbnail_url
     *
     * @return self
     */
    public function setLargeClickThumbnailUrl($large_click_thumbnail_url)
    {
        $this->container['large_click_thumbnail_url'] = $large_click_thumbnail_url;

        return $this;
    }

    /**
     * Gets large_click_url
     *
     * @return string|null
     */
    public function getLargeClickUrl()
    {
        return $this->container['large_click_url'];
    }

    /**
     * Sets large_click_url
     *
     * @param string|null $large_click_url large_click_url
     *
     * @return self
     */
    public function setLargeClickUrl($large_click_url)
    {
        $this->container['large_click_url'] = $large_click_url;

        return $this;
    }

    /**
     * Gets large_movement_thumbnail_url
     *
     * @return string|null
     */
    public function getLargeMovementThumbnailUrl()
    {
        return $this->container['large_movement_thumbnail_url'];
    }

    /**
     * Sets large_movement_thumbnail_url
     *
     * @param string|null $large_movement_thumbnail_url large_movement_thumbnail_url
     *
     * @return self
     */
    public function setLargeMovementThumbnailUrl($large_movement_thumbnail_url)
    {
        $this->container['large_movement_thumbnail_url'] = $large_movement_thumbnail_url;

        return $this;
    }

    /**
     * Gets large_movement_url
     *
     * @return string|null
     */
    public function getLargeMovementUrl()
    {
        return $this->container['large_movement_url'];
    }

    /**
     * Sets large_movement_url
     *
     * @param string|null $large_movement_url large_movement_url
     *
     * @return self
     */
    public function setLargeMovementUrl($large_movement_url)
    {
        $this->container['large_movement_url'] = $large_movement_url;

        return $this;
    }

    /**
     * Gets large_regular_thumbnail_url
     *
     * @return string|null
     */
    public function getLargeRegularThumbnailUrl()
    {
        return $this->container['large_regular_thumbnail_url'];
    }

    /**
     * Sets large_regular_thumbnail_url
     *
     * @param string|null $large_regular_thumbnail_url large_regular_thumbnail_url
     *
     * @return self
     */
    public function setLargeRegularThumbnailUrl($large_regular_thumbnail_url)
    {
        $this->container['large_regular_thumbnail_url'] = $large_regular_thumbnail_url;

        return $this;
    }

    /**
     * Gets large_regular_url
     *
     * @return string|null
     */
    public function getLargeRegularUrl()
    {
        return $this->container['large_regular_url'];
    }

    /**
     * Sets large_regular_url
     *
     * @param string|null $large_regular_url large_regular_url
     *
     * @return self
     */
    public function setLargeRegularUrl($large_regular_url)
    {
        $this->container['large_regular_url'] = $large_regular_url;

        return $this;
    }

    /**
     * Gets large_scroll_thumbnail_url
     *
     * @return string|null
     */
    public function getLargeScrollThumbnailUrl()
    {
        return $this->container['large_scroll_thumbnail_url'];
    }

    /**
     * Sets large_scroll_thumbnail_url
     *
     * @param string|null $large_scroll_thumbnail_url large_scroll_thumbnail_url
     *
     * @return self
     */
    public function setLargeScrollThumbnailUrl($large_scroll_thumbnail_url)
    {
        $this->container['large_scroll_thumbnail_url'] = $large_scroll_thumbnail_url;

        return $this;
    }

    /**
     * Gets large_scroll_url
     *
     * @return string|null
     */
    public function getLargeScrollUrl()
    {
        return $this->container['large_scroll_url'];
    }

    /**
     * Sets large_scroll_url
     *
     * @param string|null $large_scroll_url large_scroll_url
     *
     * @return self
     */
    public function setLargeScrollUrl($large_scroll_url)
    {
        $this->container['large_scroll_url'] = $large_scroll_url;

        return $this;
    }

    /**
     * Gets medium_click_thumbnail_url
     *
     * @return string|null
     */
    public function getMediumClickThumbnailUrl()
    {
        return $this->container['medium_click_thumbnail_url'];
    }

    /**
     * Sets medium_click_thumbnail_url
     *
     * @param string|null $medium_click_thumbnail_url medium_click_thumbnail_url
     *
     * @return self
     */
    public function setMediumClickThumbnailUrl($medium_click_thumbnail_url)
    {
        $this->container['medium_click_thumbnail_url'] = $medium_click_thumbnail_url;

        return $this;
    }

    /**
     * Gets medium_click_url
     *
     * @return string|null
     */
    public function getMediumClickUrl()
    {
        return $this->container['medium_click_url'];
    }

    /**
     * Sets medium_click_url
     *
     * @param string|null $medium_click_url medium_click_url
     *
     * @return self
     */
    public function setMediumClickUrl($medium_click_url)
    {
        $this->container['medium_click_url'] = $medium_click_url;

        return $this;
    }

    /**
     * Gets medium_movement_thumbnail_url
     *
     * @return string|null
     */
    public function getMediumMovementThumbnailUrl()
    {
        return $this->container['medium_movement_thumbnail_url'];
    }

    /**
     * Sets medium_movement_thumbnail_url
     *
     * @param string|null $medium_movement_thumbnail_url medium_movement_thumbnail_url
     *
     * @return self
     */
    public function setMediumMovementThumbnailUrl($medium_movement_thumbnail_url)
    {
        $this->container['medium_movement_thumbnail_url'] = $medium_movement_thumbnail_url;

        return $this;
    }

    /**
     * Gets medium_movement_url
     *
     * @return string|null
     */
    public function getMediumMovementUrl()
    {
        return $this->container['medium_movement_url'];
    }

    /**
     * Sets medium_movement_url
     *
     * @param string|null $medium_movement_url medium_movement_url
     *
     * @return self
     */
    public function setMediumMovementUrl($medium_movement_url)
    {
        $this->container['medium_movement_url'] = $medium_movement_url;

        return $this;
    }

    /**
     * Gets medium_regular_thumbnail_url
     *
     * @return string|null
     */
    public function getMediumRegularThumbnailUrl()
    {
        return $this->container['medium_regular_thumbnail_url'];
    }

    /**
     * Sets medium_regular_thumbnail_url
     *
     * @param string|null $medium_regular_thumbnail_url medium_regular_thumbnail_url
     *
     * @return self
     */
    public function setMediumRegularThumbnailUrl($medium_regular_thumbnail_url)
    {
        $this->container['medium_regular_thumbnail_url'] = $medium_regular_thumbnail_url;

        return $this;
    }

    /**
     * Gets medium_regular_url
     *
     * @return string|null
     */
    public function getMediumRegularUrl()
    {
        return $this->container['medium_regular_url'];
    }

    /**
     * Sets medium_regular_url
     *
     * @param string|null $medium_regular_url medium_regular_url
     *
     * @return self
     */
    public function setMediumRegularUrl($medium_regular_url)
    {
        $this->container['medium_regular_url'] = $medium_regular_url;

        return $this;
    }

    /**
     * Gets medium_scroll_thumbnail_url
     *
     * @return string|null
     */
    public function getMediumScrollThumbnailUrl()
    {
        return $this->container['medium_scroll_thumbnail_url'];
    }

    /**
     * Sets medium_scroll_thumbnail_url
     *
     * @param string|null $medium_scroll_thumbnail_url medium_scroll_thumbnail_url
     *
     * @return self
     */
    public function setMediumScrollThumbnailUrl($medium_scroll_thumbnail_url)
    {
        $this->container['medium_scroll_thumbnail_url'] = $medium_scroll_thumbnail_url;

        return $this;
    }

    /**
     * Gets medium_scroll_url
     *
     * @return string|null
     */
    public function getMediumScrollUrl()
    {
        return $this->container['medium_scroll_url'];
    }

    /**
     * Sets medium_scroll_url
     *
     * @param string|null $medium_scroll_url medium_scroll_url
     *
     * @return self
     */
    public function setMediumScrollUrl($medium_scroll_url)
    {
        $this->container['medium_scroll_url'] = $medium_scroll_url;

        return $this;
    }

    /**
     * Gets small_click_thumbnail_url
     *
     * @return string|null
     */
    public function getSmallClickThumbnailUrl()
    {
        return $this->container['small_click_thumbnail_url'];
    }

    /**
     * Sets small_click_thumbnail_url
     *
     * @param string|null $small_click_thumbnail_url small_click_thumbnail_url
     *
     * @return self
     */
    public function setSmallClickThumbnailUrl($small_click_thumbnail_url)
    {
        $this->container['small_click_thumbnail_url'] = $small_click_thumbnail_url;

        return $this;
    }

    /**
     * Gets small_click_url
     *
     * @return string|null
     */
    public function getSmallClickUrl()
    {
        return $this->container['small_click_url'];
    }

    /**
     * Sets small_click_url
     *
     * @param string|null $small_click_url small_click_url
     *
     * @return self
     */
    public function setSmallClickUrl($small_click_url)
    {
        $this->container['small_click_url'] = $small_click_url;

        return $this;
    }

    /**
     * Gets small_movement_thumbnail_url
     *
     * @return string|null
     */
    public function getSmallMovementThumbnailUrl()
    {
        return $this->container['small_movement_thumbnail_url'];
    }

    /**
     * Sets small_movement_thumbnail_url
     *
     * @param string|null $small_movement_thumbnail_url small_movement_thumbnail_url
     *
     * @return self
     */
    public function setSmallMovementThumbnailUrl($small_movement_thumbnail_url)
    {
        $this->container['small_movement_thumbnail_url'] = $small_movement_thumbnail_url;

        return $this;
    }

    /**
     * Gets small_movement_url
     *
     * @return string|null
     */
    public function getSmallMovementUrl()
    {
        return $this->container['small_movement_url'];
    }

    /**
     * Sets small_movement_url
     *
     * @param string|null $small_movement_url small_movement_url
     *
     * @return self
     */
    public function setSmallMovementUrl($small_movement_url)
    {
        $this->container['small_movement_url'] = $small_movement_url;

        return $this;
    }

    /**
     * Gets small_regular_thumbnail_url
     *
     * @return string|null
     */
    public function getSmallRegularThumbnailUrl()
    {
        return $this->container['small_regular_thumbnail_url'];
    }

    /**
     * Sets small_regular_thumbnail_url
     *
     * @param string|null $small_regular_thumbnail_url small_regular_thumbnail_url
     *
     * @return self
     */
    public function setSmallRegularThumbnailUrl($small_regular_thumbnail_url)
    {
        $this->container['small_regular_thumbnail_url'] = $small_regular_thumbnail_url;

        return $this;
    }

    /**
     * Gets small_regular_url
     *
     * @return string|null
     */
    public function getSmallRegularUrl()
    {
        return $this->container['small_regular_url'];
    }

    /**
     * Sets small_regular_url
     *
     * @param string|null $small_regular_url small_regular_url
     *
     * @return self
     */
    public function setSmallRegularUrl($small_regular_url)
    {
        $this->container['small_regular_url'] = $small_regular_url;

        return $this;
    }

    /**
     * Gets small_scroll_thumbnail_url
     *
     * @return string|null
     */
    public function getSmallScrollThumbnailUrl()
    {
        return $this->container['small_scroll_thumbnail_url'];
    }

    /**
     * Sets small_scroll_thumbnail_url
     *
     * @param string|null $small_scroll_thumbnail_url small_scroll_thumbnail_url
     *
     * @return self
     */
    public function setSmallScrollThumbnailUrl($small_scroll_thumbnail_url)
    {
        $this->container['small_scroll_thumbnail_url'] = $small_scroll_thumbnail_url;

        return $this;
    }

    /**
     * Gets small_scroll_url
     *
     * @return string|null
     */
    public function getSmallScrollUrl()
    {
        return $this->container['small_scroll_url'];
    }

    /**
     * Sets small_scroll_url
     *
     * @param string|null $small_scroll_url small_scroll_url
     *
     * @return self
     */
    public function setSmallScrollUrl($small_scroll_url)
    {
        $this->container['small_scroll_url'] = $small_scroll_url;

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


