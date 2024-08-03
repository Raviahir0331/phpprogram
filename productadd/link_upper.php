<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        functio uppercase(){
            var xmlhttp;
            if(window.XMLHttpRequest()){
                xmlhttp = new XMLHttpRequest();

            }
            else{
                xmlhttp = new ActiveXobject('Microsoft.XMLHTTP');
            }
            let username = document.getElementById('username').value;
           xmlhttp.open('POST',uppercase.php?'username =' + username return, true);
           xmlhttp.onreadychangestate() = function(){
              if(xmlhttp.readystate == 4 && xmlhttp.status == 200){
                document.getElementById('info').innerhtml = xmlhttp.responseText;
              }
              else{

              }
           }
           xmlhttp.send();
        }
    </script>
</head>
<body>
    <form action="uppercase.php">
        <table>
            <tr>
                username : <input type="text" value = "" name = "username" id = "username" onkeyup = "uppercase()"/>
            </tr>
            <tr>
                <button onClick = "uppercase()">UPPERCASE</button>
            </tr>
            <tr><h3>
            <div id  =" info"></div></h3>
            </tr>
        </table>
    </form>
</body>
</html>