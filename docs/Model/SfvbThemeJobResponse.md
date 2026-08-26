# # SfvbThemeJobResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**complete** | **bool** | True once the job has stopped, whether it succeeded or failed. | [optional]
**description** | **string** | Human readable description of the job. | [optional]
**error_message** | **string** | Failure detail.  Populated only when status is error. | [optional]
**finished_dts** | **string** | When the job stopped.  Null until it does. | [optional]
**job_id** | **int** | Job handle.  Poll getSfvbThemeJob with this. | [optional]
**progress** | **int** | Percent complete, 0-100. | [optional]
**progress_description** | **string** | What the job is doing right now, for example &#39;Duplicating locale text&#39;. | [optional]
**started_dts** | **string** | When the job started running.  Null until it does. | [optional]
**status** | **string** | Raw job status. | [optional]
**submitted_dts** | **string** | When the job was queued. | [optional]
**success** | **bool** | True only when the job finished successfully.  Check complete first. | [optional]
**target_path** | **string** | Path the new theme was created at.  Returned when the job is started; the theme oid itself is NOT returned, because the job&#39;s product is a plain text report rather than a structured result.  Once the job completes, list themes and match on this path. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
