var Parametro = Parametro || {};
	
Parametro.ComboAno = (function(){
	
	function ComboAno() {
		this.combo = $('#ano');
		
		this.inputMunicipio = $('#municipio');
		this.inputCodigo = $('#codigo');
		
		this.inputPerCrecheIntegral = $('.crecheIntegral');
		this.inputPerCrecheParcial = $('.crecheParcial');
		this.inputPerPreEscolaIntegral = $('.preEscolaIntegral');
		this.inputPerPreEscolaParcial = $('.preEscolaParcial');
		this.inputPerSerIniUrbana = $('#serIniUrbana');
		this.inputPerSerIniRural = $('#serIniRural');
		this.inputPerSerFinUrbana = $('#serFinUrbana');
		this.inputPerSerFinRural = $('#serFinRural');
		this.inputPerTempoIntegral = $('.tempoIntegral');
		this.inputPerAee = $('.aee');
		this.inputPerEducacaoEspecial = $('.educacaoEspecial');
		this.inputPerEducIndQui = $('.educacaoIndQui');
		this.inputPerEja = $('.eja');
		this.inputPerCrecheIntegralConv = $('.crecheIntegralConv');
		this.inputPerCrecheParcialConv = $('.crecheParcialConv');
		this.inputPerPreEscolaIntegralConv = $('.preEscolaIntegralConv');
		this.inputPerPreEscolaParcialConv = $('.preEscolaParcialConv');
		
		this.inputCreche = $('#creche');
		this.inputPreEscola = $('#preEscola');
		this.inputAnosInicias = $('#anosIniciais');
		this.inputAnosFinais = $('#anosFinais');
		this.inputEducacaoEspecial = $('#educacaoEspecial');
		this.inputEja = $('#eja');
		this.inputQtdMeses = $('#qtdMeses');
		this.inputPercentualInss = $('#percentualInss');
		this.inputPercentualIpm = $('#percentualIpm');
	}
	
	ComboAno.prototype.iniciar = function() {
		this.combo.on('change', onComboAlterado.bind(this));
	}
	
	function onComboAlterado() {
		
		var resposta = requisicaoAjax(this.combo.data('url'), {'municipio': this.inputMunicipio.val(), 'ano': this.combo.val()});
		resposta.done(onRequisicaoSucesso.bind(this));
	}
	
	function onRequisicaoSucesso(parametro) {
		
		if (parametro.codigo) {
			
			var perCrecheIntegral = ajustarValor(parametro.percapita.crecheIntegral);
			var perCrecheParcial = ajustarValor(parametro.percapita.crecheParcial);
			var perPreEscolaIntegral = ajustarValor(parametro.percapita.preEscolaIntegral);
			var perPreEscolaParcial = ajustarValor(parametro.percapita.preEscolaParcial);
			var perSerIniUrbana = ajustarValor(parametro.percapita.seriesIniciaisUrbana);
			var perSerIniRural = ajustarValor(parametro.percapita.seriesIniciaisRural);
			var perSerFinUrbana = ajustarValor(parametro.percapita.seriesFinaisUrbana);
			var perSerFinRural = ajustarValor(parametro.percapita.seriesFinaisRural);
			var perTempoIntegral = ajustarValor(parametro.percapita.tempoIntegral);
			var perAee = ajustarValor(parametro.percapita.aee);
			var perEducacaoEspecial = ajustarValor(parametro.percapita.educacaoEspecial); 
			var perEducacaoIndQui = ajustarValor(parametro.percapita.educacaoIndigQuil);
			var perEja = ajustarValor(parametro.percapita.eja);
			var perCrecheIntegralConv = ajustarValor(parametro.percapita.crecheIntegralConv);
			var perCrecheParcialConv = ajustarValor(parametro.percapita.crecheParcialConv);
			var perPreEscolaIntegralConv = ajustarValor(parametro.percapita.preEscolaIntegralConv);
			var perPreEscolaParcialConv = ajustarValor(parametro.percapita.preEscolaParcialConv);

			var creche = ajustarValor(parametro.numeroIdeal.creche);
			var preEscola = ajustarValor(parametro.numeroIdeal.preEscola);
			var anosIniciais = ajustarValor(parametro.numeroIdeal.anosIniciais);
			var anosFinais = ajustarValor(parametro.numeroIdeal.anosFinais);
			var educacaoEspecial = ajustarValor(parametro.numeroIdeal.educacaoEspecial);
			var eja = ajustarValor(parametro.numeroIdeal.eja);
			
			var qtdMeses = ajustarValor(parametro.folha.qtdMeses);
			var percentualInss = ajustarValor(parametro.folha.percentualInss);
			var percentualIpm = ajustarValor(parametro.folha.percentualIpm);
			
			this.inputPerCrecheIntegral.val(perCrecheIntegral);
			this.inputPerCrecheParcial.val(perCrecheParcial);
			this.inputPerPreEscolaIntegral.val(perPreEscolaIntegral);
			this.inputPerPreEscolaParcial.val(perPreEscolaParcial);
			this.inputPerSerIniUrbana.val(perSerIniUrbana);
			this.inputPerSerIniRural.val(perSerIniRural);
			this.inputPerSerFinUrbana.val(perSerFinUrbana);
			this.inputPerSerFinRural.val(perSerFinRural);
			this.inputPerTempoIntegral.val(perTempoIntegral);
			this.inputPerAee.val(perAee);
			this.inputPerEducacaoEspecial.val(perEducacaoEspecial);
			this.inputPerEducIndQui.val(perEducacaoIndQui);
			this.inputPerEja.val(perEja);
			this.inputPerCrecheIntegralConv.val(perCrecheIntegralConv);
			this.inputPerCrecheParcialConv.val(perCrecheParcialConv);
			this.inputPerPreEscolaIntegralConv.val(perPreEscolaIntegralConv);
			this.inputPerPreEscolaParcialConv.val(perPreEscolaParcialConv);
			
			this.inputCreche.val(creche);
			this.inputPreEscola.val(preEscola);
			this.inputAnosInicias.val(anosIniciais);
			this.inputAnosFinais.val(anosFinais);
			this.inputEducacaoEspecial.val(educacaoEspecial);
			this.inputEja.val(eja);
			
			this.inputQtdMeses.val(qtdMeses);
			this.inputPercentualInss.val(percentualInss);
			this.inputPercentualIpm.val(percentualIpm);
			
			this.inputCodigo.val(parametro.codigo);
			
		} else {
			this.inputPerCrecheIntegral.val('');
			this.inputPerCrecheParcial.val('');
			this.inputPerPreEscolaIntegral.val('');
			this.inputPerPreEscolaParcial.val('');
			this.inputPerSerIniUrbana.val('');
			this.inputPerSerIniRural.val('');
			this.inputPerSerFinUrbana.val('');
			this.inputPerSerFinRural.val('');
			this.inputPerTempoIntegral.val('');
			this.inputPerAee.val('');
			this.inputPerEducacaoEspecial.val('');
			this.inputPerEducIndQui.val('');
			this.inputPerEja.val('');
			this.inputPerCrecheIntegralConv.val('');
			this.inputPerCrecheParcialConv.val('');
			this.inputPerPreEscolaIntegralConv.val('');
			this.inputPerPreEscolaParcialConv.val('');
			
			this.inputCreche.val('');
			this.inputPreEscola.val('');
			this.inputAnosInicias.val('');
			this.inputAnosFinais.val('');
			this.inputEducacaoEspecial.val('');
			this.inputEja.val('');
			
			this.inputQtdMeses.val('');
			this.inputPercentualInss.val('');
			this.inputPercentualIpm.val('');
			
			this.inputCodigo.val('');
		}
		
	}
	
	function ajustarValor(valor) {
		return valor.toString().replace('.', ',');
	}
	
	return ComboAno;
}());

$(function(){
	
	var comboAno = new Parametro.ComboAno();
	comboAno.iniciar();
	
});