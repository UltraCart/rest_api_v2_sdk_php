# # BulkJobRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**operation** | **string** | Mutation mode - insert (create only) or upsert (create or update). Defaults to insert. This is always a mutation verb â€” the bulk surface writes only and has no read / query mode. upsert is currently supported for customer only. | [optional]
**s3_key** | **string** | The s3_key returned by the upload-url endpoint | [optional]
**webhook_secret** | **string** | Optional shared secret echoed in the completion POST&#39;s Authorization header | [optional]
**webhook_url** | **string** | Optional URL to POST once, on completion | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
