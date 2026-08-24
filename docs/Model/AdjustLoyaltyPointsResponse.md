# # AdjustLoyaltyPointsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_points** | **int** | The current (vested) points balance after the adjustment was made | [optional]
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional]
**loyalty_points** | **int** | The loyalty points adjustment that was written to the ledger | [optional]
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional]
**pending_points** | **int** | The pending (unvested) points balance after the adjustment was made | [optional]
**success** | **bool** | Indicates if API call was successful | [optional]
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
