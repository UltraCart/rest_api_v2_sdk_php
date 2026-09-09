# # SfvbThemeAttributesResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | True when this theme is the one serving live traffic.  Changing an active theme&#39;s colours changes what shoppers see immediately, so the write requires the sfvb_publish scope.  Duplicate the theme and restyle the copy to work with an ordinary write scope. | [optional]
**attributes** | [**\ultracart\v2\models\SfvbThemeAttribute[]**](SfvbThemeAttribute.md) | Every slot this theme has, including ones declared by a template but never set.  Sorted by name. | [optional]
**theme_name** | **string** | Theme name, so a caller can confirm it is working on the theme it meant. | [optional]
**theme_oid** | **int** | StoreFront theme oid these belong to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
