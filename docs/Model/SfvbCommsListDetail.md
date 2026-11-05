# # SfvbCommsListDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_dts** | **string** | When the list was created. | [optional]
**folder_uuid** | **string** | The list and segment folder it is filed in, or none. | [optional]
**hash_sha256** | **string** | The hash of the name, folder and public settings.  Send it as If-Match to change or archive the list. | [optional]
**list_uuid** | **string** | The list uuid. | [optional]
**member_count** | **int** | How many customers are on the list. | [optional]
**name** | **string** | The list name. | [optional]
**public_description** | **string** | The description subscribers see for a public list. | [optional]
**public_list** | **bool** | True when subscribers can choose this list on the storefront&#39;s email preferences page. | [optional]
**used_by** | [**\ultracart\v2\models\SfvbCommsSegmentUsedBy[]**](SfvbCommsSegmentUsedBy.md) | The campaigns that send to the list and the flows it starts, each with whether it is live. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
