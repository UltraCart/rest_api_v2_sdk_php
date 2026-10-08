# # SfvbRedirectDeleteRowResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hash_sha256** | **string** | The rule&#39;s current hash.  Absent when not_found. | [optional]
**note** | **string** | The rule&#39;s note. | [optional]
**redirect_id** | **int** | The rule. | [optional]
**result** | **string** | deletable, stale (the rule changed since its hash was read), not_found, or deleted after an apply. | [optional]
**source** | **string** | The rule&#39;s source, for a backup. | [optional]
**status** | **string** | The rule&#39;s status (301, 302 or rewrite). | [optional]
**target** | **string** | The rule&#39;s target, for a backup. | [optional]
**type** | **string** | exact or pattern. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
