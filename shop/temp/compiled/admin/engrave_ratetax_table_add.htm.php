<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ --><?php echo $this->fetch('engrave_pageheader.htm'); ?><div class="main-div"><form method="post" action="engrave_ratetax_table.php" name="theForm" enctype="multipart/form-data" onsubmit="return validate()"><table cellspacing="1" cellpadding="3" width="100%">  <tr>    <td class="label"><?php echo $this->_var['lang']['RateName']; ?></td>    <td><input type="text" name="RateName" maxlength="20" value="<?php echo $this->_var['rate']['rate_name']; ?>" /></td>  </tr>  <tr>    <td class="label"><?php echo $this->_var['lang']['RateNo']; ?></td>    <td><input type="text" name="RateNo" maxlength="20" value="<?php echo $this->_var['rate']['rate_no']; ?>" /></td>  </tr>  <tr>    <td class="label"><?php echo $this->_var['lang']['RateDescription']; ?></td>    <td><textarea name="RateDescription" cols="40" rows="5"><?php echo htmlspecialchars($this->_var['rate']['rate_description']); ?></textarea></td>  </tr>  <tr>    <td class="label"><?php echo $this->_var['lang']['RateTax']; ?></td>    <td><input type="text" name="RateTax" maxlength="10" value="<?php echo $this->_var['rate']['rate_tax']; ?>" />&nbsp;&nbsp;<span style="color:red;"><?php echo $this->_var['lang']['ratetip']; ?> 基最多保留两位小数</span></td>  </tr>  <tr>    <td colspan="2" align="center"><br />      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />      <input type="button" name="reset" onclick="history.go(-1)" value="<?php echo $this->_var['lang']['back']; ?>" class="button" />      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />      <input type="hidden" name="id" value="<?php echo $this->_var['rate']['rate_id']; ?>" />    </td>  </tr></table></form></div><?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?><script language="JavaScript"><!--document.forms['theForm'].elements['RateName'].focus();onload = function(){// 开始检查订单    startCheckOrder();}/** * 检查表单输入的数据 */function validate(){    validator = new Validator("theForm");    validator.required("RateName",  ratename_notnull);    var obj = document.forms['theForm'].elements['RateTax'];    obj.value = parseFloat(Utils.trim(obj.value)).toFixed(2);    if(!(obj.value>=0 && obj.value<=1))    {validator.isFloat("RateTax",import_ratetax_error,1);    	validator.gt("RateTax",1,import_ratetax_range);}    return validator.passed();}//--></script><?php echo $this->fetch('engrave_pagefooter.htm'); ?>