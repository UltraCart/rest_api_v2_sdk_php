# # SfvbTrackingProviderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_cost** | **bool** | True to accept the cost of turning on Google Tag Gateway.  Required to turn it on. | [optional]
**consent** | [**\ultracart\v2\models\SfvbTrackingProviderConsent**](SfvbTrackingProviderConsent.md) |  | [optional]
**dry_run** | **bool** | True to check the change and report it without saving. | [optional]
**events** | **object** | Standard events by name, true to send. | [optional]
**fields** | **object** | Plain field values by key.  An empty string clears one.  Booleans are true or false.  Secrets go in secrets instead. | [optional]
**secrets** | [**\ultracart\v2\models\SfvbTrackingProviderSecrets**](SfvbTrackingProviderSecrets.md) |  | [optional]
**unset** | **string[]** | Plain field keys to clear. | [optional]
**wholesale_tiers** | [**\ultracart\v2\models\SfvbTrackingWholesaleTier[]**](SfvbTrackingWholesaleTier.md) | For google_analytics, account numbers by pricing_tier_oid. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
