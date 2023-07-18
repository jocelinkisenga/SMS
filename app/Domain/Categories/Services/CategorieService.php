<?php

namespace App\Domain\Categories\Services;

use App\Domain\Categories\Actions\CategorieDeleteAction;
use App\Domain\Categories\Actions\CategorieGetAllAction;
use App\Domain\Categories\Actions\CategorieGetOneAction;
use App\Domain\Categories\Actions\CategorieStoreAction;
use App\Domain\Categories\Actions\CategorieUpdateAction;

class CategorieService
{
    public function __construct(
        public CategorieGetAllAction $categorieGetAllAction,
        public CategorieGetOneAction $categorieGetOneAction,
        public CategorieDeleteAction $categorieDeleteAction,
        public CategorieUpdateAction $categorieUpdateAction,
        public CategorieStoreAction $categorieStoreAction
    ) {
    }

    public function all()
    {
        return $this->categorieGetAllAction->handle();
    }

    public function store($resquest): bool
    {
        $this->categorieStoreAction->handle($resquest);

        return true;
    }

    public function one(int $categoryId)
    {
        $this->categorieGetOneAction->handle($categoryId);
    }

    public function update(int $categoryId, array $request)
    {
        $this->categorieUpdateAction->handle($categoryId, $request);
    }

    public function delete()
    {

    }
}
