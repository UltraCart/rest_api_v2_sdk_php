# EmailCampaign

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**click_rate_formatted** | **string** | Click rate of emails | [optional] 
**created_dts** | **string** | Created date | [optional] 
**deleted** | **bool** | True if this campaign was deleted | [optional] 
**email_campaign_uuid** | **string** | Email campaign UUID | [optional] 
**email_communication_sequence_uuid** | **string** | Email communication sequence UUID | [optional] 
**end_once_customer_purchases** | **bool** | True if the customer should end the flow once they purchase from this campaign | [optional] 
**end_once_customer_purchases_anywhere** | **bool** | True if the customer should end the flow once they purchase from anywhere | [optional] 
**esp_campaign_folder_uuid** | **string** | Campaign folder UUID.  Null for uncategorized | [optional] 
**esp_domain_user** | **string** | User of the sending address | [optional] 
**esp_domain_uuid** | **string** | UUID of the sending domain | [optional] 
**esp_friendly_name** | **string** | Friendly name of the sending email | [optional] 
**library_item_oid** | **int** | If this item was ever added to the Code Library, this is the oid for that library item, or 0 if never added before.  This value is used to determine if a library item should be inserted or updated. | [optional] 
**memberships** | [**\ultracart\v2\models\EmailListSegmentMembership[]**](EmailListSegmentMembership.md) | List and segment memberships | [optional] 
**merchant_id** | **string** | Merchant ID | [optional] 
**name** | **string** | Name of email campaign | [optional] 
**open_rate_formatted** | **string** | Open rate of emails | [optional] 
**prevent_sending_due_to_spam** | **bool** | True if this campaign is prevented from sending at this time due to spam complaints. | [optional] 
**revenue_formatted** | **string** | Revenue associated with campaign | [optional] 
**revenue_per_customer_formatted** | **string** | Revenue per customer associated with campaign | [optional] 
**scheduled_dts** | **string** | Scheduled date | [optional] 
**screenshot_large_full_url** | **string** | URL to a large full length screenshot | [optional] 
**status** | **string** | Status of the campaign of draft, archived, and sent | [optional] 
**status_dts** | **string** | Timestamp when the last status change happened | [optional] 
**storefront_oid** | **int** | Storefront oid | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


