# # Dependent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] [readonly]
**modified_at** | [**\DateTime**](\DateTime.md) | This is the datetime that this object was last updated by Merge | [optional] [readonly]
**first_name** | **string** | The dependents&#39;s first name. | [optional]
**middle_name** | **string** | The dependents&#39;s middle name. | [optional]
**last_name** | **string** | The dependents&#39;s last name. | [optional]
**relationship** | [**RelationshipEnum**](RelationshipEnum.md) | The dependent&#39;s relationship to the employee.  * &#x60;CHILD&#x60; - CHILD * &#x60;SPOUSE&#x60; - SPOUSE * &#x60;DOMESTIC_PARTNER&#x60; - DOMESTIC_PARTNER | [optional]
**employee** | **string** | The employee this person is a dependent of. | [optional]
**date_of_birth** | [**\DateTime**](\DateTime.md) | The dependent&#39;s date of birth. | [optional]
**gender** | [**GenderEnum**](GenderEnum.md) | The dependent&#39;s gender.  * &#x60;MALE&#x60; - MALE * &#x60;FEMALE&#x60; - FEMALE * &#x60;NON-BINARY&#x60; - NON-BINARY * &#x60;OTHER&#x60; - OTHER * &#x60;PREFER_NOT_TO_DISCLOSE&#x60; - PREFER_NOT_TO_DISCLOSE | [optional]
**phone_number** | **string** | The dependent&#39;s phone number. | [optional]
**home_location** | **string** | The dependents&#39;s home address. | [optional]
**is_student** | **bool** | Whether or not the dependent is a student | [optional]
**ssn** | **string** | The dependents&#39;s social security number. | [optional]
**remote_was_deleted** | **bool** | Indicates whether or not this object has been deleted in the third party platform. | [optional] [readonly]
**field_mappings** | **array<string,mixed>** |  | [optional] [readonly]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
