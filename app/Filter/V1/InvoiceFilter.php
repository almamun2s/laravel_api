<?php

namespace App\Filter\V1;

use App\Filter\ApiFilter;

class InvoiceFilter extends ApiFilter
{
    /**
     * Allowed params that can be pass to url as query string
     * @var array
     */
    protected $allowedParms = [
        'customer_id' => ['eq'],
        'amount'      => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'status'      => ['eq', 'ne'],
        'billed_date' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'paid_date'   => ['eq', 'lt', 'lte', 'gt', 'gte'],
    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate'   => 'paid_date',
    ];

}
