# # SfvbValidateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | The container JSON to validate. | [optional]
**container_name** | **string** | Container name it will be stored under, for example upsell-offer or email-footer.  Some rules key off the name. | [optional]
**include_warnings** | **bool** | Include quality warnings as well as errors.  Defaults to true. | [optional]
**marketing_email** | **bool** | For email containers, whether this is a marketing email.  Marketing emails carry CAN-SPAM footer requirements that transactional emails do not. | [optional]
**owner_type** | **string** | Where this container is destined to live.  Determines which contextual rules apply. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
