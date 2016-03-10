<?php
global $params;

$descriptions = array(
    'klassikerserien' => 'Klassikerserien har en speciell plats i mångas hjärtan, och är ett kärt inslag i svenska trädgårdar och täppor. Alla sprungna ur samma enkla idé: design, komfort och funktionalitet.

Med ursprung från 30-talets funktionalistiska tänk. Som stil har funkisen hängt med fram till idag, precis som möblerna i Klassikerserien. Den stilrena designen, och de bekväma möblerna skapar ro för både kroppen och själen. Slå dig ned och känn efter så förstår du.',

    'high-tech' => 'High-Tech-serien är ett resultat av ett av många samarbeten med möbeldesignern Nisse Strinning, mannen bakom bland annat Stringhyllan. Hård och industriell design blir en spännande kontrast till det sköna gunget stolen bjuder på. En möbel tänkt för uteplatser och balkonger som på senare tid, i takt med industridesignens popularitet, även fått en själklar plats inne i våra bostadshus.',

    'bryggeriserien' => 'Paris, Milano, Barcelona. Bryggeriserien är en klassiker som för tankarna till de stora metropolerna och trendiga caféer. Och samtidigt är de en del av den genuint nordiska sommaren och mentaliteten. Lika trendiga och rätt – oavsett stil och tid.',
);

$context = Timber::get_context();
$context['series_name'] = $params['series_name'];
$context['body_class'] = 'mobelserie ' . $params['series'];
$context['description'] = $descriptions[$params['series']];
Timber::render('mobelserie.twig', $context);
