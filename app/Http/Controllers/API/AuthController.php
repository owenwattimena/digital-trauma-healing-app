<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Helpers\JsonFormatter;
use App\Http\Controllers\Controller;
use App\Models\TraumatizedPerson;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // return JsonFormatter::error($request->phone_number);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|max:255|unique:traumatized_person',
            'birdthday' => 'required|date',
            'address' => 'required|string|max:255',
            'fb_follower_id' => 'required|integer',
            'hobby_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return JsonFormatter::error($validator->errors()->first(), 'Validation error');
        }

        try {
            $user = TraumatizedPerson::create([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'birdthday' => $request->birdthday,
                'address' => $request->address,
                'fb_follower_id' => $request->fb_follower_id,
                'hobby_id' => $request->hobby_id
            ]);
            $token = $user->createToken('auth_token')->plainTextToken;
            return JsonFormatter::success([
                'user' => $user,
                'token' => $token,
                'token_type' => 'Bearer',
            ], 'User created successfully');
        } catch (\Exception $e) {
            return JsonFormatter::error($e->getMessage(), 'Error');
        }
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number' => 'required|max:255',
            'birdthday' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return JsonFormatter::error($validator->errors()->first(), 'Validation error');
        }
        $user = TraumatizedPerson::where('phone_number', $request->phone_number)->first();
        if (!$user) {
            return JsonFormatter::error('User not found', 'Error');
        }
        if ($request->birdthday == $user->birdthday) {
            $token = $user->createToken('auth_token')->plainTextToken;

            $user = collect($user)->except(['email', 'created_at', 'updated_at', 'email_verified_at'])->toArray();

            return JsonFormatter::success([
                'user' => $user,
                'token' => $token,
                'token_type' => 'Bearer',
            ], 'User login successfully');
        } else {
            return JsonFormatter::error('Birdthday is incorrect', 'Error');
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return JsonFormatter::success([], 'User logged out successfully');
    }
}
