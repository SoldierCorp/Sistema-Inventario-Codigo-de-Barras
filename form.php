<form id="fRegister" class="form" name="form" action="" method="post">
	<p> 
	    <label for="area"></label>
	    <select id="area" class="area" name="area">
	    	<option value="0">Seleccione Área</option>
	    </select>
	</p>
	<p> 
	    <label for="boss"></label>
	    <select id="boss" class="boss" name="boss">
	    	<option value="0">Seleccione Encargado</option>
	    </select>
	</p>
	<p> 
	    <label for="name"></label>
	    <input id="name" class="name" name="name" type="text" required/>
	</p>
	<p> 
	    <label for="serial"></label>
	    <input id="serial" class="serial" name="serial" type="text" required/>
	</p>
	<p> 
	    <label for="stock"></label>
	    <input id="stock" clas="stock" name="stock" type="text" required/>
	</p>
	<p> 
	    <textarea id="description" class="description" name="description" required></textarea>
	</p>
	<p> 
	    <label for="date"></label>
	    <input id="date" class="date" name="date" type="text" required/>
	</p>
	<p>
		<input class="btn btn-danger" type="reset" value="Limpiar"/>
		<input id="doRegister" class="btn" type="submit" value="Registrar"/>
	</p>
	<div class="alert"></div>
</form>