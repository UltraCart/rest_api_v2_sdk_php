# WebhookEventCategory

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_category** | **string** | Name of the event category | [optional] 
**events** | [**\ultracart\v2\models\WebhookEventSubscription[]**](WebhookEventSubscription.md) | The events within the category.  Individual subscription flags contained within the child object. | [optional] 
**subscribed** | **bool** | True if all the events within this category are subscribed.  This is a convenience flag to make user interfaces easier. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


