<div class="navbar bg-gray-100 text-gray-900">
    <div class="navbar-start">
      <a class="normal-case text-xl font-bold">AdaUtang</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal p-0">
        <li tabindex="0">
            <a>
              Debt
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
            </a>
            <ul class="p-2">
              <li><a>Create</a></li>
              <li><a>Ping</a></li>
            </ul>
          </li>
          <li><a>History</a></li>
        <li><a>Leaderboard</a></li>
      </ul>
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <button class="btn btn-outline text-gray-900">Halo, {{ Auth::user()->name }}</button>
            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </ul>
          </div>
    </div>
  </div>
