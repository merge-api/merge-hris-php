# MergeHRISClient\BankInfoApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankInfoList()**](BankInfoApi.md#bankInfoList) | **GET** /bank-info | 
[**bankInfoRetrieve()**](BankInfoApi.md#bankInfoRetrieve) | **GET** /bank-info/{id} | 


## `bankInfoList()`

```php
bankInfoList($x_account_token, $account_type, $bank_name, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_fields, $remote_id, $show_enum_origins): \MergeHRISClient\Model\PaginatedBankInfoList
```



Returns a list of `BankInfo` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\BankInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$account_type = 'account_type_example'; // string | If provided, will only return BankInfo's with this account type. Options: ('SAVINGS', 'CHECKING')  * `SAVINGS` - SAVINGS * `CHECKING` - CHECKING
$bank_name = 'bank_name_example'; // string | If provided, will only return BankInfo's with this bank name.
$created_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$created_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$employee_id = 'employee_id_example'; // string | If provided, will only return bank accounts for this employee.
$include_deleted_data = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge after this date time will be returned.
$modified_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, only objects synced by Merge before this date time will be returned.
$order_by = 'order_by_example'; // string | Overrides the default ordering for this endpoint. Possible values include: remote_created_at, -remote_created_at.
$page_size = 56; // int | Number of results to return per page.
$remote_fields = account_type; // string | Deprecated. Use show_enum_origins.
$remote_id = 'remote_id_example'; // string | The API provider's ID for the given object.
$show_enum_origins = account_type; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)

try {
    $result = $apiInstance->bankInfoList($x_account_token, $account_type, $bank_name, $created_after, $created_before, $cursor, $employee_id, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $order_by, $page_size, $remote_fields, $remote_id, $show_enum_origins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankInfoApi->bankInfoList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **account_type** | **string**| If provided, will only return BankInfo&#39;s with this account type. Options: (&#39;SAVINGS&#39;, &#39;CHECKING&#39;)  * &#x60;SAVINGS&#x60; - SAVINGS * &#x60;CHECKING&#x60; - CHECKING | [optional]
 **bank_name** | **string**| If provided, will only return BankInfo&#39;s with this bank name. | [optional]
 **created_after** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **created_before** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **employee_id** | **string**| If provided, will only return bank accounts for this employee. | [optional]
 **include_deleted_data** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **include_remote_data** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modified_after** | **\DateTime**| If provided, only objects synced by Merge after this date time will be returned. | [optional]
 **modified_before** | **\DateTime**| If provided, only objects synced by Merge before this date time will be returned. | [optional]
 **order_by** | **string**| Overrides the default ordering for this endpoint. Possible values include: remote_created_at, -remote_created_at. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]
 **remote_fields** | **string**| Deprecated. Use show_enum_origins. | [optional]
 **remote_id** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **show_enum_origins** | **string**| A comma separated list of enum field names for which you&#39;d like the original values to be returned, instead of Merge&#39;s normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter) | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedBankInfoList**](../Model/PaginatedBankInfoList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankInfoRetrieve()`

```php
bankInfoRetrieve($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins): \MergeHRISClient\Model\BankInfo
```



Returns a `BankInfo` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\BankInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$include_remote_data = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$remote_fields = account_type; // string | Deprecated. Use show_enum_origins.
$show_enum_origins = account_type; // string | A comma separated list of enum field names for which you'd like the original values to be returned, instead of Merge's normalized enum values. [Learn more](https://help.merge.dev/en/articles/8950958-show_enum_origins-query-parameter)

try {
    $result = $apiInstance->bankInfoRetrieve($x_account_token, $id, $include_remote_data, $remote_fields, $show_enum_origins);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankInfoApi->bankInfoRetrieve: ', $e->getMessage(), PHP_EOL;
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

[**\MergeHRISClient\Model\BankInfo**](../Model/BankInfo.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
