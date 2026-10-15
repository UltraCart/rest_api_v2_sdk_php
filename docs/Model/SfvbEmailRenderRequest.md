# # SfvbEmailRenderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart_item_ids** | **string[]** | Item ids for the cart the email renders with.  For a cart flow email, or the transactional email this cart and email this item templates. | [optional]
**cjson** | **string** | An unsaved draft to render in place of the saved content.  For a flow or campaign email, the email container.  For a transactional email, the body container (the theme file core/emails/&lt;name&gt;_body.cjson). | [optional]
**customer_name** | **string** | The customer name a flow or campaign email greets.  Defaults to the signed in user. | [optional]
**order_id** | **string** | A test order to render the email with.  Real orders are refused.  Without one, an order email renders with a made up order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
