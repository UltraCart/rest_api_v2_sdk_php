# # SfvbTrackingProviderField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed** | **string[]** | For a select, the values accepted. | [optional]
**key** | **string** | The field key a write names. | [optional]
**label** | **string** | The label the admin shows. | [optional]
**mask** | **string** | For a stored secret, its mask.  Send it back, or leave the secret out, to keep it. | [optional]
**max** | **int** | The longest value accepted, or for an id_list the longest line. | [optional]
**max_value** | **int** | For a number, the largest value accepted. | [optional]
**min_value** | **int** | For a number, the smallest value accepted. | [optional]
**secret** | **bool** | True for a secret.  Its value is never returned; set and mask say whether one is stored. | [optional]
**set** | **bool** | For a secret, true when one is stored. | [optional]
**sink** | **string** | For a writable secret, the sink a secret request names, with this storefront_oid as its target. | [optional]
**type** | **string** | id, id_list, token, url, server_url, host, host_list, bool, select, number, numeric_id or secret.  It decides what a write accepts. | [optional]
**unavailable_reason** | **string** | Present only when this storefront can&#39;t turn the field on, and why.  Turning it off still works. | [optional]
**value** | **string** | The stored value.  Booleans are true or false.  Null when blank.  Never present for a secret. | [optional]
**writable** | **bool** | False for a field the API reports but does not change. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
