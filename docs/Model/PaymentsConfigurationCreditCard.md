# PaymentsConfigurationCreditCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accept_credit_card** | **bool** | Master flag indicating whether this merchant accepts credit card payments | [optional] 
**billed_by** | **string** | Description that appears on customer statements | [optional] 
**charge_during_checkout** | **bool** | If false, order will be accepted and placed into Accounts Receivable without charging card first | [optional] 
**collect_cvv2** | **bool** | UltraCart will require customer to enter cvv if this is true | [optional] 
**configured_gateway_details** | **string** | Human readable description of the credit card gateway currently configured | [optional] 
**failed_attempts** | **int** | The number of failed attempts before the order is placed into Accounts Receivable for manual intervention | [optional] 
**hide_connect_single_gateway** | **bool** | This internal flag aids the UI in determining which buttons to show. | [optional] 
**send_customer_billing_update_on_decline** | **bool** | UltraCart will send customers emails to update their credit card if the card is declined | [optional] 
**supported_cards** | [**\ultracart\v2\models\PaymentsConfigurationCreditCardType[]**](PaymentsConfigurationCreditCardType.md) | A list of credit cards the merchant wishes to accept. | [optional] 
**test_methods** | [**\ultracart\v2\models\PaymentsConfigurationTestMethod[]**](PaymentsConfigurationTestMethod.md) | An array of test methods for placing test orders.  The cards defined here may be real or fake, but any order placed with them will be marked as Test orders | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


