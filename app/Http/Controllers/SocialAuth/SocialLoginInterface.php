<?php

namespace App\Http\Controllers\SocialAuth;

use Laravel\Socialite\Contracts\User as ProviderUser;

interface SocialLoginInterface
{
    /**
     * @param $provider
     *
     * @return mixed
     */
    public function login($provider);

    /**
     * @param $provider
     *
     * @return mixed
     */
    public function callback($provider);

    /**
     * @param ProviderUser $provider_user
     *
     * @param              $provider
     *
     * @return mixed
     */
    public function createOrGetUser(ProviderUser $provider_user, $provider);
}
