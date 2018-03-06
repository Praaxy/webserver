<!DOCTYPE html>
<html>
    <head>
    <title>JQuery Chat</title>
    <style>
        *{ margin: 0; padding: 0; box-sizing: border-box; }
        body { font: 13px Helvetica, Arial; }
        div { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
        div input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
        div button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
        #messages
        { list-style-type: none; margin: 0; padding: 0; }
        #messages li { padding: 5px 10px; }
        #message li:nth-child(odd) { background: #eee; }
    </style>
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
    </head>
    <body>
        <ul id="messages"></ul>
        <div>
            <input id="w" autocomplete="off">
            <button>Envoyer</button>
        </div>
    </body>
    <script>
        $("button").click(function() {
            if($("#w").val() == '')
                return;
            $("#messages").append('<li>'+$("#w").val()+'</li>')
            $("#w").val('')
        })
    </script>
</html>