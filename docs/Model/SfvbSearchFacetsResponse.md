# # SfvbSearchFacetsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changed_facets** | **string[]** | After a change, the facets it changed. | [optional]
**cost_price_points** | **int[]** | The Cost facet price breaks, smallest first. | [optional]
**dry_run** | **bool** | True when nothing was saved. | [optional]
**facets** | [**\ultracart\v2\models\SfvbSearchFacet[]**](SfvbSearchFacet.md) | Every facet the storefront can offer, in the fixed order shoppers see them. | [optional]
**hash_sha256** | **string** | Hash of the facets and price points.  Send it as If-Match on a change. | [optional]
**price_points_changed** | **bool** | After a change, true when the price points changed. | [optional]
**rebuild** | **string** | After a change, the search index rebuild it started.  none, quick (minutes, small catalogs), slow (the regular rebuild cycle) or failed (the change is saved but the rebuild could not be started; save again or contact support). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
