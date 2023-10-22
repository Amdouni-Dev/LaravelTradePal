<!DOCTYPE html>
<html>
<head>
    <title>Réclamation PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo {
            max-width: 150px;
            margin-top: 20px;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }
        .claim-info {
            font-size: 16px;
            margin-top: 20px;
        }
        .claim-info p {
            margin: 10px 0;
        }
        h1 {
            page-break-before: always;
        }
    </style>

</head>
<body>
<div class="header">
    <div class="title" data-fscale="1">Trade<strong>Pal</strong><span class="haf-caps"></span></div>
</div>

<h1>Réclamation</h1>
<div class="claim-info">
    <p><strong>ID de la Réclamation:</strong> {{ $claim->id }}</p>
    <p><strong>Sujet:</strong> {{ $claim->subject }}</p>
    <p><strong>Description:</strong> {{ $claim->description }}</p>
    <p><strong>Date de la Réclamation:</strong> {{ $claim->claim_date }}</p>
    <p><strong>Statut:</strong> {{ $claim->status }}</p>
</div>

</body>
</html>
