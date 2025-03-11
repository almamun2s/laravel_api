<?php

namespace App\Filter\V1;

use App\Filter\ApiFilter;

class CustomerFilter extends ApiFilter
{
    /**
     * Allowed params that can be pass to url as query string
     * @var array
     */
    protected $allowedParms = [
        'name'       => ['eq'],
        'type'       => ['eq'],
        'email'      => ['eq'],
        'address'    => ['eq'],
        'city'       => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

}
