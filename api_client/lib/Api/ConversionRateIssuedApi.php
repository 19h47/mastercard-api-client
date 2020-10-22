<?php
/**
 * ConversionRateIssuedApi
 * PHP version 5
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Enhanced Currency Conversion Calculator
 *
 * The Enhanced Currency Conversion Calculator is a subscription-based service that provides access to Mastercard's current dates currency conversion rates as well as historical currency conversion rates. Additionally, the API provides access to European Central Bank (ECB) reference rates that European Economic Area (EEA) issuing customer may require for the purposes of compliance with EU Regulation 2019/518
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apisupport@mastercard.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalEnablementClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DigitalEnablementClient\ApiException;
use DigitalEnablementClient\Configuration;
use DigitalEnablementClient\HeaderSelector;
use DigitalEnablementClient\ObjectSerializer;

/**
 * ConversionRateIssuedApi Class Doc Comment
 *
 * @category Class
 * @package  DigitalEnablementClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConversionRateIssuedApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation isEcbMcRateIssuedUsingGET
     *
     * isEcbMcRateIssued
     *
     * @param  string $request_date Rate issued date (YYYY-mm-dd) (optional)
     *
     * @throws \DigitalEnablementClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse
     */
    public function isEcbMcRateIssuedUsingGET($request_date = null)
    {
        list($response) = $this->isEcbMcRateIssuedUsingGETWithHttpInfo($request_date);
        return $response;
    }

    /**
     * Operation isEcbMcRateIssuedUsingGETWithHttpInfo
     *
     * isEcbMcRateIssued
     *
     * @param  string $request_date Rate issued date (YYYY-mm-dd) (optional)
     *
     * @throws \DigitalEnablementClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse|\DigitalEnablementClient\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function isEcbMcRateIssuedUsingGETWithHttpInfo($request_date = null)
    {
        $request = $this->isEcbMcRateIssuedUsingGETRequest($request_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
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
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\DigitalEnablementClient\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalEnablementClient\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\DigitalEnablementClient\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalEnablementClient\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\DigitalEnablementClient\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalEnablementClient\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\DigitalEnablementClient\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalEnablementClient\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\DigitalEnablementClient\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\DigitalEnablementClient\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalEnablementClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalEnablementClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalEnablementClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalEnablementClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DigitalEnablementClient\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation isEcbMcRateIssuedUsingGETAsync
     *
     * isEcbMcRateIssued
     *
     * @param  string $request_date Rate issued date (YYYY-mm-dd) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function isEcbMcRateIssuedUsingGETAsync($request_date = null)
    {
        return $this->isEcbMcRateIssuedUsingGETAsyncWithHttpInfo($request_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation isEcbMcRateIssuedUsingGETAsyncWithHttpInfo
     *
     * isEcbMcRateIssued
     *
     * @param  string $request_date Rate issued date (YYYY-mm-dd) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function isEcbMcRateIssuedUsingGETAsyncWithHttpInfo($request_date = null)
    {
        $returnType = '\DigitalEnablementClient\Model\EnhancedSettlementRateIssuedResponse';
        $request = $this->isEcbMcRateIssuedUsingGETRequest($request_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'isEcbMcRateIssuedUsingGET'
     *
     * @param  string $request_date Rate issued date (YYYY-mm-dd) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function isEcbMcRateIssuedUsingGETRequest($request_date = null)
    {

        $resourcePath = '/rate-statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($request_date !== null) {
            if('form' === 'form' && is_array($request_date)) {
                foreach($request_date as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['request_date'] = $request_date;
            }
        }



        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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