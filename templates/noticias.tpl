<section class="text-center fondo-ultimas-noticias pr-3 pl-3 pb-3 pt-0 pt-3">
<h2 class="h2-responsive font-weight-bold mb-5 titulo-fondo py-3 w-100 text-white">Ultimas Noticias</h2>
        {foreach from=$noticia item=posteado}
            
                <article class="row">
                    <div class="col-lg-12">
                    <h3 class="font-weight-bold mb-3"><strong>{$posteado['titulo']}</strong></h3>
                        <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                        <img width=100%; src="./img/{$posteado['imagen']}.jpg" alt="">
                        </div>
                    </div>
                <div class="col-lg-12">
                    <p>{$posteado['descripcion']}</p>
                    <p>Fecha : {$posteado['fecha']}</p>
                    <a href="borrar/{$posteado['id_noticia']}" class="btn btn-danger btn-md text-white">Borrar</a>
                    <a href="editar/{$posteado['id_noticia']}" class="btn btn-info btn-md text-white">Editar</a>
                </div>
                </article>      
            <hr class="my-5">
        {/foreach}
</section>