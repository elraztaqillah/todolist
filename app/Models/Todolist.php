<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','task',"is_completed"];
    // protected $guared = [] !tanpa perlu mendifinisikan seperti diatas

     public function user()
    {
       return $this->belongsTo(User::class);
    }
}
