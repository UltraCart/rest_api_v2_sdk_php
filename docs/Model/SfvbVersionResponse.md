# # SfvbVersionResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_manager_version** | **string** | Container manager version used to compile for this merchant. | [optional]
**container_versions_retained** | **int** | Versions kept per non-file container before the oldest are pruned.  Beyond this, history is gone - not merely paginated. | [optional]
**element_count** | **int** | Number of element types this version recognizes. | [optional]
**max_cjson_bytes** | **int** | Largest CJSON document that will be parsed, in bytes. | [optional]
**max_preview_session_bytes** | **int** | Largest payload one preview session may hold, in bytes. | [optional]
**max_search_results** | **int** | Hard ceiling on file search results per page. | [optional]
**max_template_bytes** | **int** | Largest template file that can be written, in bytes. | [optional]
**max_widget_ids_per_request** | **int** | Most widget ids that can be reserved in one call. | [optional]
**preview_session_ttl_seconds** | **int** | Seconds a preview session survives before expiring. | [optional]
**release** | **string** | Release channel selected for this merchant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
