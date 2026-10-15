# # SfvbSecretHandle

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expires_at** | **string** | When it stops being usable, ISO 8601 UTC. | [optional]
**fingerprint** | **string** | The last few characters of the value, as a mask shows them, so the person can tell values apart.  Empty until entered. | [optional]
**handle** | **string** | The handle.  Safe to log and keep in plans.  It works only for the sign-in that requested it. | [optional]
**key** | **string** | The bulk key it is for, or empty. | [optional]
**sink** | **string** | The secret field it can be written to. | [optional]
**status** | **string** | pending (no value yet), ready, in_use (a write holds it), consumed, revoked or expired. | [optional]
**target_id** | **string** | The object it can be written to, or empty when the request named none. | [optional]
**uses_left** | **int** | Writes left.  Empty once the handle is gone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
