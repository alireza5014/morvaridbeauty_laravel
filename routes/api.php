<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['namespace' => 'Site', 'middleware' => ['origin']], function () {


    Route::any('/register', function (Request $request) {


        try {
            $user = \App\User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => \Illuminate\Support\Facades\Hash::make($request->password),
            ]);

        } catch (Exception $exception) {
            return response()->json(
                [

                    'status' => 0,
                    'message' => $exception->getMessage(),
                ]
            );
        }
        return response()->json(
            [
                'user_id' => $user->id,
                'status' => 1,
                'message' => "register successfully",
            ]
        );

    });


    Route::any('/login', function (Request $request) {


        try {
            $user = \App\User::where('email', $request->email)
//                ->where('password', \Illuminate\Support\Facades\Hash::make($request->password))
                ->first();
            if($user){
                return response()->json(
                    [
                        'user_id' => $user->id,
                        'status' => 1,
                        'message' => "Login successfully",
                    ]
                );
            }
            else{
                return response()->json(
                    [

                        'status' => 0,
                        'message' => "Login unsuccessfully email or password incorrect",
                    ]
                );
            }

        } catch (Exception $exception) {
            return response()->json(
                [

                    'status' => 0,
                    'message' => $exception->getMessage(),
                ]
            );
        }




    });


    Route::any('/blog', "PostController@getBlog");
    Route::any('/slider', "SliderController@getSlider");


    Route::any('/tariffe', "TariffeController@getTariffe");
    Route::any('/about_us', "PostController@about_us");
    Route::any('/contact_us', "PostController@contact_us");


    Route::get('/postContent', "PostController@getPostContent");
});


//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
