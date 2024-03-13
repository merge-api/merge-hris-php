# # AccountIntegration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Company name. |
**categories** | [**\MergeHRISClient\Model\CategoriesEnum[]**](CategoriesEnum.md) | Category or categories this integration belongs to. Multiple categories should be comma separated, i.e. [ats, hris]. | [optional] [readonly]
**image** | **string** | Company logo in rectangular shape. &lt;b&gt;Upload an image with a clear background.&lt;/b&gt; | [optional]
**square_image** | **string** | Company logo in square shape. &lt;b&gt;Upload an image with a white background.&lt;/b&gt; | [optional]
**color** | **string** | The color of this integration used for buttons and text throughout the app and landing pages. &lt;b&gt;Choose a darker, saturated color.&lt;/b&gt; | [optional]
**slug** | **string** |  | [optional] [readonly]
**api_endpoints_to_documentation_urls** | **array<string,mixed>** | Mapping of API endpoints to documentation urls for support. Example: {&#39;GET&#39;: [[&#39;/common-model-scopes&#39;, &#39;https://docs.merge.dev/accounting/common-model-scopes/#common_model_scopes_retrieve&#39;],[&#39;/common-model-actions&#39;, &#39;https://docs.merge.dev/accounting/common-model-actions/#common_model_actions_retrieve&#39;]], &#39;POST&#39;: []} | [optional]
**webhook_setup_guide_url** | **string** | Setup guide URL for third party webhook creation. Exposed in Merge Docs. | [optional]
**category_beta_status** | **object** | Category or categories this integration is in beta status for. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
