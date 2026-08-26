# # SfvbFileContentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_compiled** | **bool** | True when this file is compiler output and must not be edited directly. | [optional]
**content** | **string** | UTF-8 content.  Only text/_* files can be read this way. | [optional]
**fs_file_oid** | **int** | StoreFront file system file oid. | [optional]
**hash_sha256** | **string** | SHA-256 of the content.  Also returned as the ETag header; send it back as If-Match when writing. | [optional]
**mime_type** | **string** | Mime type. | [optional]
**path** | **string** | Full path of the file. | [optional]
**size** | **int** | Size in bytes. | [optional]
**truncated** | **bool** | True when the content was cut short.  Never truncated silently. | [optional]
**valid** | **bool** | False when the file failed Velocity validation on its last write. | [optional]
**velocity_errors** | **string** | Velocity errors recorded on the last write.  Null when valid. | [optional]
**version** | **int** | Version number of the content returned. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
