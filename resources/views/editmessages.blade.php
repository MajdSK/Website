<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<x-layout title="Edit message" stylingsheet="resources/css/editMessages.css">
  <form action="/editmessages/{{ $message->id }}" method="POST" id="identifier">
    @csrf
    @method('PATCH')
    <div id="container">
      {{ $message->MessageBody  }}
    </div>
    <textarea name="messageBody" style="display:none" id="messageBody"></textarea>
    <input class="button" type="submit" value="update">
  </form>
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
      const text = document.getElementById('messageBody');
      text.value = quill.root.innerText;
    };
  </script>
</x-layout>