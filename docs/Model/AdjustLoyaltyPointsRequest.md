# # AdjustLoyaltyPointsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of this adjustment, 200 characters max | [optional]
**loyalty_points** | **int** | The number of loyalty points to add to the ledger.  Use a negative number to debit points.  Required and may not be zero. | [optional]
**order_id** | **string** | Optional order id if this adjustment is related to a particular order | [optional]
**vesting_days** | **int** | Optional days required for this adjustment to vest.  Leave null to use the merchant configured default.  Use zero for immediate vesting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
