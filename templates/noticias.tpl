<section>
        {foreach from=$noticia item=posteado}
            <h2 class="h2-responsive font-weight-bold text-center mb-5 titulo-fondo py-3 w-100 text-white">{$posteado['titulo']}</h2>
                <article class="row">
                    <div class="col-lg-3">
                        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                          <img class="img-fluid" src="img/noticia.jpg" alt="Sample image">
                        </div>
                    </div>
                <div class="col-lg-9">
                    <h3 class="font-weight-bold mb-3"><strong>{$posteado['titulo']}</strong></h3>
                    <p>{$posteado['descripcion']}</p>
                    <p>{$posteado['fecha']}</p>
                    <a class="btn btn-info btn-md text-white">Leer Mas</a>
                </div>
                </article>      
            <hr class="my-5">
        {/foreach}
</section>