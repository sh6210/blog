<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'accounts' => $this->accounts,
            'mobileBankingAccounts' => $this->mobile_banking
        ];
    }

    public function with($request): array
    {
        return [
            'status' => $request->status
        ];
    }
}
