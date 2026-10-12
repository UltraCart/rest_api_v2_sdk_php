# # SfvbEventsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**events** | [**\ultracart\v2\models\SfvbEvent[]**](SfvbEvent.md) | Oldest first. | [optional]
**more** | **bool** | True when more events follow.  Ask again with after set to the last event_id. | [optional]
**resync_required** | **bool** | True when the cursor is older than the 72 hours of events kept.  Re-list what you were waiting on instead of replaying. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
