<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<x-signingUp title="Log In">
  <form action="LogIn" method="POST">
    @csrf
    <fieldset class="fieldset bg-gray-700 border-base-300 rounded-box w-xs border p-4">
      <legend class="fieldset-legend">Login</legend>

      <label class="label">Email</label>
      <input name="email" id="email" type="email" class="input bg-gray-500" placeholder="Email" />

      <label class="label">Password</label>
      <input name="password" id="password" type="password" class="input bg-gray-500" placeholder="Password" />

      <button type="submit" class="btn btn-neutral mt-4">Login</button>
    </fieldset>
    <a class="ml-10 underline hover:underline" href="/SignUp">don't have an account? Sign Up</a>
  </form>
</x-signingUp>