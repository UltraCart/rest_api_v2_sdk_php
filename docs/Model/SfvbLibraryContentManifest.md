# # SfvbLibraryContentManifest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**absolute_asset_urls** | [**\ultracart\v2\models\SfvbLibraryManifestFinding[]**](SfvbLibraryManifestFinding.md) | Images, fonts, stylesheets, scripts or media loaded from an absolute URL.  A shared or public entry must use relative paths so it never pulls files from another storefront or site. | [optional]
**ai_review** | [**\ultracart\v2\models\SfvbLibraryAiReview**](SfvbLibraryAiReview.md) |  | [optional]
**executable** | [**\ultracart\v2\models\SfvbLibraryManifestFinding[]**](SfvbLibraryManifestFinding.md) | Content that runs in a shopper&#39;s browser or on the server.  Script, html, embed, css and velocity elements, script in markup, Velocity, script bearing CSS and unsafe URL schemes.  An entry with any of these cannot be made public, and installing it needs an explicit acknowledgement. | [optional]
**rejected** | [**\ultracart\v2\models\SfvbLibraryManifestFinding[]**](SfvbLibraryManifestFinding.md) | Card skimming and obfuscation signals.  An entry with any is refused outright, whoever owns it. | [optional]
**secrets** | [**\ultracart\v2\models\SfvbLibraryManifestFinding[]**](SfvbLibraryManifestFinding.md) | Strings shaped like credentials, by kind only.  An entry with any cannot be shared or made public. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
