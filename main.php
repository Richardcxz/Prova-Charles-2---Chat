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
                        <input type="submit" value="Exportar" name="json">
                        <input type="button" value="Excluir" onclick="exclude()">
                        <input type="hidden" name="hid" id="hid">
                        <br><br>
                        </div>
                        <textarea id="chatmsg" name="chatmsg" disabled rows="15" ></textarea>
                        </form>
                        <br>
						<label style="color: black;">Atendente: </label>
						<input type="text" name="msgatd" id="msgatd"placeholder="" type="text" style="width: 50%;">  <button onclick="click_atendente()">OK</button> <br>
						<label style="color: black;">Consumidor: </label>
						<input type="text" name="msgcon" id="msgcon" placeholder="" type="text" style="width: 50%;">  <button onclick="click_cliente()">OK</button><br>
						
					
				</div>
		</div>
	</div>
</body>
<script>
var countA = 0;
var countC = 0;
var countGeral = 0;
var ultimo;
var valororiginal = document.querySelector("#chatmsg").value;

function click_atendente()
{
    countA++;
    countGeral++;
    var atray = [''];
    var msgatd = document.querySelector("#msgatd").value;
    atray[countA]="Atendente:"+msgatd;
    valororiginal = document.querySelector("#chatmsg").value;
    var valorr = document.querySelector("#chatmsg").value+"\n";
    document.querySelector("#chatmsg").value =  valorr +atray[countA]+"\n";
    document.querySelector("#hid").value = document.querySelector("#chatmsg").value;
    document.querySelector("#msgatd").value = "";
    if(countA>countC)
    {
        ultimo="atendente";
    }
    
}
function click_cliente()
{
    countC++;
    countGeral++;
    var ctray = ['']
    var msgcon = document.querySelector("#msgcon").value;
    ctray[countC]="Consumidor:"+msgcon;
    valororiginal = document.querySelector("#chatmsg").value;
    var valor = document.querySelector("#chatmsg").value+"\n";
    document.querySelector("#chatmsg").value =  valor +ctray[countC]+"\n";
    document.querySelector("#hid").value = document.querySelector("#chatmsg").value;
    document.querySelector("#msgcon").value = "";
    
    if(countC>countA)
    {
        ultimo="cliente";
    }
    
}
function exclude()
{
    
    if(ultimo=="cliente")
    {
        if(countC=1 && countA<0 || countC<0)
        {
            document.querySelector("#chatmsg").value = " ";
            document.querySelector("#hid").value = document.querySelector("#chatmsg").value;
        }
        else
        {
            document.querySelector("#chatmsg").value = valororiginal;
            document.querySelector("#hid").value = document.querySelector("#chatmsg").value;
            countC--;
           
        }
    }
    else{
        if(countA=1 && countC<0 || countA<0)
        {
            document.querySelector("#chatmsg").value = '';
            document.querySelector("#hid").value = document.querySelector("#chatmsg").value;
        }
        else
        {
            document.querySelector("#chatmsg").value = valororiginal;
            document.querySelector("#hid").value = document.querySelector("#chatmsg").value;
            countA --;
           
        }
        
    }
}

</script>


<?php
if(isset($_POST['json']))
{
 $chat = $_POST['hid'];
 $exp = explode('\r',$chat);
 $j =json_encode($exp);
 echo $j;
 $file = fopen("registrodechat.json","w");
 fwrite($file,$j);
 echo "Texto salvo com sucesso";
    

}
?>

</html>
