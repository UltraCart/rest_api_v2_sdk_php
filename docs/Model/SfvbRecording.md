# # SfvbRecording

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ad_platform** | [**\ultracart\v2\models\ScreenRecordingAdPlatform**](ScreenRecordingAdPlatform.md) |  | [optional]
**browser** | **string** | Browser name from the user agent. | [optional]
**browser_version** | **string** | Browser version from the user agent. | [optional]
**converted** | **bool** | True when the session ended in an order. | [optional]
**device** | **string** | Device name from the user agent. | [optional]
**end_timestamp** | **string** | When the session ended, ISO-8601 in UTC. | [optional]
**geolocation_country** | **string** | Country the visitor was in. | [optional]
**geolocation_state** | **string** | State or region the visitor was in. | [optional]
**language_iso_code** | **string** | The browser language. | [optional]
**order_id** | **string** | The order placed during the session, when there was one. | [optional]
**os** | **string** | Operating system from the user agent. | [optional]
**page_view_count** | **int** | How many pages the visitor viewed. | [optional]
**page_views** | [**\ultracart\v2\models\SfvbRecordingPageView[]**](SfvbRecordingPageView.md) | The pages viewed, in order. | [optional]
**referrer_domain** | **string** | The domain that referred the visitor. | [optional]
**rrweb_version** | **string** | The rrweb version that recorded the session.  Replay with the same version. | [optional]
**screen_recording_uuid** | **string** | Identifies the recording. | [optional]
**start_timestamp** | **string** | When the session started, ISO-8601 in UTC. | [optional]
**time_on_site** | **int** | Seconds the visitor spent on the site. | [optional]
**utm_campaign** | **string** | utm_campaign on arrival. | [optional]
**utm_source** | **string** | utm_source on arrival. | [optional]
**window_height** | **int** | Browser window height in pixels. | [optional]
**window_width** | **int** | Browser window width in pixels. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
