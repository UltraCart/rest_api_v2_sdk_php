# # ItemReviews

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**has_approved_review** | **bool** | True if the item has an approved review | [optional]
**has_review** | **bool** | True if the item has a review | [optional]
**individual_reviews** | [**\ultracart\v2\models\ItemReview[]**](ItemReview.md) |  | [optional]
**review_count** | **int** | Number of approved reviews | [optional]
**review_overall** | **float** | Overall score of reviews | [optional]
**review_template_name** | **string** | Review template name | [optional]
**review_template_oid** | **int** | Review template object identifier | [optional]
**reviewable** | **bool** | True if the item is reviewable | [optional]
**share_reviews_with_merchant_item_id** | **string** | Share reviews with item id.  To set, use the share_reviews_with_merchant_item_oid field. | [optional]
**share_reviews_with_merchant_item_oid** | **int** | Share reviews with item oid.  To null out this field, set teh value to zero. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
