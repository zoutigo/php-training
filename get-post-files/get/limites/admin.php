<section>
  <h1>Administration de votre site</h1>
  <p class="greetings">
      <?php
          echo sprintf("Bienvenue sur l'administration de votre site %s", $_GET['name']);
      ?>
  </p>
  <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
      dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
      pariatur
  </p>
  <table>
      <thead>
      <tr>
          <td>Nom</td>
          <td>Prénom</td>
          <td>Action</td>
      </tr>
      </thead>
      <tbody>
      <tr>
          <td>Lorem</td>
          <td>Ipsum</td>
          <td><a href="#">Supprimer</a></td>
      </tr>
      <tr>
          <td>John</td>
          <td>Doe</td>
          <td><a href="#">Supprimer</a></td>
      </tr>
      <tr>
          <td>John</td>
          <td>Doe</td>
          <td><a href="#">Supprimer</a></td>
      </tr>
      </tbody>
  </table>
</section>