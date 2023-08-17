<div class="container-login  rounded">

    <img src="<?= BASEURL; ?>/img/Unesa.png" class="rounded mx-auto d-block" style="width: 100px;">
    <form action="<?= BASEURL; ?>/login/prosesLogin" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btnLogin " style="background-color: #FFC007">Submit</button>
    </form>

</div>