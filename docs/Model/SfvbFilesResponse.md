# # SfvbFilesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**files** | [**\ultracart\v2\models\SfvbFileEntry[]**](SfvbFileEntry.md) | Directories first, then files, each sorted by name. | [optional]
**fs_directory_oid** | **int** | Oid of the directory that was listed. | [optional]
**omitted_count** | **int** | Number of entries omitted when truncated is true. | [optional]
**parent_fs_directory_oid** | **int** | Oid of the parent directory, or zero at the root. | [optional]
**path** | **string** | Path that was listed. | [optional]
**truncated** | **bool** | True when the listing was capped.  Never truncated silently. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
