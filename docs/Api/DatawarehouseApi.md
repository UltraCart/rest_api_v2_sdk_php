# ultracart\v2\DatawarehouseApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteReport**](DatawarehouseApi.md#deleteReport) | **DELETE** /datawarehouse/reports/{report_oid} | Delete a report
[**executeReportQueries**](DatawarehouseApi.md#executeReportQueries) | **PUT** /datawarehouse/reports/execute | Execute the report queries
[**getReport**](DatawarehouseApi.md#getReport) | **GET** /datawarehouse/reports/{report_oid} | Get a report
[**getReportDataSet**](DatawarehouseApi.md#getReportDataSet) | **GET** /datawarehouse/reports/dataset/{dataset_uuid} | Get a report data set
[**getReportDataSetPage**](DatawarehouseApi.md#getReportDataSetPage) | **GET** /datawarehouse/reports/dataset/{dataset_uuid}/pages/{page_number} | Get a report data set page
[**getReportWebsocketAuthorization**](DatawarehouseApi.md#getReportWebsocketAuthorization) | **PUT** /datawarehouse/reports/auth | Get report websocket authorization
[**getReports**](DatawarehouseApi.md#getReports) | **GET** /datawarehouse/reports | Get list of reports available
[**insertReport**](DatawarehouseApi.md#insertReport) | **POST** /datawarehouse/reports | Create a report
[**updateReport**](DatawarehouseApi.md#updateReport) | **PUT** /datawarehouse/reports/{report_oid} | Update a report


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

