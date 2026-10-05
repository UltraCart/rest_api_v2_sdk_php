# # SfvbLibraryInstallRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**installed_dts** | **string** | When it was installed, ISO 8601. | [optional]
**installed_revision_number** | **int** | The revision installed most recently on this storefront. | [optional]
**latest_revision_number** | **int** | The latest published revision, or null when it can no longer be read. | [optional]
**library_oid** | **int** | The entry. | [optional]
**name** | **string** | The entry name, when the entry is still visible to this account. | [optional]
**retired** | **bool** | True when the owner retired the entry.  The installed copy keeps working. | [optional]
**storefront_oid** | **int** | The storefront it was installed on. | [optional]
**update_available** | **bool** | True when a newer revision has been published.  Nothing updates automatically. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
