<?php /* Smarty version 2.6.29, created on 2018-08-29 23:57:59
         compiled from themes%5CSuiteP%5Cinclude/ListView/ListViewSelectObjects.tpl */ ?>
<div class="selectedRecords label hidden"><?php echo $this->_tpl_vars['APP']['LBL_LISTVIEW_SELECTED_OBJECTS']; ?>
</div><div class="selectedRecords value hidden"><?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
</div>
<input type='hidden' id='selectCountTop' name='selectCount[]' value='<?php echo $this->_tpl_vars['TOTAL_ITEMS_SELECTED']; ?>
' />

<script>
<?php echo '
    $(document).ready(function () {
        function update_selectedRecordsTopValue() {
            var selectedNum = sugarListView.get_num_selected();
            if(!selectedNum) {
                $(\'.selectedRecords\').addClass(\'hidden\');
            }
            else {
                $(\'.selectedRecords\').removeClass(\'hidden\');
            }
            $(\'.selectedRecords.value\').html(selectedNum);
        }
        setInterval(update_selectedRecordsTopValue, 100);
    });
'; ?>

</script>