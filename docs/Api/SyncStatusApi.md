# MergeHRISClient\SyncStatusApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**syncStatusList()**](SyncStatusApi.md#syncStatusList) | **GET** /sync-status | 


## `syncStatusList()`

```php
syncStatusList($x_account_token, $cursor, $page_size): \MergeHRISClient\Model\PaginatedSyncStatusList
```



Get syncing status. Possible values: `DISABLED`, `DONE`, `FAILED`, `PAUSED`, `SYNCING`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\SyncStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$page_size = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->syncStatusList($x_account_token, $cursor, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncStatusApi->syncStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\MergeHRISClient\Model\PaginatedSyncStatusList**](../Model/PaginatedSyncStatusList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
