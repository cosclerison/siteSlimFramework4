<?php $this->layout("master") ?>

<p>Create User</p>

<form action="/user/store" method="post">
    <input type="text" name="firstName" placeholder="Digite seu primeiro nome">
    <input type="text" name="lastName" placeholder="Digite seu sobrenome">
    <input type="text" name="email" placeholder="Digite seu E-Mail">
    <input type="password" name="password" placeholder="Digite sua senha">
    
    <button type="submit">Create User</button>
</form>
