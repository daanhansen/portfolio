<?php
/* Smarty version 3.1.32, created on 2018-10-11 12:00:16
  from 'C:\Users\daanh\Desktop\Bureaublad\Daan Hansen\private\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbf1f30b19fe8_91014206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73c8d45c3403f17074f174095bed6c3ee4247327' => 
    array (
      0 => 'C:\\Users\\daanh\\Desktop\\Bureaublad\\Daan Hansen\\private\\views\\news.tpl',
      1 => 1531383223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbf1f30b19fe8_91014206 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" href="../public/css/allpage.css">
<link rel="stylesheet" href="../public/css/news.css">

<h1 id="title_of_page">News</h1> <br>

<ul id="artul">


    <div class="contentholder">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <div class="newsitem">
            <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value[2];?>
" class="artimg">
            <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</ul>




<div id="pagination">
        <div class="pagecounter">
            <?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
                <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
"><<</a>
            <?php }?>
            <p><?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
                <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">>></a>
            <?php }?>
        </div>
</div><?php }
}
