# # SfvbContainerVersion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cjson** | **string** | The CJSON this version held.  Populated only when reading a single version, and null when the operation is create.  Listings omit it because container CJSON is large. | [optional]
**comment** | **string** | Comment recorded with the write that replaced this version. | [optional]
**container_history_oid** | **int** | History record oid.  Pass to the revert operation on the owning container.  Absent on the entry marked current, which holds the value stored right now, has no history row of its own, and so cannot be fetched or reverted to. | [optional]
**container_name** | **string** | Container name, where the owner has more than one container. | [optional]
**created_dts** | **string** | When this snapshot was taken. | [optional]
**current** | **bool** | True for the value currently stored. | [optional]
**edited_by** | **string** | Login of whoever caused this snapshot. | [optional]
**hash_sha256** | **string** | SHA-256 of this version&#39;s CJSON. | [optional]
**operation** | **string** | What the container was before the write this entry precedes.  create means it did not exist, so reverting to this entry removes it again; update means it held the cjson recorded here. | [optional]
**owner_object_id** | **string** | Owner object identifier. | [optional]
**owner_type** | **string** | Owner type. | [optional]
**size** | **int** | Size of this version&#39;s CJSON in bytes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
