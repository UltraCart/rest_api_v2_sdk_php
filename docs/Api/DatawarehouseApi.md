# ultracart\v2\DatawarehouseApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteReport()**](DatawarehouseApi.md#deleteReport) | **DELETE** /datawarehouse/reports/{report_oid} | Delete a report
[**dryRunReportQueries()**](DatawarehouseApi.md#dryRunReportQueries) | **PUT** /datawarehouse/reports/dryrun | Dry run the report queries
[**executeReportQueries()**](DatawarehouseApi.md#executeReportQueries) | **PUT** /datawarehouse/reports/execute | Execute the report queries
[**getReport()**](DatawarehouseApi.md#getReport) | **GET** /datawarehouse/reports/{report_oid} | Get a report
[**getReportDataSet()**](DatawarehouseApi.md#getReportDataSet) | **GET** /datawarehouse/reports/dataset/{dataset_uuid} | Get a report data set
[**getReportDataSetPage()**](DatawarehouseApi.md#getReportDataSetPage) | **GET** /datawarehouse/reports/dataset/{dataset_uuid}/pages/{page_number} | Get a report data set page
[**getReportWebsocketAuthorization()**](DatawarehouseApi.md#getReportWebsocketAuthorization) | **PUT** /datawarehouse/reports/auth | Get report websocket authorization
[**getReports()**](DatawarehouseApi.md#getReports) | **GET** /datawarehouse/reports | Get list of reports available
[**insertReport()**](DatawarehouseApi.md#insertReport) | **POST** /datawarehouse/reports | Create a report
[**updateReport()**](DatawarehouseApi.md#updateReport) | **PUT** /datawarehouse/reports/{report_oid} | Update a report


## `deleteReport()`

```php
deleteReport($report_oid)
```

Delete a report

Delete a report on the UltraCart account.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_oid** | **int**| The report oid to delete. |

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

## `dryRunReportQueries()`

```php
dryRunReportQueries($query_request): \ultracart\v2\models\ReportDryRunQueriesResponse
```

Dry run the report queries

Dry run the report queries


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_request** | [**\ultracart\v2\models\ReportDryRunQueriesRequest**](../Model/ReportDryRunQueriesRequest.md)| Dry run request |

### Return type

[**\ultracart\v2\models\ReportDryRunQueriesResponse**](../Model/ReportDryRunQueriesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeReportQueries()`

```php
executeReportQueries($query_request)
```

Execute the report queries

Execute the report queries


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_request** | [**\ultracart\v2\models\ReportExecuteQueriesRequest**](../Model/ReportExecuteQueriesRequest.md)| Query request |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReport()`

```php
getReport($report_oid): \ultracart\v2\models\ReportResponse
```

Get a report

Retrieve a report


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportDataSet()`

```php
getReportDataSet($dataset_uuid): \ultracart\v2\models\ReportDataSetResponse
```

Get a report data set

Retrieve a report data set


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dataset_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ReportDataSetResponse**](../Model/ReportDataSetResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportDataSetPage()`

```php
getReportDataSetPage($dataset_uuid, $page_number): \ultracart\v2\models\ReportDataSetPageResponse
```

Get a report data set page

Retrieve a report data set page


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dataset_uuid** | **string**|  |
 **page_number** | **int**|  |

### Return type

[**\ultracart\v2\models\ReportDataSetPageResponse**](../Model/ReportDataSetPageResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportWebsocketAuthorization()`

```php
getReportWebsocketAuthorization(): \ultracart\v2\models\ReportAuthResponse
```

Get report websocket authorization

Retrieve a JWT to authorize a report to make a websocket connection.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ReportAuthResponse**](../Model/ReportAuthResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReports()`

```php
getReports(): \ultracart\v2\models\ReportsResponse
```

Get list of reports available

Retrieve a list of reports available


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ReportsResponse**](../Model/ReportsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertReport()`

```php
insertReport($report): \ultracart\v2\models\ReportResponse
```

Create a report

Create a new report on the UltraCart account.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report** | [**\ultracart\v2\models\Report**](../Model/Report.md)| Report to create |

### Return type

[**\ultracart\v2\models\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReport()`

```php
updateReport($report_oid, $report): \ultracart\v2\models\ReportResponse
```

Update a report

Update a report on the UltraCart account.


### Example

```php
<?php // Please see the README.md in this directory for an explanation on why there are no samples here.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_oid** | **int**| The report oid to update. |
 **report** | [**\ultracart\v2\models\Report**](../Model/Report.md)| Report to update |

### Return type

[**\ultracart\v2\models\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
