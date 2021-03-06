<?php
if (!isset($resolution_name)) {
    $resolution_name = '';
}
if (!isset($resolution_desc)) {
    $resolution_desc = '';
}
if (!isset($sort_order)) {
    $sort_order = '';
}
if (!isset($resolution_id)) {
    $resolution_id = '';
}
?>
<script type="text/javascript" language="JavaScript">
    var nameString = '<?php echo translate("Please enter a name"); ?>';
    var descString = '<?php echo translate("Please enter a description"); ?>';

    function checkForm(frm) {
        if (frm.resolution_name.value == '') {
            alert(nameString);
            frm.resolution_name.focus();
            return false;
        }
        if (frm.resolution_desc.value == '') {
            alert(descString);
            frm.resolution_desc.focus();
            return false;
        }
        return true;
    }
</script>
<b><?php echo $page_title; ?>&nbsp;</b> 
<hr size="1">
<form method="post" onsubmit="return checkForm(this)">
    <table border='0'>
        <?php if ($error) { ?>
            <tr>
                <td colspan="2" class="error">
                    <?php echo $error; ?>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td align="right" valign="top">
                <?php echo translate("Name"); ?>:
            </td>
            <td>
                <input type="text" size="20" maxlength="40" name="resolution_name" value="<?php echo stripslashes(htmlspecialchars($resolution_name)); ?>">
            </td>
        </tr>
        <tr>
            <td align="right" valign="top">
                <?php echo translate("Description"); ?>:
            </td>
            <td>
                <textarea name="resolution_desc" cols="20" rows="5">
                    <?php echo stripslashes(htmlspecialchars($resolution_desc)); ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td align="right" valign="top">
                <?php echo translate("Sort Order"); ?>:
            </td>
            <td>
                <input type="text" size="3" maxlength="3" name="sort_order" value="<?php echo $sort_order; ?>">
            </td>
        </tr>
        <tr>
            <td align="right" valign="top">
                &nbsp;
            </td>
            <td>
                <input type='submit' name='submit' value='<?php echo translate("Submit"); ?>'>
                <input type="hidden" name="resolution_id" value="<?php echo $resolution_id; ?>"> 
                <input type="hidden" name="use_js" value="<?php echo $useJs; ?>">
                <input type="hidden" name="op" value="save"> 
            </td>
        </tr>
    </table>
</form>
