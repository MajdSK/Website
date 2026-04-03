<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<x-signingUp title="Sign Up">
  <form action="SignUp" method="post">
    @csrf
    <fieldset class="fieldset bg-gray-700 border-base-300 rounded-box w-xs border p-4">
      <legend class="fieldset-legend -text-lg font-bold">Sign Up</legend>

      <label class="label">Username</label>
      <input name="name" id="name" type="text" class="input bg-gray-500" placeholder="Name" />

      <label class="label">Email</label>
      <input name="email" id="email" type="email" class="input bg-gray-500" placeholder="Email" />

      <label class="label">Password</label>
      <input name="password" id="password" type="password" class="input bg-gray-500" placeholder="Password" />

      <button type="submit" class="btn btn-neutral mt-4">Sign Up</button>
    </fieldset>
    <a class="ml-10 underline hover:underline" href="/LogIn">already have an account? Log
      In</a>
  </form>
</x-signingUp>