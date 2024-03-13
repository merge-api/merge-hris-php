# # TimesheetEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee** | **string** | The employee the timesheet entry is for. | [optional]
**hours_worked** | **double** | The number of hours logged by the employee. | [optional]
**start_time** | [**\DateTime**](\DateTime.md) | The time at which the employee started work. | [optional]
**end_time** | [**\DateTime**](\DateTime.md) | The time at which the employee ended work. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
