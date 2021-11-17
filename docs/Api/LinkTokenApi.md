# OpenAPI\Client\LinkTokenApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkTokenCreate()**](LinkTokenApi.md#linkTokenCreate) | **POST** /link-token | 


## `linkTokenCreate()`

```php
linkTokenCreate($end_user_details_request): \OpenAPI\Client\Model\LinkToken
```



Creates a link token to be used when linking a new end user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LinkTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$end_user_details_request = new \OpenAPI\Client\Model\EndUserDetailsRequest(); // \OpenAPI\Client\Model\EndUserDetailsRequest

try {
    $result = $apiInstance->linkTokenCreate($end_user_details_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkTokenApi->linkTokenCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **end_user_details_request** | [**\OpenAPI\Client\Model\EndUserDetailsRequest**](../Model/EndUserDetailsRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\LinkToken**](../Model/LinkToken.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
