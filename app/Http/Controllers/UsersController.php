<?php
//namespace App\Http\Controllers;
//use Illuminate\Http\Request;
//use App\Models\User;
//use Spatie\Permission\Models\Role;
//use App\Http\Requests\StoreUserRequest;
//use App\Http\Requests\UpdateUserRequest;
//
//class UsersController extends Controller
//{
//    /**
//     * afisează toti users
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        $users = User::latest()->paginate(10);
//        return view('users.index', compact('users'));
//
//    }
//
//    public function create()
//    {
//        return view('users.create');
//    }
//    public function store(Request $request)
//    {
//        $this->validate($request, ['name' => 'required','email' => 'required']);// create new product
//        User::create($request->all());
//        return redirect()->route('users.index')->with('success', 'Your product added successfully!');
//    }
//    public function show($id)
//    {
//        $user = User::find($id);
//        return view('users.show',compact('user'));
//    }
//    public function edit($id)
//    {
//        $user = User::find($id);
//        return view('users.edit', compact('user'));
//    }
//    public function update(Request $request, $id)
//    {
//        $this->validate($request, [
//            'name' => 'required',
//            'email' => 'required',
//        ]);
//        User::find($id)->update($request->all());
//        return redirect()->route('users.index')->with('success','User updated successfully');
//    }
//    public function destroy($id)
//    {
//        User::find($id)->delete();
//        return redirect()->route('users.index')->with('success','User removed successfully');
//    }
//
//
//}


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
     /**
      * afisează toti users
      *
      *
      * @return \Illuminate\Http\Response
      */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('users.index', compact('users'));
    }
    /**
     * Afisare form pt creare user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required','email' =>
            'required','password' => 'required']);
        // create new user
        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'Your user
added successfully!');
    }

    /**
     * Afisare date user
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
    /**
     * Creare date user
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }
    /**
     * Update date user
     *
     * @param User $user
     * @param UpdateUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        User::find($id)->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated
successfully');
    }
    /**
     * Stergere date user
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->withSuccess(__('User deleted successfully.'));
    }
}

