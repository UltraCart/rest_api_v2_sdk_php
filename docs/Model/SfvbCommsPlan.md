# # SfvbCommsPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_customers** | **int** | Customers being mailed now. | [optional]
**allow_list_import** | **bool** | True when the account may import lists from another email provider. | [optional]
**allow_tracking_emails** | **bool** | True when shipment tracking emails are allowed. | [optional]
**bounce_count** | **int** | Emails bounced. | [optional]
**bounce_percentage** | **float** | The bounce percentage. | [optional]
**delivered_count** | **int** | Emails delivered. | [optional]
**initial_sending_limits** | **int** | The starting sending limit for a new account. | [optional]
**max_active_customers** | **int** | The most customers the plan mails. | [optional]
**max_emails_per_day** | **int** | The daily sending cap. | [optional]
**max_emails_per_hour** | **int** | The hourly sending cap. | [optional]
**max_emails_per_month** | **int** | The monthly sending cap. | [optional]
**paused_for_spam** | **bool** | True when sending is paused for spam complaints. | [optional]
**plan_customers** | **int** | Customers the plan covers. | [optional]
**plan_emails** | **int** | Emails a month the plan covers. | [optional]
**plan_name** | **string** | The plan, such as small. | [optional]
**plan_name_formatted** | **string** | The plan&#39;s display name. | [optional]
**require_order_within_last_days** | **int** | When set, only customers who ordered within this many days are mailed. | [optional]
**sent_emails_per_day** | **int** | Emails sent in the last day. | [optional]
**sent_emails_per_hour** | **int** | Emails sent in the last hour. | [optional]
**sent_emails_per_month** | **int** | Emails sent in the last month. | [optional]
**spam_count** | **int** | Spam complaints. | [optional]
**spam_percent_limit** | **int** | The spam complaint percentage at which sending pauses. | [optional]
**spam_percentage** | **float** | The spam complaint percentage. | [optional]
**total_customers** | **int** | Customers allowed in all. | [optional]
**total_emails** | **int** | Emails a month allowed in all. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
