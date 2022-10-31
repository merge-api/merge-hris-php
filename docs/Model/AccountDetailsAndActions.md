# # AccountDetailsAndActions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**category** | [**CategoryEnum**](CategoryEnum.md) |  | [optional]
**status** | [**AccountDetailsAndActionsStatusEnum**](AccountDetailsAndActionsStatusEnum.md) |  |
**status_detail** | **string** |  | [optional]
**end_user_origin_id** | **string** |  | [optional]
**end_user_organization_name** | **string** |  |
**end_user_email_address** | **string** |  |
**webhook_listener_url** | **string** |  |
**is_duplicate** | **bool** | Whether a Production Linked Account&#39;s credentials match another existing Production Linked Account. This field is &#x60;null&#x60; for Test Linked Accounts, incomplete Production Linked Accounts, and ignored duplicate Production Linked Account sets. | [optional]
**integration** | [**\MergeHRISClient\Model\AccountDetailsAndActionsIntegration**](AccountDetailsAndActionsIntegration.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
