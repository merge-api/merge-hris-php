# # PayrollRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**run_state** | **string** |  | [optional] [readonly]
**run_type** | **string** |  | [optional] [readonly]
**start_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run started. | [optional]
**end_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run ended. | [optional]
**check_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run was checked. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
