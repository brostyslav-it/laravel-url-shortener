<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/*
 Using Str::random in generateShortCode method to generate short codes is
 a better approach compared to manually hashing and encoding for several reasons:

 1. Str::random directly generates a random string of the specified length, saving the
    overhead of hashing and encoding operations.
 2. Str::random ensures randomness, reducing the likelihood of collisions.
 3. Str::random is simple to use and understand, improving code readability and maintainability.
*/

/**
 * Class Link
 *
 * Model representing shortened links.
 * This model manages the storage and retrieval of shortened links in the database.
 */
class Link extends Model
{
    use HasFactory;

    // Every model column can be mass assigned
    protected $guarded = [];

    /**
     * Generate a unique short code for the link.
     * 3 characters is enough for test project, that's 62 * 62 * 62 = 238328 unique short codes
     *
     * @return string The generated short code.
     */
    public static function generateShortCode(): string
    {
        do {
            $shortCode = Str::random(3);
        } while (static::where('short_code', $shortCode)->exists());

        return $shortCode;
    }
}
