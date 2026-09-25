# # SfvbTemplateResolvePath

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**candidates** | [**\ultracart\v2\models\SfvbTemplateResolveCandidate[]**](SfvbTemplateResolveCandidate.md) | Every file of that name below this path, in the order the storefront searches. | [optional]
**directory_found** | **bool** | False when the theme has no such directory, so the storefront skips this path. | [optional]
**match** | **string** | The candidate this path supplies, relative to the theme root, or null.  It is the first candidate that is not skipped. | [optional]
**resource_path** | **string** | The resource path, relative to the theme root.  / is the theme root itself. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
