<?php

include_once 'banco/coon.php';
include_once 'includes/head.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	


	if (!isset($_FILES["foto"]) || empty($_FILES["foto"]["name"])) {
		die("É necessário enviar uma foto.");
	}

	$foto = $_FILES["foto"]["name"];

	
	$tipo = strtolower(pathinfo($foto, PATHINFO_EXTENSION));
	if ($tipo != "jpg" && $tipo != "jpeg" && $tipo != "png" && $tipo != "gif") {
		die("O arquivo enviado não é uma imagem.");
    }


	$diretorio_imagens = "fotos";
	$caminho_imagem = $diretorio_imagens . basename($foto);

	if (!move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho_imagem)) {
		die("Erro ao enviar a foto.");
	}

	$sql = "INSERT INTO pessoas (foto) VALUES ('$caminho_imagem')";

	if (!mysqli_query($conexao, $sql)) {
		die("Erro ao inserir os dados: " . mysqli_error($conexao));
	}


	mysqli_close($conexao);


	header("Location: ?.php");
	exit();
}
?>

	<link rel="stylesheet" href="bootstrap.min.css">
<div class="container-xl px-4 mt-4">
    
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            
            <div class="card mb-8 mb-xl-0">
          
                <div class="card" style="width: 65rem;">
                <img id="preview" class="img-account-profile rounded-circle mb-2" src="#" alt>
                    <form method="POST" action="index.php" enctype="multipart/form-data">
					<input type="file" name="foto" id="foto" required><br><br>
                   
                </div>
            </div>
            <br>

        </div>
        					<input class="btn btn-primary" type="submit" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
const fotoInput = document.getElementById('foto');
const fotoPreview = document.getElementById('preview');

fotoInput.addEventListener('change', function() {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener('load', function() {
      fotoPreview.setAttribute('src', this.result);
    });

    reader.readAsDataURL(file);
  }
});

	
</script>


<?php




$sql = "SELECT * FROM pessoas";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
	die("Erro ao executar a consulta: " . mysqli_error($conexao));
}


mysqli_close($conexao);

?>

    <div class="row">
            <?php while ($pessoa = mysqli_fetch_assoc($resultado)): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="<?php echo $pessoa["foto"]; ?>" alt="< ?>" style="width: 100%; height: 50vw;">
  
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js">



</script>

</body>
</html>