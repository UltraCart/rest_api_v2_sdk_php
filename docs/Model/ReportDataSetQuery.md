# ReportDataSetQuery

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comparison_results** | **bool** | True if a date range filter is provided with comparison date ranges and two results should be returned for the query. | [optional] 
**data_set_query_uuid** | **string** | A unique identifier assigned to the data set query that is returned. | [optional] 
**data_source** | [**\ultracart\v2\models\ReportDataSource**](ReportDataSource.md) |  | [optional] 
**dimensions** | [**\ultracart\v2\models\ReportPageVisualizationDimension[]**](ReportPageVisualizationDimension.md) |  | [optional] 
**filter** | [**\ultracart\v2\models\ReportFilter**](ReportFilter.md) |  | [optional] 
**for_object_id** | **string** | An identifier that can be used to help match up the returned data set | [optional] 
**for_object_type** | **string** | The type of object this data set is for | [optional] 
**metrics** | [**\ultracart\v2\models\ReportPageVisualizationMetric[]**](ReportPageVisualizationMetric.md) |  | [optional] 
**page_size** | **int** | Result set page size.  The default value is 200 records.  Max is 10000. | [optional] 
**selected_filters** | [**\ultracart\v2\models\ReportFilter[]**](ReportFilter.md) |  | [optional] 
**skip_cache** | **bool** | True if the 15 minute cache should be skipped. | [optional] 
**user_data** | **string** | Any other data that needs to be returned with the response to help the UI | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


