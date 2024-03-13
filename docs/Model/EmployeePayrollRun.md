# # EmployeePayrollRun

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee** | **string** | The employee whose payroll is being run. | [optional]
**payroll_run** | **string** | The payroll being run. | [optional]
**gross_pay** | **double** | The total earnings throughout a given period for an employee before any deductions are made. | [optional]
**net_pay** | **double** | The take-home pay throughout a given period for an employee after deductions are made. | [optional]
**start_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run started. | [optional]
**end_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run ended. | [optional]
**check_date** | [**\DateTime**](\DateTime.md) | The day and time the payroll run was checked. | [optional]
**earnings** | [**\MergeHRISClient\Model\Earning[]**](Earning.md) |  | [optional] [readonly]
**deductions** | [**\MergeHRISClient\Model\Deduction[]**](Deduction.md) |  | [optional] [readonly]
**taxes** | [**\MergeHRISClient\Model\Tax[]**](Tax.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
