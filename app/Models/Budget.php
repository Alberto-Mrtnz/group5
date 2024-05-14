<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BudgetItem;

class Budget extends Model
{
    use HasFactory;
    public function budgetitem() {
        return $this->belongsTo(BudgetItem::class);
    }
}
