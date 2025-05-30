# # AddLibraryItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\ultracart\v2\models\LibraryItemAttribute[]**](LibraryItemAttribute.md) | Attributes associated with the library item to contain additional configuration. | [optional]
**cjson** | **string** | Cjson to be added to library | [optional]
**content_type** | **string** | flow, campaign, cjson, email, transactional_email, postcard or upsell | [optional]
**description** | **string** | description of library item | [optional]
**email_name** | **string** | Required if content_type is transactional_email. This is the name of the email template (html, not text).  This name should have a .vm file extension.  An example is auto_order_cancel_html.vm | [optional]
**email_path** | **string** | Required if content_type is transactional_email. This is the full path to the email template stored in the file system.  This defines which StoreFront contains the desired email template.  An example is /themes/Elements/core/emails/auto_order_cancel_html.vm | [optional]
**screenshots** | [**\ultracart\v2\models\LibraryItemScreenshot[]**](LibraryItemScreenshot.md) | Screenshot urls for display | [optional]
**storefront_oid** | **int** | StoreFront oid where content originates necessary for tracking down relative assets | [optional]
**title** | **string** | title of library item, usually the name of the flow or campaign, or description of cjson | [optional]
**upsell_offer_oid** | **int** | Required if content_type is upsell. This is object identifier of a StoreFront Upsell Offer. | [optional]
**uuid** | **string** | UUID of communication flow, campaign, email, postcard, or null if this item is something else. transactional_email do not have a uuid because they are singleton objects within a storefront and easily identifiable by name | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
