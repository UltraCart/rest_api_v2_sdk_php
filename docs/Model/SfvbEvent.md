# # SfvbEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_dts** | **string** | When it happened, ISO 8601. | [optional]
**event_id** | **string** | Time-ordered id.  Pass the last one seen as after to replay what came since. | [optional]
**object_id** | **string** | The id of what changed, such as the approval_id. | [optional]
**object_type** | **string** | What changed, such as approval or secret_sink. | [optional]
**storefront_oid** | **int** | The storefront it concerns.  Empty for merchant-level objects. | [optional]
**type** | **string** | approval.decided (approved, denied, cancelled or refused by the script review), approval.ready (the review finished and the person can decide) or secret_sink.completed (a person entered the values of a secret request; object_id is the request id). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
