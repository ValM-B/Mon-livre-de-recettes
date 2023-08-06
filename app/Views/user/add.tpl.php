<main>
<h2 class="display-1 home-title">
        <?php echo isset($userToUpdate) ? "Modifier un utilisateur" : "Ajouter un utilisateur";?>
    </h2>
    <div class="container">
        <div class="card card-category mt-4 p-4">
            <?php
            if(isset($errorList)){
                foreach ($errorList as $error) :?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error ?>
                    </div>
                <?php
                endforeach;
            } ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="categoryName">Nom</label>
                <input type="text" class="form-control" id="categoryName"  placeholder="Nom de l'utilisateur" name="name"  value='<?php echo isset($user) ? $user->getName() : "" ?>' >
                <label for="userEmail">email</label>
                <input type="email" class="form-control" id="userEmail"  placeholder="Email de l'utilisateur" name="email"  value='<?php echo isset($user) ? $user->getEmail() : "" ?>' >
                <label for="userPassword">Mot de passe</label>
                <input type="password" class="form-control" id="userPassword"  placeholder="Mot de passe de l'utilisateur" name="password"  value='<?php echo isset($user) ? $user->getPassword() : "" ?>' >
                <div class="mb-3 status">
                    <label for="status" class="form-label">Status</label>
                    <label><input type="radio" value="1" name="status" id="status-active"
                    <?php
                    if (isset($user) && $user->getStatus() === 1) {
                        echo "checked";
                    }
                    ?>> Actif</label>
                    <label><input type="radio" value="0" name="status" id="status-inactive"
                    <?php
                    if (isset($user) && $user->getStatus() === 0) {
                        echo "checked";
                    }
                    ?>> Inactif</label>
                </div>
                <div class="mb-3 role">
                    <label for="role" class="form-label">Rôle</label>
                    <label><input type="radio" value="admin" name="role" id="role-admin"
                    <?php
                    if (isset($user) && $user->getRole() === "admin") {
                        echo "checked";
                    }
                    ?>> Admin</label>
                    <label><input type="radio" value="author" name="role" id="role-author" 
                    <?php
                    if (isset($user) && $user->getRole() === "author") {
                        echo "checked";
                    }
                    ?>> Auteur</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
        </div>
    </div>