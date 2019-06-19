<?php
$contenu_du_fichier = '0' ;
$fp = fopen ("nombre.txt", "r");
$contenu_du_fichier = fgets ($fp, 255);
fclose ($fp);
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<h1>Hello, world!</h1>
<div>
    <h3>Nombre de clics : <span id="nombre"><?php echo $contenu_du_fichier; ?></span></h3>
</div>
<button type="button" class="buttonCompteur btn btn-warning">+1</button>
<button type="button" class="buttonCompteur btn btn-warning">+1 ?</button>
<button type="button" class="buttonCompteur btn btn-warning">ou +1 ?</button>
<button type="button" id="gerard" class="btn btn-warning">Efface tout Gérard !</button>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

    function calculGlobal(nbr){
        $.ajax({
            type: "POST",
            url: 'Calcul.php',
            data: {'chiffre': nbr},
            async: true,
            success: function (data) {
                $("#nombre").text(data);
            }
        });
    }
    function Ajout(id, bouton ,nbr) {
        $(bouton).click(function () {
            var total = $(id).text();
            var somme = parseInt(total) + nbr;
            calculGlobal(somme);
        });
    }
    Ajout("#nombre", ".buttonCompteur", 1 );
    $("#gerard").click(function () {
        calculGlobal('valeurnulle');
    });
</script>

</body>
</html>