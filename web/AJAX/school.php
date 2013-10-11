<html>
<head>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function getdetails(){
    var name = $('#name').val();
    var rno = $('#rno').val();
    $.ajax({
 type: "POST",
 url: "details.php",
 data: {fname:name, id:rno}
 }).done(function( result ) {
        $("#msg").html( " We asked the server about this Name: &quot;" +name +"&quot; and this Role Number: &quot;" +rno +"&quot; " +
            "and obtained this result: &quot;"+result +"&quot;");
    });
}
</script>
</head>
<body>
<table>
<tr>
<td>Your Name:</td>
<td><input type="text" name="name" id="name" /><td>
</tr>
<tr>
<td>Roll Number:</td>
<td><input type="text" name="rno" id="rno" /><td>
</tr>
<tr>
<td></td>
<td><input type="button" name="submit" id="submit" value="submit" onClick = "getdetails()" /></td>
</tr>
</table>
<div id="msg"></div>
</body>
</html>