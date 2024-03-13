# MergeHRISClient\ScopesApi

All URIs are relative to https://api.merge.dev/api/hris/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**defaultScopesRetrieve()**](ScopesApi.md#defaultScopesRetrieve) | **GET** /default-scopes | 
[**linkedAccountScopesCreate()**](ScopesApi.md#linkedAccountScopesCreate) | **POST** /linked-account-scopes | 
[**linkedAccountScopesRetrieve()**](ScopesApi.md#linkedAccountScopesRetrieve) | **GET** /linked-account-scopes | 


## `defaultScopesRetrieve()`

```php
defaultScopesRetrieve(): \MergeHRISClient\Model\CommonModelScopeAPI
```



Get the default permissions for Merge Common Models and fields across all Linked Accounts of a given category. [Learn more](https://help.merge.dev/en/articles/8828211-common-model-and-field-scopes).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\ScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->defaultScopesRetrieve();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopesApi->defaultScopesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MergeHRISClient\Model\CommonModelScopeAPI**](../Model/CommonModelScopeAPI.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkedAccountScopesCreate()`

```php
linkedAccountScopesCreate($x_account_token, $linked_account_common_model_scope_deserializer_request): \MergeHRISClient\Model\CommonModelScopeAPI
```



Update permissions for any Common Model or field for a single Linked Account. Any Scopes not set in this POST request will inherit the default Scopes. [Learn more](https://help.merge.dev/en/articles/8828211-common-model-and-field-scopes)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\ScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.
$linked_account_common_model_scope_deserializer_request = new \MergeHRISClient\Model\LinkedAccountCommonModelScopeDeserializerRequest(); // \MergeHRISClient\Model\LinkedAccountCommonModelScopeDeserializerRequest

try {
    $result = $apiInstance->linkedAccountScopesCreate($x_account_token, $linked_account_common_model_scope_deserializer_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopesApi->linkedAccountScopesCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |
 **linked_account_common_model_scope_deserializer_request** | [**\MergeHRISClient\Model\LinkedAccountCommonModelScopeDeserializerRequest**](../Model/LinkedAccountCommonModelScopeDeserializerRequest.md)|  |

### Return type

[**\MergeHRISClient\Model\CommonModelScopeAPI**](../Model/CommonModelScopeAPI.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `linkedAccountScopesRetrieve()`

```php
linkedAccountScopesRetrieve($x_account_token): \MergeHRISClient\Model\CommonModelScopeAPI
```



Get all available permissions for Merge Common Models and fields for a single Linked Account. [Learn more](https://help.merge.dev/en/articles/8828211-common-model-and-field-scopes).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MergeHRISClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MergeHRISClient\Api\ScopesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_account_token = 'x_account_token_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->linkedAccountScopesRetrieve($x_account_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScopesApi->linkedAccountScopesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_token** | **string**| Token identifying the end user. |

### Return type

[**\MergeHRISClient\Model\CommonModelScopeAPI**](../Model/CommonModelScopeAPI.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
