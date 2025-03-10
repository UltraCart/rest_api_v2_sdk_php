<?php
/**
 * CustomerReviewer
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
 * CustomerReviewer Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerReviewer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerReviewer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auto_approve' => 'bool',
        'average_overall_rating' => 'float',
        'expert' => 'bool',
        'first_review' => 'string',
        'last_review' => 'string',
        'location' => 'string',
        'nickname' => 'string',
        'number_helpful_review_votes' => 'int',
        'rank' => 'int',
        'reviews_contributed' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auto_approve' => null,
        'average_overall_rating' => null,
        'expert' => null,
        'first_review' => 'dateTime',
        'last_review' => 'dateTime',
        'location' => null,
        'nickname' => null,
        'number_helpful_review_votes' => 'int32',
        'rank' => 'int32',
        'reviews_contributed' => 'int32'
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
        'auto_approve' => 'auto_approve',
        'average_overall_rating' => 'average_overall_rating',
        'expert' => 'expert',
        'first_review' => 'first_review',
        'last_review' => 'last_review',
        'location' => 'location',
        'nickname' => 'nickname',
        'number_helpful_review_votes' => 'number_helpful_review_votes',
        'rank' => 'rank',
        'reviews_contributed' => 'reviews_contributed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_approve' => 'setAutoApprove',
        'average_overall_rating' => 'setAverageOverallRating',
        'expert' => 'setExpert',
        'first_review' => 'setFirstReview',
        'last_review' => 'setLastReview',
        'location' => 'setLocation',
        'nickname' => 'setNickname',
        'number_helpful_review_votes' => 'setNumberHelpfulReviewVotes',
        'rank' => 'setRank',
        'reviews_contributed' => 'setReviewsContributed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_approve' => 'getAutoApprove',
        'average_overall_rating' => 'getAverageOverallRating',
        'expert' => 'getExpert',
        'first_review' => 'getFirstReview',
        'last_review' => 'getLastReview',
        'location' => 'getLocation',
        'nickname' => 'getNickname',
        'number_helpful_review_votes' => 'getNumberHelpfulReviewVotes',
        'rank' => 'getRank',
        'reviews_contributed' => 'getReviewsContributed'
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
        $this->container['auto_approve'] = $data['auto_approve'] ?? null;
        $this->container['average_overall_rating'] = $data['average_overall_rating'] ?? null;
        $this->container['expert'] = $data['expert'] ?? null;
        $this->container['first_review'] = $data['first_review'] ?? null;
        $this->container['last_review'] = $data['last_review'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['nickname'] = $data['nickname'] ?? null;
        $this->container['number_helpful_review_votes'] = $data['number_helpful_review_votes'] ?? null;
        $this->container['rank'] = $data['rank'] ?? null;
        $this->container['reviews_contributed'] = $data['reviews_contributed'] ?? null;
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
     * Gets auto_approve
     *
     * @return bool|null
     */
    public function getAutoApprove()
    {
        return $this->container['auto_approve'];
    }

    /**
     * Sets auto_approve
     *
     * @param bool|null $auto_approve True if reviewes from this customer profile should automatically be approved
     *
     * @return self
     */
    public function setAutoApprove($auto_approve)
    {
        $this->container['auto_approve'] = $auto_approve;

        return $this;
    }

    /**
     * Gets average_overall_rating
     *
     * @return float|null
     */
    public function getAverageOverallRating()
    {
        return $this->container['average_overall_rating'];
    }

    /**
     * Sets average_overall_rating
     *
     * @param float|null $average_overall_rating Average overall rating of items reviewed
     *
     * @return self
     */
    public function setAverageOverallRating($average_overall_rating)
    {
        $this->container['average_overall_rating'] = $average_overall_rating;

        return $this;
    }

    /**
     * Gets expert
     *
     * @return bool|null
     */
    public function getExpert()
    {
        return $this->container['expert'];
    }

    /**
     * Sets expert
     *
     * @param bool|null $expert True if the customer is an expert
     *
     * @return self
     */
    public function setExpert($expert)
    {
        $this->container['expert'] = $expert;

        return $this;
    }

    /**
     * Gets first_review
     *
     * @return string|null
     */
    public function getFirstReview()
    {
        return $this->container['first_review'];
    }

    /**
     * Sets first_review
     *
     * @param string|null $first_review First review
     *
     * @return self
     */
    public function setFirstReview($first_review)
    {
        $this->container['first_review'] = $first_review;

        return $this;
    }

    /**
     * Gets last_review
     *
     * @return string|null
     */
    public function getLastReview()
    {
        return $this->container['last_review'];
    }

    /**
     * Sets last_review
     *
     * @param string|null $last_review Last review
     *
     * @return self
     */
    public function setLastReview($last_review)
    {
        $this->container['last_review'] = $last_review;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Location of the reviewer
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string|null
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string|null $nickname Nickname of the reviewer
     *
     * @return self
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets number_helpful_review_votes
     *
     * @return int|null
     */
    public function getNumberHelpfulReviewVotes()
    {
        return $this->container['number_helpful_review_votes'];
    }

    /**
     * Sets number_helpful_review_votes
     *
     * @param int|null $number_helpful_review_votes Number of helpful review votes
     *
     * @return self
     */
    public function setNumberHelpfulReviewVotes($number_helpful_review_votes)
    {
        $this->container['number_helpful_review_votes'] = $number_helpful_review_votes;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int|null
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int|null $rank Rank of this reviewer
     *
     * @return self
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }

    /**
     * Gets reviews_contributed
     *
     * @return int|null
     */
    public function getReviewsContributed()
    {
        return $this->container['reviews_contributed'];
    }

    /**
     * Sets reviews_contributed
     *
     * @param int|null $reviews_contributed Number of reviews contributed
     *
     * @return self
     */
    public function setReviewsContributed($reviews_contributed)
    {
        $this->container['reviews_contributed'] = $reviews_contributed;

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


