
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>

<h1 align="center">Welkom op inlogpagina</h1>







</header>
                
  						
  <section id="main">
     <div class="container">
      <aside id="sidebar">
          <div class="dark">
            <h3>Gegevens Leraar</h3>
            <form class="quote" action="dataform.php" method="post"> 
  						<div>
  							<label>Naam</label><br>
                              <input type="text"  name="name" placeholder="Naam">
  						</div>
  						<div>
  							<label>Woonplaats</label><br>
  							<input type="text" name="woonplaats" placeholder="Woonplaats">
  						</div>
  						<div>
  							<label>Vak</label><br>
  							<input type="text" name="vak" placeholder="Welke vak geeft?">
  						</div>
  						<button class="button_1" type="submit">Verzend</button>
					</form>
          </div>
        </aside>
      </div>
    </section>


  						
    <section id="main">
     <div class="container">
      <aside id="sidebar">
          <div class="dark">
            <h3>Gegevens Student</h3>
            <form class="quote" action="formstudent.php" method="post"> 
  						<div>
  							<label>Naam</label><br>
                              <input type="text"  name="name" placeholder="Naam">
  						</div>
  						<div>
  							<label>Vak</label><br>
  							<input type="text" name="woonplaats" placeholder="">
  						</div>
  						<div>
  							<label>Cijfer </label><br>
  							<input type="text" name="vak" placeholder="Cijfer">
  						</div>
  						<button class="button_1" type="submit">Verzend</button>
					</form>
          </div>
        </aside>
      </div>
    </section>


</body>
</html>