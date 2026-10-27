# # SfvbCampaignWriteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**end_once_customer_purchases** | **bool** | True to end the campaign for a customer once they buy from one of its emails. | [optional]
**end_once_customer_purchases_anywhere** | **bool** | True to end the campaign for a customer once they buy from any source. | [optional]
**memberships** | [**\ultracart\v2\models\SfvbCampaignMembership[]**](SfvbCampaignMembership.md) | The lists and segments it sends to or leaves out.  Replaces the whole set.  An empty array clears it. | [optional]
**name** | **string** | The campaign name, 1 to 250 characters.  Required to create. | [optional]
**scheduled_dts** | **string** | When to send once started (ISO 8601).  An empty string clears the schedule. | [optional]
**sending_domain_uuid** | **string** | The sending domain uuid.  Defaults to the storefront&#39;s marketing sending domain. | [optional]
**sending_name** | **string** | The from name.  Defaults to the storefront&#39;s marketing setting. | [optional]
**sending_user** | **string** | The part of the from address before the at sign.  Defaults to the storefront&#39;s marketing setting. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
