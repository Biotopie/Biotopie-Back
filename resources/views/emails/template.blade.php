
Bonjour,

Pour l'estimation de votre devis le prix peut varier en fonction de la difficulté à mettre les modules en place au sein de votre entreprise.
Pour rappel vous avez choisi la formule {{ $formule }} le coût de l'accompagnement sera d'environ {{ $formulePrice }} avec comme module:

@foreach($moduleData as $module)
    @if($module['name'] == "Vivez bio")
        - {{ $module['name'] }}: {{ $module['price'] }}€ pour un employé
    @elseif($module['name'] == "Repas malin")
        - {{ $module['name'] }}: {{ $module['price'] }}€ par repas
    @elseif($module['name'] == "Energie consciente")
        - {{ $module['name'] }}: {{ $module['price'] }}€ par mois pour 36kVA
    @elseif($module['name'] == "Bureautique engagée")
        - {{ $module['name'] }}: {{ $module['price'] }}€
    @elseif($module['name'] == "Recyclage multimédia")
        - {{ $module['name'] }}: {{ $module['price'] }}€ (cela dépend du matériel acheté)
    @elseif($module['name'] == "Eco cartouche")
        - {{ $module['name'] }}: {{ $module['price'] }}€ par cartouche (cela dépend du modèle de cartouche)
    @elseif($module['name'] == "Vrac responsable")
        - {{ $module['name'] }}: {{ $module['price'] }}€ par employé
    @elseif($module['name'] == "Anti-obsolescence")
        - {{ $module['name'] }}: {{ $module['price'] }}€ (cela dépend du produit)
    @elseif($module['name'] == "Sobriété numérique")
        - {{ $module['name'] }}: {{ $module['price'] }}€ (cela dépend de la solution choisie)
    @else
        - {{ $module['name'] }}: {{ $module['price'] }}€ par mois
    @endif

@endforeach

Cordialement,
Biotopie
