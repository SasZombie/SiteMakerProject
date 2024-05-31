<html>
        <head>
            <title>Make a webpage</title>
            <link rel="stylesheet" href="style.css">
            
        </head>
    <body>
     <h1> Utilizator nou:  </h1>
     <form action="insertNume.php" method="post">
          <label for="text">Nume Utilizator: </label>
          <textarea spellcheck="false" name="text" id="text"></textarea>
          <br>
          <label for="cat">Categoria Siteului:</label>
          <select name="cat" id="cat">
              <option value="0">Blog +0$</option>
              <option value="15">Magazin +15$</option>
          </select>
        <br>
        <label for="text">Numar pagini (10$/pagina)</label>
        <textarea name="text2" id="text2"></textarea>
          <br>
          <button class="neon-button" type="submit">Next</button>
      </form>
    <br>
    <h1> Autentifica-te </h2>
    <form action="SearchName.php" >
          <label for="text">Utilizator exitent: </label>
          <textarea name="text" id="text"></textarea>
          <br>
          <button class="neon-button" type="submit">Cauta</button>
      </form>
    </body>
</html>