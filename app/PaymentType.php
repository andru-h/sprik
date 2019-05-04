<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentType
 * @package App
 * @property string name
 * @property string type
 */
class PaymentType extends Model
{
    protected $fillable = [
        'name',
        'type'
    ];

    const TYPE = [
        'credit_card',
        'cash',
    ];

    const TYPE_CREDIT_CARD = 'credit_card';
    const TYPE_CASH = 'cash';
}
