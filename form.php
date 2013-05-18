<form id="fRegister" class="form" name="form" action="" method="post">
	<p> 
	    <label for="area"></label>
	    <select id="area" class="area" name="area">
	    	<option value="0">Seleccione Área</value>
	    </select>
	</p>
	<p> 
	    <label for="boss"></label>
	    <select id="boss" class="boss" name="boss">
	    	<option value="0">Seleccione Encargado</value>
	    </select>
	</p>
	<p> 
	    <label for="name"></label>
	    <input id="name" class="name" name="name" type="text"/>
	</p>
	<p> 
	    <label for="serial"></label>
	    <input id="serial" class="serial" name="serial" type="text"/>
	</p>
	<p> 
	    <label for="stock"></label>
	    <input id="stock" clas="stock" name="stock" type="text"/>
	</p>
	<p> 
	    <textarea id="description" class="description" name="description"></textarea>
	</p>
	<p> 
	    <label for="date"></label>
	    <input id="date" class="date" name="date" type="text"/>
	</p>
	<p>
		<input class="btn btn-danger" type="reset" value="Limpiar"/>
		<input id="doRegister" class="btn" type="submit" value="Registrar"/>
	</p>
	<div class="alert"></div>
</form>