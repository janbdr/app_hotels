<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Hotel extends Model
{
    //
//    $results = DB::select('select * from users where id = ?', [1]);
    protected $fillable  = [
        'name',
        'address',
        'location',
        'published_at'
        
    ];
    
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::parse($date);
    }
    
    public function scopePublished($query){
        $query->where('published_at','<=', Carbon::now());
    }
    public function scopeUnPublished($query){
        $query->where('published_at','>=', Carbon::now());
    }
}
