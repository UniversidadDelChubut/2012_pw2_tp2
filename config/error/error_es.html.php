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
  <h1>Error del servidor</h1>
  <h5>El servidor devolvió un error: "<?php echo $code ?> <?php echo $text ?>".</h5>

  <dl>
    <dt>Ha ocurrido un error imprevisto y el servidor no pudo completar la operación.
        Por lo general, suele tratarse de una situación que requiere ser corregida.</dt>
    <dd>Si el error persiste, por favor notifique al administrador del sistema.</dd>

    <dt>Mientras tanto, Ud. puede:</dt>
    <dd>
      <ul>
        <li><a href="javascript:history.back();">Regresar</a> a la página anterior</li>
        <li>Ir a la <a href="<?php echo $path;?>">Página de inicio</a> y comenzar de nuevo.</li>
      </ul>
    </dd>
  </dl>
</body>
</html>
