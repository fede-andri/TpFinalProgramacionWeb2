{{>header}}
<main class="w3-center w3-margin-top w3-margin-left">
    <section class="contenedor-form-login w3-center w3-row">
        <div class="w3-container w3-col l4 m4">

        </div>

        <div id="card-home" class="w3-container w3-theme w3-padding-16 w3-center w3-col l4 m4" style="width:400px;">
            <h1 id="titulo-login"> Bienvenidos al sistema </h1>

            <div class="w3-container w3-white w3-padding-bottom" style="width:100%; padding: 5px 24px;">

                <form id="formLogin" action="/" method="post" >

                    <label for="usuario">Usuario:</label>
                    <input type="email" id="email" name="email" class="w3-input" aria-required="true" aria-invalid="true">

                    <label for="clave">Contraseña:</label>
                    <input type="password" id="clave" name="clave" class="w3-input w3-margin-bottom" aria-required="true" aria-invalid="true">

                    <input type="submit" id="btnLogin" class="w3-btn-block w3-margin-top" value="Ingresar"></input>
                    <a id="btnOlvideClave" class="w3-transparent w3-block w3-margin-top w3-center w3-text-blue" href="">Olvidé mi contraseña</a>
                </form>

            </div>
        </div>

        <div class="w3-container w3-col l4 m4">

        </div>
    </section>
    </form>
</main>
{{>footer}}
