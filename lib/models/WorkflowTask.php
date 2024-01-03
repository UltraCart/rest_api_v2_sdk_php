<?php
/**
 * WorkflowTask
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
 * WorkflowTask Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WorkflowTask implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WorkflowTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assigned_to_group' => 'string',
        'assigned_to_group_id' => 'int',
        'assigned_to_user' => 'string',
        'assigned_to_user_id' => 'int',
        'attachments' => '\ultracart\v2\models\WorkflowAttachment[]',
        'created_by' => '\ultracart\v2\models\WorkflowUser',
        'created_dts' => 'string',
        'delay_until_dts' => 'string',
        'due_dts' => 'string',
        'histories' => '\ultracart\v2\models\WorkflowTaskHistory[]',
        'last_update_dts' => 'string',
        'merchant_id' => 'string',
        'notes' => '\ultracart\v2\models\WorkflowNote[]',
        'object_email' => 'string',
        'object_id' => 'string',
        'object_type' => 'string',
        'object_url' => 'string',
        'priority' => 'string',
        'status' => 'string',
        'task_context' => 'string',
        'task_details' => 'string',
        'task_name' => 'string',
        'workflow_task_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'assigned_to_group' => null,
        'assigned_to_group_id' => 'int32',
        'assigned_to_user' => null,
        'assigned_to_user_id' => 'int32',
        'attachments' => null,
        'created_by' => null,
        'created_dts' => 'dateTime',
        'delay_until_dts' => 'dateTime',
        'due_dts' => 'dateTime',
        'histories' => null,
        'last_update_dts' => 'dateTime',
        'merchant_id' => null,
        'notes' => null,
        'object_email' => null,
        'object_id' => null,
        'object_type' => null,
        'object_url' => null,
        'priority' => null,
        'status' => null,
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
        'assigned_to_group' => 'assigned_to_group',
        'assigned_to_group_id' => 'assigned_to_group_id',
        'assigned_to_user' => 'assigned_to_user',
        'assigned_to_user_id' => 'assigned_to_user_id',
        'attachments' => 'attachments',
        'created_by' => 'created_by',
        'created_dts' => 'created_dts',
        'delay_until_dts' => 'delay_until_dts',
        'due_dts' => 'due_dts',
        'histories' => 'histories',
        'last_update_dts' => 'last_update_dts',
        'merchant_id' => 'merchant_id',
        'notes' => 'notes',
        'object_email' => 'object_email',
        'object_id' => 'object_id',
        'object_type' => 'object_type',
        'object_url' => 'object_url',
        'priority' => 'priority',
        'status' => 'status',
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
        'attachments' => 'setAttachments',
        'created_by' => 'setCreatedBy',
        'created_dts' => 'setCreatedDts',
        'delay_until_dts' => 'setDelayUntilDts',
        'due_dts' => 'setDueDts',
        'histories' => 'setHistories',
        'last_update_dts' => 'setLastUpdateDts',
        'merchant_id' => 'setMerchantId',
        'notes' => 'setNotes',
        'object_email' => 'setObjectEmail',
        'object_id' => 'setObjectId',
        'object_type' => 'setObjectType',
        'object_url' => 'setObjectUrl',
        'priority' => 'setPriority',
        'status' => 'setStatus',
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
        'attachments' => 'getAttachments',
        'created_by' => 'getCreatedBy',
        'created_dts' => 'getCreatedDts',
        'delay_until_dts' => 'getDelayUntilDts',
        'due_dts' => 'getDueDts',
        'histories' => 'getHistories',
        'last_update_dts' => 'getLastUpdateDts',
        'merchant_id' => 'getMerchantId',
        'notes' => 'getNotes',
        'object_email' => 'getObjectEmail',
        'object_id' => 'getObjectId',
        'object_type' => 'getObjectType',
        'object_url' => 'getObjectUrl',
        'priority' => 'getPriority',
        'status' => 'getStatus',
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
        return self::$openAPIModelName;
    }

    public const OBJECT_TYPE_ORDER = 'order';
    public const OBJECT_TYPE_AUTO_ORDER = 'auto order';
    public const OBJECT_TYPE_ITEM = 'item';
    public const OBJECT_TYPE_CUSTOMER_PROFILE = 'customer profile';
    public const OBJECT_TYPE_STOREFRONT = 'storefront';
    public const PRIORITY__1___LOW = '1 - low';
    public const PRIORITY__2___MEDIUM = '2 - medium';
    public const PRIORITY__3___HIGH = '3 - high';
    public const PRIORITY__4___CRITICAL = '4 - critical';
    public const STATUS_OPEN = 'open';
    public const STATUS_CLOSED = 'closed';
    public const STATUS_DELAYED = 'delayed';
    public const STATUS_AWAITING_CUSTOMER_FEEDBACK = 'awaiting customer feedback';

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
        $this->container['assigned_to_group'] = $data['assigned_to_group'] ?? null;
        $this->container['assigned_to_group_id'] = $data['assigned_to_group_id'] ?? null;
        $this->container['assigned_to_user'] = $data['assigned_to_user'] ?? null;
        $this->container['assigned_to_user_id'] = $data['assigned_to_user_id'] ?? null;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['created_by'] = $data['created_by'] ?? null;
        $this->container['created_dts'] = $data['created_dts'] ?? null;
        $this->container['delay_until_dts'] = $data['delay_until_dts'] ?? null;
        $this->container['due_dts'] = $data['due_dts'] ?? null;
        $this->container['histories'] = $data['histories'] ?? null;
        $this->container['last_update_dts'] = $data['last_update_dts'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['notes'] = $data['notes'] ?? null;
        $this->container['object_email'] = $data['object_email'] ?? null;
        $this->container['object_id'] = $data['object_id'] ?? null;
        $this->container['object_type'] = $data['object_type'] ?? null;
        $this->container['object_url'] = $data['object_url'] ?? null;
        $this->container['priority'] = $data['priority'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['task_context'] = $data['task_context'] ?? null;
        $this->container['task_details'] = $data['task_details'] ?? null;
        $this->container['task_name'] = $data['task_name'] ?? null;
        $this->container['workflow_task_uuid'] = $data['workflow_task_uuid'] ?? null;
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
                "invalid value '%s' for 'object_type', must be one of '%s'",
                $this->container['object_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'priority', must be one of '%s'",
                $this->container['priority'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * @return string|null
     */
    public function getAssignedToGroup()
    {
        return $this->container['assigned_to_group'];
    }

    /**
     * Sets assigned_to_group
     *
     * @param string|null $assigned_to_group Assigned to group
     *
     * @return self
     */
    public function setAssignedToGroup($assigned_to_group)
    {
        $this->container['assigned_to_group'] = $assigned_to_group;

        return $this;
    }

    /**
     * Gets assigned_to_group_id
     *
     * @return int|null
     */
    public function getAssignedToGroupId()
    {
        return $this->container['assigned_to_group_id'];
    }

    /**
     * Sets assigned_to_group_id
     *
     * @param int|null $assigned_to_group_id Assigned to group ID
     *
     * @return self
     */
    public function setAssignedToGroupId($assigned_to_group_id)
    {
        $this->container['assigned_to_group_id'] = $assigned_to_group_id;

        return $this;
    }

    /**
     * Gets assigned_to_user
     *
     * @return string|null
     */
    public function getAssignedToUser()
    {
        return $this->container['assigned_to_user'];
    }

    /**
     * Sets assigned_to_user
     *
     * @param string|null $assigned_to_user Assigned to user
     *
     * @return self
     */
    public function setAssignedToUser($assigned_to_user)
    {
        $this->container['assigned_to_user'] = $assigned_to_user;

        return $this;
    }

    /**
     * Gets assigned_to_user_id
     *
     * @return int|null
     */
    public function getAssignedToUserId()
    {
        return $this->container['assigned_to_user_id'];
    }

    /**
     * Sets assigned_to_user_id
     *
     * @param int|null $assigned_to_user_id Assigned to user ID
     *
     * @return self
     */
    public function setAssignedToUserId($assigned_to_user_id)
    {
        $this->container['assigned_to_user_id'] = $assigned_to_user_id;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return \ultracart\v2\models\WorkflowAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \ultracart\v2\models\WorkflowAttachment[]|null $attachments Attachments to the Workflow Task
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return \ultracart\v2\models\WorkflowUser|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param \ultracart\v2\models\WorkflowUser|null $created_by created_by
     *
     * @return self
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets created_dts
     *
     * @return string|null
     */
    public function getCreatedDts()
    {
        return $this->container['created_dts'];
    }

    /**
     * Sets created_dts
     *
     * @param string|null $created_dts Date/time that the workflow task was created
     *
     * @return self
     */
    public function setCreatedDts($created_dts)
    {
        $this->container['created_dts'] = $created_dts;

        return $this;
    }

    /**
     * Gets delay_until_dts
     *
     * @return string|null
     */
    public function getDelayUntilDts()
    {
        return $this->container['delay_until_dts'];
    }

    /**
     * Sets delay_until_dts
     *
     * @param string|null $delay_until_dts Date/time that the workflow task should delay until
     *
     * @return self
     */
    public function setDelayUntilDts($delay_until_dts)
    {
        $this->container['delay_until_dts'] = $delay_until_dts;

        return $this;
    }

    /**
     * Gets due_dts
     *
     * @return string|null
     */
    public function getDueDts()
    {
        return $this->container['due_dts'];
    }

    /**
     * Sets due_dts
     *
     * @param string|null $due_dts Date/time that the workflow task is due
     *
     * @return self
     */
    public function setDueDts($due_dts)
    {
        $this->container['due_dts'] = $due_dts;

        return $this;
    }

    /**
     * Gets histories
     *
     * @return \ultracart\v2\models\WorkflowTaskHistory[]|null
     */
    public function getHistories()
    {
        return $this->container['histories'];
    }

    /**
     * Sets histories
     *
     * @param \ultracart\v2\models\WorkflowTaskHistory[]|null $histories Array of history records for the task
     *
     * @return self
     */
    public function setHistories($histories)
    {
        $this->container['histories'] = $histories;

        return $this;
    }

    /**
     * Gets last_update_dts
     *
     * @return string|null
     */
    public function getLastUpdateDts()
    {
        return $this->container['last_update_dts'];
    }

    /**
     * Sets last_update_dts
     *
     * @param string|null $last_update_dts Date/time that the workflow task was last updated
     *
     * @return self
     */
    public function setLastUpdateDts($last_update_dts)
    {
        $this->container['last_update_dts'] = $last_update_dts;

        return $this;
    }

    /**
     * Gets merchant_id
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchant_id'];
    }

    /**
     * Sets merchant_id
     *
     * @param string|null $merchant_id Merchant ID
     *
     * @return self
     */
    public function setMerchantId($merchant_id)
    {
        $this->container['merchant_id'] = $merchant_id;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \ultracart\v2\models\WorkflowNote[]|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \ultracart\v2\models\WorkflowNote[]|null $notes Notes on the Workflow Task
     *
     * @return self
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets object_email
     *
     * @return string|null
     */
    public function getObjectEmail()
    {
        return $this->container['object_email'];
    }

    /**
     * Sets object_email
     *
     * @param string|null $object_email Object is associated with customer email
     *
     * @return self
     */
    public function setObjectEmail($object_email)
    {
        $this->container['object_email'] = $object_email;

        return $this;
    }

    /**
     * Gets object_id
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     *
     * @param string|null $object_id Object ID
     *
     * @return self
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_type
     *
     * @return string|null
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     *
     * @param string|null $object_type Object Type
     *
     * @return self
     */
    public function setObjectType($object_type)
    {
        $allowedValues = $this->getObjectTypeAllowableValues();
        if (!is_null($object_type) && !in_array($object_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'object_type', must be one of '%s'",
                    $object_type,
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
     * @return string|null
     */
    public function getObjectUrl()
    {
        return $this->container['object_url'];
    }

    /**
     * Sets object_url
     *
     * @param string|null $object_url Object URL
     *
     * @return self
     */
    public function setObjectUrl($object_url)
    {
        $this->container['object_url'] = $object_url;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority Priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($priority) && !in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'priority', must be one of '%s'",
                    $priority,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

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
     * @param string|null $status Status of the workflow task
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets task_context
     *
     * @return string|null
     */
    public function getTaskContext()
    {
        return $this->container['task_context'];
    }

    /**
     * Sets task_context
     *
     * @param string|null $task_context User friendly string of the task context
     *
     * @return self
     */
    public function setTaskContext($task_context)
    {
        $this->container['task_context'] = $task_context;

        return $this;
    }

    /**
     * Gets task_details
     *
     * @return string|null
     */
    public function getTaskDetails()
    {
        return $this->container['task_details'];
    }

    /**
     * Sets task_details
     *
     * @param string|null $task_details Task Details
     *
     * @return self
     */
    public function setTaskDetails($task_details)
    {
        $this->container['task_details'] = $task_details;

        return $this;
    }

    /**
     * Gets task_name
     *
     * @return string|null
     */
    public function getTaskName()
    {
        return $this->container['task_name'];
    }

    /**
     * Sets task_name
     *
     * @param string|null $task_name Task Name
     *
     * @return self
     */
    public function setTaskName($task_name)
    {
        $this->container['task_name'] = $task_name;

        return $this;
    }

    /**
     * Gets workflow_task_uuid
     *
     * @return string|null
     */
    public function getWorkflowTaskUuid()
    {
        return $this->container['workflow_task_uuid'];
    }

    /**
     * Sets workflow_task_uuid
     *
     * @param string|null $workflow_task_uuid Workflow Task UUID
     *
     * @return self
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


