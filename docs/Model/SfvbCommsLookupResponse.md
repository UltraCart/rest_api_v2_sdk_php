# # SfvbCommsLookupResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**archived** | **bool** | True when the uuid is an archived campaign or flow.  It is still on its storefront and can be read; it sends nothing. | [optional]
**communication_sequence_uuid** | **string** | The sequence it belongs to, when there is one. | [optional]
**kind** | **string** | campaign, flow, sequence, step, email, postcard, list or segment. | [optional]
**name** | **string** | The campaign, flow, list or segment name, or the email subject. | [optional]
**next** | **string** | The CLI command that reads it. | [optional]
**notes** | **string[]** | What the answer means, in sentences. | [optional]
**owner** | [**\ultracart\v2\models\SfvbCommsLookupOwner**](SfvbCommsLookupOwner.md) |  | [optional]
**step_uuid** | **string** | The step that sends it, for an email or postcard a step names, or the step itself. | [optional]
**storefront_oid** | **int** | The storefront it lives on, for the --storefront option. | [optional]
**uuid** | **string** | The uuid looked up. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
