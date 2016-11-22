<?php
/**
 * OrderShipping
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * OrderShipping Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderShipping implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderShipping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'company' => 'string',
        'country_code' => 'string',
        'day_phone' => 'string',
        'delivery_date' => 'string',
        'evening_phone' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'lift_gate' => 'bool',
        'postal_code' => 'string',
        'rma' => 'string',
        'ship_on_date' => 'string',
        'ship_to_residential' => 'bool',
        'shipping_3rd_party_account_number' => 'string',
        'shipping_date' => 'string',
        'shipping_department_status' => 'string',
        'shipping_method' => 'string',
        'shipping_method_accounting_code' => 'string',
        'special_instructions' => 'string',
        'state_region' => 'string',
        'title' => 'string',
        'tracking_numbers' => 'string[]',
        'weight' => '\ultracart\v2\models\Weight'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'company' => 'company',
        'country_code' => 'country_code',
        'day_phone' => 'day_phone',
        'delivery_date' => 'delivery_date',
        'evening_phone' => 'evening_phone',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'lift_gate' => 'lift_gate',
        'postal_code' => 'postal_code',
        'rma' => 'rma',
        'ship_on_date' => 'ship_on_date',
        'ship_to_residential' => 'ship_to_residential',
        'shipping_3rd_party_account_number' => 'shipping_3rd_party_account_number',
        'shipping_date' => 'shipping_date',
        'shipping_department_status' => 'shipping_department_status',
        'shipping_method' => 'shipping_method',
        'shipping_method_accounting_code' => 'shipping_method_accounting_code',
        'special_instructions' => 'special_instructions',
        'state_region' => 'state_region',
        'title' => 'title',
        'tracking_numbers' => 'tracking_numbers',
        'weight' => 'weight'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'company' => 'setCompany',
        'country_code' => 'setCountryCode',
        'day_phone' => 'setDayPhone',
        'delivery_date' => 'setDeliveryDate',
        'evening_phone' => 'setEveningPhone',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'lift_gate' => 'setLiftGate',
        'postal_code' => 'setPostalCode',
        'rma' => 'setRma',
        'ship_on_date' => 'setShipOnDate',
        'ship_to_residential' => 'setShipToResidential',
        'shipping_3rd_party_account_number' => 'setShipping3rdPartyAccountNumber',
        'shipping_date' => 'setShippingDate',
        'shipping_department_status' => 'setShippingDepartmentStatus',
        'shipping_method' => 'setShippingMethod',
        'shipping_method_accounting_code' => 'setShippingMethodAccountingCode',
        'special_instructions' => 'setSpecialInstructions',
        'state_region' => 'setStateRegion',
        'title' => 'setTitle',
        'tracking_numbers' => 'setTrackingNumbers',
        'weight' => 'setWeight'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'company' => 'getCompany',
        'country_code' => 'getCountryCode',
        'day_phone' => 'getDayPhone',
        'delivery_date' => 'getDeliveryDate',
        'evening_phone' => 'getEveningPhone',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'lift_gate' => 'getLiftGate',
        'postal_code' => 'getPostalCode',
        'rma' => 'getRma',
        'ship_on_date' => 'getShipOnDate',
        'ship_to_residential' => 'getShipToResidential',
        'shipping_3rd_party_account_number' => 'getShipping3rdPartyAccountNumber',
        'shipping_date' => 'getShippingDate',
        'shipping_department_status' => 'getShippingDepartmentStatus',
        'shipping_method' => 'getShippingMethod',
        'shipping_method_accounting_code' => 'getShippingMethodAccountingCode',
        'special_instructions' => 'getSpecialInstructions',
        'state_region' => 'getStateRegion',
        'title' => 'getTitle',
        'tracking_numbers' => 'getTrackingNumbers',
        'weight' => 'getWeight'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['day_phone'] = isset($data['day_phone']) ? $data['day_phone'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
        $this->container['evening_phone'] = isset($data['evening_phone']) ? $data['evening_phone'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['lift_gate'] = isset($data['lift_gate']) ? $data['lift_gate'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['rma'] = isset($data['rma']) ? $data['rma'] : null;
        $this->container['ship_on_date'] = isset($data['ship_on_date']) ? $data['ship_on_date'] : null;
        $this->container['ship_to_residential'] = isset($data['ship_to_residential']) ? $data['ship_to_residential'] : null;
        $this->container['shipping_3rd_party_account_number'] = isset($data['shipping_3rd_party_account_number']) ? $data['shipping_3rd_party_account_number'] : null;
        $this->container['shipping_date'] = isset($data['shipping_date']) ? $data['shipping_date'] : null;
        $this->container['shipping_department_status'] = isset($data['shipping_department_status']) ? $data['shipping_department_status'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['shipping_method_accounting_code'] = isset($data['shipping_method_accounting_code']) ? $data['shipping_method_accounting_code'] : null;
        $this->container['special_instructions'] = isset($data['special_instructions']) ? $data['special_instructions'] : null;
        $this->container['state_region'] = isset($data['state_region']) ? $data['state_region'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['tracking_numbers'] = isset($data['tracking_numbers']) ? $data['tracking_numbers'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['address1']) && (strlen($this->container['address1']) > 50)) {
            $invalid_properties[] = "invalid value for 'address1', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['address2']) && (strlen($this->container['address2']) > 50)) {
            $invalid_properties[] = "invalid value for 'address2', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 32)) {
            $invalid_properties[] = "invalid value for 'city', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['company']) && (strlen($this->container['company']) > 50)) {
            $invalid_properties[] = "invalid value for 'company', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['country_code']) && (strlen($this->container['country_code']) > 2)) {
            $invalid_properties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['day_phone']) && (strlen($this->container['day_phone']) > 25)) {
            $invalid_properties[] = "invalid value for 'day_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['evening_phone']) && (strlen($this->container['evening_phone']) > 25)) {
            $invalid_properties[] = "invalid value for 'evening_phone', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['first_name']) && (strlen($this->container['first_name']) > 30)) {
            $invalid_properties[] = "invalid value for 'first_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['last_name']) && (strlen($this->container['last_name']) > 30)) {
            $invalid_properties[] = "invalid value for 'last_name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['postal_code']) && (strlen($this->container['postal_code']) > 20)) {
            $invalid_properties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['rma']) && (strlen($this->container['rma']) > 30)) {
            $invalid_properties[] = "invalid value for 'rma', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['shipping_3rd_party_account_number']) && (strlen($this->container['shipping_3rd_party_account_number']) > 20)) {
            $invalid_properties[] = "invalid value for 'shipping_3rd_party_account_number', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['shipping_department_status']) && (strlen($this->container['shipping_department_status']) > 30)) {
            $invalid_properties[] = "invalid value for 'shipping_department_status', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['state_region']) && (strlen($this->container['state_region']) > 32)) {
            $invalid_properties[] = "invalid value for 'state_region', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['title']) && (strlen($this->container['title']) > 50)) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 50.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['address1']) > 50) {
            return false;
        }
        if (strlen($this->container['address2']) > 50) {
            return false;
        }
        if (strlen($this->container['city']) > 32) {
            return false;
        }
        if (strlen($this->container['company']) > 50) {
            return false;
        }
        if (strlen($this->container['country_code']) > 2) {
            return false;
        }
        if (strlen($this->container['day_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['evening_phone']) > 25) {
            return false;
        }
        if (strlen($this->container['first_name']) > 30) {
            return false;
        }
        if (strlen($this->container['last_name']) > 30) {
            return false;
        }
        if (strlen($this->container['postal_code']) > 20) {
            return false;
        }
        if (strlen($this->container['rma']) > 30) {
            return false;
        }
        if (strlen($this->container['shipping_3rd_party_account_number']) > 20) {
            return false;
        }
        if (strlen($this->container['shipping_department_status']) > 30) {
            return false;
        }
        if (strlen($this->container['state_region']) > 32) {
            return false;
        }
        if (strlen($this->container['title']) > 50) {
            return false;
        }
        return true;
    }


    /**
     * Gets address1
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     * @param string $address1 Address line 1
     * @return $this
     */
    public function setAddress1($address1)
    {
        if (strlen($address1) > 50) {
            throw new \InvalidArgumentException('invalid length for $address1 when calling OrderShipping., must be smaller than or equal to 50.');
        }
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     * @param string $address2 Address line 2
     * @return $this
     */
    public function setAddress2($address2)
    {
        if (strlen($address2) > 50) {
            throw new \InvalidArgumentException('invalid length for $address2 when calling OrderShipping., must be smaller than or equal to 50.');
        }
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city City
     * @return $this
     */
    public function setCity($city)
    {
        if (strlen($city) > 32) {
            throw new \InvalidArgumentException('invalid length for $city when calling OrderShipping., must be smaller than or equal to 32.');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company Company
     * @return $this
     */
    public function setCompany($company)
    {
        if (strlen($company) > 50) {
            throw new \InvalidArgumentException('invalid length for $company when calling OrderShipping., must be smaller than or equal to 50.');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code ISO-3166 two letter country code
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        if (strlen($country_code) > 2) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling OrderShipping., must be smaller than or equal to 2.');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets day_phone
     * @return string
     */
    public function getDayPhone()
    {
        return $this->container['day_phone'];
    }

    /**
     * Sets day_phone
     * @param string $day_phone Day time phone
     * @return $this
     */
    public function setDayPhone($day_phone)
    {
        if (strlen($day_phone) > 25) {
            throw new \InvalidArgumentException('invalid length for $day_phone when calling OrderShipping., must be smaller than or equal to 25.');
        }
        $this->container['day_phone'] = $day_phone;

        return $this;
    }

    /**
     * Gets delivery_date
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     * @param string $delivery_date Date the customer is requesting delivery on.  Typically used for perishable product delivery.
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets evening_phone
     * @return string
     */
    public function getEveningPhone()
    {
        return $this->container['evening_phone'];
    }

    /**
     * Sets evening_phone
     * @param string $evening_phone Evening phone
     * @return $this
     */
    public function setEveningPhone($evening_phone)
    {
        if (strlen($evening_phone) > 25) {
            throw new \InvalidArgumentException('invalid length for $evening_phone when calling OrderShipping., must be smaller than or equal to 25.');
        }
        $this->container['evening_phone'] = $evening_phone;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name First name
     * @return $this
     */
    public function setFirstName($first_name)
    {
        if (strlen($first_name) > 30) {
            throw new \InvalidArgumentException('invalid length for $first_name when calling OrderShipping., must be smaller than or equal to 30.');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Last name
     * @return $this
     */
    public function setLastName($last_name)
    {
        if (strlen($last_name) > 30) {
            throw new \InvalidArgumentException('invalid length for $last_name when calling OrderShipping., must be smaller than or equal to 30.');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets lift_gate
     * @return bool
     */
    public function getLiftGate()
    {
        return $this->container['lift_gate'];
    }

    /**
     * Sets lift_gate
     * @param bool $lift_gate Lift gate requested (LTL shipping methods only)
     * @return $this
     */
    public function setLiftGate($lift_gate)
    {
        $this->container['lift_gate'] = $lift_gate;

        return $this;
    }

    /**
     * Gets postal_code
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     * @param string $postal_code Postal code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        if (strlen($postal_code) > 20) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling OrderShipping., must be smaller than or equal to 20.');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets rma
     * @return string
     */
    public function getRma()
    {
        return $this->container['rma'];
    }

    /**
     * Sets rma
     * @param string $rma RMA number
     * @return $this
     */
    public function setRma($rma)
    {
        if (strlen($rma) > 30) {
            throw new \InvalidArgumentException('invalid length for $rma when calling OrderShipping., must be smaller than or equal to 30.');
        }
        $this->container['rma'] = $rma;

        return $this;
    }

    /**
     * Gets ship_on_date
     * @return string
     */
    public function getShipOnDate()
    {
        return $this->container['ship_on_date'];
    }

    /**
     * Sets ship_on_date
     * @param string $ship_on_date Date the customer is requesting that the order ship on.  Typically used for perishable product delivery.
     * @return $this
     */
    public function setShipOnDate($ship_on_date)
    {
        $this->container['ship_on_date'] = $ship_on_date;

        return $this;
    }

    /**
     * Gets ship_to_residential
     * @return bool
     */
    public function getShipToResidential()
    {
        return $this->container['ship_to_residential'];
    }

    /**
     * Sets ship_to_residential
     * @param bool $ship_to_residential True if the shipping address is residential.  Effects the methods that are available to the customer as well as the price of the shipping method.
     * @return $this
     */
    public function setShipToResidential($ship_to_residential)
    {
        $this->container['ship_to_residential'] = $ship_to_residential;

        return $this;
    }

    /**
     * Gets shipping_3rd_party_account_number
     * @return string
     */
    public function getShipping3rdPartyAccountNumber()
    {
        return $this->container['shipping_3rd_party_account_number'];
    }

    /**
     * Sets shipping_3rd_party_account_number
     * @param string $shipping_3rd_party_account_number Shipping 3rd party account number
     * @return $this
     */
    public function setShipping3rdPartyAccountNumber($shipping_3rd_party_account_number)
    {
        if (strlen($shipping_3rd_party_account_number) > 20) {
            throw new \InvalidArgumentException('invalid length for $shipping_3rd_party_account_number when calling OrderShipping., must be smaller than or equal to 20.');
        }
        $this->container['shipping_3rd_party_account_number'] = $shipping_3rd_party_account_number;

        return $this;
    }

    /**
     * Gets shipping_date
     * @return string
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     * @param string $shipping_date Date/time the order shipped on.  This date is set once the first shipment is sent to the customer.
     * @return $this
     */
    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets shipping_department_status
     * @return string
     */
    public function getShippingDepartmentStatus()
    {
        return $this->container['shipping_department_status'];
    }

    /**
     * Sets shipping_department_status
     * @param string $shipping_department_status Shipping department status
     * @return $this
     */
    public function setShippingDepartmentStatus($shipping_department_status)
    {
        if (strlen($shipping_department_status) > 30) {
            throw new \InvalidArgumentException('invalid length for $shipping_department_status when calling OrderShipping., must be smaller than or equal to 30.');
        }
        $this->container['shipping_department_status'] = $shipping_department_status;

        return $this;
    }

    /**
     * Gets shipping_method
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     * @param string $shipping_method Shipping method
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_method_accounting_code
     * @return string
     */
    public function getShippingMethodAccountingCode()
    {
        return $this->container['shipping_method_accounting_code'];
    }

    /**
     * Sets shipping_method_accounting_code
     * @param string $shipping_method_accounting_code Shipping method accounting code
     * @return $this
     */
    public function setShippingMethodAccountingCode($shipping_method_accounting_code)
    {
        $this->container['shipping_method_accounting_code'] = $shipping_method_accounting_code;

        return $this;
    }

    /**
     * Gets special_instructions
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->container['special_instructions'];
    }

    /**
     * Sets special_instructions
     * @param string $special_instructions Special instructions from the customer regarding shipping
     * @return $this
     */
    public function setSpecialInstructions($special_instructions)
    {
        $this->container['special_instructions'] = $special_instructions;

        return $this;
    }

    /**
     * Gets state_region
     * @return string
     */
    public function getStateRegion()
    {
        return $this->container['state_region'];
    }

    /**
     * Sets state_region
     * @param string $state_region State
     * @return $this
     */
    public function setStateRegion($state_region)
    {
        if (strlen($state_region) > 32) {
            throw new \InvalidArgumentException('invalid length for $state_region when calling OrderShipping., must be smaller than or equal to 32.');
        }
        $this->container['state_region'] = $state_region;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Title
     * @return $this
     */
    public function setTitle($title)
    {
        if (strlen($title) > 50) {
            throw new \InvalidArgumentException('invalid length for $title when calling OrderShipping., must be smaller than or equal to 50.');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets tracking_numbers
     * @return string[]
     */
    public function getTrackingNumbers()
    {
        return $this->container['tracking_numbers'];
    }

    /**
     * Sets tracking_numbers
     * @param string[] $tracking_numbers Tracking numbers
     * @return $this
     */
    public function setTrackingNumbers($tracking_numbers)
    {
        $this->container['tracking_numbers'] = $tracking_numbers;

        return $this;
    }

    /**
     * Gets weight
     * @return \ultracart\v2\models\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param \ultracart\v2\models\Weight $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


