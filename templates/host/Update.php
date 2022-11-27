<div id="update">
    <h1 class="title-right-section" id="old_name"></h1>

    <div>
        <a class='btn-form-top' href="">Informations générales</a>
        <a class='btn-form-top' id="contacts" href="">Contacts</a>
    </div>
    <div class="right-contents">
        <div>
            <form class="add-user-form" method="post" name="upd_user">
                <p class="error">
                </p>
                <div>
                    <label class="add-user-label" for="name">Nom <span style="color:red;">*</span></label>
                    <input class="add-user-input" type="text" id="name" name="name" value="">
                </div>
                <div>
                    <label class="add-user-label" for="code">Code Interne</label>
                    <input class="add-user-input" type="text" id="" name="code"  value="" disabled>
                </div>
                <div>
                    <label class="add-user-label" for="notes">Notes / Remarques</label>
                    <textarea class="add-user-textarea add-user-input" id="notes" name="notes"></textarea>    
                </div>
                <div class="btn-form-bottom">
                    <input id="btn-cancel" type="reset" name="annuler" value="Annuler">
                    <input id="btn-save" type="submit" name="update" value="Sauvegarder">
                </div>
            </form>
        </div>
    </div>
</div>