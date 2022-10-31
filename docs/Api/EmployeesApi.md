# MergeHRISClient\EmployeesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeesCreate()**](EmployeesApi.md#employeesCreate) | **POST** /employees | 
[**employeesIgnoreCreate()**](EmployeesApi.md#employeesIgnoreCreate) | **POST** /employees/ignore/{model_id} | 
[**employeesList()**](EmployeesApi.md#employeesList) | **GET** /employees | 
[**employeesMetaPostRetrieve()**](EmployeesApi.md#employeesMetaPostRetrieve) | **GET** /employees/meta/post | 
[**employeesRetrieve()**](EmployeesApi.md#employeesRetrieve) | **GET** /employees/{id} | 


## `employeesCreate()`

```php
employeesCreate($x_account_token, $employee_endpoint_request, $is_debug_mode, $run_async): \MergeHRISClient\Model\EmployeeResponse
```



Creates an `Employee` object with the given values.

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
$employee_endpoint_request = new \MergeHRISClient\Model\EmployeeEndpointRequest(); // \MergeHRISClient\Model\EmployeeEndpointRequest
$is_debug_mode = True; // bool | Whether to include debug fields (such as log file links) in the response.
$run_async = True; // bool | Whether or not third-party updates should be run asynchronously.

try {
    $result = $apiInstance->employeesCreate($x_account_token, $employee_endpoint_request, $is_debug_mode, $run_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **employee_endpoint_request** | [**\MergeHRISClient\Model\EmployeeEndpointRequest**](../Model/EmployeeEndpointRequest.md)|  |
 **is_debug_mode** | **bool**| Whether to include debug fields (such as log file links) in the response. | [optional]
 **run_async** | **bool**| Whether or not third-party updates should be run asynchronously. | [optional]

### Return type

[**\MergeHRISClient\Model\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeesIgnoreCreate()`

```php
employeesIgnoreCreate($x_account_token, $model_id, $ignore_common_model_request): \MergeHRISClient\Model\IgnoreCommonModel
```



Ignores a specific row based on the `model_id` in the url. These records will have their properties set to null, and will not be updated in future syncs. The \"reason\" and \"message\" fields in the request body will be stored for audit purposes.

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
$model_id = 'model_id_example'; // string
$ignore_common_model_request = new \MergeHRISClient\Model\IgnoreCommonModelRequest(); // \MergeHRISClient\Model\IgnoreCommonModelRequest

try {
    $result = $apiInstance->employeesIgnoreCreate($x_account_token, $model_id, $ignore_common_model_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesIgnoreCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **model_id** | [**string**](../Model/.md)|  |
 **ignore_common_model_request** | [**\MergeHRISClient\Model\IgnoreCommonModelRequest**](../Model/IgnoreCommonModelRequest.md)|  |

### Return type

[**\MergeHRISClient\Model\IgnoreCommonModel**](../Model/IgnoreCommonModel.md)

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
employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $display_full_name, $employment_status, $first_name, $include_deleted_data, $include_remote_data, $include_sensitive_fields, $last_name, $manager_id, $modified_after, $modified_before, $page_size, $pay_group_id, $personal_email, $remote_fields, $remote_id, $team_id, $work_email, $work_location_id): \MergeHRISClient\Model\PaginatedEmployeeList
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
$display_full_name = 'display_full_name_example'; // string | If provided, will only return employees with this display name.
$employment_status = 'employment_status_example'; // string | If provided, will only return employees with this employment status.
$first_name = 'first_name_example'; // string | If provided, will only return employees with this first name.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$include_sensitive_fields = True; // bool | Whether to include sensitive fields (such as social security numbers) in the response.
$last_name = 'last_name_example'; // string | If provided, will only return employees with this last name.
$manager_id = 'manager_id_example'; // string | If provided, will only return employees for this manager.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$page_size = 56; // int | Number of results to return per page.
$pay_group_id = 'pay_group_id_example'; // string | If provided, will only return employees for this pay group
$personal_email = 'personal_email_example'; // string | If provided, will only return Employees with this personal email
$remote_fields = employment_status,ethnicity,gender,marital_status; // string | Which fields should be returned in non-normalized form.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$team_id = 'team_id_example'; // string | If provided, will only return employees for this team.
$work_email = 'work_email_example'; // string | If provided, will only return Employees with this work email
$work_location_id = 'work_location_id_example'; // string | If provided, will only return employees for this location.

try {
    $result = $apiInstance->employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $display_full_name, $employment_status, $first_name, $include_deleted_data, $include_remote_data, $include_sensitive_fields, $last_name, $manager_id, $modified_after, $modified_before, $page_size, $pay_group_id, $personal_email, $remote_fields, $remote_id, $team_id, $work_email, $work_location_id);
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
 **display_full_name** | **string**| If provided, will only return employees with this display name. | [optional]
 **employment_status** | **string**| If provided, will only return employees with this employment status. | [optional]
 **first_name** | **string**| If provided, will only return employees with this first name. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **include_sensitive_fields** | **bool**| Whether to include sensitive fields (such as social security numbers) in the response. | [optional]
 **last_name** | **string**| If provided, will only return employees with this last name. | [optional]
 **manager_id** | **string**| If provided, will only return employees for this manager. | [optional]
 **modified_after** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modified_before** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **pay_group_id** | **string**| If provided, will only return employees for this pay group | [optional]
 **personal_email** | [**string**](../Model/.md)| If provided, will only return Employees with this personal email | [optional]
 **remote_fields** | **string**| Which fields should be returned in non-normalized form. | [optional]
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

## `employeesMetaPostRetrieve()`

```php
employeesMetaPostRetrieve($x_account_token): \MergeHRISClient\Model\MetaResponse
```



Returns metadata for `Employee` POSTs.

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

try {
    $result = $apiInstance->employeesMetaPostRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->employeesMetaPostRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\MergeHRISClient\Model\MetaResponse**](../Model/MetaResponse.md)

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
employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields, $remote_fields): \MergeHRISClient\Model\Employee
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
$remote_fields = employment_status,ethnicity,gender,marital_status; // string | Which fields should be returned in non-normalized form.

try {
    $result = $apiInstance->employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields, $remote_fields);
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
 **remote_fields** | **string**| Which fields should be returned in non-normalized form. | [optional]

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
