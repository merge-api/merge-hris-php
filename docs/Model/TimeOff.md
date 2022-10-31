# # TimeOff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** |  | [optional]
**approver** | **string** |  | [optional]
**status** | [**TimeOffStatusEnum**](TimeOffStatusEnum.md) | The status of this time off request. | [optional]
**employee_note** | **string** | The employee note for this time off request. | [optional]
**units** | [**UnitsEnum**](UnitsEnum.md) | The unit of time requested. | [optional]
**amount** | **float** | The number of time off units requested. | [optional]
**request_type** | [**RequestTypeEnum**](RequestTypeEnum.md) | The type of time off request. | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | The day and time of the start of the time requested off. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The day and time of the end of the time requested off. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
