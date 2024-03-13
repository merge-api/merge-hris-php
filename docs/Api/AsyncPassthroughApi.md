# MergeHRISClient\AsyncPassthroughApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**asyncPassthroughCreate()**](AsyncPassthroughApi.md#asyncPassthroughCreate) | **POST** /async-passthrough | 
[**asyncPassthroughRetrieve()**](AsyncPassthroughApi.md#asyncPassthroughRetrieve) | **GET** /async-passthrough/{async_passthrough_receipt_id} | 


## `asyncPassthroughCreate()`

```php
asyncPassthroughCreate($x_account_token, $data_passthrough_request): \MergeHRISClient\Model\AsyncPassthroughReciept
```



Asynchronously pull data from an endpoint not currently supported by Merge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\AsyncPassthroughApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$data_passthrough_request = new \MergeHRISClient\Model\DataPassthroughRequest(); // \MergeHRISClient\Model\DataPassthroughRequest

try {
    $result = $apiInstance->asyncPassthroughCreate($x_account_token, $data_passthrough_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncPassthroughApi->asyncPassthroughCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **data_passthrough_request** | [**\MergeHRISClient\Model\DataPassthroughRequest**](../Model/DataPassthroughRequest.md)|  |

### Return type

[**\MergeHRISClient\Model\AsyncPassthroughReciept**](../Model/AsyncPassthroughReciept.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `asyncPassthroughRetrieve()`

```php
asyncPassthroughRetrieve($x_account_token, $async_passthrough_receipt_id): \MergeHRISClient\Model\RemoteResponse
```



Retrieves data from earlier async-passthrough POST request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\AsyncPassthroughApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$async_passthrough_receipt_id = 'async_passthrough_receipt_id_example'; // string

try {
    $result = $apiInstance->asyncPassthroughRetrieve($x_account_token, $async_passthrough_receipt_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AsyncPassthroughApi->asyncPassthroughRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **async_passthrough_receipt_id** | [**string**](../Model/.md)|  |

### Return type

[**\MergeHRISClient\Model\RemoteResponse**](../Model/RemoteResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
