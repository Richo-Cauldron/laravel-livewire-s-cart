<?php

namespace App\Repositories\Contracts;

interface BasketRepositoryContract
{
    /**
     * Add product to basket.
     *
     * @param integer $id
     * @param integer $qty
     * @return void
     */
    public function add(int $id, int $qty): void;

    /**
     * Get product current quantity
     *
     * @param integer $id
     * @return integer
     */
    public function getCurrentQty(int $id): int;
}