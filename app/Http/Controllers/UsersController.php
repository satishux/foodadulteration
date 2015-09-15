<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{

    protected $user;

    public function __construct( User $user)
    {
        $this->user = $user;
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
        if($this->isAdminRequest())
        {
            $page_title = 'Users List';
            $users = $this->user->paginate();
            return view('admin.users.index', compact('page_title', 'users'));
        }

    }

    public function dashboard()
    {
        if($this->isAdminRequest())
        {
            $page_title = 'Dashboard Home';
            return view('admin.dashboard', compact('page_title'));
        }
    }


    public function adminIndex()
    {
        if($this->isAdminRequest())
        {
            $page_title = 'Admins List';
            $admins = $this->user->where('privilege', 1)->get();
            return view('admin.users.admin-index', compact('page_title', 'admins'));
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
            $page_title = 'Create new user';
            return view('admin.users.create', compact('page_title'));
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
            $validator = $this->validateUser( $request );

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator->errors()->all())
                    ->withInput();
            }

            $isAdmin = ( $request->get('privilege') ) ? 1 : 0;
            $status = $this->user->create([
                'name'          =>      $request->get('name'),
                'email'         =>      $request->get('email'),
                'password'      =>      bcrypt($request->get('password')),
                'privilege'     =>      $isAdmin
            ]);

            if(! $status )
            {
                return redirect()->back()->withErrors()->withInput();
            }

            return redirect()->back()->with('flash_message', 'User created successfully');

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
        //
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
            $page_title = 'Edit User information';
            $user = $this->user->findOrFail($id);
            return view('admin.users.edit', compact('page_title', 'user'));
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
            $validator = $this->validateUser( $request , true );

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator->errors()->all())
                    ->withInput();
            }

            $isAdmin = ( $request->get('privilege') ) ? 1 : 0;
            $status = $this->user->where('id', $id)->update([
                'name'          =>      $request->get('name'),
                'email'         =>      $request->get('email'),
                'password'      =>      bcrypt($request->get('password')),
                'privilege'     =>      $isAdmin
            ]);

            if(! $status )
            {
                return redirect()->back()->withErrors()->withInput();
            }

            return redirect()->back()->with('flash_message', 'User updated successfully');

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

    /**
     * @param Request $request
     * @return mixed
     */
    protected function validateUser( Request $request, $update = false )
    {
        //if updating then slug will be duplicated
        $slug_validation = ($update) ? 'required|max:255' : 'required|unique:users|max:255';

        $validator = Validator::make( $request->all(), [
            'name' => 'required',
            'email' => $slug_validation,
            'password' => 'required|confirmed'
        ] );
        return $validator;
    }
}
