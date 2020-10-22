# DigitalEnablementClient

The Enhanced Currency Conversion Calculator is a subscription-based service that provides access to Mastercard's current dates currency conversion rates as well as historical currency conversion rates. Additionally, the API provides access to European Central Bank (ECB) reference rates that European Economic Area (EEA) issuing customer may require for the purposes of compliance with EU Regulation 2019/518

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.0.0
- Package version: 1.0.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://developer.mastercard.com/support](https://developer.mastercard.com/support)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/DigitalEnablementClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DigitalEnablementClient\Api\ConversionRateIssuedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_date = 2020-02-14; // string | Rate issued date (YYYY-mm-dd)

try {
    $result = $apiInstance->isEcbMcRateIssuedUsingGET($request_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionRateIssuedApi->isEcbMcRateIssuedUsingGET: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.mastercard.com/enhanced/settlement/currencyrate/subscribed*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ConversionRateIssuedApi* | [**isEcbMcRateIssuedUsingGET**](docs/Api/ConversionRateIssuedApi.md#isecbmcrateissuedusingget) | **GET** /rate-statuses | isEcbMcRateIssued
*ConversionRateSummaryApi* | [**getEnhancedConversionDetailsUsingGET**](docs/Api/ConversionRateSummaryApi.md#getenhancedconversiondetailsusingget) | **GET** /summary-rates | getEnhancedConversionDetails
*EcbCurrenciesApi* | [**getEcbCurrenciesListUsingGET**](docs/Api/EcbCurrenciesApi.md#getecbcurrencieslistusingget) | **GET** /ecb-currencies | getEcbCurrenciesList
*MastercardCurrenciesApi* | [**getEnhancedMCCurrencyDataUsingGET**](docs/Api/MastercardCurrenciesApi.md#getenhancedmccurrencydatausingget) | **GET** /mc-currencies | getEnhancedMCCurrencyData


## Documentation For Models

 - [ECBConversionObject](docs/Model/ECBConversionObject.md)
 - [EcbError](docs/Model/EcbError.md)
 - [EcbMcRateIssued](docs/Model/EcbMcRateIssued.md)
 - [EnhancedCurrency](docs/Model/EnhancedCurrency.md)
 - [EnhancedCurrencyConversionData](docs/Model/EnhancedCurrencyConversionData.md)
 - [EnhancedCurrencyConversionResponse](docs/Model/EnhancedCurrencyConversionResponse.md)
 - [EnhancedEcbCurrencies](docs/Model/EnhancedEcbCurrencies.md)
 - [EnhancedEcbCurrencyResponse](docs/Model/EnhancedEcbCurrencyResponse.md)
 - [EnhancedMastercardCurrencies](docs/Model/EnhancedMastercardCurrencies.md)
 - [EnhancedMastercardCurrencyResponse](docs/Model/EnhancedMastercardCurrencyResponse.md)
 - [EnhancedSettlementRateIssued](docs/Model/EnhancedSettlementRateIssued.md)
 - [EnhancedSettlementRateIssuedResponse](docs/Model/EnhancedSettlementRateIssuedResponse.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Errors](docs/Model/Errors.md)
 - [MastercardConversionObject](docs/Model/MastercardConversionObject.md)


## Documentation For Authorization

All endpoints do not require authorization.

## Author

apisupport@mastercard.com
