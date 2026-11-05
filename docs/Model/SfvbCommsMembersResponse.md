# # SfvbCommsMembersResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_data** | **string** | masked, or shown when show_customer_data was sent. | [optional]
**list_uuid** | **string** | The list, for a list&#39;s members. | [optional]
**members** | [**\ultracart\v2\models\SfvbCommsMember[]**](SfvbCommsMember.md) | This page of members. | [optional]
**notes** | **string[]** | What to keep in mind, such as how to handle customer data that is shown. | [optional]
**page** | **int** | The page number, from 1. | [optional]
**page_size** | **int** | Members per page. | [optional]
**rebuild_required** | **bool** | For a segment, true while it is being rebuilt, so the members are from the last rebuild. | [optional]
**segment_uuid** | **string** | The segment, for a segment&#39;s members. | [optional]
**total_members** | **int** | How many members there are. | [optional]
**total_pages** | **int** | How many pages there are. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
