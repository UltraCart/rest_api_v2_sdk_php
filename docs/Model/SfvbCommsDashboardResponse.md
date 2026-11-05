# # SfvbCommsDashboardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**daily** | [**\ultracart\v2\models\SfvbCommsDailyStat[]**](SfvbCommsDailyStat.md) | The account&#39;s last 31 days of sending, whatever the window. | [optional]
**days** | **int** | The window, in days, for the rows. | [optional]
**notes** | **string[]** | What the windows are. | [optional]
**rows** | [**\ultracart\v2\models\SfvbCommsDashboardRow[]**](SfvbCommsDashboardRow.md) | Each flow and campaign with counts in the window. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
