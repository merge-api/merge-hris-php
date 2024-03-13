# MergeHRISClient\TimesheetEntriesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**timesheetEntriesCreate()**](TimesheetEntriesApi.md#timesheetEntriesCreate) | **POST** /timesheet-entries | 
[**timesheetEntriesList()**](TimesheetEntriesApi.md#timesheetEntriesList) | **GET** /timesheet-entries | 
[**timesheetEntriesMetaPostRetrieve()**](TimesheetEntriesApi.md#timesheetEntriesMetaPostRetrieve) | **GET** /timesheet-entries/meta/post | 
[**timesheetEntriesRetrieve()**](TimesheetEntriesApi.md#timesheetEntriesRetrieve) | **GET** /timesheet-entries/{id} | 


## `timesheetEntriesCreate()`

```php
timesheetEntriesCreate($x_account_token, $timesheet_entry_endpoint_request, $is_debug_mode, $run_async): \MergeHRISClient\Model\TimesheetEntryResponse
```



Creates a `TimesheetEntry` object with the given values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimesheetEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$timesheet_entry_endpoint_request = new \MergeHRISClient\Model\TimesheetEntryEndpointRequest(); // \MergeHRISClient\Model\TimesheetEntryEndpointRequest
$is_debug_mode = True; // bool | Whether to include debug fields (such as log file links) in the response.
$run_async = True; // bool | Whether or not third-party updates should be run asynchronously.

try {
    $result = $apiInstance->timesheetEntriesCreate($x_account_token, $timesheet_entry_endpoint_request, $is_debug_mode, $run_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntriesApi->timesheetEntriesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **timesheet_entry_endpoint_request** | [**\MergeHRISClient\Model\TimesheetEntryEndpointRequest**](../Model/TimesheetEntryEndpointRequest.md)|  |
 **is_debug_mode** | **bool**| Whether to include debug fields (such as log file links) in the response. | [optional]
 **run_async** | **bool**| Whether or not third-party updates should be run asynchronously. | [optional]

### Return type

[**\MergeHRISClient\Model\TimesheetEntryResponse**](../Model/TimesheetEntryResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntriesList()`

```php
timesheetEntriesList($x_account_token, $created_after, $created_before, $cursor, $employee_id, $ended_after, $ended_before, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_id, $started_after, $started_before): \MergeHRISClient\Model\PaginatedTimesheetEntryList
```



Returns a list of `TimesheetEntry` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimesheetEntriesApi(
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
$ended_after = 'ended_after_example'; // string | If provided, will only return employee payroll runs ended after this datetime.
$ended_before = 'ended_before_example'; // string | If provided, will only return employee payroll runs ended before this datetime.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge after this date time will be returned.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge before this date time will be returned.
$order_by = 'order_by_example'; // string | Overrides the default ordering for this endpoint. Possible values include: start_time, -start_time.
$page_size = 56; // int | Number of results to return per page.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$started_after = 'started_after_example'; // string | If provided, will only return employee payroll runs started after this datetime.
$started_before = 'started_before_example'; // string | If provided, will only return employee payroll runs started before this datetime.

try {
    $result = $apiInstance->timesheetEntriesList($x_account_token, $created_after, $created_before, $cursor, $employee_id, $ended_after, $ended_before, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_id, $started_after, $started_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntriesApi->timesheetEntriesList: ', $e->getMessage(), PHP_EOL;
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
 **ended_after** | **string**| If provided, will only return employee payroll runs ended after this datetime. | [optional]
 **ended_before** | **string**| If provided, will only return employee payroll runs ended before this datetime. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modified_after** | **\DateTime**| If provided, only objects synced by Merge after this date time will be returned. | [optional]
 **modified_before** | **\DateTime**| If provided, only objects synced by Merge before this date time will be returned. | [optional]
 **order_by** | **string**| Overrides the default ordering for this endpoint. Possible values include: start_time, -start_time. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **started_after** | **string**| If provided, will only return employee payroll runs started after this datetime. | [optional]
 **started_before** | **string**| If provided, will only return employee payroll runs started before this datetime. | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedTimesheetEntryList**](../Model/PaginatedTimesheetEntryList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timesheetEntriesMetaPostRetrieve()`

```php
timesheetEntriesMetaPostRetrieve($x_account_token): \MergeHRISClient\Model\MetaResponse
```



Returns metadata for `TimesheetEntry` POSTs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimesheetEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->timesheetEntriesMetaPostRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntriesApi->timesheetEntriesMetaPostRetrieve: ', $e->getMessage(), PHP_EOL;
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

## `timesheetEntriesRetrieve()`

```php
timesheetEntriesRetrieve($x_account_token, $id, $include_remote_data): \MergeHRISClient\Model\TimesheetEntry
```



Returns a `TimesheetEntry` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimesheetEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.

try {
    $result = $apiInstance->timesheetEntriesRetrieve($x_account_token, $id, $include_remote_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetEntriesApi->timesheetEntriesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]

### Return type

[**\MergeHRISClient\Model\TimesheetEntry**](../Model/TimesheetEntry.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
