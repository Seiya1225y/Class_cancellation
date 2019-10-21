<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'campus';

    protected $guarded = array('student_no');

    public $timestamps = false;

    public function getData()
    {
        $data = DB::table($this->table)->get();

        return $data;
    }
}
