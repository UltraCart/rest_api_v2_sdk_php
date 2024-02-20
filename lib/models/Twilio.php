<?php
/**
 * Twilio
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
 * Twilio Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Twilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Twilio';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_sid' => 'string',
        'api_key_id' => 'string',
        'api_key_name' => 'string',
        'api_key_secret' => 'string',
        'auth_token' => 'string',
        'esp_twilio_uuid' => 'string',
        'inbound_twiml_app_sid' => 'string',
        'outbound_twiml_app_sid' => 'string',
        'phone_numbers' => 'string[]',
        'private_key_pem' => 'string',
        'public_key_pem' => 'string',
        'public_key_sid' => 'string',
        'twilio_workspace_sid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_sid' => null,
        'api_key_id' => null,
        'api_key_name' => null,
        'api_key_secret' => null,
        'auth_token' => null,
        'esp_twilio_uuid' => null,
        'inbound_twiml_app_sid' => null,
        'outbound_twiml_app_sid' => null,
        'phone_numbers' => null,
        'private_key_pem' => null,
        'public_key_pem' => null,
        'public_key_sid' => null,
        'twilio_workspace_sid' => null
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
        'account_sid' => 'account_sid',
        'api_key_id' => 'api_key_id',
        'api_key_name' => 'api_key_name',
        'api_key_secret' => 'api_key_secret',
        'auth_token' => 'auth_token',
        'esp_twilio_uuid' => 'esp_twilio_uuid',
        'inbound_twiml_app_sid' => 'inbound_twiml_app_sid',
        'outbound_twiml_app_sid' => 'outbound_twiml_app_sid',
        'phone_numbers' => 'phone_numbers',
        'private_key_pem' => 'private_key_pem',
        'public_key_pem' => 'public_key_pem',
        'public_key_sid' => 'public_key_sid',
        'twilio_workspace_sid' => 'twilio_workspace_sid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_sid' => 'setAccountSid',
        'api_key_id' => 'setApiKeyId',
        'api_key_name' => 'setApiKeyName',
        'api_key_secret' => 'setApiKeySecret',
        'auth_token' => 'setAuthToken',
        'esp_twilio_uuid' => 'setEspTwilioUuid',
        'inbound_twiml_app_sid' => 'setInboundTwimlAppSid',
        'outbound_twiml_app_sid' => 'setOutboundTwimlAppSid',
        'phone_numbers' => 'setPhoneNumbers',
        'private_key_pem' => 'setPrivateKeyPem',
        'public_key_pem' => 'setPublicKeyPem',
        'public_key_sid' => 'setPublicKeySid',
        'twilio_workspace_sid' => 'setTwilioWorkspaceSid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_sid' => 'getAccountSid',
        'api_key_id' => 'getApiKeyId',
        'api_key_name' => 'getApiKeyName',
        'api_key_secret' => 'getApiKeySecret',
        'auth_token' => 'getAuthToken',
        'esp_twilio_uuid' => 'getEspTwilioUuid',
        'inbound_twiml_app_sid' => 'getInboundTwimlAppSid',
        'outbound_twiml_app_sid' => 'getOutboundTwimlAppSid',
        'phone_numbers' => 'getPhoneNumbers',
        'private_key_pem' => 'getPrivateKeyPem',
        'public_key_pem' => 'getPublicKeyPem',
        'public_key_sid' => 'getPublicKeySid',
        'twilio_workspace_sid' => 'getTwilioWorkspaceSid'
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
        $this->container['account_sid'] = isset($data['account_sid']) ? $data['account_sid'] : null;
        $this->container['api_key_id'] = isset($data['api_key_id']) ? $data['api_key_id'] : null;
        $this->container['api_key_name'] = isset($data['api_key_name']) ? $data['api_key_name'] : null;
        $this->container['api_key_secret'] = isset($data['api_key_secret']) ? $data['api_key_secret'] : null;
        $this->container['auth_token'] = isset($data['auth_token']) ? $data['auth_token'] : null;
        $this->container['esp_twilio_uuid'] = isset($data['esp_twilio_uuid']) ? $data['esp_twilio_uuid'] : null;
        $this->container['inbound_twiml_app_sid'] = isset($data['inbound_twiml_app_sid']) ? $data['inbound_twiml_app_sid'] : null;
        $this->container['outbound_twiml_app_sid'] = isset($data['outbound_twiml_app_sid']) ? $data['outbound_twiml_app_sid'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['private_key_pem'] = isset($data['private_key_pem']) ? $data['private_key_pem'] : null;
        $this->container['public_key_pem'] = isset($data['public_key_pem']) ? $data['public_key_pem'] : null;
        $this->container['public_key_sid'] = isset($data['public_key_sid']) ? $data['public_key_sid'] : null;
        $this->container['twilio_workspace_sid'] = isset($data['twilio_workspace_sid']) ? $data['twilio_workspace_sid'] : null;
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
     * Gets account_sid
     *
     * @return string
     */
    public function getAccountSid()
    {
        return $this->container['account_sid'];
    }

    /**
     * Sets account_sid
     *
     * @param string $account_sid account_sid
     *
     * @return $this
     */
    public function setAccountSid($account_sid)
    {
        $this->container['account_sid'] = $account_sid;

        return $this;
    }

    /**
     * Gets api_key_id
     *
     * @return string
     */
    public function getApiKeyId()
    {
        return $this->container['api_key_id'];
    }

    /**
     * Sets api_key_id
     *
     * @param string $api_key_id api_key_id
     *
     * @return $this
     */
    public function setApiKeyId($api_key_id)
    {
        $this->container['api_key_id'] = $api_key_id;

        return $this;
    }

    /**
     * Gets api_key_name
     *
     * @return string
     */
    public function getApiKeyName()
    {
        return $this->container['api_key_name'];
    }

    /**
     * Sets api_key_name
     *
     * @param string $api_key_name api_key_name
     *
     * @return $this
     */
    public function setApiKeyName($api_key_name)
    {
        $this->container['api_key_name'] = $api_key_name;

        return $this;
    }

    /**
     * Gets api_key_secret
     *
     * @return string
     */
    public function getApiKeySecret()
    {
        return $this->container['api_key_secret'];
    }

    /**
     * Sets api_key_secret
     *
     * @param string $api_key_secret api_key_secret
     *
     * @return $this
     */
    public function setApiKeySecret($api_key_secret)
    {
        $this->container['api_key_secret'] = $api_key_secret;

        return $this;
    }

    /**
     * Gets auth_token
     *
     * @return string
     */
    public function getAuthToken()
    {
        return $this->container['auth_token'];
    }

    /**
     * Sets auth_token
     *
     * @param string $auth_token auth_token
     *
     * @return $this
     */
    public function setAuthToken($auth_token)
    {
        $this->container['auth_token'] = $auth_token;

        return $this;
    }

    /**
     * Gets esp_twilio_uuid
     *
     * @return string
     */
    public function getEspTwilioUuid()
    {
        return $this->container['esp_twilio_uuid'];
    }

    /**
     * Sets esp_twilio_uuid
     *
     * @param string $esp_twilio_uuid esp_twilio_uuid
     *
     * @return $this
     */
    public function setEspTwilioUuid($esp_twilio_uuid)
    {
        $this->container['esp_twilio_uuid'] = $esp_twilio_uuid;

        return $this;
    }

    /**
     * Gets inbound_twiml_app_sid
     *
     * @return string
     */
    public function getInboundTwimlAppSid()
    {
        return $this->container['inbound_twiml_app_sid'];
    }

    /**
     * Sets inbound_twiml_app_sid
     *
     * @param string $inbound_twiml_app_sid inbound_twiml_app_sid
     *
     * @return $this
     */
    public function setInboundTwimlAppSid($inbound_twiml_app_sid)
    {
        $this->container['inbound_twiml_app_sid'] = $inbound_twiml_app_sid;

        return $this;
    }

    /**
     * Gets outbound_twiml_app_sid
     *
     * @return string
     */
    public function getOutboundTwimlAppSid()
    {
        return $this->container['outbound_twiml_app_sid'];
    }

    /**
     * Sets outbound_twiml_app_sid
     *
     * @param string $outbound_twiml_app_sid outbound_twiml_app_sid
     *
     * @return $this
     */
    public function setOutboundTwimlAppSid($outbound_twiml_app_sid)
    {
        $this->container['outbound_twiml_app_sid'] = $outbound_twiml_app_sid;

        return $this;
    }

    /**
     * Gets phone_numbers
     *
     * @return string[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param string[] $phone_numbers phone_numbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets private_key_pem
     *
     * @return string
     */
    public function getPrivateKeyPem()
    {
        return $this->container['private_key_pem'];
    }

    /**
     * Sets private_key_pem
     *
     * @param string $private_key_pem private_key_pem
     *
     * @return $this
     */
    public function setPrivateKeyPem($private_key_pem)
    {
        $this->container['private_key_pem'] = $private_key_pem;

        return $this;
    }

    /**
     * Gets public_key_pem
     *
     * @return string
     */
    public function getPublicKeyPem()
    {
        return $this->container['public_key_pem'];
    }

    /**
     * Sets public_key_pem
     *
     * @param string $public_key_pem public_key_pem
     *
     * @return $this
     */
    public function setPublicKeyPem($public_key_pem)
    {
        $this->container['public_key_pem'] = $public_key_pem;

        return $this;
    }

    /**
     * Gets public_key_sid
     *
     * @return string
     */
    public function getPublicKeySid()
    {
        return $this->container['public_key_sid'];
    }

    /**
     * Sets public_key_sid
     *
     * @param string $public_key_sid public_key_sid
     *
     * @return $this
     */
    public function setPublicKeySid($public_key_sid)
    {
        $this->container['public_key_sid'] = $public_key_sid;

        return $this;
    }

    /**
     * Gets twilio_workspace_sid
     *
     * @return string
     */
    public function getTwilioWorkspaceSid()
    {
        return $this->container['twilio_workspace_sid'];
    }

    /**
     * Sets twilio_workspace_sid
     *
     * @param string $twilio_workspace_sid twilio_workspace_sid
     *
     * @return $this
     */
    public function setTwilioWorkspaceSid($twilio_workspace_sid)
    {
        $this->container['twilio_workspace_sid'] = $twilio_workspace_sid;

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


