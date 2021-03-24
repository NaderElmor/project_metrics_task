<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeCompleted($query)
    {
        return $query->where('status',  2)->count();
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function getStatus ()
    {
        if($this->status == 0){

            return  'On Beginning';

        } elseif ($this->status == 1) {

            return 'On Progress';

        }else {

            return 'Finished';
        }


    }

}
