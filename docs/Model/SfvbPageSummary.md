# # SfvbPageSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**child_count** | **int** | Number of pages directly under this one. | [optional]
**exclude_from_sitemap** | **bool** | True when the page is left out of the sitemap and marked noindex. | [optional]
**group_template** | **string** | Template file that renders the page itself, a bare .vm name found anywhere in the active theme. | [optional]
**item_count** | **int** | Number of items assigned to the page.  The catalog stops counting at its per-page item ceiling. | [optional]
**item_template** | **string** | Template file that renders the item pages under this page. | [optional]
**page_type** | **string** | S for a static page, D for a dynamic one. | [optional]
**parent_path** | **string** | Path of the page this one sits under.  Empty for the root page. | [optional]
**path** | **string** | The page path, beginning and ending with a slash.  The root page is /. | [optional]
**root** | **bool** | True for the storefront&#39;s home page. | [optional]
**sort_order** | **int** | Position among its siblings when the parent sorts child pages by a custom order. | [optional]
**title** | **string** | The page title. | [optional]
**uses_selectors** | **bool** | True when the page&#39;s items or blog posts are chosen by selectors rather than assigned by hand. | [optional]
**visible** | **bool** | False when the page is hidden.  A hidden page answers 404 to shoppers. | [optional]
**visible_dts** | **string** | When set, the page stays hidden until this time (ISO 8601, UTC). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
