# LibraryItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assets** | [**\ultracartv2\models\LibraryItemAsset[]**](LibraryItemAsset.md) |  | [optional] 
**categories** | **string[]** |  | [optional] 
**content** | **string** |  | [optional] 
**content_type** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**industries** | **string[]** |  | [optional] 
**library_item_oid** | **int** |  | [optional] 
**merchant_id** | **string** |  | [optional] 
**price** | **float** | The price of the published item.  Null for any private library items. | [optional] 
**price_formatted** | **string** | The formatted price of the published item.  Null for any private library items. | [optional] 
**published** | **bool** | True if this library item is a published item (not source) | [optional] 
**published_from_library_item_oid** | **int** | The source item used to publish this item.  This allows for comparisons between source and published | [optional] 
**published_version** | **int** | The source version when this item was published.  This allows for out-of-date alerts to be shown when there is a difference between source and published | [optional] 
**purchased** | **bool** | True if this library item has been purchased | [optional] 
**purchased_from_library_item_oid** | **int** | The published item that was purchased to make this item.  This allows for comparisons between published and purchased | [optional] 
**purchased_version** | **int** | The published version when this item was purchased.  This allows for out-of-date alerts to be shown when there is a difference between published and purchased | [optional] 
**screenshots** | [**\ultracartv2\models\LibraryItemScreenshot[]**](LibraryItemScreenshot.md) |  | [optional] 
**share_with_accounts** | [**\ultracartv2\models\LibraryItemAccount[]**](LibraryItemAccount.md) |  | [optional] 
**share_with_other_emails** | [**\ultracartv2\models\LibraryItemEmail[]**](LibraryItemEmail.md) |  | [optional] 
**shared** | **bool** | True if this item is shared from another merchant account | [optional] 
**source** | **bool** | True if this library item has been published | [optional] 
**source_to_library_item_oid** | **int** | This oid points to the published library item, if there is one. | [optional] 
**source_version** | **int** | The version of this item.  Increment every time the item is saved. | [optional] 
**style** | **string** |  | [optional] 
**times_purchased** | **int** |  | [optional] 
**title** | **string** |  | [optional] 
**type** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


