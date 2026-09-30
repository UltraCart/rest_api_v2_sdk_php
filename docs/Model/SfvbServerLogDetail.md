# # SfvbServerLogDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entries** | [**\ultracart\v2\models\SfvbServerLogEntry[]**](SfvbServerLogEntry.md) | The log&#39;s lines in the order they were written, at or above min_level. | [optional]
**log** | [**\ultracart\v2\models\SfvbServerLog**](SfvbServerLog.md) |  | [optional]
**min_level** | **string** | The lowest level included in entries. | [optional]
**remote_ip** | **string** | The address of the browser that asked for the page, as the backend log viewer shows it. | [optional]
**user_agent** | **string** | The browser&#39;s user agent, as the backend log viewer shows it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
