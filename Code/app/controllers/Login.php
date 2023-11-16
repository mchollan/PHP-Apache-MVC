<?php 
    
    /**
     * Login class
     */
    class Login
    {
        use Controller;


        public function index()
        {
            // It's a good idea to reset user sessions each time they go to login to avoid "invalid state" errors, 
            // should they hit network issues or other problems that interrupt a previous login process:
            $auth = new Auth();
            $auth->_Auth0->clear();

            // Finally, set up the local application session, and redirect the user to the Auth0 Universal Login Page to authenticate.
            header("Location: " . $auth->_Auth0->login(ROUTE_URL_CALLBACK));
            exit;
        }

        public function callback()
        {
            // Have the SDK complete the authentication flow:
            $auth = new Auth();
            $auth->_Auth0->exchange(ROUTE_URL_CALLBACK);

            // Finally, redirect our end user back to the / index route, to display their user profile:
            header("Location: " . ROUTE_URL_INDEX);
            exit;
        }

        public function logout()
        {
            $auth = new Auth();
            // Clear the user's local session with our app, then redirect them to the Auth0 logout endpoint to clear their Auth0 session.
            header("Location: " . $auth->_Auth0->logout(ROUTE_URL_INDEX));
            exit;
        }
    }

    ?>