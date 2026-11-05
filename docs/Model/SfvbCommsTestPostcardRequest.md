# # SfvbCommsTestPostcardRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address1** | **string** | The street address. | [optional]
**address2** | **string** | The second address line. | [optional]
**cart_item_ids** | **string[]** | Items for a cart flow&#39;s card. | [optional]
**city** | **string** | The city. | [optional]
**dry_run** | **bool** | Check everything, including that postcards are turned on, and show the cost, without mailing or using an approval. | [optional]
**mail_card** | **bool** | Must be true.  Without it nothing is mailed; use the postcard proof to see the card. | [optional]
**name** | **string** | The recipient&#39;s name. | [optional]
**order_id** | **string** | A test order to render an order flow&#39;s card with.  A real customer&#39;s order is refused. | [optional]
**postal_code** | **string** | The postal code. | [optional]
**state** | **string** | The state. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
