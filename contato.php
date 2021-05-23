<?php include __DIR__ . '/includes/header.php' ?>

<main>
    <form class="form">
        <label for="name">Nome Completo</label>
        <input type="text" id="name" class="input-main" required>

        <label for="email">Email</label>
        <input type="email" id="email" class="input-main" required placeholder="seuemail@dominio.com">

        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" class="input-main" required placeholder="(XX) XXXXX-XXXX">

        <label for="mensagem">Mensagem</label>
        <textarea type="text" cols="70" rows="10" id="mensagem" class="input-padrao" required></textarea>

        <fieldset>
            <legend>Como prefere o nosso contato?</legend>
            <label for="radio-email"><input type="radio" name="contato" value="email" id="radio-email"> Email</label>

            <label for="radio-telefone"><input type="radio" name="contato" value="telefone" id="radio-telefone"> Telefone</label>

            <label for="radio-whatsapp"><input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked> WhatsApp</label>
        </fieldset>

        <fieldset>
            <legend>Qual horário prefere ser atendido?</legend>
            <select>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
            </select>
        </fieldset>

        <label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades por email?</label>

        <input type="submit" value="Enviar formulário" class="send">
    </form>

    <table class="tabela">
        <tr>
            <th colspan="2">Horário de Atendimento</th>
        </tr>
        <tr>
            <td>Dia</td>
            <td>Horário</td>
        </tr>
        <tr>
            <td>Segunda</td>
            <td>8h ~ 20h</td>
        </tr>
        <tr>
            <td>Quarta</td>
            <td>8h ~ 20h</td>
        </tr>
        <tr>
            <td>Sexta</td>
            <td>8h ~ 20h</td>
        </tr>
    </table>
</main>

<?php include __DIR__ . '/includes/footer.php' ?>