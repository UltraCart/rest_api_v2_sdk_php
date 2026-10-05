# # SfvbLibraryInstallRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acknowledge_executable** | **bool** | Must be true to install an entry whose content_manifest lists executable content.  Read the manifest first. | [optional]
**on_conflict** | **string** | What to do when a file the entry installs already exists with different content.  fail refuses and writes nothing, skip keeps the existing file, overwrite replaces it. | [optional]
**revision_number** | **int** | A published revision to install.  Defaults to the latest one, or the draft for the owner. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
