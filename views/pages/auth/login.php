<section class="container forms">
    <div class="form login">
        <div class="form-content">
            <header>Login</header>
            <form method="POST">
                <div class="field input-field">
                    <input type="text" name="username" placeholder="Username" class="input">
                </div>

                <div class="field input-field">
                    <input type="password" name="password" placeholder="Password" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>

                <div class="field button-field">
                    <button type="submit" name="login">Login</button>
                </div>
            </form>

            <div class="form-link">
                <span>Don't have an account? <a href="?page=<?= REGISTER_URL ?>" class="link signup-link">Signup</a></span>
            </div>
        </div>
    </div>
</section>