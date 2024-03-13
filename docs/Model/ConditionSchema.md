# # ConditionSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the condition schema. This ID is used when updating selective syncs for a linked account. |
**common_model** | **string** | The common model for which a condition schema is defined. | [optional] [readonly]
**native_name** | **string** |  |
**field_name** | **string** |  |
**is_unique** | **bool** | Whether this condition can only be applied once. If false, the condition can be AND&#39;d together multiple times. | [optional]
**condition_type** | [**ConditionTypeEnum**](ConditionTypeEnum.md) | The type of value(s) that can be set for this condition.  * &#x60;BOOLEAN&#x60; - BOOLEAN * &#x60;DATE&#x60; - DATE * &#x60;DATE_TIME&#x60; - DATE_TIME * &#x60;INTEGER&#x60; - INTEGER * &#x60;FLOAT&#x60; - FLOAT * &#x60;STRING&#x60; - STRING * &#x60;LIST_OF_STRINGS&#x60; - LIST_OF_STRINGS |
**operators** | [**\MergeHRISClient\Model\OperatorSchema[]**](OperatorSchema.md) | The schemas for the operators that can be used on a condition. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
