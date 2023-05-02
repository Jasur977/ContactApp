<?php

namespace App\Models;

use App\Scopes\FilterScope;
use App\Scopes\ContactSearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['first_name', 'last_name', 'email', 'phone', 'address', 'company_id'];
    public $filterColumns = ['company_id'];
    public $searchColumns = ['first_name', 'last_name', 'email', 'company.name'];

    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Company::class)->withoutGlobalScopes();;
    }
    public function scopeLatestFirst($query){
        return $query->orderBy('id', 'desc');
    }
    protected static function boot(){

        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new ContactSearchScope);
    }
}
