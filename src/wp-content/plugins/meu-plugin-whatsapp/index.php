<?php

/**
 * Plugin Name: Whatsapp
 * Description: Plugin para abrir o whatsapp
 * Version: 1.0
 * Author: Roberto Enrico
 **/

function function_whatsapp()
{

  $nome = $_POST['nome'];

  $texto_whats = "Olá Meu nome é " . $nome . ". Esse é o meu primeiro contato";

  $msg_whats = str_replace(' ', '%20', $texto_whats);

  $whats_app = "+55 11 9 43358124";
  $action_url = "http://api.whatsapp.com/send?1=pt_BR&phone=$whats_app&text=$msg_whats";

?>


  <?php if (isset($_POST['submit']) && !empty($_POST['nome'])) { ?>
    <script type="text/javascript">
      window.location = "<?php echo $action_url; ?>";
    </script>
  <?php } ?>


  <form action="" method="POST">
    <label for="">Nome:</label>
    <input type="text" name="nome">

    <input type="submit" name="submit" value="Iniciar conversa!">

    </br><?php echo empty($_POST['nome']) ? "Informe seu nome" : ""; ?>

  </form>

<?php
}
add_shortcode('whatsapp', 'function_whatsapp');
