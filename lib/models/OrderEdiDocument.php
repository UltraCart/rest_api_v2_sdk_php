<?php
/**
 * OrderEdiDocument
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
 * OrderEdiDocument Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderEdiDocument implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderEdiDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'direction' => 'string',
        'doc_dts' => 'string',
        'document' => 'string',
        'document_type_description' => 'string',
        'document_type_number' => 'int',
        'external_id' => 'string',
        'functional_acknowledgement' => 'string',
        'functional_acknowledgement_dts' => 'string',
        'functional_acknowledgement_pending' => 'bool',
        'group_control_number' => 'int',
        'internal_id' => 'string',
        'merchant_id' => 'string',
        'order_id' => 'string',
        'test_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'direction' => null,
        'doc_dts' => 'dateTime',
        'document' => null,
        'document_type_description' => null,
        'document_type_number' => 'int32',
        'external_id' => null,
        'functional_acknowledgement' => null,
        'functional_acknowledgement_dts' => null,
        'functional_acknowledgement_pending' => null,
        'group_control_number' => 'int32',
        'internal_id' => null,
        'merchant_id' => null,
        'order_id' => null,
        'test_mode' => null
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
        'direction' => 'direction',
        'doc_dts' => 'doc_dts',
        'document' => 'document',
        'document_type_description' => 'document_type_description',
        'document_type_number' => 'document_type_number',
        'external_id' => 'external_id',
        'functional_acknowledgement' => 'functional_acknowledgement',
        'functional_acknowledgement_dts' => 'functional_acknowledgement_dts',
        'functional_acknowledgement_pending' => 'functional_acknowledgement_pending',
        'group_control_number' => 'group_control_number',
        'internal_id' => 'internal_id',
        'merchant_id' => 'merchant_id',
        'order_id' => 'order_id',
        'test_mode' => 'test_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direction' => 'setDirection',
        'doc_dts' => 'setDocDts',
        'document' => 'setDocument',
        'document_type_description' => 'setDocumentTypeDescription',
        'document_type_number' => 'setDocumentTypeNumber',
        'external_id' => 'setExternalId',
        'functional_acknowledgement' => 'setFunctionalAcknowledgement',
        'functional_acknowledgement_dts' => 'setFunctionalAcknowledgementDts',
        'functional_acknowledgement_pending' => 'setFunctionalAcknowledgementPending',
        'group_control_number' => 'setGroupControlNumber',
        'internal_id' => 'setInternalId',
        'merchant_id' => 'setMerchantId',
        'order_id' => 'setOrderId',
        'test_mode' => 'setTestMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direction' => 'getDirection',
        'doc_dts' => 'getDocDts',
        'document' => 'getDocument',
        'document_type_description' => 'getDocumentTypeDescription',
        'document_type_number' => 'getDocumentTypeNumber',
        'external_id' => 'getExternalId',
        'functional_acknowledgement' => 'getFunctionalAcknowledgement',
        'functional_acknowledgement_dts' => 'getFunctionalAcknowledgementDts',
        'functional_acknowledgement_pending' => 'getFunctionalAcknowledgementPending',
        'group_control_number' => 'getGroupControlNumber',
        'internal_id' => 'getInternalId',
        'merchant_id' => 'getMerchantId',
        'order_id' => 'getOrderId',
        'test_mode' => 'getTestMode'
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

    const DIRECTION_INBOUND = 'inbound';
    const DIRECTION_OUTBOUND = 'outbound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['doc_dts'] = isset($data['doc_dts']) ? $data['doc_dts'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['document_type_description'] = isset($data['document_type_description']) ? $data['document_type_description'] : null;
        $this->container['document_type_number'] = isset($data['document_type_number']) ? $data['document_type_number'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['functional_acknowledgement'] = isset($data['functional_acknowledgement']) ? $data['functional_acknowledgement'] : null;
        $this->container['functional_acknowledgement_dts'] = isset($data['functional_acknowledgement_dts']) ? $data['functional_acknowledgement_dts'] : null;
        $this->container['functional_acknowledgement_pending'] = isset($data['functional_acknowledgement_pending']) ? $data['functional_acknowledgement_pending'] : null;
        $this->container['group_control_number'] = isset($data['group_control_number']) ? $data['group_control_number'] : null;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['test_mode'] = isset($data['test_mode']) ? $data['test_mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
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
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Direction the document flowed
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets doc_dts
     *
     * @return string
     */
    public function getDocDts()
    {
        return $this->container['doc_dts'];
    }

    /**
     * Sets doc_dts
     *
     * @param string $doc_dts Date/time the document was created/received
     *
     * @return $this
     */
    public function setDocDts($doc_dts)
    {
        $this->container['doc_dts'] = $doc_dts;

        return $this;
    }

    /**
     * Gets document
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param string $document document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets document_type_description
     *
     * @return string
     */
    public function getDocumentTypeDescription()
    {
        return $this->container['document_type_description'];
    }

    /**
     * Sets document_type_description
     *
     * @param string $document_type_description document_type_description
     *
     * @return $this
     */
    public function setDocumentTypeDescription($document_type_description)
    {
        $this->container['document_type_description'] = $document_type_description;

        return $this;
    }

    /**
     * Gets document_type_number
     *
     * @return int
     */
    public function getDocumentTypeNumber()
    {
        return $this->container['document_type_number'];
    }

    /**
     * Sets document_type_number
     *
     * @param int $document_type_number document_type_number
     *
     * @return $this
     */
    public function setDocumentTypeNumber($document_type_number)
    {
        $this->container['document_type_number'] = $document_type_number;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string $external_id external_id
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets functional_acknowledgement
     *
     * @return string
     */
    public function getFunctionalAcknowledgement()
    {
        return $this->container['functional_acknowledgement'];
    }

    /**
     * Sets functional_acknowledgement
     *
     * @param string $functional_acknowledgement functional_acknowledgement
     *
     * @return $this
     */
    public function setFunctionalAcknowledgement($functional_acknowledgement)
    {
        $this->container['functional_acknowledgement'] = $functional_acknowledgement;

        return $this;
    }

    /**
     * Gets functional_acknowledgement_dts
     *
     * @return string
     */
    public function getFunctionalAcknowledgementDts()
    {
        return $this->container['functional_acknowledgement_dts'];
    }

    /**
     * Sets functional_acknowledgement_dts
     *
     * @param string $functional_acknowledgement_dts functional_acknowledgement_dts
     *
     * @return $this
     */
    public function setFunctionalAcknowledgementDts($functional_acknowledgement_dts)
    {
        $this->container['functional_acknowledgement_dts'] = $functional_acknowledgement_dts;

        return $this;
    }

    /**
     * Gets functional_acknowledgement_pending
     *
     * @return bool
     */
    public function getFunctionalAcknowledgementPending()
    {
        return $this->container['functional_acknowledgement_pending'];
    }

    /**
     * Sets functional_acknowledgement_pending
     *
     * @param bool $functional_acknowledgement_pending functional_acknowledgement_pending
     *
     * @return $this
     */
    public function setFunctionalAcknowledgementPending($functional_acknowledgement_pending)
    {
        $this->container['functional_acknowledgement_pending'] = $functional_acknowledgement_pending;

        return $this;
    }

    /**
     * Gets group_control_number
     *
     * @return int
     */
    public function getGroupControlNumber()
    {
        return $this->container['group_control_number'];
    }

    /**
     * Sets group_control_number
     *
     * @param int $group_control_number group_control_number
     *
     * @return $this
     */
    public function setGroupControlNumber($group_control_number)
    {
        $this->container['group_control_number'] = $group_control_number;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id internal_id
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

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
     * Gets test_mode
     *
     * @return bool
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool $test_mode test_mode
     *
     * @return $this
     */
    public function setTestMode($test_mode)
    {
        $this->container['test_mode'] = $test_mode;

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


