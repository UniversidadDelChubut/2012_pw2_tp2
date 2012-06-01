<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php $path = sfConfig::get('sf_relative_url_root', preg_replace('#/[^/]+\.php5?$#', '', isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : (isset($_SERVER['ORIG_SCRIPT_NAME']) ? $_SERVER['ORIG_SCRIPT_NAME'] : ''))) ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="es" />
<title>No disponible</title>

<link rel="shortcut icon" href="<?php echo $path ?>/favicon.ico" />

</head>
<body>
  <h1>Sistema bajo mantenimiento</h1>
  <h5>Intente nuevamente más tarde...</h5>
  <dl>
    <dt>El administrador del sistema ha deshabilitado temporalmente el acceso al mismo, para realizar alguna corrección o actualización.</dt>
    <dd>Por favor, <a href="javascript:window.location.reload();">intente nuevamente</a> la operación dentro de unos minutos.</dd>
  </dl>
</body>
</html>