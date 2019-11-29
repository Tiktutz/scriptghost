<!doctype html>
<html>
<head>
</head>

<body>

<div class="form-group">
         
         <ul class="margen_form">
             <li><label>Nome:</label></li>
             <input ID="Nome" class="form_cadastro" name="nome" >
			 
             <li><Label>CPF:</Label></li>
             <input ID="CPF" runat="server" Class="form_cadastro" onkeypress="formataCPF(this)" MaxLength="14" name="cpf">

             <li><Label>Data de nascimento:</Label></li>
             <input ID="Data_nasc" Class="form_cadastro_menor" type="date" MaxLength="10" type="date" name="data_nascimento">

             <li><Label>Genero:</Label></li>
             <select class="form_cadastro_menor" name="genero"></select><br>

             <li><Label>Telefone:</Label></li>
             <input ID="Telefone" Class="form_cadastro_menor" name="telefone" onkeypress="return txtBoxFormat(this, '(99)9999-9999', event);" maxlength="14" />


             <li><Label>Email:</Label></li>
             <input type="email" ID="email" Class="form_cadastro" name="email"/>

             <li><Label>Senha:</Label></li>
             <input ID="Senha" Class="form_cadastro_menor" type="password" onkeypress="Security(this)" name="senha">
			
			 <li><label>Formação Académica:</label></li>
			 <select id="Form_academica" class="form_cadastro" name="Formação_academica"></select>
			 
			 <br/><li><label>Descrição:</label></li>
			 <input id="descricao" class="form_cadastro" type="text"  onKeyUp="updateMask(event)"/>
			 
			 <li><label>Tipo de serviço:</label></li>
			 <select id="T_servico" class="form_cadastro_menor" > </select><br/>
             <!-- Endere�o-->
				
			 <li><br /></li>
             <li><Label>ENDEREÇO</Label></li>
             <li><br /></li>
             <li><Label>CEP:</Label></li>
             <input ID="CEP" class="form_cadastro_menor" onkeypress="formataCEP(this)" name="cep" maxlength="9"/>
             <Button id="Botao_endereco"Class="botao"/>Buscar</button>
             
             <li><Label>Estado:</Label></li>
             <input ID="estado" Class="form_cadastro" name="estado"/>

             <li><Label>Cidade:</Label></li>
             <input ID="Cidade" Class="form_cadastro" name="cidade"/>

             <li><Label>Logradouro:</Label></li>
             <input ID="Logradouro" Class="form_cadastro" name="logradouro"/>

             <li><br /></li>
             <li> <input type="checkbox" ID="Termos" Class="check1 "/>Aceito os termos de Politica e Privacidade</li>
			 <li> <Button ID="Botao_Cadastrar" Class="botao" >Cadastrar</Button></li>
             <li><br /></li>
             <li> <Label ID="Resultado_cadastro" Text=""></Label></li>

		
        </ul>

    </div>
	</body>
</html>