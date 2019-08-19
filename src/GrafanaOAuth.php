<?php
    declare(strict_types=1);

    class GrafanaOAuth {
        protected $user;

        /**
         * Create a new GrafanaOAuth instance.
         * @param array $user
         * @return void
         */
        public function __construct(array $user) {
            $this->user = $user;
        }

        /**
         * Redirect to authentication URL.
         * @param string $state
         * @return void
         */
        public function auth(string $state): void {
            $state = urlencode($state);
            $url = "http://localhost:3000/login/generic_oauth?state={$state}&code=cc536d98d27750394a87ab9d057016e636a8ac31";
            header("Location: {$url}");
        }

        /**
         * User access token.
         * @return void
         */
        public function token(): void {
            $token = [
                'access_token' => $this->user['access_token'],
                'token_type' => 'Bearer',
                'expiry_in' => '1566172800', // 20.08.2019
                'refresh_token' => $this->user['refresh_token']
            ];

            echo json_encode($token);
        }

        /**
         * User credentials.
         * @return void
         */
        public function user(): void {
            $user = [
                'username' => $this->user['username'],
                'email' => $this->user['email']
            ];

            echo json_encode($user);
        }
    }