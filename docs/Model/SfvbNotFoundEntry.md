# # SfvbNotFoundEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bot_hits** | **int** | Bot hits since bot counting began on this entry.  Empty when not yet counted. | [optional]
**bot_share** | **object** | bot_hits divided by counted_hits, 0 to 1.  Empty when not yet counted. | [optional]
**counted_hits** | **int** | Hits since bot counting began, the base for bot_share. | [optional]
**first_seen_dts** | **string** | First hit, ISO 8601. | [optional]
**hits** | **int** | Every recorded hit, bots included. | [optional]
**ignored** | **bool** | True when the entry is ignored and no longer counts. | [optional]
**last_seen_dts** | **string** | Latest hit, ISO 8601. | [optional]
**not_found_id** | **string** | The entry&#39;s id. | [optional]
**path** | **string** | The path, without its query string.  Token-like segments show as {token} unless asked for. | [optional]
**redirected_to** | **string** | Where a redirect rule now sends this path, when one does. | [optional]
**referrer_hosts** | **string[]** | Hosts of the pages that linked to it. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
