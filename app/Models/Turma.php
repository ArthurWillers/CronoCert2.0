<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turma extends Model
{
    /** @use HasFactory<\Database\Factories\TurmaFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'user_id',
        'active',
    ];

    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    /**
     * Get the course that owns this turma.
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get the coordenador responsible for this turma.
     */
    public function coordenador(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the students enrolled in this turma.
     */
    public function alunos(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'turma_user');
    }

    /**
     * Get the categories for this turma.
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Get the certificates for this turma.
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }
}
