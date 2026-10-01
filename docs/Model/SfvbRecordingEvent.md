# # SfvbRecordingEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The event name, such as rage click, script error, checkout error or add to cart. | [optional]
**params** | [**\ultracart\v2\models\SfvbRecordingParameter[]**](SfvbRecordingParameter.md) | The event&#39;s parameters as name and value pairs.  Omitted for input change events, whose values are what the visitor typed. | [optional]
**sub_text** | **string** | A short human readable summary of the event, when the recorder produced one. | [optional]
**timestamp** | **string** | When it happened, ISO-8601 in UTC.  Subtract the page view&#39;s first_event_timestamp for the offset into the replay. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
