# TransactionEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | Actual template contents | [optional] 
**esp_domain_uuid** | **string** | The uuid of the sending domain | [optional] 
**esp_friendly_name** | **string** | Friendly from that will appear in customer email clients. | [optional] 
**esp_user** | **string** | The username of the sending email.  This is not the full email.  Only the username which is everything before the @ sign. | [optional] 
**file_exists** | **bool** | An internal identifier used to aid in retrieving templates from the filesystem. | [optional] 
**file_name** | **string** | File name | [optional] 
**group** | **string** | Group | [optional] 
**handlebar_variables** | **string[]** | Handlebar Variables available for email template | [optional] 
**invalid** | **bool** | Invalid will be true if the template cannot compile | [optional] 
**last_modified** | **string** | Last modified timestamp | [optional] 
**options** | [**\ultracartv2\models\TransactionEmailOption[]**](TransactionEmailOption.md) | Options that help govern how and when this template is used | [optional] 
**path** | **string** | directory path where template is stored in file system | [optional] 
**size** | **string** | Size of file in friendly description | [optional] 
**store_front_fs_directory_oid** | **int** | Internal identifier used to store and retrieve template from filesystem | [optional] 
**store_front_fs_file_oid** | **int** | Internal identifier used to store and retrieve template from filesystem | [optional] 
**subject** | **string** | Subject | [optional] 
**syntax_errors** | **string** | Any syntax errors contained within the tempalate | [optional] 
**template_path_relative_path** | **string** | Internal value used to locate the template in the filesystem | [optional] 
**theme_relative_path** | **string** | Theme relative path in the filesystem. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


