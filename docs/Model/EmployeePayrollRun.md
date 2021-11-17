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
**earnings** | [**\OpenAPI\Client\Model\Earning[]**](Earning.md) |  | [optional] [readonly]
**deductions** | [**\OpenAPI\Client\Model\Deduction[]**](Deduction.md) |  | [optional] [readonly]
**taxes** | [**\OpenAPI\Client\Model\Tax[]**](Tax.md) |  | [optional] [readonly]
**remote_data** | [**\OpenAPI\Client\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
