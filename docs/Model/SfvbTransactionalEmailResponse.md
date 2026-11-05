# # SfvbTransactionalEmailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changes** | [**\ultracart\v2\models\SfvbTransactionalChange[]**](SfvbTransactionalChange.md) | What the update changes, or would change on a dry run. | [optional]
**dry_run** | **bool** | True when nothing was written. | [optional]
**email** | [**\ultracart\v2\models\SfvbTransactionalEmailDetail**](SfvbTransactionalEmailDetail.md) |  | [optional]
**notes** | **string[]** | What the change means, such as the orders it reaches and the storefronts that share a sender. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
