<?php
/**
 * PayGroupsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge HRIS API
 *
 * The unified API for building rich integrations with multiple HR Information System platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MergeHRISClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MergeHRISClient\ApiException;
use MergeHRISClient\Configuration;
use MergeHRISClient\HeaderSelector;
use MergeHRISClient\ObjectSerializer;

/**
 * PayGroupsApi Class Doc Comment
 *
 * @category Class
 * @package  MergeHRISClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayGroupsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation payGroupsList
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\PaginatedPayGroupList
     */
    public function payGroupsList($x_account_token, $created_after = null, $created_before = null, $cursor = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $page_size = null, $remote_id = null)
    {
        list($response) = $this->payGroupsListWithHttpInfo($x_account_token, $created_after, $created_before, $cursor, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_id);
        return $response;
    }

    /**
     * Operation payGroupsListWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\PaginatedPayGroupList, HTTP status code, HTTP response headers (array of strings)
     */
    public function payGroupsListWithHttpInfo($x_account_token, $created_after = null, $created_before = null, $cursor = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $page_size = null, $remote_id = null)
    {
        $request = $this->payGroupsListRequest($x_account_token, $created_after, $created_before, $cursor, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MergeHRISClient\Model\PaginatedPayGroupList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\PaginatedPayGroupList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\PaginatedPayGroupList';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MergeHRISClient\Model\PaginatedPayGroupList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation payGroupsListAsync
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payGroupsListAsync($x_account_token, $created_after = null, $created_before = null, $cursor = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $page_size = null, $remote_id = null)
    {
        return $this->payGroupsListAsyncWithHttpInfo($x_account_token, $created_after, $created_before, $cursor, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation payGroupsListAsyncWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payGroupsListAsyncWithHttpInfo($x_account_token, $created_after = null, $created_before = null, $cursor = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $page_size = null, $remote_id = null)
    {
        $returnType = '\MergeHRISClient\Model\PaginatedPayGroupList';
        $request = $this->payGroupsListRequest($x_account_token, $created_after, $created_before, $cursor, $include_deleted_data, $include_remote_data, $modified_after, $modified_before, $page_size, $remote_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'payGroupsList'
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  \DateTime $created_after If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $created_before If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $include_deleted_data Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modified_after If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modified_before If provided, will only return objects modified before this datetime. (optional)
     * @param  int $page_size Number of results to return per page. (optional)
     * @param  string $remote_id The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function payGroupsListRequest($x_account_token, $created_after = null, $created_before = null, $cursor = null, $include_deleted_data = null, $include_remote_data = null, $modified_after = null, $modified_before = null, $page_size = null, $remote_id = null)
    {
        // verify the required parameter 'x_account_token' is set
        if ($x_account_token === null || (is_array($x_account_token) && count($x_account_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_account_token when calling payGroupsList'
            );
        }

        $resourcePath = '/pay-groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($created_after !== null) {
            if('form' === 'form' && is_array($created_after)) {
                foreach($created_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['created_after'] = $created_after;
            }
        }
        // query params
        if ($created_before !== null) {
            if('form' === 'form' && is_array($created_before)) {
                foreach($created_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['created_before'] = $created_before;
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cursor'] = $cursor;
            }
        }
        // query params
        if ($include_deleted_data !== null) {
            if('form' === 'form' && is_array($include_deleted_data)) {
                foreach($include_deleted_data as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_deleted_data'] = $include_deleted_data;
            }
        }
        // query params
        if ($include_remote_data !== null) {
            if('form' === 'form' && is_array($include_remote_data)) {
                foreach($include_remote_data as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_remote_data'] = $include_remote_data;
            }
        }
        // query params
        if ($modified_after !== null) {
            if('form' === 'form' && is_array($modified_after)) {
                foreach($modified_after as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['modified_after'] = $modified_after;
            }
        }
        // query params
        if ($modified_before !== null) {
            if('form' === 'form' && is_array($modified_before)) {
                foreach($modified_before as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['modified_before'] = $modified_before;
            }
        }
        // query params
        if ($page_size !== null) {
            if('form' === 'form' && is_array($page_size)) {
                foreach($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page_size'] = $page_size;
            }
        }
        // query params
        if ($remote_id !== null) {
            if('form' === 'form' && is_array($remote_id)) {
                foreach($remote_id as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['remote_id'] = $remote_id;
            }
        }

        // header params
        if ($x_account_token !== null) {
            $headerParams['X-Account-Token'] = ObjectSerializer::toHeaderValue($x_account_token);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation payGroupsRetrieve
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MergeHRISClient\Model\PayGroup
     */
    public function payGroupsRetrieve($x_account_token, $id, $include_remote_data = null)
    {
        list($response) = $this->payGroupsRetrieveWithHttpInfo($x_account_token, $id, $include_remote_data);
        return $response;
    }

    /**
     * Operation payGroupsRetrieveWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \MergeHRISClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MergeHRISClient\Model\PayGroup, HTTP status code, HTTP response headers (array of strings)
     */
    public function payGroupsRetrieveWithHttpInfo($x_account_token, $id, $include_remote_data = null)
    {
        $request = $this->payGroupsRetrieveRequest($x_account_token, $id, $include_remote_data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\MergeHRISClient\Model\PayGroup' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MergeHRISClient\Model\PayGroup', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MergeHRISClient\Model\PayGroup';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\MergeHRISClient\Model\PayGroup',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation payGroupsRetrieveAsync
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payGroupsRetrieveAsync($x_account_token, $id, $include_remote_data = null)
    {
        return $this->payGroupsRetrieveAsyncWithHttpInfo($x_account_token, $id, $include_remote_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation payGroupsRetrieveAsyncWithHttpInfo
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payGroupsRetrieveAsyncWithHttpInfo($x_account_token, $id, $include_remote_data = null)
    {
        $returnType = '\MergeHRISClient\Model\PayGroup';
        $request = $this->payGroupsRetrieveRequest($x_account_token, $id, $include_remote_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'payGroupsRetrieve'
     *
     * @param  string $x_account_token Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $include_remote_data Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function payGroupsRetrieveRequest($x_account_token, $id, $include_remote_data = null)
    {
        // verify the required parameter 'x_account_token' is set
        if ($x_account_token === null || (is_array($x_account_token) && count($x_account_token) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_account_token when calling payGroupsRetrieve'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling payGroupsRetrieve'
            );
        }

        $resourcePath = '/pay-groups/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($include_remote_data !== null) {
            if('form' === 'form' && is_array($include_remote_data)) {
                foreach($include_remote_data as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_remote_data'] = $include_remote_data;
            }
        }

        // header params
        if ($x_account_token !== null) {
            $headerParams['X-Account-Token'] = ObjectSerializer::toHeaderValue($x_account_token);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
