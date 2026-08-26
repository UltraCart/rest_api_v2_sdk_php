# ultracart\v2\BulkApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkCancelJob()**](BulkApi.md#bulkCancelJob) | **DELETE** /bulk/{object}/{job_id} | Request cancellation of a bulk job
[**bulkGenerateUploadUrl()**](BulkApi.md#bulkGenerateUploadUrl) | **POST** /bulk/{object}/upload-url | Generate a presigned upload URL for a bulk payload
[**bulkGetJob()**](BulkApi.md#bulkGetJob) | **GET** /bulk/{object}/{job_id} | Retrieve a bulk job&#39;s status and counts
[**bulkGetJobRecords()**](BulkApi.md#bulkGetJobRecords) | **GET** /bulk/{object}/{job_id}/records | Paginate a bulk job&#39;s per-record results
[**bulkListJobs()**](BulkApi.md#bulkListJobs) | **GET** /bulk/{object} | List bulk jobs for the calling merchant
[**bulkSubmitJob()**](BulkApi.md#bulkSubmitJob) | **POST** /bulk/{object} | Submit a bulk job


## `bulkCancelJob()`

```php
bulkCancelJob($object, $job_id)
```

Request cancellation of a bulk job

Queued jobs cancel immediately (200). In-progress jobs finalize as cancelled between records (202); already-processed records stand.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object** | **string**| Object type |
 **job_id** | **string**| The bulk job id |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGenerateUploadUrl()`

```php
bulkGenerateUploadUrl($object): \ultracart\v2\models\BulkUploadUrlResponse
```

Generate a presigned upload URL for a bulk payload

Returns a presigned S3 PUT URL the merchant uploads NDJSON to, plus the s3_key to pass to submit.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object** | **string**| Object type |

### Return type

[**\ultracart\v2\models\BulkUploadUrlResponse**](../Model/BulkUploadUrlResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGetJob()`

```php
bulkGetJob($object, $job_id): \ultracart\v2\models\BulkJobResponse
```

Retrieve a bulk job's status and counts


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object** | **string**| Object type |
 **job_id** | **string**| The bulk job id |

### Return type

[**\ultracart\v2\models\BulkJobResponse**](../Model/BulkJobResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGetJobRecords()`

```php
bulkGetJobRecords($object, $job_id, $status, $cursor, $limit): \ultracart\v2\models\BulkRecordsResponse
```

Paginate a bulk job's per-record results


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object** | **string**| Object type |
 **job_id** | **string**| The bulk job id |
 **status** | **string**| Filter by per-record result status (success, failed, duplicate) | [optional]
 **cursor** | **string**| Opaque pagination cursor | [optional]
 **limit** | **int**| Page size (default 100, max 1000) | [optional]

### Return type

[**\ultracart\v2\models\BulkRecordsResponse**](../Model/BulkRecordsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkListJobs()`

```php
bulkListJobs($object, $status, $cursor, $limit): \ultracart\v2\models\BulkJobsResponse
```

List bulk jobs for the calling merchant


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object** | **string**| Object type |
 **status** | **string**| Filter by job status | [optional]
 **cursor** | **string**| Opaque pagination cursor | [optional]
 **limit** | **int**| Page size (default 100, max 1000) | [optional]

### Return type

[**\ultracart\v2\models\BulkJobsResponse**](../Model/BulkJobsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkSubmitJob()`

```php
bulkSubmitJob($object, $bulk_job): \ultracart\v2\models\BulkJobResponse
```

Submit a bulk job

Submits a job referencing a previously uploaded NDJSON object. One active job per merchant; additional submissions queue. The bulk surface is write-only (insert / upsert); it has no bulk read or export operation.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object** | **string**| Object type |
 **bulk_job** | [**\ultracart\v2\models\BulkJobRequest**](../Model/BulkJobRequest.md)| Bulk job submission |

### Return type

[**\ultracart\v2\models\BulkJobResponse**](../Model/BulkJobResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
