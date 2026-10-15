# # SfvbCommsSendingDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment** | **string** | For an amazon domain, what UltraCart did last, such as restarting a verification that failed. | [optional]
**dkim_status** | **string** | For an amazon domain, whether the DKIM records were found.  Pending, Success or Failed. | [optional]
**dns_records** | [**\ultracart\v2\models\SfvbCommsDnsRecord[]**](SfvbCommsDnsRecord.md) | For an amazon domain, the DNS records to publish.  Empty for a mailgun domain, whose records are in Mailgun. | [optional]
**domain** | **string** | The domain mail is sent from.  A leading www. or secure. is dropped.  Required to create. | [optional]
**esp_domain_uuid** | **string** | UltraCart&#39;s id for the sending domain.  Set by the server. | [optional]
**identity_status** | **string** | For an amazon domain, whether the verification record was found.  Pending until it is, then Success, or Failed after 72 hours. | [optional]
**mailgun_api_key** | **string** | For a mailgun domain, the Mailgun account&#39;s private API key.  A secret field.  Reads return a mask.  To set it, send a secret handle (sec_...) made for this domain by POST secrets with sink mailgun.domain.api_key.  Send the mask back, or leave it out, to keep it.  Required to create a mailgun domain. | [optional]
**provider** | **string** | Who sends the mail.  amazon sends through UltraCart after the DNS records are published.  mailgun sends through the merchant&#39;s own Mailgun account.  Required to create, and fixed after. | [optional]
**start_dkim_dts** | **string** | For an amazon domain, when the current DKIM check started. | [optional]
**start_identity_dts** | **string** | For an amazon domain, when the current verification started. | [optional]
**verified** | **bool** | True when an amazon domain&#39;s verification and DKIM records have both been found, so it can send. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
