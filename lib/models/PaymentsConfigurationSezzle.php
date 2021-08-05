<?php
/**
 * PaymentsConfigurationSezzle
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
 * PaymentsConfigurationSezzle Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentsConfigurationSezzle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentsConfigurationSezzle';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accept_sezzle' => 'bool',
        'accounting_code' => 'string',
        'business_id' => 'string',
        'deposit_to_account' => 'string',
        'environment' => 'string',
        'environments' => 'object',
        'private_api_key' => 'string',
        'public_api_key' => 'string',
        'restrictions' => '\ultracart\v2\models\PaymentsConfigurationRestrictions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accept_sezzle' => null,
        'accounting_code' => null,
        'business_id' => null,
        'deposit_to_account' => null,
        'environment' => null,
        'environments' => null,
        'private_api_key' => null,
        'public_api_key' => null,
        'restrictions' => null
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
        'accept_sezzle' => 'accept_sezzle',
        'accounting_code' => 'accounting_code',
        'business_id' => 'business_id',
        'deposit_to_account' => 'deposit_to_account',
        'environment' => 'environment',
        'environments' => 'environments',
        'private_api_key' => 'private_api_key',
        'public_api_key' => 'public_api_key',
        'restrictions' => 'restrictions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accept_sezzle' => 'setAcceptSezzle',
        'accounting_code' => 'setAccountingCode',
        'business_id' => 'setBusinessId',
        'deposit_to_account' => 'setDepositToAccount',
        'environment' => 'setEnvironment',
        'environments' => 'setEnvironments',
        'private_api_key' => 'setPrivateApiKey',
        'public_api_key' => 'setPublicApiKey',
        'restrictions' => 'setRestrictions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accept_sezzle' => 'getAcceptSezzle',
        'accounting_code' => 'getAccountingCode',
        'business_id' => 'getBusinessId',
        'deposit_to_account' => 'getDepositToAccount',
        'environment' => 'getEnvironment',
        'environments' => 'getEnvironments',
        'private_api_key' => 'getPrivateApiKey',
        'public_api_key' => 'getPublicApiKey',
        'restrictions' => 'getRestrictions'
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

    const ENVIRONMENT_LIVE = 'Live';
    const ENVIRONMENT_SANDBOX = 'Sandbox';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEnvironmentAllowableValues()
    {
        return [
            self::ENVIRONMENT_LIVE,
            self::ENVIRONMENT_SANDBOX,
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
        $this->container['accept_sezzle'] = isset($data['accept_sezzle']) ? $data['accept_sezzle'] : null;
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['business_id'] = isset($data['business_id']) ? $data['business_id'] : null;
        $this->container['deposit_to_account'] = isset($data['deposit_to_account']) ? $data['deposit_to_account'] : null;
        $this->container['environment'] = isset($data['environment']) ? $data['environment'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
        $this->container['private_api_key'] = isset($data['private_api_key']) ? $data['private_api_key'] : null;
        $this->container['public_api_key'] = isset($data['public_api_key']) ? $data['public_api_key'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!is_null($this->container['environment']) && !in_array($this->container['environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'environment', must be one of '%s'",
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
     * Gets accept_sezzle
     *
     * @return bool
     */
    public function getAcceptSezzle()
    {
        return $this->container['accept_sezzle'];
    }

    /**
     * Sets accept_sezzle
     *
     * @param bool $accept_sezzle Master flag for this merchant accepting Sezzle payments
     *
     * @return $this
     */
    public function setAcceptSezzle($accept_sezzle)
    {
        $this->container['accept_sezzle'] = $accept_sezzle;

        return $this;
    }

    /**
     * Gets accounting_code
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->container['accounting_code'];
    }

    /**
     * Sets accounting_code
     *
     * @param string $accounting_code Optional Quickbooks code for this payment method
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets business_id
     *
     * @return string
     */
    public function getBusinessId()
    {
        return $this->container['business_id'];
    }

    /**
     * Sets business_id
     *
     * @param string $business_id Business ID
     *
     * @return $this
     */
    public function setBusinessId($business_id)
    {
        $this->container['business_id'] = $business_id;

        return $this;
    }

    /**
     * Gets deposit_to_account
     *
     * @return string
     */
    public function getDepositToAccount()
    {
        return $this->container['deposit_to_account'];
    }

    /**
     * Sets deposit_to_account
     *
     * @param string $deposit_to_account Optional Quickbooks Deposit to Account value
     *
     * @return $this
     */
    public function setDepositToAccount($deposit_to_account)
    {
        $this->container['deposit_to_account'] = $deposit_to_account;

        return $this;
    }

    /**
     * Gets environment
     *
     * @return string
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param string $environment Sezzle environment
     *
     * @return $this
     */
    public function setEnvironment($environment)
    {
        $allowedValues = $this->getEnvironmentAllowableValues();
        if (!is_null($environment) && !in_array($environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'environment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['environment'] = $environment;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return object
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param object $environments List of environments possible
     *
     * @return $this
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

        return $this;
    }

    /**
     * Gets private_api_key
     *
     * @return string
     */
    public function getPrivateApiKey()
    {
        return $this->container['private_api_key'];
    }

    /**
     * Sets private_api_key
     *
     * @param string $private_api_key Private API key
     *
     * @return $this
     */
    public function setPrivateApiKey($private_api_key)
    {
        $this->container['private_api_key'] = $private_api_key;

        return $this;
    }

    /**
     * Gets public_api_key
     *
     * @return string
     */
    public function getPublicApiKey()
    {
        return $this->container['public_api_key'];
    }

    /**
     * Sets public_api_key
     *
     * @param string $public_api_key Public API key
     *
     * @return $this
     */
    public function setPublicApiKey($public_api_key)
    {
        $this->container['public_api_key'] = $public_api_key;

        return $this;
    }

    /**
     * Gets restrictions
     *
     * @return \ultracart\v2\models\PaymentsConfigurationRestrictions
     */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
     * Sets restrictions
     *
     * @param \ultracart\v2\models\PaymentsConfigurationRestrictions $restrictions restrictions
     *
     * @return $this
     */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;

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


