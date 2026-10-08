# # SfvbApproval

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The gated action. | [optional]
**approval_id** | **string** | Send this as the Approval-Id header on the gated call once status is approved. | [optional]
**approval_url** | **string** | The page where the person approves or denies.  Show it to them.  Never open or fill it in yourself. | [optional]
**created_at** | **string** | When the request was made, ISO 8601 UTC. | [optional]
**description** | **string** | The sentence the person reads before approving.  Written by the server, not the agent. | [optional]
**expires_at** | **string** | When this approval stops being usable, ISO 8601 UTC.  For a pending request, when it lapses undecided.  For an approved one, when it must have been used by. | [optional]
**expires_in_seconds** | **int** | Seconds until expires_at.  Zero once passed. | [optional]
**fresh_code_required** | **bool** | True when the person must enter a new 2FA code for this request even inside an approval session. | [optional]
**interval_seconds** | **int** | Poll no more often than this. | [optional]
**outcome** | **string** | Once used, succeeded or failed.  Used with no outcome means the result is unknown.  Check the target and never send the call again with this approval. | [optional]
**outcome_code** | **string** | The error code the gated call failed with. | [optional]
**outcome_http_status** | **int** | The HTTP status the gated call answered with. | [optional]
**params** | [**\ultracart\v2\models\SfvbApprovalParams**](SfvbApprovalParams.md) |  | [optional]
**reason** | **string** | The reason the agent sent, as stored and shown (cleaned and capped). | [optional]
**scope** | **string** | Where the action applies.  The storefront host name, or account for account-wide actions. | [optional]
**status** | **string** | pending, approved, denied, cancelled, expired or used.  Only approved may be sent with the gated call. | [optional]
**storefront_oid** | **int** | The storefront the action runs on.  Absent for account-wide actions. | [optional]
**used_at** | **string** | When the gated call used this approval, ISO 8601 UTC. | [optional]
**user_code** | **string** | Short matching code.  Print it next to approval_url so the person can check the page shows the same code. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
