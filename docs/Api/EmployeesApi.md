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
employeesIgnoreCreate($x_account_token, $model_id, $ignore_common_model_request)
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
    $apiInstance->employeesIgnoreCreate($x_account_token, $model_id, $ignore_common_model_request);
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

void (empty response body)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeesList()`

```php
employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $display_full_name, $employment_status, $employment_type, $first_name, $groups, $home_location_id, $include_deleted_data, $include_remote_data, $include_sensitive_fields, $job_title, $last_name, $manager_id, $modified_after, $modified_before, $page_size, $pay_group_id, $personal_email, $remote_fields, $remote_id, $show_enum_origins, $started_after, $started_before, $team_id, $terminated_after, $terminated_before, $work_email, $work_location_id): \MergeHRISClient\Model\PaginatedEmployeeList
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
$employment_status = 'employment_status_example'; // string | If provided, will only return employees with this employment status.  * `ACTIVE` - ACTIVE * `PENDING` - PENDING * `INACTIVE` - INACTIVE
$employment_type = 'employment_type_example'; // string | If provided, will only return employees that have an employment of the specified employment_type.
$first_name = 'first_name_example'; // string | If provided, will only return employees with this first name.
$groups = 'groups_example'; // string | If provided, will only return employees matching the group ids; multiple groups can be separated by commas.
$home_location_id = 'home_location_id_example'; // string | If provided, will only return employees for this home location.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$include_sensitive_fields = True; // bool | Whether to include sensitive fields (such as social security numbers) in the response.
$job_title = 'job_title_example'; // string | If provided, will only return employees that have an employment of the specified job_title.
$last_name = 'last_name_example'; // string | If provided, will only return employees with this last name.
$manager_id = 'manager_id_example'; // string | If provided, will only return employees for this manager.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge after this date time will be returned.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge before this date time will be returned.
$page_size = 56; // int | Number of results to return per page.
$pay_group_id = 'pay_group_id_example'; // string | If provided, will only return employees for this pay group
$personal_email = 'personal_email_example'; // string | If provided, will only return Employees with this personal email
$remote_fields = employment_status,ethnicity,gender,marital_status; // string | Deprecated. Use show_enum_origins.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$show_enum_origins = employment_status,ethnicity,gender,marital_status; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employees that started after this datetime.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employees that started before this datetime.
$team_id = 'team_id_example'; // string | If provided, will only return employees for this team.
$terminated_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employees that were terminated after this datetime.
$terminated_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employees that were terminated before this datetime.
$work_email = 'work_email_example'; // string | If provided, will only return Employees with this work email
$work_location_id = 'work_location_id_example'; // string | If provided, will only return employees for this location.

try {
    $result = $apiInstance->employeesList($x_account_token, $company_id, $created_after, $created_before, $cursor, $display_full_name, $employment_status, $employment_type, $first_name, $groups, $home_location_id, $include_deleted_data, $include_remote_data, $include_sensitive_fields, $job_title, $last_name, $manager_id, $modified_after, $modified_before, $page_size, $pay_group_id, $personal_email, $remote_fields, $remote_id, $show_enum_origins, $started_after, $started_before, $team_id, $terminated_after, $terminated_before, $work_email, $work_location_id);
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
 **employment_status** | **string**| If provided, will only return employees with this employment status.  * &#x60;ACTIVE&#x60; - ACTIVE * &#x60;PENDING&#x60; - PENDING * &#x60;INACTIVE&#x60; - INACTIVE | [optional]
 **employment_type** | **string**| If provided, will only return employees that have an employment of the specified employment_type. | [optional]
 **first_name** | **string**| If provided, will only return employees with this first name. | [optional]
 **groups** | **string**| If provided, will only return employees matching the group ids; multiple groups can be separated by commas. | [optional]
 **home_location_id** | **string**| If provided, will only return employees for this home location. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **include_sensitive_fields** | **bool**| Whether to include sensitive fields (such as social security numbers) in the response. | [optional]
 **job_title** | **string**| If provided, will only return employees that have an employment of the specified job_title. | [optional]
 **last_name** | **string**| If provided, will only return employees with this last name. | [optional]
 **manager_id** | **string**| If provided, will only return employees for this manager. | [optional]
 **modified_after** | **\DateTime**| If provided, only objects synced by Merge after this date time will be returned. | [optional]
 **modified_before** | **\DateTime**| If provided, only objects synced by Merge before this date time will be returned. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **pay_group_id** | **string**| If provided, will only return employees for this pay group | [optional]
 **personal_email** | [**string**](../Model/.md)| If provided, will only return Employees with this personal email | [optional]
 **remote_fields** | **string**| Deprecated. Use show_enum_origins. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **show_enum_origins** | **string**| A comma separated list of enum field names for which you&#39;d like the original values to be returned, instead of Merge&#39;s normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter) | [optional]
 **started_after** | **\DateTime**| If provided, will only return employees that started after this datetime. | [optional]
 **started_before** | **\DateTime**| If provided, will only return employees that started before this datetime. | [optional]
 **team_id** | **string**| If provided, will only return employees for this team. | [optional]
 **terminated_after** | **\DateTime**| If provided, will only return employees that were terminated after this datetime. | [optional]
 **terminated_before** | **\DateTime**| If provided, will only return employees that were terminated before this datetime. | [optional]
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
employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields, $remote_fields, $show_enum_origins): \MergeHRISClient\Model\Employee
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
$remote_fields = employment_status,ethnicity,gender,marital_status; // string | Deprecated. Use show_enum_origins.
$show_enum_origins = employment_status,ethnicity,gender,marital_status; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)

try {
    $result = $apiInstance->employeesRetrieve($x_account_token, $id, $include_remote_data, $include_sensitive_fields, $remote_fields, $show_enum_origins);
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
 **remote_fields** | **string**| Deprecated. Use show_enum_origins. | [optional]
 **show_enum_origins** | **string**| A comma separated list of enum field names for which you&#39;d like the original values to be returned, instead of Merge&#39;s normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter) | [optional]

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
