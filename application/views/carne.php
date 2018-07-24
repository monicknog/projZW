<?php
$count_quebra_pg = 0;
?>
<!DOCTYPE HTML>
<!-- SPACES 2 -->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="Resource-type" content="document">
        <meta name="Robots" content="all">
        <meta name="Rating" content="general">
        <meta name="author" content="Gabriel Masson">
        <title>Carnê</title>
        <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo base_url('resources/css/style.css'); ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="bto">
            Ao Imprimir o carnê certifique-se se a impressão está ajustada à página
            <br>
            <br>
            <button class="btn-impress" onclick="window.print()">Imprimir</button>
            &nbsp;
            <?php echo "<a href=\"capa.php?endereco={$endereco_empresa}&tel={$tel_empresa}&logo={$logo}\" class=\"btn\" target=\"_blank\">
      Capa do carnê
    </a>"; ?>
            &nbsp;
            <button class="btn" onclick="window.history.back()">Voltar ao formulário</button>
        </div>

        <?php
        $count = 1;
        $ano_vence = $primeiro_ano;
        $mes_vence = $primeiro_mes - 1;

        while ($count <= $qtd) {

            if ($mes_vence == 12) {
                $ano_vence = $ano_vence + 1;
                $mes_vence = 1;
            } else {
                $mes_vence++;
            }

            echo "<!-- PARCELA -->
  <div class=\"parcela\">
    <div class=\"grid\">
      <div class=\"col4\">
        <div class=\"destaca\">
          <table width=\"100%\">
          <tr>
            <td colspan=\"2\">
              <small>Nome do Cliente</small>
              <br>{$nome}
            </td>
            </tr>
            <tr>
              <td>
                <small>Parcela</small>
                <br>{$count} / {$qtd}
              </td>
            <td>
              <small>Valor</small>
              <br>{$valor}
            </td>
            </tr>
            <tr>
              <td colspan=\"2\">
                <small>Vencimento</small>
                <br>{$vence}/{$mes_vence}/{$ano_vence}
                <br><br><br><br>
                </td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col8\">
        <table width=\"100%\">
          <tr>
            <td colspan=\"2\">
              <small>Nome do Cliente</small>
              <br>{$nome}
            </td>
            <td>
              <small>Parcela</small>
              <br>{$count} / {$qtd}
            </td>
            <td>
              <small>Valor</small>
              <br>{$valor}
            </td>
          </tr>
          <tr>
            <td>
              <small>Data do Documento</small>
              <br>{$hoje}
            </td>
            <td>
              <small>Tipo de Documento</small>
              <br>Carnê
            </td>
            <td colspan=\"2\">
              <small>Vencimento</small>
              <br>{$vence}/{$mes_vence}/{$ano_vence}
            </td>
          </tr>
          <tr>
            <td colspan=\"4\">
              <small>Observações</small>
              <br>{$obs}
            </td>
          </tr>
        </table>
        <div class=\"nome\">{$nome_empresa}</div>
      </div>
    </div>
  </div>";

            if (!$count_quebra_pg) {
                $count_quebra_pg = 0;
            } // Preenche Variavel
            $count_quebra_pg++; // contagem de loop
            if ($count_quebra_pg == 4) { // Adiciona quebra a cada 4 loops e zera a variavel
                echo "<div class=\"quebra-pagina\"></div>";
                $count_quebra_pg = 0;
            }

            $count++;
        }
        ?>

    </body>
</html>