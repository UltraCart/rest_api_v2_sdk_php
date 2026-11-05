# # SfvbCommsSequenceStatsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**communication_sequence_uuid** | **string** | The sequence. | [optional]
**days** | **int** | The window, in days, for the step counts. | [optional]
**notes** | **string[]** | What the windows are and what a missing count means. | [optional]
**overall** | [**\ultracart\v2\models\SfvbCommsStat**](SfvbCommsStat.md) |  | [optional]
**steps** | [**\ultracart\v2\models\SfvbCommsStepStat[]**](SfvbCommsStepStat.md) | Each email, SMS, postcard and branch step, in the stored order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
