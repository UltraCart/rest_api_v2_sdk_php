# # SfvbRedirectResolveResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**final_path** | **string** | Where the shopper ends up.  The storefront sends them straight there in one redirect. | [optional]
**final_status** | **string** | The status the shopper gets, 301, 302, rewrite, or none when no rule matches. | [optional]
**lands_on** | **string** | live_page, hidden_page, item, not_found or other (a file or system path). | [optional]
**path** | **string** | The path asked about. | [optional]
**steps** | [**\ultracart\v2\models\SfvbRedirectResolveStep[]**](SfvbRedirectResolveStep.md) | Each redirect followed, in order.  Empty when no rule matches. | [optional]
**too_long** | **bool** | True when the chain is longer than the storefront follows. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
