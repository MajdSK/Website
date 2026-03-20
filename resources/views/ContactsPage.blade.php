<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<x-layout title="Contact us" stylingsheet="resources/css/Contact.css">
  <form action="/ContactsPage" method="POST" id="identifier">
    @csrf
    <div id="container">

    </div>
    <input class="button send" type="submit" value="save" name="text">
    <input class="button" type="button" value="discard" onclick="discardQuillContent()">
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
  <form action="/delOldMessages" method="GET">
    <div id="savedMessages">
      @if (count($text))
        <h3 style="color: rgb(110,0,0)">your messages: </h3>
        <ul>
          @foreach ($text as $message)
            <li> {{ $message}}</li>
          @endforeach
        </ul>
      @else
        <h3 style="color: rgb(110,0,0)">No Messages yet...</h3>
      @endif
      <input class="delOld" name="delete" type="submit" value="Delete Old Messages">
    </div>
  </form>
</x-layout>