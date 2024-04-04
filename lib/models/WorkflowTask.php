<?php
/**
 * WorkflowTask
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
 * WorkflowTask Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorkflowTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WorkflowTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'assigned_to_group' => 'string',
        'assigned_to_group_id' => 'int',
        'assigned_to_user' => 'string',
        'assigned_to_user_id' => 'int',
        'assigned_to_user_or_group' => 'string',
        'attachments' => '\ultracart\v2\models\WorkflowAttachment[]',
        'created_by' => '\ultracart\v2\models\WorkflowUser',
        'created_dts' => 'string',
        'delay_until_dts' => 'string',
        'dependant_workflow_task_uuid' => 'string',
        'due_dts' => 'string',
        'expiration_dts' => 'string',
        'global_task_number' => 'int',
        'histories' => '\ultracart\v2\models\WorkflowTaskHistory[]',
        'last_update_dts' => 'string',
        'merchant_id' => 'string',
        'notes' => '\ultracart\v2\models\WorkflowNote[]',
        'object_email' => 'string',
        'object_id' => 'string',
        'object_task_number' => 'int',
        'object_type' => 'string',
        'object_url' => 'string',
        'priority' => 'string',
        'properties' => '\ultracart\v2\models\Property[]',
        'related_workflow_task_uuid' => 'string',
        'status' => 'string',
        'system_task_type' => 'string',
        'tags' => 'string[]',
        'task_context' => 'string',
        'task_details' => 'string',
        'task_name' => 'string',
        'workflow_task_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'assigned_to_group' => null,
        'assigned_to_group_id' => 'int32',
        'assigned_to_user' => null,
        'assigned_to_user_id' => 'int32',
        'assigned_to_user_or_group' => null,
        'attachments' => null,
        'created_by' => null,
        'created_dts' => 'dateTime',
        'delay_until_dts' => 'dateTime',
        'dependant_workflow_task_uuid' => null,
        'due_dts' => 'dateTime',
        'expiration_dts' => 'dateTime',
        'global_task_number' => 'int32',
        'histories' => null,
        'last_update_dts' => 'dateTime',
        'merchant_id' => null,
        'notes' => null,
        'object_email' => null,
        'object_id' => null,
        'object_task_number' => 'int32',
        'object_type' => null,
        'object_url' => null,
        'priority' => null,
        'properties' => null,
        'related_workflow_task_uuid' => null,
        'status' => null,
        'system_task_type' => null,
        'tags' => null,
        'task_context' => null,
        'task_details' => null,
        'task_name' => null,
        'workflow_task_uuid' => null
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
        'assigned_to_group' => 'assigned_to_group',
        'assigned_to_group_id' => 'assigned_to_group_id',
        'assigned_to_user' => 'assigned_to_user',
        'assigned_to_user_id' => 'assigned_to_user_id',
        'assigned_to_user_or_group' => 'assigned_to_user_or_group',
        'attachments' => 'attachments',
        'created_by' => 'created_by',
        'created_dts' => 'created_dts',
        'delay_until_dts' => 'delay_until_dts',
        'dependant_workflow_task_uuid' => 'dependant_workflow_task_uuid',
        'due_dts' => 'due_dts',
        'expiration_dts' => 'expiration_dts',
        'global_task_number' => 'global_task_number',
        'histories' => 'histories',
        'last_update_dts' => 'last_update_dts',
        'merchant_id' => 'merchant_id',
        'notes' => 'notes',
        'object_email' => 'object_email',
        'object_id' => 'object_id',
        'object_task_number' => 'object_task_number',
        'object_type' => 'object_type',
        'object_url' => 'object_url',
        'priority' => 'priority',
        'properties' => 'properties',
        'related_workflow_task_uuid' => 'related_workflow_task_uuid',
        'status' => 'status',
        'system_task_type' => 'system_task_type',
        'tags' => 'tags',
        'task_context' => 'task_context',
        'task_details' => 'task_details',
        'task_name' => 'task_name',
        'workflow_task_uuid' => 'workflow_task_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assigned_to_group' => 'setAssignedToGroup',
        'assigned_to_group_id' => 'setAssignedToGroupId',
        'assigned_to_user' => 'setAssignedToUser',
        'assigned_to_user_id' => 'setAssignedToUserId',
        'assigned_to_user_or_group' => 'setAssignedToUserOrGroup',
        'attachments' => 'setAttachments',
        'created_by' => 'setCreatedBy',
        'created_dts' => 'setCreatedDts',
        'delay_until_dts' => 'setDelayUntilDts',
        'dependant_workflow_task_uuid' => 'setDependantWorkflowTaskUuid',
        'due_dts' => 'setDueDts',
        'expiration_dts' => 'setExpirationDts',
        'global_task_number' => 'setGlobalTaskNumber',
        'histories' => 'setHistories',
        'last_update_dts' => 'setLastUpdateDts',
        'merchant_id' => 'setMerchantId',
        'notes' => 'setNotes',
        'object_email' => 'setObjectEmail',
        'object_id' => 'setObjectId',
        'object_task_number' => 'setObjectTaskNumber',
        'object_type' => 'setObjectType',
        'object_url' => 'setObjectUrl',
        'priority' => 'setPriority',
        'properties' => 'setProperties',
        'related_workflow_task_uuid' => 'setRelatedWorkflowTaskUuid',
        'status' => 'setStatus',
        'system_task_type' => 'setSystemTaskType',
        'tags' => 'setTags',
        'task_context' => 'setTaskContext',
        'task_details' => 'setTaskDetails',
        'task_name' => 'setTaskName',
        'workflow_task_uuid' => 'setWorkflowTaskUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assigned_to_group' => 'getAssignedToGroup',
        'assigned_to_group_id' => 'getAssignedToGroupId',
        'assigned_to_user' => 'getAssignedToUser',
        'assigned_to_user_id' => 'getAssignedToUserId',
        'assigned_to_user_or_group' => 'getAssignedToUserOrGroup',
        'attachments' => 'getAttachments',
        'created_by' => 'getCreatedBy',
        'created_dts' => 'getCreatedDts',
        'delay_until_dts' => 'getDelayUntilDts',
        'dependant_workflow_task_uuid' => 'getDependantWorkflowTaskUuid',
        'due_dts' => 'getDueDts',
        'expiration_dts' => 'getExpirationDts',
        'global_task_number' => 'getGlobalTaskNumber',
        'histories' => 'getHistories',
        'last_update_dts' => 'getLastUpdateDts',
        'merchant_id' => 'getMerchantId',
        'notes' => 'getNotes',
        'object_email' => 'getObjectEmail',
        'object_id' => 'getObjectId',
        'object_task_number' => 'getObjectTaskNumber',
        'object_type' => 'getObjectType',
        'object_url' => 'getObjectUrl',
        'priority' => 'getPriority',
        'properties' => 'getProperties',
        'related_workflow_task_uuid' => 'getRelatedWorkflowTaskUuid',
        'status' => 'getStatus',
        'system_task_type' => 'getSystemTaskType',
        'tags' => 'getTags',
        'task_context' => 'getTaskContext',
        'task_details' => 'getTaskDetails',
        'task_name' => 'getTaskName',
        'workflow_task_uuid' => 'getWorkflowTaskUuid'
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

    const OBJECT_TYPE_ORDER = 'order';
    const OBJECT_TYPE_AUTO_ORDER = 'auto order';
    const OBJECT_TYPE_ITEM = 'item';
    const OBJECT_TYPE_CUSTOMER_PROFILE = 'customer profile';
    const OBJECT_TYPE_STOREFRONT = 'storefront';
    const PRIORITY__1___LOW = '1 - low';
    const PRIORITY__2___MEDIUM = '2 - medium';
    const PRIORITY__3___HIGH = '3 - high';
    const PRIORITY__4___CRITICAL = '4 - critical';
    const STATUS_OPEN = 'open';
    const STATUS_CLOSED = 'closed';
    const STATUS_DELAYED = 'delayed';
    const STATUS_AWAITING_CUSTOMER_FEEDBACK = 'awaiting customer feedback';
    const STATUS_CLOSED___SYSTEM = 'closed - system';
    const STATUS_CLOSED___CUSTOMER = 'closed - customer';
    const STATUS_CLOSED___EXPIRATION = 'closed - expiration';
    const SYSTEM_TASK_TYPE_ORDER_ACCOUNTS_RECEIVABLE = 'order_accounts_receivable';
    const SYSTEM_TASK_TYPE_ORDER_FRAUD_REVIEW = 'order_fraud_review';
    const SYSTEM_TASK_TYPE_AUTO_ORDER_CARD_UPDATE_ISSUE = 'auto_order_card_update_issue';
    const SYSTEM_TASK_TYPE_AUTO_ORDER_CANCELED_PAYMENT = 'auto_order_canceled_payment';
    const SYSTEM_TASK_TYPE_ITEM_LOW_STOCK = 'item_low_stock';
    const SYSTEM_TASK_TYPE_ITEM_OUT_OF_STOCK = 'item_out_of_stock';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObjectTypeAllowableValues()
    {
        return [
            self::OBJECT_TYPE_ORDER,
            self::OBJECT_TYPE_AUTO_ORDER,
            self::OBJECT_TYPE_ITEM,
            self::OBJECT_TYPE_CUSTOMER_PROFILE,
            self::OBJECT_TYPE_STOREFRONT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY__1___LOW,
            self::PRIORITY__2___MEDIUM,
            self::PRIORITY__3___HIGH,
            self::PRIORITY__4___CRITICAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
            self::STATUS_DELAYED,
            self::STATUS_AWAITING_CUSTOMER_FEEDBACK,
            self::STATUS_CLOSED___SYSTEM,
            self::STATUS_CLOSED___CUSTOMER,
            self::STATUS_CLOSED___EXPIRATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSystemTaskTypeAllowableValues()
    {
        return [
            self::SYSTEM_TASK_TYPE_ORDER_ACCOUNTS_RECEIVABLE,
            self::SYSTEM_TASK_TYPE_ORDER_FRAUD_REVIEW,
            self::SYSTEM_TASK_TYPE_AUTO_ORDER_CARD_UPDATE_ISSUE,
            self::SYSTEM_TASK_TYPE_AUTO_ORDER_CANCELED_PAYMENT,
            self::SYSTEM_TASK_TYPE_ITEM_LOW_STOCK,
            self::SYSTEM_TASK_TYPE_ITEM_OUT_OF_STOCK,
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
        $this->container['assigned_to_group'] = isset($data['assigned_to_group']) ? $data['assigned_to_group'] : null;
        $this->container['assigned_to_group_id'] = isset($data['assigned_to_group_id']) ? $data['assigned_to_group_id'] : null;
        $this->container['assigned_to_user'] = isset($data['assigned_to_user']) ? $data['assigned_to_user'] : null;
        $this->container['assigned_to_user_id'] = isset($data['assigned_to_user_id']) ? $data['assigned_to_user_id'] : null;
        $this->container['assigned_to_user_or_group'] = isset($data['assigned_to_user_or_group']) ? $data['assigned_to_user_or_group'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['created_dts'] = isset($data['created_dts']) ? $data['created_dts'] : null;
        $this->container['delay_until_dts'] = isset($data['delay_until_dts']) ? $data['delay_until_dts'] : null;
        $this->container['dependant_workflow_task_uuid'] = isset($data['dependant_workflow_task_uuid']) ? $data['dependant_workflow_task_uuid'] : null;
        $this->container['due_dts'] = isset($data['due_dts']) ? $data['due_dts'] : null;
        $this->container['expiration_dts'] = isset($data['expiration_dts']) ? $data['expiration_dts'] : null;
        $this->container['global_task_number'] = isset($data['global_task_number']) ? $data['global_task_number'] : null;
        $this->container['histories'] = isset($data['histories']) ? $data['histories'] : null;
        $this->container['last_update_dts'] = isset($data['last_update_dts']) ? $data['last_update_dts'] : null;
        $this->container['merchant_id'] = isset($data['merchant_id']) ? $data['merchant_id'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['object_email'] = isset($data['object_email']) ? $data['object_email'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_task_number'] = isset($data['object_task_number']) ? $data['object_task_number'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['object_url'] = isset($data['object_url']) ? $data['object_url'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['related_workflow_task_uuid'] = isset($data['related_workflow_task_uuid']) ? $data['related_workflow_task_uuid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['system_task_type'] = isset($data['system_task_type']) ? $data['system_task_type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['task_context'] = isset($data['task_context']) ? $data['task_context'] : null;
        $this->container['task_details'] = isset($data['task_details']) ? $data['task_details'] : null;
        $this->container['task_name'] = isset($data['task_name']) ? $data['task_name'] : null;
        $this->container['workflow_task_uuid'] = isset($data['workflow_task_uuid']) ? $data['workflow_task_uuid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($this->container['object_type']) && !in_array($this->container['object_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'object_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSystemTaskTypeAllowableValues();
        if (!is_null($this->container['system_task_type']) && !in_array($this->container['system_task_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'system_task_type', must be one of '%s'",
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
     * Gets assigned_to_group
     *
     * @return string
     */
    public function getAssignedToGroup()
    {
        return $this->container['assigned_to_group'];
    }

    /**
     * Sets assigned_to_group
     *
     * @param string $assigned_to_group Assigned to group
     *
     * @return $this
     */
    public function setAssignedToGroup($assigned_to_group)
    {
        $this->container['assigned_to_group'] = $assigned_to_group;

        return $this;
    }

    /**
     * Gets assigned_to_group_id
     *
     * @return int
     */
    public function getAssignedToGroupId()
    {
        return $this->container['assigned_to_group_id'];
    }

    /**
     * Sets assigned_to_group_id
     *
     * @param int $assigned_to_group_id Assigned to group ID
     *
     * @return $this
     */
    public function setAssignedToGroupId($assigned_to_group_id)
    {
        $this->container['assigned_to_group_id'] = $assigned_to_group_id;

        return $this;
    }

    /**
     * Gets assigned_to_user
     *
     * @return string
     */
    public function getAssignedToUser()
    {
        return $this->container['assigned_to_user'];
    }

    /**
     * Sets assigned_to_user
     *
     * @param string $assigned_to_user Assigned to user
     *
     * @return $this
     */
    public function setAssignedToUser($assigned_to_user)
    {
        $this->container['assigned_to_user'] = $assigned_to_user;

        return $this;
    }

    /**
     * Gets assigned_to_user_id
     *
     * @return int
     */
    public function getAssignedToUserId()
    {
        return $this->container['assigned_to_user_id'];
    }

    /**
     * Sets assigned_to_user_id
     *
     * @param int $assigned_to_user_id Assigned to user ID
     *
     * @return $this
     */
    public function setAssignedToUserId($assigned_to_user_id)
    {
        $this->container['assigned_to_user_id'] = $assigned_to_user_id;

        return $this;
    }

    /**
     * Gets assigned_to_user_or_group
     *
     * @return string
     */
    public function getAssignedToUserOrGroup()
    {
        return $this->container['assigned_to_user_or_group'];
    }

    /**
     * Sets assigned_to_user_or_group
     *
     * @param string $assigned_to_user_or_group Assigned to user or group (used for sorting)
     *
     * @return $this
     */
    public function setAssignedToUserOrGroup($assigned_to_user_or_group)
    {
        $this->container['assigned_to_user_or_group'] = $assigned_to_user_or_group;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \ultracart\v2\models\WorkflowAttachment[]
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \ultracart\v2\models\WorkflowAttachment[] $attachments Attachments to the Workflow Task
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \ultracart\v2\models\WorkflowUser
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \ultracart\v2\models\WorkflowUser $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_dts
     *
     * @return string
     */
    public function getCreatedDts()
    {
        return $this->container['created_dts'];
    }

    /**
     * Sets created_dts
     *
     * @param string $created_dts Date/time that the workflow task was created
     *
     * @return $this
     */
    public function setCreatedDts($created_dts)
    {
        $this->container['created_dts'] = $created_dts;

        return $this;
    }

    /**
     * Gets delay_until_dts
     *
     * @return string
     */
    public function getDelayUntilDts()
    {
        return $this->container['delay_until_dts'];
    }

    /**
     * Sets delay_until_dts
     *
     * @param string $delay_until_dts Date/time that the workflow task should delay until
     *
     * @return $this
     */
    public function setDelayUntilDts($delay_until_dts)
    {
        $this->container['delay_until_dts'] = $delay_until_dts;

        return $this;
    }

    /**
     * Gets dependant_workflow_task_uuid
     *
     * @return string
     */
    public function getDependantWorkflowTaskUuid()
    {
        return $this->container['dependant_workflow_task_uuid'];
    }

    /**
     * Sets dependant_workflow_task_uuid
     *
     * @param string $dependant_workflow_task_uuid Dependant Workflow Task UUID (must be completed before this task can be completed)
     *
     * @return $this
     */
    public function setDependantWorkflowTaskUuid($dependant_workflow_task_uuid)
    {
        $this->container['dependant_workflow_task_uuid'] = $dependant_workflow_task_uuid;

        return $this;
    }

    /**
     * Gets due_dts
     *
     * @return string
     */
    public function getDueDts()
    {
        return $this->container['due_dts'];
    }

    /**
     * Sets due_dts
     *
     * @param string $due_dts Date/time that the workflow task is due
     *
     * @return $this
     */
    public function setDueDts($due_dts)
    {
        $this->container['due_dts'] = $due_dts;

        return $this;
    }

    /**
     * Gets expiration_dts
     *
     * @return string
     */
    public function getExpirationDts()
    {
        return $this->container['expiration_dts'];
    }

    /**
     * Sets expiration_dts
     *
     * @param string $expiration_dts Date/time that the workflow task will expire and be closed.  This is set by system generated tasks.
     *
     * @return $this
     */
    public function setExpirationDts($expiration_dts)
    {
        $this->container['expiration_dts'] = $expiration_dts;

        return $this;
    }

    /**
     * Gets global_task_number
     *
     * @return int
     */
    public function getGlobalTaskNumber()
    {
        return $this->container['global_task_number'];
    }

    /**
     * Sets global_task_number
     *
     * @param int $global_task_number Global task number
     *
     * @return $this
     */
    public function setGlobalTaskNumber($global_task_number)
    {
        $this->container['global_task_number'] = $global_task_number;

        return $this;
    }

    /**
     * Gets histories
     *
     * @return \ultracart\v2\models\WorkflowTaskHistory[]
     */
    public function getHistories()
    {
        return $this->container['histories'];
    }

    /**
     * Sets histories
     *
     * @param \ultracart\v2\models\WorkflowTaskHistory[] $histories Array of history records for the task
     *
     * @return $this
     */
    public function setHistories($histories)
    {
        $this->container['histories'] = $histories;

        return $this;
    }

    /**
     * Gets last_update_dts
     *
     * @return string
     */
    public function getLastUpdateDts()
    {
        return $this->container['last_update_dts'];
    }

    /**
     * Sets last_update_dts
     *
     * @param string $last_update_dts Date/time that the workflow task was last updated
     *
     * @return $this
     */
    public function setLastUpdateDts($last_update_dts)
    {
        $this->container['last_update_dts'] = $last_update_dts;

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
     * @param string $merchant_id Merchant ID
     *
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \ultracart\v2\models\WorkflowNote[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \ultracart\v2\models\WorkflowNote[] $notes Notes on the Workflow Task
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets object_email
     *
     * @return string
     */
    public function getObjectEmail()
    {
        return $this->container['object_email'];
    }

    /**
     * Sets object_email
     *
     * @param string $object_email Object is associated with customer email
     *
     * @return $this
     */
    public function setObjectEmail($object_email)
    {
        $this->container['object_email'] = $object_email;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string $object_id Object ID
     *
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_task_number
     *
     * @return int
     */
    public function getObjectTaskNumber()
    {
        return $this->container['object_task_number'];
    }

    /**
     * Sets object_task_number
     *
     * @param int $object_task_number Object specific task number
     *
     * @return $this
     */
    public function setObjectTaskNumber($object_task_number)
    {
        $this->container['object_task_number'] = $object_task_number;

        return $this;
    }

    /**
     * Gets object_type
     *
     * @return string
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param string $object_type Object Type
     *
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($object_type) && !in_array($object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'object_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets object_url
     *
     * @return string
     */
    public function getObjectUrl()
    {
        return $this->container['object_url'];
    }

    /**
     * Sets object_url
     *
     * @param string $object_url Object URL
     *
     * @return $this
     */
    public function setObjectUrl($object_url)
    {
        $this->container['object_url'] = $object_url;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority Priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($priority) && !in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'priority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \ultracart\v2\models\Property[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \ultracart\v2\models\Property[] $properties Properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets related_workflow_task_uuid
     *
     * @return string
     */
    public function getRelatedWorkflowTaskUuid()
    {
        return $this->container['related_workflow_task_uuid'];
    }

    /**
     * Sets related_workflow_task_uuid
     *
     * @param string $related_workflow_task_uuid Related Workflow Task UUID
     *
     * @return $this
     */
    public function setRelatedWorkflowTaskUuid($related_workflow_task_uuid)
    {
        $this->container['related_workflow_task_uuid'] = $related_workflow_task_uuid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the workflow task
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets system_task_type
     *
     * @return string
     */
    public function getSystemTaskType()
    {
        return $this->container['system_task_type'];
    }

    /**
     * Sets system_task_type
     *
     * @param string $system_task_type Constant for the type of system generated task
     *
     * @return $this
     */
    public function setSystemTaskType($system_task_type)
    {
        $allowedValues = $this->getSystemTaskTypeAllowableValues();
        if (!is_null($system_task_type) && !in_array($system_task_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'system_task_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['system_task_type'] = $system_task_type;

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
     * @param string[] $tags Tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets task_context
     *
     * @return string
     */
    public function getTaskContext()
    {
        return $this->container['task_context'];
    }

    /**
     * Sets task_context
     *
     * @param string $task_context User friendly string of the task context
     *
     * @return $this
     */
    public function setTaskContext($task_context)
    {
        $this->container['task_context'] = $task_context;

        return $this;
    }

    /**
     * Gets task_details
     *
     * @return string
     */
    public function getTaskDetails()
    {
        return $this->container['task_details'];
    }

    /**
     * Sets task_details
     *
     * @param string $task_details Task Details
     *
     * @return $this
     */
    public function setTaskDetails($task_details)
    {
        $this->container['task_details'] = $task_details;

        return $this;
    }

    /**
     * Gets task_name
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->container['task_name'];
    }

    /**
     * Sets task_name
     *
     * @param string $task_name Task Name
     *
     * @return $this
     */
    public function setTaskName($task_name)
    {
        $this->container['task_name'] = $task_name;

        return $this;
    }

    /**
     * Gets workflow_task_uuid
     *
     * @return string
     */
    public function getWorkflowTaskUuid()
    {
        return $this->container['workflow_task_uuid'];
    }

    /**
     * Sets workflow_task_uuid
     *
     * @param string $workflow_task_uuid Workflow Task UUID
     *
     * @return $this
     */
    public function setWorkflowTaskUuid($workflow_task_uuid)
    {
        $this->container['workflow_task_uuid'] = $workflow_task_uuid;

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


