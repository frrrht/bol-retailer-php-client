# Bol.com Retailer API client for PHP
This is an open source PHP client for the [Bol.com Retailer API](https://api.bol.com/retailer/public/Retailer-API/v8/releasenotes.html) version 8.8.

## Installation
This project can easily be installed through Composer:

```
composer require picqer/bol-retailer-php-client "^8"
```

## Usage
Create an instance of the client and authenticate
```php
$client = new \Picqer\BolRetailerV8\Client();
$client->authenticate('your-client-id', 'your-client-secret');
```

Then you can get the first page of open orders by calling the getOrders() method on the client
```php
$reducedOrders = $client->getOrders();

foreach ($reducedOrders as $reducedOrder) {
    echo 'hello, I am order ' . $reducedOrder->orderId . PHP_EOL;
}
```

## Exceptions
Methods on the Client may throw Exceptions. All Exceptions have the parent class `Picqer\BolRetailerV8\Exception\Exception`:
- `ConnectException` is thrown when a problem occurred in the connection (e.g. API server is down or a network issue). You may retry later.
- `ServerException` (extends `ConnectException`) is thrown when a problem occurred on the Server (e.g. 500 Internal Server Error). You may retry later.
- `ResponseException` is thrown when the received response could not be handled (e.g. not of proper format or unexpected type). Retrying will not help, investigation is needed.
- `UnauthorizedException` is thrown when the server responded with 400 Unauthorized (e.g. invalid credentials).
- `RateLimitException` is thrown when the throttling limit has been reached for the API user.
- `Exception` is thrown when an error occurred in the HTTP library that is not covered by the cases above. We aim to map as much as possible to either `ConnectionException` or `ResponseException`.

## Migrate to v8
If you're migrating to v8, please have a look at the official migration guides to find out what has changed:
- [bol.com Retailer API migration guide from v7 to v8](https://api.bol.com/retailer/public/Retailer-API/v8/migrationguide/v7-v8/migrationguide.html)
- [bol.com Retailer API migration guide from v6 to v7](https://api.bol.com/retailer/public/Retailer-API/v7/migrationguide/v6-v7/migrationguide.html)
- [bol.com Retailer API migration guide from v5 to v7](https://api.bol.com/retailer/public/Retailer-API/v7/migrationguide/v5-v7/migrationguide.html)

### Gradual rollout
It's easy to overlook changes when migrating to a new version, which could result in undesired behaviour. You may consider a gradual rollout to minimize impact on your business. You can achieve this by using two versions of the API client in your project and a way to test the new version with a small percentage of requests. To use different versions of this client through Composer, fork this project and use a specific version branch of that new temporary repository as dependency.

For example, if you forked it to `my-namespace/bol-retailer-php-client`, you can add v8 next to your current version with:

```
composer require my-namespace/bol-retailer-php-client "v8.x-dev"
```

You might need to add that temporary repository as [vcs repository in Composer](https://getcomposer.org/doc/05-repositories.md#vcs) for this package to be visible to Composer. When the new version is running stable, remove the old version from your project and delete the fork.

## Version support expectations
As we're require this client in production at Picqer and this will be the case for the foreseeable future, we will make sure that there is always support a version that is either in the GA or Deprecation [lifecycle stage](https://api.bol.com/retailer/public/Retailer-API/release-planning.html) (and not removed). We have thousands of connected partners using many API services and ideally we want to rollout new API versions slowly, so it might happen that we update this library to the latest GA version in the final weeks before removal of the current supported version.

## Contributing
Please follow the guidelines below if you want to contribute.
- Add the latest API specs of the version you want to contribute to and generate the models and client (see: 'Generated Models and Client').
- Sometimes generation fails due to an error or outputs unexpected code. Fix this in the generator class, do not alter generated classes manually.
- If a generator required a change due to a quirk in the Bol.com API specs, please add that case to the 'Known quirks' section of this README. It would be great if you check whether the current known quirks are still relevant.
- If you contribute with a new major version, any references to 'v8' have to be replaced with the new version:
  - Rename the namespaces in `/src`, `/tests` and `composer.json`.
  - Replace 'v8' with the new version in the test fixtures and in `BaseClient`.
  - Update this README with links to the new migration guide(s) and replace 'v8' with the new version.
- Keep in mind that we want to support PHP 7.1 as long as possible.

## Generated Models and Client
The Client and all models are generated by the supplied [Retailer API specifications](https://api.bol.com/retailer/public/apispec/v8) (`src/OpenApi/retailer.json`) and [Shared API specification](https://api.bol.com/retailer/public/apispec/Shared%20API%20-%20v8) (`src/OpenApi/shared.json`). These specifications are merged. Generating the code ensures there are no typos, not every operation needs a test and future (minor) updates to the specifications can easily be applied. To build the classes for the latest Bol Retailer API version, replace the two specification files with the latest version first.

The generated classes contain all data required to properly map method arguments and response data to the models: the specifications are only used to generate them.

### Client
The Client contains all operations specified in the specifications. The 'operationId' value is converted to camelCase and used as method name for each operation.

The specifications define types for each request and response (if it needs to send data). If a model for such a type encapsulates just one field, that model is abstracted from the operation have a smoother development experience:
- A method in the Client accepts that field as argument instead of the model
- A method in the Client returns the field from that model instead of the model itself

To generate the Client, the following composer script may be used:
```
# Generates Picqer\BolRetailerV8\Client
composer run-script generate-client
```

### Models
The class names for models are equal to the keys of the array 'definitions' in the specifications.

To generate the Models, the following composer script may be used:
```
# Generates all Picqer\BolRetailerV8\Model\* models
composer run-script generate-models
```

## Known quirks
- Some type definitions in de specifications are sentences, for example 'Container for the order items that have to be cancelled.'. These are converted to CamelCase and dots are removed.
- Some operations (get-offer-export and get-unpublished-offer-report) in the specifications have no response schema (type) specified, while there is a response. Currently, this is only the case for operations that return CSV.
- There a type 'Return' defined in the specifications. As this is a reserved keyword in PHP, it can't be used as class name for the model (in PHP <= 7), so for now it's replaced with 'ReturnObject'.
- If an array field in a response is empty, the field is (sometimes?) omitted from the response. E.g. the raw JSON response for getOrders is
  ```
  { }
  ```
  where you might expect 
  ```
  {
    "orders": [ ]
  }
  ``` 
- Operation 'get-invoices' is specified to have a string as response, while there is clearly some data model returned in JSON or XML.
- The description of the operation 'get-invoices' contains a weird space marked as 'ENSP'.
