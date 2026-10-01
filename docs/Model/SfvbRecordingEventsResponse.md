# # SfvbRecordingEventsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**events_json** | **string** | The page view&#39;s rrweb events as a JSON array in a string, the input an rrweb Replayer takes.  Card number and security code fields are masked by the recorder, but other text the visitor typed can appear in it. | [optional]
**rrweb_version** | **string** | The rrweb version that recorded the events.  Replay with the same version. | [optional]
**screen_recording_page_view_uuid** | **string** | The page view these events replay. | [optional]
**screen_recording_uuid** | **string** | The recording the page view belongs to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
