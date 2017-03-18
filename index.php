<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        function validateForm(){
            if(document.testform.ozcode.value == ""){
                alert("Orizin zip Code is Required field");
                document.testform.ozcode.focus();
                return false;
            }
            if(document.testform.dscode.value == ""){
                alert("Destination Code is Required field");
                document.testform.dscode.focus();
                return false;
            }
            if(document.testform.wght.value == ""){
                alert("Weight is Required field");
                document.testform.wght.focus();
                return false;
            }
            if(document.testform.cog.value == ""){
                alert("Cost of Goods is Required field");
                document.testform.cog.focus();
                return false;
            }
            if(document.testform.wdth.value == ""){
                alert("Width is Required field");
                document.testform.wdth.focus();
                return false;
            }
            if(document.testform.hgt.value == ""){
                alert("Height is Required field");
                document.testform.hgt.focus();
                return false;
            }
            if(document.testform.lnt.value == ""){
                alert("Length is Required field");
                document.testform.lnt.focus();
                return false;
            }


            $(document).ready(function(){

               $("#testform input").each(function() {
                data['ozcode'] = $("#ozcode").val();
                data['dscode'] = $("#dscode").val();
                data['wght'] = $("#wght").val();
                data['cog'] = $("#cog").val();
                data['wdth'] = $("#wdth").val();
                data['hgt'] = $("#hgt").val();
                data['lnt'] = $("#lnt").val()
            });
      
            var dataString = data;   
            
            var jsonString = JSON.stringify(dataString);

            $.ajax({
                    type: "POST",
                    url: "index.php",
                     //data: $("#testform").serialize(),
                     data: {data : jsonString}, 
                    cache: false,

                    success: function(data){
                        alert(data);
                    },
                    error: function(data) {
                        alert("Error");
                    }

                });

            });
        }
    </script>
</head>
<body>
    <form name="testform" id="testform">
        <table align="center">
            <tr>
                <td>Orizin Zip Code :</td>
                <td><input type ="text" name="ozcode" id="ozcode" /></td>
            </tr>
            <tr>
                <td>Destination Zip Code :</td> 
                <td><input type="text" name="dscode" id="dscode" /></td>
            </tr>
            <tr>
                <td>Weight :</td>
                <td><input type="text" name="wght" id="wght" /></td>
            </tr>
            <tr>
                <td>Cost Of Goods :</td>
                <td><input type="text" name="cog" id="cog" /></td>
            </tr>
            <tr>
                <td>Width :</td>
                <td><input type="text" name="wdth" id="wdth" /></td>
            </tr>
            <tr>
                <td>Height :</td>
                <td><input type="text" name="hgt" id="hgt" /></td>
            </tr>
            <tr>
                <td>Length :</td>
                <td><input type="text" name="lnt" id="lnt" /></td>
            </tr>
            <tr>
                <td><input colspan="2" type="button" name="frmsub" id="frmsub" value="Calculate" onClick="return validateForm();"></td>
            </tr>
        </table>
    </form>
</body>

</html>