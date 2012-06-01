<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php $path = sfConfig::get('sf_relative_url_root', preg_replace('#/[^/]+\.php5?$#', '', isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : (isset($_SERVER['ORIG_SCRIPT_NAME']) ? $_SERVER['ORIG_SCRIPT_NAME'] : ''))) ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="es" />
<title>Error</title>

<link rel="shortcut icon" href="<?php echo $path ?>/favicon.ico" />

</head>
<body>
  <h1>Server error</h1>
  <h5>The server returned an error: "<?php echo $code ?> <?php echo $text ?>".</h5>

  <dl>
    <dt>An unexpected error ocurred, and the server cannot perform the requested operation.
        In most cases, it means an issue that needs to be fixed.</dt>
    <dd>If the error persists, please notify the system administrator.</dd>

    <dt>Meanwhile, you can:</dt>
    <dd>
      <ul>
        <li><a href="javascript:history.back();">Go back</a> to the previous page</li>
        <li>Go to the <a href="<?php echo $path;?>">Home Page</a> and start again from there.</li>
      </ul>
    </dd>
  </dl>
</body>
</html>
