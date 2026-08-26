# # ConversationPbxPayConnector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the connector | [optional]
**environment** | **string** | Environment the connector points at.  Only live connectors are returned.  Sandbox and unconfigured connectors are ignored. | [optional]
**friendly_name** | **string** | Friendly name of the connector as shown in the Twilio console | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**processor** | **string** | Payment processor behind this connector | [optional]
**processor_account_id** | **string** | The processor account this connector is bound to (Stripe connected account id or Braintree merchant id).  A payment captured with this connector can only be charged within this account. | [optional]
**sid** | **string** | Twilio installed add-on SID for this connector | [optional]
**unique_name** | **string** | Unique name of the connector.  This is the value used for the paymentConnector attribute of the Twilio Pay verb. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
