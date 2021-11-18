# MergeHRISClient\PassthroughApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**passthroughCreate()**](PassthroughApi.md#passthroughCreate) | **POST** /passthrough | 


## `passthroughCreate()`

```php
passthroughCreate($x_account_token, $data_passthrough_request): \MergeHRISClient\Model\RemoteResponse
```



Pull data from an endpoint not currently supported by Merge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\PassthroughApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$data_passthrough_request = new \MergeHRISClient\Model\DataPassthroughRequest(); // \MergeHRISClient\Model\DataPassthroughRequest

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
 **data_passthrough_request** | [**\MergeHRISClient\Model\DataPassthroughRequest**](../Model/DataPassthroughRequest.md)|  |

### Return type

[**\MergeHRISClient\Model\RemoteResponse**](../Model/RemoteResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
