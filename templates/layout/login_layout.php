<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Sistem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .card-login {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        .card-header {
            background: #fff;
            padding-top: 30px;
            border-bottom: none;
            text-align: center;
        }
        .btn-custom {
            background: #764ba2;
            color: white;
            padding: 10px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: #5a367f;
            color: white;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #764ba2;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <?= $this->Flash->render() ?>
        
        <?= $this->fetch('content') ?>
    </div>

</body>
</html>