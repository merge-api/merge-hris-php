# MergeHRISClient\AccountTokenApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTokenRetrieve()**](AccountTokenApi.md#accountTokenRetrieve) | **GET** /account-token/{public_token} | 


## `accountTokenRetrieve()`

```php
accountTokenRetrieve($public_token): \MergeHRISClient\Model\AccountToken
```



Returns the account token for the end user with the provided public token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\AccountTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$public_token = 'public_token_example'; // string

try {
    $result = $apiInstance->accountTokenRetrieve($public_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTokenApi->accountTokenRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **public_token** | **string**|  |

### Return type

[**\MergeHRISClient\Model\AccountToken**](../Model/AccountToken.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
