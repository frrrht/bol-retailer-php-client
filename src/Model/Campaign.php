<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Campaign extends AbstractModel
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
            'name' => [ 'model' => null, 'array' => false ],
            'startDateTime' => [ 'model' => null, 'array' => false ],
            'endDateTime' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The name of the campaign under which the promotion had been created.
     */
    public $name;

    /**
     * @var string The starting date and time of the campaign.
     */
    public $startDateTime;

    /**
     * @var string The ending date and time of the campaign.
     */
    public $endDateTime;

    public function getStartDateTime(): ?\DateTime
    {
        if (empty($this->startDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->startDateTime);
    }

    public function getEndDateTime(): ?\DateTime
    {
        if (empty($this->endDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->endDateTime);
    }
}
