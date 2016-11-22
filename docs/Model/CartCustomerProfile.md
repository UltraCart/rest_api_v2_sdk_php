# CartCustomerProfile

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_3rd_party_billing** | **bool** | True if profile is allowed to bill to their 3rd party shipping account | [optional] 
**allow_cod** | **bool** | True if this profile is allowed to use a COD | [optional] 
**allow_purchase_order** | **bool** | True if this profile is allowed to use a purchase order | [optional] 
**billing_addresses** | [**\ultracart\admin\v2\models\CartCustomerProfileAddress[]**](CartCustomerProfileAddress.md) | Billing addresses on file for this profile | [optional] 
**credit_cards** | [**\ultracart\admin\v2\models\CartCustomerProfileCreditCard[]**](CartCustomerProfileCreditCard.md) | Credit cards on file for this profile (masked) | [optional] 
**customer_profile_oid** | **int** | Unique identifier | [optional] 
**dhl_account_number** | **string** | DHL account number on file | [optional] 
**email** | **string** | Email | [optional] 
**fedex_account_number** | **string** | FedEx account number on file | [optional] 
**free_shipping** | **bool** | True if this profile always qualifies for free shipping | [optional] 
**free_shipping_minimum** | **float** | The minimum aount that this profile has to purchase to qualify for free shipping | [optional] 
**maximum_item_count** | **int** | Maximum item count this profile can purchase | [optional] 
**minimum_item_count** | **int** | Minimum item count this profile must purchase | [optional] 
**minimum_subtotal** | **float** | Minimum subtotal this profile must purchase | [optional] 
**no_coupons** | **bool** | True if this profile is prevented from using coupons | [optional] 
**no_free_shipping** | **bool** | True if this profile is never given free shipping | [optional] 
**no_realtime_charge** | **bool** | True if this customers orders are not charged in real-time | [optional] 
**pricing_tiers** | **string[]** | Pricing tier names this profile qualifies for | [optional] 
**shipping_addresses** | [**\ultracart\admin\v2\models\CartCustomerProfileAddress[]**](CartCustomerProfileAddress.md) | Shipping addresses on file for this profile | [optional] 
**tax_exempt** | **bool** | True if this profile is exempt from sales tax | [optional] 
**ups_account_number** | **string** | UPS account number on file | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


