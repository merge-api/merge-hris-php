# # Earning

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee_payroll_run** | **string** |  | [optional]
**amount** | **double** | The amount earned. | [optional]
**type** | [**EarningTypeEnum**](EarningTypeEnum.md) | The type of earning.  * &#x60;SALARY&#x60; - SALARY * &#x60;REIMBURSEMENT&#x60; - REIMBURSEMENT * &#x60;OVERTIME&#x60; - OVERTIME * &#x60;BONUS&#x60; - BONUS | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
