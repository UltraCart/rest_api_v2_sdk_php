# # SfvbFlowBackfillRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | Count who would be enrolled and enroll nobody. | [optional]
**flow_uuid** | **string** | The flow.  Used by a flow.backfill approval request.  The backfill call takes it from the path. | [optional]
**order_days_old** | **int** | For an order trigger, how many days of orders to enroll, 1 to 90 (default 5). | [optional]
**relative_to_event** | **bool** | For an order trigger, shorten the flow&#39;s first wait by each order&#39;s age. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
