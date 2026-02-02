# # ConversationVirtualAgentCapabilities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_storefront_and_item** | **bool** | Permission flag to allow this Agent access to the storefront and item information. | [optional]
**cancel_subscription** | **bool** |  | [optional]
**delay_subscription** | **bool** |  | [optional]
**generate_coupon** | **bool** | Permission flag to allow this Agent to generate coupons based upon the agent prompt instructions | [optional]
**lookup_order_information** | **bool** |  | [optional]
**lookup_subscription_information** | **bool** |  | [optional]
**open_support_ticket** | **bool** |  | [optional]
**open_support_ticket_channel** | **string** | Channel to use to open the support ticket | [optional]
**open_support_ticket_channel_email** | **string** | Email to send support ticket to | [optional]
**open_support_ticket_zoho_desk_department_id** | **string** | Department ID to open a Zoho Desk ticket for | [optional]
**pause_subscription** | **bool** |  | [optional]
**resume_subscription** | **bool** |  | [optional]
**transfer_chat_to_live_agent** | **bool** |  | [optional]
**update_subscription_credit_card** | **bool** |  | [optional]
**zoho_desk_available** | **bool** | True if Zoho Desk is connected to UltraCart | [optional]
**zoho_desk_departments** | [**\ultracart\v2\models\ConversationVirtualAgentCapabilityZohoDeskDepartment[]**](ConversationVirtualAgentCapabilityZohoDeskDepartment.md) | Array of Zoho Desk Department if zoho desk is connected to UltraCart | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
