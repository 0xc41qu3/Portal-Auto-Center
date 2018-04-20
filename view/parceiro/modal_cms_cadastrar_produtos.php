
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/parceiro/modal_cms_cadastrar_produtos.css">
    <link rel="stylesheet" href="../css/padroes.css">
  </head>
  <body>
    <div class="container_conteudo_central_cnp">
      <!-- MENU LATERAL -->
      <div class="container_menu_l_cnp float_left borda_preta_1 margem_l_20">
        <div class="container_img_menu_cnp centro_lr borda_preta_1 margem_t_20">
          <div class="item_img_menu_l_cnp ">

          </div>
        </div>
        <!-- NOME USUÁRIO -->
        <div class="container_nome_usuario_cnp margem_t_10">
          <div class="item_nome_usuario_cnp centro_lr align_center preenche_t_15 fs_18 negrito txt_branco">
            Nome de Usuário
          </div>
        </div>
      </div>
      <!-- PARTE CADASTRO DE VEICULO -->
      <div class="container_principal_cadastrar_produto float_left margem_l_20 borda_preta_1 bg_cinza">

        <div class="container_titulo_cnp borda_preta_1 bg_branco sombra_preta_20 centro_lr">
          <div class="item_titulo_cnp align_center preenche_t_20 fs_25 negrito">
            Cadastrar Novo Produto
          </div>
        </div>

        <form class="container_informacoes margem_t_20 centro_lr borda_preta_1" action="modal_cms_cadastrar_produto.php" method="post">
          <div class="item_form_cadastro sombra_preta_20">

            <!-- INPUT NOME DO PRODUTO -->
            <div class="container_inputs_cnp float_left">
              <div class="item_inputs_cnp centro_lr margem_t_20">
                <input class="input_cnp sombra_preta_20" type="text" name="txt_nome_produto" placeholder="Nome do Produto" value="">
              </div>
              <!-- INPUT QUANTIDADE NA EMBALAGEM -->
              <div class="item_inputs_cnp centro_lr margem_t_20">
                <input class="input_cnp sombra_preta_20" type="text" name="txt_qtd_embalagem" placeholder="Quantidade na Embalagem" value="">
              </div>
              <!-- DIV SELECT -->
              <div class="container_select_cnp margem_t_20 centro_lr">
                <select class="slc_tempo sombra_preta_20" name="slc_planos">
                  <option value="">Tempo de Garantia</option>
                </select>
              </div>
              <!-- INPUT OBSERVACOES -->
              <div class="item_inputs_cnp centro_lr margem_t_20">
                <input class="input_cnp sombra_preta_20" type="text" name="txt_obs" placeholder="Observações" value="">
              </div>
              <!-- INPUT TEXTAREA -->
              <div class="container_textarea_cnp centro_lr margem_t_20">
                <textarea class="textarea_cnp sombra_preta_20" name="txt_textarea" placeholder="Descrição" rows="8" cols="80"></textarea>
              </div>
              <!-- INPUT VALOR PRADUTO -->
              <div class="item_inputs_cnp centro_lr margem_t_20">
                <input class="input_cnp sombra_preta_20" type="text" name="txt_valor_produto" placeholder="Valor do Produto" value="">
              </div>
              <!-- BOTÃO -->
              <div class="container_botao_cnp margem_l_70 margem_t_50 float_left">
                <input class="input_submit_cnp" type="submit" name="btn_salvar_cnp" value="Salvar">
              </div>
              <!-- DELETE -->
              <div class="container_delete_cnp float_left margem_t_50 margem_l_80">
                <div class="item_delete_cnp">
                  <i class="material-icons margem_l_5" style="font-size:40px;">delete</i>
                </div>
              </div>
            </div>
            <!-- PARTE IMAGENS -->
            <div class="container_imagens_cnp float_left margem_l_70 margem_t_20 sombra_preta_20 borda_preta_1 bg_branco">

              <div class="container_item_imagem_cnp margem_t_10 ">
                <div class="item_imagem_cnp centro_lr borda_preta_1">

                </div>
              </div>

              <div class="container_item_imagem_cnp margem_t_20">
                <div class="item_imagem_cnp centro_lr borda_preta_1">

                </div>
              </div>

              <div class="container_item_imagem_cnp margem_t_20">
                <div class="item_imagem_cnp centro_lr borda_preta_1">

                </div>
              </div>

              <div class="container_item_imagem_cnp margem_t_20">
                <div class="item_imagem_cnp centro_lr borda_preta_1">

                </div>
              </div>

              <div class="container_item_imagem_cnp margem_t_20">
                <div class="item_imagem_cnp centro_lr borda_preta_1">

                </div>
              </div>

            </div>
          </div>
        </form>
        <!-- EXIBE PRODUTOS ATIVOS -->
        <div class="container_exibe_produtos float_left">
          <div class="item_exibe_produtos">
            <!-- PRODUTO -->
            <div class="container_produto_exibido margem_t_30 margem_l_30 float_left">
              <div class="img_produto_exibido">

              </div>
              <div class="item_caixa preenche_10 align_center fs_20">
                Preço
              </div>
              <div class="item_caixa preenche_10 align_center fs_20">
                Nome do Produto
              </div>
            </div>
            <!-- PRODUTO -->
            <div class="container_produto_exibido margem_t_30 margem_l_30 float_left">
              <div class="img_produto_exibido">

              </div>
              <div class="item_caixa preenche_10 align_center fs_20">
                Preço
              </div>
              <div class="item_caixa preenche_10 align_center fs_20">
                Nome do Produto
              </div>
            </div>
            <!-- PRODUTO -->
            <div class="container_produto_exibido margem_t_30 margem_l_30 float_left">
              <div class="img_produto_exibido">

              </div>
              <div class="item_caixa preenche_10 align_center fs_20">
                Preço
              </div>
              <div class="item_caixa preenche_10 align_center fs_20">
                Nome do Produto
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
