
<form method="post" action="ajouter.php" id="formulaire">

<p>
    <fieldset id="fieldsetChambresNumber">
    <legend><strong> Nombres de chambres</strong></legend>
    <p>
    <label for="input_nb_chambres"> Entrer le nombres de chambres: </label>
    <input  type="number" name="input_nb_chambres" id="input_nb_chambres"  max="20" min="1" />
    <button  value="ok" id="btn_nb_chambres" >OK</button>
    </p>
    </fieldset>
</p>

 <p>
    <fieldset id="fieldsetUneChambre">
      <legend><strong> Type de votre chambre</strong></legend>
      <p>
      <input type="radio" name="boutonTypeChambre" id="optionChambreSimple" value="chambreSimple"/> <label for="optionChambreSimple">Chambre simple </label>
      <span id="spanSimple"></span>
      </p>
      <p>
      <input type="radio" name="boutonTypeChambre" id="optionChambreDouble" value="chambreDouble"/> <label for="optionChambreDouble">Chambre double </label>
      <span id="spanDouble"></span>
      <span id="secondSpanDouble"></span>
      </p>
    </fieldset>
</p>

<p>
   <fieldset id="fieldsetPlusieursChambresSimples">
   <legend><strong> Les chambres simples</strong></legend>
   <p>
   <label for="input_nb_chambres_simples">nombres de chambres simples: </label>
   <input  type="number" name="input_nb_chambres_simples" id="input_nb_chambres_simples"  max="20" min="1"/>
   <button  value="ok" id="btn_nb_chambres_simples" >OK</button>
   </p>
   <p id="place"></p>
   </fieldset>
</p>

<p>
<fieldset id="fieldsetPlusieursChambresDoubles">
  <legend><strong>Les chambres doubles</strong></legend>
  <p>
  <label for="input_nb_chambres_doubles">Nombres de chambres doubles </label>
  <input  type="number" name="input_nb_chambres_doubles" id="input_nb_chambres_doubles"  max="20" min="1" />
  <button  value="ok" id="btn_nb_chambres_doubles" >OK</button>
</p>
<p id="place2"></p>
</fieldset>
</p>

<p>
<fieldset id="fieldsetEnfanst" >
  <legend><strong>Enfants</strong></legend>
  <p>
  <label for="input_nb_enfants">Enter le nombres des enfants (moins de 17ans): </label>
  <input  type="number" name="input_nb_enfants" id="input_nb_enfants"  max="20" min="1" required/>
   
  <input type="button"  value="OK" id="btn_nb_enfants" >
  </p>
  <p id="testBtn"></p>
</fieldset>
</p>


<p>
<fieldset id="fieldsetPension" >
  <legend><strong> Pension </strong></legend>
   <p>
     <span id="pensionRadios">
     <span class="pansionCss"><input type="radio" name="ChoixPension" id="optionSansPension" value="sansPension" /> <label for="optionSansPension"> Sans pension</label></span>
     <span class="pansionCss"><input type="radio" name="ChoixPension" id="optionPensionComplete" value="pensionComplete"/> <label for="optionPensionComplete"> Pension complète </label></span>
     <span class="pansionCssr"><input type="radio" name="ChoixPension" id="optionDemipension" value="demiPension"/> <label for="optionDemipension"> Demi pension </label></span>
     </span>
     <span id="span_pension"></span>
  </p>
</fieldset>
</p>




<button type="submit">Envoyer</button>


</form>


