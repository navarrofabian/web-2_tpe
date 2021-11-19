{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}

    <div class="container">
      <h4>Registrarse</h4>
        <form class="form-alta" action="registerUser" method="post">
        <div class="row mb-3">
                <label for="inputUser3" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                <div class="col-sm-10">
                    <input type="user" class="form-control" name="userName" id="userName">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Register">
        </form>

    </div>

{include file='templates/footer.tpl'}