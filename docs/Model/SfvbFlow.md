# # SfvbFlow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**communication_sequence_uuid** | **string** | The communication sequence the steps belong to. | [optional]
**created_dts** | **string** | When the flow was created (ISO 8601, UTC). | [optional]
**deleted** | **bool** | True when the flow was deleted. | [optional]
**emails** | [**\ultracart\v2\models\SfvbCommsEmail[]**](SfvbCommsEmail.md) | Its emails, in step order. | [optional]
**flow_uuid** | **string** | The flow uuid. | [optional]
**live** | **bool** | True when the emails and postcards reach customers now, so a change to one shows at once.  False only in a status that sends nothing. | [optional]
**name** | **string** | The flow name. | [optional]
**postcards** | [**\ultracart\v2\models\SfvbCommsPostcard[]**](SfvbCommsPostcard.md) | Its postcards, in step order. | [optional]
**status** | **string** | The status, such as draft, active, paused, draining or inactive. | [optional]
**status_dts** | **string** | When the status last changed (ISO 8601, UTC). | [optional]
**trigger_parameter_name** | **string** | The name of the trigger parameter, when the trigger takes one. | [optional]
**trigger_type** | **string** | What starts the flow, such as cart abandon or an order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
