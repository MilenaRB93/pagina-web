<?php require_once("../includes/header.php"); ?>
<main class="main">
    <section>
        <center>
            <h1>Inscripciones</h1>
        </center>
    </section>
    <section>
        <?php
        if (isset($_GET["msg"])) {
        ?>
            <article>
                <div class="msgAlert">
                    <p><?php echo $_GET["msg"]; ?></p>
                </div>
            </article>
        <?php
        }
        ?>
        <article>
            <div class="boxCenter">
                <form class="frmInscripcion" action="/inscripciones/admin/registrar.php" method="POST">
                    <input class="input" type="text" name="name" placeholder="Nombre completo" require>
                    <input class="input" type="email" name="email" placeholder="Email" require>
                    <input class="input" type="number" name="phone" placeholder="Número celular" require>
                    <button class="btn btn--primary">Inscribir</button>
                </form>
                <div style="text-align:center; margin:15px 0px;">
                    <h3><span style="color:rebeccapurple;">Autonomía</span> – <span style="color:red;">Inclusión</span> – <span style="color:yellow;">Arte</span> – <span style="color:#03a9f4;">Adaptación</span> - <span style="color:green;">Respeto</span></h3>
                </div>
            </div>
        </article>
    </section>
</main>
<?php require_once("../includes/footer.php"); ?>