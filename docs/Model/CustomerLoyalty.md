# # CustomerLoyalty

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_points** | **int** | Current points | [optional]
**internal_gift_certificate** | [**\ultracart\v2\models\GiftCertificate**](GiftCertificate.md) |  | [optional]
**internal_gift_certificate_balance** | **string** | Loyalty Cashback / Store credit balance (internal gift certificate balance) | [optional]
**internal_gift_certificate_oid** | **int** | Internal gift certificate oid used to tracking loyalty cashback / store credit. | [optional]
**ledger_entries** | [**\ultracart\v2\models\CustomerLoyaltyLedger[]**](CustomerLoyaltyLedger.md) | Ledger entries | [optional]
**loyalty_tier_expiration_dts** | **string** | Loyalty tier expiration date (read only because of SDK addition) | [optional]
**loyalty_tier_name** | **string** | Loyalty tier name | [optional]
**loyalty_tier_oid** | **int** | Loyalty tier oid (set to zero to remove the tier) | [optional]
**pending_points** | **int** | Pending Points | [optional]
**redemptions** | [**\ultracart\v2\models\CustomerLoyaltyRedemption[]**](CustomerLoyaltyRedemption.md) | Redemptions | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
