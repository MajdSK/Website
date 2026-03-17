<x-layout title="small projects" stylingsheet="resources/css/Ps.css">
    <div id="formsCont">
        <a href="Cal" style="text-decoration: none;">
            <div class="frames">
                <img src="{{ asset('images/Untitled.png') }}">
                <p>Fully functioning calculator website</p>
            </div>
        </a>
        <a href="training/rpsGame" style="text-decoration: none;">
            <div class="frames">
                <img src="{{ asset('images/rpsGame.png') }}">
                <p>Rock Paper Scissors game with saved scores</p>
            </div>
        </a>
        <a href="training/toDoList" style="text-decoration: none;">
            <div class="frames">
                <img src="{{ asset('images/todoList.png') }}">
                <p> basic todoList</p>
            </div>
        </a>
    </div>
</x-layout>