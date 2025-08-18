# ultracart\v2\DatawarehouseApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomDashboard**](DatawarehouseApi.md#deleteCustomDashboard) | **DELETE** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Delete a custom dashboard
[**deleteCustomDashboardSchedule**](DatawarehouseApi.md#deleteCustomDashboardSchedule) | **DELETE** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules/{custom_dashboard_schedule_oid} | Delete a custom dashboard schedule
[**deleteCustomReport**](DatawarehouseApi.md#deleteCustomReport) | **DELETE** /datawarehouse/custom_reports/{custom_report_oid} | Delete a custom report
[**deleteReport**](DatawarehouseApi.md#deleteReport) | **DELETE** /datawarehouse/reports/{report_oid} | Delete a report
[**dryRunReportQueries**](DatawarehouseApi.md#dryRunReportQueries) | **PUT** /datawarehouse/reports/dryrun | Dry run the report queries
[**executeCustomReport**](DatawarehouseApi.md#executeCustomReport) | **PUT** /datawarehouse/custom_reports/{custom_report_oid}/execute | Execute a custom report
[**executeCustomReports**](DatawarehouseApi.md#executeCustomReports) | **PUT** /datawarehouse/custom_reports/execute | Execute a custom reports
[**executeReportQueries**](DatawarehouseApi.md#executeReportQueries) | **PUT** /datawarehouse/reports/execute | Execute the report queries
[**getCustomDashboard**](DatawarehouseApi.md#getCustomDashboard) | **GET** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Get a custom dashboard
[**getCustomDashboardSchedules**](DatawarehouseApi.md#getCustomDashboardSchedules) | **GET** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules | Get custom dashboards
[**getCustomDashboards**](DatawarehouseApi.md#getCustomDashboards) | **GET** /datawarehouse/custom_dashboards | Get custom dashboards
[**getCustomReport**](DatawarehouseApi.md#getCustomReport) | **GET** /datawarehouse/custom_reports/{custom_report_oid} | Get a custom report
[**getCustomReportAccountConfig**](DatawarehouseApi.md#getCustomReportAccountConfig) | **GET** /datawarehouse/custom_reports/account_config | Get custom report account configuration
[**getCustomReports**](DatawarehouseApi.md#getCustomReports) | **GET** /datawarehouse/custom_reports | Get custom reports
[**getReport**](DatawarehouseApi.md#getReport) | **GET** /datawarehouse/reports/{report_oid} | Get a report
[**getReportDataSet**](DatawarehouseApi.md#getReportDataSet) | **GET** /datawarehouse/reports/dataset/{dataset_uuid} | Get a report data set
[**getReportDataSetPage**](DatawarehouseApi.md#getReportDataSetPage) | **GET** /datawarehouse/reports/dataset/{dataset_uuid}/pages/{page_number} | Get a report data set page
[**getReportWebsocketAuthorization**](DatawarehouseApi.md#getReportWebsocketAuthorization) | **PUT** /datawarehouse/reports/auth | Get report websocket authorization
[**getReports**](DatawarehouseApi.md#getReports) | **GET** /datawarehouse/reports | Get list of reports available
[**insertCustomDashboard**](DatawarehouseApi.md#insertCustomDashboard) | **POST** /datawarehouse/custom_dashboards | Create a custom dashboard
[**insertCustomDashboardSchedule**](DatawarehouseApi.md#insertCustomDashboardSchedule) | **POST** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules | Create a custom dashboard schedule
[**insertCustomReport**](DatawarehouseApi.md#insertCustomReport) | **POST** /datawarehouse/custom_reports | Create a custom report
[**insertReport**](DatawarehouseApi.md#insertReport) | **POST** /datawarehouse/reports | Create a report
[**updateCustomDashboard**](DatawarehouseApi.md#updateCustomDashboard) | **PUT** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Update a custom dashboard
[**updateCustomDashboardSchedule**](DatawarehouseApi.md#updateCustomDashboardSchedule) | **PUT** /datawarehouse/custom_dashboards/{custom_dashboard_oid}/schedules/{custom_dashboard_schedule_oid} | Update a custom dashboard schedule
[**updateCustomReport**](DatawarehouseApi.md#updateCustomReport) | **PUT** /datawarehouse/custom_reports/{custom_report_oid} | Update a custom report
[**updateCustomReportAccountConfig**](DatawarehouseApi.md#updateCustomReportAccountConfig) | **PUT** /datawarehouse/custom_reports/account_config | Update custom report account config
[**updateReport**](DatawarehouseApi.md#updateReport) | **PUT** /datawarehouse/reports/{report_oid} | Update a report


# **deleteCustomDashboard**
> deleteCustomDashboard($custom_dashboard_oid)

Delete a custom dashboard

Delete a custom dashboard on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_dashboard_oid = 56; // int | The dashboard oid to delete.

try {
    $apiInstance->deleteCustomDashboard($custom_dashboard_oid);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->deleteCustomDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**| The dashboard oid to delete. |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomDashboardSchedule**
> deleteCustomDashboardSchedule($custom_dashboard_schedule_oid, $custom_dashboard_oid)

Delete a custom dashboard schedule

delete a custom dashboard schedule on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_dashboard_schedule_oid = 56; // int | The dashboard schedule oid to delete.
$custom_dashboard_oid = 56; // int | The dashboard oid that owns the schedule.

try {
    $apiInstance->deleteCustomDashboardSchedule($custom_dashboard_schedule_oid, $custom_dashboard_oid);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->deleteCustomDashboardSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomReport**
> deleteCustomReport($custom_report_oid)

Delete a custom report

Delete a custom report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_report_oid = 56; // int | The report oid to delete.

try {
    $apiInstance->deleteCustomReport($custom_report_oid);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->deleteCustomReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_report_oid** | **int**| The report oid to delete. |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteReport**
> deleteReport($report_oid)

Delete a report

Delete a report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$report_oid = 56; // int | The report oid to delete.

try {
    $apiInstance->deleteReport($report_oid);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->deleteReport: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dryRunReportQueries**
> \ultracart\v2\models\ReportDryRunQueriesResponse dryRunReportQueries($query_request)

Dry run the report queries

Dry run the report queries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$query_request = new \ultracart\v2\models\ReportDryRunQueriesRequest(); // \ultracart\v2\models\ReportDryRunQueriesRequest | Dry run request

try {
    $result = $apiInstance->dryRunReportQueries($query_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->dryRunReportQueries: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeCustomReport**
> \ultracart\v2\models\CustomReportExecutionResponse executeCustomReport($execution_request, $custom_report_oid)

Execute a custom report

Execute a custom report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$execution_request = new \ultracart\v2\models\CustomReportExecutionRequest(); // \ultracart\v2\models\CustomReportExecutionRequest | Request to execute custom report
$custom_report_oid = 56; // int | The report oid to execute.

try {
    $result = $apiInstance->executeCustomReport($execution_request, $custom_report_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->executeCustomReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **execution_request** | [**\ultracart\v2\models\CustomReportExecutionRequest**](../Model/CustomReportExecutionRequest.md)| Request to execute custom report |
 **custom_report_oid** | **int**| The report oid to execute. |

### Return type

[**\ultracart\v2\models\CustomReportExecutionResponse**](../Model/CustomReportExecutionResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeCustomReports**
> \ultracart\v2\models\CustomReportsExecutionResponse executeCustomReports($execution_request)

Execute a custom reports

Execute a custom reports on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$execution_request = new \ultracart\v2\models\CustomReportsExecutionRequest(); // \ultracart\v2\models\CustomReportsExecutionRequest | Request to execute custom reports

try {
    $result = $apiInstance->executeCustomReports($execution_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->executeCustomReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **execution_request** | [**\ultracart\v2\models\CustomReportsExecutionRequest**](../Model/CustomReportsExecutionRequest.md)| Request to execute custom reports |

### Return type

[**\ultracart\v2\models\CustomReportsExecutionResponse**](../Model/CustomReportsExecutionResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **executeReportQueries**
> executeReportQueries($query_request)

Execute the report queries

Execute the report queries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$query_request = new \ultracart\v2\models\ReportExecuteQueriesRequest(); // \ultracart\v2\models\ReportExecuteQueriesRequest | Query request

try {
    $apiInstance->executeReportQueries($query_request);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->executeReportQueries: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomDashboard**
> \ultracart\v2\models\CustomDashboardResponse getCustomDashboard($custom_dashboard_oid)

Get a custom dashboard

Retrieve a custom dashboard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_dashboard_oid = 56; // int | 

try {
    $result = $apiInstance->getCustomDashboard($custom_dashboard_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getCustomDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomDashboardSchedules**
> \ultracart\v2\models\CustomDashboardSchedulesResponse getCustomDashboardSchedules($custom_dashboard_oid)

Get custom dashboards

Retrieve a custom dashboards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_dashboard_oid = 56; // int | 

try {
    $result = $apiInstance->getCustomDashboardSchedules($custom_dashboard_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getCustomDashboardSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_dashboard_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CustomDashboardSchedulesResponse**](../Model/CustomDashboardSchedulesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomDashboards**
> \ultracart\v2\models\CustomDashboardsResponse getCustomDashboards()

Get custom dashboards

Retrieve a custom dashboards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getCustomDashboards();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getCustomDashboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomDashboardsResponse**](../Model/CustomDashboardsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomReport**
> \ultracart\v2\models\CustomReportResponse getCustomReport($custom_report_oid)

Get a custom report

Retrieve a custom report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_report_oid = 56; // int | 

try {
    $result = $apiInstance->getCustomReport($custom_report_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getCustomReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_report_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CustomReportResponse**](../Model/CustomReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomReportAccountConfig**
> \ultracart\v2\models\CustomReportAccountConfigResponse getCustomReportAccountConfig()

Get custom report account configuration

Retrieve a custom report account configuration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getCustomReportAccountConfig();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getCustomReportAccountConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomReportAccountConfigResponse**](../Model/CustomReportAccountConfigResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomReports**
> \ultracart\v2\models\CustomReportsResponse getCustomReports()

Get custom reports

Retrieve a custom reports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getCustomReports();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getCustomReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\CustomReportsResponse**](../Model/CustomReportsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReport**
> \ultracart\v2\models\ReportResponse getReport($report_oid)

Get a report

Retrieve a report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$report_oid = 56; // int | 

try {
    $result = $apiInstance->getReport($report_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getReport: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportDataSet**
> \ultracart\v2\models\ReportDataSetResponse getReportDataSet($dataset_uuid)

Get a report data set

Retrieve a report data set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$dataset_uuid = "dataset_uuid_example"; // string | 

try {
    $result = $apiInstance->getReportDataSet($dataset_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getReportDataSet: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportDataSetPage**
> \ultracart\v2\models\ReportDataSetPageResponse getReportDataSetPage($dataset_uuid, $page_number)

Get a report data set page

Retrieve a report data set page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$dataset_uuid = "dataset_uuid_example"; // string | 
$page_number = 56; // int | 

try {
    $result = $apiInstance->getReportDataSetPage($dataset_uuid, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getReportDataSetPage: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportWebsocketAuthorization**
> \ultracart\v2\models\ReportAuthResponse getReportWebsocketAuthorization()

Get report websocket authorization

Retrieve a JWT to authorize a report to make a websocket connection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getReportWebsocketAuthorization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getReportWebsocketAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ReportAuthResponse**](../Model/ReportAuthResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReports**
> \ultracart\v2\models\ReportsResponse getReports()

Get list of reports available

Retrieve a list of reports available

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getReports();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->getReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\ReportsResponse**](../Model/ReportsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertCustomDashboard**
> \ultracart\v2\models\CustomDashboardResponse insertCustomDashboard($dashboard)

Create a custom dashboard

Create a new custom dashboard on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$dashboard = new \ultracart\v2\models\CustomDashboard(); // \ultracart\v2\models\CustomDashboard | Dashboard to create

try {
    $result = $apiInstance->insertCustomDashboard($dashboard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->insertCustomDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard** | [**\ultracart\v2\models\CustomDashboard**](../Model/CustomDashboard.md)| Dashboard to create |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertCustomDashboardSchedule**
> \ultracart\v2\models\CustomDashboardScheduleResponse insertCustomDashboardSchedule($custom_dashboard_oid, $dashboard_schedule)

Create a custom dashboard schedule

Create a new custom dashboard schedule on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$custom_dashboard_oid = 56; // int | 
$dashboard_schedule = new \ultracart\v2\models\CustomDashboardSchedule(); // \ultracart\v2\models\CustomDashboardSchedule | Dashboard schedule to create

try {
    $result = $apiInstance->insertCustomDashboardSchedule($custom_dashboard_oid, $dashboard_schedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->insertCustomDashboardSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertCustomReport**
> \ultracart\v2\models\CustomReportResponse insertCustomReport($report)

Create a custom report

Create a new custom report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$report = new \ultracart\v2\models\CustomReport(); // \ultracart\v2\models\CustomReport | Report to create

try {
    $result = $apiInstance->insertCustomReport($report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->insertCustomReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report** | [**\ultracart\v2\models\CustomReport**](../Model/CustomReport.md)| Report to create |

### Return type

[**\ultracart\v2\models\CustomReportResponse**](../Model/CustomReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertReport**
> \ultracart\v2\models\ReportResponse insertReport($report)

Create a report

Create a new report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$report = new \ultracart\v2\models\Report(); // \ultracart\v2\models\Report | Report to create

try {
    $result = $apiInstance->insertReport($report);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->insertReport: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomDashboard**
> \ultracart\v2\models\CustomDashboardResponse updateCustomDashboard($dashboard, $custom_dashboard_oid)

Update a custom dashboard

Update a custom dashboard on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$dashboard = new \ultracart\v2\models\CustomDashboard(); // \ultracart\v2\models\CustomDashboard | Dashboard to custom update
$custom_dashboard_oid = 56; // int | The dashboard oid to custom update.

try {
    $result = $apiInstance->updateCustomDashboard($dashboard, $custom_dashboard_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->updateCustomDashboard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard** | [**\ultracart\v2\models\CustomDashboard**](../Model/CustomDashboard.md)| Dashboard to custom update |
 **custom_dashboard_oid** | **int**| The dashboard oid to custom update. |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomDashboardSchedule**
> \ultracart\v2\models\CustomDashboardResponse updateCustomDashboardSchedule($dashboard_schedule, $custom_dashboard_schedule_oid, $custom_dashboard_oid)

Update a custom dashboard schedule

Update a custom dashboard schedule on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$dashboard_schedule = new \ultracart\v2\models\CustomDashboardSchedule(); // \ultracart\v2\models\CustomDashboardSchedule | Dashboard schedule to update
$custom_dashboard_schedule_oid = 56; // int | The dashboard schedule oid to update.
$custom_dashboard_oid = 56; // int | The dashboard oid to update.

try {
    $result = $apiInstance->updateCustomDashboardSchedule($dashboard_schedule, $custom_dashboard_schedule_oid, $custom_dashboard_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->updateCustomDashboardSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dashboard_schedule** | [**\ultracart\v2\models\CustomDashboardSchedule**](../Model/CustomDashboardSchedule.md)| Dashboard schedule to update |
 **custom_dashboard_schedule_oid** | **int**| The dashboard schedule oid to update. |
 **custom_dashboard_oid** | **int**| The dashboard oid to update. |

### Return type

[**\ultracart\v2\models\CustomDashboardResponse**](../Model/CustomDashboardResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomReport**
> \ultracart\v2\models\CustomReportResponse updateCustomReport($report, $custom_report_oid)

Update a custom report

Update a custom report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$report = new \ultracart\v2\models\CustomReport(); // \ultracart\v2\models\CustomReport | Report to custom update
$custom_report_oid = 56; // int | The report oid to custom update.

try {
    $result = $apiInstance->updateCustomReport($report, $custom_report_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->updateCustomReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report** | [**\ultracart\v2\models\CustomReport**](../Model/CustomReport.md)| Report to custom update |
 **custom_report_oid** | **int**| The report oid to custom update. |

### Return type

[**\ultracart\v2\models\CustomReportResponse**](../Model/CustomReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomReportAccountConfig**
> \ultracart\v2\models\CustomReportAccountConfigResponse updateCustomReportAccountConfig($account_config)

Update custom report account config

Update custom report account config.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$account_config = new \ultracart\v2\models\CustomReportAccountConfig(); // \ultracart\v2\models\CustomReportAccountConfig | Account config to update

try {
    $result = $apiInstance->updateCustomReportAccountConfig($account_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->updateCustomReportAccountConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_config** | [**\ultracart\v2\models\CustomReportAccountConfig**](../Model/CustomReportAccountConfig.md)| Account config to update |

### Return type

[**\ultracart\v2\models\CustomReportAccountConfigResponse**](../Model/CustomReportAccountConfigResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateReport**
> \ultracart\v2\models\ReportResponse updateReport($report, $report_oid)

Update a report

Update a report on the UltraCart account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\DatawarehouseApi::usingApiKey($simple_key);

$report = new \ultracart\v2\models\Report(); // \ultracart\v2\models\Report | Report to update
$report_oid = 56; // int | The report oid to update.

try {
    $result = $apiInstance->updateReport($report, $report_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatawarehouseApi->updateReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report** | [**\ultracart\v2\models\Report**](../Model/Report.md)| Report to update |
 **report_oid** | **int**| The report oid to update. |

### Return type

[**\ultracart\v2\models\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json; charset=UTF-8
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

