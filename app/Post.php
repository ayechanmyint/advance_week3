<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title','content','is_public','author_id'];

    public function author(){
    	return $this->belongsTo(User::class,'author_id');
    }

    public function getExcerptAttribute(){
    	$exploded_string = explode(' ',$this->content);
    	return collect($exploded_string)->take(20)->join(' '). '..';
    }

    public function scopePublished($query){
    	return $query->where('is_public', true);
    }
    
    public function scopePostOwner($query,$login_user_id){
    	return $query->where('author_id',$login_user_id);
    }

    public function scopeDefaultOrder($query)
    {
        return $query->orderByDesc('created_at');
    }
    
}
