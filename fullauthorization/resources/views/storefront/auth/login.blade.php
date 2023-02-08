<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Email</label>
    <input type="email" name="email" /><br/>
    <label>Password</label>
    <input type="password" name="password"/><br/>
    <button type="submit">Login</button>
</form>
