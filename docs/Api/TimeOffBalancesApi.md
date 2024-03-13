# MergeHRISClient\TimeOffBalancesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeOffBalancesList()**](TimeOffBalancesApi.md#timeOffBalancesList) | **GET** /time-off-balances | 
[**timeOffBalancesRetrieve()**](TimeOffBalancesApi.md#timeOffBalancesRetrieve) | **GET** /time-off-balances/{id} | 


## `timeOffBalancesList()`

```php
timeOffBalancesList($x_account_token, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $policy_type, $remote_fields, $remote_id, $show_enum_origins): \MergeHRISClient\Model\PaginatedTimeOffBalanceList
```



Returns a list of `TimeOffBalance` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimeOffBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$employee_id = 'employee_id_example'; // string | If provided, will only return time off balances for this employee.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge after this date time will be returned.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge before this date time will be returned.
$page_size = 56; // int | Number of results to return per page.
$policy_type = 'policy_type_example'; // string | If provided, will only return TimeOffBalance with this policy type. Options: ('VACATION', 'SICK', 'PERSONAL', 'JURY_DUTY', 'VOLUNTEER', 'BEREAVEMENT')  * `VACATION` - VACATION * `SICK` - SICK * `PERSONAL` - PERSONAL * `JURY_DUTY` - JURY_DUTY * `VOLUNTEER` - VOLUNTEER * `BEREAVEMENT` - BEREAVEMENT
$remote_fields = policy_type; // string | Deprecated. Use show_enum_origins.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$show_enum_origins = policy_type; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)

try {
    $result = $apiInstance->timeOffBalancesList($x_account_token, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $policy_type, $remote_fields, $remote_id, $show_enum_origins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffBalancesApi->timeOffBalancesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **created_after** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **created_before** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **employee_id** | **string**| If provided, will only return time off balances for this employee. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modified_after** | **\DateTime**| If provided, only objects synced by Merge after this date time will be returned. | [optional]
 **modified_before** | **\DateTime**| If provided, only objects synced by Merge before this date time will be returned. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **policy_type** | **string**| If provided, will only return TimeOffBalance with this policy type. Options: (&#39;VACATION&#39;, &#39;SICK&#39;, &#39;PERSONAL&#39;, &#39;JURY_DUTY&#39;, &#39;VOLUNTEER&#39;, &#39;BEREAVEMENT&#39;)  * &#x60;VACATION&#x60; - VACATION * &#x60;SICK&#x60; - SICK * &#x60;PERSONAL&#x60; - PERSONAL * &#x60;JURY_DUTY&#x60; - JURY_DUTY * &#x60;VOLUNTEER&#x60; - VOLUNTEER * &#x60;BEREAVEMENT&#x60; - BEREAVEMENT | [optional]
 **remote_fields** | **string**| Deprecated. Use show_enum_origins. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **show_enum_origins** | **string**| A comma separated list of enum field names for which you&#39;d like the original values to be returned, instead of Merge&#39;s normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter) | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedTimeOffBalanceList**](../Model/PaginatedTimeOffBalanceList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeOffBalancesRetrieve()`

```php
timeOffBalancesRetrieve($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins): \MergeHRISClient\Model\TimeOffBalance
```



Returns a `TimeOffBalance` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\TimeOffBalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$remote_fields = policy_type; // string | Deprecated. Use show_enum_origins.
$show_enum_origins = policy_type; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)

try {
    $result = $apiInstance->timeOffBalancesRetrieve($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeOffBalancesApi->timeOffBalancesRetrieve: ', $e->getMessage(), PHP_EOL;
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

[**\MergeHRISClient\Model\TimeOffBalance**](../Model/TimeOffBalance.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
