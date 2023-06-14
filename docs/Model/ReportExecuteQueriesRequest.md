# ReportExecuteQueriesRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_uuid** | **string** | Unique UUID assigned to this client during the auth.  This will be used to locate the websocket connect id. | [optional] 
**connection_id** | **string** | The websocket connection id that should receive back notices of query completion. | [optional] 
**default_dataset_id** | **string** |  | [optional] 
**default_project_id** | **string** |  | [optional] 
**merchant_id** | **string** |  | [optional] 
**queries** | [**\ultracart\v2\models\ReportDataSetQuery[]**](ReportDataSetQuery.md) | An array of queries that we want the lambda function to execute. | [optional] 
**request_dts** | **string** | Date/Time of the client submitted the request.  Can be used to resolve out of order query completion results | [optional] 
**security_level** | **string** | Security level to execute report under | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


