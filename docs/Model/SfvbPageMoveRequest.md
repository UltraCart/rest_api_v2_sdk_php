# # SfvbPageMoveRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | True to run every check and report what would move, without moving anything or needing an approval. | [optional]
**new_path** | **string** | Where the page goes, for example /lp/summer-sale/ or /sale/spring/.  Its parent page must exist, and nothing may be at this path yet. | [optional]
**path** | **string** | The page to move, for example /lp/spring-sale/. | [optional]
**redirect_note** | **string** | The note on that redirect rule.  Up to 500 characters.  A note naming the move is used when left out. | [optional]
**redirect_old_url** | **string** | 301 to add one pattern redirect from the old path, sub-pages and items included, to the new one in the same call.  Leave it out to add none, and the old addresses answer 404. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
