# # TimeOff

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee** | **string** | The employee requesting time off. | [optional]
**approver** | **string** | The Merge ID of the employee with the ability to approve the time off request. | [optional]
**status** | [**TimeOffStatusEnum**](TimeOffStatusEnum.md) | The status of this time off request.  * &#x60;REQUESTED&#x60; - REQUESTED * &#x60;APPROVED&#x60; - APPROVED * &#x60;DECLINED&#x60; - DECLINED * &#x60;CANCELLED&#x60; - CANCELLED * &#x60;DELETED&#x60; - DELETED | [optional]
**employee_note** | **string** | The employee note for this time off request. | [optional]
**units** | [**UnitsEnum**](UnitsEnum.md) | The measurement that the third-party integration uses to count time requested.  * &#x60;HOURS&#x60; - HOURS * &#x60;DAYS&#x60; - DAYS | [optional]
**amount** | **double** | The time off quantity measured by the prescribed “units”. | [optional]
**request_type** | [**RequestTypeEnum**](RequestTypeEnum.md) | The type of time off request.  * &#x60;VACATION&#x60; - VACATION * &#x60;SICK&#x60; - SICK * &#x60;PERSONAL&#x60; - PERSONAL * &#x60;JURY_DUTY&#x60; - JURY_DUTY * &#x60;VOLUNTEER&#x60; - VOLUNTEER * &#x60;BEREAVEMENT&#x60; - BEREAVEMENT | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | The day and time of the start of the time requested off. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The day and time of the end of the time requested off. | [optional]
**remote_was_deleted** | **bool** |  | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
