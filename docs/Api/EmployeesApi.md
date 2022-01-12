# MergeHRISClient\EmployeesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeesList()**](EmployeesApi.md#employeesList) | **GET** /employees | 
[**employeesRetrieve()**](EmployeesApi.md#employeesRetrieve) | **GET** /employees/{id} | 


## `employeesList()`

```php
employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $include_deleted_data, $include_remote_data, $include_sensitive_fields, $manager_id, $modified_after, $modified_before, $page_size, $pay_group_id, $personal_email, $remote_id, $team_id, $work_email, $work_location_id): \MergeHRISClient\Model\PaginatedEmployeeList
```



Returns a list of `Employee` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$company_id = 'company_id_example'; // string | If provided, will only return employees for this company.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$include_deleted_data = True; // bool | Whether to include data that was deleted in the third-party service.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$include_sensitive_fields = True; // bool | Whether to include sensitive fields (such as social security numbers) in the response.
$manager_id = 'manager_id_example'; // string | If provided, will only return employees for this manager.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$page_size = 56; // int | Number of results to return per page.
$pay_group_id = 'pay_group_id_example'; // string | If provided, will only return employees for this pay group
$personal_email = 'personal_email_example'; // string | If provided, will only return Employees with this personal email
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$team_id = 'team_id_example'; // string | If provided, will only return employees for this team.
$work_email = 'work_email_example'; // string | If provided, will only return Employees with this work email
$work_location_id = 'work_location_id_example'; // string | If provided, will only return employees for this location.

try {
    $result = $apiInstance->employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $include_deleted_data, $include_remote_data, $include_sensitive_fields, $manager_id, $modified_after, $modified_before, $page_size, $pay_group_id, $personal_email, $remote_id, $team_id, $work_email, $work_location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **company_id** | **string**| If provided, will only return employees for this company. | [optional]
 **created_after** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **created_before** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was deleted in the third-party service. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **include_sensitive_fields** | **bool**| Whether to include sensitive fields (such as social security numbers) in the response. | [optional]
 **manager_id** | **string**| If provided, will only return employees for this manager. | [optional]
 **modified_after** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modified_before** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **pay_group_id** | **string**| If provided, will only return employees for this pay group | [optional]
 **personal_email** | [**string**](../Model/.md)| If provided, will only return Employees with this personal email | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **team_id** | **string**| If provided, will only return employees for this team. | [optional]
 **work_email** | [**string**](../Model/.md)| If provided, will only return Employees with this work email | [optional]
 **work_location_id** | **string**| If provided, will only return employees for this location. | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedEmployeeList**](../Model/PaginatedEmployeeList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeesRetrieve()`

```php
employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields): \MergeHRISClient\Model\Employee
```



Returns an `Employee` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$include_sensitive_fields = True; // bool | Whether to include sensitive fields (such as social security numbers) in the response.

try {
    $result = $apiInstance->employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **include_sensitive_fields** | **bool**| Whether to include sensitive fields (such as social security numbers) in the response. | [optional]

### Return type

[**\MergeHRISClient\Model\Employee**](../Model/Employee.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
