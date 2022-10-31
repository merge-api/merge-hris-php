# MergeHRISClient\EmployeePayrollRunsApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**employeePayrollRunsList()**](EmployeePayrollRunsApi.md#employeePayrollRunsList) | **GET** /employee-payroll-runs | 
[**employeePayrollRunsRetrieve()**](EmployeePayrollRunsApi.md#employeePayrollRunsRetrieve) | **GET** /employee-payroll-runs/{id} | 


## `employeePayrollRunsList()`

```php
employeePayrollRunsList($x_account_token, $created_after, $created_before, $cursor, $employee_id, $ended_after, $ended_before, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $payroll_run_id, $remote_id, $started_after, $started_before): \MergeHRISClient\Model\PaginatedEmployeePayrollRunList
```



Returns a list of `EmployeePayrollRun` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\EmployeePayrollRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$employee_id = 'employee_id_example'; // string | If provided, will only return employee payroll runs for this employee.
$ended_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employee payroll runs ended after this datetime.
$ended_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employee payroll runs ended before this datetime.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$page_size = 56; // int | Number of results to return per page.
$payroll_run_id = 'payroll_run_id_example'; // string | If provided, will only return employee payroll runs for this employee.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employee payroll runs started after this datetime.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return employee payroll runs started before this datetime.

try {
    $result = $apiInstance->employeePayrollRunsList($x_account_token, $created_after, $created_before, $cursor, $employee_id, $ended_after, $ended_before, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $payroll_run_id, $remote_id, $started_after, $started_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeePayrollRunsApi->employeePayrollRunsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **created_after** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **created_before** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **employee_id** | **string**| If provided, will only return employee payroll runs for this employee. | [optional]
 **ended_after** | **\DateTime**| If provided, will only return employee payroll runs ended after this datetime. | [optional]
 **ended_before** | **\DateTime**| If provided, will only return employee payroll runs ended before this datetime. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modified_after** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modified_before** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **payroll_run_id** | **string**| If provided, will only return employee payroll runs for this employee. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **started_after** | **\DateTime**| If provided, will only return employee payroll runs started after this datetime. | [optional]
 **started_before** | **\DateTime**| If provided, will only return employee payroll runs started before this datetime. | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedEmployeePayrollRunList**](../Model/PaginatedEmployeePayrollRunList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeePayrollRunsRetrieve()`

```php
employeePayrollRunsRetrieve($x_account_token, $id, $include_remote_data): \MergeHRISClient\Model\EmployeePayrollRun
```



Returns an `EmployeePayrollRun` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\EmployeePayrollRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.

try {
    $result = $apiInstance->employeePayrollRunsRetrieve($x_account_token, $id, $include_remote_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeePayrollRunsApi->employeePayrollRunsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]

### Return type

[**\MergeHRISClient\Model\EmployeePayrollRun**](../Model/EmployeePayrollRun.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
