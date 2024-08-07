<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to QR Code Generator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f3f4f6;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .welcome-message {
            font-size: 2em;
            color: #333;
            animation: fadeIn 3s ease-in-out;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(-20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .start-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        .start-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div>
        <div class="welcome-message">Welcome to the Animated QR Code Generator</div>
        <a href="{{ route('qr.showForm') }}">
            <button class="start-button">Get Started</button>
        </a>
    </div>
</body>
</html>
