# # CheckoutHandoffRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cart** | [**\ultracart\v2\models\Cart**](Cart.md) |  | [optional]
**error_parameter_name** | **string** | If any error happen during the processing on the UltraCart side, the browser will be redirected to your error_return_url with the error passed in this parameter name. | [optional]
**error_return_url** | **string** | The URL to return the browser to if there are processing errors on the UltraCart side. | [optional]
**operation** | **string** | The type of handoff operation to perform | [optional]
**paypal_maximum_upsell_revenue** | **float** | The maximum amount of revenue that you think the customer could add during a custom upsell after sequence on your checkout. | [optional]
**paypal_return_url** | **string** | The URl to return the customers browser to after they have completed the PayPal process. | [optional]
**secure_host_name** | **string** | The desired secure host name to perform the handoff on.  This should match the desired StoreFront. | [optional]
**ucacid** | **string** | The UltraCart Analytics cookie value.  Populate this if you&#39;re handing off from a different domain than the checkout. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
