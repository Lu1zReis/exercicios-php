<?php
session_start();
include 'app/connect.php';
include 'app/pro.php';
include 'app/proDao.php';

// parte das mensagens da sessão
if($_SESSION['msg']) {
    echo $_SESSION['msg'];
}
session_unset();
session_destroy();

// parte do código com banco de dados
$produto = new \conn\Produto();
$produtoDao = new \conn\ProdutoDao();

foreach($produtoDao->Read() as $produto):

?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto 3</title>
        <style>
        
            @import url(tiny.css) (min-width:300px);
            @import url(small.css) (min-width:600px);
            @import url(big.css) (min-width:900px);
            @media screen and (max-width: 1024px) {
                body {min-width: 1000px;}
            }
            @media screen and (min-width: 780px) {
                body {min-width: 480px;}
            }

            @import url('https://fonts.googleapis.com/css2?family=Righteous&family=Sarala&display=swap');
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-decoration: none;
                
            }

            body {
                background: linear-gradient(-19.15deg, <?php echo $produto['cor1']; ?> 16.62%, <?php echo $produto['cor2']; ?> 55.61%);
                font-size: 100%;
            }
            .cab {
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                padding: 20px;
            }
            .cab-stts-bar {
                display: flex;
                gap: 98px;
                font-family: 'Sarala', sans-serif;
                font-size: 18px;
            }
            .prin {
                border-top: 0.3px solid;
                padding-top: 60px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 29px;
            }
            .prin-tit {
                font-family: '0CR A Std', monospace;
            }
            .prin-vid {
                width: 540px;
                height: 320px;
                border-radius: 20px; 
                border: 2pt solid rgb(29, 38, 38);
            }
            .prin-des {
                font-family: 'FreeMono', monospace;
                color: rgb(255, 255, 255);
                margin-left: 30%;
                margin-right: 30%;
                padding-bottom: 10%;
            }

        </style>
    </head>
    <body>
        <header class="cab">
            <nav class="cab-stts-bar">
                <a href="action/login.php" class="cab-stts-bar-lgn">
                    Login
                </a>
                <a id="ult" class="cab-stts-bar-lstSong" onclick="ultMusica()">
                    última música...
                </a>
            </nav>
        </header>
        
        
        <main class="prin">
            <h1 class="prin-tit"><?php echo $produto['titulo']; ?></h1>

            <iframe class="prin-vid" src="<?php echo $produto['musica']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h2 id="descri" class="prin-des" onclick="verDesc()">
                Descrição...
            </h2>

        </main>

        <script>
            var controle1 = 0;
            var controle2 = 0;
            var musi = document.getElementById('ult')
            var desc = document.getElementById('descri')

            var color1 = "<?php echo $produto['cor1']; ?>;"
            var color2 = "<?php echo $produto['cor2']; ?>;" 
            
            body.style.background = "linear-gradient(to right, " + color1 + ", " + color2 + ")";

            function ultMusica() {
                if(controle1 == 0){
                    musi.innerHTML = "<?php echo $produto['UltMusica']; ?>"
                    controle1 = 1
                }
                else {
                    musi.innerHTML = 'última música...'
                    controle1 = 0
                }
            }

            function verDesc() {
                if(controle2 == 0){
                    desc.innerHTML = "<?php echo $produto['descricao']; ?>"
                    controle2 = 1
                }
                else {
                    desc.innerHTML = 'Descrição...'
                    controle2 = 0
                }                
            }

        </script>

    </body>
</html>
<?php
endforeach;