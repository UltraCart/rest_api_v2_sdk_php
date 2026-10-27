# # SfvbSequence

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**communication_sequence_uuid** | **string** | The sequence uuid. | [optional]
**live** | **bool** | True when its emails and postcards reach customers now. | [optional]
**notes** | **string[]** | Anything the read could not do, such as waiting counts that were unavailable. | [optional]
**owner_name** | **string** | The campaign or flow name. | [optional]
**owner_status** | **string** | The campaign or flow status. | [optional]
**owner_type** | **string** | campaign or flow. | [optional]
**owner_uuid** | **string** | The campaign or flow uuid. | [optional]
**steps** | [**\ultracart\v2\models\SfvbSequenceStep[]**](SfvbSequenceStep.md) | The steps from the start, in order.  A branching step holds its sides in branches. | [optional]
**waiting_included** | **bool** | True when number_waiting was filled in. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
