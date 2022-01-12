# # TimeOff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** | The employee requesting time off. | [optional]
**approver** | **string** | The employee approving the time off request. | [optional]
**status** | **string** |  | [optional] [readonly]
**employee_note** | **string** | The employee note for this time off request. | [optional]
**units** | **string** |  | [optional] [readonly]
**amount** | **float** | The number of time off units requested. | [optional]
**request_type** | **string** |  | [optional] [readonly]
**start_time** | [**\DateTime**](\DateTime.md) | The day and time of the start of the time requested off. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The day and time of the end of the time requested off. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
