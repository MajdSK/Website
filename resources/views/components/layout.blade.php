@props([
  "title" => 'LARAVEL',
  "stylingsheet" => 'resources/css/app.css',
  "JSsheet" => "resources/js/app.js",
  "user" => request("user")
])

<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>

  <!-- Fonts -->
    @vite([$stylingsheet, $JSsheet])
    <style>
        .custom-dropdown {
  position: relative;
  display: inline-block;
}

/* Style the trigger button */
.drop-btn {
  background-color: none; /* bg-base-200 equivalent */
  border: none;
  cursor: pointer;
}
.dropdown-content {
  display: none; /* Hidden by default */
  position: absolute;
  z-index: 1;
  width: 300px;
  padding: 0;
  background-color: #820000; /* bg-base-100 equivalent */
  border-radius: 0.5rem;
  box-shadow: 0 1px 3px rgba(214,236,255);
  list-style: none;
  margin: 0;
}

/* dropdown-left logic: place to the left of the button */
.dropdown-left .dropdown-content {
  top: 0;
  right: 100%; /* Positions the menu to the left of the container */
  margin-right: 0.5rem; /* Spacing between button and menu */
}

/* Show the menu when the button is focused */
.custom-dropdown .drop-btn:focus + .dropdown-content,
.custom-dropdown:focus-within .dropdown-content {
  display: block;
}

/* Menu item styling */
.dropdown-content li, .dropdown-content li a {
    display: block;
    padding: 2px 0 2px 5px;
    height:50px;
    text-align: start;
    white-space: normal;
    overflow-wrap: break-word;
    word-wrap: break-word;
    text-justify: newspaper;
    text-decoration: none;
    color: rgba(214,236,255);
    border-radius: 0.375rem;
}

.dropdown-content a:hover {
  background-color: #9D0000;
}
    </style>
</head>

<body>
  <div id="bgMenu">
            <nav id="navigation">
                <a href="/">
                    <div>
                        <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="-322.01 -322.01 1139.42 1139.42" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391 v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158 c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747 c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"></path> <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401 c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79 c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"></path> </g> </g> </g> </g></svg>
                        <p>Home</p>
                    </div>
                    </a>
                    <a href="/CVpage">
                    <div>
                        <svg width="64px" height="64px" viewBox="-14.4 -16 52.80 52.80" xmlns="http://www.w3.org/2000/svg" mirror-in-rtl="true" fill="#000000" stroke="#000000" stroke-width="0.24000000000000005" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.8160000000000001"></g><g id="SVGRepo_iconCarrier"> <path fill="#000000" d="M8 6H5c-.553 0-1-.448-1-1s.447-1 1-1h3c.553 0 1 .448 1 1s-.447 1-1 1zM13 10H5c-.553 0-1-.448-1-1s.447-1 1-1h8c.553 0 1 .448 1 1s-.447 1-1 1zM13 14H5c-.553 0-1-.448-1-1s.447-1 1-1h8c.553 0 1 .448 1 1s-.447 1-1 1z"></path> <path fill="#000000" d="M18 2v8c0 .55-.45 1-1 1s-1-.45-1-1V2.5c0-.28-.22-.5-.5-.5h-13c-.28 0-.5.22-.5.5v19c0 .28.22.5.5.5h13c.28 0 .5-.22.5-.5V21c0-.55.45-1 1-1s1 .45 1 1v1c0 1.1-.9 2-2 2H2c-1.1 0-2-.9-2-2V2C0 .9.9 0 2 0h14c1.1 0 2 .9 2 2z"></path> <path fill="#000000" d="M23.87 11.882c.31.54.045 1.273-.595 1.643l-9.65 5.57c-.084.05-.176.086-.265.11l-2.656.66c-.37.092-.72-.035-.88-.314-.162-.278-.09-.65.17-.913l1.907-1.958c.063-.072.137-.123.214-.167.004-.01.012-.015.012-.015l9.65-5.57c.64-.37 1.408-.234 1.72.305l.374.65z"></path> </g></svg>
                        <p>CV</p>
                    </div>
                    </a>
                    <a href="/projectsPage">
                    <div>
                        <svg width="64px" height="64px" viewBox="-9.6 -9.6 35.20 35.20" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000" stroke-width="0.00016"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M0 1H6L9 4H16V14H0V1Z" fill="#000000"></path> </g></svg>
                        <p>Projects</p>
                    </div>
                    </a>
                    <a href="/ContactsPage">
                    <div>
                        <svg fill="#000000" width="64px" height="64px" viewBox="-19.2 -20 70.40 70.40" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>paper-plane</title> <path d="M0 14.016l9.216 6.912 18.784-16.928-14.592 20.064 10.592 7.936 8-32zM8 32l6.016-4-6.016-4v8z"></path> </g></svg>
                        <p>Contact me</p>
                    </div>
                    </a>
                    <div id="auth-sign-log">
                        @guest
                            <a href="/LogIn">Log In</a>
                            <a href="/SignUp">Sign Up</a>
                        @endguest
                        @auth
                            <div class="custom-dropdown dropdown-left">
                            <div tabindex="0" role="button" class="drop-btn">{{ auth()->user()->name }}</div>
                            <ul tabindex="0" class="dropdown-content">
                                @if (auth()->user()->notifications->count() > 0)
                                    @foreach ( auth()->user()->notifications as $notification )
                                        <li><a href="/editmessages/{{ $notification->data["message_id"] }}">{{ $notification->data["message"] }}
                                        <br>click to edit your message
                                    </a></li>
                                    @endforeach
                                @else
                                    <li>No notifications</li>
                                @endif
                            </ul>
                            </div>
                            <a href="/LogOut">Logout</a>
                        @endauth
                    </div>
            </nav>
        </div>
    {{ $slot }}
</body>

</html>