<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skills</title>
    <link rel="stylesheet" href="css/skills.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    {{-- Icon (SVG) --}}
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="location" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
        <symbol id="education" viewBox="0 0 20 20">
            <path d="M3.33 8L10 12l10-6l-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3l-2-1.2v-6l7 4.2l7-4.2v6L10 20z"/>
        </symbol>
        <symbol id="skill" viewBox="0 0 512 512">
            <path fill="currentColor" d="m109.46 244.04l134.58-134.56l-44.12-44.12l-61.68 61.68a7.919 7.919 0 0 1-11.21 0l-11.21-11.21c-3.1-3.1-3.1-8.12 0-11.21l61.68-61.68l-33.64-33.65C131.47-3.1 111.39-3.1 99 9.29L9.29 99c-12.38 12.39-12.39 32.47 0 44.86l100.17 100.18zm388.47-116.8c18.76-18.76 18.75-49.17 0-67.93l-45.25-45.25c-18.76-18.76-49.18-18.76-67.95 0l-46.02 46.01l113.2 113.2l46.02-46.03zM316.08 82.71l-297 296.96L.32 487.11c-2.53 14.49 10.09 27.11 24.59 24.56l107.45-18.84L429.28 195.9L316.08 82.71zm186.63 285.43l-33.64-33.64l-61.68 61.68c-3.1 3.1-8.12 3.1-11.21 0l-11.21-11.21c-3.09-3.1-3.09-8.12 0-11.21l61.68-61.68l-44.14-44.14L267.93 402.5l100.21 100.2c12.39 12.39 32.47 12.39 44.86 0l89.71-89.7c12.39-12.39 12.39-32.47 0-44.86z"/>
        </symbol>
        <symbol id="contact" viewBox="0 0 24 24">
            <path d="M21 2H6a2 2 0 0 0-2 2v3H2v2h2v2H2v2h2v2H2v2h2v3a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zm-8 2.999c1.648 0 3 1.351 3 3A3.012 3.012 0 0 1 13 11c-1.647 0-3-1.353-3-3.001c0-1.649 1.353-3 3-3zM19 18H7v-.75c0-2.219 2.705-4.5 6-4.5s6 2.281 6 4.5V18z"/>
        </symbol>
        <symbol id="line" viewBox="0 0 24 24">
            <g fill="none" fill-rule="evenodd"><path d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z"/><path fill="currentColor" d="M4 11.5C4 8.073 7.403 5 12 5c4.597 0 8 3.073 8 6.5c0 1.685-.914 3.313-2.551 4.817c-1.37 1.258-3.181 2.364-5.164 3.262a2.8 2.8 0 0 0-.458-1.201c-.363-.515-.92-.867-1.655-.996C6.435 16.73 4 14.4 4 11.5ZM12 3C6.656 3 2 6.643 2 11.5c0 4.24 3.549 7.106 7.828 7.852c.367.064.459.286.493.635c.047.466-.055.964.153 1.4c.249.522.863.755 1.397.541c2.571-1.028 5.063-2.423 6.93-4.138C20.664 16.08 22 13.957 22 11.5C22 6.643 17.344 3 12 3Zm.268 6.36A1 1 0 0 0 10.5 10v3a1 1 0 0 0 2 0v-.238l.732.878A1 1 0 0 0 15 13v-3a1 1 0 1 0-2 0v.238l-.732-.878ZM7 10a1 1 0 0 0-2 0v3a1 1 0 0 0 1 1h1a1 1 0 1 0 0-2v-2Zm2-1a1 1 0 0 1 1 1v3a1 1 0 0 1-2 0v-3a1 1 0 0 1 1-1Zm9 2h-.134a.995.995 0 0 1 0 1H18a1 1 0 1 1 0 2h-1.5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1H18a1 1 0 1 1 0 2Z"/></g>
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </symbol>
        <symbol id="email" viewBox="0 0 24 24">
            <path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6m-2 0l-8 5l-8-5h16m0 12H4V8l8 5l8-5v10Z"/>
        </symbol>
        <symbol id="WA" viewBox="0 0 24 24">
            <path d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z"/>
        </symbol>
        <symbol id="email2" viewBox="0 0 24 24">
            <path fill="currentColor" d="m20 8l-8 5l-8-5V6l8 5l8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"/>
        </symbol>
        <symbol id="C" viewBox="0 0 15 15">
            <path fill="currentColor" fill-rule="evenodd" d="M7.5.421L14 4.213v6.574L7.5 14.58L1 10.787V4.213L7.5.42ZM7.5 4a3.5 3.5 0 1 0 0 7h.182c.976 0 1.913-.388 2.604-1.078l.068-.068l-.708-.708l-.068.068A2.682 2.682 0 0 1 7.682 10H7.5a2.5 2.5 0 0 1 0-5h.182c.711 0 1.393.283 1.896.786l.068.068l.708-.708l-.068-.068A3.682 3.682 0 0 0 7.682 4H7.5Z" clip-rule="evenodd"/>
        </symbol>
        <symbol id="HTML" viewBox="0 0 24 24">
            <g fill="none"><g fill="currentColor" clip-path="url(#akarIconsHtmlFill0)"><path d="M5.08 0h1.082v1.069h.99V0h1.082v3.236H7.152V2.153h-.99v1.083H5.081V0Zm4.576 1.073h-.952V0h2.987v1.073h-.953v2.163H9.656V1.073ZM12.165 0h1.128l.694 1.137L14.68 0h1.128v3.236h-1.077V1.632l-.744 1.151h-.019l-.745-1.15v1.603h-1.058V0Zm4.181 0h1.083v2.167h1.52v1.07h-2.603V0Z"/><path fill-rule="evenodd" d="M5.046 22.072L3 4.717h18L18.953 22.07L11.99 24l-6.944-1.928Zm4.137-9.5l-.194-2.18h8.145l.19-2.128H6.664l.574 6.437h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.332l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571H9.183Z" clip-rule="evenodd"/></g><defs><clipPath id="akarIconsHtmlFill0"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g>
        </symbol>
        <symbol id="CSS" viewBox="0 0 24 24">
            <path fill="currentColor" d="M7.502 0h2.578v1.078h-1.5v1.078h1.5v1.078H7.502V0Zm3.093 0h2.579v.938h-1.5v.187h1.5v2.156h-2.579v-.984h1.5v-.188h-1.5V0Zm3.095 0h2.577v.938h-1.5v.187h1.5v2.156H13.69v-.984h1.5v-.188h-1.5V0Z"/><path fill="currentColor" fill-rule="evenodd" d="m11.991 24l-6.944-1.928L3 4.717h18L18.954 22.07L11.991 24ZM7.047 12.573l.191 2.128h7.377l-.247 2.76l-2.374.642h-.002l-2.37-.64l-.152-1.697H7.333l.298 3.342l4.36 1.21l4.367-1.21l.532-5.964l.052-.571l.384-4.309H6.664l.194 2.129h8.136l-.194 2.18H7.047Z" clip-rule="evenodd"/>
        </symbol>
        <symbol id="JS" viewBox="0 0 24 24">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="m20 4l-2 14.5l-6 2l-6-2L4 4z"/><path d="M7.5 8h3v8l-2-1m8-7H14a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1.423a.5.5 0 0 1 .495.57L15.5 15.5l-2 .5"/></g>
        </symbol>
        <symbol id="java" viewBox="0 0 24 24">
            <path fill="currentColor" d="M16.5 6.08s-6.84 1.71-3.56 5.48c.97 1.11-.25 2.11-.25 2.11s2.45-1.25 1.31-2.85c-1.06-1.47-1.86-2.2 2.5-4.74m-4.47 1.2C16.08 4.08 14 2 14 2c.84 3.3-2.96 4.3-4.33 6.36c-.94 1.4.46 2.91 2.33 4.64c-.71-1.7-3.22-3.16.03-5.72M9.37 17.47c-3.08.86 1.88 2.63 5.79.96c-.38-.15-.75-.33-1.1-.54c-1.36.31-2.76.37-4.14.18c-1.31-.16-.55-.6-.55-.6m5.32-1.68c-1.75.38-3.56.47-5.34.26c-1.31-.13-.45-.77-.45-.77c-3.4 1.13 1.88 2.4 6.6 1.02c-.29-.11-.57-.3-.81-.51m3.42 3.3s.57.47-.61.83c-2.28.68-9.43.89-11.41.03c-.71-.31.63-.74 1.05-.83c.23-.06.46-.08.69-.08c-.79-.54-5.13 1.1-2.19 1.56c7.97 1.3 14.54-.6 12.47-1.51m-2.74-4.86c.29-.19.6-.35.92-.49c0 0-1.51.26-3.02.4c-1.6.16-3.21.18-4.81.06c-2.35-.31 1.29-1.2 1.29-1.2c-1.1 0-2.18.26-3.16.75c-2.05 1 5.1 1.45 8.78.48m.9 2.42c-.02.04-.04.07-.08.1c5.01-1.31 3.17-4.64.77-3.81c-.13.06-.24.14-.31.25c.14-.05.28-.09.43-.12c1.2-.24 2.92 1.63-.81 3.58m.13 4.61c-3.01.52-6.09.56-9.12.14c0 0 .46.38 2.81.53c3.6.23 9.13-.13 9.26-1.83c.03.01-.23.65-2.95 1.16Z"/>
        </symbol>
        <symbol id="python" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19.14 7.5A2.86 2.86 0 0 1 22 10.36v3.78A2.86 2.86 0 0 1 19.14 17H12c0 .39.32.96.71.96H17v1.68a2.86 2.86 0 0 1-2.86 2.86H9.86A2.86 2.86 0 0 1 7 19.64v-3.75a2.85 2.85 0 0 1 2.86-2.85h5.25a2.85 2.85 0 0 0 2.85-2.86V7.5h1.18m-4.28 11.79c-.4 0-.72.3-.72.89c0 .59.32.71.72.71a.71.71 0 0 0 .71-.71c0-.59-.32-.89-.71-.89m-10-1.79A2.86 2.86 0 0 1 2 14.64v-3.78A2.86 2.86 0 0 1 4.86 8H12c0-.39-.32-.96-.71-.96H7V5.36A2.86 2.86 0 0 1 9.86 2.5h4.28A2.86 2.86 0 0 1 17 5.36v3.75a2.85 2.85 0 0 1-2.86 2.85H8.89a2.85 2.85 0 0 0-2.85 2.86v2.68H4.86M9.14 5.71c.4 0 .72-.3.72-.89c0-.59-.32-.71-.72-.71c-.39 0-.71.12-.71.71s.32.89.71.89Z"/>
        </symbol>
        <symbol id="mysql" viewBox="0 0 32 32">
            <path fill="currentColor" d="M21.875 7.568c-.156 0-.26.021-.365.047v.016h.016c.073.135.193.24.286.365c.073.141.135.286.203.427l.021-.021c.125-.089.188-.229.188-.443c-.052-.063-.063-.13-.109-.188c-.052-.089-.167-.135-.24-.203zM7.693 25.161H6.459a70.224 70.224 0 0 0-.359-5.88h-.01l-1.88 5.88h-.943l-1.865-5.88h-.016a98.982 98.982 0 0 0-.26 5.88H.001a74.98 74.98 0 0 1 .547-7.375h1.531l1.781 5.417h.01l1.797-5.417h1.458c.323 2.688.516 5.146.573 7.375zm5.354-5.442c-.5 2.729-1.167 4.714-1.984 5.948c-.646.953-1.349 1.432-2.115 1.432c-.203 0-.453-.063-.755-.188v-.656c.151.021.323.036.516.036c.359 0 .646-.104.865-.297c.26-.24.391-.51.391-.807c0-.208-.099-.625-.307-1.26l-1.349-4.208h1.214l.969 3.146c.219.719.313 1.214.271 1.5c.536-1.417.906-2.969 1.115-4.646zm16.437 5.442h-3.51v-7.375h1.182v6.469h2.328zm-4.427.178l-1.354-.667c.12-.099.234-.208.339-.333c.578-.672.865-1.677.865-3c0-2.443-.958-3.661-2.875-3.661c-.938 0-1.672.307-2.198.927c-.573.677-.865 1.677-.865 2.995c0 1.297.255 2.245.766 2.854c.469.542 1.172.818 2.115.818c.349 0 .672-.042.964-.13l1.766 1.031l.484-.833zm-4.39-1.657c-.302-.479-.448-1.25-.448-2.313c0-1.859.563-2.786 1.693-2.786c.589 0 1.026.224 1.302.667c.297.484.448 1.245.448 2.297c0 1.87-.568 2.813-1.693 2.813c-.594 0-1.026-.224-1.307-.667zm-2.209-.562c0 .625-.229 1.141-.693 1.536c-.458.401-1.068.604-1.844.604c-.724 0-1.417-.229-2.099-.688l.318-.635c.583.292 1.109.438 1.589.438c.443 0 .792-.099 1.042-.292c.25-.198.401-.474.401-.823c0-.438-.307-.813-.865-1.125c-.516-.286-1.552-.875-1.552-.875c-.563-.411-.839-.849-.839-1.573c0-.599.208-1.078.625-1.443c.422-.375.958-.557 1.625-.557a3.37 3.37 0 0 1 1.87.547l-.286.635a3.623 3.623 0 0 0-1.417-.307c-.38 0-.672.094-.875.276s-.328.411-.328.698c0 .438.313.813.885 1.135c.526.286 1.583.891 1.583.891c.578.406.865.844.865 1.557zm12.506-7.807c-.714-.016-1.266.057-1.729.255c-.13.052-.344.052-.365.219c.073.073.083.188.146.286c.109.177.292.417.464.542c.188.146.375.292.568.417c.349.214.74.339 1.083.552c.193.125.391.286.583.417c.099.068.161.188.286.229v-.026c-.063-.078-.078-.193-.141-.286c-.089-.089-.177-.167-.266-.255a4.212 4.212 0 0 0-.927-.901c-.286-.193-.911-.464-1.026-.792l-.016-.021c.193-.016.422-.089.609-.141c.302-.078.583-.063.896-.141a7.21 7.21 0 0 0 .427-.125v-.078c-.161-.161-.281-.38-.448-.531a11.645 11.645 0 0 0-1.469-1.094c-.281-.182-.635-.297-.932-.448c-.104-.052-.286-.078-.344-.167c-.161-.198-.255-.453-.37-.688a23.772 23.772 0 0 1-.729-1.552c-.161-.349-.255-.693-.453-1.016c-.917-1.516-1.917-2.432-3.448-3.333c-.328-.188-.724-.266-1.141-.365c-.224-.01-.443-.026-.667-.036c-.146-.063-.286-.229-.411-.313c-.51-.323-1.823-1.016-2.193-.099c-.24.583.354 1.151.563 1.443c.151.208.344.438.453.667c.063.156.078.318.141.479c.141.391.276.828.464 1.193c.099.188.203.385.328.552c.073.099.198.141.224.302c-.125.182-.135.448-.203.667c-.323 1.01-.198 2.255.255 3c.146.224.484.714.938.526c.401-.161.313-.667.427-1.115c.026-.109.01-.177.063-.25v.021c.13.25.255.49.37.74c.271.438.755.891 1.156 1.193c.214.161.38.438.646.536v-.026h-.021c-.057-.078-.13-.115-.203-.177a4.999 4.999 0 0 1-.469-.536c-.37-.5-.703-1.052-.995-1.62a10.88 10.88 0 0 1-.385-.859c-.052-.104-.052-.266-.141-.318c-.135.193-.333.359-.427.604c-.172.38-.188.854-.255 1.344c-.031.01-.016 0-.031.021c-.286-.073-.385-.365-.49-.615c-.271-.635-.313-1.651-.083-2.38c.063-.188.328-.776.224-.953c-.057-.172-.234-.271-.328-.406c-.12-.167-.24-.38-.323-.568c-.214-.5-.318-1.052-.552-1.552c-.104-.229-.292-.469-.443-.682c-.172-.24-.359-.411-.49-.693c-.047-.099-.109-.26-.036-.365c.016-.073.052-.099.125-.12c.115-.099.448.026.563.083c.328.13.604.255.88.443c.125.089.26.255.422.302h.188c.286.063.604.016.87.099c.474.151.901.37 1.286.609a7.963 7.963 0 0 1 2.776 3.052c.109.203.156.391.255.604c.182.443.417.885.604 1.307s.365.849.635 1.198c.135.188.667.286.911.38c.177.083.453.156.609.25c.307.188.609.401.896.609c.146.099.589.323.615.5z"/>
        </symbol>
        <symbol id="time" viewBox="0 0 24 24">
            <path fill="currentColor" d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8zm.5-13H11v6l5.25 3.15l.75-1.23l-4.5-2.67z"/>
        </symbol>
        <symbol id="self" viewBox="0 0 24 24">
            <path fill="currentColor" d="M12 12q-1.65 0-2.825-1.175T8 8q0-1.65 1.175-2.825T12 4q1.65 0 2.825 1.175T16 8q0 1.65-1.175 2.825T12 12Zm-8 8v-2.8q0-.85.438-1.563T5.6 14.55q1.55-.775 3.15-1.163T12 13q1.65 0 3.25.388t3.15 1.162q.725.375 1.163 1.088T20 17.2V20H4Zm2-2h12v-.8q0-.275-.138-.5t-.362-.35q-1.35-.675-2.725-1.012T12 15q-1.4 0-2.775.338T6.5 16.35q-.225.125-.363.35T6 17.2v.8Zm6-8q.825 0 1.413-.588T14 8q0-.825-.588-1.413T12 6q-.825 0-1.413.588T10 8q0 .825.588 1.413T12 10Zm0-2Zm0 10Z"/>
        </symbol>
        <symbol id="motivate" viewBox="0 0 32 32">
            <path fill="currentColor" d="M29.914 16.32v-.307c0-.145 0-.291-.008-.445c0-.075-.007-.152-.011-.229a10.268 10.268 0 0 0-.23-1.731c-.022-.1-.042-.2-.068-.3c-.038-.144-.085-.286-.132-.429c-.047-.143-.1-.282-.153-.423a6.324 6.324 0 0 0-.157-.36c-.027-.057-.046-.116-.075-.172v-.734c-.008-.7 0-2.608 0-4.14V5.44a4.377 4.377 0 0 0-4.349-4.266a4.51 4.51 0 0 0-2.094.407h-.008a2.8 2.8 0 0 0-.3.173c-.049.033-.1.072-.143.108a2.915 2.915 0 0 0-.5.483c-.017.021-.035.035-.051.056c-.04-.039-.092-.071-.133-.108a4.699 4.699 0 0 0-.424-.346c-.078-.055-.161-.106-.243-.157a4.424 4.424 0 0 0-.471-.256a4.373 4.373 0 0 0-.287-.127c-.188-.07-.38-.13-.575-.178c-.1-.024-.187-.054-.287-.072a5.16 5.16 0 0 0-.97-.1c-.23.013-.459.044-.684.091c-.085.016-.169.039-.254.061a4.497 4.497 0 0 0-.854.323a4.158 4.158 0 0 0-.615.37a4.22 4.22 0 0 0-.42.358c-.048.046-.1.083-.146.132a4.27 4.27 0 0 0-.437.548c-.021-.013-.048-.023-.07-.036c-.1-.061-.217-.116-.333-.172c-.074-.035-.145-.072-.224-.1a3.764 3.764 0 0 0-.4-.139c-.083-.026-.161-.056-.248-.079c-.156-.041-.326-.07-.5-.1c-.082-.013-.157-.033-.243-.044a6.579 6.579 0 0 0-.828-.052h-.005a4.2 4.2 0 0 0-.623.083c-.086.017-.17.04-.255.062c-.085.022-.188.058-.287.092a3.94 3.94 0 0 0-.536.232a3.672 3.672 0 0 0-.228.125a3.834 3.834 0 0 0-.313.213c-.102.077-.182.152-.273.234c-.091.082-.165.141-.241.225a3.85 3.85 0 0 0-.411.532C8.777 4 8.725 4 8.68 3.985a4.713 4.713 0 0 0-.542-.126c-.086-.016-.169-.035-.258-.047A6.686 6.686 0 0 0 7 3.751h-.008a4.31 4.31 0 0 0-4.148 4.5v3.172c.001.213.02.425.054.635v.2c-.028 4.815-.067 11.411 3.911 15.413c2.16 2.167 5.251 3.267 9.191 3.267c9.578 0 13.44-7.088 13.844-13.178c.03-.19.045-.384.046-.577l.019-.533c.003-.106.004-.216.005-.33ZM27.078 5.438v4.279A8.339 8.339 0 0 0 22.731 8.6c-.015-.749-.028-1.626-.028-2.493c-.003-.41.022-.82.076-1.226l.036-.194c.046-.285.133-.562.257-.823c.018-.034.038-.063.057-.094a1.107 1.107 0 0 1 .51-.456c.047-.022.096-.04.146-.056a1.71 1.71 0 0 1 .223-.05l.048-.007c.223-.024.448-.035.673-.031a2.384 2.384 0 0 1 2.349 2.268ZM10 10.927V7.262a4.914 4.914 0 0 1 .214-1.544v-.015c.055-.163.126-.321.211-.471c.033-.056.068-.11.107-.163a2.012 2.012 0 0 1 .291-.346c.05-.048.075-.064.113-.094c.18-.141.382-.25.6-.318c.042-.013.085-.027.127-.036c.042-.009.086-.02.127-.027c.079-.015.159-.024.239-.029c.74-.049 1.47.183 2.047.649a7.901 7.901 0 0 0-.178 1.649v4.036c.003.443.037.886.102 1.325c.02.462-.13.915-.42 1.275a2.125 2.125 0 0 1-1.539.456A2.436 2.436 0 0 1 10 10.927Zm5.909-.281V6.517a5.5 5.5 0 0 1 .234-1.686c.027-.082.058-.154.089-.228a2.685 2.685 0 0 1 .286-.55c.048-.069.1-.129.146-.189c.056-.07.116-.137.179-.2c.026-.025.054-.043.081-.066c.143-.122.302-.225.471-.306c.03-.014.061-.033.091-.045c.072-.03.142-.053.211-.075c.053-.015.106-.031.157-.043c.051-.012.1-.024.153-.033c.1-.016.2-.029.288-.034c.21 0 .42.02.627.062c.278.058.544.162.788.308c.054.032.117.058.167.092c.398.278.717.655.923 1.095c-.07.494-.103.992-.1 1.49c0 .89.013 1.789.028 2.555c-2.361.202-3.946.855-4.819 1.982ZM4.844 8.25a2.323 2.323 0 0 1 2.187-2.5a3.98 3.98 0 0 1 .87.091a.11.11 0 0 1 .053.009c.063.015.106.047.165.066c-.08.444-.12.895-.119 1.346v3.665a5.116 5.116 0 0 0 .559 2.348a3.046 3.046 0 0 1-1.528.334a2.416 2.416 0 0 1-2.187-2.187V8.25Zm23.018 9.235l-.011.1C27.168 28.391 17.859 28.938 16 28.938c-3.436 0-5.977-.876-7.769-2.678c-2.753-2.77-3.248-7.322-3.322-11.326a4.32 4.32 0 0 0 2.122.675a4.781 4.781 0 0 0 2.818-.769a3.707 3.707 0 0 0 2.188.769A4 4 0 0 0 15 14.559c.089-.095.171-.195.248-.3c.23.814.68 1.549 1.3 2.124a15.71 15.71 0 0 0-6.8 4.424a1 1 0 0 0 1.48 1.346a13.879 13.879 0 0 1 10.087-4.576h.437v3.194a1 1 0 0 0 2 0v-3.37a1.976 1.976 0 0 0-.446-1.243a.974.974 0 0 0-.5-.448a1.981 1.981 0 0 0-1.056-.309h-2.688a2.2 2.2 0 0 1-1.968-2.094c0-.95 0-2.718 5.39-2.718a5.626 5.626 0 0 1 4.2 1.365c.283.304.513.653.682 1.032c.035.074.076.145.106.222c.048.118.082.242.121.364c.073.23.131.463.176.7l.029.145c.027.161.046.322.063.483c0 .048.011.1.016.146c.014.157.023.313.03.466l.006.157c0 .144.006.286.006.424v.218c0 .107 0 .214-.006.315c0 .163-.011.323-.017.468v.042a2.128 2.128 0 0 1-.034.349Z"/>
        </symbol>
        <symbol id="ear" viewBox="0 0 24 24">
            <<path fill="currentColor" d="M12 8a1 1 0 0 1 1 1a1 1 0 0 0 2 0a3 3 0 1 0-5.018 2.22c.01.01.162.17.194.216a.988.988 0 0 1 0 1.119a1 1 0 1 0 1.648 1.13a2.983 2.983 0 0 0-.005-3.388a7.124 7.124 0 0 0-.49-.557a1.055 1.055 0 0 1-.16-.181A1 1 0 0 1 12 8Zm0-6a7 7 0 0 0-6.762 8.812a1 1 0 0 0 1.932-.518A5 5 0 1 1 17 9a5.114 5.114 0 0 1-.705 2.567L12.73 19A2.005 2.005 0 0 1 11 20a2.027 2.027 0 0 1-2-2a1.992 1.992 0 0 1 .269-.999a1 1 0 0 0-1.733-1.002a3.999 3.999 0 1 0 6.963 3.934l3.563-7.433A7 7 0 0 0 12 2Z"/>
        </symbol>
        <symbol id="detail" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5h8m-8 4h5m-5 6h8m-8 4h5M3 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1zm0 10a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1z"/>
        </symbol>
    </svg>
    {{-- End Of Icon --}}

    <main class="d-flex">
        {{-- Sidebar --}}
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark sidebar" style="width: 25vw;">
            <div class="d-flex flex-column align-items-center text-white text-decoration-none">
                <img id="img-cecil" src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle shadow-3-strong" alt="cecil" style="width: 100px">
                <span class="fs-4">Cecilia Audrey Herli</span>
                <span class="fw-light"><svg class="bi me-2" width="14" height="14"><use xlink:href="#location"/></svg>Indonesia</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"> 
                    <div class="rounded d-flex flex-row profile-nav {{ Request::url() == url('/profile') ? 'active' : '' }}">
                        <a href="/profile" class="nav-link text-white fw-bold link-body-emphasis" style="width: 85%">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                            Profile
                        </a>
                        <div class="py-1 ">
                            <button type="button" class="btn btn-outline-light dropdown-toggle" aria-current="page" data-bs-toggle="collapse" data-bs-target="#profile-collapse" aria-expanded="true"></button>
                        </div>
                    </div>
                    <div class="collapse show" id="profile-collapse">
                        <ul class="btn-toggle-nav list-unstyled ms-3 fw-light pb-1 lh-sm small">
                            <li><a href="/profile#description" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Description</a></li>
                            <li><a href="/profile#motto" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Motto</a></li>
                            <li><a href="/profile#personality" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Personality</a></li>
                            <li><a href="/profile#interest" class="link-body-emphasis d-inline-flex text-white text-decoration-none rounded" style="width: 92%">Interest</a></li>
                        </ul>
                    </div>
                </li>
                <li  class="nav-item btn-nav">
                    <a href="/education" class="nav-link text-white fw-bold link-body-emphasis {{ Request::url() == url('/education') ? 'active' : '' }}">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#education"/></svg>
                        Education
                    </a>
                </li>
                <li  class="nav-item btn-nav">
                    <a href="/skills" class="nav-link text-white fw-bold link-body-emphasis {{ Request::url() == url('/skills') ? 'active' : '' }}">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#skill"/></svg>
                        Skills
                    </a>
                </li>
                <li  class="nav-item btn-nav">
                    <a href="/contact" class="nav-link text-white fw-bold link-body-emphasis {{ Request::url() == url('/contact') ? 'active' : '' }}">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#contact"/></svg>
                        Contact
                    </a>
                </li>
            </ul>
        </div>
        {{-- End Of Sidebar --}}
      
        {{-- <div class="b-divider b-example-vr"></div> --}}

        <div class="d-flex flex-column align-items-center content">
            {{-- Header --}}
            <div class="container mt-1">
                <header class="py-3 mb-4 border-bottom">
                    <div class="container d-flex flex-wrap justify-content-center">
                        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                            <span class="fs-4 text-white">Skills</span>
                        </a>
                    </div>
                </header>
            </div>
            {{-- End Of Header --}}
            
            {{-- Content --}}
            <div class="d-flex flex-column skill align-items-center">
                <div class="container content-skill rounded-3 px-4 py-5" id="icon-grid">
                    <h2 class="pb-2 border-bottom ps-1">Hard Skills</h2>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-3 ps-1">
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2em" height="2em"><use xlink:href="#C"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">C</h3>
                        </div>
                      </div>
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2em" height="2em"><use xlink:href="#HTML"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">HTML</h3>
                        </div>
                      </div>
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2em" height="2em"><use xlink:href="#CSS"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">CSS</h3>
                        </div>
                      </div>
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2em" height="2em"><use xlink:href="#JS"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">Javascript</h3>
                        </div>
                      </div>
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2em" height="2em"><use xlink:href="#java"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">Java</h3>
                        </div>
                      </div>
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2em" height="2em"><use xlink:href="#python"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">Python</h3>
                        </div>
                      </div>
                      <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="2.25em" height="2.25em"><use xlink:href="#mysql"/></svg>
                        <div>
                          <h3 class="fw-normal mb-0 fs-6">MySQL</h3>
                        </div>
                      </div>
                    </div>
                </div>
                <hr>
                <div class="container content-skill rounded-3 px-4 py-5" id="icon-grid">
                    <h2 class="pb-2 border-bottom">Soft Skills</h2>
                    <div class="row g-4 pt-5 pb-5 row-cols-1 row-cols-lg-3 align-items-center">
                        <div class="feature col m-auto">
                          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em"><use xlink:href="#time"/></svg>
                          </div>
                          <p class="fw-normal fs-6">Ability to meet deadline</p>
                        </div>
                        <div class="feature col m-auto">
                          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em"><use xlink:href="#self"/></svg>
                          </div>
                          <p class="fw-normal fs-6">Self-disciplined</p>
                        </div>
                        <div class="feature col m-auto">
                          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                            <svg class="bi" width="1em" height="1em"><use xlink:href="#motivate"/></svg>
                          </div>
                          <p class="fw-normal fs-6">Self-motivated</p>
                        </div>
                      </div>
                      <div class="row g-3 pb-2 row-cols-1 row-cols-lg-3 align-items-center">
                          <div class="feature col m-auto">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                              <svg class="bi" width="1em" height="1em"><use xlink:href="#detail"/></svg>
                            </div>
                            <p class="fw-normal fs-6">Detail-oriented</p>
                          </div>
                          <div class="feature col m-auto">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                              <svg class="bi" width="1em" height="1em"><use xlink:href="#ear"/></svg>
                            </div>
                            <p class="fw-normal fs-6">Active Listening</p>
                          </div>
                        </div>
                      </div>
            </div>
            {{-- End of Content --}}

            {{-- Footer --}}
            <div class="container pt-3">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                  <div class="col-md-4 d-flex align-items-center">
                    <span class="mb-3 mb-md-0 text-white">&copy; 2023 Cecil's Profile</span>
                  </div>
              
                  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-white" href="/contact"><svg class="bi" width="28" height="28"><use xlink:href="#email"/></svg></a></li>
                    <li class="ms-3"><a class="text-white" href="/contact"><svg class="bi" width="28" height="28"><use xlink:href="#WA"/></svg></a></li>
                    <li class="ms-3"><a class="text-white" href="/contact"><svg class="bi" width="28" height="28"><use xlink:href="#line"/></svg></a></li>
                    <li class="ms-3"><a class="text-white" href="/contact"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                  </ul>
                </footer>
            </div>
            {{-- End of Footer --}}
        </div>

    </main>



    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/sidebar.js"></script>
</body>
</html>