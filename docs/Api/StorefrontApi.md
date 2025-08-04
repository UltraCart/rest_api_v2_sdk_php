# ultracart\v2\StorefrontApi

All URIs are relative to https://secure.ultracart.com/rest/v2.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addToLibrary()**](StorefrontApi.md#addToLibrary) | **POST** /storefront/code_library | Add to library
[**applyToStoreFront()**](StorefrontApi.md#applyToStoreFront) | **POST** /storefront/code_library/apply | Apply library item to storefront.
[**archiveEmailList()**](StorefrontApi.md#archiveEmailList) | **POST** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/archive | Archive email list
[**archiveEmailSegment()**](StorefrontApi.md#archiveEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/archive | Archive email segment
[**backPopulateEmailFlow()**](StorefrontApi.md#backPopulateEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/backfill | Back populate email flow
[**checkDownloadEmailSegment()**](StorefrontApi.md#checkDownloadEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/downloadPrepare/{email_segment_rebuild_uuid} | Check download of email segment
[**cloneEmailCampaign()**](StorefrontApi.md#cloneEmailCampaign) | **POST** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/clone | Clone email campaign
[**cloneEmailFlow()**](StorefrontApi.md#cloneEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/clone | Clone email flow
[**createEmailSendingDomain()**](StorefrontApi.md#createEmailSendingDomain) | **POST** /storefront/email/sending_domains/{domain}/create | Create email campaign
[**createEmailSendingDomain2()**](StorefrontApi.md#createEmailSendingDomain2) | **POST** /storefront/email/sending_domains | Create email sending domain for various providers
[**createFsDirectory()**](StorefrontApi.md#createFsDirectory) | **POST** /storefront/{id}/fs/dir | Create file manager directory
[**createTwilioAccount()**](StorefrontApi.md#createTwilioAccount) | **POST** /storefront/twilio/accounts | Create Twilio account
[**deleteEmailCampaignFolder()**](StorefrontApi.md#deleteEmailCampaignFolder) | **DELETE** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Delete email campaignFolder
[**deleteEmailCommseqStat()**](StorefrontApi.md#deleteEmailCommseqStat) | **DELETE** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stat | Delete communication sequence stats
[**deleteEmailEmail()**](StorefrontApi.md#deleteEmailEmail) | **DELETE** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Delete email email
[**deleteEmailFlowFolder()**](StorefrontApi.md#deleteEmailFlowFolder) | **DELETE** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Delete email flowFolder
[**deleteEmailListCustomer()**](StorefrontApi.md#deleteEmailListCustomer) | **DELETE** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers/{email_customer_uuid} | Delete email list customer
[**deleteEmailListSegmentFolder()**](StorefrontApi.md#deleteEmailListSegmentFolder) | **DELETE** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Delete email ListSegmentFolder
[**deleteEmailPostcard()**](StorefrontApi.md#deleteEmailPostcard) | **DELETE** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Delete email postcard
[**deleteEmailSendingDomain()**](StorefrontApi.md#deleteEmailSendingDomain) | **DELETE** /storefront/email/sending_domains/{domain} | delete email campaign
[**deleteExperiment()**](StorefrontApi.md#deleteExperiment) | **DELETE** /storefront/{storefront_oid}/experiments/{storefront_experiment_oid} | Delete experiment
[**deleteFsFile()**](StorefrontApi.md#deleteFsFile) | **DELETE** /storefront/{id}/fs/file | Delete file manager directory
[**deleteHeatmap()**](StorefrontApi.md#deleteHeatmap) | **DELETE** /storefront/{storefront_oid}/screen_recordings/heatmap | Delete screen recording heatmap
[**deleteLibraryItem()**](StorefrontApi.md#deleteLibraryItem) | **DELETE** /storefront/code_library/{library_item_oid} | Delete library item
[**deleteLibraryItemPublishedVersions()**](StorefrontApi.md#deleteLibraryItemPublishedVersions) | **DELETE** /storefront/code_library/{library_item_oid}/published_versions | Delete all published versions for a library item, including anything in review.
[**deleteScreenRecordingSegment()**](StorefrontApi.md#deleteScreenRecordingSegment) | **DELETE** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Delete screen recording segment
[**deleteTwilioAccount()**](StorefrontApi.md#deleteTwilioAccount) | **DELETE** /storefront/twilio/accounts/{esp_twilio_uuid} | delete Twilio account
[**duplicateLibraryItem()**](StorefrontApi.md#duplicateLibraryItem) | **POST** /storefront/code_library/{library_item_oid}/duplicate | Duplicate library item.
[**favoriteScreenRecording()**](StorefrontApi.md#favoriteScreenRecording) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/favorite | Update favorite flag on screen recording
[**geocodeAddress()**](StorefrontApi.md#geocodeAddress) | **POST** /storefront/{storefront_oid}/email/geocode | Obtain lat/long for an address
[**getCountries()**](StorefrontApi.md#getCountries) | **GET** /storefront/{storefront_oid}/email/countries | Get countries
[**getEditorToken()**](StorefrontApi.md#getEditorToken) | **GET** /storefront/{storefront_oid}/editor_token | Gets editor token
[**getEmailBaseTemplates()**](StorefrontApi.md#getEmailBaseTemplates) | **GET** /storefront/{storefront_oid}/email/baseTemplates | Get email communication base templates
[**getEmailCampaign()**](StorefrontApi.md#getEmailCampaign) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Get email campaign
[**getEmailCampaignFolder()**](StorefrontApi.md#getEmailCampaignFolder) | **GET** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Get email campaign folder
[**getEmailCampaignFolders()**](StorefrontApi.md#getEmailCampaignFolders) | **GET** /storefront/{storefront_oid}/email/campaign_folders | Get email campaign folders
[**getEmailCampaignScreenshots()**](StorefrontApi.md#getEmailCampaignScreenshots) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/screenshots | Get email campaign screenshots
[**getEmailCampaigns()**](StorefrontApi.md#getEmailCampaigns) | **GET** /storefront/{storefront_oid}/email/campaigns | Get email campaigns
[**getEmailCampaignsWithStats()**](StorefrontApi.md#getEmailCampaignsWithStats) | **GET** /storefront/{storefront_oid}/email/campaignsWithStats/{stat_days} | Get email campaigns with stats
[**getEmailCommseq()**](StorefrontApi.md#getEmailCommseq) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Get email commseq
[**getEmailCommseqEditorValues()**](StorefrontApi.md#getEmailCommseqEditorValues) | **GET** /storefront/{storefront_oid}/email/commseqs/editorValues | Get email merchant specific editor values
[**getEmailCommseqEmailStats()**](StorefrontApi.md#getEmailCommseqEmailStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/emailStats | Get email communication sequence emails stats
[**getEmailCommseqPostcardStats()**](StorefrontApi.md#getEmailCommseqPostcardStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/postcardStats | Get email communication sequence postcard stats
[**getEmailCommseqPostcardTracking()**](StorefrontApi.md#getEmailCommseqPostcardTracking) | **GET** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid}/tracking | Get email communication postcard tracking
[**getEmailCommseqRateLimiters()**](StorefrontApi.md#getEmailCommseqRateLimiters) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/rate_limiters | Get email commseq rate limiters
[**getEmailCommseqSmsStats()**](StorefrontApi.md#getEmailCommseqSmsStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/smsStats | Get email communication sequence sms stats
[**getEmailCommseqStatOverall()**](StorefrontApi.md#getEmailCommseqStatOverall) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stat | Get communication sequence stats overall
[**getEmailCommseqStepStats()**](StorefrontApi.md#getEmailCommseqStepStats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stepStats | Get email communication sequence step stats
[**getEmailCommseqStepWaiting()**](StorefrontApi.md#getEmailCommseqStepWaiting) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/waiting | Get email communication sequence customers waiting at each requested step
[**getEmailCommseqWebhookEditorValues()**](StorefrontApi.md#getEmailCommseqWebhookEditorValues) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/webhookEditorValues | Get email webhook editor values
[**getEmailCommseqs()**](StorefrontApi.md#getEmailCommseqs) | **GET** /storefront/{storefront_oid}/email/commseqs | Get email commseqs
[**getEmailCustomerEditorUrl()**](StorefrontApi.md#getEmailCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/customers/{email_customer_uuid}/editor_url | Get customers editor URL
[**getEmailCustomers()**](StorefrontApi.md#getEmailCustomers) | **GET** /storefront/{storefront_oid}/email/customers | Get email customers
[**getEmailDashboardActivity()**](StorefrontApi.md#getEmailDashboardActivity) | **GET** /storefront/{storefront_oid}/email/dashboard_activity | Get email dashboard activity
[**getEmailDashboardStats()**](StorefrontApi.md#getEmailDashboardStats) | **GET** /storefront/{storefront_oid}/email/dashboard_stats | Get dashboard stats
[**getEmailDispatchLogs()**](StorefrontApi.md#getEmailDispatchLogs) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/logs | Get email dispatch logs
[**getEmailEmail()**](StorefrontApi.md#getEmailEmail) | **GET** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Get email email
[**getEmailEmailClicks()**](StorefrontApi.md#getEmailEmailClicks) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/emails/{commseq_email_uuid}/clicks | Get email email clicks
[**getEmailEmailCustomerEditorUrl()**](StorefrontApi.md#getEmailEmailCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/orders/{order_id}/editor_url | Get email order customer editor url
[**getEmailEmailOrders()**](StorefrontApi.md#getEmailEmailOrders) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/emails/{commseq_email_uuid}/orders | Get email email orders
[**getEmailEmails()**](StorefrontApi.md#getEmailEmails) | **GET** /storefront/{storefront_oid}/email/emails | Get email emails
[**getEmailEmailsMultiple()**](StorefrontApi.md#getEmailEmailsMultiple) | **POST** /storefront/{storefront_oid}/email/emails/multiple | Get email emails multiple
[**getEmailFlow()**](StorefrontApi.md#getEmailFlow) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Get email flow
[**getEmailFlowFolder()**](StorefrontApi.md#getEmailFlowFolder) | **GET** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Get email flow folder
[**getEmailFlowFolders()**](StorefrontApi.md#getEmailFlowFolders) | **GET** /storefront/{storefront_oid}/email/flow_folders | Get email flow folders
[**getEmailFlowScreenshots()**](StorefrontApi.md#getEmailFlowScreenshots) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/screenshots | Get email flow screenshots
[**getEmailFlows()**](StorefrontApi.md#getEmailFlows) | **GET** /storefront/{storefront_oid}/email/flows | Get email flows
[**getEmailGlobalSettings()**](StorefrontApi.md#getEmailGlobalSettings) | **GET** /storefront/email/global_settings | Get email globalsettings
[**getEmailList()**](StorefrontApi.md#getEmailList) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Get email list
[**getEmailListCustomerEditorUrl()**](StorefrontApi.md#getEmailListCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers/{email_customer_uuid}/editor_url | Get email list customer editor url
[**getEmailListCustomers()**](StorefrontApi.md#getEmailListCustomers) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers | Get email list customers
[**getEmailListSegmentFolder()**](StorefrontApi.md#getEmailListSegmentFolder) | **GET** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Get email campaign folder
[**getEmailListSegmentFolders()**](StorefrontApi.md#getEmailListSegmentFolders) | **GET** /storefront/{storefront_oid}/email/list_segment_folders | Get email campaign folders
[**getEmailLists()**](StorefrontApi.md#getEmailLists) | **GET** /storefront/{storefront_oid}/email/lists | Get email lists
[**getEmailPerformance()**](StorefrontApi.md#getEmailPerformance) | **GET** /storefront/{storefront_oid}/email/performance | Get email performance
[**getEmailPlan()**](StorefrontApi.md#getEmailPlan) | **GET** /storefront/{storefront_oid}/email/plan | Get email plan
[**getEmailPostcard()**](StorefrontApi.md#getEmailPostcard) | **GET** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Get email postcard
[**getEmailPostcards()**](StorefrontApi.md#getEmailPostcards) | **GET** /storefront/{storefront_oid}/email/postcards | Get email postcards
[**getEmailPostcardsMultiple()**](StorefrontApi.md#getEmailPostcardsMultiple) | **POST** /storefront/{storefront_oid}/email/postcards/multiple | Get email postcards multiple
[**getEmailSegment()**](StorefrontApi.md#getEmailSegment) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Get email segment
[**getEmailSegmentCustomerEditorUrl()**](StorefrontApi.md#getEmailSegmentCustomerEditorUrl) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/customers/{email_customer_uuid}/editor_url | Get email segment customers editor URL
[**getEmailSegmentCustomers()**](StorefrontApi.md#getEmailSegmentCustomers) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/customers | Get email segment customers
[**getEmailSegments()**](StorefrontApi.md#getEmailSegments) | **GET** /storefront/{storefront_oid}/email/segments | Get email segments
[**getEmailSendingDomain()**](StorefrontApi.md#getEmailSendingDomain) | **GET** /storefront/email/sending_domain/{domain} | Get email sending domain
[**getEmailSendingDomainStatus()**](StorefrontApi.md#getEmailSendingDomainStatus) | **POST** /storefront/email/sending_domains/{domain}/status | Get email sending domain status
[**getEmailSendingDomains()**](StorefrontApi.md#getEmailSendingDomains) | **GET** /storefront/email/sending_domains | Get email sending domains
[**getEmailSettings()**](StorefrontApi.md#getEmailSettings) | **GET** /storefront/{storefront_oid}/email/settings | Get email settings
[**getEmailSmsOrders()**](StorefrontApi.md#getEmailSmsOrders) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/sms/orders | Get email sms orders
[**getEmailTemplate()**](StorefrontApi.md#getEmailTemplate) | **GET** /storefront/{storefront_oid}/email/templates/{email_template_oid} | Get email template
[**getEmailTemplates()**](StorefrontApi.md#getEmailTemplates) | **GET** /storefront/{storefront_oid}/email/templates | Get email templates
[**getEmailThirdPartyProviders()**](StorefrontApi.md#getEmailThirdPartyProviders) | **GET** /storefront/{storefront_oid}/email/third_party_providers | Get a list of third party email providers
[**getExperiments()**](StorefrontApi.md#getExperiments) | **GET** /storefront/{storefront_oid}/experiments | Get experiments
[**getFsDirectory()**](StorefrontApi.md#getFsDirectory) | **GET** /storefront/{id}/fs/dir | Get file manager directory
[**getHeatmap()**](StorefrontApi.md#getHeatmap) | **POST** /storefront/{storefront_oid}/screen_recordings/heatmap | Get screen recording heatmap
[**getHeatmapIndex()**](StorefrontApi.md#getHeatmapIndex) | **POST** /storefront/{storefront_oid}/screen_recordings/heatmap/index | Get screen recording heatmap index
[**getHistogramPropertyNames()**](StorefrontApi.md#getHistogramPropertyNames) | **GET** /storefront/{storefront_oid}/email/histogram/property_names | Get histogram property names
[**getHistogramPropertyValues()**](StorefrontApi.md#getHistogramPropertyValues) | **GET** /storefront/{storefront_oid}/email/histogram/property_values | Get histogram property values
[**getLibraryFilterValues()**](StorefrontApi.md#getLibraryFilterValues) | **GET** /storefront/code_library/filter_values | Get library values used to populate drop down boxes for filtering.
[**getLibraryItem()**](StorefrontApi.md#getLibraryItem) | **GET** /storefront/code_library/{library_item_oid} | Get library item.
[**getLibraryItemPublishedVersions()**](StorefrontApi.md#getLibraryItemPublishedVersions) | **GET** /storefront/code_library/{library_item_oid}/published_versions | Get all published versions for a library item.
[**getScreenRecording()**](StorefrontApi.md#getScreenRecording) | **GET** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid} | Get screen recording
[**getScreenRecordingPageViewData()**](StorefrontApi.md#getScreenRecordingPageViewData) | **GET** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/page_view_data/{screen_recording_page_view_uuid} | Get screen recording page view data
[**getScreenRecordingSegment()**](StorefrontApi.md#getScreenRecordingSegment) | **GET** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Get screen recording segment
[**getScreenRecordingSegments()**](StorefrontApi.md#getScreenRecordingSegments) | **GET** /storefront/{storefront_oid}/screen_recordings/segments | Get screen recording segments
[**getScreenRecordingSettings()**](StorefrontApi.md#getScreenRecordingSettings) | **GET** /storefront/{storefront_oid}/screen_recordings/settings | Get screen recording settings
[**getScreenRecordingTags()**](StorefrontApi.md#getScreenRecordingTags) | **POST** /storefront/{storefront_oid}/screen_recordings/tags | Get tags used by screen recording
[**getScreenRecordingsByQuery()**](StorefrontApi.md#getScreenRecordingsByQuery) | **POST** /storefront/{storefront_oid}/screen_recordings/query | Query screen recordings
[**getScreenRecordingsBySegment()**](StorefrontApi.md#getScreenRecordingsBySegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid}/query | Get screen recordings by segment
[**getStoreFrontPricingTiers()**](StorefrontApi.md#getStoreFrontPricingTiers) | **GET** /storefront/pricing_tiers | Retrieve pricing tiers
[**getStoreFronts()**](StorefrontApi.md#getStoreFronts) | **GET** /storefront | Get storefronts (internal use only for security reasons)
[**getThumbnailParameters()**](StorefrontApi.md#getThumbnailParameters) | **POST** /storefront/thumbnailParameters | Get thumbnail parameters
[**getTransactionEmail()**](StorefrontApi.md#getTransactionEmail) | **GET** /storefront/{storefront_oid}/transaction_email/list/{email_id} | Gets a transaction email object
[**getTransactionEmailList()**](StorefrontApi.md#getTransactionEmailList) | **GET** /storefront/{storefront_oid}/transaction_email/list | Gets a list of transaction email names
[**getTransactionEmailScreenshots()**](StorefrontApi.md#getTransactionEmailScreenshots) | **GET** /storefront/{storefront_oid}/transaction_email/list/{email_id}/screenshots | Get transactional email screenshots
[**getTwilioAccount()**](StorefrontApi.md#getTwilioAccount) | **GET** /storefront/twilio/accounts/{esp_twilio_uuid} | Get Twilio account
[**getTwilioAccounts()**](StorefrontApi.md#getTwilioAccounts) | **GET** /storefront/twilio/accounts | Get all Twilio accounts
[**getUploadFsFileUrl()**](StorefrontApi.md#getUploadFsFileUrl) | **GET** /storefront/{id}/fs/upload_url/{extension} | Retrieves a S3 url where a file may be uploaded. Once uploaded, use uploadFsFile to trigger the server into reading the S3 bucket and retrieving the file.
[**globalUnsubscribe()**](StorefrontApi.md#globalUnsubscribe) | **POST** /storefront/{storefront_oid}/email/globalUnsubscribe | Globally unsubscribe a customer
[**importEmailThirdPartyProviderList()**](StorefrontApi.md#importEmailThirdPartyProviderList) | **POST** /storefront/{storefront_oid}/email/third_party_providers/import | Import a third party provider list
[**insertEmailCampaign()**](StorefrontApi.md#insertEmailCampaign) | **POST** /storefront/{storefront_oid}/email/campaigns | Insert email campaign
[**insertEmailCampaignFolder()**](StorefrontApi.md#insertEmailCampaignFolder) | **POST** /storefront/{storefront_oid}/email/campaign_folders | Insert email campaign folder
[**insertEmailCommseq()**](StorefrontApi.md#insertEmailCommseq) | **POST** /storefront/{storefront_oid}/email/commseqs | Insert email commseq
[**insertEmailEmail()**](StorefrontApi.md#insertEmailEmail) | **POST** /storefront/{storefront_oid}/email/emails | Insert email email
[**insertEmailFlow()**](StorefrontApi.md#insertEmailFlow) | **POST** /storefront/{storefront_oid}/email/flows | Insert email flow
[**insertEmailFlowFolder()**](StorefrontApi.md#insertEmailFlowFolder) | **POST** /storefront/{storefront_oid}/email/flow_folders | Insert email flow folder
[**insertEmailList()**](StorefrontApi.md#insertEmailList) | **POST** /storefront/{storefront_oid}/email/lists | Insert email list
[**insertEmailListSegmentFolder()**](StorefrontApi.md#insertEmailListSegmentFolder) | **POST** /storefront/{storefront_oid}/email/list_segment_folders | Insert email campaign folder
[**insertEmailPostcard()**](StorefrontApi.md#insertEmailPostcard) | **POST** /storefront/{storefront_oid}/email/postcards | Insert email postcard
[**insertEmailSegment()**](StorefrontApi.md#insertEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments | Insert email segment
[**insertScreenRecordingSegment()**](StorefrontApi.md#insertScreenRecordingSegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments | Insert screen recording segment
[**insertUpdatePageContentAttribute()**](StorefrontApi.md#insertUpdatePageContentAttribute) | **POST** /storefront/{storefront_oid}/pages/{page_oid}/content/attributes | Upsert a page content attribute
[**prepareDownloadEmailSegment()**](StorefrontApi.md#prepareDownloadEmailSegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/downloadPrepare | Prepare download of email segment
[**publishLibraryItem()**](StorefrontApi.md#publishLibraryItem) | **POST** /storefront/code_library/{library_item_oid}/publish | Publish library item.
[**purchaseLibraryItem()**](StorefrontApi.md#purchaseLibraryItem) | **POST** /storefront/code_library/{library_item_oid}/purchase | Purchase public library item, which creates a copy of the item in your personal code library
[**releaseEmailCommseqStepWaiting()**](StorefrontApi.md#releaseEmailCommseqStepWaiting) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/waiting/{commseq_step_uuid} | Release email communication sequence customers waiting at the specified step
[**resetEmailCommseqRateLimiters()**](StorefrontApi.md#resetEmailCommseqRateLimiters) | **DELETE** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/rate_limiters | Reset email commseq rate limiters (only callable by UltraCart Support)
[**review()**](StorefrontApi.md#review) | **POST** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/review | Request a review of an email
[**search()**](StorefrontApi.md#search) | **GET** /storefront/search | Searches for all matching values
[**search2()**](StorefrontApi.md#search2) | **POST** /storefront/search | Searches for all matching values (using POST)
[**searchEmailListCustomers()**](StorefrontApi.md#searchEmailListCustomers) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/search | Search email list customers
[**searchEmailSegmentCustomers()**](StorefrontApi.md#searchEmailSegmentCustomers) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/search | Search email segment customers
[**searchLibraryItems()**](StorefrontApi.md#searchLibraryItems) | **POST** /storefront/code_library/search | Retrieve library items
[**searchPublishedItems()**](StorefrontApi.md#searchPublishedItems) | **POST** /storefront/code_library/search_published | Retrieve library items
[**searchReviewItems()**](StorefrontApi.md#searchReviewItems) | **POST** /storefront/code_library/search_review | Retrieve library items needing review or rejected
[**searchSharedItems()**](StorefrontApi.md#searchSharedItems) | **POST** /storefront/code_library/search_shared | Retrieve library items
[**sendEmailTest()**](StorefrontApi.md#sendEmailTest) | **POST** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/test | Send email test
[**sendPostcardTest()**](StorefrontApi.md#sendPostcardTest) | **POST** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid}/test | Send postcard test
[**sendSmsTest()**](StorefrontApi.md#sendSmsTest) | **POST** /storefront/{storefront_oid}/email/sms/{commseq_uuid}/{commseq_step_uuid}/test | Send SMS test
[**sendWebhookTest()**](StorefrontApi.md#sendWebhookTest) | **POST** /storefront/{storefront_oid}/email/webhooks/test | Send webhook test
[**sequenceTest()**](StorefrontApi.md#sequenceTest) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/test | Sequence test
[**startEmailCampaign()**](StorefrontApi.md#startEmailCampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/start | Start email campaign
[**subscribeToEmailList()**](StorefrontApi.md#subscribeToEmailList) | **POST** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/subscribe | Subscribe customers to email list
[**sunsetEmailSegment()**](StorefrontApi.md#sunsetEmailSegment) | **PUT** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/sunset | Sunset email segment
[**unfavoriteScreenRecording()**](StorefrontApi.md#unfavoriteScreenRecording) | **DELETE** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/favorite | Remove favorite flag on screen recording
[**updateEmailCampaign()**](StorefrontApi.md#updateEmailCampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Update email campaign
[**updateEmailCampaignFolder()**](StorefrontApi.md#updateEmailCampaignFolder) | **PUT** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Update email campaign folder
[**updateEmailCommseq()**](StorefrontApi.md#updateEmailCommseq) | **PUT** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Update email commseq
[**updateEmailCustomer()**](StorefrontApi.md#updateEmailCustomer) | **PUT** /storefront/{storefront_oid}/email/customers/{email_customer_uuid} | Update email customer
[**updateEmailEmail()**](StorefrontApi.md#updateEmailEmail) | **PUT** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Update email email
[**updateEmailFlow()**](StorefrontApi.md#updateEmailFlow) | **PUT** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Update email flow
[**updateEmailFlowFolder()**](StorefrontApi.md#updateEmailFlowFolder) | **PUT** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Update email flow folder
[**updateEmailGlobalSettings()**](StorefrontApi.md#updateEmailGlobalSettings) | **POST** /storefront/email/global_settings | Update email global settings
[**updateEmailList()**](StorefrontApi.md#updateEmailList) | **PUT** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Update email list
[**updateEmailListSegmentFolder()**](StorefrontApi.md#updateEmailListSegmentFolder) | **PUT** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Update email campaign folder
[**updateEmailPlan()**](StorefrontApi.md#updateEmailPlan) | **POST** /storefront/{storefront_oid}/email/plan | Update email plan
[**updateEmailPostcard()**](StorefrontApi.md#updateEmailPostcard) | **PUT** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Update email postcard
[**updateEmailSegment()**](StorefrontApi.md#updateEmailSegment) | **PUT** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Update email segment
[**updateEmailSendingDomain()**](StorefrontApi.md#updateEmailSendingDomain) | **PUT** /storefront/email/sending_domains/{domain} | Update email sending domain
[**updateEmailSettings()**](StorefrontApi.md#updateEmailSettings) | **POST** /storefront/{storefront_oid}/email/settings | Update email settings
[**updateExperiment()**](StorefrontApi.md#updateExperiment) | **PUT** /storefront/{storefront_oid}/experiments/{storefront_experiment_oid} | Update experiment
[**updateLibraryItem()**](StorefrontApi.md#updateLibraryItem) | **PUT** /storefront/code_library/{library_item_oid} | Update library item. Note that only certain fields may be updated via this method.
[**updateScreenRecordingMerchantNotes()**](StorefrontApi.md#updateScreenRecordingMerchantNotes) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/merchant_notes | Update merchant notes on a screen recording
[**updateScreenRecordingSegment()**](StorefrontApi.md#updateScreenRecordingSegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Update screen recording segment
[**updateScreenRecordingSettings()**](StorefrontApi.md#updateScreenRecordingSettings) | **POST** /storefront/{storefront_oid}/screen_recordings/settings | Update screen recording settings
[**updateScreenRecordingTags()**](StorefrontApi.md#updateScreenRecordingTags) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/tags | Update tags on a screen recording
[**updateTransactionEmail()**](StorefrontApi.md#updateTransactionEmail) | **PUT** /storefront/{storefront_oid}/transaction_email/list/{email_id} | Updates a transaction email object
[**updateTwilioAccount()**](StorefrontApi.md#updateTwilioAccount) | **PUT** /storefront/twilio/accounts/{esp_twilio_uuid} | Update Twilio account
[**uploadFsFile()**](StorefrontApi.md#uploadFsFile) | **POST** /storefront/{id}/fs/upload | This is the last step in uploading a file after 1) calling getUploadFsFileUrl and 2) uploading a file to the provided url, then finally 3) calling this method and providing the key to trigger the server into reading the S3 bucket and retrieving the file.
[**validateRuler()**](StorefrontApi.md#validateRuler) | **POST** /storefront/ruler/validate | Validate AWS Event Ruler


## `addToLibrary()`

```php
addToLibrary($add_library_request): \ultracart\v2\models\LibraryItemResponse
```

Add to library


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `applyToStoreFront()`

```php
applyToStoreFront($apply_library_request): \ultracart\v2\models\ApplyLibraryItemResponse
```

Apply library item to storefront.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveEmailList()`

```php
archiveEmailList($storefront_oid, $email_list_uuid): \ultracart\v2\models\EmailListArchiveResponse
```

Archive email list


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archiveEmailSegment()`

```php
archiveEmailSegment($storefront_oid, $email_segment_uuid): \ultracart\v2\models\EmailSegmentArchiveResponse
```

Archive email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `backPopulateEmailFlow()`

```php
backPopulateEmailFlow($storefront_oid, $email_flow_uuid, $back_populate_request): \ultracart\v2\models\EmailFlowBackPopulateResponse
```

Back populate email flow


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDownloadEmailSegment()`

```php
checkDownloadEmailSegment($storefront_oid, $email_segment_uuid, $email_segment_rebuild_uuid): \ultracart\v2\models\EmailSegmentDownloadPrepareResponse
```

Check download of email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneEmailCampaign()`

```php
cloneEmailCampaign($storefront_oid, $email_campaign_uuid, $target_storefront_oid): \ultracart\v2\models\EmailCampaignResponse
```

Clone email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneEmailFlow()`

```php
cloneEmailFlow($storefront_oid, $email_flow_uuid, $target_storefront_oid): \ultracart\v2\models\EmailFlowResponse
```

Clone email flow


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailSendingDomain()`

```php
createEmailSendingDomain($domain): \ultracart\v2\models\EmailSendingDomainResponse
```

Create email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailSendingDomain2()`

```php
createEmailSendingDomain2($email_domain): \ultracart\v2\models\EmailSendingDomainResponse
```

Create email sending domain for various providers


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email_domain** | [**\ultracart\v2\models\EmailDomain**](../Model/EmailDomain.md)| EmailDomain |

### Return type

[**\ultracart\v2\models\EmailSendingDomainResponse**](../Model/EmailSendingDomainResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFsDirectory()`

```php
createFsDirectory($id, $name, $parent_storefront_fs_directory_oid): \ultracart\v2\models\FileManagerPageResponse
```

Create file manager directory


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **name** | **string**|  | [optional]
 **parent_storefront_fs_directory_oid** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\FileManagerPageResponse**](../Model/FileManagerPageResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTwilioAccount()`

```php
createTwilioAccount($twilio): \ultracart\v2\models\TwilioResponse
```

Create Twilio account


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailCampaignFolder()`

```php
deleteEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid): \ultracart\v2\models\BaseResponse
```

Delete email campaignFolder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailCommseqStat()`

```php
deleteEmailCommseqStat($storefront_oid, $commseq_uuid)
```

Delete communication sequence stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailEmail()`

```php
deleteEmailEmail($storefront_oid, $commseq_email_uuid): \ultracart\v2\models\BaseResponse
```

Delete email email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailFlowFolder()`

```php
deleteEmailFlowFolder($storefront_oid, $email_flow_folder_uuid): \ultracart\v2\models\BaseResponse
```

Delete email flowFolder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailListCustomer()`

```php
deleteEmailListCustomer($storefront_oid, $email_list_uuid, $email_customer_uuid): \ultracart\v2\models\BaseResponse
```

Delete email list customer


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailListSegmentFolder()`

```php
deleteEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid): \ultracart\v2\models\BaseResponse
```

Delete email ListSegmentFolder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailPostcard()`

```php
deleteEmailPostcard($storefront_oid, $commseq_postcard_uuid): \ultracart\v2\models\BaseResponse
```

Delete email postcard


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailSendingDomain()`

```php
deleteEmailSendingDomain($domain): \ultracart\v2\models\BaseResponse
```

delete email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExperiment()`

```php
deleteExperiment($storefront_oid, $storefront_experiment_oid)
```

Delete experiment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFsFile()`

```php
deleteFsFile($id, $parent_storefront_fs_directory_oid, $storefront_fs_file_oid): \ultracart\v2\models\FileManagerPageResponse
```

Delete file manager directory


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **parent_storefront_fs_directory_oid** | **int**|  | [optional]
 **storefront_fs_file_oid** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\FileManagerPageResponse**](../Model/FileManagerPageResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteHeatmap()`

```php
deleteHeatmap($storefront_oid, $query)
```

Delete screen recording heatmap

Delete screen recording heatmap


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLibraryItem()`

```php
deleteLibraryItem($library_item_oid)
```

Delete library item


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLibraryItemPublishedVersions()`

```php
deleteLibraryItemPublishedVersions($library_item_oid)
```

Delete all published versions for a library item, including anything in review.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScreenRecordingSegment()`

```php
deleteScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid)
```

Delete screen recording segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTwilioAccount()`

```php
deleteTwilioAccount($esp_twilio_uuid): \ultracart\v2\models\BaseResponse
```

delete Twilio account


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `duplicateLibraryItem()`

```php
duplicateLibraryItem($library_item_oid): \ultracart\v2\models\LibraryItemResponse
```

Duplicate library item.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `favoriteScreenRecording()`

```php
favoriteScreenRecording($storefront_oid, $screen_recording_uuid)
```

Update favorite flag on screen recording

Update favorite flag on screen recording


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `geocodeAddress()`

```php
geocodeAddress($storefront_oid, $geocode_request): \ultracart\v2\models\GeocodeResponse
```

Obtain lat/long for an address


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCountries()`

```php
getCountries($storefront_oid): \ultracart\v2\models\CountriesResponse
```

Get countries

Obtain a list of all the countries


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEditorToken()`

```php
getEditorToken($storefront_oid): \ultracart\v2\models\EmailEditorTokenResponse
```

Gets editor token

Fetches a temporary authentication token for the editor


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailBaseTemplates()`

```php
getEmailBaseTemplates($storefront_oid): \ultracart\v2\models\EmailBaseTemplateListResponse
```

Get email communication base templates


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaign()`

```php
getEmailCampaign($storefront_oid, $email_campaign_uuid): \ultracart\v2\models\EmailCampaignResponse
```

Get email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignFolder()`

```php
getEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid): \ultracart\v2\models\EmailCampaignFolderResponse
```

Get email campaign folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignFolders()`

```php
getEmailCampaignFolders($storefront_oid): \ultracart\v2\models\EmailCampaignFoldersResponse
```

Get email campaign folders


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignScreenshots()`

```php
getEmailCampaignScreenshots($storefront_oid, $email_campaign_uuid): \ultracart\v2\models\ScreenshotsResponse
```

Get email campaign screenshots


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaigns()`

```php
getEmailCampaigns($storefront_oid): \ultracart\v2\models\EmailCampaignsResponse
```

Get email campaigns


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCampaignsWithStats()`

```php
getEmailCampaignsWithStats($storefront_oid, $stat_days): \ultracart\v2\models\EmailCampaignsResponse
```

Get email campaigns with stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseq()`

```php
getEmailCommseq($storefront_oid, $commseq_uuid): \ultracart\v2\models\EmailCommseqResponse
```

Get email commseq


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqEditorValues()`

```php
getEmailCommseqEditorValues($storefront_oid): \ultracart\v2\models\EmailEditorValuesResponse
```

Get email merchant specific editor values


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |

### Return type

[**\ultracart\v2\models\EmailEditorValuesResponse**](../Model/EmailEditorValuesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqEmailStats()`

```php
getEmailCommseqEmailStats($storefront_oid, $commseq_uuid, $stats_request): \ultracart\v2\models\EmailStatSummaryResponse
```

Get email communication sequence emails stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqPostcardStats()`

```php
getEmailCommseqPostcardStats($storefront_oid, $commseq_uuid, $stats_request): \ultracart\v2\models\EmailStatPostcardSummaryResponse
```

Get email communication sequence postcard stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqPostcardTracking()`

```php
getEmailCommseqPostcardTracking($storefront_oid, $commseq_postcard_uuid): \ultracart\v2\models\EmailPostcardTrackingResponse
```

Get email communication postcard tracking


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_postcard_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailPostcardTrackingResponse**](../Model/EmailPostcardTrackingResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqRateLimiters()`

```php
getEmailCommseqRateLimiters($storefront_oid, $commseq_uuid): \ultracart\v2\models\EmailRateLimitersResponse
```

Get email commseq rate limiters


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |

### Return type

[**\ultracart\v2\models\EmailRateLimitersResponse**](../Model/EmailRateLimitersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqSmsStats()`

```php
getEmailCommseqSmsStats($storefront_oid, $commseq_uuid, $stats_request): \ultracart\v2\models\EmailStatSmsSummaryResponse
```

Get email communication sequence sms stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **stats_request** | [**\ultracart\v2\models\EmailStatSmsSummaryRequest**](../Model/EmailStatSmsSummaryRequest.md)| StatsRequest |

### Return type

[**\ultracart\v2\models\EmailStatSmsSummaryResponse**](../Model/EmailStatSmsSummaryResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqStatOverall()`

```php
getEmailCommseqStatOverall($storefront_oid, $commseq_uuid): \ultracart\v2\models\EmailCommseqStatResponse
```

Get communication sequence stats overall


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqStepStats()`

```php
getEmailCommseqStepStats($storefront_oid, $commseq_uuid, $stats_request): \ultracart\v2\models\EmailStepStatResponse
```

Get email communication sequence step stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqStepWaiting()`

```php
getEmailCommseqStepWaiting($storefront_oid, $commseq_uuid, $waiting_request): \ultracart\v2\models\EmailStepWaitingResponse
```

Get email communication sequence customers waiting at each requested step


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqWebhookEditorValues()`

```php
getEmailCommseqWebhookEditorValues($storefront_oid, $commseq_uuid): \ultracart\v2\models\EmailWebhookEditorValuesResponse
```

Get email webhook editor values


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCommseqs()`

```php
getEmailCommseqs($storefront_oid): \ultracart\v2\models\EmailCommseqsResponse
```

Get email commseqs


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCustomerEditorUrl()`

```php
getEmailCustomerEditorUrl($storefront_oid, $email_customer_uuid): \ultracart\v2\models\EmailCustomerEditorUrlResponse
```

Get customers editor URL


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCustomers()`

```php
getEmailCustomers($storefront_oid, $page_number, $page_size, $search_email_prefix): \ultracart\v2\models\EmailCustomersResponse
```

Get email customers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailDashboardActivity()`

```php
getEmailDashboardActivity($storefront_oid, $last_records): \ultracart\v2\models\EmailDashboardActivityResponse
```

Get email dashboard activity


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailDashboardStats()`

```php
getEmailDashboardStats($storefront_oid, $days): \ultracart\v2\models\EmailDashboardStatsResponse
```

Get dashboard stats


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailDispatchLogs()`

```php
getEmailDispatchLogs($storefront_oid, $commseq_uuid, $commseq_step_uuid): \ultracart\v2\models\EmailCommseqStepLogsResponse
```

Get email dispatch logs


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEmail()`

```php
getEmailEmail($storefront_oid, $commseq_email_uuid): \ultracart\v2\models\EmailCommseqEmailResponse
```

Get email email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEmailClicks()`

```php
getEmailEmailClicks($storefront_oid, $commseq_uuid, $commseq_step_uuid, $commseq_email_uuid, $days): \ultracart\v2\models\EmailClicksResponse
```

Get email email clicks


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEmailCustomerEditorUrl()`

```php
getEmailEmailCustomerEditorUrl($storefront_oid, $commseq_email_uuid, $order_id): \ultracart\v2\models\EmailCustomerEditorUrlResponse
```

Get email order customer editor url


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEmailOrders()`

```php
getEmailEmailOrders($storefront_oid, $commseq_uuid, $commseq_step_uuid, $commseq_email_uuid, $days): \ultracart\v2\models\EmailOrdersResponse
```

Get email email orders


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEmails()`

```php
getEmailEmails($storefront_oid): \ultracart\v2\models\EmailCommseqEmailsResponse
```

Get email emails


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailEmailsMultiple()`

```php
getEmailEmailsMultiple($storefront_oid, $email_commseq_emails_request): \ultracart\v2\models\EmailCommseqEmailsResponse
```

Get email emails multiple


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailFlow()`

```php
getEmailFlow($storefront_oid, $email_flow_uuid): \ultracart\v2\models\EmailFlowResponse
```

Get email flow


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailFlowFolder()`

```php
getEmailFlowFolder($storefront_oid, $email_flow_folder_uuid): \ultracart\v2\models\EmailFlowFolderResponse
```

Get email flow folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailFlowFolders()`

```php
getEmailFlowFolders($storefront_oid): \ultracart\v2\models\EmailFlowFoldersResponse
```

Get email flow folders


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailFlowScreenshots()`

```php
getEmailFlowScreenshots($storefront_oid, $email_flow_uuid): \ultracart\v2\models\ScreenshotsResponse
```

Get email flow screenshots


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailFlows()`

```php
getEmailFlows($storefront_oid): \ultracart\v2\models\EmailFlowsResponse
```

Get email flows


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailGlobalSettings()`

```php
getEmailGlobalSettings(): \ultracart\v2\models\EmailGlobalSettingsResponse
```

Get email globalsettings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\EmailGlobalSettingsResponse**](../Model/EmailGlobalSettingsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailList()`

```php
getEmailList($storefront_oid, $email_list_uuid): \ultracart\v2\models\EmailListResponse
```

Get email list


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailListCustomerEditorUrl()`

```php
getEmailListCustomerEditorUrl($storefront_oid, $email_list_uuid, $email_customer_uuid): \ultracart\v2\models\EmailCustomerEditorUrlResponse
```

Get email list customer editor url


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailListCustomers()`

```php
getEmailListCustomers($storefront_oid, $email_list_uuid, $page_number, $page_size): \ultracart\v2\models\EmailListCustomersResponse
```

Get email list customers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailListSegmentFolder()`

```php
getEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid): \ultracart\v2\models\EmailListSegmentFolderResponse
```

Get email campaign folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailListSegmentFolders()`

```php
getEmailListSegmentFolders($storefront_oid): \ultracart\v2\models\EmailListSegmentFoldersResponse
```

Get email campaign folders


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailLists()`

```php
getEmailLists($storefront_oid): \ultracart\v2\models\EmailListsResponse
```

Get email lists


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPerformance()`

```php
getEmailPerformance($storefront_oid): \ultracart\v2\models\EmailPerformanceResponse
```

Get email performance


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPlan()`

```php
getEmailPlan($storefront_oid): \ultracart\v2\models\EmailPlanResponse
```

Get email plan


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPostcard()`

```php
getEmailPostcard($storefront_oid, $commseq_postcard_uuid): \ultracart\v2\models\EmailCommseqPostcardResponse
```

Get email postcard


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPostcards()`

```php
getEmailPostcards($storefront_oid): \ultracart\v2\models\EmailCommseqPostcardsResponse
```

Get email postcards


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailPostcardsMultiple()`

```php
getEmailPostcardsMultiple($storefront_oid, $email_commseq_postcards_request): \ultracart\v2\models\EmailCommseqPostcardsResponse
```

Get email postcards multiple


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSegment()`

```php
getEmailSegment($storefront_oid, $email_segment_uuid): \ultracart\v2\models\EmailSegmentResponse
```

Get email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSegmentCustomerEditorUrl()`

```php
getEmailSegmentCustomerEditorUrl($storefront_oid, $email_segment_uuid, $email_customer_uuid): \ultracart\v2\models\EmailCustomerEditorUrlResponse
```

Get email segment customers editor URL


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSegmentCustomers()`

```php
getEmailSegmentCustomers($storefront_oid, $email_segment_uuid, $page_number, $page_size): \ultracart\v2\models\EmailSegmentCustomersResponse
```

Get email segment customers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSegments()`

```php
getEmailSegments($storefront_oid): \ultracart\v2\models\EmailSegmentsResponse
```

Get email segments


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSendingDomain()`

```php
getEmailSendingDomain($domain): \ultracart\v2\models\EmailSendingDomainResponse
```

Get email sending domain


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSendingDomainStatus()`

```php
getEmailSendingDomainStatus($domain): \ultracart\v2\models\EmailSendingDomainResponse
```

Get email sending domain status


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSendingDomains()`

```php
getEmailSendingDomains(): \ultracart\v2\models\EmailSendingDomainsResponse
```

Get email sending domains


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\EmailSendingDomainsResponse**](../Model/EmailSendingDomainsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSettings()`

```php
getEmailSettings($storefront_oid): \ultracart\v2\models\EmailSettingsResponse
```

Get email settings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailSmsOrders()`

```php
getEmailSmsOrders($storefront_oid, $commseq_uuid, $commseq_step_uuid, $days): \ultracart\v2\models\EmailSmsOrdersResponse
```

Get email sms orders


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **commseq_step_uuid** | **string**|  |
 **days** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\EmailSmsOrdersResponse**](../Model/EmailSmsOrdersResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplate()`

```php
getEmailTemplate($storefront_oid, $email_template_oid): \ultracart\v2\models\EmailTemplate
```

Get email template


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailTemplates()`

```php
getEmailTemplates($storefront_oid, $trigger_type): \ultracart\v2\models\EmailTemplatesResponse
```

Get email templates


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailThirdPartyProviders()`

```php
getEmailThirdPartyProviders($storefront_oid): \ultracart\v2\models\EmailThirdPartyProvidersResponse
```

Get a list of third party email providers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExperiments()`

```php
getExperiments($storefront_oid): \ultracart\v2\models\ExperimentsResponse
```

Get experiments


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFsDirectory()`

```php
getFsDirectory($id, $path, $storefront_fs_directory_oid, $storefront_theme_oid): \ultracart\v2\models\FileManagerPageResponse
```

Get file manager directory


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **path** | **string**|  | [optional]
 **storefront_fs_directory_oid** | **int**|  | [optional]
 **storefront_theme_oid** | **int**|  | [optional]

### Return type

[**\ultracart\v2\models\FileManagerPageResponse**](../Model/FileManagerPageResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeatmap()`

```php
getHeatmap($storefront_oid, $query): \ultracart\v2\models\ScreenRecordingHeatmapResponse
```

Get screen recording heatmap

Get screen recording heatmap


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHeatmapIndex()`

```php
getHeatmapIndex($storefront_oid, $query, $_limit, $_offset, $_sort): \ultracart\v2\models\ScreenRecordingHeatmapIndexResponse
```

Get screen recording heatmap index

Get screen recording heatmap index


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistogramPropertyNames()`

```php
getHistogramPropertyNames($storefront_oid, $property_type): \ultracart\v2\models\EmailHistogramPropertyNamesResponse
```

Get histogram property names

Obtain a list of property names for a given property type


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getHistogramPropertyValues()`

```php
getHistogramPropertyValues($storefront_oid, $property_name, $property_type, $limit): \ultracart\v2\models\EmailHistogramPropertyValuesResponse
```

Get histogram property values

Obtain a list of property values for a given property name and type


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLibraryFilterValues()`

```php
getLibraryFilterValues(): \ultracart\v2\models\LibraryFilterValuesResponse
```

Get library values used to populate drop down boxes for filtering.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\LibraryFilterValuesResponse**](../Model/LibraryFilterValuesResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLibraryItem()`

```php
getLibraryItem($library_item_oid): \ultracart\v2\models\LibraryItemResponse
```

Get library item.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLibraryItemPublishedVersions()`

```php
getLibraryItemPublishedVersions($library_item_oid): \ultracart\v2\models\LibraryItemsResponse
```

Get all published versions for a library item.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecording()`

```php
getScreenRecording($storefront_oid, $screen_recording_uuid): \ultracart\v2\models\ScreenRecordingResponse
```

Get screen recording

Get screen recording


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingPageViewData()`

```php
getScreenRecordingPageViewData($storefront_oid, $screen_recording_uuid, $screen_recording_page_view_uuid): \ultracart\v2\models\ScreenRecordingPageViewDataResponse
```

Get screen recording page view data

Get screen recording page view data


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingSegment()`

```php
getScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid): \ultracart\v2\models\ScreenRecordingSegmentResponse
```

Get screen recording segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingSegments()`

```php
getScreenRecordingSegments($storefront_oid): \ultracart\v2\models\ScreenRecordingSegmentsResponse
```

Get screen recording segments


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingSettings()`

```php
getScreenRecordingSettings($storefront_oid): \ultracart\v2\models\ScreenRecordingSettingsResponse
```

Get screen recording settings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingTags()`

```php
getScreenRecordingTags($storefront_oid): \ultracart\v2\models\ScreenRecordingTagsResponse
```

Get tags used by screen recording

Get tags used by screen recording


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingsByQuery()`

```php
getScreenRecordingsByQuery($storefront_oid, $query, $_limit, $_offset, $_sort): \ultracart\v2\models\ScreenRecordingQueryResponse
```

Query screen recordings

Query screen recordings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScreenRecordingsBySegment()`

```php
getScreenRecordingsBySegment($storefront_oid, $screen_recording_segment_oid, $_limit, $_offset, $_sort): \ultracart\v2\models\ScreenRecordingQueryResponse
```

Get screen recordings by segment

Get screen recordings by segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoreFrontPricingTiers()`

```php
getStoreFrontPricingTiers($_expand): \ultracart\v2\models\PricingTiersResponse
```

Retrieve pricing tiers

Retrieves the pricing tiers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStoreFronts()`

```php
getStoreFronts(): \ultracart\v2\models\StoreFrontsResponse
```

Get storefronts (internal use only for security reasons)


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\StoreFrontsResponse**](../Model/StoreFrontsResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThumbnailParameters()`

```php
getThumbnailParameters($thumbnail_parameters): \ultracart\v2\models\ThumbnailParametersResponse
```

Get thumbnail parameters


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionEmail()`

```php
getTransactionEmail($storefront_oid, $email_id): \ultracart\v2\models\TransactionEmailResponse
```

Gets a transaction email object

Fetch a transactional email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionEmailList()`

```php
getTransactionEmailList($storefront_oid): \ultracart\v2\models\TransactionEmailListResponse
```

Gets a list of transaction email names

Obtain a list of all transactional emails and return back just their names


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransactionEmailScreenshots()`

```php
getTransactionEmailScreenshots($storefront_oid, $email_id): \ultracart\v2\models\ScreenshotsResponse
```

Get transactional email screenshots


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTwilioAccount()`

```php
getTwilioAccount($esp_twilio_uuid): \ultracart\v2\models\TwilioResponse
```

Get Twilio account


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTwilioAccounts()`

```php
getTwilioAccounts(): \ultracart\v2\models\TwiliosResponse
```

Get all Twilio accounts


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

This endpoint does not need any parameter.

### Return type

[**\ultracart\v2\models\TwiliosResponse**](../Model/TwiliosResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUploadFsFileUrl()`

```php
getUploadFsFileUrl($id, $extension): \ultracart\v2\models\FileManagerUploadUrlResponse
```

Retrieves a S3 url where a file may be uploaded. Once uploaded, use uploadFsFile to trigger the server into reading the S3 bucket and retrieving the file.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **extension** | **string**|  |

### Return type

[**\ultracart\v2\models\FileManagerUploadUrlResponse**](../Model/FileManagerUploadUrlResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `globalUnsubscribe()`

```php
globalUnsubscribe($storefront_oid, $unsubscribe): \ultracart\v2\models\EmailGlobalUnsubscribeResponse
```

Globally unsubscribe a customer


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importEmailThirdPartyProviderList()`

```php
importEmailThirdPartyProviderList($storefront_oid, $import_request)
```

Import a third party provider list


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailCampaign()`

```php
insertEmailCampaign($storefront_oid, $email_campaign): \ultracart\v2\models\EmailCampaignResponse
```

Insert email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailCampaignFolder()`

```php
insertEmailCampaignFolder($storefront_oid, $email_campaign_folder): \ultracart\v2\models\EmailCampaignFolderResponse
```

Insert email campaign folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailCommseq()`

```php
insertEmailCommseq($storefront_oid, $email_commseq): \ultracart\v2\models\EmailCommseqResponse
```

Insert email commseq


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailEmail()`

```php
insertEmailEmail($storefront_oid, $email_commseq_email): \ultracart\v2\models\EmailCommseqEmailResponse
```

Insert email email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailFlow()`

```php
insertEmailFlow($storefront_oid, $email_flow): \ultracart\v2\models\EmailFlowResponse
```

Insert email flow


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailFlowFolder()`

```php
insertEmailFlowFolder($storefront_oid, $email_flow_folder): \ultracart\v2\models\EmailFlowFolderResponse
```

Insert email flow folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailList()`

```php
insertEmailList($storefront_oid, $email_list): \ultracart\v2\models\EmailListResponse
```

Insert email list


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailListSegmentFolder()`

```php
insertEmailListSegmentFolder($storefront_oid, $email_list_segment_folder): \ultracart\v2\models\EmailListSegmentFolderResponse
```

Insert email campaign folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailPostcard()`

```php
insertEmailPostcard($storefront_oid, $email_commseq_postcard): \ultracart\v2\models\EmailCommseqPostcardResponse
```

Insert email postcard


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertEmailSegment()`

```php
insertEmailSegment($storefront_oid, $email_segment): \ultracart\v2\models\EmailSegmentResponse
```

Insert email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertScreenRecordingSegment()`

```php
insertScreenRecordingSegment($storefront_oid, $segment): \ultracart\v2\models\ScreenRecordingSegmentResponse
```

Insert screen recording segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `insertUpdatePageContentAttribute()`

```php
insertUpdatePageContentAttribute($storefront_oid, $page_oid, $page_attribute)
```

Upsert a page content attribute

Update a page content attribute, creating it new if it does not yet exist.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **page_oid** | **int**| The page oid to modify. |
 **page_attribute** | [**\ultracart\v2\models\StoreFrontPageContentAttribute**](../Model/StoreFrontPageContentAttribute.md)| Page content attribute to upsert |

### Return type

void (empty response body)

### Authorization

[ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json; charset=UTF-8`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prepareDownloadEmailSegment()`

```php
prepareDownloadEmailSegment($storefront_oid, $email_segment_uuid): \ultracart\v2\models\EmailSegmentDownloadPrepareResponse
```

Prepare download of email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publishLibraryItem()`

```php
publishLibraryItem($library_item_oid, $publish_library_request): \ultracart\v2\models\LibraryItemResponse
```

Publish library item.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseLibraryItem()`

```php
purchaseLibraryItem($library_item_oid, $storefront_oid): \ultracart\v2\models\LibraryItemResponse
```

Purchase public library item, which creates a copy of the item in your personal code library


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `releaseEmailCommseqStepWaiting()`

```php
releaseEmailCommseqStepWaiting($storefront_oid, $commseq_uuid, $commseq_step_uuid)
```

Release email communication sequence customers waiting at the specified step


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetEmailCommseqRateLimiters()`

```php
resetEmailCommseqRateLimiters($storefront_oid, $commseq_uuid)
```

Reset email commseq rate limiters (only callable by UltraCart Support)


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `review()`

```php
review($storefront_oid, $commseq_email_uuid, $email_commseq_email_review_request): \ultracart\v2\models\EmailCommseqEmailSendTestResponse
```

Request a review of an email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($category, $matches, $storefront_oid, $max_hits, $subcategory): \ultracart\v2\models\LookupResponse
```

Searches for all matching values


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search2()`

```php
search2($lookup_request): \ultracart\v2\models\LookupResponse
```

Searches for all matching values (using POST)


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEmailListCustomers()`

```php
searchEmailListCustomers($storefront_oid, $email_list_uuid, $starts_with): \ultracart\v2\models\EmailListCustomersResponse
```

Search email list customers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEmailSegmentCustomers()`

```php
searchEmailSegmentCustomers($storefront_oid, $email_segment_uuid, $starts_with): \ultracart\v2\models\EmailSegmentCustomersResponse
```

Search email segment customers


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchLibraryItems()`

```php
searchLibraryItems($item_query, $_limit, $_offset, $_sort): \ultracart\v2\models\LibraryItemsResponse
```

Retrieve library items

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPublishedItems()`

```php
searchPublishedItems($item_query, $_limit, $_offset, $_sort): \ultracart\v2\models\LibraryItemsResponse
```

Retrieve library items

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchReviewItems()`

```php
searchReviewItems($item_query, $_limit, $_offset, $_sort): \ultracart\v2\models\LibraryItemsResponse
```

Retrieve library items needing review or rejected

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchSharedItems()`

```php
searchSharedItems($item_query, $_limit, $_offset, $_sort): \ultracart\v2\models\LibraryItemsResponse
```

Retrieve library items

Retrieves a library items based on a query object.  If no parameters are specified, the API call will default to the merchant id only.  You will need to make multiple API calls in order to retrieve the entire result set since this API performs result set pagination.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendEmailTest()`

```php
sendEmailTest($storefront_oid, $commseq_email_uuid, $email_commseq_email_test_request): \ultracart\v2\models\EmailCommseqEmailSendTestResponse
```

Send email test


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPostcardTest()`

```php
sendPostcardTest($storefront_oid, $commseq_postcard_uuid, $email_commseq_postcard_test_request): \ultracart\v2\models\EmailCommseqPostcardSendTestResponse
```

Send postcard test


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSmsTest()`

```php
sendSmsTest($storefront_oid, $commseq_uuid, $commseq_step_uuid, $email_commseq_sms_test_request): \ultracart\v2\models\EmailCommseqSmsSendTestResponse
```

Send SMS test


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **commseq_step_uuid** | **string**|  |
 **email_commseq_sms_test_request** | [**\ultracart\v2\models\EmailCommseqSmsSendTestRequest**](../Model/EmailCommseqSmsSendTestRequest.md)| Email commseq sms test request |

### Return type

[**\ultracart\v2\models\EmailCommseqSmsSendTestResponse**](../Model/EmailCommseqSmsSendTestResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendWebhookTest()`

```php
sendWebhookTest($storefront_oid, $email_commseq_webhook_test_request): \ultracart\v2\models\EmailCommseqWebhookSendTestResponse
```

Send webhook test


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sequenceTest()`

```php
sequenceTest($storefront_oid, $commseq_uuid, $email_commseq_sequence_test_request): \ultracart\v2\models\EmailCommseqSequenceTestResponse
```

Sequence test


### Example


(No example for this operation).


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **commseq_uuid** | **string**|  |
 **email_commseq_sequence_test_request** | [**\ultracart\v2\models\EmailCommseqSequenceTestRequest**](../Model/EmailCommseqSequenceTestRequest.md)| Commseq test request |

### Return type

[**\ultracart\v2\models\EmailCommseqSequenceTestResponse**](../Model/EmailCommseqSequenceTestResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startEmailCampaign()`

```php
startEmailCampaign($storefront_oid, $email_campaign_uuid): \ultracart\v2\models\BaseResponse
```

Start email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeToEmailList()`

```php
subscribeToEmailList($storefront_oid, $email_list_uuid, $customers): \ultracart\v2\models\EmailListSubscribeResponse
```

Subscribe customers to email list


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sunsetEmailSegment()`

```php
sunsetEmailSegment($storefront_oid, $email_segment_uuid)
```

Sunset email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **storefront_oid** | **int**|  |
 **email_segment_uuid** | **string**|  |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unfavoriteScreenRecording()`

```php
unfavoriteScreenRecording($storefront_oid, $screen_recording_uuid)
```

Remove favorite flag on screen recording

Remove favorite flag on screen recording


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailCampaign()`

```php
updateEmailCampaign($storefront_oid, $email_campaign_uuid, $email_campaign): \ultracart\v2\models\EmailCampaignResponse
```

Update email campaign


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailCampaignFolder()`

```php
updateEmailCampaignFolder($storefront_oid, $email_campaign_folder_uuid, $email_campaign_folder): \ultracart\v2\models\EmailCampaignFolderResponse
```

Update email campaign folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailCommseq()`

```php
updateEmailCommseq($storefront_oid, $commseq_uuid, $email_commseq): \ultracart\v2\models\EmailCommseqResponse
```

Update email commseq


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailCustomer()`

```php
updateEmailCustomer($storefront_oid, $email_customer_uuid, $email_customer)
```

Update email customer


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailEmail()`

```php
updateEmailEmail($storefront_oid, $commseq_email_uuid, $email_commseq_email): \ultracart\v2\models\EmailCommseqEmailResponse
```

Update email email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailFlow()`

```php
updateEmailFlow($storefront_oid, $email_flow_uuid, $email_flow): \ultracart\v2\models\EmailFlowResponse
```

Update email flow


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailFlowFolder()`

```php
updateEmailFlowFolder($storefront_oid, $email_flow_folder_uuid, $email_flow_folder): \ultracart\v2\models\EmailFlowFolderResponse
```

Update email flow folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailGlobalSettings()`

```php
updateEmailGlobalSettings($global_settings): \ultracart\v2\models\EmailGlobalSettingsResponse
```

Update email global settings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailList()`

```php
updateEmailList($storefront_oid, $email_list_uuid, $email_list): \ultracart\v2\models\EmailListResponse
```

Update email list


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailListSegmentFolder()`

```php
updateEmailListSegmentFolder($storefront_oid, $email_list_segment_folder_uuid, $email_list_segment_folder): \ultracart\v2\models\EmailListSegmentFolderResponse
```

Update email campaign folder


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailPlan()`

```php
updateEmailPlan($storefront_oid, $settings): \ultracart\v2\models\EmailPlanResponse
```

Update email plan


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailPostcard()`

```php
updateEmailPostcard($storefront_oid, $commseq_postcard_uuid, $email_commseq_postcard): \ultracart\v2\models\EmailCommseqPostcardResponse
```

Update email postcard


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailSegment()`

```php
updateEmailSegment($storefront_oid, $email_segment_uuid, $email_segment): \ultracart\v2\models\EmailSegmentResponse
```

Update email segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailSendingDomain()`

```php
updateEmailSendingDomain($domain, $email_domain): \ultracart\v2\models\EmailSendingDomainResponse
```

Update email sending domain


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmailSettings()`

```php
updateEmailSettings($storefront_oid, $settings): \ultracart\v2\models\EmailSettingsResponse
```

Update email settings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExperiment()`

```php
updateExperiment($storefront_oid, $storefront_experiment_oid, $experiment): \ultracart\v2\models\ExperimentResponse
```

Update experiment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLibraryItem()`

```php
updateLibraryItem($library_item_oid, $library_item): \ultracart\v2\models\LibraryItemResponse
```

Update library item. Note that only certain fields may be updated via this method.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScreenRecordingMerchantNotes()`

```php
updateScreenRecordingMerchantNotes($storefront_oid, $screen_recording_uuid, $merchant_notes_request)
```

Update merchant notes on a screen recording

Update merchant notes on a screen recording


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScreenRecordingSegment()`

```php
updateScreenRecordingSegment($storefront_oid, $screen_recording_segment_oid, $segment): \ultracart\v2\models\ScreenRecordingSegmentResponse
```

Update screen recording segment


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScreenRecordingSettings()`

```php
updateScreenRecordingSettings($storefront_oid, $settings): \ultracart\v2\models\ScreenRecordingSettingsResponse
```

Update screen recording settings


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScreenRecordingTags()`

```php
updateScreenRecordingTags($storefront_oid, $screen_recording_uuid, $tags)
```

Update tags on a screen recording

Update tags on a screen recording


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTransactionEmail()`

```php
updateTransactionEmail($storefront_oid, $email_id, $transaction_email): \ultracart\v2\models\TransactionEmailResponse
```

Updates a transaction email object

Updates a transactional email


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTwilioAccount()`

```php
updateTwilioAccount($esp_twilio_uuid, $twilio): \ultracart\v2\models\TwilioResponse
```

Update Twilio account


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
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

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadFsFile()`

```php
uploadFsFile($id, $upload_request)
```

This is the last step in uploading a file after 1) calling getUploadFsFileUrl and 2) uploading a file to the provided url, then finally 3) calling this method and providing the key to trigger the server into reading the S3 bucket and retrieving the file.


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **upload_request** | [**\ultracart\v2\models\FileManagerUploadRequest**](../Model/FileManagerUploadRequest.md)| UploadRequest |

### Return type

void (empty response body)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateRuler()`

```php
validateRuler($ruler_validate_request): \ultracart\v2\models\RulerValidationResponse
```

Validate AWS Event Ruler


### Example

```php
<?php // Please see the README.md in this directory for an explanation about StoreFrontApi samples.
```


### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ruler_validate_request** | [**\ultracart\v2\models\RulerValidationRequest**](../Model/RulerValidationRequest.md)| Ruler Validate Request |

### Return type

[**\ultracart\v2\models\RulerValidationResponse**](../Model/RulerValidationResponse.md)

### Authorization

[ultraCartBrowserApiKey](../../README.md#ultraCartBrowserApiKey), [ultraCartOauth](../../README.md#ultraCartOauth), [ultraCartSimpleApiKey](../../README.md#ultraCartSimpleApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
