# # ConditionSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the condition schema. This ID is used when updating selective syncs for a linked account. |
**common_model** | **string** | The common model for which a condition schema is defined. | [optional] [readonly]
**native_name** | **string** | User-facing *native condition* name. e.g. \&quot;Skip Manager\&quot;. |
**field_name** | **string** | The name of the field on the common model that this condition corresponds to, if they conceptually match. e.g. \&quot;location_type\&quot;. |
**is_unique** | **bool** | Whether this condition can only be applied once. If false, the condition can be AND&#39;d together multiple times. | [optional]
**condition_type** | [**\MergeHRISClient\Model\ConditionTypeEnum**](ConditionTypeEnum.md) |  |
**operators** | [**\MergeHRISClient\Model\OperatorSchema[]**](OperatorSchema.md) | The schemas for the operators that can be used on a condition. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
