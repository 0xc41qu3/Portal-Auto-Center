<?php
/**
* VERFIFICA SE A VARIÁVEL $dados_cadastro EXISTE. OBS.:ESSA VARIÁVEL FOI CRIADA NA CONTROLLER:Parceiro_class.
*/

require_once("modulo.php");

session_start();

$conexao=mysql_connect('localhost', 'root', 'bcd127');

mysql_select_db('db_auto_center');

    //CRIANDO AS VARIÁVEIS PADRÕES LOCAIS.
    $nome_fantasia = null;
    $razao_social = null;
    $cnpj = null;
    $id_endereco = null;
    $socorrista = null;
    $email = null;
    $telefone = null;
    $foto_perfil = null;
    $celular = null;
    $id_usuario = null;
    $id_plano_contratacao = null;
    $btnSalvar="Salvar";

 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/modal_cadastro_parceiro.css">
    <script src="js/util.js"></script>
  </head>
  <body>
  <form id="frmcadparceiro" name="frmcadparceiro" method="POST" enctype="multipart/form-data">
    <div class="container_principal_m_cp">
      <div class="container_titulo_parceiro">
        <div class="item_titulo_parceiro align_center float_left titulo bg_vermelho preenche_3">
          Cadastro Parceiro
        </div>
        <div class="container_btn_sair_mp float_left negrito">
          <a class="btn_x fs_20 txt_preto" href="cliente_parceiro.php?page=cliente_parceiro">X</a>
        </div>
      </div>
      <div class="container_lado_esquerdo float_left bg_branco">
        <!-- IMAGEM -->
        <div class="container_img_parceiro margem_t_20">
          <label for="btn_img_parceiro">
            <div class="item_img_parceiro centro_lr borda_preta_1">

            </div>
            <input class="display_none" required id="btn_img_parceiro" type="file" name="btn_img_parceiro" value="<?php echo($foto_perfil); ?>">
          </label>
        </div>

          <div class="item_contendo_inputs">
            <!-- INPUT NOME FANTASIA -->
            <div class="segura_input_p">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Nome Fantasia" type="text" name="txt_nome" value="<?php echo($nome_fantasia); ?>">
            </div>

            <!-- INPUT RAZÃO SOCIAL -->
            <div class="segura_input_p">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Razão Social" type="text" name="txt_razao" value="<?php echo($razao_social); ?>">
            </div>

            <!-- INPUT CNPJ -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Cnpj" type="text" name="txt_cnpj" value="<?php echo($cnpj); ?>">
            </div>

            <!-- INPUT EMAIL -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Email" type="text" name="txt_email" value="<?php echo($email); ?>">
            </div>

            <!-- INPUT CELULAR -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Celular" type="text" name="txt_celular" value="<?php echo($celular); ?>">
            </div>

            <!-- INPUT TELEFONE -->
            <div class="segura_input_p  float_left">
              <input class="input_text_p txt_preto margem_t_5" placeholder="Telefone" type="text" name="txt_telefone" value="<?php echo($telefone); ?>">
            </div>

            <!-- TITULO ENDEREÇO -->
            <div class="titulo_form_p">
              <div class="item_titulo_form_p titulo margem_t_10 float_left">
                Endereço
              </div>
            </div>

            <!-- INPUT CEP -->
            <div class="segura_input_p float_left">
              <input id="txt_cep" class="input_text_p txt_preto margem_t_5" placeholder="Cep" type="text" name="txt_cep" value="">
            </div>

            <!-- INPUT RUA -->
            <div class="segura_input_p float_left margem_t_5">
              <input id="txt_rua" class="input_text_p txt_preto margem_t_5" placeholder="Rua" type="text" name="txt_rua" value="">
            </div>

            <!-- INPUT NUMERO -->
            <div class="segura_input_p float_left">
              <input id="txt_numero" class="input_text_p txt_preto margem_t_5" placeholder="Número" type="text" name="txt_numero" value="">
            </div>

            <!-- INPUT CIDADE -->
            <div class="segura_input_p float_left">
              <input id="txt_cidade" class="input_text_p txt_preto margem_t_5" placeholder="Cidade" type="text" name="txt_cidade" value="">
            </div>

            <!-- COMBOBOX ESTADO -->
            <div class="segura_input_p float_left">
              <select name="sltEndereco"  class="color">
                <?php
                if($id_estado== ""){
                    $id_estado = 0;
                    ?>
                     <option>Selecione</option>
                  <?php
                }else{
                    ?>
            <option value="<?php echo($id_estado); ?>">
                <?php echo($id_estado);?></option>
            <?php

                }
                $sql = "SELECT id_estado, estado as nome_estado FROM tbl_estado Where id_estado <> ".$id_estado;
                $select=mysql_query($sql);

               while($rsEstado = mysql_fetch_array($select)){
                   ?>

                <option value="<?php echo($rsEstado['id_estado']); ?>">
                <?php echo($rsEstado['nome_estado']); ?> </option>

            <?php
               }
            ?>
          </select>
              <!-- <input id="txt_estado" class="input_text_p txt_preto margem_t_5" placeholder="Estado" type="text" name="txt_estado" value=""> -->
            </div>

            <!-- INPUT BAIRRO -->
            <div class="segura_input_p float_left">
              <input id="txt_bairro" class="input_text_p txt_preto margem_t_5" placeholder="Bairro" type="text" name="txt_bairro" value="">
            </div>

            <!-- INPUT COMPLEMENTO -->
            <div class="segura_input_p float_left">
              <input id="txt_complemento" class="input_text_p txt_preto margem_t_5" placeholder="Complemento" type="text" name="txt_complemento" value="">
            </div>

            <!-- INPUT LOGRADOURO -->
            <div class="segura_input_p float_left">
              <input id="txt_logradouro" class="input_text_p txt_preto margem_t_5" placeholder="Logradouro" type="text" name="txt_logradouro" value="">
            </div>

            <!-- TITULO LOGIN -->
            <div class="titulo_form_p">
              <div class="item_titulo_form_p margem_t_10 titulo float_left">
                Login
              </div>
            </div>
            <!-- INPUT USER -->
            <div class="segura_input_p float_left margem_t_5">
              <input id="txt_use" class="input_text_p txt_preto margem_t_5" placeholder="Usuário" type="text" name="txt_use" value="">
            </div>

            <!-- INPUT SENHA -->
            <div class="segura_input_p float_left">
              <input id="txt_senha" class="input_text_p txt_preto margem_t_5" placeholder="Senha" type="password" name="txt_senha" value="">
            </div>
          </div>
        </form>
      </div>

      <!-- LADO DIREITO -->
      <div class="container_lado_direito float_left bg_branco">
        <div class="container_planos float_right">
          <!-- TITULO PLANOS -->
          <div class="titulo_planos margem_t_30">
            <div class="item_titulo_planos preenche_5 titulo">
              Meu Plano
            </div>
          </div>

          <!-- DIV SELECT -->
          <div class="container_select margem_t_10">
            <select name="sltPlano"  class="color">
              <?php
              if($id_plano_contratacao== ""){
                  $id_plano_contratacao = 0;
                  ?>
                   <option>Selecione</option>
                <?php
              }else{
                  ?>
          <option value="<?php echo($id_plano_contratacao); ?>">
              <?php echo($id_plano_contratacao);?></option>
          <?php

              }
              $sql = "SELECT id_plano_contratacao, plano as nome_plano FROM tbl_plano_contratacao Where id_plano_contratacao <> ".$id_plano_contratacao;
              $select=mysql_query($sql);

             while($rsPlano = mysql_fetch_array($select)){
                 ?>

              <option value="<?php echo($rsPlano['id_plano_contratacao']); ?>">
              <?php echo($rsPlano['nome_plano']); ?> </option>

          <?php
             }
          ?>
        </select>
          </div>

          <!-- DESCRICAO PLANOS -->
          <div class="container_desc_planos margem_t_30 titulo">
            <div class="item_desc_planos preenche_5">
              Descrição
            </div>
          </div>
          <!-- PLANO 1 -->
          <div class="segura_planos">
            <div class="container_desc_planos margem_t_10 titulo">
              <div class="item_desc_planos fs_25">
                Plano 1
              </div>
            </div>
            <!-- TEXTO -->
            <div class="container_texto_planos">
              <div class="item_texto_planos">
                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>
            </div>
            <div class="divisor float_left">

            </div>
            <!-- PLANO 2 -->
            <div class="container_desc_planos margem_t_20 titulo">
              <div class="item_desc_planos fs_25">
                Plano 2
              </div>
            </div>
            <!-- TEXTO -->
            <div class="container_texto_planos">
              <div class="item_texto_planos">
                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>
            </div>

            <div class="container_desc_planos margem_t_20 titulo">
              <div class="item_desc_planos fs_25">
                Plano 3
              </div>
            </div>
            <!-- TEXTO -->
            <div class="container_texto_planos">
              <div class="item_texto_planos">
                <p class="justificado">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="segura_bt_p float_left">
        <input class="input_submit margem_t_5 sombra_preta_b_15" type="submit" name="btn_salvar" value="Salvar">
      </div>
    </div>
  </form>
  </body>
</html>
