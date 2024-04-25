<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

/**
 * Class UrlShorteningController
 */
class UrlShorteningController extends Controller
{
    /**
     * Display the homepage with a list of shortened links.
     *
     * @return View
     */
    public function index(): View
    {
        return view('index', ['links' => Link::all()]);
    }

    /**
     * Store a new shortened link.
     *
     * @return RedirectResponse
     */
    public function storeLink(): RedirectResponse
    {
        // Validate the request and create a new link record
        Link::create([
            ...request()->validate(['original_link' => 'required|url']),
            'short_code' => Link::generateShortCode(),
        ]);

        return redirect('/');
    }

    /**
     * Open the original link based on the provided short code.
     *
     * @param string $code The short code representing the original link.
     * @return RedirectResponse
     */
    public function openOriginalLink(string $code): RedirectResponse
    {
        // Find the link associated with the provided short code
        if (!$link = Link::where('short_code', $code)->first()) {
            // 404 error if link doesn't exist
            abort(404);
        }

        // Increment the visit count for the link
        $link->increment('visits');

        return redirect()->away($link->original_link);
    }
}
