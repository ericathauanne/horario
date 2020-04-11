var Despesa = Despesa || {};
	
Despesa.ComboCategoria = (function(){
	
	function ComboCategoria() {
		this.combo = $('#categoria');
		this.comboElemento = $('#elementoDespesa');
		this.inputHiddenElemento = $('#inputHiddenElemento');
	}
	
	ComboCategoria.prototype.iniciar = function() {
		
		this.combo.on('change', onComboAlterado.bind(this));
		temCategoria.call(this, this.combo);
		
	}
	
	function temCategoria(combo) {
		
		if (combo.val()) {
			var resposta = requisicaoAjax(this.combo.data('url'), {'categoriaEconomica': this.combo.val()}); 
			resposta.done(onRequisicaoSucesso.bind(this));
		}
		
	}
	
	function onComboAlterado() {
		
		this.inputHiddenElemento.val('');
		
		if (this.combo.val()) {
			
			var resposta = requisicaoAjax(this.combo.data('url'), {'categoriaEconomica': this.combo.val()}); 
			resposta.done(onRequisicaoSucesso.bind(this));
			
		} else {
			desabilitarCombo(this.comboElemento, 'Selecione um elemento');
		}
		
	}
	
	function onRequisicaoSucesso(resultado) {
		
		carregarCombo(resultado, this.comboElemento, 'nome', 'Selecione um elemento');
		this.comboElemento.val(this.inputHiddenElemento.val());
		
	}
	
	return ComboCategoria;
}());

$(function(){
	
	var comboCategoria = new Despesa.ComboCategoria();
	comboCategoria.iniciar();
	
});