# # SfvbCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaign_uuid** | **string** | The campaign uuid. | [optional]
**communication_sequence_uuid** | **string** | The communication sequence the steps belong to. | [optional]
**created_dts** | **string** | When the campaign was created (ISO 8601, UTC). | [optional]
**deleted** | **bool** | True when the campaign was deleted. | [optional]
**emails** | [**\ultracart\v2\models\SfvbCommsEmail[]**](SfvbCommsEmail.md) | Its emails, in step order. | [optional]
**live** | **bool** | True when the emails and postcards reach customers now, so a change to one shows at once.  False only in a status that sends nothing. | [optional]
**name** | **string** | The campaign name. | [optional]
**postcards** | [**\ultracart\v2\models\SfvbCommsPostcard[]**](SfvbCommsPostcard.md) | Its postcards, in step order. | [optional]
**scheduled_dts** | **string** | When the campaign is scheduled to send (ISO 8601, UTC), when it is. | [optional]
**status** | **string** | The status, such as draft, scheduled, sending, sent or archived. | [optional]
**status_dts** | **string** | When the status last changed (ISO 8601, UTC). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
