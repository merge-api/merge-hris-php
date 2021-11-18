# OpenAPI\Client\EmployeesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeesCreate()**](EmployeesApi.md#employeesCreate) | **POST** /employees | 
[**employeesList()**](EmployeesApi.md#employeesList) | **GET** /employees | 
[**employeesRetrieve()**](EmployeesApi.md#employeesRetrieve) | **GET** /employees/{id} | 


## `employeesCreate()`

```php
employeesCreate($x_account_token, $run_async, $employee_request): \OpenAPI\Client\Model\Employee
```



Creates an `Employee` object with the given values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$run_async = True; // bool | Whether or not third-party updates should be run asynchronously.
$employee_request = new \OpenAPI\Client\Model\EmployeeRequest(); // \OpenAPI\Client\Model\EmployeeRequest

try {
    $result = $apiInstance->employeesCreate($x_account_token, $run_async, $employee_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **run_async** | **bool**| Whether or not third-party updates should be run asynchronously. | [optional]
 **employee_request** | [**\OpenAPI\Client\Model\EmployeeRequest**](../Model/EmployeeRequest.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeesList()`

```php
employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $include_remote_data, $include_sensitive_fields, $manager_id, $modified_after, $modified_before, $page_size, $personal_email, $remote_id, $team_id, $work_email, $work_location_id): \OpenAPI\Client\Model\PaginatedEmployeeList
```



Returns a list of `Employee` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
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
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$include_sensitive_fields = True; // bool | Whether to include sensetive fields (such as social security numbers) in the response.
$manager_id = 'manager_id_example'; // string | If provided, will only return employees for this manager.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$page_size = 56; // int | Number of results to return per page.
$personal_email = 'personal_email_example'; // string | If provided, will only return Employees with this personal email
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$team_id = 'team_id_example'; // string | If provided, will only return employees for this team.
$work_email = 'work_email_example'; // string | If provided, will only return Employees with this work email
$work_location_id = 'work_location_id_example'; // string | If provided, will only return employees for this location.

try {
    $result = $apiInstance->employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $include_remote_data, $include_sensitive_fields, $manager_id, $modified_after, $modified_before, $page_size, $personal_email, $remote_id, $team_id, $work_email, $work_location_id);
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
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **include_sensitive_fields** | **bool**| Whether to include sensetive fields (such as social security numbers) in the response. | [optional]
 **manager_id** | **string**| If provided, will only return employees for this manager. | [optional]
 **modified_after** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modified_before** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **personal_email** | [**string**](../Model/.md)| If provided, will only return Employees with this personal email | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **team_id** | **string**| If provided, will only return employees for this team. | [optional]
 **work_email** | [**string**](../Model/.md)| If provided, will only return Employees with this work email | [optional]
 **work_location_id** | **string**| If provided, will only return employees for this location. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedEmployeeList**](../Model/PaginatedEmployeeList.md)

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
employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields): \OpenAPI\Client\Model\Employee
```



Returns an `Employee` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$include_sensitive_fields = True; // bool | Whether to include sensetive fields (such as social security numbers) in the response.

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
 **include_sensitive_fields** | **bool**| Whether to include sensetive fields (such as social security numbers) in the response. | [optional]

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
