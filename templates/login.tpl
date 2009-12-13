<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">

<head>
{include file='components/header.tpl' title="login"}
</head>

<body>

<p>
Please enter user name and password.
</p>

<p>
<form action="login.php" method="post">
<table>
 <tr>
  <th>name</th>
  <td><input type="text" name="user" /></td>
 </tr>
 <tr>
  <th>pass</th>
  <td><input type="text" name="pass" /></td>
 </tr>
 <tr>
  <td colspan="2"><input type="submit"></td>
 </tr>
</table>
</form>
</p>

</body>

</html>
