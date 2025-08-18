# ultracart\v2\DatawarehouseApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomDashboard()**](DatawarehouseApi.md#deleteCustomDashboard) | **DELETE** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Delete a custom dashboard
[**deleteCustomDashboardSchedule()**](DatawarehouseApi.md#deleteCustomDashboardSchedule) | **DELETE** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules/{custom_dashboard_schedule_oid} | Delete a custom dashboard schedule
[**deleteCustomReport()**](DatawarehouseApi.md#deleteCustomReport) | **DELETE** /datawarehouse/custom_reports/{custom_report_oid} | Delete a custom report
[**deleteReport()**](DatawarehouseApi.md#deleteReport) | **DELETE** /datawarehouse/reports/{report_oid} | Delete a report
[**dryRunReportQueries()**](DatawarehouseApi.md#dryRunReportQueries) | **PUT** /datawarehouse/reports/dryrun | Dry run the report queries
[**executeCustomReport()**](DatawarehouseApi.md#executeCustomReport) | **PUT** /datawarehouse/custom_reports/{custom_report_oid}/execute | Execute a custom report
[**executeCustomReports()**](DatawarehouseApi.md#executeCustomReports) | **PUT** /datawarehouse/custom_reports/execute | Execute a custom reports
[**executeReportQueries()**](DatawarehouseApi.md#executeReportQueries) | **PUT** /datawarehouse/reports/execute | Execute the report queries
[**getCustomDashboard()**](DatawarehouseApi.md#getCustomDashboard) | **GET** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Get a custom dashboard
[**getCustomDashboardSchedules()**](DatawarehouseApi.md#getCustomDashboardSchedules) | **GET** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules | Get custom dashboards
[**getCustomDashboards()**](DatawarehouseApi.md#getCustomDashboards) | **GET** /datawarehouse/custom_dashboards | Get custom dashboards
[**getCustomReport()**](DatawarehouseApi.md#getCustomReport) | **GET** /datawarehouse/custom_reports/{custom_report_oid} | Get a custom report
[**getCustomReportAccountConfig()**](DatawarehouseApi.md#getCustomReportAccountConfig) | **GET** /datawarehouse/custom_reports/account_config | Get custom report account configuration
[**getCustomReports()**](DatawarehouseApi.md#getCustomReports) | **GET** /datawarehouse/custom_reports | Get custom reports
[**getReport()**](DatawarehouseApi.md#getReport) | **GET** /datawarehouse/reports/{report_oid} | Get a report
[**getReportDataSet()**](DatawarehouseApi.md#getReportDataSet) | **GET** /datawarehouse/reports/dataset/{dataset_uuid} | Get a report data set
[**getReportDataSetPage()**](DatawarehouseApi.md#getReportDataSetPage) | **GET** /datawarehouse/reports/dataset/{dataset_uuid}/pages/{page_number} | Get a report data set page
[**getReportWebsocketAuthorization()**](DatawarehouseApi.md#getReportWebsocketAuthorization) | **PUT** /datawarehouse/reports/auth | Get report websocket authorization
[**getReports()**](DatawarehouseApi.md#getReports) | **GET** /datawarehouse/reports | Get list of reports available
[**insertCustomDashboard()**](DatawarehouseApi.md#insertCustomDashboard) | **POST** /datawarehouse/custom_dashboards | Create a custom dashboard
[**insertCustomDashboardSchedule()**](DatawarehouseApi.md#insertCustomDashboardSchedule) | **POST** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules | Create a custom dashboard schedule
[**insertCustomReport()**](DatawarehouseApi.md#insertCustomReport) | **POST** /datawarehouse/custom_reports | Create a custom report
[**insertReport()**](DatawarehouseApi.md#insertReport) | **POST** /datawarehouse/reports | Create a report
[**updateCustomDashboard()**](DatawarehouseApi.md#updateCustomDashboard) | **PUT** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Update a custom dashboard
[**updateCustomDashboardSchedule()**](DatawarehouseApi.md#updateCustomDashboardSchedule) | **PUT** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules/{custom_dashboard_schedule_oid} | Update a custom dashboard schedule
[**updateCustomReport()**](DatawarehouseApi.md#updateCustomReport) | **PUT** /datawarehouse/custom_reports/{custom_report_oid} | Update a custom report
[**updateCustomReportAccountConfig()**](DatawarehouseApi.md#updateCustomReportAccountConfig) | **PUT** /datawarehouse/custom_reports/account_config | Update custom report account config
[**updateReport()**](DatawarehouseApi.md#updateReport) | **PUT** /datawarehouse/reports/{report_oid} | Update a report


## `deleteCustomDashboard()`

```php
deleteCustomDashboard($custom_dashboard_oid)
```

Delete a custom dashboard

Delete a custom dashboard on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**| The dashboard oid to delete. |

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

## `deleteCustomDashboardSchedule()`

```php
deleteCustomDashboardSchedule($custom_dashboard_schedule_oid, $custom_dashboard_oid)
```

Delete a custom dashboard schedule

delete a custom dashboard schedule on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_schedule_oid** | **int**| The dashboard schedule oid to delete. |
 **custom_dashboard_oid** | **int**| The dashboard oid that owns the schedule. |

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

## `deleteCustomReport()`

```php
deleteCustomReport($custom_report_oid)
```

Delete a custom report

Delete a custom report on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_report_oid** | **int**| The report oid to delete. |

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

## `executeCustomReport()`

```php
executeCustomReport($custom_report_oid, $execution_request): \ultracart\v2\models\CustomReportExecutionResponse
```

Execute a custom report

Execute a custom report on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_report_oid** | **int**| The report oid to execute. |
 **execution_request** | [**\ultracart\v2\models\CustomReportExecutionRequest**](../Model/CustomReportExecutionRequest.md)| Request to execute custom report |

### Return type

[**\ultracart\v2\models\CustomReportExecutionResponse**](../Model/CustomReportExecutionResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `executeCustomReports()`

```php
executeCustomReports($execution_request): \ultracart\v2\models\CustomReportsExecutionResponse
```

Execute a custom reports

Execute a custom reports on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **execution_request** | [**\ultracart\v2\models\CustomReportsExecutionRequest**](../Model/CustomReportsExecutionRequest.md)| Request to execute custom reports |

### Return type

[**\ultracart\v2\models\CustomReportsExecutionResponse**](../Model/CustomReportsExecutionResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
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

## `getCustomDashboard()`

```php
getCustomDashboard($custom_dashboard_oid): \ultracart\v2\models\CustomDashboardResponse
```

Get a custom dashboard

Retrieve a custom dashboard


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomDashboardSchedules()`

```php
getCustomDashboardSchedules($custom_dashboard_oid): \ultracart\v2\models\CustomDashboardSchedulesResponse
```

Get custom dashboards

Retrieve a custom dashboards


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CustomDashboardSchedulesResponse**](../Model/CustomDashboardSchedulesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomDashboards()`

```php
getCustomDashboards(): \ultracart\v2\models\CustomDashboardsResponse
```

Get custom dashboards

Retrieve a custom dashboards


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomDashboardsResponse**](../Model/CustomDashboardsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomReport()`

```php
getCustomReport($custom_report_oid): \ultracart\v2\models\CustomReportResponse
```

Get a custom report

Retrieve a custom report


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_report_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CustomReportResponse**](../Model/CustomReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomReportAccountConfig()`

```php
getCustomReportAccountConfig(): \ultracart\v2\models\CustomReportAccountConfigResponse
```

Get custom report account configuration

Retrieve a custom report account configuration


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomReportAccountConfigResponse**](../Model/CustomReportAccountConfigResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomReports()`

```php
getCustomReports(): \ultracart\v2\models\CustomReportsResponse
```

Get custom reports

Retrieve a custom reports


### Example


(No example for this operation).


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomReportsResponse**](../Model/CustomReportsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
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

## `insertCustomDashboard()`

```php
insertCustomDashboard($dashboard): \ultracart\v2\models\CustomDashboardResponse
```

Create a custom dashboard

Create a new custom dashboard on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard** | [**\ultracart\v2\models\CustomDashboard**](../Model/CustomDashboard.md)| Dashboard to create |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertCustomDashboardSchedule()`

```php
insertCustomDashboardSchedule($custom_dashboard_oid, $dashboard_schedule): \ultracart\v2\models\CustomDashboardScheduleResponse
```

Create a custom dashboard schedule

Create a new custom dashboard schedule on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**|  |
 **dashboard_schedule** | [**\ultracart\v2\models\CustomDashboardSchedule**](../Model/CustomDashboardSchedule.md)| Dashboard schedule to create |

### Return type

[**\ultracart\v2\models\CustomDashboardScheduleResponse**](../Model/CustomDashboardScheduleResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertCustomReport()`

```php
insertCustomReport($report): \ultracart\v2\models\CustomReportResponse
```

Create a custom report

Create a new custom report on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report** | [**\ultracart\v2\models\CustomReport**](../Model/CustomReport.md)| Report to create |

### Return type

[**\ultracart\v2\models\CustomReportResponse**](../Model/CustomReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
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

## `updateCustomDashboard()`

```php
updateCustomDashboard($custom_dashboard_oid, $dashboard): \ultracart\v2\models\CustomDashboardResponse
```

Update a custom dashboard

Update a custom dashboard on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**| The dashboard oid to custom update. |
 **dashboard** | [**\ultracart\v2\models\CustomDashboard**](../Model/CustomDashboard.md)| Dashboard to custom update |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomDashboardSchedule()`

```php
updateCustomDashboardSchedule($custom_dashboard_schedule_oid, $custom_dashboard_oid, $dashboard_schedule): \ultracart\v2\models\CustomDashboardResponse
```

Update a custom dashboard schedule

Update a custom dashboard schedule on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_schedule_oid** | **int**| The dashboard schedule oid to update. |
 **custom_dashboard_oid** | **int**| The dashboard oid to update. |
 **dashboard_schedule** | [**\ultracart\v2\models\CustomDashboardSchedule**](../Model/CustomDashboardSchedule.md)| Dashboard schedule to update |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomReport()`

```php
updateCustomReport($custom_report_oid, $report): \ultracart\v2\models\CustomReportResponse
```

Update a custom report

Update a custom report on the UltraCart account.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_report_oid** | **int**| The report oid to custom update. |
 **report** | [**\ultracart\v2\models\CustomReport**](../Model/CustomReport.md)| Report to custom update |

### Return type

[**\ultracart\v2\models\CustomReportResponse**](../Model/CustomReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomReportAccountConfig()`

```php
updateCustomReportAccountConfig($account_config): \ultracart\v2\models\CustomReportAccountConfigResponse
```

Update custom report account config

Update custom report account config.


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_config** | [**\ultracart\v2\models\CustomReportAccountConfig**](../Model/CustomReportAccountConfig.md)| Account config to update |

### Return type

[**\ultracart\v2\models\CustomReportAccountConfigResponse**](../Model/CustomReportAccountConfigResponse.md)

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
