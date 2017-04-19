<?php

namespace WTG\Address\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use WTG\Address\Interfaces\AddressInterface;

/**
 * Address model
 *
 * @package     WTG\Address
 * @subpackage  Models
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class Address extends Model implements AddressInterface
{
    /**
     * Customer scope.
     *
     * @param  Builder  $query
     * @param  string  $customerId
     * @return Builder
     */
    public function scopeCustomer(Builder $query, string $customerId): Builder
    {
        return $query->where('customer_id', $customerId);
    }
}