<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<x-layout title="Contact us" stylingsheet="resources/css/Contact.css">
  <form action="/ContactsPage" method="POST" id="identifier">
    @csrf
    <div id="container">

    </div>
    <input class="button send" type="submit" value="save" name="text">
    <input class="button" type="button" value="discard" onclick="discardQuillContent()">
    <textarea name="text" style="display:none" id="hiddenArea"></textarea>
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
        const hiddenArea = document.getElementById('hiddenArea');
        hiddenArea.value = quill.root.innerText;
        document.innerHTML += `
          <div>
            <p> sent messages: </p>
            ${quill.root.innerHTML}
          </div>
        `;
      };
      function discardQuillContent() {
        // Clear the Quill editor
        quill.setText('');
      }
    </script>
  </form>
</x-layout>