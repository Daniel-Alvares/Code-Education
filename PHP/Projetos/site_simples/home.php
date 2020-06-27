<!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2><em>INCLUDE</em></h2>
        <p>Quando utilizamos require, e o arquivo não for encontrado o PHP retornará um Fatal error, já o include apenas um warning e a aplicação continuará rodando.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2><strong>Require</strong></h2>
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2><i>Date</i></h2>
        <p>A função date() do PHP recebe apenas um parâmetro: o formato de data. Por padrão, sempre será mostrada a data do momento atual da execução. date('d-m-Y')</p>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->



<hr class="featurette-divider">

    <div class="row featurette">
      <div>
        <h2 class="featurette-heading">O que usar require/include/require_once/include_once? </h2>
        <br>
        <p class="lead"><p>A diferença entre <code>include</code> e <code>require</code> é a forma como um erro é tratado. <code>require</code> produz um erro <code>E_COMPILE_ERROR</code>, o que encerra a execução do <em>script</em>. O <code>include</code> apenas produz um <em>warning</em> que pode ser &quot;abafado&quot; <a href="https://pt.stackoverflow.com/q/84178/101">com <code>@</code></a>.</p>
<p><code>include_once</code> tem a garantia que o arquivo não será incluído novamente se ele já foi incluído antes.</p>
<p><code>require_once</code> é análogo ao <code>include_once</code></p>
<p><code>require_once</code> é um <em>statement</em> portanto a sintaxe com parenteses pode confundir um pouco. No primeiro olhar pode parecer que é uma função. Por isso não aconselho seu uso, apesar de não trazer consequências prejudiciais ao programa.</p>
<h1>Diferença de aspas</h1>
<p>Quanto a usar aspas simples (ou apóstrofo) ou aspas duplas (vírgulas dobradas) neste caso vai de gosto. Particularmente prefiro, sempre que possível, usar aspas duplas e só usar a simples quando é necessário. Um exemplo é quando há aspas dupla dentro do texto da <em>string</em>.</p>
<p>No caso específico você não pode ter nenhuma das duas aspas em nome de arquivo ou <em>path</em> por isso a dupla sempre será adequada. Inclusive as aspas duplas permitem o uso de interpolação de variável. Ex.: <code>include &quot;$nome.php&quot;;</code> (ainda que nesse caso a sintaxe é desnecessária).</p>
<p>Só lembrando que o uso das aspas duplas obriga um duplo parser para tratar a interpolação. Portanto é mais eficiente usar aspas simples. Mas nada que seja muito significativo.</p>
<p>Eu não aconselharia usar o primeiro exemplo mostrado. Não há vantagem e causa a impressão que <code>myfile.php</code> é um símbolo do programa.</p>
<p>Como todas as formas são aceitas pelo PHP todas podem ser usadas, não importa a forma escolhida, o mais importante é ter padronização. Escolha uma forma e fique com ela.</p>
<p>Desconheço qualquer desvantagem extra além da legibilidade em qualquer forma.</p>
<p>Não sei se é óbvio mas você também pode usar também <code>require_once $minhavar;</code> se a variável obviamente contiver um <em>path</em> completo válido para um arquivo PHP.</p>
<p>O que pode diferenciar mais é o local onde um destes <em>statements</em> está sendo usado. Ele respeita o escopo. Mas isso já é outra questão.</p>
<p></p>

      </div>
    
    </div>
