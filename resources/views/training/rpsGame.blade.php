<!DOCTYPE html>
<html>

<head>
    <title>variables</title>
    <style>
        * {
            box-sizing: border-box;
        }

        #dashBoard {
            position: relative;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 70px;
            font-size: 40px;
            text-align: center;
            justify-content: center;
        }

        #usersChoices {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            flex-shrink: 0;
            width: calc(3 * 80px + 15px);
            height: 80px;
            margin-left: calc(50vw - 127.5px);
        }

        .choice {
            width: 80px;
            height: 80px;
            margin: 2.5px;
            padding: 4px;
        }

        #game {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            width: 180px;
            margin-left: calc(50vw - 90px);
            margin-bottom: 20px;
        }

        #result {
            height: 100px;
            width: 100vw;
            text-align: center;
            justify-content: center;
            font-size: 20px;
            font-weight: 600;
        }

        .autoB {
            font-size: 20px;
            padding: 10px 15px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            background: rgb(91, 91, 91);
            color: rgb(225, 0, 0);
        }

        .autoB:active {
            background: rgb(52, 52, 52);
        }

        #vs {
            font-size: 20px;
        }
        .active{
            background: rgb(255, 255, 255);
            color: darkred;
            border: 1px dashed darkred;
        }
    </style>
</head>

<body>
    <div id="dashBoard"></div>
    <div id="usersChoices">
        <button class="choise" onclick="startG('rock')">
            <svg width="64px" height="64px" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--noto"
                preserveAspectRatio="xMidYMid meet" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <lineargradient id="IconifyId17ecdb2904d178eab19914" gradientUnits="userSpaceOnUse" x1="87.616"
                        y1="21.04" x2="41.548" y2="138.084">
                        <stop offset="0" stop-color="#9e958e"></stop>
                        <stop offset=".46" stop-color="#8e8884"></stop>
                        <stop offset="1" stop-color="#757575"></stop>
                    </lineargradient>
                    <path
                        d="M8.93 90.74c-.53-1.25-1.04-2.5-1.54-3.75c-3.77-9.51.96-18.09 5.18-26.49l6.12-12.16c1.23-2.45 3.12-4.51 5.44-5.95l17.6-10.92l17.39-17.98a8.147 8.147 0 0 1 3.97-2.27l11.84-2.86c5.73-1.37 8.19-1.15 10.04 1.48c6.41 9.1 10.7 16.59 16.41 25.66c3.11 4.94 10.29 16.29 10.74 17.04c1.38 2.32.82 4.26.77 6.92c-.12 6.13.96 12.29 3.2 18c.67 1.7 1.44 3.38 1.79 5.17c.32 1.61-.11 11.84-.44 15.3c-.27 2.81-6.91 13.3-9.29 14.57c-2.62 1.4-22.04 8.54-26.33 9.76s-22.89-3.03-32.55-4.51c-5.97-.91-11.95-1.83-17.92-2.74c-5.18-.79-10.33-.19-13.23-5.42c-3.41-6.12-6.47-12.41-9.19-18.85z"
                        fill="url(#IconifyId17ecdb2904d178eab19914)"></path>
                    <lineargradient id="IconifyId17ecdb2904d178eab19915" gradientUnits="userSpaceOnUse" x1="8.859"
                        y1="120.137" x2="47.171" y2="77.536">
                        <stop offset="0" stop-color="#37474f"></stop>
                        <stop offset=".612" stop-color="#42565f" stop-opacity=".192"></stop>
                        <stop offset=".757" stop-color="#455a64" stop-opacity="0"></stop>
                    </lineargradient>
                    <path
                        d="M31.34 115c5.97.91 11.95 1.83 17.92 2.74c3.11.48 7.15 1.24 11.34 2.02c-2.82-3.34-7.03-7.3-9.85-10.64c-.61-.72-1.23-1.47-1.45-2.39c-.23-.98.03-1.99.3-2.96c.86-3.18 1.08-6.63 1.94-9.81c-5.33 1.24-17.61 3.6-18.62 3.31c-1.12-.32-2.03-1.13-2.9-1.92c-6.33-5.78-11.28-11.61-16.12-18.66c-.57-.83-1.15-1.69-1.36-2.68c-.2-.93-.05-1.89.1-2.82c.36-2.32 1.16-8.75 1.8-14.42l-1.88 3.73C8.35 68.9 3.62 77.48 7.4 86.99c.5 1.26 1.01 2.51 1.54 3.75a192.48 192.48 0 0 0 9.17 18.83c2.89 5.24 8.05 4.64 13.23 5.43z"
                        fill="url(#IconifyId17ecdb2904d178eab19915)"></path>
                    <lineargradient id="IconifyId17ecdb2904d178eab19916" gradientUnits="userSpaceOnUse" x1="99.553"
                        y1="66.702" x2="74.778" y2="11.745">
                        <stop offset="0" stop-color="#9e958e"></stop>
                        <stop offset=".442" stop-color="#aea298"></stop>
                        <stop offset="1" stop-color="#c9b8a9"></stop>
                    </lineargradient>
                    <path
                        d="M85.05 9.95c-1.23-1.45-3.63-1.17-6.15 1.13l-9.06 9.06c-.56.56-.86 1.33-.81 2.12l.97 18.5c.03.62.26 1.2.66 1.67c3.22 3.76 14.6 21.83 17.9 21.83c3.29 0 9.04-12.82 11.97-12.75c.5.01 3.11.17 5.66.95c2.38.72 3.31-2.55 2.82-4.87c-2.46-3.9-5.77-9.13-7.63-12.09c-5.69-9.03-9.97-16.5-16.33-25.55z"
                        fill="url(#IconifyId17ecdb2904d178eab19916)"></path>
                    <lineargradient id="IconifyId17ecdb2904d178eab19917" gradientUnits="userSpaceOnUse" x1="37.502"
                        y1="104.545" x2="47.502" y2="50.295">
                        <stop offset="0" stop-color="#4c5c64"></stop>
                        <stop offset="1" stop-color="#455a64" stop-opacity="0"></stop>
                    </lineargradient>
                    <path
                        d="M42.89 46.37c3.33-.5 14.44-2.39 16.53-3.21C63.5 41.55 67.1 34.69 69.48 31c0 0 .82 12.03 0 16.73C68.91 51 66.76 68.1 64.6 72.2L51.54 93.96L32.35 74.77c-1.63-1.63-2.67-2.49-3.26-4.8c-1.35-5.28-3.8-13.07-3.81-17.66s12.36-5.16 17.61-5.94z"
                        fill="url(#IconifyId17ecdb2904d178eab19917)"></path>
                    <lineargradient id="IconifyId17ecdb2904d178eab19918" gradientUnits="userSpaceOnUse" x1="41.732"
                        y1="20.416" x2="70.782" y2="20.416">
                        <stop offset="0" stop-color="#4c5c64"></stop>
                        <stop offset="1" stop-color="#455a64" stop-opacity="0"></stop>
                    </lineargradient>
                    <path
                        d="M67.16 20.74c-1.28-1.53-1.64-3.7-1.2-5.64c.37-1.62 3.73-4.75 4.82-5.74l-7.69 1.86a8.226 8.226 0 0 0-3.97 2.27L41.73 31.47s16.84-7.02 25.43-10.73z"
                        fill="url(#IconifyId17ecdb2904d178eab19918)"></path>
                    <lineargradient id="IconifyId17ecdb2904d178eab19919" gradientUnits="userSpaceOnUse" x1="87.261"
                        y1="76.607" x2="121.616" y2="90.767">
                        <stop offset="0" stop-color="#9e958e"></stop>
                        <stop offset=".25" stop-color="#aea298"></stop>
                        <stop offset=".566" stop-color="#c9b8a9"></stop>
                    </lineargradient>
                    <path
                        d="M116.08 77.46a46.38 46.38 0 0 1-3.06-13.39c-5.74 3.93-8.95 9.03-18.19 10.28c-2.45.33-6.24.79-8.63 1.42c-2.96.78-5.7 2.97-10.14 3.38c-3.16.3-11.13.07-9.93 1.85c1.2 1.78 8.35 5.37 10.13 6.82c2.53 2.03 4.73 4.42 6.84 6.88c1.1 1.29 2.75 4.42 4.67 5.27c.49.22 1.01.28 1.53.12c.91-.27 1.64-.93 2.35-1.56a94.403 94.403 0 0 1 22.97-15.02c.89-.41 1.85-.87 2.29-1.75c.19-.39.27-.92.28-1.49c-.35-.94-.74-1.87-1.11-2.81z"
                        fill="url(#IconifyId17ecdb2904d178eab19919)"></path>
                    <lineargradient id="IconifyId17ecdb2904d178eab19920" gradientUnits="userSpaceOnUse" x1="104.646"
                        y1="123.357" x2="97.606" y2="95.587">
                        <stop offset="0" stop-color="#37474f"></stop>
                        <stop offset=".808" stop-color="#42565f" stop-opacity=".192"></stop>
                        <stop offset="1" stop-color="#455a64" stop-opacity="0"></stop>
                    </lineargradient>
                    <path
                        d="M117.87 82.63c-.13-.65-.32-1.29-.54-1.92c-.17.59-.54 1.24-1.34 1.85c-2.3 1.76-11.17 4.47-20.93 13.02c-6.37 5.58-6.38 6.33-7.75 12.48c-2.24 10.07-5.8 13.73-6.48 14.35c.37-.04.7-.09.97-.17c4.3-1.21 23.71-8.36 26.33-9.76c2.38-1.27 9.02-11.76 9.29-14.57c.34-3.44.77-13.67.45-15.28z"
                        fill="url(#IconifyId17ecdb2904d178eab19920)"></path>
                </g>
            </svg>
        </button>
        <button class="choise" onclick="startG('paper')">
            <svg width="64px" height="64px" viewBox="-2.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <title>paper</title>
                    <desc>Created with Sketch.</desc>
                    <defs>
                        <lineargradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1">
                            <stop stop-color="#EDEEF4" offset="0%"></stop>
                            <stop stop-color="#D7D8E6" offset="100%"></stop>
                        </lineargradient>
                        <lineargradient x1="50%" y1="0%" x2="50%" y2="98.6230799%" id="linearGradient-2">
                            <stop stop-color="#DEDEE7" offset="0%"></stop>
                            <stop stop-color="#CFD0E8" offset="100%"></stop>
                        </lineargradient>
                    </defs>
                    <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="ui-gambling-website-lined-icnos-casinoshunter"
                            transform="translate(-1776.000000, -1905.000000)" fill-rule="nonzero">
                            <g id="4" transform="translate(50.000000, 1871.000000)">
                                <g id="paper" transform="translate(1726.000000, 34.000000)">
                                    <path
                                        d="M21.017693,0 C21.5041785,0 21.9739852,0.177316999 22.3391528,0.498752565 L26.3214599,4.00414329 C26.7528128,4.38383791 27,4.9307314 27,5.50539073 L27,29 C27,30.6568542 25.6568542,32 24,32 L3,32 C1.34314575,32 0,30.6568542 0,29 L0,3 C0,1.34314575 1.34314575,0 3,0 L21.017693,0 Z"
                                        fill="url(#linearGradient-1)"></path>
                                    <path
                                        d="M21.017693,0 C21.5041785,0 21.9739852,0.177316999 22.3391528,0.498752565 L26.3214599,4.00414329 C26.7528128,4.38383791 27,4.9307314 27,5.50539073 L27,7 L24,7 C22.3431458,7 21,5.65685425 21,4 L21,0 L21.017693,0 Z"
                                        id="Combined-Shape" fill="url(#linearGradient-2)"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </button>
        <button class="choise" onclick="startG('scissors')">
            <svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.988 511.988" xml:space="preserve"
                fill="#000000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path style="fill: #dedde0"
                        d="M314.39,434.82c13.28,23.002,42.691,30.883,65.693,17.604l0,0 c23.001-13.281,30.884-42.691,17.603-65.693L174.406,0c0,0-18.645,10.765-41.648,24.045l0,0 c-23.001,13.28-30.882,42.691-17.603,65.693L314.39,434.82z">
                    </path>
                    <g>
                        <path style="fill: #738a91"
                            d="M339.288,285.585l65.267,113.045c13.28,23.001,5.4,52.413-17.604,65.693 c-23.001,13.28-52.413,5.4-65.693-17.603l-65.266-113.045L339.288,285.585z">
                        </path>
                        <circle style="fill: #738a91" cx="362.913" cy="422.676" r="89.311"></circle>
                    </g>
                    <circle style="fill: #ffffff" cx="362.9" cy="422.676" r="34.351"></circle>
                    <path style="fill: #f2f2f3"
                        d="M197.598,434.82c-13.28,23.002-42.691,30.883-65.692,17.604l0,0 c-23.001-13.281-30.884-42.691-17.603-65.693L337.582,0c0,0,18.645,10.765,41.648,24.045l0,0 c23.001,13.28,30.881,42.691,17.601,65.693L197.598,434.82z">
                    </path>
                    <g>
                        <path style="fill: #abbfc4"
                            d="M172.699,285.585L107.432,398.63c-13.28,23.001-5.4,52.413,17.604,65.693 c23.001,13.28,52.413,5.4,65.692-17.603l65.266-113.045L172.699,285.585z">
                        </path>
                        <circle style="fill: #abbfc4" cx="149.074" cy="422.676" r="89.311"></circle>
                    </g>
                    <circle style="fill: #ffffff" cx="149.074" cy="422.676" r="34.351"></circle>
                    <circle style="fill: #565659" cx="255.987" cy="234.669" r="27.48"></circle>
                    <path d="M255.994,262.148c-15.177,0-27.48-12.303-27.48-27.48c0-15.177,12.303-27.48,27.48-27.48">
                    </path>
                </g>
            </svg>
        </button>
    </div>
    <div id="game">
        <div id="userChoice"></div>
        <p id="vs"></p>
        <div class="choice" id="compChoice"></div>
    </div>
    <div id="result">
        <p></p>
    </div>
    <button class="autoB" onclick="ssauto()">auto play</button>
    <button class="autoB" onclick="resetScores()">reset score</button>
    <script>

        let uW = 0,
        cW = 0;
        uW=localStorage.getItem("uW");
        cW=localStorage.getItem("cW");
        document.getElementById("dashBoard").innerHTML = `you ${uW} - ${cW} computer`;
        function startG(ua) {
            let uc = document.getElementById("userChoice");
            let cc = document.getElementById("compChoice");
            let rock =
                '<svg width="64px" height="64px" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--noto" preserveAspectRatio="xMidYMid meet" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><linearGradient id="IconifyId17ecdb2904d178eab19914" gradientUnits="userSpaceOnUse" x1="87.616" y1="21.04" x2="41.548" y2="138.084"><stop offset="0" stop-color="#9e958e"></stop><stop offset=".46" stop-color="#8e8884"></stop><stop offset="1" stop-color="#757575"></stop></linearGradient><path d="M8.93 90.74c-.53-1.25-1.04-2.5-1.54-3.75c-3.77-9.51.96-18.09 5.18-26.49l6.12-12.16c1.23-2.45 3.12-4.51 5.44-5.95l17.6-10.92l17.39-17.98a8.147 8.147 0 0 1 3.97-2.27l11.84-2.86c5.73-1.37 8.19-1.15 10.04 1.48c6.41 9.1 10.7 16.59 16.41 25.66c3.11 4.94 10.29 16.29 10.74 17.04c1.38 2.32.82 4.26.77 6.92c-.12 6.13.96 12.29 3.2 18c.67 1.7 1.44 3.38 1.79 5.17c.32 1.61-.11 11.84-.44 15.3c-.27 2.81-6.91 13.3-9.29 14.57c-2.62 1.4-22.04 8.54-26.33 9.76s-22.89-3.03-32.55-4.51c-5.97-.91-11.95-1.83-17.92-2.74c-5.18-.79-10.33-.19-13.23-5.42c-3.41-6.12-6.47-12.41-9.19-18.85z" fill="url(#IconifyId17ecdb2904d178eab19914)"></path><linearGradient id="IconifyId17ecdb2904d178eab19915" gradientUnits="userSpaceOnUse" x1="8.859" y1="120.137" x2="47.171" y2="77.536"><stop offset="0" stop-color="#37474f"></stop><stop offset=".612" stop-color="#42565f" stop-opacity=".192"></stop><stop offset=".757" stop-color="#455a64" stop-opacity="0"></stop></linearGradient><path d="M31.34 115c5.97.91 11.95 1.83 17.92 2.74c3.11.48 7.15 1.24 11.34 2.02c-2.82-3.34-7.03-7.3-9.85-10.64c-.61-.72-1.23-1.47-1.45-2.39c-.23-.98.03-1.99.3-2.96c.86-3.18 1.08-6.63 1.94-9.81c-5.33 1.24-17.61 3.6-18.62 3.31c-1.12-.32-2.03-1.13-2.9-1.92c-6.33-5.78-11.28-11.61-16.12-18.66c-.57-.83-1.15-1.69-1.36-2.68c-.2-.93-.05-1.89.1-2.82c.36-2.32 1.16-8.75 1.8-14.42l-1.88 3.73C8.35 68.9 3.62 77.48 7.4 86.99c.5 1.26 1.01 2.51 1.54 3.75a192.48 192.48 0 0 0 9.17 18.83c2.89 5.24 8.05 4.64 13.23 5.43z" fill="url(#IconifyId17ecdb2904d178eab19915)"></path><linearGradient id="IconifyId17ecdb2904d178eab19916" gradientUnits="userSpaceOnUse" x1="99.553" y1="66.702" x2="74.778" y2="11.745"><stop offset="0" stop-color="#9e958e"></stop><stop offset=".442" stop-color="#aea298"></stop><stop offset="1" stop-color="#c9b8a9"></stop></linearGradient><path d="M85.05 9.95c-1.23-1.45-3.63-1.17-6.15 1.13l-9.06 9.06c-.56.56-.86 1.33-.81 2.12l.97 18.5c.03.62.26 1.2.66 1.67c3.22 3.76 14.6 21.83 17.9 21.83c3.29 0 9.04-12.82 11.97-12.75c.5.01 3.11.17 5.66.95c2.38.72 3.31-2.55 2.82-4.87c-2.46-3.9-5.77-9.13-7.63-12.09c-5.69-9.03-9.97-16.5-16.33-25.55z" fill="url(#IconifyId17ecdb2904d178eab19916)"></path><linearGradient id="IconifyId17ecdb2904d178eab19917" gradientUnits="userSpaceOnUse" x1="37.502" y1="104.545" x2="47.502" y2="50.295"><stop offset="0" stop-color="#4c5c64"></stop><stop offset="1" stop-color="#455a64" stop-opacity="0"></stop></linearGradient><path d="M42.89 46.37c3.33-.5 14.44-2.39 16.53-3.21C63.5 41.55 67.1 34.69 69.48 31c0 0 .82 12.03 0 16.73C68.91 51 66.76 68.1 64.6 72.2L51.54 93.96L32.35 74.77c-1.63-1.63-2.67-2.49-3.26-4.8c-1.35-5.28-3.8-13.07-3.81-17.66s12.36-5.16 17.61-5.94z" fill="url(#IconifyId17ecdb2904d178eab19917)"></path><linearGradient id="IconifyId17ecdb2904d178eab19918" gradientUnits="userSpaceOnUse" x1="41.732" y1="20.416" x2="70.782" y2="20.416"><stop offset="0" stop-color="#4c5c64"></stop><stop offset="1" stop-color="#455a64" stop-opacity="0"></stop></linearGradient><path d="M67.16 20.74c-1.28-1.53-1.64-3.7-1.2-5.64c.37-1.62 3.73-4.75 4.82-5.74l-7.69 1.86a8.226 8.226 0 0 0-3.97 2.27L41.73 31.47s16.84-7.02 25.43-10.73z" fill="url(#IconifyId17ecdb2904d178eab19918)"></path><linearGradient id="IconifyId17ecdb2904d178eab19919" gradientUnits="userSpaceOnUse" x1="87.261" y1="76.607" x2="121.616" y2="90.767"><stop offset="0" stop-color="#9e958e"></stop><stop offset=".25" stop-color="#aea298"></stop><stop offset=".566" stop-color="#c9b8a9"></stop></linearGradient><path d="M116.08 77.46a46.38 46.38 0 0 1-3.06-13.39c-5.74 3.93-8.95 9.03-18.19 10.28c-2.45.33-6.24.79-8.63 1.42c-2.96.78-5.7 2.97-10.14 3.38c-3.16.3-11.13.07-9.93 1.85c1.2 1.78 8.35 5.37 10.13 6.82c2.53 2.03 4.73 4.42 6.84 6.88c1.1 1.29 2.75 4.42 4.67 5.27c.49.22 1.01.28 1.53.12c.91-.27 1.64-.93 2.35-1.56a94.403 94.403 0 0 1 22.97-15.02c.89-.41 1.85-.87 2.29-1.75c.19-.39.27-.92.28-1.49c-.35-.94-.74-1.87-1.11-2.81z" fill="url(#IconifyId17ecdb2904d178eab19919)"></path><linearGradient id="IconifyId17ecdb2904d178eab19920" gradientUnits="userSpaceOnUse" x1="104.646" y1="123.357" x2="97.606" y2="95.587"><stop offset="0" stop-color="#37474f"></stop><stop offset=".808" stop-color="#42565f" stop-opacity=".192"></stop><stop offset="1" stop-color="#455a64" stop-opacity="0"></stop></linearGradient><path d="M117.87 82.63c-.13-.65-.32-1.29-.54-1.92c-.17.59-.54 1.24-1.34 1.85c-2.3 1.76-11.17 4.47-20.93 13.02c-6.37 5.58-6.38 6.33-7.75 12.48c-2.24 10.07-5.8 13.73-6.48 14.35c.37-.04.7-.09.97-.17c4.3-1.21 23.71-8.36 26.33-9.76c2.38-1.27 9.02-11.76 9.29-14.57c.34-3.44.77-13.67.45-15.28z" fill="url(#IconifyId17ecdb2904d178eab19920)"></path></g></svg>',
                paper =
                    '<svg width="64px" height="64px" viewBox="-2.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>paper</title> <desc>Created with Sketch.</desc> <defs> <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="linearGradient-1"> <stop stop-color="#EDEEF4" offset="0%"> </stop> <stop stop-color="#D7D8E6" offset="100%"> </stop> </linearGradient> <linearGradient x1="50%" y1="0%" x2="50%" y2="98.6230799%" id="linearGradient-2"> <stop stop-color="#DEDEE7" offset="0%"> </stop> <stop stop-color="#CFD0E8" offset="100%"> </stop> </linearGradient> </defs> <g id="icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ui-gambling-website-lined-icnos-casinoshunter" transform="translate(-1776.000000, -1905.000000)" fill-rule="nonzero"> <g id="4" transform="translate(50.000000, 1871.000000)"> <g id="paper" transform="translate(1726.000000, 34.000000)"> <path d="M21.017693,0 C21.5041785,0 21.9739852,0.177316999 22.3391528,0.498752565 L26.3214599,4.00414329 C26.7528128,4.38383791 27,4.9307314 27,5.50539073 L27,29 C27,30.6568542 25.6568542,32 24,32 L3,32 C1.34314575,32 0,30.6568542 0,29 L0,3 C0,1.34314575 1.34314575,0 3,0 L21.017693,0 Z" fill="url(#linearGradient-1)"> </path> <path d="M21.017693,0 C21.5041785,0 21.9739852,0.177316999 22.3391528,0.498752565 L26.3214599,4.00414329 C26.7528128,4.38383791 27,4.9307314 27,5.50539073 L27,7 L24,7 C22.3431458,7 21,5.65685425 21,4 L21,0 L21.017693,0 Z" id="Combined-Shape" fill="url(#linearGradient-2)"> </path> </g> </g> </g> </g> </g></svg>',
                scissors =
                    '<svg height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.988 511.988" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#DEDDE0;" d="M314.39,434.82c13.28,23.002,42.691,30.883,65.693,17.604l0,0 c23.001-13.281,30.884-42.691,17.603-65.693L174.406,0c0,0-18.645,10.765-41.648,24.045l0,0 c-23.001,13.28-30.882,42.691-17.603,65.693L314.39,434.82z"></path> <g> <path style="fill:#738a91;" d="M339.288,285.585l65.267,113.045c13.28,23.001,5.4,52.413-17.604,65.693 c-23.001,13.28-52.413,5.4-65.693-17.603l-65.266-113.045L339.288,285.585z"></path> <circle style="fill:#738a91;" cx="362.913" cy="422.676" r="89.311"></circle> </g> <circle style="fill:#FFFFFF;" cx="362.9" cy="422.676" r="34.351"></circle> <path style="fill:#F2F2F3;" d="M197.598,434.82c-13.28,23.002-42.691,30.883-65.692,17.604l0,0 c-23.001-13.281-30.884-42.691-17.603-65.693L337.582,0c0,0,18.645,10.765,41.648,24.045l0,0 c23.001,13.28,30.881,42.691,17.601,65.693L197.598,434.82z"></path> <g> <path style="fill:#abbfc4;" d="M172.699,285.585L107.432,398.63c-13.28,23.001-5.4,52.413,17.604,65.693 c23.001,13.28,52.413,5.4,65.692-17.603l65.266-113.045L172.699,285.585z"></path> <circle style="fill:#abbfc4;" cx="149.074" cy="422.676" r="89.311"></circle> </g> <circle style="fill:#FFFFFF;" cx="149.074" cy="422.676" r="34.351"></circle> <circle style="fill:#565659;" cx="255.987" cy="234.669" r="27.48"></circle> <path d="M255.994,262.148c-15.177,0-27.48-12.303-27.48-27.48c0-15.177,12.303-27.48,27.48-27.48"></path> </g></svg>';
            if (ua == "rock") {
                uc.innerHTML = rock;
            } else if (ua == "paper") {
                uc.innerHTML = paper;
            } else {
                uc.innerHTML = scissors;
            }
            document.getElementById("vs").innerHTML = "vs";
            let ca = Math.floor(Math.random() * (4 - 1) + 1);
            let res = document.getElementById("result");
            if (ca == 1) {
                cc.innerHTML = rock;
            } else if (ca == 2) {
                cc.innerHTML = paper;
            } else {
                cc.innerHTML = scissors;
            }
            if (ua == "rock") {
                if (ca == 1) res.innerHTML += "tie";
                else if (ca == 2) {
                    res.innerHTML += "you Lost, computer Won";
                    cW++;
                } else if (ca == 3) {
                    res.innerHTML += "Winner!!!";
                    uW++;
                }
            } else if (ua == "paper") {
                if (ca == 1) {
                    res.innerHTML += "Winner!!!";
                    uW++;
                } else if (ca == 2) res.innerHTML += "tie";
                else if (ca == 3) {
                    res.innerHTML += "you Lost, computer Won";
                    cW++;
                }
            } else if (ua == "scissors") {
                if (ca == 1) {
                    res.innerHTML += "you Lost, computer Won";
                    cW++;
                } else if (ca == 2) {
                    res.innerHTML += "Winner!!!";
                    uW++;
                } else if (ca == 3) res.innerHTML += "tie";
            }
            localStorage.setItem("uW" , uW);
            localStorage.setItem("cW" ,cW);
            document.getElementById("dashBoard").innerHTML = `you ${uW} - ${cW} computer`;
            setTimeout(() => {
                res.innerHTML = "";
                cc.innerHTML = "";
                uc.innerHTML = "";
                document.getElementById("vs").innerHTML = "";
            }, 1000);
        }
        let intervalId;
        function startAuto() {
            if(document.querySelector(".autoB").classList.contains("active")) {
                intervalId = setInterval(()=>{
                    let uapa = Math.floor(Math.random() * (4 - 1) + 1);
                    if (uapa == 1) {
                            startG("rock");
                    } else if (uapa == 2) {
                        startG("paper");
                    } else {
                        startG("scissors");
                    }
                    },2000);
            }
        }
        
        function ssauto() {
            if (document.querySelector(".autoB").classList.contains("active")) {
                document.querySelector(".autoB").innerHTML = "Auto play";
                clearInterval(intervalId);
                document.querySelector(".autoB").classList.remove("active");
            } else {
                document.querySelector(".autoB").innerHTML = "stop playing";
                document.querySelector(".autoB").classList.add("active");
                startAuto()
            }
        }
        function resetScores(){
            uW =0;
            cW =0;
            localStorage.setItem("uW" ,0);
            localStorage.setItem("cW" ,0);
            document.getElementById("dashBoard").innerHTML = `you ${uW} - ${cW} computer`;
        }
    </script>
</body>

</html>