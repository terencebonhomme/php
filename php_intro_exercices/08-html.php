<?php

function htmlList(string $name, array $list)
{
    echo "<h3>$name</h3>";

    if (count($list) == 0) {
        echo "<p>Aucun résultat</p>";
    } else {
        foreach ($list as $element) {
            echo "<li>$element</li>";
        }
    }
}

$names = ['Joe', 'Jack', 'Léa', 'Zoé', 'Néo'];
htmlList("Liste des personnes", $names);

// $names = [];
// htmlList("Liste des personnes", $names);
