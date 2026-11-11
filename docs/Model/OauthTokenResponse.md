# # OauthTokenResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_token** | **string** | Access token to use in OAuth authenticated API call | [optional]
**error** | **string** |  | [optional]
**error_code** | **string** | With error access_denied, a machine readable reason.  sfvb.beta_access_required means the account isn&#39;t enabled for the StoreFront CLI beta, not that a person clicked Deny. | [optional]
**error_description** | **string** |  | [optional]
**error_uri** | **string** |  | [optional]
**expires_in** | **string** | The number of seconds since issuance when the access token will expire and need to be refreshed using the refresh token | [optional]
**merchant_id** | **string** | The UltraCart merchant account that authorized this token.  Use it to map the token to the merchant within your own system.  Also returned by GET /oauth/me along with the account name. | [optional]
**minimum_version** | **string** | With error_code sfvb.cli_upgrade_required, the lowest StoreFront CLI version the server supports. | [optional]
**object_id** | **string** | With error_code sfvb.beta_access_required, the merchant id that was refused. | [optional]
**recommended_version** | **string** | With error_code sfvb.cli_upgrade_required, the StoreFront CLI version to install. | [optional]
**refresh_token** | **string** | The refresh token that should be used to fetch a new access token when the expiration occurs | [optional]
**refresh_token_expires_in** | **string** | Seconds until the refresh token expires.  Returned only by applications that rotate refresh tokens, which return a new refresh token on every refresh. | [optional]
**scope** | **string** | The scope of permissions associated with teh access token | [optional]
**token_type** | **string** | Type of token | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
