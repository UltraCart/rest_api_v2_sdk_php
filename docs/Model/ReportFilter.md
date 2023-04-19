# # ReportFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**config** | **string** | A JSON representation of the configuration for this visualization | [optional]
**connections** | [**\ultracart\v2\models\ReportFilterConnection[]**](ReportFilterConnection.md) | How this filter connects to the data sources and columns | [optional]
**name** | **string** |  | [optional]
**styles** | **string** | A JSON representation of the style configuration for this visualization | [optional]
**timezone** | **string** | The timezone that the date range is querying on. | [optional]
**type** | **string** | Type of filter | [optional]
**uuid** | **string** | Unique UUID assigned to the filter.  Assists when returning values that the filter can use. | [optional]
**values** | **string[]** | The selected values for the filter.  When used, some type conversion will need to occur. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
