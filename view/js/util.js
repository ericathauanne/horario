function requisicaoAjax(url, data) {
	
	var resposta = $.ajax({
		url: url,
		method: 'GET',
		contentType: 'application/json',
		data: data
	}); 
	
	return resposta;
}

function carregarCombo(array, combo, atributo, mensagemPadrao) {
	
	var options = [];
	
	if (array.length > 0) {
		
		options.push('<option value="" >' + mensagemPadrao + '</option>');
		
		array.forEach(function(elemento){
			options.push('<option value="'+ elemento.codigo +'" >' + elemento[atributo] + '</option>');
		});
		
		combo.prop('disabled', false);
		combo.html(options.join(''));
		
	}
	
}

function desabilitarCombo(combo, mensagemPadrao) {
	combo.prop('disabled', true);
	combo.html('<option value="" >' + mensagemPadrao + '</option>');
}