<?php

namespace App\Http\Controllers\SocialAuth;

use App\SocialAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController implements SocialLoginInterface
{
    private $social_account;
    private $user;

    /**
     * SocialAuthController constructor.
     *
     * @param SocialAccount $social_account
     * @param User          $user
     */
    public function __construct(SocialAccount $social_account, User $user)
    {
        $this->social_account = $social_account;
        $this->user           = $user;
    }

    public function login($provider)
    {

        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param $provider
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback($provider)
    {
        $user = $this->createOrGetUser(Socialite::driver($provider)->user(), $provider);

        auth()->login($user);

        return redirect()->to('/');
    }

    /**
     * @param ProviderUser $providerUser
     *
     * @param              $provider
     *
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    public function createOrGetUser(ProviderUser $providerUser, $provider)
    {

        $account = $this->social_account->whereProvider($provider)
                                        ->whereProviderUserId($providerUser->getId())
                                        ->first();

	    if ($account) {
            return $account->user;
        } else {
            $this->social_account->provider_user_id = $providerUser->getId();
            $this->social_account->provider         = $provider;

            $account = $this->social_account;

            $user = $this->user->whereEmail($providerUser->getEmail())->first();

            if (!$user) {
	            $user           = new User();
	            $user->email    = $providerUser->getEmail();
	            $user->username = explode('@', $providerUser->getEmail())[0];
	            $user->name     = $providerUser->getName();
	            $user->avatar   = $providerUser->getAvatar();
	            $user->role     = 'USER';
	            $user->password = '';
	            $user->save();
            }

            $account->user()->associate($user);
            $account->save();

            return $user;

        }
    }
}
