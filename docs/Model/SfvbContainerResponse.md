# # SfvbContainerResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active_theme** | **bool** | True when this container lives in the theme currently serving live traffic.  Writing to it requires the sfvb_publish scope. | [optional]
**cjson** | **string** | The container JSON.  Runtime state is stripped on the way out. | [optional]
**container_id** | **string** | Container id as the compiler will derive it. | [optional]
**container_name** | **string** | Container name. | [optional]
**hash_sha256** | **string** | SHA-256 of the cjson.  Send back as If-Match when writing. | [optional]
**last_modified** | **string** | When the container was last modified, where the store records it. | [optional]
**owner_object_id** | **string** | Identifier of the owning object within its store. | [optional]
**owner_type** | **string** | Where this container lives. | [optional]
**path** | **string** | File path, for theme and page containers only. | [optional]
**version** | **int** | File version, for theme and page containers only. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
