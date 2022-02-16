# GiftCertificate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activated** | **bool** | True if this gift certificate is activated and ready to apply to purchases. | [optional] 
**code** | **string** | The code used by the customer to purchase against this gift certificate. | [optional] 
**deleted** | **bool** | True if this gift certificate was deleted. | [optional] 
**email** | **string** | Email of the customer associated with this gift certificate. | [optional] 
**expiration_dts** | **string** | Expiration date time. | [optional] 
**gift_certificate_oid** | **int** | Gift certificate oid. | [optional] 
**ledger_entries** | [**\ultracart\v2\models\GiftCertificateLedgerEntry[]**](GiftCertificateLedgerEntry.md) | A list of all ledger activity for this gift certificate. | [optional] 
**merchant_id** | **string** | Merchant Id | [optional] 
**merchant_note** | **string** | A list of all ledger activity for this gift certificate. | [optional] 
**original_balance** | **float** | Original balance of the gift certificate. | [optional] 
**reference_order_id** | **string** | The order used to purchase this gift certificate.  This value is ONLY set during checkout when a certificate is purchased, not when it is used.  Any usage is recorded in the ledger | [optional] 
**remaining_balance** | **float** | The remaining balance on the gift certificate.  This is never set directly, but calculated from the ledger.  To change the remaining balance, add a ledger entry. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


