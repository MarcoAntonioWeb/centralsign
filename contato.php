<!DOCTYPE html>
<html lang="pt-BR">

<head>

       <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-200451552-1"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-200451552-1');
</script>


<?php include_once 'email.php';?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="World Soluções Informática"/>
    <meta name="keywords" content="Central Sign, Fachadas, acm, banners, adesivos, lona, panfletos,
    cartões de visita, impressão digital, Letra Caixa, fachada comercial "/>
    <meta name="copyright" content=""/>
    <meta name="description" content="A Central Sign é especializada em projetar, desenvolver 
    e execultar soluções na área de Comunicação Visual em Brasília. 
    Trabalhamos com a criação e impressão..."/>
    <meta name="robots" content="index,follow">
    
    <meta name="generator" content="Bootstrap - Framework Web Open Source">

    <title>Comunicação Visual | Central Sign</title>

    <meta property="og:url" content="https://www.centralsigncv.com.br">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Comunicação Visual em Brasília">
    <meta property="og:description" content="A Central Sign é especializada em projetar, desenvolver 
    e execultar soluções na área de Comunicação Visual em Brasília. 
    Trabalhamos com a criação e impressão...">

    <!-- Configuração CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/formulario.css">

  

   <!-- Configuração Fonts Google -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans&display=swap" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css2?family=Expletus+Sans:wght@400;600;700&family=Oxanium:wght@300;500;700&display=swap" rel="stylesheet"> 
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100;400;700&display=swap" rel="stylesheet">


   <!--  Configuração do icons Bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
   

    <!--  LINK INCON LOGO MARCA  -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>

<body>

      <!----- configuração de contato Header  ------->
        <header class="telefoneEmail" >
            <div>
              
                <i class="bi bi-phone-vibrate-fill"></i>
                <span class="tel">(61)98170-2557</span>
            </div>

            <div>   
                <i class="bi bi-envelope-fill"></i>
                <a class="email" target="_blank" href="mailto:centralsigncv@gmail.com">
                  <span class="envelope">centralsigncv@gmail.com</span>
                </a>
            </div>
        </header> 
      <!---- Final Configuração Cintato Header ---------->

      <!------- Menu de Navegação ---------------------->
      <nav class="navbar navbar-expand-lg navbar-light bg-light cor-fundo sticky-top">
                <a class="navbar-brand" href="index.html">
                  <img class="logo" src="img/logo.png" alt="Logo marca empresa">
                </a>
      
      <!--------- Botão de navegação ---------------------->          
                <button 
                    id="hamburque"
                    class="navbar-toggler" type="button" 
                    data-toggle="collapse" data-target="#navbarNavDropdown" 
                    aria-controls="navbarNavDropdown" aria-expanded="false" 
                    aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

              <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">

                  <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.html">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Serviços
                            </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="comunicacaoVisual.html">Comunicação Visual</a>
                                      <a class="dropdown-item" href="impressaoDigital.html">impressão Digital</a>
                                      <a class="dropdown-item" href="fachadaAcm.html">Fachada em ACM</a>
                                      <a class="dropdown-item" href="letraCaixa.html">Letra tipo Caixa</a>
                                      <a class="dropdown-item" href="impressaoBanners.html">impressão Banners</a>
                                      <a class="dropdown-item" href="letreirosLuminossos.html">Letreiros Luminosos</a>
                                      <a class="dropdown-item" href="fachadasLojas.html">Fachadas de Lojas</a>
                                </div>

                            <li class="nav-item">
                              <a class="nav-link" href="portifolio.html">Portfólio</a>
                            </li>

                              <li class="nav-item">
                                <a class="nav-link" href="contato.html">Contato</a>
                              </li>
                        </li>
                  </ul>
              </div>
      </nav>
<!------------------- Final do menu de Navegação ------------------> 
<!------------------- Final do menu de Navegação ------------------> 
    
<div class="container-fluid py-5" id="for-img">
  <div class="py-5"></div>
   <form method="post" action="contato.php#formulario" role="form" data-toggle="validator">
      <div id="formulario"class="card ">
          <div class="card-header p-0">
              <div id="for-header" class="text-white text-center py-2" 
              style="background: rgba(34,34,153,0.8);">
                  <h3><i class="bi bi-envelope-fill" style="color: white; font-size: 1.5rem;"></i>  Contato</h3>
                  <p class="m-0">Entre em contato com nosco</p>
              </div>
          </div>
          <div class="card-body p-3">

              <!--Body-->
              <div class="form-group">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text"><i class="bi bi-person-fill text-info" ></i></div>
                      </div>
                      <input type="text" class="form-control" id="nombre" name="nome" value="" placeholder="Nome" required>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text"><i class="bi bi-telephone-fill text-info" aria-hidden="true"></i></div>
                      </div>
                      <input type="tel" class="form-control" id="nombre" name="telefone" placeholder="Telefone" data-minlength="10" required>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>


              <div class="form-group">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text"><i class="bi bi-envelope-fill text-info"></i></div>
                      </div>
                      <input type="email" class="form-control" id="nombre" name="email" value="" placeholder="exemplo@gmail.com" required> 
                      <div class="help-block with-errors"></div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group mb-2">
                      <div class="input-group-prepend">
                          <div class="input-group-text"><i class="bi bi-chat-fill text-info"></i></div>
                      </div>
                      <textarea class="form-control" name="mensagem" placeholder="Enviar Mensagem" required></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>

              <div class="form-group">
                  <div class="text-center">
                      <input type="submit" value="Enviar" name="btnSend" class="btn btn-info btn-block  py-2"  style="background: rgba(34,34,153,0.8)";>
                      <a name="formulario"></a>
                      <div class="mensagem-alerta"><?php echo $msg ?></div>
                  </div>
              </div>    
          </div>

      </div>
  </form>
</div> 


<!------------Configuração Footer ------------------>

<footer class="endereco">
  <div class="alinhamentoFotter">
        <div class="logoFooter">
            <img src="img/logo.png" alt="logo Marca">
        </div>

      <div class="spaceFooter enderecoFooter">
        
                <h4>Endereço</h4>
                <span class="sublilhadoFooter"></span>
                <span class="end">Q 201 Conjunto 08 lote 11</span><br>
                <span class="end">Recanto das Emas - Brasília DF</span>
      
      </div>

        <div class="spaceFooter contato">
            
                  <h4>Contato</h4>
                  <span class="sublilhadoFooter"></span>
                    <span class="telFooter">
                          <i class="bi bi-phone-vibrate-fill"></i>
                            (61)98170-2557
                    </span><br>
                    <span class="envelopeFooter">
                          <i class="bi bi-envelope-fill"></i>
                          <a class="emailFooter" target="_blank" href="mailto:entralsigncv@gmail.com">
                            centralsigncv@gmail.com
                          </a>
                      </span>
             
        </div>
                    
      <div class="spaceFooter">
          
              <h4>Rede Sociais</h4>
                <span class="sublilhadoFooter"></span>
                <a target="_blank" href="https://instagram.com/central_sign?utm_medium=copy_limk">
                    <i class="bi bi-instagram"></i>
                </a>
                  
      </div>
    </div>   
</footer>

<div class="copyFundo">
<div class="copy">&copy; 2021 Central Sign - Comunicação Visual em Brasília DF</div>
</div>
<!-------Final Configuração Footer ---------->



<!--Comfiguração do Whatsapp -------->
<a class="whatsapp-link" href="https://api.whatsapp.com/send?phone=5561981702557&text=Olá%20gostaria%20de%20um%20orçamento." target="_blank">
<i class="bi bi-whatsapp"></i>
</a>


<!-------Configuração Javascript Jquery ---------->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
crossorigin="anonymous">
</script>

<!-------Configuração Javascript Popper ---------->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
crossorigin="anonymous">
</script>

<!-------Configuração Javascript Bootstrap 4.6.0 ---------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" 
integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" 
crossorigin="anonymous">
</script>

<!-------Configuração Javascript animação do Scroll ---------->
<script src="js/anime.js"></script>

<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>

</body>
</html>