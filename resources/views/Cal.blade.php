<x-layout title="Calculator" JSsheet="resources\js\cal.js">
    <div id="exterior">
        <div id="screen">
            <textarea id="input" readonly placeholder="0"></textarea>
            <textarea id="display" readonly placeholder="="></textarea>
        </div>
        <input type="button" id="one" value="1" onclick="convertToNumber('1')">
        <input type="button" id="two" value="2" onclick="convertToNumber('2')">
        <input type="button" id="three" value="3" onclick="convertToNumber('3')">
        <input type="button" id="four" value="4" onclick="convertToNumber('4')">
        <input type="button" id="five" value="5" onclick="convertToNumber('5')">
        <input type="button" id="six" value="6" onclick="convertToNumber('6')">
        <input type="button" id="seven" value="7" onclick="convertToNumber('7')">
        <input type="button" id="eight" value="8" onclick="convertToNumber('8')">
        <input type="button" id="nine" value="9" onclick="convertToNumber('9')">
        <input type="button" id="zero" value="0" onclick="convertToNumber('0')">
        <input type="button" id="point" value="." onclick="convertToNumber('.')">
        <input type="button" id="mutli" value="*" onclick="appendToDisplay('*')">
        <input type="button" id="divide" value="/" onclick="appendToDisplay('/')">
        <input type="button" id="equals" value='=' onclick="appendToDisplay('=')">
        <input type="button" id="sum" value="+" onclick="appendToDisplay('+')">
        <input type="button" id="clear" value="C" onclick="appendToDisplay('C')">
        <input type="button" id="minus" value="-" onclick="appendToDisplay('-')">
        <input type="button" id="power" value="^" onclick="appendToDisplay('^')">
        <input type="button" id="root" value="√" onclick="appendToDisplay('√')">
    </div>
</x-layout>