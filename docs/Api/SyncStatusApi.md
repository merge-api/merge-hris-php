# OpenAPI\Client\SyncStatusApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**syncStatusList()**](SyncStatusApi.md#syncStatusList) | **GET** /sync-status | 
[**syncStatusResyncCreate()**](SyncStatusApi.md#syncStatusResyncCreate) | **POST** /sync-status/resync | 


## `syncStatusList()`

```php
syncStatusList($x_account_token, $cursor, $page_size): \OpenAPI\Client\Model\PaginatedSyncStatusList
```



Get syncing status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$cursor = 56; // int | The pagination cursor value.
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
 **cursor** | **int**| The pagination cursor value. | [optional]
 **page_size** | **int**| Number of results to return per page. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedSyncStatusList**](../Model/PaginatedSyncStatusList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncStatusResyncCreate()`

```php
syncStatusResyncCreate($x_account_token): \OpenAPI\Client\Model\SyncStatus
```



Force re-sync of all models. This is only available for organizations on Merge's Grow and Expand plans.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->syncStatusResyncCreate($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncStatusApi->syncStatusResyncCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\OpenAPI\Client\Model\SyncStatus**](../Model/SyncStatus.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
