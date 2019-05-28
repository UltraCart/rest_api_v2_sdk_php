# ultracart\v2\StorefrontApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEmailCampaign**](StorefrontApi.md#getEmailCampaign) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Get email campaign
[**getEmailCampaigns**](StorefrontApi.md#getEmailCampaigns) | **GET** /storefront/{storefront_oid}/email/campaigns | Get email campaigns
[**getEmailCampaignsWithStats**](StorefrontApi.md#getEmailCampaignsWithStats) | **GET** /storefront/{storefront_oid}/email/campaignsWithStats/{stat_days} | Get email campaigns with stats
[**getEmailCommseq**](StorefrontApi.md#getEmailCommseq) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Get email commseq
[**getEmailCommseqEmailStats**](StorefrontApi.md#getEmailCommseqEmailStats) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/emailStats/{commseq_email_uuid} | Get email communication sequence emails stats
[**getEmailCommseqStats**](StorefrontApi.md#getEmailCommseqStats) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stats | Get email communication sequence stats
[**getEmailCommseqs**](StorefrontApi.md#getEmailCommseqs) | **GET** /storefront/{storefront_oid}/email/commseqs | Get email commseqs
[**getEmailFlow**](StorefrontApi.md#getEmailFlow) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Get email flow
[**getEmailFlows**](StorefrontApi.md#getEmailFlows) | **GET** /storefront/{storefront_oid}/email/flows | Get email flows
[**getEmailList**](StorefrontApi.md#getEmailList) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Get email list
[**getEmailLists**](StorefrontApi.md#getEmailLists) | **GET** /storefront/{storefront_oid}/email/lists | Get email lists
[**getEmailSegment**](StorefrontApi.md#getEmailSegment) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Get email segment
[**getEmailSegments**](StorefrontApi.md#getEmailSegments) | **GET** /storefront/{storefront_oid}/email/segments | Get email segments
[**insertEmailCampaign**](StorefrontApi.md#insertEmailCampaign) | **POST** /storefront/{storefront_oid}/email/campaigns | Insert email campaign
[**insertEmailCommseq**](StorefrontApi.md#insertEmailCommseq) | **POST** /storefront/{storefront_oid}/email/commseqs | Insert email commseq
[**insertEmailFlow**](StorefrontApi.md#insertEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows | Insert email flow
[**insertEmailList**](StorefrontApi.md#insertEmailList) | **POST** /storefront/{storefront_oid}/email/lists | Insert email list
[**insertEmailSegment**](StorefrontApi.md#insertEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments | Insert email segment
[**startEmailCampaign**](StorefrontApi.md#startEmailCampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/start | Start email campaign
[**subscribeToEmailList**](StorefrontApi.md#subscribeToEmailList) | **PUT** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/subscribe | Subscribe customers to email list
[**updateEmailCampaign**](StorefrontApi.md#updateEmailCampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Update email campaign
[**updateEmailCommseq**](StorefrontApi.md#updateEmailCommseq) | **PUT** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Update email commseq
[**updateEmailFlow**](StorefrontApi.md#updateEmailFlow) | **PUT** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Update email flow
[**updateEmailList**](StorefrontApi.md#updateEmailList) | **PUT** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Update email list
[**updateEmailSegment**](StorefrontApi.md#updateEmailSegment) | **PUT** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Update email segment


# **getEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse getEmailCampaign($storefront_oid, $email_campaign_uuid)

Get email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_campaign_uuid = "email_campaign_uuid_example"; // string | null

try {
    $result = $api_instance->getEmailCampaign($storefront_oid, $email_campaign_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_campaign_uuid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaigns**
> \ultracart\v2\models\EmailCampaignsResponse getEmailCampaigns($storefront_oid)

Get email campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null

try {
    $result = $api_instance->getEmailCampaigns($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailCampaignsResponse**](../Model/EmailCampaignsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaignsWithStats**
> \ultracart\v2\models\EmailCampaignsResponse getEmailCampaignsWithStats($storefront_oid, $stat_days)

Get email campaigns with stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$stat_days = "stat_days_example"; // string | null

try {
    $result = $api_instance->getEmailCampaignsWithStats($storefront_oid, $stat_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaignsWithStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **stat_days** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailCampaignsResponse**](../Model/EmailCampaignsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseq**
> \ultracart\v2\models\EmailCommseqResponse getEmailCommseq($storefront_oid, $commseq_uuid)

Get email commseq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$commseq_uuid = "commseq_uuid_example"; // string | null

try {
    $result = $api_instance->getEmailCommseq($storefront_oid, $commseq_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **commseq_uuid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailCommseqResponse**](../Model/EmailCommseqResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqEmailStats**
> \ultracart\v2\models\EmailStatSummaryResponse getEmailCommseqEmailStats($storefront_oid, $commseq_uuid, $commseq_email_uuid, $days)

Get email communication sequence emails stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$commseq_uuid = "commseq_uuid_example"; // string | null
$commseq_email_uuid = "commseq_email_uuid_example"; // string | null
$days = 56; // int | null

try {
    $result = $api_instance->getEmailCommseqEmailStats($storefront_oid, $commseq_uuid, $commseq_email_uuid, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqEmailStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **commseq_uuid** | **string**| null |
 **commseq_email_uuid** | **string**| null |
 **days** | **int**| null | [optional]

### Return type

[**\ultracart\v2\models\EmailStatSummaryResponse**](../Model/EmailStatSummaryResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqStats**
> \ultracart\v2\models\EmailStatSummaryResponse getEmailCommseqStats($storefront_oid, $commseq_uuid, $days)

Get email communication sequence stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$commseq_uuid = "commseq_uuid_example"; // string | null
$days = 56; // int | null

try {
    $result = $api_instance->getEmailCommseqStats($storefront_oid, $commseq_uuid, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **commseq_uuid** | **string**| null |
 **days** | **int**| null | [optional]

### Return type

[**\ultracart\v2\models\EmailStatSummaryResponse**](../Model/EmailStatSummaryResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqs**
> \ultracart\v2\models\EmailCommseqsResponse getEmailCommseqs($storefront_oid)

Get email commseqs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null

try {
    $result = $api_instance->getEmailCommseqs($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailCommseqsResponse**](../Model/EmailCommseqsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlow**
> \ultracart\v2\models\EmailFlowResponse getEmailFlow($storefront_oid, $email_flow_uuid)

Get email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_flow_uuid = "email_flow_uuid_example"; // string | null

try {
    $result = $api_instance->getEmailFlow($storefront_oid, $email_flow_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_flow_uuid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlows**
> \ultracart\v2\models\EmailFlowsResponse getEmailFlows($storefront_oid)

Get email flows

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null

try {
    $result = $api_instance->getEmailFlows($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailFlowsResponse**](../Model/EmailFlowsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailList**
> \ultracart\v2\models\EmailListResponse getEmailList($storefront_oid, $email_list_uuid)

Get email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_list_uuid = "email_list_uuid_example"; // string | null

try {
    $result = $api_instance->getEmailList($storefront_oid, $email_list_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_list_uuid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailListResponse**](../Model/EmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailLists**
> \ultracart\v2\models\EmailListsResponse getEmailLists($storefront_oid)

Get email lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null

try {
    $result = $api_instance->getEmailLists($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailListsResponse**](../Model/EmailListsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSegment**
> \ultracart\v2\models\EmailSegmentResponse getEmailSegment($storefront_oid, $email_segment_uuid)

Get email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_segment_uuid = "email_segment_uuid_example"; // string | null

try {
    $result = $api_instance->getEmailSegment($storefront_oid, $email_segment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_segment_uuid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailSegmentResponse**](../Model/EmailSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSegments**
> \ultracart\v2\models\EmailSegmentsResponse getEmailSegments($storefront_oid)

Get email segments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null

try {
    $result = $api_instance->getEmailSegments($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |

### Return type

[**\ultracart\v2\models\EmailSegmentsResponse**](../Model/EmailSegmentsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse insertEmailCampaign($storefront_oid, $email_campaign)

Insert email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_campaign = new \ultracart\v2\models\EmailCampaign(); // \ultracart\v2\models\EmailCampaign | Email campaign

try {
    $result = $api_instance->insertEmailCampaign($storefront_oid, $email_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_campaign** | [**\ultracart\v2\models\EmailCampaign**](../Model/EmailCampaign.md)| Email campaign |

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailCommseq**
> \ultracart\v2\models\EmailCommseqResponse insertEmailCommseq($storefront_oid, $email_commseq)

Insert email commseq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_commseq = new \ultracart\v2\models\EmailCommseq(); // \ultracart\v2\models\EmailCommseq | Email commseq

try {
    $result = $api_instance->insertEmailCommseq($storefront_oid, $email_commseq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailCommseq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_commseq** | [**\ultracart\v2\models\EmailCommseq**](../Model/EmailCommseq.md)| Email commseq |

### Return type

[**\ultracart\v2\models\EmailCommseqResponse**](../Model/EmailCommseqResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailFlow**
> \ultracart\v2\models\EmailFlowResponse insertEmailFlow($storefront_oid, $email_flow)

Insert email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_flow = new \ultracart\v2\models\EmailFlow(); // \ultracart\v2\models\EmailFlow | Email flow

try {
    $result = $api_instance->insertEmailFlow($storefront_oid, $email_flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_flow** | [**\ultracart\v2\models\EmailFlow**](../Model/EmailFlow.md)| Email flow |

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailList**
> \ultracart\v2\models\EmailListResponse insertEmailList($storefront_oid, $email_list)

Insert email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_list = new \ultracart\v2\models\EmailList(); // \ultracart\v2\models\EmailList | Email list

try {
    $result = $api_instance->insertEmailList($storefront_oid, $email_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_list** | [**\ultracart\v2\models\EmailList**](../Model/EmailList.md)| Email list |

### Return type

[**\ultracart\v2\models\EmailListResponse**](../Model/EmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailSegment**
> \ultracart\v2\models\EmailSegmentResponse insertEmailSegment($storefront_oid, $email_segment)

Insert email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_segment = new \ultracart\v2\models\EmailSegment(); // \ultracart\v2\models\EmailSegment | Email segment

try {
    $result = $api_instance->insertEmailSegment($storefront_oid, $email_segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_segment** | [**\ultracart\v2\models\EmailSegment**](../Model/EmailSegment.md)| Email segment |

### Return type

[**\ultracart\v2\models\EmailSegmentResponse**](../Model/EmailSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startEmailCampaign**
> \ultracart\v2\models\BaseResponse startEmailCampaign($storefront_oid, $email_campaign_uuid)

Start email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_campaign_uuid = "email_campaign_uuid_example"; // string | null

try {
    $result = $api_instance->startEmailCampaign($storefront_oid, $email_campaign_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->startEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_campaign_uuid** | **string**| null |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeToEmailList**
> \ultracart\v2\models\EmailListSubscribeResponse subscribeToEmailList($storefront_oid, $email_list_uuid, $customers)

Subscribe customers to email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_list_uuid = "email_list_uuid_example"; // string | null
$customers = array(new \ultracart\v2\models\EmailCustomer()); // \ultracart\v2\models\EmailCustomer[] | Customers

try {
    $result = $api_instance->subscribeToEmailList($storefront_oid, $email_list_uuid, $customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->subscribeToEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_list_uuid** | **string**| null |
 **customers** | [**\ultracart\v2\models\EmailCustomer[]**](../Model/EmailCustomer.md)| Customers |

### Return type

[**\ultracart\v2\models\EmailListSubscribeResponse**](../Model/EmailListSubscribeResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse updateEmailCampaign($storefront_oid, $email_campaign_uuid, $email_campaign)

Update email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_campaign_uuid = "email_campaign_uuid_example"; // string | null
$email_campaign = new \ultracart\v2\models\EmailCampaign(); // \ultracart\v2\models\EmailCampaign | Email campaign

try {
    $result = $api_instance->updateEmailCampaign($storefront_oid, $email_campaign_uuid, $email_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_campaign_uuid** | **string**| null |
 **email_campaign** | [**\ultracart\v2\models\EmailCampaign**](../Model/EmailCampaign.md)| Email campaign |

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCommseq**
> \ultracart\v2\models\EmailCommseqResponse updateEmailCommseq($storefront_oid, $commseq_uuid, $email_commseq)

Update email commseq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$commseq_uuid = "commseq_uuid_example"; // string | null
$email_commseq = new \ultracart\v2\models\EmailCommseq(); // \ultracart\v2\models\EmailCommseq | Email commseq

try {
    $result = $api_instance->updateEmailCommseq($storefront_oid, $commseq_uuid, $email_commseq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailCommseq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **commseq_uuid** | **string**| null |
 **email_commseq** | [**\ultracart\v2\models\EmailCommseq**](../Model/EmailCommseq.md)| Email commseq |

### Return type

[**\ultracart\v2\models\EmailCommseqResponse**](../Model/EmailCommseqResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailFlow**
> \ultracart\v2\models\EmailFlowResponse updateEmailFlow($storefront_oid, $email_flow_uuid, $email_flow)

Update email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_flow_uuid = "email_flow_uuid_example"; // string | null
$email_flow = new \ultracart\v2\models\EmailFlow(); // \ultracart\v2\models\EmailFlow | Email flow

try {
    $result = $api_instance->updateEmailFlow($storefront_oid, $email_flow_uuid, $email_flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_flow_uuid** | **string**| null |
 **email_flow** | [**\ultracart\v2\models\EmailFlow**](../Model/EmailFlow.md)| Email flow |

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailList**
> \ultracart\v2\models\EmailListResponse updateEmailList($storefront_oid, $email_list_uuid, $email_list)

Update email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_list_uuid = "email_list_uuid_example"; // string | null
$email_list = new \ultracart\v2\models\EmailList(); // \ultracart\v2\models\EmailList | Email list

try {
    $result = $api_instance->updateEmailList($storefront_oid, $email_list_uuid, $email_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_list_uuid** | **string**| null |
 **email_list** | [**\ultracart\v2\models\EmailList**](../Model/EmailList.md)| Email list |

### Return type

[**\ultracart\v2\models\EmailListResponse**](../Model/EmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailSegment**
> \ultracart\v2\models\EmailSegmentResponse updateEmailSegment($storefront_oid, $email_segment_uuid, $email_segment)

Update email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ultraCartBrowserApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-browser-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-browser-key', 'Bearer');
// Configure OAuth2 access token for authorization: ultraCartOauth
ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
// Configure API key authorization: ultraCartSimpleApiKey
ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

$api_instance = new ultracart\v2\api\StorefrontApi(new \Http\Adapter\Guzzle6\Client());
$storefront_oid = "storefront_oid_example"; // string | null
$email_segment_uuid = "email_segment_uuid_example"; // string | null
$email_segment = new \ultracart\v2\models\EmailSegment(); // \ultracart\v2\models\EmailSegment | Email segment

try {
    $result = $api_instance->updateEmailSegment($storefront_oid, $email_segment_uuid, $email_segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **string**| null |
 **email_segment_uuid** | **string**| null |
 **email_segment** | [**\ultracart\v2\models\EmailSegment**](../Model/EmailSegment.md)| Email segment |

### Return type

[**\ultracart\v2\models\EmailSegmentResponse**](../Model/EmailSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

