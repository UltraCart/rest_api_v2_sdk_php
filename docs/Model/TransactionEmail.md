# TransactionEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | Actual template contents | [optional] 
**file_exists** | **bool** | An internal identifier used to aid in retrieving templates from the filesystem. | [optional] 
**file_name** | **string** | File name | [optional] 
**group** | **string** | Group | [optional] 
**invalid** | **bool** | Invalid will be true if the template cannot compile | [optional] 
**last_modified** | **string** | Last modified timestamp | [optional] 
**options** | [**\ultracart\v2\models\TransactionEmailOption[]**](TransactionEmailOption.md) | Options that help govern how and when this template is used | [optional] 
**path** | **string** | directory path where template is stored in file system | [optional] 
**size** | **string** | Size of file in friendly description | [optional] 
**store_front_fs_directory_oid** | **int** | Internal identifier used to store and retrieve template from filesystem | [optional] 
**store_front_fs_file_oid** | **int** | Internal identifier used to store and retrieve template from filesystem | [optional] 
**syntax_errors** | **string** | Any syntax errors contained within the tempalate | [optional] 
**template_path_relative_path** | **string** | Internal value used to locate the template in the filesystem | [optional] 
**theme_relative_path** | **string** | Theme relative path in the filesystem. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


