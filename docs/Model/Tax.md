# # Tax

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee_payroll_run** | **string** |  | [optional]
**name** | **string** | The tax&#39;s name. | [optional]
**amount** | **double** | The tax amount. | [optional]
**employer_tax** | **bool** | Whether or not the employer is responsible for paying the tax. | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
