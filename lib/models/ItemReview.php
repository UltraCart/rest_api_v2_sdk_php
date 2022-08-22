<?php
/**
 * ItemReview
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
 * ItemReview Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemReview implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemReview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_profile_oid' => 'int',
        'featured' => 'bool',
        'helperful_no_votes' => 'int',
        'helpful_yes_votes' => 'int',
        'order_id' => 'string',
        'overall' => 'float',
        'rating_name1' => 'string',
        'rating_name10' => 'string',
        'rating_name2' => 'string',
        'rating_name3' => 'string',
        'rating_name4' => 'string',
        'rating_name5' => 'string',
        'rating_name6' => 'string',
        'rating_name7' => 'string',
        'rating_name8' => 'string',
        'rating_name9' => 'string',
        'rating_score1' => 'float',
        'rating_score10' => 'float',
        'rating_score2' => 'float',
        'rating_score3' => 'float',
        'rating_score4' => 'float',
        'rating_score5' => 'float',
        'rating_score6' => 'float',
        'rating_score7' => 'float',
        'rating_score8' => 'float',
        'rating_score9' => 'float',
        'recommend_store_to_friend' => 'int',
        'recommend_to_friend' => 'bool',
        'review' => 'string',
        'review_oid' => 'int',
        'reviewed_nickname' => 'string',
        'reviewer_email' => 'string',
        'reviewer_location' => 'string',
        'status' => 'string',
        'store_feedback' => 'string',
        'submitted_dts' => 'string',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_profile_oid' => 'int32',
        'featured' => null,
        'helperful_no_votes' => 'int32',
        'helpful_yes_votes' => 'int32',
        'order_id' => null,
        'overall' => null,
        'rating_name1' => null,
        'rating_name10' => null,
        'rating_name2' => null,
        'rating_name3' => null,
        'rating_name4' => null,
        'rating_name5' => null,
        'rating_name6' => null,
        'rating_name7' => null,
        'rating_name8' => null,
        'rating_name9' => null,
        'rating_score1' => null,
        'rating_score10' => null,
        'rating_score2' => null,
        'rating_score3' => null,
        'rating_score4' => null,
        'rating_score5' => null,
        'rating_score6' => null,
        'rating_score7' => null,
        'rating_score8' => null,
        'rating_score9' => null,
        'recommend_store_to_friend' => 'int32',
        'recommend_to_friend' => null,
        'review' => null,
        'review_oid' => 'int32',
        'reviewed_nickname' => null,
        'reviewer_email' => null,
        'reviewer_location' => null,
        'status' => null,
        'store_feedback' => null,
        'submitted_dts' => 'dateTime',
        'title' => null
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
        'customer_profile_oid' => 'customer_profile_oid',
        'featured' => 'featured',
        'helperful_no_votes' => 'helperful_no_votes',
        'helpful_yes_votes' => 'helpful_yes_votes',
        'order_id' => 'order_id',
        'overall' => 'overall',
        'rating_name1' => 'rating_name1',
        'rating_name10' => 'rating_name10',
        'rating_name2' => 'rating_name2',
        'rating_name3' => 'rating_name3',
        'rating_name4' => 'rating_name4',
        'rating_name5' => 'rating_name5',
        'rating_name6' => 'rating_name6',
        'rating_name7' => 'rating_name7',
        'rating_name8' => 'rating_name8',
        'rating_name9' => 'rating_name9',
        'rating_score1' => 'rating_score1',
        'rating_score10' => 'rating_score10',
        'rating_score2' => 'rating_score2',
        'rating_score3' => 'rating_score3',
        'rating_score4' => 'rating_score4',
        'rating_score5' => 'rating_score5',
        'rating_score6' => 'rating_score6',
        'rating_score7' => 'rating_score7',
        'rating_score8' => 'rating_score8',
        'rating_score9' => 'rating_score9',
        'recommend_store_to_friend' => 'recommend_store_to_friend',
        'recommend_to_friend' => 'recommend_to_friend',
        'review' => 'review',
        'review_oid' => 'review_oid',
        'reviewed_nickname' => 'reviewed_nickname',
        'reviewer_email' => 'reviewer_email',
        'reviewer_location' => 'reviewer_location',
        'status' => 'status',
        'store_feedback' => 'store_feedback',
        'submitted_dts' => 'submitted_dts',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_profile_oid' => 'setCustomerProfileOid',
        'featured' => 'setFeatured',
        'helperful_no_votes' => 'setHelperfulNoVotes',
        'helpful_yes_votes' => 'setHelpfulYesVotes',
        'order_id' => 'setOrderId',
        'overall' => 'setOverall',
        'rating_name1' => 'setRatingName1',
        'rating_name10' => 'setRatingName10',
        'rating_name2' => 'setRatingName2',
        'rating_name3' => 'setRatingName3',
        'rating_name4' => 'setRatingName4',
        'rating_name5' => 'setRatingName5',
        'rating_name6' => 'setRatingName6',
        'rating_name7' => 'setRatingName7',
        'rating_name8' => 'setRatingName8',
        'rating_name9' => 'setRatingName9',
        'rating_score1' => 'setRatingScore1',
        'rating_score10' => 'setRatingScore10',
        'rating_score2' => 'setRatingScore2',
        'rating_score3' => 'setRatingScore3',
        'rating_score4' => 'setRatingScore4',
        'rating_score5' => 'setRatingScore5',
        'rating_score6' => 'setRatingScore6',
        'rating_score7' => 'setRatingScore7',
        'rating_score8' => 'setRatingScore8',
        'rating_score9' => 'setRatingScore9',
        'recommend_store_to_friend' => 'setRecommendStoreToFriend',
        'recommend_to_friend' => 'setRecommendToFriend',
        'review' => 'setReview',
        'review_oid' => 'setReviewOid',
        'reviewed_nickname' => 'setReviewedNickname',
        'reviewer_email' => 'setReviewerEmail',
        'reviewer_location' => 'setReviewerLocation',
        'status' => 'setStatus',
        'store_feedback' => 'setStoreFeedback',
        'submitted_dts' => 'setSubmittedDts',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_profile_oid' => 'getCustomerProfileOid',
        'featured' => 'getFeatured',
        'helperful_no_votes' => 'getHelperfulNoVotes',
        'helpful_yes_votes' => 'getHelpfulYesVotes',
        'order_id' => 'getOrderId',
        'overall' => 'getOverall',
        'rating_name1' => 'getRatingName1',
        'rating_name10' => 'getRatingName10',
        'rating_name2' => 'getRatingName2',
        'rating_name3' => 'getRatingName3',
        'rating_name4' => 'getRatingName4',
        'rating_name5' => 'getRatingName5',
        'rating_name6' => 'getRatingName6',
        'rating_name7' => 'getRatingName7',
        'rating_name8' => 'getRatingName8',
        'rating_name9' => 'getRatingName9',
        'rating_score1' => 'getRatingScore1',
        'rating_score10' => 'getRatingScore10',
        'rating_score2' => 'getRatingScore2',
        'rating_score3' => 'getRatingScore3',
        'rating_score4' => 'getRatingScore4',
        'rating_score5' => 'getRatingScore5',
        'rating_score6' => 'getRatingScore6',
        'rating_score7' => 'getRatingScore7',
        'rating_score8' => 'getRatingScore8',
        'rating_score9' => 'getRatingScore9',
        'recommend_store_to_friend' => 'getRecommendStoreToFriend',
        'recommend_to_friend' => 'getRecommendToFriend',
        'review' => 'getReview',
        'review_oid' => 'getReviewOid',
        'reviewed_nickname' => 'getReviewedNickname',
        'reviewer_email' => 'getReviewerEmail',
        'reviewer_location' => 'getReviewerLocation',
        'status' => 'getStatus',
        'store_feedback' => 'getStoreFeedback',
        'submitted_dts' => 'getSubmittedDts',
        'title' => 'getTitle'
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
        $this->container['customer_profile_oid'] = $data['customer_profile_oid'] ?? null;
        $this->container['featured'] = $data['featured'] ?? null;
        $this->container['helperful_no_votes'] = $data['helperful_no_votes'] ?? null;
        $this->container['helpful_yes_votes'] = $data['helpful_yes_votes'] ?? null;
        $this->container['order_id'] = $data['order_id'] ?? null;
        $this->container['overall'] = $data['overall'] ?? null;
        $this->container['rating_name1'] = $data['rating_name1'] ?? null;
        $this->container['rating_name10'] = $data['rating_name10'] ?? null;
        $this->container['rating_name2'] = $data['rating_name2'] ?? null;
        $this->container['rating_name3'] = $data['rating_name3'] ?? null;
        $this->container['rating_name4'] = $data['rating_name4'] ?? null;
        $this->container['rating_name5'] = $data['rating_name5'] ?? null;
        $this->container['rating_name6'] = $data['rating_name6'] ?? null;
        $this->container['rating_name7'] = $data['rating_name7'] ?? null;
        $this->container['rating_name8'] = $data['rating_name8'] ?? null;
        $this->container['rating_name9'] = $data['rating_name9'] ?? null;
        $this->container['rating_score1'] = $data['rating_score1'] ?? null;
        $this->container['rating_score10'] = $data['rating_score10'] ?? null;
        $this->container['rating_score2'] = $data['rating_score2'] ?? null;
        $this->container['rating_score3'] = $data['rating_score3'] ?? null;
        $this->container['rating_score4'] = $data['rating_score4'] ?? null;
        $this->container['rating_score5'] = $data['rating_score5'] ?? null;
        $this->container['rating_score6'] = $data['rating_score6'] ?? null;
        $this->container['rating_score7'] = $data['rating_score7'] ?? null;
        $this->container['rating_score8'] = $data['rating_score8'] ?? null;
        $this->container['rating_score9'] = $data['rating_score9'] ?? null;
        $this->container['recommend_store_to_friend'] = $data['recommend_store_to_friend'] ?? null;
        $this->container['recommend_to_friend'] = $data['recommend_to_friend'] ?? null;
        $this->container['review'] = $data['review'] ?? null;
        $this->container['review_oid'] = $data['review_oid'] ?? null;
        $this->container['reviewed_nickname'] = $data['reviewed_nickname'] ?? null;
        $this->container['reviewer_email'] = $data['reviewer_email'] ?? null;
        $this->container['reviewer_location'] = $data['reviewer_location'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['store_feedback'] = $data['store_feedback'] ?? null;
        $this->container['submitted_dts'] = $data['submitted_dts'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * Gets customer_profile_oid
     *
     * @return int|null
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     *
     * @param int|null $customer_profile_oid Customer profile object identifier
     *
     * @return self
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets featured
     *
     * @return bool|null
     */
    public function getFeatured()
    {
        return $this->container['featured'];
    }

    /**
     * Sets featured
     *
     * @param bool|null $featured featured
     *
     * @return self
     */
    public function setFeatured($featured)
    {
        $this->container['featured'] = $featured;

        return $this;
    }

    /**
     * Gets helperful_no_votes
     *
     * @return int|null
     */
    public function getHelperfulNoVotes()
    {
        return $this->container['helperful_no_votes'];
    }

    /**
     * Sets helperful_no_votes
     *
     * @param int|null $helperful_no_votes helperful_no_votes
     *
     * @return self
     */
    public function setHelperfulNoVotes($helperful_no_votes)
    {
        $this->container['helperful_no_votes'] = $helperful_no_votes;

        return $this;
    }

    /**
     * Gets helpful_yes_votes
     *
     * @return int|null
     */
    public function getHelpfulYesVotes()
    {
        return $this->container['helpful_yes_votes'];
    }

    /**
     * Sets helpful_yes_votes
     *
     * @param int|null $helpful_yes_votes helpful_yes_votes
     *
     * @return self
     */
    public function setHelpfulYesVotes($helpful_yes_votes)
    {
        $this->container['helpful_yes_votes'] = $helpful_yes_votes;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string|null $order_id order_id
     *
     * @return self
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets overall
     *
     * @return float|null
     */
    public function getOverall()
    {
        return $this->container['overall'];
    }

    /**
     * Sets overall
     *
     * @param float|null $overall overall
     *
     * @return self
     */
    public function setOverall($overall)
    {
        $this->container['overall'] = $overall;

        return $this;
    }

    /**
     * Gets rating_name1
     *
     * @return string|null
     */
    public function getRatingName1()
    {
        return $this->container['rating_name1'];
    }

    /**
     * Sets rating_name1
     *
     * @param string|null $rating_name1 rating_name1
     *
     * @return self
     */
    public function setRatingName1($rating_name1)
    {
        $this->container['rating_name1'] = $rating_name1;

        return $this;
    }

    /**
     * Gets rating_name10
     *
     * @return string|null
     */
    public function getRatingName10()
    {
        return $this->container['rating_name10'];
    }

    /**
     * Sets rating_name10
     *
     * @param string|null $rating_name10 rating_name10
     *
     * @return self
     */
    public function setRatingName10($rating_name10)
    {
        $this->container['rating_name10'] = $rating_name10;

        return $this;
    }

    /**
     * Gets rating_name2
     *
     * @return string|null
     */
    public function getRatingName2()
    {
        return $this->container['rating_name2'];
    }

    /**
     * Sets rating_name2
     *
     * @param string|null $rating_name2 rating_name2
     *
     * @return self
     */
    public function setRatingName2($rating_name2)
    {
        $this->container['rating_name2'] = $rating_name2;

        return $this;
    }

    /**
     * Gets rating_name3
     *
     * @return string|null
     */
    public function getRatingName3()
    {
        return $this->container['rating_name3'];
    }

    /**
     * Sets rating_name3
     *
     * @param string|null $rating_name3 rating_name3
     *
     * @return self
     */
    public function setRatingName3($rating_name3)
    {
        $this->container['rating_name3'] = $rating_name3;

        return $this;
    }

    /**
     * Gets rating_name4
     *
     * @return string|null
     */
    public function getRatingName4()
    {
        return $this->container['rating_name4'];
    }

    /**
     * Sets rating_name4
     *
     * @param string|null $rating_name4 rating_name4
     *
     * @return self
     */
    public function setRatingName4($rating_name4)
    {
        $this->container['rating_name4'] = $rating_name4;

        return $this;
    }

    /**
     * Gets rating_name5
     *
     * @return string|null
     */
    public function getRatingName5()
    {
        return $this->container['rating_name5'];
    }

    /**
     * Sets rating_name5
     *
     * @param string|null $rating_name5 rating_name5
     *
     * @return self
     */
    public function setRatingName5($rating_name5)
    {
        $this->container['rating_name5'] = $rating_name5;

        return $this;
    }

    /**
     * Gets rating_name6
     *
     * @return string|null
     */
    public function getRatingName6()
    {
        return $this->container['rating_name6'];
    }

    /**
     * Sets rating_name6
     *
     * @param string|null $rating_name6 rating_name6
     *
     * @return self
     */
    public function setRatingName6($rating_name6)
    {
        $this->container['rating_name6'] = $rating_name6;

        return $this;
    }

    /**
     * Gets rating_name7
     *
     * @return string|null
     */
    public function getRatingName7()
    {
        return $this->container['rating_name7'];
    }

    /**
     * Sets rating_name7
     *
     * @param string|null $rating_name7 rating_name7
     *
     * @return self
     */
    public function setRatingName7($rating_name7)
    {
        $this->container['rating_name7'] = $rating_name7;

        return $this;
    }

    /**
     * Gets rating_name8
     *
     * @return string|null
     */
    public function getRatingName8()
    {
        return $this->container['rating_name8'];
    }

    /**
     * Sets rating_name8
     *
     * @param string|null $rating_name8 rating_name8
     *
     * @return self
     */
    public function setRatingName8($rating_name8)
    {
        $this->container['rating_name8'] = $rating_name8;

        return $this;
    }

    /**
     * Gets rating_name9
     *
     * @return string|null
     */
    public function getRatingName9()
    {
        return $this->container['rating_name9'];
    }

    /**
     * Sets rating_name9
     *
     * @param string|null $rating_name9 rating_name9
     *
     * @return self
     */
    public function setRatingName9($rating_name9)
    {
        $this->container['rating_name9'] = $rating_name9;

        return $this;
    }

    /**
     * Gets rating_score1
     *
     * @return float|null
     */
    public function getRatingScore1()
    {
        return $this->container['rating_score1'];
    }

    /**
     * Sets rating_score1
     *
     * @param float|null $rating_score1 rating_score1
     *
     * @return self
     */
    public function setRatingScore1($rating_score1)
    {
        $this->container['rating_score1'] = $rating_score1;

        return $this;
    }

    /**
     * Gets rating_score10
     *
     * @return float|null
     */
    public function getRatingScore10()
    {
        return $this->container['rating_score10'];
    }

    /**
     * Sets rating_score10
     *
     * @param float|null $rating_score10 rating_score10
     *
     * @return self
     */
    public function setRatingScore10($rating_score10)
    {
        $this->container['rating_score10'] = $rating_score10;

        return $this;
    }

    /**
     * Gets rating_score2
     *
     * @return float|null
     */
    public function getRatingScore2()
    {
        return $this->container['rating_score2'];
    }

    /**
     * Sets rating_score2
     *
     * @param float|null $rating_score2 rating_score2
     *
     * @return self
     */
    public function setRatingScore2($rating_score2)
    {
        $this->container['rating_score2'] = $rating_score2;

        return $this;
    }

    /**
     * Gets rating_score3
     *
     * @return float|null
     */
    public function getRatingScore3()
    {
        return $this->container['rating_score3'];
    }

    /**
     * Sets rating_score3
     *
     * @param float|null $rating_score3 rating_score3
     *
     * @return self
     */
    public function setRatingScore3($rating_score3)
    {
        $this->container['rating_score3'] = $rating_score3;

        return $this;
    }

    /**
     * Gets rating_score4
     *
     * @return float|null
     */
    public function getRatingScore4()
    {
        return $this->container['rating_score4'];
    }

    /**
     * Sets rating_score4
     *
     * @param float|null $rating_score4 rating_score4
     *
     * @return self
     */
    public function setRatingScore4($rating_score4)
    {
        $this->container['rating_score4'] = $rating_score4;

        return $this;
    }

    /**
     * Gets rating_score5
     *
     * @return float|null
     */
    public function getRatingScore5()
    {
        return $this->container['rating_score5'];
    }

    /**
     * Sets rating_score5
     *
     * @param float|null $rating_score5 rating_score5
     *
     * @return self
     */
    public function setRatingScore5($rating_score5)
    {
        $this->container['rating_score5'] = $rating_score5;

        return $this;
    }

    /**
     * Gets rating_score6
     *
     * @return float|null
     */
    public function getRatingScore6()
    {
        return $this->container['rating_score6'];
    }

    /**
     * Sets rating_score6
     *
     * @param float|null $rating_score6 rating_score6
     *
     * @return self
     */
    public function setRatingScore6($rating_score6)
    {
        $this->container['rating_score6'] = $rating_score6;

        return $this;
    }

    /**
     * Gets rating_score7
     *
     * @return float|null
     */
    public function getRatingScore7()
    {
        return $this->container['rating_score7'];
    }

    /**
     * Sets rating_score7
     *
     * @param float|null $rating_score7 rating_score7
     *
     * @return self
     */
    public function setRatingScore7($rating_score7)
    {
        $this->container['rating_score7'] = $rating_score7;

        return $this;
    }

    /**
     * Gets rating_score8
     *
     * @return float|null
     */
    public function getRatingScore8()
    {
        return $this->container['rating_score8'];
    }

    /**
     * Sets rating_score8
     *
     * @param float|null $rating_score8 rating_score8
     *
     * @return self
     */
    public function setRatingScore8($rating_score8)
    {
        $this->container['rating_score8'] = $rating_score8;

        return $this;
    }

    /**
     * Gets rating_score9
     *
     * @return float|null
     */
    public function getRatingScore9()
    {
        return $this->container['rating_score9'];
    }

    /**
     * Sets rating_score9
     *
     * @param float|null $rating_score9 rating_score9
     *
     * @return self
     */
    public function setRatingScore9($rating_score9)
    {
        $this->container['rating_score9'] = $rating_score9;

        return $this;
    }

    /**
     * Gets recommend_store_to_friend
     *
     * @return int|null
     */
    public function getRecommendStoreToFriend()
    {
        return $this->container['recommend_store_to_friend'];
    }

    /**
     * Sets recommend_store_to_friend
     *
     * @param int|null $recommend_store_to_friend recommend_store_to_friend
     *
     * @return self
     */
    public function setRecommendStoreToFriend($recommend_store_to_friend)
    {
        $this->container['recommend_store_to_friend'] = $recommend_store_to_friend;

        return $this;
    }

    /**
     * Gets recommend_to_friend
     *
     * @return bool|null
     */
    public function getRecommendToFriend()
    {
        return $this->container['recommend_to_friend'];
    }

    /**
     * Sets recommend_to_friend
     *
     * @param bool|null $recommend_to_friend recommend_to_friend
     *
     * @return self
     */
    public function setRecommendToFriend($recommend_to_friend)
    {
        $this->container['recommend_to_friend'] = $recommend_to_friend;

        return $this;
    }

    /**
     * Gets review
     *
     * @return string|null
     */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
     * Sets review
     *
     * @param string|null $review review
     *
     * @return self
     */
    public function setReview($review)
    {
        $this->container['review'] = $review;

        return $this;
    }

    /**
     * Gets review_oid
     *
     * @return int|null
     */
    public function getReviewOid()
    {
        return $this->container['review_oid'];
    }

    /**
     * Sets review_oid
     *
     * @param int|null $review_oid review_oid
     *
     * @return self
     */
    public function setReviewOid($review_oid)
    {
        $this->container['review_oid'] = $review_oid;

        return $this;
    }

    /**
     * Gets reviewed_nickname
     *
     * @return string|null
     */
    public function getReviewedNickname()
    {
        return $this->container['reviewed_nickname'];
    }

    /**
     * Sets reviewed_nickname
     *
     * @param string|null $reviewed_nickname reviewed_nickname
     *
     * @return self
     */
    public function setReviewedNickname($reviewed_nickname)
    {
        $this->container['reviewed_nickname'] = $reviewed_nickname;

        return $this;
    }

    /**
     * Gets reviewer_email
     *
     * @return string|null
     */
    public function getReviewerEmail()
    {
        return $this->container['reviewer_email'];
    }

    /**
     * Sets reviewer_email
     *
     * @param string|null $reviewer_email reviewer_email
     *
     * @return self
     */
    public function setReviewerEmail($reviewer_email)
    {
        $this->container['reviewer_email'] = $reviewer_email;

        return $this;
    }

    /**
     * Gets reviewer_location
     *
     * @return string|null
     */
    public function getReviewerLocation()
    {
        return $this->container['reviewer_location'];
    }

    /**
     * Sets reviewer_location
     *
     * @param string|null $reviewer_location reviewer_location
     *
     * @return self
     */
    public function setReviewerLocation($reviewer_location)
    {
        $this->container['reviewer_location'] = $reviewer_location;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets store_feedback
     *
     * @return string|null
     */
    public function getStoreFeedback()
    {
        return $this->container['store_feedback'];
    }

    /**
     * Sets store_feedback
     *
     * @param string|null $store_feedback store_feedback
     *
     * @return self
     */
    public function setStoreFeedback($store_feedback)
    {
        $this->container['store_feedback'] = $store_feedback;

        return $this;
    }

    /**
     * Gets submitted_dts
     *
     * @return string|null
     */
    public function getSubmittedDts()
    {
        return $this->container['submitted_dts'];
    }

    /**
     * Sets submitted_dts
     *
     * @param string|null $submitted_dts Date/time of review submission
     *
     * @return self
     */
    public function setSubmittedDts($submitted_dts)
    {
        $this->container['submitted_dts'] = $submitted_dts;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


