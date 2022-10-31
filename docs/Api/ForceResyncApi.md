# MergeHRISClient\ForceResyncApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**syncStatusResyncCreate()**](ForceResyncApi.md#syncStatusResyncCreate) | **POST** /sync-status/resync | 


## `syncStatusResyncCreate()`

```php
syncStatusResyncCreate($x_account_token): \MergeHRISClient\Model\SyncStatus[]
```



Force re-sync of all models. This is only available for organizations on Merge's Grow and Expand plans.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\ForceResyncApi(
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
    echo 'Exception when calling ForceResyncApi->syncStatusResyncCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\MergeHRISClient\Model\SyncStatus[]**](../Model/SyncStatus.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
