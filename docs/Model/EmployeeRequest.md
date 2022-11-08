# # EmployeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_id** | **string** | The third-party API ID of the matching object. | [optional]
**employee_number** | **string** | The employee&#39;s number that appears in the remote UI. Note: This is distinct from the remote_id field, which is a unique identifier for the employee set by the remote API, and is not exposed to the user. This value can also change in many API providers. | [optional]
**company** | **string** |  | [optional]
**first_name** | **string** | The employee&#39;s first name. | [optional]
**last_name** | **string** | The employee&#39;s last name. | [optional]
**display_full_name** | **string** | The employee&#39;s full name, to use for display purposes. If a preferred first name is available, the full name will include the preferred first name. | [optional]
**username** | **string** | The employee&#39;s username that appears in the remote UI. | [optional]
**groups** | **string[]** |  | [optional]
**work_email** | **string** | The employee&#39;s work email. | [optional]
**personal_email** | **string** | The employee&#39;s personal email. | [optional]
**mobile_phone_number** | **string** | The employee&#39;s mobile phone number. | [optional]
**employments** | **string[]** | Array of &#x60;Employment&#x60; IDs for this Employee. | [optional]
**home_location** | **string** |  | [optional]
**work_location** | **string** |  | [optional]
**manager** | **string** |  | [optional]
**team** | **string** |  | [optional]
**pay_group** | **string** |  | [optional]
**ssn** | **string** | The employee&#39;s social security number. | [optional]
**gender** | [**GenderEnum**](GenderEnum.md) | The employee&#39;s gender. | [optional]
**ethnicity** | [**EthnicityEnum**](EthnicityEnum.md) | The employee&#39;s ethnicity. | [optional]
**marital_status** | [**MaritalStatusEnum**](MaritalStatusEnum.md) | The employee&#39;s marital status. | [optional]
**date_of_birth** | [**\DateTime**](\DateTime.md) | The employee&#39;s date of birth. | [optional]
**hire_date** | [**\DateTime**](\DateTime.md) | The date that the employee was hired, usually the day that an offer letter is signed. If an employee has multiple hire dates from previous employments, this represents the most recent hire date. Note: If you&#39;re looking for the employee&#39;s start date, refer to the start_date field. | [optional]
**start_date** | [**\DateTime**](\DateTime.md) | The date that the employee started working. If an employee has multiple start dates from previous employments, this represents the most recent start date. | [optional]
**remote_created_at** | [**\DateTime**](\DateTime.md) | When the third party&#39;s employee was created. | [optional]
**employment_status** | [**EmploymentStatusEnum**](EmploymentStatusEnum.md) | The employment status of the employee. | [optional]
**termination_date** | [**\DateTime**](\DateTime.md) | The employee&#39;s termination date. | [optional]
**avatar** | **string** | The URL of the employee&#39;s avatar image. | [optional]
**custom_fields** | **array<string,mixed>** | Custom fields configured for a given model. | [optional]
**integration_params** | **array<string,mixed>** |  | [optional]
**linked_account_params** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
