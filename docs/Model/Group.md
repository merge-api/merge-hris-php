# # Group

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**parent_group** | **string** | The parent group for this group. | [optional]
**name** | **string** | The group name. | [optional]
**type** | [**GroupTypeEnum**](GroupTypeEnum.md) | The group type  * &#x60;TEAM&#x60; - TEAM * &#x60;DEPARTMENT&#x60; - DEPARTMENT * &#x60;COST_CENTER&#x60; - COST_CENTER * &#x60;BUSINESS_UNIT&#x60; - BUSINESS_UNIT * &#x60;GROUP&#x60; - GROUP | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
