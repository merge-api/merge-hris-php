# # BankInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**employee** | **string** | The employee with this bank account. | [optional]
**account_number** | **string** | The account number. | [optional]
**routing_number** | **string** | The routing number. | [optional]
**bank_name** | **string** | The bank name. | [optional]
**account_type** | [**AccountTypeEnum**](AccountTypeEnum.md) | The bank account type  * &#x60;SAVINGS&#x60; - SAVINGS * &#x60;CHECKING&#x60; - CHECKING | [optional]
**remote_created_at** | [**\DateTime**](\DateTime.md) | When the matching bank object was created in the third party system. | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
