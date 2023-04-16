<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <center>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div clas="divP">
                        <img src="logooC.png" style="width:400px">
                        <h1>Sistema de Cadastro</h1>
                        <div class="notification is-success">
                        <div class="notification is-info"></div>
                        <div class="box">
                            <form class="form" action="cadastrar.php" method="POST">
                                <div class="field">
                                    <div class="control">
                                        <p>
                                            <label>Nome</label>
                                            <input name="nome" type="text" class="input is-large" placeholder="nome" autofocus>
                                        </p>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <p>
                                            <label>Email</label>
                                            <input name="email" type="text" class="input is-large" placeholder="email">
                                        </p>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <p>
                                            <label>Senha</label>
                                            <input name="senha" class="input is-large" type="password" placeholder="senha">
                                        </p>
                                    </div>
                                </div>     
                                
                                <button class="btn1" type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>                          
                            </form>
                            <fieldset class="btn">
                                <a class="btn1" href="index.php">Voltar ao login</a>
                            </fieldset>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    <center>
</body>

</html>