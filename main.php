 <html>
<head>
<title>CHAT ATENDIMENTO</title>
<link rel="stylesheet"  href="./styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<meta charset="UTF-8" lang="pt-br">
</head>
<body class="" style="background-color: #181A1B; text-align: center; overflow-y: hidden; overflow-x: hidden;
    -ms-user-select: none;  user-select: none;
    background-size: cover; height: 100vh; padding:0; margin:0;">
        <br><br>
        
		<div class="wrapper">
			<h2>SAC</h2>
				<div class="container">
                        
                        <form method="POST" action=#>
                        <div>
                        <input type="submit" value="Exportar">
                        <input type="submit" value="Excluir">
                        <br><br>
                        </div>
                        <textarea id="chatmsg" name="chatmsg" disabled rows="15" ></textarea>
                        </form>
                        <br>
						<label style="color: black;">Atendente: </label>
						<input type="text" name="msgatd" placeholder="" type="text" style="width: 50%;">  <button onclick="click_atendente()">OK</button> <br>
						<label style="color: black;">Consumidor: </label>
						<input type="text" name="msgcon" id="msgcon" placeholder="" type="text" style="width: 50%;">  <button onclick="click_cliente()">OK</button><br>
						
					
				</div>
		</div>
	</div>
</body>
<script>
var countA = 0;
var countC = 0;
function click_atendente()
{
    countA++;
 var atray = [''];
 var msgatd = document.getElementsByName("msgatd");
 console.log(countA);
}
function click_cliente()
{
    countC++;
    var ctray = ['']
    var msgcon = document.querySelector("#msgcon").value;
    ctray[countC]=msgcon;
    var valor = document.querySelector("#chatmsg").value + "\n";
    document.querySelector("#chatmsg").value = valor +""+ctray[countC];
    console.log(ctray[countC]);
}
</script>


<?php
if(isset($_POST['chatstt'])){

    $nome=$_POST['nome1'];

    echo "Olá, $nome";

    echo "<script>document.getElementById('questn').textContent = 'Teste nova questao';</script>";
    }



?>

</html>
