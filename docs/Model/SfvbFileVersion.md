# # SfvbFileVersion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | Comment recorded with the write. | [optional]
**current** | **bool** | True for the version currently on disk. | [optional]
**edited_by** | **string** | Login of whoever wrote this version. | [optional]
**fs_file_history_oid** | **int** | History record oid. | [optional]
**hash_sha256** | **string** | SHA-256 of this version&#39;s content. | [optional]
**last_modified** | **string** | When this version was written. | [optional]
**revertable** | **bool** | True when this version can be reverted to. | [optional]
**size** | **int** | Size in bytes. | [optional]
**version** | **int** | Version number.  Pass to files/content or files/revert. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
