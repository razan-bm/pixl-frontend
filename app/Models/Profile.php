<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['display_name', 'handle', 'bio', 'avatar_url'])]

#
class Profile extends Model {
    /** @use HasFactory<\Database\Factories\ProfileFactory> */
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }

    public function topLevelPosts(): HasMany {
        return $this->hasMany(Post::class)->whereNull('parent_id');
    }
}
