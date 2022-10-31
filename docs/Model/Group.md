# # Group

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**parent_group** | **string** | The parent group for this group. | [optional]
**name** | **string** | The group name. | [optional]
**type** | [**GroupTypeEnum**](GroupTypeEnum.md) | The group type | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted by third party webhooks. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
