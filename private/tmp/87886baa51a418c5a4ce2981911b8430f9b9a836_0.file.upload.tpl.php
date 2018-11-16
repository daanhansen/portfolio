<?php
/* Smarty version 3.1.32, created on 2018-07-06 10:12:25
  from 'C:\Users\daanh\Desktop\Bureaublad\Schoolwerk\MyBand1\private\views\upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b3f2469d45147_55813957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87886baa51a418c5a4ce2981911b8430f9b9a836' => 
    array (
      0 => 'C:\\Users\\daanh\\Desktop\\Bureaublad\\Schoolwerk\\MyBand1\\private\\views\\upload.tpl',
      1 => 1530864744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3f2469d45147_55813957 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../public/css/upload.css">

<div class="formholder">
    <div class="formulier">
        <form action="process.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="400000">
            <label>Title:<br><input type="text" name="username" autofocus></label><br>
            <label>Content:<br><textarea name="description" cols="30" rows="10"></textarea></label><br>
            <p>Upload an image: </p><br>
            <input type="file" name="userimage" id="usi"> <br/> <br/>
            <input type="submit" value="Upload article" id="sub">
        </form>
    </div>
</div><?php }
}
