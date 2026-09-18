# # SfvbSiteAttribute

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Attribute name, as a template&#39;s site attribute declaration spells it.  Compare case insensitively.  This is the value siteAttributeName refers to and the name $site.attr takes. | [optional]
**type** | **string** | What kind of attribute this is, taken from the template that declares it rather than from the stored row.  orphan means no template declares it.  reserved covers the settings the StoreFronts General screen owns. | [optional]
**undeclared** | **bool** | True when no template declares this name and it is not a reserved setting.  A template can still read it with $site.attr, so this is not proof it is unused, but a name you did not mean to create is most likely a misspelling. | [optional]
**used_by** | **string** | The other themes that declare this attribute, when the active theme does not. | [optional]
**used_by_current_theme** | **bool** | True when a template in the active theme declares this attribute. | [optional]
**value** | **string** | The stored value, or the template default when nothing has set it. | [optional]
**writable** | **bool** | True when this API will change the value.  List, video list, mailing list and item set values are structured documents and must be edited in the store admin.  Of the reserved settings only the title, the SEO description and keywords and the social account names are writable here. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
