@extends('includes.principal')

@section('title', '- Fale Conosco')
@section('classe-pg', 'page-fale-conosco')
@section('javascript')
    <script type="text/javascript" src="js/estados_cidades.js"></script>
    <script type="text/javascript" src="js/filedrag.js"></script>
@stop
@section('conteudo')
    <div class="ctd-pg">
        <div id="icone-envelope"></div>
        <p><b>Estamos aqui para te ajudar.</b> Preencha o formulário abaixo<br/> e entraremos em contato.</p>
        <form action="" method="post" id="form-fale-conosco">
            <input type="text" name="nome" class="ipt-reset" placeholder="nome*"/>
            <input type="text" name="email" class="ipt-reset" placeholder="email*"/>
            <input type="text" name="telefone" class="ipt-reset" placeholder="telefone"/>
            <input type="text" name="empresa" class="ipt-reset" placeholder="empresa"/>
            <input type="file" name="arquivos[]"  multiple="multiple"  id="arquivos"/>
            <select name="estado" id="estados">
                <option value="">estado</option>
            </select>
            <select name="cidade" id="cidades">
                <option value="">cidade</option>
            </select>
            <div id="drop-arquivos-container" class="ipt-reset">
                <p id="arquivos-paragrafo-1">arquivos</p>
                <p id="arquivos-paragrafo-2">para adicionar arquivos
                    <br/>arraste e solte ou <b>clique aqui</b>
                    <br/>
                <span>formatos suportados: JPG, GIF, PNG, PDF</span></p>
            </div>
            <textarea name="mensagem" class="ipt-reset" id="fale-conosco-msg" placeholder="mensagem"></textarea>
            <br/>
            <span id="preenche-obrigatorio">*Preenchimento obrigatório</span>
            <br/>
            <input type="button" id="enviar-form"/>
        </form>
        <div id="marcador-maps"></div>
    </div>
    <div id="maps"></div>
@stop