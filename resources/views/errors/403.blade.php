<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Access Denied</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .error-container {
            text-align: center;
            padding: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.2);
            max-width: 500px;
        }
        .error-icon { font-size: 80px; margin-bottom: 20px; }
        .error-code { font-size: 72px; font-weight: 700; margin-bottom: 10px; }
        .error-message { font-size: 20px; margin-bottom: 10px; opacity: 0.9; }
        .error-detail { font-size: 14px; opacity: 0.7; margin-bottom: 30px; }
        .btn-back {
            display: inline-block;
            padding: 12px 30px;
            background: #fff;
            color: #764ba2;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 600;
            transition: transform 0.2s;
        }
        .btn-back:hover { transform: scale(1.05); }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-icon"><i class="bi bi-shield-lock"></i></div>
        <div class="error-code">403</div>
        <div class="error-message">Access Denied</div>
        <div class="error-detail">You do not have permission to access this page. Please contact your administrator.</div>
        <a href="{{ url()->previous() }}" class="btn-back"><i class="bi bi-arrow-left"></i> Go Back</a>
    </div>
</body>
</html>
