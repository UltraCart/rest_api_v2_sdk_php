<?php
/**
 * EmailList
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
 * EmailList Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmailList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmailList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allow_csv_download' => 'bool',
        'created_dts' => 'string',
        'deleted' => 'bool',
        'email_list_uuid' => 'string',
        'esp_list_segment_folder_uuid' => 'string',
        'member_count' => 'int',
        'merchant_id' => 'string',
        'name' => 'string',
        'public_description' => 'string',
        'public_list' => 'bool',
        'storefront_oid' => 'int',
        'used_by' => '\ultracart\v2\models\EmailListSegmentUsedBy[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allow_csv_download' => null,
        'created_dts' => 'dateTime',
        'deleted' => null,
        'email_list_uuid' => null,
        'esp_list_segment_folder_uuid' => null,
        'member_count' => 'int32',
        'merchant_id' => null,
        'name' => null,
        'public_description' => null,
        'public_list' => null,
        'storefront_oid' => 'int32',
        'used_by' => null
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
        'allow_csv_download' => 'allow_csv_download',
        'created_dts' => 'created_dts',
        'deleted' => 'deleted',
        'email_list_uuid' => 'email_list_uuid',
        'esp_list_segment_folder_uuid' => 'esp_list_segment_folder_uuid',
        'member_count' => 'member_count',
        'merchant_id' => 'merchant_id',
        'name' => 'name',
        'public_description' => 'public_description',
        'public_list' => 'public_list',
        'storefront_oid' => 'storefront_oid',
        'used_by' => 'used_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_csv_download' => 'setAllowCsvDownload',
        'created_dts' => 'setCreatedDts',
        'deleted' => 'setDeleted',
        'email_list_uuid' => 'setEmailListUuid',
        'esp_list_segment_folder_uuid' => 'setEspListSegmentFolderUuid',
        'member_count' => 'setMemberCount',
        'merchant_id' => 'setMerchantId',
        'name' => 'setName',
        'public_description' => 'setPublicDescription',
        'public_list' => 'setPublicList',
        'storefront_oid' => 'setStorefrontOid',
        'used_by' => 'setUsedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_csv_download' => 'getAllowCsvDownload',
        'created_dts' => 'getCreatedDts',
        'deleted' => 'getDeleted',
        'email_list_uuid' => 'getEmailListUuid',
        'esp_list_segment_folder_uuid' => 'getEspListSegmentFolderUuid',
        'member_count' => 'getMemberCount',
        'merchant_id' => 'getMerchantId',
        'name' => 'getName',
        'public_description' => 'getPublicDescription',
        'public_list' => 'getPublicList',
        'storefront_oid' => 'getStorefrontOid',
        'used_by' => 'getUsedBy'
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
        $this->container['allow_csv_download'] = $data['allow_csv_download'] ?? null;
        $this->container['created_dts'] = $data['created_dts'] ?? null;
        $this->container['deleted'] = $data['deleted'] ?? null;
        $this->container['email_list_uuid'] = $data['email_list_uuid'] ?? null;
        $this->container['esp_list_segment_folder_uuid'] = $data['esp_list_segment_folder_uuid'] ?? null;
        $this->container['member_count'] = $data['member_count'] ?? null;
        $this->container['merchant_id'] = $data['merchant_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['public_description'] = $data['public_description'] ?? null;
        $this->container['public_list'] = $data['public_list'] ?? null;
        $this->container['storefront_oid'] = $data['storefront_oid'] ?? null;
        $this->container['used_by'] = $data['used_by'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 250)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 250.";
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
     * Gets allow_csv_download
     *
     * @return bool|null
     */
    public function getAllowCsvDownload()
    {
        return $this->container['allow_csv_download'];
    }

    /**
     * Sets allow_csv_download
     *
     * @param bool|null $allow_csv_download True if the current user has the rights to download this list.
     *
     * @return self
     */
    public function setAllowCsvDownload($allow_csv_download)
    {
        $this->container['allow_csv_download'] = $allow_csv_download;

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
     * @param string|null $created_dts Created date
     *
     * @return self
     */
    public function setCreatedDts($created_dts)
    {
        $this->container['created_dts'] = $created_dts;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool|null
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool|null $deleted True if this campaign was deleted
     *
     * @return self
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets email_list_uuid
     *
     * @return string|null
     */
    public function getEmailListUuid()
    {
        return $this->container['email_list_uuid'];
    }

    /**
     * Sets email_list_uuid
     *
     * @param string|null $email_list_uuid Email list UUID
     *
     * @return self
     */
    public function setEmailListUuid($email_list_uuid)
    {
        $this->container['email_list_uuid'] = $email_list_uuid;

        return $this;
    }

    /**
     * Gets esp_list_segment_folder_uuid
     *
     * @return string|null
     */
    public function getEspListSegmentFolderUuid()
    {
        return $this->container['esp_list_segment_folder_uuid'];
    }

    /**
     * Sets esp_list_segment_folder_uuid
     *
     * @param string|null $esp_list_segment_folder_uuid List/Segment folder UUID
     *
     * @return self
     */
    public function setEspListSegmentFolderUuid($esp_list_segment_folder_uuid)
    {
        $this->container['esp_list_segment_folder_uuid'] = $esp_list_segment_folder_uuid;

        return $this;
    }

    /**
     * Gets member_count
     *
     * @return int|null
     */
    public function getMemberCount()
    {
        return $this->container['member_count'];
    }

    /**
     * Sets member_count
     *
     * @param int|null $member_count Count of members in this list
     *
     * @return self
     */
    public function setMemberCount($member_count)
    {
        $this->container['member_count'] = $member_count;

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of email list
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 250)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EmailList., must be smaller than or equal to 250.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets public_description
     *
     * @return string|null
     */
    public function getPublicDescription()
    {
        return $this->container['public_description'];
    }

    /**
     * Sets public_description
     *
     * @param string|null $public_description Description of list shown to customer.
     *
     * @return self
     */
    public function setPublicDescription($public_description)
    {
        $this->container['public_description'] = $public_description;

        return $this;
    }

    /**
     * Gets public_list
     *
     * @return bool|null
     */
    public function getPublicList()
    {
        return $this->container['public_list'];
    }

    /**
     * Sets public_list
     *
     * @param bool|null $public_list True if this list is public
     *
     * @return self
     */
    public function setPublicList($public_list)
    {
        $this->container['public_list'] = $public_list;

        return $this;
    }

    /**
     * Gets storefront_oid
     *
     * @return int|null
     */
    public function getStorefrontOid()
    {
        return $this->container['storefront_oid'];
    }

    /**
     * Sets storefront_oid
     *
     * @param int|null $storefront_oid Storefront oid
     *
     * @return self
     */
    public function setStorefrontOid($storefront_oid)
    {
        $this->container['storefront_oid'] = $storefront_oid;

        return $this;
    }

    /**
     * Gets used_by
     *
     * @return \ultracart\v2\models\EmailListSegmentUsedBy[]|null
     */
    public function getUsedBy()
    {
        return $this->container['used_by'];
    }

    /**
     * Sets used_by
     *
     * @param \ultracart\v2\models\EmailListSegmentUsedBy[]|null $used_by Details on the flows or campaigns that use this list.
     *
     * @return self
     */
    public function setUsedBy($used_by)
    {
        $this->container['used_by'] = $used_by;

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


