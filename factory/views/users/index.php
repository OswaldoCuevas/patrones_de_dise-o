<div class="container">
  <div class="row">
      <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" placeholder="example pérez">
      </div>
      <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
      </div>
      <div class="mb-3 col-6">
        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" placeholder="***********">
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-primary" onclick="addUser()" >Guardar</button>
      </div>
    </div>
</div>


<div class="container">
<table class="table">
  <thead class="table-light">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody id="table_users">
    <?php foreach($this->data['users'] as $user): ?>
        <tr>
        <td><?php echo $user['Name'] ?></td>
        <td><?php echo $user['Email'] ?></td>
        </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>