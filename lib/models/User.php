<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_ip_address_masks' => 'string[]',
        'change_ftp_password_to' => 'string',
        'change_password_to' => 'string',
        'email' => 'string',
        'full_name' => 'string',
        'groups' => '\ultracart\v2\models\UserGroupMembership[]',
        'linked_accounts' => '\ultracart\v2\models\LinkedAccount[]',
        'login' => 'string',
        'login_histories' => '\ultracart\v2\models\UserLogin[]',
        'notifications' => '\ultracart\v2\models\Notification[]',
        'otp_serial_number' => 'string',
        'permissions' => '\ultracart\v2\models\Permission[]',
        'phone' => 'string',
        'user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_ip_address_masks' => null,
        'change_ftp_password_to' => null,
        'change_password_to' => null,
        'email' => null,
        'full_name' => null,
        'groups' => null,
        'linked_accounts' => null,
        'login' => null,
        'login_histories' => null,
        'notifications' => null,
        'otp_serial_number' => null,
        'permissions' => null,
        'phone' => null,
        'user_id' => 'int32'
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
        'api_ip_address_masks' => 'api_ip_address_masks',
        'change_ftp_password_to' => 'change_ftp_password_to',
        'change_password_to' => 'change_password_to',
        'email' => 'email',
        'full_name' => 'full_name',
        'groups' => 'groups',
        'linked_accounts' => 'linked_accounts',
        'login' => 'login',
        'login_histories' => 'login_histories',
        'notifications' => 'notifications',
        'otp_serial_number' => 'otp_serial_number',
        'permissions' => 'permissions',
        'phone' => 'phone',
        'user_id' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_ip_address_masks' => 'setApiIpAddressMasks',
        'change_ftp_password_to' => 'setChangeFtpPasswordTo',
        'change_password_to' => 'setChangePasswordTo',
        'email' => 'setEmail',
        'full_name' => 'setFullName',
        'groups' => 'setGroups',
        'linked_accounts' => 'setLinkedAccounts',
        'login' => 'setLogin',
        'login_histories' => 'setLoginHistories',
        'notifications' => 'setNotifications',
        'otp_serial_number' => 'setOtpSerialNumber',
        'permissions' => 'setPermissions',
        'phone' => 'setPhone',
        'user_id' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_ip_address_masks' => 'getApiIpAddressMasks',
        'change_ftp_password_to' => 'getChangeFtpPasswordTo',
        'change_password_to' => 'getChangePasswordTo',
        'email' => 'getEmail',
        'full_name' => 'getFullName',
        'groups' => 'getGroups',
        'linked_accounts' => 'getLinkedAccounts',
        'login' => 'getLogin',
        'login_histories' => 'getLoginHistories',
        'notifications' => 'getNotifications',
        'otp_serial_number' => 'getOtpSerialNumber',
        'permissions' => 'getPermissions',
        'phone' => 'getPhone',
        'user_id' => 'getUserId'
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
        $this->container['api_ip_address_masks'] = isset($data['api_ip_address_masks']) ? $data['api_ip_address_masks'] : null;
        $this->container['change_ftp_password_to'] = isset($data['change_ftp_password_to']) ? $data['change_ftp_password_to'] : null;
        $this->container['change_password_to'] = isset($data['change_password_to']) ? $data['change_password_to'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['linked_accounts'] = isset($data['linked_accounts']) ? $data['linked_accounts'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['login_histories'] = isset($data['login_histories']) ? $data['login_histories'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['otp_serial_number'] = isset($data['otp_serial_number']) ? $data['otp_serial_number'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
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
     * Gets api_ip_address_masks
     *
     * @return string[]
     */
    public function getApiIpAddressMasks()
    {
        return $this->container['api_ip_address_masks'];
    }

    /**
     * Sets api_ip_address_masks
     *
     * @param string[] $api_ip_address_masks A list of IP addresses whitelisted for any user with API Access permission.  Without this list, each ip address must be authenticated by a user, which can be a pain for some servers.
     *
     * @return $this
     */
    public function setApiIpAddressMasks($api_ip_address_masks)
    {
        $this->container['api_ip_address_masks'] = $api_ip_address_masks;

        return $this;
    }

    /**
     * Gets change_ftp_password_to
     *
     * @return string
     */
    public function getChangeFtpPasswordTo()
    {
        return $this->container['change_ftp_password_to'];
    }

    /**
     * Sets change_ftp_password_to
     *
     * @param string $change_ftp_password_to Supply a new FTP password using this field.  Password are stored using one-way encryption, so they are never available anywhere in the system.  The FTP password cannot be the same as the normal password.
     *
     * @return $this
     */
    public function setChangeFtpPasswordTo($change_ftp_password_to)
    {
        $this->container['change_ftp_password_to'] = $change_ftp_password_to;

        return $this;
    }

    /**
     * Gets change_password_to
     *
     * @return string
     */
    public function getChangePasswordTo()
    {
        return $this->container['change_password_to'];
    }

    /**
     * Sets change_password_to
     *
     * @param string $change_password_to Supply a new password using this field.  Password are stored using one-way encryption, so they are never available anywhere in the system.
     *
     * @return $this
     */
    public function setChangePasswordTo($change_password_to)
    {
        $this->container['change_password_to'] = $change_password_to;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email address of user
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name Full name of user.  This is used solely for human assistance and so the UltraCart staff knows who they are calling when there is a problem.
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return \ultracart\v2\models\UserGroupMembership[]
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param \ultracart\v2\models\UserGroupMembership[] $groups A list of groups for this merchant and whether or not this user is a member of those groups.
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets linked_accounts
     *
     * @return \ultracart\v2\models\LinkedAccount[]
     */
    public function getLinkedAccounts()
    {
        return $this->container['linked_accounts'];
    }

    /**
     * Sets linked_accounts
     *
     * @param \ultracart\v2\models\LinkedAccount[] $linked_accounts A list of linked accounts and whether or not this user is mirrored to any of those accounts.
     *
     * @return $this
     */
    public function setLinkedAccounts($linked_accounts)
    {
        $this->container['linked_accounts'] = $linked_accounts;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login User name of user.  Must be unique across a merchant account.
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets login_histories
     *
     * @return \ultracart\v2\models\UserLogin[]
     */
    public function getLoginHistories()
    {
        return $this->container['login_histories'];
    }

    /**
     * Sets login_histories
     *
     * @param \ultracart\v2\models\UserLogin[] $login_histories A list of user logins over the past 90 days
     *
     * @return $this
     */
    public function setLoginHistories($login_histories)
    {
        $this->container['login_histories'] = $login_histories;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return \ultracart\v2\models\Notification[]
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param \ultracart\v2\models\Notification[] $notifications A list of notifications the user receives.
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets otp_serial_number
     *
     * @return string
     */
    public function getOtpSerialNumber()
    {
        return $this->container['otp_serial_number'];
    }

    /**
     * Sets otp_serial_number
     *
     * @param string $otp_serial_number OTP Serial Number such as Google Authenticator or Crypto Card.
     *
     * @return $this
     */
    public function setOtpSerialNumber($otp_serial_number)
    {
        $this->container['otp_serial_number'] = $otp_serial_number;

        return $this;
    }

    /**
     * Gets permissions
     *
     * @return \ultracart\v2\models\Permission[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     *
     * @param \ultracart\v2\models\Permission[] $permissions A list of permissions the user enjoys for accessing the backend of UltraCart.
     *
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone number of user.  Please supply a valid phone number.  When something breaks on your account, we need to be able to reach you.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id User id is a unique identifier for this user
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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

