<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class contato extends Controller
// {
//     function contato(){
//         echo 'Página de contato';
//     }

    
// }
route:: get ('/'[app\http\controllers\Principal::class 'Principal')  ->name(pagina-inicial);

route::prefix('publico')->group(function(){
    route :: get('/contato/{nome}')[app\http\controllers\Principal::class, 'contato']);
route :: get('/contato/{nome}/{sobrenome}')[app\http\controllers\Principal::class, 'contatoNomeCompleto']);
route :: get('/contato/{nome}/{sobrenome}/{assunto}')[app\http\controllers\Principal::class, 'contato']);
route :: get('/contato/{nome}/{sobrenome}/{assunto}/{email}/{telefone?}')[app\http\controllers\Principal::class, 'contato']);

})


route::Fallback(function(){
    echo'a rota acessada não existe';
    echo"<A href='" .route('pagina-inicial'). ">Voltar</a>";
});