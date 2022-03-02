<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
class checkUserSubscription
{
protected $auth;
  public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

     if ($this->auth->check())
      {

                 $subscribed_at=$this->auth->user()->created_at->diffInDays() - today()->diffInDays();

                if ($this->auth->user()->isSubscribed == 'yes' || $subscribed_at<=3)
                {
                    return $next($request);
                }
            }
            else{
            return new RedirectResponse(url('/register'));
            }
            return new RedirectResponse(url('/subscribenow'));
    }

}
