# # SfvbSequenceStepCreateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**back_container_uuid** | **string** | A post_card step&#39;s back, the container with owner type postcardback and this owner id. | [optional]
**email_uuid** | **string** | The new email&#39;s uuid.  Its body is the email container with this owner id. | [optional]
**front_container_uuid** | **string** | A post_card step&#39;s front, the container with owner type postcardfront and this owner id. | [optional]
**library_files_kept** | **string[]** | The library item&#39;s files whose path already held a file, which was kept, not replaced. | [optional]
**library_files_skipped** | **string[]** | The library item&#39;s files that weren&#39;t written because they aren&#39;t a PNG, JPEG or GIF image whose bytes match its name.  Only those images are copied from a library item. | [optional]
**library_files_written** | **string[]** | Storefront file paths the library item&#39;s files were written to.  A file already at its path is kept as it is and listed in library_files_kept instead. | [optional]
**library_item_oid** | **int** | The code library email item the new email started from (#1589), when one was given. | [optional]
**notes** | **string[]** | What to do next, such as writing the body, and customers already waiting on the step before it. | [optional]
**postcard_uuid** | **string** | A post_card step&#39;s new postcard (#1644). | [optional]
**requires_review** | **bool** | True when the new email must pass content review before it sends. | [optional]
**step** | [**\ultracart\v2\models\SfvbSequenceStep**](SfvbSequenceStep.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
