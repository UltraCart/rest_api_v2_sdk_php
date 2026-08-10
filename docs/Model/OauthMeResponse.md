# # OauthMeResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_name** | **string** | The name of your application as the merchant approved it. | [optional]
**client_id** | **string** | Your application&#39;s client_id.  Null when authenticating with a simple key, which is not tied to an application. | [optional]
**merchant_id** | **string** | The UltraCart merchant account that authorized your application.  Stable, and the value to key your own records on. | [optional]
**merchant_name** | **string** | The account&#39;s company name, suitable for displaying to your user.  The merchant can change this, so display it rather than storing it as an identifier. | [optional]
**scopes** | **string[]** | The permissions the merchant granted.  May be narrower than the permissions your application currently requests. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
