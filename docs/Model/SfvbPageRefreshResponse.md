# # SfvbPageRefreshResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | A plain sentence saying what happened. | [optional]
**path** | **string** | The page path the refresh used, after normalization. | [optional]
**refreshed** | **bool** | True when a cached copy was dropped.  The next request renders the page fresh. | [optional]
**was_cached** | **bool** | True when the page had a cache entry. | [optional]
**was_valid** | **bool** | True when that entry was being served from cache. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
