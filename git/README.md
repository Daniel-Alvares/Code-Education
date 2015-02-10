1º Primeiro Projeto - GIT
-------------------------

Fazendo o primeiro push
-----------------------

* - Fazer um push em um repositório qualquer no Github.
* - Criar um arquivo README que deverá ser exibido automaticamente quando acessar o endereço de seu repositório.

> Utilizando Markdown, coloque as principais instruções para conseguir fazer seu push (desde o commit).

<p>Assim que terminar, coloque a URL de seu repositório na área de entrega de projetos, para fazermos a validação.</p>

___________________________________________________________________________________________________________________

### Passo a Passo
-----------------

#### Git Bash

#### - mkdir Projeto (criando um diretório).
#### - cd projeto (abrindo o Diretório).
#### - git init (iniciando o controle de versão).
#### - touch README.md (criando o Arquivo).
#### - vim README.md (Abrindo o arquivo com o editor VIM).
#### - Edição do texto / Salvar e Sair.
#### - git commit -a -m "Editando o Readme.md" (add e comitando o README.md.
#### - git remote add origin https://github.com/endereço.git
#### - git push origin master

___________________________________________________________________________________________________________________

Versionamento Semântico 0.0.0
-----------------------------

>Dado um número de versão MAJOR.MINOR.PATCH, incremente a:
>
>versão Maior(MAJOR): quando fizer mudanças incompatíveis na API,
>versão Menor(MINOR): quando adicionar funcionalidades mantendo compatibilidade, e
>versão de Correção(PATCH): quando corrigir falhas mantendo compatibilidade.
>Rótulos adicionais para pré-lançamento(pre-release) e metadados de construção(build) estão disponíveis como extensão ao formato MAJOR.MINOR.PATCH.

####Introdução

>No mundo de gerenciamento de software existe algo terrível conhecido como inferno das dependências ("dependency hell"). Quanto mais o sistema cresce, e mais pacotes são adicionados a ele, maior será a possibilidade de, um dia, você encontrar-se neste poço de desespero.
>
>Em sistemas com muitas dependências, lançar novos pacotes de versões pode se tornar rapidamente um pesadelo. Se as especificações das dependências são muito amarradas você corre o risco de um bloqueio de versão (A falta de capacidade de atualizar um pacote sem ter de liberar novas versões de cada pacote dependente). Se as dependências são vagamente especificadas, você irá inevitavelmente ser mordido pela 'promiscuidade da versão' (assumindo compatibilidade com futuras versões mais do que é razoável). O inferno das dependências é onde você está quando um bloqueio de versão e/ou promiscuidade de versão te impede de seguir em frente com seu projeto de maneira fácil e segura.
>
>Como uma solução para este problema proponho um conjunto simples de regras e requisitos que ditam como os números das versões são atribuídos e incrementados.
>
>Essas regras são baseadas em, mas não necessariamente limitadas às bem difundidas práticas comumente em uso tanto em software fechados como open-source. Para que este sistema funcione, primeiro você precisa declarar uma API pública. Isto pode consistir de documentação ou ser determinada pelo próprio código. De qualquer maneira, é importante que esta API seja clara e precisa. Depois de identificada a API pública, você comunica as mudanças com incrementos específicos para o seu número de versão. Considere o formato de versão X.Y.Z (Maior.Menor.Correção). Correção de falhas (bug fixes) que não afetam a API, incrementa a versão de Correção, adições/alterações compatíveis com as versões anteriores da API incrementa a versão Menor, e alterações incompatíveis com as versões anteriores da API incrementa a versão Maior.
>
>Eu chamo esse sistema de "Versionamento Semântico". Sob este esquema, os números de versão e a forma como eles mudam, transmite o significado do código subjacente e o que foi modificado de uma versão para a próxima.
>

Por que usar Versionamento Semântico?
-------------------------------------

>Esta não é uma ideia nova ou revolucionária. De fato, você provavelmente já faz algo próximo a isso. O problema é que "próximo" não é bom o bastante. Sem a aderência a algum tipo de especificação formal, os números de versão são essencialmente inúteis para gerenciamento de dependências. Dando um nome e definições claras às ideias acima, fica fácil comunicar suas intenções aos usuários de seu software. Uma vez que estas intenções estão claras, especificações de dependências flexíveis (mas não tão flexíveis) finalmente podem ser feitas.
>
>Um exemplo simples vai demonstrar como o Versionamento Semântico pode fazer do inferno de dependência uma coisa do passado. Considere uma biblioteca chamada "CaminhaoBombeiros". Ela requer um pacote versionado dinamicamente chamado "Escada". Quando CaminhaoBombeiros foi criado, Escada estava na versão 3.1.0. Como CaminhaoBombeiros utiliza algumas funcionalidades que foram inicialmente introduzidas na versão 3.1.0, você pode especificar, com segurança, a dependência da Escada como maior ou igual a 3.1.0 porém menor que 4.0.0. Agora, quando Escada versão 3.1.1 e 3.2.0 estiverem disponíveis, você poderá lança-los ao seu sistema de gerenciamento de pacote e saberá que eles serão compatíveis com os softwares dependentes existentes.
>
>Como um desenvolvedor responsável você irá, é claro, querer certificar-se que qualquer atualização no pacote funcionará como anunciado. O mundo real é um lugar bagunçado; não há nada que possamos fazer quanto a isso senão sermos vigilantes. O que você pode fazer é deixar o Versionamento Semântico lhe fornecer uma maneira sensata de lançar e atualizar pacotes sem precisar atualizar para novas versões de pacotes dependentes, salvando-lhe tempo e aborrecimento.
>
>Se tudo isto soa desejável, tudo que você precisar fazer para começar a usar Versionamento Semântico é declarar que você o esta usando e então, seguir as regras. Adicione um link para este website no seu README para que outros saibam as regras e possam beneficiar-se delas.
>

-fonte:http://semver.org/lang/pt-BR/-

___________________________________________________________________________________________________________________

2º Projeto - Git | Versionando o Arquivo README.md | v.0.1.1 
============================================================

Gerando 2 releases
------------------

>Nessa fase final você gerará um release da versão 0.1.0 de seu código; após isso, você fará mais alguns commits e também gerará um segundo release com a versão 0.1.1.