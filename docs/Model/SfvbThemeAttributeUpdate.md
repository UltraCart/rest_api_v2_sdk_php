# # SfvbThemeAttributeUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**font** | [**\ultracart\v2\models\SfvbThemeFont**](SfvbThemeFont.md) |  | [optional]
**name** | **string** | Slot name.  Matched without regard to case against what the theme already has, so you do not have to reproduce the exact casing.  A name nothing matches creates a new slot. | [optional]
**type** | **string** | Only consulted when creating a slot the theme does not already have.  For a slot that exists the declared type always wins, because the templates decide it and not the caller. | [optional]
**value** | **string** | The value to store.  An empty string clears the slot, which makes it fall back to the theme&#39;s default rather than removing it.  Ignored for a font when the font field is supplied. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
