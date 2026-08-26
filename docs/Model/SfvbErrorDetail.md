# # SfvbErrorDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Stable machine readable code.  Namespaced sfvb.*  Safe to match on; these are never reworded. | [optional]
**column** | **int** | 1-indexed column number.  Populated for Velocity problems. | [optional]
**did_you_mean** | **string[]** | Close matches for an unrecognized value, best match first.  Populated for unknown element types and unknown configuration keys. | [optional]
**expected** | **string** | Description of what was expected instead. | [optional]
**found** | **string** | The value that was actually found, when the problem is about a value. | [optional]
**line** | **int** | 1-indexed line number.  Populated for Velocity problems; null for CJSON problems, which carry a pointer instead. | [optional]
**message** | **string** | Human readable description of the problem. | [optional]
**pointer** | **string** | JSON Pointer (RFC 6901) to the offending node within the submitted CJSON.  Null for whole-document problems. | [optional]
**severity** | **string** | error or warning.  Warnings never fail a request. | [optional]
**suggestion** | **string** | Optional pointer at a known good example, typically a storefront library fragment that solves the same problem properly. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
