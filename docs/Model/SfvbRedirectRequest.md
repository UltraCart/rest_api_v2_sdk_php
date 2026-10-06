# # SfvbRedirectRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**note** | **string** | Why the rule exists, up to 500 characters. | [optional]
**over_live_page** | **bool** | Allow a source that is a live, visible page or item, which the rule then hides. | [optional]
**source** | **string** | The path to catch, starting with /.  End it with /_* to catch everything below. | [optional]
**status** | **string** | Updates only.  301 turns an admin rule into a permanent redirect.  Leave empty to keep the rule&#39;s status.  New rules are always 301. | [optional]
**target** | **string** | A path on the storefront, or a URL on one of its own hosts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
