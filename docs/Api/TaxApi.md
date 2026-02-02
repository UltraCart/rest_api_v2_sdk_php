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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
// The TaxRestApi is used internally by UltraCart for our own UI.
// We don't know of a use-case for merchants to use this API in their own automation,
// but it's a public part of our REST API.
//
// We're not including any examples for using the Tax Api, but if you find yourself needing it for some reason,
// contact us and we'll assist.  But again, we doubt merchants will ever have a need for this API.
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
