<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    // ! Get Profile
    public function index(Request $request)
    {
        try {
            // * Get User
            $user = $request->user();

            return response()->json([
                'success' => true,
                'message' => 'Successfully get profile',
                'data' => [
                    'user' => $user
                ]
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    // ! Update Profile
    public function update(Request $request)
    {
        try {
            // * Get User
            $user = Auth::user();

            // * Validate Request
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'username' => 'required|unique:users,username,' . $user->id,
                'email' => 'required|email|unique:users,email,' . $user->id,
                'phone_number' => 'required|unique:users,phone_number,' . $user->id,
                'address' => 'nullable|string',
                'place_of_birth' => 'nullable|string',
                'date_of_birth' => 'nullable|date',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'job' => 'nullable|string',
                'password' => 'nullable|min:6',
            ]);

            // * Check Validation
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()
                ], 422);
            }

            // * Prepare data for update
            $data = [
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'address' => $request->address,
                'place_of_birth' => $request->place_of_birth,
                'date_of_birth' => $request->date_of_birth,
                'job' => $request->job,
            ];

            // * Check if phone number is provided and update it if so
            if ($request->has('phone_number') && !empty($request->phone_number)) {
                // * Remove non-numeric characters
                $phone_number = preg_replace('/[^0-9]/', '', $request->phone_number);
                if (substr($phone_number, 0, 1) === '0' || substr($phone_number, 0, 1) === '8') {
                    // * Replace leading '0' or '8' with '62'
                    $phone_number = '62' . substr($phone_number, 1);
                }
                $data['phone_number'] = $phone_number;
            }

            // * Check if user uploaded an image
            if ($request->hasFile('image')) {
                // * Get Image
                $image = $request->file('image');

                // * Generate a random string of 10 characters
                $randomString = Str::random(10);
                // * Get User ID
                $userId = $user->id;
                // * Get Current Date
                $currentDate = date('d_m_Y');
                // * Generate File Name
                $fileName = "{$userId}_{$currentDate}_{$randomString}." . $image->getClientOriginalExtension();
                // * Store Image
                $filePath = $image->storeAs('images/user', $fileName, 'public');

                // * Update user's image with the new file path
                $data['image'] = $filePath;

                // * Delete old image from public/storage/images/user, except the default image
                if ($user->image && $user->image !== 'images/user/default.png' && Storage::exists('public/' . $user->image)) {
                    Storage::delete('public/' . $user->image);
                }
            }

            // * Check if password is provided and update it if so
            if ($request->has('password') && !empty($request->password)) {
                $data['password'] = Hash::make($request->password);
            }

            // * Update User
            $user->update($data);

            return response()->json([
                'success' => true,
                'message' => 'Successfully updated profile',
                'data' => [
                    'user' => $user
                ]
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


}
