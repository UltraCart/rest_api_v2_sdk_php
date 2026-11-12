# # SfvbContainerVersion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | The CJSON this version held.  Populated only when reading a single version, and null when the operation is create.  Listings omit it because container CJSON is large. | [optional]
**comment** | **string** | Comment recorded with the write that replaced this version. | [optional]
**container_history_oid** | **int** | History record oid.  Pass to the revert operation on the owning container.  Absent on the entry marked current, which holds the value stored right now, has no history row of its own, and so cannot be fetched or reverted to. | [optional]
**container_name** | **string** | Container name, where the owner has more than one container. | [optional]
**content_created_dts** | **string** | When this version&#39;s content was written, ISO 8601 UTC.  Same source and limits as content_edited_by. | [optional]
**content_edited_by** | **string** | Login of whoever wrote this version&#39;s content, taken from the write recorded on the next older entry.  Absent on a create entry and on the oldest entry kept, such as a template body that was in place before any history.  Saves made outside this API, in the admin visual builder, are not recorded, so after one this names the previous API write. | [optional]
**created_dts** | **string** | When the write that replaced this version happened, ISO 8601 UTC.  On the current entry, when it was written. | [optional]
**current** | **bool** | True for the value currently stored. | [optional]
**edited_by** | **string** | Login of whoever made the write that replaced this version.  On the current entry, whoever wrote it.  See content_edited_by for who wrote a history entry&#39;s content. | [optional]
**hash_sha256** | **string** | SHA-256 of this version&#39;s CJSON. | [optional]
**operation** | **string** | What the container was before the write this entry precedes.  create means it did not exist, so reverting to this entry removes it again; update means it held the cjson recorded here. | [optional]
**owner_object_id** | **string** | Owner object identifier. | [optional]
**owner_type** | **string** | Owner type. | [optional]
**size** | **int** | Size of this version&#39;s CJSON in bytes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
