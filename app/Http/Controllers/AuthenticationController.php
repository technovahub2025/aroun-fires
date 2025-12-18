<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        return view('authentication.login');
    }
    public function logincheck(Request $request)
    {
        $email  = $request->input('email');
        $password  = $request->input('password');

        if (!$email || !$password) {
            return response()->json([
                'status' => '401',
                'message' => 'Invalid username or password.'
            ]);
        }

        $credentials = [
            'email' => $email,
            'password' => $password,
            'status' => 1
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Determine the redirect URL based on the user's position
            $redirectUrl = ($user->position == 1) ? route('dashboard') : route('dashboard');

            return response()->json([
                'status' => '200',
                'message' => 'Authentication Success',
                'redirect_url' => $redirectUrl
            ]);
        }

        return response()->json([
            'status' => '401',
            'message' => 'Invalid username or password.'
        ]);
    }
    public function admin(Request $request)
    {
        $users = User::orderBy('updated_log', 'desc')->get();

        foreach ($users as $user) {
            $user->created_log = Carbon::parse($user->created_log)->format('d M Y h:i:s A');
            $user->updated_log = Carbon::parse($user->updated_log)->format('d M Y h:i:s A');

            if ($user->crm_id) {
                $crm = User::find($user->crm_id);
                $user->crm_name = $crm ? ucfirst($crm->name) : 'Unknown CRM';
            } else {
                $user->crm_name = 'Unknown CRM';
            }
        }
        return view('pages.admin', compact('users'));
    }
    public function insertadmin(Request $request)
    {
        try {
            $insertuser = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'position' => $request->input('position'),
                'password' => bcrypt($request->input('password')),
                'status' => 1,
                'crm_id' => Auth::user()->id,
                'created_log' => now('Asia/Kolkata'),
                'updated_log' => now('Asia/Kolkata'),
            ]);

            return response()->json([
                'status' => '200',
                'message' => 'Admin User Added Successfully'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => '500',
                'message' => 'An error occurred while adding the admin user',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function editadmin(Request $request)
    {
        $id = $request->input('id');
        $user = User::where('id', $id)->first();
        return response()->json([
            'status' => '200',
            'message' => 'Admin User data',
            'data' => $user
        ]);
    }
    public function updateadmin(Request $request)
    {
        try {
            $id = $request->input('editid');
            $user = User::findOrFail($id);
            $user->name = $request->input('name');
            if (!empty($request->input('password'))) {
                $user->password = bcrypt($request->input('password'));
            }
            $user->email = $request->input('email');
            $user->status = $request->input('status');
            $user->phone = $request->input('phone');
            $user->position = $request->input('position');
            $user->crm_id = Auth::user()->id;
            $user->updated_log = now('Asia/Kolkata');
            $user->save();
            return response()->json(['status' => '200', 'message' => 'User updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => '500', 'message' => 'Error updating user: ' . $e->getMessage()]);
        }
    }
}
