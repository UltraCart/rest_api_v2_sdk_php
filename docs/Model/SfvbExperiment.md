# # SfvbExperiment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auto_ends_at** | **string** | When the experiment engine will end this experiment by itself and declare the variation with the best raw objective per session the winner, without a significance check (ISO 8601, UTC).  Set for running url and theme experiments, and for any running experiment whose traffic shifts toward the leader (equal_weighting false).  Null when only ending it deliberately will stop it. | [optional]
**days_elapsed** | **int** | Whole days the experiment has run, up to now or to when it ended. | [optional]
**experiment** | [**\ultracart\v2\models\Experiment**](Experiment.md) |  | [optional]
**notice** | **string** | Something the caller should know about what this call did or could not do. | [optional]
**p_value_test** | **string** | The test behind p_value.  one_way_anova across all variations, so a low p_value says some variation differs, not which one is best. | [optional]
**page_body_path** | **string** | Set when this call rewrote a page body - starting a page experiment writes its id there, and ending one without a winner clears it.  Pull the file again before editing it. | [optional]
**page_body_sha256** | **string** | The rewritten page body&#39;s new hash, for If-Match on the next write. | [optional]
**router_url** | **string** | For a url experiment, the address visitors must enter through to be split between the pages.  Ads and links must point here, not at the pages. | [optional]
**sessions_needed_computed_dts** | **string** | When p95_sessions_needed was last estimated (ISO 8601, UTC).  It is estimated only once the experiment has 1000 sessions, and at most hourly.  Null before then. | [optional]
**type** | **string** | page for an experiment element inside a page, url for a split between pages, theme for a split between themes, openai for a generated headline experiment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
