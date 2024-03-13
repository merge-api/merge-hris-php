# # EmployerBenefit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**benefit_plan_type** | [**BenefitPlanTypeEnum**](BenefitPlanTypeEnum.md) | The type of benefit plan.  * &#x60;MEDICAL&#x60; - MEDICAL * &#x60;HEALTH_SAVINGS&#x60; - HEALTH_SAVINGS * &#x60;INSURANCE&#x60; - INSURANCE * &#x60;RETIREMENT&#x60; - RETIREMENT * &#x60;OTHER&#x60; - OTHER | [optional]
**name** | **string** | The employer benefit&#39;s name - typically the carrier or network name. | [optional]
**description** | **string** | The employer benefit&#39;s description. | [optional]
**deduction_code** | **string** | The employer benefit&#39;s deduction code. | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**array<string,mixed>[]**](array.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
