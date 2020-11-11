<html>
<head>
<title>Recuplast</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
<style>
h1{
font-size:80px;
font-weight:800;
text-align:center;
font-family: 'Roboto', sans-serif;
}
h2
{
font-size:25px;
text-align:center;
font-family: 'Roboto', sans-serif;
margin-top:-40px;
}
p{
text-align:center;
font-family: 'Roboto', sans-serif;
font-size:12px;
}

.container
{
width:300px;
margin: 0 auto;
margin-top:15%;
}
img{
 
}
</style>
</head>
<body>
<div class="container">
<h1>404</h1>
<br>
<h2>Page introuvable</h2>
<p>The Page you are looking for doesn't exist or an other error occured. Go to <a href="{{ url('/home') }}">Page d'accueil.</a></p>
<center>
<img src="{{ asset('dist/img/téléchargement.jpeg') }}" ></center>
</div>

</body>
</html>