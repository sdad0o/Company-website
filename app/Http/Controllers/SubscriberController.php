<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    private const DIR = 'admin.subscribers.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subscribers = Subscriber::paginate(config('pagination.count'));
        return view(self::DIR . 'index', get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return to_route(self::DIR . 'index')->with('success', __('keywords.deleted_successfuly'));
    }
}
