# # SfvbSecretRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | When the request was made, ISO 8601 UTC. | [optional]
**delegated** | **bool** | True when the requester handed it to a colleague to fill in. | [optional]
**description** | **string** | The sentence the person reads.  Written by the server, not the agent. | [optional]
**expires_at** | **string** | When a pending request lapses, ISO 8601 UTC. | [optional]
**expires_in_seconds** | **int** | Seconds until expires_at.  Zero once passed. | [optional]
**fulfilled_at** | **string** | When the values were entered, ISO 8601 UTC. | [optional]
**handle_count** | **int** | How many handles the request made. | [optional]
**handles** | [**\ultracart\v2\models\SfvbSecretHandle[]**](SfvbSecretHandle.md) | Every handle with its status.  Left out of the list endpoint; read one request for them. | [optional]
**interval_seconds** | **int** | Poll no more often than this. | [optional]
**keys** | **string[]** | The bulk keys, or empty. | [optional]
**label** | **string** | The label the agent sent, as stored and shown. | [optional]
**reason** | **string** | The reason the agent sent, as stored and shown. | [optional]
**request_id** | **string** | The request id. | [optional]
**request_url** | **string** | The page where the person enters the values.  Show it to them.  Never open or fill it in yourself. | [optional]
**requires_totp** | **bool** | True when the person must enter a code from their authenticator app. | [optional]
**sinks** | **string[]** | The secret fields being collected. | [optional]
**status** | **string** | pending, fulfilled, cancelled or expired. | [optional]
**target_id** | **string** | The object the values are for, or empty for a bulk request or an open one. | [optional]
**user_code** | **string** | Short matching code.  Print it next to request_url so the person can check the page shows the same code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
