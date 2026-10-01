# # SfvbRecordingPageView

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | The host name of the address. | [optional]
**events** | [**\ultracart\v2\models\SfvbRecordingEvent[]**](SfvbRecordingEvent.md) | Named events on this page view in time order, such as rage clicks and script errors. | [optional]
**first_event_timestamp** | **string** | When recording of this page view began, ISO-8601 in UTC. | [optional]
**last_event_timestamp** | **string** | When recording of this page view ended, ISO-8601 in UTC. | [optional]
**missing_events** | **bool** | True when no replay events were stored for this page view. | [optional]
**params** | [**\ultracart\v2\models\SfvbRecordingParameter[]**](SfvbRecordingParameter.md) | The query string parameters on the address. | [optional]
**referrer** | **string** | The referring address, when there was one. | [optional]
**screen_recording_page_view_uuid** | **string** | Identifies this page view when fetching its replay events. | [optional]
**time_on_page** | **int** | Seconds the visitor spent on the page. | [optional]
**timing_dom_content_loaded** | **int** | Milliseconds until DOMContentLoaded fired. | [optional]
**timing_loaded** | **int** | Milliseconds until the load event fired. | [optional]
**truncated_events** | **bool** | True when the recorder stopped storing events part way through this page view. | [optional]
**url** | **string** | The address the visitor viewed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
