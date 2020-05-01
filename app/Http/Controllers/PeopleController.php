<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * @var BaseModel The primary model associated with this controller
     */
    public static $model = People::class;

    /**
     * @var BaseModel The parent model of the model, in the case of a child rest controller
     */
    public static $parentModel = null;

    /**
     * @var null|BaseTransformer The transformer this controller should use, if overriding the model & default
     */
    public static $transformer = null;

    public function search(Request $request)
    {
        $peoples = People::query();

        if ($request->has('name'))
        {
            $peoples->where('name', 'LIKE', "%{$request->name}%");
        }

        if ($request->has('nid'))
        {
            $peoples->where('nid', $request->nid);
        }

        if ($request->has('dob'))
        {
            $peoples->where('dob', $request->dob);
        }

        if ($request->has('atoll'))
        {
            $peoples->where('atoll', $request->atoll);
        }

        if ($request->has('island'))
        {
            $peoples->where('island', $request->island);
        }

        if ($request->has('house'))
        {
            $peoples->where('house', $request->house);
        }

        return $peoples->paginate(25);
    }
}
