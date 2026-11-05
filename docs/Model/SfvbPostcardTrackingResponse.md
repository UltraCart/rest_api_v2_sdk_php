# # SfvbPostcardTrackingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cards** | [**\ultracart\v2\models\SfvbPostcardCard[]**](SfvbPostcardCard.md) | This page of cards. | [optional]
**customer_data** | **string** | masked, or shown when show_customer_data was sent. | [optional]
**notes** | **string[]** | What to keep in mind, such as how to handle customer data that is shown. | [optional]
**page** | **int** | The page number, from 1. | [optional]
**page_cost** | **float** | The total cost of the cards on this page. | [optional]
**page_size** | **int** | Cards per page. | [optional]
**postcard_uuid** | **string** | The postcard. | [optional]
**total_cards** | **int** | How many cards have been mailed for this postcard. | [optional]
**total_pages** | **int** | How many pages there are. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
