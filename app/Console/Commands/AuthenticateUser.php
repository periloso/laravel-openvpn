<?php

namespace App\Console\Commands;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Console\Command;
use \Auth;

class AuthenticateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:authenticate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tries to authenticate an OpenVPN user.';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @throws AuthenticationException
     */
    public function handle()
    {
        $username = getenv('username');
        $password = getenv('password');

        if (Auth::attempt([
            'email' => $username,
            'password' => $password,
        ])) {
            \Log::debug("User $username AUTH SUCCESS with password $password\n");
            return 0;
        } else {
            \Log::debug("User $username AUTH FAILURE with password $password\n");
            return 1;
            throw new AuthenticationException('Authentication error.');
        };
    }
}
