<?php /* Smarty version Smarty-3.1.11, created on 2014-04-18 06:26:40
         compiled from "C:\xampp\htdocs\livro_visita\Smarty\template\cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2296534c6c71335670-86744514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba04585fca912b3cdfffdebe03c87318e65caa0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\livro_visita\\Smarty\\template\\cadastrar.tpl',
      1 => 1397795172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2296534c6c71335670-86744514',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_534c6c7135d6f3_78220137',
  'variables' => 
  array (
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534c6c7135d6f3_78220137')) {function content_534c6c7135d6f3_78220137($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="Smarty/template/estilo.css" />
        <title>Untitled Document</title>
    </head>
    <body>
        <table id="organizador">
            <tr>
                <td  id="texto">
                    <h1><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="cadastrar.php" method="post" id="form-cadastrar"  width="800" align="center" >


                        <label for="Usuario">Usuario:</label>
                        <input type="text"  name="usuario" id="usuario"  />

                        <label for="Email">E-Mail:</label>
                        <input type="text"  name="email" id="email"  />

                        <label for="senha">Senha:</label>
                        <input type="password"  name="senha" id="senha" />       

                        <p><button type="submit" id="enviar" class="buttons" name="enviar" >Enviar</button> </p>


                    </form>
                </td>
            </tr>
        </table>

    </body>
</html>
<?php }} ?>