<?php

namespace App\Http\Controllers\StandardUser;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\UsersEditFormRequest;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    /**
     * @var $user
     */
    protected $user;


    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;

        $this->middleware('notCurrentUser', ['only' => ['show', 'edit', 'update']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // $user = User::findOrFail($id);
        $user = $this->user->find($id);

        return view('protected.standardUser.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // $user = User::findOrFail($id);
        $user = $this->user->find($id);

        return view('protected.standardUser.edit')->withUser($user);
    }

    
}
