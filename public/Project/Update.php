<div>
    <h1 class="title-right-section"></h1>
<div>
    <a class='btn-form-top' href="">Informations générales</a>
    <a class='btn-form-top' id="contacts" href="">environnements</a>
</div>
<div class="right-contents">
    <div>
        <form class="add-user-form" method="post" name="upd_user">
            <div class="flexRow">
                <div>
                    <div>
                        <label class="add-user-label" for="name">Nom <span style="color:red;">*</span></label>
                        <input class="add-user-input" type="text" id="name" name="name" value="">
                    </div>
                    <div>
                        <label class="add-user-label" for="code">Code Interne</label>
                        <input class="add-user-input" type="text" id="" name="code"  value="" disabled>
                    </div>
                </div>
                <div >
                    <div>
                        <label id="dossierLPLabel" class="add-user-label" for="dossierLP">Dossier Lastpass</label>
                        <input class="add-user-input" type="text" id="dossierLP" name="dossierLP" value="">
                    </div>
                    <div>
                        <label id="lienMLabel" class="add-user-label" for="lienM">Lien maquettes</label>
                        <input class="add-user-input" type="text" id="lienM" name="lienM" value="">
                    </div>
                </div>
            </div>
            <div>
                <label class="add-user-label" for="client">client <span style="color:red;">*</span></label>
                <select name="client" id="client" class="add-user-input" value="">
                </select>
            </div>
            <div>
                <label class="add-user-label" for="hebergeur">Hébergeur <span style="color:red;">*</span></label>
                <select name="hebergeur" id="hebergeur" class="add-user-input">
                </select>
            </div>
            <div>
                <label class="add-user-label" for="serveurInfo">Serveur Infogéré</label>
                <input type="checkbox" id="serveurInfo" name="serveurInfo" class="input-checkbox" 

            </div>
            <div>
                <label class="add-user-label" for="notes">Notes / Remarques</label>
                <textarea class="add-user-textarea add-user-input" id="notes" name="notes"></textarea>    
            </div>
            <div class="btn-form-bottom">
                <input id="btn-cancel" type="submit" name="annuler" value="Annuler">
                <input id="btn-save" type="submit" name="update" value="Sauvegarder">
            </div>
        </form>
    </div>
</div>