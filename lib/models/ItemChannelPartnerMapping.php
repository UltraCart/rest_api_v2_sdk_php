<?php
/**
 * ItemChannelPartnerMapping
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
 * ItemChannelPartnerMapping Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ItemChannelPartnerMapping implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemChannelPartnerMapping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'barcode_ua' => 'string',
        'barcode_uc' => 'string',
        'barcode_ui' => 'string',
        'barcode_uk' => 'string',
        'buyer_catalog_number' => 'string',
        'buyer_dpci' => 'string',
        'buyer_item_number' => 'string',
        'channel_partner_code' => 'string',
        'channel_partner_oid' => 'int',
        'cost' => 'float',
        'from_item_id' => 'string',
        'from_sku' => 'string',
        'mutually_defined_number' => 'string',
        'quantity_ratio_cp' => 'int',
        'quantity_ratio_uc' => 'int',
        'sku' => 'string',
        'unit_of_measure' => 'string',
        'vendor_number' => 'string',
        'vendor_style_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'barcode_ua' => null,
        'barcode_uc' => null,
        'barcode_ui' => null,
        'barcode_uk' => null,
        'buyer_catalog_number' => null,
        'buyer_dpci' => null,
        'buyer_item_number' => null,
        'channel_partner_code' => null,
        'channel_partner_oid' => 'int32',
        'cost' => null,
        'from_item_id' => null,
        'from_sku' => null,
        'mutually_defined_number' => null,
        'quantity_ratio_cp' => 'int32',
        'quantity_ratio_uc' => 'int32',
        'sku' => null,
        'unit_of_measure' => null,
        'vendor_number' => null,
        'vendor_style_number' => null
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
        'barcode_ua' => 'barcode_ua',
        'barcode_uc' => 'barcode_uc',
        'barcode_ui' => 'barcode_ui',
        'barcode_uk' => 'barcode_uk',
        'buyer_catalog_number' => 'buyer_catalog_number',
        'buyer_dpci' => 'buyer_dpci',
        'buyer_item_number' => 'buyer_item_number',
        'channel_partner_code' => 'channel_partner_code',
        'channel_partner_oid' => 'channel_partner_oid',
        'cost' => 'cost',
        'from_item_id' => 'from_item_id',
        'from_sku' => 'from_sku',
        'mutually_defined_number' => 'mutually_defined_number',
        'quantity_ratio_cp' => 'quantity_ratio_cp',
        'quantity_ratio_uc' => 'quantity_ratio_uc',
        'sku' => 'sku',
        'unit_of_measure' => 'unit_of_measure',
        'vendor_number' => 'vendor_number',
        'vendor_style_number' => 'vendor_style_number'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcode_ua' => 'setBarcodeUa',
        'barcode_uc' => 'setBarcodeUc',
        'barcode_ui' => 'setBarcodeUi',
        'barcode_uk' => 'setBarcodeUk',
        'buyer_catalog_number' => 'setBuyerCatalogNumber',
        'buyer_dpci' => 'setBuyerDpci',
        'buyer_item_number' => 'setBuyerItemNumber',
        'channel_partner_code' => 'setChannelPartnerCode',
        'channel_partner_oid' => 'setChannelPartnerOid',
        'cost' => 'setCost',
        'from_item_id' => 'setFromItemId',
        'from_sku' => 'setFromSku',
        'mutually_defined_number' => 'setMutuallyDefinedNumber',
        'quantity_ratio_cp' => 'setQuantityRatioCp',
        'quantity_ratio_uc' => 'setQuantityRatioUc',
        'sku' => 'setSku',
        'unit_of_measure' => 'setUnitOfMeasure',
        'vendor_number' => 'setVendorNumber',
        'vendor_style_number' => 'setVendorStyleNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcode_ua' => 'getBarcodeUa',
        'barcode_uc' => 'getBarcodeUc',
        'barcode_ui' => 'getBarcodeUi',
        'barcode_uk' => 'getBarcodeUk',
        'buyer_catalog_number' => 'getBuyerCatalogNumber',
        'buyer_dpci' => 'getBuyerDpci',
        'buyer_item_number' => 'getBuyerItemNumber',
        'channel_partner_code' => 'getChannelPartnerCode',
        'channel_partner_oid' => 'getChannelPartnerOid',
        'cost' => 'getCost',
        'from_item_id' => 'getFromItemId',
        'from_sku' => 'getFromSku',
        'mutually_defined_number' => 'getMutuallyDefinedNumber',
        'quantity_ratio_cp' => 'getQuantityRatioCp',
        'quantity_ratio_uc' => 'getQuantityRatioUc',
        'sku' => 'getSku',
        'unit_of_measure' => 'getUnitOfMeasure',
        'vendor_number' => 'getVendorNumber',
        'vendor_style_number' => 'getVendorStyleNumber'
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
        $this->container['barcode_ua'] = $data['barcode_ua'] ?? null;
        $this->container['barcode_uc'] = $data['barcode_uc'] ?? null;
        $this->container['barcode_ui'] = $data['barcode_ui'] ?? null;
        $this->container['barcode_uk'] = $data['barcode_uk'] ?? null;
        $this->container['buyer_catalog_number'] = $data['buyer_catalog_number'] ?? null;
        $this->container['buyer_dpci'] = $data['buyer_dpci'] ?? null;
        $this->container['buyer_item_number'] = $data['buyer_item_number'] ?? null;
        $this->container['channel_partner_code'] = $data['channel_partner_code'] ?? null;
        $this->container['channel_partner_oid'] = $data['channel_partner_oid'] ?? null;
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['from_item_id'] = $data['from_item_id'] ?? null;
        $this->container['from_sku'] = $data['from_sku'] ?? null;
        $this->container['mutually_defined_number'] = $data['mutually_defined_number'] ?? null;
        $this->container['quantity_ratio_cp'] = $data['quantity_ratio_cp'] ?? null;
        $this->container['quantity_ratio_uc'] = $data['quantity_ratio_uc'] ?? null;
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
        $this->container['vendor_number'] = $data['vendor_number'] ?? null;
        $this->container['vendor_style_number'] = $data['vendor_style_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['from_item_id']) && (mb_strlen($this->container['from_item_id']) > 30)) {
            $invalidProperties[] = "invalid value for 'from_item_id', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['from_sku']) && (mb_strlen($this->container['from_sku']) > 50)) {
            $invalidProperties[] = "invalid value for 'from_sku', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['sku']) && (mb_strlen($this->container['sku']) > 50)) {
            $invalidProperties[] = "invalid value for 'sku', the character length must be smaller than or equal to 50.";
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
     * Gets barcode_ua
     *
     * @return string|null
     */
    public function getBarcodeUa()
    {
        return $this->container['barcode_ua'];
    }

    /**
     * Sets barcode_ua
     *
     * @param string|null $barcode_ua Barcode UA (EDI only)
     *
     * @return self
     */
    public function setBarcodeUa($barcode_ua)
    {
        $this->container['barcode_ua'] = $barcode_ua;

        return $this;
    }

    /**
     * Gets barcode_uc
     *
     * @return string|null
     */
    public function getBarcodeUc()
    {
        return $this->container['barcode_uc'];
    }

    /**
     * Sets barcode_uc
     *
     * @param string|null $barcode_uc Barcode UC (EDI only)
     *
     * @return self
     */
    public function setBarcodeUc($barcode_uc)
    {
        $this->container['barcode_uc'] = $barcode_uc;

        return $this;
    }

    /**
     * Gets barcode_ui
     *
     * @return string|null
     */
    public function getBarcodeUi()
    {
        return $this->container['barcode_ui'];
    }

    /**
     * Sets barcode_ui
     *
     * @param string|null $barcode_ui Barcode UI (EDI only)
     *
     * @return self
     */
    public function setBarcodeUi($barcode_ui)
    {
        $this->container['barcode_ui'] = $barcode_ui;

        return $this;
    }

    /**
     * Gets barcode_uk
     *
     * @return string|null
     */
    public function getBarcodeUk()
    {
        return $this->container['barcode_uk'];
    }

    /**
     * Sets barcode_uk
     *
     * @param string|null $barcode_uk Barcode UK (EDI only)
     *
     * @return self
     */
    public function setBarcodeUk($barcode_uk)
    {
        $this->container['barcode_uk'] = $barcode_uk;

        return $this;
    }

    /**
     * Gets buyer_catalog_number
     *
     * @return string|null
     */
    public function getBuyerCatalogNumber()
    {
        return $this->container['buyer_catalog_number'];
    }

    /**
     * Sets buyer_catalog_number
     *
     * @param string|null $buyer_catalog_number Buyer catalog number (EDI only)
     *
     * @return self
     */
    public function setBuyerCatalogNumber($buyer_catalog_number)
    {
        $this->container['buyer_catalog_number'] = $buyer_catalog_number;

        return $this;
    }

    /**
     * Gets buyer_dpci
     *
     * @return string|null
     */
    public function getBuyerDpci()
    {
        return $this->container['buyer_dpci'];
    }

    /**
     * Sets buyer_dpci
     *
     * @param string|null $buyer_dpci Buyer DPCI (EDI only)
     *
     * @return self
     */
    public function setBuyerDpci($buyer_dpci)
    {
        $this->container['buyer_dpci'] = $buyer_dpci;

        return $this;
    }

    /**
     * Gets buyer_item_number
     *
     * @return string|null
     */
    public function getBuyerItemNumber()
    {
        return $this->container['buyer_item_number'];
    }

    /**
     * Sets buyer_item_number
     *
     * @param string|null $buyer_item_number Buyer item number (EDI only)
     *
     * @return self
     */
    public function setBuyerItemNumber($buyer_item_number)
    {
        $this->container['buyer_item_number'] = $buyer_item_number;

        return $this;
    }

    /**
     * Gets channel_partner_code
     *
     * @return string|null
     */
    public function getChannelPartnerCode()
    {
        return $this->container['channel_partner_code'];
    }

    /**
     * Sets channel_partner_code
     *
     * @param string|null $channel_partner_code Channel partner code
     *
     * @return self
     */
    public function setChannelPartnerCode($channel_partner_code)
    {
        $this->container['channel_partner_code'] = $channel_partner_code;

        return $this;
    }

    /**
     * Gets channel_partner_oid
     *
     * @return int|null
     */
    public function getChannelPartnerOid()
    {
        return $this->container['channel_partner_oid'];
    }

    /**
     * Sets channel_partner_oid
     *
     * @param int|null $channel_partner_oid Channel partner object identifier
     *
     * @return self
     */
    public function setChannelPartnerOid($channel_partner_oid)
    {
        $this->container['channel_partner_oid'] = $channel_partner_oid;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost Cost given to this channel partner
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets from_item_id
     *
     * @return string|null
     */
    public function getFromItemId()
    {
        return $this->container['from_item_id'];
    }

    /**
     * Sets from_item_id
     *
     * @param string|null $from_item_id From Item ID
     *
     * @return self
     */
    public function setFromItemId($from_item_id)
    {
        if (!is_null($from_item_id) && (mb_strlen($from_item_id) > 30)) {
            throw new \InvalidArgumentException('invalid length for $from_item_id when calling ItemChannelPartnerMapping., must be smaller than or equal to 30.');
        }

        $this->container['from_item_id'] = $from_item_id;

        return $this;
    }

    /**
     * Gets from_sku
     *
     * @return string|null
     */
    public function getFromSku()
    {
        return $this->container['from_sku'];
    }

    /**
     * Sets from_sku
     *
     * @param string|null $from_sku From SKU
     *
     * @return self
     */
    public function setFromSku($from_sku)
    {
        if (!is_null($from_sku) && (mb_strlen($from_sku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $from_sku when calling ItemChannelPartnerMapping., must be smaller than or equal to 50.');
        }

        $this->container['from_sku'] = $from_sku;

        return $this;
    }

    /**
     * Gets mutually_defined_number
     *
     * @return string|null
     */
    public function getMutuallyDefinedNumber()
    {
        return $this->container['mutually_defined_number'];
    }

    /**
     * Sets mutually_defined_number
     *
     * @param string|null $mutually_defined_number Mutually defined number (EDI only)
     *
     * @return self
     */
    public function setMutuallyDefinedNumber($mutually_defined_number)
    {
        $this->container['mutually_defined_number'] = $mutually_defined_number;

        return $this;
    }

    /**
     * Gets quantity_ratio_cp
     *
     * @return int|null
     */
    public function getQuantityRatioCp()
    {
        return $this->container['quantity_ratio_cp'];
    }

    /**
     * Sets quantity_ratio_cp
     *
     * @param int|null $quantity_ratio_cp Ratio (Channel Partner)
     *
     * @return self
     */
    public function setQuantityRatioCp($quantity_ratio_cp)
    {
        $this->container['quantity_ratio_cp'] = $quantity_ratio_cp;

        return $this;
    }

    /**
     * Gets quantity_ratio_uc
     *
     * @return int|null
     */
    public function getQuantityRatioUc()
    {
        return $this->container['quantity_ratio_uc'];
    }

    /**
     * Sets quantity_ratio_uc
     *
     * @param int|null $quantity_ratio_uc Ratio (UltraCart)
     *
     * @return self
     */
    public function setQuantityRatioUc($quantity_ratio_uc)
    {
        $this->container['quantity_ratio_uc'] = $quantity_ratio_uc;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku SKU
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (!is_null($sku) && (mb_strlen($sku) > 50)) {
            throw new \InvalidArgumentException('invalid length for $sku when calling ItemChannelPartnerMapping., must be smaller than or equal to 50.');
        }

        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets unit_of_measure
     *
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string|null $unit_of_measure Unit of measure
     *
     * @return self
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets vendor_number
     *
     * @return string|null
     */
    public function getVendorNumber()
    {
        return $this->container['vendor_number'];
    }

    /**
     * Sets vendor_number
     *
     * @param string|null $vendor_number Vendor number (EDI only)
     *
     * @return self
     */
    public function setVendorNumber($vendor_number)
    {
        $this->container['vendor_number'] = $vendor_number;

        return $this;
    }

    /**
     * Gets vendor_style_number
     *
     * @return string|null
     */
    public function getVendorStyleNumber()
    {
        return $this->container['vendor_style_number'];
    }

    /**
     * Sets vendor_style_number
     *
     * @param string|null $vendor_style_number Vendor style number (EDI only)
     *
     * @return self
     */
    public function setVendorStyleNumber($vendor_style_number)
    {
        $this->container['vendor_style_number'] = $vendor_style_number;

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


