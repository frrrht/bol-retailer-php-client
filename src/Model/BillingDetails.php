<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class BillingDetails extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'salutation' => [ 'model' => null, 'array' => false ],
            'firstName' => [ 'model' => null, 'array' => false ],
            'surname' => [ 'model' => null, 'array' => false ],
            'streetName' => [ 'model' => null, 'array' => false ],
            'houseNumber' => [ 'model' => null, 'array' => false ],
            'houseNumberExtension' => [ 'model' => null, 'array' => false ],
            'extraAddressInformation' => [ 'model' => null, 'array' => false ],
            'zipCode' => [ 'model' => null, 'array' => false ],
            'city' => [ 'model' => null, 'array' => false ],
            'countryCode' => [ 'model' => null, 'array' => false ],
            'email' => [ 'model' => null, 'array' => false ],
            'company' => [ 'model' => null, 'array' => false ],
            'vatNumber' => [ 'model' => null, 'array' => false ],
            'kvkNumber' => [ 'model' => null, 'array' => false ],
            'orderReference' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The salutation of the customer.
     */
    public $salutation;

    /**
     * @var string The first name of the customer.
     */
    public $firstName;

    /**
     * @var string The surname of the customer.
     */
    public $surname;

    /**
     * @var string The street name.
     */
    public $streetName;

    /**
     * @var string The house number.
     */
    public $houseNumber;

    /**
     * @var string The extension on the house number.
     */
    public $houseNumberExtension;

    /**
     * @var string Additional information related to the address that helps in delivering the package.
     */
    public $extraAddressInformation;

    /**
     * @var string The ZIP code in '1234AB' format for NL orders and '0000' format for BE orders.
     */
    public $zipCode;

    /**
     * @var string The name of the city.
     */
    public $city;

    /**
     * @var string The country code.
     */
    public $countryCode;

    /**
     * @var string A scrambled email address that can be used to contact the customer.
     */
    public $email;

    /**
     * @var string The company name.
     */
    public $company;

    /**
     * @var string The Value Added Tax (VAT) / BTW number for business sellers situated in the Netherlands.
     */
    public $vatNumber;

    /**
     * @var string The Kamer van Koophandel (kvk) number for organizations situated in the Netherlands or
     * ondernemingsnummer for organizations situated in Belgium.
     */
    public $kvkNumber;

    /**
     * @var string The order reference specified by the customer when ordering a product.
     */
    public $orderReference;
}
