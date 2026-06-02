# # Notification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can_filter_by_distribution_centers** | **bool** | True if this notification can be filtered to only send for one or more distribution centers. | [optional]
**can_include_affiliate** | **bool** | True if this notification can include an affiliate information. | [optional]
**can_include_order** | **bool** | True if this notification can include an order attachment. | [optional]
**can_include_order_plain_text** | **bool** | True if this notification can include a plain text rendering of an order directly within an email.  Some desire this over an attachment | [optional]
**distribution_center_filters** | **string[]** | If this notification supports it, this list of distribution center CODES will filter the notification to just those distribution centers. | [optional]
**include_affiliate** | **bool** | If true, and this notification supports it, affiliate information will be attached to all notifications of this type | [optional]
**include_order** | **bool** | If true, and this notification supports it, the order will be attached to all notifications of this type | [optional]
**include_order_plain_text** | **bool** | If true, and this notification supports it, a plain text order will be directly inserted into all notifications of this type | [optional]
**name** | **string** | The name of this notification. | [optional]
**notification_group** | **string** | A group for this notification.  This name is only used for visual grouping within interfaces. | [optional]
**selected** | **bool** | True if this user wishes to receive this email notification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
