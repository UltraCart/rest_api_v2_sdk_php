# # ReportDataSet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data_set_query_uuid** | **string** | A unique identifier assigned to the data set query that is returned. | [optional]
**data_set_uuid** | **string** | A unique identifier assigned to the data set that is returned. | [optional]
**destination_table_id** | **string** | The BigQuery destination table id that contains the result. | [optional]
**error_message** | **string** | Error message if the query failed. | [optional]
**executed_sql** | **string** |  | [optional]
**for_object_id** | **string** | An identifier that can be used to help match up the returned data set | [optional]
**for_object_type** | **string** | The type of object this data set is for | [optional]
**initial_pages** | [**\ultracart\v2\models\ReportDataSetPage[]**](ReportDataSetPage.md) | Initial pages returned in the dataset | [optional]
**max_results** | **int** | The total number of results | [optional]
**merchant_id** | **string** | Merchant that owns this data set | [optional]
**page_count** | **int** | The total number of pages in the result set | [optional]
**page_size** | **int** | The size of the pages | [optional]
**request_dts** | **string** | Date/Time of the client submitted the request.  Can be used to resolve out of order query completion results | [optional]
**schema** | [**\ultracart\v2\models\ReportDataSetSchema[]**](ReportDataSetSchema.md) | The schema associated with the data set. | [optional]
**security_level** | **string** | Security level this dataset was read from. | [optional]
**timezone** | **string** |  | [optional]
**user_data** | **string** | Any other data that needs to be returned with the response to help the UI | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
