# ApplyLibraryItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**\ultracart\v2\models\LibraryItemAttribute[]**](LibraryItemAttribute.md) | Attributes from the library item | [optional] 
**cjson** | **string** | Cjson from library item, only populated if this library item was a cjson snippet or marketing email (not transactional) | [optional] 
**content_type** | **string** | flow, campaign, cjson, upsell, transactional_email or email | [optional] 
**email_template_vm_path** | **string** | If a marketing email was applied, this is the path to the template encapsulating the cjson.  This is needed for the UltraCart UI. | [optional] 
**error** | [**\ultracart\v2\models\Error**](Error.md) |  | [optional] 
**metadata** | [**\ultracart\v2\models\ResponseMetadata**](ResponseMetadata.md) |  | [optional] 
**storefront_oid** | **int** | StoreFront oid where content originates necessary for tracking down relative assets | [optional] 
**success** | **bool** | Indicates if API call was successful | [optional] 
**title** | **string** | title of library item, usually the name of the flow or campaign, or description of cjson | [optional] 
**uuid** | **string** | UUID of marketing email or communication flow/campaign if this library item was an email, campaign or flow | [optional] 
**warning** | [**\ultracart\v2\models\Warning**](Warning.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


