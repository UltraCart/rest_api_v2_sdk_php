<?php
/**
 * EmailPerformanceDaily
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracartv2
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

namespace ultracartv2\models;

use \ArrayAccess;
use \ultracartv2\ObjectSerializer;

/**
 * EmailPerformanceDaily Class Doc Comment
 *
 * @category Class
 * @package  ultracartv2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailPerformanceDaily implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailPerformanceDaily';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bounce_count' => 'int',
        'delivered_count' => 'int',
        'revenue' => 'float',
        'sequence_send_count' => 'int',
        'spam_count' => 'int',
        'stat_dts' => 'string',
        'transactional_send_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bounce_count' => 'int32',
        'delivered_count' => 'int32',
        'revenue' => null,
        'sequence_send_count' => 'int32',
        'spam_count' => 'int32',
        'stat_dts' => 'dateTime',
        'transactional_send_count' => 'int32'
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
        'bounce_count' => 'bounce_count',
        'delivered_count' => 'delivered_count',
        'revenue' => 'revenue',
        'sequence_send_count' => 'sequence_send_count',
        'spam_count' => 'spam_count',
        'stat_dts' => 'stat_dts',
        'transactional_send_count' => 'transactional_send_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bounce_count' => 'setBounceCount',
        'delivered_count' => 'setDeliveredCount',
        'revenue' => 'setRevenue',
        'sequence_send_count' => 'setSequenceSendCount',
        'spam_count' => 'setSpamCount',
        'stat_dts' => 'setStatDts',
        'transactional_send_count' => 'setTransactionalSendCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bounce_count' => 'getBounceCount',
        'delivered_count' => 'getDeliveredCount',
        'revenue' => 'getRevenue',
        'sequence_send_count' => 'getSequenceSendCount',
        'spam_count' => 'getSpamCount',
        'stat_dts' => 'getStatDts',
        'transactional_send_count' => 'getTransactionalSendCount'
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
        $this->container['bounce_count'] = isset($data['bounce_count']) ? $data['bounce_count'] : null;
        $this->container['delivered_count'] = isset($data['delivered_count']) ? $data['delivered_count'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['sequence_send_count'] = isset($data['sequence_send_count']) ? $data['sequence_send_count'] : null;
        $this->container['spam_count'] = isset($data['spam_count']) ? $data['spam_count'] : null;
        $this->container['stat_dts'] = isset($data['stat_dts']) ? $data['stat_dts'] : null;
        $this->container['transactional_send_count'] = isset($data['transactional_send_count']) ? $data['transactional_send_count'] : null;
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
     * Gets bounce_count
     *
     * @return int
     */
    public function getBounceCount()
    {
        return $this->container['bounce_count'];
    }

    /**
     * Sets bounce_count
     *
     * @param int $bounce_count Bounce count
     *
     * @return $this
     */
    public function setBounceCount($bounce_count)
    {
        $this->container['bounce_count'] = $bounce_count;

        return $this;
    }

    /**
     * Gets delivered_count
     *
     * @return int
     */
    public function getDeliveredCount()
    {
        return $this->container['delivered_count'];
    }

    /**
     * Sets delivered_count
     *
     * @param int $delivered_count Delivered count
     *
     * @return $this
     */
    public function setDeliveredCount($delivered_count)
    {
        $this->container['delivered_count'] = $delivered_count;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return float
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param float $revenue Revenue
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets sequence_send_count
     *
     * @return int
     */
    public function getSequenceSendCount()
    {
        return $this->container['sequence_send_count'];
    }

    /**
     * Sets sequence_send_count
     *
     * @param int $sequence_send_count Total sequence (campaign/flow) emails sent
     *
     * @return $this
     */
    public function setSequenceSendCount($sequence_send_count)
    {
        $this->container['sequence_send_count'] = $sequence_send_count;

        return $this;
    }

    /**
     * Gets spam_count
     *
     * @return int
     */
    public function getSpamCount()
    {
        return $this->container['spam_count'];
    }

    /**
     * Sets spam_count
     *
     * @param int $spam_count Spam complaints
     *
     * @return $this
     */
    public function setSpamCount($spam_count)
    {
        $this->container['spam_count'] = $spam_count;

        return $this;
    }

    /**
     * Gets stat_dts
     *
     * @return string
     */
    public function getStatDts()
    {
        return $this->container['stat_dts'];
    }

    /**
     * Sets stat_dts
     *
     * @param string $stat_dts The date that these statistcs are for
     *
     * @return $this
     */
    public function setStatDts($stat_dts)
    {
        $this->container['stat_dts'] = $stat_dts;

        return $this;
    }

    /**
     * Gets transactional_send_count
     *
     * @return int
     */
    public function getTransactionalSendCount()
    {
        return $this->container['transactional_send_count'];
    }

    /**
     * Sets transactional_send_count
     *
     * @param int $transactional_send_count Total transactions emails sent
     *
     * @return $this
     */
    public function setTransactionalSendCount($transactional_send_count)
    {
        $this->container['transactional_send_count'] = $transactional_send_count;

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


