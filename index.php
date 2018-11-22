<?php require "template/header.php";?>

<body>
  <section>
    <h1>Page de connexion</h1>
  <form method="post" action="login.php">
    <div class="form-group">
      <label for="Name">Nom</label>
      <input type="text" class="form-control" id="Name" name="Name" placeholder="Entrer votre nom">
    </div>
    <div class="form-group">
      <label for="Password">Mot de passe</label>
      <input type="password" class="form-control" id="Password" name="Password" placeholder="Entrer votre mot de passe">
    </div>
    <div class="container_button">
    <button type="submit" class="btn btn-primary">CONNEXION</button>
    </div>
  </form>
</section>
<?php require "template/footer.php";?>