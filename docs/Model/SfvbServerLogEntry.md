# # SfvbServerLogEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category** | **string** | The area that wrote the line, such as VELOCITY, FLOW, CACHE or RUNTIME.  Empty for SYSERR lines. | [optional]
**level** | **string** | DEBUG, INFO, WARN, ERROR or SYSERR.  SYSERR is an internal logging failure and counts as an error. | [optional]
**logged_at** | **string** | The line&#39;s own time as the log wrote it, yyyy/MM/dd hh.mm.ss on a 12 hour clock without AM or PM.  Use the log start_date and the entry order for real timing. | [optional]
**message** | **string** | The line&#39;s text.  A message that spanned several lines keeps its line breaks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
