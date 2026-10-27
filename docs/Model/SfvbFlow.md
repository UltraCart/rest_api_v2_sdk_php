# # SfvbFlow

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_multiple_concurrent_enrollments** | **bool** | True when a customer may be in this flow more than once at a time. | [optional]
**communication_sequence_uuid** | **string** | The communication sequence the steps belong to. | [optional]
**created_dts** | **string** | When the flow was created (ISO 8601, UTC). | [optional]
**deleted** | **bool** | True when the flow was deleted. | [optional]
**emails** | [**\ultracart\v2\models\SfvbCommsEmail[]**](SfvbCommsEmail.md) | Its emails, in step order. | [optional]
**end_once_customer_purchases** | **bool** | True when a customer leaves the flow once they buy from one of its emails. | [optional]
**end_once_customer_purchases_anywhere** | **bool** | True when a customer leaves the flow once they buy from any source. | [optional]
**flow_uuid** | **string** | The flow uuid. | [optional]
**hash_sha256** | **string** | Send this as If-Match when changing, archiving or turning the flow on or off. | [optional]
**live** | **bool** | True when the emails and postcards reach customers now, so a change to one shows at once.  False only in a status that sends nothing. | [optional]
**name** | **string** | The flow name. | [optional]
**notes** | **string[]** | What a write did beyond the fields it was asked to change, such as putting emails back to needing review or setting a scheduled campaign back to draft.  Only on a write. | [optional]
**postcards** | [**\ultracart\v2\models\SfvbCommsPostcard[]**](SfvbCommsPostcard.md) | Its postcards, in step order. | [optional]
**reentry_delay_days** | **int** | Days before a customer may enter again, with after_days. | [optional]
**reentry_policy** | **string** | Whether a customer may enter again, anytime, after_days or never. | [optional]
**sending_domain_uuid** | **string** | The sending domain uuid.  Defaults to the storefront&#39;s marketing sending domain. | [optional]
**sending_name** | **string** | The from name.  Defaults to the storefront&#39;s marketing setting. | [optional]
**sending_user** | **string** | The part of the from address before the at sign.  Defaults to the storefront&#39;s marketing setting. | [optional]
**status** | **string** | The status, such as draft, active, paused, draining or inactive. | [optional]
**status_dts** | **string** | When the status last changed (ISO 8601, UTC). | [optional]
**trigger_parameter** | **string** | The list or segment uuid, or other value, the trigger is limited to. | [optional]
**trigger_parameter_name** | **string** | The name of the trigger parameter, when the trigger takes one. | [optional]
**trigger_type** | **string** | What starts the flow, such as cart abandon or an order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
