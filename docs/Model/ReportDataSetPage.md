# # ReportDataSetPage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_set_uuid** | **string** | A unique identifier assigned to the data set that is returned. | [optional]
**merchant_id** | **string** | Merchant that owns this data set | [optional]
**next_page_token** | **string** |  | [optional]
**next_start_index** | **int** |  | [optional]
**page_number** | **int** |  | [optional]
**row_count** | **int** |  | [optional]
**rows** | [**\ultracart\v2\models\ReportDataSetRow[]**](ReportDataSetRow.md) | Rows returned for the data set | [optional]
**rows_s3_url** | **string** | Signed S3 URL where the page rows can be downloaded from | [optional]
**start_index** | **int** | Zero based index of the starting row | [optional]
**table_id** | **string** | The BigQuery destination table id that contains the result. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
