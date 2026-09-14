# # SfvbPageAttribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deprecated** | **bool** | True when the active theme marks this attribute as on its way out.  Prefer not to build on it. | [optional]
**name** | **string** | Attribute name, as the template&#39;s uc page-attribute directive spells it.  Compare case insensitively.  This is the value pageAttributeName refers to. | [optional]
**type** | **string** | What kind of attribute this is, taken from the template that declares it rather than from the stored row.  orphan means no template declares it.  reserved covers the page SEO fields. | [optional]
**undeclared** | **bool** | True when no template references this name.  Writing such a name is allowed, but if you did not mean to create one this is a misspelling and nothing on the page will show it. | [optional]
**used_by** | **string** | The other themes that declare this attribute, when the active theme does not. | [optional]
**used_by_current_theme** | **bool** | True when a template in the active theme declares this attribute. | [optional]
**value** | **string** | The stored value.  Empty when a template declares the attribute and nothing has set it. | [optional]
**writable** | **bool** | True when this API will change the value.  List, slider, item set, page collection and video list values are structured documents carrying their own translation references and derived data, so they are shown here but must be edited in the page editor. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
