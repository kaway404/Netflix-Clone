<?php
if(isset($_GET['login'])){
?>
<script type="text/javascript" src="/app/scripts/login.js"></script>
<?php } elseif(isset($_GET['register'])){?>
<script type="text/javascript" src="/app/scripts/registro.js"></script>
<?php }?>