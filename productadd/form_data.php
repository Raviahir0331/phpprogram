<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type = "text/javascript" language = "javascript">

        function showdata(){
            var xmlhttp;
            if(window.XMLHttpRequest){
                xmlhttp = new XMLHttpRequest();
            }
            else{
                xmlhttp = new ActiveXobject('Microsoft.XMLHTTP');
            }
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            xmlhttp.open('POST',form2.php?'username =  '+ username + 'password = '+ password,true);
            xmlhttp.onreadystatechange = function (){
                if(xmlhttp.readystate =  4 && xmlhttp.status = 200){
                    document.getElementById('infomation').innerhtml = xmlhttp.responseText;
                }
            }
            xmlhttp.send();
        }

       
    </script>
</head>


<form action="form2.php"  onsubmit = "showdata(); return false;">
    <table>
        <tr>
            <td>
                Username : <input type="text" value = "" name = "username" id = "username">
            </td>

        </tr>
        <tr>
            <td>Password : <input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td><input type="submit" name = "submit" value = "sumbit"/></td>
        </tr>
    </table>
</form>
<h2> <div class= "infomation"></div></h2>
<body>
    
</body>
</html>