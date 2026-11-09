# # SfvbTrackingCheckPlanProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**events** | [**\ultracart\v2\models\SfvbTrackingCheckPlanEvent[]**](SfvbTrackingCheckPlanEvent.md) | The dataLayer, gtag and fbq calls it makes, where the template makes them. | [optional]
**expect** | **string** | must_load, must_not_load (held back by a gate this consent state and region have not granted, or never sent for this event), or may_load (depends on something the plan cannot know).  A missing may_load request is a warning, never a fail. | [optional]
**gate** | [**\ultracart\v2\models\SfvbTrackingCheckPlanGate**](SfvbTrackingCheckPlanGate.md) |  | [optional]
**name** | **string** | A name to show. | [optional]
**note** | **string** | Why the expectation is what it is, when that is not obvious. | [optional]
**provider** | **string** | The provider key, as tracking/providers names it.  For custom or affiliate network HTML, the host. | [optional]
**requests** | [**\ultracart\v2\models\SfvbTrackingCheckPlanRequest[]**](SfvbTrackingCheckPlanRequest.md) | The requests it makes. | [optional]
**source** | **string** | provider for a provider in the catalog, custom_html for the storefront Tracking or Conversion HTML, affiliate_network for an affiliate network pixel. | [optional]
**template** | **string** | The storefront template that writes it, tracking.vm or conversion.vm.  Left out for custom and affiliate network HTML. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
