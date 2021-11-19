{include file='templates/header.tpl'}
{include file='templates/navbar.tpl'}

<div class="container">
<h4>Iniciar sesion</h4>
    <form action="verifyt" method="post">
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

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>
<h1>{$error}</h1>

{include file='templates/footer.tpl'}
