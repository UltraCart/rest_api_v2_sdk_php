# # SfvbUtmShortcode

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | The shortcode.  Matched ignoring case. | [optional]
**creation_dts** | **string** | When the shortcode was created, ISO 8601. | [optional]
**description** | **string** | What the shortcode is for.  Null when blank. | [optional]
**hash_sha256** | **string** | The hash of the code, description and values.  Send it as If-Match when changing or deleting the shortcode. | [optional]
**itm_campaign** | **string** | ITM campaign the shortcode applies.  Null when blank. | [optional]
**itm_content** | **string** | ITM content the shortcode applies.  Null when blank. | [optional]
**itm_id** | **string** | ITM id the shortcode applies.  Null when blank. | [optional]
**itm_medium** | **string** | ITM medium the shortcode applies.  Null when blank. | [optional]
**itm_source** | **string** | ITM (internal tracking) source the shortcode applies.  Null when blank. | [optional]
**itm_term** | **string** | ITM term the shortcode applies.  Null when blank. | [optional]
**last_modified_dts** | **string** | When the shortcode last changed, ISO 8601. | [optional]
**path_segment** | **string** | Append this to a storefront path (as its last segment) to apply the shortcode.  Fires only where that full path is not itself a page. | [optional]
**query_parameter** | **string** | Add this query parameter to a link on any page running UC Analytics, including other sites, to apply the shortcode. | [optional]
**shortcode_oid** | **int** | The shortcode&#39;s id on this storefront. | [optional]
**utm_campaign** | **string** | UTM campaign the shortcode applies.  Null when blank. | [optional]
**utm_content** | **string** | UTM content the shortcode applies.  Null when blank. | [optional]
**utm_id** | **string** | UTM id the shortcode applies.  Null when blank. | [optional]
**utm_medium** | **string** | UTM medium the shortcode applies.  Null when blank. | [optional]
**utm_source** | **string** | UTM source the shortcode applies.  Null when blank. | [optional]
**utm_term** | **string** | UTM term the shortcode applies.  Null when blank. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
