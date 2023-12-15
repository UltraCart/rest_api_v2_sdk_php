# Webhook

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_user_oid** | **int** | Populated if webhook associated with an API user | [optional] 
**api_version** | **string** | Version of the API objects that are sent in notifications | [optional] 
**application_profile** | [**\ultracart\v2\models\ApiUserApplicationProfile**](ApiUserApplicationProfile.md) |  | [optional] 
**authentication_type** | **string** | The type of authentication this webhook will use when communicating with your server | [optional] 
**basic_password** | **string** | Basic authentication password | [optional] 
**basic_username** | **string** | Basic authentication user name | [optional] 
**compress_events** | **bool** | Compress events with GZIP then base 64 encode them as a string | [optional] 
**consecutive_failures** | **int** | The number of consecutive failures that have occurred trying to deliver notifications to the target server | [optional] 
**disabled** | **bool** | True if the webhook has been disabled | [optional] 
**event_categories** | [**\ultracart\v2\models\WebhookEventCategory[]**](WebhookEventCategory.md) | The categories of events.  Individual events and subscriptions are handled in the child objects.  _placeholders parameter effects the population of this on a retrieval. | [optional] 
**iam_access_key** | **string** | IAM Access Key for AWS SQS Delivery | [optional] 
**iam_secret_key** | **string** | IAM Secret Key for AWS SQS Delivery | [optional] 
**maximum_events** | **int** | The maximum number of events in the payload that UltraCart will deliver | [optional] 
**maximum_size** | **int** | The maximum size of the payload that UltraCart will deliver | [optional] 
**merchant_id** | **string** | The UltraCart merchant ID that owns this webhook | [optional] 
**next_retry_after** | **string** | The next time UltraCart will attempt delivery if failures have been occurring | [optional] 
**pending** | **int** | The number of pending events for this webhook | [optional] 
**webhook_oid** | **int** | The object identifier for this webhook | [optional] 
**webhook_url** | **string** | The URL to deliver events to.  Must be HTTPS for customer related information. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


