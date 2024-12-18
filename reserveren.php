<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dante Stolk">
    <meta name="keywords" content="">
    <title>Sushi / Reserveren / Gerechten</title>
    <link rel="stylesheet" href="css/style.css">

  </head>
<body>
  <?php include('header.php') ?>


  <main id="main_reserveren">
    <section class="container">
      <form>
        <label for="voornaam">Voornaam:</label>
        <input type="text" id="voornaam" name="voornaam">

        <label for="tussenvoegsel">Tussenvoegsel:</label>
        <input type="text" id="tussenvoegsel" name="tussenvoegsel">

        <label for="achternaam">Achternaam:</label>
        <input type="text" id="achternaam" name="achternaam">

        <label for="telefoon">Telefoonnummer:</label>
        <input type="tel" id="telefoon" name="telefoon">

        <label for="email">Emailadres:</label>
        <input type="email" id="email" name="email">

        <label for="aantal_personen">Aantal personen:</label>
        <input type="number" id="aantal_personen" name="aantal_personen">

        <label for="datum">Datum:</label>
        <input type="date" id="datum" name="datum">

        <label for="tijd">Tijd:</label>
        <select id="tijd" name="tijd" required>
            <option value="12:00">10:00</option>
            <option value="12:00">11:00</option>
            <option value="12:00">12:00</option>
            <option value="13:00">13:00</option>
            <option value="14:00">14:00</option>
            <option value="15:00">15:00</option>
            <option value="16:00">16:00</option>
            <option value="17:00">17:00</option>
            <option value="18:00">18:00</option>
            <option value="19:00">19:00</option>
            <option value="20:00">20:00</option>
            <option value="21:00">21:00</option>
            <option value="12:00">22:00</option>
        </select>

        <button type="submit">Reserveren</button>  
      </form>
    </section>  
  </main>

  <?php include('footer.php') ?>

</body>
</html>