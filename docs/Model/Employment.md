# # Employment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee** | **string** | The employee holding this position. | [optional]
**job_title** | **string** | The position&#39;s title. | [optional]
**pay_rate** | **float** | The position&#39;s pay rate in dollars. | [optional]
**pay_period** | [**PayPeriodEnum**](PayPeriodEnum.md) | The time period this pay rate encompasses. | [optional]
**pay_frequency** | [**PayFrequencyEnum**](PayFrequencyEnum.md) | The position&#39;s pay frequency. | [optional]
**pay_currency** | [**PayCurrencyEnum**](PayCurrencyEnum.md) | The position&#39;s currency code. | [optional]
**flsa_status** | [**FlsaStatusEnum**](FlsaStatusEnum.md) | The position&#39;s FLSA status. | [optional]
**effective_date** | [**\DateTime**](\DateTime.md) | The position&#39;s effective date. | [optional]
**employment_type** | [**EmploymentTypeEnum**](EmploymentTypeEnum.md) | The position&#39;s type of employment. | [optional]
**remote_data** | [**\OpenAPI\Client\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
