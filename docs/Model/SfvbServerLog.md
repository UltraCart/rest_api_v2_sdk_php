# # SfvbServerLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_error** | **bool** | True when the render itself failed and the page could not be produced. | [optional]
**duration_ms** | **int** | How long the render took in milliseconds. | [optional]
**error_count** | **int** | Error lines in the log, including Velocity problems such as a null | [optional]
**line_count** | **int** | Lines in the full log text. | [optional]
**log_id** | **string** | Opaque id of this log.  Pass it to the get endpoint.  Preview pages send the same id in the X-UltraCart-Storefront-Log-Id response header. | [optional]
**request_template** | **string** | The template the page rendered with, when known. | [optional]
**request_url** | **string** | The address that was rendered, as the server recorded it. | [optional]
**start_date** | **string** | When the render started, ISO-8601 in UTC. | [optional]
**status** | **string** | ERROR when the render logged any error line or failed, otherwise SUCCESS. | [optional]
**stop_date** | **string** | When the render finished, ISO-8601 in UTC. | [optional]
**warning_count** | **int** | Warning lines in the log. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
