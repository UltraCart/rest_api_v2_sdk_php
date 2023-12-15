<?php
/**
 * EmailCommseqStep
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
 * EmailCommseqStep Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailCommseqStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailCommseqStep';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alt_child_email_communication_sequence_steps' => '\ultracart\v2\models\EmailCommseqStep[]',
        'child_email_communication_sequence_steps' => '\ultracart\v2\models\EmailCommseqStep[]',
        'email_communication_sequence_step_uuid' => 'string',
        'email_pending_review' => 'bool',
        'email_rejected' => 'bool',
        'email_requires_review' => 'bool',
        'filter_profile_equation_json' => 'string',
        'merchant_notes' => 'string',
        'step_config_json' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alt_child_email_communication_sequence_steps' => null,
        'child_email_communication_sequence_steps' => null,
        'email_communication_sequence_step_uuid' => null,
        'email_pending_review' => null,
        'email_rejected' => null,
        'email_requires_review' => null,
        'filter_profile_equation_json' => null,
        'merchant_notes' => null,
        'step_config_json' => null,
        'type' => null
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
        'alt_child_email_communication_sequence_steps' => 'alt_child_email_communication_sequence_steps',
        'child_email_communication_sequence_steps' => 'child_email_communication_sequence_steps',
        'email_communication_sequence_step_uuid' => 'email_communication_sequence_step_uuid',
        'email_pending_review' => 'email_pending_review',
        'email_rejected' => 'email_rejected',
        'email_requires_review' => 'email_requires_review',
        'filter_profile_equation_json' => 'filter_profile_equation_json',
        'merchant_notes' => 'merchant_notes',
        'step_config_json' => 'step_config_json',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alt_child_email_communication_sequence_steps' => 'setAltChildEmailCommunicationSequenceSteps',
        'child_email_communication_sequence_steps' => 'setChildEmailCommunicationSequenceSteps',
        'email_communication_sequence_step_uuid' => 'setEmailCommunicationSequenceStepUuid',
        'email_pending_review' => 'setEmailPendingReview',
        'email_rejected' => 'setEmailRejected',
        'email_requires_review' => 'setEmailRequiresReview',
        'filter_profile_equation_json' => 'setFilterProfileEquationJson',
        'merchant_notes' => 'setMerchantNotes',
        'step_config_json' => 'setStepConfigJson',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alt_child_email_communication_sequence_steps' => 'getAltChildEmailCommunicationSequenceSteps',
        'child_email_communication_sequence_steps' => 'getChildEmailCommunicationSequenceSteps',
        'email_communication_sequence_step_uuid' => 'getEmailCommunicationSequenceStepUuid',
        'email_pending_review' => 'getEmailPendingReview',
        'email_rejected' => 'getEmailRejected',
        'email_requires_review' => 'getEmailRequiresReview',
        'filter_profile_equation_json' => 'getFilterProfileEquationJson',
        'merchant_notes' => 'getMerchantNotes',
        'step_config_json' => 'getStepConfigJson',
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
        return self::$swaggerModelName;
    }

    const TYPE_BEGIN = 'begin';
    const TYPE_WAIT = 'wait';
    const TYPE_EMAIL = 'email';
    const TYPE_MERGE = 'merge';
    const TYPE_CONDITION = 'condition';
    const TYPE_END = 'end';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BEGIN,
            self::TYPE_WAIT,
            self::TYPE_EMAIL,
            self::TYPE_MERGE,
            self::TYPE_CONDITION,
            self::TYPE_END,
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
        $this->container['alt_child_email_communication_sequence_steps'] = isset($data['alt_child_email_communication_sequence_steps']) ? $data['alt_child_email_communication_sequence_steps'] : null;
        $this->container['child_email_communication_sequence_steps'] = isset($data['child_email_communication_sequence_steps']) ? $data['child_email_communication_sequence_steps'] : null;
        $this->container['email_communication_sequence_step_uuid'] = isset($data['email_communication_sequence_step_uuid']) ? $data['email_communication_sequence_step_uuid'] : null;
        $this->container['email_pending_review'] = isset($data['email_pending_review']) ? $data['email_pending_review'] : null;
        $this->container['email_rejected'] = isset($data['email_rejected']) ? $data['email_rejected'] : null;
        $this->container['email_requires_review'] = isset($data['email_requires_review']) ? $data['email_requires_review'] : null;
        $this->container['filter_profile_equation_json'] = isset($data['filter_profile_equation_json']) ? $data['filter_profile_equation_json'] : null;
        $this->container['merchant_notes'] = isset($data['merchant_notes']) ? $data['merchant_notes'] : null;
        $this->container['step_config_json'] = isset($data['step_config_json']) ? $data['step_config_json'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets alt_child_email_communication_sequence_steps
     *
     * @return \ultracart\v2\models\EmailCommseqStep[]
     */
    public function getAltChildEmailCommunicationSequenceSteps()
    {
        return $this->container['alt_child_email_communication_sequence_steps'];
    }

    /**
     * Sets alt_child_email_communication_sequence_steps
     *
     * @param \ultracart\v2\models\EmailCommseqStep[] $alt_child_email_communication_sequence_steps Array of child steps for the alternate path
     *
     * @return $this
     */
    public function setAltChildEmailCommunicationSequenceSteps($alt_child_email_communication_sequence_steps)
    {
        $this->container['alt_child_email_communication_sequence_steps'] = $alt_child_email_communication_sequence_steps;

        return $this;
    }

    /**
     * Gets child_email_communication_sequence_steps
     *
     * @return \ultracart\v2\models\EmailCommseqStep[]
     */
    public function getChildEmailCommunicationSequenceSteps()
    {
        return $this->container['child_email_communication_sequence_steps'];
    }

    /**
     * Sets child_email_communication_sequence_steps
     *
     * @param \ultracart\v2\models\EmailCommseqStep[] $child_email_communication_sequence_steps Array of child steps
     *
     * @return $this
     */
    public function setChildEmailCommunicationSequenceSteps($child_email_communication_sequence_steps)
    {
        $this->container['child_email_communication_sequence_steps'] = $child_email_communication_sequence_steps;

        return $this;
    }

    /**
     * Gets email_communication_sequence_step_uuid
     *
     * @return string
     */
    public function getEmailCommunicationSequenceStepUuid()
    {
        return $this->container['email_communication_sequence_step_uuid'];
    }

    /**
     * Sets email_communication_sequence_step_uuid
     *
     * @param string $email_communication_sequence_step_uuid Email commseq step UUID
     *
     * @return $this
     */
    public function setEmailCommunicationSequenceStepUuid($email_communication_sequence_step_uuid)
    {
        $this->container['email_communication_sequence_step_uuid'] = $email_communication_sequence_step_uuid;

        return $this;
    }

    /**
     * Gets email_pending_review
     *
     * @return bool
     */
    public function getEmailPendingReview()
    {
        return $this->container['email_pending_review'];
    }

    /**
     * Sets email_pending_review
     *
     * @param bool $email_pending_review True if the content of the email associated with this step is pending review by UltraCart
     *
     * @return $this
     */
    public function setEmailPendingReview($email_pending_review)
    {
        $this->container['email_pending_review'] = $email_pending_review;

        return $this;
    }

    /**
     * Gets email_rejected
     *
     * @return bool
     */
    public function getEmailRejected()
    {
        return $this->container['email_rejected'];
    }

    /**
     * Sets email_rejected
     *
     * @param bool $email_rejected True if the content of the email associated with this step was rejected during review by UltraCart
     *
     * @return $this
     */
    public function setEmailRejected($email_rejected)
    {
        $this->container['email_rejected'] = $email_rejected;

        return $this;
    }

    /**
     * Gets email_requires_review
     *
     * @return bool
     */
    public function getEmailRequiresReview()
    {
        return $this->container['email_requires_review'];
    }

    /**
     * Sets email_requires_review
     *
     * @param bool $email_requires_review True if the content of the email associated with this step requires review by UltraCart
     *
     * @return $this
     */
    public function setEmailRequiresReview($email_requires_review)
    {
        $this->container['email_requires_review'] = $email_requires_review;

        return $this;
    }

    /**
     * Gets filter_profile_equation_json
     *
     * @return string
     */
    public function getFilterProfileEquationJson()
    {
        return $this->container['filter_profile_equation_json'];
    }

    /**
     * Sets filter_profile_equation_json
     *
     * @param string $filter_profile_equation_json Filter profile equation JSON
     *
     * @return $this
     */
    public function setFilterProfileEquationJson($filter_profile_equation_json)
    {
        $this->container['filter_profile_equation_json'] = $filter_profile_equation_json;

        return $this;
    }

    /**
     * Gets merchant_notes
     *
     * @return string
     */
    public function getMerchantNotes()
    {
        return $this->container['merchant_notes'];
    }

    /**
     * Sets merchant_notes
     *
     * @param string $merchant_notes Internal merchant notes
     *
     * @return $this
     */
    public function setMerchantNotes($merchant_notes)
    {
        $this->container['merchant_notes'] = $merchant_notes;

        return $this;
    }

    /**
     * Gets step_config_json
     *
     * @return string
     */
    public function getStepConfigJson()
    {
        return $this->container['step_config_json'];
    }

    /**
     * Sets step_config_json
     *
     * @param string $step_config_json Arbitrary Configuration for a step
     *
     * @return $this
     */
    public function setStepConfigJson($step_config_json)
    {
        $this->container['step_config_json'] = $step_config_json;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of step
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
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


