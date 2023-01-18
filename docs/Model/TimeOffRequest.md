# # TimeOffRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** | The employee requesting time off. | [optional]
**approver** | **string** | The Merge ID of the employee with the ability to approve the time off request. | [optional]
**status** | [**TimeOffStatusEnum**](TimeOffStatusEnum.md) | The status of this time off request. | [optional]
**employee_note** | **string** | The employee note for this time off request. | [optional]
**units** | [**UnitsEnum**](UnitsEnum.md) | The measurement that the third-party integration uses to count time requested. | [optional]
**amount** | **float** | The time off quantity measured by the prescribed “units”. | [optional]
**request_type** | [**RequestTypeEnum**](RequestTypeEnum.md) | The type of time off request. | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | The day and time of the start of the time requested off. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The day and time of the end of the time requested off. | [optional]
**integration_params** | **array<string,mixed>** |  | [optional]
**linked_account_params** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
