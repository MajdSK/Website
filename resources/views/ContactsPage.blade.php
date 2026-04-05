<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<x-layout title="Contact us" stylingsheet="resources/css/Contact.css">
  <div id="sendingCont">
    <form action="/ContactsPage" method="POST" id="identifier">
      @csrf
      <div id="container">

      </div>
      @if($errors->has('text'))
        <p style="color: rgb(255, 0, 0); font-size: 16px; margin-top: 5px; font-weight: 800;">
          {{ $errors->first('text') }} !!!
        </p>
      @endif
      <div id="buttonsCont">
        <input class="button send" type="submit" value="save" name="text">
        <input class="button" type="button" value="discard" onclick="discardQuillContent()">
      </div>
      <textarea name="text" style="display:none" id="text"></textarea>
      <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
      <script>
        const quill = new Quill('#container', {
          theme: 'snow',
          placeholder: 'type your message here...',
          modules: {
            toolbar: [
              ['bold', 'italic', 'underline', 'strike'],
              [{ 'list': 'ordered' }, { 'list': 'bullet' }],
              [{ 'indent': '-1' }, { 'indent': '+1' }]
            ]
          }
        });
        const form = document.getElementById('identifier');
        form.onsubmit = function () {
          const text = document.getElementById('text');
          text.value = quill.root.innerText;
        };
        function discardQuillContent() {
          // Clear the Quill editor
          quill.setText('');
        }
      </script>
    </form>
  </div>
  <div id="sent">
    <form action="/ContactsPage/search">
      <div id="searchingCont">
        <input type="text" name="searchbar" id="searchbar" placeholder="Search...">
        <input type="submit" value="search" class="button searchB">
      </div>
    </form>
    <form action="/ContactsPage" method="POST">
      @csrf
      @method('delete')
      <div id="savedMessages">
        @if (count($text) && $text[0] != "no results found...")
          <h3 style="color: rgb(110,0,0)">your messages: </h3>
          <ul>
            <?php  $a = 0; ?>
            @foreach ($text as $message)
              <li style="display: flex; justify-content: space-between;">
                <a id="a{{ $message->id }}" href="/editmessages/{{ $message->id }}" style="text-decoration: none;">
                  {{ ++$a }}- {{ $message->MessageBody }}
                  <span style="color: rgb(110,0,0,0.5); margin-left: 30px;">
                    {{ $message->created_at }}
                    @if($message->created_at != $message->updated_at)
                      edited
                    @endif
                  </span>
                </a>
                <button id="delSingleMessage" form="deleteForm" value="{{ $message->id }}">X</button>
              </li>
            @endforeach
          </ul>
        @elseif (!count($text))
          <h3 style="color: rgb(110,0,0)">you have no messages yet...</h3>
        @else
          <h3 style="color: rgb(110,0,0)">{{ $text[0] }}</h3>
        @endif
      </div>
      <input class="delOld button" name="delete" type="submit" value="Delete Old Messages">
    </form>
    <form id="deleteForm" action="/ContactsPage/del" method="POST">
      @csrf
      @method('delete')
      <textarea name="hidden2" id="hidden2" style="display: none;"></textarea>
    </form>
    <script>
      const deleteButtons = document.querySelectorAll('#delSingleMessage');
      const hiddenInput = document.getElementById('hidden2');
      deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
          event.preventDefault(); // Prevent the default form submission
          hiddenInput.value = this.value; // Set the hidden input value to the button's value
          document.getElementById('deleteForm').submit(); // Submit the form
        });
      });
    </script>
  </div>
</x-layout>