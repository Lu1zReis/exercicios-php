<?php
// Sessão
session_start();
if (isset($_SESSION['mensagem'])) {?>

  <script>
    //mensagem
  window.onload = function(){
    M.toast({html: '<?php  echo $_SESSION['mensagem']; ?>'});
  };
</script>

  <?php
}
//para limpar a mensagem assim que atualizar a página
session_unset();
?>