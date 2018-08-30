
{if strlen($fields.clave.value) <= 0}
{assign var="value" value=$fields.clave.default_value }
{else}
{assign var="value" value=$fields.clave.value }
{/if}  
<input type='text' name='{$fields.clave.name}' 
    id='{$fields.clave.name}' size='30' 
    maxlength='255' 
    value='{$value}' title='Clave'  tabindex='1'      >