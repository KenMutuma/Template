<?php
/* Smarty version 3.1.31-dev/29, created on 2016-09-30 11:16:15
  from "C:\xampp\htdocs\Temp\views\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31-dev/29',
  'unifunc' => 'content_57ee2d5fc3ea54_98554928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77f4e00a3287e5bf29190a0acf8c5034fff2391e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Temp\\views\\index.tpl',
      1 => 1475226937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57ee2d5fc3ea54_98554928 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\Temp\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '1670157ee2d59e8c315_20817443';
?>

<!--<br>

<table>
	<caption>Test Document</caption>
	<thead>
		<tr>
			<th>Names of people</th>
		</tr>
	</thead>
	<tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, 'p', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
			<td ><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>
</table>-->


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medbook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style type="text/css">
    .table {
      border: 1px solid #000000;
    }
    .table-bordered > thead > tr > th,
    .table-bordered > tbody > tr > th,
    .table-bordered > tfoot > tr > th,
    .table-bordered > thead > tr > td,
    .table-bordered > tbody > tr > td,
    .table-bordered > tfoot > tr > td {
     border: 1px solid #000000;
   }
 </style>
</head>
<body>

  <div class="container" style="display: 1px">
    <h2 align="center" style="color: red"><?php echo $_smarty_tpl->tpl_vars['bill']->value;?>
</h2>
    <p align="center"><img src="data:image/png;base64,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" /></p>  
    <p align="center" flex>
    <span style="color: green"> </span>
        <span class="bill-address"></span>
      </p>    
      <p layout="row" flex class="bill-alt-color">
        <span flex="45" layout="row" layout-align="start end" style="color: green">
          Date: <?php echo smarty_modifier_date_format(time());?>
</span>
          <span flex="50" layout="row" layout-align="end" class="pull-right">
            <span style="color: green">No. <strong class="bill-type" style="color: red">
             </strong></span>
            </span>
          </p>   
          <table class="table table-bordered">
            <thead>
              <tr style="color: red">
                <th>Being payment of:</th></br>
                <th>Units</th></br>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
             <!-- @foreach (($data['data']['charge']) as $charge)-->
            




	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'Qaz', false, 'Id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Id']->value => $_smarty_tpl->tpl_vars['Qaz']->value) {
?>


            
              <tr style="color: red" >
               <td>
                 <?php echo $_smarty_tpl->tpl_vars['Id']->value;?>
 

                
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Qaz']->value, 'desc', false, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value => $_smarty_tpl->tpl_vars['desc']->value) {
?>
                    <tr style="color: red" >
                     <td>

                      <?php echo $_smarty_tpl->tpl_vars['desc']->value;?>


                     </td>
                     
                     </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


               </td>
               
               </tr>
             
             <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

              <tr style="color: red">
                <td colspan="2"><strong>Total </strong></td>
                <td style="text-align:right;min-width:100px;"><strong>1000</strong></td>
              </tr>
            </tbody>
          </table>

          <div layout="column"  style="color: green">
            <div layout="row" flex layout-align="start start" class="md-padding">
              <div flex="60">Received by</div>
              <div flex offset="10"><u><strong>Ken Total Ksh 1000</strong></u></div>
            </div>
            <div layout="row" layout-align="end end" flex>
              <div flex="35" offset="25">Name/Sign</div>
              <div flex offset="10">Cash/Cheque/Mpesa</div>
            </div>
          </div>
        </div>

      </body>
      </html>

<?php }
}
