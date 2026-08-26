# # SfvbPreviewUrlResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expires_in_seconds** | **int** | Seconds until the session expires. | [optional]
**path** | **string** | Storefront path being previewed. | [optional]
**preview_session_id** | **string** | The preview session id used. | [optional]
**preview_url** | **string** | URL that renders the storefront page with the preview session&#39;s containers substituted for the stored ones. | [optional]
**requires_browser_session** | **bool** | Always true.  The preview only applies to a request carrying the UltraCart admin session cookie of the user who authorised this token.  Fetched without it, the URL returns the LIVE page with a 200 and no error, so a successful fetch is not evidence the preview was applied.  Present this URL for a human to open; do not fetch it. | [optional]
**shareable** | **bool** | Always false.  The session is keyed by individual login, so anyone else opening this URL sees the live page rather than the preview. | [optional]
**usage_note** | **string** | Plain language restatement of the two flags above, safe to show a user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
