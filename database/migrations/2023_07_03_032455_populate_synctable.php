<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Vendedores','Vendedor','tgfven','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Vendedor","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODPARC = 268"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Financeiro','Financeiro','tgffin','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Financeiro","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.DHBAIXA IS NULL and this.RECDESP = 1 and this.NUFIN = 186"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Titulos','TipoTitulo','tgftit','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"TipoTitulo","includePresentationFields":"S","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODTIPTIT = "274""']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Produtos','Produto','tgfpro','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Produto","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODPROD = 7"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Planos de Contas','PlanoConta','tcbpla','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"PlanoConta","includePresentationFields":"S","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODCTACTB = 142 and this.CODEMP=201"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Vinculo Pedido-Nota','CompraVendavariosPedido','tgfvar','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"CompraVendavariosPedido","includePresentationFields":"S","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "(this.NUNOTA = 7438 )"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Cabecalho Notas','CabecalhoNota','tgfcab','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"CabecalhoNota","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','{"expression":{"$":"(this.DTNEG = ? )"},"parameter":{"$":"28/10/2016","type":"D"}}']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Items Notas','ItemNota','tgfite','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"ItemNota","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Naturezas','Natureza','tgfnat','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Natureza","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"this.CODNAT = 1030000 and this.CODNATPAI=1000000"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Metas','MetaAtual','tgmmet','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"MetaAtual","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODVEND = 22"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Estoque','Estoque','tgfest','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Estoque","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODPROD = 54"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Empresas','Empresa','tsiemp','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Empresa","includePresentationFields":"S","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODEMP = 200"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Parceiros','Parceiro','tgfpar','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Parceiro","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODPARC = 648 AND CLIENTE = "S""']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Centro de Custos','CentroResultado','tsicus','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"CentroResultado","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODCENCUS = 10000 and this.GRAU=1"']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Contas Bancarias','ContaBancaria','tsicta','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"ContaBancaria","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.CODPARC = "539""']);
      DB::insert('insert into synctable (name, name_entity, name_table, url, request_model, expression) values (?, ?, ?, ?, ?, ?)', ['Bancos','Banco','tsibco','https://api.sankhya.com.br/gateway/v1/mge/service.sbr?serviceName=CRUDServiceProvider.loadRecords&outputType=json','{"serviceName":"CRUDServiceProvider.loadRecords","requestBody":{"dataSet":{"rootEntity":"Banco","includePresentationFields":"N","offsetPage":"0","criteria":{},"entity":{"fieldset":{"list":"*"}}}}}','"$": "this.ABREVIATURA = "BB""']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      DB::delete('delete from synctable where name_table = ?', ['tgfven']);
      DB::delete('delete from synctable where name_table = ?', ['tgffin']);
      DB::delete('delete from synctable where name_table = ?', ['tgftit']);
      DB::delete('delete from synctable where name_table = ?', ['tgfpro']);
      DB::delete('delete from synctable where name_table = ?', ['tcbpla']);
      DB::delete('delete from synctable where name_table = ?', ['tgfvar']);
      DB::delete('delete from synctable where name_table = ?', ['tgfcab']);
      DB::delete('delete from synctable where name_table = ?', ['tgfite']);
      DB::delete('delete from synctable where name_table = ?', ['tgfnat']);
      DB::delete('delete from synctable where name_table = ?', ['tgmmet']);
      DB::delete('delete from synctable where name_table = ?', ['tgfest']);
      DB::delete('delete from synctable where name_table = ?', ['tsiemp']);
      DB::delete('delete from synctable where name_table = ?', ['tgfpar']);
      DB::delete('delete from synctable where name_table = ?', ['tsicus']);
      DB::delete('delete from synctable where name_table = ?', ['tsicta']);
      DB::delete('delete from synctable where name_table = ?', ['tsibco']);
    }
};
