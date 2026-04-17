# # ConversationPbxClassOfService

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed_countries** | **string[]** | E.164 country calling codes (e.g. 1 for US/Canada, 44 for UK). Empty means domestic only. | [optional]
**block_premium_numbers** | **bool** | Block calls to 900, 976, premium-rate, and shortcode destinations | [optional]
**conversation_pbx_class_of_service_uuid** | **string** | Class of Service unique identifier | [optional]
**default_flag** | **bool** | If true, this CoS applies to all agents without an explicit cos_uuid. Only one per merchant. | [optional]
**description** | **string** | Description of the class of service | [optional]
**merchant_id** | **string** | Merchant Id | [optional]
**name** | **string** | Display name for the class of service | [optional]
**outbound_enabled** | **bool** | Whether agents with this CoS can make outbound calls | [optional]
**time_range_uuid** | **string** | UUID of a time range. If set, outbound calls only permitted during those time windows. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
