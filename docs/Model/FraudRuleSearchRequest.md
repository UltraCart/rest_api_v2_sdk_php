# # FraudRuleSearchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_oid_or_email** | **string** | Affiliate oid (integer) or affiliate email. Email is resolved to oid before searching. | [optional]
**amount_threshold_begin** | **float** | Lower bound on amount/score/percentage thresholds (rules backed by the same numeric column). | [optional]
**amount_threshold_end** | **float** | Upper bound on amount/score/percentage thresholds (rules backed by the same numeric column). | [optional]
**auto_note** | **string** | Wildcard search on the rule&#39;s auto_note. Use &#39;*&#39; for wildcards. | [optional]
**count_threshold_begin** | **int** | Lower bound on count thresholds (rules backed by the same integer count column). | [optional]
**count_threshold_end** | **int** | Upper bound on count thresholds (rules backed by the same integer count column). | [optional]
**created_by** | **string** | Filter to rules created by this user login. | [optional]
**created_date_begin** | **string** | Rule creation date begin (MM/dd/yyyy) | [optional]
**created_date_end** | **string** | Rule creation date end (MM/dd/yyyy) | [optional]
**credit_card_partial** | **string** | Partial credit card number for matching &#39;credit card matches&#39; rules. Use &#39;*&#39; wildcards. | [optional]
**decline_message** | **string** | Wildcard search on the rule&#39;s decline_message. Use &#39;*&#39; for wildcards. | [optional]
**failure_action** | **string** |  | [optional]
**gateway_code** | **string** | Filter to rules with this rotating transaction gateway code in their rotating_transaction_gateway_filters list. | [optional]
**merchant_item_id** | **string** | Filter to rules with this merchant item id in their item_filters list. | [optional]
**modifier_value** | **string** | Wildcard search on the rule&#39;s secondary modifier (eg &#39;address&#39;/&#39;subnet&#39;, gateway codes, avs match types). | [optional]
**modify_custom_field1** | **string** | Wildcard search on rules&#39; modify_custom_field1 value. | [optional]
**modify_custom_field2** | **string** | Wildcard search on rules&#39; modify_custom_field2 value. | [optional]
**modify_custom_field3** | **string** | Wildcard search on rules&#39; modify_custom_field3 value. | [optional]
**modify_custom_field4** | **string** | Wildcard search on rules&#39; modify_custom_field4 value. | [optional]
**modify_custom_field5** | **string** | Wildcard search on rules&#39; modify_custom_field5 value. | [optional]
**modify_custom_field6** | **string** | Wildcard search on rules&#39; modify_custom_field6 value. | [optional]
**modify_custom_field7** | **string** | Wildcard search on rules&#39; modify_custom_field7 value. | [optional]
**modify_skip_affiliate** | **bool** | Filter to rules whose modify_skip_affiliate flag matches this value. | [optional]
**modify_skip_affiliate_network_pixel** | **bool** | Filter to rules whose modify_skip_affiliate_network_pixel flag matches this value. | [optional]
**rule_group** | **string** | Rule group to filter by. | [optional]
**rule_type** | **string** | Rule type to filter by. | [optional]
**search_linked_accounts** | **bool** | Include rules from accounts linked to this merchant. Defaults to false. | [optional]
**storefront_hostname** | **string** | Filter to rules with this storefront hostname in their screen_branding_theme_filters list. | [optional]
**text_value** | **string** | Wildcard search on the rule&#39;s text parameter (email / ip / bin / country / item id / avs codes - the backend disambiguates by rule_type). | [optional]
**theme_code** | **string** | Filter to rules with this screen branding theme code in their screen_branding_theme_filters list. | [optional]
**user_action** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
