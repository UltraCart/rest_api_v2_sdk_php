# # SfvbTheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True when this theme is the one serving live traffic.  Writing to an active theme requires the sfvb_publish scope. | [optional]
**description** | **string** | What the theme is, where the author supplied a description. | [optional]
**fs_directory_oid** | **int** | Oid of the theme root directory in the storefront file system. | [optional]
**merge_conflict_count** | **int** | How many of the theme&#39;s files still have unresolved merge conflicts from an upgrade.  Find them with searchSfvbFiles, merge_conflicts true and this theme&#39;s path. | [optional]
**ok_to_activate** | **bool** | False while any file in the theme has an unresolved merge conflict.  Never activate a theme that reports false - resolve every conflict first.  Activation itself happens in the UltraCart admin, which runs the same check. | [optional]
**path** | **string** | Root path of the theme in the storefront file system, for example /themes/mytheme/ | [optional]
**storefront_oid** | **int** | StoreFront oid this theme belongs to. | [optional]
**theme_name** | **string** | Theme name. | [optional]
**theme_oid** | **int** | StoreFront theme oid. | [optional]
**upgrade_available** | **bool** | True when a newer version of this theme exists.  Relevant because an upgrade is what produces the merge conflicts that block activation. | [optional]
**valid** | **bool** | False when the theme contains templates that failed validation.  Worth checking before choosing a theme to work in. | [optional]
**version** | **string** | Theme version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
