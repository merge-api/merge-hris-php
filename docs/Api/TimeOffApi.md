# MergeHRISClient\TimeOffApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeOffCreate()**](TimeOffApi.md#timeOffCreate) | **POST** /time-off | 
[**timeOffList()**](TimeOffApi.md#timeOffList) | **GET** /time-off | 
[**timeOffMetaPostRetrieve()**](TimeOffApi.md#timeOffMetaPostRetrieve) | **GET** /time-off/meta/post | 
[**timeOffRetrieve()**](TimeOffApi.md#timeOffRetrieve) | **GET** /time-off/{id} | 


## `timeOffCreate()`

```php
timeOffCreate($x_account_token, $time_off_endpoint_request, $is_debug_mode, $run_async): \MergeHRISClient\Model\TimeOffResponse
```



Creates a `TimeOff` object with the given values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimeOffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$time_off_endpoint_request = new \MergeHRISClient\Model\TimeOffEndpointRequest(); // \MergeHRISClient\Model\TimeOffEndpointRequest
$is_debug_mode = True; // bool | Whether to include debug fields (such as log file links) in the response.
$run_async = True; // bool | Whether or not third-party updates should be run asynchronously.

try {
    $result = $apiInstance->timeOffCreate($x_account_token, $time_off_endpoint_request, $is_debug_mode, $run_async);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->timeOffCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **time_off_endpoint_request** | [**\MergeHRISClient\Model\TimeOffEndpointRequest**](../Model/TimeOffEndpointRequest.md)|  |
 **is_debug_mode** | **bool**| Whether to include debug fields (such as log file links) in the response. | [optional]
 **run_async** | **bool**| Whether or not third-party updates should be run asynchronously. | [optional]

### Return type

[**\MergeHRISClient\Model\TimeOffResponse**](../Model/TimeOffResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeOffList()`

```php
timeOffList($x_account_token, $approver_id, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_fields, $remote_id, $request_type, $status): \MergeHRISClient\Model\PaginatedTimeOffList
```



Returns a list of `TimeOff` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimeOffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$approver_id = 'approver_id_example'; // string | If provided, will only return time off for this approver.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$employee_id = 'employee_id_example'; // string | If provided, will only return time off for this employee.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$page_size = 56; // int | Number of results to return per page.
$remote_fields = request_type,status,units; // string | Which fields should be returned in non-normalized form.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$request_type = 'request_type_example'; // string | If provided, will only return TimeOff with this request type. Options: ('VACATION', 'SICK', 'PERSONAL', 'JURY_DUTY', 'VOLUNTEER', 'BEREAVEMENT')
$status = 'status_example'; // string | If provided, will only return TimeOff with this status. Options: ('REQUESTED', 'APPROVED', 'DECLINED', 'CANCELLED', 'DELETED')

try {
    $result = $apiInstance->timeOffList($x_account_token, $approver_id, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_fields, $remote_id, $request_type, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->timeOffList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **approver_id** | **string**| If provided, will only return time off for this approver. | [optional]
 **created_after** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **created_before** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **employee_id** | **string**| If provided, will only return time off for this employee. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modified_after** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modified_before** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **remote_fields** | **string**| Which fields should be returned in non-normalized form. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **request_type** | **string**| If provided, will only return TimeOff with this request type. Options: (&#39;VACATION&#39;, &#39;SICK&#39;, &#39;PERSONAL&#39;, &#39;JURY_DUTY&#39;, &#39;VOLUNTEER&#39;, &#39;BEREAVEMENT&#39;) | [optional]
 **status** | **string**| If provided, will only return TimeOff with this status. Options: (&#39;REQUESTED&#39;, &#39;APPROVED&#39;, &#39;DECLINED&#39;, &#39;CANCELLED&#39;, &#39;DELETED&#39;) | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedTimeOffList**](../Model/PaginatedTimeOffList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeOffMetaPostRetrieve()`

```php
timeOffMetaPostRetrieve($x_account_token): \MergeHRISClient\Model\MetaResponse
```



Returns metadata for `TimeOff` POSTs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimeOffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->timeOffMetaPostRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->timeOffMetaPostRetrieve: ', $e->getMessage(), PHP_EOL;
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

## `timeOffRetrieve()`

```php
timeOffRetrieve($x_account_token, $id, $include_remote_data, $remote_fields): \MergeHRISClient\Model\TimeOff
```



Returns a `TimeOff` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimeOffApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$remote_fields = request_type,status,units; // string | Which fields should be returned in non-normalized form.

try {
    $result = $apiInstance->timeOffRetrieve($x_account_token, $id, $include_remote_data, $remote_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffApi->timeOffRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **remote_fields** | **string**| Which fields should be returned in non-normalized form. | [optional]

### Return type

[**\MergeHRISClient\Model\TimeOff**](../Model/TimeOff.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
