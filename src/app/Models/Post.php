<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearchKeyword($query, $keyword)
    {
        if (!is_null($keyword)) {
            $spaceConvert = mb_convert_kana($keyword, 's');
            $keywords = preg_split('/[\s]+/', $spaceConvert, -1, PREG_SPLIT_NO_EMPTY);

            foreach ($keywords as $word) {
                $query->where('posts.message', 'like', '%' . $word . '%');
            }

            return $query;
        } else {
            return;
        }
    }
}
