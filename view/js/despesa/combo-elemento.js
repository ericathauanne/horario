var Despesa = Despesa || {};

Despesa.ComboElemento = (function(){
	
	function ComboElemento() {
		this.combo = $('#elementoDespesa');
		this.comboClassificacao = $('#classificacao');
		this.inputHiddenElemento = $('#inputHiddenElemento');
		this.inputHiddenClassificacao = $('#inputHiddenClassificacao');
	}
	
	ComboElemento.prototype.iniciar = function() {
		
		this.combo.on('change', onComboAlterado.bind(this));
		temElemento.call(this, this.inputHiddenElemento.val());
		
	}
	
	function temElemento(codigoElemento) {
		
		if (codigoElemento) {
			var resposta = requisicaoAjax(this.combo.data('url'), {'elementoDespesa': codigoElemento});
			resposta.done(onRequisicaoSucesso.bind(this));
		}
		
	}
	
	function onComboAlterado() {
		
		this.inputHiddenClassificacao.val('');
		
		if (this.combo.val()) {
			var resposta = requisicaoAjax(this.combo.data('url'), {'elementoDespesa': this.combo.val()});
			resposta.done(onRequisicaoSucesso.bind(this));
		} else {
			desabilitarCombo(this.comboClassificacao, 'Selecione uma classificação');
		}
		
	}
	
	function onRequisicaoSucesso(resultado) {
		carregarCombo(resultado, this.comboClassificacao, 'nome', 'Selecione uma classificação');
		this.comboClassificacao.val(this.inputHiddenClassificacao.val());
	}
	
	return ComboElemento;
}());

$(function(){
	
	var comboElemento = new Despesa.ComboElemento();
	comboElemento.iniciar();
	
});