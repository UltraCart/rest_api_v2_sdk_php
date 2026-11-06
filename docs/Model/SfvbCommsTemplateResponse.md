# # SfvbCommsTemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_cjson** | **string** | The template&#39;s body, as CJSON. | [optional]
**email_template_vm_path** | **string** | The Velocity template it renders inside, as stored.  It is looked up in the storefront&#39;s active theme. | [optional]
**notes** | **string[]** | What isn&#39;t shown. | [optional]
**template** | [**\ultracart\v2\models\SfvbCommsTemplate**](SfvbCommsTemplate.md) |  | [optional]
**template_exists** | **bool** | True when the file at template_path exists. | [optional]
**template_note** | **string** | Why there is no template file, or null when there is one. | [optional]
**template_path** | **string** | The theme file that template is, as a render finds it.  Read it with the files endpoints, whose read also reports valid and velocity_errors.  Null when it couldn&#39;t be worked out, with template_note saying why. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
