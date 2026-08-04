# # BulkJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed_at** | **string** | When the job reached a terminal status | [optional]
**duplicate_count** | **int** | Records short-circuited as duplicates | [optional]
**error_code** | **string** | Job-level failure code when status is failed | [optional]
**fail_count** | **int** | Records that failed | [optional]
**job_id** | **string** | Public-facing job id (uc-bulk-&lt;ulid&gt;) | [optional]
**object** | **string** | Object type this job processes | [optional]
**operation** | **string** | Mutation mode this job runs (the bulk surface is write-only) | [optional]
**processed_records** | **int** | Records processed so far | [optional]
**queue_position** | **int** | Position behind the merchant&#39;s active job (queued jobs only) | [optional]
**results_summary_url** | **string** | Presigned S3 URL to the full per-record results NDJSON (set when finished) | [optional]
**started_at** | **string** | When the worker started the job | [optional]
**status** | **string** | Job status | [optional]
**submitted_at** | **string** | When the job was submitted | [optional]
**success_count** | **int** | Records that landed | [optional]
**total_records** | **int** | Total records counted on the first pass (null until counted) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
