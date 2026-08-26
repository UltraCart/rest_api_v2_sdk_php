# # SfvbCompileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | The container JSON to compile. | [optional]
**container_name** | **string** | Optional container name, used to derive the container id the same way a .cjson file name would.  Omit and the id on the document is kept. | [optional]
**storefront_oid** | **int** | Optional storefront oid.  Required when theme_oid is supplied. | [optional]
**theme_oid** | **int** | Optional theme oid.  Supplies the theme&#39;s inherit groups configuration so compilation matches what the theme would produce.  Omit to compile without inheritance. | [optional]
**validate** | **bool** | Run validation before compiling and fail on errors.  Defaults to true. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
