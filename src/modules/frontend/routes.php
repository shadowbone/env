<?php

Route::group(['namespace' => 'Modules\Frontend\Controllers'], function() {
    Route::get('/', 'DashboardController@getIndex');
    Route::group(['prefix' => 'sosmed'], function() {
        Route::get('/', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
            $login_url = $fb->getLoginUrl(['email']);
            echo '<a href="' . $login_url . '">Login with Facebook</a>';
        });
    });

    Route::get('/facebook/login', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {
        $login_url = $fb->getLoginUrl(['email']);
        echo '<a href="' . $login_url . '">Login with Facebook</a>';
    });
    
    
    
    Route::get('/facebook/callback', function(SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb) {

        try {
            $token = $fb->getAccessTokenFromRedirect();
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }
        if (!$token) {

            $helper = $fb->getRedirectLoginHelper();

            if (!$helper->getError()) {
                abort(403, 'Unauthorized action.');
            }

            // User denied the request
            dd(
                    $helper->getError(), $helper->getErrorCode(), $helper->getErrorReason(), $helper->getErrorDescription()
            );
        }

        if (!$token->isLongLived()) {
            // OAuth 2.0 client handler
            $oauth_client = $fb->getOAuth2Client();

            // Extend the access token.
            try {
                $token = $oauth_client->getLongLivedAccessToken($token);
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }
        }

        $fb->setDefaultAccessToken($token);

        Session::put('fb_user_access_token', (string) $token);
        try {
            $response = $fb->get('/me?fields=id,name,email');
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }

        $facebook_user = $response->getGraphUser();

        $user = App\Models\User::createOrUpdateGraphNode($facebook_user);

        Auth::login($user);

        return redirect('/')->with('message', 'Successfully logged in with Facebook');
    });
});
