# # DataPassthroughRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**method** | [**MethodEnum**](MethodEnum.md) |  |
**path** | **string** |  |
**base_url_override** | **string** |  | [optional]
**data** | **string** |  | [optional]
**multipart_form_data** | [**\MergeHRISClient\Model\MultipartFormFieldRequest[]**](MultipartFormFieldRequest.md) | Pass an array of &#x60;MultipartFormField&#x60; objects in here instead of using the &#x60;data&#x60; param if &#x60;request_format&#x60; is set to &#x60;MULTIPART&#x60;. | [optional]
**headers** | **array<string,mixed>** | The headers to use for the request (Merge will handle the account&#39;s authorization headers). &#x60;Content-Type&#x60; header is required for passthrough. Choose content type corresponding to expected format of receiving server. | [optional]
**request_format** | [**RequestFormatEnum**](RequestFormatEnum.md) |  | [optional]
**normalize_response** | **bool** | Optional. If true, the response will always be an object of the form &#x60;{\&quot;type\&quot;: T, \&quot;value\&quot;: ...}&#x60; where &#x60;T&#x60; will be one of &#x60;string, boolean, number, null, array, object&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
