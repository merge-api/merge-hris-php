# OpenAPI\Client\GenerateKeyApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateKeyCreate()**](GenerateKeyApi.md#generateKeyCreate) | **POST** /generate-key | 


## `generateKeyCreate()`

```php
generateKeyCreate($generate_remote_key_request): \OpenAPI\Client\Model\RemoteKey
```



Create a remote key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GenerateKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$generate_remote_key_request = new \OpenAPI\Client\Model\GenerateRemoteKeyRequest(); // \OpenAPI\Client\Model\GenerateRemoteKeyRequest

try {
    $result = $apiInstance->generateKeyCreate($generate_remote_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenerateKeyApi->generateKeyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generate_remote_key_request** | [**\OpenAPI\Client\Model\GenerateRemoteKeyRequest**](../Model/GenerateRemoteKeyRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RemoteKey**](../Model/RemoteKey.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
