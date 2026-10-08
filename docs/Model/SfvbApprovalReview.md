# # SfvbApprovalReview

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apis** | **string[]** | Browser features the script uses that matter for safety, such as network calls, cookies, storage and dynamic code. | [optional]
**domains** | **string[]** | Every host the script names, found by UltraCart&#39;s scanner rather than the AI. | [optional]
**findings** | [**\ultracart\v2\models\SfvbApprovalReviewFinding[]**](SfvbApprovalReviewFinding.md) | What the reviewers flagged, each with the line and the quoted code. | [optional]
**new_domains** | **string[]** | Hosts the current version of the file does not name. | [optional]
**prompt_version** | **string** | Version of the review policy that produced this. | [optional]
**reviewed_at** | **string** | When the review ran, ISO 8601 UTC. | [optional]
**signals** | **string[]** | Obfuscation, card field and credential signals the scanner found.  Credentials are named by kind, never by value. | [optional]
**size_bytes** | **int** | Size of the reviewed script in bytes. | [optional]
**summary** | **string** | What the script does, in plain words, as the reviewers read it. | [optional]
**verdict** | **string** | approve when both reviewers found nothing, human when the person should look closely.  On a refused request, block when both reviewers found a clear violation, error when the review could not finish. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
