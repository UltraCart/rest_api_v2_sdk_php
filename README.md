# UltraCart PHP SDK

UltraCart REST API Version 2

For more information, please visit [http://www.ultracart.com/api/](http://www.ultracart.com/api/).

Every API method has a sample for every language SDK.  See https://github.com/UltraCart/sdk_samples

## Installation & Usage

### Requirements

PHP 7.4 and later.  Works with PHP 8.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "ultracart/rest_api_v2_sdk_php": "4.1.19"
  }
}
```

Then run `composer install`

### Manual Installation
Download the files from [Packagist](https://packagist.org/packages/ultracart/rest_api_v2_sdk_php) and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started
See https://github.com/UltraCart/sdk_samples
This is just one sample.

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php

ini_set('display_errors', 1);

/*
 * OrderApi.getOrder() retrieves a single order for a given order_id.
 */

use ultracart\v2\api\OrderApi;

require_once '../vendor/autoload.php';
require_once '../constants.php';


$order_api = OrderApi::usingApiKey(Constants::API_KEY);

// The expansion variable instructs UltraCart how much information to return.  The order object is large and
// while it's easily manageable for a single order, when querying thousands of orders, is useful to reduce
// payload size.
// see www.ultracart.com/api/ for all the expansion fields available (this list below may become stale)
/*
Possible Order Expansions:
affiliate           affiliate.ledger                    auto_order
billing             channel_partner                     checkout
coupon              customer_profile                    digital_order
edi                 fraud_score                         gift
gift_certificate    internal                            item
linked_shipment     marketing                           payment
payment.transaction quote                               salesforce
shipping            shipping.tracking_number_details    summary
taxes
*/
$expansion = "item,summary,billing,shipping,shipping.tracking_number_details";

$order_id = 'DEMO-0009104390';
$api_response = $order_api->getOrder($order_id, $expansion);

if ($api_response->getError() != null) {
    error_log($api_response->getError()->getDeveloperMessage());
    error_log($api_response->getError()->getUserMessage());
    exit();
}

$order = $api_response->getOrder();

echo '<html lang="en"><body><pre>';
var_dump($order);
echo '</pre></body></html>';
```

## API Endpoints

All URIs are relative to *https://secure.ultracart.com/rest/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AffiliateApi* | [**getClicksByQuery**](docs/Api/AffiliateApi.md#getclicksbyquery) | **POST** /affiliate/clicks/query | Retrieve clicks
*AffiliateApi* | [**getLedgersByQuery**](docs/Api/AffiliateApi.md#getledgersbyquery) | **POST** /affiliate/ledgers/query | Retrieve ledger entries
*AutoOrderApi* | [**consolidateAutoOrders**](docs/Api/AutoOrderApi.md#consolidateautoorders) | **PUT** /auto_order/auto_orders/{auto_order_oid}/consolidate | Consolidates multiple auto orders
*AutoOrderApi* | [**establishAutoOrderByReferenceOrderId**](docs/Api/AutoOrderApi.md#establishautoorderbyreferenceorderid) | **POST** /auto_order/auto_orders/reference_order_id/{reference_order_id} | Establish an auto order by referencing a regular order id
*AutoOrderApi* | [**getAutoOrder**](docs/Api/AutoOrderApi.md#getautoorder) | **GET** /auto_order/auto_orders/{auto_order_oid} | Retrieve an auto order by oid
*AutoOrderApi* | [**getAutoOrderByCode**](docs/Api/AutoOrderApi.md#getautoorderbycode) | **GET** /auto_order/auto_orders/code/{auto_order_code} | Retrieve an auto order by code
*AutoOrderApi* | [**getAutoOrderByReferenceOrderId**](docs/Api/AutoOrderApi.md#getautoorderbyreferenceorderid) | **GET** /auto_order/auto_orders/reference_order_id/{reference_order_id} | Retrieve an auto order by order id
*AutoOrderApi* | [**getAutoOrders**](docs/Api/AutoOrderApi.md#getautoorders) | **GET** /auto_order/auto_orders | Retrieve auto orders
*AutoOrderApi* | [**getAutoOrdersBatch**](docs/Api/AutoOrderApi.md#getautoordersbatch) | **POST** /auto_order/auto_orders/batch | Retrieve auto order batch
*AutoOrderApi* | [**getAutoOrdersByQuery**](docs/Api/AutoOrderApi.md#getautoordersbyquery) | **POST** /auto_order/auto_orders/query | Retrieve auto orders by query
*AutoOrderApi* | [**pauseAutoOrder**](docs/Api/AutoOrderApi.md#pauseautoorder) | **PUT** /auto_order/auto_orders/{auto_order_oid}/pause | Pause auto order
*AutoOrderApi* | [**updateAutoOrder**](docs/Api/AutoOrderApi.md#updateautoorder) | **PUT** /auto_order/auto_orders/{auto_order_oid} | Update an auto order
*AutoOrderApi* | [**updateAutoOrdersBatch**](docs/Api/AutoOrderApi.md#updateautoordersbatch) | **PUT** /auto_order/auto_orders/batch | Update multiple auto orders
*ChannelPartnerApi* | [**cancelOrderByChannelPartnerOrderId**](docs/Api/ChannelPartnerApi.md#cancelorderbychannelpartnerorderid) | **DELETE** /channel_partner/cancel/by_channel_partner_order_id/{order_id} | Cancel channel partner order by channel partner order id
*ChannelPartnerApi* | [**cancelOrderByUltraCartOrderId**](docs/Api/ChannelPartnerApi.md#cancelorderbyultracartorderid) | **DELETE** /channel_partner/cancel/by_ultracart_order_id/{order_id} | Cancel channel partner order by UltraCart order id
*ChannelPartnerApi* | [**deleteChannelPartnerShipToPreference**](docs/Api/ChannelPartnerApi.md#deletechannelpartnershiptopreference) | **DELETE** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Delete a ship to preference record for the channel partner.
*ChannelPartnerApi* | [**estimateShippingForChannelPartnerOrder**](docs/Api/ChannelPartnerApi.md#estimateshippingforchannelpartnerorder) | **POST** /channel_partner/estimate_shipping | Estimate shipping for channel partner order
*ChannelPartnerApi* | [**estimateTaxForChannelPartnerOrder**](docs/Api/ChannelPartnerApi.md#estimatetaxforchannelpartnerorder) | **POST** /channel_partner/estimate_tax | Estimate tax for channel partner order
*ChannelPartnerApi* | [**getChannelPartnerOrder**](docs/Api/ChannelPartnerApi.md#getchannelpartnerorder) | **GET** /channel_partner/orders/{order_id} | Retrieve a channel partner order
*ChannelPartnerApi* | [**getChannelPartnerOrderByChannelPartnerOrderId**](docs/Api/ChannelPartnerApi.md#getchannelpartnerorderbychannelpartnerorderid) | **GET** /channel_partner/orders/by_channel_partner_order_id/{order_id} | Retrieve a channel partner order by the channel partner order id
*ChannelPartnerApi* | [**getChannelPartnerReasonCodes**](docs/Api/ChannelPartnerApi.md#getchannelpartnerreasoncodes) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/reason_codes | Retrieve reject and refund reason codes.
*ChannelPartnerApi* | [**getChannelPartnerShipToPreference**](docs/Api/ChannelPartnerApi.md#getchannelpartnershiptopreference) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Retrieve the ship to preference associated with the channel partner and the specific id.
*ChannelPartnerApi* | [**getChannelPartnerShipToPreferences**](docs/Api/ChannelPartnerApi.md#getchannelpartnershiptopreferences) | **GET** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences | Retrieve the ship to preferences associated with the channel partner.
*ChannelPartnerApi* | [**getChannelPartners**](docs/Api/ChannelPartnerApi.md#getchannelpartners) | **GET** /channel_partner/channel_partners | Retrieve the channel partners configured on the account.
*ChannelPartnerApi* | [**importChannelPartnerOrder**](docs/Api/ChannelPartnerApi.md#importchannelpartnerorder) | **POST** /channel_partner/import | Insert channel partner order
*ChannelPartnerApi* | [**insertChannelPartnerShipToPreference**](docs/Api/ChannelPartnerApi.md#insertchannelpartnershiptopreference) | **POST** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences | Insert a ship to preference record for the channel partner.
*ChannelPartnerApi* | [**refundChannelPartnerOrder**](docs/Api/ChannelPartnerApi.md#refundchannelpartnerorder) | **PUT** /channel_partner/orders/{order_id}/refund | Refund a channel partner order
*ChannelPartnerApi* | [**updateChannelPartnerShipToPreference**](docs/Api/ChannelPartnerApi.md#updatechannelpartnershiptopreference) | **PUT** /channel_partner/channel_partners/{channel_partner_oid}/ship_to_preferences/{channel_partner_ship_to_preference_oid} | Update a ship to preference record for the channel partner.
*ChargebackApi* | [**deleteChargeback**](docs/Api/ChargebackApi.md#deletechargeback) | **DELETE** /chargeback/chargebacks/{chargeback_dispute_oid} | Delete a chargeback
*ChargebackApi* | [**getChargebackDispute**](docs/Api/ChargebackApi.md#getchargebackdispute) | **GET** /chargeback/chargebacks/{chargeback_dispute_oid} | Retrieve a chargeback
*ChargebackApi* | [**getChargebackDisputes**](docs/Api/ChargebackApi.md#getchargebackdisputes) | **GET** /chargeback/chargebacks | Retrieve chargebacks
*ChargebackApi* | [**insertChargeback**](docs/Api/ChargebackApi.md#insertchargeback) | **POST** /chargeback/chargebacks | Insert a chargeback
*ChargebackApi* | [**updateChargeback**](docs/Api/ChargebackApi.md#updatechargeback) | **PUT** /chargeback/chargebacks/{chargeback_dispute_oid} | Update a chargeback
*CheckoutApi* | [**cityState**](docs/Api/CheckoutApi.md#citystate) | **POST** /checkout/city_state | City/State for Zip
*CheckoutApi* | [**finalizeOrder**](docs/Api/CheckoutApi.md#finalizeorder) | **POST** /checkout/cart/finalizeOrder | Finalize Order
*CheckoutApi* | [**getAffirmCheckout**](docs/Api/CheckoutApi.md#getaffirmcheckout) | **GET** /checkout/cart/{cart_id}/affirmCheckout | Get affirm checkout (by cart id)
*CheckoutApi* | [**getAllowedCountries**](docs/Api/CheckoutApi.md#getallowedcountries) | **POST** /checkout/allowedCountries | Allowed countries
*CheckoutApi* | [**getCart**](docs/Api/CheckoutApi.md#getcart) | **GET** /checkout/cart | Get cart
*CheckoutApi* | [**getCartByCartId**](docs/Api/CheckoutApi.md#getcartbycartid) | **GET** /checkout/cart/{cart_id} | Get cart (by cart id)
*CheckoutApi* | [**getCartByReturnCode**](docs/Api/CheckoutApi.md#getcartbyreturncode) | **GET** /checkout/return/{return_code} | Get cart (by return code)
*CheckoutApi* | [**getCartByReturnToken**](docs/Api/CheckoutApi.md#getcartbyreturntoken) | **GET** /checkout/return_token | Get cart (by return token)
*CheckoutApi* | [**getStateProvincesForCountry**](docs/Api/CheckoutApi.md#getstateprovincesforcountry) | **POST** /checkout/stateProvincesForCountry/{country_code} | Get state/province list for a country code
*CheckoutApi* | [**handoffCart**](docs/Api/CheckoutApi.md#handoffcart) | **POST** /checkout/cart/handoff | Handoff cart
*CheckoutApi* | [**login**](docs/Api/CheckoutApi.md#login) | **POST** /checkout/cart/profile/login | Profile login
*CheckoutApi* | [**logout**](docs/Api/CheckoutApi.md#logout) | **POST** /checkout/cart/profile/logout | Profile logout
*CheckoutApi* | [**register**](docs/Api/CheckoutApi.md#register) | **POST** /checkout/cart/profile/register | Profile registration
*CheckoutApi* | [**registerAffiliateClick**](docs/Api/CheckoutApi.md#registeraffiliateclick) | **POST** /checkout/affiliateClick/register | Register affiliate click
*CheckoutApi* | [**relatedItemsForCart**](docs/Api/CheckoutApi.md#relateditemsforcart) | **POST** /checkout/related_items | Related items
*CheckoutApi* | [**relatedItemsForItem**](docs/Api/CheckoutApi.md#relateditemsforitem) | **POST** /checkout/relatedItems/{item_id} | Related items (specific item)
*CheckoutApi* | [**setupBrowserKey**](docs/Api/CheckoutApi.md#setupbrowserkey) | **PUT** /checkout/browser_key | Setup Browser Application
*CheckoutApi* | [**updateCart**](docs/Api/CheckoutApi.md#updatecart) | **PUT** /checkout/cart | Update cart
*CheckoutApi* | [**validateCart**](docs/Api/CheckoutApi.md#validatecart) | **POST** /checkout/cart/validate | Validate
*ConversationApi* | [**deleteConversationCannedMessage**](docs/Api/ConversationApi.md#deleteconversationcannedmessage) | **DELETE** /conversation/canned_messages/{conversation_canned_message_oid} | Delete a conversation canned message
*ConversationApi* | [**deleteDepartment**](docs/Api/ConversationApi.md#deletedepartment) | **DELETE** /conversation/departments/{conversation_department_oid} | Delete a conversation department
*ConversationApi* | [**deleteEngagement**](docs/Api/ConversationApi.md#deleteengagement) | **DELETE** /conversation/engagements/{conversation_engagement_oid} | Delete a conversation engagement
*ConversationApi* | [**deletePbxAgentVoicemail**](docs/Api/ConversationApi.md#deletepbxagentvoicemail) | **DELETE** /conversation/pbx/agent/voicemails/{recording_sid} | Delete Agent Voicemail
*ConversationApi* | [**deletePbxAudio**](docs/Api/ConversationApi.md#deletepbxaudio) | **DELETE** /conversation/pbx/audio/{conversationPbxAudioUuid} | Delete pbx audio
*ConversationApi* | [**deletePbxMenu**](docs/Api/ConversationApi.md#deletepbxmenu) | **DELETE** /conversation/pbx/menu/{conversationPbxMenuUuid} | Delete pbx menu
*ConversationApi* | [**deletePbxQueue**](docs/Api/ConversationApi.md#deletepbxqueue) | **DELETE** /conversation/pbx/queue/{conversationPbxQueueUuid} | Delete pbx queue
*ConversationApi* | [**deletePbxQueueVoicemail**](docs/Api/ConversationApi.md#deletepbxqueuevoicemail) | **DELETE** /conversation/pbx/queues/{queue_uuid}/voicemails/{recording_sid} | Delete Queue Voicemail
*ConversationApi* | [**deletePbxTimeBased**](docs/Api/ConversationApi.md#deletepbxtimebased) | **DELETE** /conversation/pbx/time_based/{conversationPbxTimeBasedUuid} | Delete pbx timeBased
*ConversationApi* | [**deletePbxTimeRange**](docs/Api/ConversationApi.md#deletepbxtimerange) | **DELETE** /conversation/pbx/time_range/{conversationPbxTimeRangeUuid} | Delete pbx timeRange
*ConversationApi* | [**deletePbxVoicemailMailbox**](docs/Api/ConversationApi.md#deletepbxvoicemailmailbox) | **DELETE** /conversation/pbx/voicemail_mailbox/{conversationPbxVoicemailMailboxUuid} | Delete pbx voicemailMailbox
*ConversationApi* | [**getAgentKeepAlive**](docs/Api/ConversationApi.md#getagentkeepalive) | **GET** /conversation/agent/keepalive | Agent keep alive
*ConversationApi* | [**getAgentProfile**](docs/Api/ConversationApi.md#getagentprofile) | **GET** /conversation/agent/profile | Get agent profile
*ConversationApi* | [**getAgentProfiles**](docs/Api/ConversationApi.md#getagentprofiles) | **GET** /conversation/agent/profiles | Get agent profiles
*ConversationApi* | [**getAgentWebsocketAuthorization**](docs/Api/ConversationApi.md#getagentwebsocketauthorization) | **PUT** /conversation/agent/auth | Get agent websocket authorization
*ConversationApi* | [**getConversation**](docs/Api/ConversationApi.md#getconversation) | **GET** /conversation/conversations/{conversation_uuid} | Retrieve a conversation
*ConversationApi* | [**getConversationCannedMessages**](docs/Api/ConversationApi.md#getconversationcannedmessages) | **GET** /conversation/canned_messages | Retrieve a list of canned messages ordered by short_code
*ConversationApi* | [**getConversationContext**](docs/Api/ConversationApi.md#getconversationcontext) | **PUT** /conversation/conversations/{conversation_uuid}/context | Get a webchat conversation context
*ConversationApi* | [**getConversationDepartmentMemberList**](docs/Api/ConversationApi.md#getconversationdepartmentmemberlist) | **GET** /conversation/department_members | Retrieve a list of possible department members
*ConversationApi* | [**getConversationDepartments**](docs/Api/ConversationApi.md#getconversationdepartments) | **GET** /conversation/departments | Retrieve a list of departments ordered by name
*ConversationApi* | [**getConversationEngagement**](docs/Api/ConversationApi.md#getconversationengagement) | **GET** /conversation/engagements/{conversation_engagement_oid} | Retrieve an engagement
*ConversationApi* | [**getConversationEngagements**](docs/Api/ConversationApi.md#getconversationengagements) | **GET** /conversation/engagements | Retrieve a list of engagements ordered by name
*ConversationApi* | [**getConversationMessages**](docs/Api/ConversationApi.md#getconversationmessages) | **GET** /conversation/conversations/{conversation_uuid}/messages/{since} | Retrieve conversation messages
*ConversationApi* | [**getConversationMultimediaUploadUrl**](docs/Api/ConversationApi.md#getconversationmultimediauploadurl) | **GET** /conversation/upload_url/{extension} | Get a presigned conversation multimedia upload URL
*ConversationApi* | [**getConversationPbxAudioUploadUrl**](docs/Api/ConversationApi.md#getconversationpbxaudiouploadurl) | **GET** /conversation/pbx/audio/upload_url/{extension} | Get a pre-signed conversation multimedia upload URL
*ConversationApi* | [**getConversationPbxCustomerSnapshot**](docs/Api/ConversationApi.md#getconversationpbxcustomersnapshot) | **POST** /conversation/pbx/customer_snapshot | Get orders and customer information for a phone number
*ConversationApi* | [**getConversationPermissions**](docs/Api/ConversationApi.md#getconversationpermissions) | **GET** /conversation/permissions | Retrieve conversation permissions
*ConversationApi* | [**getConversationWebchatQueueStatuses**](docs/Api/ConversationApi.md#getconversationwebchatqueuestatuses) | **GET** /conversation/conversations/queues/statuses | Retrieve a conversation webchat queue statuses
*ConversationApi* | [**getConversations**](docs/Api/ConversationApi.md#getconversations) | **GET** /conversation/conversations | Retrieve a list of conversation summaries newest to oldest
*ConversationApi* | [**getConversationsAutocomplete**](docs/Api/ConversationApi.md#getconversationsautocomplete) | **POST** /conversation/conversations/autocomplete | Retrieve a list of matching terms for a search field
*ConversationApi* | [**getConversationsSearch**](docs/Api/ConversationApi.md#getconversationssearch) | **POST** /conversation/conversations/search | Search conversations
*ConversationApi* | [**getLocationsForEngagement**](docs/Api/ConversationApi.md#getlocationsforengagement) | **POST** /conversation/locations | Get location data for engagement configuration
*ConversationApi* | [**getPbxAgent**](docs/Api/ConversationApi.md#getpbxagent) | **GET** /conversation/pbx/agent/{conversationPbxAgentUuid} | Get pbx agent
*ConversationApi* | [**getPbxAgentVoicemail**](docs/Api/ConversationApi.md#getpbxagentvoicemail) | **GET** /conversation/pbx/agent/voicemails/{recording_sid} | Get Agent Voicemail
*ConversationApi* | [**getPbxAgentVoicemails**](docs/Api/ConversationApi.md#getpbxagentvoicemails) | **GET** /conversation/pbx/agent/voicemails | Get Agent Voicemails
*ConversationApi* | [**getPbxAgents**](docs/Api/ConversationApi.md#getpbxagents) | **GET** /conversation/pbx/agent | Get pbx agents
*ConversationApi* | [**getPbxAudio**](docs/Api/ConversationApi.md#getpbxaudio) | **GET** /conversation/pbx/audio/{conversationPbxAudioUuid} | Get pbx audio
*ConversationApi* | [**getPbxAudioUsage**](docs/Api/ConversationApi.md#getpbxaudiousage) | **GET** /conversation/pbx/audio/{conversationPbxAudioUuid}/usage | Get pbx audio usage
*ConversationApi* | [**getPbxAudios**](docs/Api/ConversationApi.md#getpbxaudios) | **GET** /conversation/pbx/audio | Get pbx audios
*ConversationApi* | [**getPbxMenu**](docs/Api/ConversationApi.md#getpbxmenu) | **GET** /conversation/pbx/menu/{conversationPbxMenuUuid} | Get pbx menu
*ConversationApi* | [**getPbxMenus**](docs/Api/ConversationApi.md#getpbxmenus) | **GET** /conversation/pbx/menu | Get pbx menus
*ConversationApi* | [**getPbxPhoneNumber**](docs/Api/ConversationApi.md#getpbxphonenumber) | **GET** /conversation/pbx/phone_number/{conversationPbxPhoneNumberUuid} | Get pbx phoneNumber
*ConversationApi* | [**getPbxPhoneNumbers**](docs/Api/ConversationApi.md#getpbxphonenumbers) | **GET** /conversation/pbx/phone_number | Get pbx phoneNumbers
*ConversationApi* | [**getPbxQueue**](docs/Api/ConversationApi.md#getpbxqueue) | **GET** /conversation/pbx/queue/{conversationPbxQueueUuid} | Get pbx queue
*ConversationApi* | [**getPbxQueueVoicemail**](docs/Api/ConversationApi.md#getpbxqueuevoicemail) | **GET** /conversation/pbx/queues/{queue_uuid}/voicemails/{recording_sid} | Get Queue Voicemail
*ConversationApi* | [**getPbxQueueVoicemails**](docs/Api/ConversationApi.md#getpbxqueuevoicemails) | **GET** /conversation/pbx/queues/{queue_uuid}/voicemails | Get Queue Voicemails
*ConversationApi* | [**getPbxQueues**](docs/Api/ConversationApi.md#getpbxqueues) | **GET** /conversation/pbx/queue | Get pbx queues
*ConversationApi* | [**getPbxTimeBased**](docs/Api/ConversationApi.md#getpbxtimebased) | **GET** /conversation/pbx/time_based/{conversationPbxTimeBasedUuid} | Get pbx timeBased
*ConversationApi* | [**getPbxTimeBaseds**](docs/Api/ConversationApi.md#getpbxtimebaseds) | **GET** /conversation/pbx/time_based | Get pbx timeBaseds
*ConversationApi* | [**getPbxTimeRange**](docs/Api/ConversationApi.md#getpbxtimerange) | **GET** /conversation/pbx/time_range/{conversationPbxTimeRangeUuid} | Get pbx timeRange
*ConversationApi* | [**getPbxTimeRanges**](docs/Api/ConversationApi.md#getpbxtimeranges) | **GET** /conversation/pbx/time_range | Get pbx timeRanges
*ConversationApi* | [**getPbxVoicemailMailbox**](docs/Api/ConversationApi.md#getpbxvoicemailmailbox) | **GET** /conversation/pbx/voicemail_mailbox/{conversationPbxVoicemailMailboxUuid} | Get pbx voicemailMailbox
*ConversationApi* | [**getPbxVoicemailMailboxes**](docs/Api/ConversationApi.md#getpbxvoicemailmailboxes) | **GET** /conversation/pbx/voicemail_mailbox | Get pbx voicemailMailboxes
*ConversationApi* | [**getVirtualAgentBudget**](docs/Api/ConversationApi.md#getvirtualagentbudget) | **GET** /conversation/virtualagent/budget | Get virtual agent budget
*ConversationApi* | [**getVirtualAgentCapabilities**](docs/Api/ConversationApi.md#getvirtualagentcapabilities) | **GET** /conversation/virtualagent/capabilities | Get virtual agent capabilities
*ConversationApi* | [**insertConversationCannedMessage**](docs/Api/ConversationApi.md#insertconversationcannedmessage) | **POST** /conversation/canned_messages | Insert a canned message
*ConversationApi* | [**insertConversationDepartment**](docs/Api/ConversationApi.md#insertconversationdepartment) | **POST** /conversation/departments | Insert a department
*ConversationApi* | [**insertConversationEngagement**](docs/Api/ConversationApi.md#insertconversationengagement) | **POST** /conversation/engagements | Insert a engagement
*ConversationApi* | [**insertPbxAudio**](docs/Api/ConversationApi.md#insertpbxaudio) | **POST** /conversation/pbx/audio | Insert pbx audio
*ConversationApi* | [**insertPbxMenu**](docs/Api/ConversationApi.md#insertpbxmenu) | **POST** /conversation/pbx/menu | Insert pbx menu
*ConversationApi* | [**insertPbxQueue**](docs/Api/ConversationApi.md#insertpbxqueue) | **POST** /conversation/pbx/queue | Insert pbx queue
*ConversationApi* | [**insertPbxTimeBased**](docs/Api/ConversationApi.md#insertpbxtimebased) | **POST** /conversation/pbx/time_based | Insert pbx timeBased
*ConversationApi* | [**insertPbxTimeRange**](docs/Api/ConversationApi.md#insertpbxtimerange) | **POST** /conversation/pbx/time_range | Insert pbx timeRange
*ConversationApi* | [**insertPbxVoicemailMailbox**](docs/Api/ConversationApi.md#insertpbxvoicemailmailbox) | **POST** /conversation/pbx/voicemail_mailbox | Insert pbx voicemailMailbox
*ConversationApi* | [**joinConversation**](docs/Api/ConversationApi.md#joinconversation) | **PUT** /conversation/conversations/{conversation_uuid}/join | Join a conversation
*ConversationApi* | [**leaveConversation**](docs/Api/ConversationApi.md#leaveconversation) | **DELETE** /conversation/conversations/{conversation_uuid}/leave | Leave a conversation
*ConversationApi* | [**listenedPbxAgentVoicemail**](docs/Api/ConversationApi.md#listenedpbxagentvoicemail) | **GET** /conversation/pbx/agent/voicemails/{recording_sid}/listened | Listened Agent Voicemail
*ConversationApi* | [**listenedPbxQueueVoicemail**](docs/Api/ConversationApi.md#listenedpbxqueuevoicemail) | **GET** /conversation/pbx/queues/{queue_uuid}/voicemails/{recording_sid}/listened | Listened Queue Voicemail
*ConversationApi* | [**markReadConversation**](docs/Api/ConversationApi.md#markreadconversation) | **PUT** /conversation/conversations/{conversation_uuid}/markread | Mark a conversation as read
*ConversationApi* | [**resetConversationPbxQueueStatistics**](docs/Api/ConversationApi.md#resetconversationpbxqueuestatistics) | **POST** /conversation/pbx/queues/{queue_uuid}/reset_statistics | reset statistics within the queue
*ConversationApi* | [**searchConversationCannedMessages**](docs/Api/ConversationApi.md#searchconversationcannedmessages) | **POST** /conversation/canned_messages/search | Search for canned messages by short_code
*ConversationApi* | [**smsUnsubscribeConversation**](docs/Api/ConversationApi.md#smsunsubscribeconversation) | **PUT** /conversation/conversations/{conversation_uuid}/sms_unsubscribe | Unsubscribe any SMS participants in this conversation
*ConversationApi* | [**startConversation**](docs/Api/ConversationApi.md#startconversation) | **PUT** /conversation/conversations | Start a conversation
*ConversationApi* | [**updateAgentProfile**](docs/Api/ConversationApi.md#updateagentprofile) | **PUT** /conversation/agent/profile | Update agent profile
*ConversationApi* | [**updateConversationCannedMessage**](docs/Api/ConversationApi.md#updateconversationcannedmessage) | **PUT** /conversation/canned_messages/{conversation_canned_message_oid} | Update a canned message
*ConversationApi* | [**updateConversationDepartment**](docs/Api/ConversationApi.md#updateconversationdepartment) | **PUT** /conversation/departments/{conversation_department_oid} | Update a department
*ConversationApi* | [**updateConversationEngagement**](docs/Api/ConversationApi.md#updateconversationengagement) | **PUT** /conversation/engagements/{conversation_engagement_oid} | Update a engagement
*ConversationApi* | [**updateConversationWebchatQueueStatus**](docs/Api/ConversationApi.md#updateconversationwebchatqueuestatus) | **PUT** /conversation/conversations/queues/{queue_name}/status | Update status within the queue
*ConversationApi* | [**updatePbxAgent**](docs/Api/ConversationApi.md#updatepbxagent) | **PUT** /conversation/pbx/agent/{conversationPbxAgentUuid} | Update pbx agent
*ConversationApi* | [**updatePbxAudio**](docs/Api/ConversationApi.md#updatepbxaudio) | **PUT** /conversation/pbx/audio/{conversationPbxAudioUuid} | Update pbx audio
*ConversationApi* | [**updatePbxMenu**](docs/Api/ConversationApi.md#updatepbxmenu) | **PUT** /conversation/pbx/menu/{conversationPbxMenuUuid} | Update pbx menu
*ConversationApi* | [**updatePbxPhoneNumber**](docs/Api/ConversationApi.md#updatepbxphonenumber) | **PUT** /conversation/pbx/phone_number/{conversationPbxPhoneNumberUuid} | Update pbx phoneNumber
*ConversationApi* | [**updatePbxQueue**](docs/Api/ConversationApi.md#updatepbxqueue) | **PUT** /conversation/pbx/queue/{conversationPbxQueueUuid} | Update pbx queue
*ConversationApi* | [**updatePbxTimeBased**](docs/Api/ConversationApi.md#updatepbxtimebased) | **PUT** /conversation/pbx/time_based/{conversationPbxTimeBasedUuid} | Update pbx timeBased
*ConversationApi* | [**updatePbxTimeRange**](docs/Api/ConversationApi.md#updatepbxtimerange) | **PUT** /conversation/pbx/time_range/{conversationPbxTimeRangeUuid} | Update pbx timeRange
*ConversationApi* | [**updatePbxVoicemailMailbox**](docs/Api/ConversationApi.md#updatepbxvoicemailmailbox) | **PUT** /conversation/pbx/voicemail_mailbox/{conversationPbxVoicemailMailboxUuid} | Update pbx voicemailMailbox
*ConversationApi* | [**updateVirtualAgentBudget**](docs/Api/ConversationApi.md#updatevirtualagentbudget) | **PUT** /conversation/virtualagent/budget | Update virtual agent budget
*ConversationApi* | [**updateVirtualAgentCapabilities**](docs/Api/ConversationApi.md#updatevirtualagentcapabilities) | **PUT** /conversation/virtualagent/capabilities | Update virtual agent capabilities
*CouponApi* | [**deleteCoupon**](docs/Api/CouponApi.md#deletecoupon) | **DELETE** /coupon/coupons/{coupon_oid} | Delete a coupon
*CouponApi* | [**deleteCouponsByCode**](docs/Api/CouponApi.md#deletecouponsbycode) | **DELETE** /coupon/coupons/by_code | Deletes multiple coupons
*CouponApi* | [**deleteCouponsByOid**](docs/Api/CouponApi.md#deletecouponsbyoid) | **DELETE** /coupon/coupons/by_oid | Deletes multiple coupons
*CouponApi* | [**doesCouponCodeExist**](docs/Api/CouponApi.md#doescouponcodeexist) | **GET** /coupon/coupons/merchant_code/{merchant_code}/exists | Determines if a coupon merchant code already exists
*CouponApi* | [**generateCouponCodes**](docs/Api/CouponApi.md#generatecouponcodes) | **POST** /coupon/coupons/{coupon_oid}/generate_codes | Generates one time codes for a coupon
*CouponApi* | [**generateOneTimeCodesByMerchantCode**](docs/Api/CouponApi.md#generateonetimecodesbymerchantcode) | **POST** /coupon/coupons/merchant_code/{merchant_code}/generate_codes | Generates one time codes by merchant code
*CouponApi* | [**getAutoApply**](docs/Api/CouponApi.md#getautoapply) | **GET** /coupon/auto_apply | Retrieve auto apply rules and conditions
*CouponApi* | [**getCoupon**](docs/Api/CouponApi.md#getcoupon) | **GET** /coupon/coupons/{coupon_oid} | Retrieve a coupon
*CouponApi* | [**getCouponByMerchantCode**](docs/Api/CouponApi.md#getcouponbymerchantcode) | **GET** /coupon/coupons/merchant_code/{merchant_code} | Retrieve a coupon by merchant code
*CouponApi* | [**getCoupons**](docs/Api/CouponApi.md#getcoupons) | **GET** /coupon/coupons | Retrieve coupons
*CouponApi* | [**getCouponsByQuery**](docs/Api/CouponApi.md#getcouponsbyquery) | **POST** /coupon/coupons/query | Retrieve coupons by query
*CouponApi* | [**getEditorValues**](docs/Api/CouponApi.md#geteditorvalues) | **GET** /coupon/editor_values | Retrieve values needed for a coupon editor
*CouponApi* | [**insertCoupon**](docs/Api/CouponApi.md#insertcoupon) | **POST** /coupon/coupons | Insert a coupon
*CouponApi* | [**insertCoupons**](docs/Api/CouponApi.md#insertcoupons) | **POST** /coupon/coupons/batch | Insert multiple coupons
*CouponApi* | [**searchItems**](docs/Api/CouponApi.md#searchitems) | **GET** /coupon/searchItems | Searches for items to display within a coupon editor and assign to coupons
*CouponApi* | [**updateAutoApply**](docs/Api/CouponApi.md#updateautoapply) | **POST** /coupon/auto_apply | Update auto apply rules and conditions
*CouponApi* | [**updateCoupon**](docs/Api/CouponApi.md#updatecoupon) | **PUT** /coupon/coupons/{coupon_oid} | Update a coupon
*CouponApi* | [**updateCoupons**](docs/Api/CouponApi.md#updatecoupons) | **PUT** /coupon/coupons/batch | Update multiple coupons
*CouponApi* | [**uploadCouponCodes**](docs/Api/CouponApi.md#uploadcouponcodes) | **POST** /coupon/coupons/{coupon_oid}/upload_codes | Upload one-time codes for a coupon
*CustomerApi* | [**addCustomerStoreCredit**](docs/Api/CustomerApi.md#addcustomerstorecredit) | **POST** /customer/customers/{customer_profile_oid}/store_credit | Adds store credit to a customer
*CustomerApi* | [**adjustInternalCertificate**](docs/Api/CustomerApi.md#adjustinternalcertificate) | **POST** /customer/customers/{customer_profile_oid}/adjust_cashback_balance | Updates the cashback balance for a customer by updating the internal gift certificate used, creating the gift certificate if needed.
*CustomerApi* | [**deleteCustomer**](docs/Api/CustomerApi.md#deletecustomer) | **DELETE** /customer/customers/{customer_profile_oid} | Delete a customer
*CustomerApi* | [**deleteWishListItem**](docs/Api/CustomerApi.md#deletewishlistitem) | **DELETE** /customer/customers/{customer_profile_oid}/wishlist/{customer_wishlist_item_oid} | Delete a customer wishlist item
*CustomerApi* | [**getCustomer**](docs/Api/CustomerApi.md#getcustomer) | **GET** /customer/customers/{customer_profile_oid} | Retrieve a customer
*CustomerApi* | [**getCustomerByEmail**](docs/Api/CustomerApi.md#getcustomerbyemail) | **GET** /customer/customers/by_email/{email} | Retrieve a customer by Email
*CustomerApi* | [**getCustomerEditorValues**](docs/Api/CustomerApi.md#getcustomereditorvalues) | **GET** /customer/editor_values | Retrieve values needed for a customer profile editor
*CustomerApi* | [**getCustomerEmailLists**](docs/Api/CustomerApi.md#getcustomeremaillists) | **GET** /customer/email_lists | Retrieve all email lists across all storefronts
*CustomerApi* | [**getCustomerStoreCredit**](docs/Api/CustomerApi.md#getcustomerstorecredit) | **GET** /customer/customers/{customer_profile_oid}/store_credit | Retrieve the customer store credit accumulated through loyalty programs
*CustomerApi* | [**getCustomerWishList**](docs/Api/CustomerApi.md#getcustomerwishlist) | **GET** /customer/customers/{customer_profile_oid}/wishlist | Retrieve wishlist items for customer
*CustomerApi* | [**getCustomerWishListItem**](docs/Api/CustomerApi.md#getcustomerwishlistitem) | **GET** /customer/customers/{customer_profile_oid}/wishlist/{customer_wishlist_item_oid} | Retrieve wishlist item for customer
*CustomerApi* | [**getCustomers**](docs/Api/CustomerApi.md#getcustomers) | **GET** /customer/customers | Retrieve customers
*CustomerApi* | [**getCustomersByQuery**](docs/Api/CustomerApi.md#getcustomersbyquery) | **POST** /customer/customers/query | Retrieve customers by query
*CustomerApi* | [**getCustomersForDataTables**](docs/Api/CustomerApi.md#getcustomersfordatatables) | **POST** /customer/customers/dataTables | Retrieve customers for DataTables plugin
*CustomerApi* | [**getEmailVerificationToken**](docs/Api/CustomerApi.md#getemailverificationtoken) | **POST** /customer/customers/email_verify/get_token | Create a token that can be used to verify a customer email address
*CustomerApi* | [**getMagicLink**](docs/Api/CustomerApi.md#getmagiclink) | **PUT** /customer/customers/{customer_profile_oid}/magic_link/{storefront_host_name} | getMagicLink
*CustomerApi* | [**insertCustomer**](docs/Api/CustomerApi.md#insertcustomer) | **POST** /customer/customers | Insert a customer
*CustomerApi* | [**insertWishListItem**](docs/Api/CustomerApi.md#insertwishlistitem) | **POST** /customer/customers/{customer_profile_oid}/wishlist | Insert a customer wishlist item
*CustomerApi* | [**mergeCustomer**](docs/Api/CustomerApi.md#mergecustomer) | **PUT** /customer/customers/{customer_profile_oid}/merge | Merge customer into this customer
*CustomerApi* | [**searchCustomerProfileValues**](docs/Api/CustomerApi.md#searchcustomerprofilevalues) | **POST** /customer/search | Searches for all matching values (using POST)
*CustomerApi* | [**updateCustomer**](docs/Api/CustomerApi.md#updatecustomer) | **PUT** /customer/customers/{customer_profile_oid} | Update a customer
*CustomerApi* | [**updateCustomerEmailLists**](docs/Api/CustomerApi.md#updatecustomeremaillists) | **POST** /customer/customers/{customer_profile_oid}/email_lists | Update email list subscriptions for a customer
*CustomerApi* | [**updateWishListItem**](docs/Api/CustomerApi.md#updatewishlistitem) | **PUT** /customer/customers/{customer_profile_oid}/wishlist/{customer_wishlist_item_oid} | Update a customer wishlist item
*CustomerApi* | [**validateEmailVerificationToken**](docs/Api/CustomerApi.md#validateemailverificationtoken) | **POST** /customer/customers/email_verify/validate_token | Validate a token that can be used to verify a customer email address
*DatawarehouseApi* | [**deleteCustomDashboard**](docs/Api/DatawarehouseApi.md#deletecustomdashboard) | **DELETE** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Delete a custom dashboard
*DatawarehouseApi* | [**deleteCustomReport**](docs/Api/DatawarehouseApi.md#deletecustomreport) | **DELETE** /datawarehouse/custom_reports/{custom_report_oid} | Delete a custom report
*DatawarehouseApi* | [**deleteReport**](docs/Api/DatawarehouseApi.md#deletereport) | **DELETE** /datawarehouse/reports/{report_oid} | Delete a report
*DatawarehouseApi* | [**dryRunReportQueries**](docs/Api/DatawarehouseApi.md#dryrunreportqueries) | **PUT** /datawarehouse/reports/dryrun | Dry run the report queries
*DatawarehouseApi* | [**executeCustomReport**](docs/Api/DatawarehouseApi.md#executecustomreport) | **PUT** /datawarehouse/custom_reports/{custom_report_oid}/execute | Execute a custom report
*DatawarehouseApi* | [**executeCustomReports**](docs/Api/DatawarehouseApi.md#executecustomreports) | **PUT** /datawarehouse/custom_reports/execute | Execute a custom reports
*DatawarehouseApi* | [**executeReportQueries**](docs/Api/DatawarehouseApi.md#executereportqueries) | **PUT** /datawarehouse/reports/execute | Execute the report queries
*DatawarehouseApi* | [**getCustomDashboard**](docs/Api/DatawarehouseApi.md#getcustomdashboard) | **GET** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Get a custom dashboard
*DatawarehouseApi* | [**getCustomDashboards**](docs/Api/DatawarehouseApi.md#getcustomdashboards) | **GET** /datawarehouse/custom_dashboards | Get custom dashboards
*DatawarehouseApi* | [**getCustomReport**](docs/Api/DatawarehouseApi.md#getcustomreport) | **GET** /datawarehouse/custom_reports/{custom_report_oid} | Get a custom report
*DatawarehouseApi* | [**getCustomReportAccountConfig**](docs/Api/DatawarehouseApi.md#getcustomreportaccountconfig) | **GET** /datawarehouse/custom_reports/account_config | Get custom report account configuration
*DatawarehouseApi* | [**getCustomReports**](docs/Api/DatawarehouseApi.md#getcustomreports) | **GET** /datawarehouse/custom_reports | Get custom reports
*DatawarehouseApi* | [**getReport**](docs/Api/DatawarehouseApi.md#getreport) | **GET** /datawarehouse/reports/{report_oid} | Get a report
*DatawarehouseApi* | [**getReportDataSet**](docs/Api/DatawarehouseApi.md#getreportdataset) | **GET** /datawarehouse/reports/dataset/{dataset_uuid} | Get a report data set
*DatawarehouseApi* | [**getReportDataSetPage**](docs/Api/DatawarehouseApi.md#getreportdatasetpage) | **GET** /datawarehouse/reports/dataset/{dataset_uuid}/pages/{page_number} | Get a report data set page
*DatawarehouseApi* | [**getReportWebsocketAuthorization**](docs/Api/DatawarehouseApi.md#getreportwebsocketauthorization) | **PUT** /datawarehouse/reports/auth | Get report websocket authorization
*DatawarehouseApi* | [**getReports**](docs/Api/DatawarehouseApi.md#getreports) | **GET** /datawarehouse/reports | Get list of reports available
*DatawarehouseApi* | [**insertCustomDashboard**](docs/Api/DatawarehouseApi.md#insertcustomdashboard) | **POST** /datawarehouse/custom_dashboards | Create a custom dashboard
*DatawarehouseApi* | [**insertCustomReport**](docs/Api/DatawarehouseApi.md#insertcustomreport) | **POST** /datawarehouse/custom_reports | Create a custom report
*DatawarehouseApi* | [**insertReport**](docs/Api/DatawarehouseApi.md#insertreport) | **POST** /datawarehouse/reports | Create a report
*DatawarehouseApi* | [**updateCustomDashboard**](docs/Api/DatawarehouseApi.md#updatecustomdashboard) | **PUT** /datawarehouse/custom_dashboards/{custom_dashboard_oid} | Update a custom dashboard
*DatawarehouseApi* | [**updateCustomReport**](docs/Api/DatawarehouseApi.md#updatecustomreport) | **PUT** /datawarehouse/custom_reports/{custom_report_oid} | Update a custom report
*DatawarehouseApi* | [**updateCustomReportAccountConfig**](docs/Api/DatawarehouseApi.md#updatecustomreportaccountconfig) | **PUT** /datawarehouse/custom_reports/account_config | Update custom report account config
*DatawarehouseApi* | [**updateReport**](docs/Api/DatawarehouseApi.md#updatereport) | **PUT** /datawarehouse/reports/{report_oid} | Update a report
*FulfillmentApi* | [**acknowledgeOrders**](docs/Api/FulfillmentApi.md#acknowledgeorders) | **PUT** /fulfillment/distribution_centers/{distribution_center_code}/acknowledgements | Acknowledge receipt of orders.
*FulfillmentApi* | [**generatePackingSlip**](docs/Api/FulfillmentApi.md#generatepackingslip) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders/{order_id} | Generate a packing slip for this order for the given distribution center.
*FulfillmentApi* | [**getDistributionCenterOrders**](docs/Api/FulfillmentApi.md#getdistributioncenterorders) | **GET** /fulfillment/distribution_centers/{distribution_center_code}/orders | Retrieve orders queued up for this distribution center.
*FulfillmentApi* | [**getDistributionCenters**](docs/Api/FulfillmentApi.md#getdistributioncenters) | **GET** /fulfillment/distribution_centers | Retrieve distribution centers
*FulfillmentApi* | [**shipOrders**](docs/Api/FulfillmentApi.md#shiporders) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/shipments | Mark orders as shipped
*FulfillmentApi* | [**updateInventory**](docs/Api/FulfillmentApi.md#updateinventory) | **POST** /fulfillment/distribution_centers/{distribution_center_code}/inventory | Update inventory
*GiftCertificateApi* | [**addGiftCertificateLedgerEntry**](docs/Api/GiftCertificateApi.md#addgiftcertificateledgerentry) | **POST** /gift_certificate/gift_certificates/{gift_certificate_oid}/ledger_entry | Add a gift certificate ledger entry
*GiftCertificateApi* | [**createGiftCertificate**](docs/Api/GiftCertificateApi.md#creategiftcertificate) | **POST** /gift_certificate/gift_certificates | Create a gift certificate
*GiftCertificateApi* | [**deleteGiftCertificate**](docs/Api/GiftCertificateApi.md#deletegiftcertificate) | **DELETE** /gift_certificate/gift_certificates/{gift_certificate_oid} | Delete a gift certificate
*GiftCertificateApi* | [**getGiftCertificateByCode**](docs/Api/GiftCertificateApi.md#getgiftcertificatebycode) | **POST** /gift_certificate/gift_certificates/by_code/{code} | Retrieve gift certificate by code
*GiftCertificateApi* | [**getGiftCertificateByOid**](docs/Api/GiftCertificateApi.md#getgiftcertificatebyoid) | **POST** /gift_certificate/gift_certificates/{gift_certificate_oid} | Retrieve gift certificate by oid
*GiftCertificateApi* | [**getGiftCertificatesByEmail**](docs/Api/GiftCertificateApi.md#getgiftcertificatesbyemail) | **POST** /gift_certificate/gift_certificates/by_email/{email} | Retrieve gift certificate by email
*GiftCertificateApi* | [**getGiftCertificatesByQuery**](docs/Api/GiftCertificateApi.md#getgiftcertificatesbyquery) | **POST** /gift_certificate/gift_certificates/query | Retrieve gift certificates by query
*GiftCertificateApi* | [**updateGiftCertificate**](docs/Api/GiftCertificateApi.md#updategiftcertificate) | **PUT** /gift_certificate/gift_certificates/{gift_certificate_oid} | Update a gift certificate
*IntegrationLogApi* | [**getIntegrationLog**](docs/Api/IntegrationLogApi.md#getintegrationlog) | **GET** /integration_log/query/{pk}/{sk} | Retrieve an integration log
*IntegrationLogApi* | [**getIntegrationLogFile**](docs/Api/IntegrationLogApi.md#getintegrationlogfile) | **GET** /integration_log/query/{pk}/{sk}/{uuid} | Retrieve an integration log file
*IntegrationLogApi* | [**getIntegrationLogFilePdf**](docs/Api/IntegrationLogApi.md#getintegrationlogfilepdf) | **GET** /integration_log/query/{pk}/{sk}/{uuid}/pdf | Retrieve an integration log file converted to PDF
*IntegrationLogApi* | [**getIntegrationLogSummariesQuery**](docs/Api/IntegrationLogApi.md#getintegrationlogsummariesquery) | **POST** /integration_log/summary/query | Retrieve integration log summaries
*IntegrationLogApi* | [**getIntegrationLogsQuery**](docs/Api/IntegrationLogApi.md#getintegrationlogsquery) | **POST** /integration_log/query | Retrieve integration logs
*ItemApi* | [**deleteDigitalItem**](docs/Api/ItemApi.md#deletedigitalitem) | **DELETE** /item/digital_library/{digital_item_oid} | Delete a digital item, which is a file within the digital library, not an actual merchant item
*ItemApi* | [**deleteItem**](docs/Api/ItemApi.md#deleteitem) | **DELETE** /item/items/{merchant_item_oid} | Delete an item
*ItemApi* | [**deleteReview**](docs/Api/ItemApi.md#deletereview) | **DELETE** /item/items/{merchant_item_oid}/reviews/{review_oid} | Delete a review
*ItemApi* | [**getDigitalItem**](docs/Api/ItemApi.md#getdigitalitem) | **GET** /item/digital_library/{digital_item_oid} | Retrieve a digital item from the digital library, which are digital files that may be attached to normal items
*ItemApi* | [**getDigitalItems**](docs/Api/ItemApi.md#getdigitalitems) | **GET** /item/digital_library | Retrieve digital items from the digital library which are digital files that may be attached to normal items
*ItemApi* | [**getDigitalItemsByExternalId**](docs/Api/ItemApi.md#getdigitalitemsbyexternalid) | **GET** /item/digital_library/by_external/{external_id} | Retrieves digital items from the digital library (which are digital files that may be attached to normal items) that having a matching external id
*ItemApi* | [**getInventorySnapshot**](docs/Api/ItemApi.md#getinventorysnapshot) | **GET** /item/items/inventory_snapshot | Retrieve a list of item inventories.  This method may be called once every 15 minutes.  More than that will result in a 429 response.
*ItemApi* | [**getItem**](docs/Api/ItemApi.md#getitem) | **GET** /item/items/{merchant_item_oid} | Retrieve an item
*ItemApi* | [**getItemByMerchantItemId**](docs/Api/ItemApi.md#getitembymerchantitemid) | **GET** /item/items/merchant_item_id/{merchant_item_id} | Retrieve an item by item id
*ItemApi* | [**getItems**](docs/Api/ItemApi.md#getitems) | **GET** /item/items | Retrieve items
*ItemApi* | [**getPricingTiers**](docs/Api/ItemApi.md#getpricingtiers) | **GET** /item/pricing_tiers | Retrieve pricing tiers
*ItemApi* | [**getReview**](docs/Api/ItemApi.md#getreview) | **GET** /item/items/{merchant_item_oid}/reviews/{review_oid} | Get a review
*ItemApi* | [**getReviews**](docs/Api/ItemApi.md#getreviews) | **GET** /item/items/{merchant_item_oid}/reviews | Get reviews for an item
*ItemApi* | [**getUnassociatedDigitalItems**](docs/Api/ItemApi.md#getunassociateddigitalitems) | **GET** /item/digital_library/unassociated | Retrieve digital items from the digital library (which are digital files that may be attached to normal items) not yet associated with actual items
*ItemApi* | [**insertDigitalItem**](docs/Api/ItemApi.md#insertdigitalitem) | **POST** /item/digital_library | Create a file within the digital library
*ItemApi* | [**insertItem**](docs/Api/ItemApi.md#insertitem) | **POST** /item/items | Create an item
*ItemApi* | [**insertReview**](docs/Api/ItemApi.md#insertreview) | **POST** /item/items/{merchant_item_oid}/reviews | Insert a review
*ItemApi* | [**insertUpdateItemContentAttribute**](docs/Api/ItemApi.md#insertupdateitemcontentattribute) | **POST** /item/items/{merchant_item_oid}/content/attributes | Upsert an item content attribute
*ItemApi* | [**updateDigitalItem**](docs/Api/ItemApi.md#updatedigitalitem) | **PUT** /item/digital_library/{digital_item_oid} | Updates a file within the digital library
*ItemApi* | [**updateItem**](docs/Api/ItemApi.md#updateitem) | **PUT** /item/items/{merchant_item_oid} | Update an item
*ItemApi* | [**updateItems**](docs/Api/ItemApi.md#updateitems) | **PUT** /item/items/batch | Update multiple items
*ItemApi* | [**updateReview**](docs/Api/ItemApi.md#updatereview) | **PUT** /item/items/{merchant_item_oid}/reviews/{review_oid} | Update a review
*ItemApi* | [**uploadTemporaryMultimedia**](docs/Api/ItemApi.md#uploadtemporarymultimedia) | **POST** /item/temp_multimedia | Upload an image to the temporary multimedia.
*OauthApi* | [**oauthAccessToken**](docs/Api/OauthApi.md#oauthaccesstoken) | **POST** /oauth/token | Exchange authorization code for access token.
*OauthApi* | [**oauthRevoke**](docs/Api/OauthApi.md#oauthrevoke) | **POST** /oauth/revoke | Revoke this OAuth application.
*OrderApi* | [**adjustOrderTotal**](docs/Api/OrderApi.md#adjustordertotal) | **POST** /order/orders/{order_id}/adjust_order_total/{desired_total} | Adjusts an order total
*OrderApi* | [**blockRefundOnOrder**](docs/Api/OrderApi.md#blockrefundonorder) | **GET** /order/orders/{order_id}/refund_block | Set a refund block on an order
*OrderApi* | [**cancelOrder**](docs/Api/OrderApi.md#cancelorder) | **POST** /order/orders/{order_id}/cancel | Cancel an order
*OrderApi* | [**deleteOrder**](docs/Api/OrderApi.md#deleteorder) | **DELETE** /order/orders/{order_id} | Delete an order
*OrderApi* | [**duplicateOrder**](docs/Api/OrderApi.md#duplicateorder) | **POST** /order/orders/{order_id}/duplicate | Duplicate an order
*OrderApi* | [**format**](docs/Api/OrderApi.md#format) | **POST** /order/orders/{order_id}/format | Format order
*OrderApi* | [**generateInvoice**](docs/Api/OrderApi.md#generateinvoice) | **GET** /order/orders/{order_id}/invoice | Generate an invoice for this order.
*OrderApi* | [**generateOrderToken**](docs/Api/OrderApi.md#generateordertoken) | **GET** /order/orders/token/{order_id} | Generate an order token for a given order id
*OrderApi* | [**generatePackingSlipAllDC**](docs/Api/OrderApi.md#generatepackingslipalldc) | **GET** /order/orders/{order_id}/packing_slip | Generate a packing slip for this order across all distribution centers.
*OrderApi* | [**generatePackingSlipSpecificDC**](docs/Api/OrderApi.md#generatepackingslipspecificdc) | **GET** /order/orders/{order_id}/packing_slip/{distribution_center_code} | Generate a packing slip for this order for the given distribution center.
*OrderApi* | [**getAccountsReceivableRetryConfig**](docs/Api/OrderApi.md#getaccountsreceivableretryconfig) | **GET** /order/accountsReceivableRetryConfig | Retrieve A/R Retry Configuration
*OrderApi* | [**getAccountsReceivableRetryStats**](docs/Api/OrderApi.md#getaccountsreceivableretrystats) | **GET** /order/accountsReceivableRetryConfig/stats | Retrieve A/R Retry Statistics
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/orders/{order_id} | Retrieve an order
*OrderApi* | [**getOrderByToken**](docs/Api/OrderApi.md#getorderbytoken) | **POST** /order/orders/token | Retrieve an order using a token
*OrderApi* | [**getOrderEdiDocuments**](docs/Api/OrderApi.md#getorderedidocuments) | **GET** /order/orders/{order_id}/edi | Retrieve EDI documents associated with this order.
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /order/orders | Retrieve orders
*OrderApi* | [**getOrdersBatch**](docs/Api/OrderApi.md#getordersbatch) | **POST** /order/orders/batch | Retrieve order batch
*OrderApi* | [**getOrdersByQuery**](docs/Api/OrderApi.md#getordersbyquery) | **POST** /order/orders/query | Retrieve orders by query
*OrderApi* | [**insertOrder**](docs/Api/OrderApi.md#insertorder) | **POST** /order/orders | Insert an order
*OrderApi* | [**isRefundableOrder**](docs/Api/OrderApi.md#isrefundableorder) | **GET** /order/orders/{order_id}/refundable | Determine if an order can be refunded
*OrderApi* | [**processPayment**](docs/Api/OrderApi.md#processpayment) | **POST** /order/orders/{order_id}/process_payment | Process payment
*OrderApi* | [**refundOrder**](docs/Api/OrderApi.md#refundorder) | **PUT** /order/orders/{order_id}/refund | Refund an order
*OrderApi* | [**replacement**](docs/Api/OrderApi.md#replacement) | **POST** /order/orders/{order_id}/replacement | Replacement order
*OrderApi* | [**resendReceipt**](docs/Api/OrderApi.md#resendreceipt) | **POST** /order/orders/{order_id}/resend_receipt | Resend receipt
*OrderApi* | [**resendShipmentConfirmation**](docs/Api/OrderApi.md#resendshipmentconfirmation) | **POST** /order/orders/{order_id}/resend_shipment_confirmation | Resend shipment confirmation
*OrderApi* | [**unblockRefundOnOrder**](docs/Api/OrderApi.md#unblockrefundonorder) | **GET** /order/orders/{order_id}/refund_unblock | Remove a refund block on an order
*OrderApi* | [**updateAccountsReceivableRetryConfig**](docs/Api/OrderApi.md#updateaccountsreceivableretryconfig) | **POST** /order/accountsReceivableRetryConfig | Update A/R Retry Configuration
*OrderApi* | [**updateOrder**](docs/Api/OrderApi.md#updateorder) | **PUT** /order/orders/{order_id} | Update an order
*OrderApi* | [**validateOrder**](docs/Api/OrderApi.md#validateorder) | **POST** /order/validate | Validate
*SsoApi* | [**getSsoSessionUser**](docs/Api/SsoApi.md#getssosessionuser) | **GET** /sso/session/user | Get single sign on session user
*SsoApi* | [**ssoAuthorize**](docs/Api/SsoApi.md#ssoauthorize) | **PUT** /sso/authorize | Authorize a single sign on session
*SsoApi* | [**ssoSessionRevoke**](docs/Api/SsoApi.md#ssosessionrevoke) | **DELETE** /sso/session/revoke | Revoke single sign on session
*SsoApi* | [**ssoToken**](docs/Api/SsoApi.md#ssotoken) | **PUT** /sso/token | Exchange a single sign on code for a simple key token
*StorefrontApi* | [**addToLibrary**](docs/Api/StorefrontApi.md#addtolibrary) | **POST** /storefront/code_library | Add to library
*StorefrontApi* | [**applyToStoreFront**](docs/Api/StorefrontApi.md#applytostorefront) | **POST** /storefront/code_library/apply | Apply library item to storefront.
*StorefrontApi* | [**archiveEmailList**](docs/Api/StorefrontApi.md#archiveemaillist) | **POST** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/archive | Archive email list
*StorefrontApi* | [**archiveEmailSegment**](docs/Api/StorefrontApi.md#archiveemailsegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/archive | Archive email segment
*StorefrontApi* | [**backPopulateEmailFlow**](docs/Api/StorefrontApi.md#backpopulateemailflow) | **POST** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/backfill | Back populate email flow
*StorefrontApi* | [**checkDownloadEmailSegment**](docs/Api/StorefrontApi.md#checkdownloademailsegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/downloadPrepare/{email_segment_rebuild_uuid} | Check download of email segment
*StorefrontApi* | [**cloneEmailCampaign**](docs/Api/StorefrontApi.md#cloneemailcampaign) | **POST** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/clone | Clone email campaign
*StorefrontApi* | [**cloneEmailFlow**](docs/Api/StorefrontApi.md#cloneemailflow) | **POST** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/clone | Clone email flow
*StorefrontApi* | [**createEmailSendingDomain**](docs/Api/StorefrontApi.md#createemailsendingdomain) | **POST** /storefront/email/sending_domains/{domain}/create | Create email campaign
*StorefrontApi* | [**createEmailSendingDomain2**](docs/Api/StorefrontApi.md#createemailsendingdomain2) | **POST** /storefront/email/sending_domains | Create email sending domain for various providers
*StorefrontApi* | [**createFsDirectory**](docs/Api/StorefrontApi.md#createfsdirectory) | **POST** /storefront/{id}/fs/dir | Create file manager directory
*StorefrontApi* | [**createTwilioAccount**](docs/Api/StorefrontApi.md#createtwilioaccount) | **POST** /storefront/twilio/accounts | Create Twilio account
*StorefrontApi* | [**deleteEmailCampaignFolder**](docs/Api/StorefrontApi.md#deleteemailcampaignfolder) | **DELETE** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Delete email campaignFolder
*StorefrontApi* | [**deleteEmailCommseqStat**](docs/Api/StorefrontApi.md#deleteemailcommseqstat) | **DELETE** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stat | Delete communication sequence stats
*StorefrontApi* | [**deleteEmailEmail**](docs/Api/StorefrontApi.md#deleteemailemail) | **DELETE** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Delete email email
*StorefrontApi* | [**deleteEmailFlowFolder**](docs/Api/StorefrontApi.md#deleteemailflowfolder) | **DELETE** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Delete email flowFolder
*StorefrontApi* | [**deleteEmailListCustomer**](docs/Api/StorefrontApi.md#deleteemaillistcustomer) | **DELETE** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers/{email_customer_uuid} | Delete email list customer
*StorefrontApi* | [**deleteEmailListSegmentFolder**](docs/Api/StorefrontApi.md#deleteemaillistsegmentfolder) | **DELETE** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Delete email ListSegmentFolder
*StorefrontApi* | [**deleteEmailPostcard**](docs/Api/StorefrontApi.md#deleteemailpostcard) | **DELETE** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Delete email postcard
*StorefrontApi* | [**deleteEmailSendingDomain**](docs/Api/StorefrontApi.md#deleteemailsendingdomain) | **DELETE** /storefront/email/sending_domains/{domain} | delete email campaign
*StorefrontApi* | [**deleteExperiment**](docs/Api/StorefrontApi.md#deleteexperiment) | **DELETE** /storefront/{storefront_oid}/experiments/{storefront_experiment_oid} | Delete experiment
*StorefrontApi* | [**deleteFsFile**](docs/Api/StorefrontApi.md#deletefsfile) | **DELETE** /storefront/{id}/fs/file | Delete file manager directory
*StorefrontApi* | [**deleteHeatmap**](docs/Api/StorefrontApi.md#deleteheatmap) | **DELETE** /storefront/{storefront_oid}/screen_recordings/heatmap | Delete screen recording heatmap
*StorefrontApi* | [**deleteLibraryItem**](docs/Api/StorefrontApi.md#deletelibraryitem) | **DELETE** /storefront/code_library/{library_item_oid} | Delete library item
*StorefrontApi* | [**deleteLibraryItemPublishedVersions**](docs/Api/StorefrontApi.md#deletelibraryitempublishedversions) | **DELETE** /storefront/code_library/{library_item_oid}/published_versions | Delete all published versions for a library item, including anything in review.
*StorefrontApi* | [**deleteScreenRecordingSegment**](docs/Api/StorefrontApi.md#deletescreenrecordingsegment) | **DELETE** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Delete screen recording segment
*StorefrontApi* | [**deleteTwilioAccount**](docs/Api/StorefrontApi.md#deletetwilioaccount) | **DELETE** /storefront/twilio/accounts/{esp_twilio_uuid} | delete Twilio account
*StorefrontApi* | [**duplicateLibraryItem**](docs/Api/StorefrontApi.md#duplicatelibraryitem) | **POST** /storefront/code_library/{library_item_oid}/duplicate | Duplicate library item.
*StorefrontApi* | [**favoriteScreenRecording**](docs/Api/StorefrontApi.md#favoritescreenrecording) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/favorite | Update favorite flag on screen recording
*StorefrontApi* | [**geocodeAddress**](docs/Api/StorefrontApi.md#geocodeaddress) | **POST** /storefront/{storefront_oid}/email/geocode | Obtain lat/long for an address
*StorefrontApi* | [**getCountries**](docs/Api/StorefrontApi.md#getcountries) | **GET** /storefront/{storefront_oid}/email/countries | Get countries
*StorefrontApi* | [**getEditorToken**](docs/Api/StorefrontApi.md#geteditortoken) | **GET** /storefront/{storefront_oid}/editor_token | Gets editor token
*StorefrontApi* | [**getEmailBaseTemplates**](docs/Api/StorefrontApi.md#getemailbasetemplates) | **GET** /storefront/{storefront_oid}/email/baseTemplates | Get email communication base templates
*StorefrontApi* | [**getEmailCampaign**](docs/Api/StorefrontApi.md#getemailcampaign) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Get email campaign
*StorefrontApi* | [**getEmailCampaignFolder**](docs/Api/StorefrontApi.md#getemailcampaignfolder) | **GET** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Get email campaign folder
*StorefrontApi* | [**getEmailCampaignFolders**](docs/Api/StorefrontApi.md#getemailcampaignfolders) | **GET** /storefront/{storefront_oid}/email/campaign_folders | Get email campaign folders
*StorefrontApi* | [**getEmailCampaignScreenshots**](docs/Api/StorefrontApi.md#getemailcampaignscreenshots) | **GET** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/screenshots | Get email campaign screenshots
*StorefrontApi* | [**getEmailCampaigns**](docs/Api/StorefrontApi.md#getemailcampaigns) | **GET** /storefront/{storefront_oid}/email/campaigns | Get email campaigns
*StorefrontApi* | [**getEmailCampaignsWithStats**](docs/Api/StorefrontApi.md#getemailcampaignswithstats) | **GET** /storefront/{storefront_oid}/email/campaignsWithStats/{stat_days} | Get email campaigns with stats
*StorefrontApi* | [**getEmailCommseq**](docs/Api/StorefrontApi.md#getemailcommseq) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Get email commseq
*StorefrontApi* | [**getEmailCommseqEditorValues**](docs/Api/StorefrontApi.md#getemailcommseqeditorvalues) | **GET** /storefront/{storefront_oid}/email/commseqs/editorValues | Get email merchant specific editor values
*StorefrontApi* | [**getEmailCommseqEmailStats**](docs/Api/StorefrontApi.md#getemailcommseqemailstats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/emailStats | Get email communication sequence emails stats
*StorefrontApi* | [**getEmailCommseqPostcardStats**](docs/Api/StorefrontApi.md#getemailcommseqpostcardstats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/postcardStats | Get email communication sequence postcard stats
*StorefrontApi* | [**getEmailCommseqPostcardTracking**](docs/Api/StorefrontApi.md#getemailcommseqpostcardtracking) | **GET** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid}/tracking | Get email communication postcard tracking
*StorefrontApi* | [**getEmailCommseqRateLimiters**](docs/Api/StorefrontApi.md#getemailcommseqratelimiters) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/rate_limiters | Get email commseq rate limiters
*StorefrontApi* | [**getEmailCommseqSmsStats**](docs/Api/StorefrontApi.md#getemailcommseqsmsstats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/smsStats | Get email communication sequence sms stats
*StorefrontApi* | [**getEmailCommseqStatOverall**](docs/Api/StorefrontApi.md#getemailcommseqstatoverall) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stat | Get communication sequence stats overall
*StorefrontApi* | [**getEmailCommseqStepStats**](docs/Api/StorefrontApi.md#getemailcommseqstepstats) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/stepStats | Get email communication sequence step stats
*StorefrontApi* | [**getEmailCommseqStepWaiting**](docs/Api/StorefrontApi.md#getemailcommseqstepwaiting) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/waiting | Get email communication sequence customers waiting at each requested step
*StorefrontApi* | [**getEmailCommseqWebhookEditorValues**](docs/Api/StorefrontApi.md#getemailcommseqwebhookeditorvalues) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/webhookEditorValues | Get email webhook editor values
*StorefrontApi* | [**getEmailCommseqs**](docs/Api/StorefrontApi.md#getemailcommseqs) | **GET** /storefront/{storefront_oid}/email/commseqs | Get email commseqs
*StorefrontApi* | [**getEmailCustomerEditorUrl**](docs/Api/StorefrontApi.md#getemailcustomereditorurl) | **GET** /storefront/{storefront_oid}/email/customers/{email_customer_uuid}/editor_url | Get customers editor URL
*StorefrontApi* | [**getEmailCustomers**](docs/Api/StorefrontApi.md#getemailcustomers) | **GET** /storefront/{storefront_oid}/email/customers | Get email customers
*StorefrontApi* | [**getEmailDashboardActivity**](docs/Api/StorefrontApi.md#getemaildashboardactivity) | **GET** /storefront/{storefront_oid}/email/dashboard_activity | Get email dashboard activity
*StorefrontApi* | [**getEmailDashboardStats**](docs/Api/StorefrontApi.md#getemaildashboardstats) | **GET** /storefront/{storefront_oid}/email/dashboard_stats | Get dashboard stats
*StorefrontApi* | [**getEmailDispatchLogs**](docs/Api/StorefrontApi.md#getemaildispatchlogs) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/logs | Get email dispatch logs
*StorefrontApi* | [**getEmailEmail**](docs/Api/StorefrontApi.md#getemailemail) | **GET** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Get email email
*StorefrontApi* | [**getEmailEmailClicks**](docs/Api/StorefrontApi.md#getemailemailclicks) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/emails/{commseq_email_uuid}/clicks | Get email email clicks
*StorefrontApi* | [**getEmailEmailCustomerEditorUrl**](docs/Api/StorefrontApi.md#getemailemailcustomereditorurl) | **GET** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/orders/{order_id}/editor_url | Get email order customer editor url
*StorefrontApi* | [**getEmailEmailOrders**](docs/Api/StorefrontApi.md#getemailemailorders) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/emails/{commseq_email_uuid}/orders | Get email email orders
*StorefrontApi* | [**getEmailEmails**](docs/Api/StorefrontApi.md#getemailemails) | **GET** /storefront/{storefront_oid}/email/emails | Get email emails
*StorefrontApi* | [**getEmailEmailsMultiple**](docs/Api/StorefrontApi.md#getemailemailsmultiple) | **POST** /storefront/{storefront_oid}/email/emails/multiple | Get email emails multiple
*StorefrontApi* | [**getEmailFlow**](docs/Api/StorefrontApi.md#getemailflow) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Get email flow
*StorefrontApi* | [**getEmailFlowFolder**](docs/Api/StorefrontApi.md#getemailflowfolder) | **GET** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Get email flow folder
*StorefrontApi* | [**getEmailFlowFolders**](docs/Api/StorefrontApi.md#getemailflowfolders) | **GET** /storefront/{storefront_oid}/email/flow_folders | Get email flow folders
*StorefrontApi* | [**getEmailFlowScreenshots**](docs/Api/StorefrontApi.md#getemailflowscreenshots) | **GET** /storefront/{storefront_oid}/email/flows/{email_flow_uuid}/screenshots | Get email flow screenshots
*StorefrontApi* | [**getEmailFlows**](docs/Api/StorefrontApi.md#getemailflows) | **GET** /storefront/{storefront_oid}/email/flows | Get email flows
*StorefrontApi* | [**getEmailGlobalSettings**](docs/Api/StorefrontApi.md#getemailglobalsettings) | **GET** /storefront/email/global_settings | Get email globalsettings
*StorefrontApi* | [**getEmailList**](docs/Api/StorefrontApi.md#getemaillist) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Get email list
*StorefrontApi* | [**getEmailListCustomerEditorUrl**](docs/Api/StorefrontApi.md#getemaillistcustomereditorurl) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers/{email_customer_uuid}/editor_url | Get email list customer editor url
*StorefrontApi* | [**getEmailListCustomers**](docs/Api/StorefrontApi.md#getemaillistcustomers) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/customers | Get email list customers
*StorefrontApi* | [**getEmailListSegmentFolder**](docs/Api/StorefrontApi.md#getemaillistsegmentfolder) | **GET** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Get email campaign folder
*StorefrontApi* | [**getEmailListSegmentFolders**](docs/Api/StorefrontApi.md#getemaillistsegmentfolders) | **GET** /storefront/{storefront_oid}/email/list_segment_folders | Get email campaign folders
*StorefrontApi* | [**getEmailLists**](docs/Api/StorefrontApi.md#getemaillists) | **GET** /storefront/{storefront_oid}/email/lists | Get email lists
*StorefrontApi* | [**getEmailPerformance**](docs/Api/StorefrontApi.md#getemailperformance) | **GET** /storefront/{storefront_oid}/email/performance | Get email performance
*StorefrontApi* | [**getEmailPlan**](docs/Api/StorefrontApi.md#getemailplan) | **GET** /storefront/{storefront_oid}/email/plan | Get email plan
*StorefrontApi* | [**getEmailPostcard**](docs/Api/StorefrontApi.md#getemailpostcard) | **GET** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Get email postcard
*StorefrontApi* | [**getEmailPostcards**](docs/Api/StorefrontApi.md#getemailpostcards) | **GET** /storefront/{storefront_oid}/email/postcards | Get email postcards
*StorefrontApi* | [**getEmailPostcardsMultiple**](docs/Api/StorefrontApi.md#getemailpostcardsmultiple) | **POST** /storefront/{storefront_oid}/email/postcards/multiple | Get email postcards multiple
*StorefrontApi* | [**getEmailSegment**](docs/Api/StorefrontApi.md#getemailsegment) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Get email segment
*StorefrontApi* | [**getEmailSegmentCustomerEditorUrl**](docs/Api/StorefrontApi.md#getemailsegmentcustomereditorurl) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/customers/{email_customer_uuid}/editor_url | Get email segment customers editor URL
*StorefrontApi* | [**getEmailSegmentCustomers**](docs/Api/StorefrontApi.md#getemailsegmentcustomers) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/customers | Get email segment customers
*StorefrontApi* | [**getEmailSegments**](docs/Api/StorefrontApi.md#getemailsegments) | **GET** /storefront/{storefront_oid}/email/segments | Get email segments
*StorefrontApi* | [**getEmailSendingDomain**](docs/Api/StorefrontApi.md#getemailsendingdomain) | **GET** /storefront/email/sending_domain/{domain} | Get email sending domain
*StorefrontApi* | [**getEmailSendingDomainStatus**](docs/Api/StorefrontApi.md#getemailsendingdomainstatus) | **POST** /storefront/email/sending_domains/{domain}/status | Get email sending domain status
*StorefrontApi* | [**getEmailSendingDomains**](docs/Api/StorefrontApi.md#getemailsendingdomains) | **GET** /storefront/email/sending_domains | Get email sending domains
*StorefrontApi* | [**getEmailSettings**](docs/Api/StorefrontApi.md#getemailsettings) | **GET** /storefront/{storefront_oid}/email/settings | Get email settings
*StorefrontApi* | [**getEmailSmsOrders**](docs/Api/StorefrontApi.md#getemailsmsorders) | **GET** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/steps/{commseq_step_uuid}/sms/orders | Get email sms orders
*StorefrontApi* | [**getEmailTemplate**](docs/Api/StorefrontApi.md#getemailtemplate) | **GET** /storefront/{storefront_oid}/email/templates/{email_template_oid} | Get email template
*StorefrontApi* | [**getEmailTemplates**](docs/Api/StorefrontApi.md#getemailtemplates) | **GET** /storefront/{storefront_oid}/email/templates | Get email templates
*StorefrontApi* | [**getEmailThirdPartyProviders**](docs/Api/StorefrontApi.md#getemailthirdpartyproviders) | **GET** /storefront/{storefront_oid}/email/third_party_providers | Get a list of third party email providers
*StorefrontApi* | [**getExperiments**](docs/Api/StorefrontApi.md#getexperiments) | **GET** /storefront/{storefront_oid}/experiments | Get experiments
*StorefrontApi* | [**getFsDirectory**](docs/Api/StorefrontApi.md#getfsdirectory) | **GET** /storefront/{id}/fs/dir | Get file manager directory
*StorefrontApi* | [**getHeatmap**](docs/Api/StorefrontApi.md#getheatmap) | **POST** /storefront/{storefront_oid}/screen_recordings/heatmap | Get screen recording heatmap
*StorefrontApi* | [**getHeatmapIndex**](docs/Api/StorefrontApi.md#getheatmapindex) | **POST** /storefront/{storefront_oid}/screen_recordings/heatmap/index | Get screen recording heatmap index
*StorefrontApi* | [**getHistogramPropertyNames**](docs/Api/StorefrontApi.md#gethistogrampropertynames) | **GET** /storefront/{storefront_oid}/email/histogram/property_names | Get histogram property names
*StorefrontApi* | [**getHistogramPropertyValues**](docs/Api/StorefrontApi.md#gethistogrampropertyvalues) | **GET** /storefront/{storefront_oid}/email/histogram/property_values | Get histogram property values
*StorefrontApi* | [**getLibraryFilterValues**](docs/Api/StorefrontApi.md#getlibraryfiltervalues) | **GET** /storefront/code_library/filter_values | Get library values used to populate drop down boxes for filtering.
*StorefrontApi* | [**getLibraryItem**](docs/Api/StorefrontApi.md#getlibraryitem) | **GET** /storefront/code_library/{library_item_oid} | Get library item.
*StorefrontApi* | [**getLibraryItemPublishedVersions**](docs/Api/StorefrontApi.md#getlibraryitempublishedversions) | **GET** /storefront/code_library/{library_item_oid}/published_versions | Get all published versions for a library item.
*StorefrontApi* | [**getScreenRecording**](docs/Api/StorefrontApi.md#getscreenrecording) | **GET** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid} | Get screen recording
*StorefrontApi* | [**getScreenRecordingPageViewData**](docs/Api/StorefrontApi.md#getscreenrecordingpageviewdata) | **GET** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/page_view_data/{screen_recording_page_view_uuid} | Get screen recording page view data
*StorefrontApi* | [**getScreenRecordingSegment**](docs/Api/StorefrontApi.md#getscreenrecordingsegment) | **GET** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Get screen recording segment
*StorefrontApi* | [**getScreenRecordingSegments**](docs/Api/StorefrontApi.md#getscreenrecordingsegments) | **GET** /storefront/{storefront_oid}/screen_recordings/segments | Get screen recording segments
*StorefrontApi* | [**getScreenRecordingSettings**](docs/Api/StorefrontApi.md#getscreenrecordingsettings) | **GET** /storefront/{storefront_oid}/screen_recordings/settings | Get screen recording settings
*StorefrontApi* | [**getScreenRecordingTags**](docs/Api/StorefrontApi.md#getscreenrecordingtags) | **POST** /storefront/{storefront_oid}/screen_recordings/tags | Get tags used by screen recording
*StorefrontApi* | [**getScreenRecordingsByQuery**](docs/Api/StorefrontApi.md#getscreenrecordingsbyquery) | **POST** /storefront/{storefront_oid}/screen_recordings/query | Query screen recordings
*StorefrontApi* | [**getScreenRecordingsBySegment**](docs/Api/StorefrontApi.md#getscreenrecordingsbysegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid}/query | Get screen recordings by segment
*StorefrontApi* | [**getStoreFrontPricingTiers**](docs/Api/StorefrontApi.md#getstorefrontpricingtiers) | **GET** /storefront/pricing_tiers | Retrieve pricing tiers
*StorefrontApi* | [**getStoreFronts**](docs/Api/StorefrontApi.md#getstorefronts) | **GET** /storefront | Get storefronts (internal use only for security reasons)
*StorefrontApi* | [**getThumbnailParameters**](docs/Api/StorefrontApi.md#getthumbnailparameters) | **POST** /storefront/thumbnailParameters | Get thumbnail parameters
*StorefrontApi* | [**getTransactionEmail**](docs/Api/StorefrontApi.md#gettransactionemail) | **GET** /storefront/{storefront_oid}/transaction_email/list/{email_id} | Gets a transaction email object
*StorefrontApi* | [**getTransactionEmailList**](docs/Api/StorefrontApi.md#gettransactionemaillist) | **GET** /storefront/{storefront_oid}/transaction_email/list | Gets a list of transaction email names
*StorefrontApi* | [**getTransactionEmailScreenshots**](docs/Api/StorefrontApi.md#gettransactionemailscreenshots) | **GET** /storefront/{storefront_oid}/transaction_email/list/{email_id}/screenshots | Get transactional email screenshots
*StorefrontApi* | [**getTwilioAccount**](docs/Api/StorefrontApi.md#gettwilioaccount) | **GET** /storefront/twilio/accounts/{esp_twilio_uuid} | Get Twilio account
*StorefrontApi* | [**getTwilioAccounts**](docs/Api/StorefrontApi.md#gettwilioaccounts) | **GET** /storefront/twilio/accounts | Get all Twilio accounts
*StorefrontApi* | [**getUploadFsFileUrl**](docs/Api/StorefrontApi.md#getuploadfsfileurl) | **GET** /storefront/{id}/fs/upload_url/{extension} | Retrieves a S3 url where a file may be uploaded. Once uploaded, use uploadFsFile to trigger the server into reading the S3 bucket and retrieving the file.
*StorefrontApi* | [**globalUnsubscribe**](docs/Api/StorefrontApi.md#globalunsubscribe) | **POST** /storefront/{storefront_oid}/email/globalUnsubscribe | Globally unsubscribe a customer
*StorefrontApi* | [**importEmailThirdPartyProviderList**](docs/Api/StorefrontApi.md#importemailthirdpartyproviderlist) | **POST** /storefront/{storefront_oid}/email/third_party_providers/import | Import a third party provider list
*StorefrontApi* | [**insertEmailCampaign**](docs/Api/StorefrontApi.md#insertemailcampaign) | **POST** /storefront/{storefront_oid}/email/campaigns | Insert email campaign
*StorefrontApi* | [**insertEmailCampaignFolder**](docs/Api/StorefrontApi.md#insertemailcampaignfolder) | **POST** /storefront/{storefront_oid}/email/campaign_folders | Insert email campaign folder
*StorefrontApi* | [**insertEmailCommseq**](docs/Api/StorefrontApi.md#insertemailcommseq) | **POST** /storefront/{storefront_oid}/email/commseqs | Insert email commseq
*StorefrontApi* | [**insertEmailEmail**](docs/Api/StorefrontApi.md#insertemailemail) | **POST** /storefront/{storefront_oid}/email/emails | Insert email email
*StorefrontApi* | [**insertEmailFlow**](docs/Api/StorefrontApi.md#insertemailflow) | **POST** /storefront/{storefront_oid}/email/flows | Insert email flow
*StorefrontApi* | [**insertEmailFlowFolder**](docs/Api/StorefrontApi.md#insertemailflowfolder) | **POST** /storefront/{storefront_oid}/email/flow_folders | Insert email flow folder
*StorefrontApi* | [**insertEmailList**](docs/Api/StorefrontApi.md#insertemaillist) | **POST** /storefront/{storefront_oid}/email/lists | Insert email list
*StorefrontApi* | [**insertEmailListSegmentFolder**](docs/Api/StorefrontApi.md#insertemaillistsegmentfolder) | **POST** /storefront/{storefront_oid}/email/list_segment_folders | Insert email campaign folder
*StorefrontApi* | [**insertEmailPostcard**](docs/Api/StorefrontApi.md#insertemailpostcard) | **POST** /storefront/{storefront_oid}/email/postcards | Insert email postcard
*StorefrontApi* | [**insertEmailSegment**](docs/Api/StorefrontApi.md#insertemailsegment) | **POST** /storefront/{storefront_oid}/email/segments | Insert email segment
*StorefrontApi* | [**insertScreenRecordingSegment**](docs/Api/StorefrontApi.md#insertscreenrecordingsegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments | Insert screen recording segment
*StorefrontApi* | [**insertUpdatePageContentAttribute**](docs/Api/StorefrontApi.md#insertupdatepagecontentattribute) | **POST** /storefront/{storefront_oid}/pages/{page_oid}/content/attributes | Upsert a page content attribute
*StorefrontApi* | [**prepareDownloadEmailSegment**](docs/Api/StorefrontApi.md#preparedownloademailsegment) | **POST** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/downloadPrepare | Prepare download of email segment
*StorefrontApi* | [**publishLibraryItem**](docs/Api/StorefrontApi.md#publishlibraryitem) | **POST** /storefront/code_library/{library_item_oid}/publish | Publish library item.
*StorefrontApi* | [**purchaseLibraryItem**](docs/Api/StorefrontApi.md#purchaselibraryitem) | **POST** /storefront/code_library/{library_item_oid}/purchase | Purchase public library item, which creates a copy of the item in your personal code library
*StorefrontApi* | [**releaseEmailCommseqStepWaiting**](docs/Api/StorefrontApi.md#releaseemailcommseqstepwaiting) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/waiting/{commseq_step_uuid} | Release email communication sequence customers waiting at the specified step
*StorefrontApi* | [**resetEmailCommseqRateLimiters**](docs/Api/StorefrontApi.md#resetemailcommseqratelimiters) | **DELETE** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/rate_limiters | Reset email commseq rate limiters (only callable by UltraCart Support)
*StorefrontApi* | [**review**](docs/Api/StorefrontApi.md#review) | **POST** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/review | Request a review of an email
*StorefrontApi* | [**search**](docs/Api/StorefrontApi.md#search) | **GET** /storefront/search | Searches for all matching values
*StorefrontApi* | [**search2**](docs/Api/StorefrontApi.md#search2) | **POST** /storefront/search | Searches for all matching values (using POST)
*StorefrontApi* | [**searchEmailListCustomers**](docs/Api/StorefrontApi.md#searchemaillistcustomers) | **GET** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/search | Search email list customers
*StorefrontApi* | [**searchEmailSegmentCustomers**](docs/Api/StorefrontApi.md#searchemailsegmentcustomers) | **GET** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/search | Search email segment customers
*StorefrontApi* | [**searchLibraryItems**](docs/Api/StorefrontApi.md#searchlibraryitems) | **POST** /storefront/code_library/search | Retrieve library items
*StorefrontApi* | [**searchPublishedItems**](docs/Api/StorefrontApi.md#searchpublisheditems) | **POST** /storefront/code_library/search_published | Retrieve library items
*StorefrontApi* | [**searchReviewItems**](docs/Api/StorefrontApi.md#searchreviewitems) | **POST** /storefront/code_library/search_review | Retrieve library items needing review or rejected
*StorefrontApi* | [**searchSharedItems**](docs/Api/StorefrontApi.md#searchshareditems) | **POST** /storefront/code_library/search_shared | Retrieve library items
*StorefrontApi* | [**sendEmailTest**](docs/Api/StorefrontApi.md#sendemailtest) | **POST** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid}/test | Send email test
*StorefrontApi* | [**sendPostcardTest**](docs/Api/StorefrontApi.md#sendpostcardtest) | **POST** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid}/test | Send postcard test
*StorefrontApi* | [**sendSmsTest**](docs/Api/StorefrontApi.md#sendsmstest) | **POST** /storefront/{storefront_oid}/email/sms/{commseq_uuid}/{commseq_step_uuid}/test | Send SMS test
*StorefrontApi* | [**sendWebhookTest**](docs/Api/StorefrontApi.md#sendwebhooktest) | **POST** /storefront/{storefront_oid}/email/webhooks/test | Send webhook test
*StorefrontApi* | [**sequenceTest**](docs/Api/StorefrontApi.md#sequencetest) | **POST** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid}/test | Sequence test
*StorefrontApi* | [**startEmailCampaign**](docs/Api/StorefrontApi.md#startemailcampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid}/start | Start email campaign
*StorefrontApi* | [**subscribeToEmailList**](docs/Api/StorefrontApi.md#subscribetoemaillist) | **POST** /storefront/{storefront_oid}/email/lists/{email_list_uuid}/subscribe | Subscribe customers to email list
*StorefrontApi* | [**sunsetEmailSegment**](docs/Api/StorefrontApi.md#sunsetemailsegment) | **PUT** /storefront/{storefront_oid}/email/segments/{email_segment_uuid}/sunset | Sunset email segment
*StorefrontApi* | [**unfavoriteScreenRecording**](docs/Api/StorefrontApi.md#unfavoritescreenrecording) | **DELETE** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/favorite | Remove favorite flag on screen recording
*StorefrontApi* | [**updateEmailCampaign**](docs/Api/StorefrontApi.md#updateemailcampaign) | **PUT** /storefront/{storefront_oid}/email/campaigns/{email_campaign_uuid} | Update email campaign
*StorefrontApi* | [**updateEmailCampaignFolder**](docs/Api/StorefrontApi.md#updateemailcampaignfolder) | **PUT** /storefront/{storefront_oid}/email/campaign_folders/{email_campaign_folder_uuid} | Update email campaign folder
*StorefrontApi* | [**updateEmailCommseq**](docs/Api/StorefrontApi.md#updateemailcommseq) | **PUT** /storefront/{storefront_oid}/email/commseqs/{commseq_uuid} | Update email commseq
*StorefrontApi* | [**updateEmailCustomer**](docs/Api/StorefrontApi.md#updateemailcustomer) | **PUT** /storefront/{storefront_oid}/email/customers/{email_customer_uuid} | Update email customer
*StorefrontApi* | [**updateEmailEmail**](docs/Api/StorefrontApi.md#updateemailemail) | **PUT** /storefront/{storefront_oid}/email/emails/{commseq_email_uuid} | Update email email
*StorefrontApi* | [**updateEmailFlow**](docs/Api/StorefrontApi.md#updateemailflow) | **PUT** /storefront/{storefront_oid}/email/flows/{email_flow_uuid} | Update email flow
*StorefrontApi* | [**updateEmailFlowFolder**](docs/Api/StorefrontApi.md#updateemailflowfolder) | **PUT** /storefront/{storefront_oid}/email/flow_folders/{email_flow_folder_uuid} | Update email flow folder
*StorefrontApi* | [**updateEmailGlobalSettings**](docs/Api/StorefrontApi.md#updateemailglobalsettings) | **POST** /storefront/email/global_settings | Update email global settings
*StorefrontApi* | [**updateEmailList**](docs/Api/StorefrontApi.md#updateemaillist) | **PUT** /storefront/{storefront_oid}/email/lists/{email_list_uuid} | Update email list
*StorefrontApi* | [**updateEmailListSegmentFolder**](docs/Api/StorefrontApi.md#updateemaillistsegmentfolder) | **PUT** /storefront/{storefront_oid}/email/list_segment_folders/{email_list_segment_folder_uuid} | Update email campaign folder
*StorefrontApi* | [**updateEmailPlan**](docs/Api/StorefrontApi.md#updateemailplan) | **POST** /storefront/{storefront_oid}/email/plan | Update email plan
*StorefrontApi* | [**updateEmailPostcard**](docs/Api/StorefrontApi.md#updateemailpostcard) | **PUT** /storefront/{storefront_oid}/email/postcards/{commseq_postcard_uuid} | Update email postcard
*StorefrontApi* | [**updateEmailSegment**](docs/Api/StorefrontApi.md#updateemailsegment) | **PUT** /storefront/{storefront_oid}/email/segments/{email_segment_uuid} | Update email segment
*StorefrontApi* | [**updateEmailSendingDomain**](docs/Api/StorefrontApi.md#updateemailsendingdomain) | **PUT** /storefront/email/sending_domains/{domain} | Update email sending domain
*StorefrontApi* | [**updateEmailSettings**](docs/Api/StorefrontApi.md#updateemailsettings) | **POST** /storefront/{storefront_oid}/email/settings | Update email settings
*StorefrontApi* | [**updateExperiment**](docs/Api/StorefrontApi.md#updateexperiment) | **PUT** /storefront/{storefront_oid}/experiments/{storefront_experiment_oid} | Update experiment
*StorefrontApi* | [**updateLibraryItem**](docs/Api/StorefrontApi.md#updatelibraryitem) | **PUT** /storefront/code_library/{library_item_oid} | Update library item. Note that only certain fields may be updated via this method.
*StorefrontApi* | [**updateScreenRecordingMerchantNotes**](docs/Api/StorefrontApi.md#updatescreenrecordingmerchantnotes) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/merchant_notes | Update merchant notes on a screen recording
*StorefrontApi* | [**updateScreenRecordingSegment**](docs/Api/StorefrontApi.md#updatescreenrecordingsegment) | **POST** /storefront/{storefront_oid}/screen_recordings/segments/{screen_recording_segment_oid} | Update screen recording segment
*StorefrontApi* | [**updateScreenRecordingSettings**](docs/Api/StorefrontApi.md#updatescreenrecordingsettings) | **POST** /storefront/{storefront_oid}/screen_recordings/settings | Update screen recording settings
*StorefrontApi* | [**updateScreenRecordingTags**](docs/Api/StorefrontApi.md#updatescreenrecordingtags) | **POST** /storefront/{storefront_oid}/screen_recordings/{screen_recording_uuid}/tags | Update tags on a screen recording
*StorefrontApi* | [**updateTransactionEmail**](docs/Api/StorefrontApi.md#updatetransactionemail) | **PUT** /storefront/{storefront_oid}/transaction_email/list/{email_id} | Updates a transaction email object
*StorefrontApi* | [**updateTwilioAccount**](docs/Api/StorefrontApi.md#updatetwilioaccount) | **PUT** /storefront/twilio/accounts/{esp_twilio_uuid} | Update Twilio account
*StorefrontApi* | [**uploadFsFile**](docs/Api/StorefrontApi.md#uploadfsfile) | **POST** /storefront/{id}/fs/upload | This is the last step in uploading a file after 1) calling getUploadFsFileUrl and 2) uploading a file to the provided url, then finally 3) calling this method and providing the key to trigger the server into reading the S3 bucket and retrieving the file.
*StorefrontApi* | [**validateRuler**](docs/Api/StorefrontApi.md#validateruler) | **POST** /storefront/ruler/validate | Validate AWS Event Ruler
*TaxApi* | [**deleteTaxProviderSelfCity**](docs/Api/TaxApi.md#deletetaxproviderselfcity) | **DELETE** /tax/providers/self/city/{city} | Deletes a Self tax provider city
*TaxApi* | [**deleteTaxProviderSelfCountry**](docs/Api/TaxApi.md#deletetaxproviderselfcountry) | **DELETE** /tax/providers/self/country/{countryCode} | Deletes a Self tax provider country
*TaxApi* | [**deleteTaxProviderSelfCounty**](docs/Api/TaxApi.md#deletetaxproviderselfcounty) | **DELETE** /tax/providers/self/county/{county} | Deletes a Self tax provider county
*TaxApi* | [**deleteTaxProviderSelfPostalCode**](docs/Api/TaxApi.md#deletetaxproviderselfpostalcode) | **DELETE** /tax/providers/self/postalCode/{postal_code} | Deletes a Self tax provider postalCode
*TaxApi* | [**deleteTaxProviderSelfState**](docs/Api/TaxApi.md#deletetaxproviderselfstate) | **DELETE** /tax/providers/self/state/{stateCode} | Deletes a Self tax provider state
*TaxApi* | [**getTaxProviderAvalara**](docs/Api/TaxApi.md#gettaxprovideravalara) | **GET** /tax/providers/avalara | Retrieve the Avalara tax provider
*TaxApi* | [**getTaxProviderAvalaraCompanies**](docs/Api/TaxApi.md#gettaxprovideravalaracompanies) | **POST** /tax/providers/avalara/companies | Returns Avalara Tax companies configured by the merchant
*TaxApi* | [**getTaxProviderAvalaraTest**](docs/Api/TaxApi.md#gettaxprovideravalaratest) | **GET** /tax/providers/avalara/test | Attempts to connect to Avalara and returns back the response
*TaxApi* | [**getTaxProviderSelf**](docs/Api/TaxApi.md#gettaxproviderself) | **GET** /tax/providers/self | Retrieve the Self tax provider
*TaxApi* | [**getTaxProviderSelfCountries**](docs/Api/TaxApi.md#gettaxproviderselfcountries) | **GET** /tax/providers/self/countries | Retrieve the Self tax provider countries
*TaxApi* | [**getTaxProviderSelfRegionsByCountryCode**](docs/Api/TaxApi.md#gettaxproviderselfregionsbycountrycode) | **GET** /tax/providers/self/regions/{countryCode} | Retrieve the Self tax provider regions for a given country code
*TaxApi* | [**getTaxProviderSovos**](docs/Api/TaxApi.md#gettaxprovidersovos) | **GET** /tax/providers/sovos | Retrieve the Sovos tax provider
*TaxApi* | [**getTaxProviderSovosTest**](docs/Api/TaxApi.md#gettaxprovidersovostest) | **GET** /tax/providers/sovos/test | Attempts to connect to Sovos and returns back the response
*TaxApi* | [**getTaxProviderTaxJar**](docs/Api/TaxApi.md#gettaxprovidertaxjar) | **GET** /tax/providers/taxjar | Retrieve the TaxJar tax provider
*TaxApi* | [**getTaxProviderTaxJarTest**](docs/Api/TaxApi.md#gettaxprovidertaxjartest) | **GET** /tax/providers/taxjar/test | Attempts to connect to TaxJar and returns back the response
*TaxApi* | [**getTaxProviderUltraCart**](docs/Api/TaxApi.md#gettaxproviderultracart) | **GET** /tax/providers/ultracart | Retrieve the UltraCart tax provider
*TaxApi* | [**getTaxProviders**](docs/Api/TaxApi.md#gettaxproviders) | **GET** /tax/providers | Retrieve tax methods
*TaxApi* | [**setActiveTaxProvider**](docs/Api/TaxApi.md#setactivetaxprovider) | **POST** /tax/providers/setActive/{providerName} | Toggle a tax provider to active
*TaxApi* | [**updateTaxProviderAvalara**](docs/Api/TaxApi.md#updatetaxprovideravalara) | **POST** /tax/providers/avalara | Update the Avalara tax provider
*TaxApi* | [**updateTaxProviderSelf**](docs/Api/TaxApi.md#updatetaxproviderself) | **POST** /tax/providers/self | Update the Self tax provider
*TaxApi* | [**updateTaxProviderSelfCity**](docs/Api/TaxApi.md#updatetaxproviderselfcity) | **POST** /tax/providers/self/city/{city} | Updates a Self tax provider city
*TaxApi* | [**updateTaxProviderSelfCountry**](docs/Api/TaxApi.md#updatetaxproviderselfcountry) | **POST** /tax/providers/self/country/{countryCode} | Updates a Self tax provider country
*TaxApi* | [**updateTaxProviderSelfCounty**](docs/Api/TaxApi.md#updatetaxproviderselfcounty) | **POST** /tax/providers/self/county/{county} | Updates a Self tax provider county
*TaxApi* | [**updateTaxProviderSelfPostalCode**](docs/Api/TaxApi.md#updatetaxproviderselfpostalcode) | **POST** /tax/providers/self/postalCode/{postal_code} | Updates a Self tax provider postalCode
*TaxApi* | [**updateTaxProviderSelfState**](docs/Api/TaxApi.md#updatetaxproviderselfstate) | **POST** /tax/providers/self/state/{stateCode} | Updates a Self tax provider state
*TaxApi* | [**updateTaxProviderSovos**](docs/Api/TaxApi.md#updatetaxprovidersovos) | **POST** /tax/providers/sovos | Update the Sovos tax provider
*TaxApi* | [**updateTaxProviderTaxJar**](docs/Api/TaxApi.md#updatetaxprovidertaxjar) | **POST** /tax/providers/taxjar | Update the TaxJar tax provider
*TaxApi* | [**updateTaxProviderUltraCart**](docs/Api/TaxApi.md#updatetaxproviderultracart) | **POST** /tax/providers/ultracart | Update the UltraCart tax provider
*UserApi* | [**deleteGroup**](docs/Api/UserApi.md#deletegroup) | **DELETE** /user/groups/{group_oid} | Delete a group
*UserApi* | [**deleteUser**](docs/Api/UserApi.md#deleteuser) | **DELETE** /user/users/{user_id} | Delete a user
*UserApi* | [**getGroup**](docs/Api/UserApi.md#getgroup) | **GET** /user/groups/{group_oid} | Retrieve a group
*UserApi* | [**getGroups**](docs/Api/UserApi.md#getgroups) | **GET** /user/groups | Get groups
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /user/users/{user_id} | Retrieve a user
*UserApi* | [**getUserLogins**](docs/Api/UserApi.md#getuserlogins) | **GET** /user/users/{user_id}/logins | Retrieve a user&#39;s login history
*UserApi* | [**getUsers**](docs/Api/UserApi.md#getusers) | **GET** /user/users | Get users
*UserApi* | [**insertGroup**](docs/Api/UserApi.md#insertgroup) | **POST** /user/groups | Insert a group
*UserApi* | [**insertUser**](docs/Api/UserApi.md#insertuser) | **POST** /user/users | Insert a user
*UserApi* | [**updateGroup**](docs/Api/UserApi.md#updategroup) | **PUT** /user/groups/{group_oid} | Update a group
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PUT** /user/users/{user_id} | Update a user
*WebhookApi* | [**deleteWebhook**](docs/Api/WebhookApi.md#deletewebhook) | **DELETE** /webhook/webhooks/{webhookOid} | Delete a webhook
*WebhookApi* | [**deleteWebhookByUrl**](docs/Api/WebhookApi.md#deletewebhookbyurl) | **DELETE** /webhook/webhooks | Delete a webhook by URL
*WebhookApi* | [**getWebhookLog**](docs/Api/WebhookApi.md#getwebhooklog) | **GET** /webhook/webhooks/{webhookOid}/logs/{requestId} | Retrieve an individual log
*WebhookApi* | [**getWebhookLogSummaries**](docs/Api/WebhookApi.md#getwebhooklogsummaries) | **GET** /webhook/webhooks/{webhookOid}/logs | Retrieve the log summaries
*WebhookApi* | [**getWebhooks**](docs/Api/WebhookApi.md#getwebhooks) | **GET** /webhook/webhooks | Retrieve webhooks
*WebhookApi* | [**insertWebhook**](docs/Api/WebhookApi.md#insertwebhook) | **POST** /webhook/webhooks | Add a webhook
*WebhookApi* | [**resendEvent**](docs/Api/WebhookApi.md#resendevent) | **POST** /webhook/webhooks/{webhookOid}/reflow/{eventName} | Resend events to the webhook endpoint.
*WebhookApi* | [**updateWebhook**](docs/Api/WebhookApi.md#updatewebhook) | **PUT** /webhook/webhooks/{webhookOid} | Update a webhook
*WorkflowApi* | [**getWorkflowAgentWebsocketAuthorization**](docs/Api/WorkflowApi.md#getworkflowagentwebsocketauthorization) | **PUT** /workflow/agent/auth | Get agent websocket authorization
*WorkflowApi* | [**getWorkflowAssignmentGroups**](docs/Api/WorkflowApi.md#getworkflowassignmentgroups) | **GET** /workflow/assignment_groups | Retrieve a list of groups that workflow tasks can be assigned to
*WorkflowApi* | [**getWorkflowAssignmentUsers**](docs/Api/WorkflowApi.md#getworkflowassignmentusers) | **GET** /workflow/assignment_users | Retrieve a list of users that workflow tasks can be assigned to
*WorkflowApi* | [**getWorkflowMe**](docs/Api/WorkflowApi.md#getworkflowme) | **GET** /workflow/me | Retrieve a user object for myself
*WorkflowApi* | [**getWorkflowTask**](docs/Api/WorkflowApi.md#getworkflowtask) | **GET** /workflow/tasks/{task_uuid} | Retrieve a workflow task
*WorkflowApi* | [**getWorkflowTaskAttachmentUploadUrl**](docs/Api/WorkflowApi.md#getworkflowtaskattachmentuploadurl) | **GET** /workflow/tasks/attachments/{extension} | Get a presigned workflow task attachment upload URL
*WorkflowApi* | [**getWorkflowTaskByObjectType**](docs/Api/WorkflowApi.md#getworkflowtaskbyobjecttype) | **GET** /workflow/tasks/by/{object_type}/{object_id} | Retrieve a workflow task by object type and id
*WorkflowApi* | [**getWorkflowTaskOpenCount**](docs/Api/WorkflowApi.md#getworkflowtaskopencount) | **GET** /workflow/tasks/open_count | Retrieve workflow task open count
*WorkflowApi* | [**getWorkflowTaskTags**](docs/Api/WorkflowApi.md#getworkflowtasktags) | **GET** /workflow/tasks/tags | Get a list of existing workflow task tags
*WorkflowApi* | [**getWorkflowTasks**](docs/Api/WorkflowApi.md#getworkflowtasks) | **POST** /workflow/tasks/search | Search workflow tasks
*WorkflowApi* | [**insertWorkflowTask**](docs/Api/WorkflowApi.md#insertworkflowtask) | **POST** /workflow/tasks | Insert a workflow task
*WorkflowApi* | [**updateWorkflowTask**](docs/Api/WorkflowApi.md#updateworkflowtask) | **PUT** /workflow/tasks/{task_uuid} | Update a workflow task

## Models

- [AccountsReceivableRetryConfig](docs/Model/AccountsReceivableRetryConfig.md)
- [AccountsReceivableRetryConfigResponse](docs/Model/AccountsReceivableRetryConfigResponse.md)
- [AccountsReceivableRetryDayActivity](docs/Model/AccountsReceivableRetryDayActivity.md)
- [AccountsReceivableRetryStatAccount](docs/Model/AccountsReceivableRetryStatAccount.md)
- [AccountsReceivableRetryStatMetrics](docs/Model/AccountsReceivableRetryStatMetrics.md)
- [AccountsReceivableRetryStatRevenue](docs/Model/AccountsReceivableRetryStatRevenue.md)
- [AccountsReceivableRetryStatsResponse](docs/Model/AccountsReceivableRetryStatsResponse.md)
- [AccountsReceivableRetryTransactionReject](docs/Model/AccountsReceivableRetryTransactionReject.md)
- [Activity](docs/Model/Activity.md)
- [AddLibraryItemRequest](docs/Model/AddLibraryItemRequest.md)
- [AdjustInternalCertificateRequest](docs/Model/AdjustInternalCertificateRequest.md)
- [AdjustInternalCertificateResponse](docs/Model/AdjustInternalCertificateResponse.md)
- [AffiliateClick](docs/Model/AffiliateClick.md)
- [AffiliateClickQuery](docs/Model/AffiliateClickQuery.md)
- [AffiliateClicksResponse](docs/Model/AffiliateClicksResponse.md)
- [AffiliateLedger](docs/Model/AffiliateLedger.md)
- [AffiliateLedgerQuery](docs/Model/AffiliateLedgerQuery.md)
- [AffiliateLedgersResponse](docs/Model/AffiliateLedgersResponse.md)
- [AffiliateLink](docs/Model/AffiliateLink.md)
- [ApiUserApplicationProfile](docs/Model/ApiUserApplicationProfile.md)
- [ApplyLibraryItemRequest](docs/Model/ApplyLibraryItemRequest.md)
- [ApplyLibraryItemResponse](docs/Model/ApplyLibraryItemResponse.md)
- [AutoOrder](docs/Model/AutoOrder.md)
- [AutoOrderAddonItem](docs/Model/AutoOrderAddonItem.md)
- [AutoOrderAddonItemOption](docs/Model/AutoOrderAddonItemOption.md)
- [AutoOrderConsolidate](docs/Model/AutoOrderConsolidate.md)
- [AutoOrderItem](docs/Model/AutoOrderItem.md)
- [AutoOrderItemFutureSchedule](docs/Model/AutoOrderItemFutureSchedule.md)
- [AutoOrderItemOption](docs/Model/AutoOrderItemOption.md)
- [AutoOrderItemSimpleSchedule](docs/Model/AutoOrderItemSimpleSchedule.md)
- [AutoOrderLog](docs/Model/AutoOrderLog.md)
- [AutoOrderManagement](docs/Model/AutoOrderManagement.md)
- [AutoOrderQuery](docs/Model/AutoOrderQuery.md)
- [AutoOrderQueryBatch](docs/Model/AutoOrderQueryBatch.md)
- [AutoOrderResponse](docs/Model/AutoOrderResponse.md)
- [AutoOrdersRequest](docs/Model/AutoOrdersRequest.md)
- [AutoOrdersResponse](docs/Model/AutoOrdersResponse.md)
- [AvalaraConfig](docs/Model/AvalaraConfig.md)
- [BaseResponse](docs/Model/BaseResponse.md)
- [Browser](docs/Model/Browser.md)
- [BrowserDevice](docs/Model/BrowserDevice.md)
- [BrowserOS](docs/Model/BrowserOS.md)
- [BrowserUserAgent](docs/Model/BrowserUserAgent.md)
- [Cart](docs/Model/Cart.md)
- [CartAffiliate](docs/Model/CartAffiliate.md)
- [CartAffirmCheckoutResponse](docs/Model/CartAffirmCheckoutResponse.md)
- [CartBilling](docs/Model/CartBilling.md)
- [CartBuysafe](docs/Model/CartBuysafe.md)
- [CartCheckout](docs/Model/CartCheckout.md)
- [CartCoupon](docs/Model/CartCoupon.md)
- [CartCurrencyConversion](docs/Model/CartCurrencyConversion.md)
- [CartCustomerProfile](docs/Model/CartCustomerProfile.md)
- [CartCustomerProfileAddress](docs/Model/CartCustomerProfileAddress.md)
- [CartCustomerProfileCreditCard](docs/Model/CartCustomerProfileCreditCard.md)
- [CartFinalizeOrderRequest](docs/Model/CartFinalizeOrderRequest.md)
- [CartFinalizeOrderRequestOptions](docs/Model/CartFinalizeOrderRequestOptions.md)
- [CartFinalizeOrderResponse](docs/Model/CartFinalizeOrderResponse.md)
- [CartGift](docs/Model/CartGift.md)
- [CartGiftCertificate](docs/Model/CartGiftCertificate.md)
- [CartItem](docs/Model/CartItem.md)
- [CartItemAttribute](docs/Model/CartItemAttribute.md)
- [CartItemMultimedia](docs/Model/CartItemMultimedia.md)
- [CartItemMultimediaThumbnail](docs/Model/CartItemMultimediaThumbnail.md)
- [CartItemOption](docs/Model/CartItemOption.md)
- [CartItemOptionValue](docs/Model/CartItemOptionValue.md)
- [CartItemPhysical](docs/Model/CartItemPhysical.md)
- [CartItemProperty](docs/Model/CartItemProperty.md)
- [CartItemVariationSelection](docs/Model/CartItemVariationSelection.md)
- [CartKitComponentOption](docs/Model/CartKitComponentOption.md)
- [CartMarketing](docs/Model/CartMarketing.md)
- [CartPayment](docs/Model/CartPayment.md)
- [CartPaymentAffirm](docs/Model/CartPaymentAffirm.md)
- [CartPaymentAmazon](docs/Model/CartPaymentAmazon.md)
- [CartPaymentCheck](docs/Model/CartPaymentCheck.md)
- [CartPaymentCreditCard](docs/Model/CartPaymentCreditCard.md)
- [CartPaymentHealthBenefitCard](docs/Model/CartPaymentHealthBenefitCard.md)
- [CartPaymentPurchaseOrder](docs/Model/CartPaymentPurchaseOrder.md)
- [CartProfileLoginRequest](docs/Model/CartProfileLoginRequest.md)
- [CartProfileLoginResponse](docs/Model/CartProfileLoginResponse.md)
- [CartProfileRegisterRequest](docs/Model/CartProfileRegisterRequest.md)
- [CartProfileRegisterResponse](docs/Model/CartProfileRegisterResponse.md)
- [CartProperty](docs/Model/CartProperty.md)
- [CartResponse](docs/Model/CartResponse.md)
- [CartSettings](docs/Model/CartSettings.md)
- [CartSettingsBilling](docs/Model/CartSettingsBilling.md)
- [CartSettingsGift](docs/Model/CartSettingsGift.md)
- [CartSettingsGiftWrap](docs/Model/CartSettingsGiftWrap.md)
- [CartSettingsPayment](docs/Model/CartSettingsPayment.md)
- [CartSettingsPaymentAmazon](docs/Model/CartSettingsPaymentAmazon.md)
- [CartSettingsPaymentCreditCard](docs/Model/CartSettingsPaymentCreditCard.md)
- [CartSettingsPaymentPayPal](docs/Model/CartSettingsPaymentPayPal.md)
- [CartSettingsProvince](docs/Model/CartSettingsProvince.md)
- [CartSettingsShipping](docs/Model/CartSettingsShipping.md)
- [CartSettingsShippingCalendar](docs/Model/CartSettingsShippingCalendar.md)
- [CartSettingsShippingEstimate](docs/Model/CartSettingsShippingEstimate.md)
- [CartSettingsTaxes](docs/Model/CartSettingsTaxes.md)
- [CartSettingsTerms](docs/Model/CartSettingsTerms.md)
- [CartShipping](docs/Model/CartShipping.md)
- [CartSummary](docs/Model/CartSummary.md)
- [CartTaxes](docs/Model/CartTaxes.md)
- [CartUpsellAfter](docs/Model/CartUpsellAfter.md)
- [CartValidationRequest](docs/Model/CartValidationRequest.md)
- [CartValidationResponse](docs/Model/CartValidationResponse.md)
- [ChanelPartnerReasonCodesResponse](docs/Model/ChanelPartnerReasonCodesResponse.md)
- [ChannelPartner](docs/Model/ChannelPartner.md)
- [ChannelPartnerCancelResponse](docs/Model/ChannelPartnerCancelResponse.md)
- [ChannelPartnerEstimateShippingResponse](docs/Model/ChannelPartnerEstimateShippingResponse.md)
- [ChannelPartnerEstimateTaxResponse](docs/Model/ChannelPartnerEstimateTaxResponse.md)
- [ChannelPartnerImportResponse](docs/Model/ChannelPartnerImportResponse.md)
- [ChannelPartnerOrder](docs/Model/ChannelPartnerOrder.md)
- [ChannelPartnerOrderItem](docs/Model/ChannelPartnerOrderItem.md)
- [ChannelPartnerOrderItemOption](docs/Model/ChannelPartnerOrderItemOption.md)
- [ChannelPartnerOrderItemProperty](docs/Model/ChannelPartnerOrderItemProperty.md)
- [ChannelPartnerOrderTransaction](docs/Model/ChannelPartnerOrderTransaction.md)
- [ChannelPartnerOrderTransactionDetail](docs/Model/ChannelPartnerOrderTransactionDetail.md)
- [ChannelPartnerShipToPreference](docs/Model/ChannelPartnerShipToPreference.md)
- [ChannelPartnerShipToPreferenceResponse](docs/Model/ChannelPartnerShipToPreferenceResponse.md)
- [ChannelPartnerShipToPreferencesResponse](docs/Model/ChannelPartnerShipToPreferencesResponse.md)
- [ChannelPartnerShippingEstimate](docs/Model/ChannelPartnerShippingEstimate.md)
- [ChannelPartnersResponse](docs/Model/ChannelPartnersResponse.md)
- [ChargebackDispute](docs/Model/ChargebackDispute.md)
- [ChargebackDisputeResponse](docs/Model/ChargebackDisputeResponse.md)
- [ChargebackDisputesResponse](docs/Model/ChargebackDisputesResponse.md)
- [CheckoutAllowedCountriesResponse](docs/Model/CheckoutAllowedCountriesResponse.md)
- [CheckoutHandoffRequest](docs/Model/CheckoutHandoffRequest.md)
- [CheckoutHandoffResponse](docs/Model/CheckoutHandoffResponse.md)
- [CheckoutSetupBrowserKeyRequest](docs/Model/CheckoutSetupBrowserKeyRequest.md)
- [CheckoutSetupBrowserKeyResponse](docs/Model/CheckoutSetupBrowserKeyResponse.md)
- [CheckoutStateProvinceResponse](docs/Model/CheckoutStateProvinceResponse.md)
- [CityStateZip](docs/Model/CityStateZip.md)
- [Conversation](docs/Model/Conversation.md)
- [ConversationAgentAuth](docs/Model/ConversationAgentAuth.md)
- [ConversationAgentAuthResponse](docs/Model/ConversationAgentAuthResponse.md)
- [ConversationAgentProfile](docs/Model/ConversationAgentProfile.md)
- [ConversationAgentProfileResponse](docs/Model/ConversationAgentProfileResponse.md)
- [ConversationAgentProfilesResponse](docs/Model/ConversationAgentProfilesResponse.md)
- [ConversationAutocompleteRequest](docs/Model/ConversationAutocompleteRequest.md)
- [ConversationAutocompleteResponse](docs/Model/ConversationAutocompleteResponse.md)
- [ConversationAutocompleteValue](docs/Model/ConversationAutocompleteValue.md)
- [ConversationCannedMessage](docs/Model/ConversationCannedMessage.md)
- [ConversationCannedMessageResponse](docs/Model/ConversationCannedMessageResponse.md)
- [ConversationCannedMessagesResponse](docs/Model/ConversationCannedMessagesResponse.md)
- [ConversationCannedMessagesSearch](docs/Model/ConversationCannedMessagesSearch.md)
- [ConversationDepartment](docs/Model/ConversationDepartment.md)
- [ConversationDepartmentMember](docs/Model/ConversationDepartmentMember.md)
- [ConversationDepartmentMembersResponse](docs/Model/ConversationDepartmentMembersResponse.md)
- [ConversationDepartmentResponse](docs/Model/ConversationDepartmentResponse.md)
- [ConversationDepartmentsResponse](docs/Model/ConversationDepartmentsResponse.md)
- [ConversationEngagement](docs/Model/ConversationEngagement.md)
- [ConversationEngagementEquation](docs/Model/ConversationEngagementEquation.md)
- [ConversationEngagementEquationFunction](docs/Model/ConversationEngagementEquationFunction.md)
- [ConversationEngagementEquationGroup](docs/Model/ConversationEngagementEquationGroup.md)
- [ConversationEngagementResponse](docs/Model/ConversationEngagementResponse.md)
- [ConversationEngagementsResponse](docs/Model/ConversationEngagementsResponse.md)
- [ConversationEventAddCoupon](docs/Model/ConversationEventAddCoupon.md)
- [ConversationEventAddItem](docs/Model/ConversationEventAddItem.md)
- [ConversationEventQueuePosition](docs/Model/ConversationEventQueuePosition.md)
- [ConversationEventRRWeb](docs/Model/ConversationEventRRWeb.md)
- [ConversationEventReadMessage](docs/Model/ConversationEventReadMessage.md)
- [ConversationEventTyping](docs/Model/ConversationEventTyping.md)
- [ConversationEventWebchatContext](docs/Model/ConversationEventWebchatContext.md)
- [ConversationJoinRequest](docs/Model/ConversationJoinRequest.md)
- [ConversationLocationCountry](docs/Model/ConversationLocationCountry.md)
- [ConversationLocationStateProvince](docs/Model/ConversationLocationStateProvince.md)
- [ConversationLocationsResponse](docs/Model/ConversationLocationsResponse.md)
- [ConversationMessage](docs/Model/ConversationMessage.md)
- [ConversationMessageTranslation](docs/Model/ConversationMessageTranslation.md)
- [ConversationMessageTransportStatus](docs/Model/ConversationMessageTransportStatus.md)
- [ConversationMessagesResponse](docs/Model/ConversationMessagesResponse.md)
- [ConversationMultimediaUploadUrl](docs/Model/ConversationMultimediaUploadUrl.md)
- [ConversationMultimediaUploadUrlResponse](docs/Model/ConversationMultimediaUploadUrlResponse.md)
- [ConversationParticipant](docs/Model/ConversationParticipant.md)
- [ConversationPbxAgent](docs/Model/ConversationPbxAgent.md)
- [ConversationPbxAgentResponse](docs/Model/ConversationPbxAgentResponse.md)
- [ConversationPbxAgentsResponse](docs/Model/ConversationPbxAgentsResponse.md)
- [ConversationPbxAudio](docs/Model/ConversationPbxAudio.md)
- [ConversationPbxAudioResponse](docs/Model/ConversationPbxAudioResponse.md)
- [ConversationPbxAudioUploadUrl](docs/Model/ConversationPbxAudioUploadUrl.md)
- [ConversationPbxAudioUploadUrlResponse](docs/Model/ConversationPbxAudioUploadUrlResponse.md)
- [ConversationPbxAudioUsageResponse](docs/Model/ConversationPbxAudioUsageResponse.md)
- [ConversationPbxAudiosResponse](docs/Model/ConversationPbxAudiosResponse.md)
- [ConversationPbxCustomerSnapshotRequest](docs/Model/ConversationPbxCustomerSnapshotRequest.md)
- [ConversationPbxCustomerSnapshotResponse](docs/Model/ConversationPbxCustomerSnapshotResponse.md)
- [ConversationPbxMenu](docs/Model/ConversationPbxMenu.md)
- [ConversationPbxMenuMapping](docs/Model/ConversationPbxMenuMapping.md)
- [ConversationPbxMenuResponse](docs/Model/ConversationPbxMenuResponse.md)
- [ConversationPbxMenusResponse](docs/Model/ConversationPbxMenusResponse.md)
- [ConversationPbxPhoneNumber](docs/Model/ConversationPbxPhoneNumber.md)
- [ConversationPbxPhoneNumberResponse](docs/Model/ConversationPbxPhoneNumberResponse.md)
- [ConversationPbxPhoneNumbersResponse](docs/Model/ConversationPbxPhoneNumbersResponse.md)
- [ConversationPbxQueue](docs/Model/ConversationPbxQueue.md)
- [ConversationPbxQueueMembers](docs/Model/ConversationPbxQueueMembers.md)
- [ConversationPbxQueueResponse](docs/Model/ConversationPbxQueueResponse.md)
- [ConversationPbxQueuesResponse](docs/Model/ConversationPbxQueuesResponse.md)
- [ConversationPbxTimeBased](docs/Model/ConversationPbxTimeBased.md)
- [ConversationPbxTimeBasedMapping](docs/Model/ConversationPbxTimeBasedMapping.md)
- [ConversationPbxTimeBasedMappingConfig](docs/Model/ConversationPbxTimeBasedMappingConfig.md)
- [ConversationPbxTimeBasedResponse](docs/Model/ConversationPbxTimeBasedResponse.md)
- [ConversationPbxTimeBasedsResponse](docs/Model/ConversationPbxTimeBasedsResponse.md)
- [ConversationPbxTimeRange](docs/Model/ConversationPbxTimeRange.md)
- [ConversationPbxTimeRangeConfig](docs/Model/ConversationPbxTimeRangeConfig.md)
- [ConversationPbxTimeRangeResponse](docs/Model/ConversationPbxTimeRangeResponse.md)
- [ConversationPbxTimeRangesResponse](docs/Model/ConversationPbxTimeRangesResponse.md)
- [ConversationPbxVoicemailMailbox](docs/Model/ConversationPbxVoicemailMailbox.md)
- [ConversationPbxVoicemailMailboxResponse](docs/Model/ConversationPbxVoicemailMailboxResponse.md)
- [ConversationPbxVoicemailMailboxesResponse](docs/Model/ConversationPbxVoicemailMailboxesResponse.md)
- [ConversationPbxVoicemailMessage](docs/Model/ConversationPbxVoicemailMessage.md)
- [ConversationPbxVoicemailMessageResponse](docs/Model/ConversationPbxVoicemailMessageResponse.md)
- [ConversationPbxVoicemailMessageSummariesResponse](docs/Model/ConversationPbxVoicemailMessageSummariesResponse.md)
- [ConversationPbxVoicemailMessageSummary](docs/Model/ConversationPbxVoicemailMessageSummary.md)
- [ConversationPermissions](docs/Model/ConversationPermissions.md)
- [ConversationPermissionsResponse](docs/Model/ConversationPermissionsResponse.md)
- [ConversationResponse](docs/Model/ConversationResponse.md)
- [ConversationSearchRequest](docs/Model/ConversationSearchRequest.md)
- [ConversationSearchResponse](docs/Model/ConversationSearchResponse.md)
- [ConversationSentiment](docs/Model/ConversationSentiment.md)
- [ConversationStartRequest](docs/Model/ConversationStartRequest.md)
- [ConversationStartResponse](docs/Model/ConversationStartResponse.md)
- [ConversationSummary](docs/Model/ConversationSummary.md)
- [ConversationTwilioAccount](docs/Model/ConversationTwilioAccount.md)
- [ConversationVirtualAgentBudget](docs/Model/ConversationVirtualAgentBudget.md)
- [ConversationVirtualAgentBudgetResponse](docs/Model/ConversationVirtualAgentBudgetResponse.md)
- [ConversationVirtualAgentCapabilities](docs/Model/ConversationVirtualAgentCapabilities.md)
- [ConversationVirtualAgentCapabilitiesResponse](docs/Model/ConversationVirtualAgentCapabilitiesResponse.md)
- [ConversationVirtualAgentCapabilityZohoDeskDepartment](docs/Model/ConversationVirtualAgentCapabilityZohoDeskDepartment.md)
- [ConversationWebchatContext](docs/Model/ConversationWebchatContext.md)
- [ConversationWebchatQueueStatus](docs/Model/ConversationWebchatQueueStatus.md)
- [ConversationWebchatQueueStatusAgent](docs/Model/ConversationWebchatQueueStatusAgent.md)
- [ConversationWebchatQueueStatusQueueEntry](docs/Model/ConversationWebchatQueueStatusQueueEntry.md)
- [ConversationWebchatQueueStatusUpdateRequest](docs/Model/ConversationWebchatQueueStatusUpdateRequest.md)
- [ConversationWebchatQueueStatusesResponse](docs/Model/ConversationWebchatQueueStatusesResponse.md)
- [ConversationWebsocketMessage](docs/Model/ConversationWebsocketMessage.md)
- [ConversationsResponse](docs/Model/ConversationsResponse.md)
- [CountriesResponse](docs/Model/CountriesResponse.md)
- [Country](docs/Model/Country.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponAmountOffItems](docs/Model/CouponAmountOffItems.md)
- [CouponAmountOffShipping](docs/Model/CouponAmountOffShipping.md)
- [CouponAmountOffShippingWithItemsPurchase](docs/Model/CouponAmountOffShippingWithItemsPurchase.md)
- [CouponAmountOffSubtotal](docs/Model/CouponAmountOffSubtotal.md)
- [CouponAmountOffSubtotalAndShipping](docs/Model/CouponAmountOffSubtotalAndShipping.md)
- [CouponAmountOffSubtotalFreeShippingWithPurchase](docs/Model/CouponAmountOffSubtotalFreeShippingWithPurchase.md)
- [CouponAmountOffSubtotalWithBlockPurchase](docs/Model/CouponAmountOffSubtotalWithBlockPurchase.md)
- [CouponAmountOffSubtotalWithItemsPurchase](docs/Model/CouponAmountOffSubtotalWithItemsPurchase.md)
- [CouponAmountOffSubtotalWithPurchase](docs/Model/CouponAmountOffSubtotalWithPurchase.md)
- [CouponAmountShippingWithSubtotal](docs/Model/CouponAmountShippingWithSubtotal.md)
- [CouponAutoApplyCondition](docs/Model/CouponAutoApplyCondition.md)
- [CouponAutoApplyConditions](docs/Model/CouponAutoApplyConditions.md)
- [CouponAutomaticallyApplyCouponCodes](docs/Model/CouponAutomaticallyApplyCouponCodes.md)
- [CouponBuyOneGetOneLimit](docs/Model/CouponBuyOneGetOneLimit.md)
- [CouponCodesRequest](docs/Model/CouponCodesRequest.md)
- [CouponCodesResponse](docs/Model/CouponCodesResponse.md)
- [CouponDeletesRequest](docs/Model/CouponDeletesRequest.md)
- [CouponDiscountItemWithItemPurchase](docs/Model/CouponDiscountItemWithItemPurchase.md)
- [CouponDiscountItems](docs/Model/CouponDiscountItems.md)
- [CouponEditorValues](docs/Model/CouponEditorValues.md)
- [CouponExistsResponse](docs/Model/CouponExistsResponse.md)
- [CouponFreeItemAndShippingWithSubtotal](docs/Model/CouponFreeItemAndShippingWithSubtotal.md)
- [CouponFreeItemWithItemPurchase](docs/Model/CouponFreeItemWithItemPurchase.md)
- [CouponFreeItemWithItemPurchaseAndFreeShipping](docs/Model/CouponFreeItemWithItemPurchaseAndFreeShipping.md)
- [CouponFreeItemWithSubtotal](docs/Model/CouponFreeItemWithSubtotal.md)
- [CouponFreeItemsWithItemPurchase](docs/Model/CouponFreeItemsWithItemPurchase.md)
- [CouponFreeItemsWithMixMatchPurchase](docs/Model/CouponFreeItemsWithMixMatchPurchase.md)
- [CouponFreeShipping](docs/Model/CouponFreeShipping.md)
- [CouponFreeShippingSpecificItems](docs/Model/CouponFreeShippingSpecificItems.md)
- [CouponFreeShippingWithItemsPurchase](docs/Model/CouponFreeShippingWithItemsPurchase.md)
- [CouponFreeShippingWithSubtotal](docs/Model/CouponFreeShippingWithSubtotal.md)
- [CouponItemSearchResult](docs/Model/CouponItemSearchResult.md)
- [CouponItemSearchResultsResponse](docs/Model/CouponItemSearchResultsResponse.md)
- [CouponMoreLoyaltyCashback](docs/Model/CouponMoreLoyaltyCashback.md)
- [CouponMoreLoyaltyPoints](docs/Model/CouponMoreLoyaltyPoints.md)
- [CouponMultipleAmountsOffItems](docs/Model/CouponMultipleAmountsOffItems.md)
- [CouponNoDiscount](docs/Model/CouponNoDiscount.md)
- [CouponPercentMoreLoyaltyCashback](docs/Model/CouponPercentMoreLoyaltyCashback.md)
- [CouponPercentMoreLoyaltyPoints](docs/Model/CouponPercentMoreLoyaltyPoints.md)
- [CouponPercentOffItemWithItemsQuantityPurchase](docs/Model/CouponPercentOffItemWithItemsQuantityPurchase.md)
- [CouponPercentOffItems](docs/Model/CouponPercentOffItems.md)
- [CouponPercentOffItemsAndFreeShipping](docs/Model/CouponPercentOffItemsAndFreeShipping.md)
- [CouponPercentOffItemsWithItemsPurchase](docs/Model/CouponPercentOffItemsWithItemsPurchase.md)
- [CouponPercentOffMsrpItems](docs/Model/CouponPercentOffMsrpItems.md)
- [CouponPercentOffRetailPriceItems](docs/Model/CouponPercentOffRetailPriceItems.md)
- [CouponPercentOffShipping](docs/Model/CouponPercentOffShipping.md)
- [CouponPercentOffSubtotal](docs/Model/CouponPercentOffSubtotal.md)
- [CouponPercentOffSubtotalAndFreeShipping](docs/Model/CouponPercentOffSubtotalAndFreeShipping.md)
- [CouponPercentOffSubtotalLimit](docs/Model/CouponPercentOffSubtotalLimit.md)
- [CouponPercentOffSubtotalWithItemsPurchase](docs/Model/CouponPercentOffSubtotalWithItemsPurchase.md)
- [CouponPercentOffSubtotalWithSubtotal](docs/Model/CouponPercentOffSubtotalWithSubtotal.md)
- [CouponQuery](docs/Model/CouponQuery.md)
- [CouponResponse](docs/Model/CouponResponse.md)
- [CouponRestriction](docs/Model/CouponRestriction.md)
- [CouponTierAmount](docs/Model/CouponTierAmount.md)
- [CouponTierItemDiscount](docs/Model/CouponTierItemDiscount.md)
- [CouponTierPercent](docs/Model/CouponTierPercent.md)
- [CouponTierQuantityAmount](docs/Model/CouponTierQuantityAmount.md)
- [CouponTierQuantityPercent](docs/Model/CouponTierQuantityPercent.md)
- [CouponTieredAmountOffItems](docs/Model/CouponTieredAmountOffItems.md)
- [CouponTieredAmountOffSubtotal](docs/Model/CouponTieredAmountOffSubtotal.md)
- [CouponTieredPercentOffItems](docs/Model/CouponTieredPercentOffItems.md)
- [CouponTieredPercentOffShipping](docs/Model/CouponTieredPercentOffShipping.md)
- [CouponTieredPercentOffSubtotal](docs/Model/CouponTieredPercentOffSubtotal.md)
- [CouponTieredPercentOffSubtotalBasedOnMSRP](docs/Model/CouponTieredPercentOffSubtotalBasedOnMSRP.md)
- [CouponType](docs/Model/CouponType.md)
- [CouponsRequest](docs/Model/CouponsRequest.md)
- [CouponsResponse](docs/Model/CouponsResponse.md)
- [Currency](docs/Model/Currency.md)
- [CustomDashboard](docs/Model/CustomDashboard.md)
- [CustomDashboardExecutionParameter](docs/Model/CustomDashboardExecutionParameter.md)
- [CustomDashboardPage](docs/Model/CustomDashboardPage.md)
- [CustomDashboardPageReport](docs/Model/CustomDashboardPageReport.md)
- [CustomDashboardResponse](docs/Model/CustomDashboardResponse.md)
- [CustomDashboardsResponse](docs/Model/CustomDashboardsResponse.md)
- [CustomReport](docs/Model/CustomReport.md)
- [CustomReportAccountConfig](docs/Model/CustomReportAccountConfig.md)
- [CustomReportAccountConfigResponse](docs/Model/CustomReportAccountConfigResponse.md)
- [CustomReportExecutionParameter](docs/Model/CustomReportExecutionParameter.md)
- [CustomReportExecutionRequest](docs/Model/CustomReportExecutionRequest.md)
- [CustomReportExecutionResponse](docs/Model/CustomReportExecutionResponse.md)
- [CustomReportParameter](docs/Model/CustomReportParameter.md)
- [CustomReportParameterOption](docs/Model/CustomReportParameterOption.md)
- [CustomReportQuery](docs/Model/CustomReportQuery.md)
- [CustomReportResponse](docs/Model/CustomReportResponse.md)
- [CustomReportTooltip](docs/Model/CustomReportTooltip.md)
- [CustomReportsExecutionReportData](docs/Model/CustomReportsExecutionReportData.md)
- [CustomReportsExecutionRequest](docs/Model/CustomReportsExecutionRequest.md)
- [CustomReportsExecutionResponse](docs/Model/CustomReportsExecutionResponse.md)
- [CustomReportsResponse](docs/Model/CustomReportsResponse.md)
- [Customer](docs/Model/Customer.md)
- [CustomerActivity](docs/Model/CustomerActivity.md)
- [CustomerAffiliate](docs/Model/CustomerAffiliate.md)
- [CustomerAttachment](docs/Model/CustomerAttachment.md)
- [CustomerBilling](docs/Model/CustomerBilling.md)
- [CustomerCard](docs/Model/CustomerCard.md)
- [CustomerEDI](docs/Model/CustomerEDI.md)
- [CustomerEditorValues](docs/Model/CustomerEditorValues.md)
- [CustomerEmail](docs/Model/CustomerEmail.md)
- [CustomerEmailListChanges](docs/Model/CustomerEmailListChanges.md)
- [CustomerLoyalty](docs/Model/CustomerLoyalty.md)
- [CustomerLoyaltyLedger](docs/Model/CustomerLoyaltyLedger.md)
- [CustomerLoyaltyRedemption](docs/Model/CustomerLoyaltyRedemption.md)
- [CustomerMagicLinkResponse](docs/Model/CustomerMagicLinkResponse.md)
- [CustomerMergeRequest](docs/Model/CustomerMergeRequest.md)
- [CustomerOrdersSummary](docs/Model/CustomerOrdersSummary.md)
- [CustomerPricingTier](docs/Model/CustomerPricingTier.md)
- [CustomerPrivacy](docs/Model/CustomerPrivacy.md)
- [CustomerProperty](docs/Model/CustomerProperty.md)
- [CustomerQuery](docs/Model/CustomerQuery.md)
- [CustomerQuotesSummary](docs/Model/CustomerQuotesSummary.md)
- [CustomerResponse](docs/Model/CustomerResponse.md)
- [CustomerReviewer](docs/Model/CustomerReviewer.md)
- [CustomerShipping](docs/Model/CustomerShipping.md)
- [CustomerSoftwareEntitlement](docs/Model/CustomerSoftwareEntitlement.md)
- [CustomerStoreCredit](docs/Model/CustomerStoreCredit.md)
- [CustomerStoreCreditAddRequest](docs/Model/CustomerStoreCreditAddRequest.md)
- [CustomerStoreCreditLedgerEntry](docs/Model/CustomerStoreCreditLedgerEntry.md)
- [CustomerStoreCreditResponse](docs/Model/CustomerStoreCreditResponse.md)
- [CustomerTag](docs/Model/CustomerTag.md)
- [CustomerTaxCodes](docs/Model/CustomerTaxCodes.md)
- [CustomerWishListItem](docs/Model/CustomerWishListItem.md)
- [CustomerWishListItemResponse](docs/Model/CustomerWishListItemResponse.md)
- [CustomerWishListItemsResponse](docs/Model/CustomerWishListItemsResponse.md)
- [CustomersResponse](docs/Model/CustomersResponse.md)
- [DataTablesServerSideResponse](docs/Model/DataTablesServerSideResponse.md)
- [Distance](docs/Model/Distance.md)
- [DistributionCenter](docs/Model/DistributionCenter.md)
- [DistributionCentersResponse](docs/Model/DistributionCentersResponse.md)
- [EmailBaseTemplateListResponse](docs/Model/EmailBaseTemplateListResponse.md)
- [EmailCampaign](docs/Model/EmailCampaign.md)
- [EmailCampaignFolder](docs/Model/EmailCampaignFolder.md)
- [EmailCampaignFolderResponse](docs/Model/EmailCampaignFolderResponse.md)
- [EmailCampaignFoldersResponse](docs/Model/EmailCampaignFoldersResponse.md)
- [EmailCampaignResponse](docs/Model/EmailCampaignResponse.md)
- [EmailCampaignsResponse](docs/Model/EmailCampaignsResponse.md)
- [EmailClick](docs/Model/EmailClick.md)
- [EmailClicksResponse](docs/Model/EmailClicksResponse.md)
- [EmailCommseq](docs/Model/EmailCommseq.md)
- [EmailCommseqEmail](docs/Model/EmailCommseqEmail.md)
- [EmailCommseqEmailResponse](docs/Model/EmailCommseqEmailResponse.md)
- [EmailCommseqEmailSendTestRequest](docs/Model/EmailCommseqEmailSendTestRequest.md)
- [EmailCommseqEmailSendTestResponse](docs/Model/EmailCommseqEmailSendTestResponse.md)
- [EmailCommseqEmailsRequest](docs/Model/EmailCommseqEmailsRequest.md)
- [EmailCommseqEmailsResponse](docs/Model/EmailCommseqEmailsResponse.md)
- [EmailCommseqPostcard](docs/Model/EmailCommseqPostcard.md)
- [EmailCommseqPostcardResponse](docs/Model/EmailCommseqPostcardResponse.md)
- [EmailCommseqPostcardSendTestRequest](docs/Model/EmailCommseqPostcardSendTestRequest.md)
- [EmailCommseqPostcardSendTestResponse](docs/Model/EmailCommseqPostcardSendTestResponse.md)
- [EmailCommseqPostcardsRequest](docs/Model/EmailCommseqPostcardsRequest.md)
- [EmailCommseqPostcardsResponse](docs/Model/EmailCommseqPostcardsResponse.md)
- [EmailCommseqResponse](docs/Model/EmailCommseqResponse.md)
- [EmailCommseqSequenceTestRequest](docs/Model/EmailCommseqSequenceTestRequest.md)
- [EmailCommseqSequenceTestResponse](docs/Model/EmailCommseqSequenceTestResponse.md)
- [EmailCommseqSmsSendTestRequest](docs/Model/EmailCommseqSmsSendTestRequest.md)
- [EmailCommseqSmsSendTestResponse](docs/Model/EmailCommseqSmsSendTestResponse.md)
- [EmailCommseqStat](docs/Model/EmailCommseqStat.md)
- [EmailCommseqStatResponse](docs/Model/EmailCommseqStatResponse.md)
- [EmailCommseqStep](docs/Model/EmailCommseqStep.md)
- [EmailCommseqStepLog](docs/Model/EmailCommseqStepLog.md)
- [EmailCommseqStepLogsResponse](docs/Model/EmailCommseqStepLogsResponse.md)
- [EmailCommseqWebhookSendTestRequest](docs/Model/EmailCommseqWebhookSendTestRequest.md)
- [EmailCommseqWebhookSendTestResponse](docs/Model/EmailCommseqWebhookSendTestResponse.md)
- [EmailCommseqsResponse](docs/Model/EmailCommseqsResponse.md)
- [EmailCustomer](docs/Model/EmailCustomer.md)
- [EmailCustomerEditorUrlResponse](docs/Model/EmailCustomerEditorUrlResponse.md)
- [EmailCustomersResponse](docs/Model/EmailCustomersResponse.md)
- [EmailDashboardActivity](docs/Model/EmailDashboardActivity.md)
- [EmailDashboardActivityResponse](docs/Model/EmailDashboardActivityResponse.md)
- [EmailDashboardStatsResponse](docs/Model/EmailDashboardStatsResponse.md)
- [EmailDomain](docs/Model/EmailDomain.md)
- [EmailEditorTokenResponse](docs/Model/EmailEditorTokenResponse.md)
- [EmailEditorValuesResponse](docs/Model/EmailEditorValuesResponse.md)
- [EmailFlow](docs/Model/EmailFlow.md)
- [EmailFlowBackPopulateRequest](docs/Model/EmailFlowBackPopulateRequest.md)
- [EmailFlowBackPopulateResponse](docs/Model/EmailFlowBackPopulateResponse.md)
- [EmailFlowFolder](docs/Model/EmailFlowFolder.md)
- [EmailFlowFolderResponse](docs/Model/EmailFlowFolderResponse.md)
- [EmailFlowFoldersResponse](docs/Model/EmailFlowFoldersResponse.md)
- [EmailFlowResponse](docs/Model/EmailFlowResponse.md)
- [EmailFlowsResponse](docs/Model/EmailFlowsResponse.md)
- [EmailGlobalSettings](docs/Model/EmailGlobalSettings.md)
- [EmailGlobalSettingsResponse](docs/Model/EmailGlobalSettingsResponse.md)
- [EmailGlobalUnsubscribeRequest](docs/Model/EmailGlobalUnsubscribeRequest.md)
- [EmailGlobalUnsubscribeResponse](docs/Model/EmailGlobalUnsubscribeResponse.md)
- [EmailHistogramPropertyNamesResponse](docs/Model/EmailHistogramPropertyNamesResponse.md)
- [EmailHistogramPropertyValuesResponse](docs/Model/EmailHistogramPropertyValuesResponse.md)
- [EmailList](docs/Model/EmailList.md)
- [EmailListArchiveResponse](docs/Model/EmailListArchiveResponse.md)
- [EmailListCustomer](docs/Model/EmailListCustomer.md)
- [EmailListCustomersResponse](docs/Model/EmailListCustomersResponse.md)
- [EmailListResponse](docs/Model/EmailListResponse.md)
- [EmailListSegmentFolder](docs/Model/EmailListSegmentFolder.md)
- [EmailListSegmentFolderResponse](docs/Model/EmailListSegmentFolderResponse.md)
- [EmailListSegmentFoldersResponse](docs/Model/EmailListSegmentFoldersResponse.md)
- [EmailListSegmentMembership](docs/Model/EmailListSegmentMembership.md)
- [EmailListSegmentUsedBy](docs/Model/EmailListSegmentUsedBy.md)
- [EmailListSubscribeResponse](docs/Model/EmailListSubscribeResponse.md)
- [EmailListsResponse](docs/Model/EmailListsResponse.md)
- [EmailOrder](docs/Model/EmailOrder.md)
- [EmailOrdersResponse](docs/Model/EmailOrdersResponse.md)
- [EmailPerformance](docs/Model/EmailPerformance.md)
- [EmailPerformanceCustomerHistogram](docs/Model/EmailPerformanceCustomerHistogram.md)
- [EmailPerformanceCustomerHistogramPeriod](docs/Model/EmailPerformanceCustomerHistogramPeriod.md)
- [EmailPerformanceDaily](docs/Model/EmailPerformanceDaily.md)
- [EmailPerformanceResponse](docs/Model/EmailPerformanceResponse.md)
- [EmailPlan](docs/Model/EmailPlan.md)
- [EmailPlanAdditional](docs/Model/EmailPlanAdditional.md)
- [EmailPlanResponse](docs/Model/EmailPlanResponse.md)
- [EmailPostcardStat](docs/Model/EmailPostcardStat.md)
- [EmailPostcardTracking](docs/Model/EmailPostcardTracking.md)
- [EmailPostcardTrackingResponse](docs/Model/EmailPostcardTrackingResponse.md)
- [EmailRateLimiter](docs/Model/EmailRateLimiter.md)
- [EmailRateLimitersResponse](docs/Model/EmailRateLimitersResponse.md)
- [EmailSegment](docs/Model/EmailSegment.md)
- [EmailSegmentArchiveResponse](docs/Model/EmailSegmentArchiveResponse.md)
- [EmailSegmentCustomer](docs/Model/EmailSegmentCustomer.md)
- [EmailSegmentCustomersResponse](docs/Model/EmailSegmentCustomersResponse.md)
- [EmailSegmentDownloadPrepareResponse](docs/Model/EmailSegmentDownloadPrepareResponse.md)
- [EmailSegmentResponse](docs/Model/EmailSegmentResponse.md)
- [EmailSegmentsResponse](docs/Model/EmailSegmentsResponse.md)
- [EmailSendingDomainResponse](docs/Model/EmailSendingDomainResponse.md)
- [EmailSendingDomainsResponse](docs/Model/EmailSendingDomainsResponse.md)
- [EmailSettings](docs/Model/EmailSettings.md)
- [EmailSettingsResponse](docs/Model/EmailSettingsResponse.md)
- [EmailSmsOrder](docs/Model/EmailSmsOrder.md)
- [EmailSmsOrdersResponse](docs/Model/EmailSmsOrdersResponse.md)
- [EmailSmsStat](docs/Model/EmailSmsStat.md)
- [EmailStat](docs/Model/EmailStat.md)
- [EmailStatPostcardSummaryRequest](docs/Model/EmailStatPostcardSummaryRequest.md)
- [EmailStatPostcardSummaryResponse](docs/Model/EmailStatPostcardSummaryResponse.md)
- [EmailStatSmsSummaryRequest](docs/Model/EmailStatSmsSummaryRequest.md)
- [EmailStatSmsSummaryResponse](docs/Model/EmailStatSmsSummaryResponse.md)
- [EmailStatSummaryRequest](docs/Model/EmailStatSummaryRequest.md)
- [EmailStatSummaryResponse](docs/Model/EmailStatSummaryResponse.md)
- [EmailStepStat](docs/Model/EmailStepStat.md)
- [EmailStepStatRequest](docs/Model/EmailStepStatRequest.md)
- [EmailStepStatResponse](docs/Model/EmailStepStatResponse.md)
- [EmailStepWaitingRequest](docs/Model/EmailStepWaitingRequest.md)
- [EmailStepWaitingResponse](docs/Model/EmailStepWaitingResponse.md)
- [EmailTemplate](docs/Model/EmailTemplate.md)
- [EmailTemplatesResponse](docs/Model/EmailTemplatesResponse.md)
- [EmailThirdPartyList](docs/Model/EmailThirdPartyList.md)
- [EmailThirdPartyListImportRequest](docs/Model/EmailThirdPartyListImportRequest.md)
- [EmailThirdPartyProvider](docs/Model/EmailThirdPartyProvider.md)
- [EmailThirdPartyProvidersResponse](docs/Model/EmailThirdPartyProvidersResponse.md)
- [EmailThirdPartyTag](docs/Model/EmailThirdPartyTag.md)
- [EmailVerifyTokenRequest](docs/Model/EmailVerifyTokenRequest.md)
- [EmailVerifyTokenResponse](docs/Model/EmailVerifyTokenResponse.md)
- [EmailVerifyTokenValidateRequest](docs/Model/EmailVerifyTokenValidateRequest.md)
- [EmailVerifyTokenValidateResponse](docs/Model/EmailVerifyTokenValidateResponse.md)
- [EmailWebhookEditorValuesResponse](docs/Model/EmailWebhookEditorValuesResponse.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [Experiment](docs/Model/Experiment.md)
- [ExperimentResponse](docs/Model/ExperimentResponse.md)
- [ExperimentVariation](docs/Model/ExperimentVariation.md)
- [ExperimentVariationStat](docs/Model/ExperimentVariationStat.md)
- [ExperimentsResponse](docs/Model/ExperimentsResponse.md)
- [FileManagerDirectory](docs/Model/FileManagerDirectory.md)
- [FileManagerFile](docs/Model/FileManagerFile.md)
- [FileManagerPage](docs/Model/FileManagerPage.md)
- [FileManagerPageResponse](docs/Model/FileManagerPageResponse.md)
- [FileManagerUploadRequest](docs/Model/FileManagerUploadRequest.md)
- [FileManagerUploadUrlResponse](docs/Model/FileManagerUploadUrlResponse.md)
- [FulfillmentInventory](docs/Model/FulfillmentInventory.md)
- [FulfillmentShipment](docs/Model/FulfillmentShipment.md)
- [GeoPoint](docs/Model/GeoPoint.md)
- [GeocodeRequest](docs/Model/GeocodeRequest.md)
- [GeocodeResponse](docs/Model/GeocodeResponse.md)
- [GiftCertificate](docs/Model/GiftCertificate.md)
- [GiftCertificateCreateRequest](docs/Model/GiftCertificateCreateRequest.md)
- [GiftCertificateLedgerEntry](docs/Model/GiftCertificateLedgerEntry.md)
- [GiftCertificateQuery](docs/Model/GiftCertificateQuery.md)
- [GiftCertificateResponse](docs/Model/GiftCertificateResponse.md)
- [GiftCertificatesResponse](docs/Model/GiftCertificatesResponse.md)
- [Group](docs/Model/Group.md)
- [GroupResponse](docs/Model/GroupResponse.md)
- [GroupUserMembership](docs/Model/GroupUserMembership.md)
- [GroupsResponse](docs/Model/GroupsResponse.md)
- [HTTPHeader](docs/Model/HTTPHeader.md)
- [HitPageView](docs/Model/HitPageView.md)
- [HitPageViewMetaData](docs/Model/HitPageViewMetaData.md)
- [HitSessionStart](docs/Model/HitSessionStart.md)
- [HitSessionUtm](docs/Model/HitSessionUtm.md)
- [IntegrationLog](docs/Model/IntegrationLog.md)
- [IntegrationLogFile](docs/Model/IntegrationLogFile.md)
- [IntegrationLogLog](docs/Model/IntegrationLogLog.md)
- [IntegrationLogQueryFilterValues](docs/Model/IntegrationLogQueryFilterValues.md)
- [IntegrationLogQueryRequest](docs/Model/IntegrationLogQueryRequest.md)
- [IntegrationLogQueryResponse](docs/Model/IntegrationLogQueryResponse.md)
- [IntegrationLogResponse](docs/Model/IntegrationLogResponse.md)
- [IntegrationLogSummary](docs/Model/IntegrationLogSummary.md)
- [IntegrationLogSummaryQueryRequest](docs/Model/IntegrationLogSummaryQueryRequest.md)
- [IntegrationLogSummaryQueryResponse](docs/Model/IntegrationLogSummaryQueryResponse.md)
- [Item](docs/Model/Item.md)
- [ItemAccounting](docs/Model/ItemAccounting.md)
- [ItemAmember](docs/Model/ItemAmember.md)
- [ItemAutoOrder](docs/Model/ItemAutoOrder.md)
- [ItemAutoOrderStep](docs/Model/ItemAutoOrderStep.md)
- [ItemAutoOrderStepArbitraryUnitCostSchedule](docs/Model/ItemAutoOrderStepArbitraryUnitCostSchedule.md)
- [ItemAutoOrderStepGrandfatherPricing](docs/Model/ItemAutoOrderStepGrandfatherPricing.md)
- [ItemCCBill](docs/Model/ItemCCBill.md)
- [ItemChannelPartnerMapping](docs/Model/ItemChannelPartnerMapping.md)
- [ItemChargeback](docs/Model/ItemChargeback.md)
- [ItemChargebackAddendum](docs/Model/ItemChargebackAddendum.md)
- [ItemChargebackAdjustmentRequest](docs/Model/ItemChargebackAdjustmentRequest.md)
- [ItemCheckout](docs/Model/ItemCheckout.md)
- [ItemContent](docs/Model/ItemContent.md)
- [ItemContentAssignment](docs/Model/ItemContentAssignment.md)
- [ItemContentAttribute](docs/Model/ItemContentAttribute.md)
- [ItemContentMultimedia](docs/Model/ItemContentMultimedia.md)
- [ItemContentMultimediaThumbnail](docs/Model/ItemContentMultimediaThumbnail.md)
- [ItemDigitalDelivery](docs/Model/ItemDigitalDelivery.md)
- [ItemDigitalItem](docs/Model/ItemDigitalItem.md)
- [ItemDigitalItemPdfMeta](docs/Model/ItemDigitalItemPdfMeta.md)
- [ItemDigitalItemResponse](docs/Model/ItemDigitalItemResponse.md)
- [ItemDigitalItemsResponse](docs/Model/ItemDigitalItemsResponse.md)
- [ItemEbay](docs/Model/ItemEbay.md)
- [ItemEbayCategorySpecific](docs/Model/ItemEbayCategorySpecific.md)
- [ItemEbayMarketListing](docs/Model/ItemEbayMarketListing.md)
- [ItemEbayMarketPlaceAnalysis](docs/Model/ItemEbayMarketPlaceAnalysis.md)
- [ItemEmailNotifications](docs/Model/ItemEmailNotifications.md)
- [ItemEnrollment123](docs/Model/ItemEnrollment123.md)
- [ItemFulfillmentAddon](docs/Model/ItemFulfillmentAddon.md)
- [ItemGiftCertificate](docs/Model/ItemGiftCertificate.md)
- [ItemGoogleProductSearch](docs/Model/ItemGoogleProductSearch.md)
- [ItemIdentifiers](docs/Model/ItemIdentifiers.md)
- [ItemInstantPaymentNotification](docs/Model/ItemInstantPaymentNotification.md)
- [ItemInstantPaymentNotifications](docs/Model/ItemInstantPaymentNotifications.md)
- [ItemInternal](docs/Model/ItemInternal.md)
- [ItemInventorySnapshot](docs/Model/ItemInventorySnapshot.md)
- [ItemInventorySnapshotDistributionCenter](docs/Model/ItemInventorySnapshotDistributionCenter.md)
- [ItemInventorySnapshotResponse](docs/Model/ItemInventorySnapshotResponse.md)
- [ItemKitComponent](docs/Model/ItemKitComponent.md)
- [ItemKitDefinition](docs/Model/ItemKitDefinition.md)
- [ItemOption](docs/Model/ItemOption.md)
- [ItemOptionValue](docs/Model/ItemOptionValue.md)
- [ItemOptionValueAdditionalItem](docs/Model/ItemOptionValueAdditionalItem.md)
- [ItemOptionValueDigitalItem](docs/Model/ItemOptionValueDigitalItem.md)
- [ItemPaymentProcessing](docs/Model/ItemPaymentProcessing.md)
- [ItemPhysical](docs/Model/ItemPhysical.md)
- [ItemPricing](docs/Model/ItemPricing.md)
- [ItemPricingTier](docs/Model/ItemPricingTier.md)
- [ItemPricingTierDiscount](docs/Model/ItemPricingTierDiscount.md)
- [ItemPricingTierLimit](docs/Model/ItemPricingTierLimit.md)
- [ItemProperty](docs/Model/ItemProperty.md)
- [ItemRealtimePricing](docs/Model/ItemRealtimePricing.md)
- [ItemRelated](docs/Model/ItemRelated.md)
- [ItemRelatedItem](docs/Model/ItemRelatedItem.md)
- [ItemReporting](docs/Model/ItemReporting.md)
- [ItemResponse](docs/Model/ItemResponse.md)
- [ItemRestriction](docs/Model/ItemRestriction.md)
- [ItemRestrictionItem](docs/Model/ItemRestrictionItem.md)
- [ItemRevguard](docs/Model/ItemRevguard.md)
- [ItemReview](docs/Model/ItemReview.md)
- [ItemReviewResponse](docs/Model/ItemReviewResponse.md)
- [ItemReviews](docs/Model/ItemReviews.md)
- [ItemReviewsResponse](docs/Model/ItemReviewsResponse.md)
- [ItemSalesforce](docs/Model/ItemSalesforce.md)
- [ItemShipping](docs/Model/ItemShipping.md)
- [ItemShippingCase](docs/Model/ItemShippingCase.md)
- [ItemShippingDestinationMarkup](docs/Model/ItemShippingDestinationMarkup.md)
- [ItemShippingDestinationRestriction](docs/Model/ItemShippingDestinationRestriction.md)
- [ItemShippingDistributionCenter](docs/Model/ItemShippingDistributionCenter.md)
- [ItemShippingMethod](docs/Model/ItemShippingMethod.md)
- [ItemShippingPackageRequirement](docs/Model/ItemShippingPackageRequirement.md)
- [ItemTag](docs/Model/ItemTag.md)
- [ItemTags](docs/Model/ItemTags.md)
- [ItemTax](docs/Model/ItemTax.md)
- [ItemTaxExemption](docs/Model/ItemTaxExemption.md)
- [ItemThirdPartyEmailMarketing](docs/Model/ItemThirdPartyEmailMarketing.md)
- [ItemVariantItem](docs/Model/ItemVariantItem.md)
- [ItemVariation](docs/Model/ItemVariation.md)
- [ItemVariationOption](docs/Model/ItemVariationOption.md)
- [ItemWishlistMember](docs/Model/ItemWishlistMember.md)
- [ItemsRequest](docs/Model/ItemsRequest.md)
- [ItemsResponse](docs/Model/ItemsResponse.md)
- [KeyValue](docs/Model/KeyValue.md)
- [LibraryFilterValues](docs/Model/LibraryFilterValues.md)
- [LibraryFilterValuesResponse](docs/Model/LibraryFilterValuesResponse.md)
- [LibraryItem](docs/Model/LibraryItem.md)
- [LibraryItemAccount](docs/Model/LibraryItemAccount.md)
- [LibraryItemAsset](docs/Model/LibraryItemAsset.md)
- [LibraryItemAttribute](docs/Model/LibraryItemAttribute.md)
- [LibraryItemEmail](docs/Model/LibraryItemEmail.md)
- [LibraryItemPublishedMeta](docs/Model/LibraryItemPublishedMeta.md)
- [LibraryItemPurchasedMeta](docs/Model/LibraryItemPurchasedMeta.md)
- [LibraryItemQuery](docs/Model/LibraryItemQuery.md)
- [LibraryItemResponse](docs/Model/LibraryItemResponse.md)
- [LibraryItemScreenshot](docs/Model/LibraryItemScreenshot.md)
- [LibraryItemsResponse](docs/Model/LibraryItemsResponse.md)
- [LinkedAccount](docs/Model/LinkedAccount.md)
- [ListSegmentMembership](docs/Model/ListSegmentMembership.md)
- [LookupRequest](docs/Model/LookupRequest.md)
- [LookupResponse](docs/Model/LookupResponse.md)
- [Mailgun](docs/Model/Mailgun.md)
- [Metric](docs/Model/Metric.md)
- [Notification](docs/Model/Notification.md)
- [OauthRevokeSuccessResponse](docs/Model/OauthRevokeSuccessResponse.md)
- [OauthTokenResponse](docs/Model/OauthTokenResponse.md)
- [Order](docs/Model/Order.md)
- [OrderAffiliate](docs/Model/OrderAffiliate.md)
- [OrderAffiliateLedger](docs/Model/OrderAffiliateLedger.md)
- [OrderAutoOrder](docs/Model/OrderAutoOrder.md)
- [OrderBilling](docs/Model/OrderBilling.md)
- [OrderBuysafe](docs/Model/OrderBuysafe.md)
- [OrderByTokenQuery](docs/Model/OrderByTokenQuery.md)
- [OrderChannelPartner](docs/Model/OrderChannelPartner.md)
- [OrderCheckout](docs/Model/OrderCheckout.md)
- [OrderCoupon](docs/Model/OrderCoupon.md)
- [OrderCurrentStageHistory](docs/Model/OrderCurrentStageHistory.md)
- [OrderDigitalItem](docs/Model/OrderDigitalItem.md)
- [OrderDigitalOrder](docs/Model/OrderDigitalOrder.md)
- [OrderEdi](docs/Model/OrderEdi.md)
- [OrderEdiDocument](docs/Model/OrderEdiDocument.md)
- [OrderEdiDocumentsResponse](docs/Model/OrderEdiDocumentsResponse.md)
- [OrderFormat](docs/Model/OrderFormat.md)
- [OrderFormatResponse](docs/Model/OrderFormatResponse.md)
- [OrderFraudScore](docs/Model/OrderFraudScore.md)
- [OrderGift](docs/Model/OrderGift.md)
- [OrderGiftCertificate](docs/Model/OrderGiftCertificate.md)
- [OrderInternal](docs/Model/OrderInternal.md)
- [OrderInvoiceResponse](docs/Model/OrderInvoiceResponse.md)
- [OrderItem](docs/Model/OrderItem.md)
- [OrderItemEdi](docs/Model/OrderItemEdi.md)
- [OrderItemEdiIdentification](docs/Model/OrderItemEdiIdentification.md)
- [OrderItemEdiLot](docs/Model/OrderItemEdiLot.md)
- [OrderItemOption](docs/Model/OrderItemOption.md)
- [OrderItemOptionFileAttachment](docs/Model/OrderItemOptionFileAttachment.md)
- [OrderItemProperty](docs/Model/OrderItemProperty.md)
- [OrderItemTag](docs/Model/OrderItemTag.md)
- [OrderLinkedShipment](docs/Model/OrderLinkedShipment.md)
- [OrderMarketing](docs/Model/OrderMarketing.md)
- [OrderPackingSlipResponse](docs/Model/OrderPackingSlipResponse.md)
- [OrderPayment](docs/Model/OrderPayment.md)
- [OrderPaymentCheck](docs/Model/OrderPaymentCheck.md)
- [OrderPaymentCreditCard](docs/Model/OrderPaymentCreditCard.md)
- [OrderPaymentCreditCardDualVaulted](docs/Model/OrderPaymentCreditCardDualVaulted.md)
- [OrderPaymentCreditCardDualVaultedProperty](docs/Model/OrderPaymentCreditCardDualVaultedProperty.md)
- [OrderPaymentECheck](docs/Model/OrderPaymentECheck.md)
- [OrderPaymentHealthBenefitCard](docs/Model/OrderPaymentHealthBenefitCard.md)
- [OrderPaymentInsurance](docs/Model/OrderPaymentInsurance.md)
- [OrderPaymentPayPal](docs/Model/OrderPaymentPayPal.md)
- [OrderPaymentPurchaseOrder](docs/Model/OrderPaymentPurchaseOrder.md)
- [OrderPaymentTransaction](docs/Model/OrderPaymentTransaction.md)
- [OrderPaymentTransactionDetail](docs/Model/OrderPaymentTransactionDetail.md)
- [OrderPointOfSale](docs/Model/OrderPointOfSale.md)
- [OrderProcessPaymentRequest](docs/Model/OrderProcessPaymentRequest.md)
- [OrderProcessPaymentResponse](docs/Model/OrderProcessPaymentResponse.md)
- [OrderProperty](docs/Model/OrderProperty.md)
- [OrderQuery](docs/Model/OrderQuery.md)
- [OrderQueryBatch](docs/Model/OrderQueryBatch.md)
- [OrderQuote](docs/Model/OrderQuote.md)
- [OrderReason](docs/Model/OrderReason.md)
- [OrderRefundableResponse](docs/Model/OrderRefundableResponse.md)
- [OrderReplacement](docs/Model/OrderReplacement.md)
- [OrderReplacementItem](docs/Model/OrderReplacementItem.md)
- [OrderReplacementResponse](docs/Model/OrderReplacementResponse.md)
- [OrderResponse](docs/Model/OrderResponse.md)
- [OrderSalesforce](docs/Model/OrderSalesforce.md)
- [OrderShipping](docs/Model/OrderShipping.md)
- [OrderSummary](docs/Model/OrderSummary.md)
- [OrderTag](docs/Model/OrderTag.md)
- [OrderTaxes](docs/Model/OrderTaxes.md)
- [OrderTokenResponse](docs/Model/OrderTokenResponse.md)
- [OrderTrackingNumberDetail](docs/Model/OrderTrackingNumberDetail.md)
- [OrderTrackingNumberDetails](docs/Model/OrderTrackingNumberDetails.md)
- [OrderTransactionalMerchantNote](docs/Model/OrderTransactionalMerchantNote.md)
- [OrderUtm](docs/Model/OrderUtm.md)
- [OrderValidationRequest](docs/Model/OrderValidationRequest.md)
- [OrderValidationResponse](docs/Model/OrderValidationResponse.md)
- [OrdersResponse](docs/Model/OrdersResponse.md)
- [Permission](docs/Model/Permission.md)
- [PointOfSaleLocation](docs/Model/PointOfSaleLocation.md)
- [PointOfSaleReader](docs/Model/PointOfSaleReader.md)
- [PointOfSaleRegister](docs/Model/PointOfSaleRegister.md)
- [PricingTier](docs/Model/PricingTier.md)
- [PricingTierNotification](docs/Model/PricingTierNotification.md)
- [PricingTiersResponse](docs/Model/PricingTiersResponse.md)
- [Property](docs/Model/Property.md)
- [PublishLibraryItemRequest](docs/Model/PublishLibraryItemRequest.md)
- [RegisterAffiliateClickRequest](docs/Model/RegisterAffiliateClickRequest.md)
- [RegisterAffiliateClickResponse](docs/Model/RegisterAffiliateClickResponse.md)
- [Report](docs/Model/Report.md)
- [ReportAuth](docs/Model/ReportAuth.md)
- [ReportAuthResponse](docs/Model/ReportAuthResponse.md)
- [ReportDataSet](docs/Model/ReportDataSet.md)
- [ReportDataSetColumn](docs/Model/ReportDataSetColumn.md)
- [ReportDataSetPage](docs/Model/ReportDataSetPage.md)
- [ReportDataSetPageResponse](docs/Model/ReportDataSetPageResponse.md)
- [ReportDataSetQuery](docs/Model/ReportDataSetQuery.md)
- [ReportDataSetQueryOrderByColumn](docs/Model/ReportDataSetQueryOrderByColumn.md)
- [ReportDataSetResponse](docs/Model/ReportDataSetResponse.md)
- [ReportDataSetRow](docs/Model/ReportDataSetRow.md)
- [ReportDataSetSchema](docs/Model/ReportDataSetSchema.md)
- [ReportDataSource](docs/Model/ReportDataSource.md)
- [ReportDataSourceSchema](docs/Model/ReportDataSourceSchema.md)
- [ReportDryRunQueriesRequest](docs/Model/ReportDryRunQueriesRequest.md)
- [ReportDryRunQueriesResponse](docs/Model/ReportDryRunQueriesResponse.md)
- [ReportDryRunQueryResult](docs/Model/ReportDryRunQueryResult.md)
- [ReportExecuteQueriesRequest](docs/Model/ReportExecuteQueriesRequest.md)
- [ReportFilter](docs/Model/ReportFilter.md)
- [ReportFilterConnection](docs/Model/ReportFilterConnection.md)
- [ReportPage](docs/Model/ReportPage.md)
- [ReportPageFilter](docs/Model/ReportPageFilter.md)
- [ReportPageVisualization](docs/Model/ReportPageVisualization.md)
- [ReportPageVisualizationDimension](docs/Model/ReportPageVisualizationDimension.md)
- [ReportPageVisualizationMetric](docs/Model/ReportPageVisualizationMetric.md)
- [ReportResponse](docs/Model/ReportResponse.md)
- [ReportWebsocketEvent](docs/Model/ReportWebsocketEvent.md)
- [ReportsResponse](docs/Model/ReportsResponse.md)
- [ResponseMetadata](docs/Model/ResponseMetadata.md)
- [ResultSet](docs/Model/ResultSet.md)
- [RulerValidationRequest](docs/Model/RulerValidationRequest.md)
- [RulerValidationResponse](docs/Model/RulerValidationResponse.md)
- [ScreenRecording](docs/Model/ScreenRecording.md)
- [ScreenRecordingAdPlatform](docs/Model/ScreenRecordingAdPlatform.md)
- [ScreenRecordingFilter](docs/Model/ScreenRecordingFilter.md)
- [ScreenRecordingFilterGeoDistance](docs/Model/ScreenRecordingFilterGeoDistance.md)
- [ScreenRecordingFilterIpSearch](docs/Model/ScreenRecordingFilterIpSearch.md)
- [ScreenRecordingFilterPageView](docs/Model/ScreenRecordingFilterPageView.md)
- [ScreenRecordingFilterPageViewEvent](docs/Model/ScreenRecordingFilterPageViewEvent.md)
- [ScreenRecordingFilterPageViewEventParam](docs/Model/ScreenRecordingFilterPageViewEventParam.md)
- [ScreenRecordingFilterPageViewParam](docs/Model/ScreenRecordingFilterPageViewParam.md)
- [ScreenRecordingFilterPageViewReferrerParam](docs/Model/ScreenRecordingFilterPageViewReferrerParam.md)
- [ScreenRecordingFilterRangeBigDecimal](docs/Model/ScreenRecordingFilterRangeBigDecimal.md)
- [ScreenRecordingFilterRangeDate](docs/Model/ScreenRecordingFilterRangeDate.md)
- [ScreenRecordingFilterRangeInteger](docs/Model/ScreenRecordingFilterRangeInteger.md)
- [ScreenRecordingFilterStringSearch](docs/Model/ScreenRecordingFilterStringSearch.md)
- [ScreenRecordingFilterValues](docs/Model/ScreenRecordingFilterValues.md)
- [ScreenRecordingFilterValuesEvent](docs/Model/ScreenRecordingFilterValuesEvent.md)
- [ScreenRecordingFilterValuesEventParams](docs/Model/ScreenRecordingFilterValuesEventParams.md)
- [ScreenRecordingFilterValuesPageParam](docs/Model/ScreenRecordingFilterValuesPageParam.md)
- [ScreenRecordingFilterValuesPageView](docs/Model/ScreenRecordingFilterValuesPageView.md)
- [ScreenRecordingHeatmap](docs/Model/ScreenRecordingHeatmap.md)
- [ScreenRecordingHeatmapIndexRequest](docs/Model/ScreenRecordingHeatmapIndexRequest.md)
- [ScreenRecordingHeatmapIndexResponse](docs/Model/ScreenRecordingHeatmapIndexResponse.md)
- [ScreenRecordingHeatmapRequest](docs/Model/ScreenRecordingHeatmapRequest.md)
- [ScreenRecordingHeatmapReset](docs/Model/ScreenRecordingHeatmapReset.md)
- [ScreenRecordingHeatmapResponse](docs/Model/ScreenRecordingHeatmapResponse.md)
- [ScreenRecordingHeatmapUrl](docs/Model/ScreenRecordingHeatmapUrl.md)
- [ScreenRecordingMerchantNotesRequest](docs/Model/ScreenRecordingMerchantNotesRequest.md)
- [ScreenRecordingMultifield](docs/Model/ScreenRecordingMultifield.md)
- [ScreenRecordingPageView](docs/Model/ScreenRecordingPageView.md)
- [ScreenRecordingPageViewDataResponse](docs/Model/ScreenRecordingPageViewDataResponse.md)
- [ScreenRecordingPageViewEvent](docs/Model/ScreenRecordingPageViewEvent.md)
- [ScreenRecordingPageViewEventParameter](docs/Model/ScreenRecordingPageViewEventParameter.md)
- [ScreenRecordingPageViewParameter](docs/Model/ScreenRecordingPageViewParameter.md)
- [ScreenRecordingQueryRequest](docs/Model/ScreenRecordingQueryRequest.md)
- [ScreenRecordingQueryResponse](docs/Model/ScreenRecordingQueryResponse.md)
- [ScreenRecordingResponse](docs/Model/ScreenRecordingResponse.md)
- [ScreenRecordingSegment](docs/Model/ScreenRecordingSegment.md)
- [ScreenRecordingSegmentResponse](docs/Model/ScreenRecordingSegmentResponse.md)
- [ScreenRecordingSegmentsResponse](docs/Model/ScreenRecordingSegmentsResponse.md)
- [ScreenRecordingSettings](docs/Model/ScreenRecordingSettings.md)
- [ScreenRecordingSettingsResponse](docs/Model/ScreenRecordingSettingsResponse.md)
- [ScreenRecordingStoreFront](docs/Model/ScreenRecordingStoreFront.md)
- [ScreenRecordingTagsRequest](docs/Model/ScreenRecordingTagsRequest.md)
- [ScreenRecordingTagsResponse](docs/Model/ScreenRecordingTagsResponse.md)
- [ScreenRecordingUserAgent](docs/Model/ScreenRecordingUserAgent.md)
- [ScreenRecordingUserAgentDevice](docs/Model/ScreenRecordingUserAgentDevice.md)
- [ScreenRecordingUserAgentOS](docs/Model/ScreenRecordingUserAgentOS.md)
- [ScreenRecordingUserProperty](docs/Model/ScreenRecordingUserProperty.md)
- [ScreenshotsResponse](docs/Model/ScreenshotsResponse.md)
- [SelfConfig](docs/Model/SelfConfig.md)
- [SimpleValue](docs/Model/SimpleValue.md)
- [SingleSignOnAuthorizeRequest](docs/Model/SingleSignOnAuthorizeRequest.md)
- [SingleSignOnAuthorizeResponse](docs/Model/SingleSignOnAuthorizeResponse.md)
- [SingleSignOnTokenRequest](docs/Model/SingleSignOnTokenRequest.md)
- [SingleSignOnTokenResponse](docs/Model/SingleSignOnTokenResponse.md)
- [SovosConfig](docs/Model/SovosConfig.md)
- [StateProvince](docs/Model/StateProvince.md)
- [StepWaiting](docs/Model/StepWaiting.md)
- [StoreFront](docs/Model/StoreFront.md)
- [StoreFrontPageContentAttribute](docs/Model/StoreFrontPageContentAttribute.md)
- [StoreFrontsResponse](docs/Model/StoreFrontsResponse.md)
- [TaxCity](docs/Model/TaxCity.md)
- [TaxCountry](docs/Model/TaxCountry.md)
- [TaxCountryCode](docs/Model/TaxCountryCode.md)
- [TaxCounty](docs/Model/TaxCounty.md)
- [TaxJarConfig](docs/Model/TaxJarConfig.md)
- [TaxPostalCode](docs/Model/TaxPostalCode.md)
- [TaxProviderActivateResult](docs/Model/TaxProviderActivateResult.md)
- [TaxProviderAvalara](docs/Model/TaxProviderAvalara.md)
- [TaxProviderAvalaraCompaniesResult](docs/Model/TaxProviderAvalaraCompaniesResult.md)
- [TaxProviderAvalaraCompany](docs/Model/TaxProviderAvalaraCompany.md)
- [TaxProviderSelf](docs/Model/TaxProviderSelf.md)
- [TaxProviderSelfCountriesResponse](docs/Model/TaxProviderSelfCountriesResponse.md)
- [TaxProviderSelfRegionsResponse](docs/Model/TaxProviderSelfRegionsResponse.md)
- [TaxProviderSovos](docs/Model/TaxProviderSovos.md)
- [TaxProviderTaxJar](docs/Model/TaxProviderTaxJar.md)
- [TaxProviderTestResult](docs/Model/TaxProviderTestResult.md)
- [TaxProviderUltraCart](docs/Model/TaxProviderUltraCart.md)
- [TaxProviderUltraCartState](docs/Model/TaxProviderUltraCartState.md)
- [TaxProvidersResponse](docs/Model/TaxProvidersResponse.md)
- [TaxState](docs/Model/TaxState.md)
- [TaxStateCode](docs/Model/TaxStateCode.md)
- [TempMultimedia](docs/Model/TempMultimedia.md)
- [TempMultimediaResponse](docs/Model/TempMultimediaResponse.md)
- [ThumbnailParametersRequest](docs/Model/ThumbnailParametersRequest.md)
- [ThumbnailParametersResponse](docs/Model/ThumbnailParametersResponse.md)
- [TransactionEmail](docs/Model/TransactionEmail.md)
- [TransactionEmailListResponse](docs/Model/TransactionEmailListResponse.md)
- [TransactionEmailOption](docs/Model/TransactionEmailOption.md)
- [TransactionEmailResponse](docs/Model/TransactionEmailResponse.md)
- [Twilio](docs/Model/Twilio.md)
- [TwilioResponse](docs/Model/TwilioResponse.md)
- [TwiliosResponse](docs/Model/TwiliosResponse.md)
- [UltraCartConfig](docs/Model/UltraCartConfig.md)
- [UploadCouponCodesRequest](docs/Model/UploadCouponCodesRequest.md)
- [UploadCouponCodesResponse](docs/Model/UploadCouponCodesResponse.md)
- [User](docs/Model/User.md)
- [UserGroupMembership](docs/Model/UserGroupMembership.md)
- [UserLogin](docs/Model/UserLogin.md)
- [UserLoginsResponse](docs/Model/UserLoginsResponse.md)
- [UserResponse](docs/Model/UserResponse.md)
- [UsersResponse](docs/Model/UsersResponse.md)
- [VerificationRecord](docs/Model/VerificationRecord.md)
- [Warning](docs/Model/Warning.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookEventCategory](docs/Model/WebhookEventCategory.md)
- [WebhookEventSubscription](docs/Model/WebhookEventSubscription.md)
- [WebhookLog](docs/Model/WebhookLog.md)
- [WebhookLogResponse](docs/Model/WebhookLogResponse.md)
- [WebhookLogSummariesResponse](docs/Model/WebhookLogSummariesResponse.md)
- [WebhookLogSummary](docs/Model/WebhookLogSummary.md)
- [WebhookReflow](docs/Model/WebhookReflow.md)
- [WebhookReflowResponse](docs/Model/WebhookReflowResponse.md)
- [WebhookResponse](docs/Model/WebhookResponse.md)
- [WebhooksResponse](docs/Model/WebhooksResponse.md)
- [Weight](docs/Model/Weight.md)
- [WorkflowAgentAuth](docs/Model/WorkflowAgentAuth.md)
- [WorkflowAgentAuthResponse](docs/Model/WorkflowAgentAuthResponse.md)
- [WorkflowAttachment](docs/Model/WorkflowAttachment.md)
- [WorkflowAttachmentUploadUrl](docs/Model/WorkflowAttachmentUploadUrl.md)
- [WorkflowAttachmentUploadUrlResponse](docs/Model/WorkflowAttachmentUploadUrlResponse.md)
- [WorkflowGroup](docs/Model/WorkflowGroup.md)
- [WorkflowGroupsResponse](docs/Model/WorkflowGroupsResponse.md)
- [WorkflowNote](docs/Model/WorkflowNote.md)
- [WorkflowTask](docs/Model/WorkflowTask.md)
- [WorkflowTaskHistory](docs/Model/WorkflowTaskHistory.md)
- [WorkflowTaskOpenCountResponse](docs/Model/WorkflowTaskOpenCountResponse.md)
- [WorkflowTaskResponse](docs/Model/WorkflowTaskResponse.md)
- [WorkflowTaskTagsResponse](docs/Model/WorkflowTaskTagsResponse.md)
- [WorkflowTasksRequest](docs/Model/WorkflowTasksRequest.md)
- [WorkflowTasksResponse](docs/Model/WorkflowTasksResponse.md)
- [WorkflowUser](docs/Model/WorkflowUser.md)
- [WorkflowUserResponse](docs/Model/WorkflowUserResponse.md)
- [WorkflowUsersResponse](docs/Model/WorkflowUsersResponse.md)

## Authorization

### ultraCartBrowserApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-browser-key
- **Location**: HTTP header



### ultraCartOauth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://secure.ultracart.com/rest/v2/oauth/authorize`
- **Scopes**: 
    - **affiliate_read**: Allows you to read affiliate information.
    - **affiliate_write**: Allows you to write affiliate information.
    - **auto_order_read**: Allows you to read auto order information.
    - **auto_order_write**: Allows you to write auto order information.
    - **channel_partner_read**: Allows you to read channel partner information.
    - **channel_partner_write**: Allows you to write channel partner information.
    - **chargeback_read**: Allows you to read chargeback information.
    - **chargeback_write**: Allows you to write chargeback information.
    - **checkout_read**: Allows you to read checkout information.
    - **checkout_write**: Allows you to write checkout information.
    - **configuration_read**: Allows you to read configuration information.
    - **configuration_write**: Allows you to write configuration information.
    - **conversation_read**: Allows you to read conversation information.
    - **conversation_write**: Allows you to write conversation information.
    - **coupon_read**: Allows you to read coupon information.
    - **coupon_write**: Allows you to write coupon information.
    - **customer_read**: Allows you to read customer information.
    - **customer_write**: Allows you to write customer information.
    - **fulfillment_read**: Allows you to read fulfillment information.
    - **fulfillment_write**: Allows you to write fulfillment information.
    - **gift_certificate_read**: Allows you to read gift certificate information.
    - **gift_certificate_write**: Allows you to write gift certificate information.
    - **integration_log_read**: Allows you to read integration log information.
    - **integration_log_write**: Allows you to write integration log information.
    - **order_read**: Allows you to read order information.
    - **order_write**: Allows you to write order information.
    - **item_read**: Allows you to read item information.
    - **item_write**: Allows you to write item information.
    - **storefront_read**: Allows you to read storefront information.
    - **storefront_write**: Allows you to write storefront information.
    - **tax_read**: Allows you to read tax configuration information.
    - **tax_write**: Allows you to write tax configuration information.
    - **webhook_read**: Allows you to read webhook information.
    - **webhook_write**: Allows you to write webhook information.
    - **ultrabooks_read**: 1 of 2 required to use UltraBooks
    - **ultrabooks_write**: 2 of 2 required to use UltraBooks
    - **user_read**: Allows you to read user information.
    - **user_write**: Allows you to write user information.
    - **workflow_read**: Allows you to read workflow information.
    - **workflow_write**: Allows you to write workflow information.


### ultraCartSimpleApiKey

- **Type**: API key
- **API key parameter name**: x-ultracart-simple-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@ultracart.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`



# CHANGE LOG
Not every change is committed to every SDK.

| Version | Date | Comments |
| --: | :-: | --- |
| 4.1.19 | 08/04/2025 | conversations api - add zoho departments to getCapabilities call |
| 4.1.18 | 08/04/2025 | more internal development on loyalty step for storefront flows |
| 4.1.17 | 08/04/2025 | small changes to internal flow app to support loyalty tier moves |
| 4.1.16 | 07/28/2025 | updated doc samples |
| 4.1.15 | 07/28/2025 | new order methods for blocking and unblocking refunds |
| 4.1.14 | 07/10/2025 | automation test |
| 4.1.13 | 05/20/2025 | conversation - virtual agent flag and virtual agent cost |
| 4.1.12 | 05/19/2025 | conversations - AI agent capabilities method |
| 4.1.11 | 05/19/2025 | conversations - virtual AI budgets |
| 4.1.10 | 05/06/2025 | conversation - ConversationAgentProfile.user_id added for agent profiles call |
| 4.1.9 | 05/05/2025 | conversations - method to fetch all agent profiles for admin screens |
| 4.1.8 | 04/22/2025 | order property fields for created_by and created_dts |
| 4.1.7 | 04/21/2025 | conversation agent additional fields |
| 4.1.6 | 04/16/2025 | added channel partner order item properties |
| 4.1.5 | 03/28/2025 | added paypal fastlane constants for payments |
| 4.1.4 | 03/07/2025 | updated github readme.md |
| 4.1.3 | 03/07/2025 | updated github readme.md files |
| 4.1.2 | 03/05/2025 | added ChannelPartnerOrder.use_prior_payment_information_from_order_id |
| 4.1.1 | 02/28/2025 | auto order pause method |
| 4.1.0 | 02/21/2025 | ItemApi.getInventorySnapshot had bad nickname causing bad sdk method name |
| 4.0.245 | 02/20/2025 | automation fix |
| 4.0.244 | 02/20/2025 | no change, revving sdk to troubleshoot java deployment automation |
| 4.0.243 | 02/20/2025 | no change, revving sdk to troubleshoot java deployment automation |
| 4.0.242 | 02/18/2025 | small bug fixes for incorrect return types on several methods |
| 4.0.241 | 02/06/2025 | added storefront_host_name to channel partner order object |
| 4.0.240 | 01/09/2025 | fix for broken 4.0.39 due to incorrect query sig on getCustomers |
| 4.0.239 | 01/09/2025 | added emails parameter to customer queries, refundOrder added to Channel partner |
| 4.0.238 | 12/13/2024 | added user and group ids to conversation agent auth object |
| 4.0.237 | 11/11/2024 | added seo properties to item.content object |
| 4.0.236 | 11/07/2024 | Coupon - PercentOffWithItemsQuantityPurchase - added support for tags |
| 4.0.235 | 11/04/2024 | item - new constant for auto order schedule of every 5 months |
| 4.0.234 | 10/24/2024 | storefront page attribute edit method |
| 4.0.233 | 09/18/2024 | order payment constant for PayPal Fastlane |
| 4.0.232 | 08/29/2024 | add hold_for_transmission to item shipping object |
| 4.0.231 | 08/08/2024 | added query_target to OrderApi.getOrdersBatch to allow cache usage |
| 4.0.230 | 06/24/2024 | conversation object cleanup |
| 4.0.229 | 06/14/2024 | pbx menu - add say voice property |
| 4.0.228 | 06/07/2024 | conversation pbx - adjust agent voicemail box uuid fields |
| 4.0.227 | 06/03/2024 | conversationPbxPhoneNumber - fix serialized name for phone number UUID |
| 4.0.226 | 05/31/2024 | ItemApi.getInventorySnapshot method |
| 4.0.225 | 05/30/2024 | add adult sig req. to the merchant item destination markup for items |
| 4.0.224 | 05/29/2024 | added methods getEmailCommseqRateLimiters, resetEmailCommseqRateLimiters |
| 4.0.223 | 05/28/2024 | added property to OrderQuery object to allow querying from cache |
| 4.0.222 | 05/17/2024 | conv.pbx time based config - changed name from default to default_mapping |
| 4.0.221 | 05/16/2024 | OrderPayment - constants for payment method Amazon Pay and Link |
| 4.0.220 | 05/15/2024 | conversation pbx voicemail mailbox indep. voice properties |
| 4.0.219 | 05/15/2024 | conversation pbx - missing fields on agent object |
| 4.0.218 | 05/14/2024 | conversation pbx - allowed value constants on the action |
| 4.0.217 | 05/13/2024 | conversation pbx - bug fix on camelCase property names |
| 4.0.216 | 05/13/2024 | conversation pbx - allow nullable day of week in time range |
| 4.0.215 | 05/08/2024 | added echeck fields to channel partner order import |
| 4.0.214 | 05/02/2024 | conversation - new method to load pbx audio usage |
| 4.0.213 | 05/02/2024 | autoorder - fields to record merge association and tstamp |
| 4.0.212 | 05/01/2024 | getConversationPbxAudioUploadUrl - fix the response obj def |
| 4.0.211 | 04/24/2024 | esp - add fields for external generation on email |
| 4.0.210 | 04/04/2024 | AutoOrder.calculated_next_shipment_dts |
| 4.0.209 | 04/01/2024 | added merchant_id as read-only top level property of AutoOrder object |
| 4.0.208 | 03/26/2024 | WorkflowTask - added assigned_to_user_or_group field |
| 4.0.207 | 03/25/2024 | workflowtask - add global_task_number and object_task_number |
| 4.0.206 | 03/25/2024 | added sales_rep_code to Channel partner order |
| 4.0.205 | 03/19/2024 | workflow task - method to obtain open task count |
| 4.0.204 | 03/19/2024 | workflow task - addl status values, expiration_dts, and system task type |
| 4.0.203 | 03/15/2024 | workflow - getWorkflowAgentWebsocketAuthorization method added |
| 4.0.202 | 03/08/2024 | added getWorkflowTaskTags method |
| 4.0.201 | 02/27/2024 | esp - sms statistic layer |
| 4.0.200 | 02/20/2024 | Add tag support to CouponAmountOffItems, CouponBuyOneGetOneLimit, CouponDiscountItemWithItemPurchase, CouponFreeItemWithItemPurchase, CouponPercentOffItemsWithItemsPurchase |
| 4.0.199 | 01/16/2024 | order query - support searching by custom fields 8 through 10 |
| 4.0.198 | 01/12/2024 | workflow task - add properties array |
| 4.0.197 | 01/10/2024 | workflow tasks - support for searching by tags |
| 4.0.196 | 01/10/2024 | workflow task - add uuids of related tasks and tags |
| 4.0.195 | 01/03/2024 | workflow - add task_context field to task obj |
| 4.0.194 | 12/15/2023 | bug fix on bad docs breaking yaml schema |
| 4.0.193 | 12/12/2023 | webhook - added event ruler property |
| 4.0.192 | 11/21/2023 | coupons - addl support on tiered amount/percent off items |
| 4.0.191 | 11/20/2023 | coupon - add item tag support to percent off items and free shipping |
| 4.0.190 | 11/20/2023 | item.google_product_search.color bugfix for bad length validation: 20 to 100 |
| 4.0.189 | 11/13/2023 | coupon - editor values for item tags |
| 4.0.188 | 11/13/2023 | coupon - percent off items - add support for include/exclude by item tags |
| 4.0.187 | 11/09/2023 | item - new auto order step type: pause until |
| 4.0.186 | 11/06/2023 | customer api - added wishlist methods |
| 4.0.185 | 11/01/2023 | customer - do_no_send_mail flag added |
| 4.0.184 | 10/30/2023 | cart/order fields for health benefit card values in summary expansion objects |
| 4.0.183 | 10/27/2023 | workflow task object model refinement |
| 4.0.182 | 10/23/2023 | workflow tasks api |
| 4.0.181 | 10/23/2023 | workflow tasks api |
| 4.0.180 | 10/16/2023 | CartSettingsPaymentCreditCard - add collect_credit_card_verification_number_minimum |
| 4.0.179 | 09/28/2023 | dw bi - add aggregation constant of none |
| 4.0.178 | 09/22/2023 | dwbi - new option to control order-by of result set |
| 4.0.177 | 09/15/2023 | new item fields for additional barcodes |
| 4.0.176 | 09/12/2023 | added oids to customer properties |
| 4.0.175 | 09/06/2023 | esp condition for survey trigger |
| 4.0.174 | 09/05/2023 | auto order schedule - add intervals for 4 6 and 8 weeks |
| 4.0.173 | 08/31/2023 | new coupon - free item and free shipping with purchase |
| 4.0.172 | 08/16/2023 | added validate_original_order query param to auto order update method |
| 4.0.171 | 08/14/2023 | esp - add require_order_within_last to the settings object |
| 4.0.170 | 08/14/2023 | esp - expose rate limiter values in settings object |
| 4.0.169 | 07/27/2023 | dw bi - add settings to the report and page objects |
| 4.0.168 | 07/19/2023 | dw bi - add data_source_uuid to filter connection obj |
| 4.0.167 | 07/19/2023 | dw bi - add data_source_uuid to page visualization obj |
| 4.0.166 | 07/19/2023 | dw bi - add data_source_uuid to report data source |
| 4.0.165 | 07/03/2023 | chart constant for dw report tool |
| 4.0.164 | 06/23/2023 | gauge constant for page visualization library |
| 4.0.163 | 06/20/2023 | auto order - establishAutoOrderByReferenceOrderId method added |
| 4.0.162 | 06/20/2023 | coupon add allowed values for usable_by and new OncePerNewCustomerForItem flag |
| 4.0.161 | 06/15/2023 | add pickup_dts to order.shipping object |
| 4.0.160 | 06/14/2023 | dw bi: add request_dts on the execute queries request and report data set objects |
| 4.0.159 | 06/09/2023 | distribution center pickup times |
| 4.0.158 | 06/08/2023 | customer profile qb tax exempt reason code field |
| 4.0.157 | 06/06/2023 | auto order add_ons |
| 4.0.156 | 05/25/2023 | added venmo constants for payment type |
| 4.0.155 | 05/18/2023 | dw bi - send back the executed SQL |
| 4.0.154 | 05/04/2023 | item api added methods for items reviews |
| 4.0.153 | 04/28/2023 | item - pricing tier level flag for exempt from min item count |
| 4.0.152 | 04/27/2023 | order - expose dual vaulted identifiers |
| 4.0.151 | 04/24/2023 | internal development - data warehouse |
| 4.0.150 | 04/21/2023 | internal development - data warehouse |
| 4.0.149 | 04/19/2023 | internal development - data warehouse |
| 4.0.148 | 04/19/2023 | internal dev - data warehouse |
| 4.0.147 | 04/17/2023 | OrderPaymentTransaction - expose the transaction id |
| 4.0.146 | 04/11/2023 | missing sezzle payment constant |
| 4.0.145 | 04/10/2023 | data warehouse internal dev |
| 4.0.144 | 03/29/2023 | internal development |
| 4.0.143 | 03/22/2023 | data warehouse internal dev |
| 4.0.142 | 03/22/2023 | dw initial framework |
| 4.0.141 | 03/22/2023 | order api - refundable response added manual_because_multiple_charges boolean field |
| 4.0.140 | 03/21/2023 | order api - new stage named Hold |
| 4.0.139 | 03/14/2023 | order.getOrderEdiDocuments |
| 4.0.138 | 03/01/2023 | convo - add sentiment record to conversation obj |
| 4.0.137 | 02/22/2023 | convo - customer initiated flag on engagement |
| 4.0.136 | 02/20/2023 | refund reasons |
| 4.0.135 | 02/17/2023 | convo api - smsUnsubscribeConversation method |
| 4.0.134 | 02/15/2023 | added auto order sorting by next_shipment_dts |
| 4.0.133 | 02/10/2023 | convo - add storefront_host_name to search request |
| 4.0.132 | 02/07/2023 | convo - new event for when a customer joins a queue |
| 4.0.131 | 02/07/2023 | convo - new event for when a customer joins a queue |
| 4.0.130 | 02/06/2023 | convo - add conversation_arn to ConversationWebsocketMessage |
| 4.0.129 | 02/01/2023 | convo - agent profile get/update methods |
| 4.0.128 | 01/27/2023 | convo - added event_engage_customer property to message |
| 4.0.127 | 01/27/2023 | conversations - getLocationsForEngagement method |
| 4.0.126-RC | 01/26/2023 | typo in ConversationWebsocketMessage |
| 4.0.125-RC | 01/26/2023 | conversation - added message type of engagement prompt |
| 4.0.124-RC | 01/25/2023 | convo event for engage customer |
| 4.0.123-RC | 01/25/2023 | order api method generateInvoice |
| 4.0.122-RC | 01/24/2023 | auto order - cancel minimum and change balance options |
| 4.0.121-RC | 01/23/2023 | conversation - method to fetch single engagement record |
| 4.0.120-RC | 01/19/2023 | added skip_on_rebill field to coupon object |
| 4.0.119-RC | 01/19/2023 | convo - getConversationPermissions added |
| 4.0.118-RC | 01/18/2023 | conversation get dept member list method added |
| 4.0.117-RC | 01/18/2023 | conversation dept members |
| 4.0.116-RC | 01/18/2023 | channel partner ship to pref desc field |
| 4.0.115-RC | 01/17/2023 | changed convo webchat constant |
| 4.0.114-RC | 01/17/2023 | support for checkout item properties |
| 4.0.113-RC | 01/14/2023 | add external_id to the point of sale location object |
| 4.0.112-RC | 01/13/2023 | channel - ops to manage ship to prefs |
| 4.0.111-RC | 01/11/2023 | conversations - adjust search results to return multiple convo summaries |
| 4.0.110-RC | 01/10/2023 | add method to query integration log record by oid |
| 4.0.109-RC | 01/10/2023 | bug fix for typescript enum error due to apost |
| 4.0.108-RC | 01/10/2023 | integration log tracking of associated auto order oids |
| 4.0.107-RC | 01/06/2023 | conversation search response object bug fix |
| 4.0.106-RC | 01/05/2023 | communications - added maximum_enrolled flag on flow object |
| 4.0.105-RC | 01/03/2023 | conversation events for party leave and join |
| 4.0.104-RC | 01/03/2023 | order point of sale details |
| 4.0.103-RC | 12/27/2022 | additional loyalty related coupons |
| 4.0.102-RC | 12/21/2022 | conversation development |
| 4.0.101-RC | 12/20/2022 | conversation engagement update |
| 4.0.100-RC | 12/20/2022 | conversation engagement update |
| 4.0.99-RC | 12/15/2022 | conversation search - added start date filtering |
| 4.0.98-RC | 12/15/2022 | conversation searching |
| 4.0.97-RC | 12/13/2022 | conversations - add email and sms_phone to participant object |
| 4.0.96-RC | 12/09/2022 | conversations - message translation |
| 4.0.95-RC | 12/08/2022 | conversation canned messages |
| 4.0.94-RC | 12/08/2022 | communications - expose the rebuild percentage |
| 4.0.93-RC | 12/06/2022 | convo - add session_start_dts to webchat context, cart - add customer_profile.signup_dts |
| 4.0.92-RC | 12/06/2022 | customer api - expose edi information and editor values |
| 4.0.91-RC | 12/02/2022 | conversations - customer last unresponded dts |
| 4.0.90-RC | 11/30/2022 | conversations - add order and auto order information to webchat context |
| 4.0.89-RC | 11/30/2022 | order item - addl fields for linking kits to kit components |
| 4.0.88-RC | 11/29/2022 | converstation marked convo read method |
| 4.0.87-RC | 11/21/2022 | coupon - addl optional minimums for percent off msrp items coupon |
| 4.0.86-RC | 11/21/2022 | conversation context method |
| 4.0.85-RC | 11/21/2022 | adjusted conversation event model |
| 4.0.84-RC | 11/15/2022 | conversation methods bug fix |
| 4.0.83-RC | 11/15/2022 | conversations - enw events for add coupon and items |
| 4.0.82-RC | 11/15/2022 | order api new method is order refundable |
| 4.0.81-RC | 11/15/2022 | increase order property length to 10k char |
| 4.0.80-RC | 11/14/2022 | conversations - add allowed values for update agent status |
| 4.0.79-RC | 11/09/2022 | conversations - add an enum of event typing |
| 4.0.78-RC | 11/04/2022 | new coupon type percent based on msrp |
| 4.0.77-RC | 10/31/2022 | communication bug fix on dup annonation |
| 4.0.76-RC | 10/31/2022 | communications - addl statistics on EmailStepStat object |
| 4.0.75-RC | 10/26/2022 | esp - methods for sms testing |
| 4.0.74-RC | 10/17/2022 | conversations - add last_interactive_message_dts |
| 4.0.73-RC | 10/07/2022 | bug fix for digital items response |
| 4.0.72-RC | 10/05/2022 | storefront rest file cdn icon urls |
| 4.0.71-RC | 10/04/2022 | bug fix for new storefront file mgr |
| 4.0.70-RC | 09/29/2022 | page_paths search category for search2 method |
| 4.0.69-RC | 09/29/2022 | storefront file mgr calls tweaks |
| 4.0.68-RC | 09/29/2022 | storefront methods for file manager ui |
| 4.0.67-RC | 09/27/2022 | added digital library call for unassociated content |
| 4.0.66-RC | 09/22/2022 | digital item mgmt testing |
| 4.0.65-RC | 09/22/2022 | testing digital file mgmt calls |
| 4.0.64-RC | 09/19/2022 | conversations pagination |
| 4.0.63-RC | 09/13/2022 | storefront comms - postcard tracking |
| 4.0.62-RC | 09/12/2022 | storefront comm - send back reviews.io configured flag on getEmailSettings |
| 4.0.61-RC | 09/07/2022 | sf comms - using aws event ruler for bigquery segmentation validation |
| 4.0.60-RC | 09/02/2022 | customer editor added loyal ledger descriptions |
| 4.0.59-RC | 08/30/2022 | storefront comm fields for sms configuration |
| 4.0.58-RC | 08/26/2022 | postcard address fields for comm sequence testing |
| 4.0.57-RC | 08/22/2022 | exposing individual reviews within item.review object |
| 4.0.56-RC | 08/19/2022 | order api - added cell phone fields for sms |
| 4.0.55-RC | 08/12/2022 | internal code to allow merchant login as customer |
| 4.0.54-RC | 08/11/2022 | fix entry_dts type on gift certificate ledger |
| 4.0.53-RC | 08/10/2022 | conversation event refactoring |
| 4.0.52-RC | 08/05/2022 | conversation adjustments for ES integration |
| 4.0.51-RC | 08/05/2022 | conversations query by medium and stats fixes |
| 4.0.50-RC | 08/03/2022 | conversation summary participants |
| 4.0.49-RC | 08/03/2022 | more conversation events |
| 4.0.48-RC | 08/02/2022 | storefront communication sequence test method |
| 4.0.47-RC | 08/01/2022 | conversation event refinement |
| 4.0.46-RC | 07/29/2022 | conversation development |
| 4.0.45-RC | 07/28/2022 | conversation bug fixes |
| 4.0.44-RC | 07/28/2022 | conversation message upload keys property |
| 4.0.43-RC | 07/26/2022 | conversations - queue statistics |
| 4.0.42-RC | 07/25/2022 | conversation development |
| 4.0.41-RC | 07/25/2022 | conversations bug fixes |
| 4.0.40-RC | 07/25/2022 | conversations - add a websocket message model |
| 4.0.39-RC | 07/21/2022 | conversation response types improvements |
| 4.0.38-RC | 07/21/2022 | conversation bugfix for poor response objects |
| 4.0.37-RC | 07/20/2022 | conversation participant name added |
| 4.0.36-RC | 07/18/2022 | twilio dev |
| 4.0.35-RC | 07/14/2022 | Add channel storefront_oid to the customer activity record |
| 4.0.34-RC | 07/11/2022 | Customer API - mergeCustomer method |
| 4.0.33-RC | 07/05/2022 | docs update |
| 4.0.32-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.31-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.30-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.29-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.28-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.27-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.26-RC | 06/24/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.25-RC | 06/23/2022 | removed unneeded consumes declarations on several api calls (yaml fix) |
| 4.0.24-RC | 06/23/2022 | automation test |
| 4.0.23-RC | 06/23/2022 | automation test |
| 4.0.22-RC | 06/23/2022 | v4 automation testing - not production ready |
| 4.0.21-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.20-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.19-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.18-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.17-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.16-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.15-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.14-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.13-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.12-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.11-RC | 06/22/2022 | v4 automation testing - not production ready |
| 4.0.10-RC | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.9-RC | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.8-RC | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.7-RC | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.6-RC | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.5 | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.4 | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.3 | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.2 | 06/21/2022 | v4 automation testing - not production ready |
| 4.0.1-RC | 06/21/2022 | ChannelPartnerApi.estimateShipping |
| 3.10.14 | 06/16/2022 | added createEmailSendingDomain2 to support additional MTAs |
| 3.10.13 | 06/16/2022 | renamed latest method to avoid conflict between customer profile search and storefront search |
| 3.10.12 | 06/16/2022 | Customer profile search method to look up tags |
| 3.10.11 | 06/10/2022 | esp segment 3rd party sync add/remove tag fields |
| 3.10.10 | 06/06/2022 | storefront communication options for syncing to third party provider list |
| 3.10.9 | 06/01/2022 | bug fixes for customer profile store credit |
| 3.10.8 | 05/27/2022 | customer store credit |
| 3.10.7 | 05/23/2022 | add internal gift cert to order summary, addl provider info for storefront comm |
| 3.10.6 | 05/23/2022 | add internal gift cert to order summary, addl provider info for storefront comm |
| 3.10.5 | 05/20/2022 | dependabot on java gson version |
| 3.10.4 | 05/20/2022 | dependabot on java gson |
| 3.10.3 | 05/20/2022 | OrderApi.generatePackingSkip calls had wrong return type |
| 3.10.2 | 05/12/2022 | ChannelPartnerApi renamed one of the delete methods |
| 3.10.1 | 05/12/2022 | ChannelPartnerApi added orderId to import response obj |
| 3.10.0 | 05/10/2022 | beta release of ChannelPartnerApi |
| 3.9.8 | 04/26/2022 | OrderApi.duplicateOrder |
| 3.9.7 | 04/25/2022 | integration logs method for zpl to pdf conversion |
| 3.9.6 | 04/25/2022 | storefront communications email magic link setting |
| 3.9.5 | 04/14/2022 | postcard screenshot bug fixes |
| 3.9.4 | 04/13/2022 | Added spf DNS record to the sending domain object |
| 3.9.3 | 04/06/2022 | fix return object on send webhook test method |
| 3.9.2 | 04/04/2022 | user.email field extended and postcard screenshot fields |
| 3.9.1 | 03/03/2022 | javascript sdk package.json bug fix |
| 3.9.0 | 03/03/2022 | removed  ultra_cart_rest_api_v2.d.ts from javascript sdk because typescript sdk exists now |
| 3.8.8 | 03/02/2022 | bug fix for ruby sdk, uri.escape deprecated in 3.x |
| 3.8.7 | 03/02/2022 | bug fix for ruby sdk, uri.escape deprecated in 3.x |
| 3.8.6 | 03/02/2022 | bug fix for ruby sdk, uri.escape deprecated in 3.x |
| 3.8.5 | 02/25/2022 | new coupon for fixed cost shipping method |
| 3.8.2 | 02/16/2022 | create gift certificate method was missing email |
| 3.8.1 | 02/16/2022 | auto order item level pause flag |
| 3.8.0 | 02/16/2022 | gift certificate api (testing) |
| 3.7.38 | 02/15/2022 | gift certificate api (currently in testing) |
| 3.6.38 | 02/07/2022 | Exposed auto order logs |
| 3.6.37 | 02/04/2022 | insurance type for insurance payments |
| 3.6.36 | 12/29/2021 | Mail actual post card flag added to test method |
| 3.6.35 | 12/14/2021 | Add cancel_auto_order option to the accounts receivable retry configuration |
| 3.6.34 | 12/14/2021 | add evening phone E.164 fields to order billing/shipping objects |
| 3.6.33 | 12/13/2021 | automation testing |
| 3.6.32 | 12/10/2021 | testing automation - message 4 |
| 3.6.25 | 12/06/2021 | sdk automation testing.  no changes to actual sdk | 
| 3.6.24 | 11/30/2021 | return items_invalid_for_coupons for CouponResponse object to drive UI warnings | 
| 3.6.23 | 11/29/2021 | Item auto order prohibit cards that expire in months setting. | 
| 3.6.22 | 11/23/2021 | new storefront methods for twilio configuration | 
| 3.6.21 | 11/08/2021 | item shipping distribution center level CostOfGoodsSold | 
| 3.6.20 | 11/05/2021 | additional item auto order step types  | 
| 3.6.19 | 10/05/2021 | item fulfillment add ons  | 
| 3.6.18 | 09/30/2021 | terms if auto order flag added  | 
| 3.6.16 | 09/30/2021 | item exclude from sitemap field  | 
| 3.6.15 | 09/28/2021 | added refund_claim_id to insurance object  | 
| 3.6.14 | 09/21/2021 | configuration api fix.  the echeck test methods were attached to the paper check object  | 
| 3.6.13 | 09/20/2021 | expose EasyPost tracker id if available on shipment tracking details  | 
| 3.6.12 | 09/20/2021 | fix method for getCouponsByQuery to be POST instead of GET since it uses a JSON body  | 
| 3.6.11 | 09/13/2021 | fix for CouponApi, broke due to inadvertent parameter inclusion   | 
| 3.6.10 | 09/09/2021 | added constants for Google Shopping payment method (still in development)  | 
| 3.6.9 | 09/07/2021 | customer profile editor values have new list of state optional countries  | 
| 3.6.8 | 08/31/2021 | coupon query field to allow merchant code and description to be searched  | 
| 3.6.7 | 08/27/2021 | customer profile affiliate information now contains affiliate first and last name | 
| 3.6.6 | 08/26/2021 | configuration api - more field changes for UI | 
| 3.6.5 | 08/25/2021 | configuration api - removed some internal fields from sdk | 
| 3.6.4 | 08/24/2021 | configuration api - new payment method named insurance | 
| 3.6.1 | 08/23/2021 | configuration api - enum problems, also added order.item.tracking_number to support line item tracking numbers | 
| 3.6.0 | 08/19/2021 | coupon api - changed tieredAmountOffItem to support mulitple items | 
| 3.5.3 | 08/18/2021 | configuration api - added credit card rate to UltraCart Payments object | 
| 3.5.1 | 08/11/2021 | email webhook test method | 
| 3.5.0 | 08/11/2021 | RestOrderChannelPartner.store_completed was incorrectly defaulting to true | 
| 3.4.13 | 08/10/2021 | configuration api - changed some field types form string to number | 
| 3.4.12 | 08/10/2021 | email engine - added webhook editor values for internal ui  | 
| 3.4.9 | 08/05/2021 | configuration api - updated annotations for method names | 
| 3.4.8 | 08/04/2021 | configuration api - payments config refactoring | 
| 3.4.7 | 08/04/2021 | esp folders for lists/segments | 
| 3.4.5 | 08/03/2021 | configuration api bug fix for a bad response object on updateRotatingTransactionGateway | 
| 3.4.3 | 08/03/2021 | package tracking - add event_iso_date and event_timezone_id | 
| 3.4.2 | 07/29/2021 | bug fixes for new configuration api | 
| 3.4.1 | 07/29/2021 | bug fixes for new configuration api | 
| 3.4.0 | 07/29/2021 | added new configuration api (not live yet. sdk only works against development presently) | 
| 3.3.2 | 07/16/2021 | sso bug fixes | 
| 3.3.1 | 07/16/2021 | screen recording - event sub text used for assisting in UX rendering | 
| 3.3.0 | 07/16/2021 | new endpoint SingleSignOn | 
| 3.2.15 | 07/13/2021 | storefront communications - added methods to retrieve step dispatch logs | 
| 3.2.14 | 07/12/2021 | fix documentation bug on packing slip methods for order api | 
| 3.2.13 | 07/12/2021 | coupon api - added hideFromCustomer flag | 
| 3.2.12 | 07/09/2021 | new fulfillment and order methods for generation of packing slips | 
| 3.2.11 | 07/08/2021 | screen recording - missing external tracking flag added | 
| 3.2.10 | 07/08/2021 | customer profile - allow drop shipping options | 
| 3.2.9 | 07/07/2021 | screen recording - provide cost per thousand and retention interval | 
| 3.2.8 | 07/06/2021 | intgeration logs - min max log date/time retured in filter values | 
| 3.2.7 | 07/05/2021 | integration logger bug fixes | 
| 3.2.6 | 06/25/2021 | integration log: added logger name | 
| 3.2.2 | 06/24/2021 | integration log file mime type added | 
| 3.2.0 | 06/23/2021 | Changed 4 methods due to naming conflicts revealed through swagger validator.  All internal methods, so impact should be negligible | 
| 3.1.50 | 06/23/2021 | Integrated Logging: returning back streamed files for log requests | 
| 3.1.49 | 06/17/2021 | Integrated Logging: standardize the response object from getIntegrationLog method  | 
| 3.1.47 | 06/16/2021 | Integrated Logging Rest API  | 
| 3.1.46 | 06/14/2021 | Screen recording: server side paginated heat map index with url contains filters, Item: channel partner item mapping unit cost override  | 
| 3.1.44 | 06/02/2021 | new boolean flag on items object to allow sharing of reviews between items   | 
| 3.1.43 | 06/01/2021 | fix item serialized name of item serialized name for channel partner item mappings  | 
| 3.1.42 | 06/01/2021 | added quickbooks accounting codes at the tiered level for tiered coupons  | 
| 3.1.41 | 05/21/2021 | screen recording heatmap methods | 
| 3.1.40 | 05/20/2021 | Order.summary.actual_payment_processing field added | 
| 3.1.39 | 05/19/2021 | full deployment to ensure all language SDKs are up to date | 
| 3.1.37 | 05/18/2021 | removed php sdk dependency on ext-mbstring by generating sdk with polyfill requirement.  sdk is more portable now. | 
| 3.1.35 | 05/14/2021 | screen recording histogram data  | 
| 3.1.34 | 05/12/2021 | screen recording preferred language, last x days filter, referrer domain | 
| 3.1.33 | 05/11/2021 | creen recording filter for affiliate id and email | 
| 3.1.32 | 05/06/2021 | customer profile pending loyalty points  | 
| 3.1.31 | 05/06/2021 | Added email domian field to screen recordings for filtering  | 
| 3.1.30 | 04/27/2021 | OrderApi.processPayment now allows a specific amount to be billed  | 
| 3.1.29 | 04/26/2021 | screen recording language iso code | 
| 3.1.28 | 04/26/2021 | screen recording statistics on the setting object | 
| 3.1.27 | 04/20/2021 | bug fix - annotation misspell on new email campaign property |
| 3.1.26 | 04/20/2021 | StoreFront Connumications - flag to end campaign or flow once purchase happens anywhere |
| 3.1.25 | 04/19/2021 | Screen recording UTM campaign and source fields |
| 3.1.24 | 04/16/2021 | Screen recording aggregations on communications campaign/flows |
| 3.1.22 | 04/09/2021 | Move URL filter values into page level view for screen recordings |
| 3.1.18 | 03/17/2021 | Added order query by ship on date |
| 3.1.17 | 03/17/2021 | New coupon - percent off MSRP item |
| 3.1.16 | 03/16/2021 | screen recording filter page parameter names |
| 3.1.15 | 03/15/2021 | fix response from deleteScreenRecordingSegment that should have been void |
| 3.1.14 | 03/15/2021 | sort screen recordings by favorite flag |
| 3.1.13 | 03/02/2021 | new webhook order_payment_failed |
| 3.1.12 | 02/25/2021 | added screen recording visitor_first_seen property |
| 3.1.11 | 02/24/2021 | Added Screen recording visitor number |
| 3.1.10 | 02/24/2021 | Added Screen recording merchant notes |
| 3.1.9 | 02/24/2021 | Allow coupons to be configured as unique with expiration on cart step within StoreFront Communications |
| 3.1.8 | 02/24/2021 | Add flag: screen recording missing event boolean |
| 3.1.5 | 02/12/2021 | Bug Fix: PHP retry logic missing a closing brace. Also screen recording page view data response refactor |
| 3.1.3 | 02/11/2021 | Bug Fix: wrong return type on CustomerApi.validateEmailVerificationToken |
| 3.1.2 | 02/11/2021 | CustomerApi.getEmailVerificationToken, CustomerApi.validateEmailVerificationToken added to allow for custom email verification.  Also added favorite flag to screen recording object |
| 3.1.1 | 02/10/2021 | CustomerApi.getCustomerByEmail() method added |
| 3.1.0 | 02/10/2021 | Minor revision jump.  Added new convenience methods for simple_key use to all api calls.  Updated docs |
| 3.0.75 | 02/01/2021 | StoreFront Communication plan revision (internal use) |
| 3.0.71 | 01/28/2021 | BugFix: PHP SDK retry logic NPE |
| 3.0.70 | 01/26/2021 | Checkout return URL support |
| 3.0.66 | 01/22/2021 | code library attributes (mostly internal dev) |
| 3.0.65 | 01/22/2021 | Added folder support for email campaigns and flows |
| 3.0.64 | 01/20/2021 | Bug fix on revenue per customer field incorrectly named. |
| 3.0.63 | 01/20/2021 | CouponAPI: bug fixes and new method doesCouponCodeExist |
| 3.0.62 | 01/19/2021 | Added retry ability when rate limit is triggered (PHP SDK only) only) Other sdk to follow. |
| 3.0.60 | 01/14/2021 | Working with Ruby SDK |
| 3.0.57 | 12/17/2020 | CouponAPI: Added Buy one get one free coupon |
| 3.0.53 | 12/14/2020 | StoreFrontAPI: added a duplicate method to load the pricing tiers on the StoreFront |
| 3.0.51 | 12/09/2020 | UserAPI: internal bug preventing proper usage of user group creation |
| 3.0.45 | 12/03/2020 | CouponAPI: added partial searches to getCoupon params, added deleteCoupons method, fixed bugs |
| 3.0.44 | 12/03/2020 | Code library updates, intended for internal use |
| 3.0.43 | 12/02/2020 | Added fields to code library to handle versions of published items |
| 3.0.42 | 12/02/2020 | Added display values to CouponApi.getEditorValues to make type dropdowns easy |
| 3.0.41 | 11/17/2020 | New modify cart step option for StoreFront communications |
| 3.0.39 | 11/12/2020 | Added Customer.tax_codes.taxjar_exemption_type |
| 3.0.38 | 11/09/2020 | Added TaxProviderTaxJar.configuration.send_outside_nexus flag |
| 3.0.37 | 11/06/2020 | Added transactional email screenshots for code library |
| 3.0.36 | 11/03/2020 | Added missing constant for pre-order stage |
| 3.0.34 | 10/26/2020 | UserAPI initial release |
| 3.0.33 | 10/23/2020 | Added library_item_oid to StoreFront Communications email object for upcoming code library |
| 3.0.32 | 10/21/2020 | Added new StoreFrontApi.search method that takes a POST instead of a GET |
| 3.0.31 | 10/16/2020 | more dev work on code library (internal) |
| 3.0.30 | 10/08/2020 | development work on code library (internal), first version of UserAPI.  The UserAPI is not live yet. |
| 3.0.29 | 09/29/2020 | new boolean field on coupon: bug fix |
| 3.0.28 | 09/29/2020 | new boolean field on coupon: free item with purchase of another item |
| 3.0.27 | 09/29/2020 | Refactored the code library applyToStoreFront to provide support for marketing emails |
| 3.0.26 | 09/25/2020 | Expose actual shipping and fulfillment costs in the order summary object |
| 3.0.25 | 09/16/2020 | New method: OrderApi.adjustOrderTotal |
| 3.0.24 | 09/10/2020 | Bugfix: incorrect response type on CheckoutAPI.registerAffiliateClick |
| 3.0.23 | 09/02/2020 | Added flag to email plan object.  allow_tracking_emails |
| 3.0.22 | 09/02/2020 | Order object - added tracking details |
| 3.0.21 | 09/01/2020 | break fix in php sdk due to bad namespace |
| 3.0.20 | 09/01/2020 | Added OrderApi.processPayment method |
| 3.0.19 | 08/28/2020 | Code Library development: added kraken parameters for thumbnail image generation. |
| 3.0.17 | 08/26/2020 | cont. development work on Code Library |
| 3.0.14 | 08/19/2020 | development work on Code Library |
| 3.0.13 | 08/18/2020 | development work on Code Library |
| 3.0.12 | 08/13/2020 | screenshot urls for campaigns and flows (storefront communications) |
| 3.0.11 | 08/12/2020 | Refactoring and development for Code Library (not released yet) |
| 3.0.10 | 08/10/2020 | Method for registering an affliate click via the SDK, found within CheckoutAPI |
| 3.0.8 | 08/05/2020 | stub for code library 'getLibraryFilterValues' for populating drop down lists |
| 3.0.4 | 08/05/2020 | fixed misspell of 'version' in LibraryItem object. |
| 3.0.3 | 08/04/2020 | added description to addToLibrary call to allow for initial description |
| 3.0.2 | 08/03/2020 | added option on email render step config to allow override of subject, added flow/campaign flag to end once customer purchases |
| 3.0.1 | 07/27/2020 | added init_json to storefront communication email objects |
| 3.0.0 | 07/01/2020 | upgraded our swagger-codegen fork to the latest swagger source code. this was a major changes so we jumped version numbers.  please test all code. |

Some changes jump version numbers due to multiple commits for bug fixes, omissions, and errors.
At UltraCart, we eat our own dog food, and we increment the version number for every commit in order
to generate a new javascript npm.  For this reason, version gaps will be found in the change log above.
