<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/pw3.ico">

    <title>Criar Conta</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/77f3dd62a7.js" crossorigin="anonymous"></script>
</head>

<body cz-shortcut-listen="true" class="bg-secondary">

    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 border bg-white">
                <h1 class="text-center">
                    <a href="index.php" class="text-success">PW3</a>
                </h1>
                <p class="text-center">Crie uma conta gratuita.</p>

                <form action="" method="" id="FormCriaConta">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo" aria-label="nome" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="mail" name="email" id="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" placeholder="Repita a Senha" aria-label="confirmaSenha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group form-check" >
                        <input type="checkbox" name="termos" class="form-check-input" id="termos">
                        <label class="form-check-label" for="exampleCheck1">Aceitar os <a href="#" class="text-success"  data-toggle="modal" data-target="#modalTermos">termos</a></label>
                    </div>

                    <div class="form-group text-right">
                        <button class="btn btn-success">Cadastrar</button>
                    </div>

                    <p>
                        <a href="Login.php" class="text-success">Já tenho uma conta.</a>
                    </p>


                </form>

            </div>
        </div>

    </main><!-- /.container -->

 
<!-- Modal -->
<div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Termos PW 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error neque iure rerum facere exercitationem. Amet fugit quas praesentium. Magni deserunt temporibus reprehenderit voluptas tempore vero reiciendis harum similique? Omnis, ut.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error neque iure rerum facere exercitationem. Amet fugit quas praesentium. Magni deserunt temporibus reprehenderit voluptas tempore vero reiciendis harum similique? Omnis, ut.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="jquery-validation/dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function() {

            $("#FormCriaConta").validate({

                //Regras para Validação
                rules:{
                    nome: 'required',       //Campo Obrigatório

                    email: {
                        required: true,     //Campo Obrigatório
                        email: true         //campo tipo Email
                    },

                    senha:{
                        required: true,     //Campo Obrigatório
                        minlength: 5        //Campo com no mínimo 5 caracteres
                    },

                    confirmaSenha:{
                        required: true,     //Campo Obrigatório
                        minlength: 5,       //Campo com no mínimo 5 caracteres
                        equalTo: "#senha"   //Campo deve ser igual a senha
                    },

                    termos: 'required'      //Campo Obrigatório
                },

                //Mensagem apresentada
                messages:{
                    nome: 'O Campo nome completo é obrigatório',

                    email: {
                        required: 'O Campo E-mail é obrigatório',
                        email: 'Informe um e-mail válido'
                    },

                    senha:{
                        required: 'O Campo senha é obrigatório',
                        minlength: 'A senha deve ter no mínimo 5 caracteres'
                    },

                    confirmaSenha:{
                        required: 'O Campo repita senha é obrigatório',
                        minlength: 'A senha deve ter no mínimo 5 caracteres',
                        equalTo: "Digite a mesma senha acima"
                    },

                    termos: 'Por favor, leia e aceite nossos Termos',
                },

                errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `invalid-feedback` class to the error element
					error.addClass( "invalid-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.next( "label" ) );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
				}

            })
            
        })
    </script>


</body>

</html>