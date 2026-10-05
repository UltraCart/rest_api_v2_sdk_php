# # SfvbLibraryInstallReceipt

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | The fragment, with its file paths rewritten to where they were installed.  Ready to place. | [optional]
**conflicts** | [**\ultracart\v2\models\SfvbLibraryInstallConflict[]**](SfvbLibraryInstallConflict.md) | Paths that already held a different file.  With on_conflict fail these refuse the install. | [optional]
**content_manifest** | [**\ultracart\v2\models\SfvbLibraryContentManifest**](SfvbLibraryContentManifest.md) |  | [optional]
**files_skipped** | **string[]** | Paths not written, because an identical or chosen existing file was kept, or the file could not be fetched. | [optional]
**files_written** | **string[]** | Storefront paths this install wrote. | [optional]
**library_oid** | **int** | The entry. | [optional]
**revision_number** | **int** | The revision installed. | [optional]
**unresolved_parameters** | **string[]** | Required parameters with no default.  Replace them in the cjson before placing it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
