# # CustomerStoreCredit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available** | **float** | Available store credit which is defined as unused and vested | [optional]
**expiring** | **float** | Amount of store credit expiring within 30 days | [optional]
**future_ledgers** | [**\ultracart\v2\models\CustomerStoreCreditLedgerEntry[]**](CustomerStoreCreditLedgerEntry.md) | Array of future ledger entries including expiring entries | [optional]
**past_ledgers** | [**\ultracart\v2\models\CustomerStoreCreditLedgerEntry[]**](CustomerStoreCreditLedgerEntry.md) | Array of past ledger entries including accrual, usage, and expiring entries | [optional]
**total** | **float** | Total lifetime store credit for this customer. | [optional]
**vesting** | **float** | Amount of store credit vesting | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
