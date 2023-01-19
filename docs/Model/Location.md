# # Location

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**name** | **string** | The location&#39;s name. | [optional]
**phone_number** | **string** | The location&#39;s phone number. | [optional]
**street_1** | **string** | Line 1 of the location&#39;s street address. | [optional]
**street_2** | **string** | Line 2 of the location&#39;s street address. | [optional]
**city** | **string** | The location&#39;s city. | [optional]
**state** | **string** | The location&#39;s state. Represents a region if outside of the US. | [optional]
**zip_code** | **string** | The location&#39;s zip code or postal code. | [optional]
**country** | [**CountryEnum**](CountryEnum.md) | The location&#39;s country. | [optional]
**location_type** | [**LocationTypeEnum**](LocationTypeEnum.md) | The location&#39;s type. Can be either WORK or HOME | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted by third party webhooks. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
