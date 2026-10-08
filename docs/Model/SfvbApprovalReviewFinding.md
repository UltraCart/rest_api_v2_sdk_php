# # SfvbApprovalReviewFinding

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | What kind of problem, such as data_exfiltration or third_party_tracking. | [optional]
**clear_violation** | **bool** | True when this alone would justify refusing the script. | [optional]
**evidence** | **string** | The code quoted from the script, at most 500 characters. | [optional]
**line** | **int** | The line of the script the evidence is on, when the reviewer named one. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
