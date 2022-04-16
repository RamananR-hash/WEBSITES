<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Vikra Ocean Tech</h3>

<div>
<form method="POST" action="sendtomail.php">
    <label for="fname">Text 1</label>
    <input type="text" id="fname" name="text1">

    <label for="lname">Text 2</label>
    <input type="text" id="lname" name="text2">

    <label for="lname">Text 3</label>
    <input type="text" id="lname" name="text3">

    <label for="lname">Text 4</label>
    <input type="text" id="lname" name="text4">

  
    <input type="submit" name="sendmail" value="Submit">
  </form>
</div>

</body>
</html>