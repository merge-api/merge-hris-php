# # TimeOffBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** |  | [optional]
**balance** | **float** | The current remaining PTO balance in terms of hours. This does not represent the starting PTO balance. If the API provider only provides PTO balance in terms of days, we estimate 8 hours per day. | [optional]
**used** | **float** | The amount of PTO used in terms of hours. | [optional]
**policy_type** | [**PolicyTypeEnum**](PolicyTypeEnum.md) | The policy type of this time off balance. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted by third party webhooks. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
