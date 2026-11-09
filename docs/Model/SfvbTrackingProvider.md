# # SfvbTrackingProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin_path** | **string** | Where the provider is in the admin. | [optional]
**approval_needed** | **bool** | On a dry run, whether the real write needs an approved tracking_provider.change request. | [optional]
**changes** | [**\ultracart\v2\models\SfvbTrackingChange[]**](SfvbTrackingChange.md) | On a write, each setting it changed, or would change on a dry run.  Secrets read only set or cleared. | [optional]
**configured** | **bool** | True when the provider is on, which means one of its identifying fields is set. | [optional]
**consent** | [**\ultracart\v2\models\SfvbTrackingProviderConsent**](SfvbTrackingProviderConsent.md) |  | [optional]
**consent_supported** | **bool** | True when the provider can be held back until the shopper consents. | [optional]
**cost** | **string** | For google_tag_manager, what turning on Google Tag Gateway costs. | [optional]
**dry_run** | **bool** | On a write, true when nothing was saved. | [optional]
**events** | [**\ultracart\v2\models\SfvbTrackingProviderEvent[]**](SfvbTrackingProviderEvent.md) | For a provider with standard events, each one and whether it is sent. | [optional]
**fields** | [**\ultracart\v2\models\SfvbTrackingProviderField[]**](SfvbTrackingProviderField.md) | Every field, in the order the admin shows them. | [optional]
**group** | **string** | google or other, the admin tab it is on. | [optional]
**hash_sha256** | **string** | The hash of the stored settings.  A secret counts by its mask and length only.  Send it as If-Match when changing or clearing the provider. | [optional]
**key** | **string** | The provider key, such as facebook or google_analytics. | [optional]
**name** | **string** | The name the admin shows. | [optional]
**notes** | **string[]** | Anything for a person to know or do, such as a field the provider needs before it sends anything, or an OAuth connection to disconnect in the admin after a write. | [optional]
**oauth** | [**\ultracart\v2\models\SfvbTrackingProviderOauth**](SfvbTrackingProviderOauth.md) |  | [optional]
**server_side** | **string** | What the provider also sends from UltraCart&#39;s servers.  A consent gate holds back only the browser pixel, not these.  Absent when it sends nothing server side. | [optional]
**wholesale_tiers** | [**\ultracart\v2\models\SfvbTrackingWholesaleTier[]**](SfvbTrackingWholesaleTier.md) | For google_analytics, the account number per wholesale pricing tier. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
