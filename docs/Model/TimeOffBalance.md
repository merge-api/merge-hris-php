# # TimeOffBalance

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** | The employee the balance belongs to. | [optional]
**balance** | **float** | The current PTO balance in terms of hours. | [optional]
**used** | **float** | The amount of PTO used in terms of hours. | [optional]
**policy_type** | [**PolicyTypeEnum**](PolicyTypeEnum.md) | The policy type of this time off balance. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
