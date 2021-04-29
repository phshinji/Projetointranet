<?php

// Configurações globais
require_once ('_config.php');





/***** Configurações da página *****/

// Título da página
$T['pageTitle'] = 'Página Modelo';

// CSS da página
$T['pageCSS'] = '/css/about.css';

// JavaScript da página
$T['pageJS'] = '';

// Cabeçalho da página
require_once('_header.php');

?>

<!-- Conteúdo principal -->
<article>
    <h1>Sobre nós</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatum rem aperiam expedita, fuga similique odit quas atque, vero accusamus officia ut beatae blanditiis quia qui nam eos dolorem eius?
    Vel maiores fugiat beatae eaque ullam, amet sapiente praesentium animi quia dolores odit sunt ipsam voluptates, reiciendis cum. Corrupti dolorem magni consequatur officiis, iste quod accusamus iusto temporibus dignissimos voluptas!</p>
                
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatum rem aperiam expedita, fuga similique odit quas atque, vero accusamus officia ut beatae blanditiis quia qui nam eos dolorem eius?
    Vel maiores fugiat beatae eaque ullam, amet sapiente praesentium animi quia dolores odit sunt ipsam voluptates, reiciendis cum. Corrupti dolorem magni consequatur officiis, iste quod accusamus iusto temporibus dignissimos voluptas!</p>

    <li><a href="/">Link 1</a></li>
    <li><a href="/">Link 2</a></li>
    <li><a href="/">Link 3</a></li>
    <li><a href="/">Link 4</a></li>

    <div class="logo">
        <a href="/"><img src="<?php echo $T['siteLogo'] ?>" alt="Intranet"></a>
    </div>

</article>

<!-- Barra lateral -->
<aside>
    <h3>Barra lateral</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <ul>
        <li><a href="/">Link 1</a></li>
        <li><a href="/">Link 2</a></li>
        <li><a href="/">Link 3</a></li>
        <li><a href="/">Link 4</a></li>
    </ul>
</aside>

<?php

// Rodapé da página
require_once ('_footer.php');
