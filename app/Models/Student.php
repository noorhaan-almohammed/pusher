<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'degree'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        self::created(function ($student) {
            event(new \App\Events\StoreStudentEvent($student));
        });
    }

    protected $appends = ['full_name'];
    /**
     * Set the first name attribute.
     *
     * This mutator capitalizes the first letter of the first name before assigning it to the "first_name" attribute.
     *
     * @param  string  $value
     * @return void
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    /**
     * Set the last name attribute.
     *
     * This mutator capitalizes the first letter of the first name before assigning it to the "first_name" attribute.
     *
     * @param  string  $value
     * @return void
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucfirst($value);
    }

    /**
     * Get the full name of the employee.
     *
     * This accessor combines the first name and last name to create the full name of the author.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
}
