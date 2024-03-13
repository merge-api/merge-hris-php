# MergeHRISClient\PayrollRunsApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**payrollRunsList()**](PayrollRunsApi.md#payrollRunsList) | **GET** /payroll-runs | 
[**payrollRunsRetrieve()**](PayrollRunsApi.md#payrollRunsRetrieve) | **GET** /payroll-runs/{id} | 


## `payrollRunsList()`

```php
payrollRunsList($x_account_token, $created_after, $created_before, $cursor, $ended_after, $ended_before, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_fields, $remote_id, $run_type, $show_enum_origins, $started_after, $started_before): \MergeHRISClient\Model\PaginatedPayrollRunList
```



Returns a list of `PayrollRun` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\PayrollRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$ended_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return payroll runs ended after this datetime.
$ended_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return payroll runs ended before this datetime.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge after this date time will be returned.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge before this date time will be returned.
$page_size = 56; // int | Number of results to return per page.
$remote_fields = run_state,run_type; // string | Deprecated. Use show_enum_origins.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$run_type = 'run_type_example'; // string | If provided, will only return PayrollRun's with this status. Options: ('REGULAR', 'OFF_CYCLE', 'CORRECTION', 'TERMINATION', 'SIGN_ON_BONUS')  * `REGULAR` - REGULAR * `OFF_CYCLE` - OFF_CYCLE * `CORRECTION` - CORRECTION * `TERMINATION` - TERMINATION * `SIGN_ON_BONUS` - SIGN_ON_BONUS
$show_enum_origins = run_state,run_type; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)
$started_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return payroll runs started after this datetime.
$started_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return payroll runs started before this datetime.

try {
    $result = $apiInstance->payrollRunsList($x_account_token, $created_after, $created_before, $cursor, $ended_after, $ended_before, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_fields, $remote_id, $run_type, $show_enum_origins, $started_after, $started_before);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollRunsApi->payrollRunsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **created_after** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **created_before** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **ended_after** | **\DateTime**| If provided, will only return payroll runs ended after this datetime. | [optional]
 **ended_before** | **\DateTime**| If provided, will only return payroll runs ended before this datetime. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modified_after** | **\DateTime**| If provided, only objects synced by Merge after this date time will be returned. | [optional]
 **modified_before** | **\DateTime**| If provided, only objects synced by Merge before this date time will be returned. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **remote_fields** | **string**| Deprecated. Use show_enum_origins. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **run_type** | **string**| If provided, will only return PayrollRun&#39;s with this status. Options: (&#39;REGULAR&#39;, &#39;OFF_CYCLE&#39;, &#39;CORRECTION&#39;, &#39;TERMINATION&#39;, &#39;SIGN_ON_BONUS&#39;)  * &#x60;REGULAR&#x60; - REGULAR * &#x60;OFF_CYCLE&#x60; - OFF_CYCLE * &#x60;CORRECTION&#x60; - CORRECTION * &#x60;TERMINATION&#x60; - TERMINATION * &#x60;SIGN_ON_BONUS&#x60; - SIGN_ON_BONUS | [optional]
 **show_enum_origins** | **string**| A comma separated list of enum field names for which you&#39;d like the original values to be returned, instead of Merge&#39;s normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter) | [optional]
 **started_after** | **\DateTime**| If provided, will only return payroll runs started after this datetime. | [optional]
 **started_before** | **\DateTime**| If provided, will only return payroll runs started before this datetime. | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedPayrollRunList**](../Model/PaginatedPayrollRunList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `payrollRunsRetrieve()`

```php
payrollRunsRetrieve($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins): \MergeHRISClient\Model\PayrollRun
```



Returns a `PayrollRun` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\PayrollRunsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$remote_fields = run_state,run_type; // string | Deprecated. Use show_enum_origins.
$show_enum_origins = run_state,run_type; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)

try {
    $result = $apiInstance->payrollRunsRetrieve($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayrollRunsApi->payrollRunsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **remote_fields** | **string**| Deprecated. Use show_enum_origins. | [optional]
 **show_enum_origins** | **string**| A comma separated list of enum field names for which you&#39;d like the original values to be returned, instead of Merge&#39;s normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter) | [optional]

### Return type

[**\MergeHRISClient\Model\PayrollRun**](../Model/PayrollRun.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
