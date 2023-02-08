<div>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Name:</label>
        <input name="name"/><br>
        <label>Email:</label>
        <input name="email"/><br>
        <label>Password: </label>
        <input name="password" type="password"/><br>
        <label>Password Confirm: </label>
        <input name="password_confirmation" type="password"/><br>
        <button type="submit">Register</button>
    </form>
</div>
