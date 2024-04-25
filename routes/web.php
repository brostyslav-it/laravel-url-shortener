<?php

use App\Http\Controllers\UrlShorteningController;
use Illuminate\Support\Facades\Route;

/**
 * Define routes for URL shortening functionality.
 *
 * This route definition group maps routes for URL shortening operations to
 * appropriate controller methods. It defines routes for displaying the
 * homepage, storing a new shortened link, and opening the original link
 * based on the provided short code.
 */
Route::controller(UrlShorteningController::class)->group(function () {
    /**
     * Display the homepage with form and the list of shortened links.
     *
     * @method GET
     * @uri /
     */
    Route::get('/', 'index');

    /**
     * Store a new shortened link.
     *
     * @method POST
     * @uri /
     */
    Route::post('/', 'storeLink');

    /**
     * Open the original link based on the provided short code.
     *
     * @method GET
     * @uri /{code}
     * @param string $code The short code representing the original link.
     */
    Route::get('/{code}', 'openOriginalLink');
});
