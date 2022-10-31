# # AccountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**integration** | **string** |  | [optional] [readonly]
**integration_slug** | **string** |  | [optional] [readonly]
**category** | [**CategoryEnum**](CategoryEnum.md) |  | [optional]
**end_user_origin_id** | **string** |  | [optional] [readonly]
**end_user_organization_name** | **string** |  | [optional] [readonly]
**end_user_email_address** | **string** |  | [optional] [readonly]
**status** | **string** |  | [optional] [readonly]
**webhook_listener_url** | **string** |  | [optional] [readonly]
**is_duplicate** | **bool** | Whether a Production Linked Account&#39;s credentials match another existing Production Linked Account. This field is &#x60;null&#x60; for Test Linked Accounts, incomplete Production Linked Accounts, and ignored duplicate Production Linked Account sets. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
