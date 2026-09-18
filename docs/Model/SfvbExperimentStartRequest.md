# # SfvbExperimentStartRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration_days** | **int** | url - 3 to 90.  A url experiment always ends by itself after this many days. | [optional]
**equal_weighting** | **bool** | url - true keeps the split fixed.  false shifts traffic toward the leader as the experiment runs.  Defaults to true. | [optional]
**name** | **string** | url - experiment name. | [optional]
**notes** | **string** | url - notes, such as the hypothesis being tested. | [optional]
**objective** | **string** | url - one of the objectives from the objective list. | [optional]
**objective_parameter** | **string** | url - the event name, when the objective is Events. | [optional]
**optimization_type** | **string** | url - MAXIMUM or MINIMUM. | [optional]
**path** | **string** | page - path of the page whose body holds the experiment element. | [optional]
**slot** | **string** | page - the body file&#39;s name without .cjson.  Defaults to body. | [optional]
**type** | **string** | page or url. | [optional]
**variations** | [**\ultracart\v2\models\SfvbExperimentStartVariation[]**](SfvbExperimentStartVariation.md) | url - 2 to 5 pages.  The first is the control. | [optional]
**widget_id** | **string** | page - id of the experiment element in that body. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
