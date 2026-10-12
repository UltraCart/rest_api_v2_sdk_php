# # SfvbEventsAuthResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expires_dts** | **string** | When the token stops working, ISO 8601.  Ask for a new one to reconnect. | [optional]
**jwt** | **string** | The connect token on its own. | [optional]
**websocket_url** | **string** | The websocket URL to open, with the token on it.  Open it before expires_dts; each token opens one connection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
