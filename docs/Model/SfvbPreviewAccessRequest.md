# # SfvbPreviewAccessRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | Storefront path to land on, beginning with a slash.  Defaults to / | [optional]
**preview_session_id** | **string** | Staged preview session to show.  It must be one this user created and it must not have expired.  Leave it out to show the saved containers with nothing staged. | [optional]
**theme_oid** | **int** | Theme to show, which may be inactive.  Must belong to this storefront.  Defaults to the active theme. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
