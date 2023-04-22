<div>
    <table>
        <td>
    <h1> CONTACT </h1>
    <h3> Vous avez une question, une remarque ou une suggestion ? N'hésitez pas à nous contacter, nous serons ravis de vous aider.</h3><br>
    <h3>55 Rue Capitaine Montréal, 01100 Oyonnax, France </h3> <br>
    <div class="mail">
    <a class="bordure" href="mailto:xxxx@xx.xx">azerty</a>
    </div>
     <br>
    <h3> TEL : 04 74 81 35 59
 </h3>
</td>
<td>
        <p> Pour toute demande, merci de remplir le formulaire ci-dessous. <br>
            Équipe disponible 24H/24, 7j/7 même les jours fériés
</p>
        <form  method="post"> 
            <label>Nom<label>
            <input  type="text" name="nom" placeholder="Nom" required><br>
            <label>E-mail</label>
            <input type="email" name="email" placeholder="Email" required><br>
            <label>Sujet</label>
            <input type="text" name="sujet" placeholder="Sujet" required><br>
            <label>Message</label>
            <textarea name="message" placeholder="Message" required></textarea><br>
            <input type="submit" value="Envoyez le message">
        </form>

        <?php if(isset($texte)) {
            echo $texte;
        }
        ?>
        </td>
    </table>
</div>
