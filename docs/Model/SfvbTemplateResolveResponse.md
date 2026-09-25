# # SfvbTemplateResolveResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**exists** | **bool** | Whether resolved_path is a file.  False means a page naming this template cannot render. | [optional]
**fallback** | **bool** | True when no resource path held the name, so the storefront fell back to the name at the theme root. | [optional]
**name** | **string** | The template file name that was resolved, as a page&#39;s group_template or item_template holds it. | [optional]
**resolved_path** | **string** | The file a page naming this template renders, relative to theme_path.  This is the storefront&#39;s own answer. | [optional]
**resource_paths** | [**\ultracart\v2\models\SfvbTemplateResolvePath[]**](SfvbTemplateResolvePath.md) | The theme&#39;s resource paths in search order, each with the files of that name found below it.  The first path with a match wins, which is how a theme copy overrides a shared core copy. | [optional]
**theme_oid** | **int** | The theme the name was resolved in. | [optional]
**theme_path** | **string** | The theme&#39;s path in the file manager, such as /themes/Elements/. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
