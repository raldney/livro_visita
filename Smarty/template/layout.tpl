<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo/estilo.css" />
        <title>{$titulo}</title>
    </head>
    <body>

        <div id="banner">

            {html_image file="Smarty/template/img/banner.gif"}
        </div>

        <div id="conteudo">
            {include file="$conteudo"}
        </div>
        <div id="mensagens">
            {include file="$mensagens"}
        </div>

    </body>
</html>