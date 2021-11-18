# # EmployeePayrollRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** | The employee whose payroll is being run. | [optional]
**payroll_run** | **string** | The payroll being run. | [optional]
**gross_pay** | **float** | The gross pay from the run. | [optional]
**net_pay** | **float** | The net pay from the run. | [optional]
**start_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run started. | [optional]
**end_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run ended. | [optional]
**check_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run was checked. | [optional]
**earnings** | [**\MergeHRISClient\Model\Earning[]**](Earning.md) |  | [optional] [readonly]
**deductions** | [**\MergeHRISClient\Model\Deduction[]**](Deduction.md) |  | [optional] [readonly]
**taxes** | [**\MergeHRISClient\Model\Tax[]**](Tax.md) |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
