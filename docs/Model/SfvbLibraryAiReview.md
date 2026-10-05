# # SfvbLibraryAiReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**findings** | **object** | What the reviewers found.  detail is the category followed by the quoted evidence. | [optional]
**prompt_version** | **string** | Version of the review policy that produced this verdict. | [optional]
**reviewed_dts** | **string** | When the review ran, ISO 8601. | [optional]
**screenshot_sha256** | **string** | The screenshot the review looked at, or absent when there was none. | [optional]
**summary** | **string** | One or two sentences explaining the verdict. | [optional]
**verdict** | **string** | approve, block, human or error.  block refuses any publish.  human or error refuses a public publish and is recorded on a shared one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
