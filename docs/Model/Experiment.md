# # Experiment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**container_id** | **string** | Contained ID where the experiment element was located | [optional]
**duration_days** | **int** | Duration in days | [optional]
**end_dts** | **string** | End date/time | [optional]
**equal_weighting** | **bool** | Whether or not traffic is equally weighted or shifts over time during the experiment | [optional]
**experiment_type** | **string** | The type of experiment | [optional]
**id** | **string** | Experiment id | [optional]
**name** | **string** | Experiment name | [optional]
**notes** | **string** | Notes about the experiment | [optional]
**objective** | **string** | Objective that is being optimized | [optional]
**objective_parameter** | **string** | Objective parameter (such as event name) that is being optimized | [optional]
**openai_current_iteration** | **int** | The current iteration of the OpenAI related experiment | [optional]
**openai_element_type** | **string** | The type of OpenAI element being experimented on | [optional]
**openai_model** | **string** | The type of OpenAI model used | [optional]
**openai_total_iterations** | **int** | The total number of iterations to perform on the experiment | [optional]
**optimization_type** | **string** | Type of optimization | [optional]
**p95_sessions_needed** | **int** | Estimated sessions needed to achieve P95 | [optional]
**p_value** | **float** | Statistics p-value for the experiment | [optional]
**session_count** | **int** | Total number of sessions in the experiment | [optional]
**start_dts** | **string** | Start date/time | [optional]
**status** | **string** | Status of the experiment | [optional]
**storefront_experiment_oid** | **int** | Storefront Experiment Oid | [optional]
**storefront_oid** | **int** | Storefront oid | [optional]
**uri** | **string** | URI the experiment was started on | [optional]
**variations** | [**\ultracart\v2\models\ExperimentVariation[]**](ExperimentVariation.md) | Variations being tested in the experiment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
