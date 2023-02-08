HELLO FROM HOME<br/>
<a href="{{route('register')}}">Register</a><br/>
<a href="{{route('login')}}">Login</a><br/>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">
        Logout
    </button>
</form>

@auth
    <p>Logged in</p>
@else
    <p>Not logged in</p>
@endauth
