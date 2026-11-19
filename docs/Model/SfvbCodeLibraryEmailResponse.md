# # SfvbCodeLibraryEmailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | **bool** | On a save, true when this request made the item and false when an earlier save with the same uuid had, in which case nothing changed.  Absent on a read. | [optional]
**email** | [**\ultracart\v2\models\SfvbCodeLibraryEmailDetail**](SfvbCodeLibraryEmailDetail.md) |  | [optional]
**files_skipped** | [**\ultracart\v2\models\SfvbCodeLibraryFileSkipped[]**](SfvbCodeLibraryFileSkipped.md) | On a save, the files the body names that the item does not carry, each with the reason.  Absent on a read. | [optional]
**notes** | **string[]** | Plain sentences about the save, for example executable elements or absolute file URLs in the body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
