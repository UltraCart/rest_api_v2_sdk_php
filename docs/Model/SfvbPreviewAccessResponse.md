# # SfvbPreviewAccessResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_url** | **string** | One time link on the storefront&#39;s own host.  Opening it in any browser, including an agent&#39;s built in browser with no UltraCart login, gets past the storefront lock and applies the preview session and theme for the rest of that browser&#39;s session, then redirects to path.  It is a credential until used, so do not paste it anywhere other than the browser that should open it. | [optional]
**expires_in_seconds** | **int** | Seconds left to open access_url.  It stops working after that, and after its first use. | [optional]
**path** | **string** | Storefront path the browser lands on, after reserved preview parameters are removed. | [optional]
**preview_session_id** | **string** | The preview session applied, when one was requested. | [optional]
**session_lifetime_seconds** | **int** | How long the browser stays in preview once access_url is opened.  The remaining life of the preview session, or eight hours when none was given.  Ending the preview session ends preview in that browser at its next page.  The user and their storefront permission are checked again on every page, so removing either ends it sooner. | [optional]
**single_use** | **bool** | Always true.  A second open of access_url returns 410. | [optional]
**theme_oid** | **int** | The theme shown, when one was requested. | [optional]
**usage_note** | **string** | Plain language instructions, safe to show a user. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
