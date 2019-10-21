<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Drink3 extends Model
{

    public function index()
    {
        $items = \DB::table('drinks')->get();
        return $items;

    }
}