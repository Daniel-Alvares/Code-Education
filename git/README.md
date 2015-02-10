1� Primeiro Projeto - GIT
-------------------------

Fazendo o primeiro push
-----------------------

* - Fazer um push em um reposit�rio qualquer no Github.
* - Criar um arquivo README que dever� ser exibido automaticamente quando acessar o endere�o de seu reposit�rio.

> Utilizando Markdown, coloque as principais instru��es para conseguir fazer seu push (desde o commit).

<p>Assim que terminar, coloque a URL de seu reposit�rio na �rea de entrega de projetos, para fazermos a valida��o.</p>

___________________________________________________________________________________________________________________

### Passo a Passo
-----------------

#### Git Bash

#### - mkdir Projeto (criando um diret�rio).
#### - cd projeto (abrindo o Diret�rio).
#### - git init (iniciando o controle de vers�o).
#### - touch README.md (criando o Arquivo).
#### - vim README.md (Abrindo o arquivo com o editor VIM).
#### - Edi��o do texto / Salvar e Sair.
#### - git commit -a -m "Editando o Readme.md" (add e comitando o README.md.
#### - git remote add origin https://github.com/endere�o.git
#### - git push origin master

___________________________________________________________________________________________________________________

Versionamento Sem�ntico 0.0.0
-----------------------------

>Dado um n�mero de vers�o MAJOR.MINOR.PATCH, incremente a:
>
>vers�o Maior(MAJOR): quando fizer mudan�as incompat�veis na API,
>vers�o Menor(MINOR): quando adicionar funcionalidades mantendo compatibilidade, e
>vers�o de Corre��o(PATCH): quando corrigir falhas mantendo compatibilidade.
>R�tulos adicionais para pr�-lan�amento(pre-release) e metadados de constru��o(build) est�o dispon�veis como extens�o ao formato MAJOR.MINOR.PATCH.

####Introdu��o

>No mundo de gerenciamento de software existe algo terr�vel conhecido como inferno das depend�ncias ("dependency hell"). Quanto mais o sistema cresce, e mais pacotes s�o adicionados a ele, maior ser� a possibilidade de, um dia, voc� encontrar-se neste po�o de desespero.
>
>Em sistemas com muitas depend�ncias, lan�ar novos pacotes de vers�es pode se tornar rapidamente um pesadelo. Se as especifica��es das depend�ncias s�o muito amarradas voc� corre o risco de um bloqueio de vers�o (A falta de capacidade de atualizar um pacote sem ter de liberar novas vers�es de cada pacote dependente). Se as depend�ncias s�o vagamente especificadas, voc� ir� inevitavelmente ser mordido pela 'promiscuidade da vers�o' (assumindo compatibilidade com futuras vers�es mais do que � razo�vel). O inferno das depend�ncias � onde voc� est� quando um bloqueio de vers�o e/ou promiscuidade de vers�o te impede de seguir em frente com seu projeto de maneira f�cil e segura.
>
>Como uma solu��o para este problema proponho um conjunto simples de regras e requisitos que ditam como os n�meros das vers�es s�o atribu�dos e incrementados.
>
>Essas regras s�o baseadas em, mas n�o necessariamente limitadas �s bem difundidas pr�ticas comumente em uso tanto em software fechados como open-source. Para que este sistema funcione, primeiro voc� precisa declarar uma API p�blica. Isto pode consistir de documenta��o ou ser determinada pelo pr�prio c�digo. De qualquer maneira, � importante que esta API seja clara e precisa. Depois de identificada a API p�blica, voc� comunica as mudan�as com incrementos espec�ficos para o seu n�mero de vers�o. Considere o formato de vers�o X.Y.Z (Maior.Menor.Corre��o). Corre��o de falhas (bug fixes) que n�o afetam a API, incrementa a vers�o de Corre��o, adi��es/altera��es compat�veis com as vers�es anteriores da API incrementa a vers�o Menor, e altera��es incompat�veis com as vers�es anteriores da API incrementa a vers�o Maior.
>
>Eu chamo esse sistema de "Versionamento Sem�ntico". Sob este esquema, os n�meros de vers�o e a forma como eles mudam, transmite o significado do c�digo subjacente e o que foi modificado de uma vers�o para a pr�xima.
>

Por que usar Versionamento Sem�ntico?
-------------------------------------

>Esta n�o � uma ideia nova ou revolucion�ria. De fato, voc� provavelmente j� faz algo pr�ximo a isso. O problema � que "pr�ximo" n�o � bom o bastante. Sem a ader�ncia a algum tipo de especifica��o formal, os n�meros de vers�o s�o essencialmente in�teis para gerenciamento de depend�ncias. Dando um nome e defini��es claras �s ideias acima, fica f�cil comunicar suas inten��es aos usu�rios de seu software. Uma vez que estas inten��es est�o claras, especifica��es de depend�ncias flex�veis (mas n�o t�o flex�veis) finalmente podem ser feitas.
>
>Um exemplo simples vai demonstrar como o Versionamento Sem�ntico pode fazer do inferno de depend�ncia uma coisa do passado. Considere uma biblioteca chamada "CaminhaoBombeiros". Ela requer um pacote versionado dinamicamente chamado "Escada". Quando CaminhaoBombeiros foi criado, Escada estava na vers�o 3.1.0. Como CaminhaoBombeiros utiliza algumas funcionalidades que foram inicialmente introduzidas na vers�o 3.1.0, voc� pode especificar, com seguran�a, a depend�ncia da Escada como maior ou igual a 3.1.0 por�m menor que 4.0.0. Agora, quando Escada vers�o 3.1.1 e 3.2.0 estiverem dispon�veis, voc� poder� lan�a-los ao seu sistema de gerenciamento de pacote e saber� que eles ser�o compat�veis com os softwares dependentes existentes.
>
>Como um desenvolvedor respons�vel voc� ir�, � claro, querer certificar-se que qualquer atualiza��o no pacote funcionar� como anunciado. O mundo real � um lugar bagun�ado; n�o h� nada que possamos fazer quanto a isso sen�o sermos vigilantes. O que voc� pode fazer � deixar o Versionamento Sem�ntico lhe fornecer uma maneira sensata de lan�ar e atualizar pacotes sem precisar atualizar para novas vers�es de pacotes dependentes, salvando-lhe tempo e aborrecimento.
>
>Se tudo isto soa desej�vel, tudo que voc� precisar fazer para come�ar a usar Versionamento Sem�ntico � declarar que voc� o esta usando e ent�o, seguir as regras. Adicione um link para este website no seu README para que outros saibam as regras e possam beneficiar-se delas.
>

-fonte:http://semver.org/lang/pt-BR/-

___________________________________________________________________________________________________________________

2� Projeto - Git | Versionando o Arquivo README.md | v.0.1.1 
============================================================

Gerando 2 releases
------------------

>Nessa fase final voc� gerar� um release da vers�o 0.1.0 de seu c�digo; ap�s isso, voc� far� mais alguns commits e tamb�m gerar� um segundo release com a vers�o 0.1.1.