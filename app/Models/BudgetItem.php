<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supply;

class BudgetItem extends Model
{
    use HasFactory;

    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    public function supply() {
        return $this->belongsTo(Supply::class);
    }
}
