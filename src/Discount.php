<?php


namespace Mbagri\discount;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'discount';
    protected $fillable = [
        'name',
        'code',
        'priceDiscount',
        'countUse',
        'minprice',
        'maxprice',
        'percentDiscount',
        'dataIn',
        'dataOut',
        'status'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}

