<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr">

<head>
{include file='components/header.tpl' title="login process"}
</head>

<body>

<p>
{if '' != $login_info.user}
Hello, {$login_info.user}
{else}
Login failed
{/if}
</p>

</body>

</html>
