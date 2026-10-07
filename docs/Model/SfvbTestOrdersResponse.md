# # SfvbTestOrdersResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hint** | **string** | Present when nothing matched.  Says how to place a test order. | [optional]
**searched_days** | **int** | How many days back were searched, 7, 30 or 90, widening until enough test orders were found. | [optional]
**test_orders** | [**\ultracart\v2\models\SfvbTestOrder[]**](SfvbTestOrder.md) | Test orders, newest first.  Only orders marked as test orders are ever listed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
