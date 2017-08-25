<?php

namespace Modules\Core\Http\Middleware;

use Exception, Session, Request, Closure;
use Illuminate\Support\Facades\Auth;
use Modules\Team\Entities\Team;

class verifySubdomains
{
    /**
     * Verify validity of subdomain, set session if valid
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get all segments of the domain
        $domains = explode('.', Request::server('HTTP_HOST'));

        // If there are 3 segments in the domain and the first domain isn't www
        // meaning it should look: teamname.domain.tld 
        if (count($domains) === 3 && $domains[0] !== 'www') {
            
            // Redirect to 404 page if the nickname has not been registered
            try {
                $team = Team::where('nickname', $domains[0])->firstOrFail();
                // --
            } catch (Exception $e) {
                abort(404, $domains[0] . ' is not a registered team. Create your team now!');
            }
            
            // Put into session if the the team is found
            Session::put('current_team', $team->nickname);
        }

        return $next($request);
    }
}
