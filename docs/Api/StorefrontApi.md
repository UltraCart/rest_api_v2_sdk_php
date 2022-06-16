# ultracart\v2\StorefrontApi

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addToLibrary**](StorefrontApi.md#addToLibrary) | **POST** /storefront/code_library | Add to library
[**applyToStoreFront**](StorefrontApi.md#applyToStoreFront) | **POST** /storefront/code_library/apply | Apply library item to storefront.
[**archiveEmailList**](StorefrontApi.md#archiveEmailList) | **POST** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/archive | Archive email list
[**archiveEmailSegment**](StorefrontApi.md#archiveEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/archive | Archive email segment
[**backPopulateEmailFlow**](StorefrontApi.md#backPopulateEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/backfill | Back populate email flow
[**checkDownloadEmailSegment**](StorefrontApi.md#checkDownloadEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/downloadPrepare/{email_segment_rebuild_uuid} | Check download of email segment
[**cloneEmailCampaign**](StorefrontApi.md#cloneEmailCampaign) | **POST** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/clone | Clone email campaign
[**cloneEmailFlow**](StorefrontApi.md#cloneEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/clone | Clone email flow
[**createEmailSendingDomain**](StorefrontApi.md#createEmailSendingDomain) | **POST** /storefront/email/sending_domains/{domain}/create | Create email campaign
[**createEmailSendingDomain2**](StorefrontApi.md#createEmailSendingDomain2) | **POST** /storefront/email/sending_domains | Create email sending domain for various providers
[**createTwilioAccount**](StorefrontApi.md#createTwilioAccount) | **POST** /storefront/twilio/accounts | Create Twilio account
[**deleteEmailCampaignFolder**](StorefrontApi.md#deleteEmailCampaignFolder) | **DELETE** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Delete email campaignFolder
[**deleteEmailCommseqStat**](StorefrontApi.md#deleteEmailCommseqStat) | **DELETE** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stat | Delete communication sequence stats
[**deleteEmailEmail**](StorefrontApi.md#deleteEmailEmail) | **DELETE** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Delete email email
[**deleteEmailFlowFolder**](StorefrontApi.md#deleteEmailFlowFolder) | **DELETE** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Delete email flowFolder
[**deleteEmailListCustomer**](StorefrontApi.md#deleteEmailListCustomer) | **DELETE** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers/{email_customer_uuid} | Delete email list customer
[**deleteEmailListSegmentFolder**](StorefrontApi.md#deleteEmailListSegmentFolder) | **DELETE** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Delete email ListSegmentFolder
[**deleteEmailPostcard**](StorefrontApi.md#deleteEmailPostcard) | **DELETE** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Delete email postcard
[**deleteEmailSendingDomain**](StorefrontApi.md#deleteEmailSendingDomain) | **DELETE** /storefront/email/sending_domains/{domain} | delete email campaign
[**deleteExperiment**](StorefrontApi.md#deleteExperiment) | **DELETE** /storefront/{storefront_oid}/experiments/{storefront_experiment_oid} | Delete experiment
[**deleteHeatmap**](StorefrontApi.md#deleteHeatmap) | **DELETE** /storefront/{storefront_oid}/screen_recordings/heatmap | Delete screen recording heatmap
[**deleteLibraryItem**](StorefrontApi.md#deleteLibraryItem) | **DELETE** /storefront/code_library/{library_item_oid} | Delete library item
[**deleteLibraryItemPublishedVersions**](StorefrontApi.md#deleteLibraryItemPublishedVersions) | **DELETE** /storefront/code_library/{library_item_oid}/published_versions | Delete all published versions for a library item, including anything in review.
[**deleteScreenRecordingSegment**](StorefrontApi.md#deleteScreenRecordingSegment) | **DELETE** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Delete screen recording segment
[**deleteTwilioAccount**](StorefrontApi.md#deleteTwilioAccount) | **DELETE** /storefront/twilio/accounts/{esp_twilio_uuid} | delete Twilio account
[**duplicateLibraryItem**](StorefrontApi.md#duplicateLibraryItem) | **POST** /storefront/code_library/{library_item_oid}/duplicate | Duplicate library item.
[**favoriteScreenRecording**](StorefrontApi.md#favoriteScreenRecording) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/favorite | Update favorite flag on screen recording
[**geocodeAddress**](StorefrontApi.md#geocodeAddress) | **POST** /storefront/{storefront_oid}/email/geocode | Obtain lat/long for an address
[**getCountries**](StorefrontApi.md#getCountries) | **GET** /storefront/{storefront_oid}/email/countries | Get countries
[**getEditorToken**](StorefrontApi.md#getEditorToken) | **GET** /storefront/{storefront_oid}/editor_token | Gets editor token
[**getEmailBaseTemplates**](StorefrontApi.md#getEmailBaseTemplates) | **GET** /storefront/{storefront_oid}/email/baseTemplates | Get email communication base templates
[**getEmailCampaign**](StorefrontApi.md#getEmailCampaign) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Get email campaign
[**getEmailCampaignFolder**](StorefrontApi.md#getEmailCampaignFolder) | **GET** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Get email campaign folder
[**getEmailCampaignFolders**](StorefrontApi.md#getEmailCampaignFolders) | **GET** /storefront/{storefront_oid}/email/campaign_folders | Get email campaign folders
[**getEmailCampaignScreenshots**](StorefrontApi.md#getEmailCampaignScreenshots) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/screenshots | Get email campaign screenshots
[**getEmailCampaigns**](StorefrontApi.md#getEmailCampaigns) | **GET** /storefront/{storefront_oid}/email/campaigns | Get email campaigns
[**getEmailCampaignsWithStats**](StorefrontApi.md#getEmailCampaignsWithStats) | **GET** /storefront/{storefront_oid}/email/campaignsWithStats/{stat_days} | Get email campaigns with stats
[**getEmailCommseq**](StorefrontApi.md#getEmailCommseq) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Get email commseq
[**getEmailCommseqEmailStats**](StorefrontApi.md#getEmailCommseqEmailStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/emailStats | Get email communication sequence emails stats
[**getEmailCommseqPostcardStats**](StorefrontApi.md#getEmailCommseqPostcardStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/postcardStats | Get email communication sequence postcard stats
[**getEmailCommseqStatOverall**](StorefrontApi.md#getEmailCommseqStatOverall) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stat | Get communication sequence stats overall
[**getEmailCommseqStepStats**](StorefrontApi.md#getEmailCommseqStepStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stepStats | Get email communication sequence step stats
[**getEmailCommseqStepWaiting**](StorefrontApi.md#getEmailCommseqStepWaiting) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/waiting | Get email communication sequence customers waiting at each requested step
[**getEmailCommseqWebhookEditorValues**](StorefrontApi.md#getEmailCommseqWebhookEditorValues) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/webhookEditorValues | Get email webhook editor values
[**getEmailCommseqs**](StorefrontApi.md#getEmailCommseqs) | **GET** /storefront/{storefront_oid}/email/commseqs | Get email commseqs
[**getEmailCustomerEditorUrl**](StorefrontApi.md#getEmailCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/customers/{email_customer_uuid}/editor_url | Get customers editor URL
[**getEmailCustomers**](StorefrontApi.md#getEmailCustomers) | **GET** /storefront/{storefront_oid}/email/customers | Get email customers
[**getEmailDashboardActivity**](StorefrontApi.md#getEmailDashboardActivity) | **GET** /storefront/{storefront_oid}/email/dashboard_activity | Get email dashboard activity
[**getEmailDashboardStats**](StorefrontApi.md#getEmailDashboardStats) | **GET** /storefront/{storefront_oid}/email/dashboard_stats | Get dashboard stats
[**getEmailDispatchLogs**](StorefrontApi.md#getEmailDispatchLogs) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/logs | Get email dispatch logs
[**getEmailEmail**](StorefrontApi.md#getEmailEmail) | **GET** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Get email email
[**getEmailEmailClicks**](StorefrontApi.md#getEmailEmailClicks) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/emails/{commseq_email_uuid}/clicks | Get email email clicks
[**getEmailEmailCustomerEditorUrl**](StorefrontApi.md#getEmailEmailCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/orders/{order_id}/editor_url | Get email order customer editor url
[**getEmailEmailOrders**](StorefrontApi.md#getEmailEmailOrders) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/emails/{commseq_email_uuid}/orders | Get email email orders
[**getEmailEmails**](StorefrontApi.md#getEmailEmails) | **GET** /storefront/{storefront_oid}/email/emails | Get email emails
[**getEmailEmailsMultiple**](StorefrontApi.md#getEmailEmailsMultiple) | **POST** /storefront/{storefront_oid}/email/emails/multiple | Get email emails multiple
[**getEmailFlow**](StorefrontApi.md#getEmailFlow) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Get email flow
[**getEmailFlowFolder**](StorefrontApi.md#getEmailFlowFolder) | **GET** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Get email flow folder
[**getEmailFlowFolders**](StorefrontApi.md#getEmailFlowFolders) | **GET** /storefront/{storefront_oid}/email/flow_folders | Get email flow folders
[**getEmailFlowScreenshots**](StorefrontApi.md#getEmailFlowScreenshots) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/screenshots | Get email flow screenshots
[**getEmailFlows**](StorefrontApi.md#getEmailFlows) | **GET** /storefront/{storefront_oid}/email/flows | Get email flows
[**getEmailGlobalSettings**](StorefrontApi.md#getEmailGlobalSettings) | **GET** /storefront/email/global_settings | Get email globalsettings
[**getEmailList**](StorefrontApi.md#getEmailList) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Get email list
[**getEmailListCustomerEditorUrl**](StorefrontApi.md#getEmailListCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers/{email_customer_uuid}/editor_url | Get email list customer editor url
[**getEmailListCustomers**](StorefrontApi.md#getEmailListCustomers) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers | Get email list customers
[**getEmailListSegmentFolder**](StorefrontApi.md#getEmailListSegmentFolder) | **GET** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Get email campaign folder
[**getEmailListSegmentFolders**](StorefrontApi.md#getEmailListSegmentFolders) | **GET** /storefront/{storefront_oid}/email/list_segment_folders | Get email campaign folders
[**getEmailLists**](StorefrontApi.md#getEmailLists) | **GET** /storefront/{storefront_oid}/email/lists | Get email lists
[**getEmailPerformance**](StorefrontApi.md#getEmailPerformance) | **GET** /storefront/{storefront_oid}/email/performance | Get email performance
[**getEmailPlan**](StorefrontApi.md#getEmailPlan) | **GET** /storefront/{storefront_oid}/email/plan | Get email plan
[**getEmailPostcard**](StorefrontApi.md#getEmailPostcard) | **GET** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Get email postcard
[**getEmailPostcards**](StorefrontApi.md#getEmailPostcards) | **GET** /storefront/{storefront_oid}/email/postcards | Get email postcards
[**getEmailPostcardsMultiple**](StorefrontApi.md#getEmailPostcardsMultiple) | **POST** /storefront/{storefront_oid}/email/postcards/multiple | Get email postcards multiple
[**getEmailSegment**](StorefrontApi.md#getEmailSegment) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Get email segment
[**getEmailSegmentCustomerEditorUrl**](StorefrontApi.md#getEmailSegmentCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/customers/{email_customer_uuid}/editor_url | Get email segment customers editor URL
[**getEmailSegmentCustomers**](StorefrontApi.md#getEmailSegmentCustomers) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/customers | Get email segment customers
[**getEmailSegments**](StorefrontApi.md#getEmailSegments) | **GET** /storefront/{storefront_oid}/email/segments | Get email segments
[**getEmailSendingDomain**](StorefrontApi.md#getEmailSendingDomain) | **GET** /storefront/email/sending_domain/{domain} | Get email sending domain
[**getEmailSendingDomainStatus**](StorefrontApi.md#getEmailSendingDomainStatus) | **POST** /storefront/email/sending_domains/{domain}/status | Get email sending domain status
[**getEmailSendingDomains**](StorefrontApi.md#getEmailSendingDomains) | **GET** /storefront/email/sending_domains | Get email sending domains
[**getEmailSettings**](StorefrontApi.md#getEmailSettings) | **GET** /storefront/{storefront_oid}/email/settings | Get email settings
[**getEmailTemplate**](StorefrontApi.md#getEmailTemplate) | **GET** /storefront/{storefront_oid}/email/templates/{email_template_oid} | Get email template
[**getEmailTemplates**](StorefrontApi.md#getEmailTemplates) | **GET** /storefront/{storefront_oid}/email/templates | Get email templates
[**getEmailThirdPartyProviders**](StorefrontApi.md#getEmailThirdPartyProviders) | **GET** /storefront/{storefront_oid}/email/third_party_providers | Get a list of third party email providers
[**getExperiments**](StorefrontApi.md#getExperiments) | **GET** /storefront/{storefront_oid}/experiments | Get experiments
[**getHeatmap**](StorefrontApi.md#getHeatmap) | **POST** /storefront/{storefront_oid}/screen_recordings/heatmap | Get screen recording heatmap
[**getHeatmapIndex**](StorefrontApi.md#getHeatmapIndex) | **POST** /storefront/{storefront_oid}/screen_recordings/heatmap/index | Get screen recording heatmap index
[**getHistogramPropertyNames**](StorefrontApi.md#getHistogramPropertyNames) | **GET** /storefront/{storefront_oid}/email/histogram/property_names | Get histogram property names
[**getHistogramPropertyValues**](StorefrontApi.md#getHistogramPropertyValues) | **GET** /storefront/{storefront_oid}/email/histogram/property_values | Get histogram property values
[**getLibraryFilterValues**](StorefrontApi.md#getLibraryFilterValues) | **GET** /storefront/code_library/filter_values | Get library values used to populate drop down boxes for filtering.
[**getLibraryItem**](StorefrontApi.md#getLibraryItem) | **GET** /storefront/code_library/{library_item_oid} | Get library item.
[**getLibraryItemPublishedVersions**](StorefrontApi.md#getLibraryItemPublishedVersions) | **GET** /storefront/code_library/{library_item_oid}/published_versions | Get all published versions for a library item.
[**getScreenRecording**](StorefrontApi.md#getScreenRecording) | **GET** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid} | Get screen recording
[**getScreenRecordingPageViewData**](StorefrontApi.md#getScreenRecordingPageViewData) | **GET** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/page_view_data/{screen_recording_page_view_uuid} | Get screen recording page view data
[**getScreenRecordingSegment**](StorefrontApi.md#getScreenRecordingSegment) | **GET** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Get screen recording segment
[**getScreenRecordingSegments**](StorefrontApi.md#getScreenRecordingSegments) | **GET** /storefront/{storefront_oid}/screen_recordings/segments | Get screen recording segments
[**getScreenRecordingSettings**](StorefrontApi.md#getScreenRecordingSettings) | **GET** /storefront/{storefront_oid}/screen_recordings/settings | Get screen recording settings
[**getScreenRecordingTags**](StorefrontApi.md#getScreenRecordingTags) | **POST** /storefront/{storefront_oid}/screen_recordings/tags | Get tags used by screen recording
[**getScreenRecordingsByQuery**](StorefrontApi.md#getScreenRecordingsByQuery) | **POST** /storefront/{storefront_oid}/screen_recordings/query | Query screen recordings
[**getScreenRecordingsBySegment**](StorefrontApi.md#getScreenRecordingsBySegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid}/query | Get screen recordings by segment
[**getStoreFrontPricingTiers**](StorefrontApi.md#getStoreFrontPricingTiers) | **GET** /storefront/pricing_tiers | Retrieve pricing tiers
[**getThumbnailParameters**](StorefrontApi.md#getThumbnailParameters) | **POST** /storefront/thumbnailParameters | Get thumbnail parameters
[**getTransactionEmail**](StorefrontApi.md#getTransactionEmail) | **GET** /storefront/{storefront_oid}/transaction_email/list/{email_id} | Gets a transaction email object
[**getTransactionEmailList**](StorefrontApi.md#getTransactionEmailList) | **GET** /storefront/{storefront_oid}/transaction_email/list | Gets a list of transaction email names
[**getTransactionEmailScreenshots**](StorefrontApi.md#getTransactionEmailScreenshots) | **GET** /storefront/{storefront_oid}/transaction_email/list/{email_id}/screenshots | Get transactional email screenshots
[**getTwilioAccount**](StorefrontApi.md#getTwilioAccount) | **GET** /storefront/twilio/accounts/{esp_twilio_uuid} | Get Twilio account
[**getTwilioAccounts**](StorefrontApi.md#getTwilioAccounts) | **GET** /storefront/twilio/accounts | Get all Twilio accounts
[**globalUnsubscribe**](StorefrontApi.md#globalUnsubscribe) | **POST** /storefront/{storefront_oid}/email/globalUnsubscribe | Globally unsubscribe a customer
[**importEmailThirdPartyProviderList**](StorefrontApi.md#importEmailThirdPartyProviderList) | **POST** /storefront/{storefront_oid}/email/third_party_providers/import | Import a third party provider list
[**insertEmailCampaign**](StorefrontApi.md#insertEmailCampaign) | **POST** /storefront/{storefront_oid}/email/campaigns | Insert email campaign
[**insertEmailCampaignFolder**](StorefrontApi.md#insertEmailCampaignFolder) | **POST** /storefront/{storefront_oid}/email/campaign_folders | Insert email campaign folder
[**insertEmailCommseq**](StorefrontApi.md#insertEmailCommseq) | **POST** /storefront/{storefront_oid}/email/commseqs | Insert email commseq
[**insertEmailEmail**](StorefrontApi.md#insertEmailEmail) | **POST** /storefront/{storefront_oid}/email/emails | Insert email email
[**insertEmailFlow**](StorefrontApi.md#insertEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows | Insert email flow
[**insertEmailFlowFolder**](StorefrontApi.md#insertEmailFlowFolder) | **POST** /storefront/{storefront_oid}/email/flow_folders | Insert email flow folder
[**insertEmailList**](StorefrontApi.md#insertEmailList) | **POST** /storefront/{storefront_oid}/email/lists | Insert email list
[**insertEmailListSegmentFolder**](StorefrontApi.md#insertEmailListSegmentFolder) | **POST** /storefront/{storefront_oid}/email/list_segment_folders | Insert email campaign folder
[**insertEmailPostcard**](StorefrontApi.md#insertEmailPostcard) | **POST** /storefront/{storefront_oid}/email/postcards | Insert email postcard
[**insertEmailSegment**](StorefrontApi.md#insertEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments | Insert email segment
[**insertScreenRecordingSegment**](StorefrontApi.md#insertScreenRecordingSegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments | Insert screen recording segment
[**prepareDownloadEmailSegment**](StorefrontApi.md#prepareDownloadEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/downloadPrepare | Prepare download of email segment
[**publishLibraryItem**](StorefrontApi.md#publishLibraryItem) | **POST** /storefront/code_library/{library_item_oid}/publish | Publish library item.
[**purchaseLibraryItem**](StorefrontApi.md#purchaseLibraryItem) | **POST** /storefront/code_library/{library_item_oid}/purchase | Purchase public library item, which creates a copy of the item in your personal code library
[**releaseEmailCommseqStepWaiting**](StorefrontApi.md#releaseEmailCommseqStepWaiting) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/waiting/{commseq_step_uuid} | Release email communication sequence customers waiting at the specified step
[**review**](StorefrontApi.md#review) | **POST** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/review | Request a review of an email
[**search**](StorefrontApi.md#search) | **GET** /storefront/search | Searches for all matching values
[**search2**](StorefrontApi.md#search2) | **POST** /storefront/search | Searches for all matching values (using POST)
[**searchEmailListCustomers**](StorefrontApi.md#searchEmailListCustomers) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/search | Search email list customers
[**searchEmailSegmentCustomers**](StorefrontApi.md#searchEmailSegmentCustomers) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/search | Search email segment customers
[**searchLibraryItems**](StorefrontApi.md#searchLibraryItems) | **POST** /storefront/code_library/search | Retrieve library items
[**searchPublishedItems**](StorefrontApi.md#searchPublishedItems) | **POST** /storefront/code_library/search_published | Retrieve library items
[**searchReviewItems**](StorefrontApi.md#searchReviewItems) | **POST** /storefront/code_library/search_review | Retrieve library items needing review or rejected
[**searchSharedItems**](StorefrontApi.md#searchSharedItems) | **POST** /storefront/code_library/search_shared | Retrieve library items
[**sendEmailTest**](StorefrontApi.md#sendEmailTest) | **POST** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/test | Send email test
[**sendPostcardTest**](StorefrontApi.md#sendPostcardTest) | **POST** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid}/test | Send postcard test
[**sendWebhookTest**](StorefrontApi.md#sendWebhookTest) | **POST** /storefront/{storefront_oid}/email/webhooks/test | Send webhook test
[**startEmailCampaign**](StorefrontApi.md#startEmailCampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/start | Start email campaign
[**subscribeToEmailList**](StorefrontApi.md#subscribeToEmailList) | **POST** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/subscribe | Subscribe customers to email list
[**unfavoriteScreenRecording**](StorefrontApi.md#unfavoriteScreenRecording) | **DELETE** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/favorite | Remove favorite flag on screen recording
[**updateEmailCampaign**](StorefrontApi.md#updateEmailCampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Update email campaign
[**updateEmailCampaignFolder**](StorefrontApi.md#updateEmailCampaignFolder) | **PUT** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Update email campaign folder
[**updateEmailCommseq**](StorefrontApi.md#updateEmailCommseq) | **PUT** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Update email commseq
[**updateEmailCustomer**](StorefrontApi.md#updateEmailCustomer) | **PUT** /storefront/{storefront_oid}/email/customers/{email_customer_uuid} | Update email customer
[**updateEmailEmail**](StorefrontApi.md#updateEmailEmail) | **PUT** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Update email email
[**updateEmailFlow**](StorefrontApi.md#updateEmailFlow) | **PUT** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Update email flow
[**updateEmailFlowFolder**](StorefrontApi.md#updateEmailFlowFolder) | **PUT** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Update email flow folder
[**updateEmailGlobalSettings**](StorefrontApi.md#updateEmailGlobalSettings) | **POST** /storefront/email/global_settings | Update email global settings
[**updateEmailList**](StorefrontApi.md#updateEmailList) | **PUT** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Update email list
[**updateEmailListSegmentFolder**](StorefrontApi.md#updateEmailListSegmentFolder) | **PUT** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Update email campaign folder
[**updateEmailPlan**](StorefrontApi.md#updateEmailPlan) | **POST** /storefront/{storefront_oid}/email/plan | Update email plan
[**updateEmailPostcard**](StorefrontApi.md#updateEmailPostcard) | **PUT** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Update email postcard
[**updateEmailSegment**](StorefrontApi.md#updateEmailSegment) | **PUT** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Update email segment
[**updateEmailSendingDomain**](StorefrontApi.md#updateEmailSendingDomain) | **PUT** /storefront/email/sending_domains/{domain} | Update email sending domain
[**updateEmailSettings**](StorefrontApi.md#updateEmailSettings) | **POST** /storefront/{storefront_oid}/email/settings | Update email settings
[**updateExperiment**](StorefrontApi.md#updateExperiment) | **PUT** /storefront/{storefront_oid}/experiments/{storefront_experiment_oid} | Update experiment
[**updateLibraryItem**](StorefrontApi.md#updateLibraryItem) | **PUT** /storefront/code_library/{library_item_oid} | Update library item. Note that only certain fields may be updated via this method.
[**updateScreenRecordingMerchantNotes**](StorefrontApi.md#updateScreenRecordingMerchantNotes) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/merchant_notes | Update merchant notes on a screen recording
[**updateScreenRecordingSegment**](StorefrontApi.md#updateScreenRecordingSegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Update screen recording segment
[**updateScreenRecordingSettings**](StorefrontApi.md#updateScreenRecordingSettings) | **POST** /storefront/{storefront_oid}/screen_recordings/settings | Update screen recording settings
[**updateScreenRecordingTags**](StorefrontApi.md#updateScreenRecordingTags) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/tags | Update tags on a screen recording
[**updateTransactionEmail**](StorefrontApi.md#updateTransactionEmail) | **PUT** /storefront/{storefront_oid}/transaction_email/list/{email_id} | Updates a transaction email object
[**updateTwilioAccount**](StorefrontApi.md#updateTwilioAccount) | **PUT** /storefront/twilio/accounts/{esp_twilio_uuid} | Update Twilio account


# **addToLibrary**
> \ultracart\v2\models\LibraryItemResponse addToLibrary($add_library_request)

Add to library

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$add_library_request = new \ultracart\v2\models\AddLibraryItemRequest(); // \ultracart\v2\models\AddLibraryItemRequest | New library item request

try {
    $result = $apiInstance->addToLibrary($add_library_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->addToLibrary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **add_library_request** | [**\ultracart\v2\models\AddLibraryItemRequest**](../Model/AddLibraryItemRequest.md)| New library item request |

### Return type

[**\ultracart\v2\models\LibraryItemResponse**](../Model/LibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **applyToStoreFront**
> \ultracart\v2\models\ApplyLibraryItemResponse applyToStoreFront($apply_library_request)

Apply library item to storefront.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$apply_library_request = new \ultracart\v2\models\ApplyLibraryItemRequest(); // \ultracart\v2\models\ApplyLibraryItemRequest | New library item

try {
    $result = $apiInstance->applyToStoreFront($apply_library_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->applyToStoreFront: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **apply_library_request** | [**\ultracart\v2\models\ApplyLibraryItemRequest**](../Model/ApplyLibraryItemRequest.md)| New library item |

### Return type

[**\ultracart\v2\models\ApplyLibraryItemResponse**](../Model/ApplyLibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **archiveEmailList**
> \ultracart\v2\models\EmailListArchiveResponse archiveEmailList($storefront_oid, $email_list_uuid)

Archive email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 

try {
    $result = $apiInstance->archiveEmailList($storefront_oid, $email_list_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->archiveEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailListArchiveResponse**](../Model/EmailListArchiveResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **archiveEmailSegment**
> \ultracart\v2\models\EmailSegmentArchiveResponse archiveEmailSegment($storefront_oid, $email_segment_uuid)

Archive email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 

try {
    $result = $apiInstance->archiveEmailSegment($storefront_oid, $email_segment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->archiveEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSegmentArchiveResponse**](../Model/EmailSegmentArchiveResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **backPopulateEmailFlow**
> \ultracart\v2\models\EmailFlowBackPopulateResponse backPopulateEmailFlow($storefront_oid, $email_flow_uuid, $back_populate_request)

Back populate email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_uuid = "email_flow_uuid_example"; // string | 
$back_populate_request = new \ultracart\v2\models\EmailFlowBackPopulateRequest(); // \ultracart\v2\models\EmailFlowBackPopulateRequest | The request to back populate

try {
    $result = $apiInstance->backPopulateEmailFlow($storefront_oid, $email_flow_uuid, $back_populate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->backPopulateEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_uuid** | **string**|  |
 **back_populate_request** | [**\ultracart\v2\models\EmailFlowBackPopulateRequest**](../Model/EmailFlowBackPopulateRequest.md)| The request to back populate |

### Return type

[**\ultracart\v2\models\EmailFlowBackPopulateResponse**](../Model/EmailFlowBackPopulateResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDownloadEmailSegment**
> \ultracart\v2\models\EmailSegmentDownloadPrepareResponse checkDownloadEmailSegment($storefront_oid, $email_segment_uuid, $email_segment_rebuild_uuid)

Check download of email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 
$email_segment_rebuild_uuid = "email_segment_rebuild_uuid_example"; // string | 

try {
    $result = $apiInstance->checkDownloadEmailSegment($storefront_oid, $email_segment_uuid, $email_segment_rebuild_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->checkDownloadEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |
 **email_segment_rebuild_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSegmentDownloadPrepareResponse**](../Model/EmailSegmentDownloadPrepareResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse cloneEmailCampaign($storefront_oid, $email_campaign_uuid, $target_storefront_oid)

Clone email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_uuid = "email_campaign_uuid_example"; // string | 
$target_storefront_oid = 56; // int | 

try {
    $result = $apiInstance->cloneEmailCampaign($storefront_oid, $email_campaign_uuid, $target_storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->cloneEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_uuid** | **string**|  |
 **target_storefront_oid** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneEmailFlow**
> \ultracart\v2\models\EmailFlowResponse cloneEmailFlow($storefront_oid, $email_flow_uuid, $target_storefront_oid)

Clone email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_uuid = "email_flow_uuid_example"; // string | 
$target_storefront_oid = 56; // int | 

try {
    $result = $apiInstance->cloneEmailFlow($storefront_oid, $email_flow_uuid, $target_storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->cloneEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_uuid** | **string**|  |
 **target_storefront_oid** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailSendingDomain**
> \ultracart\v2\models\EmailSendingDomainResponse createEmailSendingDomain($domain)

Create email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->createEmailSendingDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->createEmailSendingDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSendingDomainResponse**](../Model/EmailSendingDomainResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailSendingDomain2**
> \ultracart\v2\models\EmailSendingDomainResponse createEmailSendingDomain2($email_domain)

Create email sending domain for various providers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$email_domain = new \ultracart\v2\models\EmailDomain(); // \ultracart\v2\models\EmailDomain | EmailDomain

try {
    $result = $apiInstance->createEmailSendingDomain2($email_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->createEmailSendingDomain2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_domain** | [**\ultracart\v2\models\EmailDomain**](../Model/EmailDomain.md)| EmailDomain |

### Return type

[**\ultracart\v2\models\EmailSendingDomainResponse**](../Model/EmailSendingDomainResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createTwilioAccount**
> \ultracart\v2\models\TwilioResponse createTwilioAccount($twilio)

Create Twilio account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$twilio = new \ultracart\v2\models\Twilio(); // \ultracart\v2\models\Twilio | Twilio

try {
    $result = $apiInstance->createTwilioAccount($twilio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->createTwilioAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **twilio** | [**\ultracart\v2\models\Twilio**](../Model/Twilio.md)| Twilio |

### Return type

[**\ultracart\v2\models\TwilioResponse**](../Model/TwilioResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailCampaignFolder**
> \ultracart\v2\models\BaseResponse deleteEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid)

Delete email campaignFolder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_folder_uuid = "email_campaign_folder_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailCampaignFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_folder_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailCommseqStat**
> deleteEmailCommseqStat($storefront_oid, $commseq_uuid)

Delete communication sequence stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 

try {
    $apiInstance->deleteEmailCommseqStat($storefront_oid, $commseq_uuid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailCommseqStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailEmail**
> \ultracart\v2\models\BaseResponse deleteEmailEmail($storefront_oid, $commseq_email_uuid)

Delete email email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteEmailEmail($storefront_oid, $commseq_email_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_email_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailFlowFolder**
> \ultracart\v2\models\BaseResponse deleteEmailFlowFolder($storefront_oid, $email_flow_folder_uuid)

Delete email flowFolder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_folder_uuid = "email_flow_folder_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteEmailFlowFolder($storefront_oid, $email_flow_folder_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailFlowFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_folder_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailListCustomer**
> \ultracart\v2\models\BaseResponse deleteEmailListCustomer($storefront_oid, $email_list_uuid, $email_customer_uuid)

Delete email list customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 
$email_customer_uuid = "email_customer_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteEmailListCustomer($storefront_oid, $email_list_uuid, $email_customer_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailListCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |
 **email_customer_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailListSegmentFolder**
> \ultracart\v2\models\BaseResponse deleteEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid)

Delete email ListSegmentFolder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_segment_folder_uuid = "email_list_segment_folder_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailListSegmentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_segment_folder_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailPostcard**
> \ultracart\v2\models\BaseResponse deleteEmailPostcard($storefront_oid, $commseq_postcard_uuid)

Delete email postcard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_postcard_uuid = "commseq_postcard_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteEmailPostcard($storefront_oid, $commseq_postcard_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailPostcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_postcard_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailSendingDomain**
> \ultracart\v2\models\BaseResponse deleteEmailSendingDomain($domain)

delete email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->deleteEmailSendingDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteEmailSendingDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExperiment**
> deleteExperiment($storefront_oid, $storefront_experiment_oid)

Delete experiment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$storefront_experiment_oid = 56; // int | 

try {
    $apiInstance->deleteExperiment($storefront_oid, $storefront_experiment_oid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteExperiment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **storefront_experiment_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteHeatmap**
> deleteHeatmap($storefront_oid, $query)

Delete screen recording heatmap

Delete screen recording heatmap

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$query = new \ultracart\v2\models\ScreenRecordingHeatmapReset(); // \ultracart\v2\models\ScreenRecordingHeatmapReset | Query

try {
    $apiInstance->deleteHeatmap($storefront_oid, $query);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteHeatmap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **query** | [**\ultracart\v2\models\ScreenRecordingHeatmapReset**](../Model/ScreenRecordingHeatmapReset.md)| Query |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLibraryItem**
> deleteLibraryItem($library_item_oid)

Delete library item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 

try {
    $apiInstance->deleteLibraryItem($library_item_oid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteLibraryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLibraryItemPublishedVersions**
> deleteLibraryItemPublishedVersions($library_item_oid)

Delete all published versions for a library item, including anything in review.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 

try {
    $apiInstance->deleteLibraryItemPublishedVersions($library_item_oid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteLibraryItemPublishedVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScreenRecordingSegment**
> deleteScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid)

Delete screen recording segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_segment_oid = 56; // int | 

try {
    $apiInstance->deleteScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteScreenRecordingSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_segment_oid** | **int**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTwilioAccount**
> \ultracart\v2\models\BaseResponse deleteTwilioAccount($esp_twilio_uuid)

delete Twilio account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$esp_twilio_uuid = "esp_twilio_uuid_example"; // string | 

try {
    $result = $apiInstance->deleteTwilioAccount($esp_twilio_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->deleteTwilioAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_twilio_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateLibraryItem**
> \ultracart\v2\models\LibraryItemResponse duplicateLibraryItem($library_item_oid)

Duplicate library item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 

try {
    $result = $apiInstance->duplicateLibraryItem($library_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->duplicateLibraryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\LibraryItemResponse**](../Model/LibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **favoriteScreenRecording**
> favoriteScreenRecording($storefront_oid, $screen_recording_uuid)

Update favorite flag on screen recording

Update favorite flag on screen recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_uuid = "screen_recording_uuid_example"; // string | 

try {
    $apiInstance->favoriteScreenRecording($storefront_oid, $screen_recording_uuid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->favoriteScreenRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geocodeAddress**
> \ultracart\v2\models\GeocodeResponse geocodeAddress($storefront_oid, $geocode_request)

Obtain lat/long for an address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$geocode_request = new \ultracart\v2\models\GeocodeRequest(); // \ultracart\v2\models\GeocodeRequest | geocode request

try {
    $result = $apiInstance->geocodeAddress($storefront_oid, $geocode_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->geocodeAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **geocode_request** | [**\ultracart\v2\models\GeocodeRequest**](../Model/GeocodeRequest.md)| geocode request |

### Return type

[**\ultracart\v2\models\GeocodeResponse**](../Model/GeocodeResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountries**
> \ultracart\v2\models\CountriesResponse getCountries($storefront_oid)

Get countries

Obtain a list of all the countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getCountries($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getCountries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\CountriesResponse**](../Model/CountriesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEditorToken**
> \ultracart\v2\models\EmailEditorTokenResponse getEditorToken($storefront_oid)

Gets editor token

Fetches a temporary authentication token for the editor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEditorToken($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEditorToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailEditorTokenResponse**](../Model/EmailEditorTokenResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailBaseTemplates**
> \ultracart\v2\models\EmailBaseTemplateListResponse getEmailBaseTemplates($storefront_oid)

Get email communication base templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailBaseTemplates($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailBaseTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailBaseTemplateListResponse**](../Model/EmailBaseTemplateListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse getEmailCampaign($storefront_oid, $email_campaign_uuid)

Get email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_uuid = "email_campaign_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCampaign($storefront_oid, $email_campaign_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaignFolder**
> \ultracart\v2\models\EmailCampaignFolderResponse getEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid)

Get email campaign folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_folder_uuid = "email_campaign_folder_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaignFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_folder_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCampaignFolderResponse**](../Model/EmailCampaignFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaignFolders**
> \ultracart\v2\models\EmailCampaignFoldersResponse getEmailCampaignFolders($storefront_oid)

Get email campaign folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailCampaignFolders($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaignFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailCampaignFoldersResponse**](../Model/EmailCampaignFoldersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaignScreenshots**
> \ultracart\v2\models\ScreenshotsResponse getEmailCampaignScreenshots($storefront_oid, $email_campaign_uuid)

Get email campaign screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_uuid = "email_campaign_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCampaignScreenshots($storefront_oid, $email_campaign_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaignScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ScreenshotsResponse**](../Model/ScreenshotsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaigns**
> \ultracart\v2\models\EmailCampaignsResponse getEmailCampaigns($storefront_oid)

Get email campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailCampaigns($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailCampaignsResponse**](../Model/EmailCampaignsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCampaignsWithStats**
> \ultracart\v2\models\EmailCampaignsResponse getEmailCampaignsWithStats($storefront_oid, $stat_days)

Get email campaigns with stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$stat_days = "stat_days_example"; // string | 

try {
    $result = $apiInstance->getEmailCampaignsWithStats($storefront_oid, $stat_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCampaignsWithStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **stat_days** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCampaignsResponse**](../Model/EmailCampaignsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseq**
> \ultracart\v2\models\EmailCommseqResponse getEmailCommseq($storefront_oid, $commseq_uuid)

Get email commseq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCommseq($storefront_oid, $commseq_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqResponse**](../Model/EmailCommseqResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqEmailStats**
> \ultracart\v2\models\EmailStatSummaryResponse getEmailCommseqEmailStats($storefront_oid, $commseq_uuid, $stats_request)

Get email communication sequence emails stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$stats_request = new \ultracart\v2\models\EmailStatSummaryRequest(); // \ultracart\v2\models\EmailStatSummaryRequest | StatsRequest

try {
    $result = $apiInstance->getEmailCommseqEmailStats($storefront_oid, $commseq_uuid, $stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqEmailStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **stats_request** | [**\ultracart\v2\models\EmailStatSummaryRequest**](../Model/EmailStatSummaryRequest.md)| StatsRequest |

### Return type

[**\ultracart\v2\models\EmailStatSummaryResponse**](../Model/EmailStatSummaryResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqPostcardStats**
> \ultracart\v2\models\EmailStatPostcardSummaryResponse getEmailCommseqPostcardStats($storefront_oid, $commseq_uuid, $stats_request)

Get email communication sequence postcard stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$stats_request = new \ultracart\v2\models\EmailStatPostcardSummaryRequest(); // \ultracart\v2\models\EmailStatPostcardSummaryRequest | StatsRequest

try {
    $result = $apiInstance->getEmailCommseqPostcardStats($storefront_oid, $commseq_uuid, $stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqPostcardStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **stats_request** | [**\ultracart\v2\models\EmailStatPostcardSummaryRequest**](../Model/EmailStatPostcardSummaryRequest.md)| StatsRequest |

### Return type

[**\ultracart\v2\models\EmailStatPostcardSummaryResponse**](../Model/EmailStatPostcardSummaryResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqStatOverall**
> \ultracart\v2\models\EmailCommseqStatResponse getEmailCommseqStatOverall($storefront_oid, $commseq_uuid)

Get communication sequence stats overall

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCommseqStatOverall($storefront_oid, $commseq_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqStatOverall: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqStatResponse**](../Model/EmailCommseqStatResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqStepStats**
> \ultracart\v2\models\EmailStepStatResponse getEmailCommseqStepStats($storefront_oid, $commseq_uuid, $stats_request)

Get email communication sequence step stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$stats_request = new \ultracart\v2\models\EmailStepStatRequest(); // \ultracart\v2\models\EmailStepStatRequest | StatsRequest

try {
    $result = $apiInstance->getEmailCommseqStepStats($storefront_oid, $commseq_uuid, $stats_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqStepStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **stats_request** | [**\ultracart\v2\models\EmailStepStatRequest**](../Model/EmailStepStatRequest.md)| StatsRequest |

### Return type

[**\ultracart\v2\models\EmailStepStatResponse**](../Model/EmailStepStatResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqStepWaiting**
> \ultracart\v2\models\EmailStepWaitingResponse getEmailCommseqStepWaiting($storefront_oid, $commseq_uuid, $waiting_request)

Get email communication sequence customers waiting at each requested step

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$waiting_request = new \ultracart\v2\models\EmailStepWaitingRequest(); // \ultracart\v2\models\EmailStepWaitingRequest | WaitingRequest

try {
    $result = $apiInstance->getEmailCommseqStepWaiting($storefront_oid, $commseq_uuid, $waiting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqStepWaiting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **waiting_request** | [**\ultracart\v2\models\EmailStepWaitingRequest**](../Model/EmailStepWaitingRequest.md)| WaitingRequest |

### Return type

[**\ultracart\v2\models\EmailStepWaitingResponse**](../Model/EmailStepWaitingResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqWebhookEditorValues**
> \ultracart\v2\models\EmailWebhookEditorValuesResponse getEmailCommseqWebhookEditorValues($storefront_oid, $commseq_uuid)

Get email webhook editor values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCommseqWebhookEditorValues($storefront_oid, $commseq_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqWebhookEditorValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailWebhookEditorValuesResponse**](../Model/EmailWebhookEditorValuesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCommseqs**
> \ultracart\v2\models\EmailCommseqsResponse getEmailCommseqs($storefront_oid)

Get email commseqs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailCommseqs($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCommseqs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqsResponse**](../Model/EmailCommseqsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCustomerEditorUrl**
> \ultracart\v2\models\EmailCustomerEditorUrlResponse getEmailCustomerEditorUrl($storefront_oid, $email_customer_uuid)

Get customers editor URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_customer_uuid = "email_customer_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailCustomerEditorUrl($storefront_oid, $email_customer_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCustomerEditorUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_customer_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCustomerEditorUrlResponse**](../Model/EmailCustomerEditorUrlResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCustomers**
> \ultracart\v2\models\EmailCustomersResponse getEmailCustomers($storefront_oid, $page_number, $page_size, $search_email_prefix)

Get email customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$page_number = 56; // int | 
$page_size = 56; // int | 
$search_email_prefix = "search_email_prefix_example"; // string | 

try {
    $result = $apiInstance->getEmailCustomers($storefront_oid, $page_number, $page_size, $search_email_prefix);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **search_email_prefix** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailCustomersResponse**](../Model/EmailCustomersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailDashboardActivity**
> \ultracart\v2\models\EmailDashboardActivityResponse getEmailDashboardActivity($storefront_oid, $last_records)

Get email dashboard activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$last_records = 56; // int | 

try {
    $result = $apiInstance->getEmailDashboardActivity($storefront_oid, $last_records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailDashboardActivity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **last_records** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailDashboardActivityResponse**](../Model/EmailDashboardActivityResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailDashboardStats**
> \ultracart\v2\models\EmailDashboardStatsResponse getEmailDashboardStats($storefront_oid, $days)

Get dashboard stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$days = 56; // int | 

try {
    $result = $apiInstance->getEmailDashboardStats($storefront_oid, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailDashboardStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **days** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailDashboardStatsResponse**](../Model/EmailDashboardStatsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailDispatchLogs**
> \ultracart\v2\models\EmailCommseqStepLogsResponse getEmailDispatchLogs($storefront_oid, $commseq_uuid, $commseq_step_uuid)

Get email dispatch logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$commseq_step_uuid = "commseq_step_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailDispatchLogs($storefront_oid, $commseq_uuid, $commseq_step_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailDispatchLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **commseq_step_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqStepLogsResponse**](../Model/EmailCommseqStepLogsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEmail**
> \ultracart\v2\models\EmailCommseqEmailResponse getEmailEmail($storefront_oid, $commseq_email_uuid)

Get email email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailEmail($storefront_oid, $commseq_email_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_email_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailResponse**](../Model/EmailCommseqEmailResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEmailClicks**
> \ultracart\v2\models\EmailClicksResponse getEmailEmailClicks($storefront_oid, $commseq_uuid, $commseq_step_uuid, $commseq_email_uuid, $days)

Get email email clicks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$commseq_step_uuid = "commseq_step_uuid_example"; // string | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 
$days = 56; // int | 

try {
    $result = $apiInstance->getEmailEmailClicks($storefront_oid, $commseq_uuid, $commseq_step_uuid, $commseq_email_uuid, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailEmailClicks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **commseq_step_uuid** | **string**|  |
 **commseq_email_uuid** | **string**|  |
 **days** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailClicksResponse**](../Model/EmailClicksResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEmailCustomerEditorUrl**
> \ultracart\v2\models\EmailCustomerEditorUrlResponse getEmailEmailCustomerEditorUrl($storefront_oid, $commseq_email_uuid, $order_id)

Get email order customer editor url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 
$order_id = "order_id_example"; // string | 

try {
    $result = $apiInstance->getEmailEmailCustomerEditorUrl($storefront_oid, $commseq_email_uuid, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailEmailCustomerEditorUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_email_uuid** | **string**|  |
 **order_id** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCustomerEditorUrlResponse**](../Model/EmailCustomerEditorUrlResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEmailOrders**
> \ultracart\v2\models\EmailOrdersResponse getEmailEmailOrders($storefront_oid, $commseq_uuid, $commseq_step_uuid, $commseq_email_uuid, $days)

Get email email orders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$commseq_step_uuid = "commseq_step_uuid_example"; // string | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 
$days = 56; // int | 

try {
    $result = $apiInstance->getEmailEmailOrders($storefront_oid, $commseq_uuid, $commseq_step_uuid, $commseq_email_uuid, $days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailEmailOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **commseq_step_uuid** | **string**|  |
 **commseq_email_uuid** | **string**|  |
 **days** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailOrdersResponse**](../Model/EmailOrdersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEmails**
> \ultracart\v2\models\EmailCommseqEmailsResponse getEmailEmails($storefront_oid)

Get email emails

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailEmails($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailEmails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailsResponse**](../Model/EmailCommseqEmailsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailEmailsMultiple**
> \ultracart\v2\models\EmailCommseqEmailsResponse getEmailEmailsMultiple($storefront_oid, $email_commseq_emails_request)

Get email emails multiple

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_commseq_emails_request = new \ultracart\v2\models\EmailCommseqEmailsRequest(); // \ultracart\v2\models\EmailCommseqEmailsRequest | Request of email uuids

try {
    $result = $apiInstance->getEmailEmailsMultiple($storefront_oid, $email_commseq_emails_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailEmailsMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_commseq_emails_request** | [**\ultracart\v2\models\EmailCommseqEmailsRequest**](../Model/EmailCommseqEmailsRequest.md)| Request of email uuids |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailsResponse**](../Model/EmailCommseqEmailsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlow**
> \ultracart\v2\models\EmailFlowResponse getEmailFlow($storefront_oid, $email_flow_uuid)

Get email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_uuid = "email_flow_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailFlow($storefront_oid, $email_flow_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlowFolder**
> \ultracart\v2\models\EmailFlowFolderResponse getEmailFlowFolder($storefront_oid, $email_flow_folder_uuid)

Get email flow folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_folder_uuid = "email_flow_folder_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailFlowFolder($storefront_oid, $email_flow_folder_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlowFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_folder_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailFlowFolderResponse**](../Model/EmailFlowFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlowFolders**
> \ultracart\v2\models\EmailFlowFoldersResponse getEmailFlowFolders($storefront_oid)

Get email flow folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailFlowFolders($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlowFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailFlowFoldersResponse**](../Model/EmailFlowFoldersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlowScreenshots**
> \ultracart\v2\models\ScreenshotsResponse getEmailFlowScreenshots($storefront_oid, $email_flow_uuid)

Get email flow screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_uuid = "email_flow_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailFlowScreenshots($storefront_oid, $email_flow_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlowScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ScreenshotsResponse**](../Model/ScreenshotsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFlows**
> \ultracart\v2\models\EmailFlowsResponse getEmailFlows($storefront_oid)

Get email flows

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailFlows($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailFlows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailFlowsResponse**](../Model/EmailFlowsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailGlobalSettings**
> \ultracart\v2\models\EmailGlobalSettingsResponse getEmailGlobalSettings()

Get email globalsettings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getEmailGlobalSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailGlobalSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\EmailGlobalSettingsResponse**](../Model/EmailGlobalSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailList**
> \ultracart\v2\models\EmailListResponse getEmailList($storefront_oid, $email_list_uuid)

Get email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailList($storefront_oid, $email_list_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailListResponse**](../Model/EmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailListCustomerEditorUrl**
> \ultracart\v2\models\EmailCustomerEditorUrlResponse getEmailListCustomerEditorUrl($storefront_oid, $email_list_uuid, $email_customer_uuid)

Get email list customer editor url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 
$email_customer_uuid = "email_customer_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailListCustomerEditorUrl($storefront_oid, $email_list_uuid, $email_customer_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailListCustomerEditorUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |
 **email_customer_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCustomerEditorUrlResponse**](../Model/EmailCustomerEditorUrlResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailListCustomers**
> \ultracart\v2\models\EmailListCustomersResponse getEmailListCustomers($storefront_oid, $email_list_uuid, $page_number, $page_size)

Get email list customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->getEmailListCustomers($storefront_oid, $email_list_uuid, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailListCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailListCustomersResponse**](../Model/EmailListCustomersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailListSegmentFolder**
> \ultracart\v2\models\EmailListSegmentFolderResponse getEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid)

Get email campaign folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_segment_folder_uuid = "email_list_segment_folder_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailListSegmentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_segment_folder_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailListSegmentFolderResponse**](../Model/EmailListSegmentFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailListSegmentFolders**
> \ultracart\v2\models\EmailListSegmentFoldersResponse getEmailListSegmentFolders($storefront_oid)

Get email campaign folders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailListSegmentFolders($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailListSegmentFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailListSegmentFoldersResponse**](../Model/EmailListSegmentFoldersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailLists**
> \ultracart\v2\models\EmailListsResponse getEmailLists($storefront_oid)

Get email lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailLists($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailLists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailListsResponse**](../Model/EmailListsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailPerformance**
> \ultracart\v2\models\EmailPerformanceResponse getEmailPerformance($storefront_oid)

Get email performance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailPerformance($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailPerformance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailPerformanceResponse**](../Model/EmailPerformanceResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailPlan**
> \ultracart\v2\models\EmailPlanResponse getEmailPlan($storefront_oid)

Get email plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailPlan($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailPlanResponse**](../Model/EmailPlanResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailPostcard**
> \ultracart\v2\models\EmailCommseqPostcardResponse getEmailPostcard($storefront_oid, $commseq_postcard_uuid)

Get email postcard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_postcard_uuid = "commseq_postcard_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailPostcard($storefront_oid, $commseq_postcard_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailPostcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_postcard_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqPostcardResponse**](../Model/EmailCommseqPostcardResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailPostcards**
> \ultracart\v2\models\EmailCommseqPostcardsResponse getEmailPostcards($storefront_oid)

Get email postcards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailPostcards($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailPostcards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailCommseqPostcardsResponse**](../Model/EmailCommseqPostcardsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailPostcardsMultiple**
> \ultracart\v2\models\EmailCommseqPostcardsResponse getEmailPostcardsMultiple($storefront_oid, $email_commseq_postcards_request)

Get email postcards multiple

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_commseq_postcards_request = new \ultracart\v2\models\EmailCommseqPostcardsRequest(); // \ultracart\v2\models\EmailCommseqPostcardsRequest | Request of postcard uuids

try {
    $result = $apiInstance->getEmailPostcardsMultiple($storefront_oid, $email_commseq_postcards_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailPostcardsMultiple: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_commseq_postcards_request** | [**\ultracart\v2\models\EmailCommseqPostcardsRequest**](../Model/EmailCommseqPostcardsRequest.md)| Request of postcard uuids |

### Return type

[**\ultracart\v2\models\EmailCommseqPostcardsResponse**](../Model/EmailCommseqPostcardsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSegment**
> \ultracart\v2\models\EmailSegmentResponse getEmailSegment($storefront_oid, $email_segment_uuid)

Get email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailSegment($storefront_oid, $email_segment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSegmentResponse**](../Model/EmailSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSegmentCustomerEditorUrl**
> \ultracart\v2\models\EmailCustomerEditorUrlResponse getEmailSegmentCustomerEditorUrl($storefront_oid, $email_segment_uuid, $email_customer_uuid)

Get email segment customers editor URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 
$email_customer_uuid = "email_customer_uuid_example"; // string | 

try {
    $result = $apiInstance->getEmailSegmentCustomerEditorUrl($storefront_oid, $email_segment_uuid, $email_customer_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSegmentCustomerEditorUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |
 **email_customer_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailCustomerEditorUrlResponse**](../Model/EmailCustomerEditorUrlResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSegmentCustomers**
> \ultracart\v2\models\EmailSegmentCustomersResponse getEmailSegmentCustomers($storefront_oid, $email_segment_uuid, $page_number, $page_size)

Get email segment customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 
$page_number = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $apiInstance->getEmailSegmentCustomers($storefront_oid, $email_segment_uuid, $page_number, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSegmentCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |
 **page_number** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailSegmentCustomersResponse**](../Model/EmailSegmentCustomersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSegments**
> \ultracart\v2\models\EmailSegmentsResponse getEmailSegments($storefront_oid)

Get email segments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailSegments($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailSegmentsResponse**](../Model/EmailSegmentsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSendingDomain**
> \ultracart\v2\models\EmailSendingDomainResponse getEmailSendingDomain($domain)

Get email sending domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->getEmailSendingDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSendingDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSendingDomainResponse**](../Model/EmailSendingDomainResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSendingDomainStatus**
> \ultracart\v2\models\EmailSendingDomainResponse getEmailSendingDomainStatus($domain)

Get email sending domain status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->getEmailSendingDomainStatus($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSendingDomainStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSendingDomainResponse**](../Model/EmailSendingDomainResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSendingDomains**
> \ultracart\v2\models\EmailSendingDomainsResponse getEmailSendingDomains()

Get email sending domains

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getEmailSendingDomains();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSendingDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\EmailSendingDomainsResponse**](../Model/EmailSendingDomainsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailSettings**
> \ultracart\v2\models\EmailSettingsResponse getEmailSettings($storefront_oid)

Get email settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailSettings($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailSettingsResponse**](../Model/EmailSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplate**
> \ultracart\v2\models\EmailTemplate getEmailTemplate($storefront_oid, $email_template_oid)

Get email template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_template_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailTemplate($storefront_oid, $email_template_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_template_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailTemplate**](../Model/EmailTemplate.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplates**
> \ultracart\v2\models\EmailTemplatesResponse getEmailTemplates($storefront_oid, $trigger_type)

Get email templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$trigger_type = "trigger_type_example"; // string | 

try {
    $result = $apiInstance->getEmailTemplates($storefront_oid, $trigger_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **trigger_type** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailTemplatesResponse**](../Model/EmailTemplatesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailThirdPartyProviders**
> \ultracart\v2\models\EmailThirdPartyProvidersResponse getEmailThirdPartyProviders($storefront_oid)

Get a list of third party email providers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getEmailThirdPartyProviders($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getEmailThirdPartyProviders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailThirdPartyProvidersResponse**](../Model/EmailThirdPartyProvidersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExperiments**
> \ultracart\v2\models\ExperimentsResponse getExperiments($storefront_oid)

Get experiments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getExperiments($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getExperiments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ExperimentsResponse**](../Model/ExperimentsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHeatmap**
> \ultracart\v2\models\ScreenRecordingHeatmapResponse getHeatmap($storefront_oid, $query)

Get screen recording heatmap

Get screen recording heatmap

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$query = new \ultracart\v2\models\ScreenRecordingHeatmapRequest(); // \ultracart\v2\models\ScreenRecordingHeatmapRequest | Query

try {
    $result = $apiInstance->getHeatmap($storefront_oid, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getHeatmap: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **query** | [**\ultracart\v2\models\ScreenRecordingHeatmapRequest**](../Model/ScreenRecordingHeatmapRequest.md)| Query |

### Return type

[**\ultracart\v2\models\ScreenRecordingHeatmapResponse**](../Model/ScreenRecordingHeatmapResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHeatmapIndex**
> \ultracart\v2\models\ScreenRecordingHeatmapIndexResponse getHeatmapIndex($storefront_oid, $query, $_limit, $_offset, $_sort)

Get screen recording heatmap index

Get screen recording heatmap index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$query = new \ultracart\v2\models\ScreenRecordingHeatmapIndexRequest(); // \ultracart\v2\models\ScreenRecordingHeatmapIndexRequest | Query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 500)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->getHeatmapIndex($storefront_oid, $query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getHeatmapIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **query** | [**\ultracart\v2\models\ScreenRecordingHeatmapIndexRequest**](../Model/ScreenRecordingHeatmapIndexRequest.md)| Query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 500) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\ScreenRecordingHeatmapIndexResponse**](../Model/ScreenRecordingHeatmapIndexResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistogramPropertyNames**
> \ultracart\v2\models\EmailHistogramPropertyNamesResponse getHistogramPropertyNames($storefront_oid, $property_type)

Get histogram property names

Obtain a list of property names for a given property type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$property_type = "property_type_example"; // string | 

try {
    $result = $apiInstance->getHistogramPropertyNames($storefront_oid, $property_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getHistogramPropertyNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **property_type** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailHistogramPropertyNamesResponse**](../Model/EmailHistogramPropertyNamesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistogramPropertyValues**
> \ultracart\v2\models\EmailHistogramPropertyValuesResponse getHistogramPropertyValues($storefront_oid, $property_name, $property_type, $limit)

Get histogram property values

Obtain a list of property values for a given property name and type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$property_name = "property_name_example"; // string | 
$property_type = "property_type_example"; // string | 
$limit = 56; // int | 

try {
    $result = $apiInstance->getHistogramPropertyValues($storefront_oid, $property_name, $property_type, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getHistogramPropertyValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **property_name** | **string**|  | [optional]
 **property_type** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailHistogramPropertyValuesResponse**](../Model/EmailHistogramPropertyValuesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLibraryFilterValues**
> \ultracart\v2\models\LibraryFilterValuesResponse getLibraryFilterValues()

Get library values used to populate drop down boxes for filtering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getLibraryFilterValues();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getLibraryFilterValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\LibraryFilterValuesResponse**](../Model/LibraryFilterValuesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLibraryItem**
> \ultracart\v2\models\LibraryItemResponse getLibraryItem($library_item_oid)

Get library item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 

try {
    $result = $apiInstance->getLibraryItem($library_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getLibraryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\LibraryItemResponse**](../Model/LibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLibraryItemPublishedVersions**
> \ultracart\v2\models\LibraryItemsResponse getLibraryItemPublishedVersions($library_item_oid)

Get all published versions for a library item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 

try {
    $result = $apiInstance->getLibraryItemPublishedVersions($library_item_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getLibraryItemPublishedVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\LibraryItemsResponse**](../Model/LibraryItemsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecording**
> \ultracart\v2\models\ScreenRecordingResponse getScreenRecording($storefront_oid, $screen_recording_uuid)

Get screen recording

Get screen recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_uuid = "screen_recording_uuid_example"; // string | 

try {
    $result = $apiInstance->getScreenRecording($storefront_oid, $screen_recording_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ScreenRecordingResponse**](../Model/ScreenRecordingResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingPageViewData**
> \ultracart\v2\models\ScreenRecordingPageViewDataResponse getScreenRecordingPageViewData($storefront_oid, $screen_recording_uuid, $screen_recording_page_view_uuid)

Get screen recording page view data

Get screen recording page view data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_uuid = "screen_recording_uuid_example"; // string | 
$screen_recording_page_view_uuid = "screen_recording_page_view_uuid_example"; // string | 

try {
    $result = $apiInstance->getScreenRecordingPageViewData($storefront_oid, $screen_recording_uuid, $screen_recording_page_view_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingPageViewData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_uuid** | **string**|  |
 **screen_recording_page_view_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\ScreenRecordingPageViewDataResponse**](../Model/ScreenRecordingPageViewDataResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingSegment**
> \ultracart\v2\models\ScreenRecordingSegmentResponse getScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid)

Get screen recording segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_segment_oid = 56; // int | 

try {
    $result = $apiInstance->getScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_segment_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ScreenRecordingSegmentResponse**](../Model/ScreenRecordingSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingSegments**
> \ultracart\v2\models\ScreenRecordingSegmentsResponse getScreenRecordingSegments($storefront_oid)

Get screen recording segments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getScreenRecordingSegments($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingSegments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ScreenRecordingSegmentsResponse**](../Model/ScreenRecordingSegmentsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingSettings**
> \ultracart\v2\models\ScreenRecordingSettingsResponse getScreenRecordingSettings($storefront_oid)

Get screen recording settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getScreenRecordingSettings($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ScreenRecordingSettingsResponse**](../Model/ScreenRecordingSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingTags**
> \ultracart\v2\models\ScreenRecordingTagsResponse getScreenRecordingTags($storefront_oid)

Get tags used by screen recording

Get tags used by screen recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getScreenRecordingTags($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\ScreenRecordingTagsResponse**](../Model/ScreenRecordingTagsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingsByQuery**
> \ultracart\v2\models\ScreenRecordingQueryResponse getScreenRecordingsByQuery($storefront_oid, $query, $_limit, $_offset, $_sort)

Query screen recordings

Query screen recordings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$query = new \ultracart\v2\models\ScreenRecordingQueryRequest(); // \ultracart\v2\models\ScreenRecordingQueryRequest | Query
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 500)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->getScreenRecordingsByQuery($storefront_oid, $query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingsByQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **query** | [**\ultracart\v2\models\ScreenRecordingQueryRequest**](../Model/ScreenRecordingQueryRequest.md)| Query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 500) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\ScreenRecordingQueryResponse**](../Model/ScreenRecordingQueryResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScreenRecordingsBySegment**
> \ultracart\v2\models\ScreenRecordingQueryResponse getScreenRecordingsBySegment($storefront_oid, $screen_recording_segment_oid, $_limit, $_offset, $_sort)

Get screen recordings by segment

Get screen recordings by segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_segment_oid = 56; // int | 
$_limit = 100; // int | The maximum number of records to return on this one API call. (Default 100, Max 500)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->getScreenRecordingsBySegment($storefront_oid, $screen_recording_segment_oid, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getScreenRecordingsBySegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_segment_oid** | **int**|  |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Default 100, Max 500) | [optional] [default to 100]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\ScreenRecordingQueryResponse**](../Model/ScreenRecordingQueryResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoreFrontPricingTiers**
> \ultracart\v2\models\PricingTiersResponse getStoreFrontPricingTiers($_expand)

Retrieve pricing tiers

Retrieves the pricing tiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$_expand = "_expand_example"; // string | The object expansion to perform on the result.  See documentation for examples

try {
    $result = $apiInstance->getStoreFrontPricingTiers($_expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getStoreFrontPricingTiers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_expand** | **string**| The object expansion to perform on the result.  See documentation for examples | [optional]

### Return type

[**\ultracart\v2\models\PricingTiersResponse**](../Model/PricingTiersResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThumbnailParameters**
> \ultracart\v2\models\ThumbnailParametersResponse getThumbnailParameters($thumbnail_parameters)

Get thumbnail parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$thumbnail_parameters = new \ultracart\v2\models\ThumbnailParametersRequest(); // \ultracart\v2\models\ThumbnailParametersRequest | Thumbnail Parameters

try {
    $result = $apiInstance->getThumbnailParameters($thumbnail_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getThumbnailParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **thumbnail_parameters** | [**\ultracart\v2\models\ThumbnailParametersRequest**](../Model/ThumbnailParametersRequest.md)| Thumbnail Parameters |

### Return type

[**\ultracart\v2\models\ThumbnailParametersResponse**](../Model/ThumbnailParametersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionEmail**
> \ultracart\v2\models\TransactionEmailResponse getTransactionEmail($storefront_oid, $email_id)

Gets a transaction email object

Fetch a transactional email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_id = "email_id_example"; // string | 

try {
    $result = $apiInstance->getTransactionEmail($storefront_oid, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getTransactionEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_id** | **string**|  |

### Return type

[**\ultracart\v2\models\TransactionEmailResponse**](../Model/TransactionEmailResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionEmailList**
> \ultracart\v2\models\TransactionEmailListResponse getTransactionEmailList($storefront_oid)

Gets a list of transaction email names

Obtain a list of all transactional emails and return back just their names

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->getTransactionEmailList($storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getTransactionEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\TransactionEmailListResponse**](../Model/TransactionEmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTransactionEmailScreenshots**
> \ultracart\v2\models\ScreenshotsResponse getTransactionEmailScreenshots($storefront_oid, $email_id)

Get transactional email screenshots

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_id = "email_id_example"; // string | 

try {
    $result = $apiInstance->getTransactionEmailScreenshots($storefront_oid, $email_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getTransactionEmailScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_id** | **string**|  |

### Return type

[**\ultracart\v2\models\ScreenshotsResponse**](../Model/ScreenshotsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTwilioAccount**
> \ultracart\v2\models\TwilioResponse getTwilioAccount($esp_twilio_uuid)

Get Twilio account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$esp_twilio_uuid = "esp_twilio_uuid_example"; // string | 

try {
    $result = $apiInstance->getTwilioAccount($esp_twilio_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getTwilioAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_twilio_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\TwilioResponse**](../Model/TwilioResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTwilioAccounts**
> \ultracart\v2\models\TwiliosResponse getTwilioAccounts()

Get all Twilio accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);


try {
    $result = $apiInstance->getTwilioAccounts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->getTwilioAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TwiliosResponse**](../Model/TwiliosResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **globalUnsubscribe**
> \ultracart\v2\models\EmailGlobalUnsubscribeResponse globalUnsubscribe($storefront_oid, $unsubscribe)

Globally unsubscribe a customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$unsubscribe = new \ultracart\v2\models\EmailGlobalUnsubscribeRequest(); // \ultracart\v2\models\EmailGlobalUnsubscribeRequest | Unsubscribe

try {
    $result = $apiInstance->globalUnsubscribe($storefront_oid, $unsubscribe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->globalUnsubscribe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **unsubscribe** | [**\ultracart\v2\models\EmailGlobalUnsubscribeRequest**](../Model/EmailGlobalUnsubscribeRequest.md)| Unsubscribe |

### Return type

[**\ultracart\v2\models\EmailGlobalUnsubscribeResponse**](../Model/EmailGlobalUnsubscribeResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importEmailThirdPartyProviderList**
> importEmailThirdPartyProviderList($storefront_oid, $import_request)

Import a third party provider list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$import_request = new \ultracart\v2\models\EmailThirdPartyListImportRequest(); // \ultracart\v2\models\EmailThirdPartyListImportRequest | lists to import

try {
    $apiInstance->importEmailThirdPartyProviderList($storefront_oid, $import_request);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->importEmailThirdPartyProviderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **import_request** | [**\ultracart\v2\models\EmailThirdPartyListImportRequest**](../Model/EmailThirdPartyListImportRequest.md)| lists to import |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse insertEmailCampaign($storefront_oid, $email_campaign)

Insert email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign = new \ultracart\v2\models\EmailCampaign(); // \ultracart\v2\models\EmailCampaign | Email campaign

try {
    $result = $apiInstance->insertEmailCampaign($storefront_oid, $email_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign** | [**\ultracart\v2\models\EmailCampaign**](../Model/EmailCampaign.md)| Email campaign |

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailCampaignFolder**
> \ultracart\v2\models\EmailCampaignFolderResponse insertEmailCampaignFolder($storefront_oid, $email_campaign_folder)

Insert email campaign folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_folder = new \ultracart\v2\models\EmailCampaignFolder(); // \ultracart\v2\models\EmailCampaignFolder | Email campaign folder

try {
    $result = $apiInstance->insertEmailCampaignFolder($storefront_oid, $email_campaign_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailCampaignFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_folder** | [**\ultracart\v2\models\EmailCampaignFolder**](../Model/EmailCampaignFolder.md)| Email campaign folder |

### Return type

[**\ultracart\v2\models\EmailCampaignFolderResponse**](../Model/EmailCampaignFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailCommseq**
> \ultracart\v2\models\EmailCommseqResponse insertEmailCommseq($storefront_oid, $email_commseq)

Insert email commseq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_commseq = new \ultracart\v2\models\EmailCommseq(); // \ultracart\v2\models\EmailCommseq | Email commseq

try {
    $result = $apiInstance->insertEmailCommseq($storefront_oid, $email_commseq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailCommseq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_commseq** | [**\ultracart\v2\models\EmailCommseq**](../Model/EmailCommseq.md)| Email commseq |

### Return type

[**\ultracart\v2\models\EmailCommseqResponse**](../Model/EmailCommseqResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailEmail**
> \ultracart\v2\models\EmailCommseqEmailResponse insertEmailEmail($storefront_oid, $email_commseq_email)

Insert email email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_commseq_email = new \ultracart\v2\models\EmailCommseqEmail(); // \ultracart\v2\models\EmailCommseqEmail | Email email

try {
    $result = $apiInstance->insertEmailEmail($storefront_oid, $email_commseq_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_commseq_email** | [**\ultracart\v2\models\EmailCommseqEmail**](../Model/EmailCommseqEmail.md)| Email email |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailResponse**](../Model/EmailCommseqEmailResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailFlow**
> \ultracart\v2\models\EmailFlowResponse insertEmailFlow($storefront_oid, $email_flow)

Insert email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow = new \ultracart\v2\models\EmailFlow(); // \ultracart\v2\models\EmailFlow | Email flow

try {
    $result = $apiInstance->insertEmailFlow($storefront_oid, $email_flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow** | [**\ultracart\v2\models\EmailFlow**](../Model/EmailFlow.md)| Email flow |

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailFlowFolder**
> \ultracart\v2\models\EmailFlowFolderResponse insertEmailFlowFolder($storefront_oid, $email_flow_folder)

Insert email flow folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_folder = new \ultracart\v2\models\EmailFlowFolder(); // \ultracart\v2\models\EmailFlowFolder | Email flow folder

try {
    $result = $apiInstance->insertEmailFlowFolder($storefront_oid, $email_flow_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailFlowFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_folder** | [**\ultracart\v2\models\EmailFlowFolder**](../Model/EmailFlowFolder.md)| Email flow folder |

### Return type

[**\ultracart\v2\models\EmailFlowFolderResponse**](../Model/EmailFlowFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailList**
> \ultracart\v2\models\EmailListResponse insertEmailList($storefront_oid, $email_list)

Insert email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list = new \ultracart\v2\models\EmailList(); // \ultracart\v2\models\EmailList | Email list

try {
    $result = $apiInstance->insertEmailList($storefront_oid, $email_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list** | [**\ultracart\v2\models\EmailList**](../Model/EmailList.md)| Email list |

### Return type

[**\ultracart\v2\models\EmailListResponse**](../Model/EmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailListSegmentFolder**
> \ultracart\v2\models\EmailListSegmentFolderResponse insertEmailListSegmentFolder($storefront_oid, $email_list_segment_folder)

Insert email campaign folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_segment_folder = new \ultracart\v2\models\EmailListSegmentFolder(); // \ultracart\v2\models\EmailListSegmentFolder | Email campaign folder

try {
    $result = $apiInstance->insertEmailListSegmentFolder($storefront_oid, $email_list_segment_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailListSegmentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_segment_folder** | [**\ultracart\v2\models\EmailListSegmentFolder**](../Model/EmailListSegmentFolder.md)| Email campaign folder |

### Return type

[**\ultracart\v2\models\EmailListSegmentFolderResponse**](../Model/EmailListSegmentFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailPostcard**
> \ultracart\v2\models\EmailCommseqPostcardResponse insertEmailPostcard($storefront_oid, $email_commseq_postcard)

Insert email postcard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_commseq_postcard = new \ultracart\v2\models\EmailCommseqPostcard(); // \ultracart\v2\models\EmailCommseqPostcard | Email postcard

try {
    $result = $apiInstance->insertEmailPostcard($storefront_oid, $email_commseq_postcard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailPostcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_commseq_postcard** | [**\ultracart\v2\models\EmailCommseqPostcard**](../Model/EmailCommseqPostcard.md)| Email postcard |

### Return type

[**\ultracart\v2\models\EmailCommseqPostcardResponse**](../Model/EmailCommseqPostcardResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertEmailSegment**
> \ultracart\v2\models\EmailSegmentResponse insertEmailSegment($storefront_oid, $email_segment)

Insert email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment = new \ultracart\v2\models\EmailSegment(); // \ultracart\v2\models\EmailSegment | Email segment

try {
    $result = $apiInstance->insertEmailSegment($storefront_oid, $email_segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment** | [**\ultracart\v2\models\EmailSegment**](../Model/EmailSegment.md)| Email segment |

### Return type

[**\ultracart\v2\models\EmailSegmentResponse**](../Model/EmailSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertScreenRecordingSegment**
> \ultracart\v2\models\ScreenRecordingSegmentResponse insertScreenRecordingSegment($storefront_oid, $segment)

Insert screen recording segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$segment = new \ultracart\v2\models\ScreenRecordingSegment(); // \ultracart\v2\models\ScreenRecordingSegment | Segment

try {
    $result = $apiInstance->insertScreenRecordingSegment($storefront_oid, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->insertScreenRecordingSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **segment** | [**\ultracart\v2\models\ScreenRecordingSegment**](../Model/ScreenRecordingSegment.md)| Segment |

### Return type

[**\ultracart\v2\models\ScreenRecordingSegmentResponse**](../Model/ScreenRecordingSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **prepareDownloadEmailSegment**
> \ultracart\v2\models\EmailSegmentDownloadPrepareResponse prepareDownloadEmailSegment($storefront_oid, $email_segment_uuid)

Prepare download of email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 

try {
    $result = $apiInstance->prepareDownloadEmailSegment($storefront_oid, $email_segment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->prepareDownloadEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailSegmentDownloadPrepareResponse**](../Model/EmailSegmentDownloadPrepareResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishLibraryItem**
> \ultracart\v2\models\LibraryItemResponse publishLibraryItem($library_item_oid, $publish_library_request)

Publish library item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 
$publish_library_request = new \ultracart\v2\models\PublishLibraryItemRequest(); // \ultracart\v2\models\PublishLibraryItemRequest | Publish library item request

try {
    $result = $apiInstance->publishLibraryItem($library_item_oid, $publish_library_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->publishLibraryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |
 **publish_library_request** | [**\ultracart\v2\models\PublishLibraryItemRequest**](../Model/PublishLibraryItemRequest.md)| Publish library item request |

### Return type

[**\ultracart\v2\models\LibraryItemResponse**](../Model/LibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **purchaseLibraryItem**
> \ultracart\v2\models\LibraryItemResponse purchaseLibraryItem($library_item_oid, $storefront_oid)

Purchase public library item, which creates a copy of the item in your personal code library

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 
$storefront_oid = 56; // int | 

try {
    $result = $apiInstance->purchaseLibraryItem($library_item_oid, $storefront_oid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->purchaseLibraryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |
 **storefront_oid** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\LibraryItemResponse**](../Model/LibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **releaseEmailCommseqStepWaiting**
> releaseEmailCommseqStepWaiting($storefront_oid, $commseq_uuid, $commseq_step_uuid)

Release email communication sequence customers waiting at the specified step

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$commseq_step_uuid = "commseq_step_uuid_example"; // string | 

try {
    $apiInstance->releaseEmailCommseqStepWaiting($storefront_oid, $commseq_uuid, $commseq_step_uuid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->releaseEmailCommseqStepWaiting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **commseq_step_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **review**
> \ultracart\v2\models\EmailCommseqEmailSendTestResponse review($storefront_oid, $commseq_email_uuid, $email_commseq_email_review_request)

Request a review of an email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 
$email_commseq_email_review_request = new \ultracart\v2\models\EmailCommseqEmailSendTestRequest(); // \ultracart\v2\models\EmailCommseqEmailSendTestRequest | Email commseq email review request

try {
    $result = $apiInstance->review($storefront_oid, $commseq_email_uuid, $email_commseq_email_review_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->review: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_email_uuid** | **string**|  |
 **email_commseq_email_review_request** | [**\ultracart\v2\models\EmailCommseqEmailSendTestRequest**](../Model/EmailCommseqEmailSendTestRequest.md)| Email commseq email review request |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailSendTestResponse**](../Model/EmailCommseqEmailSendTestResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search**
> \ultracart\v2\models\LookupResponse search($category, $matches, $storefront_oid, $max_hits, $subcategory)

Searches for all matching values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$category = "category_example"; // string | 
$matches = "matches_example"; // string | 
$storefront_oid = "storefront_oid_example"; // string | 
$max_hits = 56; // int | 
$subcategory = "subcategory_example"; // string | 

try {
    $result = $apiInstance->search($category, $matches, $storefront_oid, $max_hits, $subcategory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  | [optional]
 **matches** | **string**|  | [optional]
 **storefront_oid** | **string**|  | [optional]
 **max_hits** | **int**|  | [optional]
 **subcategory** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\LookupResponse**](../Model/LookupResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **search2**
> \ultracart\v2\models\LookupResponse search2($lookup_request)

Searches for all matching values (using POST)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$lookup_request = new \ultracart\v2\models\LookupRequest(); // \ultracart\v2\models\LookupRequest | LookupRequest

try {
    $result = $apiInstance->search2($lookup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->search2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lookup_request** | [**\ultracart\v2\models\LookupRequest**](../Model/LookupRequest.md)| LookupRequest |

### Return type

[**\ultracart\v2\models\LookupResponse**](../Model/LookupResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchEmailListCustomers**
> \ultracart\v2\models\EmailListCustomersResponse searchEmailListCustomers($storefront_oid, $email_list_uuid, $starts_with)

Search email list customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 
$starts_with = "starts_with_example"; // string | 

try {
    $result = $apiInstance->searchEmailListCustomers($storefront_oid, $email_list_uuid, $starts_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->searchEmailListCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |
 **starts_with** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailListCustomersResponse**](../Model/EmailListCustomersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchEmailSegmentCustomers**
> \ultracart\v2\models\EmailSegmentCustomersResponse searchEmailSegmentCustomers($storefront_oid, $email_segment_uuid, $starts_with)

Search email segment customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 
$starts_with = "starts_with_example"; // string | 

try {
    $result = $apiInstance->searchEmailSegmentCustomers($storefront_oid, $email_segment_uuid, $starts_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->searchEmailSegmentCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |
 **starts_with** | **string**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailSegmentCustomersResponse**](../Model/EmailSegmentCustomersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchLibraryItems**
> \ultracart\v2\models\LibraryItemsResponse searchLibraryItems($item_query, $_limit, $_offset, $_sort)

Retrieve library items

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$item_query = new \ultracart\v2\models\LibraryItemQuery(); // \ultracart\v2\models\LibraryItemQuery | Item query
$_limit = 10000; // int | The maximum number of records to return on this one API call. (Maximum 10000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->searchLibraryItems($item_query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->searchLibraryItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_query** | [**\ultracart\v2\models\LibraryItemQuery**](../Model/LibraryItemQuery.md)| Item query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 10000) | [optional] [default to 10000]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\LibraryItemsResponse**](../Model/LibraryItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPublishedItems**
> \ultracart\v2\models\LibraryItemsResponse searchPublishedItems($item_query, $_limit, $_offset, $_sort)

Retrieve library items

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$item_query = new \ultracart\v2\models\LibraryItemQuery(); // \ultracart\v2\models\LibraryItemQuery | Item query
$_limit = 10000; // int | The maximum number of records to return on this one API call. (Maximum 10000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->searchPublishedItems($item_query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->searchPublishedItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_query** | [**\ultracart\v2\models\LibraryItemQuery**](../Model/LibraryItemQuery.md)| Item query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 10000) | [optional] [default to 10000]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\LibraryItemsResponse**](../Model/LibraryItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchReviewItems**
> \ultracart\v2\models\LibraryItemsResponse searchReviewItems($item_query, $_limit, $_offset, $_sort)

Retrieve library items needing review or rejected

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$item_query = new \ultracart\v2\models\LibraryItemQuery(); // \ultracart\v2\models\LibraryItemQuery | Item query
$_limit = 10000; // int | The maximum number of records to return on this one API call. (Maximum 10000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->searchReviewItems($item_query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->searchReviewItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_query** | [**\ultracart\v2\models\LibraryItemQuery**](../Model/LibraryItemQuery.md)| Item query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 10000) | [optional] [default to 10000]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\LibraryItemsResponse**](../Model/LibraryItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSharedItems**
> \ultracart\v2\models\LibraryItemsResponse searchSharedItems($item_query, $_limit, $_offset, $_sort)

Retrieve library items

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$item_query = new \ultracart\v2\models\LibraryItemQuery(); // \ultracart\v2\models\LibraryItemQuery | Item query
$_limit = 10000; // int | The maximum number of records to return on this one API call. (Maximum 10000)
$_offset = 0; // int | Pagination of the record set.  Offset is a zero based index.
$_sort = "_sort_example"; // string | The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending.

try {
    $result = $apiInstance->searchSharedItems($item_query, $_limit, $_offset, $_sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->searchSharedItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_query** | [**\ultracart\v2\models\LibraryItemQuery**](../Model/LibraryItemQuery.md)| Item query |
 **_limit** | **int**| The maximum number of records to return on this one API call. (Maximum 10000) | [optional] [default to 10000]
 **_offset** | **int**| Pagination of the record set.  Offset is a zero based index. | [optional] [default to 0]
 **_sort** | **string**| The sort order of the library items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. | [optional]

### Return type

[**\ultracart\v2\models\LibraryItemsResponse**](../Model/LibraryItemsResponse.md)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEmailTest**
> \ultracart\v2\models\EmailCommseqEmailSendTestResponse sendEmailTest($storefront_oid, $commseq_email_uuid, $email_commseq_email_test_request)

Send email test

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 
$email_commseq_email_test_request = new \ultracart\v2\models\EmailCommseqEmailSendTestRequest(); // \ultracart\v2\models\EmailCommseqEmailSendTestRequest | Email commseq email test request

try {
    $result = $apiInstance->sendEmailTest($storefront_oid, $commseq_email_uuid, $email_commseq_email_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->sendEmailTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_email_uuid** | **string**|  |
 **email_commseq_email_test_request** | [**\ultracart\v2\models\EmailCommseqEmailSendTestRequest**](../Model/EmailCommseqEmailSendTestRequest.md)| Email commseq email test request |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailSendTestResponse**](../Model/EmailCommseqEmailSendTestResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendPostcardTest**
> \ultracart\v2\models\EmailCommseqPostcardSendTestResponse sendPostcardTest($storefront_oid, $commseq_postcard_uuid, $email_commseq_postcard_test_request)

Send postcard test

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_postcard_uuid = "commseq_postcard_uuid_example"; // string | 
$email_commseq_postcard_test_request = new \ultracart\v2\models\EmailCommseqPostcardSendTestRequest(); // \ultracart\v2\models\EmailCommseqPostcardSendTestRequest | Email commseq email test request

try {
    $result = $apiInstance->sendPostcardTest($storefront_oid, $commseq_postcard_uuid, $email_commseq_postcard_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->sendPostcardTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_postcard_uuid** | **string**|  |
 **email_commseq_postcard_test_request** | [**\ultracart\v2\models\EmailCommseqPostcardSendTestRequest**](../Model/EmailCommseqPostcardSendTestRequest.md)| Email commseq email test request |

### Return type

[**\ultracart\v2\models\EmailCommseqPostcardSendTestResponse**](../Model/EmailCommseqPostcardSendTestResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendWebhookTest**
> \ultracart\v2\models\EmailCommseqWebhookSendTestResponse sendWebhookTest($storefront_oid, $email_commseq_webhook_test_request)

Send webhook test

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_commseq_webhook_test_request = new \ultracart\v2\models\EmailCommseqWebhookSendTestRequest(); // \ultracart\v2\models\EmailCommseqWebhookSendTestRequest | Email commseq webhook test request

try {
    $result = $apiInstance->sendWebhookTest($storefront_oid, $email_commseq_webhook_test_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->sendWebhookTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_commseq_webhook_test_request** | [**\ultracart\v2\models\EmailCommseqWebhookSendTestRequest**](../Model/EmailCommseqWebhookSendTestRequest.md)| Email commseq webhook test request |

### Return type

[**\ultracart\v2\models\EmailCommseqWebhookSendTestResponse**](../Model/EmailCommseqWebhookSendTestResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startEmailCampaign**
> \ultracart\v2\models\BaseResponse startEmailCampaign($storefront_oid, $email_campaign_uuid)

Start email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_uuid = "email_campaign_uuid_example"; // string | 

try {
    $result = $apiInstance->startEmailCampaign($storefront_oid, $email_campaign_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->startEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\BaseResponse**](../Model/BaseResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscribeToEmailList**
> \ultracart\v2\models\EmailListSubscribeResponse subscribeToEmailList($storefront_oid, $email_list_uuid, $customers)

Subscribe customers to email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 
$customers = array(new \ultracart\v2\models\EmailCustomer()); // \ultracart\v2\models\EmailCustomer[] | Customers

try {
    $result = $apiInstance->subscribeToEmailList($storefront_oid, $email_list_uuid, $customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->subscribeToEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |
 **customers** | [**\ultracart\v2\models\EmailCustomer[]**](../Model/EmailCustomer.md)| Customers |

### Return type

[**\ultracart\v2\models\EmailListSubscribeResponse**](../Model/EmailListSubscribeResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unfavoriteScreenRecording**
> unfavoriteScreenRecording($storefront_oid, $screen_recording_uuid)

Remove favorite flag on screen recording

Remove favorite flag on screen recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_uuid = "screen_recording_uuid_example"; // string | 

try {
    $apiInstance->unfavoriteScreenRecording($storefront_oid, $screen_recording_uuid);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->unfavoriteScreenRecording: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCampaign**
> \ultracart\v2\models\EmailCampaignResponse updateEmailCampaign($storefront_oid, $email_campaign_uuid, $email_campaign)

Update email campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_uuid = "email_campaign_uuid_example"; // string | 
$email_campaign = new \ultracart\v2\models\EmailCampaign(); // \ultracart\v2\models\EmailCampaign | Email campaign

try {
    $result = $apiInstance->updateEmailCampaign($storefront_oid, $email_campaign_uuid, $email_campaign);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_uuid** | **string**|  |
 **email_campaign** | [**\ultracart\v2\models\EmailCampaign**](../Model/EmailCampaign.md)| Email campaign |

### Return type

[**\ultracart\v2\models\EmailCampaignResponse**](../Model/EmailCampaignResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCampaignFolder**
> \ultracart\v2\models\EmailCampaignFolderResponse updateEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid, $email_campaign_folder)

Update email campaign folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_campaign_folder_uuid = "email_campaign_folder_uuid_example"; // string | 
$email_campaign_folder = new \ultracart\v2\models\EmailCampaignFolder(); // \ultracart\v2\models\EmailCampaignFolder | Email campaign folder

try {
    $result = $apiInstance->updateEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid, $email_campaign_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailCampaignFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_campaign_folder_uuid** | **string**|  |
 **email_campaign_folder** | [**\ultracart\v2\models\EmailCampaignFolder**](../Model/EmailCampaignFolder.md)| Email campaign folder |

### Return type

[**\ultracart\v2\models\EmailCampaignFolderResponse**](../Model/EmailCampaignFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCommseq**
> \ultracart\v2\models\EmailCommseqResponse updateEmailCommseq($storefront_oid, $commseq_uuid, $email_commseq)

Update email commseq

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_uuid = "commseq_uuid_example"; // string | 
$email_commseq = new \ultracart\v2\models\EmailCommseq(); // \ultracart\v2\models\EmailCommseq | Email commseq

try {
    $result = $apiInstance->updateEmailCommseq($storefront_oid, $commseq_uuid, $email_commseq);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailCommseq: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **email_commseq** | [**\ultracart\v2\models\EmailCommseq**](../Model/EmailCommseq.md)| Email commseq |

### Return type

[**\ultracart\v2\models\EmailCommseqResponse**](../Model/EmailCommseqResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailCustomer**
> updateEmailCustomer($storefront_oid, $email_customer_uuid, $email_customer)

Update email customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_customer_uuid = "email_customer_uuid_example"; // string | 
$email_customer = new \ultracart\v2\models\EmailCustomer(); // \ultracart\v2\models\EmailCustomer | Email customer

try {
    $apiInstance->updateEmailCustomer($storefront_oid, $email_customer_uuid, $email_customer);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_customer_uuid** | **string**|  |
 **email_customer** | [**\ultracart\v2\models\EmailCustomer**](../Model/EmailCustomer.md)| Email customer |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailEmail**
> \ultracart\v2\models\EmailCommseqEmailResponse updateEmailEmail($storefront_oid, $commseq_email_uuid, $email_commseq_email)

Update email email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_email_uuid = "commseq_email_uuid_example"; // string | 
$email_commseq_email = new \ultracart\v2\models\EmailCommseqEmail(); // \ultracart\v2\models\EmailCommseqEmail | Email commseq email

try {
    $result = $apiInstance->updateEmailEmail($storefront_oid, $commseq_email_uuid, $email_commseq_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_email_uuid** | **string**|  |
 **email_commseq_email** | [**\ultracart\v2\models\EmailCommseqEmail**](../Model/EmailCommseqEmail.md)| Email commseq email |

### Return type

[**\ultracart\v2\models\EmailCommseqEmailResponse**](../Model/EmailCommseqEmailResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailFlow**
> \ultracart\v2\models\EmailFlowResponse updateEmailFlow($storefront_oid, $email_flow_uuid, $email_flow)

Update email flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_uuid = "email_flow_uuid_example"; // string | 
$email_flow = new \ultracart\v2\models\EmailFlow(); // \ultracart\v2\models\EmailFlow | Email flow

try {
    $result = $apiInstance->updateEmailFlow($storefront_oid, $email_flow_uuid, $email_flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_uuid** | **string**|  |
 **email_flow** | [**\ultracart\v2\models\EmailFlow**](../Model/EmailFlow.md)| Email flow |

### Return type

[**\ultracart\v2\models\EmailFlowResponse**](../Model/EmailFlowResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailFlowFolder**
> \ultracart\v2\models\EmailFlowFolderResponse updateEmailFlowFolder($storefront_oid, $email_flow_folder_uuid, $email_flow_folder)

Update email flow folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_flow_folder_uuid = "email_flow_folder_uuid_example"; // string | 
$email_flow_folder = new \ultracart\v2\models\EmailFlowFolder(); // \ultracart\v2\models\EmailFlowFolder | Email flow folder

try {
    $result = $apiInstance->updateEmailFlowFolder($storefront_oid, $email_flow_folder_uuid, $email_flow_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailFlowFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_flow_folder_uuid** | **string**|  |
 **email_flow_folder** | [**\ultracart\v2\models\EmailFlowFolder**](../Model/EmailFlowFolder.md)| Email flow folder |

### Return type

[**\ultracart\v2\models\EmailFlowFolderResponse**](../Model/EmailFlowFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailGlobalSettings**
> \ultracart\v2\models\EmailGlobalSettingsResponse updateEmailGlobalSettings($global_settings)

Update email global settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$global_settings = new \ultracart\v2\models\EmailGlobalSettings(); // \ultracart\v2\models\EmailGlobalSettings | global settings request

try {
    $result = $apiInstance->updateEmailGlobalSettings($global_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailGlobalSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **global_settings** | [**\ultracart\v2\models\EmailGlobalSettings**](../Model/EmailGlobalSettings.md)| global settings request |

### Return type

[**\ultracart\v2\models\EmailGlobalSettingsResponse**](../Model/EmailGlobalSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailList**
> \ultracart\v2\models\EmailListResponse updateEmailList($storefront_oid, $email_list_uuid, $email_list)

Update email list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_uuid = "email_list_uuid_example"; // string | 
$email_list = new \ultracart\v2\models\EmailList(); // \ultracart\v2\models\EmailList | Email list

try {
    $result = $apiInstance->updateEmailList($storefront_oid, $email_list_uuid, $email_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_uuid** | **string**|  |
 **email_list** | [**\ultracart\v2\models\EmailList**](../Model/EmailList.md)| Email list |

### Return type

[**\ultracart\v2\models\EmailListResponse**](../Model/EmailListResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailListSegmentFolder**
> \ultracart\v2\models\EmailListSegmentFolderResponse updateEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid, $email_list_segment_folder)

Update email campaign folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_list_segment_folder_uuid = "email_list_segment_folder_uuid_example"; // string | 
$email_list_segment_folder = new \ultracart\v2\models\EmailListSegmentFolder(); // \ultracart\v2\models\EmailListSegmentFolder | Email campaign folder

try {
    $result = $apiInstance->updateEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid, $email_list_segment_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailListSegmentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_list_segment_folder_uuid** | **string**|  |
 **email_list_segment_folder** | [**\ultracart\v2\models\EmailListSegmentFolder**](../Model/EmailListSegmentFolder.md)| Email campaign folder |

### Return type

[**\ultracart\v2\models\EmailListSegmentFolderResponse**](../Model/EmailListSegmentFolderResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailPlan**
> \ultracart\v2\models\EmailPlanResponse updateEmailPlan($storefront_oid, $settings)

Update email plan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$settings = new \ultracart\v2\models\EmailPlan(); // \ultracart\v2\models\EmailPlan | plan request

try {
    $result = $apiInstance->updateEmailPlan($storefront_oid, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **settings** | [**\ultracart\v2\models\EmailPlan**](../Model/EmailPlan.md)| plan request |

### Return type

[**\ultracart\v2\models\EmailPlanResponse**](../Model/EmailPlanResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailPostcard**
> \ultracart\v2\models\EmailCommseqPostcardResponse updateEmailPostcard($storefront_oid, $commseq_postcard_uuid, $email_commseq_postcard)

Update email postcard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$commseq_postcard_uuid = "commseq_postcard_uuid_example"; // string | 
$email_commseq_postcard = new \ultracart\v2\models\EmailCommseqPostcard(); // \ultracart\v2\models\EmailCommseqPostcard | Email commseq postcard

try {
    $result = $apiInstance->updateEmailPostcard($storefront_oid, $commseq_postcard_uuid, $email_commseq_postcard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailPostcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_postcard_uuid** | **string**|  |
 **email_commseq_postcard** | [**\ultracart\v2\models\EmailCommseqPostcard**](../Model/EmailCommseqPostcard.md)| Email commseq postcard |

### Return type

[**\ultracart\v2\models\EmailCommseqPostcardResponse**](../Model/EmailCommseqPostcardResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailSegment**
> \ultracart\v2\models\EmailSegmentResponse updateEmailSegment($storefront_oid, $email_segment_uuid, $email_segment)

Update email segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_segment_uuid = "email_segment_uuid_example"; // string | 
$email_segment = new \ultracart\v2\models\EmailSegment(); // \ultracart\v2\models\EmailSegment | Email segment

try {
    $result = $apiInstance->updateEmailSegment($storefront_oid, $email_segment_uuid, $email_segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |
 **email_segment** | [**\ultracart\v2\models\EmailSegment**](../Model/EmailSegment.md)| Email segment |

### Return type

[**\ultracart\v2\models\EmailSegmentResponse**](../Model/EmailSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailSendingDomain**
> \ultracart\v2\models\EmailSendingDomainResponse updateEmailSendingDomain($domain, $email_domain)

Update email sending domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$domain = "domain_example"; // string | 
$email_domain = new \ultracart\v2\models\EmailDomain(); // \ultracart\v2\models\EmailDomain | EmailDomain

try {
    $result = $apiInstance->updateEmailSendingDomain($domain, $email_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailSendingDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |
 **email_domain** | [**\ultracart\v2\models\EmailDomain**](../Model/EmailDomain.md)| EmailDomain |

### Return type

[**\ultracart\v2\models\EmailSendingDomainResponse**](../Model/EmailSendingDomainResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailSettings**
> \ultracart\v2\models\EmailSettingsResponse updateEmailSettings($storefront_oid, $settings)

Update email settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$settings = new \ultracart\v2\models\EmailSettings(); // \ultracart\v2\models\EmailSettings | settings request

try {
    $result = $apiInstance->updateEmailSettings($storefront_oid, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateEmailSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **settings** | [**\ultracart\v2\models\EmailSettings**](../Model/EmailSettings.md)| settings request |

### Return type

[**\ultracart\v2\models\EmailSettingsResponse**](../Model/EmailSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExperiment**
> \ultracart\v2\models\ExperimentResponse updateExperiment($storefront_oid, $storefront_experiment_oid, $experiment)

Update experiment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$storefront_experiment_oid = 56; // int | 
$experiment = new \ultracart\v2\models\Experiment(); // \ultracart\v2\models\Experiment | Experiment

try {
    $result = $apiInstance->updateExperiment($storefront_oid, $storefront_experiment_oid, $experiment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateExperiment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **storefront_experiment_oid** | **int**|  |
 **experiment** | [**\ultracart\v2\models\Experiment**](../Model/Experiment.md)| Experiment |

### Return type

[**\ultracart\v2\models\ExperimentResponse**](../Model/ExperimentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLibraryItem**
> \ultracart\v2\models\LibraryItemResponse updateLibraryItem($library_item_oid, $library_item)

Update library item. Note that only certain fields may be updated via this method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$library_item_oid = 56; // int | 
$library_item = new \ultracart\v2\models\LibraryItem(); // \ultracart\v2\models\LibraryItem | Library item

try {
    $result = $apiInstance->updateLibraryItem($library_item_oid, $library_item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateLibraryItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **library_item_oid** | **int**|  |
 **library_item** | [**\ultracart\v2\models\LibraryItem**](../Model/LibraryItem.md)| Library item |

### Return type

[**\ultracart\v2\models\LibraryItemResponse**](../Model/LibraryItemResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScreenRecordingMerchantNotes**
> updateScreenRecordingMerchantNotes($storefront_oid, $screen_recording_uuid, $merchant_notes_request)

Update merchant notes on a screen recording

Update merchant notes on a screen recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_uuid = "screen_recording_uuid_example"; // string | 
$merchant_notes_request = new \ultracart\v2\models\ScreenRecordingMerchantNotesRequest(); // \ultracart\v2\models\ScreenRecordingMerchantNotesRequest | Merchant Notes

try {
    $apiInstance->updateScreenRecordingMerchantNotes($storefront_oid, $screen_recording_uuid, $merchant_notes_request);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateScreenRecordingMerchantNotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_uuid** | **string**|  |
 **merchant_notes_request** | [**\ultracart\v2\models\ScreenRecordingMerchantNotesRequest**](../Model/ScreenRecordingMerchantNotesRequest.md)| Merchant Notes |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScreenRecordingSegment**
> \ultracart\v2\models\ScreenRecordingSegmentResponse updateScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid, $segment)

Update screen recording segment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_segment_oid = 56; // int | 
$segment = new \ultracart\v2\models\ScreenRecordingSegment(); // \ultracart\v2\models\ScreenRecordingSegment | Segment

try {
    $result = $apiInstance->updateScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid, $segment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateScreenRecordingSegment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_segment_oid** | **int**|  |
 **segment** | [**\ultracart\v2\models\ScreenRecordingSegment**](../Model/ScreenRecordingSegment.md)| Segment |

### Return type

[**\ultracart\v2\models\ScreenRecordingSegmentResponse**](../Model/ScreenRecordingSegmentResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScreenRecordingSettings**
> \ultracart\v2\models\ScreenRecordingSettingsResponse updateScreenRecordingSettings($storefront_oid, $settings)

Update screen recording settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$settings = new \ultracart\v2\models\ScreenRecordingSettings(); // \ultracart\v2\models\ScreenRecordingSettings | Settings

try {
    $result = $apiInstance->updateScreenRecordingSettings($storefront_oid, $settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateScreenRecordingSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **settings** | [**\ultracart\v2\models\ScreenRecordingSettings**](../Model/ScreenRecordingSettings.md)| Settings |

### Return type

[**\ultracart\v2\models\ScreenRecordingSettingsResponse**](../Model/ScreenRecordingSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScreenRecordingTags**
> updateScreenRecordingTags($storefront_oid, $screen_recording_uuid, $tags)

Update tags on a screen recording

Update tags on a screen recording

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$screen_recording_uuid = "screen_recording_uuid_example"; // string | 
$tags = new \ultracart\v2\models\ScreenRecordingTagsRequest(); // \ultracart\v2\models\ScreenRecordingTagsRequest | Tags

try {
    $apiInstance->updateScreenRecordingTags($storefront_oid, $screen_recording_uuid, $tags);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateScreenRecordingTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **screen_recording_uuid** | **string**|  |
 **tags** | [**\ultracart\v2\models\ScreenRecordingTagsRequest**](../Model/ScreenRecordingTagsRequest.md)| Tags |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTransactionEmail**
> \ultracart\v2\models\TransactionEmailResponse updateTransactionEmail($storefront_oid, $email_id, $transaction_email)

Updates a transaction email object

Updates a transactional email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$storefront_oid = 56; // int | 
$email_id = "email_id_example"; // string | 
$transaction_email = new \ultracart\v2\models\TransactionEmail(); // \ultracart\v2\models\TransactionEmail | TransactionEmail

try {
    $result = $apiInstance->updateTransactionEmail($storefront_oid, $email_id, $transaction_email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateTransactionEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_id** | **string**|  |
 **transaction_email** | [**\ultracart\v2\models\TransactionEmail**](../Model/TransactionEmail.md)| TransactionEmail |

### Return type

[**\ultracart\v2\models\TransactionEmailResponse**](../Model/TransactionEmailResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTwilioAccount**
> \ultracart\v2\models\TwilioResponse updateTwilioAccount($esp_twilio_uuid, $twilio)

Update Twilio account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Create a Simple Key: https://ultracart.atlassian.net/wiki/spaces/ucdoc/pages/38688545/API+Simple+Key
$simple_key = '109ee846ee69f50177018ab12f008a00748a25aa28dbdc0177018ab12f008a00';
$api_instance = ultracart\v2\api\StorefrontApi::usingApiKey($simple_key);

$esp_twilio_uuid = "esp_twilio_uuid_example"; // string | 
$twilio = new \ultracart\v2\models\Twilio(); // \ultracart\v2\models\Twilio | Twilio

try {
    $result = $apiInstance->updateTwilioAccount($esp_twilio_uuid, $twilio);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StorefrontApi->updateTwilioAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **esp_twilio_uuid** | **string**|  |
 **twilio** | [**\ultracart\v2\models\Twilio**](../Model/Twilio.md)| Twilio |

### Return type

[**\ultracart\v2\models\TwilioResponse**](../Model/TwilioResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

