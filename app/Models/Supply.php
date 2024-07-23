<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BudgetItem;
use App\Models\User;


class Supply extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function budgetItem() {
        return $this->belongsTo(BudgetItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    


    protected $guarded = [
        'id'
    ];


}
