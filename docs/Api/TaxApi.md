# ultracart\v2\TaxApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaxProviderSelfCity()**](TaxApi.md#deleteTaxProviderSelfCity) | **DELETE** /tax/providers/self/city/{city} | Deletes a Self tax provider city
[**deleteTaxProviderSelfCountry()**](TaxApi.md#deleteTaxProviderSelfCountry) | **DELETE** /tax/providers/self/country/{countryCode} | Deletes a Self tax provider country
[**deleteTaxProviderSelfCounty()**](TaxApi.md#deleteTaxProviderSelfCounty) | **DELETE** /tax/providers/self/county/{county} | Deletes a Self tax provider county
[**deleteTaxProviderSelfPostalCode()**](TaxApi.md#deleteTaxProviderSelfPostalCode) | **DELETE** /tax/providers/self/postalCode/{postal_code} | Deletes a Self tax provider postalCode
[**deleteTaxProviderSelfState()**](TaxApi.md#deleteTaxProviderSelfState) | **DELETE** /tax/providers/self/state/{stateCode} | Deletes a Self tax provider state
[**getTaxProviderAvalara()**](TaxApi.md#getTaxProviderAvalara) | **GET** /tax/providers/avalara | Retrieve the Avalara tax provider
[**getTaxProviderAvalaraCompanies()**](TaxApi.md#getTaxProviderAvalaraCompanies) | **POST** /tax/providers/avalara/companies | Returns Avalara Tax companies configured by the merchant
[**getTaxProviderAvalaraTest()**](TaxApi.md#getTaxProviderAvalaraTest) | **GET** /tax/providers/avalara/test | Attempts to connect to Avalara and returns back the response
[**getTaxProviderSelf()**](TaxApi.md#getTaxProviderSelf) | **GET** /tax/providers/self | Retrieve the Self tax provider
[**getTaxProviderSelfCountries()**](TaxApi.md#getTaxProviderSelfCountries) | **GET** /tax/providers/self/countries | Retrieve the Self tax provider countries
[**getTaxProviderSelfRegionsByCountryCode()**](TaxApi.md#getTaxProviderSelfRegionsByCountryCode) | **GET** /tax/providers/self/regions/{countryCode} | Retrieve the Self tax provider regions for a given country code
[**getTaxProviderSovos()**](TaxApi.md#getTaxProviderSovos) | **GET** /tax/providers/sovos | Retrieve the Sovos tax provider
[**getTaxProviderSovosTest()**](TaxApi.md#getTaxProviderSovosTest) | **GET** /tax/providers/sovos/test | Attempts to connect to Sovos and returns back the response
[**getTaxProviderTaxJar()**](TaxApi.md#getTaxProviderTaxJar) | **GET** /tax/providers/taxjar | Retrieve the TaxJar tax provider
[**getTaxProviderTaxJarTest()**](TaxApi.md#getTaxProviderTaxJarTest) | **GET** /tax/providers/taxjar/test | Attempts to connect to TaxJar and returns back the response
[**getTaxProviderUltraCart()**](TaxApi.md#getTaxProviderUltraCart) | **GET** /tax/providers/ultracart | Retrieve the UltraCart tax provider
[**getTaxProviders()**](TaxApi.md#getTaxProviders) | **GET** /tax/providers | Retrieve tax methods
[**setActiveTaxProvider()**](TaxApi.md#setActiveTaxProvider) | **POST** /tax/providers/setActive/{providerName} | Toggle a tax provider to active
[**updateTaxProviderAvalara()**](TaxApi.md#updateTaxProviderAvalara) | **POST** /tax/providers/avalara | Update the Avalara tax provider
[**updateTaxProviderSelf()**](TaxApi.md#updateTaxProviderSelf) | **POST** /tax/providers/self | Update the Self tax provider
[**updateTaxProviderSelfCity()**](TaxApi.md#updateTaxProviderSelfCity) | **POST** /tax/providers/self/city/{city} | Updates a Self tax provider city
[**updateTaxProviderSelfCountry()**](TaxApi.md#updateTaxProviderSelfCountry) | **POST** /tax/providers/self/country/{countryCode} | Updates a Self tax provider country
[**updateTaxProviderSelfCounty()**](TaxApi.md#updateTaxProviderSelfCounty) | **POST** /tax/providers/self/county/{county} | Updates a Self tax provider county
[**updateTaxProviderSelfPostalCode()**](TaxApi.md#updateTaxProviderSelfPostalCode) | **POST** /tax/providers/self/postalCode/{postal_code} | Updates a Self tax provider postalCode
[**updateTaxProviderSelfState()**](TaxApi.md#updateTaxProviderSelfState) | **POST** /tax/providers/self/state/{stateCode} | Updates a Self tax provider state
[**updateTaxProviderSovos()**](TaxApi.md#updateTaxProviderSovos) | **POST** /tax/providers/sovos | Update the Sovos tax provider
[**updateTaxProviderTaxJar()**](TaxApi.md#updateTaxProviderTaxJar) | **POST** /tax/providers/taxjar | Update the TaxJar tax provider
[**updateTaxProviderUltraCart()**](TaxApi.md#updateTaxProviderUltraCart) | **POST** /tax/providers/ultracart | Update the UltraCart tax provider


## `deleteTaxProviderSelfCity()`

```php
deleteTaxProviderSelfCity($city, $tax_city)
```

Deletes a Self tax provider city

Deletes a Self tax provider city.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$city = 'city_example'; // string | The city being deleted.
$tax_city = new \ultracart\v2\models\TaxCity(); // \ultracart\v2\models\TaxCity | tax city to be deleted

try {
    $apiInstance->deleteTaxProviderSelfCity($city, $tax_city);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->deleteTaxProviderSelfCity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city** | **string**| The city being deleted. |
 **tax_city** | [**\ultracart\v2\models\TaxCity**](../Model/TaxCity.md)| tax city to be deleted |

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

## `deleteTaxProviderSelfCountry()`

```php
deleteTaxProviderSelfCountry($country_code, $tax_country)
```

Deletes a Self tax provider country

Deletes a Self tax provider country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | The country code being deleted.
$tax_country = new \ultracart\v2\models\TaxCountry(); // \ultracart\v2\models\TaxCountry | tax country to be deleted

try {
    $apiInstance->deleteTaxProviderSelfCountry($country_code, $tax_country);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->deleteTaxProviderSelfCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code being deleted. |
 **tax_country** | [**\ultracart\v2\models\TaxCountry**](../Model/TaxCountry.md)| tax country to be deleted |

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

## `deleteTaxProviderSelfCounty()`

```php
deleteTaxProviderSelfCounty($county, $tax_county)
```

Deletes a Self tax provider county

Deletes a Self tax provider county.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$county = 'county_example'; // string | The county being deleted.
$tax_county = new \ultracart\v2\models\TaxCounty(); // \ultracart\v2\models\TaxCounty | tax county to be deleted

try {
    $apiInstance->deleteTaxProviderSelfCounty($county, $tax_county);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->deleteTaxProviderSelfCounty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **county** | **string**| The county being deleted. |
 **tax_county** | [**\ultracart\v2\models\TaxCounty**](../Model/TaxCounty.md)| tax county to be deleted |

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

## `deleteTaxProviderSelfPostalCode()`

```php
deleteTaxProviderSelfPostalCode($postal_code, $tax_postal_code)
```

Deletes a Self tax provider postalCode

Deletes a Self tax provider postalCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postal_code = 'postal_code_example'; // string | The postal code being deleted.
$tax_postal_code = new \ultracart\v2\models\TaxPostalCode(); // \ultracart\v2\models\TaxPostalCode | tax postal code to be deleted

try {
    $apiInstance->deleteTaxProviderSelfPostalCode($postal_code, $tax_postal_code);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->deleteTaxProviderSelfPostalCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postal_code** | **string**| The postal code being deleted. |
 **tax_postal_code** | [**\ultracart\v2\models\TaxPostalCode**](../Model/TaxPostalCode.md)| tax postal code to be deleted |

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

## `deleteTaxProviderSelfState()`

```php
deleteTaxProviderSelfState($state_code, $tax_state)
```

Deletes a Self tax provider state

Deletes a Self tax provider state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state_code = 'state_code_example'; // string | The state code being deleted.
$tax_state = new \ultracart\v2\models\TaxState(); // \ultracart\v2\models\TaxState | tax state to be deleted

try {
    $apiInstance->deleteTaxProviderSelfState($state_code, $tax_state);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->deleteTaxProviderSelfState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state_code** | **string**| The state code being deleted. |
 **tax_state** | [**\ultracart\v2\models\TaxState**](../Model/TaxState.md)| tax state to be deleted |

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

## `getTaxProviderAvalara()`

```php
getTaxProviderAvalara(): \ultracart\v2\models\TaxProviderAvalara
```

Retrieve the Avalara tax provider

Retrieves the Avalara tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderAvalara();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderAvalara: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderAvalara**](../Model/TaxProviderAvalara.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderAvalaraCompanies()`

```php
getTaxProviderAvalaraCompanies($tax_provider_avalara): \ultracart\v2\models\TaxProviderAvalaraCompaniesResult
```

Returns Avalara Tax companies configured by the merchant

Returns Avalara Tax companies configured by the merchant

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_provider_avalara = new \ultracart\v2\models\TaxProviderAvalara(); // \ultracart\v2\models\TaxProviderAvalara | TaxProviderAvalara object

try {
    $result = $apiInstance->getTaxProviderAvalaraCompanies($tax_provider_avalara);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderAvalaraCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_provider_avalara** | [**\ultracart\v2\models\TaxProviderAvalara**](../Model/TaxProviderAvalara.md)| TaxProviderAvalara object |

### Return type

[**\ultracart\v2\models\TaxProviderAvalaraCompaniesResult**](../Model/TaxProviderAvalaraCompaniesResult.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderAvalaraTest()`

```php
getTaxProviderAvalaraTest(): \ultracart\v2\models\TaxProviderTestResult
```

Attempts to connect to Avalara and returns back the response

Attempts to connect to Avalara and returns back the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderAvalaraTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderAvalaraTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderTestResult**](../Model/TaxProviderTestResult.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderSelf()`

```php
getTaxProviderSelf(): \ultracart\v2\models\TaxProviderSelf
```

Retrieve the Self tax provider

Retrieves the Self tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderSelf();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderSelf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderSelf**](../Model/TaxProviderSelf.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderSelfCountries()`

```php
getTaxProviderSelfCountries(): \ultracart\v2\models\TaxProviderSelfCountriesResponse
```

Retrieve the Self tax provider countries

Retrieves the Self tax provider countries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderSelfCountries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderSelfCountries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderSelfCountriesResponse**](../Model/TaxProviderSelfCountriesResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderSelfRegionsByCountryCode()`

```php
getTaxProviderSelfRegionsByCountryCode($country_code): \ultracart\v2\models\TaxProviderSelfRegionsResponse
```

Retrieve the Self tax provider regions for a given country code

Retrieves the Self tax provider regions for a given country code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | The country code regions desired.

try {
    $result = $apiInstance->getTaxProviderSelfRegionsByCountryCode($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderSelfRegionsByCountryCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code regions desired. |

### Return type

[**\ultracart\v2\models\TaxProviderSelfRegionsResponse**](../Model/TaxProviderSelfRegionsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderSovos()`

```php
getTaxProviderSovos(): \ultracart\v2\models\TaxProviderSovos
```

Retrieve the Sovos tax provider

Retrieves the Sovos tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderSovos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderSovos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderSovos**](../Model/TaxProviderSovos.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderSovosTest()`

```php
getTaxProviderSovosTest(): \ultracart\v2\models\TaxProviderTestResult
```

Attempts to connect to Sovos and returns back the response

Attempts to connect to Sovos and returns back the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderSovosTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderSovosTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderTestResult**](../Model/TaxProviderTestResult.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderTaxJar()`

```php
getTaxProviderTaxJar(): \ultracart\v2\models\TaxProviderTaxJar
```

Retrieve the TaxJar tax provider

Retrieves the TaxJar tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderTaxJar();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderTaxJar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderTaxJar**](../Model/TaxProviderTaxJar.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderTaxJarTest()`

```php
getTaxProviderTaxJarTest(): \ultracart\v2\models\TaxProviderTestResult
```

Attempts to connect to TaxJar and returns back the response

Attempts to connect to TaxJar and returns back the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderTaxJarTest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderTaxJarTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderTestResult**](../Model/TaxProviderTestResult.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviderUltraCart()`

```php
getTaxProviderUltraCart(): \ultracart\v2\models\TaxProviderUltraCart
```

Retrieve the UltraCart tax provider

Retrieves the UltraCart tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaxProviderUltraCart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviderUltraCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TaxProviderUltraCart**](../Model/TaxProviderUltraCart.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxProviders()`

```php
getTaxProviders($_limit, $_offset, $_expand): \ultracart\v2\models\TaxProvidersResponse
```

Retrieve tax methods

Retrieves tax methods for this account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$_limit = 100; // int | The maximum number of records to return on this one API call. (Max 200)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_expand = '_expand_example'; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getTaxProviders($_limit, $_offset, $_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->getTaxProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_limit** | **int**| The maximum number of records to return on this one API call. (Max 200) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\TaxProvidersResponse**](../Model/TaxProvidersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setActiveTaxProvider()`

```php
setActiveTaxProvider($provider_name): \ultracart\v2\models\TaxProviderActivateResult
```

Toggle a tax provider to active

Toggle a tax provider to active.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$provider_name = 'provider_name_example'; // string | The tax provider to set active.

try {
    $result = $apiInstance->setActiveTaxProvider($provider_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->setActiveTaxProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **provider_name** | **string**| The tax provider to set active. |

### Return type

[**\ultracart\v2\models\TaxProviderActivateResult**](../Model/TaxProviderActivateResult.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderAvalara()`

```php
updateTaxProviderAvalara($tax_provider_avalara): \ultracart\v2\models\TaxProviderAvalara
```

Update the Avalara tax provider

Update the Avalara tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_provider_avalara = new \ultracart\v2\models\TaxProviderAvalara(); // \ultracart\v2\models\TaxProviderAvalara | TaxProviderAvalara object

try {
    $result = $apiInstance->updateTaxProviderAvalara($tax_provider_avalara);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderAvalara: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_provider_avalara** | [**\ultracart\v2\models\TaxProviderAvalara**](../Model/TaxProviderAvalara.md)| TaxProviderAvalara object |

### Return type

[**\ultracart\v2\models\TaxProviderAvalara**](../Model/TaxProviderAvalara.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSelf()`

```php
updateTaxProviderSelf($tax_provider_self): \ultracart\v2\models\TaxProviderSelf
```

Update the Self tax provider

Update the Self tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_provider_self = new \ultracart\v2\models\TaxProviderSelf(); // \ultracart\v2\models\TaxProviderSelf | TaxProviderSelf object

try {
    $result = $apiInstance->updateTaxProviderSelf($tax_provider_self);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSelf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_provider_self** | [**\ultracart\v2\models\TaxProviderSelf**](../Model/TaxProviderSelf.md)| TaxProviderSelf object |

### Return type

[**\ultracart\v2\models\TaxProviderSelf**](../Model/TaxProviderSelf.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSelfCity()`

```php
updateTaxProviderSelfCity($city, $tax_city): \ultracart\v2\models\TaxCity
```

Updates a Self tax provider city

Updates a Self tax provider city.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$city = 'city_example'; // string | The city being updated.
$tax_city = new \ultracart\v2\models\TaxCity(); // \ultracart\v2\models\TaxCity | tax city to be updated

try {
    $result = $apiInstance->updateTaxProviderSelfCity($city, $tax_city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSelfCity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city** | **string**| The city being updated. |
 **tax_city** | [**\ultracart\v2\models\TaxCity**](../Model/TaxCity.md)| tax city to be updated |

### Return type

[**\ultracart\v2\models\TaxCity**](../Model/TaxCity.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSelfCountry()`

```php
updateTaxProviderSelfCountry($country_code, $tax_country): \ultracart\v2\models\TaxCountry
```

Updates a Self tax provider country

Updates a Self tax provider country.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = 'country_code_example'; // string | The country code being updated.
$tax_country = new \ultracart\v2\models\TaxCountry(); // \ultracart\v2\models\TaxCountry | tax country to be updated

try {
    $result = $apiInstance->updateTaxProviderSelfCountry($country_code, $tax_country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSelfCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code being updated. |
 **tax_country** | [**\ultracart\v2\models\TaxCountry**](../Model/TaxCountry.md)| tax country to be updated |

### Return type

[**\ultracart\v2\models\TaxCountry**](../Model/TaxCountry.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSelfCounty()`

```php
updateTaxProviderSelfCounty($county, $tax_county): \ultracart\v2\models\TaxCounty
```

Updates a Self tax provider county

Updates a Self tax provider county.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$county = 'county_example'; // string | The county being updated.
$tax_county = new \ultracart\v2\models\TaxCounty(); // \ultracart\v2\models\TaxCounty | tax county to be updated

try {
    $result = $apiInstance->updateTaxProviderSelfCounty($county, $tax_county);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSelfCounty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **county** | **string**| The county being updated. |
 **tax_county** | [**\ultracart\v2\models\TaxCounty**](../Model/TaxCounty.md)| tax county to be updated |

### Return type

[**\ultracart\v2\models\TaxCounty**](../Model/TaxCounty.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSelfPostalCode()`

```php
updateTaxProviderSelfPostalCode($postal_code, $tax_postal_code): \ultracart\v2\models\TaxPostalCode
```

Updates a Self tax provider postalCode

Updates a Self tax provider postalCode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postal_code = 'postal_code_example'; // string | The postal code being updated.
$tax_postal_code = new \ultracart\v2\models\TaxPostalCode(); // \ultracart\v2\models\TaxPostalCode | tax postal code to be updated

try {
    $result = $apiInstance->updateTaxProviderSelfPostalCode($postal_code, $tax_postal_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSelfPostalCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **postal_code** | **string**| The postal code being updated. |
 **tax_postal_code** | [**\ultracart\v2\models\TaxPostalCode**](../Model/TaxPostalCode.md)| tax postal code to be updated |

### Return type

[**\ultracart\v2\models\TaxPostalCode**](../Model/TaxPostalCode.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSelfState()`

```php
updateTaxProviderSelfState($state_code, $tax_state): \ultracart\v2\models\TaxState
```

Updates a Self tax provider state

Updates a Self tax provider state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state_code = 'state_code_example'; // string | The state code being updated.
$tax_state = new \ultracart\v2\models\TaxState(); // \ultracart\v2\models\TaxState | tax state to be updated

try {
    $result = $apiInstance->updateTaxProviderSelfState($state_code, $tax_state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSelfState: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **state_code** | **string**| The state code being updated. |
 **tax_state** | [**\ultracart\v2\models\TaxState**](../Model/TaxState.md)| tax state to be updated |

### Return type

[**\ultracart\v2\models\TaxState**](../Model/TaxState.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderSovos()`

```php
updateTaxProviderSovos($tax_provider_sovos): \ultracart\v2\models\TaxProviderSovos
```

Update the Sovos tax provider

Update the Sovos tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_provider_sovos = new \ultracart\v2\models\TaxProviderSovos(); // \ultracart\v2\models\TaxProviderSovos | TaxProviderSovos object

try {
    $result = $apiInstance->updateTaxProviderSovos($tax_provider_sovos);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderSovos: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_provider_sovos** | [**\ultracart\v2\models\TaxProviderSovos**](../Model/TaxProviderSovos.md)| TaxProviderSovos object |

### Return type

[**\ultracart\v2\models\TaxProviderSovos**](../Model/TaxProviderSovos.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderTaxJar()`

```php
updateTaxProviderTaxJar($tax_provider_tax_jar): \ultracart\v2\models\TaxProviderTaxJar
```

Update the TaxJar tax provider

Update the TaxJar tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_provider_tax_jar = new \ultracart\v2\models\TaxProviderTaxJar(); // \ultracart\v2\models\TaxProviderTaxJar | TaxProviderTaxJar object

try {
    $result = $apiInstance->updateTaxProviderTaxJar($tax_provider_tax_jar);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderTaxJar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_provider_tax_jar** | [**\ultracart\v2\models\TaxProviderTaxJar**](../Model/TaxProviderTaxJar.md)| TaxProviderTaxJar object |

### Return type

[**\ultracart\v2\models\TaxProviderTaxJar**](../Model/TaxProviderTaxJar.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTaxProviderUltraCart()`

```php
updateTaxProviderUltraCart($tax_provider_ultracart): \ultracart\v2\models\TaxProviderUltraCart
```

Update the UltraCart tax provider

Update the UltraCart tax provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: ultraCartOauth
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: ultraCartSimpleApiKey
$config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');


$apiInstance = new ultracart\v2\Api\TaxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_provider_ultracart = new \ultracart\v2\models\TaxProviderUltraCart(); // \ultracart\v2\models\TaxProviderUltraCart | TaxProviderUltraCart object

try {
    $result = $apiInstance->updateTaxProviderUltraCart($tax_provider_ultracart);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxApi->updateTaxProviderUltraCart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_provider_ultracart** | [**\ultracart\v2\models\TaxProviderUltraCart**](../Model/TaxProviderUltraCart.md)| TaxProviderUltraCart object |

### Return type

[**\ultracart\v2\models\TaxProviderUltraCart**](../Model/TaxProviderUltraCart.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
