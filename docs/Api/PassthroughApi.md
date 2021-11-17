# OpenAPI\Client\PassthroughApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**passthroughCreate()**](PassthroughApi.md#passthroughCreate) | **POST** /passthrough | 


## `passthroughCreate()`

```php
passthroughCreate($x_account_token, $data_passthrough_request): \OpenAPI\Client\Model\RemoteResponse
```



Pull data from an endpoint not currently supported by Merge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PassthroughApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$data_passthrough_request = new \OpenAPI\Client\Model\DataPassthroughRequest(); // \OpenAPI\Client\Model\DataPassthroughRequest

try {
    $result = $apiInstance->passthroughCreate($x_account_token, $data_passthrough_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassthroughApi->passthroughCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **data_passthrough_request** | [**\OpenAPI\Client\Model\DataPassthroughRequest**](../Model/DataPassthroughRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RemoteResponse**](../Model/RemoteResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
