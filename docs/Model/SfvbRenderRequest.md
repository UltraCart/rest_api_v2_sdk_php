# # SfvbRenderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ancestors_cjson** | **string** | The chain of ancestor nodes above this one, as CJSON.  Elements that inherit layout or styling from a parent render differently without it, so supply it when rendering a node from inside a container rather than a standalone fragment. | [optional]
**child_containers_json** | **string** | Child containers this node references, as a JSON object keyed by container id.  Compiled into the render context so nested containers resolve. | [optional]
**cjson** | **string** | The CJSON node to render. | [optional]
**context_affiliate_oid** | **int** | Affiliate oid for the rendering context. | [optional]
**context_blog_post_oid** | **int** | Blog post oid for the rendering context. | [optional]
**context_group_path** | **string** | Catalog group path for the rendering context. | [optional]
**context_item_id** | **string** | Item id for the rendering context.  Required for item bound elements. | [optional]
**context_order_id** | **string** | Order id for the rendering context. | [optional]
**context_page_number** | **string** | Page number for paginated elements.  Defaults to 1. | [optional]
**context_upsell_offer_oid** | **int** | Upsell offer oid for the rendering context. | [optional]
**edit_mode** | **bool** | True renders every branch the way the builder shows it, for styling content a shopper only sometimes sees.  Omitted or false renders what a shopper sees, with conditions, prices and sale state evaluated against the context item. | [optional]
**language_iso_code** | **string** | Three-letter ISO 639-2 language code in the bibliographic form (GER, FRE, CHI), with UltraCart exceptions such as ESP for Spanish.  Must be enabled on the storefront.  Defaults to ENG. | [optional]
**uri** | **string** | Storefront URI the node would appear on.  Affects rendering of anything page relative. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
