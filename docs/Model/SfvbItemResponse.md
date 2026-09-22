# # SfvbItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\ultracart\v2\models\SfvbItemAttribute[]**](SfvbItemAttribute.md) | Every attribute a template declares for this item plus every one stored on it, so the list answers what can be set as well as what is set. | [optional]
**description** | **string** | What an itemdescription element renders, the item&#39;s extended description.  Like title this is the catalog&#39;s own field rather than a storefront copy of it. | [optional]
**groups** | **string[]** | The page paths this item is assigned to on this storefront.  The templates behind those pages are what the attribute and image declarations were reconciled against, so an empty list is why an item can report no declared attributes at all. | [optional]
**merchant_item_id** | **string** | The item id a storefront carries, and the one data-context-item-id holds. | [optional]
**merchant_item_oid** | **int** | The item&#39;s internal oid, which appears nowhere on a rendered storefront. | [optional]
**multimedia** | [**\ultracart\v2\models\SfvbItemMultimedia[]**](SfvbItemMultimedia.md) | Every image slot a template declares plus every image attached to the item. | [optional]
**seo** | [**\ultracart\v2\models\SfvbItemSeo**](SfvbItemSeo.md) |  | [optional]
**title** | **string** | What an itemtitle element renders.  This is the item&#39;s short description in the catalog, not a storefront only field, so changing it changes the item everywhere. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
