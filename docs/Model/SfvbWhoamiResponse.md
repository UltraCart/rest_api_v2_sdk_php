# # SfvbWhoamiResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acting_as_user** | **bool** | True when this token resolves to a merchant user.  Preview sessions and file writes need one, because they are recorded against the person who approved the token.  Only device flow tokens resolve a user, so a plain API key will see this false. | [optional]
**application_name** | **string** | Description of the application this credential belongs to. | [optional]
**authentication_type** | **string** | How this token authenticated - Oauth2, Simple Key, Public/Private Key or Browser Key. | [optional]
**device_scope** | **string** | Device scope name, when this is a device flow token. | [optional]
**login** | **string** | Login of the user who approved this token.  Populated for device flow tokens; null for plain API key credentials. | [optional]
**merchant_id** | **string** | Merchant id this token acts against. | [optional]
**scopes** | **string[]** | Scopes granted to this token. | [optional]
**storefronts** | [**\ultracart\v2\models\SfvbStorefront[]**](SfvbStorefront.md) | Storefronts reachable with this token.  Empty unless the token holds sfvb_read, because storefront inventory is resource data rather than identity. | [optional]
**storefronts_withheld** | **bool** | True when storefronts was emptied because the token lacks sfvb_read, rather than because the account has none.  Without this the two look identical. | [optional]
**user_name** | **string** | Display name of the approving user, when known. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
