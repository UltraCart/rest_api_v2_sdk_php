# # SfvbUpsellStepOffer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**downsell_offer_active** | **bool** | Read only.  Whether the downsell offer is switched on. | [optional]
**downsell_offer_name** | **string** | Read only.  The downsell offer&#39;s name. | [optional]
**downsell_offer_oid** | **int** | The offer shown when the shopper declines offer_oid.  Omitted or null for no downsell.  Must be an offer of this storefront. | [optional]
**downsell_offer_stats** | [**\ultracart\v2\models\SfvbUpsellStats**](SfvbUpsellStats.md) |  | [optional]
**offer_active** | **bool** | Read only.  Whether the offer is switched on. | [optional]
**offer_name** | **string** | Read only.  The offer&#39;s name. | [optional]
**offer_oid** | **int** | The offer shown at this step.  Must be an offer of this storefront. | [optional]
**offer_stats** | [**\ultracart\v2\models\SfvbUpsellStats**](SfvbUpsellStats.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
