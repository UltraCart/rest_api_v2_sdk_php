# # FraudRuleInsertRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**affiliate_email** | **string** | Affiliate email. Used by the &#39;affiliate matches&#39; rule type when affiliate_oid is not supplied. | [optional]
**affiliate_oid** | **int** | Affiliate OID. Used by the &#39;affiliate matches&#39; rule type. If omitted, affiliate_email is required. | [optional]
**amount_threshold** | **float** | Monetary or score threshold. Used by *transaction amount exceeds*, *fraud score exceeds*, and *decline percentage exceeds* rules. | [optional]
**auto_note** | **string** | Note automatically appended to the order&#39;s merchant note when this rule fires. | [optional]
**avs_match_type** | **string** | AVS match type for the zip portion. Used by the &#39;address street and zip avs&#39; rule type. | [optional]
**avs_response_codes** | **string** | AVS response codes (street). Used by the &#39;address street and zip avs&#39; rule type. | [optional]
**count_threshold** | **int** | Integer count threshold. Used by *count exceeds*, *change number*, *quantity exceeds*, and *purchased within last hours* rules. | [optional]
**country_code** | **string** | ISO country code. Used by the &#39;address not in country&#39; rule type. | [optional]
**credit_card_bins** | **string[]** | Credit card BINs to block (max 20). Used by the &#39;credit card block bin&#39; rule type. | [optional]
**email** | **string** | Email address. Used by the &#39;address email&#39; rule type. | [optional]
**failure_action** | **string** | Action to take when this rule fires. | [optional]
**gateway_response_codes** | **string** | Gateway response code key. Used by the &#39;gateway response&#39; rule type. | [optional]
**gateway_response_value** | **string** | Gateway response code value. Used by the &#39;gateway response&#39; rule type. | [optional]
**ip_address** | **string** | IP address or subnet (eg &#39;192.168.1.1&#39; or &#39;10.0.0.0/8&#39;). Used by &#39;exempt ip&#39; and &#39;ip matches&#39; rules. | [optional]
**ip_range_type** | **string** | Specifies whether an IP rule applies to a single address or a subnet. | [optional]
**item_filters** | **string[]** | Optional list of merchant item ids restricting this rule to orders containing one or more of these items. | [optional]
**merchant_item_id** | **string** | Merchant item id. Used by the &#39;item matches&#39; rule type. | [optional]
**modify_custom_field1** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 1 to this value. | [optional]
**modify_custom_field2** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 2 to this value. | [optional]
**modify_custom_field3** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 3 to this value. | [optional]
**modify_custom_field4** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 4 to this value. | [optional]
**modify_custom_field5** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 5 to this value. | [optional]
**modify_custom_field6** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 6 to this value. | [optional]
**modify_custom_field7** | **string** | When failure_action is &#39;Process Payment and Modify&#39;, set order custom field 7 to this value. | [optional]
**modify_skip_affiliate** | **bool** | When failure_action is &#39;Process Payment and Modify&#39;, strip the affiliate from the order. | [optional]
**modify_skip_affiliate_network_pixel** | **bool** | When failure_action is &#39;Process Payment and Modify&#39;, skip firing the affiliate network pixel. | [optional]
**rotating_transaction_gateway_filters** | **int[]** | Optional list of rotating transaction gateway oids restricting this rule to orders processed by one of these gateways. | [optional]
**rule_type** | **string** | Rule type. Also returned by GET /v2/fraud/lookup_values. | [optional]
**screen_branding_theme_filters** | **int[]** | Optional list of screen branding theme oids restricting this rule to orders associated with one or more storefronts. | [optional]
**user_action** | **string** | Only used by rule types that distinguish between attempted and approved transactions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
