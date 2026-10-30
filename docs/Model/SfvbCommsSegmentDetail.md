# # SfvbCommsSegmentDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_dts** | **string** | When it was created (ISO 8601, UTC). | [optional]
**filter_profile_equation_json** | **string** | The rule, as JSON text in the admin editor&#39;s shape.  Every entry in groups must hold, and inside a group one function is enough. | [optional]
**folder_uuid** | **string** | The list and segment folder it is filed in, or absent. | [optional]
**hash_sha256** | **string** | Send as If-Match on an update.  Covers the name, the rule and the folder. | [optional]
**member_count** | **int** | How many customers it held at its last rebuild.  Out of date while rebuild_required is true. | [optional]
**name** | **string** | The segment name. | [optional]
**rebuild_nightly** | **bool** | True when the rule has a date range, so the segment is also rebuilt every night. | [optional]
**rebuild_percentage** | **float** | How far the current rebuild has got, when one is running. | [optional]
**rebuild_required** | **bool** | True when the rule changed and the segment has not finished rebuilding. | [optional]
**segment_uuid** | **string** | The segment uuid. | [optional]
**used_by** | [**\ultracart\v2\models\SfvbCommsSegmentUsedBy[]**](SfvbCommsSegmentUsedBy.md) | The campaigns that send to it and the flows it starts. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
