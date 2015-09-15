<?php

namespace App\Http\Controllers;

use App\Category;
use App\Food;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
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
        if( $this->isAdminRequest())
        {
            $page_title = 'Category List';
            $categories = $this->category->paginate(10);
            return view('admin.categories.index', compact('page_title', 'categories'));
        }
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
            $page_title= 'Create new category';
            return view('admin.categories.create', compact('page_title'));
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

            $validator = $this->categoryValidate($request);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator->errors()->all())
                    ->withInput();
            }

            $status =  $this->category->create([
                'title'         =>      $request->get('title'),
                'slug'          =>      $request->get('slug'),
                'description'   =>      $request->get('description')
            ]);

            if(! $status)
            {
                return redirect()->back()->withErrors()->withInput();
            }

            return redirect()->back()->with('flash_message', 'Category created successfully');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $foods = Food::where('category_id', $id)->get();
        $category = $this->category->find($id);
        return view('foods.category', compact('foods', 'category'));
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
            $page_title= 'Edit category information';
            $category = $this->category->findOrFail($id);
            return view('admin.categories.edit', compact('page_title', 'category'));
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

            $validator = $this->categoryValidate($request, true);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator->errors()->all())
                    ->withInput();
            }

            $status =  $this->category->where('id', $id)->update([
                'title'         =>      $request->get('title'),
                'slug'          =>      $request->get('slug'),
                'description'   =>      $request->get('description')
            ]);

            if(! $status)
            {
                return redirect()->back()->withErrors()->withInput();
            }

            return redirect()->back()->with('flash_message', 'Category Updated successfully');

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

    protected function categoryValidate( $request, $update = false )
    {

        //if updating then slug will be duplicated
        $slug_validation = ($update) ? 'required|max:255' : 'required|unique:categories|max:255';


        return Validator::make($request->all(), [
            'title'         =>      'required',
            'slug'          =>      $slug_validation,
            'description'   =>      'required'
        ]);
    }
}
