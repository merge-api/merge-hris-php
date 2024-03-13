# # Benefit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee** | **string** | The employee on the plan. | [optional]
**provider_name** | **string** | The name of the benefit provider. | [optional]
**benefit_plan_type** | **string** | The type of benefit plan | [optional]
**employee_contribution** | **double** | The employee&#39;s contribution. | [optional]
**company_contribution** | **double** | The company&#39;s contribution. | [optional]
**start_date** | [**\DateTime**](\DateTime.md) | The day and time the benefit started. | [optional]
**end_date** | [**\DateTime**](\DateTime.md) | The day and time the benefit ended. | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional] [readonly]
**employer_benefit** | **string** | The employer benefit plan the employee is enrolled in. | [optional]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
