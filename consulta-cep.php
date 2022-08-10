<?php
function rl_form_cep()
{ ?>
    <div class="containerCep">
        <div id="ckeckCep">
            <input type="text" name="cep" placeholder="Informe o CEP" class="fieldCep" maxlength="8" />
            <button type="button" class="btn cep">Consultar</button>
        </div>
        <div id="cepInformado"></div>
    </div>

<?php }
