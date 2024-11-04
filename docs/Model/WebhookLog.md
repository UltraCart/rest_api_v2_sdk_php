# # WebhookLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_dts** | **string** | Date/time of delivery | [optional]
**duration** | **int** | Number of milliseconds to process the notification | [optional]
**queue_delay** | **int** | Number of milliseconds of delay caused by queuing | [optional]
**request** | **string** | Request payload (first 100,000 characters) | [optional]
**request_headers** | [**\ultracart\v2\models\HTTPHeader[]**](HTTPHeader.md) | Request headers sent to the server | [optional]
**request_id** | **string** | Request id is a unique string that you can look up in the logs | [optional]
**response** | **string** | Response payload (first 100,000 characters) | [optional]
**response_headers** | [**\ultracart\v2\models\HTTPHeader[]**](HTTPHeader.md) | Response headers received from the server | [optional]
**status_code** | **int** | HTTP status code received from the server | [optional]
**success** | **bool** | True if the delivery was successful | [optional]
**uri** | **string** | URI of the webhook delivered to | [optional]
**webhook_oid** | **int** | webhook oid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
