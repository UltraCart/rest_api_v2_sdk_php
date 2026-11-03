# # SfvbTrackingHtml

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approval_needed** | **bool** | On a dry run, whether the real write needs an approved tracking_html.put request. | [optional]
**changed** | **bool** | On a write, whether the slot changed.  False when the content was already the same. | [optional]
**content** | **string** | The HTML, with its Velocity tokens as stored.  Only on a read of one slot and on a write.  Null when empty. | [optional]
**dry_run** | **bool** | On a write, true when nothing was saved. | [optional]
**hash_sha256** | **string** | The SHA-256 of the HTML as UTF-8, the hash of an empty string when empty.  Send it as If-Match on the write. | [optional]
**label** | **string** | The slot&#39;s name in the admin. | [optional]
**runs_on** | **string** | Where the storefront injects it, in words. | [optional]
**set** | **bool** | True when the slot holds any HTML. | [optional]
**size_bytes** | **int** | The size of the HTML in UTF-8 bytes.  0 when empty. | [optional]
**slot** | **string** | tracking is injected into every page except the receipt.  conversion is injected into the receipt only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
