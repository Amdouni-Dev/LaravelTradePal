<!DOCTYPE html>
<html>
<head>
    <title>Événement PDF</title>
    <style>
        /* Styles CSS pour personnaliser l'apparence du PDF */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
<h1>Détails de l'événement</h1>


<p><strong>Nom de l'événement :</strong> {{ $event->nom }}</p>
<p><strong>Description :</strong> {{ $event->description }}</p>
<p><strong>Catégorie :</strong> {{ $event->categorie }}</p>
<p><strong>Date :</strong> {{ $event->date }}</p>
<p><strong>Lieu :</strong> {{ $event->Lieu }}</p>
<p><strong>Heure de début :</strong> {{ $event->start }}</p>
@if (!is_null($event->end))
    <p><strong>Heure de fin :</strong> {{ $event->end }}</p>
@endif
<p>
    <strong>Couleur :</strong> <div style="width: 100%; height: 20px; display: inline-block; background-color: {{ $event->color }};"></div> </p>




<!-- Ajoutez d'autres informations sur l'événement ici -->
</body>
</html>
