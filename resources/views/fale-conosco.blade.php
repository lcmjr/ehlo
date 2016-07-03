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
        <?php if($success){?>
        <p><b>Sua mensagem foi enviada com sucesso. Em breve entraremos em contato!<br/>Obrigado!</b> </p>
        <?php }else{?>
        <p><b>Estamos aqui para te ajudar.</b> Preencha o formulário abaixo<br/> e entraremos em contato.</p>
        <form action="https://www.rdstation.com.br/api/1.2/conversions" method="POST" id="form-fale-conosco">
            <input type="hidden" name="redirect_to" value="http://ehlo.com.br/fale-conosco/success" />
            <input type="hidden" name="identificador" value="Contato Ehlo" />
            <input type="hidden" name="token_rdstation" value="4c9c0a9cbd2be95f457b1a3854748df5" />
            <input type="text" name="nome" class="ipt-reset" placeholder="nome*"/>
            <input type="text" name="email" class="ipt-reset" placeholder="email*"/>
            <input type="text" name="telefone" class="ipt-reset" placeholder="telefone"/>
            <input type="text" name="empresa" class="ipt-reset" placeholder="empresa"/>
            <!--<input type="file" name="arquivos[]"  multiple="multiple"  id="arquivos"/>-->
            <select name="estado" id="estados">
                <option value="">estado</option>
            </select>
            <!--<select name="cidade" id="cidades">
                <option value="">cidade</option>
            </select>
            <div id="drop-arquivos-container" class="ipt-reset">
                <p id="arquivos-paragrafo-1">arquivos</p>
                <p id="arquivos-paragrafo-2">para adicionar arquivos
                    <br/>arraste e solte ou <b>clique aqui</b>
                    <br/>
                <span>formatos suportados: JPG, GIF, PNG, PDF</span></p>
            </div>-->
            <textarea name="mensagem" class="ipt-reset" id="fale-conosco-msg" placeholder="mensagem"></textarea>
            <br/>
            <span id="preenche-obrigatorio">*Preenchimento obrigatório</span>
            <br/>
            <button id="enviar-form"></button>
        </form>
        <?php }?>
        <div id="marcador-maps"></div>
    </div>
    <div id="maps"></div>
@stop