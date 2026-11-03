# # SfvbSmartAttributionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assist_percent** | **float** | 0 to 1, at most 4 decimals. | [optional]
**attribution_model** | **string** | position_based, linear, time_decay or custom. | [optional]
**closer_percent** | **float** | 0 to 1, at most 4 decimals. | [optional]
**lookback_days** | **int** | 7 to 365. | [optional]
**mode** | **string** | disabled, report_only or active.  Making it active, or any change while it is active, needs an approval. | [optional]
**originator_percent** | **float** | 0 to 1, at most 4 decimals.  The three global percentages must total exactly 1, so send all three to change the split. | [optional]
**platforms** | [**\ultracart\v2\models\SfvbSmartAttributionPlatform[]**](SfvbSmartAttributionPlatform.md) | When sent, replaces the whole platform list.  Up to 100, each name and id once.  Left out, the list is unchanged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
