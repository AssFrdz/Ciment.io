<div class="main stock">

    <a href="#">Retour Tableau de Bord</a>
    <h2 class="big-title">Mon stock</h2>

    <div class="stock-vision">

        <h3 class="subtitle">Catégorie 1 :</h3>

        <div class="name-details">
            <p>Numéro de l’article</p>
            <p>Nom de l’article</p>
            <p>Description</p>
            <p>Coût/unité</p>
            <p>Quantité</p>
            <p>Fournisseur</p>
            <p>Coût total</p>
        </div> <!--display:grid-->

        <div class="line">
            <input type="number" name="numart" id="">
            <input type="text" name="name" id="">
            <input type="text" name="descr" id="">
            <input type="number" name="cost" id="">
            <input type="number" name="qte" id="">
            <input type="text" name="fournisseur" id=""><!--retour vers les infos de contact du fournisseur au clic-->
            <input type="number" name="finalcost">

            <input type="button" value="✒️" name="modify" onclick="affichePopup(this,modify)">
            <input type="button" value="Enregistrer" name="save" onclick="affichePopup(this,save)">
            <input type="button" value="❌" name="delete" onclick="affichePopup(this,delete)">

        </div>

        <div class="line">
            <input type="number" name="numart" id="">
            <input type="text" name="name" id="">
            <input type="text" name="descr" id="">
            <input type="number" name="cost" id="">
            <input type="number" name="qte" id="">
            <input type="text" name="fournisseur" id=""><!--retour vers les infos de contact du fournisseur au clic-->
            <input type="number" name="finalcost">

            <input type="button" value="✒️" name="modify">
            <input type="button" value="❌" name="delete">




        </div>
        <div class="line">
            <input type="number" name="numart" id="">
            <input type="text" name="name" id="">
            <input type="text" name="descr" id="">
            <input type="number" name="cost" id="">
            <input type="number" name="qte" id="">
            <input type="text" name="fournisseur" id=""><!--retour vers les infos de contact du fournisseur au clic-->
            <input type="number" name="finalcost">

            <input type="button" value="✒️" name="modify">
            <input type="button" value="❌" name="delete">




        </div>

        <h3 class="subtitle">Catégorie 2 :</h3>

        <div class="name-details">
            <p>Numéro de l’article</p>
            <p>Nom de l’article</p>
            <p>Description</p>
            <p>Coût/unité</p>
            <p>Quantité</p>
            <p>Fournisseur</p>
            <p>Coût total</p>
        </div> <!--display:grid-->

        <div class="line">
            <input type="number" name="numart" id="">
            <input type="text" name="name" id="">
            <input type="text" name="descr" id="">
            <input type="number" name="cost" id="">
            <input type="number" name="qte" id="">
            <input type="text" name="fournisseur" id=""><!--retour vers les infos de contact du fournisseur au clic-->
            <input type="number" name="finalcost">

            <input type="button" value="✒️" name="modify">
            <input type="button" value="❌" name="delete">




        </div>



    </div>

</div>


</div>





</div>

<script>
    function affichePopup(this,action){
        
        body = document.querySelector("body");
        div  = document.createElement("div");
        body.appendChild(div);
        div.classList.toggle("popup");



        switch(action){
            case "modify":
                ....
            case "delete":
                ...
        }

    };
</script>