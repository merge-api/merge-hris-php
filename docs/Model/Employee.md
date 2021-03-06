# # Employee

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee_number** | **string** | The employee&#39;s number that appears in the remote UI. Note: This is distinct from the remote_id field, which is a unique identifier for the employee set by the remote API, and is not exposed to the user. | [optional]
**company** | **string** | The ID of the employee&#39;s company. | [optional]
**first_name** | **string** | The employee&#39;s first name. | [optional]
**last_name** | **string** | The employee&#39;s last name. | [optional]
**display_full_name** | **string** | The employee&#39;s full name, to use for display purposes. If a preferred first name is available, the full name will include the preferred first name. | [optional]
**work_email** | **string** | The employee&#39;s work email. | [optional]
**personal_email** | **string** | The employee&#39;s personal email. | [optional]
**mobile_phone_number** | **string** | The employee&#39;s mobile phone number. | [optional]
**employments** | **string[]** | Array of &#x60;Employment&#x60; IDs for this Employee. | [optional] [readonly]
**home_location** | **string** | The employee&#39;s home address. | [optional]
**work_location** | **string** | The employee&#39;s work address. | [optional]
**manager** | **string** | The employee ID of the employee&#39;s manager. | [optional]
**team** | **string** | The employee&#39;s team. | [optional]
**pay_group** | **string** | The employee&#39;s pay group | [optional]
**ssn** | **string** | The employee&#39;s social security number. | [optional]
**gender** | **string** |  | [optional] [readonly]
**ethnicity** | **string** |  | [optional] [readonly]
**marital_status** | **string** |  | [optional] [readonly]
**date_of_birth** | [**\DateTime**](\DateTime.md) | The employee&#39;s date of birth. | [optional]
**hire_date** | [**\DateTime**](\DateTime.md) | The date that the employee was hired, usually the day that an offer letter is signed. If an employee has multiple hire dates from previous employments, this represents the most recent hire date. Note: If you&#39;re looking for the employee&#39;s start date, refer to the start_date field. | [optional]
**start_date** | [**\DateTime**](\DateTime.md) | The date that the employee started working. If an employee has multiple start dates from previous employments, this represents the most recent start date. | [optional]
**employment_status** | **string** |  | [optional] [readonly]
**termination_date** | [**\DateTime**](\DateTime.md) | The employee&#39;s termination date. | [optional]
**avatar** | **string** | The URL of the employee&#39;s avatar image. | [optional]
**remote_data** | [**\MergeHRISClient\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**custom_fields** | **array<string,mixed>** | Custom fields configured for a given model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
