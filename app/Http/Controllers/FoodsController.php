<?php

namespace App\Http\Controllers;

use App\Category;
use App\Food;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class FoodsController extends Controller
{
    protected $categories;
    protected $food;

    public function __construct( Category $category, Food $food )
    {
        $this->categories = $category->all();
        $this->food = $food;
    }

    public function isAdminRequest()
    {
        return (Route::getCurrentRoute()->getPrefix() == '/admin');

    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $page_title = 'Food List';

        if($this->isAdminRequest())
        {
            $foods = $this->food->paginate(10);
            return view('admin.foods.index', compact('page_title', 'foods'));
        }

        $foods = $this->food->get(['id', 'slug', 'name']);
        return view('foods.index', compact('page_title', 'foods'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if($this->isAdminRequest())
        {
            $page_title = 'Add new food';
            $categories = $this->categories;
            return view('admin.foods.create', compact('page_title', 'categories'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        if($this->isAdminRequest())
        {
            $validator = $this->validateFood($request);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator->errors()->all())
                    ->withInput();
            }
            $status = $this->saveFood($request);

            if(! $status )
            {
                return redirect()->back()->withErrors()->withInput();
            }

            return redirect()->back()->with('flash_message', 'Food Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return Response
     */
    public function show($slug)
    {
        $page_title = 'Food Information';
        $food = $this->food->where('slug', $slug)->first();
        $prevFood = $this->getPrevFood($food);
        $nextFood = $this->getNextFood($food);
        $category = Category::find($food->category_id);
        return view('foods.single', compact('food', 'category', 'page_title', 'nextFood', 'prevFood'));
    }



    public function getPrevFood( $currfood )
    {
        $food = new Food;
        $prevFood = $food->where('id', '<', $currfood->id)->orderBy('id', 'desc')->first();
        if( !$prevFood)
        {
            $prevFood = $food->where('id', '>', $currfood->id)->orderBy('id', 'desc')->first();
        }
        return $prevFood->toArray();
    }

    public function getNextFood( $currfood )
    {
        $food = new Food;
        $nextFood = $food->where('id', '>', $currfood->id)->orderBy('id', 'asc')->first();
        if( !$nextFood )
        {
            $nextFood = $food->where('id', '<', $currfood->id)->orderBy('id', 'asc')->first();
        }
        return $nextFood->toArray();
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        if($this->isAdminRequest())
        {
            $page_title = 'Edit Food Information';
            $categories = $this->categories;
            $food = $this->food->findOrFail($id);

            return view('admin.foods.edit', compact('page_title', 'food', 'categories'));

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        if($this->isAdminRequest())
        {
            $validator = $this->validateFood($request, true);
            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator->errors()->all())
                    ->withInput();
            }

            $status = $this->updateFood($request, $id);

            if(! $status )
            {
                return redirect()->back()->withErrors()->withInput();
            }

            return redirect()->back()->with('flash_message', 'Food Updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function search( Request $request)
    {
        $search_term = $request->get('search_term');

        if( $request->get('category') == "0")
        {
            //searching for all category
            $foods = $this->food->where('name', 'like', "%{$search_term}%")->get();

        }
        else
        {
            //searching for specific category
            $foods = $this->food->where('name', 'like', "%{$search_term}%")->where('category_id', $request->get('category'))->get();
        }


        return view('foods.search', compact('foods'));

    }
    protected function updateFood($request, $id)
    {
        return $this->food->where('id', $id)->update([
            'category_id'           =>      $request->get('category_id'),
            'name'                  =>      $request->get('name'),
            'slug'                  =>      $request->get('slug'),
            'adulterant'            =>      $request->get('adulterant'),
            'diseases'              =>      $request->get('diseases'),
            'summaries'             =>      $request->get('summaries'),
            'anatomical_context'    =>      $request->get('anatomical_context'),
            'genes'                 =>      $request->get('genes'),
            'detection'             =>      $request->get('detection'),
            'bibliography'          =>      $request->get('bibliography')
        ]);
    }
    protected function saveFood( $request )
    {
        return $this->food->create([
            'category_id'           =>      $request->get('category_id'),
            'name'                  =>      $request->get('name'),
            'slug'                  =>      $request->get('slug'),
            'adulterant'            =>      $request->get('adulterant'),
            'diseases'              =>      $request->get('diseases'),
            'summaries'             =>      $request->get('summaries'),
            'anatomical_context'    =>      $request->get('anatomical_context'),
            'genes'                 =>      $request->get('genes'),
            'detection'             =>      $request->get('detection'),
            'bibliography'          =>      $request->get('bibliography')
        ]);
    }
    protected function validateFood( $request , $update = false)
    {
        //if updating then slug will be duplicated
        $slug_validation = ($update) ? 'required|max:255' : 'required|unique:foods|max:255';

        return Validator::make($request->all(), [
            'category_id'           =>      'required',
            'name'                  =>      'required',
            'slug'                  =>      $slug_validation,
            'adulterant'            =>      'required',
            'diseases'              =>      'required',
            'summaries'             =>      'required',
            'anatomical_context'    =>      'required',
            'genes'                 =>      'required',
            'detection'             =>      'required'
        ]);

    }
}
