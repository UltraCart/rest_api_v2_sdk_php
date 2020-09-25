# ApplyLibraryItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | Cjson from library item, only populated if this library item was a cjson snippet | [optional] 
**content_type** | **string** | flow, campaign, cjson, or upsell | [optional] 
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional] 
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional] 
**storefront_oid** | **int** | StoreFront oid where content originates necessary for tracking down relative assets | [optional] 
**success** | **bool** | Indicates if API call was successful | [optional] 
**title** | **string** | title of library item, usually the name of the flow or campaign, or description of cjson | [optional] 
**uuid** | **string** | UUID of communication flow or campaign if this library item was a campaign or flow | [optional] 
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


