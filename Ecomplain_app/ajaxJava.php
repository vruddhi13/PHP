

<!DOCTYPE html>
<html lang="en">
<head>
    <script>
      

        function comdet(complain){
            alert(complain);
            var xml = new XMLHttpRequest();
            xml.open("GET","ajaxconnect.php?com="+complain,true);
            xml.send();

            xml.onreadystatechange= function(){
                if(this.readyState == 4 && this.status == 200)
                {
                    document.getElementById("row").innerHTML = this.responseText;
                }
            };

        }

    </script>
</head>
<body>

    <select name="comtitle" onchange="comdet(this.value);">
        <option value="pending">Pending</option>
        <option value="completes">Completes</option>
    </select>
    <div id="row"> </div>
</body>
</html>