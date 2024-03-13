# # Issue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**status** | [**IssueStatusEnum**](IssueStatusEnum.md) | Status of the issue. Options: (&#39;ONGOING&#39;, &#39;RESOLVED&#39;)  * &#x60;ONGOING&#x60; - ONGOING * &#x60;RESOLVED&#x60; - RESOLVED | [optional]
**error_description** | **string** |  |
**end_user** | **array<string,mixed>** |  | [optional] [readonly]
**first_incident_time** | [**\DateTime**](\DateTime.md) |  | [optional]
**last_incident_time** | [**\DateTime**](\DateTime.md) |  | [optional]
**is_muted** | **bool** |  | [optional] [readonly]
**error_details** | **string[]** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
