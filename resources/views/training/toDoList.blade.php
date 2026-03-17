<x-layout title="to do list" stylingsheet="resources/css/toDoList.css">
    <div id="inputTasks">
        <fieldset>
            <legend>Set a task to do:</legend>
            <textarea id="taskDes"></textarea>
            <input type="date" name="taskDeadLine" id="datePicker">
        </fieldset>
        <button type="button" id="submitB" onclick="upload()">upload</button>
        <script src="{{ asset('toDoList.js') }}"></script>
    </div>
    <div id="tasks">
    </div>
</x-layout>