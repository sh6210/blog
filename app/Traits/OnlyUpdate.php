<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait OnlyUpdate
{
    public function update(Model $obj, array $data): Model
    {
        foreach ($data as $key => $val) {
            $obj->{$key} = $val;
        }

        $obj->update();

        return $obj;
    }
}
