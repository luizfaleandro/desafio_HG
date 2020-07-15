<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;469;500;600;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="recusos/css/estilo.css">
    <title>Encontre seu domínio</title>
    
</head>


    <header class="cabecalho">
        <h1>Encontre seu domínio</h1>
        <h2>Veja se o dominio que você quer está disponível !</h2>
    </header>
        <main class="principal">
        <center><nav class="modulos"></nav>
            <nav class="conteudo">
            <h2>Digite o domínio que você gostaria de verificar</h2>
            <br>
            
                
                
     <?php
    //string json contendo os dados de um funcionário
    $json_str ='{"avaible":"Domínio disponivel para registro", "price":26.99, "reason": "registred trademark"}';

    //faz o parsing na string, gerando um objeto PHP
    $obj = json_decode($json_str);

    //imprime o conteúdo do objeto
    "Domínio: $obj->avaible<br>";
    "Preço: $obj->price<br>";
    "Reason: $obj->reason<br>";
    ?>
  
  <?php
        error_reporting(0);
        if(isset($_GET['domain'])){
            $domain = $_GET['domain'];
            $domaincheck = 'https://registro/v2/ajax/avail/raw/'.$domain.'';
            $namecomcheck = 'https://registro.br/tecnologia/ferramentas/whois/?search='.$domain.'';
            $registercomcheck = 'https://www.whois.com/whois/'.$domain.'&searchPath=Default&searchTlds=';

        if ( gethostbyname($domain) != $domain) {
            echo "Domínio já registrado!";
            echo "<br>";
        }
       
        else 
        {
            echo "Esse domínio está disponivel !";
        }
        $string = $domain; 
        $array = explode ('.', $domain);
        "Extensão =".$array[1];
        "Extensão =".$array[2];         
        echo "Domínio: $domain";
        echo "<br>";
        echo "Preço para registro: $valor";

        if ($array[1] == 'loja') {
           echo"R$ 99,90";
        }
        elseif ($array[1] == 'premium'){
            echo"R$ 99,90";
        }
        else{
           echo "R$ 29,90";
        }
       ?>
       <?php
       echo"<br>";
       if ($array[0] == 'endurance') {
           echo"Registered trademark";
        }
        elseif ($array[0] == 'hostgator'){
            echo"Registered trademark";
        }
    }
    ?>

    <center>
    <body>
		<form action="" method="GET">
            <div id="custom-search-input">
                <center><div class="input-group col-md-9"></center>
                    <input type="text" name="domain" required class="form-control input-lg" placeholder="exemplo.com or exemplo.com.br etc." id="domain" value="<?=$_GET['domain']?>"/>   
                </div>
            </div>
            <br>
            <button class="btn btn-primary btn-lg">Verificar</button>
		</form>
                </div>
            </div>
        </nav>
    </div>
</main>
    </center>
    <footer><center><p>Desafio HostGator by: Luiz Leandro</p></center></footer>
       
</body>
</html>